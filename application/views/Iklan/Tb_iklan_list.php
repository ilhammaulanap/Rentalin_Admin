<!-- Content Wrapper. Contains page content -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Data Iklan </h1>
           
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
                           

                            <br><br>
                            <table class="table table-bordered table-striped" id="mytable">
                                <thead>
                                    <tr>
                                        <th width="20px">No</th>
                                <th>JUDUL IKLAN</th>
                                <th>TYPE MOBIL</th>
                                <!-- <th>DESKRIPSI MOBIL</th> -->
                                <th>MERK</th>
                                <!-- <th>KAPASITAS MOBIL</th> -->
                                <th>TRANSMISI</th>
                              
                                <th>TAHUN MOBIL</th>
                                <!-- <th>IMAGE</th> -->
                                
                                <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- <?php var_dump($data) ?> -->
                                    <?php foreach ($data as $key => $val): ?>
                                        <tr>
                                            <td><?php echo $key+1 ?></td>
                                            <td><?php echo $val->judul_iklan; ?></td>
                                            <td><?php echo $val->type_mobil?></td>
                                           
                                            <td><?php echo $val->merk ?></td>
                                           
                                        
                                            <td><?php echo $val->transmisi ?></td>
                                            <td><?php echo $val->tahun_mobil ?></td>
                                            <td class="text-center"><a href="<?php echo base_url('Iklan/update').'/'.$val->id_iklan ?>">Edit</a>&nbsp;||&nbsp;<a href="<?php echo base_url('Iklan/read').'/'.$val->id_iklan ?>">Detail</a>&nbsp;||&nbsp;<a href="<?php echo base_url('Iklan/delete').'/'.$val->id_iklan ?>">Delete</a></td>
                                        </tr>    
                                    <?php endforeach ?>
                                    
                                </tbody>
                            </table>
                        </div>                        
                    </div>
                </div><!--/.col (right) -->
            </div>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->




        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                var t = $("mytable").dataTable({});
            });
        </script>
