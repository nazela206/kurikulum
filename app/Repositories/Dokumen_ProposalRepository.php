<?php

namespace App\Repositories;

use App\Models\Dokumen_Proposal;
use App\Repositories\BaseRepository;

/**
 * Class Dokumen_ProposalRepository
 * @package App\Repositories
 * @version October 5, 2021, 3:20 pm UTC
*/

class Dokumen_ProposalRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'nomor_proposal',
        'nama_pengirim',
        'deskripsi',
        'file'
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
        return Dokumen_Proposal::class;
    }
}
