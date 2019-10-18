<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as DB;
class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('chats')->insert(
            [
            'sender_id' => 1,
            'receiver_id' => 3,
            'content' => "Now, go to the DatabaseSeeder.php file located in database/seeds directory and replace the run function with the code present below.",
            ]
        );

    }
}
