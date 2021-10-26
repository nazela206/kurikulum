<!-- Nomor Proposal Field -->
<div class="col-sm-12">
    {!! Form::label('nomor_proposal', 'Nomor Proposal:') !!}
    <p>{{ $dokumenProposal->nomor_proposal }}</p>
</div>

<!-- Nama Pengirim Field -->
<div class="col-sm-12">
    {!! Form::label('nama_pengirim', 'Nama Pengirim:') !!}
    <p>{{ $dokumenProposal->nama_pengirim }}</p>
</div>

<!-- Deskripsi Field -->
<div class="col-sm-12">
    {!! Form::label('deskripsi', 'Deskripsi:') !!}
    <p>{{ $dokumenProposal->deskripsi }}</p>
</div>

<!-- File Field -->
<div class="col-sm-12">
    {!! Form::label('file', 'File:') !!}
    <p>{{ $dokumenProposal->file }}</p>
    <a href="{{ url($dokumenProposal->file) }}" class='btn btn-default btn-xs' download>Download File</a>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $dokumenProposal->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $dokumenProposal->updated_at }}</p>
</div>

