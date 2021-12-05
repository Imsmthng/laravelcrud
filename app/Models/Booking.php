<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table='booking';
    protected $primaryKey='id';
    protected $fillable = ['first_name', 'middle_name', 'last_name', 'bday', 'age', 'street_name', 'city', 'postal_code', 'phone_number', 'mobile_number', 'email', 'full_name', 'emergency_mobile_number', 'relationship'];
}
