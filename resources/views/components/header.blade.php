<div>
    <header>
        <div class="flex justify-between bg-[#adff2f] h-17 items-center text-center">
            <div class="logos mx-5 text-black flex gap-3 cursor-default items-center">
                <img src="/img/warehouse.png" alt="Logo" width="40px">
                <h3 style="text-sm/6 font-semibold ml-6">Inven<span
                        class="text-[#fff] text-2xl font-bold text-neue">Goods</span> </h3>
            </div>
            <div>
                <h1 class="text-2xl font-bold">{{ $slot }}</h1>
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
</div>