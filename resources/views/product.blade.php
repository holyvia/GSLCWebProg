@extends('template')

@section('content')

    <div class="text-center">
        <ul role="list" class="my-6 mx-20 mb-6 grid grid-cols-2 gap-x-4 gap-y-8 sm:grid-cols-3 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
        @foreach ($array as $item)
        {{-- {{dd($item["name"])}} --}}
            <li class="relative">
                <div class="flex flex-col float-left place-content-center group block w-full aspect-w-10 aspect-h-7 rounded-lg bg-gray-100 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-offset-gray-100 focus-within:ring-teal-500 overflow-hidden">
                    <h4 class="font-medium mx-4">{{$item["name"]}}</h4>
                    <h3>{{$item["price"]}}</h3>
                    <p class="pb-2 mx-4">{{$item["description"]}}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
@endsection
