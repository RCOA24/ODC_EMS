<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    
    // Specify connection if you have multiple database connections
    protected $connection = 'sqlsrv'; // This should match your MSSQL connection in config/database.php
    
    protected $table = 'employees'; // Or whatever your table is named
    
    protected $primaryKey = 'employee_id';
    
    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'phone',
        'address',
        'email',
        'company',
    ];
}