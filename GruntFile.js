module.exports = function(grunt)
{

	grunt.initConfig({

		compass: {
			app_sass : {
				options: {
					sassDir : 'scss/',
					cssDir : 'css/compiled/'
				}
			}
		},

		clean: {
			app_css: {
				src: ['css/compiled/']
			}
		},

		autoprefixer: {
			app_css: {
				options: {
					browsers : ['last 2 versions'],
					cascade : true
				},
				src: ['css/compiled/**/*.css']
			}
		},

		watch: {
			app_sass: {
				files: ['scss/**/*.scss', 'scss/**/*.sass'],
				tasks: ['clean:app_css','compass:app_sass', 'autoprefixer:app_css'],
			}
		},

		jshint: {
			options: {
				curly: true,
				eqeqeq: true,
				eqnull: true,
				globals: {
					jQuery: true
				},
			},
			uses_defaults: ['js/*.js'],
		}
	});



	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-watch');
	// grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-clean');
	grunt.loadNpmTasks('grunt-contrib-compass');
	//grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-autoprefixer');

	grunt.registerTask('verify', ['jshint']);
	grunt.registerTask('init', ['clean:app_css','compass:app_sass', 'autoprefixer:app_css']);

};