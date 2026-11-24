@extends('layouts.app')

@section('content')

    <section class="relative overflow-hidden bg-[#FAF9F6] px-6 py-14 text-[#20263A] lg:px-8 lg:py-18">

        <div class="relative mx-auto max-w-7xl">

            <div class="flex items-center gap-4">
                <span class="h-px w-10 bg-[#F0A0AA]"></span>

                <p class="text-xs font-medium uppercase tracking-[0.3em] text-[#20263A]/45">
                    Projects / 01
                </p>
            </div>

            <div class="mt-7 grid gap-8 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">

                <div>

                    <h1 class="max-w-5xl text-[11vw] font-semibold leading-[0.86] tracking-[-0.075em] sm:text-[5.5rem] lg:text-[7rem]">
                        Things
                        <span class="font-serif italic text-[#8C3040]">
                            I’ve
                        </span>
                        built<span class="text-[#3155D8]">.</span>
                    </h1>

                </div>

                <div class="lg:pb-2">

                    <p class="max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
A curated showcase of digital products crafted through hands-on experimentation, problem-solving, and continuous learning.
                    </p>

                    <div class="mt-6 flex items-center gap-4">

                        <span class="h-7 w-px bg-[#F0A0AA]"></span>

                        <p class="text-[10px] uppercase tracking-[0.25em] text-[#20263A]/35">
                        WEB DEVELOPMENT · UI DESIGN · DIGITAL PRODUCTS
                        </p>

                    </div>

                </div>

            </div>

            <div class="mt-12 flex items-center justify-between border-t border-[#20263A]/10 pt-4">

                <p class="text-[10px] uppercase tracking-[0.25em] text-[#20263A]/30">
Featured Projects                </p>

                <p class="text-xs text-[#3155D8]/60">
                    04 projects
                </p>

            </div>

        </div>

    </section>
<section class="relative overflow-hidden bg-[#F1F4FA] px-6 py-16 text-[#20263A] lg:px-8 lg:py-24">

