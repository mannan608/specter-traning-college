@extends('frontend.layouts.app')

@section('content')
<!-- Breadcrumb -->
<section class="relative bg-cover bg-center bg-no-repeat"
    style="background-image: url('{{ asset('frontend-img/breadcrumb.jpg') }}')">

    <div class="absolute inset-0 bg-black/60"></div>

    <div class="relative max-w-7xl mx-auto px-5 md:px-8 py-16 sm:py-20 lg:py-28">
        
       <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white text-center">
            Contact Us
        </h1>

    </div>
</section>



<!-- Contact Info -->
<section class="py-14 sm:py-20 lg:py-24 bg-white">

    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Heading -->
        <div class="text-center mb-10 sm:mb-14">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                General Contact Information
            </h2>
        </div>


        <!-- Cards -->
       <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 lg:gap-8">

  <!-- Address -->
  <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-blue-100 transition-all duration-300 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="mb-5 relative z-10">
      <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center group-hover:bg-blue-100 transition-colors duration-300">
        <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
      </div>
    </div>
    <h3 class="text-gray-900 font-semibold text-base mb-2 relative z-10">Address</h3>
    <p class="text-gray-500 text-sm leading-7 relative z-10">
      PO Box 683<br>MOOREBANK, NSW, 1875
    </p>
  </div>

  <!-- Phone -->
  <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-emerald-100 transition-all duration-300 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="mb-5 relative z-10">
      <div class="w-12 h-12 bg-emerald-50 rounded-xl flex items-center justify-center group-hover:bg-emerald-100 transition-colors duration-300">
        <svg class="w-6 h-6 text-emerald-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
        </svg>
      </div>
    </div>
    <h3 class="text-gray-900 font-semibold text-base mb-2 relative z-10">Phone</h3>
    <a href="tel:0421661998" class="text-gray-500 text-sm hover:text-emerald-600 transition-colors duration-200 relative z-10 inline-block">
      0421 661 998
    </a>
  </div>

  <!-- Email -->
  <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-violet-100 transition-all duration-300 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-24 h-24 bg-violet-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="mb-5 relative z-10">
      <div class="w-12 h-12 bg-violet-50 rounded-xl flex items-center justify-center group-hover:bg-violet-100 transition-colors duration-300">
        <svg class="w-6 h-6 text-violet-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <rect width="20" height="16" x="2" y="4" rx="2"/>
          <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
        </svg>
      </div>
    </div>
    <h3 class="text-gray-900 font-semibold text-base mb-2 relative z-10">Email</h3>
    <a href="mailto:info@spectertraining.edu.au" class="text-gray-500 text-sm hover:text-violet-600 transition-colors duration-200 relative z-10 inline-block">
      info@spectertraining.edu.au
    </a>
  </div>

  <!-- Office Hours -->
  <div class="group bg-white rounded-2xl p-6 sm:p-8 shadow-sm border border-gray-100 hover:shadow-lg hover:border-amber-100 transition-all duration-300 relative overflow-hidden">
    <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-full -translate-y-1/2 translate-x-1/2 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="mb-5 relative z-10">
      <div class="w-12 h-12 bg-amber-50 rounded-xl flex items-center justify-center group-hover:bg-amber-100 transition-colors duration-300">
        <svg class="w-6 h-6 text-amber-600" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <circle cx="12" cy="12" r="10"/>
          <polyline points="12 6 12 12 16 14"/>
        </svg>
      </div>
    </div>
    <h3 class="text-gray-900 font-semibold text-base mb-2 relative z-10">Office Hours</h3>
    <p class="text-gray-500 text-sm leading-7 relative z-10">
      Mon–Fri: 9 AM – 6 PM<br>
      Saturday: 9 AM – 4 PM
    </p>
  </div>

</div>

    </div>

</section>



<!-- Map Section -->
<section class="pb-14 sm:pb-20 lg:pb-24 bg-white">

    <div class="max-w-7xl mx-auto px-5 md:px-8">

        <!-- Heading -->
        <div class="text-center mb-8 sm:mb-12">
            <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900">
                Other Campus Contacts
            </h2>
        </div>


        <!-- Map -->
        <div class="rounded-2xl overflow-hidden shadow-md border">

           <iframe
    class="w-full h-[300px] sm:h-[400px] lg:h-[500px]"
    src="https://maps.google.com/maps?q=PO%20Box%20683,%20MOOREBANK,%20NSW,%201875&t=&z=13&ie=UTF8&iwloc=&output=embed"
    loading="lazy">
</iframe>

        </div>

    </div>

</section>
@endsection