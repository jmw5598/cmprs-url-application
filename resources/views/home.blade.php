@extends('layouts.app')

@section('content')

<div class="container">



  <!-- Heading -->
  <h1 class="compress-title">
    <span class="icon">&#8677;</span> Compress <span class="icon">&#8676;</span>
  </h1>

  <!-- Form -->
  <form action="/" method="POST" class="compress-form">
    {{ csrf_field() }}
    @include('common.errors')
    <div class="form-group">
      <input type="text" name="url" id="url" class="form-control" placeholder="Type your lengthy url..." />
      <button role="button" class="btn-compress">&#9654;</button>
    </div>
  </form>

  <!-- Result -->
  @if(!empty($redirect))
    <div class="compress-result">
      <a href="{{ $redirect->base . $redirect->hash }}" target="_blank">{{ $redirect->base . $redirect->hash }}</a>
    </div>
  @endif

</div>

@endsection
