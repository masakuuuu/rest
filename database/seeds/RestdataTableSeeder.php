<?php

use App\Restdata;
use Illuminate\Database\Seeder;

class RestdataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'taro',
            'message' => 'Hello World!',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
        $param = [
            'name' => 'hanako',
            'message' => 'Enjoy Laravel!',
        ];
        $restdata = new Restdata;
        $restdata->fill($param)->save();
    }
}
