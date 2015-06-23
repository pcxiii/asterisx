    <div data-role="popup" id="popup_login" data-theme="a" class="ui-corner-all" >


  <div class='panel indicator container' data-role='header' data-theme='a' style='width:inherit' >
            <div  class='panel-body' >
             Add New Room
            </div>     
  </div>
  <div class='container'>
       <div class='row'>
                <form class=""  action='?file=pages/admin/room/roomlist.php'data-ajax="false" method="post">
                    <input type="hidden" name="cmd" value="add_room">
                    <div class='container row' style='margin-bottom:50px'>
                                <div class='col-md-2'>                        
                                    <div class="form-group">
                                      <label for="tfname">Room Code</label>
                                      <input type="text" class="form-control" name='data[room_code]'id="tfname">
                                    </div>  

              
                                </div>
                                 <div class='col-md-4'>
                                	      <div class="form-group">
                                      <label for="tfname">Room Description</label>
                                      <input type="text" class="form-control" name='data[room_desc]'id="tfname">
                                    </div>  
                                 </div>  
                    </div> 
                  


                 <!-- buttons -->
                   <div class='row '>
                           <div class='col-md-7' style='margin:0 0 10px 5px '>           
                                     <a href="#" class="btn btn-muted btn-default popup_close" style='background-color:#666;color:white;float:left'>
                                    <span class="glyphicon glyphicon-remove"></span> Close
                                    </a>  
                
  															
                                <input type="submit" value="Save">
                           </div>
                  </div>

                 </form><!-- end of forms -->

        </div>
  </div>



   
    </div>

