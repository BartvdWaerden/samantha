// Load required plugins
var runSequence = require('run-sequence');

// Build task
// `gulp build` - Run all the build tasks but don't clean up beforehand.
// `gulp build --production` - To compile for production run
module.exports = function () {
    return function (callback) {

        // Run a sequence of tasks
        runSequence(
            'clean',
            'jshint',
            'scripts',
            'scsslint',
            'styles',
            'sketch',
            'images',
            'svg2png',
            'modernizr',
            'fonts',
        callback
        );

    };
};
