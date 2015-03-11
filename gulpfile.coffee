gulp = require 'gulp'
sass = require 'gulp-sass'
watch = require 'gulp-watch'
concat = require 'gulp-concat'
minify = require 'gulp-minify-css'

gulp.task 'sass', ->
  gulp.src 'scss/main.scss'
    .pipe sass()
    .pipe concat 'main.css'
    .pipe minify()
    .pipe gulp.dest './'

gulp.task 'watch', ->
  watch 'scss/**/*.scss', ->
    gulp.start ['sass']

gulp.task 'default', ->
  gulp.start ['sass', 'watch']
