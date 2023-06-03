<?php

namespace App\Models;

use App\Models\User;
use App\Models\PotonganGaji;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';

    protected $fillable = ['user_id', 'bulan', 'hadir', 'izin', 'alpha'];

    public function potonganGaji()
    {
        return $this->belongsTo(PotonganGaji::class, 'jenis_potongan', 'jenis_potongan');
    }

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
