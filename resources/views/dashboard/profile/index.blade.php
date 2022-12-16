@extends('dashboard.layouts.main')
    @section('container')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2 text-light">My Profile, {{ auth()->user()->name }}</h1>
    </div>

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer text-light">
            <div class="copyright">
                <p>Copyright © Adrian Rachman </p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

    @endsection