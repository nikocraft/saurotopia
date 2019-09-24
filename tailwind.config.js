module.exports = {
    theme: {
        extend: {}
    },
    screens: {
        'mdxl': '992px',
    },
    variants: {},
    plugins: [
        function ({ addUtilities }) {
            const newUtilities = {
                '.rounded-md': {
                    borderRadius: '0.25rem',
                },
                '.min-w-80': {
                    minWidth: '80px',
                },
                '.min-w-60': {
                    minWidth: '60px',
                },
                '.w-70': {
                    width: '70%',
                },
                '.w-30': {
                    width: '30%',
                },
                '.bg-sidebar': {
                    backgroundColor: '#27282B',
                },
                '.max-w-sidebar': {
                    maxWidth: '415px',
                },
                '.w-62': {
                    width: '62%',
                },
                '.text-slogan': {
                    color: 'rgb(156, 148, 148)',
                },
                '.border-sidebar-1': {
                    borderColor: 'rgb(26, 26, 26)',
                },
                '.border-sidebar-2': {
                    borderColor: 'rgb(59, 59, 59)',
                },
                '.bg-sidebar-tag': {
                    backgroundColor: 'rgba(88, 88, 88, 0.103)',
                },
                '.bg-body': {
                    backgroundColor: '#6D9CB0',
                },
                '.text-size-1': {
                    fontSize: '1rem',
                },
                '.bg-sidebar-search': {
                    backgroundColor: '#2D2D2F',
                },
                '.ml-13p': {
                    marginLeft: '13%',
                },
                '.max-w-body': {
                    maxWidth: '1920px',
                },
            }

            addUtilities(newUtilities, ['responsive', 'hover'])
        }
    ]
}
