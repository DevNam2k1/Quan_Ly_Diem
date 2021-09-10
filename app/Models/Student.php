<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'lastname','firstname','dob','gender','address'
    ];
    protected $primaryKey = 'student_id';
 	protected $table = 'tbl_student';
}
