<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Manage Machine</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      View/Edit/Delete Machine</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>SERIAL NUMBER</th>
              <th>MODEL NUMBER</th>
   
              <th>EDIT</th>
              <th>DELETE</th>
             
            </tr>
          </thead>
          <tfoot>
            <tr>
            <th>SERIAL NUMBER</th>
              <th>MODEL NUMBER</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </tfoot>
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->numser; ?></td>
              <td><?php echo $row->model; ?></td>
      
              <td><a href="<?php echo base_url();?>Admin/editMachine?id=<?php echo $row->numser;?>">EDIT</a></td>
              <td><a href="<?php echo base_url();?>Admin/deleteMachine?id=<?php echo $row->numser;?>">DELETE</a></td>
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