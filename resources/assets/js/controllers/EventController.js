angular.module('EventController', []).controller('EventController', ['$scope', '$location', '$routeParams', 'Event',
  function ($scope, $location, $routeParams, Event) {
    $scope.find = function () {
      $scope.events = Event.query();
    };

    $scope.findOne = function () {
      var splitPath = $location.path().split('/');
      var eventId = splitPath[splitPath.length - 1];
      $scope.event = Event.get({eventId: eventId});
    };
  }
]);
