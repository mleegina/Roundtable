//script.js

   var roundtable = angular.module('roundtable', ['ngRoute']);

   // configure our routes
   roundtable.config(function($routeProvider) {
       $routeProvider

           .when('/', {
               templateUrl : 'pages/home.html',
               controller  : 'mainController'
           })

           .when('/about', {
               templateUrl : 'pages/about.html',
               controller  : 'aboutController'
           })

           .when('/schedule', {
               templateUrl : 'pages/schedule.html',
               controller  : 'scheduleController'
           })

           .when('/modpizza', {
               templateUrl : 'pages/mod.html',
               controller  : 'modController'
           })

           .when('/chipotle', {
               templateUrl : 'pages/chipotle.html',
               controller  : 'chipotleController'
           });
   });

   // create the controller and inject Angular's $scope
   roundtable.controller('mainController', function($scope) {
   });

   roundtable.controller('aboutController', function($scope) {
   });

   roundtable.controller('chipotleController', function($scope) {
   });

   roundtable.controller('scheduleController', function($scope) {
   });

   roundtable.controller('modController', function($scope) {
   });
