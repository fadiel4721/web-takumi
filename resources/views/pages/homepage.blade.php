<main>
    {{-- Main --}}
    {{-- <div class="relative bg-gray-500 h-screen"> --}}
    <!-- Background image -->
    {{-- <div class="absolute inset-0">
            <img src="{{ asset('images/mahasiswa2.png') }}" alt="" class="w-full h-full object-cover">
        </div> --}}

    <!-- Logo Takumi -->
    {{-- <div class="absolute inset-0 flex flex-col justify-center items-center gap-8">
            <!-- Logo Takumi -->
            <img src="{{ asset('images/logo-takumi.png') }}" class="w-64 md:w-80">

            <!-- Tombol Pendaftaran PPMB -->
            <button
                class="hidden md:inline-block text-white text-lg outline-none border-none cursor-pointer font-medium
                bg-gradient-to-br from-[#00AEE7] to-[#5468FF] shadow-[0_0.01em_0.01em_rgba(45,35,66,0.4),0_0.3em_0.7em_-0.01em_rgba(45,35,66,0.3),inset_0_-0.01em_0_rgba(58,65,111,0.5)] 
                px-8 h-[2.6em] rounded-md transition-transform duration-150 ease-linear">
                @lang('common.ppmb')
            </button>

            <style>
                button:hover {
                    box-shadow: 0px 0.1em 0.2em rgba(45, 35, 66, 0.4),
                        0px 0.4em 0.7em -0.1em rgba(45, 35, 66, 0.3),
                        inset 0px -0.1em 0px #3c4fe0;
                    transform: translateY(-0.1em);
                }

                button:active {
                    box-shadow: inset 0px 0.1em 0.6em #3c4fe0;
                    transform: translateY(0em);
                }
            </style>
        </div>

        <!-- Text content -->
        <div class="absolute bottom-0 w-full bg-black bg-opacity-40 py-5 text-white">
            <div class=" mx-auto md:flex justify-between items-center gap-10">
                <p class="container md:text-left text-sm md:text-base md:w-full text-justify">
                   @lang('common.poltek')
                </p>

                <div class="md:hidden flex justify-center py-5 md:py-0">
                    <button
                        class="inline-block text-white text-lg outline-none border-none cursor-pointer font-medium
           bg-gradient-to-br from-[#00AEE7] to-[#5468FF] shadow-[0_0.01em_0.01em_rgba(45,35,66,0.4),0_0.3em_0.7em_-0.01em_rgba(45,35,66,0.3),inset_0_-0.01em_0_rgba(58,65,111,0.5)] 
           px-8 h-[2.6em] rounded-md transition-transform duration-150 ease-linear">
                        @lang('common.ppmb')
                    </button>

                    <style>
                        button:hover {
                            box-shadow: 0px 0.1em 0.2em rgba(45, 35, 66, 0.4),
                                0px 0.4em 0.7em -0.1em rgba(45, 35, 66, 0.3),
                                inset 0px -0.1em 0px #3c4fe0;
                            transform: translateY(-0.1em);
                        }

                        button:active {
                            box-shadow: inset 0px 0.1em 0.6em #3c4fe0;
                            transform: translateY(0em);
                        }
                    </style>

                </div>
            </div>
        </div>
    </div> --}}

    <section id="hero"
        style="
                background-image: url('{{ asset('images/mahasiswa2.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                background-attachment: fixed;
                brightness: 0.5;
            "
        class="relative">
        <div class="absolute inset-0 flex flex-col justify-center items-center sm:top-20">
            <!-- Logo Takumi -->
            <img src="{{ asset('images/logo-takumi.png') }}" class="w-64 md:w-80 ">

            <!-- Tombol Pendaftaran PPMB -->
            <button
                class="md:hidden inline-block mt-5 text-white text-lg outline-none border-none cursor-pointer font-medium
                bg-gradient-to-br from-[#00AEE7] to-[#5468FF] shadow-[0_0.01em_0.01em_rgba(45,35,66,0.4),0_0.3em_0.7em_-0.01em_rgba(45,35,66,0.3),inset_0_-0.01em_0_rgba(58,65,111,0.5)] 
                px-8 h-[2.6em] rounded-md transition-transform duration-150 ease-linear">
                Pendaftaran Mahasiswa Baru
            </button>

            <style>
                button:hover {
                    box-shadow: 0px 0.1em 0.2em rgba(45, 35, 66, 0.4),
                        0px 0.4em 0.7em -0.1em rgba(45, 35, 66, 0.3),
                        inset 0px -0.1em 0px #3c4fe0;
                    transform: translateY(-0.1em);
                }

                button:active {
                    box-shadow: inset 0px 0.1em 0.6em #3c4fe0;
                    transform: translateY(0em);
                }
            </style>
        </div>
        <a href="#visi-misi">
            <div class="bg-primary w-full absolute bottom-0 py-2 text-center">
                <h1 class="text-white">
                    Tentang Takumi
                    <span class="animate-bounce inline-block">
                        <i class='bx bx-down-arrow-alt'></i>
                    </span>
                </h1>
            </div>
        </a>
    </section>
    {{-- Main --}}


    {{-- Visi & Misi --}}
    <div id="visi-misi" class="mt-10 bg-primary w-full h-auto text-white ">
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
                    <li>
                      @lang('common.Misi3')
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="text-center py-10">
            <a href="#"
                class="px-8 py-3 outline outline-white rounded-3xl text-sm hover:bg-white hover:text-primary transition-all duration-300">Tentang
                Politeknik
                Takumi</a>
                {{-- <a href="#" class="px-8 py-3 outline outline-white rounded-3xl text-sm">@lang('common.tentangpolitekniktakumi')</a> --}}
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
    {{-- <div class="mt-10 w-full h-auto bg-primary py-10">
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
    </div> --}}
    <div class="mt-20">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="w-full md:w-[50%]">
                    <h1 class="text-5xl mb-2 text-primary font-bold">
                        Akademik
                    </h1>
                    <p class="text-[#646464] text-base">
                        <span class="uppercase font-bold text-2xl text-[#646464]">Siap hadapi dunia kerja?</span>
                        Program studi di Politeknik Takumi dirancang dengan
                        mempertimbangkan kebutuhan industri. Kamu akan
                        belajar langsung dari praktisi yang berpengalaman
                        dan memiliki kesempatan untuk magang di perusahaan
                        ternama.
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full md:w-[50%]">
                    <div>
                        <div class="w-full h-auto md:h-64 relative mb-4">
                            <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                Teknologi
                                Informasi</h1>
                        </div>
                        <div class="w-full h-auto md:h-64 relative">
                            <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                Mekatronika</h1>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-auto md:h-64 relative mb-4">
                            <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                Bahasa
                                Jepang</h1>
                        </div>
                        <div class="w-full h-auto md:h-64 relative">
                            <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="" class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D4
                                Bisnis
                                Digital</h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    {{-- Akademik --}}

    {{-- Staff & Lecturer --}}
    <div class="mt-20">
        <div class="relative">
            <!-- Gambar Utama -->
            <img src="https://images.unsplash.com/photo-1444720895098-cbd6b640c909?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                alt="" class="w-full h-[500px] md:h-[700px] object-cover" />

            <!-- Elemen yang akan muncul saat hover -->
            <div
                class="absolute inset-0 flex justify-center items-center opacity-0 hover:opacity-80 transition-opacity duration-300 backdrop-blur-sm bg-white bg-opacity-10">
                <div class="flex justify-center flex-col items-center">
                    <img src="https://plus.unsplash.com/premium_photo-1689977927774-401b12d137d6?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-20 h-20 md:w-40 md:h-40 rounded-full object-cover" />
                    <p
                        class="text-center mt-4 w-full md:w-2/3 font-semibold text-lg md:text-4xl text-white pb-10 md:pb-40 px-4">
                        "Kuliah bukan hanya tentang menghafal, tapi juga tentang
                        bagaimana kamu menerapkan ilmu yang kamu dapatkan dalam
                        kehidupan nyata."
                    </p>
                    <div class="text-center text-white">
                        <p class="text-lg md:text-2xl font-semibold">
                            Lambok Rommy Sulaeman, S.E., M.M.
                        </p>
                        <p class="text-lg md:text-2xl font-light">
                            Dosen Prodi Bisnis Digital
                        </p>
                        <div class="mt-5 md:mt-10">
                            <a href="" class="text-sm md:text-lg">More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}

    {{-- Penelitian --}}
    {{-- <div class="mt-20">
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
    </div> --}}

    <div class="bg-[#F2FAFF] py-10">
        <div class="container">
            <div class="mb-4 text-center md:text-left">
                <h1 class="text-2xl md:text-5xl mb-2 text-primary font-bold">
                    Proyek dan Penelitian
                </h1>
                <p class="text-sm md:text-lg text-[#646464]">
                    Proyek dan penelitian yang dilakukan oleh Mahasiswa dan Dosen
                    Politeknik Takumi
                </p>
            </div>

            <!-- Proyek Mahasiswa -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-lg shadow-lg mb-6">
                <div class="w-full h-[250px] md:h-[450px]">
                    <img src="https://images.unsplash.com/photo-1596658591534-591d75e2f2f7?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="py-5 px-7 text-[#646464]">
                    <p class="text-sm md:text-base">Proyek Mahasiswa</p>
                    <h1 class="text-xl md:text-2xl font-bold text-primary">
                        Penerapan Teknologi IoT untuk Optimalisasi Sistem Irigasi Pertanian Cerdas
                    </h1>
                    <p class="text-sm md:text-base">10 Oktober 2024</p>
                    <p class="mt-5 text-sm md:text-base">
                        Penelitian ini bersifat terapan dan menantang mahasiswa untuk
                        merancang serta mengembangkan sistem berbasis IoT. Sifat penelitian
                        ini sesuai untuk mahasiswa karena teknologi IoT sudah tersedia dan
                        penelitian lebih berfokus pada implementasi serta pengujian
                        fungsionalitas. Ini memberikan pengalaman praktis bagi mahasiswa
                        dalam menyelesaikan masalah nyata di bidang pertanian dengan teknologi
                        modern.
                    </p>
                    <div class="mt-6">
                        <a href="" class="text-primary text-sm md:text-base">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <!-- Proyek Dosen -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-lg shadow-lg mb-6">
                <div class="w-full h-[250px] md:h-[450px]">
                    <img src="https://images.unsplash.com/photo-1596658591534-591d75e2f2f7?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="py-5 px-7 text-[#646464]">
                    <p class="text-sm md:text-base">Proyek Mahasiswa</p>
                    <h1 class="text-xl md:text-2xl font-bold text-primary">
                        Penerapan Teknologi IoT untuk Optimalisasi Sistem Irigasi Pertanian Cerdas
                    </h1>
                    <p class="text-sm md:text-base">10 Oktober 2024</p>
                    <p class="mt-5 text-sm md:text-base">
                        Penelitian ini bersifat terapan dan menantang mahasiswa untuk
                        merancang serta mengembangkan sistem berbasis IoT. Sifat penelitian
                        ini sesuai untuk mahasiswa karena teknologi IoT sudah tersedia dan
                        penelitian lebih berfokus pada implementasi serta pengujian
                        fungsionalitas. Ini memberikan pengalaman praktis bagi mahasiswa
                        dalam menyelesaikan masalah nyata di bidang pertanian dengan teknologi
                        modern.
                    </p>
                    <div class="mt-6">
                        <a href="" class="text-primary text-sm md:text-base">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>Selengkapnya</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Penelitian --}}

    {{-- Upcoming events --}}
    <div class="mt-16 py-10 bg-primary w-full">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Acara Mendatang</h1>
            <p class="text-white">Acara yang akan datang di Politeknik Takumi</p>
            {{-- <h1 class="text-4xl md:text-5xl font-bold text-white">@lang('common.kongo')</h1> --}}
        </div>
        <div class="container md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:px-20">
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="https://images.unsplash.com/photo-1600087626120-062700394a01?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                            class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-base font-bold">07 Oktober 2024</p>
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
                            <p class="text-base font-bold">07 Oktober 2024</p>
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
                            <p class="text-base font-bold">07 Oktober 2024</p>
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
            <span>Acara Selengkapnya</span>
            <i class='bx bx-chevron-right text-lg align-middle'></i>
        </a>
    </div>
    {{-- Upcoming events --}}

    {{-- Prestasi Mahasiswa --}}
    {{-- <div class="mt-20">
        <div class="text-center container">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">Prestasi Mahasiswa</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">Beberapa prestasi mahasiswa</p>
        </div>
        <div class="mt-10">
            <div class="container  grid grid-cols-1 md:grid-cols-3 gap-8">
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
    </div> --}}
    <div class="mt-20 bg-[#F2FAFF]">
        <div class="container py-10">
            <div class="text-center mb-8">
                <h1 class="text-5xl text-primary font-bold">
                    Prestasi Mahasiswa
                </h1>
                <p class="text-[#646464]">
                    Prestasi mahasiswa Politeknik Takumi
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="w-full h-auto bg-white shadow-lg p-2 rounded-lg">
                    <p class="text-[#007DB1] text-center text-lg font-bold mb-4">
                        Sistem Pengelolaan Limbah Plastik Berbasis Mesin Cetak 3D
                    </p>
                    <img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        Wayan Deva
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        Teknologi Informasi
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        Juara pertama dalam Kompetisi Inovasi Teknologi
                        Nasional 2024 yang diselenggarakan di Surabaya.
                    </p>
                    <div class="flex justify-center gap-2 mt-4">
                        <a href="">
                            <img src="{{ asset('assets/linked.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/ig.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/x.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/mail.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="w-full h-auto bg-white shadow-lg p-2 rounded-lg">
                    <p class="text-[#007DB1] text-center text-lg font-bold mb-4">
                        Sistem Pengelolaan Limbah Plastik Berbasis Mesin Cetak 3D
                    </p>
                    <img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        Rizky Maulana
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        Mekatronika
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        Juara pertama dalam Kompetisi Inovasi Teknologi
                        Nasional 2024 yang diselenggarakan di Surabaya.
                    </p>
                    <div class="flex justify-center gap-2 mt-4">
                        <a href="">
                            <img src="{{ asset('assets/linked.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/ig.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/x.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/mail.svg') }}" alt="">
                        </a>
                    </div>
                </div>
                <!-- Card 1 -->
                <div class="w-full h-auto bg-white shadow-lg p-2 rounded-lg">
                    <p class="text-[#007DB1] text-center text-lg font-bold mb-4">
                        Sistem Pengelolaan Limbah Plastik Berbasis Mesin Cetak 3D
                    </p>
                    <img src="https://plus.unsplash.com/premium_photo-1671656349322-41de944d259b?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        Rizky Maulana
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        Mekatronika
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        Juara pertama dalam Kompetisi Inovasi Teknologi
                        Nasional 2024 yang diselenggarakan di Surabaya.
                    </p>
                    <div class="flex justify-center gap-2 mt-4">
                        <a href="">
                            <img src="{{ asset('assets/linked.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/ig.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/x.svg') }}" alt="">
                        </a>
                        <a href="">
                            <img src="{{ asset('assets/mail.svg') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-10 text-center">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>Selengkapnya</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Prestasi Mahasiswa --}}

    {{-- Campus Life --}}
    {{-- <div class="mt-16">
        <h1 class="text-center text-primary text-4xl md:text-5xl font-bold py-10">Kehidupan Kampus</h1>
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
    </div> --}}
    <div class="mt-10">
        <div class="text-center mb-5">
            <h1 class="text-4xl md:text-5xl text-primary font-bold mb-2">Kehidupan kampus</h1>
            <p class="text-[#646464] text-sm md:text-base">
                Kehidupan kampus Politeknik Takumi
            </p>
        </div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="w-full h-[420px] md:h-[580px] bg-white shadow-xl rounded-lg">
                    <img src="https://images.unsplash.com/photo-1599583863916-e06c29087f51?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">Kegiatan Akademik</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>20 Oktober 2024</p>
                        </div>
                        <h1 class="text-base md:text-lg font-semibold">
                            Workshop Pemrograman Python untuk Pemula
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            Workshop ini ditujukan bagi mahasiswa dari berbagai jurusan yang ingin mempelajari
                            dasar-dasar pemrograman Python. Melalui kegiatan ini, mahasiswa akan diajarkan...
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href="" class="text-[#646464] hover:text-primary">Baca
                                Selengkapnya <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[420px] md:h-[580px] bg-white shadow-xl rounded-lg">
                    <img src="https://images.unsplash.com/photo-1599583863916-e06c29087f51?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">Kegiatan Sosial</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>20 Oktober 2024</p>
                        </div>
                        <h1 class="text-base md:text-lg font-semibold">
                            Bakti Sosial dan Donor Darah Politeknik Takumi
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            Kegiatan bakti sosial ini diselenggarakan oleh Badan Eksekutif Mahasiswa (BEM) Politeknik
                            Takumi bekerja sama dengan Palang Merah Indonesia (PMI). Mahasiswa...
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href="" class="text-[#646464] hover:text-primary">Baca
                                Selengkapnya <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-[420px] md:h-[580px] bg-white shadow-xl rounded-lg">
                    <img src="https://images.unsplash.com/photo-1599583863916-e06c29087f51?q=80&w=1884&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">Kegiatan Olahraga</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>20 Oktober 2024</p>
                        </div>
                        <h1 class="text-base md:text-lg font-semibold">
                            Turnamen Futsal Antar Jurusan Politeknik Takumi 2024
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            Turnamen futsal ini adalah acara tahunan yang diadakan untuk mempererat hubungan antar
                            jurusan melalui olahraga. Setiap jurusan di Politeknik Takumi akan membentuk tim futs...
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href="" class="text-[#646464] hover:text-primary">Baca
                                Selengkapnya <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
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
