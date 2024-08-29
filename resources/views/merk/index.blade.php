@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@section('styles')
    <style>
        table {
            border: "solid 1px red";
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="mb-3">
            <h3 class="text-primary mb-2">Daftar Merk</h3><a href="{{ route('merk.create') }}" class="btn btn-primary">Tambah
                Merk</a>
        </div>
        <table class="table table-bordered table-sm w-auto">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Merk</th>
                    <th>Action</th>
                </tr>
            <tbody>
                @foreach ($merk as $m)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        <td>{{ $m->merk_barang }}</td>
                        <td><a href="{{ route('merk.edit', $m->id) }}" class="btn btn-warning btn-sm">Edit</a>| <form
                                action="{{ route('merk.destroy', $m->id) }}" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE') <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus merk ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
            </tbody>
            @endforeach
            </thead>
        </table>
    </div>
    @endsection() @section('scripts')
    <script>
        const myTimeout = setTimeout(tampil, 2000);
        const alert = bootstrap.Alert.getOrCreateInstance('#myAlert')
        // alert.close()
        function tampil() {
            alert.close()
            clearTimeout(myTimeout)
        }
    </script>
@endsection
