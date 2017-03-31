@extends('layout.app')


@section('title','Song')



@section('body')
    {{'Songs are Everything'}}
    @foreach($song as $song)
    {{$song->title}}
    @endforeach
@endsection