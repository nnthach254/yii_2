/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './yii_2/views/**/*.php',
    './yii_2/web/js/**/*.js', 
    './yii_2/web/css/tailwind.css',
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#3490dc',
        'secondary': '#ffed4a',
        'danger': '#e3342f',
      },
    },
  },
  plugins: [],
}

