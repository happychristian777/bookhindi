<div id="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Users</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Users List</div>
    <div class="card-body">
  <!--<div class="card-body1">-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
           <!-- <th>passserial</th>-->
              <th>First Name</th>
              <th>Last Name</th>
   
              <th>Contact Number</th>
              <th>Email Address</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
              <th>First Name</th>
              <th>Last Name</th>
        
              <th>Contact Number</th>
              <th>Email Address</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->user_firstname; ?></td>
              <td><?php echo $row->user_lastname; ?></td>
     
              <td><?php echo $row->user_contact;?></td>
              <td><?php echo $row->user_email;?></td>
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