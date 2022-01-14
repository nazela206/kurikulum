<!-- Nama Field -->
<div class="col-sm-12">
    {!! Form::label('Nama', 'Nama:') !!}
    <p>{{ $supplier->Nama }}</p>
</div>

<!-- Kode Barang Field -->
<div class="col-sm-12">
    {!! Form::label('kode_barang', 'Kode Barang:') !!}
    <p>{{ $supplier->kode_barang }}</p>
</div>

<!-- Jumlah Barang Masuk Field -->
<div class="col-sm-12">
    {!! Form::label('Jumlah_Barang_Masuk', 'Jumlah Barang Masuk:') !!}
    <p>{{ $supplier->Jumlah_Barang_Masuk }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $supplier->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $supplier->updated_at }}</p>
</div>

