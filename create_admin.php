<?php

// Quick script to create admin user
require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Hash;

// Create admin user
$admin = User::create([
    'name' => 'Admin',
    'email' => 'admin@awtraveltours.com',
    'password' => Hash::make('admin123'),
    'is_admin' => true,
]);

echo "✅ Admin user created successfully!\n";
echo "Email: admin@awtraveltours.com\n";
echo "Password: admin123\n";
echo "\nYou can now login at: http://127.0.0.1:8003/login\n";

