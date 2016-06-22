angular.module('EventService', []).factory('Event', ['$resource',
    function ($resource) {
        return $resource('/api/event/:eventId', {
            eventId: '@id'
        }, {
            update: {
                method: 'PUT'
            }
        });
    }
]);
