@extends('layouts.app')

@section('title', $viewData["title"])

@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="row justify-content-center">
  <div class="col-md-6">
    <div class="card">
      <div class="card-header">Website creator</div>
      <div class="card-body">
        <ul class="list-unstyled mb-0">
          <li class="mb-2"><strong>Name:</strong> {{ $viewData["name"] }}</li>
          <li class="mb-2"><strong>Address:</strong> {{ $viewData["address"] }}</li>
          <li><strong>Phone:</strong> {{ $viewData["phone"] }}</li>
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection