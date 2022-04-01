<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- /.card -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Data</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Nama Customer</th>
                <th>Jumlah Barang</th>
                <th>Sub Total</th>
                <th>Diskon</th>
                <th>Ongkir</th>
                <th>Total Bayar</th>
                <th>Keterangan</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $no = 1;
                if ($data_transaksi->code == 200) {
                    foreach ($data_transaksi->data as $hasil){
              ?>
              <tr>
                  <td><?php echo $no++ ?></td>   
                  <td><?php echo $hasil->no_transaksi ?></td>   
                  <td><?php echo $hasil->tgl ?></td>
                  <td><?php echo $hasil->nama ?></td>
                  <td><?php echo $hasil->jml_barang ?></td>   
                  <td><?php echo $hasil->sub_total ?></td>
                  <td><?php echo $hasil->diskon ?></td> 
                  <td><?php echo $hasil->ongkir ?></td>
                  <td><?php echo $hasil->total_bayar ?></td>
                  <td>
                      <?php echo anchor(site_url('transaksi/detail/'.$hasil->id),'Detail'); ?>
                  </td>
                  <td>
                      <?php 
                          echo anchor(site_url('transaksi/get_by/'.$hasil->id),'Edit'); 
                          echo ' | '; 
                          echo anchor(site_url('transaksi/delete/'.$hasil->id),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Nama Customer</th>
                <th>Jumlah Barang</th>
                <th>Sub Total</th>
                <th>Diskon</th>
                <th>Ongkir</th>
                <th>Total Bayar</th>
                <th>Keterangan</th>
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

