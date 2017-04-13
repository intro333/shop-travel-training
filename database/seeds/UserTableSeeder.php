<?php

use App\Models\UserDetail;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();
        \DB::table('user_details')->delete();

        $users = File::get("database/data/users.json");
        $data = json_decode($users);
        foreach ($data as $obj) {
            User::create([
                'user_id'   => $obj->user_id,
                'email'     => $obj->email,
                'password'  => $obj->password,
                'role'      => $obj->role,
            ]);
        }

        $usersDetails = File::get("database/data/user_details.json");
        $data = json_decode($usersDetails);
        foreach ($data as $obj) {
            UserDetail::create([
                'user_details_id'       => $obj->user_details_id,
                'user_details_user_id'  => $obj->user_details_user_id,
                'fname'      => $obj->fname,
                'sname'      => $obj->sname,
                'mname'      => $obj->mname,
                'phone'      => $obj->phone,
                'address'    => $obj->address,
            ]);
        }
    }
}
