<x-ladmin-layout>
	<x-slot name="title">Create Category</x-slot>

	<form action="{{ route('administrator.master-data.category.store') }}" method="post" enctype="multipart/form-data">
		@csrf 
		
		@include('category::_partials._form', ['category' => $category])
	
		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Submit Category
		  </button>
		</div>
	  </form>
</x-ladmin-layout>