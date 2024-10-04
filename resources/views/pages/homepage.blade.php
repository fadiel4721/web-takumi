<main>

    {{-- Main --}}
    <div class="bg-gray-500 h-auto"
        style="background-image: url('{{ asset('images/mahasiswa2.png') }}'); background-size: cover; background-repeat: no-repeat; width: auto">
        <div class="flex justify-center items-center h-screen">
            <img src="{{ asset('images/logo-takumi.png') }}" width="500">
        </div>
        <div class="w-full bg-black bg-opacity-40 py-5 text-white">
            <div class="container md:flex justify-between items-center gap-32">
                <p class="w-1[60%]">@lang('common.politekniktakumimendorongmahasiswautukterusmengembangkandiridanberkompetisiditingkatnasionalmaupuninternasionaldenganfasilitasmoderndanpengajaryangberkualitaskamisipamencetaklulusanyangsiapmenghadapitantanganglobaljadilahbagian darikeluargabesartakumidanraihprestasigemilang')
                </p>
                <div class="py-5">
                    <a href="" class="flex items-center gap-2 px-6 py-2 bg-primary rounded-xl"><i
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
                    <h1 class="text-4xl font-bold  ml-5">Visi</h1>
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                </div>
            </div>
            <p class="w-full md:w-2/3 text-lg">
                Menjadi pusat unggulan dalam menghasilkan lulusan vokasi yang inovatif, kreatif, dan siap berkontribusi
                dalam pengembangan industri melalui penerapan product based learning by doing.
            </p>
        </div>
        <div class="container py-5">
            <div class="py-5 flex justify-end relative">
                <div class="absolute left-0 top-0">
                    <img src="{{ asset('assets/serpihan.svg') }}" width="150" alt="">
                </div>
                <div class="flex gap-4">
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                    <h1 class="text-4xl font-bold mr-5">Visi</h1>
                </div>
                <span class="w-[15px] h-auto bg-white rounded-l-lg"></span>
            </div>
            <div class="flex justify-end">
                <p class="w-full md:w-2/3 text-lg ">
                   @lang('common.menjadipusatunggulandalammenghasilkankelulusanvokasiyanginovatifkreatifdansiapberkontribusidalampengembanganindustrimelaluipenerapanproductbasedlearningbydoing')
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
            <h1 class="text-4xl font-bold text-primary">Takumi News</h1>
            <p class="text-lg text-[#A9A9A9]">Berita seputar kampus Politeknik Takumi</p>
        </div>

        <div class="container grid grid-cols-1 md:grid-cols-5 gap-5 md:gap-10 mt-10">

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
                class="px-8 py-3 outline bg-primary text-white rounded-3xl text-sm hover:outline-primary hover:bg-transparent hover:text-primary transition-all duration-300">Selengkapnya
                Takumi News
            </a>
        </div>

    </div>
    </div>
    {{-- Takumi News --}}

    {{-- Akademik --}}
    <div class="mt-10 w-full h-auto bg-primary">
        <div class="text-center ">
            <div class="py-5">
                <h1 class="text-4xl font-bold text-white">Akademik</h1>
                <p class="text-lg text-white">4 Program studi mengejar passion career anda</p>
            </div>
        </div>
        <div class="container py-5">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                <!-- Card 1 -->
                <!-- Card 1: Teknologi Informasi -->
                <div class="flip-card w-full h-[400px]">
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
                                <p class="text-[#A9A9A9]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Debitis voluptatum ex fugit distinctio consectetur assumenda.</p>
                            </div>
                            <img src="{{ asset('assets/TI.svg') }}" alt="Teknologi Informasi"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 2: Mekatronika -->
                <div class="flip-card w-full h-[400px]">
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
                                <p class="text-[#A9A9A9]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Debitis voluptatum ex fugit distinctio consectetur assumenda.</p>
                            </div>
                            <img src="{{ asset('assets/Mekatronika.svg') }}" alt="Mekatronika"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 3: Bisnis Digital -->
                <div class="flip-card w-full h-[400px]">
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
                                <p class="text-[#A9A9A9]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Debitis voluptatum ex fugit distinctio consectetur assumenda.</p>
                            </div>
                            <img src="{{ asset('assets/Bisnis-Digital.svg') }}" alt="Bisnis Digital"
                                class="absolute -bottom-16 -right-16 -z-10 -rotate-[30deg] opacity-40">
                        </div>
                    </div>
                </div>

                <!-- Card 4: Bahasa Jepang -->
                <div class="flip-card w-full h-[400px]">
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
                                <p class="text-[#A9A9A9]">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Debitis voluptatum ex fugit distinctio consectetur assumenda.</p>
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
    <div class="container mt-10">
        <div class="text-center">
            <h1 class="text-4xl font-bold text-primary">Staff & Lecturer</h1>
            <p class="text-lg text-[#A9A9A9]">Profil of the month</p>
        </div>
        <div class="mt-10">
            <div class="container px-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="#"
                    class="px-8 py-3 outline bg-primary text-white rounded-3xl text-sm hover:outline-primary hover:bg-transparent hover:text-primary transition-all duration-300">Selengkapnya
                    Staff &
                    Lecturer</a>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}

    {{-- Penelitian --}}
    <div class="mt-20">
        <div class="text-center mb-5">
            <h1 class="text-4xl font-bold text-primary">Penelitian</h1>
            <p class="text-lg text-[#A9A9A9]">Berita seputar kampus Politeknik Takumi</p>
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
                <a href="#"
                    class="px-8 py-3 outline bg-primary text-white rounded-3xl text-sm hover:outline-primary hover:bg-transparent hover:text-primary transition-all duration-300">Selengkapnya
                    Penelitian</a>
            </div>
        </div>
    </div>
    {{-- Penelitian --}}

    {{-- Upcoming events --}}
    <div class="mt-16 py-10 bg-primary w-full">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold text-white">Upcoming Events</h1>
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
            class="bg-primary text-white px-8 py-3 rounded-3xl text-sm hover:outline hover:outline-primary hover:bg-transparent hover:text-primary transition-all duration-300">More
            Events</a>
    </div>
    {{-- Upcoming events --}}

    {{-- Prestasi Mahasiswa --}}
    <div class="mt-20">
        <div class="text-center ">
            <h1 class="text-3xl font-bold text-primary">Prestasi Mahasiswa</h1>
            <p class="text-[#A9A9A9]">Beberapa prestasi mahasiswa</p>
        </div>
        <div class="mt-10">
            <div class="container px-10 grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
                <div class="group relative">
                    <img src="https://images.unsplash.com/photo-1726756882806-cad5dcac46f2?q=80&w=1965&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="Dosen Prodi Teknologi Informasi"
                        class="rounded-xl cursor-pointer transition-transform duration-300 group-hover:translate-x-0 group-hover:translate-y-2 group-hover:scale-105">
                    <div class="text-center mt-8 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <p class="text-primary">Dosen Prodi Teknologi Informasi</p>
                        <h1 class="text-xl font-semibold text-primary">Nama Dosen</h1>
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <a href="#"
                    class="px-8 py-3 outline bg-primary text-white rounded-3xl text-sm hover:outline-primary hover:bg-transparent hover:text-primary transition-all duration-300">Selengkapnya
                    Prestasi Mahasiswa</a>
            </div>
        </div>
    </div>
    {{-- Prestasi Mahasiswa --}}

    {{-- Campus Life --}}
    <div class="mt-16">
        <h1 class="text-center text-primary text-5xl font-bold py-10">Campus Life</h1>
        <div class="container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="w-full h-auto bg-white">
                    <img src="https://plus.unsplash.com/premium_photo-1661546333305-667b3326bb99?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
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
                        alt="">
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
            <h1 class="py-5 text-5xl font-bold text-white text-center mb-5">Non Akademik</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="w-full h-auto">
                    <img src="https://plus.unsplash.com/premium_photo-1661546333305-667b3326bb99?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <h1 class="py-3 font-semibold text-xl text-white">Workshop Mindfulnes dan Meditasi</h1>
                    <p class="text-white mb-5">
                        Mengajarkan teknik relaksi dan meningkatkan fokus untuk keseimbangan hidup
                    </p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
                <div class="w-full h-auto ">
                    <img src="https://plus.unsplash.com/premium_photo-1661690088942-d968065868d0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt="">
                    <h1 class="py-3 font-semibold text-xl text-white">Bootcamp Public Speaking</h1>
                    <p class="text-white mb-5">
                        Pelatihan intensif untuk menguasai keterampilan berbicara di depan umum
                    </p>
                    <a href=""
                        class="text-primary inline-block hover:translate-x-1 transition-all duration-700">
                        <span>Selengkapnya</span>
                        <i class='bx bx-chevron-right text-lg align-middle'></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Non Akademik --}}


</main>
