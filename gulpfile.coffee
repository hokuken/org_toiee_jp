gulp    = require 'gulp'
sass    = require 'gulp-sass'
watch   = require 'gulp-watch'
concat  = require 'gulp-concat'
plumber = require 'gulp-plumber'
please  = require 'gulp-pleeease'

config =
  please:
    sourcemaps: true

gulp.task 'sass', ->
  gulp.src 'scss/main.scss'
    .pipe plumber()
    .pipe sass()
    .pipe concat 'main.css'
    .pipe please config.please
    .pipe gulp.dest './'

gulp.task 'watch', ->
  watch 'scss/**/*.scss', ->
    gulp.start ['sass']

gulp.task 'build', ->
  config.please.sourcemaps = false
  gulp.start ['sass']

gulp.task 'default', ->
  gulp.start ['sass', 'watch']
