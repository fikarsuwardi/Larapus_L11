<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use App\Models\Permission;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
      // Membuat role admin
      $adminRole = new Role();
      $adminRole->name = "admin";
      $adminRole->display_name = "Admin";
      $adminRole->save();
      // Membuat role member
      $memberRole = new Role();
      $memberRole->name = "member";
      $memberRole->display_name = "Member";
      $memberRole->save();
      // Membuat sample admin
      $admin = new User();
      $admin->name = 'Admin Larapus';
      $admin->email = 'admin@gmail.com';
      $admin->password = bcrypt('rahasia');
      $admin->save();
      $admin->addRole($adminRole);
      // Membuat sample member
      $member = new User();
      $member->name = "Sample Member";
      $member->email = 'member@gmail.com';
      $member->password = bcrypt('rahasia');
      $member->save();
      $member->addRole($memberRole);
  }
}
