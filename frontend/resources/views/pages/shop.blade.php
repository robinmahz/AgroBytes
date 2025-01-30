@extends('layouts.frontend.app')
@section('content')
    <div class="">
        <div className="productHeading"
            class="mt-40 text-4xl max-w-screen-xl flex flex-wrap items-center justify-left pl-20 mx-auto p-4">
            OUR PRODUCTS
        </div>

        <div className="line1" class="max-w-screen-xl flex flex-wrap items-center justify-evenly mx-auto p-4">
            @include('components.shop-card')
        </div>
    </div>
    <div class="size-40"></div>
@endsection
