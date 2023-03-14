<div class="container">
    <d iv class="flex flex-wrap">
        <div class="w-full px-4 mb-10 lg:w-1/2">
            <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
            <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl dark:text-white">Perkenalan</h2>
            <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg text-justify dark:text-slate-200">
                {{ $about->desc }}
            </p>
        </div>
        <div class="w-full px-4 lg:w-1/2">
            <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10 dark:text-white">Mari Berteman</h3>
            <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg dark:text-slate-200">Untuk membangun
                koneksi bersama saya ayo
                berteman dengan follow sosial media saya</p>
            <div class="flex item-center mt-10">
                @foreach ($social as $follow)
                    <a href="{{ $follow->link }}" target="_blank"
                        class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-300 hover:bg-primary hover:text-white dark:text-white">
                        {!! $follow->icon !!}
                    </a>
                @endforeach

            </div>
        </div>
    </d>

</div>
