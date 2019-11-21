@extends('layouts.app')

@section('content')
  <div class="o-container o-container--narrow">
    @if (! have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, but the page you were trying to view does not exist.', 'sage') }}
      </div>

      {!! get_search_form(false) !!}
    @endif
  </div>
@endsection
