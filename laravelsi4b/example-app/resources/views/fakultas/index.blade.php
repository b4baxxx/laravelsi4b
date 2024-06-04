<<<<<<< HEAD
@extends('layout.main')

@section('title','fakultas')

@section('content')


<div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fakultas</h4>
                  <p class="card-description">
                    List data fakultas <code></code>
                  </p>
                  {{-- tombol tambah --}}
                  <a href="{{route('fakultas.create')}}" class="btn btn-rounded btn-primary">Tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Fakultas</th>
                          <th>singkatan</th>

                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($fakultas as $item)
                        <tr>
                            <td>{{ $item["nama"]}}</td>
                            <td>{{ $item["singkatan"]}}</td>

                        </tr>

                        @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            @if (session('success'))
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script>
               Swal.fire({
                  title: "Good job!",
                  text: "{{ session('success') }}",
                  icon: "success"
                });
              </script>
  @endif

 @endsection



=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>UMDP</h1>
    <h2>Fakultas</h2>
    <ul>
        @foreach ($fakultas as $item)
    </li>{{ $item }}</li>
    @endforeach
    </ul>
</body>
</html>
>>>>>>> a8fdf79a2d4d9e597d92ce1c5581ba33b83e17c6
