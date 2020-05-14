module.exports = {
  theme: {
    extend: {
        fontFamily: {
            sans: [
                'Inter var',
                '-apple-system',
                'BlinkMacSystemFont',
                '"Segoe UI"',
                'Roboto',
                '"Helvetica Neue"',
                'Arial',
                '"Noto Sans"',
                'sans-serif',
                '"Apple Color Emoji"',
                '"Segoe UI Emoji"',
                '"Segoe UI Symbol"',
                '"Noto Color Emoji"',
            ],
        },
        colors: {
            'laravel': '#FA4F3A',
        },
    },
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui')({
        layout: 'sidebar',
    }),
    require('@tailwindcss/custom-forms')
  ]
}
