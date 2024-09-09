<x-porto.layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    {{-- Hero Section --}}
    <section id="home" class="pt-28 border border-b-semilight">
        <div class="container">
            <div class="flex flex-wrap mb-4">
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
    <section id="about" class="bg-light pt-12 pb-12 border border-b-semilight">
        <div class="container">
            <div class="w-full px-4 mb-4">
                <p class="text-base lg:text-xl text-primary mb-5">I'm a full-stack web developer who has been helping my
                    clients create the websites they need for over a year. I'm always eager to learn and explore new
                    ways to make the web more exciting!</p>
                <a href=""
                    class="px-3.5 py-2 bg-primary hover:opacity-90 text-white font-semibold rounded-md transition duration-300 ease-in-out">About
                    me</a>
            </div>
        </div>
    </section>

    {{-- Project Section --}}
    <section id="project" class="pt-12 pb-12">
        <div class="container">
            <div class="w-full text-center mb-10 px-4">
                <h1 class="text-2xl md:text-3xl lg:text-3xl text-primary font-semibold mb-4">Featured Projects</h1>
            </div>
            <div class="w-full px-4 grid grid-cols-1 lg:grid-cols-3 gap-4 justify-center mb-10">
                <div class="rounded-md border border-s-semilight shadow-sm overflow-hidden group">
                    <div class="relative">
                        <img src="{{ asset('img/home/projects/Project_1.png') }}" alt="Cerita Cerdas" class="w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-white to-transparent opacity-75 group-hover:opacity-0 transition-opacity duration-300 ease-in-out">
                        </div>
                    </div>
                    <h2 class="text-xl text-primary font-semibold px-4 my-3">
                        Cerita Cerdas
                    </h2>
                    <p class="text-sm text-secondary font-medium px-4 mb-5 text-justify">
                        A freelance project that creates a website for Cerita Cerdas in the form of a blog to publish
                        their articles and behind it there is also a CMS application.
                    </p>
                    <div class="w-full px-4 flex flex-col justify-start mb-5 space-y-2">
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    PHP, Javascript
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Language
                                </p>
                            </div>
                        </div>
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    Bootstrap, CodeIgniter
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Stacks
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-md border border-s-semilight shadow-sm overflow-hidden group">
                    <div class="relative">
                        <img src="{{ asset('img/home/projects/Project_2.png') }}" alt="SIMPAN UMKM" class="w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-white to-transparent opacity-75 group-hover:opacity-0 transition-opacity duration-300 ease-in-out">
                        </div>
                    </div>
                    <h2 class="text-xl text-primary font-semibold px-4 my-3">
                        SIMPAN UMKM
                    </h2>
                    <p class="text-sm text-secondary font-medium px-4 mb-5 text-justify">
                        The project was done to assist DISKUMINDAG of Sukabumi City in digitizing the MSME data
                        collection system in Sukabumi city.
                    </p>
                    <div class="w-full px-4 flex flex-col justify-start mb-5 space-y-2">
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    PHP
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Language
                                </p>
                            </div>
                        </div>
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    Bootstrap, Laravel
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Stacks
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rounded-md border border-s-semilight shadow-sm overflow-hidden group">
                    <div class="relative">
                        <img src="{{ asset('img/home/projects/Project_3.png') }}" alt="VisCOK" class="w-full" />
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-white to-transparent opacity-75 group-hover:opacity-0 transition-opacity duration-300 ease-in-out">
                        </div>
                    </div>
                    <h2 class="text-xl text-primary font-semibold px-4 my-3">
                        VisCOK
                    </h2>
                    <p class="text-sm text-secondary font-medium px-4 mb-5 text-justify">
                        Verifikasi Cocok & Ok &mdash; Monthly budget expenditure management system and receipt approval
                        in Sukabumi City Government.
                    </p>
                    <div class="w-full px-4 flex flex-col justify-start mb-5 space-y-2">
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    PHP
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Language
                                </p>
                            </div>
                        </div>
                        <div class="w-full max-w-full rounded-md border border-s-semilight p-2 text-left">
                            <div class="flex justify-between">
                                <p class="text-xs text-primary font-semibold mb-0">
                                    Bootstrap, CodeIgniter
                                </p>
                                <p class="font-code text-xs text-secondary">
                                    Stacks
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex items-center justify-between relative">
                <div class="text-sm md:text-base text-secondary/75 font-semibold px-4 whitespace-nowrap">
                    Also check out other projects
                </div>
                <div class="flex-grow border-b border-semilight"></div>
                <a href="#!"
                    class="text-sm md:text-base text-secondary/75 hover:text-primary transition duration-300 ease-in-out font-semibold px-4 whitespace-nowrap">
                    Here
                </a>
            </div>
        </div>
    </section>

</x-porto.layout>
