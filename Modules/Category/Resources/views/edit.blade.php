<x-ladmin-layout>
	<x-slot name="title">Edit Category</x-slot>

	<form action="{{ route('administrator.master-data.category.update', $category->id) }}" method="post" enctype="multipart/form-data">
		@csrf
        @method('PUT')

		@include('category::_partials._form', ['category' => $category])

		<div class="text-right">
		  <button type="submit" class="btn btn-primary">
			Update Category
		  </button>
		</div>
	  </form>
</x-ladmin-layout>
