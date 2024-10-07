<main>
    {{-- Main --}}
    <div class="bg-gray-500 h-auto"
        style="background-image: url('{{ asset('images/mahasiswa2.png') }}'); background-size: cover; background-repeat: no-repeat; width: auto">
        <div class="flex justify-center items-center h-screen">
            <img src="{{ asset('images/logo-takumi.png') }}" width="500">
        </div>
        <div class="w-full bg-black bg-opacity-40 py-5 text-white">
            <div class="container mx-auto md:flex justify-between items-center gap-10">
                <p class="md:w-3/5">@lang('common.poltek')
                </p>
                <div class="py-5 md:py-0">

                    <a href="" class="flex items-center px-6 py-2 bg-primary rounded-xl"><i
                            class='bx bx-user'></i>@lang('common.pendaftaran')</a>
                </div>
            </div>
        </div>
    </div>
    {{-- Main --}}


    {{-- Visi & Misi --}}
    <div class="mt-20 bg-primary w-full h-auto text-white">
        <div class="container py-5">
            <div class="py-5 flex relative">
                <div class="absolute right-0 top-0">
                    <img src="{{ asset('assets/serpihan.svg') }}" width="150" alt="">
                </div>
                <span class="w-[15px] h-auto bg-white rounded-r-lg"></span>
                <div class="flex gap-4">
                    <h1 class="text-4xl font-bold  ml-5">@lang('common.visi')</h1>
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                </div>
            </div>
            <p class="w-full md:w-2/3 text-lg">
                @lang('common.menjadi')
            </p>
        </div>
        <div class="container py-5">
            <div class="py-5 flex justify-end relative">
                <div class="absolute left-0 top-20">
                    <img src="{{ asset('assets/serpihan.svg') }}" width="150" alt="">
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                    <h1 class="text-4xl font-bold mr-5">@lang('common.misi')</h1>
                </div>
                <span class="w-[15px] h-auto bg-white rounded-l-lg"></span>
            </div>
            <div class="flex justify-end">
                <p class="w-full md:w-2/3 text-lg ">
                <ul>
                    <li>@lang('common.Misi1')
                    </li>
                    <li>
                       @lang('common.Misi2')
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="text-center py-10">
            <a href="#" class="px-8 py-3 outline outline-white rounded-3xl text-sm">@lang('common.tentangpolitekniktakumi')</a>
        </div>
    </div>
    {{-- Visi & Misi --}}

    {{-- Takumi News --}}
    <div class="mt-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">@lang('common.takuminews')</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">@lang('common.beritaseputarpolitekniktakumi')</p>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 mt-10">

            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-3 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">@lang('common.campus')</h1>
                    <p class="text-xs md:text-base text-white">@lang('common.rob')</p>
                </div>
            </div>
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-2 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://plus.unsplash.com/premium_photo-1722859358264-7ee23aeabd9d?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">@lang('common.cooperation')</h1>
                    <p class="text-xs md:text-base text-white">@lang('common.coop')</p>
                </div>
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 mt-10">
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-2 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://plus.unsplash.com/premium_photo-1661761077411-d50cba031848?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">@lang('common.penelitian')</h1>
                    <p class="text-xs md:text-base text-white">@lang('common.poli')</p>
                </div>
            </div>
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-3 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1638037099058-4674316b9bc4?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">@lang('common.campuslife')</h1>
                    <p class="text-xs md:text-base text-white">@lang('common.kegiatan')</p>
                </div>
            </div>
        </div>
        <div class="text-center py-10">
            <a href=""
                class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                <span>@lang('common.selanjutnya')</span>
                <i class='bx bx-chevron-right text-lg align-middle'></i>
            </a>
        </div>

    </div>
    </div>
    {{-- Takumi News --}}

    {{-- Akademik --}}
    <div class="mt-10 w-full h-auto bg-primary py-10">
        <div class="text-center ">
            <div class="py-5">
                <h1 class="text-4xl md:text-5xl font-bold text-white">@lang('common.akademik')</h1>
                <p class="text-sm md:text-lg text-white">@lang('common.passion')</p>
            </div>
        </div>
        <div class="container py-5">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Card 1: Teknologi Informasi -->
                <div class="flip-card w-full h-[350px]">
                    <div class="flip-card-inner relative w-full h-full ">
                        <!-- Front Side -->
                        <div
                            class="flip-card-front absolute w-full h-full rounded-lg bg-cover bg-white shadow-lg overflow-auto">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Ti')</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/TI.svg') }}" alt="Teknologi Informasi"
                                class="absolute -bottom-4 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Ti')</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">@lang('common.ti')</p>
                            </div>
                            <img src="{{ asset('assets/TI.svg') }}" alt="Teknologi Informasi"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 2: Mekatronika -->
                <div class="flip-card w-full h-[350px]">
                    <div class="flip-card-inner relative w-full h-full ">
                        <!-- Front Side -->
                        <div
                            class="flip-card-front absolute w-full h-full rounded-lg bg-cover bg-white shadow-lg overflow-auto">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Mk')</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Mekatronika.svg') }}" alt="Mekatronika"
                                class="absolute -bottom-8 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Mk')</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">@lang('common.mk')</p>
                            </div>
                            <img src="{{ asset('assets/Mekatronika.svg') }}" alt="Mekatronika"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 3: Bisnis Digital -->
                <div class="flip-card w-full h-[350px]">
                    <div class="flip-card-inner relative w-full h-full ">
                        <!-- Front Side -->
                        <div
                            class="flip-card-front absolute w-full h-full rounded-lg bg-cover bg-white shadow-lg overflow-auto">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Bd')</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Bisnis-Digital.svg') }}" alt="Bisnis Digital"
                                class="absolute -bottom-4 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Bd')</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">@lang('common.bd')</p>
                            </div>
                            <img src="{{ asset('assets/Bisnis-Digital.svg') }}" alt="Bisnis Digital"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 4: Bahasa Jepang -->
                <div class="flip-card w-full h-[350px]">
                    <div class="flip-card-inner relative w-full h-full ">
                        <!-- Front Side -->
                        <div class="flip-card-front absolute w-full h-full rounded-lg bg-cover bg-white shadow-lg">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Bj')</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Bahasa-Jepang.svg') }}" alt="Bahasa Jepang"
                                class="absolute -bottom-14 -right-8">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">@lang('common.Bj')</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">@lang('common.bj')</p>
                            </div>
                            <img src="{{ asset('assets/Bahasa-Jepang.svg') }}" alt="Bahasa Jepang"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    {{-- Akademik --}}

    {{-- Staff & Lecturer --}}
    <div class="mt-20">
        <div class="text-center ">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">@lang('common.staff')</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">@lang('common.month')</p>
        </div>
        <div class="mt-10">
            <div class="container md:px-36 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/3f/95/1d/3f951dd3546ef0db47c8c1269a3426f5.jpg"
                        alt="Dosen Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.dosen1')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.nama1')</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/55/aa/48/55aa48c8456cb19f923c49968d0fb50b.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 group-hover:filter-none filter grayscale h-96 w-full object-cover">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.dosen2')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.nama2')</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/38/54/a8/3854a8e825bc816e7d7c2caa2c255460.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.dosen3')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.nama3')</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>@lang('common.seleng')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}

    {{-- Penelitian --}}
    <div class="mt-20">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">@lang('common.penelitian')</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">@lang('common.brt')</p>
        </div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 h-auto">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1561622539-dffbfc2008fd?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="rounded-2xl w-full h-auto ">
                </div>
                <div class="">
                    <h1 class="text-xl font-bold text-primary">@lang('common.pnlt')</h1>
                    <p class="text-[#A9A9A9] text-[14px] mb-1 text-justify">@lang('common.isi1')</p>
                    </p>
                    <p class="text-[#A9A9A9] text-[14px] mb-1 text-justify">
                        @lang('common.isi2')
                    </p>
                    <p class="text-[#A9A9A9] text-[14px] text-justify">
                        @lang('common.isi3')
                    </p>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>@lang('common.seleng2')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Penelitian --}}

    {{-- Upcoming events --}}
    <div class="mt-16 py-10 bg-primary w-full">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white">@lang('common.kongo')</h1>
        </div>
        <div class="container md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:px-20">
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600087626120-062700394a01?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-xl font-bold">OCT</p>
                            <p class="text-xl font-bold">07</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.Ti')</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon1')</p>
                        <p class="text-black text-[14px]">@lang('common.hackathon2')</p>
                    </div>
                </div>
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1638029202288-451a89e0d55f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-xl font-bold">OCT</p>
                            <p class="text-xl font-bold">07</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.hackathon3')</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon4')</p>
                        <p class="text-black text-[14px]">@lang('common.hackathon5')</p>
                    </div>
                </div>
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1561622539-dffbfc2008fd?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-xl font-bold">OCT</p>
                            <p class="text-xl font-bold">07</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.Ti')</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon6')</p>
                        <p class="text-black text-[14px]">@lang('common.hackathon7')</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 text-center">
        <a href=""
            class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
            <span>@lang('common.hackathon8')</span>
            <i class='bx bx-chevron-right text-lg align-middle'></i>
        </a>
    </div>
    {{-- Upcoming events --}}

    {{-- Prestasi Mahasiswa --}}
    <div class="mt-20">
        <div class="text-center ">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">@lang('common.prestasi')</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">@lang('hackathon.hackathon9')</p>
        </div>
        <div class="mt-10">
            <div class="container md:px-36 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/f6/01/cd/f601cd8341821feba8baa244123c8e2a.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.hackathon10')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.hackathon11')</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/12/c6/3c/12c63c8ed352f7f61fd45ffcaa970280.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.hackathon10')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.hackathon12')</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/38/54/a8/3854a8e825bc816e7d7c2caa2c255460.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">@lang('common.hackathon10')</p>
                        <h1 class="text-xl font-semibold text-primary">@lang('common.hackathon13')</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>@lang('common.mor')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Prestasi Mahasiswa --}}

    {{-- Campus Life --}}
    <div class="mt-16">
        <h1 class="text-center text-primary text-4xl md:text-5xl font-bold py-10">@lang('common.campuslife')</h1>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="w-full h-auto bg-white">
                    <img src="https://plus.unsplash.com/premium_photo-1661546333305-667b3326bb99?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <h1 class="py-3 font-semibold text-xl">@lang('common.hackathon14')</h1>
                    <p class="text-[#A9A9A9] mb-5">@lang('common.hackathon15')</p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>@lang('common.readmore')</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto bg-white">
                    <img src="https://plus.unsplash.com/premium_photo-1661690088942-d968065868d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <h1 class="py-3 font-semibold text-xl">@lang('common.hackathon16')</h1>
                    <p class="text-[#A9A9A9] mb-5">@lang('common.hackathon17')</p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>@lang('common.readmore')</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Campus Life --}}

    {{-- Non Akademik --}}
    <div class="bg-primary w-full h-auto mt-20">
        <div class="container py-5">
            <h1 class="py-5 text-4xl md:text-5xl font-bold text-white text-center mb-5">@lang('common.non')</h1>
            <div class="grid grid-cols-1 mb-5 md:grid-cols-2 gap-8">
                <div class="w-full h-auto">
                    <img src="https://plus.unsplash.com/premium_photo-1710467004560-4e82fe4c80e9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl text-white">@lang('common.hackathon18')</h1>
                    <p class="text-white mb-5">
                        @lang('common.hackathon19')
                    </p>
                    <a href="" class="text-white inline-block hover:translate-x-1 transition-all duration-700">
                        <span>@lang('common.readmore')</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto ">
                    <img src="https://plus.unsplash.com/premium_photo-1705883064233-e56b05f42b07?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl text-white">@lang('common.hackathon20')</h1>
                    <p class="text-white mb-5">
                        @lang('common.hackathon21')
                    </p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>@lang('common.readmore')</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Non Akademik --}}


</main>
