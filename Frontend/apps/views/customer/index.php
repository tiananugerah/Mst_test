<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- /.card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Data</h3>
        </div>
        <div class="row" style="margin: 15px">
          <div class="col-md-2">
            <a href="customer/create" class="btn btn-block btn-primary">Create</a>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Name</th>
                <th>Telp</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                if ($data_customer->code == 200) {
                    foreach ($data_customer->data as $hasil){
              ?>
              <tr>
                  <td><?php echo $no++ ?></td>   
                  <td><?php echo $hasil->kode ?></td>   
                  <td><?php echo $hasil->name ?></td>
                  <td><?php echo $hasil->telp ?></td>
                  <td>
                      <?php 
                          echo anchor(site_url('customer/get_by/'.$hasil->id),'Edit'); 
                          echo ' | '; 
                          echo anchor(site_url('customer/delete/'.$hasil->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                      ?>
                  </td>
              </tr>
              <?php
                  }
                  } else {
              ?>
              <tr>
                  <th colspan="6"><center>DATA TIDAK DI TEMUKAN</center></th>
              </tr>
              <?php
                  }
              ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Name</th>
                <th>Telp</th>
                <th>Action</th>
              </tr>
            </tfoot>
          </table>
        </div>
      <!-- /.card-body -->
      </div>
    <!-- /.card -->
    </div>
  <!-- /.col -->
  </div>
</div>
        <!-- /.row -->
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

