<?php
/**
 * Created by PhpStorm.
 * User: zz
 * Date: 15-3-12
 * Time: 上午11:38
 */

use Illuminate\Database\Seeder;
use App\Page;

class PageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('pages')->delete();

        for ($i=0; $i < 10; $i++) {
            Page::create([
                'title'   => 'Title '.$i,
                'slug'    => 'first-page',
                'body'    => 'Body '.$i,
                'user_id' => 1,
            ]);
        }
    }

}