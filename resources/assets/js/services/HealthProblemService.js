angular.module('HealthProblemService', []).factory('HealthProblem', ['$resource',
    function ($resource) {
        return $resource('/api/health_problem/:problemId', {
            problemId: '@id'
        }, {
            update: {
                method: 'PUT'
            }
        });
    }
]);
