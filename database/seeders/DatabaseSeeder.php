<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Section;
use App\Models\WhatsApp;
use App\Models\ClientsNum;
use App\Models\Subscriber;
use App\Models\ClientsReview;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Mohammad Mousa',
            'email' => 'slrPlus@gmail.com',
            'password' => Hash::make('slrPlus@gmail.com'),
        ]);

        Section::factory(2)->sequence([
            'section_name' => 'اشتراكات بلس',
            'description' => 'وصف اشتراكات بلس',

        ], [
            'section_name' => "اشتراكات يوتيوب بريميوم",
            'description' => "وصف اشتراكات يوتيوب بريميوم",
        ])->create();

        WhatsApp::factory(1)->sequence([
            'link' => 'https://wa.me/966560759786',
        ])->create();
		

        ClientsNum::factory(1)->sequence([
            'num' => '20000',
        ])->create();
				ClientsReview::factory(10)->create();

        Subscriber::factory(10)->create();

        
        // ->has(Product::factory()->count(3))->create();
    }
}
