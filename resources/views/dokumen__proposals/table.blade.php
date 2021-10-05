<div class="table-responsive">
    <table class="table" id="dokumenProposals-table">
        <thead>
            <tr>
                <th>Nomor Proposal</th>
        <th>Nama Pengirim</th>
        <th>Deskripsi</th>
        <th>File</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($dokumenProposals as $dokumenProposal)
            <tr>
                <td>{{ $dokumenProposal->nomor_proposal }}</td>
            <td>{{ $dokumenProposal->nama_pengirim }}</td>
            <td>{{ $dokumenProposal->deskripsi }}</td>
            <td>{{ $dokumenProposal->file }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['dokumenProposals.destroy', $dokumenProposal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('dokumenProposals.show', [$dokumenProposal->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('dokumenProposals.edit', [$dokumenProposal->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
