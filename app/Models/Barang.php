<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Barang
 * @package App\Models
 * @version October 5, 2021, 3:10 pm UTC
 *
 * @property string $kode_barang
 * @property string $nama_barang
 * @property integer $stok
 */
class Barang extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'barangs';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'kode_barang',
        'nama_barang',
        'stok'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_barang' => 'string',
        'nama_barang' => 'string',
        'stok' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'kode_barang' => 'required',
        'nama_barang' => 'required',
        'stok' => 'required'
    ];

    
}
