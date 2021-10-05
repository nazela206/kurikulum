<!-- Nomor Proposal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nomor_proposal', 'Nomor Proposal:') !!}
    {!! Form::text('nomor_proposal', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Pengirim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_pengirim', 'Nama Pengirim:') !!}
    {!! Form::text('nama_pengirim', null, ['class' => 'form-control']) !!}
</div>

<!-- Deskripsi Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    {!! Form::textarea('deskripsi', null, ['class' => 'form-control']) !!}
</div>

<!-- File Field -->
<div class="form-group col-sm-6">
    {!! Form::label('file', 'File:') !!}
    {!! Form::text('file', null, ['class' => 'form-control']) !!}
</div>