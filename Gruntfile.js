/*!
 * FireShell Gruntfile
 * http://getfireshell.com
 * @author Todd Motto - modified by Mashplan (www.mashplan.com)
 */

'use strict';

/**
 * Livereload and connect variables
 */
var LIVERELOAD_PORT = 35729;
var lrSnippet = require('connect-livereload')({
  port: LIVERELOAD_PORT
});
var mountFolder = function (connect, dir) {
  return connect.static(require('path').resolve(dir));
};

/**
 * Grunt module
 */
module.exports = function (grunt) {

  /**
   * Dynamically load npm tasks
   */
  require('matchdep').filterDev('grunt-*').forEach(grunt.loadNpmTasks);

  /**
   * FireShell Grunt config
   */
  grunt.initConfig({

    pkg: grunt.file.readJSON('package.json'),

    /**
     * Set project info
     */
    project: {
      src: 'src',
      dist: 'dist',
      assets: '<%= project.dist %>/assets',
      css: [
        '<%= project.src %>/scss/main.scss'
      ],
      js: [
        '<%= project.src %>/js/*.js'
      ]
    },

    /**
     * Project banner
     * Dynamically appended to CSS/JS files
     * Inherits text from package.json
     */
    tag: {
      banner: '/*!\n' +
              ' * <%= pkg.name %>\n' +
              ' * <%= pkg.title %>\n' +
              ' * <%= pkg.url %>\n' +
              ' * @author <%= pkg.author %>\n' +
              ' * @version <%= pkg.version %>\n' +
              ' * Copyright <%= pkg.copyright %>. <%= pkg.license %> licensed.\n' +
              ' */\n'
    },

    /**
     * Connect port/livereload
     * https://github.com/gruntjs/grunt-contrib-connect
     * Starts a local webserver and injects
     * livereload snippet
     */
    connect: {
      options: {
        port: 9000,
        hostname: '*'
      },
      livereload: {
        options: {
          middleware: function (connect) {
            return [lrSnippet, mountFolder(connect, 'dist')];
          }
        }
      }
    },

    /**
     * JSHint
     * https://github.com/gruntjs/grunt-contrib-jshint
     * Manage the options inside .jshintrc file
     */
    jshint: {
      files: ['src/js/*.js'],
      options: {
        jshintrc: '.jshintrc'
      }
    },

    /**
     * RequireJS
     * http://requirejs.org/docs/optimization.html
     * Use r.js to optimize javascripts
     */
    requirejs: {
      compile: {
        options: {
          baseUrl: "src/js",
          mainConfigFile: "src/js/main.js",
          //name: "main",
          dir: "dist/assets/js",
          optimize: 'uglify2',
          optimizeCSS: false,
          findNestedDependencies: true,
          preserveLicenseComments: false,

          modules: [
              {
                  name: 'main'
              }
          ],
        }
      }
    },


    /**
     * Compile Sass/SCSS files
     * https://github.com/sindresorhus/grunt-sass
     * Compiles all Sass/SCSS files and appends project banner
     */
    sass: {
      dev: {
        options: {
          outputStyle: 'expanded',
          sourceMap: true,
          banner: '<%= tag.banner %>'
        },
        files: {
          '<%= project.assets %>/css/main.min.css': '<%= project.css %>'
        }
      },
      dist: {
        options: {
          outputStyle: 'compressed',
          banner: '<%= tag.banner %>',
          sourceMap: false,
        },
        files: {
          '<%= project.assets %>/css/main.min.css': '<%= project.css %>'
        }
      },
      export: {
        options: {
          outputStyle: 'expanded',
          banner: '<%= tag.banner %>'
        },
        files: {
          '<%= project.assets %>/css/main.css': '<%= project.css %>'
        }
      }
    },

    /**
     * Autoprefixer parsed CSS
     * https://github.com/nDmitry/grunt-autoprefixer
     * Autoprefixer parses CSS and adds vendor-prefixed CSS properties using the Can I Use database.
     */
    autoprefixer: {
      options: {
        browsers: ['last 3 versions', 'Opera 12.1']
      },
      dev: {
        src: '<%= project.assets %>/css/main.min.css'
      },
      dist: {
        src: '<%= project.assets %>/css/main.min.css'
      },
      export: {
        src: '<%= project.assets %>/css/main.css'
      },
    },


    /**
     * grunt-contrib-copy
     * https://github.com/gruntjs/grunt-contrib-copy
     * Copy files and folders
     */
    copy: {
      dev: {
        files: [
          // Copy all js files from src to dist
          {
            expand: true,
            cwd: '<%= project.src %>/js/',
            src: ['**'],
            dest: '<%= project.assets %>/js/'
          }
        ],
      },

      export: {
        files: [
          // Copy all files for export
          {
            expand: true,
            cwd: '<%= project.dist %>/',
            src: ['**', '!**/*.DS_Store', '!thumbs/*.*', '!site/accounts/*.php', '!site/config/config.*.php'],
            dest: 'export/Kirby and Theme/',
            dot: true,
          },
          {
            expand: true,
            cwd: './',
            src: ['**', '!**/*.DS_Store', '!.git/**', '!.gitignore', '!bower_components/**', '!export/**', '!node_modules/**', '!<%= project.dist %>/thumbs/*.*', '!<%= project.dist %>/site/accounts/*.php', '!<%= project.dist %>/site/config/config.*.php'],
            dest: 'export/Dev/',
            dot: true,
          }
        ],
      },
    },


    /**
     * Opens the web server in the browser
     * https://github.com/jsoverson/grunt-open
     */
    open: {
      server: {
        path: 'http://localhost:<%= connect.options.port %>'
      }
    },

    /**
     * Runs tasks against changed watched files
     * https://github.com/gruntjs/grunt-contrib-watch
     * Watching development files and run concat/compile tasks
     * Livereload the browser once complete
     */
    watch: {
      sass: {
        files: '<%= project.src %>/scss/{,*/}*.{scss,sass}',
        tasks: ['sass:dev','autoprefixer:dev']
      },
      copyjs: {
        files: '<%= project.src %>/js/{,*/}*.js',
        tasks: ['copy:dev']
      },
      //requirejs: {
      //  files: '<%= project.src %>/js/{,*/}*.js',
      //  tasks: ['requirejs']
      //},
      livereload: {
        options: {
          livereload: LIVERELOAD_PORT
        },
        files: [
          '<%= project.dist %>/{,*/}*.html',
          '<%= project.assets %>/css/*.css',
          '<%= project.assets %>/js/{,*/}*.js',
          '<%= project.assets %>/{,*/}*.{png,jpg,jpeg,gif,webp,svg}'
        ]
      }
    }
  });

  /**
   * Default task
   * Run `grunt` on the command line
   */
  grunt.registerTask('default', [
    'sass:dev',
    //'jshint',
    'autoprefixer:dev',
    'copy:dev',
    'watch',
  ]);

  /**
   * Build task
   * Run `grunt build` on the command line
   * Then compress all JS/CSS files
   */
  grunt.registerTask('build', [
    'sass:dist',
    'autoprefixer:dist',
    'requirejs',
  ]);

  /**
   * Export task
   * Run `grunt export` on the command line
   */
  grunt.registerTask('export', [
    'sass:export',
    'autoprefixer:export',
    'copy:export'
  ]);

};
