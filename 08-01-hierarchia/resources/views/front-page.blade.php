@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <div class="o-container">
      Strona główna
    </div>
  @endwhile
@endsection
