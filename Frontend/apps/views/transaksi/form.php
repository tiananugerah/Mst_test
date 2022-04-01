
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-12">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title"><?php echo $button ?> Data</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="<?php echo $action; ?>" method="post">              
          <?php 
            $a=null;
            if($kode_sales != null) {
                $a="readonly";  
            }
          ?>
          
          <!-- /.card-body -->
          <div class="card-body">
            <div class="form-group row">
              <label for="kode_sales" class="col-sm-2 col-form-label">No <?php echo form_error('kode_sales') ?></label>
              <div class="col-sm-5">
                <input type="text" <?php echo $a;?> name="kode_sales" class="form-control" id="kode_sales" placeholder="NO" value="<?php echo $kode_sales; ?>" >
              </div>
            </div>
            <div class="form-group row">
              <label for="tgl" class="col-sm-2 col-form-label">Tanggal <?php echo form_error('tgl') ?></label>
              <div class="col-sm-5">
                <input type="text" name="tgl" class="form-control" id="tgl" placeholder="Tanggal" value="<?php echo $tgl; ?>" />
              </div>
            </div>
          </div>
          
          <!-- /.card-body -->
          <div class="card-body">
            <div class="form-group row">
              <label for="kode_customer" class="col-sm-2 col-form-label">Kode <?php echo form_error('kode_customer') ?></label>
              <div class="col-sm-5">
                <input type="text" <?php echo $a;?> name="kode_customer" class="form-control" id="kode_customer" placeholder="Kode" value="<?php echo $kode_customer; ?>" >
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-sm-2 col-form-label">Name <?php echo form_error('name') ?></label>
              <div class="col-sm-5">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $name; ?>" />
              </div>
            </div>
            <div class="form-group row">
              <label for="telp" class="col-sm-2 col-form-label">Telp <?php echo form_error('telp') ?></label>
              <div class="col-sm-5">
                <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" value="<?php echo $telp; ?>" />
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama</th>
                  <th>Qty</th>
                  <th>Harga Bandrol</th>
                  <th>%</th>
                  <th>(RP)</th>
                  <th>Harga Diskon</th>
                  <th>Total</th>
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
                  <td><?php echo $hasil->kode_barang ?></td>   
                  <td><?php echo $hasil->nama_barang ?></td>
                  <td>
                    <input type="text" <?php echo $a;?> name="qty" class="form-control" id="qty" placeholder="Qty" value="<?php echo $hasil->qty; ?>" >
                  </td>   
                  <td><?php echo $hasil->harga_bandrol ?></td>
                  <td>
                    <input type="text" <?php echo $a;?> name="diskon_pct" class="form-control" id="diskon_pct" placeholder="Persen" value="<?php echo $hasil->diskon_pct; ?>" >
                  </td>   
                  <td><?php echo $hasil->diskon_nilai ?></td>
                  <td>
                    <input type="text" <?php echo $a;?> name="harga_diskon" class="form-control" id="harga_diskon" placeholder="Harga Diskon" value="<?php echo $hasil->harga_diskon; ?>" >
                  </td> 
                  <td>
                    <input type="text" <?php echo $a;?> name="total" class="form-control" id="total" placeholder="NO" value="<?php echo $hasil->total; ?>" >
                  </td>
                </tr>
                <?php
                    }
                  } else {
                ?>
                <tr>
                    <th colspan="10"><center>DATA TIDAK DI TEMUKAN</center></th>
                </tr>
                <?php
                  }
                ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kode Barang</th>
                  <th>Nama</th>
                  <th>Qty</th>
                  <th>Harga Bandrol</th>
                  <th>%</th>
                  <th>(RP)</th>
                  <th>Harga Diskon</th>
                  <th>Total</th>
                </tr>
              </tfoot>
            </table>
          </div>
          
          <div class="card-body float-right">
            <div class="form-group row">
              <label for="kode_customer" class="col-sm-5 col-form-label">Sub Total <?php echo form_error('kode_customer') ?></label>
              <div class="col-sm-7">
                <input type="text" <?php echo $a;?> name="kode_customer" class="form-control" id="kode_customer" placeholder="Kode" value="<?php echo $kode_customer; ?>" >
              </div>
            </div>
            <div class="form-group row">
              <label for="name" class="col-sm-5 col-form-label">Diskon <?php echo form_error('name') ?></label>
              <div class="col-sm-7">
                <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="<?php echo $name; ?>" />
              </div>
            </div>
            <div class="form-group row">
              <label for="telp" class="col-sm-5 col-form-label">Ongkir <?php echo form_error('telp') ?></label>
              <div class="col-sm-7">
                <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" value="<?php echo $telp; ?>" />
              </div>
            </div>
            <div class="form-group row">
              <label for="telp" class="col-sm-5 col-form-label">Total <?php echo form_error('telp') ?></label>
              <div class="col-sm-7">
                <input type="text" name="telp" class="form-control" id="telp" placeholder="Telp" value="<?php echo $telp; ?>" />
              </div>
            </div>
          </div>
          <div class="card-footer">
              <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
              <a href="<?php echo base_url('customer') ?>" class="btn btn-second">Cancel</a>
          </div>
        </form>
        
      </div>
      <!-- /.card -->

    </div>
  </div>
  <!-- /.row -->
</div><!-- /.container-fluid -->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
$(function () {
  bsCustomFileInput.init();
});
</script>

<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>