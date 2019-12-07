

<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
      
    
        <title>Inscription</title>
    
        <!-- vendor css -->
        <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
        <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    
        <!-- azia CSS -->
        <link rel="stylesheet" href="css/azia.css">
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
    <body class="body bg">
    
  
    <div class="row">
      <div class="col-lg-8">
      </div>
      <div class="col-lg-4">
  
    
        <div class="az-signin-wrapper">
            <div class="az-card-signin">
              
                  <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
          @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
                      
                        <div class="form-group">
          <label for="name">username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
          @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
                     
                            <div class="form-group">
          <label for="email">Email</label>
          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
          @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>

        <div class="form-group">
          <label for="photo">photo</label>
          <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{ old('photo') }}" required autocomplete="photo" autofocus>
         
        </div>
                      

                        <div class="form-group">
          <label for="password">password</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
                       

                        <div class="form-group">
          <label for="password-confirm">password confirm</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
         
        </div>
                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-2">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
    
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

