<div class="row">
  <div class="col-lg-6">
    <h3>Daftar Mahasiswa</h3>
    <ul class="list-group">
      <?php foreach ($data['mhs'] as $mhs): ?>
        <li class="list-group-item">
          <?= $mhs['nama']; ?>

          <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-end"
            onclick="return confirm('Yang Beneeer??')">Hapus</a>

          <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>"
            class="badge bg-success float-end me-3 ms-3 tampilModeUbah" data-toggle="modal" data-target="#formModal"
            data-id="<?= $mhs['id']; ?>">Ubah</a>

          <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-end">Detail</a>

        </li>
      <?php endforeach; ?>
    </ul>
  </div>

</div>