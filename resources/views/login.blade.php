@extends('pagelogin')
@section('pagelogin')

    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center auth px-0">
                    <div class="row w-100 mx-0">
                        <div class="col-lg-4 mx-auto">
                            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                                <div class="brand-logo">
                                    <img src="{{ asset('') }}../../../../images/logosuper.png.png" alt="logo">
                                </div>
                                <h4>Hello! let's get started</h4>
                                <h6 class="font-weight-light">Sign in to continue.</h6>
                                @if ($errors->any())
                                    <ul>
                                        @foreach ($errors->all() as $item)
                                            <li>{{ $item }}</li>
                                        @endforeach
                                    </ul>
                                @endif

                                <form class="pt-3" method="POST" action="">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-lg" id="exampleInputEmail1"
                                            placeholder="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-lg"
                                            id="exampleInputPassword1" placeholder="Password" name="password">
                                    </div>
                                    <div class="my-3">
                                        <button class="btn btn-block btn-dark btn-lg font-weight-medium auth-form-btn"
                                            name="submit">LOGIN</button>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="../../../../vendors/js/vendor.bundle.base.js"></script>
        <!-- endinject -->
        <!-- Plugin js for this page -->
        <!-- End plugin js for this page -->
        <!-- inject:js -->
        <script src="../../../../js/off-canvas.js"></script>
        <script src="../../../../js/hoverable-collapse.js"></script>
        <script src="../../../../js/template.js"></script>
        <script src="../../../../js/settings.js"></script>
        <script src="../../../../js/todolist.js"></script>
        <!-- endinject -->
    </body>
