@extends('layouts.app')

@section('content')

<section class="relative min-h-[calc(100vh-81px)] overflow-hidden bg-[#FAF9F6] text-[#20263A]">
<div class="mx-auto flex min-h-[calc(100vh-81px)] max-w-7xl items-start px-6 py-10 lg:px-8">

<div class="grid w-full items-start gap-12 pt-8 lg:grid-cols-[1.1fr_0.9fr] lg:gap-8 lg:pt-4">

            <!-- Left -->
            <div class="relative z-10">

                
<!-- Portfolio Label -->
<p class="text-xs font-medium uppercase tracking-[0.25em] text-[#3155D8]">
    Research & Technical Portfolio
</p>

<!-- Main Name -->
<h1 class="mt-5 text-[15vw] font-semibold leading-[0.82] tracking-[-0.07em] text-[#20263A] sm:text-[11vw] lg:text-[8rem]">
    REA
</h1>

<!-- Introduction -->
<h2 class="mt-5 max-w-xl text-2xl font-medium leading-tight tracking-tight sm:text-3xl">
    Hello, I'm Nelli Reanda Sari Sinaga.
    <span class="font-serif italic text-[#3155D8]">
        Informatics Engineering Student.
    </span>
</h2>

<!-- Short Description -->
<p class="mt-6 max-w-lg text-sm leading-7 text-[#20263A]/60">
    Final-year undergraduate student in Informatics Engineering at Universitas Palangka Raya, Indonesia. Exploring the intersection of Technology, Engineering, and Management through Natural Language Processing (NLP), data analytics, and enterprise information systems.
</p>


                <div class="mt-8">

<div class="flex items-center gap-6">
    <a href="/projects"
       class="inline-flex items-center gap-4 rounded-full bg-[#3155D8] px-6 py-3 text-sm font-medium text-[#FAF9F6] transition hover:bg-[#8C3040]">
        Explore my portfolio
        <span>→</span>
    </a>

    <a href="/about"
       class="text-sm text-[#20263A]/60 transition hover:text-[#FAF9F6]">
        More about me
    </a>
</div>


<div class="mt-6 flex items-center gap-5">

    <!-- LinkedIn -->
    <a href="https://www.linkedin.com/in/reanda-sinaga-5512162a4/"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="LinkedIn"
       class="text-[#20263A]/55 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:text-[#0A66C2]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M6.5 8.3H3.2V21h3.3V8.3ZM4.8 3A2 2 0 1 0 4.8 7a2 2 0 0 0 0-4ZM21 13.7c0-3.8-2-5.6-4.8-5.6-2.2 0-3.2 1.2-3.8 2v-1.8H9.1V21h3.3v-6.3c0-1.7.3-3.3 2.4-3.3 2.1 0 2.1 1.9 2.1 3.4V21H21v-7.3Z"></path>
        </svg>
    </a>

    <!-- Instagram -->
    <a href="https://www.instagram.com/reandaa_s/"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="Instagram"
       class="text-[#20263A]/55 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:text-[#E1306C]">
        <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.7">
            <rect x="3" y="3" width="18" height="18" rx="5"></rect>
            <circle cx="12" cy="12" r="4"></circle>
            <circle cx="17.5" cy="6.5" r="0.8" fill="currentColor" stroke="none"></circle>
        </svg>
    </a>

    <!-- WhatsApp -->
    <a href="https://wa.me/628776973302"
       target="_blank"
       rel="noopener noreferrer"
       aria-label="WhatsApp"
       class="text-[#20263A]/55 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:text-[#25D366]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20.5 3.5A11.9 11.9 0 0 0 12 0C5.4 0 .1 5.3.1 11.9c0 2.1.5 4.2 1.6 6L0 24l6.2-1.6a11.9 11.9 0 0 0 5.8 1.5h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.2-3.4-8.5Zm-8.4 18.4h-.1a9.9 9.9 0 0 1-5.1-1.4l-.4-.2-3.7 1 1-3.6-.2-.4a9.9 9.9 0 0 1-1.5-5.3C2.1 6.5 6.5 2.1 12 2.1c2.7 0 5.1 1 7 2.9a9.8 9.8 0 0 1 2.9 7c0 5.5-4.4 9.9-9.8 9.9Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2 0-.4 0-.5 0-.1-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1-1.1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.5.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"></path>
        </svg>
    </a>

    <!-- Email -->
    <a href="mailto:reandasinaga@gmail.com"
       aria-label="Email"
       class="text-[#20263A]/55 transition-all duration-300 hover:-translate-y-1 hover:scale-110 hover:text-[#3155D8]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="5" width="18" height="14" rx="2"></rect>
            <path d="m3 7 9 6 9-6"></path>
        </svg>
    </a>

</div>
</div>
            </div>

            <!-- Right / Portrait -->
            <div class="relative flex justify-center lg:justify-end">

                <div class="absolute right-4 top-1/2 h-[78%] w-[75%] -translate-y-1/2 rounded-[3rem] bg-[#3155D8]"></div>



                <!-- Portrait -->
                <div class="relative z-10 w-[78%] max-w-md rounded-[2.5rem] border border-[#FAF9F6]/10">
                    <div class="pointer-events-none absolute -left-2 -top-2 z-20 h-12 w-12 border-l-4 border-t-4 border-[#3155D8]"></div>
<div class="pointer-events-none absolute -bottom-2 -right-2 z-20 h-12 w-12 border-b-4 border-r-4 border-[#8C3040]"></div>
                    <img
                        src="{{ asset('images/reanda.png') }}"
                        alt="Indah Christiani Sinaga"
                        class="h-auto w-full object-cover"
                    >
                </div>

                <!-- Small personal detail -->
                <div class="absolute -bottom-5 left-0 z-20 rotate-[-4deg]">
                    <div class="border border-[#FAF9F6]/15 bg-[#20263A] px-5 py-3">
                        <p class="font-serif text-lg italic text-[#FAF9F6]/70">
                            still learning,
                            <span class="text-[#8C3040]">still building.</span>
                        </p>
                    </div>
                </div>

            </div>

        </div>

    </div>

