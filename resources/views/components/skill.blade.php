<div class="container">
    <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-16">
            <h4 class="font-semibold text-lg text-primary mb-2">Keahlian</h4>
            <h2 class="font-bold text-dark text-3xl mb-4 dark:text-white">###</h2>
            <p class="font-medium text-md text-slate-500 dark:text-slate-300">Lorem ipsum dolor sit amet consectetur,
                adipisicing elit.
                Inventore soluta nam molestiae adipisci,
                quaerat odit.</p>
        </div>
        <div class="flex flex-wrap">
            @foreach ($skill as $mySkill)
                <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                    <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10 dark:bg-dark dark:shadow-slate-600">
                        <img src="{{ $mySkill->photo }}" alt="{{ $mySkill->name }}"
                            class="object-contain w-full h-[300px] py-2 px-5">
                        <div class="py-8 px-6">
                            <h3><a href=""
                                    class="block mb-3 font-semibold text-xl hover:text-primary truncate dark:text-white">
                                    {{ $mySkill->name }}</a></h3>
                            <p class="font-medium text-slate-500 mb-4 dark:text-slate-300">{{ $mySkill->level }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
