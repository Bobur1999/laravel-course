<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Kirish</title>
    
    <link rel="icon" href="/img/Fevicon.png" type="image/png">
    <link rel="stylesheet" href="/vendors/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/vendors/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="/vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="/vendors/Magnific-Popup/magnific-popup.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    
                    <div class="card-header">
                        {{ __('Login') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <script src="/vendors/jquery/jquery-3.2.1.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/vendors/nice-select/jquery.nice-select.min.js"></script>
    <script src="/vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
    <script src="/js/jquery.ajaxchimp.min.js"></script>
    <script src="/js/mail-script.js"></script>
    <script src="/js/main.js"></script>
</body>
</html>
