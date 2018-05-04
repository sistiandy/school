<?php
    $student_id = $student['student_id'];
    $student_name = $student['student_name'];
    $student_address = $student['student_address'];
?>
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
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span><i>Tambah Siswa</i></span>
            </div>
            <div class="box-tools">
              <a href="<?php echo site_url('student') ?>" class="btn btn-warning btn-sm"> <i class="fa fa-arrow-left"></i> Kembali</a>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <?php echo form_open_multipart(current_url()); ?>
          <div class="row">
            <div class="col-sm-9 col-md-9">
            <?php echo validation_errors(); ?>
            <input type="hidden" name="student_id" value="<?php echo $student['student_id'] ?>" />
            <label >Nama *</label>
            <input name="student_name" type="text" placeholder="Nama" class="form-control" value="<?php echo $student_name; ?>">
            <label >Alamat *</label>
            <textarea class="form-control" name="student_address"><?php echo $student_address ?></textarea>
            <p style="color:#9C9C9C;margin-top: 5px"><i>*) Field Wajib Diisi</i></p>
            </div>
            <div class="col-sm-9 col-md-3">
                <div class="form-group">
                    <button name="action" type="submit" value="save" class="btn btn-success"><i class="ion-checkmark"></i> Simpan</button>
                    <a href="<?php echo site_url('student/delete/'.$student_id) ?>" class="btn btn-danger"> <i class="fa fa-trash"></i> Hapus</a>
                </div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
</div>
</div>

</section>