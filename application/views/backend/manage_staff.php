<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Manage Staff</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      View/Edit/Delete Staff</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>EMPNUM</th>
              <th>SURNAME</th>
              <th>NAME</th>
              <th>ADDRESS</th>
              <th>PHONE</th>
              <th>SALARY</th>
              <th>EDIT</th>
              <th>DELETE</th>
              
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>EMPNUM</th>
              <th>SURNAME</th>
              <th>NAME</th>
              <th>ADDRESS</th>
              <th>PHONE</th>
              <th>SALARY</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->empnum; ?></td>
              <td><?php echo $row->surname; ?></td>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->address; ?></td>
              <td><?php echo $row->phone; ?></td>
              <td><?php echo $row->salary; ?></td>
              <td><a href="<?php echo base_url();?>Admin/editStaff?id=<?php echo $row->empnum;?>">EDIT</a></td>
              <td><a href="<?php echo base_url();?>Admin/deleteStaff?id=<?php echo $row->empnum;?>">DELETE</a></td>
            </tr>
          <?php } ?>
          </tbody>
        </table>
      </div>
    </div>

  </div>



</div>
<!-- /.container-fluid -->

<!-- Sticky Footer -->


</div>