<main>
    {{-- Main --}}
    <div class="relative bg-gray-500 h-screen">
        <!-- Background image -->
        <div class="absolute inset-0">
            <img src="{{ asset('images/mahasiswa2.png') }}" alt="" class="w-full h-full object-cover">
        </div>

        <!-- Logo Takumi -->
        <div class="absolute inset-0 flex flex-col justify-center items-center gap-8">
            <!-- Logo Takumi -->
            <img src="{{ asset('images/logo-takumi.png') }}" class="w-64 md:w-80">

            <!-- Tombol Pendaftaran PPMB -->
            <button
                class="hidden md:inline-block text-white text-lg outline-none border-none cursor-pointer font-medium
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

        <!-- Text content -->
        <div class="absolute bottom-0 w-full bg-black bg-opacity-40 py-5 text-white">
            <div class=" mx-auto md:flex justify-between items-center gap-10">
                <p class="container md:text-left text-sm md:text-base md:w-full text-justify">
                    Politeknik Takumi mendorong mahasiswa untuk terus mengembangkan diri dan berkompetisi di tingkat
                    nasional maupun internasional. Dengan fasilitas modern dan pengajar yang berkualitas, kami siap
                    mencetak lulusan yang siap menghadapi tantangan global. Jadilah bagian dari keluarga besar Takumi
                    dan raih
                    prestasi gemilang.
                </p>

                <!-- Mobile button for registration -->
                <div class="md:hidden flex justify-center py-5 md:py-0">
                    <button
                        class="inline-block text-white text-lg outline-none border-none cursor-pointer font-medium
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
                    <h1 class="text-4xl font-bold  ml-5">Visi</h1>
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                </div>
            </div>
            <p class="w-full md:w-2/3 text-lg">
                Sebagai lembaga pendidikan tinggi terkemuka di bidang teknologi terapan yang menghasilkan lulusan
                berkarakter dan kompeten yang mampu memberikan kontribusi kepada masyarakat dan lingkungan melalui
                pembangunan berkelanjutan serta memiliki daya saing global
            </p>
        </div>
        <div class="container py-5">
            <div class="py-5 flex justify-end relative">
                <div class="absolute left-0 top-20">
                    <img src="{{ asset('assets/serpihan.svg') }}" width="150" alt="">
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                    <h1 class="text-4xl font-bold mr-5">Misi</h1>
                </div>
                <span class="w-[15px] h-auto bg-white rounded-l-lg"></span>
            </div>
            <div class="flex justify-end">
                <p class="w-full md:w-2/3 text-lg ">
                <ul>
                    <li>1. Menyelenggarakan pendidikan tinggi vokasi dengan model pembelajran product Based - Learning
                        by Doing (PBLD) yang unggul, ber-integritas dan adaptif terhadap kebutuhan tenaga kerja dunia
                        usaha, industri dan kewirausahaan dalam lingkup nasional maupun internasianal
                    </li>
                    <li>
                        2. Menyelenggarakan penelitian dan pengabdian kepada masyarakat yang berorientasi pada ilmu
                        pengetahuan, teknologi, dan bisnis yang memperhatiakan keseimbangan lingkungan
                    </li>
                    <li>
                        3. Menyelenggarakan kerja sama dengan berbagai institusi dalam dan luat negeri untuk
                        perkembangan pendidikan tinggi vokasi yang berorientasi industri
                    </li>
                </ul>
                </p>
            </div>
        </div>
        <div class="text-center py-10">
            <a href="#" class="px-8 py-3 outline outline-white rounded-3xl text-sm">Tentang Politeknik
                Takumi</a>
        </div>
    </div>
    {{-- Visi & Misi --}}

    {{-- Takumi News --}}
    <div class="mt-10">
        <div class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">Takumi News</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">Berita seputar kampus Politeknik Takumi</p>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 mt-10">

            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-3 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">Student Affairs</h1>
                    <p class="text-xs md:text-base text-white">Tim Robotika Politeknik Takumi Borong Juara di Kompetisi
                        Nasional</p>
                </div>
            </div>
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-2 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://plus.unsplash.com/premium_photo-1722859358264-7ee23aeabd9d?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">Cooperation</h1>
                    <p class="text-xs md:text-base text-white">Politeknik Takumi Jalin Kerjasama dengan Perusahaan
                        Jepang untuk Pengembangan Kurikulum</p>
                </div>
            </div>
        </div>
        <div class="container grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 mt-10">
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-2 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://plus.unsplash.com/premium_photo-1661761077411-d50cba031848?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">Research</h1>
                    <p class="text-xs md:text-base text-white">Peneliti Takumi Temukan Inovasi Baru dalam Bidang Energi
                        Terbarukan</p>
                </div>
            </div>
            <div
                class="relative h-[200px] md:h-[300px] col-span-1 md:col-span-3 flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1638037099058-4674316b9bc4?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-3 md:p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-lg md:text-2xl font-bold text-white">Campus life</h1>
                    <p class="text-xs md:text-base text-white">Politeknik Takumi Gelar Dies Natalis ke- 3 dengan
                        Berbagai Kegiatan Menarik</p>
                </div>
            </div>
        </div>
        <div class="text-center py-10">
            <a href=""
                class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                <span>Selengkapnya Takumi News</span>
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
                <h1 class="text-4xl md:text-5xl font-bold text-white">Akademik</h1>
                <p class="text-sm md:text-lg text-white">4 Program studi mengejar passion career anda</p>
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
                                <h1 class="font-semibold text-primary text-xl">Teknologi Informasi</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/TI.svg') }}" alt="Teknologi Informasi"
                                class="absolute -bottom-4 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">Teknologi Informasi</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">Prodi Teknologi Informasi Politeknik Takumi menghasilkan
                                    lulusan siap kerja sebagai web developer, mobile developer, dan IoT programmer.</p>
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
                                <h1 class="font-semibold text-primary text-xl">Mekatronika</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Mekatronika.svg') }}" alt="Mekatronika"
                                class="absolute -bottom-8 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">Mekatronika</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">Program Studi Mekatronika Politeknik Takumi menghasilkan
                                    lulusan yang ahli dalam integrasi mekanika, elektronika, dan pemrograman. Profil
                                    lulusan mencakup bidang automation engineer, robotic system developer, dan control
                                    system programmer.</p>
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
                                <h1 class="font-semibold text-primary text-xl">Bisnis Digital</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Bisnis-Digital.svg') }}" alt="Bisnis Digital"
                                class="absolute -bottom-4 -right-16 -rotate-[20deg]">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">Bisnis Digital</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">Program Studi Bisnis Digital Politeknik Takumi menghasilkan
                                    lulusan yang ahli dalam strategi digital, e-commerce, dan analisis data. Profil
                                    lulusan mencakup digital marketer, business analyst, dan e-commerce specialist.</p>
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
                                <h1 class="font-semibold text-primary text-xl">Bahasa Jepang</h1>
                                <p class="text-primary">Politeknik Takumi</p>
                            </div>
                            <img src="{{ asset('assets/Bahasa-Jepang.svg') }}" alt="Bahasa Jepang"
                                class="absolute -bottom-14 -right-8">
                        </div>

                        <!-- Back Side -->
                        <div
                            class="flip-card-back absolute w-full h-full bg-white rounded-lg shadow-lg overflow-hidden">
                            <div class="p-5 text-primary">
                                <h1 class="font-semibold text-primary text-xl">Bahasa Jepang</h1>
                                <p class="text-primary mb-5">Politeknik Takumi</p>
                                <p class="text-[#505050]">Program Studi Bahasa Jepang Politeknik Takumi menghasilkan
                                    lulusan yang mahir berbahasa Jepang dan memahami budaya Jepang. Profil lulusan
                                    mencakup penerjemah, pengajar bahasa Jepang, dan guide profesional.</p>
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
            <h1 class="text-4xl md:text-5xl font-bold text-primary">Staff & Lecturer</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">Profile of the month</p>
        </div>
        <div class="mt-10">
            <div class="container md:px-36 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/3f/95/1d/3f951dd3546ef0db47c8c1269a3426f5.jpg"
                        alt="Dosen Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/55/aa/48/55aa48c8456cb19f923c49968d0fb50b.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 group-hover:filter-none filter grayscale h-96 w-full object-cover">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Mekatronika</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/38/54/a8/3854a8e825bc816e7d7c2caa2c255460.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Bisnis Digital</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>Selengkapnya Staff & Lecturer</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}

    {{-- Penelitian --}}
    <div class="mt-20">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">Penelitian</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">Berita seputar kampus Politeknik Takumi</p>
        </div>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 h-auto">
                <div class="">
                    <img src="https://images.unsplash.com/photo-1561622539-dffbfc2008fd?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="rounded-2xl w-full h-auto ">
                </div>
                <div class="">
                    <h1 class="text-xl font-bold text-primary">Penelitian dan Inovasi</h1>
                    <p class="text-[#A9A9A9] text-[14px] mb-1 text-justify">Kontribusi dari Politeknik Takumi dalam
                        membangun bangsa
                        melalui Tridharma Pendidikan perguruan
                        tinggi mendorong untuk berinovasi dalam penelitian dalam perkembangan ilmu pengetahuan dan
                        teknologi baik itu nasional maupun internasional lebih dari 20 penelitian setiap tahunnya dari
                        Politeknik Takumi jurnal terpublikasi dari sinta 4 hingga sinta 1 berinovasi dalam membangun
                        serta berperan aktif dalam project bersama (Dosen dan Mahasiswa).
                    </p>
                    <p class="text-[#A9A9A9] text-[14px] mb-1 text-justify">
                        Politeknik Takumi tidak hanya fokus pada penelitian dosen, tetapi juga memberikan kesempatan
                        bagi mahasiswa untuk terlibat aktif dalam kegiatan penelitian. Setiap tahunnya, lebih dari 20
                        penelitian yang melibatkan mahasiswa berhasil dipublikasikan dalam jurnal ilmiah. Hal ini
                        menunjukkan bahwa mahasiswa Takumi memiliki potensi yang besar untuk menjadi generasi penerus
                        peneliti yang handal.
                    </p>
                    <p class="text-[#A9A9A9] text-[14px] text-justify">
                        Dengan semangat kolaborasi, Politeknik Takumi secara aktif menjalin kerja sama dengan berbagai
                        pihak, baik industri, pemerintah, maupun institusi pendidikan lainnya. Hasilnya, lebih dari 20
                        penelitian berkualitas tinggi telah dipublikasikan dalam jurnal nasional dan internasional
                        terindeks Scopus. Melalui sinergi ini, kami berupaya untuk menghasilkan inovasi yang relevan
                        dengan kebutuhan masyarakat dan mendorong pengembangan ilmu pengetahuan dan teknologi di
                        Indonesia.
                    </p>
                </div>
            </div>
            <div class="text-center mt-16">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>Selengkapnya Penelitian</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Penelitian --}}

    {{-- Upcoming events --}}
    <div class="mt-16 py-10 bg-primary w-full">
        <div class="text-center mb-10">
            <h1 class="text-4xl md:text-5xl font-bold text-white">Upcoming Events</h1>
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
                        <h1 class="text-xl font-bold text-black">Teknologi Informasi</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">Hackathon Takumi</p>
                        <p class="text-black text-[14px]">Ajang kompetisi pembuatan aplikasi atau perangkat lunak
                            inovatif dengan tema spesifik smart city</p>
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
                        <h1 class="text-xl font-bold text-black">Politeknik Takumi</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">Expo Inovasi Mahasiswa</p>
                        <p class="text-black text-[14px]">Pameran karya-karya inovatif mahasiswa Politeknik Takumi dari
                            berbagai macam Program Studi yang ada</p>
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
                        <h1 class="text-xl font-bold text-black">Teknologi Informasi</h1>
                        <p class="text-[#A9A9A9] text-md mb-2">Workshop IoT (Internet of Things)</p>
                        <p class="text-black text-[14px]">Ajang kompetisi pembuatan aplikasi atau perangkat lunak
                            inovatif dengan tema spesifik smart city</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-10 text-center">
        <a href=""
            class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
            <span>More Events</span>
            <i class='bx bx-chevron-right text-lg align-middle'></i>
        </a>
    </div>
    {{-- Upcoming events --}}

    {{-- Prestasi Mahasiswa --}}
    <div class="mt-20">
        <div class="text-center ">
            <h1 class="text-4xl md:text-5xl font-bold text-primary">Prestasi Mahasiswa</h1>
            <p class="text-sm md:text-lg text-[#A9A9A9]">Beberapa prestasi mahasiswa</p>
        </div>
        <div class="mt-10">
            <div class="container md:px-36 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/f6/01/cd/f601cd8341821feba8baa244123c8e2a.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Prodi Mahasiswa</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Mahasiswa</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/12/c6/3c/12c63c8ed352f7f61fd45ffcaa970280.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Prodi Mahasiswa</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Mahasiswa</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://i.pinimg.com/564x/38/54/a8/3854a8e825bc816e7d7c2caa2c255460.jpg"
                        alt="Prodi Mahasiswa"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105 h-96 w-full object-cover group-hover:filter-none filter grayscale">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Prodi Mahasiswa</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Mahasiswa</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href=""
                    class="bg-primary text-white px-8 py-2 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary inline-block hover:translate-y-1 transition-all duration-300">
                    <span>Selengkapnya Prestasi Mahasiswa</span>
                    <i class='bx bx-chevron-right text-lg align-middle'></i>
                </a>
            </div>
        </div>
    </div>
    {{-- Prestasi Mahasiswa --}}

    {{-- Campus Life --}}
    <div class="mt-16">
        <h1 class="text-center text-primary text-4xl md:text-5xl font-bold py-10">Campus Life</h1>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="w-full h-auto bg-white">
                    <img src="https://plus.unsplash.com/premium_photo-1661546333305-667b3326bb99?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl">Workshop Leadership Muda</h1>
                    <p class="text-[#A9A9A9] mb-5">Membangun jiwa kepemimpinan sejak dini melalui pelatihan dan
                        simulasi, Melalui pelatihan dan
                        simulasi yang dirancang khusus, kamu akan diajak untuk menggali potensi kepemimpinan yang
                        terpendam dalam diri. </p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto bg-white">
                    <img src="https://plus.unsplash.com/premium_photo-1661690088942-d968065868d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl">Bincang Karir Bersama Alumni Sukses</h1>
                    <p class="text-[#A9A9A9] mb-5">Mengundang alumni yang telah sukses di bidangnya untuk berbagi
                        pengalaman dan tips karier.</p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
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
            <h1 class="py-5 text-4xl md:text-5xl font-bold text-white text-center mb-5">Non Akademik</h1>
            <div class="grid grid-cols-1 mb-5 md:grid-cols-2 gap-8">
                <div class="w-full h-auto">
                    <img src="https://plus.unsplash.com/premium_photo-1710467004560-4e82fe4c80e9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl text-white">Workshop Mindfulnes dan Meditasi</h1>
                    <p class="text-white mb-5">
                        Mengajarkan teknik relaksi dan meningkatkan fokus untuk keseimbangan hidup
                    </p>
                    <a href="" class="text-white inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto ">
                    <img src="https://plus.unsplash.com/premium_photo-1705883064233-e56b05f42b07?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="" class="w-full h-80 object-cover">
                    <h1 class="py-3 font-semibold text-xl text-white">Bootcamp Public Speaking</h1>
                    <p class="text-white mb-5">
                        Pelatihan intensif untuk menguasai keterampilan berbicara di depan umum
                    </p>
                    <a href="" class="text-white inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Non Akademik --}}


</main>
