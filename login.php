<?php
session_start();
require "config.php";

if (isset($_POST["submit"])) {

    // mengambil data form
    $username = $_POST["username"];
    $pass = md5($_POST["pass"]);

    // cek username dan password
    $sql = "SELECT*FROM users where username='$username' and pass='$pass'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if ($result->num_rows > 0) {

        // jika login berhasil
        // membuat session
        $_SESSION['username'] = $row["username"];
        $_SESSION['role'] = $row["role"];
        $_SESSION['status'] = "y";

        header("Location:index.php");

    } else {
        // jika login gagal
        header("Location:?msg=n");
    }
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>

    <!-- bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 h-full">

    <!-- validasi login gagal, letakkan disini -->
    <?php
    if (isset($_GET['msg'])) {
        if ($_GET['msg'] == "n") {
            ?>
            <div class="alert alert-danger" align="center">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>Login Gagal</strong>
            </div>
            <?php
        }
    }
    ?>

    <!-- <div class="container-fluid" style="margin-top:150px">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <form method="POST">
                    <div class="card border-dark">
                        <div class="card-header bg-primary text-light border-dark">
                            <strong>LOGIN</strong>
                        </div>
                        <div class="card-body border">
                            <div class="form-group">
                                <label for="">User Name</label>
                                <input type="text" class="form-control" name="username" autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" class="form-control" name="pass" autocomplete="off" required>
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div> -->

    <!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <!--
  This example requires updating your template:

  ```
  <html class="h-full bg-gray-50">
  <body class="h-full">
  ```
-->
    <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <img class="mx-auto h-20 w-auto" src="assets/img/ueuhitam.png" alt="Your Company">
            <!-- <h2 class="mt-6 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Kelompok 3 - PW</h2> -->
            <br>

        </div>

        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-[480px]">
            <div class="bg-white px-6 pt-8 pb-10 shadow sm:rounded-lg sm:px-12">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                        <h2 class=" text-center text-xl font-bold leading-9 tracking-tight text-gray-900">Silahkan
                            Login ke
                            Akun Anda</h2>
                        <p class="mb-5 text-center text-xs capitalize">Aplikasi Sistem Pakar untuk identifikasi penyakit
                            Eksim
                            Kulit
                            berbasis Web
                            dengan
                            metode
                            forward
                            chaining dan
                            Certainty factor</p>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Username</label>
                        <div class="mt-2">
                            <input id="text" name="username" type="username" autocomplete="none" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="mt-2">
                            <input id="password" name="pass" type="password" autocomplete="current-password" required
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox"
                                class="h-4 w-4 rounded border-gray-300 text-blue-600 focus:ring-blue-600">
                            <label for="remember-me" class=" ml-3 block text-sm leading-6 text-gray-900">Remember
                                me</label>
                        </div>

                        <div class="text-sm leading-6">
                            <a href="#" class="font-semibold text-blue-600 hover:text-blue-500">Forgot password?</a>
                        </div>
                    </div>

                    <div>
                        <button type="submit" name="submit"
                            class="flex w-full justify-center rounded-md bg-blue-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Sign
                            in</button>
                    </div>
                </form>
                <p class="mt-10 text-center text-sm text-gray-500">
                    Kelompok 3 - PW
                    <!-- <a href="#" class="font-semibold leading-6 text-blue-600 hover:text-blue-500">Hubungi
                        Administrator</a> -->
                </p>
            </div>
        </div>



        <!-- jquery -->
        <script src="assets/js/jquery-3.7.0.min.js"></script>
        <!-- bootstrap JS -->
        <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>