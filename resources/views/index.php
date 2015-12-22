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
        
    <body>

    <header class="animated slideInDown" style="position:fixed; height:100px; border-bottom:solid 1px black; background-color:#FFF;">
    
    
    <img src="http://marketing.rakuten.com/img/common/logo/2.gif" width="150"   align="absmiddle" style="float:left;">
    
    
    <h1 style="float:left;margin-top:11px;">Rakuten Marketing Translate Platform</h1>
           <br> <h2 style="float:left;">Benzatain</h2>

    
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
            
<!--<div class="alert alert-success" id="eventsResult">
    Here is the result of success or fail
</div>-->


<table data-toggle="table" data-sort-name="ID"
       data-sort-order="desc"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
        data-show-export="true"
         data-click-to-select="true"
               data-toolbar="#toolbar"
       data-query-params="queryParams"
              data-pagination="true"
       data-url="http://192.168.99.100:32786/api/v1/words/show/50">
    <thead>
    <tr>
        <th data-field="ID" data-sortable="true" data-switchable="false">ID</th>
        <th data-field="Source">English Word</th>
        <th data-field="French">French</th>
        <th data-field="German">German</th>
        <th data-field="Japanese" data-visible="false">Japanese</th>

    </tr>
    </thead>
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
                                    <label for="inputEmail3" class="col-sm-3 control-label">New Word or Phrase</label>
                                    <div class="col-sm-9">
                                        <input type="textarea" class="form-control has-error" id="word" name="word" placeholder="Word in English" value="{{name}}" 
                                        ng-model="word.phrase" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.name.$invalid && frmEmployees.name.$touched">Phrase field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Platform</label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Platform " value="{{email}}" 
                                        ng-model="employee.email" ng-required="true">
                                        <span class="help-inline" 
                                        ng-show="frmEmployees.email.$invalid && frmEmployees.email.$touched">Valid Email field is required</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-3 control-label">Product</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="contact_number" name="contact_number" placeholder="Product Name" value="{{contact_number}}" 
                                        ng-model="employee.contact_number" ng-required="true">
                                    <span class="help-inline" 
                                        ng-show="frmEmployees.contact_number.$invalid && frmEmployees.contact_number.$touched">Product Name field is required</span>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmEmployees.$invalid">Add Word</button>
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

$('#btn-add').click(function(){
$('#myModal').modal('show')
});


$('.edit').click(function(){
$('#myModal').modal('show')
});

    var $table = $('#table');
    $(function () {
        $('#toolbar').find('select').change(function () {
            $table.bootstrapTable('refreshOptions', {
                exportDataType: $(this).val()
            });
        });
    })  




function queryParams() {
    return {
        type: 'owner',
        sort: 'updated',
        direction: 'desc',
        per_page: 100,
        page: 1
    };
}

</script>
   
         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script> 

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/bootstrap-table.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/bootstrap-table.min.js"></script>

<!-- Latest compiled and minified Locales 
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/locale/bootstrap-table-zh-CN.min.js"></script>
-->

<script src="http://192.168.99.100:32786/app/js/extensions/export/bootstrap-table-export.js"></script>
    <script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>

<script>
function customersController($scope,$http) {
            
            
            $http.get('http://192.168.99.100:32786/api/v1/words/show/50', 
            {cache: false}).success(function(data){$scope.names = data;});
            
            
    
}
</script>
 <script src="app/app.js"></script>
        <script src="app/controllers/words.js"></script>

        
    </body>
</html>