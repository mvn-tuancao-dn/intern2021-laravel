<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\softDeletes;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'gender', 'birthday'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getGenderAttribute($value)
    {
        return ($value == 1) ? 'Male' : 'Female';
    }

    public function getBirthdayAttribute($value)
    {
        $diff = date_diff(date_create(), date_create($value)); 
        $age = $diff->format('%Y');

        switch ($age) {
            case ($age < 6):
                echo "Mẫu Giáo";
                break;
            case ($age <= 11):
                echo "Tiểu Học";
                break;
            case ($age <= 15):
                echo "THCS";
                break;
            case ($age <= 18) :
                echo "THPH";
                break;
            default:
              echo "Đại Học";
          }
    }

    public function posts()
    {
        return $this->hasMany('App\Post','user_id', 'id');
    }
}
