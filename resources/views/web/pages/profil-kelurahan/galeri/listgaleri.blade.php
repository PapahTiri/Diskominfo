<section>
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h2 class="text-3xl font-bold text-center mb-6">Galeri</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                @foreach ($galeri as $g)
                    <a href="#" class="group">
                        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-h-8 xl:aspect-w-7">
                            <img src="{{ Storage::url($g->gambar) }}" alt="Gambar Galeri" class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
