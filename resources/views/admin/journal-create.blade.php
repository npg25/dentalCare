@extends('layouts.master')

@section('content')
<div class="container">
  <div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3 mb-3 text-gray-800 ">Details and Edit</h1>
  </div>
  
  <div class="card shadow mb-4">
    
      <div class="card-body">
        <form action="{{ route('admin.journal.store') }}" method="POST" enctype="multipart/form-data">
          @csrf
            <div class="mb-3">
              <label class="form-label">Patient Name</label>
              <input type="text" class="form-control" name="patient_name" >
            </div>

            <div class="mb-3">
              <label class="form-label">Issue</label>
              <input type="text" class="form-control" name="issue" >
            </div>
                                   
            <div class="mb-3">
              <label class="form-label">Given Treatement</label>
              <textarea class="form-control" name="treatment" rows="10"></textarea>
            </div>


            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Upload Before</label>
              <input type="file" name="before" class="form-control" id="inputGroupFile01">
            </div>

            <div class="input-group mb-3">
              <label class="input-group-text" for="inputGroupFile01">Upload After</label>
              <input type="file" name="after" class="form-control" id="inputGroupFile01">
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

