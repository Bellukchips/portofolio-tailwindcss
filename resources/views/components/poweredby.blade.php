<div class="container">
    <div class="w-full px-4">
        <div class="mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Powered By</h4>
            <h3 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Web Ini Di Bangun Dengan Tools</h3>
        </div>
    </div>
    <div class="w-full px-4">
        <div class="flex flex-wrap items-center justify-center">
            @foreach ($powerBy as $powered)
                <a href="#"
                    class="max-w-[120px] mx-4 py-4 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 duration-100 lg:mx-6 md:mx-8">
                    <img src="{{ $powered->photo }}" alt="{{ $powered->name }}">
                </a>
            @endforeach

        </div>
    </div>
</div>
