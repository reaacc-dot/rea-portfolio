@extends('layouts.app')

@section('content')

<section class="relative overflow-hidden bg-[#FAF9F6] px-6 pt-10 pb-12 text-[#20263A] lg:px-8 lg:pt-12 lg:pb-0">

    <div class="relative mx-auto max-w-7xl">

        <div class="flex items-center gap-4">
            <span class="h-px w-10 bg-[#3155D8]"></span>

            <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                About / 01
            </p>
        </div>

        <div class="relative mt-8 lg:mt-4 lg:min-h-[460px]">

            <div class="pointer-events-none absolute left-1/2 top-[42%] z-0 hidden -translate-x-1/2 -translate-y-1/2 lg:block">
                <h1 class="whitespace-nowrap text-[12rem] font-semibold leading-none tracking-[-0.09em] text-[#3155D8]/25">
                    REANDA<span class="font-serif italic text-[#8C3040]/60">.</span>
                </h1>
            </div>

            <div class="relative z-20 max-w-[290px] lg:absolute lg:left-0 lg:top-5 lg:max-w-[205px]">

                <p class="text-sm uppercase tracking-[0.25em] text-[#3155D8]">
                    Hi, I’m
                </p>

                <p class="mt-3 text-2xl font-medium leading-tight text-[#20263A]">
                        Rea.
                </p>

                <span class="mt-5 block h-px w-14 bg-[#8C3040]"></span>

                <p class="mt-4 text-sm leading-7 text-[#20263A]/55">
A final-year Information Systems student interested in relational database design, data management, web systems, and technology management.                </p>
                <div class="mt-6 flex flex-wrap items-center gap-3">

    <a
        href="{{ asset('files/CV REA.pdf') }}"
        target="_blank"
        rel="noopener noreferrer"
        class="inline-flex items-center gap-2 bg-[#3155D8] px-5 py-3 text-sm font-medium text-white transition-all duration-300 hover:-translate-y-1 hover:bg-[#8C3040]"
    >
        <span>View CV</span>
        <span>↗</span>
    </a>
</div>

            </div>

            <div class="relative z-10 mx-auto mt-8 w-[54%] max-w-[220px] sm:mt-10 sm:w-[42%] lg:absolute lg:bottom-0 lg:left-1/2 lg:mt-0 lg:w-[29%] lg:max-w-sm lg:-translate-x-1/2">

                <div class="relative z-10">

                    <div class="pointer-events-none absolute left-1/2 top-1/2 z-0 -translate-x-1/2 -translate-y-1/2 lg:hidden">
                        <h1 class="whitespace-nowrap text-[19vw] font-semibold leading-none tracking-[-0.09em] text-[#3155D8]/25">
                            INDAH<span class="font-serif italic text-[#8C3040]/60">.</span>
                        </h1>
                    </div>

                    <img
                        src="{{ asset('images/aboutme.png') }}"
                        alt="Indah Christiani Sinaga"
                        class="relative z-10 h-auto w-full object-contain"
                    >

                </div>

            </div>

            <div class="relative z-20 mx-auto mt-8 w-full max-w-[290px] lg:absolute lg:right-0 lg:top-7 lg:mt-0 lg:w-[255px]">

                <p class="text-xs uppercase tracking-[0.25em] text-[#3155D8]">
                    A little about me
                </p>

                <p class="mt-3 text-xl font-medium leading-tight text-[#20263A] sm:text-2xl">
I enjoy building practical tech & web  project and solutions                </p>

                <p class="mt-3 text-sm leading-7 text-[#20263A]/55">
A collection of work, academic, community, and project experiences across web systems, data, and technology management.
                
