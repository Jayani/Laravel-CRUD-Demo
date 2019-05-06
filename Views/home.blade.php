@extends('layouts.app')

@section('content')
<div class="container">
    @if(\Session::has('success'))
        <div class="alert alert-success">
            {{\Session::get('success')}}
        </div>
    @endif
   
    <div class="row">
       <a href="{{url('/create/ticket')}}" class="btn btn-success">Create New Student Record</a>
       <a href="{{url('/tickets')}}" class="btn btn-default">All Students</a>
    </div>
</div>
@endsection