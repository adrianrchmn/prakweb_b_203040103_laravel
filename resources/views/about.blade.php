@extends('layouts.main')
    @section('container')

        <div class="container mb-5">
            <div class="row">
                <div class="col text-center mt-5">
                    <div class="card mb-5">
                        <div class="position-relative px-3 py-2">
                            <h1 class="">Halaman About</h1>
                            <h3 class="">{{ $name }}</h3>
                            <p class="">{{ $email }}</p>
                            <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    