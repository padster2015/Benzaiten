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
        
        <!-- sidebar -->
        
        
        
        <div class="col-sm-3"><!--left col-->
              
          <ul class="list-group">
            <li class="list-group-item text-muted">Profile</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Joined</strong></span> {{x.joined}}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Last seen</strong></span> {{ x.last_login }}</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Real name</strong></span> {{ x.First_Name }}</li>
            
          </ul> 
        
        
      <!--  <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://girl-in-nyc.com">girl-in-nyc.com</a></div>
          </div>-->
        
        
        
        
        <ul class="list-group">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Goals Set</strong></span><span ng-repeat="x in goalset"> {{ x.GoalsSet}}</span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Goals Achieved</strong></span><span ng-repeat="x in Goalswon"> {{ x.Goalswon}}</span></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Status</strong></span> <span ng-repeat="x in status"> {{ x.Achieved}}</span></li>
           <!-- <li class="list-group-item text-right"><span class="pull-left"><strong>Events Completed</strong></span> 78</li>-->
          </ul> 
          
          
          
          <div class="panel panel-default">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
                <i class="fa fa-facebook fa-2x"></i> <i class="fa fa-github fa-2x"></i> <i class="fa fa-twitter fa-2x"></i> <i class="fa fa-pinterest fa-2x"></i> <i class="fa fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
        
                <!-- end sidebar -->

        <div class="col-sm-9">
          
          <ul class="nav nav-tabs" id="myTab">
            <li class="active"><a href="#home" data-toggle="tab">Profile</a></li>
            <li><a href="#messages" data-toggle="tab">Goal Milestones</a></li>
            <li><a href="#settings" data-toggle="tab">Update details</a></li>
          </ul>
              
              <div class="tab-content">
            <!--/tab-pane-->
            
      
      
            
            
             <div class="tab-pane active" id="home">
    
        <div class="imgholder"><br>
        
<strong>        {{x.First_Name}} {{ x.Last_Name }} 
</strong>           <hr> 
           <p>Date of Birth: <b>{{x.DOB}}</b></p>          
           <p>Sex: <b>{{x.Sex}}</b></p>          
          <p>Country: <b>{{x.Country}}</b></p>
           <p>Motivation: <b>{{ x.Motivation }}</b> </p>
           <p>Goal 1: <b>{{ x.Goal_1 + ', ' + x.Goal_1_rate }}</b> </p>
          <!-- <p>Goal 2: <b>{{ x.Goal_2 + ', ' + x.Goal_2_rate }}</b> </p>
           <p>Goal 3: <b>{{ x.Goal_3 + ', ' + x.Goal_3_rate}}</b> </p>-->


         </div>
         
         
      </div>
      
      
      
      
                         <div class="tab-pane" id="messages">
                         
                         
             <ul class="timeline" >
        <li ng-repeat="x in milestone">
          <div class="timeline-badge info"><i class="glyphicon glyphicon-hand-left"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"  >{{x.Achieved}}</h4>
        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i> {{x.Updated}}</small></p>
            </div>
            <div class="timeline-body">
              <p>{{x.Goal_1}} - {{x.Goal_1_rate}}</p><br>
              <p>{{x.offer}} redeem <a href="{{x.link}}" >here</a></p>
            </div>
          </div>
        </li>
        
       
        
        
        
        
        
        </ul>
    
                  
</div>
      
      
      
      
      <!-- settings-->
      
                   <div class="tab-pane" id="settings">
                   
                   <form class="form" action="http://api.fit-award.com/users/update.php" method="POST" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <input class="form-control" name="first_name" id="first_name" ng-repeat="x in names" placeholder="{{x.Name}} <- Is this right?" title="enter your first name incorrect." type="text"  autofocus U>
                          </h4>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <input class="form-control" name="Last_Name" id="Last_Name" placeholder="last name" title="enter your last name if any." type="text" autofocus required>
                          </h4>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <input class="form-control" name="DOB" id="DOB" placeholder="enter DOB" title="enter your Date of Birth" type='date'>
                          </div>
                      </div>
                      
                      
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                              <select class="form-control" name="Sex" id="Sex">
                                <option value="NA">Please Select a Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                              </select>
                          </div>
                      </div>
                      
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              
                                  <label>Please upload your profile pic</label> 
                                  <input  id="inputFileToLoad" type="file" onchange="encodeImageFileAsURL();"  class="form-control"/>
                                  <div class="output">
    <textarea class="form-control" name="Photo" id="Photo" style="display:none"></textarea><br>
   <strong>Preview </strong><img width="150"><br>
</div>

                          </div>
                      </div>
                      
                       <div class="form-group">
                          
                          <div class="col-xs-6">
                            <select id="Country" name="Country" class="form-control">
                                                           <option value="-" >Select your Country</option>

                              <option value="{{x.short_name}}" ng-repeat="x in locations">{{x.short_name}}</option>
                            </select>
                          </div>
                      </div>
                     
          
                  
                      
                
                      <hr>
                       <div class="form-group">
                          
                         <div class="col-xs-6">
                           <select id="Goal_1" name="Goal_1" class="form-control">
                        <option value="NA">Please choose your Goal Type</option>

                             <option value="{{x.GoalType}}" ng-repeat="x in goaltypes">{{x.GoalType}}</option>
                              </select>
                         </div>
                          <div class="col-xs-6"></label>
                           <select  id="select" name="Goal_1_rate" class="form-control">
                                                   <option value="NA">Please choose your Goal metric</option>

         <option value="{{x.Goalrates}}" ng-repeat="x in goaltypes">{{x.Goalrates}}</option>
                              </select>
                         </div>
                         
                         
                         
                         
                         
                         
                          <div class="form-group">
                          
                          <div class="col-xs-6">
                              <input name="Motivation" type='textarea' class="form-control" id="Motivation" placeholder="enter motivtion" title="enter your motivation" maxlength="144">
                              <div id="textarea_feedback"></div>

                          </div>
                      </div>
                     
                         
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input class="form-control" name="password" id="password" placeholder=" Enter a secure password" title="Password must contain at least 6 characters, including UPPER/lowercase and numbers" type="password" onchange="registrationForm.password2.pattern = this.value;"
                               pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}"  
                                 required >
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input class="form-control" name="password2" id="password2" placeholder="password2" title="Please enter the same Password as above" type="password"  required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <input type="hidden" name="id" id="hiddenField" ng-repeat="x in names" value="{{x.id}}">
                                <br>
                              <button class="btn btn-lg btn-succes  s" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                                </form>
                   
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