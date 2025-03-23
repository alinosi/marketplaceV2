<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected static $profiles = [
        [
            'id' => '1',
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'assets' => 'profiles',
            'address' => 'JL. Kutilag V Blok F 22'
        ],
        [
            'id' => '2',
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'assets' => 'profiles',
            'address' => 'JL. Kutilag V Blok F 22'
        ]
    ]; 

    public static function getuser($id){
        foreach (self::$profiles as $profile) {
            if ($profile['id'] == $id) {
                return $profile;
            }
        }
    }
}
