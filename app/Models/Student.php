<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $with = ['study'];
    // protected $fillable = ['name', 'nim', 'study_id'];
    protected $guarded = ['id'];

    public function study()
    {
        return $this->belongsTo(Study::class);
    }
}
