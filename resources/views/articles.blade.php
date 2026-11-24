
@extends('layouts.app')

@section('content')

    {{-- HERO --}}
    <section class="bg-[#FAF9F6] px-6 py-12 text-[#20263A] lg:px-8 lg:py-16">
        <div class="mx-auto max-w-7xl">

            <div class="flex items-center gap-3">
                <span class="h-px w-8 bg-[#8C3040]"></span>
                <p class="text-[10px] font-medium uppercase tracking-[0.28em] text-[#20263A]/45">
                    Works / Research
                </p>
            </div>

            <div class="mt-6 grid gap-6 lg:grid-cols-[1.2fr_0.8fr] lg:items-end">

                <h1 class="text-[12vw] font-semibold leading-[0.88] tracking-[-0.075em] sm:text-7xl lg:text-[6rem]">
                    Research
                    <span class="font-serif italic text-[#8C3040]">Interests.</span>
                </h1>

                <p class="max-w-sm text-sm leading-7 text-[#20263A]/60 lg:justify-self-end lg:pb-1">
                    Exploring academic topics, research perspectives, and ideas
                    that contribute to a deeper understanding of technology,
                    information, and society.
                </p>

            </div>

            <div class="mt-9 flex items-center justify-between border-t border-[#20263A]/10 pt-3">
                <p class="text-[10px] uppercase tracking-[0.23em] text-[#20263A]/40">
                    Academic exploration
                </p>
                <p class="text-xs text-[#3155D8]/70">
                    03 Research Areas
                </p>
            </div>

        </div>
    </section>


    {{-- RESEARCH LIST --}}
    <section class="bg-[#F1F4FA] px-6 py-12 text-[#20263A] lg:px-8 lg:py-20">

        <div class="mx-auto max-w-7xl">

            <div class="mb-8 flex flex-col gap-3 sm:flex-row sm:items-end sm:justify-between">

                <div>
                    <p class="text-[10px] font-medium uppercase tracking-[0.28em] text-[#8C3040]">
                        Research Directory / 01
                    </p>

                    <h2 class="mt-3 text-2xl font-medium tracking-[-0.04em] sm:text-3xl">
                        Areas of Interest
                    </h2>
                </div>

                <p class="max-w-sm text-xs leading-6 text-[#20263A]/50">
                    Research Inspiration & Lab Alignment
                </p>

            </div>


            {{-- RESEARCH 01 --}}
            <details class="group border-t border-[#20263A]/15">

                <summary class="flex cursor-pointer list-none items-center gap-5 py-7 outline-none sm:gap-8 lg:py-8">

                    <span class="font-serif text-2xl italic text-[#8C3040] sm:text-3xl">
                        01
                    </span>

                    <div class="min-w-0 flex-1">
                        <p class="mb-2 text-[9px] font-medium uppercase tracking-[0.22em] text-[#3155D8]/70">
                            Research Interest
                        </p>

                        <h3 class="text-xl font-medium tracking-[-0.04em] uppercase transition-colors duration-300 group-hover:text-[#3155D8] sm:text-3xl lg:text-4xl">
    Predicting an ICT business process innovation as a digital transformation with machine learning techniques
