@extends('layouts.master')

@section('title','Custome Home Page')

@section('sidebar')
  @parent
  <br>
  This is an additional sidebar <br> content
@endsection

@section('content')
    -------------- Home Page content --------------
@endsection