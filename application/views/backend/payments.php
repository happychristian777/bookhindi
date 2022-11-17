<div id="content-wrapper">
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Admin</a>
    </li>
    <li class="breadcrumb-item active">Payments</li>
  </ol>
  <!-- DataTables Example -->
  <div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-table"></i>
      Transactions List</div>
    <div class="card-body">
  <!--<div class="card-body1">-->
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
           <!-- <th>passserial</th>-->
           <th>name</th>
           <th>email</th>
           <th>card_num</th>
      
           <th>card_exp_month</th>
           <th>card_exp_year</th>
           <th>paid_amount</th>
           <th>	paid_amount_currency</th>
           <th>txn_id</th>
           <th>payment_status</th>
           <th>created</th>
           <th>modified</th> 
            </tr>
          </thead>
        
          <tbody>
          <?php foreach($res as $row){ ?>
            <tr>
              <td><?php echo $row->name; ?></td>
              <td><?php echo $row->email; ?></td>
              <td><?php echo $row->card_num;?></td>
           
              <td><?php echo $row->card_exp_month;?></td>
              <td><?php echo $row->card_exp_year;?></td>
              <td><?php echo $row->paid_amount;?></td>
              <td><?php echo $row->paid_amount_currency;?></td>
              <td><?php echo $row->txn_id;?></td>
              <td><?php echo $row->payment_status;?></td>
              <td><?php echo $row->created;?></td>
              <td><?php echo $row->modified;?></td>
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