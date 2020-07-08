<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('document_types')->truncate();

        $document_types = [
            ['id' => 1 , 'document_type_details' => 'صك الكتروني' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 2 , 'document_type_details' => 'صك شامل' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 3 , 'document_type_details' => 'صك زراعي' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 4 , 'document_type_details' => 'أوراق مبايعة' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
            ['id' => 5 , 'document_type_details' => 'بدون صك' , 'created_at' => new DateTime , 'updated_at' => new DateTime ],
        ];

        DB::table('document_types')->insert($document_types);
    }
}
