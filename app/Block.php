<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    //
    protected $fillable = [
        'sala',
        'professor',
        'disciplina',
        'nickDisciplina',
        'sumario',
        'image',
        'day_id'
    ];

    public function day(){
        return $this->belongsTo(Day::class);
    }
}
