@extends('Layouts.app')
@section('action')
    @if(count($obj) > 0)
        @foreach($obj as $item)
            <p class="title m-b-md">{{$item}}</p>
        @endforeach
    @else
        <p class="title m-b-md">Список порожній</p>
    @endif
@endsection
