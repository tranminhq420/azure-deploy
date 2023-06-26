<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use Illuminate\Database\Seeder;
use App\Models\Teacher;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Teacher::create([
            'id'=>1,
            'email'=>'teacher@gmail.com',
            'fullname'=>'Le Tuan Hung',
            'gender'=>'male',
            'password'=>'123',
            'designation'=>'Ha Noi',
            'skills'=>'',
            'experience'=>'5',
            'description'=>'
            HUSTの日本語教師
            年の指導経験
            N5からN1レベルのクラスを提供',
            'photo'=>'E:\20222\ITSS in Japanese\project-ichiichi\ITSSJapanese-BE\public\images\ava.png'
        ]);
        Course::create([
            'id' => 1,
            "name" => '基本的なベトナム語',
            'description' => "これはベトナム語のアルファベットと基本的な言葉と発音を教えるコースです。",
            'teacher_id' => 1,
            'price' => 300000,
            'method'=> 'Online',
            'level'=>'A'    
        ]);
        Course::create([
            'id' => 2,
            "name" => '中級のベトナム語',
            'description' => "これは生活でよく使われる言葉と発音を教えるコースです。",
            'teacher_id' => 1,
            'price' => 600000,
            'method'=> 'Online',
            'level'=>'B'    
        ]);
        Course::create([
            'id' => 3,
            "name" => '高級のベトナム語',
            'description' => "これはCレベルを取得ために、行われるコースです。",
            'teacher_id' => 1,
            'price' => 2100000,
            'method'=> 'Offline',
            'level'=>'C'    
        ]);
    }
}
