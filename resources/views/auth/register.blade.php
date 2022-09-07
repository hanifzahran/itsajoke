<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{url('/css/app.css')}}">
    <link rel="stylesheet" href="{{url('/css/custom.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/core-images/logo-small.png">
    <title>Setanam</title>
</head>

<body class="font-default">

    <main>
        <div class=" min-h-screen min-w-screen w-full h-full flex items-center justify-between ">
            <div class=" w-full  h-full bg-[url('/core-images/register.png')] bg-no-repeat hidden md:block">
                <div class="h-screen w-full"> </div>
            </div>
            <div class="w-full  px-[70px]  ">


                <div class="mt-[40px] ">
                    <h1 class="h4 font-medium md:h3  md:font-medium text-start">Register</h1>
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <label for="" class="text-gray-2 text-lg">Nama Lengkap</label>
                    <input
                        class="rounded-[10px] border border-gray-4 text-lg p-2 mt-2 focus:outline-none hover:border-warning w-full" />
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <label for="" class="text-gray-2 text-lg">Username</label>
                    <input
                        class="rounded-[10px] border border-gray-4  text-lg p-2 mt-2 focus:outline-none hover:border-warning w-full" />
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <label for="" class="text-gray-2 text-lg">Password</label>
                    <input type="password"
                        class="rounded-[10px] border border-gray-4  text-lg p-2 mt-2 focus:outline-none hover:border-warning w-full" />
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <label for="" class="text-gray-2 text-lg">Email</label>
                    <input type="email"
                        class="rounded-[10px] border border-gray-4  text-lg p-2 mt-2 focus:outline-none hover:border-warning w-full" />
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <label for="" class="text-gray-2 text-lg">Alamat</label>
                    <input type="email"
                        class="rounded-[10px] border border-gray-4  text-lg p-2 mt-2 focus:outline-none hover:border-warning w-full" />
                </div>
                <div class="mt-[40px] w-full flex-shrink-0">
                    <button class="button font-lg-responsive bg-primary  text-white rounded-[10px] py-[10px] w-full ">
                        Register
                    </button>
                </div>

                <div class="mt-[40px] w-full flex justify-center ">
                    <p class="mr-[24px]">Sudah Punya Akun?</p> <a href="/login" class="text-orange">Login</a>
                </div>
            </div>
        </div>
    </main>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

    @yield("script")
</body>

</html>