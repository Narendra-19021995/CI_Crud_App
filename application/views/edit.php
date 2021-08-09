
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CRUD Application - Update User</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'asset/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
     <div class="container">
    <a href="#" class="navbar-brand">CRUD CI Application</a>
     </div>
        </div>
     <div class="container" style="padding: top-10px;">
         <h3 class="text">Update User</h3>
         <hr>  
         <div class="row">
          <div class="col-md-6">
          <form method="POST" name="createUser"action="<?php echo base_url().'index.php/user/edit/'.$user['user_id'];?>">
          <div class="form-group">
                 <label for="">Name</label>
                 <input type="text" name="name" value="<?php echo set_value('name',$user['name']); ?>" class="form-control">
                 <?php echo form_error('name'); ?>
             </div>
             <div class="form-group">
                 <label for="">Email</label>
                 <input type="text" name="email" value="<?php echo set_value('email',$user['email']); ?>" class="form-control">
                 <?php echo form_error('email'); ?>
             </div>
             <div class="form-group mt-3">
                <button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'index.php/user/index';?>" class="btn btn-secondary">Cancel</a>
             </div>
          </form>
          </div>
         </div>
        

     </div>
</body>
</html>