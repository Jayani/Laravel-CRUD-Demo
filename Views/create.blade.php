@extends('layouts.app')

@section('content')
<div class="container">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br />
@endif
    <div class="row">
    <form method="post" action="{{url('/create/student')}}">
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="name">Student Name:</label>
            <input type="text" class="form-control" name="name"/>
        </div>
        <div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="email">Student Email:</label>
            <input type="text" class="form-control" name="email"/>
        </div>
		<div class="form-group">
            <input type="hidden" value="{{csrf_token()}}" name="_token" />
            <label for="contact">Student Contact:</label>
            <input type="number" class="form-control" name="contact"/>
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
@endsection