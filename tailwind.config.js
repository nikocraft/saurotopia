module.exports = {
    theme: {
        extend: {}
    },
    screens: {
        'mdxl': '992px',
    },
    variants: {},
    corePlugins: {
        container: false
    },
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
                '.border-sidebar-1': {
                    borderColor: 'rgb(26, 26, 26)',
                },
                '.border-sidebar-2': {
                    borderColor: 'rgb(59, 59, 59)',
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
