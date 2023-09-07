@extends('layouts.dashboard')
@section('content')
<h1>Volunteer Details</h1>
<h4>Name: {{ $volunteer->name}}</h4>
<h4>Email:  {{$volunteer->email}}</h4>
<h4>

    State :{{ $volunteer->state->name }}
</h4>
@endsection