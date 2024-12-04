<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Laravel\Passport\Client;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $passwordClientSecret = "rUJrG0RsI10VlRYVVgPZiqMYGADLF11Pm5TCdHJu";
        $accessToken = "33ace79745c46ba489c87b69bea5c67df1417e6db32427f25519f49ccfa52ce828241a8111091afb";

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::factory()->create([
            'name' => 'JhonDoe',
            'email' => 'jhondoe@email.com',
            'password' => 'somepassword',
        ]);

        Client::create([
            'name' => "Laravel Password Grant Client",
            "secret" => $passwordClientSecret,
            "provider" => 'users',
            "redirect" => "http://localhost:8888",
            "personal_access_client" => 0,
            "password_client" => 1,
            "revoked" => 0,
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        DB::table('oauth_access_tokens')->insert([
            'id' => $accessToken,
            'user_id' => 2,
            'client_id' => 1,  // assuming client_id is 1 or adjust accordingly
            'name' => null,
            'scopes' => '["*"]',
            'revoked' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
