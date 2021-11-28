<x-ladmin-layout>
    <x-slot name="styles">
        <link rel="stylesheet" href="{{ mix('css/custom.css') }}">
    </x-slot>
    <x-slot name="title">Add On Feature</x-slot>
    <x-slot name="buttons">
      @can('administrator.master-data.add-on-feature.create')
        <a href="{{ route('administrator.master-data.add-on-feature.create', ['back' => request()->fullUrl()]) }}"
            class="btn btn-sm btn-primary">
          Create Add On Feature
        </a>
      @endcan
    </x-slot>
    <x-ladmin-datatables :fields="$fields" :options="$options" />
</x-ladmin-layout>
