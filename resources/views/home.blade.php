@extends("layout.master")
@section("title","Home")

@section("content")
    @include("layout.header")
    @include('layout.overView')
    @include("classes.class")
    @include('founder.founder')
    @include("layout.footer")
@endsection
