<?php

namespace App\Models;

use App\Models\Ticket_class;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'ticket';
    protected $guarded = [];

    public function ticket_class()
    {
        return $this->belongsTo(Ticket_class::class, 'ticket_class_id', 'id');
    }
}
