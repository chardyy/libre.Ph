<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Laravel and Angular">
    <meta name="author" content="Justin Voelkel">
    <title>Libre</title>
    <base href="/" />


    <!-- Loading Bootstrap -->
    <link href="dist/css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="dist/css/flat-ui.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="dist/img/favicon.ico">
    <link rel="stylesheet" href="dist/css/index.css">
    <link rel="stylesheet" href="dist/css/login.css">
    <link rel="stylesheet" href="dist/css/create-promotion.css">
    <link rel="stylesheet" href="dist/css/details.css">
    
    
</head>

<body ng-app="libreApp">

    <div id="wrapper">
    
            <div class="container" id="view" ng-view>

        </div>
    </div>


    <!--js-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!--angular-->
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular-route.js"></script>

    <!--angular resources-->

    <!-- app -->
    <script src="js/app.js"></script> 
    

    <!--angular controllers-->
    
        <script src="js/controllers/loginCtrl.js"></script>

    <!-- <script src="js/controllers/postController.js"></script> -->
        
     
    

    <!--angular services-->
    <script src="js/services/authService.js"></script>
    <!-- 
        <script src="js/services/crudService.js"></script>
     -->
    

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/vendor/video.js"></script>
    <script src="dist/js/flat-ui.min.js"></script>

</body>
</html>