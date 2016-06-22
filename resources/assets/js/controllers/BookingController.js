angular.module('BookingController', []).controller('BookingController', ['$scope', '$location', '$routeParams', 'Booking',
    function ($scope, $location, $routeParams, Booking) {

        $scope.find = function () {
            $scope.bookings = Booking.query();
        };
    }
]);
