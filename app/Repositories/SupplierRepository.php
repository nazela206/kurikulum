<?php

namespace App\Repositories;

use App\Models\Supplier;
use App\Repositories\BaseRepository;

/**
 * Class SupplierRepository
 * @package App\Repositories
 * @version November 9, 2021, 6:39 pm UTC
*/

class SupplierRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'Nama',
        'kode_barang',
        'Jumlah_Barang_Masuk'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Supplier::class;
    }
}
