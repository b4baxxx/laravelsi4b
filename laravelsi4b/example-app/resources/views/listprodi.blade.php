<h1>Program Studi</h1>
<<<<<<< HEAD
<ol> 
@foreach ($viewlist as $item)
    <li>{{ $item }}</li>

@endforeach
<ul>
<h1>Mahasiswa</h1>
</ul>
    @foreach ($viewmhs as $item)
        <li>{{ $item["npm"]}} - {{ $item["nama"]}}</li>
        
    @endforeach
</ol>
=======
<ul>
@foreach ($viewlist as $item)
    <li>{{ $item }}</li>
@endforeach
</ul>

<h1>Mahasiswa</h1>
<ul>
    @foreach ($viewmhs as $item)
    <li>{{ $item["npm"] }} - {{ $item
    ["nama"] }}</li>
    @endforeach
</ul>
>>>>>>> a8fdf79a2d4d9e597d92ce1c5581ba33b83e17c6
