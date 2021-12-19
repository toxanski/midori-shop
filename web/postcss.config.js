module.exports = {
    plugins: [
        require('cssnano')({
            preset: [
                'default',
                {
                    discardComments: {
                        removeAll: true
                    }
                }
            ]
        }),
        require('postcss-import'),
        require('tailwindcss'),
        require('autoprefixer'),
    ]
}