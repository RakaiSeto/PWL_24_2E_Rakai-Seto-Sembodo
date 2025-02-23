@extends('layout.app')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="text-center text-4xl font-semibold my-10">Food Beverage Products</h1>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQv5cx3xjedBizQfvYlg68ynX4f_d_M0j9b3OeMuphhSWTXGLTr3RdQ7egQzzPuXO325ZfuYr3oCzFpv0x26TgoU-gSdNhLR39FFPQ87D_ozuEHBoPn5-nO&usqp=CAE"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Malkist</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 9000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTUSgUv30OKUGufU_YKmkekcLCFe8vSUjInYJcvKPsMSse4M2zBdl-cw-2PJgH8pFS0Pk0RRq0-SxaFgjP-6WB3fn9UQwIRqzQ0AwlE5yw6WNHT7D27HRXs&usqp=CAE"
                        alt="Olive drab green insulated bottle with flared screw lid and flat top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Coca Cola</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 6000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcS4xGJVZ9EtzMgQfMskKZWTDlZf2cvKoCagK3wiQ0qlbOqUz03ZrN62SuXLhENUAr6bq-vF6MfeacRPAVch2-07bp9pV7cdvVTJCXINkd5yMTVeAQOuU3op&usqp=CAE"
                        alt="Person using a pen to cross a task off a productivity paper card."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">KinderJoy</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 15000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcTq4SU4wjrnPC4Ar_6XDzhMMZyVpaQ0BywOt9UA_MjFQYGRmZ3IITTh1G3-dL9ENAyUAzAVZTE0rORLt_1nkV96Ee_4f4A7&usqp=CAE"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">L-Men</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 95000</p>
                </a>

                <!-- More products... -->
            </div>
        </div>
    </div>
@endsection
