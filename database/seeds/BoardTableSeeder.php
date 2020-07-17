<?php

use Illuminate\Database\Seeder;
use App\Models\Board;

use function GuzzleHttp\Promise\all;

class BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            
            Board::create([
                'id'        =>14,
                's_user_id'   => 3,
                'r_user_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>15,
                's_user_id'   => 3,
                'r_user_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>16,
                's_user_id'   => 3,
                'r_user_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>17,
                's_user_id'   => 3,
                'r_user_id'  => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>18,
                's_user_id'   => 3,
                'r_user_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>19,
                's_user_id'   => 3,
                'r_user_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>20,
                's_user_id'   => 3,
                'r_user_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>21,
                's_user_id'   => 3,
                'r_user_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>22,
                's_user_id'   => 3,
                'r_user_id'  => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>23,
                's_user_id'   => 4,
                'r_user_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>24,
                's_user_id'   => 4,
                'r_user_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>25,
                's_user_id'   => 4,
                'r_user_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>26,
                's_user_id'   => 4,
                'r_user_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>27,
                's_user_id'   => 4,
                'r_user_id'  => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>28,
                's_user_id'   => 5,
                'r_user_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>29,
                's_user_id'   => 5,
                'r_user_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>30,
                's_user_id'   => 5,
                'r_user_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>31,
                's_user_id'   => 5,
                'r_user_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>32,
                's_user_id'   => 5,
                'r_user_id'  => 6,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>33,
                's_user_id'   => 6,
                'r_user_id'  => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>34,
                's_user_id'   => 6,
                'r_user_id'  => 2,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>35,
                's_user_id'   => 6,
                'r_user_id'  => 4,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>36,
                's_user_id'   => 6,
                'r_user_id'  => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
            Board::create([
                'id'        =>37,
                's_user_id'   => 6,
                'r_user_id'  => 5,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
