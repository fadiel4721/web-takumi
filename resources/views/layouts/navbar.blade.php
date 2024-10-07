<nav id="navbar" x-data="{ isOpen: false }"
    class="bg-black bg-opacity-40 text-white fixed w-full z-10 transition-all duration-300 ease-in-out">
    <div class="container py-5 md:py-3 md:border-b-2 border-[#b2e7f8]">
        <div class="flex justify-between items-center">
            <h1 class="text-xl font-semibold">Politeknik Takumi</h1>
            <div class="hidden md:flex gap-6">
                <a href="#" class="relative group"><span class="font-bold">@lang('common.informasi'):</span> @lang('common.mahasiswa') <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">@lang('common.staf&fakultas') <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">@lang('common.orangtua')<span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">@lang('common.pengunjung') <span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
                <a href="#" class="relative group">@lang('common.alumni')<span
                        class="absolute -top-4 left-1/2 w-0 h-[5px] rounded-b-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span></a>
            </div>
            <!-- Search Button -->
            <a href="javascript:void(0)" id="search-btn" class="hidden md:flex items-center gap-2">
                <i class='bx bx-search'></i> @lang('common.search')
            </a>
            <!-- Modal (hidden by default) -->
            <div id="search-modal"
                class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50 hidden ">
                <div class=" p-6 rounded-lg w-[500px]">
                    <div class="flex justify-center items-center mb-4">
                        <h2 class="text-xl font-bold">@lang('common.search') Takumi: </h2>
                        <button id="close-modal" class="hidden text-gray-600 hover:text-gray-900">
                            <i class='bx bx-x text-2xl'></i>
                        </button>
                    </div>
                    <input type="text" name="search" id="search-input" placeholder="@lang('common.hackathon24')"
                    class="w-full p-2 rounded-lg">
                    <div class="flex justify-center items-center mt-4">
                        <h2 class="text-xl font-bold">@lang('common.hackathon22') <a href="https://maps.app.goo.gl/YoeetP6uq4ftJxRE9" target="_blank" class="underline font-medium">@lang('common.hackathon23')</a></h2>
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

    <div class="md:py-3">
        <nav class="hidden md:flex justify-center">
            <ul id="navbar" class="flex justify-center gap-10">
                <li><a href="" class="relative group">@lang('common.news')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.event')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.akademik')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.penelitian')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.campuslife')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.pendaftaran')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                <li><a href="" class="relative group">@lang('common.profile')
                        <span
                            class="absolute -bottom-[14px] left-1/2 w-0 h-[5px] rounded-t-lg bg-white transition-all duration-300 group-hover:w-full group-hover:left-0"></span>
                    </a></li>
                    <li>
                        <div class="relative inline-block text-left">
                            <form class="d-flex">
                                <select class="form-select changeLang bg-gray-200 text-gray-800 border border-black rounded">
                                    <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                    <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Bahasa Indonesia</option>
                                    <option value="ja" {{ session()->get('locale') == 'ja' ? 'selected' : '' }}>日本語</option>
                                </select>
                            </form>
                        </div>
                        
                </li>
                </ul>
            </nav>
        </div>

    <!-- Navbar Mobile -->
    <div x-show="isOpen" class="md:hidden bg-white text-black text-lg">
        <div class="grid grid-cols-2">
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.news')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.event')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.akademik')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.penelitian')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.campuslife')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.pendaftaran')</a></div>
            <div class="flex justify-center items-center p-5 border-b"><a href="#">@lang('common.profile')</a></div>
        </div>
        <div class="w-full pt-4">
            <h1 class="font-bold text-lg text-center">@lang('common.informasi'):</h1>
            <div class="flex justify-center">
                <ul class="flex items-center py-5">
                    <li class="mx-2"><a href="#" class="text-sm">@lang('common.mahasiswa')</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">@lang('common.staf&fakultas')</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">@lang('common.orangtua')</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">@lang('common.pengunjung')</a></li>
                    <li class="mx-2"><a href="#" class="text-sm">@lang('common.alumni')</a></li>
        
                </ul>
            </div>
        </div>
    </div>
    <!-- Navbar Mobile -->
</nav>

<script>
    $('.changeLang').change(function(){
        var url = "{{route('changeLang')}}";
        window.location.href = url  + "?lang=" + $(this).val();
    });
</script>
