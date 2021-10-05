<div class="table-responsive">
    <table class="table" id="barangs-table">
        <thead>
            <tr>
                <th>Kode Barang</th>
        <th>Nama Barang</th>
        <th>Stok</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($barangs as $barang)
            <tr>
                <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->stok }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['barangs.destroy', $barang->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('barangs.show', [$barang->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('barangs.edit', [$barang->id]) }}" class='btn btn-default btn-xs'>
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
