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

           .when('/login', {
               templateUrl : 'pages/login.html',
               controller  : 'loginController'
           })

           .when('/chipotle', {
               templateUrl : 'pages/register.html',
               controller  : 'reisterController'
           });
   });

   // create the controller and inject Angular's $scope
   roundtable.controller('mainController', function($scope) {
   });

   roundtable.controller('aboutController', function($scope) {
   });

   roundtable.controller('loginController', function($scope) {
   });

   roundtable.controller('scheduleController', function($scope) {
   });

   roundtable.controller('registerController', function($scope) {
   });
