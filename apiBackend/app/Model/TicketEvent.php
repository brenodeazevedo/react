<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TicketEvent extends Model
{
    protected $table = 'ticket_event';

    protected $fillable = [
        'name',
        'value',
        'sector',
        'event_id',
    ];

    public $timestamps = true;

    public $rules = [

        'name' => 'required|min:3|max:50',
        'value' => 'required',
        'sector' => 'required',
        'event_id' => 'required|numeric|exists:event,id',
    ];
}
