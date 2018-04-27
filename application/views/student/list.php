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
                <span><i>Daftar Siswa</i></span>
                
            </div>
            <div class="box-tools">
              <a href="<?php echo site_url('student/add') ?>" class="btn btn-primary btn-sm"> <i class="fa fa-plus-circle"></i> Tambah baru</a>
          </div>
      </div>
      <div class="box-body">
          <div class="table-responsive">
            <table class="table table-hover table-condensed">
                <tr>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>AKSI</th>
                </tr>
                <?php
                if (!empty($students)) {
                    foreach ($students as $row) {
                        ?>  
                        <tr>
                            <td >
                                <a href="<?php echo site_url('student/detail/' . $row['student_id']); ?>" >
                                    <b><?php echo $row['student_name']; ?></b>
                                </a>
                            </td>
                            <td ><?php echo $row['student_address']; ?></td>
                            <td >
                                <span>
                                    <a href="<?php echo site_url('student/edit/'.$row['student_id']) ?>" class="btn btn-flat btn-xs btn-success"> <i class="fa fa-edit"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr id="row">
                        <td colspan="3" align="center">Data Kosong</td>
                    </tr>
                    <?php
                }
                ?>   
            </table>
        </div>
    </div>
</div>
</div>
</div>

</section>