</section>
    <section class="bg-[#FAF9F6] px-6 pt-24 pb-10 text-[#20263A] lg:px-8">
        
<div class="mx-auto grid max-w-7xl gap-12 lg:grid-cols-[1fr_1.5fr] lg:items-start">

    <div class="flex items-start gap-4">
        <span class="mt-1 h-10 w-px bg-[#8C3040]"></span>

        <div>
            <p class="text-base font-medium uppercase tracking-[0.22em] text-[#3155D8]">
                About Me
            </p>

            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                Informatics Engineering, Data Analytics & Technology Management|Process Automation
            </p>
        </div>
    </div>

    <div>
        <h2 class="max-w-3xl text-2xl font-semibold leading-tight sm:text-3xl lg:text-4xl">
            Exploring how technology and data can create meaningful solutions for real-world challenges.
        </h2>

        <p class="mt-6 max-w-2xl text-base leading-8 text-[#20263A]/60">
            I am a final-year undergraduate student in Informatics Engineering
            at Universitas Palangka Raya, Indonesia. My academic interests
            include Natural Language Processing (NLP), data analytics,
            software engineering, and technology management. I am particularly
            interested in applying these fields to support digital transformation
            and solve operational challenges for local enterprises and institutions.
        </p>

        <a href="/about"
           class="mt-8 inline-flex text-sm font-medium underline underline-offset-8 decoration-[#3155D8]">
            More about me →
        </a>
    </div>
</div>
    </section>
    <section class="relative overflow-hidden bg-[#FAF9F6] px-6 pt-10 pb-24 text-[#20263A] lg:px-8 lg:pt-12 lg:pb-28">

    <div class="mx-auto max-w-7xl">

        <div class="mb-14 flex items-end justify-between gap-6">

            <div>
                <div class="flex items-center gap-3">
                    <span class="h-px w-10 bg-[#3155D8]"></span>

                    <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#3155D8]">
                        Selected Projects
                    </p>
                </div>

                <h2 class="mt-5 text-2xl font-semibold tracking-tight sm:text-3xl lg:text-5xl">
                    Things I’ve built.
                </h2>
            </div>

            <a
                href="/projects"
                class="hidden text-sm text-[#20263A]/60 transition duration-300 hover:text-[#3155D8] sm:block"
            >
                View all projects
                <span class="ml-1">→</span>
            </a>

        </div>

        
<div class="grid gap-6 lg:grid-cols-2">

<!-- 01. LUCKIN -->
<button
    type="button"
    data-project-card="luckin"
    class="project-card group relative overflow-hidden rounded-[2rem] border border-[#3155D8]/20 bg-[#3155D8] text-left text-[#FAF9F6] transition-all duration-500 hover:-translate-y-1 hover:border-[#3155D8]/40"
>
    <div class="relative mx-5 mt-5 overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#FAF9F6]">

        <div class="absolute left-4 top-4 z-10 flex items-center gap-2 rounded-full border border-[#20263A]/10 bg-[#FAF9F6]/90 px-3 py-1.5 text-[10px] uppercase tracking-[0.18em] text-[#20263A]/65 backdrop-blur-md">
            <span class="h-1.5 w-1.5 rounded-full bg-[#3155D8]"></span>
            In Progress
        </div>

        <img
            src="{{ asset('images/loginluckin.png') }}"
            alt="Luckin employee attendance system login interface"
            class="h-56 w-full object-cover object-top transition duration-700 ease-out group-hover:scale-[1.03] sm:h-64"
        >

        <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#3155D8]/20 via-transparent to-transparent"></div>
    </div>

    <div class="p-7 sm:p-8">
        <div class="flex items-center justify-between gap-4">
            <p class="text-xs uppercase tracking-[0.18em] text-[#FAF9F6]/70">
                01 / Web Application
            </p>

            <span class="flex h-9 w-9 items-center justify-center rounded-full border border-[#FAF9F6]/20 text-sm text-[#FAF9F6]/70 transition-all duration-300 group-hover:border-[#FAF9F6] group-hover:bg-[#FAF9F6] group-hover:text-[#3155D8]">
                ↗
            </span>
        </div>

        <h3 class="mt-6 text-2xl font-semibold tracking-tight sm:text-3xl">
            Luckin
        </h3>

        <p class="mt-4 max-w-xl text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
            A web-based employee attendance and shift management system designed for restaurant operations, allowing the owner to manage employee records, organize work schedules, and monitor attendance through a centralized platform.
        </p>

        <div class="mt-7 flex flex-wrap gap-2">
            <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">PHP</span>
            <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">HTML</span>
            <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">CSS</span>
            <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">JavaScript</span>
            <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Laravel</span>
        </div>
    </div>
