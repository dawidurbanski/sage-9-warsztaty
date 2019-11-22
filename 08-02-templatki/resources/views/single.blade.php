@extends('layouts.app')

@section('content')
  @while (have_posts()) @php the_post() @endphp
    <div class="o-container o-container--narrow">
      <div class="c-single-post">
        <h1 class="c-single-post__title">{{ get_the_title() }}</h1>
        <section class="c-single-post__content">
          {!! get_the_content() !!}
        </section>
      </div>
    </div>
  @endwhile
@endsection
