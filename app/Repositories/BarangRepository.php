<?php

namespace App\Repositories;

use App\Models\Barang;
use App\Repositories\BaseRepository;

/**
 * Class BarangRepository
 * @package App\Repositories
 * @version October 5, 2021, 3:10 pm UTC
*/

class BarangRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'kode_barang',
        'nama_barang',
        'stok'
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
        return Barang::class;
    }
}
