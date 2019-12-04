var gulp = require("gulp");
var browserSync = require("browser-sync");
var reload = browserSync.reload;
var sass = require("gulp-sass");
var concat = require("gulp-concat");
sass.compiler = require("node-sass");

// browser-sync task for starting the server.
function browser_sync() {
  //watch files
  var files = ["./sass/*.scss", "./*.php"];

  //initialize browsersync
  browserSync.init(files, {
    //browsersync with a php server
    proxy: "http://one.wordpress.test",
    notify: true
  });
}

// Sass task, will run when any SCSS files change & BrowserSync
// will auto-update browsers
function sassToCss() {
  return gulp
    .src("sass/main.scss")
    .pipe(sass({ outputStyle: "compressed" }))
    .pipe(concat("main.css"))
    .pipe(gulp.dest("./css"));
}

// Default task to be run with `gulp`
gulp.task(
  "default",
  gulp.series(sassToCss, function() {
    gulp.watch("sass/**/*.scss", sassToCss);
  })
);
