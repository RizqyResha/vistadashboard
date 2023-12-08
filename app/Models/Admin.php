<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;
    protected $table = 'tbl_admin';
    protected $primaryKey = 'id_admin';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_admin',
        'username',
        'email',
        'password',
        'profile_image',
        'id_identity_type',
        'identity_id',
        'first_name',
        'last_name',
        'gender',
        'address',
        'phone_no',
        'isActive',
        'created_at',
        'updated_at',
        'delete_status',
        'remember_token'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $hidden = ['password', 'remember_token',];
}
