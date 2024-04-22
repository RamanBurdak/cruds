<!doctype html>
<html lang="en">

<head>
  <title>Codeigniter 4</title>
</head>

<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">

    

        <div class="d-flex justify-content-between mb-3">
          <h4>Codeigniter Crud</h4>
          <a href="<?= base_url('Home/create') ?>" class="btn btn-success"> <i class="fas fa-plus"></i> Add New Record</a> <br><br>
        </div>

        <table class="table table-bordered table-default" style="border: 1px solid black">

          <thead class="thead-light">
            <tr style="border: 1px solid black">
              <th style="border: 1px solid black" width="25%">Name</th>
              <th style="border: 1px solid black" width="25%">Lame</th>
              <th style="border: 1px solid black" width="25%">Contact</th>
              <th style="border: 1px solid black" width="15%">dept</th>
              <th style="border: 1px solid black" width="10%">update</th>
            </tr>
          </thead>

          <tbody>

            <?php foreach ($data as $crud) { //var_dump($crud);die;?>

              <tr style="border: 1px solid black">
                <td style="border: 1px solid black"><?php echo $crud['name']; ?></td>
                <td style="border: 1px solid black"><?php echo $crud['lname']; ?></td>
                <td style="border: 1px solid black"><?php echo $crud['contact']; ?></td>
                <td style="border: 1px solid black"><?php echo $crud['dept']; ?></td>

                <td style="border: 1px solid black">
                  <a href="<?= base_url('Home/edita/' . $crud['id']) ?>" class="btn btn-primary"> <i class="fas fa-edit"></i> Edit </a>
                  <a href="<?= base_url('Home/datadelete/' . $crud['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')"> <i class="fas fa-trash"></i> Delete </a>
                </td>

              </tr>

            <?php  } ?>

          </tbody>

        </table>

      </div>
    </div>
  </div>
</body>

</html>