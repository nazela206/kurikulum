@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Edit Dokumen  Proposal</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('adminlte-templates::common.errors')

        <div class="card">

            {!! Form::model($dokumenProposal, ['route' => ['dokumenProposals.update', $dokumenProposal->id], 'method' => 'patch']) !!}

            <div class="card-body">
                <div class="row">
                    @include('dokumen__proposals.fields')
                </div>
            </div>

            <div class="card-footer">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('dokumenProposals.index') }}" class="btn btn-default">Cancel</a>
            </div>

           {!! Form::close() !!}

        </div>
    </div>
@endsection
