<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionType extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
       
        'name',
        'keyname',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }
}
