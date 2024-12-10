<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{

    use HasFactory;

    protected $fillable = [
        'title',
        'name',
        'email',
        'personal_number',
        'user_id',
    ];

    public const VALID_TITLES = [
        'Bc.', 'Mgr.', 'Ing.', 'PhD.', 'Dr.', 'MUDr.', 'JUDr.'
    ];

    public function getTitleAttribute($value)
    {
        return $value ?: 'N/A'; // Výchozí hodnota, pokud je NULL
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
