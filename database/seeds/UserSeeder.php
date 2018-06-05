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
    	//membuat role admin
        $adminRole = new Role();
        $adminRole->name = "admin";
        $adminRole->display_name = "admin";
        $adminRole->save();
    
    	//membuat role member
    	$adminRole = new Role();
        $adminRole->name = "member";
        $adminRole->display_name = "member";
        $adminRole->save();
    	
    	//membuat sample admin
        $admin = new User();
        $admin->name = "admin";
        $admin->email="admin@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attackRole($adminRole);
    
    	//membuat sample member
    	$admin = new User();
        $admin->name = "Sample Member";
        $admin->email="Member@gmail.com";
        $admin->password=bcrypt('rahasia');
        $admin->save();
    	$admin->attackRole($adminRole);
    }


}
