<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    
    // Check if fields exist
    $name = isset($_POST['name']) ? trim($_POST['name']) : '';
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $subject = isset($_POST['subject']) ? trim($_POST['subject']) : '';
    $message = isset($_POST['message']) ? trim($_POST['message']) : '';
    
    if (empty($name) || empty($email) || empty($message)) {
        echo json_encode(['success' => false, 'error' => 'Please fill in all required fields.']);
        exit;
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['success' => false, 'error' => 'Please enter a valid email address.']);
        exit;
    }
    
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../config.php';
    
    $mail = new PHPMailer(true);
    
    try {
        // SMTP Settings
        $mail->isSMTP();
        $mail->Host       = SMTP_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = SMTP_USER;
        $mail->Password   = SMTP_PASS;
        
        $encryption = strtolower(SMTP_ENCRYPTION);
        if ($encryption === 'tls') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        } elseif ($encryption === 'ssl') {
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        } else {
            $mail->SMTPSecure = '';
        }
        $mail->Port       = SMTP_PORT;
        
        // Recipients
        $mail->setFrom(SMTP_USER, 'Universal Contact Form');
        $mail->addAddress(SMTP_RECEIVER);
        $mail->addReplyTo($email, $name);
        
        // Resolve Logo URL dynamically to avoid SMTP email timeouts / encoding bloat
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || (isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == 443)) ? "https://" : "http://";
        $domainName = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '';
        if (!empty($domainName) && $domainName !== 'localhost' && $domainName !== '127.0.0.1') {
            $currentDir = dirname($_SERVER['PHP_SELF']);
            $baseDir = str_replace('/pages', '', $currentDir);
            $logoSrc = $protocol . $domainName . $baseDir . '/assets/images/logo.png';
        } else {
            $logoSrc = 'https://universalgranite.lk/assets/images/logo.png'; // Fallback to live URL for local development tests
        }
        
        // Content
        $mail->isHTML(true);
        $mail->Subject = !empty($subject) ? $subject : 'New Inquiry from Contact Form';
        
        // HTML Body with premium styling matching site aesthetics
        $mail->Body    = '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>New Inquiry - Universal Marble & Granite</title>
            <style>
                body {
                    background-color: #f4f4f4;
                    font-family: "Inter", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
                    margin: 0;
                    padding: 0;
                    -webkit-font-smoothing: antialiased;
                }
                .container {
                    max-width: 600px;
                    margin: 40px auto;
                    background-color: #ffffff;
                    border-radius: 8px;
                    overflow: hidden;
                    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
                }
                .header {
                    background-color: #1a1a1a;
                    padding: 24px 30px;
                    text-align: center;
                    border-bottom: 4px solid #2B5821;
                }
                .logo-container {
                    display: inline-block;
                    vertical-align: middle;
                }
                .logo-img {
                    height: 40px;
                    width: auto;
                    vertical-align: middle;
                    margin-right: 12px;
                }
                .brand-name {
                    color: #ffffff;
                    font-family: "Outfit", "Inter", sans-serif;
                    font-size: 20px;
                    font-weight: 700;
                    letter-spacing: 1px;
                    text-transform: uppercase;
                    vertical-align: middle;
                    display: inline-block;
                }
                .brand-accent {
                    color: #86D773;
                }
                .content {
                    padding: 40px 30px;
                }
                .section-title {
                    font-family: "Outfit", "Inter", sans-serif;
                    font-size: 18px;
                    font-weight: 700;
                    color: #1a1a1a;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    border-left: 4px solid #2B5821;
                    padding-left: 12px;
                    margin-top: 0;
                    margin-bottom: 25px;
                }
                .info-box {
                    background-color: #f9f9f9;
                    border: 1px solid #e5e5e5;
                    border-radius: 6px;
                    padding: 20px;
                    margin-bottom: 25px;
                }
                .info-row {
                    margin-bottom: 12px;
                    display: table;
                    width: 100%;
                }
                .info-row:last-child {
                    margin-bottom: 0;
                }
                .info-label {
                    font-size: 12px;
                    font-weight: 700;
                    color: #888888;
                    text-transform: uppercase;
                    letter-spacing: 0.5px;
                    width: 100px;
                    display: table-cell;
                    vertical-align: top;
                }
                .info-value {
                    font-size: 14px;
                    color: #1a1a1a;
                    display: table-cell;
                    vertical-align: top;
                    font-weight: 500;
                }
                .message-box {
                    background-color: #ffffff;
                    border-left: 4px solid #e5e5e5;
                    padding: 15px 20px;
                    margin-top: 25px;
                    font-style: italic;
                    color: #555555;
                    line-height: 1.6;
                    font-size: 14.5px;
                }
                .footer {
                    background-color: #1a1a1a;
                    padding: 25px 30px;
                    text-align: center;
                    color: #888888;
                    font-size: 12px;
                    border-top: 1px solid #2a2a2a;
                }
                .footer p {
                    margin: 5px 0;
                }
                .footer a {
                    color: #86D773;
                    text-decoration: none;
                }
                .footer-meta {
                    margin-top: 15px !important;
                    font-size: 10px;
                    color: #555555;
                    border-top: 1px solid #2a2a2a;
                    padding-top: 15px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <div class="header">
                    <div class="logo-container">
                        <img src="' . $logoSrc . '" alt="Universal Logo" class="logo-img">
                        <span class="brand-name">Universal <span class="brand-accent">Marble & Granite</span></span>
                    </div>
                </div>
                <div class="content">
                    <h3 class="section-title">New Website Inquiry</h3>
                    <p style="font-size: 14px; color: #555555; line-height: 1.5; margin-bottom: 25px;">
                        A client has submitted a new inquiry through the contact form on your website. Below are the submission details:
                    </p>
                    
                    <div class="info-box">
                        <div class="info-row">
                            <div class="info-label">Name</div>
                            <div class="info-value">' . htmlspecialchars($name) . '</div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Email</div>
                            <div class="info-value"><a href="mailto:' . htmlspecialchars($email) . '" style="color: #2B5821; text-decoration: underline;">' . htmlspecialchars($email) . '</a></div>
                        </div>
                        <div class="info-row">
                            <div class="info-label">Subject</div>
                            <div class="info-value">' . (!empty($subject) ? htmlspecialchars($subject) : 'General Inquiry') . '</div>
                        </div>
                    </div>
                    
                    <h4 style="font-family: \'Outfit\', \'Inter\', sans-serif; font-size: 14px; font-weight: 700; color: #1a1a1a; text-transform: uppercase; margin-bottom: 10px; letter-spacing: 0.5px;">Message Details</h4>
                    <div class="message-box">
                        ' . nl2br(htmlspecialchars($message)) . '
                    </div>
                </div>
                <div class="footer">
                    <p style="font-weight: 700; color: #ffffff; margin-bottom: 10px;">Universal Marble & Granite (Pvt) Ltd</p>
                    <p>No. 267/1, Nawala Road, Nawala, Sri Lanka</p>
                    <p>Hotline: <a href="tel:+94764423858">+94 76 442 3858</a> | Email: <a href="mailto:info@universalgranite.lk">info@universalgranite.lk</a></p>
                    
                    <div class="footer-meta">
                        This inquiry was securely processed and sent via the Universal Marble & Granite website contact system.
                    </div>
                </div>
            </div>
        </body>
        </html>
        ';
        
        // Plain text body
        $mail->AltBody = "
==================================================
NEW WEBSITE INQUIRY - UNIVERSAL MARBLE & GRANITE
==================================================

A client has submitted a new inquiry through the website:

[Sender Details]
Name:    {$name}
Email:   {$email}
Subject: " . (!empty($subject) ? $subject : 'General Inquiry') . "

[Message Details]
--------------------------------------------------
{$message}
--------------------------------------------------

This email is securely processed and dispatched from your website contact portal.
Universal Marble & Granite (Pvt) Ltd, Nawala, Sri Lanka.
        ";
        
        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Thank you for your message. We will get back to you shortly.']);
        exit;
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'error' => 'Your message could not be sent. Mailer Error: ' . $mail->ErrorInfo]);
        exit;
    }
}

