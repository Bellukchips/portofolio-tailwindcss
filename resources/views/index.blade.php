<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belluk Studio</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body>
    <header class="bg-transparent fixed top-0 left-0 w-full flex items-center z-10">
        @include('components.header')
    </header>
    <section id="home" class="pt-36 dark:bg-dark">
        @include('components.home')
    </section>
    <section id="about" class="pt-36 pb-32 dark:bg-dark">
        @include('components.about')
    </section>
    <section id="portofolio" class="pt-36 pb-16 bg-slate-100 dark:bg-dark">
        @include('components.portofolio')
    </section>
    <section id="poweredby" class="pt-36 pb-32 bg-slate-700 dark:bg-dark">
        @include('components.poweredby')
    </section>
    <section id="skill" class="pt-36 pb-32 bg-slate-100 dark:bg-dark">
        @include('components.skill')
    </section>
    <section id="contact" class="pt-36 pb-32 dark:bg-dark">
        @include('components.contact')
    </section>
    <footer class="bg-dark pt-24 pb-12">
        @include('components.footer')
    </footer>

    {{-- back top --}}
    <a href="#home" id="toTop"
        class="fixed
         justify-center items-center bottom-4 right-4 z-[9999]
         h-14 w-14 rounded-full bg-primary p-4 hover:animate-pulse hidden">
        <span class="block h-5 w-5 rotate-45 border-t-2 border-l-2 mt-2"></span>
    </a>
    <script>
        //hamburger
        const hamburger = document.querySelector("#hamburger");
        const navMenu = document.querySelector('#nav-menu');
        const toTop = document.querySelector('#toTop');

        hamburger?.addEventListener("click", function() {
            hamburger.classList.toggle("hamburger-active");
            navMenu.classList.toggle('hidden');
        });
        // klik out area hamburger
        // window.addEventListener('click', function(e) {
        //     if (e.target != hamburger && e.target != navMenu) {
        //         hamburger.classList.remove("hamburger-active");
        //         navMenu.classList.add('hidden');
        //     }
        // });
        // navbar fixed
        window.onscroll = function() {
            const header = document.querySelector('header');
            const fixNav = header.offsetTop;
            if (window.pageYOffset > fixNav) {
                header.classList.add('navbar-fixed');
                toTop.classList.remove('hidden');
                toTop.classList.add('flex');
            } else {
                header.classList.remove('navbar-fixed');
                toTop.classList.remove('flex');
                toTop.classList.add('hidden');
            }
        }

        /// dark mode toggle
        const darkToggle = document.querySelector('#dark-toggle');
        const html = document.querySelector('html');

        darkToggle.addEventListener('click', function() {
            darkToggle.checked ? html.classList.add('dark') : html.classList.remove('dark');
            darkToggle.checked ? localStorage.theme = 'dark' : localStorage.theme = 'light';
        });

        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            darkToggle.checked = true;
        } else {
            darkToggle.checked = false;
        }
    </script>
</body>

</html>