</button>

    <!-- 02. ABSA & EMOTION RECOGNITION -->
    <button
        type="button"
        data-project-card="absa"
        class="project-card group relative overflow-hidden rounded-[2rem] border border-[#3155D8]/20 bg-[#3155D8] text-left text-[#FAF9F6] transition-all duration-500 hover:-translate-y-1 hover:border-[#3155D8]/40"
    >
        <div class="relative mx-5 mt-5 overflow-hidden rounded-[1.5rem] border border-white/10 bg-[#20263A]">

            <div class="absolute left-4 top-4 z-10 flex items-center gap-2 rounded-full border border-white/10 bg-[#20263A]/75 px-3 py-1.5 text-[10px] uppercase tracking-[0.18em] text-white/60 backdrop-blur-md">
                <span class="h-1.5 w-1.5 rounded-full bg-[#3155D8]"></span>
                Research Project
            </div>

            <img
                src="{{ asset('images/intertopicdistancemap.png') }}"
                alt="ABSA and emotion recognition analysis visualization"
                class="h-56 w-full object-cover object-center transition duration-700 ease-out group-hover:scale-[1.03] sm:h-64"
            >

            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#20263A]/45 via-transparent to-transparent"></div>
        </div>

        <div class="p-7 sm:p-8">
            <div class="flex items-center justify-between gap-4">
                <p class="text-xs uppercase tracking-[0.18em] text-[#FAF9F6]/70">
                    02 / Research & Data Analytics
                </p>

                <span class="flex h-9 w-9 items-center justify-center rounded-full border border-[#FAF9F6]/20 text-sm text-[#FAF9F6]/70 transition-all duration-300 group-hover:border-[#FAF9F6] group-hover:bg-[#FAF9F6] group-hover:text-[#3155D8]">
                    ↗
                </span>
            </div>

            <h3 class="mt-6 text-2xl font-semibold tracking-tight sm:text-3xl">
                ABSA and Emotion Recognition on Local MSME Reviews
            </h3>

            <p class="mt-4 max-w-xl text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
                A research project applying aspect-based sentiment analysis
                and emotion recognition to customer reviews of MSMEs in
                Palangka Raya City, uncovering detailed feedback and
                emotional patterns across key business aspects.
            </p>

            <div class="mt-7 flex flex-wrap gap-2">
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">NLP</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Sentiment Analysis</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Emotion Recognition</span>
            </div>
        </div>
    </button>


    <!-- 03. CINEMA TICKETING DATABASE -->
    <button
        type="button"
        data-project-card="database"
        class="project-card group relative overflow-hidden rounded-[2rem] border border-[#3155D8]/20 bg-[#3155D8] text-left text-[#FAF9F6] transition-all duration-500 hover:-translate-y-1 hover:border-[#3155D8]/40"
    >
        <div class="relative mx-5 mt-5 overflow-hidden rounded-[1.5rem] border border-white/10 bg-[#20263A]">

            <div class="absolute left-4 top-4 z-10 flex items-center gap-2 rounded-full border border-white/10 bg-[#20263A]/75 px-3 py-1.5 text-[10px] uppercase tracking-[0.18em] text-white/60 backdrop-blur-md">
                <span class="h-1.5 w-1.5 rounded-full bg-[#3155D8]"></span>
                Academic Lab Project
            </div>

            <img
                src="{{ asset('images/cinemadatabaseschemadesigner.png') }}"
                alt="Cinema ticketing relational database schema"
                class="h-56 w-full object-cover object-center transition duration-700 ease-out group-hover:scale-[1.03] sm:h-64"
            >

            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#20263A]/45 via-transparent to-transparent"></div>
        </div>

        <div class="p-7 sm:p-8">
            <div class="flex items-center justify-between gap-4">
                <p class="text-xs uppercase tracking-[0.18em] text-[#FAF9F6]/70">
                    03 / Database Engineering
                </p>

                <span class="flex h-9 w-9 items-center justify-center rounded-full border border-[#FAF9F6]/20 text-sm text-[#FAF9F6]/70 transition-all duration-300 group-hover:border-[#FAF9F6] group-hover:bg-[#FAF9F6] group-hover:text-[#3155D8]">
                    ↗
                </span>
            </div>

            <h3 class="mt-6 text-2xl font-semibold tracking-tight sm:text-3xl">
                Cinema Ticketing Database & Sales Analytics
            </h3>

            <p class="mt-4 max-w-xl text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
                Architected a normalized relational database system
                (db_bioskop) and an analytical SQL query suite to manage
                cinema ticketing workflows, maintain data integrity,
                and support revenue reporting.
            </p>

            <div class="mt-7 flex flex-wrap gap-2">
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">SQL</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Relational Database</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Data Analytics</span>
            </div>
        </div>
    </button>


    <!-- 04. CATEMU -->
    <button
        type="button"
        data-project-card="catemu"
        class="project-card group relative overflow-hidden rounded-[2rem] border border-[#FAF9F6]/10 bg-[#3155D8] text-left transition-all duration-500 hover:-translate-y-1 hover:border-[#FAF9F6]/25"
    >
        <div class="relative mx-5 mt-5 overflow-hidden rounded-[1.5rem] border border-white/10 bg-[#20263A]">

            <div class="absolute left-4 top-4 z-10 flex items-center gap-2 rounded-full border border-white/10 bg-[#20263A]/75 px-3 py-1.5 text-[10px] uppercase tracking-[0.18em] text-white/60 backdrop-blur-md">
                <span class="h-1.5 w-1.5 rounded-full bg-[#3155D8]"></span>
                In Progress
            </div>

            <img
                src="{{ asset('images/catemu-login.png') }}"
                alt="CATEMU login interface"
                class="h-56 w-full object-cover object-top transition duration-700 ease-out group-hover:scale-[1.03] sm:h-64"
            >

            <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-[#3155D8]/40 via-transparent to-transparent"></div>
        </div>

        <div class="p-7 sm:p-8">
            <div class="flex items-center justify-between gap-4">
                <p class="text-xs uppercase tracking-[0.18em] text-[#FAF9F6]/70">
                    04 / Web Application
                </p>

                <span class="flex h-9 w-9 items-center justify-center rounded-full border border-[#FAF9F6]/15 text-sm text-[#20263A]/60 transition-all duration-300 group-hover:border-[#3155D8] group-hover:bg-[#3155D8] group-hover:text-[#20263A]">
                    ↗
                </span>
            </div>

            <h3 class="mt-6 text-2xl font-semibold tracking-tight sm:text-3xl">
                CATEMU
            </h3>

            <p class="mt-4 max-w-xl text-sm leading-7 text-[#FAF9F6]/75 sm:text-base">
                A web platform designed to help cat lovers discover
                nearby clinics, shelters, rescue services, pet shops,
                and communities through location-based information.
            </p>

            <div class="mt-7 flex flex-wrap gap-2">
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Laravel</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">Web Development</span>
                <span class="rounded-full border border-[#FAF9F6]/20 px-3 py-1.5 text-[11px] text-[#FAF9F6]/75">UI Design</span>
            </div>
        </div>
    </button>

</div>

        <div
            id="project-laptop"
            class="relative mt-20 overflow-hidden rounded-[1.75rem] border border-[#20263A]/10 bg-[#EEF2FA] px-5 py-12 sm:px-8 lg:mt-24 lg:px-12 lg:py-14"
        >

            <div class="relative">

                <!-- TOP INFORMATION -->
                <div class="flex flex-col justify-between gap-8 lg:flex-row lg:items-end">

                    <div class="max-w-2xl">

                        <div class="flex items-center gap-3">

                            <span class="h-px w-8 bg-[#3155D8]"></span>

                            <p class="text-[11px] uppercase tracking-[0.25em] text-[#20263A]/45">
                                Project Interface
                            </p>

                        </div>

                        <h3
                            id="laptop-title"
                            class="mt-6 text-4xl font-semibold leading-tight tracking-tight sm:text-5xl"
                        >
                            Explore my
                            <span class="font-serif italic text-[#3155D8]">
                                projects.
                            </span>
                        </h3>

                        <p
                            id="laptop-description"
                            class="mt-5 max-w-xl text-sm leading-7 text-[#20263A]/55"
                        >
                            Choose a project above to open its interface
                            and explore the work directly inside this laptop.
                        </p>

                    </div>

                    <!-- Status -->
                    <div class="flex items-center gap-3">

                        <span
                            id="laptop-status-dot"
                            class="h-2 w-2 rounded-full bg-[#3155D8]"
                        ></span>

                        <span
                            id="laptop-status"
                            class="text-[10px] uppercase tracking-[0.2em] text-[#FAF9F6]/35"
                        >
                            Select a project
                        </span>

                    </div>

                </div>

                <div class="relative mt-12">

                    <!-- Laptop body -->
                    <div class="relative z-10 mx-auto w-full max-w-4xl">

                        <!-- SCREEN FRAME -->
                        <div class="relative rounded-[1.25rem] border-[6px] border-[#292929] bg-[#20263A] p-2 shadow-[0_40px_100px_rgba(0,0,0,0.6)]">

                            <!-- Camera -->
                            <div class="absolute left-1/2 top-1 z-30 h-1.5 w-1.5 -translate-x-1/2 rounded-full bg-[#20263A]"></div>

                            <!-- SCREEN -->
                            <div
                                id="laptop-screen"
                                class="relative aspect-[16/10] overflow-hidden rounded-[0.75rem] bg-[#FAF9F6] touch-pan-y select-none"
                            >

                                <!-- PROJECT SHOWCASE -->
                                <div
                                    id="project-showcase"
                                    class="absolute inset-0 overflow-y-auto bg-[#FAF9F6] text-[#20263A]"
                                >

                                    <div class="min-h-full px-6 py-8 sm:px-10 sm:py-10">

                                        <div class="flex items-center justify-between border-b border-[#20263A]/10 pb-5">

                                            <div>
                                                <p class="text-[9px] uppercase tracking-[0.25em] text-[#20263A]/40">
                                                    Indah Christiani Sinaga
                                                </p>

                                                <p class="mt-1 text-xs font-medium">
                                                    Selected Projects
                                                </p>
                                            </div>

                                            <span class="font-mono text-[9px] text-[#20263A]/30">
                                                2026
                                            </span>

                                        </div>

                                        <div class="mt-10">

                                            <p class="text-[10px] uppercase tracking-[0.2em] text-[#3155D8]">
                                                Portfolio / Work
                                            </p>

                                            <h4 class="mt-3 max-w-xl text-3xl font-semibold leading-tight sm:text-4xl">
                                                A small collection of things
                                                <span class="font-serif italic">
                                                    I’ve built.
                                                </span>
                                            </h4>

                                        </div>

                                        <!-- Mini projects -->
                                        
<!-- Mini projects -->
<div class="mt-10 grid gap-5 md:grid-cols-2">

    <!-- QR Attendance -->
    <button
        type="button"
        data-showcase-project="attendance"
        class="showcase-project group overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#3155D8] text-left transition duration-300 hover:-translate-y-1"
    >
        <div class="overflow-hidden">
            <img
                src="{{ asset('images/loginluckin.png') }}"
                alt="QR Attendance System"
                class="h-40 w-full object-cover object-top transition duration-500 group-hover:scale-105"
            >
        </div>

        <div class="p-5">
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/45">
                01 / Academic Project
            </p>

            <h5 class="mt-3 text-xl font-semibold">
                QR Attendance System
            </h5>

            <p class="mt-2 text-xs leading-6 text-[#20263A]/60">
                A web-based student attendance system using QR codes, with attendance management and reporting features.
            </p>

            <span class="mt-5 inline-flex text-[10px] uppercase tracking-[0.15em] text-[#20263A]/60">
                Explore project →
            </span>
        </div>
    </button>

    <!-- ABSA -->
    <button
        type="button"
        data-showcase-project="absa"
        class="showcase-project group overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#3155D8] text-left transition duration-300 hover:-translate-y-1"
    >
        <div class="overflow-hidden">
            <img
                src="{{ asset('images/intertopicdistancemap.png') }}"
                alt="ABSA and Emotion Recognition"
                class="h-40 w-full object-cover object-center transition duration-500 group-hover:scale-105"
            >
        </div>

        <div class="p-5">
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/45">
                02 / Research Project
            </p>

            <h5 class="mt-3 text-xl font-semibold">
                ABSA & Emotion Recognition
            </h5>

            <p class="mt-2 text-xs leading-6 text-[#20263A]/60">
                An analysis of customer reviews to uncover business-related sentiment and emotional patterns among local MSMEs.
            </p>

            <span class="mt-5 inline-flex text-[10px] uppercase tracking-[0.15em] text-[#20263A]/60">
                Explore project →
            </span>
        </div>
    </button>

    <!-- Cinema Database -->
    <button
        type="button"
        data-showcase-project="database"
        class="showcase-project group overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#3155D8] text-left transition duration-300 hover:-translate-y-1"
    >
        <div class="overflow-hidden">
            <img
                src="{{ asset('images/cinemadatabaseschemadesigner.png') }}"
                alt="Cinema Ticketing Database"
                class="h-40 w-full object-cover object-center transition duration-500 group-hover:scale-105"
            >
        </div>

        <div class="p-5">
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/45">
                03 / Academic Lab Project
            </p>

            <h5 class="mt-3 text-xl font-semibold">
                Cinema Ticketing Database
            </h5>

            <p class="mt-2 text-xs leading-6 text-[#20263A]/60">
                A relational database system for managing cinema ticketing workflows and analyzing sales revenue.
            </p>

            <span class="mt-5 inline-flex text-[10px] uppercase tracking-[0.15em] text-[#20263A]/60">
                Explore project →
            </span>
        </div>
    </button>

    <!-- CATEMU -->
    <button
        type="button"
        data-showcase-project="catemu"
        class="showcase-project group overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#3155D8] text-left transition duration-300 hover:-translate-y-1"
    >
        <div class="overflow-hidden">
            <img
                src="{{ asset('images/catemu-login.png') }}"
                alt="CATEMU"
                class="h-40 w-full object-cover object-top transition duration-500 group-hover:scale-105"
            >
        </div>

        <div class="p-5">
            <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/45">
                04 / Web Application
            </p>

            <h5 class="mt-3 text-xl font-semibold">
                CATEMU
            </h5>

            <p class="mt-2 text-xs leading-6 text-[#20263A]/60">
                A location-based platform connecting cat lovers with nearby clinics, shelters, rescue services, and communities.
            </p>

            <span class="mt-5 inline-flex text-[10px] uppercase tracking-[0.15em] text-[#20263A]/60">
                In progress →
            </span>
        </div>
    </button>

</div>

                                    </div>

                                </div>

                                <!-- PROJECT VIEW -->
                                <div
                                    id="project-view"
                                    class="absolute inset-0 hidden bg-[#FAF9F6]"
                                >

                                    <!-- Browser bar -->
                                    <div class="flex h-10 items-center gap-3 border-b border-[#20263A]/10 bg-[#20263A] px-4">

                                        <div class="flex gap-1.5">

                                            <span class="h-2 w-2 rounded-full bg-[#3155D8]"></span>
                                            <span class="h-2 w-2 rounded-full bg-[#FAF9F6]/30"></span>
                                            <span class="h-2 w-2 rounded-full bg-[#FAF9F6]/20"></span>

                                        </div>

                                        <div class="ml-3 flex-1 rounded-full bg-[#FAF9F6]/5 px-4 py-1.5">

                                            <p
                                                id="browser-url"
                                                class="text-[8px] tracking-[0.05em] text-[#FAF9F6]/35"
                                            >
                                                qr-attendance.local
                                            </p>

                                        </div>

                                    </div>

                                    <!-- Scrollable website viewport -->
                                    <div
                                        id="website-viewport"
                                        class="h-[calc(100%-40px)] overflow-y-auto overscroll-contain scroll-smooth bg-[#FAF9F6]"
                                    >

                                        <img
                                            id="website-preview"
                                            src="{{ asset('images/qr-login.png') }}"
                                            alt="QR Attendance System preview"
                                            class="block h-auto w-full"
                                        >

                                    </div>

                                    <!-- Birthday live project -->
                                    <div
                                        id="birthday-live-view"
                                        class="absolute inset-x-0 bottom-0 top-10 hidden bg-[#17104A]"
                                    >

                                        <iframe
                                            src="https://indahchristianisinaga.github.io/for-mamak/"
                                            title="A Birthday in Space"
                                            class="h-full w-full border-0"
                                            allow="autoplay; fullscreen"
                                        ></iframe>

                                    </div>

                                    <!-- Scroll indicator -->
                                    <div class="pointer-events-none absolute bottom-4 right-4 flex items-center gap-2 rounded-full border border-[#20263A]/10 bg-[#FAF9F6]/90 px-3 py-1.5 backdrop-blur-md">

                                        <span class="text-[8px] uppercase tracking-[0.15em] text-[#20263A]/45">
                                            Scroll
                                        </span>

                                        <span class="text-xs text-[#3155D8]">
                                            ↓
                                        </span>

                                    </div>

                                </div>

                                <!-- Transition -->
                                <div
                                    id="laptop-transition"
                                    class="pointer-events-none absolute inset-0 z-40 bg-[#20263A] opacity-0 transition-opacity duration-300"
                                ></div>

                            </div>

                        </div>

                        <!-- HINGE -->
                        <div class="relative mx-auto h-3 w-[82%] rounded-b-lg bg-[#20263A]"></div>

                        <!-- BASE -->
                        <div class="relative mx-auto h-4 w-[94%] rounded-b-[1.25rem] bg-gradient-to-b from-[#20263A] to-[#20263A] shadow-xl">

                            <div class="absolute left-1/2 top-0 h-1.5 w-24 -translate-x-1/2 rounded-b-md bg-[#20263A]"></div>

                        </div>

                    </div>

                    <!-- Laptop hint -->
                    <div class="mt-7 text-center">

                        <p class="text-[9px] uppercase tracking-[0.2em] text-[#FAF9F6]/20">
                            Choose a project above · then explore inside the screen
                        </p>

                    </div>

                </div>

                <!-- LUCKIN FEATURE NAVIGATION -->
<div id="feature-navigation" class="mt-10 hidden">

    <div class="mb-4 flex items-center justify-between">
        <p class="text-[10px] uppercase tracking-[0.22em] text-[#20263A]/35">
            Project features
        </p>

        <p
            id="current-feature"
            class="text-[10px] uppercase tracking-[0.18em] text-[#3155D8]"
        >
            Login
        </p>
    </div>

    <div class="flex gap-2 overflow-x-auto pb-2">

        <!-- LOGIN -->
        <button
            type="button"
            data-feature="login"
            data-image="{{ asset('images/loginluckin.png') }}"
            data-label="Login"
            data-url="luckin.local/login"
            class="feature-button shrink-0 rounded-full border border-[#3155D8] bg-[#3155D8] px-4 py-2.5 text-[10px] font-medium text-[#20263A] transition duration-300"
        >
            Login
        </button>

        <!-- REGISTER -->
        <button
            type="button"
            data-feature="register"
            data-image="{{ asset('images/registerluckin.png') }}"
            data-label="Register"
            data-url="luckin.local/register"
            class="feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]"
        >
            Register
        </button>

        <!-- OWNER DASHBOARD -->
        <button
            type="button"
            data-feature="owner-dashboard"
            data-image="{{ asset('images/owner_dashboard.png') }}"
            data-label="Owner Dashboard"
            data-url="luckin.local/owner/dashboard"
            class="feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]"
        >
            Owner Dashboard
        </button>

    </div>
</div>

<div
    id="catemu-feature-navigation"
    class="mt-10 hidden"
>

    <div class="mb-4 flex items-center justify-between">

        <p class="text-[10px] uppercase tracking-[0.22em] text-[#20263A]/35">
            Project features
        </p>

        <p
            id="catemu-current-feature"
            class="text-[10px] uppercase tracking-[0.18em] text-[#3155D8]"
        >
            Home
        </p>

    </div>

    <div class="flex gap-2 overflow-x-auto pb-2">

        <!-- HOME -->

        <button
            type="button"
            data-catemu-feature="home"
            data-image="{{ asset('images/catemu-home.png') }}"
            data-label="Home"
            data-url="catemu.local/"
            class="catemu-feature-button shrink-0 rounded-full border border-[#3155D8] bg-[#3155D8] px-4 py-2.5 text-[10px] font-medium text-[#20263A] transition duration-300"
        >
            Home
        </button>

        <!-- LOGIN -->

        <button
            type="button"
            data-catemu-feature="login"
            data-image="{{ asset('images/catemu-login.png') }}"
            data-label="Login"
            data-url="catemu.local/login"
            class="catemu-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]"
        >
            Login
        </button>

        <!-- REGISTER -->

        <button
            type="button"
            data-catemu-feature="register"
            data-image="{{ asset('images/catemu-register.png') }}"
            data-label="Register"
            data-url="catemu.local/register"
            class="catemu-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]"
        >
            Register
        </button>

    </div>
 </div>
<!-- ABSA FEATURE NAVIGATION -->
<div id="absa-feature-navigation" class="mt-10 hidden">

    <div class="mb-4 flex items-center justify-between">
        <p class="text-[10px] uppercase tracking-[0.22em] text-[#20263A]/35">
            Project features
        </p>

        <p id="absa-current-feature" class="text-[10px] uppercase tracking-[0.18em] text-[#3155D8]">
            Stacked Bar Chart
        </p>
    </div>

    <div class="flex gap-2 overflow-x-auto pb-2">

        <button type="button" data-absa-feature="stacked" data-image="{{ asset('images/stackedbarchart.png') }}" data-label="Stacked Bar Chart" data-url="absa.local/analysis" class="absa-feature-button shrink-0 rounded-full border border-[#3155D8] bg-[#3155D8] px-4 py-2.5 text-[10px] font-medium text-[#20263A] transition duration-300">
            Stacked Bar Chart
        </button>

        <button type="button" data-absa-feature="emotion" data-image="{{ asset('images/emotiondistributionandemotionpercentage.png') }}" data-label="Emotion Distribution" data-url="absa.local/emotion-distribution" class="absa-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Emotion Distribution
        </button>

        <button type="button" data-absa-feature="confusion" data-image="{{ asset('images/confusionmatrix.png') }}" data-label="Confusion Matrix" data-url="absa.local/model-evaluation" class="absa-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Confusion Matrix
        </button>

        <button type="button" data-absa-feature="roc" data-image="{{ asset('images/receiveroperatingcharacteristic(roc)curve.png') }}" data-label="ROC Curve" data-url="absa.local/roc-curve" class="absa-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            ROC Curve
        </button>

        <button type="button" data-absa-feature="topic" data-image="{{ asset('images/intertopicdistancemap.png') }}" data-label="Intertopic Distance Map" data-url="absa.local/topic-modeling" class="absa-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Topic Distance Map
        </button>

    </div>
</div>

<!-- DATABASE FEATURE NAVIGATION -->
<div id="database-feature-navigation" class="mt-10 hidden">

    <div class="mb-4 flex items-center justify-between">
        <p class="text-[10px] uppercase tracking-[0.22em] text-[#20263A]/35">
            Project features
        </p>

        <p id="database-current-feature" class="text-[10px] uppercase tracking-[0.18em] text-[#3155D8]">
            Database Schema
        </p>
    </div>

    <div class="flex gap-2 overflow-x-auto pb-2">

        <button type="button" data-database-feature="schema" data-image="{{ asset('images/cinemadatabaseschemadesigner.png') }}" data-label="Database Schema" data-url="cinema.local/database-schema" class="database-feature-button shrink-0 rounded-full border border-[#3155D8] bg-[#3155D8] px-4 py-2.5 text-[10px] font-medium text-[#20263A] transition duration-300">
            Database Schema
        </button>

        <button type="button" data-database-feature="tables" data-image="{{ asset('images/cinemadatabasetablestructure.png') }}" data-label="Table Structure" data-url="cinema.local/table-structure" class="database-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Table Structure
        </button>

        <button type="button" data-database-feature="sql" data-image="{{ asset('images/relationaldatabaseimplementationviasqlddl.png') }}" data-label="SQL DDL Implementation" data-url="cinema.local/sql-implementation" class="database-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            SQL DDL
        </button>

        <button type="button" data-database-feature="audit" data-image="{{ asset('images/foreignkeyconstraintsaudit.png') }}" data-label="Foreign Key Audit" data-url="cinema.local/foreign-key-audit" class="database-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Foreign Key Audit
        </button>

        <button type="button" data-database-feature="records" data-image="{{ asset('images/populatedticketrecordsview.png') }}" data-label="Populated Ticket Records" data-url="cinema.local/ticket-records" class="database-feature-button shrink-0 rounded-full border border-white/10 px-4 py-2.5 text-[10px] text-[#20263A]/55 transition duration-300 hover:border-white/20 hover:text-[#FAF9F6]">
            Ticket Records
        </button>

    </div>
</div>

</div>


<script>
document.addEventListener('DOMContentLoaded', function () {

    // PROJECT ELEMENTS
    const projectCards = document.querySelectorAll('[data-project-card]');
    const showcaseProjects = document.querySelectorAll('[data-showcase-project]');

    const showcase = document.getElementById('project-showcase');
    const projectView = document.getElementById('project-view');

    const websitePreview = document.getElementById('website-preview');
    const websiteViewport = document.getElementById('website-viewport');
    const birthdayLiveView = document.getElementById('birthday-live-view');

    // QR ATTENDANCE
    const featureNavigation = document.getElementById('feature-navigation');
    const featureButtons = document.querySelectorAll('.feature-button');
    const currentFeature = document.getElementById('current-feature');

    // CATEMU
    const catemuFeatureNavigation = document.getElementById('catemu-feature-navigation');
    const catemuFeatureButtons = document.querySelectorAll('.catemu-feature-button');
    const catemuCurrentFeature = document.getElementById('catemu-current-feature');

    // ABSA
    const absaFeatureNavigation = document.getElementById('absa-feature-navigation');
    const absaFeatureButtons = document.querySelectorAll('.absa-feature-button');
    const absaCurrentFeature = document.getElementById('absa-current-feature');

    // CINEMA DATABASE
    const databaseFeatureNavigation = document.getElementById('database-feature-navigation');
    const databaseFeatureButtons = document.querySelectorAll('.database-feature-button');
    const databaseCurrentFeature = document.getElementById('database-current-feature');

    // LAPTOP INFORMATION
    const laptopTitle = document.getElementById('laptop-title');
    const laptopDescription = document.getElementById('laptop-description');
    const laptopStatus = document.getElementById('laptop-status');
    const browserUrl = document.getElementById('browser-url');
    const laptopTransition = document.getElementById('laptop-transition');


    // SCREEN TRANSITION
    function transitionScreen(callback) {

        laptopTransition.style.opacity = '1';

        setTimeout(function () {
            callback();
            laptopTransition.style.opacity = '0';
        }, 220);
    }


    // HIDE ALL FEATURE NAVIGATIONS
    function hideAllFeatureNavigations() {

        featureNavigation.classList.add('hidden');
        catemuFeatureNavigation.classList.add('hidden');
        absaFeatureNavigation.classList.add('hidden');
        databaseFeatureNavigation.classList.add('hidden');
    }


    // ACTIVE FEATURE BUTTON
    function setActiveFeature(button, buttons) {

        buttons.forEach(function (item) {

            const active = item === button;

            if (active) {

                item.classList.add(
                    'border-[#3155D8]',
                    'bg-[#3155D8]',
                    'text-[#20263A]'
                );

                item.classList.remove(
                    'border-white/10',
                    'text-[#20263A]/55'
                );

            } else {

                item.classList.remove(
                    'border-[#3155D8]',
                    'bg-[#3155D8]',
                    'text-[#20263A]'
                );

                item.classList.add(
                    'border-white/10',
                    'text-[#20263A]/55'
                );
            }
        });
    }


    // DISPLAY FEATURE IMAGE
    function renderFeature(button, buttons, currentFeatureElement) {

        if (!button) return;

        websitePreview.src = button.dataset.image;
        websitePreview.alt = button.dataset.label + ' preview';

        browserUrl.textContent = button.dataset.url;
        currentFeatureElement.textContent = button.dataset.label;

        websiteViewport.scrollTop = 0;

        setActiveFeature(button, buttons);
    }


    // CHANGE FEATURE IMAGE
    function showFeature(button, buttons, currentFeatureElement) {

        if (!button) return;

        transitionScreen(function () {
            renderFeature(button, buttons, currentFeatureElement);
        });
    }


    // OPEN PROJECT
    function openProject(config) {

        transitionScreen(function () {

            showcase.classList.add('hidden');
            projectView.classList.remove('hidden');

            // Use website preview
            websiteViewport.classList.remove('hidden');
            birthdayLiveView.classList.add('hidden');

            // Show selected project's navigation
            hideAllFeatureNavigations();
            config.navigation.classList.remove('hidden');

            // Update laptop information
            laptopTitle.innerHTML = config.title;
            laptopDescription.textContent = config.description;

            laptopStatus.textContent = config.status;
            laptopStatus.classList.remove('text-[#FAF9F6]/35');
            laptopStatus.classList.add('text-[#3155D8]');

            // Display first feature
            renderFeature(
                config.buttons[0],
                config.buttons,
                config.currentFeature
            );
        });
    }


    // PROJECT CONFIGURATIONS
    const projects = {

        luckin: {
    title: 'Luckin <span class="font-serif italic text-[#3155D8]">.</span>',
    description: 'Explore the employee attendance and shift management interfaces of Luckin directly inside the laptop.',
    status: 'Luckin — In Progress',
    navigation: featureNavigation,
    buttons: featureButtons,
    currentFeature: currentFeature
},

        catemu: {
            title: 'CATEMU <span class="font-serif italic text-[#3155D8]">.</span>',
            description: 'Explore selected interfaces from CATEMU directly inside the laptop.',
            status: 'CATEMU',
            navigation: catemuFeatureNavigation,
            buttons: catemuFeatureButtons,
            currentFeature: catemuCurrentFeature
        },

        absa: {
            title: 'ABSA & Emotion <span class="font-serif italic text-[#3155D8]">Recognition.</span>',
            description: 'Explore visual results from an aspect-based sentiment analysis and emotion recognition project on local MSME customer reviews.',
            status: 'ABSA & Emotion Recognition',
            navigation: absaFeatureNavigation,
            buttons: absaFeatureButtons,
            currentFeature: absaCurrentFeature
        },

        database: {
            title: 'Cinema Database <span class="font-serif italic text-[#3155D8]">Analytics.</span>',
            description: 'Explore the relational database structure, SQL implementation, integrity checks, and ticket records.',
            status: 'Cinema Ticketing Database',
            navigation: databaseFeatureNavigation,
            buttons: databaseFeatureButtons,
            currentFeature: databaseCurrentFeature
        }
    };


    // OPEN PROJECT BY KEY
    function openSelectedProject(project) {

        const config = projects[project];

        if (!config) return;

        openProject(config);
    }


    // PROJECT CARDS
    projectCards.forEach(function (card) {

        card.addEventListener('click', function () {

            const project = this.dataset.projectCard;

            document
                .getElementById('project-laptop')
                .scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });

            setTimeout(function () {
                openSelectedProject(project);
            }, 350);
        });
    });


    // PROJECT SHOWCASE CARDS
    showcaseProjects.forEach(function (project) {

        project.addEventListener('click', function () {

            const selectedProject = this.dataset.showcaseProject;

            openSelectedProject(selectedProject);
        });
    });


    // QR FEATURE BUTTONS
    featureButtons.forEach(function (button) {

        button.addEventListener('click', function () {
            showFeature(this, featureButtons, currentFeature);
        });
    });


    // CATEMU FEATURE BUTTONS
    catemuFeatureButtons.forEach(function (button) {

        button.addEventListener('click', function () {
            showFeature(this, catemuFeatureButtons, catemuCurrentFeature);
        });
    });


    // ABSA FEATURE BUTTONS
    absaFeatureButtons.forEach(function (button) {

        button.addEventListener('click', function () {
            showFeature(this, absaFeatureButtons, absaCurrentFeature);
        });
    });


    // CINEMA DATABASE FEATURE BUTTONS
    databaseFeatureButtons.forEach(function (button) {

        button.addEventListener('click', function () {
            showFeature(this, databaseFeatureButtons, databaseCurrentFeature);
        });
    });


    // INITIAL STATE
    showcase.classList.remove('hidden');
    projectView.classList.add('hidden');

    hideAllFeatureNavigations();

    birthdayLiveView.classList.add('hidden');

});
</script>
</section>

    <section class="bg-[#FAF9F6] px-6 py-24 text-[#20263A] lg:px-8">
        <div class="mx-auto max-w-7xl">

            <div class="mb-14">
                <p class="text-sm font-medium uppercase tracking-[0.25em] text-[#3155D8]">
                    Selected Works
                </p>

                <h2 class="mt-4 text-4xl font-semibold tracking-tight sm:text-5xl">
                    Beyond the code.
                </h2>
            </div>

            
