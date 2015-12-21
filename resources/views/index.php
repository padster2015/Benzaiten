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
     
     <style>
tr:nth-child(odd)       { background-color:#eee; !important }
tr:nth-child(even)      { background-color:#fff; !important}
table tr:hover{
    background: yellow;
}
tr th {background-color:white;color:black; padding:1%;}
td {
    padding:1%;
}
     </style>
    </head>
    
    <!-- HTML code from Bootply.com editor -->
    
    <body>
    <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->
    <header class="animated slideInDown" style="position:fixed; height:100px; border-bottom:solid 1px black; background-color:#FFF;">
    
    
    <img src="http://marketing.rakuten.com/img/common/logo/2.gif" width="150"   align="absmiddle" style="float:left;">
    
    
    <h1 style="float:left;margin-top:11px;">Rakuten Marketing Translate Platform</h1>
           <br> <h2 style="float:right;">Benzatain</h2>

    
    <div id="controllers">
      <a href="resetpassword.php">
 Reset my password
      </a> | <a href="logout.php">Log out</a> | </div>
    </header>
    <hr>
   
       <div class="container animated fadeIn">
      

<div class="app-content" id="data-items" ng-app="" ng-controller="customersController"> 
       <div class="grid" >   
         <div class="col-sm-10">
          <!-- Language Flag -->  
            </div>
            

<table style=width:"960px !important">
                <thead>
                    <tr>
                        <th width="5%"sortable="sortable">ID</th>
                        <th width="200">English Word</th>
                        <th width="200">French</th>
                        <th width="200">German</th>
                        <th width="200">Japanese</th>
                        <th><button id="btn-add" class="btn btn-primary btn-xs" data-toggle="modal" onclick="#myModal">Add New Word</button></th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="x in names">
                        <td width="5%">{{ x.ID }}</td>
                        <td width="200" style="WORD-BREAK:BREAK-ALL;">{{ x.Source }}</td>
                        <td width="200" style="WORD-BREAK:BREAK-ALL;">{{ x.French }}</td>
                        <td width="200" style="WORD-BREAK:BREAK-ALL;">{{ x.German }}</td>
                        <td width="200" style="WORD-BREAK:BREAK-ALL;">{{ x.Japanese }}</td>
                        <td>
                            <button class="btn btn-default btn-xs btn-detail" ng-click="toggle('edit', word.id)">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">{{form_title}}</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmEmployees" class="form-horizontal" novalidate="">

                                <div class="form-group error">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Name</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control has-error" id="name" name="name" placeholder="Fullname" value="{{name}}" 
                                        ng-model="employee.name" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Name field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="{{email}}" 
                                        ng-model="employee.email" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Contact Number" value="{{contact_number}}" 
                                        ng-model="employee.contact_number" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="frmEmployees.contact_number.$invalid && frmEmployees.contact_number.$touched">Contact number field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Position</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="position" name="position" placeholder="Position" value="{{position}}" 
                                        ng-model="employee.position" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="frmEmployees.position.$invalid && frmEmployees.position.$touched">Position field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

















        
         
      
      
  </div>
 </div>
 </div>


             </div><!--/tab-pane-->
<footer>
Legal stuff • copyright 2015

</footer>
<script>
$('#myModal').modal('show')
</script>
   
         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script> 

<script>
function customersController($scope,$http) {
            
            
            $http.get('http://192.168.99.100:32793/api/v1/words', 
            {cache: false}).success(function(data){$scope.names = data;});
            
            
    
}
</script>
 <script src="app/app.js"></script>
        <script src="app/controllers/words.js"></script>

        
    </body>
</html>