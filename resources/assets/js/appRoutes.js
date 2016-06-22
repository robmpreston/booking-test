angular.module('appRoutes', []).config(['$routeProvider', '$locationProvider', '$httpProvider',
    function ($routeProvider, $locationProvider, $httpProvider) {
        $routeProvider
            .when('/', {
                templateUrl: '/partials/events/index',
                controller: 'EventController'
            })
            .when('/event/:id', {
                templateUrl: '/partials/events/view',
                controller: 'EventController'
            })
            .when('/bookings', {
                templateUrl: '/partials/bookings/index',
                controller: 'BookingController'
            })
            .otherwise({
                redirectTo: '/'
            });

        $locationProvider.html5Mode(true);
    }
]);
