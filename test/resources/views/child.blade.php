@extends('layouts.app')
@section('title', 'tieu de child')
@section('content')
<p> noi dung child</p>
<p>khoa : {{$data}}</p>
@if ($data%2 == 0)
{{$data}} la so chan
@else
{{$data}} la so le
@endif
@endsection
@section('sidebar')
<p> noi dung child</p>
@endsection