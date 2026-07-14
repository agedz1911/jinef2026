<footer class="pt-20 text-center text-white relative mt-10">
    <div class="absolute wave block md:hidden lg:block overflow-hidden w-full z-0 left-0 leading-none top-0">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill-opacity="1" d="M0,256L288,64L576,128L864,288L1152,160L1440,0L1440,0L1152,0L864,0L576,0L288,0L0,0Z"></path>
        </svg>
    </div>
    <div class="absolute inset-0 bg-gradient-to-b from-[#9E1F63] to-[#3C3793]/90"></div>
    <div class="relative">
        <div class="flex flex-col items-center w-full max-w-4xl m-auto">

            <img src="assets/images/logo/logo-event.png" class="max-w-xs" alt="Icon" class="">

            <div class="border-b border-white m-auto mb-6 mt-4 w-full max-w-2xl">

                <p class="mb-0 mt-6 font-semibold">Secretariat</p>
                <p>Komplek Duta Merlin Blok C 35-36. <br> Jl. Gajah Mada 3 – 5,
                    Jakarta 10130, Indonesia</p>
                <div class="py-5 mt-3">
                    <ul class="m-0 p-0 flex flex-row gap-5 lg:gap-8 justify-center">
                        <li class="bg-[#9E1F63] rounded-md p-2 w-10 hover:bg-[#3C3793] tooltip-bottom tooltip"
                            data-tip="jinef2026@pharma-pro.com">
                            <a href="mailto:jinef2026@pharma-pro.com" class="">
                                <i class="fa-solid fa-envelope-open-text text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#9E1F63] rounded-md p-2 w-10 hover:bg-[#3C3793] tooltip-bottom tooltip"
                            data-tip="+6221 6386 9502">
                            <a href="tel:+622163869502" class="">
                                <i class="fa fa-phone text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#9E1F63] rounded-md p-2 w-10 hover:bg-[#3C3793] tooltip-bottom tooltip"
                            data-tip="+62 858-9108-7800">
                            <a href="tel:+6285891087800" class="">
                                <i class="fa fa-mobile-screen text-xl"></i>
                            </a>
                        </li>
                        <li class="bg-[#9E1F63] rounded-md p-2 w-10 hover:bg-[#3C3793] tooltip-bottom tooltip"
                            data-tip="+62 858-9108-7800 ">
                            <a href="https://wa.me/+6285891087800" class="">
                                <i class="fa fa-whatsapp text-xl"></i>
                            </a>
                        </li>

                        <li class="bg-[#9E1F63] rounded-md p-2 w-10 hover:bg-[#3C3793] tooltip-bottom tooltip"
                            data-tip="@ig">
                            <a href="javascript:void(0)" class="">
                                <i class="fa fa-instagram text-xl"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="pb-10 mt-4">
                <ul class="p-0 m-0 flex flex-row flex-wrap gap-4 lg:gap-6 justify-center">
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="{{route('organizing-committee')}}">Committee</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="{{route('faculties')}}">Faculties</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="{{route('program-at-glance')}}">Schedule</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="{{route('registration')}}">Registration</a></li>
                    <li class="text-sm font-normal hover:text-[#b9608d] hover:underline"><a href="{{route('submission')}}">Submission</a></li>
                    </li>
                </ul>
            </div>
        </div>
        <div class="pb-6 pt-1 mt-5">
            <p class="text-xs">MIS - IT Pharma-Pro © {{ now()->year }}</p>
        </div>
    </div>
</footer>