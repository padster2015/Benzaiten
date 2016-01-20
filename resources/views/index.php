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

<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">

<link href="app/css/bootstrap.css" type="text/css" rel="stylesheet">

<link href="http://cdn.fit-award.com/css/animate.css" type="text/css" rel="stylesheet">
 <link rel="stylesheet" href="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/css/bootstrap-editable.css">
        <!-- CSS code from Bootply.com editor -->
<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
 <script type='text/javascript' src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="app/css/bootstrap-table.css">

<!-- Latest compiled and minified JavaScript -->
<script src="app/js/bootstrap-table.js"></script>

<style>
.navbar-default {
    background-color: #FFF !important;
}

.modal-content{
    height:100%;
    width:100%;
}
#word{
    color:#000 !important;
}
</style>
    </head>
        
    <body>

    <header class="animated slideInDown" style="z-index: 400;position:fixed; height:100px; border-bottom:solid 1px black; background-color:#FFF;">
    
    
    <img src="http://marketing.rakuten.com/img/common/logo/2.gif" width="150"   align="absmiddle" style="float:left;">
    
    
    <h1 style="float:right;margin-top:11px;font-size:24px;">Translation Platform</h1>

    </header>
   
       <div class="container animated fadeIn">
      <div class="row row-offcanvas row-offcanvas-left">

<div class="app-content" id="data-items" ng-app="" ng-controller="customersController"> 
       <div class="grid" >   
         <div class="col-sm-10">
          <!-- Language Flag -->  
            </div>
            
<!--<div class="alert alert-success" id="eventsResult">
    Here is the result of success or fail
</div>-->

<button id="btn-add" class="btn btn-primary btn-xs">Add New Word</button>
<table id="example2-grid" data-toggle="table"
 data-sort-name="ID"
       data-sort-order="asc"
       data-search="true"
       data-show-refresh="true"
       data-show-toggle="true"
       data-show-columns="true"
        data-show-export="true"
         data-click-to-select="true"
               data-toolbar="#toolbar"
       data-query-params="queryParams"
        data-mobile-responsive="true"
              data-pagination="true"
       data-url="http://centos7-php7-laravel5-1f58238c.padster83.svc.tutum.io/api/v1/words/show/50">
    <thead>
    <tr>
        <th data-field="ID" data-sortable="true" data-switchable="false"><strong>ID</strong></th>
        <th data-field="Source">English Word</th>
        <th data-field="Brazil" data-editable="true">Brazilian Portuguese</th>
        <th data-field="French" data-editable="true">French</th>
        <th data-field="German" data-editable="true">German</th>
        <th data-field="Japanese" data-editable="true" data-visible="false">Japanese</th>

    </tr>
    </thead>
</table>

<div id='response'></div>
            <!-- End of Table-to-load-the-data Part -->
            <!-- Modal (Pop up when detail button clicked) -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add new translation</h4>
                        </div>
                        <div class="modal-body">
                            <form name="frmEmployees" class="form-horizontal" action="" id='addwordmodal'>

                                        <textarea autofocus wrap="hard" rows="4" cols="75"  id="word" name="word" required placeholder="Describe yourself here..."> </textarea>
                                    
                                                                
                                        <input type="dropdown" class="form-control" id="platform" name="platform" placeholder="Enter Platform " value="1" >
                                                                        
                                        <input type="dropdown" class="form-control" id="product" name="product" placeholder="Product Name" value="1" >
                                  
                                                                 <input type="submit" class="btn btn-primary" id="btn-save" value="Add Word">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
      
  </div>
 </div>
 </div>
 </div>

      <!-- sidebar -->
        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar" role="navigation">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">French</a></li>
              <li><a href="#">German</a></li>
              <li><a href="#">Japanese</a></li>
<li><a href="#">Brazil</a></li>
<li><a href="#">Advertiser Dashboard</a></li>
<li><a href="#">Publisher Dashboard</a></li>
<li><a href="#">Search</a></li>
<li><a href="#">Attribution</a></li>
<li><a href="#">Display</a></li>              
            </ul>
        </div>
    
             </div><!--/tab-pane-->
<footer>
Legal stuff • copyright 2015

</footer>
<script>

// post

$(document).ready(function(){
    $('#addwordmodal').submit(function(){
     
        // show that something is loading
        $('#response').html("<b>Loading response...</b>");
         
        /*
         * 'post_receiver.php' - where you will pass the form data
         * $(this).serialize() - to easily read form data
         * function(data){... - data contains the response from post_receiver.php
         */
        $.ajax({
            type: 'POST',
            url: '/api/v1/save', 
            data: $(this).serialize()
        })
        .done(function(data){
             
            // show the response
            $('#response').html(data);
             
        })
        .fail(function() {
         
            // just in case posting your form failed
            alert( "Posting failed." );
             
        });
 
        // to prevent refreshing the whole page page
        return false;
 
    });
});
//


//Update
function update(){
    $('#username').editable({
                               type:  'text',
                               pk:    1,
                               name:  'username',
                               url:   '/api/v1/update',  
                               title: 'Enter username'
                            });
  }
//end of update




$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});


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
   
       <!--  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>--> 



<!-- Latest compiled and minified Locales 
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.9.1/locale/bootstrap-table-zh-CN.min.js"></script>
-->

<script src="app/js/extensions/export/bootstrap-table-export.js"></script>
<script src="//rawgit.com/hhurz/tableExport.jquery.plugin/master/tableExport.js"></script>
    <script src="//rawgit.com/vitalets/x-editable/master/dist/bootstrap3-editable/js/bootstrap-editable.js"></script>
<script src="app/js/extensions/mobile/bootstrap-table-mobile.js"></script>

 <script src="app/app.js"></script>
        <script src="app/controllers/words.js"></script>

        <script src="app/js/extensions/editable/bootstrap-table-editable.js"></script>

    </body>
</html>
