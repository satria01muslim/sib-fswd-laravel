<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <title>Tampil Data</title>
</head>
<body>
    <div class="container mt-5">
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
                        <a href="{{ route('product.create') }}" class="btn btn-md btn-success mb-3 float-right">Tambah Data</a>
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
                                        action="{{ route('product.destroy', $d->id) }}" method="POST">
                                        <a href="{{ route('product.edit', $d->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
</body>
</html>
