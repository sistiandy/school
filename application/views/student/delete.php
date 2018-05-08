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
                <span><i>Hapus Siswa</i></span>
            </div>
      </div>
      <div class="box-body">
        <h3>Apakah anda yakin akan menghapus data ini?</h3>
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
        <?php echo form_open(current_url()) ?>
        <input type="hidden" name="id" value="<?php echo $student['student_id'] ?>">
        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
        <a href="<?php echo site_url('student') ?>" class="btn btn-warning"> <i class="fa fa-arrow-circle-o-left"></i> Batal</a>
        <?php echo form_close() ?>
    </div>
</div>
</div>
</div>

</section>