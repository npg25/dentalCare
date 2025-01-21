@extends('layouts.master')

@section('content')

<div class="container-fluid ">

  
  <h1 class="h3 mb-2 text-gray-800 ">Price List</h1>
  <p class="mb-4">Kumpulan data Price List pelayanan klinik.</p>

 
  <div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold">Price List</h6>
      <a href="{{ route('admin.price.create') }}" class="btn btn-success btn-sm btn-icon-split">
          <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Add New Price </span>
      </a>
    </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>Name</th>
                          <th>Decription</th>
                          <th>Price</th>
                          <th>Category</th>
                          <th>Created at</th>
                          <th>Image</th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Decription</th>
                        <th>Price</th>
                        <th>Category</th>
                        <th>Created at</th>
                        <th>Image</th>
                      </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($prices as $price )
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('admin.price.detail', $price->id) }}">{{ $price->name }}  </a></td>
                        <td>{{ substr($price->description, 0, 100) }}..</td>
                        <td>Rp. {{ number_format($price->price,0, ',',',' ) }}</td>
                        <td>{{ $price->category }}</td>
                        <td>{{ $price->created_at->format('F d, Y') }}</td>
                        <td><img src="{{ asset('assets/images/'.$price->image.'') }}" width="100" alt="images"></td>
                        
                      </tr>  
                    @endforeach
                    
                  </tbody>
                 
              </table>
          </div>
      </div>
  </div>

</div>

@endsection