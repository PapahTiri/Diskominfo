<section class="bg-indigo-900 text-white text-sm font-medium leading-loose rounded-none">
    <div class="container flex flex-col justify-center items-start px-16 py-2.5 w-full max-md:px-5 max-md:max-w-full">
        <div class="flex gap-8">
            <div class="flex gap-1 items-center">
                <span class="flex shrink-0 bg-white rounded-md h-[25px] w-[25px] justify-center items-center border" aria-hidden="true">
                    <i class="fas fa-phone-alt text-black"></i>
                </span>
                <a class="hover:underline">{{ $profil_kelurahan->nomor_telepon }}</a>
            </div>
            <div class="flex flex-auto gap-1 items-center whitespace-nowrap">
                <span class="flex shrink-0 bg-white rounded-md h-[25px] w-[25px] justify-center items-center border" aria-hidden="true">
                    <i class="fas fa-envelope text-black"></i>
                </span>
                <a class="hover:underline basis-auto">{{ $profil_kelurahan->email }}</a>
            </div>
        </div>
    </div>
</section>
