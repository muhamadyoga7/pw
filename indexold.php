<?php
ob_start();
session_start();
// koneksi database
include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SPFC</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- datatables css -->
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- chosen css -->
    <link rel="stylesheet" href="assets/css/bootstrap-chosen.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
      .content-auto {
        content-visibility: auto;
      }
    }
  </style>
    <script
        src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp,container-queries"></script>
</head>



<body>
    <!-- Grey with black text -->
    <nav class="navbar navbar-expand-sm navbar-light justify-content-center ">
        <ul class="navbar-nav">
            <li
                class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <!-- setting hak akses -->
            <?php
            if ($_SESSION['role'] == "Dokter") {
                ?>
                <li
                    class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                    <a class="nav-link" href="?page=gejala">Gejala</a>
                </li>
                <li
                    class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                    <a class="nav-link" href="?page=penyakit">Penyakit</a>
                </li>
                <li
                    class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                    <a class="nav-link" href="?page=aturan">Basis Aturan</a>
                </li>
                <li
                    class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                    <a class="nav-link" href="?page=konsultasiadm">Konsultasi</a>
                </li>

                <?php
            } else if ($_SESSION["role"] == "Administrator") {
                ?>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=users">Users</a>
                    </li>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=gejala">Gejala</a>
                    </li>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=penyakit">Penyakit</a>
                    </li>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=aturan">Basis Aturan</a>
                    </li>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=konsultasiadm">Konsultasi</a>
                    </li>

                <?php
            } else { ?>
                    <li
                        class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                        <a class="nav-link" href="?page=konsultasi">Konsultasi</a>
                    </li>

                <?php
            }
            ?>
            <li
                class="nav-item inline-flex items-center rounded-b-lg border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-blue-500 hover:border-blue-300 hover:text-blue-700 active:text-blue-700 active:border-blue-700">
                <a class="nav-link" href="?page=logout">Logout</a>
            </li>
        </ul>
    </nav>

    <!-- cek status login -->
    <?php
    if ($_SESSION['status'] != "y") {
        header("Location:login.php");
    }
    ?>
    <!-- container -->
    <div class="container mt-2 mb-2">

        <!-- setting menu -->
        <?php

        $page = isset($_GET['page']) ? $_GET['page'] : "";
        $action = isset($_GET['action']) ? $_GET['action'] : "";

        if ($page == "") {
            include "welcome.php";
        } elseif ($page == "gejala") {
            if ($action == "") {
                include "tampil_gejala.php";
            } elseif ($action == "tambah") {
                include "tambah_gejala.php";
            } elseif ($action == "update") {
                include "update_gejala.php";
            } else {
                include "hapus_gejala.php";
            }
        } elseif ($page == "penyakit") {
            if ($action == "") {
                include "tampil_penyakit.php";
            } elseif ($action == "tambah") {
                include "tambah_penyakit.php";
            } elseif ($action == "update") {
                include "update_penyakit.php";
            } else {
                include "hapus_penyakit.php";
            }
        } elseif ($page == "aturan") {
            if ($action == "") {
                include "tampil_aturan.php";
            } elseif ($action == "tambah") {
                include "tambah_aturan.php";
            } elseif ($action == "detail") {
                include "detail_aturan.php";
            } elseif ($action == "update") {
                include "update_aturan.php";
            } elseif ($action == "hapus_gejala") {
                include "hapus_detail_aturan.php";
            } else {
                include "hapus_aturan.php";
            }
        } elseif ($page == "konsultasi") {
            if ($action == "") {
                include "tampil_konsultasi.php";
            } else {
                include "hasil_konsultasi.php";
            }
        } elseif ($page == "konsultasiadm") {
            if ($action == "") {
                include "tampil_konsultasiadm.php";
            } else {
                include "detail_konsultasiadm.php";
            }
        } elseif ($page == "users") {
            if ($action == "") {
                include "tampil_users.php";
            } elseif ($action == "tambah") {
                include "tambah_users.php";
            } elseif ($action == "update") {
                include "update_users.php";
            } else {
                include "hapus_users.php";
            }
        } else {
            include "logout.php";
        }
        ?>
    </div>

    <!-- jqeury -->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- bootstrap js -->
    <script src="assets/js/datatables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
    </script>
    <!-- Font Awesome JS -->
    <script src="assets/js/all.js"></script>

    <!-- Chosen JS -->
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script>
        $(function () {
            $('.chosen').chosen();
        });
    </script>
</body>

</html>