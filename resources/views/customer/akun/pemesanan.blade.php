@extends("layouts.customer.main")

@section("content")
<div class="wrapper">
    <div class="container">
        <h3 class="third-heading">Pengaturan Akun</h3>

        <div class="flex w-full mt-[40px] rounded-[10px]" style="box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);">
            <div class="py-[70px] px-[24px] md:px-[64px] border-r border-gray-4 ">
                <div class="flex  items-center">
                    <a href="/akun/pengaturan-akun" class="flex items-center gap-[24px]">
                        <span class="mi  text-gray-3">account_circle</span>
                        <p class="-mt-1 hidden md:block text-gray-3">Akun</p>
                    </a>
                </div>
                <div class="flex gap-[24px] items-center mt-[90px]">
                    <a href="/akun/pemesanan" class="flex items-center gap-[24px]">
                        <span class="mi text-primary">shopping_cart</span>
                        <p class="-mt-1 hidden md:block ">Pemesanan</p>
                    </a>
                </div>
                <div class="flex gap-[24px] items-center mt-[90px]">
                    <a href="" class="flex items-center gap-[24px]">
                        <span class="mi text-gray-3">notifications</span>
                        <p class="-mt-1 hidden md:block text-gray-3">Notifikasi</p>
                    </a>
                </div>
                <div class="flex gap-[24px] items-center mt-[90px]">
                    <a href="" class="flex items-center gap-[24px]">
                        <span class="mi text-gray-3">help</span>
                        <p class="-mt-1 hidden md:block text-gray-3">Bantuan</p>
                    </a>
                </div>
            </div>
            <div class="py-[70px] px-[64px] w-full ">
                <div class="flex justify-between py-[40px] px-[24px] rounded-[10px]  flex-wrap "
                    style="box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);">
                    <div class="flex gap-[24px] items-center flex-wrap">
                        <img src="/example-images/tanaman1.png" alt="" class="w-[75px] aspect-square">
                        <img src="/example-images/perawatan1.png" alt="" class="w-[75px] aspect-square">
                        <img src="/example-images/item1.png" alt="" class="w-[75px] aspect-square">
                        <div>
                            Monstera, Siram Tanaman, Penumbuh Akar Tanaman
                        </div>
                    </div>
                    <div class="mt-[40px] md:mt-0">
                        <p class="font-lg-responsive">
                            Total Belanja :
                        </p>
                        <p class="font-lg-responsive">
                            Rp 120.000
                        </p>
                    </div>
                    <a href="/product/progress-pemesanan" class="mt-[40px] w-full flex justify-end">

                        <button
                            class="button font-md bg-primary  text-white rounded-[10px] py-1 w-full md:max-w-[228px]">
                            Lihat detail
                        </button>

                    </a>
                </div>
                <div class="flex justify-between py-[40px] px-[24px] rounded-[10px] mt-[40px] flex-wrap "
                    style="box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);">
                    <div class="flex gap-[24px] items-center flex-wrap">
                        <img src="/example-images/tanaman1.png" alt="" class="w-[75px] aspect-square">
                        <img src="/example-images/perawatan1.png" alt="" class="w-[75px] aspect-square">
                        <img src="/example-images/item1.png" alt="" class="w-[75px] aspect-square">
                        <div>
                            Monstera, Siram Tanaman, Penumbuh Akar Tanaman
                        </div>
                    </div>
                    <div class="mt-[40px] md:mt-0">
                        <p class="font-lg-responsive">
                            Total Belanja :
                        </p>
                        <p class="font-lg-responsive">
                            Rp 120.000
                        </p>
                    </div>
                    <a href="/product/progress-pemesanan" class="mt-[40px] w-full flex justify-end">

                        <button
                            class="button font-md bg-primary  text-white rounded-[10px] py-1 w-full md:max-w-[228px]">
                            Lihat detail
                        </button>

                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection