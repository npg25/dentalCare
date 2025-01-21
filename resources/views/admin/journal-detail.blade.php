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
        <form action="{{ route('admin.journal.update', $journals->id) }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
              <label class="form-label">Patient Name</label>
              <input type="text" class="form-control" name="patient_name" value="{{ $journals->patient_name }}">
          </div>
      
          <div class="mb-3">
              <label class="form-label">Issue</label>
              <input type="text" class="form-control" name="issue" value="{{ $journals->issue }}">
          </div>
      
          <div class="mb-3">
              <label class="form-label">Given Treatment</label>
              <textarea class="form-control" name="treatment" rows="10">{{ $journals->treatment }}</textarea>
          </div>
          
          <img src="{{ asset('assets/images/'.$journals->before) }}" class="img-thumbnail" style="width: 10%"  alt="Before Image">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputBefore">Update Before</label> 
              <input type="file" name="before" class="form-control" id="inputBefore">
          </div>
      
          <img src="{{ asset('assets/images/'.$journals->after) }}" class="img-thumbnail" style="width: 10%" alt="After Image">
          <div class="input-group mb-3">
              <label class="input-group-text" for="inputAfter">Update After</label>
              <input type="file" name="after" class="form-control" id="inputAfter">
          </div>
      
          <div class="mb-3">
              <input type="submit" class="btn btn-info font-bl" value="UPDATE">
              <a href="{{ route('admin.journal.delete', $journals->id) }}" class="btn btn-danger font-bl">DELETE</a>
          </div>
      </form>
      


      </div>
      
    
    </div>
  </div>
  
  
@endsection

