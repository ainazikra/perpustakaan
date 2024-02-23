<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/user/create'); ?>" class="btn btn-primary float-right">Tambah Data Petugas</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Role</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $user): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $user['NamaLengkap']; ?></td>
                  		<td><?= $user['Email']; ?></td>
                  		<td><?= $user['Alamat']; ?></td>
                  		<td><?= $user['Role']; ?></td>
                  		<td>
                  			<?php if($user['Role'] === 'Petugas'): ?>
                          <a href="<?= urlTo('/user/'.$user['UserID'].'/edit') ?>" class="btn btn-warning">
                            Edit
                          </a>
                  			<?php endif ?>
                  			
                        <?php if($user['Role'] !== 'Administrator'): ?>
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete<?=$user['UserID']?>">
                            delete
                          </button>
                  			<?php endif ?>
                  		</td>
                  	</tr>
                  	<?php $no++; ?>
                    <div class="modal fade" id="confirmDelete<?=$user['UserID']?>" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-body text-center">
                                  <h2>Confirm Delete Data?</h2>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <a href="<?= urlTo('/user/'.$user['UserID'].'/delete') ?>" class="btn btn-primary">Yes, delete it</a>
                              </div>
                          </div>
                      </div>
                    </div>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
<?php include '../app/views/templates/footer.php'; ?>