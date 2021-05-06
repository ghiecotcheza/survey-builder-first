<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'id';

    protected $fillable = [
       
        'survey_id',
        'question',
        'description',
        'question_type_id',
    ];

    public function survey()
    {
        return $this->belongsTo(Survey::class);
    }

    public function option()
    {
        return $this->hasMany(QuestionOption::class);
    }

    public function response()
    {
        return $this->hasMany(Response::class);
    }

    public function type()
    {
        return $this->belongsTo(QuestionType::class);
    }
}
