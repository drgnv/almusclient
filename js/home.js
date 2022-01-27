angular.module('starter', ['ionic'])

.config(function($stateProvider, $urlRouterProvider) {
  $stateProvider

  .state('app', {
    url: "/app",
    abstract: true,
    templateUrl: "menu.html",
    controller: 'AppCtrl'
  })

  .state('app.search', {
    url: "/search",
    views: {
      'menuContent': {
        templateUrl: "search.html"
      }
    }
  })

  .state('app.feed', {
    url: "/feed",
    views: {
      'menuContent': {
        templateUrl: "feed.html"
      }
    }
  });
  // if none of the above states are matched, use this as the fallback
  $urlRouterProvider.otherwise('/app/feed');
})
.controller('AppCtrl', function($scope, $ionicSideMenuDelegate) {
  
    $scope.$ionicSideMenuDelegate = $ionicSideMenuDelegate;

  
});