<div class="container">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Portofolio</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">Projek Terbaru</h2>
            <p class="font-medium text-md text-slate-500 dark:text-slate-300">Kumpulan program aplikasi yang pernah
                dibuat.</p>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            @foreach ($project as $porto)
                <div class="mb-12 p-4 md:w-1/2 xl:1/3">
                    <div class="rounded-md shadow-md overflow-hidden">
                        <img src="{{ $porto->photo }}" alt="" width="w-full"
                            class="h-[500px] w-full object-cover">
                        <div class="py-8 px-6">
                            <h3
                                class="font-semibold text-dark text-xl mt-5 mb-3 px-3 hover:text-primary dark:text-white">
                                {{ $porto->name }}
                            </h3>
                            <p class="font-medium text-base text-slate-500 px-3 py-5 text-justify dark:text-slate-300">
                                {{ $porto->desc }}
                            </p>
                            <a href="{{ $porto->link }}"
                                class="font-medium text-sm mb-6 text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Kunjungi
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
