@extends('layouts.main')
@section('content')


<events-component user="{{Auth::check()}}"></events-component>

@endsection