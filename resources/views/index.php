<!DOCTYPE html>
<html lang="en">
<head>
  
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Rakuten Marketing Translation Platform</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="Bootstrap Template for a user settings, stats or profile page. This example has a tabbed layout, table with pagination, and various user stats panels." />
      
        
        <!--[if lt IE 9]>
          <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="apple-touch-icon" href="/bootstrap/img/apple-touch-icon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/bootstrap/img/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/bootstrap/img/apple-touch-icon-114x114.png">
     
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">

<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,300,500,700' rel='stylesheet' type='text/css'>

<link href="http://cdn.fit-award.com/css/bootstrap.css" type="text/css" rel="stylesheet">

<link href="http://cdn.fit-award.com/css/animate.css" type="text/css" rel="stylesheet">
<link href="http://cdn.fit-award.com/css/timeline.css" type="text/css" rel="stylesheet">

        <!-- CSS code from Bootply.com editor -->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
     
     
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>
    <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
    <header class="animated slideInDown">
    
    
    <img src="http://marketing.rakuten.com/img/common/logo/2.gif" width="150"   align="absmiddle" style="float:left;">
    
    
    <h1 style="float:left;margin-top:11px;">Rakuten Marketing Translate Platform</h1>
    
    
    <div id="controllers">
      <a href="resetpassword.php">
 Reset my password
      </a> | <a href="logout.php">Log out</a> | </div>
    </header>
    <hr>
   
       <div class="container animated fadeIn">
      

<div class="app-content" id="data-items" ng-app="" ng-controller="customersController"> 
       <div class="grid" ng-repeat="x in names">   
         <div class="col-sm-10">
          <!-- Language Flag -->  
          <p class="pname">{{x.ID}}</p>
            </div>
            
        
         
      
      
  </div>
 </div>
 </div>


             </div><!--/tab-pane-->
<footer>
Legal stuff • copyright 2015

</footer>

   
         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script> 

<script>
function customersController($scope,$http) {
            
            
            $http.get('http://192.168.99.100:32793/api/v1/words', 
            {cache: false}).success(function(data){$scope.names = data;});
            
            
    
}
</script>
 

        
    </body>
</html>