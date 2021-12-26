<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $adminRole = Role::where('name', 'admin')->first();
        $authorRole = Role::where('name', 'author')->first();
        $userRole = Role::where('name', 'user')->first();
        $misRole = Role::where('name', 'mis')->first();

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('admin')
        ]);

        $author = User::create([
            'name'=>'author',
            'email'=>'author@author.com',
            'password'=>bcrypt('author')
        ]);

        // $user = User::create([
        //     'name'=>'user',
        //     'email'=>'user@user.com',
        //     'password'=>bcrypt('user')
        // ]);


        $mis = User::create([
            'name'=>'mis',
            'email'=>'mis@mis.com',
            'password'=>bcrypt('mis')
        ]);

        $admin->roles()->attach($adminRole);
        $author->roles()->attach($authorRole);
        // $user->roles()->attach($userRole);
        $mis->roles()->attach($misRole);
        
        for($i=0; $i<100;$i++){            
            $user = User::create([
                'name'=>'user'.$i,
                'email'=>'user'.$i.'@user.com',
                'password'=>bcrypt('user'.$i)
            ]);            
            $user->roles()->attach($userRole);
        }
    }
}
