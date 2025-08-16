<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/png" href="{{ asset('/img/warehouse.png') }}">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Dashboard</title>
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

        html {
            font-family: 'BrutalismFont', sans-serif;
        }

        .text-neue {
            font-family: 'NeueFont', Courier, monospace;
        }

        .typing-cursor {
            display: inline-block;
            animation: blink .9s steps(1) infinite;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="flex justify-between bg-[#adff2f] h-17 items-center text-center">
            <div class="logos mx-5 text-black flex gap-3 cursor-default items-center">
                <img src="/img/warehouse.png" alt="Logo" width="40px">
                <h3 style="text-sm/6 font-semibold ml-6">Inven<span
                        class="text-[#fff] text-2xl font-bold text-neue">Goods</span> </h3>
            </div>
            <div>
                <h1 class="text-2xl font-bold">Dashboard</h1>
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
        <div class="flex gap-4 items-center">
            <img src="/img/mascot.png" alt="Mascot" width="100px">
            <p id="greeting" class="text-sm text-black text-center mb-4 bg-[#a6ff00] p-4 rounded-lg"></p>
        </div>
        

        <div class="card grid grid-cols-2 w-[60%] gap-10 mx-auto my-[3rem] text-white">
            <div
                class="border-4 border-black shadow-[8px_8px_0_#000] bg-[#ffffff] rounded-lg h-[200px] flex flex-col justify-center transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/mengelola-barang" class="flex h-full justify-center items-center p-4 gap-6">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#a6ff00] inline py-1">Managing Goods</span> </h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Manage Now</p>
                        </div>
                    </div>
                    <img src="/img/goods.png" alt="mengelola barang" width="80px">
                </a>
            </div>
            <div
                class="border-4 flex flex-col justify-center border-black shadow-[8px_8px_0_#000] bg-[#a6ff00] rounded-lg transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/peminjaman-barang" class="flex justify-center h-full items-center p-4">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#fff] inline py-1">Borrowing Goods</span></h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Borrow <br> Now</p>
                        </div>
                    </div>
                    <img src="/img/borrowing.png" alt="peminjaman barang" width="80px">
                </a>
            </div>
            <div
                class="border-4 flex flex-col h-[200px] justify-center shadow-[8px_8px_0_#000] border-black bg-[#a6ff00] rounded-lg transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/pengembalian-barang" class="flex justify-center items-center h-full p-4">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#fff] inline py-1">Return of Goods</span></h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Return <br> Now</p>
                        </div>
                    </div>
                    <img src="/img/return.png" alt="pengembalian barang" width="80px">
                </a>
            </div>
            <div
                class="border-4 border-black shadow-[8px_8px_0_#000] bg-[#ffffff] rounded-lg h-[200px] flex flex-col justify-center transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/mengelola-barang" class="flex h-full justify-center items-center p-4 gap-6">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#a6ff00] inline py-1">Goods Report</span> </h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Report Now</p>
                        </div>
                    </div>
                    <img src="/img/report.png" alt="mengelola barang" width="80px">
                </a>
            </div>
        </div>
    </main>

    <script>
        window.userName = @json($user->name ?? 'Pengguna');
    </script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
