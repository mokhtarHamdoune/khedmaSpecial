
@extends('layouts.app')
@section('content')
@foreach($candidates as $candidate)
{{$candidate->id}}
{{$candidate->offre}}
@endforeach
@endsection
