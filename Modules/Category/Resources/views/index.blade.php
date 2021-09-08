<x-ladmin-layout>
    <x-slot name="title">Category</x-slot>
    <x-slot name="buttons">
      {-- Top Buttons --}      
    </x-slot>
    @php
        print_r($foos);
    @endphp
    <x-ladmin-datatables :fields="$fields" :options="$options" />

  </x-ladmin-layout>