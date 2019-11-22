@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <div class="o-container o-container--narrow">
      Single
    </div>
  @endwhile
@endsection
