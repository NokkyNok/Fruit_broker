<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Role;

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

    
	DB::table('role_user')->truncate();
	

	$adminRole= Role::where('name','admin')->first();
	$brokerRole= Role::where('name','broker')->first();
	$userRole= Role::where('name','user')->first();

	$admin = User::create([
		'name' => 'Admin',
		'email' => 'admin1@gmail.com',
		'password' => Hash::make('adminpassword')


	]);

	$broker = User::create([
		'name' => 'Broker',
		'email' => 'broker1@gmail.com',
		'password' => Hash::make('brokerpassword')


	]);

	$user = User::create([
		'name' => 'User',
		'email' => 'user1@gmail.com',
		'password' => Hash::make('userpassword')


	]);

	$admin->roles()->attach($adminRole);
	$broker->roles()->attach($brokerRole);
	$user->roles()->attach($userRole);
        
    }



}
