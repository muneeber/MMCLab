<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_result extends Model
{
    use HasFactory;
    protected $fillable = ['patient_id', 'test_id', 'test_field_id', 'result', 'date'];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function test()
    {
        return $this->belongsTo(Test::class);
    }

    public function testField()
    {
        return $this->belongsTo(TestField::class);
    }
}
