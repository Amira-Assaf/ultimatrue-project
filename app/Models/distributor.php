<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class distributor extends Model
{
    use HasFactory;
    public $timestamps = false;

  

    protected $fillable = ['name',
    'owner_name',
    'commercial_id',
    'tax_id',
    'core_business',
    'contact_person',
    'phone',
    'mobile',
    'address',
    'location',
    'lat',
    'log',
    'notes',
    'status_id',
    'branches',
    'dealt'  ];  

    


}
