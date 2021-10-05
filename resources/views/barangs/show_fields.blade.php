<!-- Kode Barang Field -->
<div class="col-sm-12">
    {!! Form::label('kode_barang', 'Kode Barang:') !!}
    <p>{{ $barang->kode_barang }}</p>
</div>

<!-- Nama Barang Field -->
<div class="col-sm-12">
    {!! Form::label('nama_barang', 'Nama Barang:') !!}
    <p>{{ $barang->nama_barang }}</p>
</div>

<!-- Stok Field -->
<div class="col-sm-12">
    {!! Form::label('stok', 'Stok:') !!}
    <p>{{ $barang->stok }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $barang->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $barang->updated_at }}</p>
</div>

