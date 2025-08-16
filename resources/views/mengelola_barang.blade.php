<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @vite('resources/css/app.css')
    <title>Mengelola Barang</title>
    <style>
        @font-face {
            font-family: 'BrutalismFont';
            src: url('/font/RubikMonoOne-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: 'NeueFont';
            src: url('/font/BebasNeue.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .text-neue {
            font-family: 'NeueFont', Courier, monospace;
        }

        html {
            font-family: 'BrutalismFont', sans-serif;
        }
    </style>
</head>

<body>
    <header class="mb-8">
        <div class="flex justify-between bg-[#adff2f] h-17 items-center text-center">
            <div class="logos mx-5 text-black flex gap-3 cursor-default">
                <img src="/img/icon.png" alt="Logo" width="30px">
                <h3 style="text-sm/6 font-semibold ml-6">Inven<span class="text-[#fff] text-2xl font-bold text-neue">Barang</span> </h3>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Pengelolaan Barang</h1>
            </div>
            <div class="logout mx-5 ">
                <form id="logout-form" action="/logout" method="POST">
                    @csrf
                    <button
                        class="text-sm/6 border-transparent border-4 bg-red-600 cursor-pointer text-white border-solid hover:border-red-600 px-5 py-1 rounded-md hover:bg-transparent hover:text-red-600 transition-all duration-100 delay-75 ease-in-out">Logout</button>
                </form>
            </div>
        </div>
    </header>

    <main>
        <div class="mx-2">
            <a href="/tambah-barang"
                class="bg-green-600 border-4 border-transparent p-1.5 mx-3 w-1/7 rounded-md text-white px-6 py-2 shadow-[4px_4px_0_#000] hover:text-green-600 hover:border-green-600 hover:bg-transparent delay-75 duration-100 ease-in-out "><i
                    class="bi bi-plus-lg transition delay-75 duration-100 ease-in-out hover:scale-90"></i> Tambah
                Barang</a>
            <a href="/"
                class="border-gray-600 border border-solid p-1.5 mx-3 w-1/7 rounded-md text-gray-600 px-6 py-2 hover:bg-gray-600 hover:text-white transition delay-75 duration-100 ease-in-out"><i
                    class="bi bi-arrow-left"></i> Kembali</a>
        </div>


        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full border-4 border-black text-left">
                    <thead class="bg-[#a6ff00] border-b-4 border-black">
                        <tr>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">No</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Nama</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Jumlah</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Tipe</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Gambar</th>
                            <th class="px-4 py-3 text-black text-lg font-extrabold">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-white border-b-4 border-black text-center">
                            <td class="px-4 py-3 border-r-4 border-black font-bold">1</td>
                            <td class="px-4 py-3 border-r-4 border-black font-bold">Nama Barang</td>
                            <td class="px-4 py-3 border-r-4 border-black font-bold">10</td>
                            <td class="px-4 py-3 border-r-4 border-black font-bold">Tipe A</td>
                            <td class="px-4 py-3 border-r-4 border-black">
                                <div class="flex justify-center">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3144/3144456.png" class="w-8 h-8">
                                </div>
                                
                            </td>
                            <td class="px-4 py-3 flex gap-6">
                                <button
                                    class="px-4 py-2 bg-blue-500 text-white rounded-lg border-4 border-transparent shadow-[4px_4px_0_0_#000] hover:text-blue-500 hover:border-blue-500 hover:bg-transparent transition delay-75 duration-100 ease-in-out cursor-pointer">
                                    Edit
                                </button>
                                <button
                                    class="px-4 py-2 bg-red-500 rounded-lg text-white border-4 border-transparent shadow-[4px_4px_0_0_#000] hover:text-red-500 hover:border-red-500 hover:bg-transparent transition delay-75 duration-100 ease-in-out">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </main>
</body>

</html>
