<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        factory(App\User::class)->make([
            'role' => 'admin',
        ])->save();

        factory(App\User::class, 10)->create()->each(function ($user) {
            // seedthe relation with 5 articles
            $user->files()->createMany(
                factory(App\File::class, 3)->make()->toArray()
            );
        });
    }
}
