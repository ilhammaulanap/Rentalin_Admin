<!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Halaman Mobil <small>form data mobil</small></h1>
           
        </section><!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="box box-info">


                        <div class="box-header with-border">
                            <h3 class="box-title">Mobil</h3>
                        </div><!-- /.box-header -->
                        
                        <!-- form start -->
                        <div class="box-body">
                            <h2 style="margin-top:0px">Detail Iklan</h2>
							<table class="table">
                                <tr><td>JUDUL IKLAN</td><td><?php echo $judul_iklan; ?></td></tr>
							    <tr><td>NAMA MOBIL</td><td><?php echo $merk; ?></td></tr>
                                <tr><td>TYPE MOBIL</td><td><?php echo $type_mobil; ?></td></tr>
							    <tr><td>MERK MOBIL</td><td><?php echo $merk; ?></td></tr>
                                <tr><td>TRANSMISI</td><td><?php echo $transmisi; ?></td></tr>
                                <tr><td>TAHUN MOBIL</td><td><?php echo $tahun_mobil; ?></td></tr>
                                <tr><td>NO TELEPON</td><td><?php echo $no_telp; ?></td></tr>
                                <tr><td>ALAMAT</td><td><?php echo $alamat; ?></td></tr>
							    <tr><td>DESKRIPSI MOBIL</td><td><?php echo $deskripsi; ?></td></tr>
							    <tr><td>HARGA SEWA</td><td>Rp. <?php echo number_format($harga) ?></td></tr>
							    <tr><td>STATUS IKLAN</td><td><?php echo $status_iklan; ?></td></tr>
                                <tr><td>TANGGAL IKLAN</td><td><?php echo $tgl_iklan; ?></td></tr>
                                <tr><td>photo1</td><td><img src="<?php echo base_url('upload/mobil'.$photo1); ?>" width="450px"></td></tr>

							    <tr><td></td><td><a href="<?php echo site_url('Iklan') ?>" class="btn btn-default">back</a></td></tr>
							</table>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
