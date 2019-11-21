@extends('layouts.app')

@section('content')
  <div class="o-container o-container--narrow">
    @if (! have_posts())
      <div class="alert alert-warning">
        {{ __('Sorry, no results were found.', 'sage') }}
      </div>
      {!! get_search_form(false) !!}
    @endif

    @while (have_posts()) @php the_post() @endphp
      @include('partials.content-' . get_post_type())
    @endwhile

    {!! get_the_posts_navigation() !!}
  </div>
@endsection