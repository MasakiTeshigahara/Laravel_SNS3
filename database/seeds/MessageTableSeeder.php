<?php

use Illuminate\Database\Seeder;
use App\Models\message;


class MassageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Message::create([
                'id'        => 16,
                'user_id'   => 19,
                'board_id'  => 1,
                'msg'       =>'テスト投稿',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }