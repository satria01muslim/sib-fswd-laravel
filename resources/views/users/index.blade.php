@extends('layouts.main')

@section('content')
<main>
    <div class="container">
        <h1 class="mt-4">User</h1>
        <div class="row">
            <div class="col-md-12">

                {{-- @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
                @endif --}}

                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <a href="{{ route('user.create') }}" class="btn btn-md btn-success mb-3 float-right">Tambah Data</a>
                        <table class="table table-bordered mt-1">
                            <tr>
                                <th>#</th>
                                <th>Action</th>
                                <th>Name</th>
                                <th>E-Mail</th>
                                <th>Avatar</th>
                                <th>Role</th>
                                <th>Phone</th>
                                <th>Address</th>                            
                            </tr>

                            @forelse ($data as $d)
                            <tr>
                                <td>{{ ++$no }}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah anda yakin ?');"
                                        action="{{ route('user.destroy', $d->id) }}" method="POST">
                                        <a href="{{ route('user.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>

                                </td>
                                <td>{{ $d->name }}</td>
                                <td>{{ $d->email }}</td>
                                <td>{{ $d->avatar }}</td>
                                <td>{{ $d->role }}</td>
                                <td>{{ $d->phone }}</td>
                                <td>{{ $d->address }}</td>
                                
                            </tr>

                            @empty
                            <tr>
                                <td class="text-center text-mute" colspan="4">Data tidak tersedia</td>
                            </tr>

                            @endforelse

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection