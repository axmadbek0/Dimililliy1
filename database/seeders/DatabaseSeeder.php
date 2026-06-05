<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user using updateOrCreate to prevent duplicates
        User::updateOrCreate(
            ['email' => 'admin@dimilliy.uz'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'phone' => '+998901234567',
                'address' => 'Tashkent, Uzbekistan',
            ]
        );

        // Create the specified admin email from requirements
        User::updateOrCreate(
            ['email' => 'eldorbekbaxronov7@gmail.com'],
            [
                'name' => 'Eldorbek Baxronov',
                'password' => Hash::make('password'),
                'is_admin' => true,
                'phone' => '+998901111111',
                'address' => 'Tashkent, Uzbekistan',
            ]
        );

        // Create regular test user
        User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'Test User',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'phone' => '+998907654321',
                'address' => 'Samarkand, Uzbekistan',
            ]
        );

        // Create test products only if none exist
        if (Product::count() === 0) {
            Product::factory(30)->create();
            Product::factory(5)->create(['is_top' => true]);
            Product::factory(5)->create(['is_special' => true]);
        }
    }
}
