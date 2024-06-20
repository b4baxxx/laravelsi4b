@extends('layout.main')

@section('title', 'mahasiswa')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Mahasiswa</h4>
                    <p class="card-description">
                        Daftar Mahasiswa
                    </p>
                    {{-- {{tombol tambah}} --}}
                    @can('create', App\Mahasiswa::class)
                        <a href="{{ route('mahasiswa.create') }}" class="btn btn-rounded btn-primary">Tambah</a>
                    @endcan
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">Npm</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Foto</th>
                                    <th class="text-center">Tempat lahir</th>
                                    <th class="text-center">Tanggal lahir</th>
                                    <th class="text-center">Alamat</th>
                                    <th class="text-center">Prodi</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $item)
                                    <tr>
                                        <td class="text-center">{{ $item['npm'] }}</td>
                                        <td class="text-center">{{ $item['nama'] }}</td>
                                        <td class="text-center"><img src="{{ url('foto/' . $item['url_foto']) }}"></td>
                                        <td class="text-center">{{ $item['tempat_lahir'] }}</td>
                                        <td class="text-center">{{ $item['tanggal_lahir'] }}</td>
                                        <td class="text-center">{{ $item['alamat'] }}</td>
                                        <td class="text-center">{{ $item['prodi']['nama'] }}</td>
                                        <td class="text-center">
                                            @can('delete', $item)
                                                <form action="{{ route('mahasiswa.destroy', $item['id']) }}" method="post" style="display: inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        class="btn btn-sm btn-rounded btn-danger show_confirm"
                                                        data-name={{ $item['nama'] }}>Hapus</button>
                                                        
                                                </form>
                                            @endcan
                                            @can('update', $item)
                                            <a href="{{ route('mahasiswa.edit', $item['id']) }}"
                                            class="btn btn-sm btn-rounded btn-warning">Ubah</a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Good job!",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: "Yakin mau ngapus?",
                    text: "Setelah di hapus akan hilang ini!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Ya, Hapus!"
                })
                .then((willDelete) => {
                    if (willDelete.isConfirmed) {
                        form.submit();
                    }
                });
        });
    </script>
@endsection
