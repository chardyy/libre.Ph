/**
 * Created by jvoelkel on 5/5/14.
 */
var app = angular.module('libreApp',[
    'ngRoute',  'LoginCtrl', 'AuthSrvc', 'PostCtrl', 'CRUDSrvc', 'ProductCtrl'
]);

app.run(function($rootScope,$location,Login){
    $rootScope.$on('$routeChangeStart', function() {
        var whiteList   = ['/']; //the login is the only unguarded route - everything else needs to check session auth
        var loggedIn    = Login.checkLoginStatus();//boolean - if user is logged in
        var routeSafe = !$.inArray($location.path(),whiteList);//boolean - is route safe or protected
        if(!loggedIn && !routeSafe) {
            $location.path('/dashboard');
            alert('You must be logged in to view this page!');
        }
    });
});

//handle all of our routing
app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/',{
            templateUrl:'js/templates/login.html',
            controller:'LoginController'
    })
        .when('/dashboard', {
            templateUrl: 'js/templates/dashboard.html',
            controller: 'PostController'
    })
        .when('/products', {
            templateUrl: 'js/templates/products.html',
            controller: 'ProductsController'
        });

    $locationProvider.html5Mode(true).hashPrefix('!');   
});
