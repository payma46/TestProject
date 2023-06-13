<?php

namespace App\Models\registration;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleModel extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 't_role_master';
    protected $fillable = [
        'name',
        'status',
        'updated_by',
        'upadted_at',
        'created_by',
        'created_at'
    ];
}
