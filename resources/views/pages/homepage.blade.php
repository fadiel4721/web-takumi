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
            <div class="py-5 flex">
                <span class="w-[15px] h-auto bg-white rounded-r-lg"></span>
                <div class="flex gap-4">
                    <h1 class="text-4xl font-bold  ml-5">@lang('common.visi')</h1>
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                </div>
            </div>
            <p class="w-full md:w-2/3 text-lg">
                @lang('common.menjadipusatunggulandalammenghasilkankelulusanvokasiyanginovatifkreatifdansiapberkontribusidalampengembanganindustrimelaluipenerapanproductbasedlearningbydoing')
            </p>
        </div>
        <div class="container py-5">
            <div class="py-5 flex justify-end">
                <div class="flex gap-4">
                    <img src="{{ asset('assets/tangan-ok.png') }}" width="40" alt="">
                    <h1 class="text-4xl font-bold mr-5">@lang('common.misi')</h1>
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
            <a href="#" class="px-8 py-3 outline outline-white rounded-2xl font-semibold    ">Tentang Politeknik
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

        <div class="container flex gap-10 mt-10">
            <div
                class="relative w-[60%] h-[300px]  flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1517048676732-d65bc937f952?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-2xl font-bold text-white">Student Affairs</h1>
                    <p class="text-white">Tim Robotika Politeknik Takumi Borong Juara di Kompetisi Nasional</p>
                </div>
            </div>
            <div
                class="relative w-[40%] h-[300px] flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1551836022-8b2858c9c69b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-2xl font-bold text-white">Cooporation</h1>
                    <p class="text-white">Politeknik Takumi Jalin Kerjasama dengan Perusahaan Jepang untuk Pengembangan
                        Kurikulum</p>
                </div>
            </div>
        </div>

        <div class="container flex gap-10 mt-10">
            <div
                class="relative w-[40%] h-[300px] flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://plus.unsplash.com/premium_photo-1661761077411-d50cba031848?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-2xl font-bold text-white">Research</h1>
                    <p class="text-white">Peneliti Takumi Temukan Inovasi Baru dalam Bidang Energi Terbarukan</p>
                </div>
            </div>
            <div
                class="relative w-[60%] h-[300px]  flex justify-center items-center rounded-lg shadow-md hover:scale-105 transition-transform duration-300">
                <img src="https://images.unsplash.com/photo-1638037099058-4674316b9bc4?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                    class="w-full h-full object-cover rounded-lg">
                <div class="absolute left-0 bottom-0 bg-black p-5 w-full rounded-b-lg bg-opacity-40">
                    <h1 class="text-2xl font-bold text-white">Campus life</h1>
                    <p class="text-white">Politeknik Takumi Gelar Dies Natalis ke- 3 dengan Berbagai Kegiatan Menarik
                    </p>
                </div>
            </div>
        </div>
        <div class="text-center py-10">
            <a href="" class="px-8 py-3 outline bg-primary text-white rounded-2xl font-semibold">Selengkapnya
                Takumi News</a>
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
                <div
                    class="w-full h-[400px] bg-white rounded-lg p-5 relative overflow-hidden flex flex-col justify-between">
                    <div class="">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-primary text-xl">Teknologi Informasi</h1>
                            <a href="#">
                                <img src="{{ asset('assets/ButtonFlip.svg') }}" alt="">
                            </a>
                        </div>
                        <p class="text-primary">Politeknik Takumi</p>
                    </div>
                    <div class="absolute -bottom-10 -right-10">
                        <img src="{{ asset('assets/TI.svg') }}" class="-rotate-[30deg]">
                    </div>
                </div>

                <!-- Card 2 -->
                <div
                    class="w-full h-[400px] bg-white rounded-lg p-5 relative overflow-hidden flex flex-col justify-between">
                    <div class="">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-primary text-xl">Mekatronika</h1>
                            <a href="#">
                                <img src="{{ asset('assets/ButtonFlip.svg') }}" alt="">
                            </a>
                        </div>
                        <p class="text-primary">Politeknik Takumi</p>
                    </div>
                    <div class="absolute -bottom-10 -right-10">
                        <img src="{{ asset('assets/Mekatronika.svg') }}" class="-rotate-[10deg]">
                    </div>
                </div>

                <!-- Card 3 -->
                <div
                    class="w-full h-[400px] bg-white rounded-lg p-5 relative overflow-hidden flex flex-col justify-between">
                    <div class="">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-primary text-xl">Bisnis Digital</h1>
                            <a href="#">
                                <img src="{{ asset('assets/ButtonFlip.svg') }}" alt="">
                            </a>
                        </div>
                        <p class="text-primary">Politeknik Takumi</p>
                    </div>
                    <div class="absolute -bottom-10 -right-10">
                        <img src="{{ asset('assets/Bisnis-Digital.svg') }}" class="-rotate-[30deg]">
                    </div>
                </div>

                <!-- Card 4 -->
                <div
                    class="w-full h-[400px] bg-white rounded-lg p-5 relative overflow-hidden flex flex-col justify-between">
                    <div class="">
                        <div class="flex justify-between items-center">
                            <h1 class="font-semibold text-primary text-xl">Bahasa Jepang</h1>
                            <a href="#">
                                <img src="{{ asset('assets/ButtonFlip.svg') }}" alt="">
                            </a>
                        </div>
                        <p class="text-primary">Politeknik Takumi</p>
                    </div>
                    <div class="absolute -bottom-20 -right-14">
                        <img src="{{ asset('assets/Bahasa-Jepang.svg') }}" class="">
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
            <div class="flex gap-6 w-[1000px] mx-auto h-96">
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
            <div class="text-center mt-36">
                <a href="#"
                    class="px-8 py-3 outline bg-primary text-white rounded-2xl font-semibold">Selengkapnya</a>
            </div>
        </div>
    </div>
    {{-- Staff & Lecturer --}}
</main>
