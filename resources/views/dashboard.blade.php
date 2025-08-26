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
            src: url('/font/BebasNeue-Regular.ttf') format('truetype');
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

        .chat-bubble {
            position: relative;
        }

        .chat-bubble::after {
            content: '';
            position: absolute;
            top: 50%;
            left: -16px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 12px solid transparent;
            border-bottom: 12px solid transparent;
            border-right: 16px solid black;
            z-index: 0;
        }

        .chat-bubble::before {
            content: '';
            position: absolute;
            top: 50%;
            left: -10px;
            transform: translateY(-50%);
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-bottom: 10px solid transparent;
            border-right: 14px solid #a6ff00;
            z-index: 1;
        }

        @keyframes blink {
            50% {
                opacity: 0;
            }
        }
    </style>
</head>

<body>
    <x-header>
        Dashboard
    </x-header>

    <main>
        <div class="flex gap-4 items-center mt-6">
            <img src="/img/mascot.png" alt="Mascot" width="100px">
            <div id="bubble-container" class="relative chat-bubble">
                <p id="greeting"
                    class="cursor-pointer shadow-[8px_8px_0_#000] border-4 border-black text-sm text-black text-center mb-4 bg-[#a6ff00] p-4 rounded-lg">
                </p>
            </div>
        </div>


        <div class="card grid grid-cols-2 w-[60%] gap-10 mx-auto my-[3rem] text-white">
            <div
                class="border-4 border-black shadow-[8px_8px_0_#000] bg-[#ffffff] rounded-lg h-[200px] flex flex-col justify-center transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/mengelola-barang" class="flex h-full justify-center items-center p-4 gap-6">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#a6ff00] inline py-1">Managing <br> Goods</span> </h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Manage <br> Now</p>
                        </div>
                    </div>
                    <img src="/img/goods.png" alt="mengelola barang" width="80px">
                </a>
            </div>
            <div
                class="border-4 flex flex-col justify-center border-black shadow-[8px_8px_0_#000] bg-[#a6ff00] rounded-lg transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/peminjaman-barang" class="flex justify-center h-full items-center p-4">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#fff] inline py-1">Borrowing <br> Goods</span></h4>
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
                <a href="/laporan-barang" class="flex justify-center items-center h-full p-4">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#fff] inline py-1">Return of <br> Goods</span></h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Return <br> Now</p>
                        </div>
                    </div>
                    <img src="/img/return.png" alt="laporan barang" width="80px">
                </a>
            </div>
            <div
                class="border-4 border-black shadow-[8px_8px_0_#000] bg-[#ffffff] rounded-lg h-[200px] flex flex-col justify-center transition delay-75 duration-100 ease-in-out hover:-translate-y-3">
                <a href="/mengelola-barang" class="flex h-full justify-center items-center p-4 gap-6">
                    <div class="text-black flex flex-col gap-10">
                        <h4><span class="bg-[#a6ff00] inline py-1">Goods <br> Report</span> </h4>
                        <div class="flex">
                            <img src="/img/arrow-left-solid-full.svg" alt="" width="30px">
                            <p class="text-sm/6">Report <br> Now</p>
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
