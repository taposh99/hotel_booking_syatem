@extends('admin.layouts.master')

@section('content')
    <!-- Error -->
<div class="container-xxl container-p-y text-center">
    <div class="misc-wrapper">
      <h2 class="mb-2 mx-2">Under Maintenance!😖</h2>
      <p class="mb-4 mx-2">Sorry for the inconvenience but we're performing some maintenance at the moment.</p>
      <a href="{{ route('dashboard') }}" class="btn btn-primary">Back to home</a>
      <div class="mt-3">
        <img src="{{ asset('admin/assets/img/error/error.png') }}" alt="page-misc-error-light" width="500" class="img-fluid">
      </div>
    </div>
  </div>
  <!-- /Error -->
@endsection