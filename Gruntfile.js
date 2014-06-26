module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        // the banner is inserted at the top of the output
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      development: {
        files: {
          'public/assets/builds/<%= pkg.name %>.min.js': 'public/assets/js/site/**/*.js'
        }
      },
      admin: {
        files: {
          'public/assets/builds/<%= pkg.name %>-admin.min.js': 'public/assets/js/admin/**/*.js'
        }
      }
    },
    jshint: {
      files: ['Gruntfile.js', 'public/assets/builds/TRA.min.js', 'test/**/*.js'],
      options: {
        // options here to override JSHint defaults
        globals: {
          jQuery: true,
          console: true,
          module: true,
          document: true
        }
      }
    },
    less: {
      development: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          // target.css file: source.less file
          "public/assets/builds/styles.css": "public/assets/less/master.less"
        }
      },
      admin: {
        options: {
          compress: true,
          yuicompress: true,
          optimization: 2
        },
        files: {
          // target.css file: source.less file
          "public/assets/builds/admin.css": "public/assets/css/**/*.css"
        }
      }
    },
    watch: {
      tasks: ['uglify'],
      files: ['public/assets/js/site/**/*.js', 'public/assets/js/admin/**/*.js'],
      styles: {
        files: ['public/assets/less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  //default grint task 
  grunt.registerTask('default', ['less', 'uglify', 'watch']);

  // this would be run by typing "grunt test" on the command line
  //grunt.registerTask('test', ['jshint', 'qunit']);

};
