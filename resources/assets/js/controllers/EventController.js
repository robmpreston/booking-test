angular.module('EventController', []).controller('EventController', ['$scope', '$location', '$routeParams', 'Booking', 'Event', 'HealthProblem',
    function ($scope, $location, $routeParams, Booking, Event, HealthProblem) {
        $scope.disabledDates = [];

        $scope.find = function () {
            $scope.events = Event.query();
        };

        $scope.findOne = function () {
            var splitPath = $location.path().split('/');
            var eventId = splitPath[splitPath.length - 1];
            $scope.event = Event.get({eventId: eventId}, function (response) {
                for (var key in $scope.event.bookings) {
                    var date = new Date($scope.event.bookings[key].date);
                    date.setTime( date.getTime() + (1 * 86400000 ));
                    $scope.disabledDates.push(date.setHours(0,0,0,0));
                }
            });
            $scope.healthProblems = HealthProblem.query();
        };

        $scope.book = function () {
            var formData = {
                event: {
                    id: $scope.event.id
                },
                booking: {
                    date: $scope.bookDate
                },
                customer: $scope.customer
            };

            Booking.save(formData, function (response) {
                console.log(response);
                if (response.success) {
                    swal("Booked!", "You successfully booked it!", "success");
                } else {
                    swal("Error", "Failed to book", "error");
                }
            });
        };

        // Customer

        $scope.openDatePicker = function () {
            $scope.datePicker.opened = true;
        };

        var disableDays = function (date, mode) {
            var convDate = date.date.setHours(0,0,0,0);

            for (var key in $scope.disabledDates) {
                if (convDate == $scope.disabledDates[key]) {
                    return true;
                }
            }

        };

        $scope.customer = {
            gender: 'male',
            health_problems: [ ]
        };

        // Date Picker
        $scope.bookDate = '';

        $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'dd.MM.yyyy', 'shortDate'];

        $scope.datePicker = {
            opened: false,
            format: $scope.formats[0],
            options: {
                formatYear: 'yy',
                maxDate: new Date(2020, 5, 22),
                minDate: new Date(),
                startingDay: 1,
                dateDisabled: disableDays
            }
        };

    }
]);
