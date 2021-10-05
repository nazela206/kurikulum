<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Dokumen_Proposal
 * @package App\Models
 * @version October 5, 2021, 3:20 pm UTC
 *
 * @property string $nomor_proposal
 * @property string $nama_pengirim
 * @property string $deskripsi
 * @property string $file
 */
class Dokumen_Proposal extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'dokumen__proposals';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'nomor_proposal',
        'nama_pengirim',
        'deskripsi',
        'file'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'nomor_proposal' => 'string',
        'nama_pengirim' => 'string',
        'deskripsi' => 'string',
        'file' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nomor_proposal' => 'required',
        'nama_pengirim' => 'required',
        'file' => 'required'
    ];

    
}
