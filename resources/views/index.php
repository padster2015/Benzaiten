<!DOCTYPE html>
<html lang="en">
<head>
  
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <meta charset="utf-8">
        <title>Fit Award - User Profile</title>
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
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-WBJJNF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WBJJNF');</script>
<!-- End Google Tag Manager -->
    <header class="animated slideInDown">
    
    
    <img src="http://cdn.fit-award.com/img/logo/logo.png" width="50"   align="absmiddle" style="float:left;">
    
    
    <h1 style="float:left;margin-top:11px;">Fit Award</h1>
    
    
    <div id="controllers">
      <a href="http://fit-award.com/app/profile/resetpassword.php">
 Reset my password
      </a> | <a href="logout.php">Log out</a> | </div>
    </header>
    <hr>
   
       <div class="container animated fadeIn">
      

<div class="app-content" id="data-items" ng-app="" ng-controller="customersController"> 
       <div class="grid" ng-repeat="x in names">   
         <div class="col-sm-10">
            <img title="profile image" class="img-circle img-responsive" width="150" heigh="150" src="{{x.Photo}}" style="width:60px !important;float:left; height:60px !important; border-color: #b1e046;
    border-style: solid;
    border-width: 1px;"><h1 class="pname">{{x.ID}}</h1>
            </div>
            
            <div class="col-sm-2"></div>
        
         
      
      
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