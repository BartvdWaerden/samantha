// Load required plugins
var browserSync = require('browser-sync');
var functions   = require('../functions/functions');

// `gulp watch` - Use BrowserSync to proxy your dev server and synchronize code
// Generally you should be running `gulp` instead of `gulp watch`.
module.exports = function ($, gulp, manifest) {
    return function () {

        // Load main helper functions
        var path        = manifest.paths;
        var config      = manifest.config || {};

        browserSync({
            files: [path.dist + '**/*' , '{lib,templates,snippets}/**/*.php', '*.php'],
            proxy: config.devUrl,
            notify: false
        });

        gulp.watch([path.source + 'sketch/*.sketch'], ['sketch']);
        gulp.watch([path.source + 'styles/**/*'], ['scsslint', 'styles']);
        gulp.watch([path.source + 'scripts/**/*'], ['jshint', 'scripts']);
        gulp.watch([path.source + 'images/**/*'], ['svg2png', 'images']);
        gulp.watch([path.source + 'fonts/**/*'], ['fonts']);
        gulp.watch(['bower.json', 'source/manifest.json'], ['build']);

    };
};
