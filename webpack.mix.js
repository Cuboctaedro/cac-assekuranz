let mix = require("laravel-mix")
let tailwindcss = require('tailwindcss')
let purgeCss = require('laravel-mix-purgecss')

mix.setPublicPath("assets")
mix.browserSync("cac-assekuranz.test")

mix
    .sourceMaps()
    .copyDirectory("src/images", "assets/images")
    .js("src/main.js", "assets")
    .postCss('src/main.css', 'assets', [
        require('postcss-import'),
        require('tailwindcss'),
        require('postcss-nested'),
        require('postcss-css-variables')
    ])
    .purgeCss({
        folders: ['site/templates', 'site/snippets'],
        whitelist: ['uniform__potty', 'honeypot-field', 'is_active', ],
        whitelistPatterns: [/^pswp/]
    })

    .version()
