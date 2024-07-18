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
    <nav class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 justify-between">
                <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    <!-- Mobile menu button-->
                    <button type="button"
                        class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-controls="mobile-menu" aria-expanded="false" id="mobile-menu-button">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                        <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <a href="index.php"><img class="h-8 w-auto" src="assets/img/ueuhitam.png" alt="Kel 3 PW"></a>
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <a href="index.php"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Beranda</a>

                        <?php
                        if ($_SESSION['role'] == "Dokter") {
                            ?>
                            <a href="?page=gejala"
                                class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Gejala</a>
                            <a href="?page=penyakit"
                                class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Penyakit</a>
                            <a href="?page=aturan"
                                class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Basis
                                Aturan</a>
                            <a href="?page=konsultasiadm"
                                class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Hasil
                                Konsultasi</a>
                            <?php
                        } else if ($_SESSION["role"] == "Administrator") {
                            ?>
                                <a href="?page=users"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Users</a>
                                <a href="?page=gejala"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Gejala</a>
                                <a href="?page=penyakit"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Penyakit</a>
                                <a href="?page=aturan"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Basis
                                    Aturan</a>
                                <a href="?page=konsultasiadm"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Hasil
                                    Konsultasi</a>
                            <?php
                        } else { ?>
                                <a href="?page=konsultasi"
                                    class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Konsultasi</a>
                            <?php
                        }
                        ?>
                        <a href="?page=logout"
                            class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mobile menu, show/hide based on menu state. -->
        <div class="sm:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pt-2 pb-3">
                <a href="index.php"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Beranda</a>

                <?php
                if ($_SESSION['role'] == "Dokter") {
                    ?>
                    <a href="?page=gejala"
                        class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Gejala</a>
                    <a href="?page=penyakit"
                        class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Penyakit</a>
                    <a href="?page=aturan"
                        class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Basis
                        Aturan</a>
                    <a href="?page=konsultasiadm"
                        class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Hasil
                        Konsultasi</a>
                    <?php
                } else if ($_SESSION["role"] == "Administrator") {
                    ?>
                        <a href="?page=users"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Users</a>
                        <a href="?page=gejala"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Gejala</a>
                        <a href="?page=penyakit"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Penyakit</a>
                        <a href="?page=aturan"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Basis
                            Aturan</a>
                        <a href="?page=konsultasiadm"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Hasil
                            Konsultasi</a>
                    <?php
                } else { ?>
                        <a href="?page=konsultasi"
                            class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Konsultasi</a>
                    <?php
                }
                ?>
                <a href="?page=logout"
                    class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-600 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-800">Logout</a>
            </div>
        </div>
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
    <script>
        document.getElementById('mobile-menu-button').addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('block');
        });
    </script>
</body>

</html>