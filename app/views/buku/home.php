<?php include '../app/views/templates/header.php'; $no = 1; ?>
<div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <a href="<?= urlTo('/buku/cetakbuku'); ?>" class="btn btn-success float-left">Cetak Laporan</a>
                <a href="<?= urlTo('/buku/create'); ?>" class="btn btn-primary float-right">Tambah Data</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tindakan</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data as $buku): ?>
                  	<tr>
                  		<td><?= $no; ?></td>
                  		<td><?= $buku['NamaKategori']; ?></td>
                  		<td><?= $buku['Judul']; ?></td>
                  		<td><?= $buku['Penulis']; ?></td>
                      <td>
                        <a 
                          href="<?= urlTo('/buku/'.$buku['BukuID'].'/edit') ?>"
                          class="btn btn-warning
                          ">
                          Edit
                        </a>
                        
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmDelete<?=$buku['BukuID']?>">
                        delete
                        </button>
                        
                        <a 
                          href="<?= urlTo('/buku/'.$buku['BukuID'].'/ulasan') ?>"
                          class="btn btn-info
                          ">
                          Lihat Ulasan
                        </a>
                      </td>
                  	</tr>
                  	<?php $no++; ?>
                    <div class="modal fade" id="confirmDelete<?=$buku['BukuID']?>" aria-hidden="true" style="display: none;">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-body text-center">
                                  <h2>Confirm Delete Data?</h2>
                              </div>
                              <div class="modal-footer justify-content-between">
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  <a href="<?= urlTo('/buku/'.$buku['BukuID'].'/delete') ?>" class="btn btn-primary">Yes, delete it</a>
                              </div>
                          </div>
                      </div>
                    </div>
                  <?php endforeach ?>
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
