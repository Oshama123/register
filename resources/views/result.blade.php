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
        <div class="container-form d-flex flex-column justify-content-center">
            <div class="wrap-form">
                <div class="form-logo m-b-5">
                    <img src="https://mudaschool.incomso.com/img/logo/logomark.png">
                </div>
                <span class="form-title">Hasil Para Pendaftar</span>

                <form action="form validate-form" method="get">
                    <div class="desc">
                        <p>Berikut Adalah Data Pendaftar Hubungan Damai Indonesia Jepang</p>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th style="
                                width: 40px;">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No. HP</th>
                                <th>Pekerjaan</th>
                                <th>Sumber Informasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendaftars as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->jobs }}</td>
                                    <td>
                                        {{ $item->instagram == 1 ? 'instagram' : '' }}
                                        {{ $item->website == 1 ? 'website' : '' }}
                                        {{ $item->perusahaan == 1 ? 'perusaaan' : '' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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
