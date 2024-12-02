<section class="flex flex-col rounded-none">
    <div class="flex flex-col items-center px-20 pt-20 pb-9 w-full bg-white max-md:px-5 max-md:max-w-full">
        <div class="flex flex-col w-full max-w-[1072px] max-md:max-w-full">
            <h2 class="self-center text-4xl font-semibold leading-loose">
                Berita
            </h2>
            <div class="mt-16 max-md:mt-10 max-md:max-w-full">
                <div class="flex gap-5 max-md:flex-col">
                    @foreach ($berita as $b)
                        <article class="flex flex-col w-[33%] max-md:ml-0 max-md:w-full">
                            <div class="flex flex-col px-1.5 pt-1.5 pb-8 mx-auto w-full font-medium bg-white rounded-xl shadow-[0px_4px_4px_rgba(0,0,0,0.25)] max-md:mt-10">
                                <img loading="lazy"
                                    src="{{ Storage::url($b->gambar) }}"
                                    alt="{{ $b->judul }}"
                                    class="object-contain w-full aspect-[1.02]" />
                                <h3 class="mt-4 text-xl text-black w-[270px]">
                                    {{ $b->judul }}
                                </h3>
                                <p class="mt-4 text-base text-slate-500">
                                    {{ Str::limit($b->deskripsi, 50) }} <!-- Batasi deskripsi menjadi 100 karakter -->
                                </p>
                                <a href="{{ route('berita.detail_berita', ['id' => $b->id]) }}"
                                    class="flex gap-3 self-start px-5 py-2.5 mt-6 text-sm leading-7 text-center text-white whitespace-nowrap bg-sky-500 rounded-lg">
                                    <span>Explore</span>
                                    <img loading="lazy"
                                        src="https://cdn.builder.io/api/v1/image/assets/TEMP/61edd8475d05cb06707b1664e9f00132e63db4c4a6c76d42fc23b3ac8432db2b?placeholderIfAbsent=true&apiKey=44c72691d9e444b396339c48bbfbb9c1"
                                        alt=""
                                        class="object-contain shrink-0 my-auto w-3 aspect-[1.2] stroke-[1.5px] stroke-white" />
                                </a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
            <a href="#" class="flex gap-1 self-end mt-9 text-sm font-medium leading-7 text-center text-white">
                <span class="grow">View All</span>
                <img loading="lazy"
                    src="https://cdn.builder.io/api/v1/image/assets/TEMP/61edd8475d05cb06707b1664e9f00132e63db4c4a6c76d42fc23b3ac8432db2b?placeholderIfAbsent=true&apiKey=44c72691d9e444b396339c48bbfbb9c1"
                    alt=""
                    class="object-contain shrink-0 my-auto w-3 aspect-[1.2] stroke-[1.5px] stroke-white" />
            </a>
        </div>
    </div>
</section>
