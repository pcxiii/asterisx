    <h4>Add Subject</h4>
       <div class='row'>
    <div class='container row' style='margin-bottom:200px'>
 <form class=""  action='' data-ajax="false" method="post">
                    <input type="hidden" name="cmd" value="add_subject">
    <div class='col-md-8'>
      
        <div class="form-group">
          <label for="subject">Subject Code</label>
          <input type="text" name='data[subject_code]' class="form-control" id="subject">
        </div>

        <div class="form-group">
          <label for="subject_desc">Subject Description</label>
          <input type="text" name='data[subject_desc]' class="form-control" id="subject_desc" >
        </div> 

       <div class="form-group">
          <label for="prerec">Pre-requisite</label>
          <input type="text" name='data[prerequisite]' class="form-control" id="prerec">
        </div>

        <div class="form-group">
          <label for="unit">Unit</label>
          <input type="text" name='data[units]' class="form-control" id="unit">
        </div>  

    </div>
  
  </div> 
           <div class='row '>
         <div class='col-md-8'>
       
  
           <a href="#" data-rel ='back' class="btn btn-muted btn-default" style='background-color:#666;color:white;float:left'>
          <span class="glyphicon glyphicon-arrow-left"></span> Back
          </a>  

            <input type="submit" value="Saved">

          
         </div>
        </div>
    </form>


   </div>
