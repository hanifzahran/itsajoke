@extends("layouts.admin.main",["active"=>"Pemesanan"])

@section("content")
<div class="px-[24px]">
    <div class="flex justify-between flex-col md:flex-row ">
        <div>
            <h4 class="h4 text-primary font-semibold">Daftar pesanan</h4>
        </div>
        <div class="mt-8 md:mt-0">
            <div class="flex flex-col md:flex-row md:gap-[18px] md:items-center">
                <h4 class="h5 text-primary font-semibold">Urutkan</h4>
                <select name="" id=""
                    class="text-gray-3 font-xl-responsive block p-2  border border-gray-3 rounded-md focus:ring-0 focus:outline-0">
                    <option value="">Nama tanaman</option>
                    <option value="">Nama penyewa</option>
                    <option value="">Jumlah tanaman</option>
                    <option value="">Status</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mt-[40px] overflow-x-auto ">
        <table class="w-full  min-w-[1000px]">
            <thead>
                <tr class="border-b border-gray-5 ">
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Nama tanaman</td>
                    <td class=" text-gray-4 font-md font-semibold p-4 text-start">Nama penyewa</td>
                    <td class="text-center text-gray-4 font-md font-semibold p-4">Jumlah tanaman</td>
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Status</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr class="border-b border-gray-5 open-modal cursor-pointer hover:bg-gray-5 "
                    data-modal="{{json_encode($product)}}">
                    <td class="p-4 font-bold text-primary">
                        {{$product['nama_tanaman']}}
                    </td>

                    <td class="p-4 font-bold text-start text-primary">
                        {{$product['nama_penyewa']}}
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        {{$product['jumlah_tanaman']}}
                    </td>
                    <td>
                        @if($product['status'] == "Lunas")
                        <p class="px-4 py-1 font-semibold text-white bg-[#27AE60] rounded-[10px] w-[101px] text-center">
                            {{$product['status']}}
                        </p>
                        @else
                        <p class="px-4 py-1 font-semibold text-white bg-[#E2B93B] rounded-[10px] w-[101px] text-center">
                            {{$product['status']}}
                        </p>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-[40px] max-w-[357px]">
        <h5 class="h5 text-primary"> 4 Tanaman sedang menunggu untuk dikirim, yuk lakukan pengiriman</h5>
    </div>
    <div class="mt-[40px] max-w-[357px] ">
        <a href="/admin/pemesanan/daftar-pengiriman"
            class="w-full text-end text-[#28B67E] font-medium flex items-center justify-end ">
            <span>Ke pengiriman</span>
            <span class="mi ml-2 text-[#28B67E]">
                arrow_forward
            </span>
        </a>
    </div>
    <div class="mt-[40px] invisible" id="modal">
        <div class="fixed inset-0 bg-gray-5 bg-opacity-75 transition-opacity"></div>
        <div class="fixed z-10 inset-0 overflow-y-auto ">
            <div class="flex justify-center min-h-full items-center  " id="outside-modal">
                <div class="flex-shrink-0 max-w-[1129px] w-full  p-2 " id="inside-modal">
                    <div class="bg-white  rounded-[10px]">
                        <div class="flex justify-between p-4">
                            <h4
                                class="h5 text-primary font-semibold open-modal cursor-pointer hover:opacity-80 my-3 text-center">
                                Detail pesanan
                            </h4>
                            <span class="mi cursor-pointer hover:opacity-80" id="close-modal">
                                close
                            </span>
                        </div>
                        <div class="p-[24px] md:p-[40px] text-gray-3 ">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-[24px]">
                                <div class="md:border-r border-gray-4">
                                    <h5 class="font-xl-responsive font-medium" id="nama_penyewa">Sutarman P</h5>
                                    <h5 class="font-xl-responsive font-medium mt-[24px]" id="alamat_penyewa">
                                        Jl. Taman Anggrek No 16, Cakung, Jakarta Timur RT 01 / RW 02
                                        52181
                                    </h5>
                                </div>
                                <div>
                                    <div class="flex justify-between">
                                        <h5 class="font-xl-responsive font-medium" id="nama_tanaman">Monstera</h5>
                                        <h5 class="font-xl-responsive font-medium" id="jumlah_item">
                                            2 Item
                                        </h5>
                                    </div>
                                    <div class="flex justify-between mt-[32px]">
                                        <h5 class="font-xl-responsive font-medium">Penumbuh akar tanaman</h5>
                                        <h5 class="font-xl-responsive font-medium">
                                            3 Item
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-[24px] md:p-[40px] text-gray-3 ">
                            <div class=" overflow-y-auto">
                                <div class="min-w-[800px]">
                                    <table class="w-full" cellpadding="5">
                                        <tr class="">
                                            <td class="font-xl-responsive font-medium border-r-2 border-gray-4">Durasi
                                                sewa
                                            </td>
                                            <td class="font-xl-responsive font-medium pl-8">30 hari</td>
                                            <td class="font-xl-responsive font-medium" rowspan="4">
                                                <img src="/core-images/koran.png" alt="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="font-xl-responsive font-medium border-r-2 border-gray-4">Layanan
                                                perawatan </td>
                                            <td class="font-xl-responsive font-medium pl-8">Penyiraman tanaman</td>
                                        </tr>
                                        <tr>
                                            <td class="font-xl-responsive font-medium border-r-2 border-gray-4">Jumlah
                                                perawatan
                                            </td>
                                            <td class="font-xl-responsive font-medium pl-8">2 kali seminggu</td>
                                        </tr>
                                        <tr>
                                            <td class="font-xl-responsive font-medium border-r-2 border-gray-4">Durasi
                                                perawatan
                                            </td>
                                            <td class="font-xl-responsive font-medium pl-8">4 minggu</td>
                                        </tr>
                                        <tr>
                                            <td class="font-xl-responsive font-medium border-r-2 border-gray-4">Total
                                                pembayaran
                                            </td>
                                            <td class="font-xl-responsive font-medium pl-8">Rp 150.000 <span
                                                    class="ml-8 px-4 py-2 text-white bg-[#27AE60] font-md rounded-[10px]">Lunas</span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section("script")
<script>
    $(function()  {
            $("#outside-modal").on('click',function(){
                $("#modal").addClass("invisible"); 
            })
            
            $(".open-modal").on('click',function(){
                $("#modal").removeClass("invisible"); 
                let data = $(this).data("modal");
                console.log(data);
                $("#nama_penyewa").text(data.nama_penyewa)
                $("#alamat_penyewa").text(data.alamat_penyewa)
                $("#jumlah_item").text(data.jumlah_item)
                $("#nama_tanaman").text(data.nama_tanaman)

            })

            $("#close-modal").on('click',function(){
                $("#modal").addClass("invisible"); 
            })

            $("#inside-modal").on('click',function(e){
                e.stopPropagation();
            })
        })
</script>
@endsection
@endsection