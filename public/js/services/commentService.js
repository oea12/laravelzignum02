angular.module('commentService', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
	})


	.factory('Comment', function($http) {

		return {
			get : function() {
				return $http.get('/es/vine');
			},
			show : function(id) {
				return $http.get('/es/' + id);
			},
			save : function(commentData) {
				return $http({
					method: 'POST',
					url: '/api/comments',
					headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
					data: $.param(commentData)
				});
			},
			destroy : function(id) {
				return $http.delete('/api/comments/' + id);
			}
		}

	});