// Load Grunt
module.exports = function (grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Tasks
    sass: { // Begin Sass Plugin
      dist: {
        options: {
          sourcemap: 'none'
        },
        files: [{
          expand: true,
          cwd: 'css',
          src: '**/style.scss',
          dest: '',
          ext: '.css'
      }]
      }
    },
    postcss: { // Begin Post CSS Plugin
      options: {
        map: false,
        processors: [
      require('autoprefixer')({
            browsers: ['last 2 versions']
          })
    ]
      },
      dist: {
        src: 'style.css'
      }
    },
    cssmin: { // Begin CSS Minify Plugin
      options: {
        mergeIntoShorthands: false,
        roundingPrecision: -1
      },
      target: {
        files: [{
          expand: true,
          cwd: '',
          src: ['style.css'],
          dest: '',
          ext: '.css'
        }]
      }
    },
    usebanner: {
      taskName: {
        options: {
          position: 'top',
          banner: '/* Theme Name: Natural Music Theme URI: http://naturalmusicstore.com Author: Daniel Hart Author URI: http://danielhart.co/ Description: A Wordpress theme by DanielHart.co :D Version: 1.0 */',
          linebreak: true
        },
        files: {
          src: [ 'style.css' ]
        }
      }
    },
    watch: { // Compile everything into one task with Watch Plugin
      css: {
        files: '**/*.scss',
        tasks: ['sass', 'postcss', 'cssmin', 'usebanner']
      }
    }
  });

  // Load Grunt plugins
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-postcss');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-banner');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Register Grunt tasks
  grunt.registerTask('default', 'sass');
  grunt.registerTask('default', 'postcss');
  grunt.registerTask('default', 'cssmin');
};