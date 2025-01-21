@extends('layouts.app')

@section('content')
<style>
   
</style>
<section id="home" class="home ">
    <div class="start-background ">
        <div class="container " >
            <div class="container_content" >
                <div class="content" >
                    <div class="left-content">
    
                        <h1 style="color: #6c0200; font-size: 4rem;">Welcome to <br> Maha Dental Care</h1>
                        <h5>Klinik kami berkomitmen untuk memberikan pengalaman perawatan gigi yang nyaman dan berkualitas di lokasi kami di Badung, Bali</h5>
                        <br>
                        <button class="btn btn-danger rounded-pill" style="background-color: #b90c06; border-color: #b90c06; padding: 12px 24px;" type="submit">Book Now</button>
                
                                    
                    </div>
                    <div class="right-content">
                        <img src="{{ asset('assets/logo.png') }}" alt="Logo" width="60%" >
                    </div>
                </div>
            </div>
        </div>

        
    </div>
</section>

{{-- <div style="width: 100%; aspect-ratio: 16 / 10; overflow: hidden;">
    <img src="{{ asset('assets/bg3.jpg') }}" 
         alt="background" 
         style="width: 100%; height: 100%; object-fit: cover;">
</div> --}}
@endsection