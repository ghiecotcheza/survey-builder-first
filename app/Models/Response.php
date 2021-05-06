<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        
        'survey_id',
        'responder_id',
    ];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }

    public function answer()
    {
        return $this->hasMany(ResponseAnswer::class);
    }

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }
}
