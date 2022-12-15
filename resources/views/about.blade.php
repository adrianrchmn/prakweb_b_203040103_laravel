<!DOCTYPE html>
<html lang="en">
@extends('layouts.main')

@section('container')
    <div class="container mb-5 text-center">
            <div class="row">
                <div class="col">
                    <div class="card mb-5">
                        <div class="position-relative px-3 py-2" style="background-color: rgba(255, 255, 255, 0.2)">
                            <h1 >Halaman About</h1>
                            <h3 >{{ $name }}</h3>
                            <img src="img/{{ $image }}" alt="{{ $name }}" width="200" class="img-thumbnail rounded-circle">
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection