@extends('layouts.master')

@section('content')

<div class="container-fluid ">

  <!-- Page Heading -->
  <h1 class="h3 mb-2 text-gray-800 ">Journal List</h1>
  <p class="mb-4">Kumpulan data jurnal hasil penanganan klinik.</p>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
      <div class="card-header  py-3 d-flex justify-content-between align-items-center">
        <h6 class="m-0 font-weight-bold text-primary  text-gray-800">Journal List</h6>
        <a href="{{ route('admin.journal.create') }}" class="btn btn-success btn-sm btn-icon-split">
            <span class="icon text-white-50">
              <i class="fas fa-arrow-right"></i>
          </span>
          <span class="text">Add New Journal </span>
        </a>
      </div>
      <div class="card-body">
          <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr>
                          <th>Id</th>
                          <th>Patient Name</th>
                          <th>Issue</th>
                          <th>Treatment</th>
                          <th>Created at</th>
                          <th>Before</th>
                          <th>After</th>
                      </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Patient Name</th>
                      <th>Issue</th>
                      <th>Treatment</th>
                      <th>Created at</th>
                      <th>Before</th>
                      <th>After</th>
                  </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($journals as $journal )
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><a href="{{ route('admin.journal.detail', $journal->id) }}">{{ $journal->patient_name }}</a></td>
                        <td>{{ $journal->issue }}</td>
                        <td>{{ substr($journal->treatment, 0, 100) }}..</td>
                        <td>{{ $journal->created_at->format('F d, Y')}}</td>
                        <td><img src="{{ asset('assets/images/'.$journal->before.'') }}" alt="before image" style="width:80px; height: 80px;" ></td>
                        <td><img src="{{ asset('assets/images/'.$journal->after.'') }}" alt="after image" style="width:80px; height: 80px;" ></td>
                        
                        
                      </tr>  
                    @endforeach
                    
                  </tbody>
                 
              </table>
          </div>
      </div>
  </div>

</div>

@endsection