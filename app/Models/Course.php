<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ["id"];
    public function Category()
        {
            return $this->belongsTo("App\Models\Category");
        }
        public function Trainer()
        {
            return $this->belongsTo("App\Models\Trainer");
        }
        public function Student()
        {
            return $this->belongsToMany("App\Models\Student");
        }
}
