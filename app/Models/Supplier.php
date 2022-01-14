<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Supplier
 * @package App\Models
 * @version November 9, 2021, 6:39 pm UTC
 *
 * @property Supplier $Nama
 * @property string $kode_barang
 * @property int $Jumlah_Barang_Masuk
 */
class Supplier extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'suppliers';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'Nama',
        'kode_barang',
        'Jumlah_Barang_Masuk'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'kode_barang' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Nama' => 'required',
        'kode_barang' => 'required',
        'Jumlah_Barang_Masuk' => 'required'
    ];

    
}
