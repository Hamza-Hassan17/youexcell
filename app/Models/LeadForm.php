<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadForm extends Model
{
    use HasFactory;
    protected $table = 'lead';
    public $timestamps=false;
}
