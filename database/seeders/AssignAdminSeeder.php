<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AssignAdminSeeder extends Seeder
{
    /**
     * Admin rolni yaratadi va birinchi foydalanuvchiga (yoki id=1) beradi.
     * Ishga tushirish: php artisan db:seed --class=AssignAdminSeeder
     */
    public function run()
    {
        $adminRole = Role::firstOrCreate(
            ['slug' => 'admin'],
            ['name' => 'Administrator']
        );

        $managerRole = Role::firstOrCreate(
            ['slug' => 'manager'],
            ['name' => 'Manager']
        );

        $user = User::find(1);
        if (!$user) {
            $user = User::first();
        }

        if ($user) {
            if (!$user->hasRole('admin')) {
                $user->roles()->attach($adminRole->id);
                $this->command->info("Admin roli foydalanuvchiga berildi: {$user->username} (id: {$user->id})");
            } else {
                $this->command->info("Foydalanuvchi allaqachon admin: {$user->username}");
            }
        } else {
            $this->command->warn('Hech qanday foydalanuvchi topilmadi. Avval ro\'yxatdan o\'ting yoki UserSeeder ishga tushiring.');
        }
    }
}
