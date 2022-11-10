<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = [
            [
                'name' => 't1',
                'cid' => 0,
            ],
            [
                'name' => 't2',
                'cid' => 1,
            ],
            [
                'name' => 't3',
                'cid' => 2,
            ],
            [
                'name' => 't4',
                'cid' => 2,
            ],
            [
                'name' => 't5',
                'cid' => 1,
            ],
            [
                'name' => 't6',
                'cid' => 5,
            ],
        ];
        Category::insert($category);
    }
}