<div class="mt-6 flex items-center gap-5">

    <a href="https://www.instagram.com/reandaa_s/" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none">
            <rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.8"/>
            <circle cx="12" cy="12" r="4.2" stroke="currentColor" stroke-width="1.8"/>
            <circle cx="17.4" cy="6.6" r="1.1" fill="currentColor"/>
        </svg>
    </a>

    <a href="https://www.linkedin.com/in/reanda-sinaga-5512162a4/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M4.98 3.5C3.88 3.5 3 4.38 3 5.48s.88 1.98 1.98 1.98 1.98-.88 1.98-1.98S6.08 3.5 4.98 3.5ZM3.3 8.2h3.35V21H3.3V8.2ZM8.65 8.2h3.21v1.75h.05c.45-.85 1.54-2.05 3.78-2.05 4.04 0 4.79 2.66 4.79 6.12V21h-3.34v-6.2c0-1.48-.03-3.38-2.06-3.38-2.06 0-2.38 1.61-2.38 3.27V21H8.65V8.2Z"/>
        </svg>
    </a>

    <a href="mailto:reandasinaga@gmail.com" aria-label="Email" class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#8C3040]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <path d="m3 6 9 7 9-7"/>
        </svg>
    </a>

    <a href="https://wa.me/628776973302" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="text-[#20263A]/45 transition-all duration-300 hover:-translate-y-1 hover:text-[#3155D8]">
        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="currentColor">
            <path d="M20.5 3.5A11.8 11.8 0 0 0 12 0C5.4 0 .1 5.3.1 11.9c0 2.1.5 4.1 1.6 5.9L0 24l6.3-1.6a11.8 11.8 0 0 0 5.8 1.5h.1c6.5 0 11.8-5.3 11.8-11.9 0-3.2-1.2-6.2-3.5-8.5Zm-8.4 18.4h-.1a9.9 9.9 0 0 1-5.1-1.4l-.4-.2-3.7 1 1-3.6-.2-.4a9.8 9.8 0 0 1-1.5-5.3C1.3 6.5 6.1 2.1 12 2.1c2.6 0 5.1 1 7 2.9a9.8 9.8 0 0 1 2.9 7c0 5.5-4.4 9.9-9.8 9.9Zm5.4-7.4c-.3-.2-1.8-.9-2.1-1-.3-.1-.5-.2-.7.2-.2.3-.8 1-.9 1.2-.2.2-.3.2-.6.1-1.5-.8-2.5-1.4-3.5-3.1-.3-.5.3-.5.8-1.7.1-.2 0-.4 0-.5 0-.1-.7-1.7-1-2.3-.3-.6-.5-.5-.7-.5h-.6c-.2 0-.5.1-.8.4-.3.3-1.1 1-1.1 2.5s1.1 2.9 1.2 3.1c.2.2 2.1 3.2 5.1 4.5.7.3 1.2.5 1.6.6.7.2 1.3.2 1.8.1.6-.1 1.8-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.1-.3-.2-.6-.3Z"/>
        </svg>
    </a>

</div>


            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#EEF1F7] px-6 py-20 text-[#20263A] lg:px-8 lg:py-24">

    <div class="relative mx-auto max-w-7xl">

        <div class="flex items-center gap-4">
            <span class="h-px w-10 bg-[#3155D8]"></span>

            <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                Background / 02
            </p>
        </div>

        <div class="mt-10 max-w-2xl">

            <h2 class="text-4xl font-semibold leading-tight tracking-tight sm:text-5xl lg:text-6xl">
                Where I’ve learned,
                <span class="font-serif italic text-[#8C3040]">
                    worked,
                </span>
                and grown.
            </h2>

            <p class="mt-5 max-w-xl leading-7 text-[#20263A]/55">
A collection of work, academic, community, and project experiences across web systems, data, and technology management.            </p>

        </div>

        <div class="mt-14 grid gap-8 lg:grid-cols-2">

            <div>

                <div class="mb-5 flex items-center justify-between">

                    <div class="flex items-center gap-3">
                        <span class="text-sm text-[#3155D8]">
                            01
                        </span>

                        <h3 class="text-sm font-medium uppercase tracking-[0.2em]">
Internship                         </h3>
                    </div>

                    <span class="text-xs text-[#20263A]/35">
                        Work
                    </span>

                </div>

                <div class="group relative overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                Aug 2024 — Dec 2024
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Platform / Web Developer Intern / System Operator
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                State Property (Household Goods) Team, Rectorate of Palangka Raya University
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 flex items-center gap-3 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        <span>Web Development</span>
                        <span>·</span>
                        <span>Internship</span>
                    </div>
                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#8C3040]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#8C3040] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#8C3040]">
                                2024
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                            Independent Study Participant
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                                Kemendikbud-Ristek x PT. Mahir Teknologi
                            </p>
                        </div>
                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>
                    </div>
                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                       Independent Study Technology
                    </div>
                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2026
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Lab Practicum Participant
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
                               Database Systems Laboratory University of Palangkaraya
                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Database Information 
                        <span>·</span>
                        System Lab
                    </div>
                </div>
    
                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2026
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                                Part-time
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Cafe Operation Staff & Attendance System Developer
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
Luck Caffe & Longlife Eatery                        </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>
                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Operations
                        <span>·</span>
                        Attendance System Project
                    </div>
                </div>
                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2025
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                                Part-time
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Cashier
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
Gym & Fitness center                            </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Cashier
                    </div>
                </div>
                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2026
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                International Volunteer 
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
Voluntering With Koreans From Busan                           </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Volunteer
                        <span>·</span>
                      International
                    </div>
                </div>
                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                2025
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                                Student & Community Service
                            </h4>

                            <p class="mt-2 text-sm text-[#20263A]/55">
