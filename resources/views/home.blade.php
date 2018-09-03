@extends('layouts.app')

@section('content')

<div class="container">

  <!-- Heading -->
  <h1 class="compress-title">
    <span class="icon">&#8677;</span> Compress <span class="icon">&#8676;</span>
  </h1>

  <!-- Form -->
  <form class="compress-form">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Type your lengthy url..." />
      <button role="button" class="btn-compress">&rarr;</button>
    </div>
  </form>

  <!-- Result -->
  <div class="compress-result">
    http://cmprs.xyz/593f4a68
  </div>


</div>

@endsection
