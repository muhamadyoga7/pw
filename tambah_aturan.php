<?php

if (isset($_POST['simpan'])) {

    // mengambil data dari form
    $nmpenyakit = $_POST['nmpenyakit'];

    // validasi nama penyakit
    $sql = "SELECT basis_aturan.idaturan, basis_aturan.idpenyakit, penyakit.nmpenyakit 
            FROM basis_aturan 
            INNER JOIN penyakit ON basis_aturan.idpenyakit = penyakit.idpenyakit 
            WHERE penyakit.nmpenyakit = '$nmpenyakit'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        ?>
        <div class="alert alert-danger alert-dismissible fade show">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Data Basis Aturan Penyakit tersebut sudah ada</strong>
        </div>
        <?php
    } else {
        // Mengambil data penyakit
        $sql = "SELECT * FROM penyakit WHERE nmpenyakit='$nmpenyakit'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        $idpenyakit = $row['idpenyakit'];

        // Proses simpan basis aturan
        $sql = "INSERT INTO basis_aturan (idaturan, idpenyakit) VALUES (NULL, '$idpenyakit')";
        mysqli_query($conn, $sql);

        // Proses simpan detail basis aturan
        if (isset($_POST['idgejala']) && is_array($_POST['idgejala'])) {
            $idgejala = $_POST['idgejala'];

            // Proses mengambil data aturan
            $sql = "SELECT * FROM basis_aturan ORDER BY idaturan DESC LIMIT 1";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            $idaturan = $row['idaturan'];

            // Proses simpan detail basis aturan
            foreach ($idgejala as $idgejalane) {
                $sql = "INSERT INTO detail_basis_aturan (idaturan, idgejala) VALUES ($idaturan, '$idgejalane')";
                mysqli_query($conn, $sql);
            }
        } else {
            // Tangani kasus ketika tidak ada idgejala yang dikirim
            ?>
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Detail Basis Aturan tidak valid</strong>
            </div>
            <?php
        }
        header("Location:?page=aturan");
    }
}
?>

<div class="row">
    <div class="col-sm-12">
        <form action="" method="POST" name="Form" onsubmit="return validasiForm()">
            <div class="card border-dark">
                <div class="card">
                    <div class="card-header bg-primary text-white border-dark"><strong>TAMBAH DATA BASIS ATURAN</strong>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="">Nama Penyakit</label>
                            <select class="form-control chosen" data-placeholder="Pilih Nama Penyakit"
                                name="nmpenyakit">
                                <option value=""></option>
                                <?php
                                $sql = "SELECT * FROM penyakit ORDER BY nmpenyakit ASC";
                                $result = $conn->query($sql);
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <option value="<?php echo $row['nmpenyakit']; ?>"><?php echo $row['nmpenyakit']; ?>
                                    </option>
                                    <?php
                                }
                                ?>
                            </select>
                        </div>

                        <!-- tabel gejala -->
                        <div class="form-group">
                            <label for="">Pilih Gejala Berikut</label>
                            <table class="table table-hover table-bordered table-sm" id="">
                                <thead>
                                    <tr>
                                        <th width="10px"></th>
                                        <th width="10px">No.</th>
                                        <th width="700px">Nama Gejala</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    $sql = "SELECT * FROM gejala ORDER BY nmgejala ASC";
                                    $result = $conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <tr>
                                            <td align="center"><input type="checkbox" class="check-item" name="idgejala[]"
                                                    value="<?php echo $row['idgejala']; ?>"></td>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row['nmgejala']; ?></td>
                                        </tr>
                                        <?php
                                    }
                                    $conn->close();
                                    ?>
                                </tbody>
                            </table>
                        </div>

                        <input class="btn btn-primary" type="submit" name="simpan" value="Simpan">
                        <a class="btn btn-danger" href="?page=aturan">Batal</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript">
    // validasi nama penyakit
    function validasiForm() {
        var nmpenyakit = document.forms["Form"]["nmpenyakit"].value;

        if (nmpenyakit == "") {
            alert("Pilih nama penyakit");
            return false;
        }

        // validasi gejala yang belum dipilih
        var checkbox = document.getElementsByName('<?php echo 'idgejala[]'; ?>');
        var isChecked = false;

        for (var i = 0; i < checkbox.length; i++) {
            if (checkbox[i].checked) {
                isChecked = true;
                break;
            }
        }
        // jika belum ada yang dicheck
        if (!isChecked) {
            alert('Pilih setidaknya satu gejala ya!');
            return false;
        }
        return true;
    }
</script>