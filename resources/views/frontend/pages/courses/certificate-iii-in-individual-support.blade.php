@extends('frontend.layouts.app')

@section('content')
    {{-- Hero Section --}}
    <section class="-mt-4">
        <div class="relative overflow-hidden">

            {{-- Background --}}
            <div class="absolute inset-0">
                <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7DRrvrvyU6gG3zu1OoJa0eKcBclew-hkiW7KRzYWA9k11jhh5ZyY2eDs55VfW3un8abNaMpHKhtxkIhfIEprKBHJSD5rPdWzDeIIJawl6w6h6oaOZix9sHWrg3p5q_MOnGJ8LJhjQOj2EOy8H3WdOkXDkkgcCudyr1rPLrYSEOdpIyvrzLDs4FGECXeHcCdCFcB-VGsSKyzwtrMJbhYpRy-KmX6_NotI7hAvGJq2_zqGJHbBnxdJXqkR5m9rsyBGwDDv_L2KNFA"
                    alt="Hospitality" class="w-full h-full object-cover">

                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            {{-- Content --}}
            <div class="relative max-w-7xl mx-auto px-5 md:px-8 py-12 sm:py-16 lg:py-24">

                {{-- Badge --}}
                <div
                    class="inline-flex items-center gap-2 bg-brand-500/10 backdrop-blur-md border border-white/20 px-3 py-2 rounded-full mb-5">

                    <span class="material-symbols-outlined text-sm text-brand-600">
                        school
                    </span>

                    <span class="text-xs font-semibold tracking-widest uppercase text-white">
                        CHC33021 Nationally Recognised
                    </span>

                </div>

                {{-- Title --}}
                <h1
                    class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight max-w-4xl mb-6 sm:mb-10">
                    Certificate III in Individual Support
                </h1>

            </div>

        </div>
    </section>


    {{-- Main Section --}}
    <section>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10 sm:py-12 lg:py-16">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">
                <!-- Left Content Area -->
                <div class="lg:col-span-8 space-y-10 sm:space-y-14 lg:space-y-16">

                    {{-- Course Overview --}}
                    <section id="overview">
                        <h2
                            class="font-headline-lg text-headline-lg text-xl sm:text-2xl lg:text-3xl mb-4 sm:mb-6 flex items-center gap-3">
                            <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                            Course Overview
                        </h2>

                        <div class="prose prose-slate max-w-none">
                            <p class="font-body-lg text-brand-500-variant text-sm sm:text-base lg:text-lg leading-relaxed">
                                The Certificate III in Individual Support provides learners with the essential knowledge and
                                practical skills required to support individuals in aged care, disability care and community
                                support environments. This qualification prepares students to assist people with their daily
                                living activities, promote independence, maintain personal wellbeing and deliver
                                person-centred care.
                            </p>
                        </div>
                    </section>


                    {{-- Course Structure --}}
                    <section id="curriculum">
                        <h2
                            class="font-headline-lg text-headline-lg text-xl sm:text-2xl lg:text-3xl mb-5 sm:mb-8 flex items-center gap-3">
                            <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                            Course Structure
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 sm:gap-6">

                            {{-- Core Learning Areas --}}
                            <div
                                class="bg-white border border-slate-200 p-5 sm:p-6 lg:p-8 rounded shadow-sm hover:shadow-md transition-all">

                                <span class="material-symbols-outlined text-brand-500 mb-4"
                                    style="font-size: 32px;">verified</span>

                                <h3 class="text-base md:text-lg text-headline-md sm:text-xl mb-3 sm:mb-4">
                                    Core Learning Areas
                                </h3>

                                <ul class="space-y-2 sm:space-y-3 font-body-md text-brand-500-variant text-sm sm:text-base">

                                    @foreach (['Understanding individual needs and providing person-centred support', 'Supporting independence and wellbeing', 'Providing personal care and assistance with daily activities', 'Recognising healthy body systems and supporting health', 'Communicating effectively in care environments', 'Following safe work practices and infection prevention procedures'] as $item)
                                        <li class="flex items-start gap-2">
                                            <span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                            {{ $item }}
                                        </li>
                                    @endforeach

                                </ul>
                            </div>


                            {{-- Elective Learning Areas --}}
                            <div class="bg-slate-50 border border-slate-200 p-5 sm:p-6 lg:p-8 rounded">

                                <span class="material-symbols-outlined text-brand-500 mb-4"
                                    style="font-size: 32px;">category</span>

                                <h3 class="text-base md:text-lg text-headline-md sm:text-xl mb-3 sm:mb-4">
                                    Elective Learning Areas
                                </h3>

                                <ul class="space-y-2 sm:space-y-3 font-body-md text-brand-500-variant text-sm sm:text-base">

                                    @foreach (['Supporting people living with dementia', 'Working effectively in aged care', 'Supporting people with disability', 'Promoting community participation and social inclusion', 'Supporting people through a palliative approach'] as $item)
                                        <li class="flex items-start gap-2">
                                            <span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                            {{ $item }}
                                        </li>
                                    @endforeach

                                </ul>

                                <p class="text-xs text-slate-500 mt-5 leading-relaxed">
                                    Elective units and specialisations depend on the training provider's approved course
                                    structure.
                                </p>
                            </div>

                        </div>

                        {{-- Work Placement Information --}}
                        <div
                            class="mt-5 bg-brand-500/5 border border-brand-500/20 rounded-lg p-5 sm:p-6 flex items-start gap-4">

                            <span class="material-symbols-outlined text-brand-500 text-3xl">
                                work_history
                            </span>

                            <div>
                                <h3 class="font-bold text-brand-500 mb-2">
                                    Practical Work Placement
                                </h3>

                                <p class="text-sm sm:text-base text-brand-500-variant leading-relaxed">
                                    Students must complete at least 120 hours of work in a relevant care setting as required
                                    by the qualification's assessment requirements.
                                </p>
                            </div>
                        </div>
                    </section>


                    {{-- Career Outcomes --}}
                    <section class="bg-surface-container p-0 sm:p-8 lg:p-10 rounded" id="outcomes">

                        <div class="flex flex-col md:flex-row gap-8 lg:gap-12">

                            <div class="flex-1">

                                <h2 class="font-headline-lg text-headline-lg text-xl sm:text-2xl lg:text-3xl mb-4 sm:mb-6">
                                    Career Outcomes
                                </h2>

                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 sm:gap-4">

                                    @foreach (['Personal Care Assistant', 'Aged Care Support Worker', 'Disability Support Worker', 'Residential Care Worker', 'Community Support Worker'] as $career)
                                        <div
                                            class="flex items-center gap-3 bg-white p-3 sm:p-4 rounded border border-slate-200">

                                            <span class="material-symbols-outlined text-brand-500">
                                                badge
                                            </span>

                                            <span class="font-label-bold">
                                                {{ $career }}
                                            </span>

                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="md:w-1/3">

                                <img src="{{ asset('frontend-img/' . $course['image']) }}"
                                    alt="{{ $course['title'] ?? 'Certificate III in Individual Support' }}"
                                    class="rounded-lg shadow-lg w-full h-full object-cover">

                            </div>

                        </div>
                    </section>


                    {{-- What You Will Develop --}}
                    <section id="development">

                        <h2 class="text-lg sm:text-xl lg:text-3xl mb-4 sm:mb-6 flex items-center gap-3">
                            <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                            What You Will Develop
                        </h2>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-4">

                            @foreach (['Provide person-centred care and individual support', 'Assist individuals with personal care and daily activities', 'Promote independence, dignity and wellbeing', 'Communicate effectively with clients and care teams', 'Follow workplace health, safety and infection control procedures'] as $skill)
                                <div
                                    class="flex items-center gap-4 bg-white p-4 sm:p-5 lg:p-6 border border-slate-200 rounded">

                                    <div
                                        class="w-10 h-10 rounded-full bg-brand-500/10 flex items-center justify-center shrink-0">

                                        <span class="material-symbols-outlined text-brand-500">
                                            health_and_safety
                                        </span>

                                    </div>

                                    <p class="font-body-md text-brand-500 text-sm sm:text-base">
                                        {{ $skill }}
                                    </p>

                                </div>
                            @endforeach

                        </div>
                    </section>


                    {{-- Industries --}}
                    <section id="industries">

                        <h2 class="text-lg sm:text-xl lg:text-3xl mb-4 sm:mb-6 flex items-center gap-3">
                            <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                            Industries That Value This Qualification
                        </h2>

                        <div class="flex flex-wrap gap-2 sm:gap-3">

                            @foreach (['Aged Care Facilities', 'Residential Care Services', 'Disability Support Organisations', 'Home Care Services', 'Community Care Organisations'] as $industry)
                                <span
                                    class="bg-brand-500/10 px-4 sm:px-6 py-2 sm:py-3 rounded-full font-label-bold text-brand-500 flex items-center gap-2 text-sm">

                                    {{ $industry }}

                                </span>
                            @endforeach

                        </div>
                    </section>


                    {{-- Study Pathways --}}
                    <section id="pathways">

                        <h2 class="text-lg sm:text-xl lg:text-3xl mb-4 sm:mb-6 flex items-center gap-3">
                            <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                            Study Pathways
                        </h2>

                        <div class="space-y-3 sm:space-y-4">

                            @foreach ([
            [
                'title' => 'Certificate IV in Ageing Support',
                'level' => 'Next Level',
            ],
            [
                'title' => 'Certificate IV in Disability Support',
                'level' => 'Next Level',
            ],
            [
                'title' => 'Diploma of Community Services',
                'level' => 'Advanced Level',
            ],
        ] as $pathway)
                                <div
                                    class="bg-white border-l-4 border-brand-500 p-4 sm:p-5 lg:p-6 shadow-sm rounded-r flex flex-col sm:flex-row sm:items-center sm:justify-between gap-3 sm:gap-6">

                                    <div class="flex items-center gap-3 sm:gap-4">

                                        <span class="material-symbols-outlined text-brand-500">
                                            arrow_forward
                                        </span>

                                        <span class="text-base md:text-lg text-headline-md">
                                            {{ $pathway['title'] }}
                                        </span>

                                    </div>

                                    <span class="text-caption font-caption bg-slate-100 px-3 py-1 rounded w-fit">
                                        {{ $pathway['level'] }}
                                    </span>

                                </div>
                            @endforeach

                        </div>
                    </section>

                </div>
                <!-- Right Sticky Sidebar -->
                <aside class="lg:col-span-4">
                    <div class="sticky-sidebar sticky space-y-6">
                        <!-- Quick Apply Form -->
                        <div class="bg-white border border-slate-200 px-2 rounded-lg shadow-sm  overflow-hidden relative">
                            <div class="px-4 py-5">
                                <h3 class="text-base md:text-lg font-bold  mb-1.5 sm:mb-2">Quick Apply</h3>
                                <p class="text-base md:text-lg text-brand-500"> {{ $course['title'] }}</p>
                            </div>
                            <x-course-apply-form :slug="$course['slug']" />
                            <!-- Enrollment Deadline -->
                        </div>
                        <!-- Secondary Actions -->
                        <div class="grid grid-cols-1 gap-4">
                            {{-- <a href="{{ route('download.brochure') }}"
                                class="flex items-center justify-center gap-3 w-full border border-primary-container text-primary-container py-3 rounded font-label-bold text-sm hover:bg-slate-50 transition-colors">
                                <span class="material-symbols-outlined text-sm">download</span>
                                Download Brochure
                            </a> --}}
                            <a href="mailto:info@spectertraining.edu.au"
                                class="flex items-center justify-center gap-3 w-full bg-slate-100 text-brand-500-variant py-3 rounded font-label-bold text-sm hover:bg-slate-200 transition-colors">

                                <span class="material-symbols-outlined text-sm">mail</span>
                                Enquire via Email
                            </a>
                        </div>
                        <div class="mt-8 sm:mt-10 lg:mt-12 pt-8 sm:pt-10 lg:pt-12 border-t border-slate-100 space-y-8">
                            <div class="flex items-center gap-3 mb-6">
                                <span class="w-8 h-1 bg-brand-500 inline-block"></span>
                                <h4 class="font-label-bold text-brand-500-variant uppercase tracking-[0.2em] text-xs">
                                    Related Courses</h4>
                            </div>
                            <div class="grid grid-cols-1 gap-6">
                                @include('frontend.pages.partials.qualification-cards', [
                                    'courses' => $courses,
                                ])
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>


    @include('frontend.pages.partials.eligibility-form')


    <section class="bg-gray-50 py-10 sm:py-12 lg:py-16">
        <div class="max-w-7xl mx-auto px-5 md:px-8">
            <!-- Heading -->
            <div class="text-center md:mb-8 mb-4">
                <h2 class="font-display font-bold text-lg md:text-2xl lg:text-3xl text-primary mb-3">Our Student Stories
                </h2>
                <p class="text-on-surface-variant max-w-xl mx-auto text-sm md:text-base">Hear from our students
                    about their journey and success stories.</p>
            </div>
            @include('frontend.pages.partials.review')

        </div>
    </section>
@endsection
