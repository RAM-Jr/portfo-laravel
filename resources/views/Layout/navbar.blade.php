<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-10 bg-sky-500 w-full flex items-center shadow-md dark:bg-slate-800 h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="w-60 max-w-full pr-4">
                <a href="/" class="w-full flex items-center py-2">

                    <!-- logo for dark mode -->
                    <img
                        src="{{ url('/img/logo-light.png') }}"
                        alt="logo"
                        class="dark:inline-block w-[48px] lg:w-[64px] hidden"
                    >

                    <!-- logo for light mode -->
                    <img
                        src="{{ url('/img/logo.png') }}"
                        alt="logo"
                        class="dark:hidden w-[48px] lg:w-[64px] inline-block"
                    >

                    <span class="text-xl xl:text-2xl font-bold text-[#1e293b] dark:text-[#94a3b8]">RAMjr</span>


                </a>
            </div>

            <div class="flex px-4 items-center justify-end w-full">
                <div>
                    <x-layout.navbar-menubutton @click="navbarOpen= !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-menubutton>

                    <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-full py-5 px-6 z-50 shadow rounded-lg w-full dark:text-gray-300 lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">

                        <ul class="block lg:flex lg:items-center">
                            @foreach ($navigationItems as $item)
                                <x-layout.navbar-item :href="$item['href']">
                                    {{ $item['label'] }}
                                </x-layout.navbar-item>
                            @endforeach

                            {{-- Add a button *follow me* for linkedin --}}
                        </ul>

                    </nav>
                </div>
            </div>

        </div>
    </div>

</header>
