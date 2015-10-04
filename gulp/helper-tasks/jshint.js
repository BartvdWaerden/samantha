// Gulp JSHint task
// `gulp jshint` - Lints configuration JSON and project JS.
module.exports = function ($, gulp, manifest, settings) {
    return function () {

        var project     = manifest.getProjectGlobs();

        return gulp.src([
            //'bower.json', 'gulpfile.js'
        ].concat(project.js))
            .pipe($.changed('jshint'))
            .pipe($.jshint())
            .pipe($.jshint.reporter('jshint-stylish'))
            .pipe($.if(settings.failJshint, $.jshint.reporter('fail')));
        };
};
