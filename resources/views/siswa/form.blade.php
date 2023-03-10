
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPP - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/sbdua')}}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/sbdua')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9 d-flex justify-content-md-center"  style="width: 500px">

                <div class="card o-hidden border-0 shadow-lg my-5"  style="width: 500px">
                    <div class="card-body p-0"  style="width: 500px">
                        <!-- Nested Row within Card Body -->
                        <div class="row d-flex justify-content-md-center" style="width: 500px">
                            <div class="col-lg-12 ">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login SPP - Siswa</h1>
                                        {{-- @if (session()->has('error'))
                                        <div class="alert">
                                            {{ session('error') }}
                                        </div>
                                        @endif --}}
                                    </div>
                                    <form class="user" action="{{ route('siswa.login') }}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="nisn"
                                                placeholder="Input Nisn..." value="{{ old('nisn') }}">
                                                @error('nisn')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                                @error('nisn')
                                                <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/sbdua') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('admin/sbdua') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/sbdua') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/sbdua') }}/js/sb-admin-2.min.js"></script>

</body>

</html>
