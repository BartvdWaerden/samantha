// Gulp svg2png task
// `gulp svg2png` - Genreate png images from all SVG images
module.exports = function ($, gulp, manifest) {
    return function () {

        var globs       = manifest.globs;
        var path        = manifest.paths;

        var stream = gulp.src(globs.images + '*.svg')

        // Generate PNG files from all SVG files
        .pipe($.changed('svg2png'))
        .pipe($.svg2png())
        .pipe(gulp.dest(path.dist + 'images'));

        return stream;

    };
};
