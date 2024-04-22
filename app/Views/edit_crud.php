<!doctype html>
<html lang="en">

<head>
  <title>Edit Data</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

        <div class="d-flex justify-content-between ">
          <h4>Edit Data</h4>
          <a class="btn btn-warning" href="<?php echo base_url(); ?>"> <i class="fas fa-angle-left"></i> Back</a>
        </div><br><br>
        <form method="post" action="<?php echo base_url('Home/dataupdate'); ?>">
          <input type = "hidden" name = "uid" value = "<?php echo $data->id; ?>" />
          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" value="<?php echo $data->name; ?>">
          </div>
          <br><br>
		  <div class="form-group">
            <label>Lname</label>
            <input class="form-control" type="text" name="lname" value="<?php echo $data->lname; ?>"><br><br>
          </div>
		  <br><br>
		   <div class="form-group">
            <label>Contact</label>
            <input class="form-control" type="number" name="contact" value="<?php echo $data->contact; ?>"><br><br>
          </div>
          
          <br><br>
          <div class="form-group">
		    <label>Dept</label>
            <select name="dept">	
			<?php foreach($dept as $dp){ ?>
			<option value="<?php echo $dp['name']; ?>" <?php echo ($data->dept == $dp['name']) ? 'selected' : ''; ?>><?php echo $dp['name']; ?></option>
			<?php } ?>
			</select>
           
          </div>
          <br><br>
          <div class="form-group">
            <button type="submit" class="btn btn-success"> <i class="fas fa-check"></i> Submit </button>
          </div>

        </form>


      </div>
    </div>
  </div>
</body>

</html>