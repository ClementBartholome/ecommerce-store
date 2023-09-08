/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js,php}"],
  theme: {
    extend: {
      backgroundImage: {
        "home-bg": "url(./images/home-bg.png)",
      },
    },
  },
};