</h3>
                    </div>

                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-[#20263A]/15 transition-all duration-300 group-open:rotate-45 group-open:border-[#3155D8] group-open:bg-[#3155D8] group-open:text-white">
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none">
                            <path d="M8 3V13M3 8H13" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                        </svg>
                    </span>

                </summary>

                <div class="pb-10 pl-12 sm:pl-16 lg:pb-12">

                    <div class="border-l-2 border-[#3155D8]/25 pl-5 sm:pl-7">

                        {{-- RESEARCH METADATA --}}
                        <div class="grid gap-5 border-b border-[#20263A]/10 pb-6 sm:grid-cols-2 lg:grid-cols-4">

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Research Title
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                   Predicting an ICT business process innovation as a digital transformation with machine learning techniques
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Year
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    2024
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Researcher
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    Eom, T., Woo, C., & Chun, D. (2024)
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Affiliation
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    Pukyong National University and Changwon National University
                                </p>
                            </div>

                        </div>


                        {{-- RESEARCH OVERVIEW --}}
                        <div class="grid gap-8 pt-7 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Overview
                                </p>

                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                                   - Dataset & Methodology: Analyzed empirical data from the 2020 Korea Innovation Survey (KIS) covering 3,989 manufacturing firms and applied five supervised machine learning algorithms, with Random Forest achieving the highest predictive performance (94.65% accuracy) in capturing non-linear relationships within ICT-based business process innovation.
                                </p>
                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                                   - Research Results : Research by Eom, Woo, and Chun (2024) indicates that external information sources are the primary determinant for predicting ICT business process innovation over internal firm resources. Furthermore, the study highlights that the Random Forest algorithm can forecast the successful adoption of digital innovation in environments marked by high technological uncertainty.
                                </p>
                            </div>

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Focus
                                </p>

                                <ul class="mt-4 space-y-3 text-sm text-[#20263A]/70">
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Predicting ICT Process Innovation Performance: Modeling and predicting the uncertain outcomes of ICT-driven business process innovation in digital transformation.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Machine Learning Benchmarking: Applying and comparing machine learning algorithms (identifying Random Forest as the highest-performing model) on the 2020 Korea Innovation Survey (KIS) dataset.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Critical Determinant Identification: Deriving key explanatory variables driving ICT innovation, highlighting external information sources as the most critical predictor.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Strategic Digital Transformation Insights: Formulating data-driven management implications to enhance firms' ICT innovation capabilities.
                                    </li>
                                </ul>
                            </div>

                        </div>


                        <div class="mt-7 border-t border-[#20263A]/10 pt-5">

                            <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                Research Approach
                            </p>

                            <p class="mt-3 max-w-3xl text-sm leading-7 text-[#20263A]/65">
                               I am particularly drawn to Prof. Dongphil Chun’s 2024 study, 'Predicting an ICT Business Process Innovation as a Digital Transformation with Machine Learning Techniques.' Evaluating 3,989 manufacturing firms from the 2020 Korea Innovation Survey (KIS) and achieving 94.65% accuracy with Random Forest—while showing that external information sources are the primary determinant of ICT business process innovation—closely aligns with my background. Having implemented LSTM and BERT models in my undergraduate thesis alongside developing an operational inventory system during my internship at the Rectorate of Universitas Palangka Raya, I aim to bring both deep learning and practical system insights to QTM Lab to examine data-driven digital transformation.
                            </p>

                        </div>

                    </div>

                </div>

            </details>


            {{-- RESEARCH 02 --}}
            <details class="group border-t border-[#20263A]/15">

                <summary class="flex cursor-pointer list-none items-center gap-5 py-7 outline-none sm:gap-8 lg:py-8">

                    <span class="font-serif text-2xl italic text-[#8C3040] sm:text-3xl">
                        02
                    </span>

                    <div class="min-w-0 flex-1">
                        <p class="mb-2 text-[9px] font-medium uppercase tracking-[0.22em] text-[#3155D8]/70">
                            Research Interest
                        </p>

                      <h3 class="text-xl font-medium tracking-[-0.04em] uppercase transition-colors duration-300 group-hover:text-[#3155D8] sm:text-3xl lg:text-4xl">
    A Study of the Impact of Innovation Diffusion on the Organizational Performance of Digital Logistics Platforms
</h3>
                    </div>

                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-[#20263A]/15 transition-all duration-300 group-open:rotate-45 group-open:border-[#3155D8] group-open:bg-[#3155D8] group-open:text-white">
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none">
                            <path d="M8 3V13M3 8H13" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                        </svg>
                    </span>

                </summary>

                <div class="pb-10 pl-12 sm:pl-16 lg:pb-12">

                    <div class="border-l-2 border-[#3155D8]/25 pl-5 sm:pl-7">

                        <div class="grid gap-5 border-b border-[#20263A]/10 pb-6 sm:grid-cols-2 lg:grid-cols-4">

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Research Title
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    A Study of the Impact of Innovation Diffusion on the Organizational Performance of Digital Logistics Platforms
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Year
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    2026
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Researcher
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    Zhao, S., Zhao, S., Tan, X., Chun, D., & Liu, Y. (2026).
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Affiliation
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    Pukyong National University, Shandong University, Jiaxing Nanhu University
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-8 pt-7 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Overview
                                </p>

                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                                  - Dataset: Survey data collected from 400 professionals across Chinese maritime and logistics enterprises.
                                </p>
                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                                   - Integrated Theoretical Framework: Combines three core frameworks: the Stimulus–Organism–Response (SOR) paradigm, Diffusion of Innovations Theory (IDT), and the Extended Technology Acceptance Model (ETAM).
                                </p>
                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                               -  Analytical Method: Applies second-order Structural Equation Modeling (SEM) to test the cognitive and experiential mediation pathways—Perceived Usefulness (PU), Perceived Ease of Use (PEOU), and Flow Experience (FE)—linking Digital Logistics Platform (DLP) innovation diffusion to Organizational Performance (OP).
                                </p>
                            </div>

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Focus
                                </p>

                                <ul class="mt-4 space-y-3 text-sm text-[#20263A]/70">
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Direct Impact of Innovation Diffusion: Investigating how the innovation diffusion of Digital Logistics Platforms (DLPs)—across relative advantage, compatibility, complexity, trialability, and observability—directly affects organizational performance.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Cognitive & Experiential Mediation Mechanisms: Examining the internal mediating pathways through Perceived Usefulness (PU), Perceived Ease of Use (PEOU), and Flow Experience (FE) using an integrated SOR–IDT–ETAM theoretical framework.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Empirical Evaluation in Maritime Logistics: Applying second-order Structural Equation Modeling (SEM) to survey data from 400 professionals in maritime and logistics enterprises to quantify how user experience drives platform value.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Strategic Platform Optimization: Providing empirical insights to help digital platform operators and logistics firms maximize organizational performance by enhancing user flow experience and perceived utility.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Pattern recognition
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="mt-7 border-t border-[#20263A]/10 pt-5">

                            <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                Research Approach
                            </p>

                            <p class="mt-3 max-w-3xl text-sm leading-7 text-[#20263A]/65">
            I am also particularly drawn to Prof. Dongphil Chun’s 2026 study, 'A Study of the Impact of Innovation Diffusion on the Organizational Performance of Digital Logistics Platforms.' Evaluating survey data from 400 maritime and logistics professionals using second-order Structural Equation Modeling (SEM) within an integrated SOR–IDT–ETAM framework—and demonstrating how Perceived Usefulness, Perceived Ease of Use, and especially Flow Experience (β = 0.279) mediate innovation diffusion into organizational performance—closely aligns with my background. Having developed an operational inventory and lending system during my internship at the Rectorate of Universitas Palangka Raya alongside my interest in real-time virtual production technologies such as motion capture, I aim to bring practical system engineering perspectives to QTM Lab to examine how technology adoption and user experience drive organizational performance.                </p>

                        </div>

                    </div>

                </div>

            </details>


            {{-- RESEARCH 03 --}}
            <details class="group border-y border-[#20263A]/15">

                <summary class="flex cursor-pointer list-none items-center gap-5 py-7 outline-none sm:gap-8 lg:py-8">

                    <span class="font-serif text-2xl italic text-[#8C3040] sm:text-3xl">
                        03
                    </span>

                    <div class="min-w-0 flex-1">
                        <p class="mb-2 text-[9px] font-medium uppercase tracking-[0.22em] text-[#3155D8]/70">
                            Research Interest
                        </p>

                        <h3 class="text-xl font-medium tracking-[-0.04em] transition-colors duration-300 group-hover:text-[#3155D8] sm:text-3xl lg:text-4xl">
                            Resource Bricolage, Digital Transformation, and Business Model Innovation: Based on the Conditional Process Analysis of Entrepreneurship.
                        </h3>
                    </div>

                    <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-full border border-[#20263A]/15 transition-all duration-300 group-open:rotate-45 group-open:border-[#3155D8] group-open:bg-[#3155D8] group-open:text-white">
                        <svg class="h-4 w-4" viewBox="0 0 16 16" fill="none">
                            <path d="M8 3V13M3 8H13" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/>
                        </svg>
                    </span>

                </summary>

                <div class="pb-10 pl-12 sm:pl-16 lg:pb-12">

                    <div class="border-l-2 border-[#3155D8]/25 pl-5 sm:pl-7">

                        <div class="grid gap-5 border-b border-[#20263A]/10 pb-6 sm:grid-cols-2 lg:grid-cols-4">

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Research Title
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    Digital Transformation
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Year
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                    2025
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Researcher
                                </p>
            <p class="mt-2 text-sm font-medium">
                                   Wang, X., Zhang, Z., & Chun, D. (2025).
                                </p>
                            </div>

                            <div>
                                <p class="text-[9px] uppercase tracking-[0.2em] text-[#20263A]/40">
                                    Affiliation
                                </p>
                                <p class="mt-2 text-sm font-medium">
                                   Hulunbuir University, Dongguk University, Pukyong National University
                                </p>
                            </div>

                        </div>

                        <div class="grid gap-8 pt-7 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16">

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Overview
                                </p>

                                <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
                                    - Data, Framework & Method: Survey of 263 Chinese entrepreneurs analyzed using conditional process analysis (Model 59 in the SPSS PROCESS macro) to test moderated mediation relationships.
                                </p>
                                  <p class="mt-4 max-w-2xl text-sm leading-8 text-[#20263A]/70">
- Key Results: Both resource bricolage and digital transformation significantly promote business model innovation; digital transformation partially mediates the effect of resource bricolage on business model innovation, while entrepreneurship positively moderates the relationships among all three constructs.                                </p>
                            </div>

                            <div>
                                <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                    Research Focus
                                </p>

                                <ul class="mt-4 space-y-3 text-sm text-[#20263A]/70">
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Overcoming Resource Constraints (Resource Bricolage): Examining how entrepreneurs creatively recombine and utilize existing limited resources (resource bricolage) to drive Business Model Innovation (BMI).
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                       Mediating Role of Digital Transformation: Investigating how Digital Transformation acts as a key mediating mechanism linking resource bricolage to business model innovation
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Moderating Role of Entrepreneurship: Applying Conditional Process Analysis (SPSS PROCESS Model 59) to survey data from 263 entrepreneurs to test how entrepreneurial orientation strengthens both direct and indirect innovation pathways.
                                    </li>
                                    <li class="flex gap-3">
                                        <span class="text-[#3155D8]">—</span>
                                        Systems Perspective for Startup Innovation: Demonstrating that higher levels of entrepreneurship significantly amplify the positive effects of resource bricolage and digital transformation on business model innovation
                                    </li>
                                </ul>
                            </div>

                        </div>

                        <div class="mt-7 border-t border-[#20263A]/10 pt-5">

                            <p class="text-[10px] font-medium uppercase tracking-[0.23em] text-[#8C3040]">
                                Research Approach
                            </p>

                            <p class="mt-3 max-w-3xl text-sm leading-7 text-[#20263A]/65">
I am also drawn to Prof. Dongphil Chun’s 2025 study, 'Resource Bricolage, Digital Transformation, and Business Model Innovation: Based on the Conditional Process Analysis of Entrepreneurship.' Analyzing survey data from 263 entrepreneurs using Conditional Process Analysis (PROCESS Model 59) and demonstrating how digital transformation mediates resource bricolage into business model innovation closely aligns with my perspective. During my KKN fieldwork in Banua Lima District (315 km from Palangka Raya)evaluating the sub-district website, supporting village administration, and serving as an interpreter for a volunteer team from Busan I witnessed firsthand how resource-constrained institutions adapt using existing assets.                            </p>

                        </div>

                    </div>

                </div>

            </details>

        </div>

    </section>


    {{-- CLOSING --}}
    <section class="bg-[#3155D8] px-6 py-14 text-[#FAF9F6] lg:px-8 lg:py-20">

        <div class="mx-auto grid max-w-7xl gap-6 lg:grid-cols-[1fr_1fr] lg:items-end">

            <div>
                <p class="text-[10px] uppercase tracking-[0.3em] text-[#F0A0AA]">
                    Continuous Exploration
                </p>

                <h2 class="mt-4 max-w-2xl text-4xl font-semibold leading-tight tracking-[-0.045em] sm:text-5xl lg:text-6xl">
                    Curiosity leads
                    <span class="font-serif italic text-[#F0A0AA]">
                        forward.
                    </span>
                </h2>
            </div>

            <p class="max-w-md text-sm leading-8 text-[#FAF9F6]/70 lg:justify-self-end">
                Research interests evolve through continuous learning,
                critical thinking, and the discovery of new perspectives
                and academic opportunities.
            </p>

        </div>

    </section>

@endsection
