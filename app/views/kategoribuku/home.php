<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/kategoribuku/create'); ?>" class="btn btn-primary float-right">
                  Tambah Kategori
                </a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama Kategori</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $k): ?>
                    <tr>
                      <td><?= $no; ?></td>
                      <td><?= $k['NamaKategori']; ?></td>
                      <td>
                        <a 
                        href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/edit') ?>"
                        class="btn btn-warning
                        ">
                          Edit
                        </a>

                        
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete<?=$k['KategoriID']?>">
                          delete
                        </button>
                      </td>
                    </tr>
                    <?php $no++; ?>
                    <div class="modal fade" id="confirmDelete<?=$k['KategoriID']?>" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-body text-center">
                                  <h2>Confirm Delete Data?</h2>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <a href="<?= urlTo('/kategoribuku/'.$k['KategoriID'].'/delete') ?>" class="btn btn-primary">Yes, delete it</a>
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