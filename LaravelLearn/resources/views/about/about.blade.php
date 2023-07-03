@extends('layouts.app')
@section('content')
    @foreach ($blogs as $blog)
        @if ($blog['status'] == 1)
            <div>
                <h2>{{ $blog['title'] }}</h2>
            </div>
        @else
            <div>
                <h2 class="text-warning">{{ $blog['title'] }}: No item</h2>
            </div>
        @endif
    @endforeach
@endsection
