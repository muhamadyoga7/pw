<div class="card">
    <div class="card-header bg-primary text-white border-dark"><strong>Data Hasil Konsultasi</strong></div>
    <div class="card-body">
        <table class="table table-bordered" id="myTable">
            <thead>
                <tr>
                    <th width="10px">No.</th>
                    <th width="100px">Tanggal</th>
                    <th width="200px">Nama Pasien</th>
                    <th width="100px">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $sql = "SELECT * from konsultasi
                ORDER BY tanggal DESC;
";
                $result = $conn->query($sql);
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['tanggal']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td class="text-center">
                            <a class="btn btn-primary"
                                href="?page=konsultasiadm&action=detail&id=<?php echo $row['idkonsultasi']; ?>">
                                <i class="fas fa-list"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>