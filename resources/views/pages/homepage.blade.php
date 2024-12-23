<main>
    <button id="scrollTopBtn"
        class="fixed bottom-5 right-10 bg-primary text-white p-3 rounded-full shadow-lg hover:bg-blue-600 z-50 hidden   ">
        <i class='bx bx-up-arrow-alt text-2xl'></i>
    </button>
    {{-- Main --}}

    <section id="hero"
        style="
                background-image: linear-gradient(to top, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.1)), 
                          url('{{ asset('images/mahasiswa2.png') }}');
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
                height: 100vh;
                background-attachment: fixed;
                brightness: 1;
                
            "
        class="relative">
        <div class="absolute inset-0 flex flex-col justify-center items-center sm:top-20">
            <!-- Logo Takumi -->
            <img src="{{ asset('images/logo-takumi.png') }}" class="w-64 md:w-80 ">
            <p
                class="description container w-full md:w-2/3 mt-20 text-[16px] md:text-lg mx-auto text-white md:font-semibold text-center">
                @lang('common.texnav')</p>

            <!-- Tombol Pendaftaran PPMB -->
            <a href="https://pmb.takumi.ac.id/" target="_black"
                class="px-12 py-4 bg-primary rounded-lg text-white mt-10">@lang('common.pendaftaran')</a>

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
                    @lang('common.tentangpolitekniktakumi')
                    <span class="animate-bounce inline-block">
                        <i class='bx bx-down-arrow-alt'></i>
                    </span>
                </h1>
            </div>
        </a>
    </section>
    {{-- Main --}}


    {{-- Visi & Misi --}}
    <div id="#visi-misi" class="bg-white w-full h-auto py-10 ">
        <div class="relative grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
            <!-- Left content column -->
            <div class="flex flex-col justify-between space-y-4 md:space-y-0">
                <!-- Visi Section -->
                <div class="flex bg-primary rounded-r-xl mb-4">
                    <div class="w-full px-4 py-4 text-white">
                        <h1 class="text-3xl md:text-4xl underline mb-4 font-semibold">@lang('common.visi')</h1>
                        <p class="description text-sm ">
                            @lang('common.menjadi')
                        </p>
                    </div>
                </div>
                <!-- Misi Section -->
                <div class="flex bg-primary rounded-r-xl">
                    <div class="w-full px-4 py-4 text-white">
                        <h1 class="text-3xl md:text-4xl underline mb-4 font-semibold">@lang('common.misi')</h1>
                        <ol class="description list-decimal list-inside space-y-2 text-sm ">
                            <li>
                                @lang('common.Misi1')
                            </li>
                            <li>
                                @lang('common.Misi2')
                            </li>
                            <li>
                                @lang('common.Misi3')
                            </li>
                        </ol>
                    </div>
                </div>
            </div>

            <!-- Right image column -->
            <div class="flex justify-center items-center">
                <img src="{{ asset('assets/Pak Feli.PNG') }}" alt="" width="550" />

            </div>
        </div>
    </div>

    {{-- Visi & Misi --}}

    <div class="mt-10 bg-[#F2FAFF] py-10">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl text-primary font-bold">
                @lang('common.terbaru')
            </h1>
            <p class="text-sm md:text-lg text-[#646464]">
                @lang('common.ter')
            </p>
        </div>

        <div class="container mt-10">
            <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                <!-- Berita 1 -->
                <div class="w-full">
                    <div class="w-full h-52 md:h-[400px] rounded-lg relative overflow-hidden">
                        <img src="{{ asset('assets/img-berita/kunjungan-akagi.jpg') }}" alt=""
                            class="w-full h-full object-cover rounded-lg" />
                        <div
                            class="absolute inset-0 flex flex-col justify-end px-3 md:px-4 py-3 md:py-4 bg-gradient-to-t from-black via-transparent to-transparent">
                            <p class="text-white text-base md:text-xl font-bold mb-2 md:mb-3">
                                @lang('common.kunjungan')
                            </p>
                            <div class="flex justify-between items-center text-white">
                                <div class="flex gap-1 md:gap-2 items-center">
                                    <img src="{{ asset('assets/jam.svg') }}" alt=""
                                        class="w-3 md:w-4 h-3 md:h-4" />
                                    <p class="text-xs md:text-base">@lang('common.tanggal1')</p>
                                </div>
                                <div class="">
                                    <a href="#" class="flex items-center text-xs md:text-base">
                                        @lang('common.readmore')
                                        <img src="{{ asset('assets/arrow.svg') }}" alt="" class="w-3 md:w-5" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Berita 2 -->
                <div class="w-full">
                    <div class="w-full h-52 md:h-[400px] rounded-lg relative overflow-hidden">
                        <img src="{{ asset('assets/img-berita/penyerahan-beasiswa.png') }}" alt=""
                            class="w-full h-full object-cover rounded-lg" />
                        <div
                            class="absolute inset-0 flex flex-col justify-end px-3 md:px-4 py-3 md:py-4 bg-gradient-to-t from-black via-transparent to-transparent">
                            <p class="text-white text-base md:text-xl font-bold mb-2 md:mb-3">
                                @lang('common.kunjungan2')
                            </p>
                            <div class="flex justify-between items-center text-white">
                                <div class="flex gap-1 md:gap-2 items-center">
                                    <img src="{{ asset('assets/jam.svg') }}" alt=""
                                        class="w-3 md:w-4 h-3 md:h-4" />
                                    <p class="text-xs md:text-base">@lang('common.tanggal2')</p>
                                </div>
                                <div class="">
                                    <a href="#" class="flex items-center text-xs md:text-base">
                                        @lang('common.readmore')
                                        <img src="{{ asset('assets/arrow.svg') }}" alt="" class="w-3 md:w-5" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Berita 3 -->
                <div class="w-full">
                    <div class="w-full h-52 md:h-[400px] rounded-lg relative overflow-hidden">
                        <img src="{{ asset('assets/img-berita/ttd-lefa.jpg') }}" alt=""
                            class="w-full h-full object-cover rounded-lg" />
                        <div
                            class="absolute inset-0 flex flex-col justify-end px-3 md:px-4 py-3 md:py-4 bg-gradient-to-t from-black via-transparent to-transparent">
                            <p class="text-white text-base md:text-xl font-bold mb-2 md:mb-3">
                                @lang('common.kunjungan3')
                            </p>
                            <div class="flex justify-between items-center text-white">
                                <div class="flex gap-1 md:gap-2 items-center">
                                    <img src="{{ asset('assets/jam.svg') }}" alt=""
                                        class="w-3 md:w-4 h-3 md:h-4" />
                                    <p class="text-xs md:text-base">@lang('common.tanggal3')</p>
                                </div>
                                <div class="">
                                    <a href="#" class="flex items-center text-xs md:text-base">
                                        @lang('common.readmore')
                                        <img src="{{ asset('assets/arrow.svg') }}" alt="" class="w-3 md:w-5" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Berita 4 -->
                <div class="w-full">
                    <div class="w-full h-52 md:h-[400px] rounded-lg relative overflow-hidden">
                        <img src="{{ asset('assets/img-berita/kunjungan.jpg') }}" alt=""
                            class="w-full h-full object-cover rounded-lg" />
                        <div
                            class="absolute inset-0 flex flex-col justify-end px-3 md:px-4 py-3 md:py-4 bg-gradient-to-t from-black via-transparent to-transparent">
                            <p class="text-white text-base md:text-xl font-bold mb-2 md:mb-3">
                                @lang('common.kunjungan4')
                            </p>
                            <div class="flex justify-between items-center text-white">
                                <div class="flex gap-1 md:gap-2 items-center">
                                    <img src="{{ asset('assets/jam.svg') }}" alt=""
                                        class="w-3 md:w-4 h-3 md:h-4" />
                                    <p class="text-xs md:text-base">@lang('common.tanggal4')</p>
                                </div>
                                <div class="">
                                    <a href="#" class="flex items-center text-xs md:text-base">
                                        @lang('common.readmore')
                                        <img src="{{ asset('assets/arrow.svg') }}" alt=""
                                            class="w-3 md:w-5" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Selengkapnya -->
            <div class="mt-10 text-center">
                <a href=""
                    class="bg-primary text-white px-6 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>@lang('common.readmore')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Takumi News --}}

    {{-- Akademik --}}
    <div class="mt-20">
        <div class="container">
            <div class="flex flex-col md:flex-row items-center gap-10">
                <div class="w-full md:w-[50%]">
                    <h1 class="text-5xl mb-2 text-primary font-bold">
                        @lang('common.akademik')
                    </h1>
                    <p class="text-[#646464] text-base">
                        <span class="uppercase font-bold text-2xl text-[#646464]">@lang('common.hadapi')</span>
                        @lang('common.kerja')
                    </p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 w-full md:w-[50%]">
                    <div>
                        <div class="w-full h-auto relative mb-4">
                            <img src="{{ asset('assets/img-prodi/TI.jpg') }}" alt=""
                                class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                @lang('common.Ti')</h1>
                        </div>
                        <div class="w-full h-auto relative">
                            <img src="{{ asset('assets/img-prodi/Bisnis-Digital.jpg') }}" alt=""
                                class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D4
                                @lang('common.Bd')</h1>
                        </div>
                    </div>
                    <div>
                        <div class="w-full h-auto relative mb-4">
                            <img src="{{ asset('assets/img-prodi/Mekatronika.jpg') }}" alt=""
                                class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                @lang('common.Mk')
                            </h1>
                        </div>
                        <div class="w-full h-auto relative">
                            <img src="{{ asset('assets/img-prodi/Bahasa-Jepang.jpg') }}" alt=""
                                class="object-cover h-full rounded-lg brightness-50">
                            <h1 class="absolute inset-0 flex items-center justify-center text-white font-bold">D3
                                @lang('common.Bj')</h1>
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
            <img src="{{ asset('assets/img-dosen/bg-julita.JPG') }}" alt=""
                class="w-full h-[500px] md:h-[700px] object-cover" />

            <!-- Elemen yang akan muncul saat hover -->
            <div
                class="absolute inset-0 flex justify-center items-center opacity-0 hover:opacity-100 transition-opacity duration-300 backdrop-blur-sm bg-white bg-opacity-10">
                <div class="flex justify-center flex-col items-center">
                    <img src="{{ asset('assets/img-dosen/julita.png') }}" alt=""
                        class="w-20 h-20 md:w-40 md:h-40 rounded-full object-cover" />
                    <p
                        class="text-center mt-4 w-full md:w-2/3 font-semibold text-lg md:text-4xl text-white pb-10 md:pb-40 px-4">
                        @lang('common.kata2')
                    </p>
                    <div class="text-center text-white">
                        <p class="text-lg md:text-2xl font-semibold">
                            @lang('common.nama1')
                        </p>
                        <p class="text-lg md:text-2xl font-light">
                            @lang('common.dosen2')
                        </p>
                        <div class="mt-5 md:mt-10">
                            <a href="" class="text-sm md:text-lg">@lang('common.readmore')</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}

    {{-- Penelitian --}}
    <div class="bg-[#F2FAFF] py-10">
        <div class="container">
            <div class="mb-4 text-center md:text-left">
                <h1 class="text-2xl md:text-5xl mb-2 text-primary font-bold">
                    @lang('common.nama2')
                </h1>
                <p class="text-sm md:text-lg text-[#646464]">
                    @lang('common.proyek')
                </p>
            </div>

            <!-- Proyek Mahasiswa -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-lg shadow-lg mb-6">
                <div class="w-full h-[428px]">
                    <img src="{{ asset('assets/img-proyek/door.jpg') }}" alt="Proyek Mahasiswa"
                        class="w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="py-4 px-5 md:px-5 text-[#646464]">
                    <p class="text-sm md:text-base">@lang('common.nama3')</p>
                    <h1 class="text-xl md:text-2xl font-bold text-primary">
                        @lang('common.smart')
                    </h1>
                    <p class="text-sm md:text-base">@lang('common.tanggal5')</p>
                    <p class="mt-4 text-sm md:text-base">
                        @lang('common.proyek2')
                    </p>
                    <div class="mt-4">
                        <a href="" class="text-primary text-sm md:text-base">@lang('common.readmore')</a>
                    </div>
                </div>
            </div>

            <!-- Proyek Dosen -->
            <div class="grid grid-cols-1 md:grid-cols-2 bg-white rounded-lg shadow-lg mb-6">
                <div class="w-full h-[428px]">
                    <img src="{{ asset('assets/img-proyek/group-marketing-experts-background.jpg') }}"
                        alt="Proyek Dosen" class="w-full h-full object-cover rounded-l-lg" />
                </div>
                <div class="py-4 px-5 md:px-5 text-[#646464]">
                    <p class="text-sm md:text-base">@lang('common.puroyek')</p>
                    <h1 class="text-xl md:text-2xl font-bold text-primary">
                        @lang('common.digital')
                    </h1>
                    <p class="text-sm md:text-base">@lang('common.tanggal6')</p>
                    <p class="mt-4 text-sm md:text-base">
                        @lang('common.proyek3')
                    </p>
                    <div class="mt-4">
                        <a href="" class="text-primary text-sm md:text-base">@lang('common.readmore')</a>
                    </div>
                </div>
            </div>


            <div class="mt-10 text-center">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>@lang('common.readmore')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>

    {{-- Penelitian --}}

    {{-- Upcoming events --}}
    <div class="py-10">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-primary mb-2">@lang('common.kongo')</h1>
            <p class="description text-[#646464]">@lang('common.acara1')</p>
            {{-- <h1 class="text-4xl md:text-5xl font-bold text-white">@lang('common.kongo')</h1> --}}
        </div>
        <div class="container md:px-10">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:px-20">
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img-acara/training.png') }}" class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-base font-bold">@lang('common.tanggal7')</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.Ti')</h1>
                        {{-- <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon1')</p> --}}
                        <p class="text-black text-[14px]">@lang('common.acara2')</p>
                    </div>
                    <div class="p-7">
                        <a href=""
                            class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')
                            <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                    </div>
                </div>
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img-acara/vocational.png') }}" class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-base font-bold">@lang('common.tanggal8')</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.hackathon3')</h1>
                        {{-- <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon4')</p> --}}
                        <p class="text-black text-[14px]">@lang('common.acara3')</p>
                    </div>
                    <div class="p-7">
                        <a href=""
                            class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')
                            <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                    </div>
                </div>
                <div class="w-full h-auto bg-white rounded-xl shadow-xl">
                    <div class="relative">
                        <img src="{{ asset('assets/img-acara/trialclass.jpg') }}" class="rounded-xl">
                        <div class="px-4 py-2 absolute -bottom-5 left-5 bg-primary text-white rounded-lg">
                            <p class="text-base font-bold">@lang('common.tanggal9')</p>
                        </div>
                    </div>
                    <div class="p-7">
                        <h1 class="text-xl font-bold text-black">@lang('common.proyek4')</h1>
                        {{-- <p class="text-[#A9A9A9] text-md mb-2">@lang('common.hackathon6')</p> --}}
                        <p class="text-black text-[14px]">@lang('common.acara4')</p>

                    </div>
                    <div class="p-7">
                        <a href=""
                            class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')
                            <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 text-center">
        <a href=""
            class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
            <span>@lang('common.readmore')</span>
            <i class='bx bx-chevron-right text-lg align-middle'></i>
        </a>
    </div>
    {{-- Upcoming events --}}

    {{-- Prestasi Mahasiswa --}}
    <div class="mt-20 bg-[#F2FAFF]">
        <div class="container py-10">
            <div class="text-center mb-8">
                <h1 class="text-5xl text-primary font-bold mb-2">
                    @lang('common.prestasi')
                </h1>
                <p class="description text-[#646464]">
                    @lang('common.takumy')
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1 -->
                <div class="w-full h-auto bg-white shadow-lg p-2 rounded-lg">
                    <p class="text-[#007DB1] text-center text-lg font-bold mb-4">
                        @lang('common.smt3')
                    </p>
                    <img src="{{ asset('assets/img-prestasi/yansen.jpg') }}" alt=""
                        class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        @lang('common.yansen')
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        @lang('common.Bj')
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        @lang('common.juara1')

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
                        @lang('common.smt3')
                    </p>
                    <img src="{{ asset('assets/img-prestasi/Ridho.jpg') }}" alt=""
                        class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        @lang('common.ridho')
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        @lang('common.Ti')
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        @lang('common.juara2')
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
                        @lang('common.smt5')
                    </p>
                    <img src="{{ asset('assets/img-prestasi/Euis.jpg') }}" alt=""
                        class="w-[140px] h-[140px] rounded-full object-cover mx-auto mb-4" />
                    <h1 class="text-lg font-semibold text-primary text-center mx-auto">
                        @lang('common.euis')
                    </h1>
                    <p class="text-[#646464] mb-4 text-center mx-auto">
                        @lang('common.Bj')
                    </p>
                    <p class="max-w-[280px] text-center mx-auto text-[#646464]">
                        @lang('common.juara3')

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
                    <span>@lang('common.readmore')</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Prestasi Mahasiswa --}}

    {{-- Campus Life --}}
    <div class="mt-10">
        <div class="text-center mb-5">
            <h1 class="text-4xl md:text-5xl text-primary font-bold mb-2">@lang('common.campuslife')</h1>
            <p class="description text-[#646464] text-sm md:text-base">
                @lang('common.campuslifer')
            </p>
        </div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="w-full h-auto bg-white shadow-xl rounded-lg">
                    <img src="{{ asset('assets/img-kehidupan-kampus/Foto 1.jpg') }}" alt=""
                        class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">@lang('common.akademi')</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>@lang('common.tanggal10')</p>
                        </div>
                        <h1 class="text-2xl md:text-lg font-semibold">
                            @lang('common.dosenpraktisi')
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            @lang('common.dosenpraktisi1')
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href=""
                                class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')<i
                                    class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto bg-white shadow-xl rounded-lg">
                    <img src="{{ asset('assets/img-kehidupan-kampus/Foto 2.jpg') }}" alt=""
                        class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">@lang('common.akademi')</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>@lang('common.tanggal11')</p>
                        </div>
                        <h1 class="text-2xl md:text-lg font-semibold">
                            @lang('common.eventbersama')
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            @lang('common.eventbersama1')
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href=""
                                class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')<i
                                    class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto bg-white shadow-xl rounded-lg">
                    <img src="{{ asset('assets/img-kehidupan-kampus/Foto 3.jpg') }}" alt=""
                        class="w-full h-auto md:h-[290px] object-cover rounded-t-lg" />
                    <div class="px-4 py-4 md:py-5">
                        <div class="flex justify-between items-center text-[#646464]">
                            <p class="text-sm">@lang('common.akademi')</p>
                            <p class="text-sm flex items-center"><span><img src="{{ asset('assets/jam.svg') }}"
                                        alt=""></span>@lang('common.tanggal12')</p>
                        </div>
                        <h1 class="text-2xl md:text-lg font-semibold">
                            @lang('common.karirjepang')
                        </h1>
                        <p class="mt-3 md:mt-4 text-xs md:text-sm text-[#646464]">
                            @lang('common.karirjepang1')
                        </p>
                        <div class="mt-8 md:mt-10">
                            <a href=""
                                class="text-[#646464] hover:text-primary inline-block hover:translate-x-1 transition-all duration-700">@lang('common.readmore')
                                <i class='bx bx-chevron-right text-lg align-middle'></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Campus Life --}}

    {{-- Non Akademik --}}
    <div class="bg-[#F2FAFF] py-10 w-full h-auto mt-20">
        <div class="container py-5">
            <div class="mb-5">
                <h1 class=" text-4xl md:text-5xl font-bold text-primary text-center mb-2">@lang('common.non')</h1>
                <p class="text-[#646464] text-center">@lang('common.nonin')</p>
            </div>
            <div class="grid grid-cols-1 mb-5 md:grid-cols-2 gap-8">
                <div class="w-full h-auto">
                    <img src="{{ asset('assets/img-non-akademik/Foto 1 (2).JPG') }}" alt=""
                        class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl ">@lang('common.ppks')</h1>
                    <p class="text-[#646464] mb-5">
                        @lang('common.hackathon19')
                    </p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>@lang('common.readmore')</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto ">
                    <img src="{{ asset('assets/img-non-akademik/Foto 2 (2).JPG ') }}" alt=""
                        class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl">@lang('common.ekstra')</h1>
                    <p class="text-[#646464] mb-5">
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

    <script>
        const scrollTopBtn = document.getElementById('scrollTopBtn');

        // Menampilkan tombol ketika menggulir ke bawah
        window.addEventListener('scroll', () => {
            if (document.body.scrollTop > 4000 || document.documentElement.scrollTop > 120) {
                scrollTopBtn.classList.remove('hidden');
            } else {
                scrollTopBtn.classList.add('hidden');
            }
        });

        // Fungsi untuk scroll ke atas ketika tombol diklik
        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth' // Animasi scroll yang halus
            });
        });
    </script>


</main>
