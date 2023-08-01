<div class="card mt-2">
    <div class="card-header">
        <h1>Daftar Penerbit</h1>
    </div>
    <div class="card-body">
    <?= $this -> session -> flashdata('pesan');?>  
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary col-12 mb3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Penerbit
        </button>
        <table class="table table-dark table-bordered border-white" id="myTable">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kode Penerbit</th>
                    <th scope="col">Nama Penerbit</th>
                    <th scope="col">Alamat Penerbit</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
    $no = 1;
    foreach($data_penerbit as $row) { ?>
                <tr class="table-active">
                    <th scope="row"><?= $no++;?></th>
                    <td><?= $row['kode_penerbit'];?></td>
                    <td><?= $row['nama_penerbit'];?></td>
                    <td><?= $row['alamat_penerbit'];?></td>
                    <td><a href="<?= base_url('pages/show_edit_page_penerbit/').$row['kode_penerbit'];?>"
                            class="btn btn-info btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            Edit</a>
                        <a href="<?= base_url('pages/hapus_penerbit/').$row['kode_penerbit'];?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Hapus Data Ini?')">
                            <i class="fa fa-trash-o" aria-hidden="true"></i>
                            Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</div>