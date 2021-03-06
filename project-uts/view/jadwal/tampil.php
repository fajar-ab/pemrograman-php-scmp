<?php
require_once __DIR__ . '/../../src/jadwal/function.php';

$dataJadwal = dataJadwal();
?>

<!-- card table jadwal -->
<div class="card">
  <div class="card-header text-muted">
    <i class="fa-solid fa-table me-1"></i>
    List Jadwal
  </div>
  <div class="card-body">
    <!-- table jadwal matakuliah -->
    <div class="table-responsive">
      <table class="table text-nowrap">
        <thead>
          <tr>
            <th role="col"></th>
            <th role="col"><i class="fa-solid fa-calendar-day me-2"></i>Hari</th>
            <th role="col"><i class="fa-solid fa-book-open me-2"></i>Matakuliah</th>
            <th role="col"><i class="fa-solid fa-clock me-2"></i>Pukul</th>
            <th role="col"><i class="fa-solid fa-door-closed me-2"></i>Ruangan</th>
            <th role="col"><i class="fa-solid fa-chalkboard-user me-2"></i>Dosen</th>
          </tr>
        </thead>
        <?php if (count($dataJadwal) > 0) : ?>
          <!-- table body -->
          <tbody>
            <?php foreach ($dataJadwal as $jadwal) : ?>
              <tr>
                <!-- menu aksi -->
                <td style="padding-left: 0;padding-right: 0">
                  <div class="dropend">
                    <button type="button" class="btn btn-link btn-rounded btn-sm dropdown-toggle" data-mdb-toggle="dropdown" aria-expanded="false">
                    </button>
                    <ul class="dropdown-menu">
                      <li>
                        <a class="dropdown-item" href="#">
                          <i class="fa-solid fa-pen-to-square me-1"></i>Edit
                        </a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item" data-mdb-toggle="modal" data-mdb-target="#hapus">
                          <i class="fa-solid fa-trash me-1"></i>Hapus
                        </a>
                      </li>
                    </ul>
                  </div>
                </td>
                <!-- menu aksi -->
                <td class="text-uppercase">
                  <span class="badge rounded-pill d-inline" id="hari-badge">
                    <?= $jadwal[0] ?>
                  </span>
                </td>
                <td class="fw-bolder text-body"><?= $jadwal[1] ?></td>
                <td><?= $jadwal[2] ?></td>
                <td>
                  <span class="badge d-inline" id="ruangan-badge">
                    <?= $jadwal[3] ?>
                  </span>
                </td>
                <td><?= $jadwal[4] ?></td>
              </tr>

              <!-- modals -->
              <div class="modal fade" id="hapus" tabindex="-1" aria-labelledby="modalHapus" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-sm">
                  <div class="modal-content">
                    <div class="modal-body text-center pt-4">
                      <p class="m-0">Anda yakin ingin menghapus data</p>
                    </div>
                    <div class="modal-footer p-1 mx-auto border-0">
                      <button type="button" class="btn btn-sm btn-secondary d-block" data-mdb-dismiss="modal">
                        Batal
                      </button>
                      <a class="btn btn-sm btn-primary">Hapus</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modals -->
            <?php endforeach ?>
          </tbody>
          <!-- table body -->
        <?php else : ?>
          <tfoot>
            <th colspan="6"></th>
          </tfoot>
        <?php endif ?>
      </table>
    </div>
    <!-- table jadwal matakuliah -->
  </div>
</div>
<!-- card table jadwal -->


<!-- menu aksi -->
<div class="fixed-action-btn" style="right: 1rem">
  <a class=" btn btn-floating btn-primary btn-lg" data-mdb-toggle="tooltip" data-mdb-placement="left" title="Tambah Jadawal" style="background-color: #f44336">
    <i class="fas fa-plus"></i>
  </a>
  <ul class="list-unstyled"></ul>
</div>
<!-- menu aksi -->