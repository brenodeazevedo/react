<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'name',
        'date',
        'category',
        'description',
    ];

    public $timestamps = true;

    protected $casts = [

        'date' => 'datetime:d/m/Y H:00',
    ];
    public $rules = [

        'name' => 'required|min:3|max:50',
        'date' => 'required',
        'category' => 'required',
        'description' => 'required',
    ];

    public function ticketEvent()
    {
        return $this->hasMany(TicketEvent::class,'event_id','id');
    }


}
