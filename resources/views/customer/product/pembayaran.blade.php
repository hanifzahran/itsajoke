@extends("layouts.customer.main")

@section("content")
<div class="wrapper">
    <div class="container">
        <h3 class="third-heading">Konfirmasi Pembayaran</h3>
        <div class="w-full  p-[40px] mt-[68px] rounded-[10px]" style="box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.25);">
            <div class="flex flex-col md:flex-row gap-[32px] items-center">
                <div class="">
                    <img src="/core-images/bca.png" alt="">
                </div>
                <div class="font-lg-responsive">
                    <p>Detail Pembayaran</p>
                    <br>
                    <p>BCA </p>
                    <p> 0831524632 a/n PT Setanam Merawat Tanaman</p>
                    <br>
                    <p>Jumlah Nominal : Rp 90.0000</p>
                </div>
            </div>
        </div>

        <div class="flex items-end flex-col gap-[32px] mt-[96px]">
            <button
                class="button font-lg-responsive bg-primary  text-white rounded-[10px] py-[19px] w-full md:w-[511px]">
                Bayar via Cash On Delivery
            </button>
            <button class="button font-lg-responsive bg-orange text-white rounded-[10px] py-[19px] w-full md:w-[511px]">
                Selesai Pembayaran
            </button>

        </div>
    </div>
</div>
@endsection