<div class="divide-y divide-[#20263A]/10 border-y border-[#20263A]/10">

    <!-- INTERNSHIP -->
    <div class="group flex items-center justify-between gap-6 py-8">
        <div>
            <p class="text-sm text-[#20263A]/40">
                Internship
            </p>

            <h3 class="mt-2 text-2xl font-medium transition group-hover:text-[#3155D8]">
                Graphic Design & Content Internship
            </h3>

            <p class="mt-2 text-[#20263A]/55">
                Gained hands-on experience in industry projects and teamwork.
            </p>
        </div>
    </div>

    <!-- STUDENT SERVICE PROGRAM -->
    <div class="group flex items-center justify-between gap-6 py-8">
        <div>
            <p class="text-sm text-[#20263A]/40">
                Student Service Program
            </p>

            <h3 class="mt-2 text-2xl font-medium transition group-hover:text-[#3155D8]">
                Community Service Program (KKN)
            </h3>

            <p class="mt-2 text-[#20263A]/55">
                Collaborated with local communities to develop and implement social projects.
            </p>
        </div>
    </div>

    <!-- VOLUNTEER -->
    <div class="group flex items-center justify-between gap-6 py-8">
        <div>
            <p class="text-sm text-[#20263A]/40">
                Volunteer
            </p>

            <h3 class="mt-2 text-2xl font-medium transition group-hover:text-[#3155D8]">
                International Volunteer Work
            </h3>

            <p class="mt-2 text-[#20263A]/55">
                Participated in global social initiatives and cultural exchange projects.
            </p>
        </div>
    </div>

    <!-- INDEPENDENT STUDY -->
    <div class="group flex items-center justify-between gap-6 py-8">
        <div>
            <p class="text-sm text-[#20263A]/40">
                Independent Study
            </p>

            <h3 class="mt-2 text-2xl font-medium transition group-hover:text-[#3155D8]">
                Certified Independent Study
            </h3>

            <p class="mt-2 text-[#20263A]/55">
                Kemendikbud & PT Mahir Technology. Completed an intensive industry-certified independent study program in technology.
            </p>
        </div>
    </div>

    <!-- CERTIFICATES & AWARDS -->
    <div class="group flex items-center justify-between gap-6 py-8">
        <div>
            <p class="text-sm text-[#20263A]/40">
                Certificates & Awards
            </p>

            <h3 class="mt-2 text-2xl font-medium transition group-hover:text-[#3155D8]">
                Korean Language, Technology & Digital Education
            </h3>

            <p class="mt-2 text-[#20263A]/55">
                Earned recognition and participation certificates in Korean language programs, technology, and digital education.
            </p>
        </div>
    </div>

</div>

    <span class="text-2xl transition group-hover:translate-x-2">
    →
</span>
</a>
</div>
</div>
    </section>
    <section class="bg-[#3155D8] px-6 py-20 text-[#FAF9F6] lg:px-8">
        <div class="mx-auto max-w-7xl">

            <p class="text-sm font-medium uppercase tracking-[0.25em] text-[#FAF9F6]">
                Get in touch
            </p>

            <div class="mt-6 flex flex-col gap-8 lg:flex-row lg:items-end lg:justify-between">

                <h2 class="max-w-3xl text-4xl font-semibold leading-tight sm:text-5xl lg:text-6xl">
                    Have an idea, opportunity, or just want to say hello?
                </h2>

                <a href="/contact"
                   class="inline-flex w-fit shrink-0 rounded-full bg-[#FAF9F6] px-6 py-3 text-sm font-medium text-[#20263A] transition hover:bg-[#3155D8]">
                    Let's talk →
                </a>

            </div>

        </div>
    </section>

@endsection