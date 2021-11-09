<x-ladmin-form-group name="category_code" label="Code *">
	<input type="text" placeholder="Category Code" class="form-control" name="category_code" id="category_code" required value="{{ old('category_code', $category->category_code) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="category_title" label="Title *">
	<input type="text" placeholder="Category Title" class="form-control" name="category_title" id="category_title" required value="{{ old('category_title', $category->category_title) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="category_image" label="Image">
	<input type="file" class="form-control" name="image" id="image" value="{{ old('category_image', $category->category_image) }}">
</x-ladmin-form-group>

<x-ladmin-form-group name="category_description" label="Description *">
	<textarea placeholder="Category Description" class="form-control" name="category_description" id="category_description">{{ old('category_description', $category->category_description) }}</textarea>
</x-ladmin-form-group>

@include('components.is_active')

{{-- <x-ladmin-form-group name="is_active" label="Active *">
    <div class="form-check col-sm-5 ml-2">
        <input class="form-check-input" type="radio" name="is_active" id="is_active" value=1 checked>
        <label class="form-check-label" for="is_active">
          Active
        </label>
    </div>
    <div class="form-check col-sm-5">
        <input class="form-check-input" type="radio" name="is_active" id="is_active" value=0 >
        <label class="form-check-label" for="is_active">
            Not Active
        </label>
    </div>
</x-ladmin-form-group> --}}
