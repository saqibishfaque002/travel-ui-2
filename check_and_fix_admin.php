<?php

// Script to check and fix admin user
require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\User;

echo "🔍 Checking all users...\n\n";

$users = User::all();

if ($users->isEmpty()) {
    echo "❌ No users found in database!\n";
    echo "Creating admin user now...\n\n";
    
    $admin = User::create([
        'name' => 'Admin',
        'email' => 'admin@awtraveltours.com',
        'password' => Hash::make('admin123'),
        'is_admin' => true,
    ]);
    
    echo "✅ Admin user created!\n";
    echo "Email: admin@awtraveltours.com\n";
    echo "Password: admin123\n";
} else {
    echo "Found " . $users->count() . " user(s):\n\n";
    
    foreach ($users as $user) {
        echo "ID: {$user->id}\n";
        echo "Name: {$user->name}\n";
        echo "Email: {$user->email}\n";
        echo "Is Admin: " . ($user->is_admin ? 'YES ✅' : 'NO ❌') . "\n";
        echo "---\n";
    }
    
    echo "\n🔧 Making ALL users admin...\n";
    
    foreach ($users as $user) {
        $user->is_admin = true;
        $user->save();
        echo "✅ {$user->email} is now admin\n";
    }
    
    echo "\n✅ All users are now admins!\n";
    echo "\nYou can now login with any of these:\n";
    foreach ($users as $user) {
        echo "- {$user->email}\n";
    }
}

echo "\n🌐 Admin Panel: http://127.0.0.1:8001/admin/dashboard\n";

