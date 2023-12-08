
<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Aprycot | Restaurant Management Admin Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/images/favicon.ico" ?>"/>
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/css/core/libs.min.css" ?>">
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/css/aprycot.min.css?v=1.0.0" ?>">  
    
    <!-- admin -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" /> 
      
    </head>
  <body class="  "  style="background: #fbf7f3">

    <div class="position-relative">

    </div>
    

    <main class="main-content">

<div style="padding: 50px" class="container-fluid px-4">
<div class="container-xl">
<form style="background: white; border-radius: 10px; padding: 20px 20px" action="/signup1" method="post">
		<div class="table-wrapper">
				<div class="form-group">
				<div class="table-title">
					<div class="row">
						<div class="col-sm-6">
							<h2>Edit <b>User</b></h2>
						</div>
					</div>
				</div>

                    <input type='hidden' name='id' value='<?php if(isset($selected['id'])): ?><?= $selected['id']; endif; ?>'>
						<label>Name</label>
						<input type="text" class="form-control" name="name" value='<?php if(isset($selected['name'])): ?><?= $selected['name']; endif; ?>' required />
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" name="email" value='<?php if(isset($selected['email'])): ?><?= $selected['email']; endif; ?>'required />
					</div>
					<div class="form-group">
						<label>Address</label>
						<input type="text" class="form-control" name="address" value='<?php if(isset($selected['address'])): ?><?= $selected['address']; endif; ?>' required />
					</div>
					<div class="form-group">
						<label>Phone</label>
						<input type="text" class="form-control" name="phone" value='<?php if(isset($selected['phone'])): ?><?= $selected['phone']; endif; ?>'required />
					</div>	
                    <div class="form-group">
						<label>Status</label>
                        <select id="status" name="status" style="width: 1070px; height: 40px; border-radius: 5px #dadfe3" class="form-group">
                            <?php if ($selected['status'] == 'Approve'): ?>
                            <option value="User" selected>User</option>
                            <option value="Admin">Admin</option>
                            <?php else: ?>
                            <option value="User">User</option>
                            <option value="Admin" selected>Admin</option>
                            <?php endif; ?>
                        </select>
					</div>		
                    <div class="form-group">
						<label>Date</label>
						<input id='date' placeholder="" value="" type="date" class="form-control" name="date" required/>
					</div>					
		<div class="modal-footer">
                    <a href='<?= base_url(); ?>/mainview' class="modal-edit 1" style="color: inherit; text-decoration: none; margin:20px" >Cancel</a>
					<input style="background: #ea6a12; border: none" type="submit" class="btn btn-info" value="Save">
				</div>	
				</div>
</div>
	</form>
</div>
</div>

</main>
    <!-- Wrapper End-->
    <!-- offcanvas start -->

    <!-- Required Library Bundle Script -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/js/core/libs.min.js" ?>"></script>
    
    <!-- External Library Bundle Script -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/js/core/external.min.js" ?>"></script>
    
    <!-- Mapchart JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/js/charts/dashboard.js" ?>"></script>
    
    <!-- fslightbox JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/js/fslightbox.js" ?>"></script>
    
    <!-- app JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/js/app.js" ?>"></script>
    
    <!-- moment JavaScript -->
    <script src="<?php echo BASE_URL . PUBLIC_DIR .  "/admin/assets/vendor/moment.min.js" ?>"></script>  
</body>
</html>