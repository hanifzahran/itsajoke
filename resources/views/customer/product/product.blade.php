@extends("layouts.customer.main")

@section("content")
<div class="wrapper">
    <div class="container">
        <div class="flex justify-between items-center gap-[18px] bg-gray-400">
            <div>
                <div class="xl:hidden">
                    <span class="invisible md:hidden">ignore</span>
                    <x-modal>
                        <x-slot name="trigger">
                            <button x-on:click="show=true"
                                class="btn cursor-pointer hover:opaciry-90 flex items-center gap-[12px] border border-gray-4 text-gray-3 p-2 rounded-md font-xl-responsive">
                                <span>Filter</span>
                                <span class="mi">
                                    menu
                                </span>
                            </button>
                        </x-slot>
                        <x-slot name="content">

                            <div class=" bg-white  w-full ">
                                <div class="flex justify-end p-4 cursor-pointer" x-on:click="show=false"><span
                                        class="mi">close</span>
                                </div>
                                <div class="p-12">

                                    <x-layout.sidebar></x-layout.sidebar>
                                </div>
                            </div>
                        </x-slot>
                    </x-modal>
                </div>
            </div>
            <div>
                <div class="flex flex-col md:flex-row md:gap-[18px] md:items-center">
                    <p class="font-xl-responsive text-gray-3 items-center">
                        Urutkan
                    </p>
                    <select name="" id=""
                        class="text-gray-3 font-xl-responsive block p-2  border border-gray-3 rounded-md focus:ring-0 focus:outline-0">
                        <option value="">Terbaru</option>
                        <option value="">Harga Tertinggi</option>
                        <option value="">Harga Terendah</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="flex gap-[40px] 2xl:gap-[96px] mt-[48px]">
            <div class="w-[252px]  flex-shrink-0 hidden xl:block">
                <x-layout.sidebar></x-layout.sidebar>
            </div>
            <div class=" w-full  ">
                <div class=" grid grid-cols-2 md:grid-cols-3 gap-[12px] md:gap-[60px]">
                    <x-product_card images="/example-images/tanaman1.png" title="Detail tanaman" harga="Rp 10.000"
                        link="/product/detail-tanaman" />

                    <x-product_card images="/example-images/perawatan1.png" title="Detail layanan perawatan"
                        harga="Rp 5.000" link="/product/detail-layanan" />

                    <x-product_card images="/example-images/item1.png" title="Detail item perawatan" harga="Rp 10.000"
                        link="/product/detail-item" />

                    <x-product_card images="/example-images/tanaman1.png" title="Tata media tanam" harga="Rp 5.000"
                        link="/product/detail/1" />

                    <x-product_card images="/example-images/tesl.jpg" title="Siram tanaman" harga="Rp 10.000"
                        link="/product/detail/1" />

                    <x-product_card images="/example-images/tanaman1.png" title="Tata media tanam" harga="Rp 5.000"
                        link="/product/detail/1" />

                    <x-product_card images="/example-images/tesl.jpg" title="Siram tanaman" harga="Rp 10.000"
                        link="/product/detail/1" />

                    <x-product_card images="/example-images/tanaman1.png" title="Tata media tanam" harga="Rp 5.000"
                        link="/product/detail/1" />

                </div>
            </div>
        </div>
    </div>
</div>


@section("script")
<script>
    function reloadPage(e){
       let filter = e.getAttribute("data-filter");
       const params = new URLSearchParams(window.location.search);
       console.log(filter);
    
        let kategori = params.get('kategori');
        let harga = params.get('harga');
        let lokasi = params.get('lokasi');
        let cahaya = params.get('cahaya');
        if( filter.split("=")[0] === "kategori" ){
            kategori = filter.split("=")[1]
        }else if (filter.split("=")[0] === "harga" ) {
            harga = filter.split("=")[1]
        }else if (filter.split("=")[0] === "lokasi" ) {
            lokasi = filter.split("=")[1]
        }else if (filter.split("=")[0] === "cahaya" ) {
            cahaya = filter.split("=")[1]
        }

        let newurl =window.location.origin;
        location.href = `?kategori=${kategori}&harga=${harga}&lokasi=${lokasi}&cahaya=${cahaya}`
    }
</script>
@endsection
@endsection