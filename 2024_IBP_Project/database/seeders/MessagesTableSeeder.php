<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            // Original messages from standard users
            
                ];
                foreach ($messages as $message) {
                    DB::table('messages')->insert(array_merge($message, [
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]));
                }
    }
}
