<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test extends Model
{
    use HasFactory;
    protected $fillable = ['TestCode', 'TestName', 'Price'];

    public function fields()
    {
        return $this->hasMany(TestField::class);
    }

    public function patients()
    {
        return $this->hasMany(PatientTest::class);
    }
}
