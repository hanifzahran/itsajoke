@extends("layouts.admin.main",["active"=>"Perawatan"])

@section("content")
<div class="px-[24px]">
    <div class="flex justify-between flex-col md:flex-row ">
        <div>
            <h4 class="h4 text-primary font-semibold">Detail Perawatan tanaman</h4>
        </div>
    </div>
    <div class="mt-8 ">
        <table class="">
            <tr class=" ">
                <td class="text-start text-gray-3 font-md font-semibold p-4">Nama tanaman</td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">: </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start"> Nama penyewa</td>
            </tr>
            <tr class=" ">
                <td class="text-start text-gray-3 font-md font-semibold p-4">Alamat penyewa</td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start ">: </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start truncate">Jl. Taman Anggrek No 16, Cakung,
                    Jakarta Timur RT 01 / RW 02 52181</td>
            </tr>
            <tr class=" ">
                <td class="text-start text-gray-3 font-md font-semibold p-4">Layanan perawatan</td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">: </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">Penyiraman tanaman</td>
            </tr>
            <tr class=" ">
                <td class="text-start text-gray-3 font-md font-semibold p-4">Jumlah perawatan</td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">: </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">2 kali seminggu</td>
            </tr>
            <tr class=" ">
                <td class="text-start text-gray-3 font-md font-semibold p-4">Jumlah perawatan </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">: </td>
                <td class=" text-gray-3 font-md font-semibold p-4 text-start">4 minggu</td>
            </tr>
        </table>
    </div>
    <div class="mt-8 ">
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
    <div class="mt-[40px] overflow-x-auto ">
        <table class="w-full  min-w-[1000px]">
            <thead>
                <tr class="border-b border-gray-5 ">
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Tanggal</td>
                    <td class=" text-gray-4 font-md font-semibold p-4 text-start">Minggu perawatan</td>
                    <td class="text-center text-gray-4 font-md font-semibold p-4">Catatan</td>
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Status</td>
                    <td class="text-center text-gray-4 font-md font-semibold p-4 ">Aksi</td>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        Monstera
                    </td>

                    <td class="p-4 font-bold text-start text-primary">
                        Sutarman P
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        <span class="cursor-pointer hover:opacity-80 open-modal-catatan"
                            data-catatan="catatan 1">Lihat</span>
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#27AE60] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center open-modal-aksi" data-url-submit="{{url("/konfirmasi-tanaman")}}">
                        <span class="material-symbols-outlined text-primary cursor-pointer hover:opacity-80">
                            play_arrow
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        Homalomena
                    </td>

                    <td class="p-4 font-bold text-start text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        <span class="cursor-pointer hover:opacity-80 open-modal-catatan"
                            data-catatan="catatan 2">Lihat</span>
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#EB5757] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center open-modal-aksi" data-url-submit="{{url("/konfirmasi-tanaman")}}">
                        <span class="material-symbols-outlined text-primary cursor-pointer hover:opacity-80">
                            play_arrow
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        Monstera
                    </td>

                    <td class="p-4 font-bold text-start text-primary">
                        Sutarman P
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        <span class="cursor-pointer hover:opacity-80 open-modal-catatan"
                            data-catatan="catatan 3">Lihat</span>
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#27AE60] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center open-modal-aksi" data-url-submit="{{url("/konfirmasi-tanaman")}}">
                        <span class="material-symbols-outlined text-primary cursor-pointer hover:opacity-80">
                            play_arrow
                        </span>
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        Peperomia
                    </td>

                    <td class="p-4 font-bold text-start text-primary">
                        Ahmad Buchori
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        <span class="cursor-pointer hover:opacity-80 open-modal-catatan"
                            data-catatan="catatan 4">Lihat</span>
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#E2B93B] rounded-[10px] w-[101px]  ">Berjalan
                        </p>
                    </td>
                    <td class="text-center open-modal-aksi" data-url-submit="{{url("/konfirmasi-tanaman")}}">
                        <span class="material-symbols-outlined text-primary cursor-pointer hover:opacity-80">
                            play_arrow
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="mt-[40px] hidden" id="modal-aksi">
        <form action="">
            <div class="fixed inset-0 bg-gray-5 bg-opacity-75 transition-opacity"></div>
            <div class="fixed z-10 inset-0 overflow-y-auto ">
                <div class="flex justify-center min-h-full items-center  " id="outside-modal-aksi">
                    <div class="flex-shrink-0 max-w-[517px] w-full  p-2 " id="inside-modal-aksi">
                        <div class="bg-white p-[24px] md:p-[40px] lg:p-[60px] rounded-[10px]">
                            <p class="font-xl text-center font-semibold text-primary">
                                Apakah ingin konfirmasi
                                tanaman sudah dikirim?
                            </p>

                            <div class="grid grid-cols-2 mt-[80px]">
                                <button class="text-center text-[#28B67E] font-bold hover:opacity-80">Ya</button>
                                <button class="text-center text-[#EB5757] font-bold hover:opacity-80" type="button"
                                    id="close-modal-aksi">Batal</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="mt-[40px] hidden" id="modal-catatan">
        <div class="fixed inset-0 bg-gray-5 bg-opacity-75 transition-opacity"></div>
        <div class="fixed z-10 inset-0 overflow-y-auto ">
            <div class="flex justify-center min-h-full items-center  " id="outside-modal-catatan">
                <div class="flex-shrink-0 max-w-[517px] w-full  p-2 " id="inside-modal-catatan">
                    <div class="bg-white p-[24px] rounded-[10px]">
                        <div class="flex justify-between">
                            <div></div>
                            <p class="font-xl-responsive text-center font-semibold text-primary">
                                Catatan
                            </p>
                            <p class="font-xl-responsive text-center font-semibold text-primary">
                                <span class="mi close-modal-catatan cursor-pointer hover:opacity-80"
                                    id="close-modal-catatan">close</span>
                            </p>
                        </div>
                        <div class="px-[24px] mt-[24px]">
                            <p class="font-lg-responsive font-semibold  text-gray-3 " id="text-catatan"></p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section("script")
<script>
    $(function(){
      
        $("#outside-modal-aksi").on('click',function(){
            $("#modal-aksi").addClass("hidden"); 
        })
        
        $(".open-modal-aksi").on('click',function(){
         
            $("#modal-aksi").removeClass("hidden"); 
            $("#modal-aksi").attr("action",$(this).data("url-submit")); 
           

        })

        $("#close-modal-aksi").on('click',function(){
            $("#modal-aksi").addClass("hidden"); 
        })

        $("#inside-modal-aksi").on('click',function(e){
            e.stopPropagation();
        })

        $("#outside-modal-catatan").on('click',function(){
            $("#modal-catatan").addClass("hidden"); 
        })
        
        $(".open-modal-catatan").on('click',function(){
         
            $("#modal-catatan").removeClass("hidden"); 
            $("#modal-catatan").attr("action",$(this).data("url-submit")); 
            $("#text-catatan").text($(this).data("catatan"))

        })

        $("#close-modal-catatan").on('click',function(){
            $("#modal-catatan").addClass("hidden"); 
        })

        $("#inside-modal-catatan").on('click',function(e){
            e.stopPropagation();
        })
    })
</script>
@endsection
@endsection