<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserDetais;
//use Illuminate\Support\str;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class YourSeederName extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
       
        foreach (range(1, 20) as $index) {
            DB::table('user_detais')->insert([
                'address' => 'hfjk',
                'city' => $faker->city,
                'state' => $faker->state,
                'pincode' => $faker->pincode,
                'country' => $faker->country,
                'mobile' => $faker->mobile,
                'aadhar' => $faker->aadhar,
                'photo_path' => $faker->photo_path,
            ]);
         }

        
        // $user= new UserDetais();
        // $user->address= $req->address;
        // $user->city= $req->city;
        // $user->state= $req->state;
        // $user->pincode= $req->pincode;
        // $user->country= $req->country;
        // $user->mobile= $req->mobile;
        // $user->aadhar= $req->aadhar;
        // $user->photo_path= $req->photo_path;
        // $user->save();



    }
}

