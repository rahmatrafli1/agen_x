<?php

namespace App\Models;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ticket_class extends Model
{
    use HasFactory;
    protected $table = 'ticket_class';
    protected $guarded = [];

    public function ticket(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }
}