<div class="relative mx-auto max-w-6xl">

    <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

        <div class="group relative lg:order-1">

            <div class="relative mx-auto max-w-[540px]">

                <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-2xl shadow-[#20263A]/15 transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

<img
    id="qr-preview"
    src="{{ asset('images/loginluckin.png') }}"
    alt="QR Attendance System login preview"
    class="block h-full w-full object-cover object-top transition-opacity duration-300"
>

</div>

<div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1 rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

<button
    type="button"
    data-qr-image="{{ asset('images/loginluckin.png') }}"
    data-qr-label="Login"
    class="qr-page-btn rounded-full bg-[#FAF9F6] px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#20263A] transition"
>
    Login
</button>

<button
    type="button"
    data-qr-image="{{ asset('images/registerluckin.png') }}"
    data-qr-label="Dashboard Admin"
    class="qr-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
>
    Admin
</button>

<button
    type="button"
    data-qr-image="{{ asset('images/owner_dashboard.png') }}"
    data-qr-label="Dashboard Guru"
    class="qr-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
>
    Guru
</button>

</div>
                </div>

            </div>

        </div>

        <div class="lg:order-2">

            <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#8C3040]">
            01 / Web Application
            </p>

            <h2 class="mt-5 max-w-xl text-4xl font-semibold leading-[0.95] tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                QR Attendance
                <span class="font-serif italic text-[#8C3040]">
                    System.
                </span>
            </h2>

            <p class="mt-5 max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
    A web-based employee attendance and shift management system
    designed for restaurant operations, allowing the owner to
    manage employee records, organize work schedules, and monitor
    attendance through a centralized platform.
</p>

            <div class="mt-6">

                <span class="inline-flex rounded-full border border-[#3155D8]/20 bg-[#3155D8]/5 px-4 py-2 text-[10px] uppercase tracking-[0.18em] text-[#3155D8]">
                     In Progress
                </span>

            </div>
<div class="mt-6 flex flex-wrap gap-2">

    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
        PHP
    </span>

    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
        HTML
    </span>

    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
        CSS
    </span>

    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
        JavaScript
    </span>

</div>
        </div>

    </div>

</div>

</section>

<section class="relative overflow-hidden bg-[#3155D8] px-6 py-16 text-[#FAF9F6] lg:px-8 lg:py-24">
    <div class="relative mx-auto max-w-6xl">
        <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">
            <div class="group relative lg:order-1">
                <div class="relative mx-auto max-w-[540px]">
                    <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-2xl shadow-[#20263A]/15 transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">
                        <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

                            <img
                                id="absa-preview"
                                src="{{ asset('images/stackedbarchart.png') }}"
                                alt="ABSA stacked bar chart visualization"
                                class="block h-full w-full object-contain transition-opacity duration-300"
                            >

                        </div>

                        <div class="absolute bottom-4 left-1/2 flex max-w-[95%] -translate-x-1/2 items-center gap-1 overflow-x-auto rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

                            <button
                                type="button"
                                data-absa-image="{{ asset('images/stackedbarchart.png') }}"
                                data-absa-label="Sentiment"
                                class="absa-page-btn shrink-0 rounded-full bg-[#FAF9F6] px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#20263A] transition"
                            >
                                Sentiment
                            </button>

                            <button
                                type="button"
                                data-absa-image="{{ asset('images/emotiondistributionandemotionpercentage.png') }}"
                                data-absa-label="Emotion"
                                class="absa-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Emotion
                            </button>

                            <button
                                type="button"
                                data-absa-image="{{ asset('images/confusionmatrix.png') }}"
                                data-absa-label="Confusion Matrix"
                                class="absa-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Matrix
                            </button>

                            <button
                                type="button"
                                data-absa-image="{{ asset('images/receiveroperatingcharacteristic(roc)curve.png') }}"
                                data-absa-label="ROC Curve"
                                class="absa-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                ROC
                            </button>

                            <button
                                type="button"
                                data-absa-image="{{ asset('images/intertopicdistancemap.png') }}"
                                data-absa-label="Topic Map"
                                class="absa-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Topic Map
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lg:order-2">

                <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#FAF9F6]/60">
                    02 / Data Analysis
                </p>

                <h2 class="mt-5 max-w-xl text-4xl font-semibold leading-[0.95] tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                    ABSA & Emotion
                    <span class="font-serif italic text-[#FAF9F6]/75">
                        Recognition.
                    </span>
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-[#000000] sm:text-base">
                    A project applying aspect-based sentiment analysis and emotion recognition to customer reviews of MSMEs in Palangka Raya City to uncover granular feedback and emotional patterns across key business aspects.
                </p>

                <div class="mt-6 flex flex-wrap gap-2">

                    <span class="rounded-full border border-[#FAF9F6]/25 px-3 py-1.5 text-[10px] text-[#FAF9F6]/75">
                        NLP
                    </span>

                    <span class="rounded-full border border-[#FAF9F6]/25 px-3 py-1.5 text-[10px] text-[#FAF9F6]/75">
                        Sentiment Analysis
                    </span>

                    <span class="rounded-full border border-[#FAF9F6]/25 px-3 py-1.5 text-[10px] text-[#FAF9F6]/75">
                        Emotion Recognition
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="relative overflow-hidden bg-[#F1F4FA] px-6 py-16 text-[#20263A] lg:px-8 lg:py-24">

    <div class="relative mx-auto max-w-6xl">

        <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

            <div class="group relative lg:order-1">

                <div class="relative mx-auto max-w-[540px]">

                    <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-2xl shadow-[#20263A]/15 transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                        <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

                            <img
                                id="cinema-preview"
                                src="{{ asset('images/cinemadatabaseschemadesigner.png') }}"
                                alt="Cinema database schema designer"
                                class="block h-full w-full object-contain transition-opacity duration-300"
                            >

                        </div>

                        <div class="absolute bottom-4 left-1/2 flex max-w-[95%] -translate-x-1/2 items-center gap-1 overflow-x-auto rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

                            <button
                                type="button"
                                data-cinema-image="{{ asset('images/cinemadatabaseschemadesigner.png') }}"
                                data-cinema-label="Database Schema Designer"
                                class="cinema-page-btn shrink-0 rounded-full bg-[#FAF9F6] px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#20263A] transition"
                            >
                                Schema
                            </button>

                            <button
                                type="button"
                                data-cinema-image="{{ asset('images/cinemadatabasetablestructure.png') }}"
                                data-cinema-label="Database Table Structure"
                                class="cinema-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Tables
                            </button>

                            <button
                                type="button"
                                data-cinema-image="{{ asset('images/relationaldatabaseimplementationviasqlddl.png') }}"
                                data-cinema-label="Relational Database SQL DDL Implementation"
                                class="cinema-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                SQL DDL
                            </button>

                            <button
                                type="button"
                                data-cinema-image="{{ asset('images/foreignkeyconstraintsaudit.png') }}"
                                data-cinema-label="Foreign Key Constraints Audit"
                                class="cinema-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Audit
                            </button>

                            <button
                                type="button"
                                data-cinema-image="{{ asset('images/populatedticketrecordsview.png') }}"
                                data-cinema-label="Populated Ticket Records"
                                class="cinema-page-btn shrink-0 rounded-full px-3 py-1.5 text-[8px] uppercase tracking-[0.12em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Records
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lg:order-2">

                <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#8C3040]">
                    03 / Database Engineering
                </p>

                <h2 class="mt-5 max-w-xl text-4xl font-semibold leading-[0.95] tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                    Cinema Ticketing
                    <span class="font-serif italic text-[#8C3040]">
                        Database.
                    </span>
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
                    Architected a normalized relational database system (db_bioskop) and analytical SQL query suite to manage cinema ticketing workflows and revenue reporting.
                </p>

                <div class="mt-6 flex flex-wrap gap-2">

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        SQL
                    </span>

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        Relational Database
                    </span>

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        Data Analytics
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>


<section class="relative overflow-hidden bg-[#F1F4FA] px-6 py-16 text-[#20263A] lg:px-8 lg:py-24">
    <div class="relative mx-auto max-w-6xl">

        <div class="grid items-center gap-12 lg:grid-cols-[1.15fr_0.85fr] lg:gap-16">

            <div class="group relative lg:order-1">

                <div class="relative mx-auto max-w-[540px]">

                    <div class="relative overflow-hidden rounded-[1.5rem] border border-[#20263A]/10 bg-[#20263A] p-2.5 shadow-[0_24px_60px_rgba(32,38,58,0.12)] transition duration-500 group-hover:-translate-y-1 sm:rounded-[1.75rem] sm:p-3">

                        <div class="relative aspect-[16/10] overflow-hidden rounded-[1.2rem] bg-[#20263A]">

                            <img
                                id="catemu-preview"
                                src="{{ asset('images/catemu-login.png') }}"
                                alt="CATEMU login page preview"
                                class="block h-full w-full object-cover object-top transition-opacity duration-300"
                            >

                        </div>

                        <div class="absolute bottom-5 left-1/2 flex -translate-x-1/2 items-center gap-1 rounded-full border border-[#FAF9F6]/10 bg-[#20263A]/90 p-1.5 backdrop-blur-md">

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-home.png') }}"
                                data-catemu-label="Home"
                                class="catemu-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Home
                            </button>

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-login.png') }}"
                                data-catemu-label="Login"
                                class="catemu-page-btn rounded-full bg-[#FAF9F6] px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#20263A] transition"
                            >
                                Login
                            </button>

                            <button
                                type="button"
                                data-catemu-image="{{ asset('images/catemu-register.png') }}"
                                data-catemu-label="Register"
                                class="catemu-page-btn rounded-full px-3.5 py-1.5 text-[9px] uppercase tracking-[0.15em] text-[#FAF9F6]/55 transition hover:text-[#FAF9F6]"
                            >
                                Register
                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <div class="lg:order-2">

                <p class="text-[10px] font-medium uppercase tracking-[0.25em] text-[#8C3040]">
                    04 / Web Application
                </p>

                <h2 class="mt-5 text-4xl font-semibold tracking-[-0.06em] sm:text-5xl lg:text-6xl">
                    CATEMU<span class="font-serif italic text-[#8C3040]">.</span>
                </h2>

                <p class="mt-5 max-w-md text-sm leading-7 text-[#20263A]/55 sm:text-base">
                    A web project for helping cat owners find nearby
                    clinics, shelters, and other sources of assistance.
                </p>

                <div class="mt-6">

                    <span class="inline-flex rounded-full border border-[#8C3040]/25 bg-[#8C3040]/5 px-4 py-2 text-[10px] uppercase tracking-[0.18em] text-[#8C3040]">
                        In Progress
                    </span>

                </div>

                <div class="mt-6 flex flex-wrap gap-2">

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        Laravel
                    </span>

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        MySQL
                    </span>

                    <span class="rounded-full border border-[#20263A]/10 px-3 py-1.5 text-[10px] text-[#20263A]/45">
                        UI Design
                    </span>

                </div>

            </div>

        </div>

    </div>

</section>

    <section class="relative overflow-hidden bg-[#3155D8] px-6 py-20 text-[#FAF9F6] lg:px-8 lg:py-28">

        <div class="relative mx-auto max-w-7xl">

            <div class="grid gap-8 lg:grid-cols-[1fr_1fr] lg:items-end">

                <div>

                    <p class="text-[10px] uppercase tracking-[0.3em] text-[#F0A0AA]">
                        More to come
                    </p>

                    <h2 class="mt-5 max-w-2xl text-4xl font-semibold leading-tight tracking-[-0.04em] sm:text-5xl lg:text-6xl">
                        Still learning,
                        <span class="font-serif italic text-[#F0A0AA]">
                            still building.
                        </span>
                    </h2>

                </div>

                <div>

                    <p class="max-w-md text-sm leading-7 text-[#FAF9F6]/40 sm:text-base">
                        More projects will find their way here as I keep
                        learning, experimenting, and building new things.
                    </p>

                </div>

            </div>

        </div>

    </section>
    <script>
    const catemuPreview = document.getElementById('catemu-preview');
    const catemuButtons = document.querySelectorAll('.catemu-page-btn');

    catemuButtons.forEach((button) => {
        button.addEventListener('click', () => {

            const image = button.dataset.catemuImage;

            catemuPreview.style.opacity = '0';

            setTimeout(() => {
                catemuPreview.src = image;
                catemuPreview.style.opacity = '1';
            }, 150);

            catemuButtons.forEach((btn) => {
                btn.classList.remove(
                    'bg-[#FAF9F6]',
                    'text-[#20263A]'
                );

                btn.classList.add('text-[#FAF9F6]/55');
            });

            button.classList.remove('text-[#FAF9F6]/55');

            button.classList.add(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );
        });
    });
    const qrPreview = document.getElementById('qr-preview');
const qrButtons = document.querySelectorAll('.qr-page-btn');

qrButtons.forEach((button) => {
    button.addEventListener('click', () => {

        const image = button.dataset.qrImage;

        qrPreview.style.opacity = '0';

        setTimeout(() => {
            qrPreview.src = image;
            qrPreview.style.opacity = '1';
        }, 150);

        qrButtons.forEach((btn) => {
            btn.classList.remove(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );

            btn.classList.add('text-[#FAF9F6]/55');
        });

        button.classList.remove('text-[#FAF9F6]/55');

        button.classList.add(
            'bg-[#FAF9F6]',
            'text-[#20263A]'
        );
    });
});

const absaPreview = document.getElementById('absa-preview');
const absaButtons = document.querySelectorAll('.absa-page-btn');

absaButtons.forEach((button) => {
    button.addEventListener('click', () => {

        const image = button.dataset.absaImage;

        absaPreview.style.opacity = '0';

        setTimeout(() => {
            absaPreview.src = image;
            absaPreview.alt = button.dataset.absaLabel + ' visualization';
            absaPreview.style.opacity = '1';
        }, 150);

        absaButtons.forEach((btn) => {
            btn.classList.remove(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );

            btn.classList.add('text-[#FAF9F6]/55');
        });

        button.classList.remove('text-[#FAF9F6]/55');

        button.classList.add(
            'bg-[#FAF9F6]',
            'text-[#20263A]'
        );
    });
});

const cinemaPreview = document.getElementById('cinema-preview');
const cinemaButtons = document.querySelectorAll('.cinema-page-btn');

cinemaButtons.forEach((button) => {
    button.addEventListener('click', () => {

        const image = button.dataset.cinemaImage;

        cinemaPreview.style.opacity = '0';

        setTimeout(() => {
            cinemaPreview.src = image;
            cinemaPreview.alt = button.dataset.cinemaLabel;
            cinemaPreview.style.opacity = '1';
        }, 150);

        cinemaButtons.forEach((btn) => {
            btn.classList.remove(
                'bg-[#FAF9F6]',
                'text-[#20263A]'
            );

            btn.classList.add('text-[#FAF9F6]/55');
        });

        button.classList.remove('text-[#FAF9F6]/55');

        button.classList.add(
            'bg-[#FAF9F6]',
            'text-[#20263A]'
        );
    });
});
</script>
@endsection
