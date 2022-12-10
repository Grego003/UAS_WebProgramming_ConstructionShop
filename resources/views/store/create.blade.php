@extends('layouts.main')

@section('content')
    <div class="container mt-5">
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert" style="max-width: max-content;">
                <p class="text-center"> ERROR! </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <h2 class="text-center mt-5 mb-5">Welcome Admin <span class="text-danger">{{ $admin->login_code }}</span></h2>
        <h2 class="text-center">Create New Product</h2>
        <div class="row">
            <div class="d-grid gap-2">
                <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#show1"
                    aria-expanded="false" aria-controls="collapseExample">
                    Aluminium
                </button>
                <div class="collapse" id="show1">
                    <div class="card card-body d-flex align-items-center">
                        @include('added.create_aluminium')
                    </div>
                </div>
                <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#show2"
                    aria-expanded="false" aria-controls="collapseExample">
                    Kaca
                </button>
                <div class="collapse" id="show2">
                    <div class="card card-body d-flex align-items-center">
                        @include('added.create_kaca')
                    </div>
                </div>
                <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#show3"
                    aria-expanded="false" aria-controls="collapseExample">
                    Stainless
                </button>
                <div class="collapse" id="show3">
                    <div class="card card-body d-flex align-items-center">
                        @include('added.create_stainless')
                    </div>
                </div>
                <button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#show4"
                    aria-expanded="false" aria-controls="collapseExample">
                    Accessories
                </button>
                <div class="collapse" id="show4">
                    <div class="card card-body d-flex align-items-center">
                        @include('added.create_accesories')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            $('.alert').alert()
        })
    </script>
@endsection
