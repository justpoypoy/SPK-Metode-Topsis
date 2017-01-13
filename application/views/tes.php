<!-- Main content -->
<section class="content">
    <!-- Main row -->
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="alert alert-info">
                        <h4><i class="icon fa fa-check"></i> Notice !</h4>
                    </div>
                    Selamat datang <b><?= ucwords($this -> session -> userdata('username')); ?></b>,<br>
                    <hr>
                    
                    Proses yang dilakukan untuk seleksi adalah sebagai berikut :<br>
                    <ol>
                        <li>Menambahkan periode seleksi.</li>
                        <ul>
                            <li>Masuk halaman menu periode.</li>
                        </ul>
                    </ol>
                    
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div><!-- /.row -->
</section><!-- /.content -->
