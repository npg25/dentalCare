@extends('layouts.master')

@section('content')
<div class="container">
  <h1 class="h3 mb-3 text-gray-800 ">Add Treatment </h1>
  <div class="card shadow mb-4">
    
      <div class="card-body">
        <form action="{{ route('admin.price.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label class="form-label">Service Name</label>
              <input type="text" class="form-control" name="name" >
            </div>   
              
            <label class="form-label">Price</label>
            <div class="input-group mb-3">
              <span class="input-group-text">Rp. </span>
              <input type="number" class="form-control " name="price" >
            </div>
            
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" name="description" rows="10"></textarea>
            </div>
          
            <div class="mb-3">
              <label class="form-label">Category</label>
              <input type="text" class="form-control" name="category" >
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Upload Cover</label>
              <input type="file" name="image" class="form-control" id="inputGroupFile01">
            </div>
            
    
            <div class="mb-3">
              <input type="submit" class="btn btn-success font-bl" value="SUMBIT">
              <button type="reset" class="btn btn-danger font-bl" > RESET </button>
    
            </div>
        </form>


      </div>
      
    
    </div>
  </div>
  
  
@endsection

