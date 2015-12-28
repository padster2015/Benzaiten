@extends('layouts.master')
@section('content')


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
       data-url="http://192.168.99.100:32779/api/v1/words/show/50">
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

@stop
