<div class="container">
  <div class="row">
    <h3>Table Mahasiswa</h3>
    <div class="col-md">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">NRP</th>
          <th scope="col">NAMA MAHASISWA</th>
          <th scope="col">JURUSAN</th>
          <th scope="col">STATUS TAGIHAN</th>
          <th scope="col">STATUS KELULUSAN</th>
        </tr>
      </thead>
      <tbody>
      <?php $i=0; foreach($mahasiswa as $mhs): ?>
        <tr>
          <th scope="row"><?= ++$i ?></th>
          <td><?= $mhs["nrp"] ?></td>
          <td><?= $mhs["nama"] ?></td>
          <td><?= $mhs["jurusan"] ?></td>
          <td><?= $mhs["status_tagihan"] ?></td>
          <td><?= $mhs["status_kelulusanmagang"] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
  </div>
</div>
    