<nav x-data="{ isOpen: false }" class="">
    <div id="navbar"
        class="bg-primary text-white fixed w-full z-10 transition-all duration-300 ease-in-out">
        <div class="container flex justify-between items-center py-3 ">
            <h1 class="text-md md:text-xl font-semibold">Politeknik Takumi</h1>
            <div class="hidden md:flex gap-6 ">
                <a href="#" class="relative group"><span class="font-bold"></span> Mahasiswa <span
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
            <div class="flex items-center gap-6">
                <a href="javascript:void(0)" id="search-btn" class="flex items-center gap-2">
                    <i class='bx bx-search'></i> Search
                </a>
                
            </div>
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
                        <h2 class="text-xl font-bold">Other Ways To Search: <a
                                href="https://maps.app.goo.gl/YoeetP6uq4ftJxRE9" target="_blank" class="underline">Maps</a>
                        </h2>
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
        <div id="navbar2" class="md:py-4 bg-white text-black">
            <nav class="hidden md:flex justify-center">
                <ul id="navbar" class="flex justify-center gap-10">
                    <li><a href="" class="relative group">News
                            </a></li>
                    <li><a href="" class="relative group">Events
                            </a></li>
                    <li><a href="" class="relative group">Akademik
                            </a></li>
                    <li><div class="relative">
                        <div class="flex items-center gap-1 cursor-pointer"
                            onclick="toggleDropdown('programDropdown')">
                            Program Studi <i class="bx bx-chevron-down"></i>
                        </div>
                        <ul id="programDropdown"
                            class="hidden absolute bg-white text-black py-2 mt-2 rounded shadow-lg z-50 min-w-[200px]">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Teknologi Informasi</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bisnis Digital</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Mekatronika</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bahasa Jepang</a>
                            </li>
                        </ul>
                    </div></li>
                    <li><a href="" class="relative group">Penelitian
                            </a></li>
                    <li><a href="" class="relative group">Campus Life
                            </a></li>
                    <li><a href="" class="relative group bg-primary px-4 py-2 text-sm rounded-lg text-white">Pendaftaran Mahasiswa
                            </a></li>
                </ul>
            </nav>
        </div>
    </div>

    <div x-show="isOpen" class="md:hidden w-full bg-white text-black text-lg fixed z-10 mt-16">
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center p-5 border-b"><a href="#">News</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Events</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Akademik</a></div>
            <div class="flex justify-center items-center p-5 border-b"><div class="relative">
                <div class="flex items-center gap-1 cursor-pointer"
                    onclick="toggleDropdown('programDropdown')">
                    Program Studi <i class="bx bx-chevron-down"></i>
                </div>
                <ul id="programDropdown"
                    class="hidden absolute bg-white text-black py-2 mt-2 rounded shadow-lg z-50 min-w-[200px]">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Teknologi Informasi</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bisnis Digital</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Mekatronika</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bahasa Jepang</a>
                    </li>
                </ul>
            </div></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Penelitian</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Campus Life</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Pendaftaran</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">Profile</a></div>
        </div>
        <div class="w-full pt-4">
            <h1 class="font-bold text-lg text-center">Informasi:</h1>
            <div class="flex justify-center overflow-x-auto gap-10">
                <ul class="flex items-center py-5 px-5">
                    <li class="mx-2"><a href="#" class="text-sm">Mahasiswa</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Staf & Fakultas</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Keluarga</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Pengunjung</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">Alumni</a></li>
                </ul>
            </div>
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
                        <h2 class="text-xl font-bold">Other Ways To Search: <a
                                href="https://maps.app.goo.gl/YoeetP6uq4ftJxRE9" target="_blank" class="underline">Maps</a>
                        </h2>
                        <button id="close-modal" class="hidden text-gray-600 hover:text-gray-900">
                            <i class='bx bx-x text-2xl'></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

