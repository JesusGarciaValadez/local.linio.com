@extends('layout.app')

@section('title', 'Jesús Antonio García Valadez')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">@lang('section.results')</h1>
            @foreach ($results as $result)
              <p class="card-text">{{ $result }}</p>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
