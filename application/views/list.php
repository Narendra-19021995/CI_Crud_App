
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CRUD Application - View Users</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
     <div class="container">
    <a href="#" class="navbar-brand">CRUD CI Application</a>
     </div>
        </div>
     <div class="container" style="padding:top-10px; margin-top:10px;">
     <div class="row">
     <div class="col-md-12">
         <?php 
         $success =$this->session->userdata('success');
         if($success!= ""){?>
         <div class="alert alert-success"><?php echo $success;?></div>
         <?php
         }
         ?>
         <?php
         $failure =$this->session->userdata('failure');
         if($failure!=""){
             ?>
             <div class="alert alert-failure"><?php echo $failure;?></div>
             <?php
         }
         ?>
     </div>
     </div>
    <div class="row">
        <div class="col-md-12">
             <div class="row">
         <div class="col-6"><h3 class="text">View Users</h3></div>
     <div class="col-6">
         <a href="<?php echo base_url().'index.php/user/create';?>" class="btn btn-primary">Create</a>
     </div>
     </div>
        </div>
    </div>
       
         <hr>  
         <div class="row">
          <div class="col-md-12">
          <div class="row">
              <div class="col-md-8">
                  <table class="table table-striped">
                      <tr>
                          <th>ID</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th width="70">Edit</th>
                          <th width="70">Delete</th> 
                      </tr>
                      <?php if(!empty($users)){ foreach($users as $users) {?>

                      
                      <tr>
                          <td><?php echo $users['user_id']?></td>
                          <td><?php echo $users['name']?></td>
                          <td><?php echo $users['email']?></td>
                          <td>
                              <a href="<?php echo base_url().'index.php/user/edit/'.$users['user_id']?>" class="btn btn-primary">Edit</a>
                          </td>
                          <td>
                              <a href="<?php echo base_url().'index.php/user/delete/'.$users['user_id']?>" class="btn btn-danger">Delete</a>
                          </td>
                      </tr>
                    <?php } } else {?>
                    <tr><td colspan="5">Records Not Found</td></tr>
                    <?php } ?>
                  </table>
              </div>

          </div>

          </div>
         </div>
        

     </div>
</body>
</html>