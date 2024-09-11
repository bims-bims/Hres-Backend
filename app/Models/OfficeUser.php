<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_perusahaan',
        'email_perusahaan',
        'password',
        'alamat_perusahaan',
        'nama_pimpinan'
    ];
    public function BudgetService(): BelongsTo
    {
        return $this->belongsTo(OfficeUser::class, 'user_id'); // Assuming foreign key setup
    }

  
}
