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

    @php
        $i = 3;
    @endphp

    @switch($i)
        @case(1)
            <div class="alert alert-danger">Danger</div>
        @break

        @case(2)
            <div class="alert alert-success">Success</div>
        @break

        @case(3)
            <div class="alert alert-warning">Warning</div>
        @break
    @endswitch
@endsection
