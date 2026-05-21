# Universal Granite Lanka

Built with Vanilla PHP, Tailwind CSS (v3), and Alpine.js.

## Running Locally

1. Place this project in your local server directory (e.g., `C:\xampp\htdocs\universalgranite`).
2. Start Apache via XAMPP.
3. Visit `http://localhost/universalgranite/` in your browser.

## Modifying Styles (Tailwind)

If you change any Tailwind classes in the PHP files or edit `assets/css/index.css`:
1. Open a terminal in this directory.
2. Run `npm install` (first time only).
3. Run `npm run build` to update the CSS.

## Fixing URL Paths

If you move the project out of the `/universalgranite/` subfolder (e.g., to a live server root):
Run `node fix.js` to automatically update all absolute paths in the `.php` files.

## Pretty URLs

A `.htaccess` file is included. It automatically redirects `.php` URLs to clean URLs (e.g., `/about` instead of `/about.php`). 
To use this, simply write your `href` links without the `.php` extension.
