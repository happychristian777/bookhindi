<div id="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Mock Test 8 Data</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Data List</div>
    <div class="card-body">
  <!--<div class="card-body1">-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
           <!-- <th>passserial</th>-->
              <th>Data ID</th>
              <th>User ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>File</th>
              <th>Submitted At</th>
              <th>Mock Test</th>
              <th>Question Paper</th>
              <th>Segment</th>
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>Data ID</th>
              <th>User ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Email</th>
              <th>File</th>
              <th>Submitted At</th>
              <th>Mock Test</th>
              <th>Question Paper</th>
              <th>Segment</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->data_id; ?></td>
              <td><?php echo $row->user_id; ?></td>
              <td><?php echo $row->user_firstname;?></td>
              <td><?php echo $row->user_lastname;?></td>
              <td><?php echo $row->user_email;?></td>
              <td><a href="<?php echo base_url();?>uploads/<?php echo $row->user_file;?>"><?php echo $row->user_file;?></a></td>
              <td><?php echo $row->submitted_at;?></td>
              <td><?php echo $row->mock_test;?></td>
              <td><?php echo $row->question_paper;?></td>
              <td><?php echo $row->segment;?></td>
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