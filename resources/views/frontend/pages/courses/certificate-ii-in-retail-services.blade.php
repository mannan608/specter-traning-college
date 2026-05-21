@extends('frontend.layouts.app')

@section('content')

    {{-- Hero Section --}}
    <section class="-mt-4">
        <div class="relative overflow-hidden">

            {{-- Background --}}
            <div class="absolute inset-0">
                <img
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7DRrvrvyU6gG3zu1OoJa0eKcBclew-hkiW7KRzYWA9k11jhh5ZyY2eDs55VfW3un8abNaMpHKhtxkIhfIEprKBHJSD5rPdWzDeIIJawl6w6h6oaOZix9sHWrg3p5q_MOnGJ8LJhjQOj2EOy8H3WdOkXDkkgcCudyr1rPLrYSEOdpIyvrzLDs4FGECXeHcCdCFcB-VGsSKyzwtrMJbhYpRy-KmX6_NotI7hAvGJq2_zqGJHbBnxdJXqkR5m9rsyBGwDDv_L2KNFA"
                    alt="Hospitality"
                    class="w-full h-full object-cover">

                <div class="absolute inset-0 bg-black/70"></div>
            </div>

            {{-- Content --}}
            <div class="relative max-w-7xl mx-auto px-5 md:px-8 py-12 sm:py-16 lg:py-24">

                {{-- Badge --}}
                <div class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-md border border-white/20 px-3 py-2 rounded-full mb-5">

                    <span class="material-symbols-outlined text-sm">
                        school
                    </span>

                    <span class="text-xs font-semibold tracking-widest uppercase text-white">
                        SIT40421 Nationally Recognised
                    </span>

                </div>

                {{-- Title --}}
                <h1 class="text-xl sm:text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-tight max-w-4xl mb-6 sm:mb-10">
                    Certificate IV in Hospitality
                </h1>

                {{-- Info Cards --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">

                    {{-- Duration --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-3 flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">
                                schedule
                            </span>
                        </div>

                        <div>
                            <p class="text-white/70 text-xs mb-1">
                                Duration
                            </p>

                            <p class="text-white font-semibold">
                                12 Months
                            </p>
                        </div>

                    </div>

                    {{-- Level --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-3 flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">
                                equalizer
                            </span>
                        </div>

                        <div>
                            <p class="text-white/70 text-xs mb-1">
                                Level
                            </p>

                            <p class="text-white font-semibold">
                                Advanced Skillset
                            </p>
                        </div>

                    </div>

                    {{-- Fees --}}
                    <div class="bg-white/10 backdrop-blur-md border border-white/20 rounded-2xl p-3 flex items-center gap-4">

                        <div class="w-12 h-12 rounded-xl bg-white/10 flex items-center justify-center shrink-0">
                            <span class="material-symbols-outlined">
                                payments
                            </span>
                        </div>

                        <div>
                            <p class="text-white/70 text-xs mb-1">
                                Investment
                            </p>

                            <p class="text-white font-semibold">
                                $2,450.00
                            </p>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>


    {{-- Main Section --}}
    <section>
       <div class="max-w-7xl mx-auto px-8 py-16">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
<!-- Left Content Area -->
<div class="lg:col-span-8 space-y-16">
<!-- Overview Section -->
<section id="overview">
<h2 class="font-headline-lg text-headline-lg mb-6 flex items-center gap-3">
<span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
                            Course Overview
                        </h2>
<div class="prose prose-slate max-w-none">
<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed">
                                The Certificate IV in Hospitality is designed for individuals seeking supervisory or leadership roles in the hospitality industry. This qualification develops operational, leadership, and customer service skills for hotels, restaurants, cafés, and event venues.
                            </p>
</div>
</section>
<!-- Curriculum Bento Grid -->
<section id="curriculum">
<h2 class="font-headline-lg text-headline-lg mb-8 flex items-center gap-3">
<span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
                            Course Structure
                        </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<!-- Core Modules -->
<div class="bg-white border border-slate-200 p-8 rounded shadow-sm hover:shadow-md transition-all">
<span class="material-symbols-outlined text-on-tertiary-container mb-4" style="font-size: 32px;">verified</span>
<h3 class="font-headline-md text-headline-md mb-4">Core Modules</h3>
<ul class="space-y-3 font-body-md text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                        Hospitality operations and service standards
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                        Leadership and team supervision
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                        Workplace safety and compliance
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                        Customer experience management
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">check_circle</span>
                                        Operational planning and problem-solving
                                    </li>
</ul>
</div>
<!-- Electives -->
<div class="bg-slate-50 border border-slate-200 p-8 rounded">
<span class="material-symbols-outlined text-slate-500 mb-4" style="font-size: 32px;">category</span>
<h3 class="font-headline-md text-headline-md mb-4">Electives</h3>
<ul class="space-y-3 font-body-md text-on-surface-variant">
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                        Food and beverage supervision
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                        Event coordination
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                        Rostering and staff scheduling
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                        Financial management basics
                                    </li>
<li class="flex items-start gap-2">
<span class="material-symbols-outlined text-xs mt-1">add_circle_outline</span>
                                        Conflict resolution and communication
                                    </li>
</ul>
</div>
</div>
</section>
<!-- Outcomes Section -->
<section class="bg-surface-container p-10 rounded" id="outcomes">
<div class="flex flex-col md:flex-row gap-12">
<div class="flex-1">
<h2 class="font-headline-lg text-headline-lg mb-6">Career Outcomes</h2>
<p class="font-body-md text-on-surface-variant mb-6">Upon successful completion of this qualification, students are prepared for leadership roles in the global hospitality sector.</p>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
<div class="flex items-center gap-3 bg-white p-4 rounded border border-slate-200">
<span class="material-symbols-outlined text-on-tertiary-container">person_celebrate</span>
<span class="font-label-bold">Hospitality Supervisor</span>
</div>
<div class="flex items-center gap-3 bg-white p-4 rounded border border-slate-200">
<span class="material-symbols-outlined text-on-tertiary-container">restaurant</span>
<span class="font-label-bold">Restaurant Supervisor</span>
</div>
<div class="flex items-center gap-3 bg-white p-4 rounded border border-slate-200">
<span class="material-symbols-outlined text-on-tertiary-container">badge</span>
<span class="font-label-bold">Front Office Supervisor</span>
</div>
<div class="flex items-center gap-3 bg-white p-4 rounded border border-slate-200">
<span class="material-symbols-outlined text-on-tertiary-container">coffee</span>
<span class="font-label-bold">Café Manager</span>
</div>
<div class="flex items-center gap-3 bg-white p-4 rounded border border-slate-200">
<span class="material-symbols-outlined text-on-tertiary-container">groups</span>
<span class="font-label-bold">Team Leader</span>
</div>
</div>
</div>
<div class="md:w-1/3">
<img alt="Hospitality professional in action" class="rounded-lg shadow-lg w-full h-full object-cover" data-alt="professional male manager in a crisp suit standing in a modern luxury hotel lobby, blurred background, warm interior lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbBIEMlEEqMe0sC6KvqTxAyaFamqAN-mswEaNfIEQl3K30Gu_ThLpKe5HtIxY2I5w0Xm0eTBjyc1whn72mktjoT9AEbIVLyQUi2Ciubqv0hgS9Rny6Xaw1iKJ4h0EoTslKXMaYzi2HS5891hSLG_a0rVUH2FDXEIM0wtPKaYNFbammzks12W3GtTOoyRg52fol-jzsnZUuT5wLpbWmZUQep3Zql0zZHwmzez2sVjGZI1j9OFuBGlIUNY09cgX_ChNZeuCRRkxcAQ">
</div>
</div>
</section>
<!-- What You Will Develop -->
<section id="development">
<h2 class="font-headline-lg text-headline-lg mb-6 flex items-center gap-3">
<span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
                            What You Will Develop
                        </h2>
<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
<div class="flex items-center gap-4 bg-white p-6 border border-slate-200 rounded">
<div class="w-10 h-10 rounded-full bg-on-tertiary-container/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-tertiary-container">groups_2</span>
</div>
<p class="font-body-md text-on-surface">Lead hospitality teams effectively</p>
</div>
<div class="flex items-center gap-4 bg-white p-6 border border-slate-200 rounded">
<div class="w-10 h-10 rounded-full bg-on-tertiary-container/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-tertiary-container">customer_service</span>
</div>
<p class="font-body-md text-on-surface">Manage customer service operations</p>
</div>
<div class="flex items-center gap-4 bg-white p-6 border border-slate-200 rounded">
<div class="w-10 h-10 rounded-full bg-on-tertiary-container/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-tertiary-container">psychology</span>
</div>
<p class="font-body-md text-on-surface">Handle workplace challenges professionally</p>
</div>
<div class="flex items-center gap-4 bg-white p-6 border border-slate-200 rounded">
<div class="w-10 h-10 rounded-full bg-on-tertiary-container/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-tertiary-container">assignment</span>
</div>
<p class="font-body-md text-on-surface">Coordinate hospitality activities and staff</p>
</div>
<div class="flex items-center gap-4 bg-white p-6 border border-slate-200 rounded">
<div class="w-10 h-10 rounded-full bg-on-tertiary-container/10 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-tertiary-container">gavel</span>
</div>
<p class="font-body-md text-on-surface">Maintain industry compliance standards</p>
</div>
</div>
</section>
<!-- Industries That Value This Qualification -->
<section id="industries">
<h2 class="font-headline-lg text-headline-lg mb-6 flex items-center gap-3">
<span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
                            Industries That Value This Qualification
                        </h2>
<div class="flex flex-wrap gap-3">
<span class="bg-surface-container-high px-6 py-3 rounded-full font-label-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-sm">hotel</span> Hotels and Resorts
                            </span>
<span class="bg-surface-container-high px-6 py-3 rounded-full font-label-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-sm">restaurant</span> Restaurants and Cafés
                            </span>
<span class="bg-surface-container-high px-6 py-3 rounded-full font-label-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-sm">event</span> Event Management Companies
                            </span>
<span class="bg-surface-container-high px-6 py-3 rounded-full font-label-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-sm">travel_explore</span> Tourism Industry
                            </span>
<span class="bg-surface-container-high px-6 py-3 rounded-full font-label-bold text-on-surface flex items-center gap-2">
<span class="material-symbols-outlined text-sm">flatware</span> Catering Services
                            </span>
</div>
</section>
<!-- Study Pathways -->
<section id="pathways">
<h2 class="font-headline-lg text-headline-lg mb-6 flex items-center gap-3">
<span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
                            Study Pathways
                        </h2>
<div class="space-y-4">
<div class="bg-white border-l-4 border-on-tertiary-container p-6 shadow-sm rounded-r flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-tertiary-container">arrow_forward</span>
<span class="font-headline-md text-headline-md">Diploma of Hospitality Management</span>
</div>
<span class="text-caption font-caption bg-slate-100 px-3 py-1 rounded">Next Level</span>
</div>
<div class="bg-white border-l-4 border-on-tertiary-container p-6 shadow-sm rounded-r flex items-center justify-between">
<div class="flex items-center gap-4">
<span class="material-symbols-outlined text-on-tertiary-container">arrow_forward</span>
<span class="font-headline-md text-headline-md">Advanced Diploma of Hospitality Management</span>
</div>
<span class="text-caption font-caption bg-slate-100 px-3 py-1 rounded">Advanced Level</span>
</div>
</div>
</section>
</div>
<!-- Right Sticky Sidebar -->
<aside class="lg:col-span-4">
<div class="sticky-sidebar sticky space-y-6">
<!-- Quick Apply Form -->
<div class="bg-white border border-slate-200 rounded-lg shadow-sm p-8 overflow-hidden relative">
<div class="absolute top-0 left-0 w-1 h-full bg-on-tertiary-container"></div>
<div class="mb-6">
<h3 class="font-headline-md text-headline-md mb-2">Quick Apply</h3>
<p class="text-caption font-caption text-on-surface-variant">Start your application in under 2 minutes.</p>
</div>
<form class="space-y-4">
<div>
<label class="block text-xs font-label-bold uppercase tracking-wider mb-2 text-on-surface-variant">Full Name</label>
<input class="w-full border border-slate-300 rounded px-4 py-3 focus:border-on-tertiary-container focus:ring-0 transition-colors bg-slate-50" type="text">
</div>
<div>
<label class="block text-xs font-label-bold uppercase tracking-wider mb-2 text-on-surface-variant">Email Address</label>
<input class="w-full border border-slate-300 rounded px-4 py-3 focus:border-on-tertiary-container focus:ring-0 transition-colors bg-slate-50" type="email">
</div>
<div>
<label class="block text-xs font-label-bold uppercase tracking-wider mb-2 text-on-surface-variant">Phone Number</label>
<input class="w-full border border-slate-300 rounded px-4 py-3 focus:border-on-tertiary-container focus:ring-0 transition-colors bg-slate-50" type="tel">
</div>
<button class="w-full bg-on-tertiary-container text-white py-4 rounded font-label-bold uppercase tracking-widest text-sm hover:brightness-110 active:scale-[0.98] transition-all mt-4" type="submit">
                                    Apply Now
                                </button>
</form>
<!-- Enrollment Deadline -->
</div>
<!-- Secondary Actions -->
<div class="grid grid-cols-1 gap-4">
<button class="flex items-center justify-center gap-3 w-full border border-primary-container text-primary-container py-3 rounded font-label-bold hover:bg-slate-50 transition-colors">
<span class="material-symbols-outlined text-sm">download</span>
                                Download Brochure
                            </button>
<button class="flex items-center justify-center gap-3 w-full bg-slate-100 text-on-surface-variant py-3 rounded font-label-bold hover:bg-slate-200 transition-colors">
<span class="material-symbols-outlined text-sm">mail</span>
                                Enquire via Email
                            </button>
</div>
<div class="mt-12 pt-12 border-t border-slate-100 space-y-8">
    <div class="flex items-center gap-3 mb-6">
        <span class="w-8 h-1 bg-on-tertiary-container inline-block"></span>
        <h4 class="font-label-bold text-on-surface-variant uppercase tracking-[0.2em] text-xs">Related Courses</h4>
    </div>
    <div class="grid grid-cols-1 gap-6">
        <!-- Card 1 -->
        <a class="group block bg-white border border-slate-100 rounded-xl overflow-hidden hover:shadow-xl hover:border-on-tertiary-container/30 transition-all duration-300" href="#">
            <div class="relative h-32 bg-slate-100 overflow-hidden">
                <img alt="Hospitality foundations" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC7DRrvrvyU6gG3zu1OoJa0eKcBclew-hkiW7KRzYWA9k11jhh5ZyY2eDs55VfW3un8abNaMpHKhtxkIhfIEprKBHJSD5rPdWzDeIIJawl6w6h6oaOZix9sHWrg3p5q_MOnGJ8LJhjQOj2EOy8H3WdOkXDkkgcCudyr1rPLrYSEOdpIyvrzLDs4FGECXeHcCdCFcB-VGsSKyzwtrMJbhYpRy-KmX6_NotI7hAvGJq2_zqGJHbBnxdJXqkR5m9rsyBGwDDv_L2KNFA">
                <div class="absolute top-3 left-3">
                    <span class="bg-white/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider text-on-tertiary-container shadow-sm">Foundational</span>
                </div>
            </div>
            <div class="p-5">
                <h5 class="font-headline-md text-base mb-3 group-hover:text-on-tertiary-container transition-colors">Certificate II in Hospitality</h5>
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-on-tertiary-container uppercase tracking-wider flex items-center gap-1">
                        View Course
                    </span>
                    <span class="material-symbols-outlined text-on-tertiary-container group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </div>
            </div>
        </a>
        <!-- Card 2 -->
        <a class="group block bg-white border border-slate-100 rounded-xl overflow-hidden hover:shadow-xl hover:border-on-tertiary-container/30 transition-all duration-300" href="#">
            <div class="relative h-32 bg-slate-100 overflow-hidden">
                <img alt="Advanced hospitality skills" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 opacity-90" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAbBIEMlEEqMe0sC6KvqTxAyaFamqAN-mswEaNfIEQl3K30Gu_ThLpKe5HtIxY2I5w0Xm0eTBjyc1whn72mktjoT9AEbIVLyQUi2Ciubqv0hgS9Rny6Xaw1iKJ4h0EoTslKXMaYzi2HS5891hSLG_a0rVUH2FDXEIM0wtPKaYNFbammzks12W3GtTOoyRg52fol-jzsnZUuT5wLpbWmZUQep3Zql0zZHwmzez2sVjGZI1j9OFuBGlIUNY09cgX_ChNZeuCRRkxcAQ">
                <div class="absolute top-3 left-3">
                    <span class="bg-white/90 backdrop-blur px-2 py-1 rounded text-[10px] font-bold uppercase tracking-wider text-on-tertiary-container shadow-sm">Intermediate</span>
                </div>
            </div>
            <div class="p-5">
                <h5 class="font-headline-md text-base mb-3 group-hover:text-on-tertiary-container transition-colors">Certificate III in Hospitality</h5>
                <div class="flex items-center justify-between">
                    <span class="text-xs font-semibold text-on-tertiary-container uppercase tracking-wider flex items-center gap-1">
                        View Course
                    </span>
                    <span class="material-symbols-outlined text-on-tertiary-container group-hover:translate-x-1 transition-transform">arrow_forward</span>
                </div>
            </div>
        </a>
    </div>
</div></div>
</aside>
</div>
</div>
    </section>

@endsection