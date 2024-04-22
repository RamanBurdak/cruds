<html lang="en">

<head>

  <title>Add New form</title>
</head>

<body>

  <div class="container">
    <div class="row">

      <div class="col-lg-12 my-5">
        <h2 class="text-center mb-3">Codeigniter 4 dept</h2>
      </div>

      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Add New Record</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Back</a><br><br>
        </div>
        <form method="post" action="<?php echo base_url('Home/stored'); ?>">

          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name">
			<small class="text-danger"><?= isset($validation['name']) ? $validation['name'] : null ;  ?></small><br><br>
          </div>
		  <div class="form-group">
            <label>Lname</label>
            <input class="form-control" type="text" name="lname">
			<small class="text-danger"><?= isset($validation['lname']) ? $validation['lname'] : null ;  ?></small><br><br>
          </div>
		   <div class="form-group">
            <label>Contact</label>
            <input class="form-control" type="number" name="contact">
			<small class="text-danger"><?= isset($validation['contact']) ? $validation['contact'] : null ;  ?></small><br><br>
          </div>

          <div class="form-group">
            <label>Dept</label>
            <select name="dept">
			<?php foreach($dept as $dp){ ?>
			<option value="<?php echo $dp['name'];?>"><?php echo $dp['name'];?></option>
			
			<?php } ?>
			</select>
          </div><br><br>

          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>

</body>

</html>