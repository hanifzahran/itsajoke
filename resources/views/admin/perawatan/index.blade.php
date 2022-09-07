@extends("layouts.admin.main",["active"=>"Perawatan"])

@section("content")
<div class="px-[24px]">
    <div class="flex justify-between flex-col md:flex-row ">
        <div>
            <h4 class="h4 text-primary font-semibold">Daftar Perawatan tanaman</h4>
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
                        2
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#27AE60] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center">
                        <a href="/admin/perawatan/detail">
                            <span class="material-symbols-outlined text-primary">
                                play_arrow
                            </span>
                        </a>
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
                        1
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#EB5757] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center">
                        <a href="/admin/perawatan/detail">
                            <span class="material-symbols-outlined text-primary">
                                play_arrow
                            </span>
                        </a>
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
                        10
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#27AE60] rounded-[10px] w-[101px] text-center">
                            Sudah</p>
                    </td>
                    <td class="text-center">
                        <a href="/admin/perawatan/detail">
                            <span class="material-symbols-outlined text-primary">
                                play_arrow
                            </span>
                        </a>
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
                        1
                    </td>
                    <td>
                        <p class="px-4 py-1 font-semibold text-white bg-[#E2B93B] rounded-[10px] w-[101px]  ">Berjalan
                        </p>
                    </td>
                    <td class="text-center">
                        <a href="/admin/perawatan/detail">
                            <span class="material-symbols-outlined text-primary">
                                play_arrow
                            </span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</div>
@endsection