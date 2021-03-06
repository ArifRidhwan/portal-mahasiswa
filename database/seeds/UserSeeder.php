<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();
        $admin = new User();
        $admin->npm = "00000001";
        $admin->name = "Admin";
        $admin->email = "admin@gmail.com";
        $admin->password = bcrypt('admin12345');
        $admin->save();
        $admin->attachRole($admin);
    }
}
