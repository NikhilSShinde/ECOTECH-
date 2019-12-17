<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <div class="well well-sm">
          <form class="form-horizontal" action="insert_employee.php" method="post">
          <fieldset>
            <legend class="text-center"></legend>
    
            <!-- Name input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="name">Select Manager</label><small>if you want to create manager don;t select any optiion</small>
              <div class="col-md-9">
                <select class="form-control" id="type2" name="reports_to_manager" required="required">
                 <option value="">SELECT</option>                                
                      <?php
                            include('config.php');
                            $sql1=("SELECT  * FROM `hierarchy` where employee_type_id = 1");
                            $result1 = mysqli_query($conn, $sql1);
                            $return1=mysqli_num_rows($result1);
                            
                            if($return1 > 0)
                            {
                              while($row1 = mysqli_fetch_array($result1))
                      {?>
                                  <option value="<?php echo ($row1['id']); ?>"><?php echo ($row1['name']); ?></option>                                                  
                                  <?php 
                              }
                                  
                                }
                      ?>
              </select>
              </div>
            </div>
    
            <!-- Email input-->
            <div class="form-group">
              <label class="col-md-3 control-label" for="email">Enter Employee Name</label>
              <div class="col-md-9">
                <input id="emp" name="employee_name" type="text" placeholder="" class="form-control">
              </div>
            </div>
    
           
    
            <!-- Form actions -->
            <div class="form-group">
              <div class="col-md-12 text-right">
                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
              </div>
            </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
</div>