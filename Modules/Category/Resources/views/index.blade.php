<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Category</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.category.create')
        <a href="{{ route('administrator.master-data.category.create', ['back' => request()->fullUrl()]) }}" class="btn btn-sm btn-primary">
          Create Category
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
