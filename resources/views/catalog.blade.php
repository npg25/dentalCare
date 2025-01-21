@extends('layouts.app')

@section('content')

<main class="main">
	<div class="page-title light-background">
		<div class="container">
			<h1>Our Catalog</h1>
			<nav class="breadcrumbs">
				<ol>
					<li><a href="/">Home</a></li>
					<li class="current">Our Catalog</li>
				</ol>
			</nav>
		</div>
	</div>
	
	
	
	<div class="container">
		<div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
			<!-- First Card -->
			@foreach ($catalogs as $catalog )
			<div class="col d-flex justify-content-center">
					<div class="catalog-card " style="width: 18rem;">
						<div class="card-body" style="padding: 5%">
							<div class="d-flex justify-content-between align-items-center">
								<h3 class="">{{ $catalog->name }}</h3>
								<span class="badge rounded-pill " style="background-color: var(--heading-color)">{{ $catalog->category }}</span>
							</div>
							<p class="card-text mt-2">{{ substr($catalog->description, 0, 150) }}...</p>
							
							{{-- Details Button --}}
							<a href="#" 
								class="catalog-button" 
								data-bs-toggle="modal" 
								data-bs-target="#detailsModal" 
								data-name="{{ $catalog->name }}" 	
								data-description="{{ $catalog->description }}" 
								data-category="{{ $catalog->category }}" 
								data-price="{{ $catalog->price }}"
								data-image="{{ asset('assets/images/' . $catalog->image) }}">Details
							</a>
	
						</div>
						<img src="{{ asset('assets/bg3.jpg') }}" class="card-img-bottom" alt="...">
					</div>
				</div>
				@endforeach
		</div>
	</div>
	
	<div class="modal fade" id="detailsModal" tabindex="-1" aria-labelledby="detailsModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
				<div class="modal-content">
						<div class="modal-header">
								<h5 class="modal-title" id="detailsModalLabel">Item Details</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						</div>
						<div class="modal-body">
								<div class="card mb-3">
										<div class="row g-0">
												<div class="col-md-4">
														<img src="" id="modalItemImage" class="img-fluid rounded-start" alt="Item Image">
												</div>
												<div class="col-md-8">
														<div class="card-body">
																<h3 class="card-title" id="modalItemName">Card Title</h3>
																<p class="card-text">
																		<small class="text-body-secondary" id="modalItemCategory">Category</small>
																</p>
																<p class="card-text" id="modalItemDescription">
																		This is a wider card with supporting text below as a natural lead-in to additional content.
																</p>
																
																<h3 class="card-text" id="modalItemPrice">Price</h3>
																<a href="" class="catalog-button">Book Now</a>
														</div>
												</div>
										</div>
								</div>
						</div>
						<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						</div>
				</div>
		</div>
	</div>


</main>


<script>

document.addEventListener('DOMContentLoaded', function () {
    const detailsModal = document.getElementById('detailsModal');
    
    detailsModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const name = button.getAttribute('data-name');
        const description = button.getAttribute('data-description');
        const category = button.getAttribute('data-category');
        const price = button.getAttribute('data-price');
        const image = button.getAttribute('data-image'); // Add image URL as a data attribute
        
        // Format the price as Indonesian Rupiah
        const formattedPrice = new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0 // Adjust this if you want to show decimal places
        }).format(price);

        // Update modal content
        document.getElementById('modalItemName').textContent = name;
        document.getElementById('modalItemDescription').textContent = description;
        document.getElementById('modalItemCategory').textContent = category;
        document.getElementById('modalItemPrice').textContent = formattedPrice; // Use formatted price
        document.getElementById('modalItemImage').src = image;
    });
});

</script>



@endsection
