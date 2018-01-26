<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $adminRole = new Role;
        $adminRole->name="Administrator";
        $adminRole->display_name="Administrator";
        $adminRole->save();

        // Membuat role member
        $member1Role = new Role;
        $member1Role->name="Supervisor";
        $member1Role->display_name="Supervisor";
        $member1Role->save();

        // Membuat role member
        $member2Role = new Role;
        $member2Role->name="Operator";
        $member2Role->display_name="Operator";
        $member2Role->save();
        // Membuat role member
        $member3Role = new Role;
        $member3Role->name="Operator2";
        $member3Role->display_name="Operator2";
        $member3Role->save();
        // Membuat role member
        $member4Role = new Role;
        $member4Role->name="Guest";
        $member4Role->display_name="Guest";
        $member4Role->save();

        // Membuat sample admin
        $admin = new User();
        $admin->name='Administrator';
        $admin->email='admin@gmail.com';
        $admin->password=bcrypt('rahasia');
        $admin->save();
        $admin->attachRole($adminRole);

        // Membuat sample member
        $member1 = new User();
        $member1->name='Supervisor';
        $member1->email='jahid@gmail.com';
        $member1->password=bcrypt('rahasia');
        $member1->save();
        $member1->attachRole($member1Role);

         // Membuat sample member
        $member2 = new User();
        $member2->name='Operator';
        $member2->email='eka@gmail.com';
        $member2->password=bcrypt('rahasia');
        $member2->save();
        $member2->attachRole($member2Role);

         // Membuat sample member
        $member3 = new User();
        $member3->name='Operator2';
        $member3->email='bagja@gmail.com';
        $member3->password=bcrypt('rahasia');
        $member3->save();
        $member3->attachRole($member3Role);

         // Membuat sample member
        $member4 = new User();
        $member4->name='Guest';
        $member4->email='fajrin@gmail.com';
        $member4->password=bcrypt('rahasia');
        $member4->save();
        $member4->attachRole($member4Role);
    }
}
