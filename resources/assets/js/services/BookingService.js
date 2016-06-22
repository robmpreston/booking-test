angular.module('BookingService', []).factory('Booking', ['$resource',
    function ($resource) {
        return $resource('/api/booking/:bookingId', {
            eventId: '@id'
        }, {
            update: {
                method: 'PUT'
            }
        });
    }
]);
