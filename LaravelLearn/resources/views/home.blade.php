@extends('layouts.app')
@section('content')
    @foreach ($posts as $post)
        @if ($post['status'] == 1)
            <div>
                <h2>{{ $post['title'] }}</h2>
            </div>
        @else
            <div>
                <h2 class="text-warning">{{ $post['title'] }}: No item</h2>
            </div>
        @endif
    @endforeach
@endsection
