<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-08-31
 * Time: 14:33
 */

use Faker\Factory;
use App\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the users database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); // Using truncate function so all info will be cleared when re-seeding.
        DB::table('roles')->truncate();
        DB::table('role_users')->truncate();
        DB::table('activations')->truncate();

        $admin = Sentinel::registerAndActivate(array(
            'email'       => 'simon.provencher.lepage@gmail.com',
            'password'    => "admin",
            'first_name'  => 'Mister',
            'last_name'   => 'Johnson',
        ));

        $adminRole = Sentinel::getRoleRepository()->createModel()->create([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => array('admin' => 1),
        ]);

        $userRole = Sentinel::getRoleRepository()->createModel()->create([
            'name'  => 'User',
            'slug'  => 'user',
        ]);


        $admin->roles()->attach($adminRole);

        $this->command->info('Admin User created with username admin@admin.com and password admin');
    }
}
