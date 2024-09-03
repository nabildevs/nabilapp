<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }} &mdash; {{ env('APP_NAME') }}</title>

    {{-- Font Styles --}}
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Commissioner:wght@400;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')
</head>

<body class="font-comm">

    {{-- Header Section --}}
    <header class="font-code bg-white absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a class="font-semibold text-secondary text-xl block py-2">nabilapp</a>
                </div>
                <div class="flex items-center px-4">
                    <button type="button" id="hamburger" name="hamburger"
                        class="block md:hidden lg:hidden absolute right-4">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="head-menu"
                        class="hidden md:block md:static md:max-w-full md:shadow-none md:rounded-none lg:block lg:static lg:mas-w-full lg:shadow-none lg:rounded-none absolute py-2 bg-white shadow-lg rounded-md max-w-[150px] w-full right-4 top-full">
                        <ul class="block md:flex lg:flex">
                            <li class="group"><a href="#home"
                                    class="text-base font-medium text-secondary py-2 mx-8 md:mx-3 lg:mx-5 flex group-hover:font-semibold group-hover:text-primary">Home</a>
                            </li>
                            <li class="group"><a href="#about"
                                    class="text-base font-medium text-secondary py-2 mx-8 md:mx-3 lg:mx-5 flex group-hover:font-semibold group-hover:text-primary">About</a>
                            </li>
                            <li class="group"><a href="#projects"
                                    class="text-base font-medium text-secondary py-2 mx-8 md:mx-3 lg:mx-5 flex group-hover:font-semibold group-hover:text-primary">Projects</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    {{-- Hero Section --}}
    <section id="home" class="pt-36 border border-b-semilight">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="w-full md:w-1/2 lg:w-1/2 self-center px-4">
                    <h1 class="text-5xl lg:text-6xl font-black text-primary mb-4">Full-stack<br>web
                        developer
                        <h2 class="text-lg lg:text-2xl font-medium text-secondary mb-6">Hi👋🏻 always enjoys crafting
                            impactful and visually captivating websites
                        </h2>
                    </h1>
                </div>
                <div class="w-full md:w-1/2 lg:w-1/2 self-right px-4">
                    <div class="relative">
                        <img src="{{ asset('img/home/hero.png') }}" alt="Hero Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    <section id="about" class="bg-light pt-12 pb-12">
        <div class="container">
            <div class="w-full px-4 mb-10">
                <p class="text-base lg:text-xl text-primary mb-5">I'm a full-stack web developer who has been helping my
                    clients create the websites they need for over a year. I'm always eager to learn and explore new
                    ways to make the web more exciting!</p>
                <a href=""
                    class="px-3.5 py-2 bg-primary hover:opacity-90 text-white font-semibold rounded-md transition duration-300 ease-in-out">About
                    me</a>
            </div>
        </div>
    </section>

    <script src="{{ asset('js/script-home-2.js') }}"></script>
</body>

</html>
