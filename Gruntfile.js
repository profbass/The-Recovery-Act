module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    concat: {
      options: {
        // define a string to put between each file in the concatenated output
        separator: ';'
      },
      dist: {
        // the files to concatenate
        src: ['public/assets/js/site/**/*.js'],
        // the location of the resulting JS file
        dest: 'public/builds/<%= pkg.name %>.js'
      }
    },
    uglify: {
      options: {
        // the banner is inserted at the top of the output
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("dd-mm-yyyy") %> */\n'
      },
      dist: {
        files: {
          'public/assets/builds/<%= pkg.name %>.min.js': ['<%= concat.dist.src %>']
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
          "public/assets/builds/styles.css": "public/assets/less/**/*.less"
        }
      }
    },
    watch: {
      tasks: ['uglify'],
      styles: {
        files: ['public/assets/less/**/*.less'], // which files to watch
        tasks: ['less'],
        options: {
          nospawn: true
        }
      }
    }
  });

  
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  
  //default grint task 
  grunt.registerTask('default', ['concat', 'less', 'uglify', 'watch']);

  // this would be run by typing "grunt test" on the command line
  //grunt.registerTask('test', ['jshint', 'qunit']);

};
