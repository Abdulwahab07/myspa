<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('types')->truncate();

        $types = [
            ['id' => 1 , 'type_details' => 'أرض' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 2 , 'type_details' => 'بيت شعبي' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 3 , 'type_details' => 'عمارة' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 4 , 'type_details' => 'مزرعة' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 5 , 'type_details' => 'فلة' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 6 , 'type_details' => 'شقة' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 7 , 'type_details' => 'دور' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
        ];

        DB::table('types')->insert($types);
    }
}
