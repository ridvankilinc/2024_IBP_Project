<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $announcements = [
            [
                'title' => 'Announcement 1',
                'content' => 'Welcome to the Product Information!',
                'created_at' => now(),
            ],
            
            
           
            
            
        ];

        foreach ($announcements as $announcement) {
            DB::table('announcements')->insert($announcement);
        }
    }
}
