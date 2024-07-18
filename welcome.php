<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <style type="text/tailwindcss"></style>
</head>

<body class="bg-gray-50 h-full">
    <div>
        <div class="relative px-6 pt-20 lg:px-8 ">
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl py-32 sm:py-24 lg:py-4">
                <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                </div>
                <div class="text-center">
                    <?php
                    if ($_SESSION['role'] == "Pasien") {
                        ?>
                        <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-6xl">Halo&#128075</h1>
                        <br><br>
                        <h5 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-lg">Silahkan
                            Konsultasikan
                            Gejalamu ya!&#128071</h5>
                        <p class="mt-6 text-lg leading-8 text-gray-600 capitalize">Aplikasi Sistem Pakar untuk identifikasi
                            penyakit
                            Eksim Kulit
                            berbasis Web dengan metode forward chaining dan Certainty factor.</p>
                        <div class="mt-10 flex items-center justify-center gap-x-6">
                            <h1 class="text-2xl">&#128073</h1> <a href="?page=konsultasi"
                                class="rounded-md bg-blue-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-800">Mulai
                                Konsulasi !</a>
                            <h1 class="text-2xl">&#128072</h1>
                            <?php
                    } else if ($_SESSION["role"] == "Administrator") { ?>
                                <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-6xl">Halo&#128075</h1>
                                <br><br>
                                <h5 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-lg">Selamat Datang
                                    Administrator!&#9996</h5>
                                <p class="mt-6 text-lg leading-8 text-gray-600 capitalize">Aplikasi Sistem Pakar untuk
                                    identifikasi
                                    penyakit
                                    Eksim Kulit
                                    berbasis Web dengan metode forward chaining dan Certainty factor.</p>
                            <?php
                    } else { ?>
                                <h1 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-6xl">Halo&#128075</h1>
                                <br><br>
                                <h5 class="text-4xl font-bold tracking-tight text-gray-800 sm:text-lg">Selamat Datang Pak/Bu
                                    Dokter!&#129309</h5>
                                <p class="mt-6 text-lg leading-8 text-gray-600 capitalize">Aplikasi Sistem Pakar untuk
                                    identifikasi
                                    penyakit
                                    Eksim Kulit
                                    berbasis Web dengan metode forward chaining dan Certainty factor.</p>
                            <?php
                    }
                    ?>

                        <!-- <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Learn more <span
                                aria-hidden="true">→</span></a> -->
                    </div>
                </div>
            </div>
            <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]"
                aria-hidden="true">
                <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
        </div>
    </div>

</body>

</html>