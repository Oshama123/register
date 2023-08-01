<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Form</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- Favicons --}}
    <link href={{ asset('assets/img/logo/logo.png') }} rel="icon">
    <link href={{ asset('assets/img/logo/logo.png') }} rel="apple-touch-icon">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    {{-- Vendor CSS Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    {{-- mains css --}}
    <link rel="stylesheet" href={{ asset('assets/css/style.css') }}>


</head>

<body>

    <div class="main">
        <!-- Container Fluid-->
        <div class="container-form ">
            <div class="wrap-form">
                <form class="form validate-form" method="post"action="{{ route('submit') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="wrMDSP2ok13G8RSVdIUKLwv4mwY32vbplQnopNji">
                    <div class="form-logo m-b-5">
                        <img src="https://mudaschool.incomso.com/img/logo/logomark.png">
                    </div>
                    <span class="form-title">Pendaftaran</span>
                    <span class="form-subtitle p-b-27">Pendaftaran Kegiatan MUDA</span>

                    <div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Nama Lengkap Anda">
                        <input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Email">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Nomor Whatsapp Anda">
                        <input class="input100" type="number" name="phone" placeholder="Nomor Whatsapp">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-input100 validate-input m-b-20" data-validate="Masukkan Pekerjaan">
                        <input class="input100" type="text" name="jobs" placeholder="Pekerjaan">
                        <span class="focus-input100"></span>
                    </div>
                    <div class="wrap-checkbox validate-checkbox m-b-20" data-validate="Masukkan Pekerjaan">
                        <input type="checkbox" name="checkbox1">
                        <label for="checkbox1"> Instagram</label><br>
                        <input type="checkbox" name="checkbox2">
                        <label for="checkbox2"> Website</label><br>
                        <input type="checkbox" name="checkbox3">
                        <label for="checkbox3"> Perusahaan</label><br>
                    </div>

                    <div class="container-form-btn">
                        <a href="/submit">
                            <button class="login-form-btn">Submit</button>
                        </a>
                    </div>
                </form>
            </div>
            <!--Row-->
        </div>
    </div>

    {{-- Vendor JS Link --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>

    {{-- main js --}}
    <script src={{ asset('assets/js/main.js') }}></script>
</body>

</html>
