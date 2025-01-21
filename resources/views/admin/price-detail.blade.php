@extends('layouts.master')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-3 text-gray-800 ">Details and Edit</h1>
    <a href="" class="btn btn-info btn-sm btn-icon-split">
      <span class="icon text-white-50">
        <i class="fas fa-info-circle"></i>
      </span>
      <span class="text">See actual page</span>
    </a>

  </div>
  
  <div class="card shadow mb-4">
    
      <div class="card-body">
        <form action="{{ route('admin.price.update', $price->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label class="form-label">Service Name</label>
              <input type="text" class="form-control" name="name" value="{{ $price->name }}">
            </div>
                                
            <label class="form-label">Price</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp. </span>
              <input type="text" class="form-control " name="price" value="{{$price->price }}">
            </div>
                        
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description" rows="10">{{ $price->description }}</textarea>
            </div>
          
            <div class="mb-3">
              <label class="form-label">Category</label>
              <input type="text" class="form-control" name="category" value="{{ $price->category }}">
            </div>

            <div class="input-group mb-3">
              <img src="{{ asset('assets/images/'.$price->image.'') }}" class="img-thumbnail" alt="...">
              <label class="input-group-text" for="inputGroupFile01">Update Cover</label>
              <input type="file" name="image" class="form-control" id="inputGroupFile01">
            </div>
    
            <div class="mb-3">
              <input type="submit" class="btn btn-info font-bl" value="UPDATE">
              <a href="{{ route('admin.price.delete', $price->id) }}" class="btn btn-danger font-bl">DELETE</a>
                </div>
        </form>


      </div>
      
    
    </div>
  </div>
  
  
@endsection

