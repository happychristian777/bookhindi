<div id="content-wrapper">

<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Manage Flight</li>
  </ol>

  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      View/Edit/Delete Flight</div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

          <thead>
            <tr>
              <th>FLIGHT NO</th>
              <th>ORIGIN</th>
              <th>DESTIONATION</th>
              <th>ARRIVAL TIME</th>
              <th>DEPARTURE TIME</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>

          <tfoot>
            <tr>
            <tr>
              <th>FLIGHT NO</th>
              <th>ORIGIN</th>
              <th>DESTIONATION</th>
              <th>ARRIVAL TIME</th>
              <th>DEPARTURE TIME</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
            </tr>
          </tfoot>

          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->flightnum; ?></td>
              <td><?php echo $row->origin; ?></td>
              <td><?php echo $row->dest; ?></td>
              <td><?php echo $row->arr_time; ?></td>
              <td><?php echo $row->dep_time; ?></td>
              <td><a href="<?php echo base_url();?>Admin/editFlight?id=<?php echo $row->flightnum;?>">EDIT</a></td>
              <td><a href="<?php echo base_url();?>Admin/deleteFlight?id=<?php echo $row->flightnum;?>">DELETE</a></td>
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
