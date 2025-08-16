<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="/css/output.css">
    <style>
        @font-face {
            font-family: 'BrutalismFont';
            src: url('/font/RubikMonoOne-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        html {
            font-family: 'BrutalismFont', sans-serif;
        }

        .box-shadow {
            box-shadow: -10px 10px 1px 10px black;
        }
    </style>
    @vite('resources/css/app.css')
</head>

<body class="bg-[#ededed] flex justify-center items-center min-h-[100vh] m-0">
    <img src="/img/Brutalist.png" alt="Logo" class="absolute top-5 left-5" width="100px">
    <img src="/img/Brutalist.png" alt="Logo" class="absolute bottom-5 left-5" width="100px">
    <img src="/img/Brutalist.png" alt="Logo" class="absolute top-5 right-5" width="100px">
    <img src="/img/Brutalist.png" alt="Logo" class="absolute bottom-5 right-5" width="100px">
    <div
        class="flex items-center justify-center h-[calc(100vh-5rem)] bg-[#a6ff00] w-[50%] rounded-lg shadow-[8px_8px_0_#000] border-black border-4">
        <form action="/register/submit" method="post" class="rounded-xl w-[90%]">
            @csrf
            <h1 class="text-center text-3xl mb-6 cursor-default">Register</h1>

            <div id="msg">
                @if (session('error'))
                    <div class="bg-red-600 text-center w-1/2 text-white rounded-lg mx-auto mb-4">
                        {{ session('error') }}
                    </div>
                @endif

                @if (session('success'))
                    <div class="bg-lime-500 text-center w-1/2 text-white rounded-lg mx-auto mb-4">
                        {{ session('success') }}
                    </div>
                @endif
            </div>



            <div class="flex flex-col mb-4">
                <label for="name">Name:</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="text" id="name" name="name" placeholder="Enter Name"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        required>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="email">Email:</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="email" id="email" name="email" placeholder="Enter Email / johndoe@example.com"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        required>
                </div>
            </div>

            <div class="flex flex-col mb-4">
                <label for="password">Password:</label>
                <div
                    class="flex items-center rounded-md bg-white px-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-4 focus-within:-outline-offset-2 focus-within:outline-indigo-600">
                    <input type="password" id="password" name="password" placeholder="Enter Password"
                        class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                        required>
                </div>
            </div>

            <div class="flex gap-5 mt-5 items-center">
                <button type="submit"
                    class="bg-[#000] p-2 mx-3 rounded-lg cursor-pointer w-1/3 border-4 border-transparent text-white transition delay-75 duration-100 ease-in-out active:scale-95 hover:bg-[#fff] hover:text-[#000] hover:border-[#000]">Register</button>
                <p class="cursor-default">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-blue-700 hover:underline hover:text-blue-500">Login</a>
                </p>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/main.js') }}" defer></script>
</body>

</html>
