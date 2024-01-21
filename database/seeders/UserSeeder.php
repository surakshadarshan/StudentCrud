<?php

namespace Database\Seeders;
use App\Models\UserDetais;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\UserProperty;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
      
        foreach (range(1, 5) as $index) {
            $user= new User();
            $user->name= $faker->name;
            $user->email= $faker->name;
            $user->email_verified_at= now();
            $user->password= $faker->password;
            $user->remember_token= 'sdjfg5678jh';
            $user->created_at=now();
            $user->updated_at=now();
            $user->save();

            
           $userd= new UserDetais();
            $userd->address= 'hfjk';
            $userd->city= $faker->city;
            $userd->state= $faker->state;
            $userd->pincode= '6587698';
            $userd->country= $faker->country;
            $userd->mobile='3456778987';
            $userd->aadhar='hffgh67hgj';
            $userd->photo_path='pic.jpg';
            $userd->created_at=now();
            $userd->updated_at=now();
            $userd->user_id=$user->id;
            $userd->save();

            
            $userp= new UserProperty();
            $userp->user_id= $user->id;
            $userp->property_name= 'radission';
            $userp->property_address= 'whitefield';
            $userp->reg_no= '6587698';
            $userp->price= '100';
            $userp->purchased_on=now();
            $userp->updated_at=now();
            
            $userp->save();


         }


    }
}