Tewah Pupuh Village Central Kalimantan Province, Indonesia                        </p>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Community Engagement 
                    </div>
                </div>
            </div>

            <div>

                <div class="mb-5 flex items-center justify-between">

                    <div class="flex items-center gap-3">
                        <span class="text-sm text-[#8C3040]">
                            02
                        </span>

                        <h3 class="text-sm font-medium uppercase tracking-[0.2em]">
                            My Education
                        </h3>
                    </div>

                    <span class="text-xs text-[#20263A]/35">
                        Learning
                    </span>

                </div>

                <div class="group relative overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#8C3040]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#8C3040] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#8C3040]">
                            2026
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                            Final-Year Informatics Engineering Student - Expected Graduation March 2027 From University of Palangka raya
                            </h4>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Informatics Engineering
                    </div>

                </div>

                <div class="group relative mt-4 overflow-hidden rounded-2xl border border-[#20263A]/10 bg-[#FAF9F6] p-6 transition-all duration-300 hover:-translate-y-1 hover:border-[#3155D8]/40 hover:shadow-[0_18px_40px_rgba(32,38,58,0.07)]">

                    <div class="absolute left-0 top-0 h-full w-1 origin-top scale-y-0 bg-[#3155D8] transition-transform duration-300 group-hover:scale-y-100"></div>

                    <div class="flex items-start justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                               2026
                            </p>

                            <p class="mt-2 text-xs uppercase tracking-[0.2em] text-[#20263A]/40">
                               Korean Language Class Program Students
                            </p>

                            <h4 class="mt-3 text-xl font-medium">
                               Students In the korean Language Class Program by Coursera x Yonsei University
                            </h4>

                        </div>

                        <span class="text-xl text-[#20263A]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <div class="mt-6 text-xs uppercase tracking-[0.15em] text-[#20263A]/35">
                        Students . Language Program . Yonsei University
                    </div>

                </div>

                <div class="mt-6 flex items-center gap-4 px-2">

                    <span class="font-mono text-xs text-[#3155D8]">
                        &lt;/&gt;
                    </span>

                    <span class="h-px flex-1 bg-[#20263A]/10"></span>

                    <span class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                        Always learning
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#FAF9F6] text-[#20263A]">

    <div class="grid lg:grid-cols-2">

        <div class="relative overflow-hidden px-6 py-20 lg:px-12 lg:py-28">

            <div class="relative mx-auto max-w-xl lg:mx-0">

                <div class="flex items-center gap-4">

                    <span class="h-px w-10 bg-[#8C3040]"></span>

                    <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                        Skills / 03
                    </p>

                </div>

                <h2 class="mt-14 max-w-md text-5xl font-semibold leading-[0.95] tracking-tight sm:text-6xl lg:text-7xl">

                    Things I

                    <span class="font-serif italic text-[#3155D8]">
                        enjoy building.
                    </span>

                </h2>

                <p class="mt-8 max-w-sm leading-8 text-[#20263A]/55">
                   A blend of technical skills, interface design, data insights, and operational problem-solving shaped through academic projects, internships, and hands-on work.
                </p>

                <div class="mt-16 flex items-center gap-4">

                    <span class="text-4xl font-light text-[#20263A]/15">
                        03
                    </span>

                    <span class="h-px w-16 bg-[#20263A]/15"></span>

                    <span class="text-xs uppercase tracking-[0.2em] text-[#20263A]/35">
                        What I work with
                    </span>

                </div>

            </div>

        </div>

        <div class="bg-[#20263A] px-6 py-14 text-[#FAF9F6] lg:px-12 lg:py-20">

            <div class="mx-auto max-w-2xl lg:mx-0 lg:ml-auto">

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#3155D8]">
                                01
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Web Development
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        HTML, CSS, JavaScript, PHP, Laravel, Web-Based Systems.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                02
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                UI/UX Design
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9FA]/20 transition-all duration-300 group-hover:translate-x-1 hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        Figma, User interface design, layout structure, Usability.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                03
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Database & Data Analytics
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        MySQL, relational database design, Data processing, Sentiment & Emotion Analysis.
                    </p>

                </div>

                <div class="group border-b border-[#FAF9F6]/10 py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                04
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Tools & Applied Tech
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#8C3040]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        GitHub, Cursor, Visual Studio Code, Microsoft Office, Xampp, Analytical workflows.
                    </p>

                </div>

                <div class="group py-7 transition-all duration-300 hover:px-4">

                    <div class="flex items-center justify-between gap-6">

                        <div>

                            <p class="text-xs uppercase tracking-[0.2em] text-[#FAF9F6]/35">
                                05
                            </p>

                            <h3 class="mt-2 text-2xl font-medium">
                                Technology & Operation Management & Professional
                            </h3>

                        </div>

                        <span class="text-2xl text-[#FAF9F6]/20 transition-all duration-300 group-hover:translate-x-1 group-hover:text-[#3155D8]">
                            ↗
                        </span>

                    </div>

                    <p class="mt-4 max-w-xl leading-7 text-[#FAF9F6]/45">
                        Problem solving, communication, adaptability,
                        and continuous learning, Operational Support, Project Documentation, Team Collaboration.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection
