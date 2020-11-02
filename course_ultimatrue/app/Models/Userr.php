<?php
namespace App\Models;


use Laratrust\Traits\LaratrustUserTrait;

class User extends Model
{
    use LaratrustUserTrait;

    protected $fillable =[
        'name','email','password'
    ];
    // protected $appends = ['image_path'];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute($value)
    {
        return ucname($value);

    }//end of get first name

    // public function getLastNameAttribute($value)
    // {
    //     return ucfirst($value);

    // }//end of get last name

    // public function getImagePathAttribute()
    // {
    //     return asset('uploads/user_images/' . $this->image);

    // }//end of get image path

}//end of model
