<?php

namespace Database\Seeders;

use App\Enums\RoleName;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::where('name', RoleName::ADMIN)->first();
        $modRole = Role::where('name', RoleName::MODERATOR)->first();
        $userRole = Role::where('name', RoleName::USER)->first();

        $admin = User::where('email', 'dainq.admin@gmail.com')->first();
        $mod = User::where('email', 'dainq.moderator@gmail.com')->first();
        $user = User::where('email', 'dainq.user@gmail.com')->first();

        $user_roles = [
            [
                'user_id' => $admin->id,
                'role_id' => $adminRole->id
            ],
            [
                'user_id' => $mod->id,
                'role_id' => $modRole->id
            ],
            [
                'user_id' => $user->id,
                'role_id' => $userRole->id
            ],
        ];

        DB::table('role_users')->insert($user_roles);
    }
}
