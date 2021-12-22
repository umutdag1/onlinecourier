'use strict'

const Plugins = [
  // AdminLTE Dist
  {
    from: 'dist/css/',
    to: 'docs/assets/css/'
  },
  {
    from: 'dist/css/',
    to: 'docs/assets/css/'
  },
  // jQuery
  {
    from: 'node_modules/jquery/dist/',
    to: 'docs/assets/plugins/jquery/'
  },
  // Popper
  {
    from: 'node_modules/popper.css/dist/',
    to: 'docs/assets/plugins/popper/'
  },
  // Bootstrap
  {
    from: 'node_modules/bootstrap/dist/css/',
    to: 'docs/assets/plugins/bootstrap/css/'
  },
  // Font Awesome
  {
    from: 'node_modules/@fortawesome/fontawesome-free/css/',
    to: 'docs/assets/plugins/fontawesome-free/css/'
  },
  {
    from: 'node_modules/@fortawesome/fontawesome-free/webfonts/',
    to: 'docs/assets/plugins/fontawesome-free/webfonts/'
  },
  // overlayScrollbars
  {
    from: 'node_modules/overlayscrollbars/css/',
    to: 'docs/assets/plugins/overlayScrollbars/css/'
  },
  {
    from: 'node_modules/overlayscrollbars/css/',
    to: 'docs/assets/plugins/overlayScrollbars/css/'
  }
]

module.exports = Plugins
