<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Daftar Buku</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" onclick="return window.print()"><i class="fas fa-download fa-sm text-white-50"></i> Print</a>

                    </div>
                    <a href="tambah.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus"></i> Tambah Buku</a>
                

                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Kategori</th>
                                            <th>Penerbit</th>
                                            <th>Penulis</th>
                                            <th>Tahun</th>
                                            <th>Halaman</th>
                                            <th>Jumlah(eks)</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <tr>
                                            <td><?=$buku["judul"];?></td>
                                            <td><?=$buku["kategori"];?></td>
                                            <td><?=$buku["penerbit"];?></td>
                                            <td><?=$buku["penulis"];?></td>
                                            <td><?=$buku["tahun"];?></td>
                                            <td><?=$buku["jml_halaman"];?></td>
                                            <td><?=$buku["jml_buku"];?></td>
                                            <td>
                                                <a href="edit.php?id=<?=$buku["id"];?>"><i class="fas fa-edit"></i></a> <a href="hapus.php?id=<?=$buku["id"];?>"><i class="fas fa-trash-alt"></i></a>
    
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                    
                </div>
                <!-- /.container-fluid -->