$pageTitle = 'Contact Us';
include '../includes/header.php';
?>

<!-- Page Header -->
<section class="relative pt-28 pb-16 lg:pt-36 lg:pb-20 bg-brand-dark overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,_var(--tw-gradient-stops))] from-neutral-900 via-brand-dark to-black opacity-95 z-0"></div>
    <div class="container-custom relative z-10 text-center space-y-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-display font-bold text-white uppercase tracking-wider animate-slide-up">
            Contact Us
        </h1>
        <p class="text-gray-400 font-sans max-w-2xl mx-auto text-sm md:text-base leading-relaxed tracking-wide opacity-90">
            Get in touch with our experts to discuss your architectural requirements.
        </p>
    </div>
</section>

<section class="section-padding bg-brand-light">
    <div class="container-custom">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
            
            <!-- Contact Information & Map (Left Column) -->
            <div class="lg:col-span-5 space-y-8">
                <div>
                    <h2 class="text-3xl font-display font-bold text-brand-dark mb-2">Get In Touch</h2>
                    <p class="text-brand-gray text-sm font-sans mb-8">Reach out to our main support lines for general inquiries and material availability.</p>
                </div>
                
                <div class="space-y-6">
                    <!-- Address -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-brand-accent">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold font-display uppercase tracking-wider text-brand-dark mb-1">Address</h4>
                            <p class="text-brand-gray text-sm leading-relaxed">
                                No.267/1,<br>
                                Nawala Road,<br>
                                Nawala, Sri Lanka.
                            </p>
                        </div>
                    </div>
                    
                    <!-- Telephone -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-brand-accent">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold font-display uppercase tracking-wider text-brand-dark mb-1">Telephone</h4>
                            <p class="text-brand-gray text-sm leading-relaxed">
                                011 2 806 603<br>
                                011 2 810 866
                            </p>
                        </div>
                    </div>

                    <!-- Hotlines -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-brand-accent">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" /></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold font-display uppercase tracking-wider text-brand-dark mb-1">Hotlines</h4>
                            <div class="text-brand-gray text-sm space-y-1">
                                <span class="block">Nawala – 0764423858</span>
                                <span class="block">Nugegoda – 0764423859</span>
                                <span class="block">Jaffna – 0764423860</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="flex-shrink-0 w-10 h-10 bg-white rounded-full flex items-center justify-center shadow-md text-brand-accent">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-sm font-bold font-display uppercase tracking-wider text-brand-dark mb-1">Email</h4>
                            <p class="text-brand-gray text-sm leading-relaxed">
                                <a href="mailto:info@universalgranite.lk" class="hover:text-brand-accent transition-colors block">info@universalgranite.lk</a>
                                <a href="mailto:unisrilanka@ymail.com" class="hover:text-brand-accent transition-colors block">unisrilanka@ymail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Embedded Google Map with double thin borders -->
                <div class="w-full h-72 rounded-sm shadow-md overflow-hidden border border-neutral-200/60 p-1 bg-white">
                    <div class="w-full h-full overflow-hidden border border-neutral-100/40 relative">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.0427068677086!2d79.8869804!3d6.8854881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a3a674abb75%3A0x4f1d55420383cef1!2sUniversal%20Marble%20%26%20Granite%20(Pvt)%20Ltd%20-%20Nawala!5e0!3m2!1sen!2slk!4v1779341077141!5m2!1sen!2slk" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form (Right Column) -->
            <div class="lg:col-span-7 bg-white p-8 md:p-12 shadow-xl rounded-sm border border-neutral-100 border-t-4 border-t-brand-accent h-fit">
                <h3 class="text-2xl font-display font-bold text-brand-dark mb-6">Send us a Message</h3>
                
                <form action="#" method="POST" class="space-y-6" x-data="{ 
                    name: '',
                    email: '',
                    subject: '',
                    message: '',
                    sending: false,
                    successMessage: '',
                    errorMessage: '',
                    async submitForm(e) {
                        e.preventDefault();
                        if (this.sending) return;
                        
                        this.sending = true;
                        this.successMessage = '';
                        this.errorMessage = '';
                        
                        try {
                            const formData = new FormData();
                            formData.append('name', this.name);
                            formData.append('email', this.email);
                            formData.append('subject', this.subject);
                            formData.append('message', this.message);
                            
                            const response = await fetch(window.location.href, {
                                method: 'POST',
                                body: formData
                            });
                            
                            const result = await response.json();
                            if (result.success) {
                                this.successMessage = result.message;
                                // Clear fields on success
                                this.name = '';
                                this.email = '';
                                this.subject = '';
                                this.message = '';
                            } else {
                                this.errorMessage = result.error;
                            }
                        } catch (err) {
                            this.errorMessage = 'An unexpected error occurred. Please try again later.';
                        } finally {
                            this.sending = false;
                        }
                    }
                }" @submit="submitForm">
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-xs font-semibold uppercase tracking-wider text-brand-gray mb-2">Your Name *</label>
                            <input type="text" id="name" x-model="name" required :disabled="sending" class="w-full px-4 py-3 bg-neutral-50/50 border border-neutral-200 focus:outline-none focus:border-brand-accent focus:ring-2 focus:ring-brand-accent-light/35 rounded-sm transition-all duration-300 text-sm text-brand-dark disabled:opacity-50 disabled:cursor-not-allowed">
                        </div>
                        <div>
                            <label for="email" class="block text-xs font-semibold uppercase tracking-wider text-brand-gray mb-2">Your Email *</label>
                            <input type="email" id="email" x-model="email" required :disabled="sending" class="w-full px-4 py-3 bg-neutral-50/50 border border-neutral-200 focus:outline-none focus:border-brand-accent focus:ring-2 focus:ring-brand-accent-light/35 rounded-sm transition-all duration-300 text-sm text-brand-dark disabled:opacity-50 disabled:cursor-not-allowed">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-xs font-semibold uppercase tracking-wider text-brand-gray mb-2">Subject</label>
                        <input type="text" id="subject" x-model="subject" :disabled="sending" class="w-full px-4 py-3 bg-neutral-50/50 border border-neutral-200 focus:outline-none focus:border-brand-accent focus:ring-2 focus:ring-brand-accent-light/35 rounded-sm transition-all duration-300 text-sm text-brand-dark disabled:opacity-50 disabled:cursor-not-allowed">
                    </div>
                    
                    <div>
                        <label for="message" class="block text-xs font-semibold uppercase tracking-wider text-brand-gray mb-2">Your Message *</label>
                        <textarea id="message" rows="5" x-model="message" required :disabled="sending" class="w-full px-4 py-3 bg-neutral-50/50 border border-neutral-200 focus:outline-none focus:border-brand-accent focus:ring-2 focus:ring-brand-accent-light/35 rounded-sm transition-all duration-300 text-sm text-brand-dark resize-none disabled:opacity-50 disabled:cursor-not-allowed"></textarea>
                    </div>
                    
                    <button type="submit" :disabled="sending" class="w-full btn-primary py-3.5 focus:outline-none focus:ring-2 focus:ring-brand-accent-light/40 disabled:opacity-75 disabled:cursor-wait flex items-center justify-center gap-2">
                        <svg x-show="sending" style="display:none;" class="animate-spin h-5 w-5 text-white" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span x-show="!sending">Send Message</span>
                        <span x-show="sending" style="display:none;">Sending...</span>
                    </button>
                    
                    <!-- Banners -->
                    <div x-show="successMessage" style="display:none;" class="p-4 mt-4 bg-green-50 border border-green-200 text-green-700 text-sm rounded animate-fade-in" x-text="successMessage"></div>
                    <div x-show="errorMessage" style="display:none;" class="p-4 mt-4 bg-red-50 border border-red-200 text-red-700 text-sm rounded animate-fade-in" x-text="errorMessage"></div>
                </form>
            </div>
            
        </div>
    </div>
