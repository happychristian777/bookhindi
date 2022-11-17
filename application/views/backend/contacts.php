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
      Messages List</div>
    <div class="card-body">
  <!--<div class="card-body1">-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
           <!-- <th>passserial</th>-->
              <th>Name</th>
              <th>Email</th>
   
              <th>Contact Number</th>
              <th>Message</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>Name</th>
              <th>Email</th>
   
              <th>Contact Number</th>
              <th>Message</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->email; ?></td>
     
              <td><?php echo $row->contact;?></td>
              <td><?php echo $row->message;?></td>
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