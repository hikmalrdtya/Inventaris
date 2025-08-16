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
    <x-header>
        Manage Goods
    </x-header>

    <main class="my-10">
        <div class="mx-2 my-6">
            <a href="/tambah-barang"
                class="bg-green-600 border-4 border-transparent p-1.5 mx-3 w-1/7 rounded-md text-white px-6 py-2 shadow-[4px_4px_0_#000] hover:text-green-600 hover:border-green-600 hover:bg-transparent delay-75 duration-100 ease-in-out "><i
                    class="bi bi-plus-lg transition delay-75 duration-100 ease-in-out hover:scale-90"></i> Add
                Item</a>
            <a href="/"
                class="border-gray-600 border border-solid p-1.5 mx-3 w-1/7 rounded-md text-gray-600 px-6 py-2 hover:bg-gray-600 hover:text-white transition delay-75 duration-100 ease-in-out"><i
                    class="bi bi-arrow-left"></i> Back</a>
        </div>


        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full border-4 border-black text-left">
                    <thead class="bg-[#a6ff00] border-b-4 border-black">
                        <tr>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">No</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Name</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Quantity</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Type</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Image</th>
                            <th class="px-4 py-3 text-black text-lg font-extrabold">Action</th>
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
                                    Delete
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
