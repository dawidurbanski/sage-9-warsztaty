@extends('layouts.app')

@section('content')
  @posts
    @include('components.featured-destinations')
  @endposts
@endsection
