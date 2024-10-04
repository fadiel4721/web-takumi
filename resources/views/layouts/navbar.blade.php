<nav  x-data="{ isOpen: false }"
    class="bg-black bg-opacity-40 text-white fixed w-full z-10 transition-all duration-300 ease-in-out">
    <div id="navbar" class="container py-5 md:py-3 md:border-b-2 border-[#b2e7f8]">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">Politeknik Takumi</h1>
            <div class="hidden md:flex gap-6">
                <a href="#" class="relative group"><span class="font-bold">Informasi:</span> Mahasiswa <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">Staff & Fakultas <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">Orang Tua<span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">Pengunjung <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">Alumni <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
            </div>
            <!-- Search Button -->
            <a href="javascript:void(0)" id="search-btn" class="hidden md:flex items-center gap-2">
                <i class='bx bx-search'></i> Search
            </a>
            <!-- Modal (hidden by default) -->
            <div id="search-modal"
                class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden ">
                <div class=" p-6 rounded-lg w-[500px]">
                    <div class="flex justify-center items-center mb-4">
                        <h2 class="text-xl font-bold">Search Takumi: </h2>
                        <button id="close-modal" class="hidden text-gray-600 hover:text-gray-900">
                            <i class='bx bx-x text-2xl'></i>
                        </button>
                    </div>
                    <input type="text" name="search" id="search-input" placeholder="Search Takumi Website..."
                    class="w-full p-2 rounded-lg">
                    <div class="flex justify-center items-center mt-4">
                        <h2 class="text-xl font-bold">Other Ways To Search: <a href="https://maps.app.goo.gl/YoeetP6uq4ftJxRE9" target="_blank" class="underline font-medium">Maps</a></h2>
                        <button id="close-modal" class="hidden text-gray-600 hover:text-gray-900">
                            <i class='bx bx-x text-2xl'></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="md:hidden" @click="isOpen = !isOpen">
                <i class='bx bx-menu text-3xl'></i>
            </div>
        </div>
    </div>

    <div id="navbar2" class="md:py-3">
        <nav class="hidden md:flex justify-center">
            <ul id="navbar" class="flex justify-center gap-10">
                <li><a href="" class="relative group">News
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Events
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Akademik
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Penelitian
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Campus Life
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Pendaftaran
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">Profile
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-primary transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
            </ul>
        </nav>
    </div>

    <!-- Navbar Mobile -->
    <div x-show="isOpen" class="md:hidden bg-white text-black text-lg">
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center p-5 border-b"><a href="#">News</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Events</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Akademik</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Penelitian</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Campus Life</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Pendaftaran</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Profile</a></div>
        </div>
        <div class="w-full pt-4">
            <h1 class="font-bold text-lg text-center">Informasi:</h1>
            <div class="flex justify-center">
                <ul class="flex items-center py-5">
                    <li class="mx-2"><a href="#" class="text-sm">Mahasiswa</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Staf & Fakultas</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Keluarga</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Pengunjung</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Alumni</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Navbar Mobile -->
</nav>
