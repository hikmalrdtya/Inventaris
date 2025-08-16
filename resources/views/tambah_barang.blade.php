<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <title>Inventaris</title>
    <style>
        @font-face {
            font-family: 'BrutalismFont';
            src: url('/font/RubikMonoOne-Regular.ttf') format('truetype');
        }

        @font-face {
            font-family: 'NeueFont';
            src: url('/font/BebasNeue-Regular.ttf') format('truetype');
        }

        html {
            font-family: 'BrutalismFont', sans-serif;
        }

        .text-neue {
            font-family: 'NeueFont', Courier, monospace;
        }
    </style>
</head>

<body class="bg-[#ededed] min-h-screen flex items-center justify-center">
    <div class="bg-[#adff2f] border-4 border-black rounded-lg shadow-[8px_8px_0_#000] p-10 my-8 w-full max-w-md">
        <h1 class="text-3xl mb-6 uppercase tracking-wide text-center cursor-default">Add Item</h1>

        <form action="" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            <div>
                <label for="nama" class="block mb-2 text-neue text-lg text-neue">Name Item</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" id="barang" name="barang" placeholder="Enter Name Item"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        required>
                </div>
            </div>

            <div>
                <label for="jumlah" class="block mb-2 text-neue text-lg">Quantity</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="number" id="jumlah" name="jumlah"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        min="0" placeholder="Enter Quantity" required>
                </div>
            </div>

            <div>
                <label for="tipe" class="block mb-2 text-neue text-lg">Type</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 -outline-offset-1 outline-black outline-4 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" id="tipe" name="tipe"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        placeholder="Enter Type" required>
                </div>
            </div>

            <div>
                <label for="gambar" class="block mb-2 text-lg text-neue">Image:</label>
                <input type="file" id="gambar" name="gambar" class="hidden" required>

                <div class="flex flex-col gap-4">
                    <label for="gambar"
                        class="inline-block px-4 py-2 bg-yellow-300 border-4 border-black cursor-pointer font-mono font-bold rounded-lg uppercase tracking-wide hover:bg-yellow-400 active:translate-y-1 transition">
                        Upload File
                    </label>

                    <span id="file-name"
                        class="rounded-lg font-mono text-base border-4 border-black px-2 py-1 bg-white cursor-default">
                        No File Choosen
                    </span>
                </div>

            </div>

            <div>
                <button type="submit"
                    class="w-full rounded-lg bg-black text-white mt-4 px-4 py-3 border-4 border-black hover:bg-white hover:text-black transition-colors uppercase tracking-widest cursor-pointer">
                    Add Goods
                </button>
            </div>


            <a href="/mengelola-barang"
                class="border-gray-600 border border-solid p-1.5 w-1/7 rounded-md text-gray-600 px-6 py-2 hover:bg-gray-600 hover:text-white transition delay-75 duration-100 ease-in-out"><i
                    class="bi bi-arrow-left"></i> Back</a>
        </form>
    </div>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
