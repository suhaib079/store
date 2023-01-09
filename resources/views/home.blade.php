@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

               <a class="btn btn-primary" href="{{ route('form') }}" >add item</a>
               
            </div>
            <h1>product list</h1>
            @foreach ($products as $product)
                
            <p>{{ $product->name }} - {{$product->price}}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection
