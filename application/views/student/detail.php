<section class="content-header">
    <h1>
        Siswa
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?php echo site_url() ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Siswa</li>
    </ol>
</section>


<section class="content">
    <div class="row">
        <div class="col-md-12">
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span><i>Detail Siswa</i></span>
                
            </div>
            <div class="box-tools">
              <a href="<?php echo site_url('student') ?>" class="btn btn-warning btn-sm"> <i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
              <a href="<?php echo site_url('student/delete/'.$student['student_id']) ?>" class="btn btn-danger btn-sm"> <i class="fa fa-trash"></i> Hapus</a>
          </div>
      </div>
      <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $student['student_name'] ?></td>
                </tr> 
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?php echo $student['student_address'] ?></td>
                </tr> 
            </table>
        </div>
    </div>
</div>
</div>
</div>

</section>