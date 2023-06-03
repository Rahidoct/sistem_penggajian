<?php

namespace App\Models;

use App\Models\Absensi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PotonganGaji extends Model
{
    use HasFactory;
    protected $table = 'potongan_gaji';

    protected $fillable = ['jenis_potongan', 'jumlah_potongan'];

    public function absensi()
    {
        return $this->hasMany(Absensi::class, 'jenis_potongan', 'jenis_potongan')
            ->whereIn('jenis_potongan', ['izin', 'alpha']);
    }

    protected $guarded = ['id'];
}
