const path = require('path');
require('dotenv').config({ path: path.resolve(__dirname, '../../../.env') });

module.exports = {
  // Proxy your local WordPress URL from the .env file:
  proxy: process.env.WORDPRESS_URL,
  
  // Files to watch for changes:
  files: [
    "dist/css/*.css",           // Watch CSS in your theme's dist folder
    "dist/js/*.js",             // Watch JS files
    "**/*.php" // Watch PHP files in your theme
  ],
  
  // Optional settings:
  notify: false, // Disable the BrowserSync notifications in the browser
  open: false,   // Prevent BrowserSync from automatically opening a browser window
};
