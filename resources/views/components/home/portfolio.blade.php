<!-- ====== Portfolio Section Start -->

<section x-data="{
    selectedTab: 'all',
    activeClasses: 'bg-primary text-white',
    inactiveClasses: 'text-body-color hover:bg-primary hover:text-white',
}" class="pt-20 lg:pt-[120px] lg:pb-[90px]" id="portfolio">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[510px]">
                    <h2
                        class="
            font-bold
            text-3xl
            sm:text-4xl
            md:text-[40px]
            text-gray
            mb-10
          ">
                        My Recent Projects
                    </h2>
                    <p class="text-base text-body-color">
                        I learn more by building projects.
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <ul class="flex flex-wrap justify-center mb-12 space-x-1">
                    <li class="mb-1">
                        <button @click="selectedTab = 'all' "
                            :class="selectedTab == 'all' ? activeClasses : inactiveClasses "
                            class="
              inline-block
              py-1
              md:py-2
              px-5
              lg:px-8
              rounded-lg
              text-base
              font-semibold
              text-center
              transition
            ">
                            All Projects
                        </button>
                    </li>
                    @foreach ($tabs as $tab)
                        <button
                            @click="selectedTab ='{{ $tab }}'"
                            :class="selectedTab=='{{ $tab }}' ? activeClasses : inactiveClasses"
                            class="inline-block
                            py-1
                            md:py-2
                            px-5
                            lg:px-8
                            rounded-lg
                            text-base
                            font-semibold
                            text-center
                            transition"
                        >
                            {{ $tab }}
                        </button>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            @foreach ($items as $item)
                <x-portfolio-item
                    :title="$item['title']"
                    :categories="$item['category']"
                    :image="$item['image']"
                    :github="$item['github']"
                ></x-portfolio-item>
            @endforeach
        </div>
    </div>
</section>
<!-- ====== Portfolio Section End -->
