<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class test_field extends Model
{
    use HasFactory;
    protected $fillable = ['test_id', 'FieldName', 'MinValue', 'MaxValue', 'Unit'];

    public function test()
    {
        return $this->belongsTo(Test::class);
    }
}
