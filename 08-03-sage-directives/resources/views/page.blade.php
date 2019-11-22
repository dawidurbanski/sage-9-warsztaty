@extends('layouts.app')

@section('content')
  @posts
    <div class="o-container o-container--narrow">
      <div class="c-single-post">
        <h1 class="c-single-post__title">@title</h1>
        <section class="c-single-post__content">
          @content
        </section>
      </div>
    </div>
  @endposts
@endsection
