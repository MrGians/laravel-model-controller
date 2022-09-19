@extends('layouts.main')

@section('main')
{{-- Best Movies Section --}}
  <section id="best-movies" class="my-4">
    <div class="container">
      <h2 class="text-center mb-3 text-light">Lista dei film più visti su Web Movies</h2>
      {{-- Movies Tier List --}}
      <ol class="list-group list-group-numbered">
        @forelse($movies as $movie)
        <li class="list-group-item d-flex justify-content-between align-items-start">
          {{-- Title & Date --}}
          <div class="ms-2 me-auto">
            <div class="fw-bold">{{ $movie->title }}</div>
            Data: {{ $movie->date }}
          </div>
          {{-- Single Movie Link --}}
          <div class="ms-auto me-5">
            <a class="show-movie" href="{{ route('movies.show', ['id' => $movie->id]) }}">Vai al film!</a>
          </div>
          {{-- Vote --}}
          <span class="badge bg-primary rounded-pill">Voto: {{ $movie->vote }}</span>
        </li>
        @empty
        <li>
          <h4>Nessun film trovato.</h4>
        </li>
        @endforelse
      </ol>
    </div>
  </section>   
@endsection