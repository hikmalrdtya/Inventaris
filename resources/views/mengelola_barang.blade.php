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
        <div class="mx-6 my-6 flex justify-between items-center flex-row-reverse">
            <a href="#" id="open-modal-btn"
                class="bg-green-600 border-4 border-transparent py-1.5 px-3  mx-3 w-1/7 rounded-md text-white shadow-[4px_4px_0_#000] hover:text-green-600 hover:border-green-600 hover:bg-transparent delay-75 duration-100 ease-in-out ">Add
                Item <i class="bi bi-plus-lg transition delay-75 duration-100 ease-in-out hover:scale-90"></i></a>
            <a href="/"
                class="border-gray-600 border border-solid py-1.5 px-5 rounded-md text-gray-600 hover:bg-gray-600 hover:text-white transition delay-75 duration-100 ease-in-out"><i
                    class="bi bi-arrow-left"></i> Back</a>
        </div>

        <div id="modal-overlay"
            class="fixed inset-0 overflow-y-auto z-50 hidden items-center justify-center bg-black/60 backdrop-blur-sm">

            <div id="add-item-modal"
                class="bg-[#adff2f] border-4 border-black rounded-lg shadow-[8px_8px_0_#000] p-10 w-[60%]">
                <h1 class="text-3xl mb-6 uppercase tracking-wide text-center cursor-default">Add Item</h1>

                <form action="" method="POST" enctype="multipart/form-data"
                    class="grid grid-cols-2 gap-x-6 gap-y-5">
                    @csrf

                    <div>
                        <label for="barang" class="block mb-2 text-lg">Name Item</label>
                        <div
                            class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" id="barang" name="barang" placeholder="Enter Name Item"
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                required>
                        </div>
                    </div>

                    <div>
                        <label for="jumlah" class="block mb-2 text-lg">Quantity</label>
                        <div
                            class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="number" id="jumlah" name="jumlah" min="0"
                                placeholder="Enter Quantity"
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                required>
                        </div>
                    </div>

                    <div>
                        <label for="tipe" class="block mb-2 text-lg">Type</label>
                        <div
                            class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                            <input type="text" id="tipe" name="tipe" placeholder="Enter Type"
                                class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                required>
                        </div>
                    </div>

                    <div>
                        <label for="gambar" class="block mb-2 text-lg">Image:</label>
                        <input type="file" id="gambar" name="gambar" class="hidden" required>
                        <div class="flex flex-col gap-2">
                            <label for="gambar"
                                class="w-full text-center px-4 py-1.5 bg-yellow-300 border-4 border-black cursor-pointer font-mono font-bold rounded-lg uppercase tracking-wide hover:bg-yellow-400 active:translate-y-1 transition">
                                Upload File
                            </label>
                            <span id="file-name"
                                class="w-full text-sm text-center rounded-lg font-mono border-4 border-black px-2 py-1 bg-white cursor-default truncate">
                                No File Choosen
                            </span>
                        </div>
                    </div>

                    <div class="col-span-2 mt-6 flex items-center justify-end gap-4">

                        <a href="#" id="close-modal-btn"
                            class="px-8 py-2 border-2 border-gray-700 rounded-lg text-gray-700 hover:bg-gray-700 hover:text-white uppercase tracking-widest text-sm font-bold">
                            Close
                        </a>

                        <button type="submit"
                            class="px-5 py-2 border-2 border-transparent rounded-lg bg-black text-white hover:bg-transparent hover:border-black hover:text-black uppercase tracking-widest text-sm font-bold cursor-pointer">
                            Add Goods
                        </button>
                    </div>
                </form>
            </div>
        </div>


        <div class="p-6">
            <div class="overflow-x-auto">
                <table class="w-full border-4 border-black text-left">
                    <thead class="bg-[#a6ff00] border-b-4 border-black">
                        <tr>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">No</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Name</th>
                            <th class="px-4 py-3 border-r-4 border-black text-black text-lg font-extrabold">Quantity
                            </th>
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

    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
