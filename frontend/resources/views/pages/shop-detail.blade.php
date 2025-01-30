@extends('layouts.frontend.app')

@section('content')
    <section x-data="{ isOpen: false }">
        <div class="mt-28 font-bold max-w-screen-xl mx-auto flex justify-start pl-40">
            <p class="text-4xl">View the product</p>
        </div>
        <div className="card1"
            class="max-w-screen-xl mx-auto flex justify-evenly border-solid border-0 mt-20 border-green-500 rounded-lg shadow-lg items-center">
            <div className="product-image" class=" border-solid border-0 border-gray-500 size-80 rounded-md">
                <img src="{{ asset('storage/' . $product->image) }}">
            </div>
            <div className="product-info"
                class="border-solid border-0 w-80 border-gray-500 flex-col justify-start p-10 rounded-lg ">
                <p className="product-title" class="text-4xl font-bold">{{ $product->name }}</p>
                <p className="ratings" class="text-xg"><span class="text-green-500">★★★★</span>
                    ({{ $product->orders_count }}
                    Sold) | In Stock </p>
                <p className="price" class="text-xg">{{ $product->price }}</p>
                <br>
                <p class="text-xg">{{ $product->summary }}</p>
                <br>
                <hr class="border-black border-2">
                <p class="mt-3 text-xg"> Category : {{ $product->category->name }} </p>
                <br>
                <button class="bg-green-500 text-white px-6 py-2 rounded-lg shadow-lg hover:bg-green-600"
                    @click="isOpen = true">
                    Place Order
                </button>
            </div>
        </div>
        <div className="card2"
            class="max-w-screen-xl mx-auto border-solid border-0 border-green-500 rounded-lg shadow-lg mt-10 flex-col p-10 mb-8">
            <p class="text-2xl font-bold">Products detail of {{ $product->name }}</p>
            <br>
            {!! $product->description !!}
            <br>
            <hr class="m-4 border-gray-400">
            <br>
            <p class="font-bold">Specification of {{ $product->name }}</p>
            <br>
            <div class="flex w-1/2 justify-start gap-40">
                <div class="flex-col">
                    <p class="text-gray-500">Brand</p>
                    <p>{{ $product->brand }}</p>
                </div>
                <div class="flex-col">
                    <p class="text-gray-500">Origin</p>
                    <p>{{ $product->origin }}</p>
                </div>
            </div>
        </div>
        @include('components.shop-form-model')
    </section>
@endsection
