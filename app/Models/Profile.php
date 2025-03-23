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
            'address' => 'JL. Kutilag V Blok F 22'
        ],
        [
            'id' => '2',
            'name' => 'Jane Doe',
            'email' => 'jane@example.com',
            'address' => 'JL. Kutilag V Blok F 22'
        ]
    ]; 
    
    public static function getAlluser() 
    {
        return collect(self::$profiles);
    }

    public static function getUserbyId($id)
    {
        $user = static::getAlluser();
        
        /** 
         *
         * @param 'id' = key
         * @param $id  = value
         * @return user
         *  
         */
        return $user->firstWhere('id', $id);
    }

}
