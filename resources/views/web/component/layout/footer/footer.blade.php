<footer class="flex flex-col bg-indigo-900 px-16 pt-11 pb-6 w-full max-md:px-5 max-md:max-w-full">
    <div class="w-full max-md:max-w-full">
      <div class="flex gap-5 max-md:flex-col">
        <section class="flex flex-col w-[32%] max-md:ml-0 max-md:w-full">
          <div class="flex flex-col items-start w-full min-h-[302px] max-md:mt-10">
            <div class="flex gap-2.5 items-center text-xl leading-loose text-white whitespace-nowrap">
              <img loading="lazy" src="{{ Storage::url($profil_kelurahan->logo_kelurahan) }}" alt="" class="object-contain shrink-0 self-stretch my-auto w-16 aspect-[0.77]" />
              <h2 class="flex gap-2 items-center self-stretch my-auto">Kedungmundu</h2>
            </div>
            <p class="self-stretch mt-4 text-sm leading-6 text-gray-300">
              Pemerintah Kelurahan Kedungmundu, yang dipimpin oleh Lurahnya, berkomitmen untuk mendorong pengembangan holistik wilayah yang dikenal dengan pemandangannya yang indah dan. Baca Selengkapnya.
            </p>
            {{-- <img loading="lazy" src="" alt="Kedungmundu logo" class="object-contain mt-4 max-w-full rounded-none aspect-[5.99] w-[180px]" /> --}}
          </div>
        </section>
        <div class="flex flex-col ml-5 w-[68%] max-md:ml-0 max-md:w-full">
          <div class="self-stretch my-auto max-md:mt-10 max-md:max-w-full">
            <div class="flex gap-5 max-md:flex-col">
              <nav class="flex flex-col w-[22%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow items-start text-base text-stone-300 max-md:mt-10">
                  <h3 class="self-stretch text-xl font-semibold text-white max-md:mr-1.5">Legal Notice</h3>
                  <div class="shrink-0 mt-2.5 h-px border border-white border-solid w-[63px]"></div>
                  <ul class="self-stretch mt-5 space-y-5">
                    <li><a href="#" class="text-lg font-medium text-white">Semarangkota</a></li>
                    <li><a href="#" class="text-stone-300">SmartCity</a></li>
                    <li><a href="#" class="text-stone-300">Satu Data</a></li>
                    <li><a href="#" class="text-stone-300">PPID</a></li>
                  </ul>
                </div>
              </nav>
              <nav class="flex flex-col ml-5 w-[21%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col grow items-start text-base text-stone-300 max-md:mt-10">
                  <h3 class="self-stretch text-xl font-semibold text-white">Useful Links</h3>
                  <div class="shrink-0 mt-2.5 h-px border border-white border-solid w-[63px]"></div>
                  <ul class="mt-5 space-y-5">
                    <li><a href="{{ route('beranda') }}" class="text-stone-300">Beranda</a></li>
                    <li><a href="#" class="text-stone-300">Site Map</a></li>
                    <li><a href="#" class="text-stone-300">FAQ's Page</a></li>
                    <li><a href="#" class="text-stone-300">Contact Us</a></li>
                  </ul>
                </div>
              </nav>
              <section class="flex flex-col ml-5 w-[57%] max-md:ml-0 max-md:w-full">
                <div class="flex flex-col items-start w-full text-base text-stone-300 max-md:mt-10">
                  <h3 class="text-xl font-semibold text-white">Contact</h3>
                  <div class="shrink-0 mt-2.5 h-px border border-white border-solid w-[63px]"></div>
                  <ul class="mt-5 space-y-5 w-full">
                    <li class="flex gap-3">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/636229a5c7f85c810c475a7f9960f2d11c7087b83421f9e4768114a5cf06cc23?placeholderIfAbsent=true&apiKey=44c72691d9e444b396339c48bbfbb9c1" alt="" class="object-contain shrink-0 w-5 aspect-square" />
                      <a href="tel:0246722760" class="basis-auto">024 6722760</a>
                    </li>
                    <li class="flex gap-3 self-stretch whitespace-nowrap">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/4ee20d6f5cdcf0e7e50fb958bd1fcc63595bff679a57fff9eecb3ec2885bbd19?placeholderIfAbsent=true&apiKey=44c72691d9e444b396339c48bbfbb9c1" alt="" class="object-contain shrink-0 w-5 aspect-square" />
                      <a href="mailto:kelkedungmundu@semarangkota.go.id" class="flex-auto w-[297px]">kelkedungmundu@semarangkota.go.id</a>
                    </li>
                    <li class="flex gap-3">
                      <img loading="lazy" src="https://cdn.builder.io/api/v1/image/assets/TEMP/ac712409bad4897a22c1147071ce0a144fbd3901860a2bb1dc91b4c7ce48537d?placeholderIfAbsent=true&apiKey=44c72691d9e444b396339c48bbfbb9c1" alt="" class="object-contain shrink-0 w-5 aspect-square" />
                      <address class="basis-auto not-italic">Jl. Kedungmundu Raya</address>
                    </li>
                  </ul>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
    <p class="self-center text-base tracking-tight text-center text-white max-md:max-w-full">
      <span class="leading-5">Copyright by</span> Kelurahan Kedungmundu <span class="leading-5">@ 2024. All rights reserved</span>
    </p>

</footer>