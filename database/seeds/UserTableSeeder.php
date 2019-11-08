<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::truncate();

        $adminRole = Role::where('nama', 'admin')->first();
        $ownerRole = Role::where('nama', 'owner')->first();
        $masyarakatRole = Role::where('nama', 'masyarakat')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@gmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();

        $owner = new User();
        $owner->name = 'Owner';
        $owner->email = 'owner@gmail.com';
        $owner->password = bcrypt('owner');
        $owner->save();

        $masyarakat = new User();
        $masyarakat->name = 'Masyarakat';
        $masyarakat->email = 'masyarakat@gmail.com';
        $masyarakat->password = bcrypt('masyarakat');
        $masyarakat->save();
        
        $admin->roles()->attach($adminRole);
        $owner->roles()->attach($ownerRole);
        $masyarakat->roles()->attach($masyarakatRole);
    }
}