</section>

<!-- Locations and Showrooms Info Grid -->
<section class="py-16 md:py-24 bg-white border-t border-gray-100">
    <div class="container-custom">
        <div class="text-center max-w-2xl mx-auto mb-16">
            <span class="text-brand-accent font-display font-medium tracking-[0.2em] uppercase text-xs">Our Network</span>
            <h3 class="text-3xl font-display font-bold text-brand-dark uppercase tracking-wider mt-2">Locations & Facilities</h3>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- 1. Head Office -->
            <div class="relative bg-white p-8 rounded-sm border border-neutral-100 shadow-sm hover:shadow-xl hover:border-brand-accent/20 transition-all duration-500 group hover:-translate-y-1 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                <h4 class="font-display font-bold text-xl text-brand-dark mb-6 group-hover:text-brand-accent transition-colors duration-300">Head Office</h4>
                <div class="space-y-4 text-sm text-brand-gray">
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Address</span>
                        <p class="leading-relaxed">No 267/1, Nawala Road, Nawala, Sri Lanka.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Telephone</span>
                            <p>0112 806 603</p>
                        </div>
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Fax</span>
                            <p>0112 805 052</p>
                        </div>
                    </div>
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Mobile</span>
                        <p>0764 423 858</p>
                    </div>
                </div>
            </div>

            <!-- 2. Showroom - Nugegoda -->
            <div class="relative bg-white p-8 rounded-sm border border-neutral-100 shadow-sm hover:shadow-xl hover:border-brand-accent/20 transition-all duration-500 group hover:-translate-y-1 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                <h4 class="font-display font-bold text-xl text-brand-dark mb-6 group-hover:text-brand-accent transition-colors duration-300">Showroom - Nugegoda</h4>
                <div class="space-y-4 text-sm text-brand-gray">
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Address</span>
                        <p class="leading-relaxed">55C, Nawala Road, Nugegoda.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Telephone</span>
                            <p>0112 810 866</p>
                        </div>
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Mobile</span>
                            <p>0764 423 859</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Showroom - Wattala -->
            <div class="relative bg-white p-8 rounded-sm border border-neutral-100 shadow-sm hover:shadow-xl hover:border-brand-accent/20 transition-all duration-500 group hover:-translate-y-1 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                <h4 class="font-display font-bold text-xl text-brand-dark mb-6 group-hover:text-brand-accent transition-colors duration-300">Showroom - Wattala</h4>
                <div class="space-y-4 text-sm text-brand-gray">
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Address</span>
                        <p class="leading-relaxed">648, Negombo Road, Mabole, Wattala.</p>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Telephone</span>
                            <p>0112 981 905</p>
                        </div>
                        <div>
                            <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Fax</span>
                            <p>0112 981 905</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Showroom - Jaffna -->
            <div class="relative bg-white p-8 rounded-sm border border-neutral-100 shadow-sm hover:shadow-xl hover:border-brand-accent/20 transition-all duration-500 group hover:-translate-y-1 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                <h4 class="font-display font-bold text-xl text-brand-dark mb-6 group-hover:text-brand-accent transition-colors duration-300">Showroom - Jaffna</h4>
                <div class="space-y-4 text-sm text-brand-gray">
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Address</span>
                        <p class="leading-relaxed">A9 Road, Kaithadi , Jaffna.</p>
                    </div>
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Mobile</span>
                        <p>0764 423 860</p>
                    </div>
                </div>
            </div>

            <!-- 5. Factory -->
            <div class="relative bg-white p-8 rounded-sm border border-neutral-100 shadow-sm hover:shadow-xl hover:border-brand-accent/20 transition-all duration-500 group hover:-translate-y-1 overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-[3px] bg-brand-accent transform -translate-x-full group-hover:translate-x-0 transition-transform duration-500"></div>
                <h4 class="font-display font-bold text-xl text-brand-dark mb-6 group-hover:text-brand-accent transition-colors duration-300">Factory</h4>
                <div class="space-y-4 text-sm text-brand-gray">
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Address</span>
                        <p class="leading-relaxed">469/C/6, Kadawala Road, Uswatakeiyawa.</p>
                    </div>
                    <div>
                        <span class="font-bold block text-brand-dark text-xs uppercase tracking-wider mb-1">Telephone</span>
                        <p>0112 241 774</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
