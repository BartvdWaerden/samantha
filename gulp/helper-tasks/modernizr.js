// Gulp Modernizr task
// `gulp modernizr` - Builds a custom modernizr file
module.exports = function ($, gulp, manifest, settings) {
    return function () {

        var globs       = manifest.globs;
        var path        = manifest.paths;

        gulp.src([path.source + 'styles/**/*.scss', path.source + 'scripts/**/*.js'])

            // Only run these functions with --production flag
            .pipe( $.if(settings.customModernizr, $.modernizr('modernizr-custom.js', {
                        "cache" : true,
                        "options" : [
                            "setClasses",
                            "addTest",
                            "html5printshiv",
                            "testProp",
                            "fnBind"
                        ],
                        // Force specifick tests
                        "tests" : [

                        ],
                        "parseFiles" : true
                    })
                )
            )
            .pipe( $.if(settings.customModernizr, $.uglify() ) )
            .pipe( $.if(settings.customModernizr, gulp.dest(path.dist + 'scripts') ) )
    };
};
