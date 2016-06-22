angular.module('appRoutes', []).config(['$routeProvider', '$locationProvider', '$httpProvider',
    function ($routeProvider, $locationProvider, $httpProvider) {
        $routeProvider
            .when('/', {
                templateUrl: '/partials/events/index',
                controller: 'EventController'
            })
            .when('/event/:id', {
                templateUrl: '/partials/event/view',
                controller: 'EventController'
            })
            .otherwise({
                redirectTo: '/'
            });

        $locationProvider.html5Mode(true);
    }
]);
