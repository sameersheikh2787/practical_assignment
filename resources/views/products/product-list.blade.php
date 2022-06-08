@extends('layouts.app')
@extends('layouts.nav')
@section('main-content')
 
<div class="container">
    <h1 class="h3 mb-4 text-gray-800">{{ __('Products') }}</h1>
    <div class="row">
       <div class="row mb-2">
          @forelse ($products as $val)
                <div class="col-md-4">
                  <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                      <strong class="d-inline-block mb-2 text-primary"></strong>
                      <h3 class="mb-0">{{ $val->name}}</h3>
                       <br/>
                      <label><b>Price:-</b>
                         <strong class="d-inline-block mb-2 text-primary">{{ $val->price}}</strong>
                      </label>
                     
                      <p class="card-text mb-auto">{{ $val->description}} </p>
                      <br/>
                       <a class="btn btn-primary" href="{{ URL::to('/products/products-details/'.$val->id) }}">
                        Buy now</a>
                          
                    </div>                    
                  </div>
                </div>
            @empty
                No records
            @endforelse
        </div>    
  </div>
</div>
@endsection