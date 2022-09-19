@extends('layouts.main')

@section('main')
    {{-- Single Movie page --}}
  <section id="movie-info" class="my-4">
    <div class="container">
      <h2 class="text-center mb-3 text-light">Info | #{{ $movie->id }} - {{ $movie->title }}</h2>
      {{--  --}}
      <div class="card text-center">
        <div class="card-header">
          Titolo Originale: {{ $movie->original_title }}
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $movie->title }}</h5>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum ipsum blanditiis voluptates. Perspiciatis suscipit dolore aspernatur temporibus recusandae, ipsam voluptatibus architecto quasi dolor voluptate? Optio porro odio nemo quisquam possimus.</p>
          <span class="d-block">Nazionalità: <strong>{{ $movie->nationality }}</strong></span>
          <span class="d-block">Voto della critica: <strong>{{ $movie->vote }}</strong></span>
        </div>
        <div class="card-footer text-muted">
          Data: {{ $movie->date }}
          <hr/>
          <div class="mt-3">
            <a class="go-back" href="{{ route('movies.index') }}">Torna alla lista dei Film</a>
          </div>
        </div>
      </div>
    </div>
  </section>   
@endsection