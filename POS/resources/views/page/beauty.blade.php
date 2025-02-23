@extends('layout.app')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
            <h1 class="text-center text-4xl font-semibold my-10">Beauty Health Products</h1>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQXJSO32ppWDeU_pf1gck0_ZucU9D295lC1TARRepiS8wr_zyVAydZbbAZXBb7Q3UohcHDdSLYFsn0XT2Z9_Ar499OFDbR81cAc2hxXSW7bGY7F_-l48m5dKg&usqp=CAE"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Hand Cream</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 70000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcQ87rBuDpAWuDtPoIEo87wx6-mGl3vGZV1ZkQ5UDzoxc8BeVgsTvp1ai5aeD0H0u3BYAiZqTF8_QLrLRaRM0Q9xg3vWo1Cy-iO-aF-WgY8wx6v-B4KSe5Kw&usqp=CAE"
                        alt="Olive drab green insulated bottle with flared screw lid and flat top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Vaseline</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 30000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRxbmVqrjOReD1f4MmlfvWn-Yln75TBz_zO2sqdVxL5ESCgvNlc4S-n3yeTZBGoZu6SGhGaihPkKX1gRVsTgw1FJHh9NCquEYT_bt3yNqAlSdY92qDq5DMurA&usqp=CAE"
                        alt="Person using a pen to cross a task off a productivity paper card."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">Vitamin D</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 80000</p>
                </a>
                <a href="#" class="group">
                    <img src="https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcSPpHVcJlOy8iTRn06Wv3z_ZrC7DutWo9Orky43AEFJ1SosN2WE4OnDWw0Eag4tTmSR8YKkHaKKgvtopFmiKsoix0BhNhOnlpqL-__XqvQ&usqp=CAE"
                        alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8">
                    <h3 class="mt-4 text-sm text-gray-700">SunScreen</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">Rp. 95000</p>
                </a>

                <!-- More products... -->
            </div>
        </div>
    </div>
@endsection
