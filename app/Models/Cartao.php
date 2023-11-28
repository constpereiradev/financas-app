<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\User;


class Cartao extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'numero',
        'validade',
        'cvv',
        'proprietario',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
