<!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1> Halaman Permintaan<small>permintaan data iklan</small></h1>
            <ol class="breadcrumb">
                
            </ol>
        </section><!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <div class="box box-info">


                        <div class="box-header with-border">
                            <h3 class="box-title">Form Iklan</h3>
                        </div><!-- /.box-header -->
                        
                        <!-- form start -->
                        <div class="box-body">
                            <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="varchar">Judul Iklan<?php echo form_error('id_iklan') ?></label>
                                <input type="hidden"  readonly="true" class="form-control" name="id_iklan" id="id_iklan" placeholder=" id_iklan" value="<?php echo $id_iklan; ?>" />
                                 <input type="hidden"  readonly="true" class="form-control" name="id_user" id="id_user" placeholder="id_user" value="<?php echo $id_user; ?>" />
                                <input type="hidden"class="form-control" name="id_admin" id="id_admin" placeholder="id_admin" value="<?php echo $id_admin; ?>" />
                                <input type="text"  readonly="true" class="form-control" name="judul_iklan" id="judul_iklan" placeholder=" judul_iklan" value="<?php echo $judul_iklan; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Type Mobil<?php echo form_error('type_mobil') ?></label>
                                <input type="text"  readonly="true" class="form-control" name="type_mobil" id="type_mobil
                                " placeholder="Type Mobil" value="<?php echo $type_mobil; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Merk<?php echo form_error('merk') ?></label>
                                <input type="text"  readonly="true" class="form-control" name="merk" id="merk" placeholder=" merk" value="<?php echo $merk; ?>" />
                            </div>
                            <div class="form-group">
                                <label for="varchar">Transmisi<?php echo form_error('transmisi') ?></label>
                                <input type="text"  readonly="true" class="form-control" name="transmisi" id="transmisi" placeholder=" transmisi" value="<?php echo $transmisi; ?>" />   
                            </div>
                              <div class="form-group">
                                <label for="varchar">Tahun Mobil<?php echo form_error('tahun_mobil') ?></label>
                                <input type="text" readonly="true" class="form-control" name="tahun_mobil" id="tahun_mobil" placeholder=" transmisi" value="<?php echo $tahun_mobil; ?>" />   
                            </div>
                             <div class="form-group">
                                <label for="varchar">No Telepon<?php echo form_error('no_telp') ?></label>
                                <input type="text" readonly="true" class="form-control" name="no_telp" id="no_telp" placeholder="no_telp" value="<?php echo $no_telp; ?>" />   
                            </div>
                            <div class="form-group">
                                <label for="varchar">Alamat<?php echo form_error('alamat') ?></label>
                                <input type="text" readonly="true" class="form-control" name="alamat" id="transmisi" placeholder="alamat" value="<?php echo $alamat; ?>" />   
                            </div>
                            <div class="form-group">
                                <label for="varchar">Deskripsi Mobil<?php echo form_error('deskripsi') ?></label>
                                <input type="textarea" readonly="true"  class="form-control" name="deskripsi" id="transmisi" placeholder="harga" value="<?php echo $deskripsi; ?>" />   
                            </div>
                             <div class="form-group">
                                <label for="num">Harga Sewa<?php echo form_error('harga') ?></label>
                                <input type="text" readonly="true" class="form-control" name="harga" id="harga" placeholder="harga" value="<?php echo $harga; ?>" />   
                            </div>
                             <div class="form-group">
                                 <label for="value">Status Iklan<?php echo form_error('status_iklan') ?></label>
                                <select class="form-control" name="status_iklan" id="status_iklan">
                                    <option value="aktif" <?php if ($status_iklan=='aktif') echo "selected" ?> >aktif</option>
                                    <option value="nonaktif" <?php if ($status_iklan=='nonaktif') echo "selected" ?> >nonaktif</option>
                                    <option value="moderasi" <?php if ($status_iklan=='moderasi') echo "selected" ?> >moderasi</option>
                                </select> 
                            </div>
                                <label for="value">Status Verifikasi<?php echo form_error('verifikasi_iklan') ?></label>
                                <select class="form-control" name="verifikasi_iklan" id="verifikasi_iklan">
                                    <option value="dalam proses" <?php if ($verifikasi_iklan=='dalam proses') echo "selected" ?> >dalam proses</option>
                                    <option value="iklan disetujui" <?php if ($verifikasi_iklan=='iklan disetujui') echo "selected" ?> >disetujui</option>
                                    <option value="iklan ditolak" <?php if ($verifikasi_iklan=='ditolak') echo "selected" ?> >ditolak</option>
                                </select> 
                            </div>
                            <div class="form-group">
                                <label for="varchar">Tanggal daftar<?php echo form_error('tgl_iklan') ?></label>
                                <input type="text" readonly="true" class="form-control" name="tgl_iklan" id="tgl_iklan" placeholder="harga" value="<?php echo $tgl_iklan; ?>" />   
                            </div>
                      

                            <input type="hidden"  name="id_iklan" value="<?php echo $id_iklan; ?>" /> 
                            <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
                            <a href="<?php echo site_url('request_iklan') ?> " class="btn btn-default">Cancel</a>
                        </form>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->


