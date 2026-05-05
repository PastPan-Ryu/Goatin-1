<?php
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

require __DIR__.'/vendor/autoload.php';
$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(\Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$user = User::create([
    'name' => 'Test User ' . rand(1, 100),
    'email' => 'test' . rand(1, 100) . '@test.com',
    'password' => Hash::make('password123'),
    'role' => 'user'
]);

echo 'Hashed password: ' . $user->password . PHP_EOL;
echo 'Auth attempt: ' . (Auth::attempt(['email' => $user->email, 'password' => 'password123']) ? 'success' : 'failed') . PHP_EOL;
