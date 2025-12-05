<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Produk</h1>
    </div>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a class="btn btn-primary" href="<?= base_url('index.php/login/prosesLogin/') ?>">Tambah produk</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kategori</th>
                            <th>Nama produk</th>
                            <th>Stock produk</th>
                            <th>Harga satuan</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 0;
                        foreach ($produk as $dtPorduk) : ?>
                            <tr>
                                <td><?= ++$no  ?></td>
                                <td><?= $dtPorduk->nama_kategori ?></td>
                                <td><?= $dtPorduk->nama_produk ?></td>
                                <td><?= $dtPorduk->stock_produk ?></td>
                                <td><?= $dtPorduk->harga_satuan ?></td>
                                <td><img src="<?= base_url() ?>dokumen/<?= $dtPorduk->foto ?>" alt=""></td>
                                <td>
                                    <a class="btn btn-info btn-circle btn-sm" title="Ubah produk" href=""><i class="fas fa-check"></i></a>
                                    <a class="btn btn-danger btn-circle btn-sm" title="Hapus produk" href=""><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->