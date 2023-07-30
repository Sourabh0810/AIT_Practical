angular.module('DateTimeApp', [])
  .controller('DateTimeController', ['$scope', '$interval', function($scope, $interval) {
    $interval(function() {
      $scope.currentDate = new Date();
      $scope.currentTime = new Date();
    }, 1000);
  }]);
