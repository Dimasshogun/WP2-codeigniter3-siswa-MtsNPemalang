<!-- container untuk menampung, atau menaruh sesuatu -->
<section id="" class="">
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Siswa MTs Negeri Pemalang</h3>
            <ul class="list-group">
                <center>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Nis</th>
                                <th scope="col">JK</th>
                                <th scope="col">Alamat</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($siswa as $dimas) : ?>
                            
                            <tr>
                                <td><?= $dimas['nama']; ?></td>
                                <td><?= $dimas['nis']; ?></td>
                                <td><?= $dimas['jeniskelamin']; ?></td>
                                <td><?= $dimas['alamat']; ?></td>
                            </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </center>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>siswa/tambah" class="btn btn-primary"> Tambah Data Mahasiswa</a>
        </div>
    </div>
</div>
</section>

<!-- my css nggo about -->
<style>
    section {
        min-height: 500px;
    }
</style>