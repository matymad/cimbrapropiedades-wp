module.exports = function(grunt) {
  grunt.initConfig({   
    sass: {
      dist: {
        options: {
          noCache: true,
          style: 'compressed',
          sourcemap: 'none',
          trace: true,
          debugInfo: true
        },
        files: {
          'css/cm-styles.min.css': 'scss/cm-styles.scss',
          'css/normalize.min.css': 'scss/normalize.css',
        }
      }
    },
    autoprefixer:{
      dist:{
        files:{
          'css/cm-styles.min.css':'css/cm-styles.min.css',
        }
      }
    },
    jshint: {
      files: 'js/*.js',
      options: {
        reporterOutput: "",
        force: true,
        globals: {
          jQuery: true
        },
        ignores: ['js/jquery-3.3.1.js', 'js/smooth-scroll.js'],
      }
    },
    watch: {
      sass: {
        files: ['scss/*.scss'],
        tasks: ['sass']
      },
      jshint: {
        files: ['<%= jshint.files %>'],
        tasks: ['jshint']
      }
    },
  });
  grunt.loadNpmTasks('grunt-autoprefixer');  
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.registerTask('default',['sass', 'autoprefixer','watch']);
};