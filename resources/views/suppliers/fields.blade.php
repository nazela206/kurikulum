<!-- Kode Barang Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kode_barang', 'Kode Barang:') !!}
    {{ Form::select('barang_id', App\Models\Barang::get()->pluck('kode_barang', 'id')->prepend('-- Pilih Barang --', ''), null, ['class' => 'form-control', 'id' => 'barang_id']) }}
</div>

<!-- Jumlah Barang Masuk Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Jumlah_Barang_Masuk', 'Jumlah Barang Masuk:') !!}
    {!! Form::text('Jumlah_Barang_Masuk', null, ['class' => 'form-control']) !!}
</div>