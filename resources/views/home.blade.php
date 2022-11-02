@if(empty($index))
    @php
        $index=0
    @endphp
@endif

@extends('template')

@section('content')
    <div class="text-center">
        <p>current index is even</p>
        @include('logo')
        <p>
            {{$index}}
        </p>
        <form action="/indexcontroller" method="post">
            @csrf
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <input type="hidden" name="index" value={{$index}} />
            <button type="submit" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-teal-500 hover:bg-teal-700">update index</button>
        </form>
        @if ($index%2==0)
        <p>current index is even</p>
        @else
        <p>current index is odd</p>
        @endif
    </div>
@endsection
