@extends("layouts.customer.main")

@section("content")

<div class="wrapper" x-data="form()">
    <div class="container">
        <h3 class="third-heading">Progres Pemesanan </h3>
        <p class="font-lg-responsive text-gray-3 mt-[8px]">Cek perjalananmu dalam merawat tanaman</p>
        <div class="flex justify-between py-[40px] px-[24px] rounded-[10px] mt-[54px] flex-wrap "
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
        </div>
        <div class="mt-[40px] flex items-start">
            <div class=" flex flex-col ">
                <div class="flex gap-[50px] items-center">
                    <div class="pesanan-done">1</div>
                    <div>
                        <p>Pembayaran</p>
                        <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p>
                    </div>
                </div>
                <div class="h-[80px] w-[4px] bg-primary ml-[35px]"></div>
                <div class="flex gap-[50px] items-center">
                    <div class="{{$getClassPesanan(2)}}">2</div>
                    <div>
                        <p class="text-primary ">Dikemas</p>
                        <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p>
                    </div>
                </div>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <div class="flex gap-[50px] items-center">
                    <div class="{{$getClassPesanan(3)}}">3</div>
                    <div>
                        <p class=" text-gray-3">Sampai tujuan</p>
                        {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                    </div>
                </div>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <a @if(intval(request()->done == 3)) href="/product/konfirmasi-perawatan" @endif>
                    <div class="flex gap-[50px] items-center">
                        <div class="{{$getClassPesanan(4)}}">4</div>
                        <div>
                            <p class=" text-gray-3">Perawatan minggu 1</p>
                            {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                        </div>
                    </div>
                </a>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <a @if(intval(request()->done == 4)) href="/product/konfirmasi-perawatan" @endif>
                    <div class="flex gap-[50px] items-center">
                        <div class="{{$getClassPesanan(5)}}">5</div>
                        <div>
                            <p class=" text-gray-3">Perawatan minggu 2</p>
                            {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                        </div>
                    </div>
                </a>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <a @if(intval(request()->done == 5)) href="/product/konfirmasi-perawatan" @endif>
                    <div class="flex gap-[50px] items-center">
                        <div class="{{$getClassPesanan(6)}}">6</div>
                        <div>
                            <p class=" text-gray-3">Perawatan minggu 3</p>
                            {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                        </div>
                    </div>
                </a>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <a @if(intval(request()->done == 6)) href="/product/konfirmasi-perawatan" @endif>
                    <div class="flex gap-[50px] items-center">
                        <div class="{{$getClassPesanan(7)}}">7</div>
                        <div>
                            <p class=" text-gray-3">Perawatan minggu 4</p>
                            {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                        </div>
                    </div>
                </a>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <div class="flex gap-[50px] items-center">
                    <div class="{{$getClassPesanan(8)}}">8</div>
                    <div>
                        <p class=" text-gray-3">Proses pengembalian tanaman</p>
                        {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                    </div>
                </div>
                <div class="h-[80px] w-[4px] bg-gray-4 ml-[35px]"></div>
                <div class="flex gap-[50px] items-center">
                    <div class="{{$getClassPesanan(9)}}">9</div>
                    <div>
                        <p class=" text-gray-3">Pengembalian tanaman berhasil diberikan</p>
                        {{-- <p class="font-sm text-gray-3">Senin, 17 Juni 2022 (14:00)</p> --}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection