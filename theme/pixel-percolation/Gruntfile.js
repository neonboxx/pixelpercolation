// Generated on 2016-02-24 using generator-bootstrap-less 3.2.1
'use strict';

// # Globbing
// for performance reasons we're only matching one level down:
// 'test/spec/{,*/}*.js'
// use this if you want to match all subfolders:
// 'test/spec/**/*.js'

module.exports = function (grunt) {
  // load all grunt tasks
  require('load-grunt-tasks')(grunt);
  // show elapsed time at the end
  require('time-grunt')(grunt);

  // configurable paths
  var yeomanConfig = {
    app: require('./bower.json').appPath || 'app',
    dist: 'dist'
  };

  grunt.initConfig({
  
    watch: {
      coffee: {
        files: ['scripts/{,*/}*.coffee'],
        tasks: ['coffee']
      },
      less: {
        files: ['styles/{,*/}*.less'],
        tasks: ['less']
      },
      gruntfile: {
        files: ['Gruntfile.js']
      },
      livereload: {
        options: {
          livereload: '<%= connect.options.livereload %>'
        },
        files: [
          '*.twig',
          'styles/{,*/}*.css',
          'scripts/{,*/}*.js',
          'images/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    },
    connect: {
      options: {
        port: 8888,
        // change this to '0.0.0.0' to access the server from outside
        hostname: 'localhost',
        livereload: 35729
      },
      livereload: {
        options: {
          open: true,
          base: [
            ''
          ]
        }
      }
    },
    less: {
      dist: {
        files: {
          'styles/main.css': ['styles/main.less']
        },
        options: {
          sourceMap: true,
          sourceMapFilename: 'styles/main.css.map',
          sourceMapBasepath: '/',
          sourceMapRootpath: '/'
        }
      }
    }
  });
  grunt.registerTask('default', [
    'watch'
  ]);
};
