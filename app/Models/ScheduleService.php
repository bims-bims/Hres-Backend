<?php

namespace App\Models;

use App\Models\BudgetService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ScheduleService extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kostumer',
        'tanggal_terakhir_service',
        'tanggal_service_selanjutnya',
        'unit',
    ];

    

}
