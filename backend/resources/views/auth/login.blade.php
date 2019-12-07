<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
       
       
    
        <title>Connexion</title>
    
        <!-- vendor css -->
        <link href="../lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../lib/typicons.font/typicons.css" rel="stylesheet">
      
        <!-- azia CSS -->
        <link rel="stylesheet" href="../css/azia.css">
        <style>
          body, html {
            height: 100%;
            margin: 0;
          }
          
          .bg {
            /* The image used */
            background-image: url('img/EL_AMINE.jpg');
          
            /* Full height */
            height: 100%; 
           
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
          }
          </style>
    </head>
    <body class="bg">
    
  
    <div class="row">
      <div class="col-lg-8">
      </div>
      <div class="col-lg-4">
  
    
        <div class="az-signin-wrapper" style="position: absolute;">
            <div class="az-card-signin">
                <h1 class="az-logo"><span>My</span>Espace</h1>
                <div class="az-signin-header">
                    <h2>Connexion</h2>
                    <h4>Veuillez Connecter</h4>
                    
                    <form method="POST" action="{{ route('login') }}">
                      @csrf

                      <div class="form-group row">
                          {{-- <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                          <div class="col-md-12">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>
                      
                    <div class="form-group row">
                      <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                      <div class="col-md-12">
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

                      <div class="col-md-12">
                          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                  </div>
                  <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-2">
                        <button type="submit" class="btn btn-primary col-md-12">
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
                  
<p>Don't have an account?</p>
<a href="register" class="btn btn-success">Inscription via mon Espace</a>

                  </div><!-- az-signin-header -->
   

</div><!-- az-card-signin -->
</div><!-- az-signin-wrapper -->
</div>
</div>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/ionicons/ionicons.js"></script>

<script src="js/azia.js"></script>
</body>
</html>


