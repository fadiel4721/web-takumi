{{-- Navbar desktop --}}
<nav class="bg-blue-500 text-white">
    <div class="container flex justify-between items-center py-4 ">
        <div class="">
            <h1>Politeknik Takumi</h1>
        </div>
        <div class="hidden md:flex">
            <ul class="flex gap-6">
                <li><a href="#">Informasi: Students</a></li>
                <li class="relative" x-data="{ open: false }">
                    <button @click="open = !open" @click.outside="open = false"
                        class="focus:outline-none flex items-center">
                        Staf & Fakultas
                        <i class='bx bx-chevron-down '></i>
                    </button>
                    <div class="absolute right-0 bg-white w-full rounded-md shadow-lg mt-2"
                        :class="open ? 'block' : 'hidden'">
                        <ul class="p-2 text-black">
                            <li class="p-1 font-medium hover:bg-gray-100 rounded">
                                <a href="" class="block p-1">Halo</a>
                            </li>
                            <li class="p-1 font-medium hover:bg-gray-100 rounded">
                                <a href="" class="block p-1">Halo</a>
                            </li>
                            <li class="p-1 font-medium hover:bg-gray-100 rounded">
                                <a href="" class="block p-1">Halo</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href="#">Orang Tua</a></li>
                <li><a href="#">Pengunjung</a></li>
                <li><a href="#">Alumni</a></li>
            </ul>
        </div>
        <div class="flex items-center">
            <input type="search" name="" id=""
                class="w-24 px-2 py-1 rounded outline outline-primary mr-2" placeholder="Search">
            <div class="md:hidden">
                <i class='bx bx-menu text-3xl'></i>
            </div>
        </div>
    </div>

    <div class=" bg-gray-100 hover:rounded text-black">
        <ul class="hidden md:flex gap-6 items-center justify-center py-5">
            <li><a href="">News</a></li>
            <li><a href="">Events</a></li>
            <li><a href="">Akademik</a></li>
            <li><a href="">Penelitian</a></li>
            <li><a href="">Campus Life</a></li>
            <li><a href="">Pendaftaran</a></li>
            <li><a href="">Profile</a></li>
        </ul>
    </div>
    </div>
    {{-- Navbar desktop --}}

    {{-- Navbar untuk mobile --}}
    <div x-data="{ open: false }" class="md:hidden">
        <div x-show="open" class="bg-blue-500 text-white py-4">
            <ul class="space-y-4 text-center">
                <li><a href="#" class="block">Informasi: Students</a></li>
                <li class="relative" x-data="{ open: false }">
                    <button @click="open = !open" class="w-full text-left px-4 py-2">
                        Staf & Fakultas
                        <i class='bx bx-chevron-down'></i>
                    </button>
                    <div x-show="open" class="bg-white text-black p-2">
                        <ul class="space-y-2">
                            <li><a href="#" class="block">Halo</a></li>
                            <li><a href="#" class="block">Halo</a></li>
                            <li><a href="#" class="block">Halo</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="#" class="block">Orang Tua</a></li>
                <li><a href="#" class="block">Pengunjung</a></li>
                <li><a href="#" class="block">Alumni</a></li>
                <li><a href="#" class="block">News</a></li>
                <li><a href="#" class="block">Events</a></li>
                <li><a href="#" class="block">Akademik</a></li>
                <li><a href="#" class="block">Penelitian</a></li>
                <li><a href="#" class="block">Campus Life</a></li>
                <li><a href="#" class="block">Pendaftaran</a></li>
                <li><a href="#" class="block">Profile</a></li>
            </ul>
        </div>
    </div>
</nav>
