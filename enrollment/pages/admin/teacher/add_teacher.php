

  <div class='panel indicator ' data-role='header' data-theme='a' >
            <div  class='panel-body' >
             Add New Teacher
            </div>     
  </div>
  <div class='container'>
       <div class='row'>
                <form class="" data-ajax="false" method="post">
                    <input type="hidden" name="cmd" value="add_teacher">
                    <div class='container row' style='margin-bottom:50px'>
                                <div class='col-md-8'>                        
                                    <div class="form-group">
                                      <label for="tfname">First Name</label>
                                      <input type="text" name="data[firstname]" class="form-control" id="tfname">
                                    </div>  

                                     <div class="form-group">
                                      <label for="tmname">Middle Name</label>
                                      <input type="text" name="data[middlename]" class="form-control" id="tmname">
                                    </div>  

                                     <div class="form-group">
                                      <label for="tlname">Last Name</label> 
                                      <input type="text" name="data[lastname]" class="form-control" id="tlname">
                                    </div>

                                    <div class="form-group">
                                      <label for="address">Current Address</label>
                                      <input type="text" name="data[address]" class="form-control" id="address" >
                                    </div> 

                                    <div class="form-group">
                                      <label for="special">Specialization</label>
                                      <input type="text" name="data[specialization]" class="form-control" id="special">
                                    </div>

                                    <div class="form-group">
                                      <label for="estat">Employment Status</label>
                                      <input type="text" name="data[employment_status]" class="form-control" id="estat">
                                    </div> 
                                </div>
                                 <div class='col-md-4'>
                                
                                     <div class="form-group">
                                        <label for="gender">Gender</label>
                                        <select name="data[gender]" id="gender" class="form-control">
                                          <option value="">Select Gender</option>
                                          <option value="">Male</option>
                                          <option value="">Female</option>
                                        </select>
                                      </div>

                                       <div class="form-group">
                                        <label for="cstatus">Civil Status</label>
                                        <select name="data[marital]" id="cstatus" class="form-control">
                                          <option value="">Select Status</option>
                                          <option value="">Single</option>
                                          <option value="">Married</option>
                                          <option value="">Widow</option>
                                        </select>
                                      </div>
                                 </div>  
                    </div> 
                  

                 <!-- buttons -->
                   <div class='row '>
                           <div class='col-md-8'>           
                                   
                                       <input type="submit" value="Save & Add New"  
                                    class="btn btn-success btn-default" rel = "external" style='color:white;float:right;margin-left:5px'>  
                                  
                                    <span class="glyphicon glyphicon-floppy-disk  ">
                                    </span> 
                                    
                                        <a href="#" class="btn btn-success btn-default" style='color:white;float:right'>
                                    <span class="glyphicon glyphicon-floppy-disk"></span> Save
                                    </a>                     
                           </div>
                  </div>

                 </form><!-- end of forms -->

        </div>
  </div>
