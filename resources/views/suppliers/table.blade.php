<div class="table-responsive">
    <table class="table" id="suppliers-table">
        <thead>
            <tr>
                <th>Nama</th>
        <th>Kode Barang</th>
        <th>Jumlah Barang Masuk</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($suppliers as $supplier)
            <tr>
                <td>{{ $supplier->Nama }}</td>
            <td>{{ $supplier->kode_barang }}</td>
            <td>{{ $supplier->Jumlah_Barang_Masuk }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['suppliers.destroy', $supplier->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suppliers.show', [$supplier->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('suppliers.edit', [$supplier->id]) }}" class='btn btn-default btn-xs'>
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
