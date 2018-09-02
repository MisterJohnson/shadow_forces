<?php
/**
 * Created by PhpStorm.
 * User: simon
 * Date: 2018-08-31
 * Time: 14:33
 */

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the users database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'mister.johnson',
            'email' => 'simon.provencher.lepage@gmail.com',
            'password' => bcrypt('admin'),
            'permission' => User::PERMISSION_LEVEL[0],
        ]);

        $user2 = User::create([
            'name' => 'Nivellum',
            'email' => 'd34th.not3.relight@gmail.com',
            'password' => bcrypt('Jackpot50'),
            'permission' => User::PERMISSION_LEVEL[0],
        ]);
    }
}
