<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;
    protected $fillable = ['MRNo', 'Name', 'F_H', 'Age', 'Sex', 'Mobile', 'Docname'];

    public function tests()
    {
        return $this->hasMany(PatientTest::class);
    }
}
