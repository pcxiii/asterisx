  <div class='panel indicator container' data-role='header' data-theme='a' >
            <div  class='panel-body' >
              Room List


            </div>     
  </div>
 <div class='col-md-12 container'>
            <span style='float:right'>
                
                <a href="#popup_login" data-rel="popup" data-position-to="window" class="btn btn-success btn-default" style='color:white;'>
                          <span class="glyphicon glyphicon-plus"></span> Add Room
                 </a> 
            </span>
    </div>
<div class='container col-md-12'>
    <table id="roomlisttable" class="table table-striped table-condensed table-bordered table-responsive" cellspacing="0" style='100% !important'>
            <thead>
                <tr>
                    <th style='width:20%'>ROOM CODE</th>
                    <th>ROOM DESCRIPTION</th>
                    <th  style='width:15%'>DATE ADDED</th>
                    <th colspan='' style='width:6%'>Edit</th>
                   <!--  <th colspan='' style='width:5%'>Del</th>
                         -->     
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>s Nixon</td>     
                    <td>System Architect</td>
                    <td>System Architect</td>
           
       
                    <td><a href="#popup_login" data-rel="popup" data-position-to="window"><span class='glyphicon glyphicon-pencil'> </span></a></td>         
                </tr>      <tr>
                    <td>s Nixon</td>     
                    <td>System Architect</td>
                    <td>System Architect</td>
       
                    <td><a href="?file=pages/admin/teacher/edit_teacher.php"><span class='glyphicon glyphicon-pencil'> </span></a></td>         
                </tr>           
            
            </tbody>
    </table>
</div>
<?php 
include('pages/admin/room/add_room.php');
 ?>