{{-- <!-- Navbar atas -->
<nav class="bg-primary border-b-2 border-[#9ADCFE] fixed w-full z-50 top-0">
    <div class="container py-4 md:py-2 flex justify-between items-center text-white">
        <div class="flex items-center gap-6">
            <h1 class="hidden md:flex gap-2 text-sm">
                <span><img src="{{ asset('assets/call.svg') }}" alt="" width="20" /></span>
                0811-1374-497
            </h1>
            <!-- Dropdown Bahasa -->
            <div class="relative">
                <div class="flex items-center gap-2 cursor-pointer" onclick="toggleDropdown('languageDropdown')">
                    <img src="{{ asset('assets/indonesia.svg') }}" alt="" />
                    |
                    <span>Indonesia</span>
                    <i class="bx bx-chevron-down"></i>
                </div>
                <ul id="languageDropdown"
                    class="hidden absolute bg-white text-black py-2 mt-2 rounded shadow-lg z-50 min-w-[150px]">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Indonesia</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">English</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">日本語</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="md:hidden flex">
            <i class='bx bx-menu'></i>
        </div>
        <div class="hidden md:flex gap-4 items-center">
            <a href=""><span class="font-semibold">Informasi:</span>
                Mahasiswa</a>
            <a href="">Staff & Fakultas</a>
            <a href="">Orang Tua</a>
            <a href="">Pengunjung</a>
            <a href="">Alumni</a>
            <div class="px-8 py-2 bg-white rounded-lg">
                <a href="" class="flex gap-2 text-primary text-sm font-light">
                    <img src="{{ asset('assets/search.svg') }}" alt="" />
                    Search
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Navbar bawah -->
<nav class="bg-white text-black shadow fixed w-full z-40 top-[53px]">
    <div class="hidden md:flex justify-center items-center gap-8 py-3">
        <a href="">News</a>
        <a href="">Events</a>
        <a href="">Akademik</a>

        <!-- Dropdown Program Studi -->
        <div class="relative">
            <div class="flex items-center gap-1 cursor-pointer"
                onclick="toggleDropdown('programDropdown')">
                Program Studi <i class="bx bx-chevron-down"></i>
            </div>
            <ul id="programDropdown"
                class="hidden absolute bg-white text-black py-2 mt-2 rounded shadow-lg z-50 min-w-[200px]">
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Teknologi Informasi</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bisnis Digital</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Mekatronika</a>
                </li>
                <li>
                    <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bahasa Jepang</a>
                </li>
            </ul>
        </div>

        <a href="">Penelitian & Proyek</a>
        <a href="">Campus Life</a>
        <a href="">Profile</a>
        <a href="" class="bg-primary px-4 py-2 text-sm rounded-lg text-white">Pendaftaran Mahasiswa</a>
    </div>
</nav>

<!-- Navbar Mobile -->
{{-- <div class=" mt-10 ">
    <div class="grid grid-cols-2 grid-rows-4 gap-4 py-4">
        <div class="col-span-2  flex justify-center items-center">
            <h1 class="text-lg font-semibold py-2 border-b border-b-primary">Informasi:</h1>
        </div>
        <div class="row-start-2">
            <h1 class="text-center text-lg font-medium ">Mahasiswa</h1>
        </div>
        <div class="row-start-2">
            <h1 class="text-center text-lg font-medium ">Staff & Fakultas</h1>
        </div>
        <div>
            <h1 class="text-center text-lg font-medium ">Orang Tua</h1>
        </div>
        <div class="row-start-3">
            <h1 class="text-center text-lg font-medium ">Alumni</h1>
        </div>
        <div class="col-span-2">
            <h1 class="text-center text-lg font-medium ">Pengunjung</h1>
        </div>
    </div>

    <div class="py-5 border border-t-primary px-10">
        <div class="flex gap-16 overflow-x-auto">
            <a href="">News</a>
            <a href="">Events</a>
            <a href="">Akademik</a>
            <div class="relative">
                <a href="#" class="flex items-center gap-1 cursor-pointer"
                    onclick="toggleDropdown('programDropdown')">
                    Program Studi <i class="bx bx-chevron-down"></i>
                </a>
                <ul id="programDropdown"
                    class="hidden absolute bg-white text-black py-2 mt-2 rounded shadow-lg z-50 min-w-[200px]">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Teknologi
                            Informasi</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bisnis Digital</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Mekatronika</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">Bahasa Jepang</a>
                    </li>
                </ul>
            </div>
            <a href="">Penelitian & Proyek</a>
            <a href="">Campus Life</a>
            <a href="">Profile</a>
        </div>
    </div>

</div> --}}

<script>
    const toggleMenu = document.getElementById("toggle-menu");
    const menuMobile = document.getElementById("menu-mobile");

    toggleMenu.addEventListener("click", () => {
        menuMobile.classList.toggle("hidden");
    });
</script>

<script>
    function toggleDropdown(id) {
        var dropdown = document.getElementById(id);
        dropdown.classList.toggle("hidden");
    }

    document.addEventListener("click", function(event) {
        var dropdowns = ["languageDropdown", "programDropdown"];
        dropdowns.forEach(function(id) {
            var dropdown = document.getElementById(id);
            var isClickInsideDropdown = dropdown.contains(event.target);
            var isClickOnTrigger =
                dropdown.previousElementSibling.contains(event.target);

            if (!isClickInsideDropdown && !isClickOnTrigger) {
                dropdown.classList.add("hidden");
            }
        });
    });
</script> 
