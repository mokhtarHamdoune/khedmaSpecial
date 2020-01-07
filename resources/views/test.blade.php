
@extends('layouts.app')
@section('content')
@foreach($candidates as $candidate)
{{$candidate->name}}
{{$candidate->offre}}
@endforeach
{{$candidates->links()}}
@endsection
