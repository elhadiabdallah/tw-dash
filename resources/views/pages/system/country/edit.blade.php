@extends('pages.system.index')
@section('content')
    @livewire('system.country.edit', ['country' => $country])
@endsection()
