@extends("layouts.admin.main",["active"=>"Beranda"])

@section("content")
<div class="px-[24px]">



    <div class="flex justify-between flex-col md:flex-row ">
        <div>
            <h4 class="h4 text-primary font-semibold">List Item</h4>
        </div>
        <div class="mt-8 md:mt-0">
            <div class="flex flex-col md:flex-row md:gap-[18px] md:items-center">
                <h4 class="h5 text-primary font-semibold">Urutkan</h4>
                <select name="" id=""
                    class="text-gray-3 font-xl-responsive block p-2  border border-gray-3 rounded-md focus:ring-0 focus:outline-0">
                    <option value="">Nama</option>
                    <option value="">Username</option>
                    <option value="">Email</option>
                </select>
            </div>
        </div>
    </div>
    <div class="mt-[40px] overflow-x-auto ">
        <table class="w-full  min-w-[1000px]">
            <thead>
                <tr class="border-b border-gray-5 ">
                    <td class="text-start text-gray-4 font-md font-semibold p-4">No</td>
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Nama Lengkap</td>
                    <td class=" text-gray-4 font-md font-semibold p-4 text-center">Username</td>
                    <td class="text-center text-gray-4 font-md font-semibold p-4">Email</td>
                    <td class="text-start text-gray-4 font-md font-semibold p-4">Alamat</td>
                </tr>
            </thead>
            <tbody>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        1
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Sutarman P
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        sutarman
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        sutarman@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        2
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        alexn98
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        alexn98@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        3
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        alexn98
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        alexn98@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        4
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        alexn98
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        alexn98@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        5
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        alexn98
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        alexn98@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>
                <tr class="border-b border-gray-5 ">
                    <td class="p-4 font-bold text-primary">
                        6
                    </td>
                    <td class="p-4 font-bold text-primary">
                        Alex Nurdin
                    </td>
                    <td class="p-4 font-bold text-center  text-gray-3">
                        alexn98
                    </td>
                    <td class="p-4 font-bold text-center text-gray-3">
                        alexn98@gmail.com
                    </td>
                    <td class="p-4 font-bold text-start whitespace-nowrap text-gray-3 truncate max-w-[200px]">
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                        Jl. Taman Anggrek no 30,
                    </td>
                </tr>

            </tbody>
        </table>
    </div>

    <div class="mt-[40px] cursor-pointer">
        <div class="flex w-full items-center flex-col">
            <p class="text-gray-3 ">Show More</p>
            <p class="text-gray-3"><span class="mi">expand_more</span></p>
        </div>
    </div>
</div>
@endsection