@extends("layouts.app")

@section("content")

@admin
<h1>admin</h1>
@else
<h1>no admin!</h1>
@endadmin

@endsection