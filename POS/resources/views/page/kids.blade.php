@extends('layout.app')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="text-center text-4xl font-semibold my-10">Kids Products</h1>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2022/9/29/70176b5b-1aea-4354-94f2-dd117916a89c.jpg"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Botol Bayi</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 150000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://contents.mediadecathlon.com/p2606798/k$67ad9a88845032fbaa0aef1e501870ec/bola-sepak-anak-kipsta-first-kick-size-5-usia-hingga-12-tahun-kuning-kipsta-8676298.jpg?f=1920x0&format=auto"
                        alt="Olive drab green insulated bottle with flared screw lid and flat top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Bola Sepak</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 30000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//106/MTA-6836569/titi_oil_pastels_-_krayon_-_crayon_titi_36_warna_full02_ug5baqvo.jpg"
                        alt="Person using a pen to cross a task off a productivity paper card."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Krayon</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 76000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://down-id.img.susercontent.com/file/id-11134207-7r98z-lyj71mi0b1280f"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Pensil Mekanik</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 25000</p>
                </a>

                <!-- More products... -->
            </div>
        </div>
    </div>
@endsection
