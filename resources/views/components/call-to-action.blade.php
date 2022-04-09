{{-- call to action section start --}}

<section>
    <div class="bg-primary dark:bg-sky-800 roudend overflow-hidden py-12 px-8 md:p-[70px] z-10">
        <div class="container mx-auto">
            <div class="flex flex-wrap items-center -m-4">
                <div class="w-full lg:w-1/2 px-4">
                    {{ $title }}
                </div>
                <div class="w-full lg:w-1/2 px-4">
                    <div class="flex flex-wrap lg:justify-end">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- call to action section end --}}
