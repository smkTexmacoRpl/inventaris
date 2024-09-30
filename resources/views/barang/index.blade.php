@extends('layouts.apps')
@section('content')
    <div>
        @forelse ($barangs as $br)
            {{ $br }}
        @empty
            {{ '__kosong' }}
        @endforelse
    </div>
@endsection
