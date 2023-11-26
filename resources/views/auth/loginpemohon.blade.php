<!DOCTYPE html>
<html lang="en">
<head>
  <title>DompetQu</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
  <link rel="shortcut icon" href="{{asset('assets/dompetqu.png')}}" />
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/css/util.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('assets/login-v3/css/main.css')}}">
<!--===============================================================================================-->
  <style type="text/css">
    .merah{
      background: red;
    }
  </style>
</head>
<body>

  <div class="limiter">
    <div class="container-login100" style="background-image: url('assets/login-v3/images/bg-01.jpg');">
      <div class="wrap-login100">
        <form class="login100-form validate-form" autocomplete="off" method="GET" action="{{ url('loginpemohon/auth') }}">
          {{ csrf_field() }}
         <!--  <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span> -->
          {{-- <div class="login100-form-title p-b-34 p-t-27"> --}}
            {{-- <img src="{{asset('assets/atonergi.png')}}" width="256px" height="64px"> --}}
              {{-- <h2>DompetQu</h2>
          </div> --}}

          <span class="login100-form-title p-b-34 p-t-27">
            Login Epic
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter Email">
            <input required="" class="input100" autocomplete="off" value="" type="text" name="email" id="email" placeholder="Email" autofocus="">
            <span class="focus-input100" data-placeholder="&#xf207;"></span>
            @if (session('email'))
              <div class="red"  style="color: red"><b>Email Tidak Ada</b></div>
            @endif
          </div>
          <div class="wrap-input100 validate-input" data-validate="Enter password">
            <input required="" class="input100" autocomplete="off" value="" type="password" name="password" id="password" placeholder="Password">
            <span class="focus-input100" data-placeholder="&#xf191;"></span>
            @if (session('password'))
            <div class="red"  style="color: red"><b>Password Yang Anda Masukan Salah</b></div>
            @endif
          </div>

          {{-- <div class="text-center p-t-90">
             <a class="txt1" href="#">
               Forgot Password?
             </a>
           </div> --}}

          <div class="contact100-form-checkbox text-center">
            {{-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember">
            <label class="label-checkbox100" for="ckb1"> --}}
              Belom punya akun?, <a href="{{url('/registerpemohon')}}" style="color: white;">Register now!</a>
            </label>
          </div>

          <div class="contact100-form-checkbox text-center">
            {{-- <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember"> --}}
            {{-- <label class="label-checkbox100" for="ckb1"> --}}
             <a href="{{url('/forgotpassword')}}" style="color: white;">Lupa password?</a>
            </label>
          </div>

          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn">
              Login
            </button>
          </div>

          <br>

          <!-- Sign In With Google button with HTML data attributes API -->
          <center>
          <div id="g_id_onload"
              data-client_id="971078947082-rk7onu14sv4ti19d85kvd1jedh6jflip.apps.googleusercontent.com"
              data-context="signin"
              data-ux_mode="popup"
              data-callback="handleCredentialResponse"
              data-auto_prompt="false">
          </div>

          <div class="g_id_signin"
              data-type="standard"
              data-shape="rectangular"
              data-theme="outline"
              data-text="signin_with"
              data-size="large"
              data-logo_alignment="left">
          </div>
          </center>

        </form>
      </div>
    </div>
  </div>


  <div id="dropDownSelect1"></div>

<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/bootstrap/js/popper.js')}}"></script>
  <script src="{{asset('assets/login-v3/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('assets/login-v3/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
  <script src="{{asset('assets/login-v3/js/main.js')}}"></script>
  <script src="https://accounts.google.com/gsi/client" async defer ></script>

</body>
</html>
<script type="text/javascript">
  var baseUrl = '{{ url('/') }}';

window.onload = function(e){
$('#username').val(null);
$('#password').val(null);
}

function handleCredentialResponse(obj){ 
    const responsePayload = parseJwt( obj.credential );
    console.log( "OBJECT: " + JSON.stringify( responsePayload ) );
    console.log( "ID: " + responsePayload.sub );
    console.log( 'Full Name: ' + responsePayload.name );
    console.log( 'Given Name: ' + responsePayload.given_name );
    console.log( 'Family Name: ' + responsePayload.family_name );
    console.log( "Image URL: " + responsePayload.picture );
    console.log( "Email: " + responsePayload.email );

    $.ajax({
      url: baseUrl + '/loginGoogle',
      data: {email: responsePayload.email},
      method: "get",
      dataType:'json',
      success:function(data){
        if (data == 1) {
          window.location.href = baseUrl + "/home";
        } else {
          window.location.href = baseUrl + "/registerpemohon?fullname="+responsePayload.name+"&email="+responsePayload.email;
        }
      }
    });
}

function parseJwt( token ) {
    var base64Url = token.split( '.' )[ 1 ];
    var base64 = base64Url.replace( /-/g, '+' ).replace( /_/g, '/' );
    var jsonPayload = decodeURIComponent( atob( base64 ).split( '' ).map( function( c ) {
        return '%' + ( '00' + c.charCodeAt( 0 ).toString( 16 ) ).slice( -2 );
    } ).join( '' ) );

    return JSON.parse( jsonPayload );
};
</script>