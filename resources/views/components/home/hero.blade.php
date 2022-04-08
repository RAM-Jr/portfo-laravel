<div class="pt-[60px] lg:pt-[80px] pb-[110px] bg-white dark:bg-slate-700">

    <div class="container">
        <div class="flex flex-wrap mx-4">
            <div class="w-full lg:w-5/12 px-4">

                <div class="hero-content">
                    <h1 class="text-dark dark:text-gray-200 font-bold text-4xl sm:text-[42px] lg:text-[48px] xl:text-[42px] leading-snug mb-6">
                        Hello, my name is Rui.
                    </h1>

                    <p class="text-base mb-8 max-w-[520px]">I am a Computer Science student at Eduardo Mondlane University.</p>

                    <ul class="flex flex-wrap items-center">
                        <li>
                            <x-button-link href="#portifolio" variant="primary" class="rounded-lg">
                                My Projects
                            </x-button-link>
                        </li>
                    </ul>

                    {{-- Icons of some of my clients --}}

                </div>
            </div>

            <div class="hidden lg:block lg:w-1/12 px-4">

            </div>

            <div class="w-full lg:w-6/12 px-4">
                <div class="lg:text-right lg:ml-auto">
                    <div class="inline-block z-10 pt-11 lg:pt-0">
                        <img src="{{ url('/img/hero.jpg') }}" alt="hero" class="max-w-full lg:ml-auto">
                    </div>

                    {{--

                        <span class="absolute -left-8 -bottom-8 z-[-1]">
                            add the svg
                        </span>

                    --}}
                </div>
            </div>

        </div>
    </div>

</div>
