<?php

namespace App\Service;

use Illuminate\Support\Str;

class PhoneBook
{
    // Cette fonction permet de rechercher une personne selon son nom
    public static function searchByName(string $name): array{

        return self::searchBy('name' , $name);
            
    }

    // Cette fonction permet de rechercher une personne selon sa ville
    public static function searchByCity(string $city): array{

        return self::searchBy('city' , $city);
    }

    // Cette fonction permet de rechercher une personne selon son email
    public static function searchByEmail(string $email): array{

        return self::searchBy('email' , $email);
    }


    public static function searchBy(string $key, string $value): array{

        return collect(self::contacts())->filter(fn($contact)=> Str::contains(strtolower($contact[$key]), strtolower($value)))->all();
    }




    public static function contacts() : array{

        return [
            [
                'name' => 'John Doe',
                'email' => 'johndoe@exemple.com',
                'phone' => 123456789,
                'city' => 'Quebec, CA'
            ],

            [
                'name' => 'Jane Doe',
                'email' => 'janedoe@exemple.com',
                'phone' => 987654321,
                'city' => 'Quebec, CA'
            ], 

            [
                'name' => 'Alice',
                'email' => 'alice@exemple.com',
                'phone' => 848383838,
                'city' => 'Paris, FR'
            ], 

            [
                'name' => 'Bob',
                'email' => 'bob@exemple.com',
                'phone' => 3647827474,
                'city' => 'Paris, FR'
            ], 

            [
                'name' => 'Julie',
                'email' => 'julie@exemple.com',
                'phone' => 4844949494,
                'city' => 'Abidjan, CI'
            ], 
            [
                'name' => 'Charly',
                'email' => 'charly@exemple.com',
                'phone' => 5757284848,
                'city' => 'Paris, FR'
            ], 
        ];
    }
} 