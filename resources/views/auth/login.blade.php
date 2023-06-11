@extends('layout.app')

@section('mainContent')
    <div class="row flex-center min-vh-100 py-6">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
            <a class="d-flex flex-center mb-4" href="/">
                <img class="me-2" src="../../../assets/img/icons/spot-illustrations/falcon.png" alt=""
                    width="58" />
                <span class="font-sans-serif fw-bolder fs-5 d-inline-block">AMPSD</span>
            </a>
            <div class="card">
                <div class="card-body p-4 p-sm-5">
                    <div class="row flex-between-center mb-2">
                        <div class="col-12 text-center mb-3">
                            <h4>{{ __('login.LOGIN_TITLE')  }}</h4>
                        </div>
                        {{-- <div class="col-auto fs--1 text-600">
                            <span class="mb-0 undefined">or</span> <span><a href="{{ route('register') }}">Create an
                                    account</a></span>
                        </div> --}}
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <input class="form-control" type="email" name="email" placeholder="{{ __('login.LOGIN_EMAIL')  }}" />
                        </div>
                        <div class="mb-3">
                            <input class="form-control" name="password" type="password" placeholder="{{ __('login.PASSWORD')  }}" />
                        </div>
                        {{-- <div class="row flex-between-center">
                            <div class="col-auto">
                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                        id="basic-checkbox" checked="checked" /><label class="form-check-label mb-0"
                                        for="basic-checkbox">Remember
                                        me</label></div>
                            </div>
                            <div class="col-auto"><a class="fs--1" href="{{ route('password.request') }}">Forgot
                                    Password?</a></div>
                        </div> --}}
                        <div class="mb-3 pt-1"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                                name="submit">{{ __('login.SUBMIT')  }}</button></div>
                    </form>
                    {{-- <div class="position-relative mt-4">
                        <hr />
                        <div class="divider-content-center">or log in with</div>
                    </div>
                    <div class="row g-2 mt-2">
                        <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100"
                                href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span>
                                google</a></div>
                        <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                                    class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection


{{--
<!DOCTYPE html>
<html data-bs-theme="light" lang="en-US" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- ===============================================-->
  <!--    Document Title-->
  <!-- ===============================================-->
  <title>Login</title>

  <!-- ===============================================-->
  <!--    Favicons-->
  <!-- ===============================================-->
  <link rel="apple-touch-icon" sizes="180x180" href="../../../assets/img/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../assets/img/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../assets/img/favicons/favicon-16x16.png">
  <link rel="shortcut icon" type="image/x-icon" href="../../../assets/img/favicons/favicon.ico">
  <link rel="manifest" href="../../../assets/img/favicons/manifest.json">
  <meta name="msapplication-TileImage" content="../../../assets/img/favicons/mstile-150x150.png">
  <meta name="theme-color" content="#ffffff">
  <script src="../../../assets/js/config.js"></script>
  <script src="../../../vendors/simplebar/simplebar.min.js"></script>

  <!-- ===============================================-->
  <!--    Stylesheets-->
  <!-- ===============================================-->
  <link rel="preconnect" href="https://fonts.gstatic.com/">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
  <link href="../../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
  <link href="../../../assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
  <link href="../../../assets/css/theme.min.css" rel="stylesheet" id="style-default">
  <link href="../../../assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
  <link href="../../../assets/css/user.min.css" rel="stylesheet" id="user-style-default">
</head>

<body>
  <!-- ===============================================-->
  <!--    Main Content-->
  <!-- ===============================================-->
  <main class="main" id="top">
    <div class="container-fluid">
      <div class="row min-vh-100 flex-center g-0">
        <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
            src="../../../assets/img/icons/spot-illustrations/bg-shape.png" alt="" width="250"><img
            class="bg-auth-circle-shape-2" src="../../../assets/img/icons/spot-illustrations/shape-1.png" alt=""
            width="150">
          <div class="card overflow-hidden z-1">
            <div class="card-body p-0">
              <div class="row g-0 h-100">
                <div class="col-md-5 text-center bg-card-gradient">
                  <div class="position-relative p-4 pt-md-5 pb-md-7" data-bs-theme="light">
                    <div class="bg-holder bg-auth-card-shape"
                      style="background-image:url(../../../assets/img/icons/spot-illustrations/half-circle.png);"></div>
                    <!--/.bg-holder-->
                    <div class="z-1 position-relative"><a
                        class="link-light mb-4 font-sans-serif fs-4 d-inline-block fw-bolder"
                        href="../../../index.html">falcon</a>
                      <p class="opacity-75 text-white">With the power of Falcon, you can now focus only on functionaries
                        for your digital products, while leaving the UI design on us!</p>
                    </div>
                  </div>
                  <div class="mt-3 mb-4 mt-md-4 mb-md-5" data-bs-theme="light">
                    <p class="text-white">Don't have an account?<br><a class="text-decoration-underline link-light"
                        href="register.html">Get started!</a></p>
                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a
                        class="text-decoration-underline text-white" href="#!">terms</a> and <a
                        class="text-decoration-underline text-white" href="#!">conditions </a></p>
                  </div>
                </div>
                <div class="col-md-7 d-flex flex-center">
                  <div class="p-4 p-md-5 flex-grow-1">
                    <div class="row flex-between-center">
                      <div class="col-auto">
                        <h3>Account Login</h3>
                      </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="mb-3"><label class="form-label" for="card-email">Email address</label>
                        <input
                          class="form-control" id="card-email" name="email" type="email" /></div>
                      <div class="mb-3">
                        <div class="d-flex justify-content-between"><label class="form-label"
                            for="card-password">Password</label></div><input class="form-control" name="password" id="card-password"
                          type="password" />
                      </div>
                      <div class="row flex-between-center">
                        <div class="col-auto">
                          <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                              id="card-checkbox" checked="checked" /><label class="form-check-label mb-0"
                              for="card-checkbox">Remember me</label></div>
                        </div>
                        <div class="col-auto"><a class="fs--1" href="forgot-password.html">Forgot Password?</a></div>
                      </div>
                      <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit"
                          name="submit">Log in</button></div>
                    </form>
                    <div class="position-relative mt-4">
                      <hr />
                      <div class="divider-content-center">or log in with</div>
                    </div>
                    <div class="row g-2 mt-2">
                      <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span
                            class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                      <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span
                            class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main><!-- ===============================================-->
  <!--    End of Main Content-->
  <!-- ===============================================-->

  <!-- ===============================================-->
  <!--    JavaScripts-->
  <!-- ===============================================-->
  <script src="../../../vendors/popper/popper.min.js"></script>
  <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
  <script src="../../../vendors/anchorjs/anchor.min.js"></script>
  <script src="../../../vendors/is/is.min.js"></script>
  <script src="../../../vendors/fontawesome/all.min.js"></script>
  <script src="../../../vendors/lodash/lodash.min.js"></script>
  <script src="../../../../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
  <script src="../../../vendors/list.js/list.min.js"></script>
  <script src="../../../assets/js/theme.js"></script>
</body>

</html> --}}
