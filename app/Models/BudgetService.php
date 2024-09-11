<?php

namespace App\Models;

use App\Models\OfficeUser;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BudgetService extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_perusahaan_id',
        'deskripsi',
        'spare_part',
        'jumlah_transaksi',
        'keterangan',
    ];

    public function OfficeUser(): HasOne
    {
        return $this->hasOne(OfficeUser::class, 'id', 'nama_perusahaan_id');
    }


}
