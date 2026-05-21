/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./pages/**/*.php",
    "./includes/**/*.php",
    "./components/**/*.php",
    "./assets/js/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        brand: {
          dark: '#1a1a1a',
          light: '#f4f4f4',
          accent: '#2B5821', // Premium Forest Green to match company branding theme
          'accent-light': '#86D773', // Vibrant mint-sage green for accessible dark background highlights
          gray: '#555555'
        }
      },
      fontFamily: {
        sans: ['Inter', 'sans-serif'],
        display: ['Outfit', 'sans-serif']
      },
      animation: {
        'fade-in': 'fadeIn 1s ease-out',
        'slide-up': 'slideUp 0.8s ease-out'
      },
      keyframes: {
        fadeIn: {
          '0%': { opacity: 0 },
          '100%': { opacity: 1 }
        },
        slideUp: {
          '0%': { transform: 'translateY(30px)', opacity: 0 },
          '100%': { transform: 'translateY(0)', opacity: 1 }
        }
      }
    },
  },
  plugins: [],
}
