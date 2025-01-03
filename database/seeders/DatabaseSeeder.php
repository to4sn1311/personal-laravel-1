<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    // User::factory()->create([
    //     'name' => 'to4sn',
    //     'email' => 'vutoan131102@gmail.com',
    //     'password' => bcrypt('Kingkun1122*'),
    //     'email_verified_at' => time(),
    // ]);

    Project::factory()
      ->count(30)
      ->hasTasks(30)
      ->create();
  }
}
