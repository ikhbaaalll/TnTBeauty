<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SkinsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('skins')->delete();
        
        \DB::table('skins')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 2,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 3,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 3,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 3,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 4,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 4,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 4,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 4,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 4,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 5,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 5,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 5,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 5,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 5,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 6,
                'name' => 'Acnes Skin',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 7,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 7,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 7,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 7,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 7,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 8,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 8,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 8,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 8,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 8,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 9,
                'name' => 'Acnes Skin',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 9,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 10,
                'name' => 'Acnes Skin',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 11,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 12,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 13,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 14,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 14,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 14,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 14,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 14,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 15,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 16,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 16,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 16,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 16,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 16,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 17,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 17,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 18,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 18,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 18,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 18,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 18,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 19,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 20,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 20,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 20,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 20,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 20,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 21,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 21,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 21,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 21,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 21,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 22,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 22,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 22,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 22,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 22,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 23,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 23,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            72 => 
            array (
                'id' => 73,
                'product_id' => 23,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            73 => 
            array (
                'id' => 74,
                'product_id' => 23,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            74 => 
            array (
                'id' => 75,
                'product_id' => 23,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            75 => 
            array (
                'id' => 76,
                'product_id' => 24,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            76 => 
            array (
                'id' => 77,
                'product_id' => 25,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            77 => 
            array (
                'id' => 78,
                'product_id' => 25,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            78 => 
            array (
                'id' => 79,
                'product_id' => 25,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            79 => 
            array (
                'id' => 80,
                'product_id' => 25,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            80 => 
            array (
                'id' => 81,
                'product_id' => 25,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            81 => 
            array (
                'id' => 82,
                'product_id' => 26,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            82 => 
            array (
                'id' => 83,
                'product_id' => 26,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            83 => 
            array (
                'id' => 84,
                'product_id' => 26,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            84 => 
            array (
                'id' => 85,
                'product_id' => 26,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            85 => 
            array (
                'id' => 86,
                'product_id' => 26,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            86 => 
            array (
                'id' => 87,
                'product_id' => 27,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            87 => 
            array (
                'id' => 88,
                'product_id' => 27,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            88 => 
            array (
                'id' => 89,
                'product_id' => 27,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            89 => 
            array (
                'id' => 90,
                'product_id' => 27,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            90 => 
            array (
                'id' => 91,
                'product_id' => 27,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            91 => 
            array (
                'id' => 92,
                'product_id' => 28,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            92 => 
            array (
                'id' => 93,
                'product_id' => 28,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            93 => 
            array (
                'id' => 94,
                'product_id' => 28,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            94 => 
            array (
                'id' => 95,
                'product_id' => 28,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            95 => 
            array (
                'id' => 96,
                'product_id' => 28,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            96 => 
            array (
                'id' => 97,
                'product_id' => 29,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            97 => 
            array (
                'id' => 98,
                'product_id' => 29,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            98 => 
            array (
                'id' => 99,
                'product_id' => 29,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            99 => 
            array (
                'id' => 100,
                'product_id' => 29,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            100 => 
            array (
                'id' => 101,
                'product_id' => 29,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            101 => 
            array (
                'id' => 102,
                'product_id' => 30,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            102 => 
            array (
                'id' => 103,
                'product_id' => 30,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            103 => 
            array (
                'id' => 104,
                'product_id' => 31,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            104 => 
            array (
                'id' => 105,
                'product_id' => 31,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            105 => 
            array (
                'id' => 106,
                'product_id' => 31,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            106 => 
            array (
                'id' => 107,
                'product_id' => 31,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            107 => 
            array (
                'id' => 108,
                'product_id' => 31,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            108 => 
            array (
                'id' => 109,
                'product_id' => 32,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            109 => 
            array (
                'id' => 110,
                'product_id' => 32,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            110 => 
            array (
                'id' => 111,
                'product_id' => 32,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            111 => 
            array (
                'id' => 112,
                'product_id' => 32,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            112 => 
            array (
                'id' => 113,
                'product_id' => 32,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            113 => 
            array (
                'id' => 114,
                'product_id' => 33,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            114 => 
            array (
                'id' => 115,
                'product_id' => 33,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            115 => 
            array (
                'id' => 116,
                'product_id' => 33,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            116 => 
            array (
                'id' => 117,
                'product_id' => 33,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            117 => 
            array (
                'id' => 118,
                'product_id' => 33,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            118 => 
            array (
                'id' => 119,
                'product_id' => 34,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            119 => 
            array (
                'id' => 120,
                'product_id' => 34,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            120 => 
            array (
                'id' => 121,
                'product_id' => 35,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            121 => 
            array (
                'id' => 122,
                'product_id' => 35,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            122 => 
            array (
                'id' => 123,
                'product_id' => 36,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            123 => 
            array (
                'id' => 124,
                'product_id' => 36,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            124 => 
            array (
                'id' => 125,
                'product_id' => 36,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            125 => 
            array (
                'id' => 126,
                'product_id' => 36,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            126 => 
            array (
                'id' => 127,
                'product_id' => 36,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            127 => 
            array (
                'id' => 128,
                'product_id' => 37,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            128 => 
            array (
                'id' => 129,
                'product_id' => 37,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            129 => 
            array (
                'id' => 130,
                'product_id' => 37,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            130 => 
            array (
                'id' => 131,
                'product_id' => 37,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            131 => 
            array (
                'id' => 132,
                'product_id' => 37,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            132 => 
            array (
                'id' => 133,
                'product_id' => 38,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            133 => 
            array (
                'id' => 134,
                'product_id' => 38,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            134 => 
            array (
                'id' => 135,
                'product_id' => 38,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            135 => 
            array (
                'id' => 136,
                'product_id' => 38,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            136 => 
            array (
                'id' => 137,
                'product_id' => 38,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            137 => 
            array (
                'id' => 138,
                'product_id' => 39,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            138 => 
            array (
                'id' => 139,
                'product_id' => 39,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            139 => 
            array (
                'id' => 140,
                'product_id' => 40,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            140 => 
            array (
                'id' => 141,
                'product_id' => 40,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            141 => 
            array (
                'id' => 142,
                'product_id' => 41,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            142 => 
            array (
                'id' => 143,
                'product_id' => 41,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            143 => 
            array (
                'id' => 144,
                'product_id' => 41,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            144 => 
            array (
                'id' => 145,
                'product_id' => 41,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            145 => 
            array (
                'id' => 146,
                'product_id' => 41,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            146 => 
            array (
                'id' => 147,
                'product_id' => 42,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            147 => 
            array (
                'id' => 148,
                'product_id' => 42,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            148 => 
            array (
                'id' => 149,
                'product_id' => 42,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            149 => 
            array (
                'id' => 150,
                'product_id' => 42,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            150 => 
            array (
                'id' => 151,
                'product_id' => 42,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            151 => 
            array (
                'id' => 152,
                'product_id' => 43,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            152 => 
            array (
                'id' => 153,
                'product_id' => 43,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            153 => 
            array (
                'id' => 154,
                'product_id' => 43,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            154 => 
            array (
                'id' => 155,
                'product_id' => 43,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            155 => 
            array (
                'id' => 156,
                'product_id' => 43,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            156 => 
            array (
                'id' => 157,
                'product_id' => 44,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            157 => 
            array (
                'id' => 158,
                'product_id' => 44,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            158 => 
            array (
                'id' => 159,
                'product_id' => 44,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            159 => 
            array (
                'id' => 160,
                'product_id' => 44,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            160 => 
            array (
                'id' => 161,
                'product_id' => 44,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            161 => 
            array (
                'id' => 162,
                'product_id' => 45,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            162 => 
            array (
                'id' => 163,
                'product_id' => 45,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            163 => 
            array (
                'id' => 164,
                'product_id' => 45,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            164 => 
            array (
                'id' => 165,
                'product_id' => 45,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            165 => 
            array (
                'id' => 166,
                'product_id' => 45,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            166 => 
            array (
                'id' => 167,
                'product_id' => 46,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            167 => 
            array (
                'id' => 168,
                'product_id' => 46,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            168 => 
            array (
                'id' => 169,
                'product_id' => 46,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            169 => 
            array (
                'id' => 170,
                'product_id' => 47,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            170 => 
            array (
                'id' => 171,
                'product_id' => 47,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            171 => 
            array (
                'id' => 172,
                'product_id' => 47,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            172 => 
            array (
                'id' => 173,
                'product_id' => 47,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            173 => 
            array (
                'id' => 174,
                'product_id' => 47,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            174 => 
            array (
                'id' => 175,
                'product_id' => 48,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            175 => 
            array (
                'id' => 176,
                'product_id' => 48,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            176 => 
            array (
                'id' => 177,
                'product_id' => 48,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            177 => 
            array (
                'id' => 178,
                'product_id' => 48,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            178 => 
            array (
                'id' => 179,
                'product_id' => 48,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            179 => 
            array (
                'id' => 180,
                'product_id' => 49,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            180 => 
            array (
                'id' => 181,
                'product_id' => 49,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            181 => 
            array (
                'id' => 182,
                'product_id' => 49,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            182 => 
            array (
                'id' => 183,
                'product_id' => 49,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            183 => 
            array (
                'id' => 184,
                'product_id' => 49,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            184 => 
            array (
                'id' => 185,
                'product_id' => 50,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            185 => 
            array (
                'id' => 186,
                'product_id' => 50,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            186 => 
            array (
                'id' => 187,
                'product_id' => 50,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            187 => 
            array (
                'id' => 188,
                'product_id' => 50,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            188 => 
            array (
                'id' => 189,
                'product_id' => 50,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            189 => 
            array (
                'id' => 190,
                'product_id' => 51,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            190 => 
            array (
                'id' => 191,
                'product_id' => 51,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            191 => 
            array (
                'id' => 192,
                'product_id' => 51,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            192 => 
            array (
                'id' => 193,
                'product_id' => 51,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            193 => 
            array (
                'id' => 194,
                'product_id' => 51,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            194 => 
            array (
                'id' => 195,
                'product_id' => 52,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            195 => 
            array (
                'id' => 196,
                'product_id' => 52,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            196 => 
            array (
                'id' => 197,
                'product_id' => 52,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            197 => 
            array (
                'id' => 198,
                'product_id' => 52,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            198 => 
            array (
                'id' => 199,
                'product_id' => 52,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            199 => 
            array (
                'id' => 200,
                'product_id' => 53,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            200 => 
            array (
                'id' => 201,
                'product_id' => 53,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            201 => 
            array (
                'id' => 202,
                'product_id' => 53,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            202 => 
            array (
                'id' => 203,
                'product_id' => 53,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            203 => 
            array (
                'id' => 204,
                'product_id' => 53,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            204 => 
            array (
                'id' => 205,
                'product_id' => 54,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            205 => 
            array (
                'id' => 206,
                'product_id' => 54,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            206 => 
            array (
                'id' => 207,
                'product_id' => 54,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            207 => 
            array (
                'id' => 208,
                'product_id' => 54,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            208 => 
            array (
                'id' => 209,
                'product_id' => 54,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            209 => 
            array (
                'id' => 210,
                'product_id' => 55,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            210 => 
            array (
                'id' => 211,
                'product_id' => 55,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            211 => 
            array (
                'id' => 212,
                'product_id' => 55,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            212 => 
            array (
                'id' => 213,
                'product_id' => 55,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            213 => 
            array (
                'id' => 214,
                'product_id' => 55,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            214 => 
            array (
                'id' => 215,
                'product_id' => 56,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            215 => 
            array (
                'id' => 216,
                'product_id' => 56,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            216 => 
            array (
                'id' => 217,
                'product_id' => 57,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            217 => 
            array (
                'id' => 218,
                'product_id' => 57,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            218 => 
            array (
                'id' => 219,
                'product_id' => 57,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            219 => 
            array (
                'id' => 220,
                'product_id' => 57,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            220 => 
            array (
                'id' => 221,
                'product_id' => 57,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            221 => 
            array (
                'id' => 222,
                'product_id' => 58,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            222 => 
            array (
                'id' => 223,
                'product_id' => 58,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            223 => 
            array (
                'id' => 224,
                'product_id' => 59,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            224 => 
            array (
                'id' => 225,
                'product_id' => 59,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            225 => 
            array (
                'id' => 226,
                'product_id' => 59,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            226 => 
            array (
                'id' => 227,
                'product_id' => 59,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            227 => 
            array (
                'id' => 228,
                'product_id' => 59,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            228 => 
            array (
                'id' => 229,
                'product_id' => 60,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            229 => 
            array (
                'id' => 230,
                'product_id' => 60,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            230 => 
            array (
                'id' => 231,
                'product_id' => 60,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            231 => 
            array (
                'id' => 232,
                'product_id' => 60,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            232 => 
            array (
                'id' => 233,
                'product_id' => 60,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            233 => 
            array (
                'id' => 234,
                'product_id' => 61,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            234 => 
            array (
                'id' => 235,
                'product_id' => 61,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            235 => 
            array (
                'id' => 236,
                'product_id' => 61,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            236 => 
            array (
                'id' => 237,
                'product_id' => 61,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            237 => 
            array (
                'id' => 238,
                'product_id' => 61,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            238 => 
            array (
                'id' => 239,
                'product_id' => 62,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            239 => 
            array (
                'id' => 240,
                'product_id' => 62,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            240 => 
            array (
                'id' => 241,
                'product_id' => 62,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            241 => 
            array (
                'id' => 242,
                'product_id' => 62,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            242 => 
            array (
                'id' => 243,
                'product_id' => 62,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            243 => 
            array (
                'id' => 244,
                'product_id' => 63,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            244 => 
            array (
                'id' => 245,
                'product_id' => 63,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            245 => 
            array (
                'id' => 246,
                'product_id' => 64,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            246 => 
            array (
                'id' => 247,
                'product_id' => 64,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            247 => 
            array (
                'id' => 248,
                'product_id' => 64,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            248 => 
            array (
                'id' => 249,
                'product_id' => 64,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            249 => 
            array (
                'id' => 250,
                'product_id' => 64,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            250 => 
            array (
                'id' => 251,
                'product_id' => 65,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            251 => 
            array (
                'id' => 252,
                'product_id' => 65,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            252 => 
            array (
                'id' => 253,
                'product_id' => 65,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            253 => 
            array (
                'id' => 254,
                'product_id' => 65,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            254 => 
            array (
                'id' => 255,
                'product_id' => 65,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            255 => 
            array (
                'id' => 256,
                'product_id' => 66,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            256 => 
            array (
                'id' => 257,
                'product_id' => 66,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            257 => 
            array (
                'id' => 258,
                'product_id' => 67,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            258 => 
            array (
                'id' => 259,
                'product_id' => 67,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            259 => 
            array (
                'id' => 260,
                'product_id' => 67,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            260 => 
            array (
                'id' => 261,
                'product_id' => 67,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            261 => 
            array (
                'id' => 262,
                'product_id' => 67,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            262 => 
            array (
                'id' => 263,
                'product_id' => 68,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            263 => 
            array (
                'id' => 264,
                'product_id' => 69,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            264 => 
            array (
                'id' => 265,
                'product_id' => 69,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            265 => 
            array (
                'id' => 266,
                'product_id' => 69,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            266 => 
            array (
                'id' => 267,
                'product_id' => 69,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            267 => 
            array (
                'id' => 268,
                'product_id' => 69,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            268 => 
            array (
                'id' => 269,
                'product_id' => 70,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            269 => 
            array (
                'id' => 270,
                'product_id' => 70,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            270 => 
            array (
                'id' => 271,
                'product_id' => 70,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            271 => 
            array (
                'id' => 272,
                'product_id' => 70,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            272 => 
            array (
                'id' => 273,
                'product_id' => 70,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            273 => 
            array (
                'id' => 274,
                'product_id' => 71,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            274 => 
            array (
                'id' => 275,
                'product_id' => 71,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            275 => 
            array (
                'id' => 276,
                'product_id' => 72,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            276 => 
            array (
                'id' => 277,
                'product_id' => 72,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            277 => 
            array (
                'id' => 278,
                'product_id' => 72,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            278 => 
            array (
                'id' => 279,
                'product_id' => 73,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            279 => 
            array (
                'id' => 280,
                'product_id' => 73,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            280 => 
            array (
                'id' => 281,
                'product_id' => 73,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            281 => 
            array (
                'id' => 282,
                'product_id' => 73,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            282 => 
            array (
                'id' => 283,
                'product_id' => 74,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            283 => 
            array (
                'id' => 284,
                'product_id' => 74,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            284 => 
            array (
                'id' => 285,
                'product_id' => 74,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            285 => 
            array (
                'id' => 286,
                'product_id' => 74,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            286 => 
            array (
                'id' => 287,
                'product_id' => 74,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            287 => 
            array (
                'id' => 288,
                'product_id' => 75,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            288 => 
            array (
                'id' => 289,
                'product_id' => 76,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            289 => 
            array (
                'id' => 290,
                'product_id' => 76,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            290 => 
            array (
                'id' => 291,
                'product_id' => 76,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            291 => 
            array (
                'id' => 292,
                'product_id' => 76,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            292 => 
            array (
                'id' => 293,
                'product_id' => 76,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            293 => 
            array (
                'id' => 294,
                'product_id' => 77,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            294 => 
            array (
                'id' => 295,
                'product_id' => 77,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            295 => 
            array (
                'id' => 296,
                'product_id' => 77,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            296 => 
            array (
                'id' => 297,
                'product_id' => 77,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            297 => 
            array (
                'id' => 298,
                'product_id' => 77,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            298 => 
            array (
                'id' => 299,
                'product_id' => 78,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            299 => 
            array (
                'id' => 300,
                'product_id' => 78,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            300 => 
            array (
                'id' => 301,
                'product_id' => 78,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            301 => 
            array (
                'id' => 302,
                'product_id' => 78,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            302 => 
            array (
                'id' => 303,
                'product_id' => 78,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            303 => 
            array (
                'id' => 304,
                'product_id' => 79,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            304 => 
            array (
                'id' => 305,
                'product_id' => 79,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            305 => 
            array (
                'id' => 306,
                'product_id' => 79,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            306 => 
            array (
                'id' => 307,
                'product_id' => 79,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            307 => 
            array (
                'id' => 308,
                'product_id' => 79,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            308 => 
            array (
                'id' => 309,
                'product_id' => 80,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            309 => 
            array (
                'id' => 310,
                'product_id' => 80,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            310 => 
            array (
                'id' => 311,
                'product_id' => 80,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            311 => 
            array (
                'id' => 312,
                'product_id' => 80,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            312 => 
            array (
                'id' => 313,
                'product_id' => 80,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            313 => 
            array (
                'id' => 314,
                'product_id' => 81,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            314 => 
            array (
                'id' => 315,
                'product_id' => 82,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            315 => 
            array (
                'id' => 316,
                'product_id' => 82,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            316 => 
            array (
                'id' => 317,
                'product_id' => 82,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            317 => 
            array (
                'id' => 318,
                'product_id' => 82,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            318 => 
            array (
                'id' => 319,
                'product_id' => 82,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            319 => 
            array (
                'id' => 320,
                'product_id' => 83,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            320 => 
            array (
                'id' => 321,
                'product_id' => 83,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            321 => 
            array (
                'id' => 322,
                'product_id' => 83,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            322 => 
            array (
                'id' => 323,
                'product_id' => 83,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            323 => 
            array (
                'id' => 324,
                'product_id' => 83,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            324 => 
            array (
                'id' => 325,
                'product_id' => 84,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            325 => 
            array (
                'id' => 326,
                'product_id' => 85,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            326 => 
            array (
                'id' => 327,
                'product_id' => 85,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            327 => 
            array (
                'id' => 328,
                'product_id' => 85,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            328 => 
            array (
                'id' => 329,
                'product_id' => 85,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            329 => 
            array (
                'id' => 330,
                'product_id' => 85,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            330 => 
            array (
                'id' => 331,
                'product_id' => 86,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            331 => 
            array (
                'id' => 332,
                'product_id' => 86,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            332 => 
            array (
                'id' => 333,
                'product_id' => 86,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            333 => 
            array (
                'id' => 334,
                'product_id' => 86,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            334 => 
            array (
                'id' => 335,
                'product_id' => 86,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            335 => 
            array (
                'id' => 336,
                'product_id' => 87,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            336 => 
            array (
                'id' => 337,
                'product_id' => 87,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            337 => 
            array (
                'id' => 338,
                'product_id' => 87,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            338 => 
            array (
                'id' => 339,
                'product_id' => 87,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            339 => 
            array (
                'id' => 340,
                'product_id' => 87,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            340 => 
            array (
                'id' => 341,
                'product_id' => 88,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            341 => 
            array (
                'id' => 342,
                'product_id' => 88,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            342 => 
            array (
                'id' => 343,
                'product_id' => 88,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            343 => 
            array (
                'id' => 344,
                'product_id' => 88,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            344 => 
            array (
                'id' => 345,
                'product_id' => 88,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            345 => 
            array (
                'id' => 346,
                'product_id' => 89,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            346 => 
            array (
                'id' => 347,
                'product_id' => 89,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            347 => 
            array (
                'id' => 348,
                'product_id' => 90,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            348 => 
            array (
                'id' => 349,
                'product_id' => 90,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            349 => 
            array (
                'id' => 350,
                'product_id' => 90,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            350 => 
            array (
                'id' => 351,
                'product_id' => 90,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            351 => 
            array (
                'id' => 352,
                'product_id' => 90,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            352 => 
            array (
                'id' => 353,
                'product_id' => 91,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            353 => 
            array (
                'id' => 354,
                'product_id' => 91,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            354 => 
            array (
                'id' => 355,
                'product_id' => 91,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            355 => 
            array (
                'id' => 356,
                'product_id' => 91,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            356 => 
            array (
                'id' => 357,
                'product_id' => 91,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            357 => 
            array (
                'id' => 358,
                'product_id' => 92,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            358 => 
            array (
                'id' => 359,
                'product_id' => 92,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            359 => 
            array (
                'id' => 360,
                'product_id' => 92,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            360 => 
            array (
                'id' => 361,
                'product_id' => 92,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            361 => 
            array (
                'id' => 362,
                'product_id' => 92,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            362 => 
            array (
                'id' => 363,
                'product_id' => 93,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            363 => 
            array (
                'id' => 364,
                'product_id' => 93,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            364 => 
            array (
                'id' => 365,
                'product_id' => 93,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            365 => 
            array (
                'id' => 366,
                'product_id' => 93,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            366 => 
            array (
                'id' => 367,
                'product_id' => 93,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            367 => 
            array (
                'id' => 368,
                'product_id' => 94,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            368 => 
            array (
                'id' => 369,
                'product_id' => 94,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            369 => 
            array (
                'id' => 370,
                'product_id' => 94,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            370 => 
            array (
                'id' => 371,
                'product_id' => 94,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            371 => 
            array (
                'id' => 372,
                'product_id' => 94,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            372 => 
            array (
                'id' => 373,
                'product_id' => 95,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            373 => 
            array (
                'id' => 374,
                'product_id' => 95,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            374 => 
            array (
                'id' => 375,
                'product_id' => 95,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            375 => 
            array (
                'id' => 376,
                'product_id' => 95,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            376 => 
            array (
                'id' => 377,
                'product_id' => 95,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            377 => 
            array (
                'id' => 378,
                'product_id' => 96,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            378 => 
            array (
                'id' => 379,
                'product_id' => 96,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            379 => 
            array (
                'id' => 380,
                'product_id' => 96,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            380 => 
            array (
                'id' => 381,
                'product_id' => 96,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            381 => 
            array (
                'id' => 382,
                'product_id' => 96,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            382 => 
            array (
                'id' => 383,
                'product_id' => 97,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            383 => 
            array (
                'id' => 384,
                'product_id' => 97,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            384 => 
            array (
                'id' => 385,
                'product_id' => 98,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            385 => 
            array (
                'id' => 386,
                'product_id' => 98,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            386 => 
            array (
                'id' => 387,
                'product_id' => 98,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            387 => 
            array (
                'id' => 388,
                'product_id' => 98,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            388 => 
            array (
                'id' => 389,
                'product_id' => 98,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            389 => 
            array (
                'id' => 390,
                'product_id' => 99,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            390 => 
            array (
                'id' => 391,
                'product_id' => 99,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            391 => 
            array (
                'id' => 392,
                'product_id' => 99,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            392 => 
            array (
                'id' => 393,
                'product_id' => 99,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            393 => 
            array (
                'id' => 394,
                'product_id' => 99,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            394 => 
            array (
                'id' => 395,
                'product_id' => 100,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            395 => 
            array (
                'id' => 396,
                'product_id' => 100,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            396 => 
            array (
                'id' => 397,
                'product_id' => 100,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            397 => 
            array (
                'id' => 398,
                'product_id' => 100,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            398 => 
            array (
                'id' => 399,
                'product_id' => 100,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            399 => 
            array (
                'id' => 400,
                'product_id' => 101,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            400 => 
            array (
                'id' => 401,
                'product_id' => 101,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            401 => 
            array (
                'id' => 402,
                'product_id' => 101,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            402 => 
            array (
                'id' => 403,
                'product_id' => 101,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            403 => 
            array (
                'id' => 404,
                'product_id' => 101,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            404 => 
            array (
                'id' => 405,
                'product_id' => 102,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            405 => 
            array (
                'id' => 406,
                'product_id' => 102,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            406 => 
            array (
                'id' => 407,
                'product_id' => 102,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            407 => 
            array (
                'id' => 408,
                'product_id' => 102,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            408 => 
            array (
                'id' => 409,
                'product_id' => 102,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            409 => 
            array (
                'id' => 410,
                'product_id' => 103,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            410 => 
            array (
                'id' => 411,
                'product_id' => 103,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            411 => 
            array (
                'id' => 412,
                'product_id' => 103,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            412 => 
            array (
                'id' => 413,
                'product_id' => 103,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            413 => 
            array (
                'id' => 414,
                'product_id' => 103,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            414 => 
            array (
                'id' => 415,
                'product_id' => 104,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            415 => 
            array (
                'id' => 416,
                'product_id' => 104,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            416 => 
            array (
                'id' => 417,
                'product_id' => 104,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            417 => 
            array (
                'id' => 418,
                'product_id' => 104,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            418 => 
            array (
                'id' => 419,
                'product_id' => 104,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            419 => 
            array (
                'id' => 420,
                'product_id' => 105,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            420 => 
            array (
                'id' => 421,
                'product_id' => 105,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            421 => 
            array (
                'id' => 422,
                'product_id' => 105,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            422 => 
            array (
                'id' => 423,
                'product_id' => 105,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            423 => 
            array (
                'id' => 424,
                'product_id' => 105,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            424 => 
            array (
                'id' => 425,
                'product_id' => 106,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            425 => 
            array (
                'id' => 426,
                'product_id' => 106,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            426 => 
            array (
                'id' => 427,
                'product_id' => 106,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            427 => 
            array (
                'id' => 428,
                'product_id' => 106,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            428 => 
            array (
                'id' => 429,
                'product_id' => 106,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            429 => 
            array (
                'id' => 430,
                'product_id' => 107,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            430 => 
            array (
                'id' => 431,
                'product_id' => 108,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            431 => 
            array (
                'id' => 432,
                'product_id' => 108,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            432 => 
            array (
                'id' => 433,
                'product_id' => 108,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            433 => 
            array (
                'id' => 434,
                'product_id' => 108,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            434 => 
            array (
                'id' => 435,
                'product_id' => 108,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            435 => 
            array (
                'id' => 436,
                'product_id' => 109,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            436 => 
            array (
                'id' => 437,
                'product_id' => 109,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            437 => 
            array (
                'id' => 438,
                'product_id' => 109,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            438 => 
            array (
                'id' => 439,
                'product_id' => 109,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            439 => 
            array (
                'id' => 440,
                'product_id' => 109,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            440 => 
            array (
                'id' => 441,
                'product_id' => 110,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            441 => 
            array (
                'id' => 442,
                'product_id' => 110,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            442 => 
            array (
                'id' => 443,
                'product_id' => 110,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            443 => 
            array (
                'id' => 444,
                'product_id' => 110,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            444 => 
            array (
                'id' => 445,
                'product_id' => 110,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            445 => 
            array (
                'id' => 446,
                'product_id' => 111,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            446 => 
            array (
                'id' => 447,
                'product_id' => 112,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            447 => 
            array (
                'id' => 448,
                'product_id' => 112,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            448 => 
            array (
                'id' => 449,
                'product_id' => 112,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            449 => 
            array (
                'id' => 450,
                'product_id' => 112,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            450 => 
            array (
                'id' => 451,
                'product_id' => 112,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            451 => 
            array (
                'id' => 452,
                'product_id' => 113,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            452 => 
            array (
                'id' => 453,
                'product_id' => 113,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            453 => 
            array (
                'id' => 454,
                'product_id' => 113,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            454 => 
            array (
                'id' => 455,
                'product_id' => 113,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            455 => 
            array (
                'id' => 456,
                'product_id' => 113,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            456 => 
            array (
                'id' => 457,
                'product_id' => 114,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            457 => 
            array (
                'id' => 458,
                'product_id' => 114,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            458 => 
            array (
                'id' => 459,
                'product_id' => 114,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            459 => 
            array (
                'id' => 460,
                'product_id' => 114,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            460 => 
            array (
                'id' => 461,
                'product_id' => 114,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            461 => 
            array (
                'id' => 462,
                'product_id' => 115,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            462 => 
            array (
                'id' => 463,
                'product_id' => 115,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            463 => 
            array (
                'id' => 464,
                'product_id' => 115,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            464 => 
            array (
                'id' => 465,
                'product_id' => 115,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            465 => 
            array (
                'id' => 466,
                'product_id' => 115,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            466 => 
            array (
                'id' => 467,
                'product_id' => 116,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            467 => 
            array (
                'id' => 468,
                'product_id' => 116,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            468 => 
            array (
                'id' => 469,
                'product_id' => 116,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            469 => 
            array (
                'id' => 470,
                'product_id' => 116,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            470 => 
            array (
                'id' => 471,
                'product_id' => 116,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            471 => 
            array (
                'id' => 472,
                'product_id' => 117,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            472 => 
            array (
                'id' => 473,
                'product_id' => 118,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            473 => 
            array (
                'id' => 474,
                'product_id' => 118,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            474 => 
            array (
                'id' => 475,
                'product_id' => 118,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            475 => 
            array (
                'id' => 476,
                'product_id' => 118,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            476 => 
            array (
                'id' => 477,
                'product_id' => 118,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            477 => 
            array (
                'id' => 478,
                'product_id' => 119,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            478 => 
            array (
                'id' => 479,
                'product_id' => 119,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            479 => 
            array (
                'id' => 480,
                'product_id' => 119,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            480 => 
            array (
                'id' => 481,
                'product_id' => 119,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            481 => 
            array (
                'id' => 482,
                'product_id' => 119,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            482 => 
            array (
                'id' => 483,
                'product_id' => 120,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            483 => 
            array (
                'id' => 484,
                'product_id' => 120,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            484 => 
            array (
                'id' => 485,
                'product_id' => 120,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            485 => 
            array (
                'id' => 486,
                'product_id' => 120,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            486 => 
            array (
                'id' => 487,
                'product_id' => 120,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            487 => 
            array (
                'id' => 488,
                'product_id' => 121,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            488 => 
            array (
                'id' => 489,
                'product_id' => 121,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            489 => 
            array (
                'id' => 490,
                'product_id' => 121,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            490 => 
            array (
                'id' => 491,
                'product_id' => 121,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            491 => 
            array (
                'id' => 492,
                'product_id' => 121,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            492 => 
            array (
                'id' => 493,
                'product_id' => 122,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            493 => 
            array (
                'id' => 494,
                'product_id' => 122,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            494 => 
            array (
                'id' => 495,
                'product_id' => 122,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            495 => 
            array (
                'id' => 496,
                'product_id' => 122,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            496 => 
            array (
                'id' => 497,
                'product_id' => 122,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            497 => 
            array (
                'id' => 498,
                'product_id' => 123,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            498 => 
            array (
                'id' => 499,
                'product_id' => 123,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            499 => 
            array (
                'id' => 500,
                'product_id' => 123,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
        ));
        \DB::table('skins')->insert(array (
            0 => 
            array (
                'id' => 501,
                'product_id' => 123,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            1 => 
            array (
                'id' => 502,
                'product_id' => 123,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            2 => 
            array (
                'id' => 503,
                'product_id' => 124,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            3 => 
            array (
                'id' => 504,
                'product_id' => 124,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            4 => 
            array (
                'id' => 505,
                'product_id' => 124,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            5 => 
            array (
                'id' => 506,
                'product_id' => 124,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            6 => 
            array (
                'id' => 507,
                'product_id' => 124,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            7 => 
            array (
                'id' => 508,
                'product_id' => 125,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            8 => 
            array (
                'id' => 509,
                'product_id' => 125,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            9 => 
            array (
                'id' => 510,
                'product_id' => 125,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            10 => 
            array (
                'id' => 511,
                'product_id' => 125,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            11 => 
            array (
                'id' => 512,
                'product_id' => 125,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            12 => 
            array (
                'id' => 513,
                'product_id' => 126,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            13 => 
            array (
                'id' => 514,
                'product_id' => 126,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            14 => 
            array (
                'id' => 515,
                'product_id' => 126,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            15 => 
            array (
                'id' => 516,
                'product_id' => 126,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            16 => 
            array (
                'id' => 517,
                'product_id' => 126,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            17 => 
            array (
                'id' => 518,
                'product_id' => 127,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            18 => 
            array (
                'id' => 519,
                'product_id' => 127,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            19 => 
            array (
                'id' => 520,
                'product_id' => 127,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            20 => 
            array (
                'id' => 521,
                'product_id' => 127,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            21 => 
            array (
                'id' => 522,
                'product_id' => 127,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            22 => 
            array (
                'id' => 523,
                'product_id' => 128,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            23 => 
            array (
                'id' => 524,
                'product_id' => 128,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            24 => 
            array (
                'id' => 525,
                'product_id' => 128,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            25 => 
            array (
                'id' => 526,
                'product_id' => 128,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            26 => 
            array (
                'id' => 527,
                'product_id' => 128,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            27 => 
            array (
                'id' => 528,
                'product_id' => 129,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            28 => 
            array (
                'id' => 529,
                'product_id' => 129,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            29 => 
            array (
                'id' => 530,
                'product_id' => 129,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            30 => 
            array (
                'id' => 531,
                'product_id' => 129,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            31 => 
            array (
                'id' => 532,
                'product_id' => 129,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            32 => 
            array (
                'id' => 533,
                'product_id' => 130,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            33 => 
            array (
                'id' => 534,
                'product_id' => 130,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            34 => 
            array (
                'id' => 535,
                'product_id' => 130,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            35 => 
            array (
                'id' => 536,
                'product_id' => 130,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            36 => 
            array (
                'id' => 537,
                'product_id' => 130,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            37 => 
            array (
                'id' => 538,
                'product_id' => 131,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            38 => 
            array (
                'id' => 539,
                'product_id' => 131,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            39 => 
            array (
                'id' => 540,
                'product_id' => 131,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            40 => 
            array (
                'id' => 541,
                'product_id' => 131,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            41 => 
            array (
                'id' => 542,
                'product_id' => 131,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            42 => 
            array (
                'id' => 543,
                'product_id' => 132,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            43 => 
            array (
                'id' => 544,
                'product_id' => 132,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            44 => 
            array (
                'id' => 545,
                'product_id' => 132,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            45 => 
            array (
                'id' => 546,
                'product_id' => 132,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            46 => 
            array (
                'id' => 547,
                'product_id' => 132,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            47 => 
            array (
                'id' => 548,
                'product_id' => 133,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            48 => 
            array (
                'id' => 549,
                'product_id' => 133,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            49 => 
            array (
                'id' => 550,
                'product_id' => 133,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            50 => 
            array (
                'id' => 551,
                'product_id' => 133,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            51 => 
            array (
                'id' => 552,
                'product_id' => 133,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            52 => 
            array (
                'id' => 553,
                'product_id' => 134,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            53 => 
            array (
                'id' => 554,
                'product_id' => 134,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            54 => 
            array (
                'id' => 555,
                'product_id' => 134,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            55 => 
            array (
                'id' => 556,
                'product_id' => 134,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            56 => 
            array (
                'id' => 557,
                'product_id' => 134,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            57 => 
            array (
                'id' => 558,
                'product_id' => 135,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            58 => 
            array (
                'id' => 559,
                'product_id' => 135,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            59 => 
            array (
                'id' => 560,
                'product_id' => 135,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            60 => 
            array (
                'id' => 561,
                'product_id' => 135,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            61 => 
            array (
                'id' => 562,
                'product_id' => 135,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            62 => 
            array (
                'id' => 563,
                'product_id' => 136,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            63 => 
            array (
                'id' => 564,
                'product_id' => 136,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            64 => 
            array (
                'id' => 565,
                'product_id' => 136,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            65 => 
            array (
                'id' => 566,
                'product_id' => 136,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            66 => 
            array (
                'id' => 567,
                'product_id' => 136,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            67 => 
            array (
                'id' => 568,
                'product_id' => 137,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            68 => 
            array (
                'id' => 569,
                'product_id' => 137,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            69 => 
            array (
                'id' => 570,
                'product_id' => 137,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            70 => 
            array (
                'id' => 571,
                'product_id' => 137,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            71 => 
            array (
                'id' => 572,
                'product_id' => 137,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            72 => 
            array (
                'id' => 573,
                'product_id' => 138,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            73 => 
            array (
                'id' => 574,
                'product_id' => 138,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            74 => 
            array (
                'id' => 575,
                'product_id' => 138,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            75 => 
            array (
                'id' => 576,
                'product_id' => 138,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            76 => 
            array (
                'id' => 577,
                'product_id' => 138,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            77 => 
            array (
                'id' => 578,
                'product_id' => 139,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            78 => 
            array (
                'id' => 579,
                'product_id' => 139,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            79 => 
            array (
                'id' => 580,
                'product_id' => 139,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            80 => 
            array (
                'id' => 581,
                'product_id' => 139,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            81 => 
            array (
                'id' => 582,
                'product_id' => 139,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            82 => 
            array (
                'id' => 583,
                'product_id' => 140,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            83 => 
            array (
                'id' => 584,
                'product_id' => 140,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            84 => 
            array (
                'id' => 585,
                'product_id' => 140,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            85 => 
            array (
                'id' => 586,
                'product_id' => 140,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            86 => 
            array (
                'id' => 587,
                'product_id' => 140,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            87 => 
            array (
                'id' => 588,
                'product_id' => 141,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            88 => 
            array (
                'id' => 589,
                'product_id' => 141,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            89 => 
            array (
                'id' => 590,
                'product_id' => 141,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            90 => 
            array (
                'id' => 591,
                'product_id' => 141,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            91 => 
            array (
                'id' => 592,
                'product_id' => 141,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            92 => 
            array (
                'id' => 593,
                'product_id' => 142,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            93 => 
            array (
                'id' => 594,
                'product_id' => 142,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            94 => 
            array (
                'id' => 595,
                'product_id' => 142,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            95 => 
            array (
                'id' => 596,
                'product_id' => 142,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            96 => 
            array (
                'id' => 597,
                'product_id' => 142,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            97 => 
            array (
                'id' => 598,
                'product_id' => 143,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            98 => 
            array (
                'id' => 599,
                'product_id' => 143,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            99 => 
            array (
                'id' => 600,
                'product_id' => 143,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            100 => 
            array (
                'id' => 601,
                'product_id' => 143,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            101 => 
            array (
                'id' => 602,
                'product_id' => 143,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            102 => 
            array (
                'id' => 603,
                'product_id' => 144,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            103 => 
            array (
                'id' => 604,
                'product_id' => 144,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            104 => 
            array (
                'id' => 605,
                'product_id' => 144,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            105 => 
            array (
                'id' => 606,
                'product_id' => 144,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            106 => 
            array (
                'id' => 607,
                'product_id' => 144,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            107 => 
            array (
                'id' => 608,
                'product_id' => 145,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            108 => 
            array (
                'id' => 609,
                'product_id' => 145,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            109 => 
            array (
                'id' => 610,
                'product_id' => 145,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            110 => 
            array (
                'id' => 611,
                'product_id' => 145,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            111 => 
            array (
                'id' => 612,
                'product_id' => 145,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            112 => 
            array (
                'id' => 613,
                'product_id' => 146,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            113 => 
            array (
                'id' => 614,
                'product_id' => 146,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            114 => 
            array (
                'id' => 615,
                'product_id' => 146,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            115 => 
            array (
                'id' => 616,
                'product_id' => 146,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            116 => 
            array (
                'id' => 617,
                'product_id' => 146,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            117 => 
            array (
                'id' => 618,
                'product_id' => 147,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            118 => 
            array (
                'id' => 619,
                'product_id' => 147,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            119 => 
            array (
                'id' => 620,
                'product_id' => 147,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            120 => 
            array (
                'id' => 621,
                'product_id' => 147,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            121 => 
            array (
                'id' => 622,
                'product_id' => 147,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            122 => 
            array (
                'id' => 623,
                'product_id' => 148,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            123 => 
            array (
                'id' => 624,
                'product_id' => 148,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            124 => 
            array (
                'id' => 625,
                'product_id' => 148,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            125 => 
            array (
                'id' => 626,
                'product_id' => 148,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            126 => 
            array (
                'id' => 627,
                'product_id' => 148,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            127 => 
            array (
                'id' => 628,
                'product_id' => 149,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            128 => 
            array (
                'id' => 629,
                'product_id' => 149,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            129 => 
            array (
                'id' => 630,
                'product_id' => 149,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            130 => 
            array (
                'id' => 631,
                'product_id' => 149,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            131 => 
            array (
                'id' => 632,
                'product_id' => 149,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            132 => 
            array (
                'id' => 633,
                'product_id' => 150,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            133 => 
            array (
                'id' => 634,
                'product_id' => 150,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            134 => 
            array (
                'id' => 635,
                'product_id' => 150,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            135 => 
            array (
                'id' => 636,
                'product_id' => 150,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            136 => 
            array (
                'id' => 637,
                'product_id' => 150,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            137 => 
            array (
                'id' => 638,
                'product_id' => 151,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            138 => 
            array (
                'id' => 639,
                'product_id' => 151,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            139 => 
            array (
                'id' => 640,
                'product_id' => 151,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            140 => 
            array (
                'id' => 641,
                'product_id' => 151,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            141 => 
            array (
                'id' => 642,
                'product_id' => 151,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            142 => 
            array (
                'id' => 643,
                'product_id' => 152,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            143 => 
            array (
                'id' => 644,
                'product_id' => 152,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            144 => 
            array (
                'id' => 645,
                'product_id' => 152,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            145 => 
            array (
                'id' => 646,
                'product_id' => 152,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            146 => 
            array (
                'id' => 647,
                'product_id' => 152,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            147 => 
            array (
                'id' => 648,
                'product_id' => 153,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            148 => 
            array (
                'id' => 649,
                'product_id' => 153,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            149 => 
            array (
                'id' => 650,
                'product_id' => 153,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            150 => 
            array (
                'id' => 651,
                'product_id' => 153,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            151 => 
            array (
                'id' => 652,
                'product_id' => 153,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            152 => 
            array (
                'id' => 653,
                'product_id' => 154,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            153 => 
            array (
                'id' => 654,
                'product_id' => 154,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            154 => 
            array (
                'id' => 655,
                'product_id' => 154,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            155 => 
            array (
                'id' => 656,
                'product_id' => 154,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            156 => 
            array (
                'id' => 657,
                'product_id' => 154,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            157 => 
            array (
                'id' => 658,
                'product_id' => 155,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            158 => 
            array (
                'id' => 659,
                'product_id' => 155,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            159 => 
            array (
                'id' => 660,
                'product_id' => 155,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            160 => 
            array (
                'id' => 661,
                'product_id' => 155,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            161 => 
            array (
                'id' => 662,
                'product_id' => 155,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            162 => 
            array (
                'id' => 663,
                'product_id' => 156,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            163 => 
            array (
                'id' => 664,
                'product_id' => 156,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            164 => 
            array (
                'id' => 665,
                'product_id' => 156,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            165 => 
            array (
                'id' => 666,
                'product_id' => 156,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            166 => 
            array (
                'id' => 667,
                'product_id' => 156,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            167 => 
            array (
                'id' => 668,
                'product_id' => 157,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            168 => 
            array (
                'id' => 669,
                'product_id' => 157,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            169 => 
            array (
                'id' => 670,
                'product_id' => 157,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            170 => 
            array (
                'id' => 671,
                'product_id' => 157,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            171 => 
            array (
                'id' => 672,
                'product_id' => 157,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            172 => 
            array (
                'id' => 673,
                'product_id' => 158,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            173 => 
            array (
                'id' => 674,
                'product_id' => 158,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            174 => 
            array (
                'id' => 675,
                'product_id' => 158,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            175 => 
            array (
                'id' => 676,
                'product_id' => 158,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            176 => 
            array (
                'id' => 677,
                'product_id' => 158,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            177 => 
            array (
                'id' => 678,
                'product_id' => 159,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            178 => 
            array (
                'id' => 679,
                'product_id' => 159,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            179 => 
            array (
                'id' => 680,
                'product_id' => 159,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            180 => 
            array (
                'id' => 681,
                'product_id' => 159,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            181 => 
            array (
                'id' => 682,
                'product_id' => 159,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            182 => 
            array (
                'id' => 683,
                'product_id' => 160,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            183 => 
            array (
                'id' => 684,
                'product_id' => 160,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            184 => 
            array (
                'id' => 685,
                'product_id' => 160,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            185 => 
            array (
                'id' => 686,
                'product_id' => 160,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            186 => 
            array (
                'id' => 687,
                'product_id' => 160,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            187 => 
            array (
                'id' => 688,
                'product_id' => 161,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            188 => 
            array (
                'id' => 689,
                'product_id' => 161,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            189 => 
            array (
                'id' => 690,
                'product_id' => 161,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            190 => 
            array (
                'id' => 691,
                'product_id' => 161,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            191 => 
            array (
                'id' => 692,
                'product_id' => 161,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            192 => 
            array (
                'id' => 693,
                'product_id' => 162,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            193 => 
            array (
                'id' => 694,
                'product_id' => 162,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            194 => 
            array (
                'id' => 695,
                'product_id' => 162,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            195 => 
            array (
                'id' => 696,
                'product_id' => 162,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            196 => 
            array (
                'id' => 697,
                'product_id' => 162,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            197 => 
            array (
                'id' => 698,
                'product_id' => 163,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            198 => 
            array (
                'id' => 699,
                'product_id' => 163,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            199 => 
            array (
                'id' => 700,
                'product_id' => 163,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            200 => 
            array (
                'id' => 701,
                'product_id' => 163,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            201 => 
            array (
                'id' => 702,
                'product_id' => 163,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            202 => 
            array (
                'id' => 703,
                'product_id' => 164,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            203 => 
            array (
                'id' => 704,
                'product_id' => 164,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            204 => 
            array (
                'id' => 705,
                'product_id' => 164,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            205 => 
            array (
                'id' => 706,
                'product_id' => 164,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            206 => 
            array (
                'id' => 707,
                'product_id' => 164,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            207 => 
            array (
                'id' => 708,
                'product_id' => 165,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            208 => 
            array (
                'id' => 709,
                'product_id' => 165,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            209 => 
            array (
                'id' => 710,
                'product_id' => 165,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            210 => 
            array (
                'id' => 711,
                'product_id' => 165,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            211 => 
            array (
                'id' => 712,
                'product_id' => 165,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            212 => 
            array (
                'id' => 713,
                'product_id' => 166,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            213 => 
            array (
                'id' => 714,
                'product_id' => 166,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            214 => 
            array (
                'id' => 715,
                'product_id' => 166,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            215 => 
            array (
                'id' => 716,
                'product_id' => 166,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            216 => 
            array (
                'id' => 717,
                'product_id' => 166,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            217 => 
            array (
                'id' => 718,
                'product_id' => 167,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            218 => 
            array (
                'id' => 719,
                'product_id' => 167,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            219 => 
            array (
                'id' => 720,
                'product_id' => 167,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            220 => 
            array (
                'id' => 721,
                'product_id' => 167,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            221 => 
            array (
                'id' => 722,
                'product_id' => 167,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            222 => 
            array (
                'id' => 723,
                'product_id' => 168,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            223 => 
            array (
                'id' => 724,
                'product_id' => 168,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            224 => 
            array (
                'id' => 725,
                'product_id' => 168,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            225 => 
            array (
                'id' => 726,
                'product_id' => 168,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            226 => 
            array (
                'id' => 727,
                'product_id' => 168,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            227 => 
            array (
                'id' => 728,
                'product_id' => 169,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            228 => 
            array (
                'id' => 729,
                'product_id' => 169,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            229 => 
            array (
                'id' => 730,
                'product_id' => 169,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            230 => 
            array (
                'id' => 731,
                'product_id' => 169,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            231 => 
            array (
                'id' => 732,
                'product_id' => 169,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            232 => 
            array (
                'id' => 733,
                'product_id' => 170,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            233 => 
            array (
                'id' => 734,
                'product_id' => 170,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            234 => 
            array (
                'id' => 735,
                'product_id' => 170,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            235 => 
            array (
                'id' => 736,
                'product_id' => 170,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            236 => 
            array (
                'id' => 737,
                'product_id' => 170,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            237 => 
            array (
                'id' => 738,
                'product_id' => 171,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            238 => 
            array (
                'id' => 739,
                'product_id' => 171,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            239 => 
            array (
                'id' => 740,
                'product_id' => 171,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            240 => 
            array (
                'id' => 741,
                'product_id' => 171,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            241 => 
            array (
                'id' => 742,
                'product_id' => 171,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            242 => 
            array (
                'id' => 743,
                'product_id' => 172,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            243 => 
            array (
                'id' => 744,
                'product_id' => 172,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            244 => 
            array (
                'id' => 745,
                'product_id' => 172,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            245 => 
            array (
                'id' => 746,
                'product_id' => 173,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            246 => 
            array (
                'id' => 747,
                'product_id' => 173,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            247 => 
            array (
                'id' => 748,
                'product_id' => 173,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            248 => 
            array (
                'id' => 749,
                'product_id' => 174,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            249 => 
            array (
                'id' => 750,
                'product_id' => 174,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            250 => 
            array (
                'id' => 751,
                'product_id' => 174,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            251 => 
            array (
                'id' => 752,
                'product_id' => 174,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            252 => 
            array (
                'id' => 753,
                'product_id' => 174,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            253 => 
            array (
                'id' => 754,
                'product_id' => 175,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            254 => 
            array (
                'id' => 755,
                'product_id' => 175,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            255 => 
            array (
                'id' => 756,
                'product_id' => 175,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            256 => 
            array (
                'id' => 757,
                'product_id' => 175,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            257 => 
            array (
                'id' => 758,
                'product_id' => 175,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            258 => 
            array (
                'id' => 759,
                'product_id' => 176,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            259 => 
            array (
                'id' => 760,
                'product_id' => 176,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            260 => 
            array (
                'id' => 761,
                'product_id' => 176,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            261 => 
            array (
                'id' => 762,
                'product_id' => 176,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            262 => 
            array (
                'id' => 763,
                'product_id' => 176,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            263 => 
            array (
                'id' => 764,
                'product_id' => 177,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            264 => 
            array (
                'id' => 765,
                'product_id' => 177,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            265 => 
            array (
                'id' => 766,
                'product_id' => 177,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            266 => 
            array (
                'id' => 767,
                'product_id' => 177,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            267 => 
            array (
                'id' => 768,
                'product_id' => 177,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            268 => 
            array (
                'id' => 769,
                'product_id' => 178,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            269 => 
            array (
                'id' => 770,
                'product_id' => 178,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            270 => 
            array (
                'id' => 771,
                'product_id' => 178,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            271 => 
            array (
                'id' => 772,
                'product_id' => 178,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            272 => 
            array (
                'id' => 773,
                'product_id' => 178,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            273 => 
            array (
                'id' => 774,
                'product_id' => 179,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            274 => 
            array (
                'id' => 775,
                'product_id' => 179,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            275 => 
            array (
                'id' => 776,
                'product_id' => 179,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            276 => 
            array (
                'id' => 777,
                'product_id' => 179,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            277 => 
            array (
                'id' => 778,
                'product_id' => 179,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            278 => 
            array (
                'id' => 779,
                'product_id' => 180,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            279 => 
            array (
                'id' => 780,
                'product_id' => 180,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            280 => 
            array (
                'id' => 781,
                'product_id' => 180,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            281 => 
            array (
                'id' => 782,
                'product_id' => 180,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            282 => 
            array (
                'id' => 783,
                'product_id' => 180,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            283 => 
            array (
                'id' => 784,
                'product_id' => 181,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            284 => 
            array (
                'id' => 785,
                'product_id' => 181,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            285 => 
            array (
                'id' => 786,
                'product_id' => 181,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            286 => 
            array (
                'id' => 787,
                'product_id' => 181,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            287 => 
            array (
                'id' => 788,
                'product_id' => 181,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            288 => 
            array (
                'id' => 789,
                'product_id' => 182,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            289 => 
            array (
                'id' => 790,
                'product_id' => 182,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            290 => 
            array (
                'id' => 791,
                'product_id' => 183,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            291 => 
            array (
                'id' => 792,
                'product_id' => 183,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            292 => 
            array (
                'id' => 793,
                'product_id' => 183,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            293 => 
            array (
                'id' => 794,
                'product_id' => 183,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            294 => 
            array (
                'id' => 795,
                'product_id' => 183,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            295 => 
            array (
                'id' => 796,
                'product_id' => 184,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            296 => 
            array (
                'id' => 797,
                'product_id' => 184,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            297 => 
            array (
                'id' => 798,
                'product_id' => 184,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            298 => 
            array (
                'id' => 799,
                'product_id' => 184,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            299 => 
            array (
                'id' => 800,
                'product_id' => 184,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            300 => 
            array (
                'id' => 801,
                'product_id' => 185,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            301 => 
            array (
                'id' => 802,
                'product_id' => 185,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            302 => 
            array (
                'id' => 803,
                'product_id' => 185,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            303 => 
            array (
                'id' => 804,
                'product_id' => 185,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            304 => 
            array (
                'id' => 805,
                'product_id' => 185,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            305 => 
            array (
                'id' => 806,
                'product_id' => 186,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            306 => 
            array (
                'id' => 807,
                'product_id' => 186,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            307 => 
            array (
                'id' => 808,
                'product_id' => 186,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            308 => 
            array (
                'id' => 809,
                'product_id' => 186,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            309 => 
            array (
                'id' => 810,
                'product_id' => 186,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            310 => 
            array (
                'id' => 811,
                'product_id' => 187,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            311 => 
            array (
                'id' => 812,
                'product_id' => 187,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            312 => 
            array (
                'id' => 813,
                'product_id' => 188,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            313 => 
            array (
                'id' => 814,
                'product_id' => 188,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            314 => 
            array (
                'id' => 815,
                'product_id' => 188,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            315 => 
            array (
                'id' => 816,
                'product_id' => 188,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            316 => 
            array (
                'id' => 817,
                'product_id' => 188,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            317 => 
            array (
                'id' => 818,
                'product_id' => 189,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            318 => 
            array (
                'id' => 819,
                'product_id' => 189,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            319 => 
            array (
                'id' => 820,
                'product_id' => 189,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            320 => 
            array (
                'id' => 821,
                'product_id' => 189,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            321 => 
            array (
                'id' => 822,
                'product_id' => 189,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            322 => 
            array (
                'id' => 823,
                'product_id' => 190,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            323 => 
            array (
                'id' => 824,
                'product_id' => 190,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            324 => 
            array (
                'id' => 825,
                'product_id' => 190,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            325 => 
            array (
                'id' => 826,
                'product_id' => 190,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            326 => 
            array (
                'id' => 827,
                'product_id' => 190,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            327 => 
            array (
                'id' => 828,
                'product_id' => 191,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            328 => 
            array (
                'id' => 829,
                'product_id' => 191,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            329 => 
            array (
                'id' => 830,
                'product_id' => 191,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            330 => 
            array (
                'id' => 831,
                'product_id' => 191,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            331 => 
            array (
                'id' => 832,
                'product_id' => 191,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            332 => 
            array (
                'id' => 833,
                'product_id' => 192,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            333 => 
            array (
                'id' => 834,
                'product_id' => 192,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            334 => 
            array (
                'id' => 835,
                'product_id' => 192,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            335 => 
            array (
                'id' => 836,
                'product_id' => 192,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            336 => 
            array (
                'id' => 837,
                'product_id' => 192,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            337 => 
            array (
                'id' => 838,
                'product_id' => 193,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            338 => 
            array (
                'id' => 839,
                'product_id' => 193,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            339 => 
            array (
                'id' => 840,
                'product_id' => 193,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            340 => 
            array (
                'id' => 841,
                'product_id' => 193,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            341 => 
            array (
                'id' => 842,
                'product_id' => 193,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            342 => 
            array (
                'id' => 843,
                'product_id' => 194,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            343 => 
            array (
                'id' => 844,
                'product_id' => 194,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            344 => 
            array (
                'id' => 845,
                'product_id' => 194,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            345 => 
            array (
                'id' => 846,
                'product_id' => 194,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            346 => 
            array (
                'id' => 847,
                'product_id' => 194,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            347 => 
            array (
                'id' => 848,
                'product_id' => 195,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            348 => 
            array (
                'id' => 849,
                'product_id' => 195,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            349 => 
            array (
                'id' => 850,
                'product_id' => 195,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            350 => 
            array (
                'id' => 851,
                'product_id' => 195,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            351 => 
            array (
                'id' => 852,
                'product_id' => 195,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            352 => 
            array (
                'id' => 853,
                'product_id' => 196,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            353 => 
            array (
                'id' => 854,
                'product_id' => 196,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            354 => 
            array (
                'id' => 855,
                'product_id' => 196,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            355 => 
            array (
                'id' => 856,
                'product_id' => 196,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            356 => 
            array (
                'id' => 857,
                'product_id' => 196,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            357 => 
            array (
                'id' => 858,
                'product_id' => 197,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            358 => 
            array (
                'id' => 859,
                'product_id' => 197,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            359 => 
            array (
                'id' => 860,
                'product_id' => 197,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            360 => 
            array (
                'id' => 861,
                'product_id' => 197,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            361 => 
            array (
                'id' => 862,
                'product_id' => 197,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            362 => 
            array (
                'id' => 863,
                'product_id' => 198,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            363 => 
            array (
                'id' => 864,
                'product_id' => 198,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            364 => 
            array (
                'id' => 865,
                'product_id' => 198,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            365 => 
            array (
                'id' => 866,
                'product_id' => 198,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            366 => 
            array (
                'id' => 867,
                'product_id' => 198,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            367 => 
            array (
                'id' => 868,
                'product_id' => 199,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            368 => 
            array (
                'id' => 869,
                'product_id' => 199,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            369 => 
            array (
                'id' => 870,
                'product_id' => 199,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            370 => 
            array (
                'id' => 871,
                'product_id' => 199,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            371 => 
            array (
                'id' => 872,
                'product_id' => 199,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            372 => 
            array (
                'id' => 873,
                'product_id' => 200,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            373 => 
            array (
                'id' => 874,
                'product_id' => 200,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            374 => 
            array (
                'id' => 875,
                'product_id' => 200,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            375 => 
            array (
                'id' => 876,
                'product_id' => 200,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            376 => 
            array (
                'id' => 877,
                'product_id' => 200,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            377 => 
            array (
                'id' => 878,
                'product_id' => 201,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            378 => 
            array (
                'id' => 879,
                'product_id' => 201,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            379 => 
            array (
                'id' => 880,
                'product_id' => 201,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            380 => 
            array (
                'id' => 881,
                'product_id' => 201,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            381 => 
            array (
                'id' => 882,
                'product_id' => 201,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            382 => 
            array (
                'id' => 883,
                'product_id' => 202,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            383 => 
            array (
                'id' => 884,
                'product_id' => 202,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            384 => 
            array (
                'id' => 885,
                'product_id' => 202,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            385 => 
            array (
                'id' => 886,
                'product_id' => 202,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            386 => 
            array (
                'id' => 887,
                'product_id' => 202,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            387 => 
            array (
                'id' => 888,
                'product_id' => 203,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            388 => 
            array (
                'id' => 889,
                'product_id' => 203,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            389 => 
            array (
                'id' => 890,
                'product_id' => 203,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            390 => 
            array (
                'id' => 891,
                'product_id' => 203,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            391 => 
            array (
                'id' => 892,
                'product_id' => 203,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            392 => 
            array (
                'id' => 893,
                'product_id' => 204,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            393 => 
            array (
                'id' => 894,
                'product_id' => 204,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            394 => 
            array (
                'id' => 895,
                'product_id' => 204,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            395 => 
            array (
                'id' => 896,
                'product_id' => 204,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            396 => 
            array (
                'id' => 897,
                'product_id' => 204,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            397 => 
            array (
                'id' => 898,
                'product_id' => 205,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            398 => 
            array (
                'id' => 899,
                'product_id' => 205,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            399 => 
            array (
                'id' => 900,
                'product_id' => 205,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            400 => 
            array (
                'id' => 901,
                'product_id' => 205,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            401 => 
            array (
                'id' => 902,
                'product_id' => 205,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            402 => 
            array (
                'id' => 903,
                'product_id' => 206,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            403 => 
            array (
                'id' => 904,
                'product_id' => 206,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            404 => 
            array (
                'id' => 905,
                'product_id' => 206,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            405 => 
            array (
                'id' => 906,
                'product_id' => 206,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            406 => 
            array (
                'id' => 907,
                'product_id' => 206,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            407 => 
            array (
                'id' => 908,
                'product_id' => 207,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            408 => 
            array (
                'id' => 909,
                'product_id' => 207,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            409 => 
            array (
                'id' => 910,
                'product_id' => 207,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            410 => 
            array (
                'id' => 911,
                'product_id' => 207,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            411 => 
            array (
                'id' => 912,
                'product_id' => 207,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            412 => 
            array (
                'id' => 913,
                'product_id' => 208,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            413 => 
            array (
                'id' => 914,
                'product_id' => 208,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            414 => 
            array (
                'id' => 915,
                'product_id' => 208,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            415 => 
            array (
                'id' => 916,
                'product_id' => 208,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            416 => 
            array (
                'id' => 917,
                'product_id' => 208,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            417 => 
            array (
                'id' => 918,
                'product_id' => 209,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            418 => 
            array (
                'id' => 919,
                'product_id' => 209,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            419 => 
            array (
                'id' => 920,
                'product_id' => 209,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            420 => 
            array (
                'id' => 921,
                'product_id' => 209,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            421 => 
            array (
                'id' => 922,
                'product_id' => 209,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            422 => 
            array (
                'id' => 923,
                'product_id' => 210,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            423 => 
            array (
                'id' => 924,
                'product_id' => 210,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            424 => 
            array (
                'id' => 925,
                'product_id' => 210,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            425 => 
            array (
                'id' => 926,
                'product_id' => 210,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            426 => 
            array (
                'id' => 927,
                'product_id' => 210,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            427 => 
            array (
                'id' => 928,
                'product_id' => 211,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            428 => 
            array (
                'id' => 929,
                'product_id' => 211,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            429 => 
            array (
                'id' => 930,
                'product_id' => 211,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            430 => 
            array (
                'id' => 931,
                'product_id' => 211,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            431 => 
            array (
                'id' => 932,
                'product_id' => 211,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            432 => 
            array (
                'id' => 933,
                'product_id' => 212,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            433 => 
            array (
                'id' => 934,
                'product_id' => 212,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            434 => 
            array (
                'id' => 935,
                'product_id' => 212,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            435 => 
            array (
                'id' => 936,
                'product_id' => 212,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            436 => 
            array (
                'id' => 937,
                'product_id' => 212,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            437 => 
            array (
                'id' => 938,
                'product_id' => 213,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            438 => 
            array (
                'id' => 939,
                'product_id' => 213,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            439 => 
            array (
                'id' => 940,
                'product_id' => 213,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            440 => 
            array (
                'id' => 941,
                'product_id' => 213,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            441 => 
            array (
                'id' => 942,
                'product_id' => 213,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            442 => 
            array (
                'id' => 943,
                'product_id' => 214,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            443 => 
            array (
                'id' => 944,
                'product_id' => 214,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            444 => 
            array (
                'id' => 945,
                'product_id' => 214,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            445 => 
            array (
                'id' => 946,
                'product_id' => 214,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            446 => 
            array (
                'id' => 947,
                'product_id' => 214,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            447 => 
            array (
                'id' => 948,
                'product_id' => 215,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            448 => 
            array (
                'id' => 949,
                'product_id' => 215,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            449 => 
            array (
                'id' => 950,
                'product_id' => 215,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            450 => 
            array (
                'id' => 951,
                'product_id' => 215,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            451 => 
            array (
                'id' => 952,
                'product_id' => 215,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            452 => 
            array (
                'id' => 953,
                'product_id' => 216,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            453 => 
            array (
                'id' => 954,
                'product_id' => 216,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            454 => 
            array (
                'id' => 955,
                'product_id' => 216,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            455 => 
            array (
                'id' => 956,
                'product_id' => 216,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            456 => 
            array (
                'id' => 957,
                'product_id' => 216,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            457 => 
            array (
                'id' => 958,
                'product_id' => 217,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            458 => 
            array (
                'id' => 959,
                'product_id' => 217,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            459 => 
            array (
                'id' => 960,
                'product_id' => 217,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            460 => 
            array (
                'id' => 961,
                'product_id' => 217,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            461 => 
            array (
                'id' => 962,
                'product_id' => 217,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            462 => 
            array (
                'id' => 963,
                'product_id' => 218,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            463 => 
            array (
                'id' => 964,
                'product_id' => 218,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            464 => 
            array (
                'id' => 965,
                'product_id' => 218,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            465 => 
            array (
                'id' => 966,
                'product_id' => 218,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            466 => 
            array (
                'id' => 967,
                'product_id' => 218,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            467 => 
            array (
                'id' => 968,
                'product_id' => 219,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            468 => 
            array (
                'id' => 969,
                'product_id' => 219,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            469 => 
            array (
                'id' => 970,
                'product_id' => 219,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            470 => 
            array (
                'id' => 971,
                'product_id' => 219,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            471 => 
            array (
                'id' => 972,
                'product_id' => 219,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            472 => 
            array (
                'id' => 973,
                'product_id' => 220,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            473 => 
            array (
                'id' => 974,
                'product_id' => 220,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            474 => 
            array (
                'id' => 975,
                'product_id' => 220,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            475 => 
            array (
                'id' => 976,
                'product_id' => 220,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            476 => 
            array (
                'id' => 977,
                'product_id' => 220,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            477 => 
            array (
                'id' => 978,
                'product_id' => 221,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            478 => 
            array (
                'id' => 979,
                'product_id' => 221,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            479 => 
            array (
                'id' => 980,
                'product_id' => 221,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            480 => 
            array (
                'id' => 981,
                'product_id' => 221,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            481 => 
            array (
                'id' => 982,
                'product_id' => 221,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            482 => 
            array (
                'id' => 983,
                'product_id' => 222,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            483 => 
            array (
                'id' => 984,
                'product_id' => 222,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            484 => 
            array (
                'id' => 985,
                'product_id' => 222,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            485 => 
            array (
                'id' => 986,
                'product_id' => 222,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            486 => 
            array (
                'id' => 987,
                'product_id' => 222,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            487 => 
            array (
                'id' => 988,
                'product_id' => 223,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            488 => 
            array (
                'id' => 989,
                'product_id' => 223,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            489 => 
            array (
                'id' => 990,
                'product_id' => 223,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            490 => 
            array (
                'id' => 991,
                'product_id' => 223,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            491 => 
            array (
                'id' => 992,
                'product_id' => 223,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            492 => 
            array (
                'id' => 993,
                'product_id' => 224,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            493 => 
            array (
                'id' => 994,
                'product_id' => 224,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            494 => 
            array (
                'id' => 995,
                'product_id' => 224,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            495 => 
            array (
                'id' => 996,
                'product_id' => 224,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            496 => 
            array (
                'id' => 997,
                'product_id' => 224,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            497 => 
            array (
                'id' => 998,
                'product_id' => 225,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            498 => 
            array (
                'id' => 999,
                'product_id' => 225,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            499 => 
            array (
                'id' => 1000,
                'product_id' => 225,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
        ));
        \DB::table('skins')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'product_id' => 225,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            1 => 
            array (
                'id' => 1002,
                'product_id' => 225,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            2 => 
            array (
                'id' => 1003,
                'product_id' => 226,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            3 => 
            array (
                'id' => 1004,
                'product_id' => 226,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            4 => 
            array (
                'id' => 1005,
                'product_id' => 226,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            5 => 
            array (
                'id' => 1006,
                'product_id' => 226,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            6 => 
            array (
                'id' => 1007,
                'product_id' => 226,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            7 => 
            array (
                'id' => 1008,
                'product_id' => 227,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            8 => 
            array (
                'id' => 1009,
                'product_id' => 227,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            9 => 
            array (
                'id' => 1010,
                'product_id' => 227,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            10 => 
            array (
                'id' => 1011,
                'product_id' => 227,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            11 => 
            array (
                'id' => 1012,
                'product_id' => 227,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            12 => 
            array (
                'id' => 1013,
                'product_id' => 228,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            13 => 
            array (
                'id' => 1014,
                'product_id' => 228,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            14 => 
            array (
                'id' => 1015,
                'product_id' => 228,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            15 => 
            array (
                'id' => 1016,
                'product_id' => 229,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            16 => 
            array (
                'id' => 1017,
                'product_id' => 229,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            17 => 
            array (
                'id' => 1018,
                'product_id' => 229,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            18 => 
            array (
                'id' => 1019,
                'product_id' => 229,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            19 => 
            array (
                'id' => 1020,
                'product_id' => 229,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            20 => 
            array (
                'id' => 1021,
                'product_id' => 230,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            21 => 
            array (
                'id' => 1022,
                'product_id' => 230,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            22 => 
            array (
                'id' => 1023,
                'product_id' => 230,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            23 => 
            array (
                'id' => 1024,
                'product_id' => 230,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            24 => 
            array (
                'id' => 1025,
                'product_id' => 230,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            25 => 
            array (
                'id' => 1026,
                'product_id' => 231,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            26 => 
            array (
                'id' => 1027,
                'product_id' => 231,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            27 => 
            array (
                'id' => 1028,
                'product_id' => 231,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            28 => 
            array (
                'id' => 1029,
                'product_id' => 231,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            29 => 
            array (
                'id' => 1030,
                'product_id' => 231,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            30 => 
            array (
                'id' => 1031,
                'product_id' => 232,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            31 => 
            array (
                'id' => 1032,
                'product_id' => 232,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            32 => 
            array (
                'id' => 1033,
                'product_id' => 232,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            33 => 
            array (
                'id' => 1034,
                'product_id' => 232,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            34 => 
            array (
                'id' => 1035,
                'product_id' => 232,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            35 => 
            array (
                'id' => 1036,
                'product_id' => 233,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            36 => 
            array (
                'id' => 1037,
                'product_id' => 233,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            37 => 
            array (
                'id' => 1038,
                'product_id' => 233,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            38 => 
            array (
                'id' => 1039,
                'product_id' => 233,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            39 => 
            array (
                'id' => 1040,
                'product_id' => 233,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            40 => 
            array (
                'id' => 1041,
                'product_id' => 234,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            41 => 
            array (
                'id' => 1042,
                'product_id' => 234,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            42 => 
            array (
                'id' => 1043,
                'product_id' => 234,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            43 => 
            array (
                'id' => 1044,
                'product_id' => 234,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            44 => 
            array (
                'id' => 1045,
                'product_id' => 234,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            45 => 
            array (
                'id' => 1046,
                'product_id' => 235,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            46 => 
            array (
                'id' => 1047,
                'product_id' => 235,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            47 => 
            array (
                'id' => 1048,
                'product_id' => 235,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            48 => 
            array (
                'id' => 1049,
                'product_id' => 235,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            49 => 
            array (
                'id' => 1050,
                'product_id' => 235,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            50 => 
            array (
                'id' => 1051,
                'product_id' => 236,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            51 => 
            array (
                'id' => 1052,
                'product_id' => 236,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            52 => 
            array (
                'id' => 1053,
                'product_id' => 236,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            53 => 
            array (
                'id' => 1054,
                'product_id' => 236,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            54 => 
            array (
                'id' => 1055,
                'product_id' => 236,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            55 => 
            array (
                'id' => 1056,
                'product_id' => 237,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            56 => 
            array (
                'id' => 1057,
                'product_id' => 237,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            57 => 
            array (
                'id' => 1058,
                'product_id' => 237,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            58 => 
            array (
                'id' => 1059,
                'product_id' => 237,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            59 => 
            array (
                'id' => 1060,
                'product_id' => 237,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            60 => 
            array (
                'id' => 1061,
                'product_id' => 238,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            61 => 
            array (
                'id' => 1062,
                'product_id' => 238,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            62 => 
            array (
                'id' => 1063,
                'product_id' => 238,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            63 => 
            array (
                'id' => 1064,
                'product_id' => 238,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            64 => 
            array (
                'id' => 1065,
                'product_id' => 238,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            65 => 
            array (
                'id' => 1066,
                'product_id' => 239,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            66 => 
            array (
                'id' => 1067,
                'product_id' => 239,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            67 => 
            array (
                'id' => 1068,
                'product_id' => 239,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            68 => 
            array (
                'id' => 1069,
                'product_id' => 239,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            69 => 
            array (
                'id' => 1070,
                'product_id' => 239,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            70 => 
            array (
                'id' => 1071,
                'product_id' => 240,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            71 => 
            array (
                'id' => 1072,
                'product_id' => 240,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            72 => 
            array (
                'id' => 1073,
                'product_id' => 240,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            73 => 
            array (
                'id' => 1074,
                'product_id' => 240,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            74 => 
            array (
                'id' => 1075,
                'product_id' => 240,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            75 => 
            array (
                'id' => 1076,
                'product_id' => 241,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            76 => 
            array (
                'id' => 1077,
                'product_id' => 241,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            77 => 
            array (
                'id' => 1078,
                'product_id' => 241,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            78 => 
            array (
                'id' => 1079,
                'product_id' => 241,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            79 => 
            array (
                'id' => 1080,
                'product_id' => 241,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            80 => 
            array (
                'id' => 1081,
                'product_id' => 242,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            81 => 
            array (
                'id' => 1082,
                'product_id' => 242,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            82 => 
            array (
                'id' => 1083,
                'product_id' => 242,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            83 => 
            array (
                'id' => 1084,
                'product_id' => 242,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            84 => 
            array (
                'id' => 1085,
                'product_id' => 242,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            85 => 
            array (
                'id' => 1086,
                'product_id' => 243,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            86 => 
            array (
                'id' => 1087,
                'product_id' => 243,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            87 => 
            array (
                'id' => 1088,
                'product_id' => 243,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            88 => 
            array (
                'id' => 1089,
                'product_id' => 243,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            89 => 
            array (
                'id' => 1090,
                'product_id' => 243,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            90 => 
            array (
                'id' => 1091,
                'product_id' => 244,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            91 => 
            array (
                'id' => 1092,
                'product_id' => 244,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            92 => 
            array (
                'id' => 1093,
                'product_id' => 244,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            93 => 
            array (
                'id' => 1094,
                'product_id' => 244,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            94 => 
            array (
                'id' => 1095,
                'product_id' => 244,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            95 => 
            array (
                'id' => 1096,
                'product_id' => 245,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            96 => 
            array (
                'id' => 1097,
                'product_id' => 245,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            97 => 
            array (
                'id' => 1098,
                'product_id' => 245,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            98 => 
            array (
                'id' => 1099,
                'product_id' => 245,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            99 => 
            array (
                'id' => 1100,
                'product_id' => 245,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            100 => 
            array (
                'id' => 1101,
                'product_id' => 246,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            101 => 
            array (
                'id' => 1102,
                'product_id' => 246,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            102 => 
            array (
                'id' => 1103,
                'product_id' => 246,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            103 => 
            array (
                'id' => 1104,
                'product_id' => 246,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            104 => 
            array (
                'id' => 1105,
                'product_id' => 246,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            105 => 
            array (
                'id' => 1106,
                'product_id' => 247,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            106 => 
            array (
                'id' => 1107,
                'product_id' => 247,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            107 => 
            array (
                'id' => 1108,
                'product_id' => 247,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            108 => 
            array (
                'id' => 1109,
                'product_id' => 247,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            109 => 
            array (
                'id' => 1110,
                'product_id' => 247,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            110 => 
            array (
                'id' => 1111,
                'product_id' => 248,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            111 => 
            array (
                'id' => 1112,
                'product_id' => 248,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            112 => 
            array (
                'id' => 1113,
                'product_id' => 248,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            113 => 
            array (
                'id' => 1114,
                'product_id' => 248,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            114 => 
            array (
                'id' => 1115,
                'product_id' => 248,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            115 => 
            array (
                'id' => 1116,
                'product_id' => 249,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            116 => 
            array (
                'id' => 1117,
                'product_id' => 249,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            117 => 
            array (
                'id' => 1118,
                'product_id' => 249,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            118 => 
            array (
                'id' => 1119,
                'product_id' => 249,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            119 => 
            array (
                'id' => 1120,
                'product_id' => 249,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            120 => 
            array (
                'id' => 1121,
                'product_id' => 250,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            121 => 
            array (
                'id' => 1122,
                'product_id' => 250,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            122 => 
            array (
                'id' => 1123,
                'product_id' => 250,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            123 => 
            array (
                'id' => 1124,
                'product_id' => 250,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            124 => 
            array (
                'id' => 1125,
                'product_id' => 250,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            125 => 
            array (
                'id' => 1126,
                'product_id' => 251,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            126 => 
            array (
                'id' => 1127,
                'product_id' => 251,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            127 => 
            array (
                'id' => 1128,
                'product_id' => 251,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            128 => 
            array (
                'id' => 1129,
                'product_id' => 251,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            129 => 
            array (
                'id' => 1130,
                'product_id' => 251,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            130 => 
            array (
                'id' => 1131,
                'product_id' => 252,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            131 => 
            array (
                'id' => 1132,
                'product_id' => 252,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            132 => 
            array (
                'id' => 1133,
                'product_id' => 252,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            133 => 
            array (
                'id' => 1134,
                'product_id' => 252,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            134 => 
            array (
                'id' => 1135,
                'product_id' => 252,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            135 => 
            array (
                'id' => 1136,
                'product_id' => 253,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            136 => 
            array (
                'id' => 1137,
                'product_id' => 253,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            137 => 
            array (
                'id' => 1138,
                'product_id' => 253,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            138 => 
            array (
                'id' => 1139,
                'product_id' => 253,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            139 => 
            array (
                'id' => 1140,
                'product_id' => 253,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            140 => 
            array (
                'id' => 1141,
                'product_id' => 254,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            141 => 
            array (
                'id' => 1142,
                'product_id' => 254,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            142 => 
            array (
                'id' => 1143,
                'product_id' => 254,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            143 => 
            array (
                'id' => 1144,
                'product_id' => 254,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            144 => 
            array (
                'id' => 1145,
                'product_id' => 254,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            145 => 
            array (
                'id' => 1146,
                'product_id' => 255,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            146 => 
            array (
                'id' => 1147,
                'product_id' => 255,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            147 => 
            array (
                'id' => 1148,
                'product_id' => 255,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            148 => 
            array (
                'id' => 1149,
                'product_id' => 255,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            149 => 
            array (
                'id' => 1150,
                'product_id' => 255,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            150 => 
            array (
                'id' => 1151,
                'product_id' => 256,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            151 => 
            array (
                'id' => 1152,
                'product_id' => 256,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            152 => 
            array (
                'id' => 1153,
                'product_id' => 256,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            153 => 
            array (
                'id' => 1154,
                'product_id' => 256,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            154 => 
            array (
                'id' => 1155,
                'product_id' => 256,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            155 => 
            array (
                'id' => 1156,
                'product_id' => 257,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            156 => 
            array (
                'id' => 1157,
                'product_id' => 257,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            157 => 
            array (
                'id' => 1158,
                'product_id' => 257,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            158 => 
            array (
                'id' => 1159,
                'product_id' => 257,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            159 => 
            array (
                'id' => 1160,
                'product_id' => 257,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            160 => 
            array (
                'id' => 1161,
                'product_id' => 258,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            161 => 
            array (
                'id' => 1162,
                'product_id' => 258,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            162 => 
            array (
                'id' => 1163,
                'product_id' => 258,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            163 => 
            array (
                'id' => 1164,
                'product_id' => 258,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            164 => 
            array (
                'id' => 1165,
                'product_id' => 258,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            165 => 
            array (
                'id' => 1166,
                'product_id' => 259,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            166 => 
            array (
                'id' => 1167,
                'product_id' => 259,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            167 => 
            array (
                'id' => 1168,
                'product_id' => 259,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            168 => 
            array (
                'id' => 1169,
                'product_id' => 259,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            169 => 
            array (
                'id' => 1170,
                'product_id' => 259,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            170 => 
            array (
                'id' => 1171,
                'product_id' => 260,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            171 => 
            array (
                'id' => 1172,
                'product_id' => 260,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            172 => 
            array (
                'id' => 1173,
                'product_id' => 260,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            173 => 
            array (
                'id' => 1174,
                'product_id' => 260,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            174 => 
            array (
                'id' => 1175,
                'product_id' => 260,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            175 => 
            array (
                'id' => 1176,
                'product_id' => 261,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            176 => 
            array (
                'id' => 1177,
                'product_id' => 261,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            177 => 
            array (
                'id' => 1178,
                'product_id' => 261,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            178 => 
            array (
                'id' => 1179,
                'product_id' => 261,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            179 => 
            array (
                'id' => 1180,
                'product_id' => 261,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            180 => 
            array (
                'id' => 1181,
                'product_id' => 262,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            181 => 
            array (
                'id' => 1182,
                'product_id' => 262,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            182 => 
            array (
                'id' => 1183,
                'product_id' => 262,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            183 => 
            array (
                'id' => 1184,
                'product_id' => 262,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            184 => 
            array (
                'id' => 1185,
                'product_id' => 262,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            185 => 
            array (
                'id' => 1186,
                'product_id' => 263,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            186 => 
            array (
                'id' => 1187,
                'product_id' => 263,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            187 => 
            array (
                'id' => 1188,
                'product_id' => 263,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            188 => 
            array (
                'id' => 1189,
                'product_id' => 263,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            189 => 
            array (
                'id' => 1190,
                'product_id' => 263,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            190 => 
            array (
                'id' => 1191,
                'product_id' => 264,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            191 => 
            array (
                'id' => 1192,
                'product_id' => 264,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            192 => 
            array (
                'id' => 1193,
                'product_id' => 264,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            193 => 
            array (
                'id' => 1194,
                'product_id' => 264,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            194 => 
            array (
                'id' => 1195,
                'product_id' => 264,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            195 => 
            array (
                'id' => 1196,
                'product_id' => 265,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            196 => 
            array (
                'id' => 1197,
                'product_id' => 265,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            197 => 
            array (
                'id' => 1198,
                'product_id' => 265,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            198 => 
            array (
                'id' => 1199,
                'product_id' => 265,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            199 => 
            array (
                'id' => 1200,
                'product_id' => 265,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            200 => 
            array (
                'id' => 1201,
                'product_id' => 266,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            201 => 
            array (
                'id' => 1202,
                'product_id' => 266,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            202 => 
            array (
                'id' => 1203,
                'product_id' => 266,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            203 => 
            array (
                'id' => 1204,
                'product_id' => 266,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            204 => 
            array (
                'id' => 1205,
                'product_id' => 266,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            205 => 
            array (
                'id' => 1206,
                'product_id' => 267,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            206 => 
            array (
                'id' => 1207,
                'product_id' => 267,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            207 => 
            array (
                'id' => 1208,
                'product_id' => 267,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            208 => 
            array (
                'id' => 1209,
                'product_id' => 267,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            209 => 
            array (
                'id' => 1210,
                'product_id' => 267,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            210 => 
            array (
                'id' => 1211,
                'product_id' => 268,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            211 => 
            array (
                'id' => 1212,
                'product_id' => 268,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            212 => 
            array (
                'id' => 1213,
                'product_id' => 268,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            213 => 
            array (
                'id' => 1214,
                'product_id' => 268,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            214 => 
            array (
                'id' => 1215,
                'product_id' => 268,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            215 => 
            array (
                'id' => 1216,
                'product_id' => 269,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            216 => 
            array (
                'id' => 1217,
                'product_id' => 269,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            217 => 
            array (
                'id' => 1218,
                'product_id' => 269,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            218 => 
            array (
                'id' => 1219,
                'product_id' => 269,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            219 => 
            array (
                'id' => 1220,
                'product_id' => 269,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            220 => 
            array (
                'id' => 1221,
                'product_id' => 270,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            221 => 
            array (
                'id' => 1222,
                'product_id' => 270,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            222 => 
            array (
                'id' => 1223,
                'product_id' => 270,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            223 => 
            array (
                'id' => 1224,
                'product_id' => 270,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            224 => 
            array (
                'id' => 1225,
                'product_id' => 270,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            225 => 
            array (
                'id' => 1226,
                'product_id' => 271,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            226 => 
            array (
                'id' => 1227,
                'product_id' => 271,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            227 => 
            array (
                'id' => 1228,
                'product_id' => 271,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            228 => 
            array (
                'id' => 1229,
                'product_id' => 271,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            229 => 
            array (
                'id' => 1230,
                'product_id' => 271,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            230 => 
            array (
                'id' => 1231,
                'product_id' => 272,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            231 => 
            array (
                'id' => 1232,
                'product_id' => 272,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            232 => 
            array (
                'id' => 1233,
                'product_id' => 272,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            233 => 
            array (
                'id' => 1234,
                'product_id' => 272,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            234 => 
            array (
                'id' => 1235,
                'product_id' => 272,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            235 => 
            array (
                'id' => 1236,
                'product_id' => 273,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            236 => 
            array (
                'id' => 1237,
                'product_id' => 273,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            237 => 
            array (
                'id' => 1238,
                'product_id' => 273,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            238 => 
            array (
                'id' => 1239,
                'product_id' => 273,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            239 => 
            array (
                'id' => 1240,
                'product_id' => 273,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            240 => 
            array (
                'id' => 1241,
                'product_id' => 274,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            241 => 
            array (
                'id' => 1242,
                'product_id' => 274,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            242 => 
            array (
                'id' => 1243,
                'product_id' => 274,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            243 => 
            array (
                'id' => 1244,
                'product_id' => 274,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            244 => 
            array (
                'id' => 1245,
                'product_id' => 274,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            245 => 
            array (
                'id' => 1246,
                'product_id' => 275,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            246 => 
            array (
                'id' => 1247,
                'product_id' => 275,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            247 => 
            array (
                'id' => 1248,
                'product_id' => 275,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            248 => 
            array (
                'id' => 1249,
                'product_id' => 275,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            249 => 
            array (
                'id' => 1250,
                'product_id' => 275,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            250 => 
            array (
                'id' => 1251,
                'product_id' => 276,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            251 => 
            array (
                'id' => 1252,
                'product_id' => 276,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            252 => 
            array (
                'id' => 1253,
                'product_id' => 276,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            253 => 
            array (
                'id' => 1254,
                'product_id' => 276,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            254 => 
            array (
                'id' => 1255,
                'product_id' => 276,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            255 => 
            array (
                'id' => 1256,
                'product_id' => 277,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            256 => 
            array (
                'id' => 1257,
                'product_id' => 277,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            257 => 
            array (
                'id' => 1258,
                'product_id' => 277,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            258 => 
            array (
                'id' => 1259,
                'product_id' => 277,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            259 => 
            array (
                'id' => 1260,
                'product_id' => 277,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            260 => 
            array (
                'id' => 1261,
                'product_id' => 278,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            261 => 
            array (
                'id' => 1262,
                'product_id' => 278,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            262 => 
            array (
                'id' => 1263,
                'product_id' => 278,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            263 => 
            array (
                'id' => 1264,
                'product_id' => 278,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            264 => 
            array (
                'id' => 1265,
                'product_id' => 278,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            265 => 
            array (
                'id' => 1266,
                'product_id' => 279,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            266 => 
            array (
                'id' => 1267,
                'product_id' => 279,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            267 => 
            array (
                'id' => 1268,
                'product_id' => 279,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            268 => 
            array (
                'id' => 1269,
                'product_id' => 279,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            269 => 
            array (
                'id' => 1270,
                'product_id' => 279,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            270 => 
            array (
                'id' => 1271,
                'product_id' => 280,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            271 => 
            array (
                'id' => 1272,
                'product_id' => 280,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            272 => 
            array (
                'id' => 1273,
                'product_id' => 280,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            273 => 
            array (
                'id' => 1274,
                'product_id' => 280,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            274 => 
            array (
                'id' => 1275,
                'product_id' => 280,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            275 => 
            array (
                'id' => 1276,
                'product_id' => 281,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            276 => 
            array (
                'id' => 1277,
                'product_id' => 281,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            277 => 
            array (
                'id' => 1278,
                'product_id' => 281,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            278 => 
            array (
                'id' => 1279,
                'product_id' => 281,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            279 => 
            array (
                'id' => 1280,
                'product_id' => 281,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            280 => 
            array (
                'id' => 1281,
                'product_id' => 282,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            281 => 
            array (
                'id' => 1282,
                'product_id' => 282,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            282 => 
            array (
                'id' => 1283,
                'product_id' => 282,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            283 => 
            array (
                'id' => 1284,
                'product_id' => 282,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            284 => 
            array (
                'id' => 1285,
                'product_id' => 282,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            285 => 
            array (
                'id' => 1286,
                'product_id' => 283,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            286 => 
            array (
                'id' => 1287,
                'product_id' => 283,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            287 => 
            array (
                'id' => 1288,
                'product_id' => 283,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            288 => 
            array (
                'id' => 1289,
                'product_id' => 283,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            289 => 
            array (
                'id' => 1290,
                'product_id' => 283,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            290 => 
            array (
                'id' => 1291,
                'product_id' => 284,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            291 => 
            array (
                'id' => 1292,
                'product_id' => 284,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            292 => 
            array (
                'id' => 1293,
                'product_id' => 284,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            293 => 
            array (
                'id' => 1294,
                'product_id' => 284,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            294 => 
            array (
                'id' => 1295,
                'product_id' => 284,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            295 => 
            array (
                'id' => 1296,
                'product_id' => 285,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            296 => 
            array (
                'id' => 1297,
                'product_id' => 285,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            297 => 
            array (
                'id' => 1298,
                'product_id' => 285,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            298 => 
            array (
                'id' => 1299,
                'product_id' => 285,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            299 => 
            array (
                'id' => 1300,
                'product_id' => 285,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            300 => 
            array (
                'id' => 1301,
                'product_id' => 286,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            301 => 
            array (
                'id' => 1302,
                'product_id' => 286,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            302 => 
            array (
                'id' => 1303,
                'product_id' => 286,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            303 => 
            array (
                'id' => 1304,
                'product_id' => 286,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            304 => 
            array (
                'id' => 1305,
                'product_id' => 286,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            305 => 
            array (
                'id' => 1306,
                'product_id' => 287,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            306 => 
            array (
                'id' => 1307,
                'product_id' => 287,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            307 => 
            array (
                'id' => 1308,
                'product_id' => 287,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            308 => 
            array (
                'id' => 1309,
                'product_id' => 287,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            309 => 
            array (
                'id' => 1310,
                'product_id' => 287,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            310 => 
            array (
                'id' => 1311,
                'product_id' => 288,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            311 => 
            array (
                'id' => 1312,
                'product_id' => 288,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            312 => 
            array (
                'id' => 1313,
                'product_id' => 288,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            313 => 
            array (
                'id' => 1314,
                'product_id' => 288,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            314 => 
            array (
                'id' => 1315,
                'product_id' => 288,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            315 => 
            array (
                'id' => 1316,
                'product_id' => 289,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            316 => 
            array (
                'id' => 1317,
                'product_id' => 289,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            317 => 
            array (
                'id' => 1318,
                'product_id' => 289,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            318 => 
            array (
                'id' => 1319,
                'product_id' => 289,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            319 => 
            array (
                'id' => 1320,
                'product_id' => 289,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            320 => 
            array (
                'id' => 1321,
                'product_id' => 290,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            321 => 
            array (
                'id' => 1322,
                'product_id' => 290,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            322 => 
            array (
                'id' => 1323,
                'product_id' => 290,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            323 => 
            array (
                'id' => 1324,
                'product_id' => 290,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            324 => 
            array (
                'id' => 1325,
                'product_id' => 290,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            325 => 
            array (
                'id' => 1326,
                'product_id' => 291,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            326 => 
            array (
                'id' => 1327,
                'product_id' => 291,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            327 => 
            array (
                'id' => 1328,
                'product_id' => 291,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            328 => 
            array (
                'id' => 1329,
                'product_id' => 291,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            329 => 
            array (
                'id' => 1330,
                'product_id' => 291,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            330 => 
            array (
                'id' => 1331,
                'product_id' => 292,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            331 => 
            array (
                'id' => 1332,
                'product_id' => 292,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            332 => 
            array (
                'id' => 1333,
                'product_id' => 292,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            333 => 
            array (
                'id' => 1334,
                'product_id' => 292,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            334 => 
            array (
                'id' => 1335,
                'product_id' => 292,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            335 => 
            array (
                'id' => 1336,
                'product_id' => 293,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            336 => 
            array (
                'id' => 1337,
                'product_id' => 293,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            337 => 
            array (
                'id' => 1338,
                'product_id' => 293,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            338 => 
            array (
                'id' => 1339,
                'product_id' => 293,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            339 => 
            array (
                'id' => 1340,
                'product_id' => 293,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            340 => 
            array (
                'id' => 1341,
                'product_id' => 294,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            341 => 
            array (
                'id' => 1342,
                'product_id' => 294,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            342 => 
            array (
                'id' => 1343,
                'product_id' => 294,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            343 => 
            array (
                'id' => 1344,
                'product_id' => 294,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            344 => 
            array (
                'id' => 1345,
                'product_id' => 294,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            345 => 
            array (
                'id' => 1346,
                'product_id' => 295,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            346 => 
            array (
                'id' => 1347,
                'product_id' => 295,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            347 => 
            array (
                'id' => 1348,
                'product_id' => 295,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            348 => 
            array (
                'id' => 1349,
                'product_id' => 295,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            349 => 
            array (
                'id' => 1350,
                'product_id' => 295,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            350 => 
            array (
                'id' => 1351,
                'product_id' => 296,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            351 => 
            array (
                'id' => 1352,
                'product_id' => 296,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            352 => 
            array (
                'id' => 1353,
                'product_id' => 296,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            353 => 
            array (
                'id' => 1354,
                'product_id' => 296,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            354 => 
            array (
                'id' => 1355,
                'product_id' => 296,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            355 => 
            array (
                'id' => 1356,
                'product_id' => 297,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            356 => 
            array (
                'id' => 1357,
                'product_id' => 297,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            357 => 
            array (
                'id' => 1358,
                'product_id' => 297,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            358 => 
            array (
                'id' => 1359,
                'product_id' => 297,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            359 => 
            array (
                'id' => 1360,
                'product_id' => 297,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            360 => 
            array (
                'id' => 1361,
                'product_id' => 298,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            361 => 
            array (
                'id' => 1362,
                'product_id' => 298,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            362 => 
            array (
                'id' => 1363,
                'product_id' => 298,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            363 => 
            array (
                'id' => 1364,
                'product_id' => 298,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            364 => 
            array (
                'id' => 1365,
                'product_id' => 298,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            365 => 
            array (
                'id' => 1366,
                'product_id' => 299,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            366 => 
            array (
                'id' => 1367,
                'product_id' => 299,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            367 => 
            array (
                'id' => 1368,
                'product_id' => 299,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            368 => 
            array (
                'id' => 1369,
                'product_id' => 299,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            369 => 
            array (
                'id' => 1370,
                'product_id' => 299,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            370 => 
            array (
                'id' => 1371,
                'product_id' => 300,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            371 => 
            array (
                'id' => 1372,
                'product_id' => 300,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            372 => 
            array (
                'id' => 1373,
                'product_id' => 300,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            373 => 
            array (
                'id' => 1374,
                'product_id' => 300,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            374 => 
            array (
                'id' => 1375,
                'product_id' => 300,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            375 => 
            array (
                'id' => 1376,
                'product_id' => 301,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            376 => 
            array (
                'id' => 1377,
                'product_id' => 301,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            377 => 
            array (
                'id' => 1378,
                'product_id' => 301,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            378 => 
            array (
                'id' => 1379,
                'product_id' => 301,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            379 => 
            array (
                'id' => 1380,
                'product_id' => 301,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            380 => 
            array (
                'id' => 1381,
                'product_id' => 302,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            381 => 
            array (
                'id' => 1382,
                'product_id' => 302,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            382 => 
            array (
                'id' => 1383,
                'product_id' => 302,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            383 => 
            array (
                'id' => 1384,
                'product_id' => 302,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            384 => 
            array (
                'id' => 1385,
                'product_id' => 302,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            385 => 
            array (
                'id' => 1386,
                'product_id' => 303,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            386 => 
            array (
                'id' => 1387,
                'product_id' => 303,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            387 => 
            array (
                'id' => 1388,
                'product_id' => 303,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            388 => 
            array (
                'id' => 1389,
                'product_id' => 303,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            389 => 
            array (
                'id' => 1390,
                'product_id' => 303,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            390 => 
            array (
                'id' => 1391,
                'product_id' => 304,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            391 => 
            array (
                'id' => 1392,
                'product_id' => 304,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            392 => 
            array (
                'id' => 1393,
                'product_id' => 304,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            393 => 
            array (
                'id' => 1394,
                'product_id' => 304,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            394 => 
            array (
                'id' => 1395,
                'product_id' => 304,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            395 => 
            array (
                'id' => 1396,
                'product_id' => 305,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            396 => 
            array (
                'id' => 1397,
                'product_id' => 305,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            397 => 
            array (
                'id' => 1398,
                'product_id' => 305,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            398 => 
            array (
                'id' => 1399,
                'product_id' => 305,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            399 => 
            array (
                'id' => 1400,
                'product_id' => 305,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            400 => 
            array (
                'id' => 1401,
                'product_id' => 306,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            401 => 
            array (
                'id' => 1402,
                'product_id' => 306,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            402 => 
            array (
                'id' => 1403,
                'product_id' => 306,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            403 => 
            array (
                'id' => 1404,
                'product_id' => 306,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            404 => 
            array (
                'id' => 1405,
                'product_id' => 306,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            405 => 
            array (
                'id' => 1406,
                'product_id' => 307,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            406 => 
            array (
                'id' => 1407,
                'product_id' => 307,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            407 => 
            array (
                'id' => 1408,
                'product_id' => 307,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            408 => 
            array (
                'id' => 1409,
                'product_id' => 307,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            409 => 
            array (
                'id' => 1410,
                'product_id' => 307,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            410 => 
            array (
                'id' => 1411,
                'product_id' => 308,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            411 => 
            array (
                'id' => 1412,
                'product_id' => 308,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            412 => 
            array (
                'id' => 1413,
                'product_id' => 308,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            413 => 
            array (
                'id' => 1414,
                'product_id' => 308,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            414 => 
            array (
                'id' => 1415,
                'product_id' => 308,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            415 => 
            array (
                'id' => 1416,
                'product_id' => 309,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            416 => 
            array (
                'id' => 1417,
                'product_id' => 309,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            417 => 
            array (
                'id' => 1418,
                'product_id' => 309,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            418 => 
            array (
                'id' => 1419,
                'product_id' => 309,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            419 => 
            array (
                'id' => 1420,
                'product_id' => 309,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            420 => 
            array (
                'id' => 1421,
                'product_id' => 310,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            421 => 
            array (
                'id' => 1422,
                'product_id' => 310,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            422 => 
            array (
                'id' => 1423,
                'product_id' => 310,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            423 => 
            array (
                'id' => 1424,
                'product_id' => 310,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            424 => 
            array (
                'id' => 1425,
                'product_id' => 310,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            425 => 
            array (
                'id' => 1426,
                'product_id' => 311,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            426 => 
            array (
                'id' => 1427,
                'product_id' => 311,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            427 => 
            array (
                'id' => 1428,
                'product_id' => 311,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            428 => 
            array (
                'id' => 1429,
                'product_id' => 311,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            429 => 
            array (
                'id' => 1430,
                'product_id' => 311,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            430 => 
            array (
                'id' => 1431,
                'product_id' => 312,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            431 => 
            array (
                'id' => 1432,
                'product_id' => 312,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            432 => 
            array (
                'id' => 1433,
                'product_id' => 312,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            433 => 
            array (
                'id' => 1434,
                'product_id' => 312,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            434 => 
            array (
                'id' => 1435,
                'product_id' => 312,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            435 => 
            array (
                'id' => 1436,
                'product_id' => 313,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            436 => 
            array (
                'id' => 1437,
                'product_id' => 313,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            437 => 
            array (
                'id' => 1438,
                'product_id' => 313,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            438 => 
            array (
                'id' => 1439,
                'product_id' => 313,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            439 => 
            array (
                'id' => 1440,
                'product_id' => 313,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            440 => 
            array (
                'id' => 1441,
                'product_id' => 314,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            441 => 
            array (
                'id' => 1442,
                'product_id' => 314,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            442 => 
            array (
                'id' => 1443,
                'product_id' => 314,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            443 => 
            array (
                'id' => 1444,
                'product_id' => 314,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            444 => 
            array (
                'id' => 1445,
                'product_id' => 314,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            445 => 
            array (
                'id' => 1446,
                'product_id' => 315,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            446 => 
            array (
                'id' => 1447,
                'product_id' => 315,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            447 => 
            array (
                'id' => 1448,
                'product_id' => 315,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            448 => 
            array (
                'id' => 1449,
                'product_id' => 315,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            449 => 
            array (
                'id' => 1450,
                'product_id' => 315,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            450 => 
            array (
                'id' => 1451,
                'product_id' => 316,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            451 => 
            array (
                'id' => 1452,
                'product_id' => 316,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            452 => 
            array (
                'id' => 1453,
                'product_id' => 316,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            453 => 
            array (
                'id' => 1454,
                'product_id' => 316,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            454 => 
            array (
                'id' => 1455,
                'product_id' => 316,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            455 => 
            array (
                'id' => 1456,
                'product_id' => 317,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            456 => 
            array (
                'id' => 1457,
                'product_id' => 317,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            457 => 
            array (
                'id' => 1458,
                'product_id' => 317,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            458 => 
            array (
                'id' => 1459,
                'product_id' => 317,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            459 => 
            array (
                'id' => 1460,
                'product_id' => 317,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            460 => 
            array (
                'id' => 1461,
                'product_id' => 318,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            461 => 
            array (
                'id' => 1462,
                'product_id' => 318,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            462 => 
            array (
                'id' => 1463,
                'product_id' => 318,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            463 => 
            array (
                'id' => 1464,
                'product_id' => 318,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            464 => 
            array (
                'id' => 1465,
                'product_id' => 318,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            465 => 
            array (
                'id' => 1466,
                'product_id' => 319,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            466 => 
            array (
                'id' => 1467,
                'product_id' => 319,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            467 => 
            array (
                'id' => 1468,
                'product_id' => 319,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            468 => 
            array (
                'id' => 1469,
                'product_id' => 319,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            469 => 
            array (
                'id' => 1470,
                'product_id' => 319,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            470 => 
            array (
                'id' => 1471,
                'product_id' => 320,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            471 => 
            array (
                'id' => 1472,
                'product_id' => 320,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            472 => 
            array (
                'id' => 1473,
                'product_id' => 320,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            473 => 
            array (
                'id' => 1474,
                'product_id' => 320,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            474 => 
            array (
                'id' => 1475,
                'product_id' => 320,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            475 => 
            array (
                'id' => 1476,
                'product_id' => 321,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            476 => 
            array (
                'id' => 1477,
                'product_id' => 321,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            477 => 
            array (
                'id' => 1478,
                'product_id' => 321,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            478 => 
            array (
                'id' => 1479,
                'product_id' => 321,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            479 => 
            array (
                'id' => 1480,
                'product_id' => 321,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            480 => 
            array (
                'id' => 1481,
                'product_id' => 322,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            481 => 
            array (
                'id' => 1482,
                'product_id' => 322,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            482 => 
            array (
                'id' => 1483,
                'product_id' => 322,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            483 => 
            array (
                'id' => 1484,
                'product_id' => 322,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            484 => 
            array (
                'id' => 1485,
                'product_id' => 322,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            485 => 
            array (
                'id' => 1486,
                'product_id' => 323,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            486 => 
            array (
                'id' => 1487,
                'product_id' => 323,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            487 => 
            array (
                'id' => 1488,
                'product_id' => 323,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            488 => 
            array (
                'id' => 1489,
                'product_id' => 323,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            489 => 
            array (
                'id' => 1490,
                'product_id' => 323,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            490 => 
            array (
                'id' => 1491,
                'product_id' => 324,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            491 => 
            array (
                'id' => 1492,
                'product_id' => 324,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            492 => 
            array (
                'id' => 1493,
                'product_id' => 324,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            493 => 
            array (
                'id' => 1494,
                'product_id' => 324,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            494 => 
            array (
                'id' => 1495,
                'product_id' => 324,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            495 => 
            array (
                'id' => 1496,
                'product_id' => 325,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            496 => 
            array (
                'id' => 1497,
                'product_id' => 325,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            497 => 
            array (
                'id' => 1498,
                'product_id' => 325,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            498 => 
            array (
                'id' => 1499,
                'product_id' => 325,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            499 => 
            array (
                'id' => 1500,
                'product_id' => 325,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
        ));
        \DB::table('skins')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'product_id' => 326,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            1 => 
            array (
                'id' => 1502,
                'product_id' => 326,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            2 => 
            array (
                'id' => 1503,
                'product_id' => 326,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            3 => 
            array (
                'id' => 1504,
                'product_id' => 326,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            4 => 
            array (
                'id' => 1505,
                'product_id' => 326,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            5 => 
            array (
                'id' => 1506,
                'product_id' => 327,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            6 => 
            array (
                'id' => 1507,
                'product_id' => 327,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            7 => 
            array (
                'id' => 1508,
                'product_id' => 327,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            8 => 
            array (
                'id' => 1509,
                'product_id' => 327,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            9 => 
            array (
                'id' => 1510,
                'product_id' => 327,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            10 => 
            array (
                'id' => 1511,
                'product_id' => 328,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            11 => 
            array (
                'id' => 1512,
                'product_id' => 328,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            12 => 
            array (
                'id' => 1513,
                'product_id' => 328,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            13 => 
            array (
                'id' => 1514,
                'product_id' => 328,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            14 => 
            array (
                'id' => 1515,
                'product_id' => 328,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            15 => 
            array (
                'id' => 1516,
                'product_id' => 329,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            16 => 
            array (
                'id' => 1517,
                'product_id' => 329,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            17 => 
            array (
                'id' => 1518,
                'product_id' => 329,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            18 => 
            array (
                'id' => 1519,
                'product_id' => 329,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            19 => 
            array (
                'id' => 1520,
                'product_id' => 329,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            20 => 
            array (
                'id' => 1521,
                'product_id' => 330,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            21 => 
            array (
                'id' => 1522,
                'product_id' => 330,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            22 => 
            array (
                'id' => 1523,
                'product_id' => 330,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            23 => 
            array (
                'id' => 1524,
                'product_id' => 330,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            24 => 
            array (
                'id' => 1525,
                'product_id' => 330,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            25 => 
            array (
                'id' => 1526,
                'product_id' => 331,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            26 => 
            array (
                'id' => 1527,
                'product_id' => 331,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            27 => 
            array (
                'id' => 1528,
                'product_id' => 331,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            28 => 
            array (
                'id' => 1529,
                'product_id' => 331,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            29 => 
            array (
                'id' => 1530,
                'product_id' => 331,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            30 => 
            array (
                'id' => 1531,
                'product_id' => 332,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            31 => 
            array (
                'id' => 1532,
                'product_id' => 332,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            32 => 
            array (
                'id' => 1533,
                'product_id' => 332,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            33 => 
            array (
                'id' => 1534,
                'product_id' => 332,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            34 => 
            array (
                'id' => 1535,
                'product_id' => 332,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            35 => 
            array (
                'id' => 1536,
                'product_id' => 333,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            36 => 
            array (
                'id' => 1537,
                'product_id' => 333,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            37 => 
            array (
                'id' => 1538,
                'product_id' => 333,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            38 => 
            array (
                'id' => 1539,
                'product_id' => 333,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            39 => 
            array (
                'id' => 1540,
                'product_id' => 333,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            40 => 
            array (
                'id' => 1541,
                'product_id' => 334,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            41 => 
            array (
                'id' => 1542,
                'product_id' => 334,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            42 => 
            array (
                'id' => 1543,
                'product_id' => 334,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            43 => 
            array (
                'id' => 1544,
                'product_id' => 334,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            44 => 
            array (
                'id' => 1545,
                'product_id' => 334,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            45 => 
            array (
                'id' => 1546,
                'product_id' => 335,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            46 => 
            array (
                'id' => 1547,
                'product_id' => 335,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            47 => 
            array (
                'id' => 1548,
                'product_id' => 335,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            48 => 
            array (
                'id' => 1549,
                'product_id' => 335,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            49 => 
            array (
                'id' => 1550,
                'product_id' => 335,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            50 => 
            array (
                'id' => 1551,
                'product_id' => 336,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            51 => 
            array (
                'id' => 1552,
                'product_id' => 336,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            52 => 
            array (
                'id' => 1553,
                'product_id' => 336,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            53 => 
            array (
                'id' => 1554,
                'product_id' => 336,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            54 => 
            array (
                'id' => 1555,
                'product_id' => 336,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            55 => 
            array (
                'id' => 1556,
                'product_id' => 337,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            56 => 
            array (
                'id' => 1557,
                'product_id' => 337,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            57 => 
            array (
                'id' => 1558,
                'product_id' => 337,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            58 => 
            array (
                'id' => 1559,
                'product_id' => 337,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            59 => 
            array (
                'id' => 1560,
                'product_id' => 337,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            60 => 
            array (
                'id' => 1561,
                'product_id' => 338,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            61 => 
            array (
                'id' => 1562,
                'product_id' => 338,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            62 => 
            array (
                'id' => 1563,
                'product_id' => 338,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            63 => 
            array (
                'id' => 1564,
                'product_id' => 338,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            64 => 
            array (
                'id' => 1565,
                'product_id' => 338,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            65 => 
            array (
                'id' => 1566,
                'product_id' => 339,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            66 => 
            array (
                'id' => 1567,
                'product_id' => 339,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            67 => 
            array (
                'id' => 1568,
                'product_id' => 339,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            68 => 
            array (
                'id' => 1569,
                'product_id' => 339,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            69 => 
            array (
                'id' => 1570,
                'product_id' => 339,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            70 => 
            array (
                'id' => 1571,
                'product_id' => 340,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            71 => 
            array (
                'id' => 1572,
                'product_id' => 340,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            72 => 
            array (
                'id' => 1573,
                'product_id' => 340,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            73 => 
            array (
                'id' => 1574,
                'product_id' => 340,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            74 => 
            array (
                'id' => 1575,
                'product_id' => 340,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            75 => 
            array (
                'id' => 1576,
                'product_id' => 341,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            76 => 
            array (
                'id' => 1577,
                'product_id' => 341,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            77 => 
            array (
                'id' => 1578,
                'product_id' => 341,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            78 => 
            array (
                'id' => 1579,
                'product_id' => 341,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            79 => 
            array (
                'id' => 1580,
                'product_id' => 341,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            80 => 
            array (
                'id' => 1581,
                'product_id' => 342,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            81 => 
            array (
                'id' => 1582,
                'product_id' => 342,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            82 => 
            array (
                'id' => 1583,
                'product_id' => 342,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            83 => 
            array (
                'id' => 1584,
                'product_id' => 342,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            84 => 
            array (
                'id' => 1585,
                'product_id' => 342,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            85 => 
            array (
                'id' => 1586,
                'product_id' => 343,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            86 => 
            array (
                'id' => 1587,
                'product_id' => 343,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            87 => 
            array (
                'id' => 1588,
                'product_id' => 343,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            88 => 
            array (
                'id' => 1589,
                'product_id' => 343,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            89 => 
            array (
                'id' => 1590,
                'product_id' => 343,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            90 => 
            array (
                'id' => 1591,
                'product_id' => 344,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            91 => 
            array (
                'id' => 1592,
                'product_id' => 344,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            92 => 
            array (
                'id' => 1593,
                'product_id' => 344,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            93 => 
            array (
                'id' => 1594,
                'product_id' => 344,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            94 => 
            array (
                'id' => 1595,
                'product_id' => 344,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            95 => 
            array (
                'id' => 1596,
                'product_id' => 345,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            96 => 
            array (
                'id' => 1597,
                'product_id' => 345,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            97 => 
            array (
                'id' => 1598,
                'product_id' => 345,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            98 => 
            array (
                'id' => 1599,
                'product_id' => 345,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            99 => 
            array (
                'id' => 1600,
                'product_id' => 345,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            100 => 
            array (
                'id' => 1601,
                'product_id' => 346,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            101 => 
            array (
                'id' => 1602,
                'product_id' => 346,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            102 => 
            array (
                'id' => 1603,
                'product_id' => 346,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            103 => 
            array (
                'id' => 1604,
                'product_id' => 346,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            104 => 
            array (
                'id' => 1605,
                'product_id' => 346,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            105 => 
            array (
                'id' => 1606,
                'product_id' => 347,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            106 => 
            array (
                'id' => 1607,
                'product_id' => 347,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            107 => 
            array (
                'id' => 1608,
                'product_id' => 347,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            108 => 
            array (
                'id' => 1609,
                'product_id' => 347,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            109 => 
            array (
                'id' => 1610,
                'product_id' => 347,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            110 => 
            array (
                'id' => 1611,
                'product_id' => 348,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            111 => 
            array (
                'id' => 1612,
                'product_id' => 348,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            112 => 
            array (
                'id' => 1613,
                'product_id' => 348,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            113 => 
            array (
                'id' => 1614,
                'product_id' => 348,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            114 => 
            array (
                'id' => 1615,
                'product_id' => 348,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            115 => 
            array (
                'id' => 1616,
                'product_id' => 349,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            116 => 
            array (
                'id' => 1617,
                'product_id' => 349,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            117 => 
            array (
                'id' => 1618,
                'product_id' => 349,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            118 => 
            array (
                'id' => 1619,
                'product_id' => 349,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            119 => 
            array (
                'id' => 1620,
                'product_id' => 349,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            120 => 
            array (
                'id' => 1621,
                'product_id' => 350,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            121 => 
            array (
                'id' => 1622,
                'product_id' => 350,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            122 => 
            array (
                'id' => 1623,
                'product_id' => 350,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            123 => 
            array (
                'id' => 1624,
                'product_id' => 350,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            124 => 
            array (
                'id' => 1625,
                'product_id' => 350,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            125 => 
            array (
                'id' => 1626,
                'product_id' => 351,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            126 => 
            array (
                'id' => 1627,
                'product_id' => 351,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            127 => 
            array (
                'id' => 1628,
                'product_id' => 351,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            128 => 
            array (
                'id' => 1629,
                'product_id' => 351,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            129 => 
            array (
                'id' => 1630,
                'product_id' => 351,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            130 => 
            array (
                'id' => 1631,
                'product_id' => 352,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            131 => 
            array (
                'id' => 1632,
                'product_id' => 352,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            132 => 
            array (
                'id' => 1633,
                'product_id' => 352,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            133 => 
            array (
                'id' => 1634,
                'product_id' => 352,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            134 => 
            array (
                'id' => 1635,
                'product_id' => 352,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            135 => 
            array (
                'id' => 1636,
                'product_id' => 353,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            136 => 
            array (
                'id' => 1637,
                'product_id' => 353,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            137 => 
            array (
                'id' => 1638,
                'product_id' => 353,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            138 => 
            array (
                'id' => 1639,
                'product_id' => 353,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            139 => 
            array (
                'id' => 1640,
                'product_id' => 353,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            140 => 
            array (
                'id' => 1641,
                'product_id' => 354,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            141 => 
            array (
                'id' => 1642,
                'product_id' => 354,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            142 => 
            array (
                'id' => 1643,
                'product_id' => 354,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            143 => 
            array (
                'id' => 1644,
                'product_id' => 354,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            144 => 
            array (
                'id' => 1645,
                'product_id' => 354,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            145 => 
            array (
                'id' => 1646,
                'product_id' => 355,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            146 => 
            array (
                'id' => 1647,
                'product_id' => 355,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            147 => 
            array (
                'id' => 1648,
                'product_id' => 355,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            148 => 
            array (
                'id' => 1649,
                'product_id' => 355,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            149 => 
            array (
                'id' => 1650,
                'product_id' => 355,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            150 => 
            array (
                'id' => 1651,
                'product_id' => 356,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            151 => 
            array (
                'id' => 1652,
                'product_id' => 356,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            152 => 
            array (
                'id' => 1653,
                'product_id' => 356,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            153 => 
            array (
                'id' => 1654,
                'product_id' => 356,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            154 => 
            array (
                'id' => 1655,
                'product_id' => 356,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            155 => 
            array (
                'id' => 1656,
                'product_id' => 357,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            156 => 
            array (
                'id' => 1657,
                'product_id' => 357,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            157 => 
            array (
                'id' => 1658,
                'product_id' => 357,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            158 => 
            array (
                'id' => 1659,
                'product_id' => 357,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            159 => 
            array (
                'id' => 1660,
                'product_id' => 357,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            160 => 
            array (
                'id' => 1661,
                'product_id' => 358,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            161 => 
            array (
                'id' => 1662,
                'product_id' => 358,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            162 => 
            array (
                'id' => 1663,
                'product_id' => 358,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            163 => 
            array (
                'id' => 1664,
                'product_id' => 358,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            164 => 
            array (
                'id' => 1665,
                'product_id' => 358,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            165 => 
            array (
                'id' => 1666,
                'product_id' => 359,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            166 => 
            array (
                'id' => 1667,
                'product_id' => 359,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            167 => 
            array (
                'id' => 1668,
                'product_id' => 359,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            168 => 
            array (
                'id' => 1669,
                'product_id' => 359,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            169 => 
            array (
                'id' => 1670,
                'product_id' => 359,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            170 => 
            array (
                'id' => 1671,
                'product_id' => 360,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            171 => 
            array (
                'id' => 1672,
                'product_id' => 360,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            172 => 
            array (
                'id' => 1673,
                'product_id' => 360,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            173 => 
            array (
                'id' => 1674,
                'product_id' => 360,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            174 => 
            array (
                'id' => 1675,
                'product_id' => 360,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            175 => 
            array (
                'id' => 1676,
                'product_id' => 361,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            176 => 
            array (
                'id' => 1677,
                'product_id' => 361,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            177 => 
            array (
                'id' => 1678,
                'product_id' => 361,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            178 => 
            array (
                'id' => 1679,
                'product_id' => 361,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            179 => 
            array (
                'id' => 1680,
                'product_id' => 361,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            180 => 
            array (
                'id' => 1681,
                'product_id' => 362,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            181 => 
            array (
                'id' => 1682,
                'product_id' => 362,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            182 => 
            array (
                'id' => 1683,
                'product_id' => 362,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            183 => 
            array (
                'id' => 1684,
                'product_id' => 362,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            184 => 
            array (
                'id' => 1685,
                'product_id' => 362,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            185 => 
            array (
                'id' => 1686,
                'product_id' => 363,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            186 => 
            array (
                'id' => 1687,
                'product_id' => 363,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            187 => 
            array (
                'id' => 1688,
                'product_id' => 363,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            188 => 
            array (
                'id' => 1689,
                'product_id' => 363,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            189 => 
            array (
                'id' => 1690,
                'product_id' => 363,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            190 => 
            array (
                'id' => 1691,
                'product_id' => 364,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            191 => 
            array (
                'id' => 1692,
                'product_id' => 364,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            192 => 
            array (
                'id' => 1693,
                'product_id' => 364,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            193 => 
            array (
                'id' => 1694,
                'product_id' => 364,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            194 => 
            array (
                'id' => 1695,
                'product_id' => 364,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            195 => 
            array (
                'id' => 1696,
                'product_id' => 365,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            196 => 
            array (
                'id' => 1697,
                'product_id' => 365,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            197 => 
            array (
                'id' => 1698,
                'product_id' => 365,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            198 => 
            array (
                'id' => 1699,
                'product_id' => 365,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            199 => 
            array (
                'id' => 1700,
                'product_id' => 365,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            200 => 
            array (
                'id' => 1701,
                'product_id' => 366,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            201 => 
            array (
                'id' => 1702,
                'product_id' => 366,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            202 => 
            array (
                'id' => 1703,
                'product_id' => 366,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            203 => 
            array (
                'id' => 1704,
                'product_id' => 366,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            204 => 
            array (
                'id' => 1705,
                'product_id' => 366,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            205 => 
            array (
                'id' => 1706,
                'product_id' => 367,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            206 => 
            array (
                'id' => 1707,
                'product_id' => 367,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            207 => 
            array (
                'id' => 1708,
                'product_id' => 367,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            208 => 
            array (
                'id' => 1709,
                'product_id' => 367,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            209 => 
            array (
                'id' => 1710,
                'product_id' => 367,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            210 => 
            array (
                'id' => 1711,
                'product_id' => 368,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            211 => 
            array (
                'id' => 1712,
                'product_id' => 368,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            212 => 
            array (
                'id' => 1713,
                'product_id' => 368,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            213 => 
            array (
                'id' => 1714,
                'product_id' => 368,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            214 => 
            array (
                'id' => 1715,
                'product_id' => 368,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            215 => 
            array (
                'id' => 1716,
                'product_id' => 369,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            216 => 
            array (
                'id' => 1717,
                'product_id' => 369,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            217 => 
            array (
                'id' => 1718,
                'product_id' => 369,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            218 => 
            array (
                'id' => 1719,
                'product_id' => 369,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            219 => 
            array (
                'id' => 1720,
                'product_id' => 369,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            220 => 
            array (
                'id' => 1721,
                'product_id' => 370,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            221 => 
            array (
                'id' => 1722,
                'product_id' => 370,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            222 => 
            array (
                'id' => 1723,
                'product_id' => 370,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            223 => 
            array (
                'id' => 1724,
                'product_id' => 370,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            224 => 
            array (
                'id' => 1725,
                'product_id' => 370,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            225 => 
            array (
                'id' => 1726,
                'product_id' => 371,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            226 => 
            array (
                'id' => 1727,
                'product_id' => 371,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            227 => 
            array (
                'id' => 1728,
                'product_id' => 371,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            228 => 
            array (
                'id' => 1729,
                'product_id' => 371,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            229 => 
            array (
                'id' => 1730,
                'product_id' => 371,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            230 => 
            array (
                'id' => 1731,
                'product_id' => 372,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            231 => 
            array (
                'id' => 1732,
                'product_id' => 372,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            232 => 
            array (
                'id' => 1733,
                'product_id' => 372,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            233 => 
            array (
                'id' => 1734,
                'product_id' => 372,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            234 => 
            array (
                'id' => 1735,
                'product_id' => 372,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            235 => 
            array (
                'id' => 1736,
                'product_id' => 373,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            236 => 
            array (
                'id' => 1737,
                'product_id' => 373,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            237 => 
            array (
                'id' => 1738,
                'product_id' => 373,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            238 => 
            array (
                'id' => 1739,
                'product_id' => 373,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            239 => 
            array (
                'id' => 1740,
                'product_id' => 373,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            240 => 
            array (
                'id' => 1741,
                'product_id' => 374,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            241 => 
            array (
                'id' => 1742,
                'product_id' => 374,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            242 => 
            array (
                'id' => 1743,
                'product_id' => 374,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            243 => 
            array (
                'id' => 1744,
                'product_id' => 374,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            244 => 
            array (
                'id' => 1745,
                'product_id' => 374,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            245 => 
            array (
                'id' => 1746,
                'product_id' => 375,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            246 => 
            array (
                'id' => 1747,
                'product_id' => 375,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            247 => 
            array (
                'id' => 1748,
                'product_id' => 375,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            248 => 
            array (
                'id' => 1749,
                'product_id' => 375,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            249 => 
            array (
                'id' => 1750,
                'product_id' => 375,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            250 => 
            array (
                'id' => 1751,
                'product_id' => 376,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            251 => 
            array (
                'id' => 1752,
                'product_id' => 376,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            252 => 
            array (
                'id' => 1753,
                'product_id' => 376,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            253 => 
            array (
                'id' => 1754,
                'product_id' => 376,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            254 => 
            array (
                'id' => 1755,
                'product_id' => 376,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            255 => 
            array (
                'id' => 1756,
                'product_id' => 377,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            256 => 
            array (
                'id' => 1757,
                'product_id' => 377,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            257 => 
            array (
                'id' => 1758,
                'product_id' => 377,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            258 => 
            array (
                'id' => 1759,
                'product_id' => 377,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            259 => 
            array (
                'id' => 1760,
                'product_id' => 377,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            260 => 
            array (
                'id' => 1761,
                'product_id' => 378,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            261 => 
            array (
                'id' => 1762,
                'product_id' => 378,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            262 => 
            array (
                'id' => 1763,
                'product_id' => 378,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            263 => 
            array (
                'id' => 1764,
                'product_id' => 378,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            264 => 
            array (
                'id' => 1765,
                'product_id' => 378,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            265 => 
            array (
                'id' => 1766,
                'product_id' => 379,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            266 => 
            array (
                'id' => 1767,
                'product_id' => 379,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            267 => 
            array (
                'id' => 1768,
                'product_id' => 379,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            268 => 
            array (
                'id' => 1769,
                'product_id' => 379,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            269 => 
            array (
                'id' => 1770,
                'product_id' => 379,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            270 => 
            array (
                'id' => 1771,
                'product_id' => 380,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            271 => 
            array (
                'id' => 1772,
                'product_id' => 380,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            272 => 
            array (
                'id' => 1773,
                'product_id' => 380,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            273 => 
            array (
                'id' => 1774,
                'product_id' => 380,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            274 => 
            array (
                'id' => 1775,
                'product_id' => 380,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            275 => 
            array (
                'id' => 1776,
                'product_id' => 381,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            276 => 
            array (
                'id' => 1777,
                'product_id' => 381,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            277 => 
            array (
                'id' => 1778,
                'product_id' => 381,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            278 => 
            array (
                'id' => 1779,
                'product_id' => 381,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            279 => 
            array (
                'id' => 1780,
                'product_id' => 381,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            280 => 
            array (
                'id' => 1781,
                'product_id' => 382,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            281 => 
            array (
                'id' => 1782,
                'product_id' => 382,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            282 => 
            array (
                'id' => 1783,
                'product_id' => 382,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            283 => 
            array (
                'id' => 1784,
                'product_id' => 382,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            284 => 
            array (
                'id' => 1785,
                'product_id' => 382,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            285 => 
            array (
                'id' => 1786,
                'product_id' => 383,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            286 => 
            array (
                'id' => 1787,
                'product_id' => 383,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            287 => 
            array (
                'id' => 1788,
                'product_id' => 383,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            288 => 
            array (
                'id' => 1789,
                'product_id' => 383,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            289 => 
            array (
                'id' => 1790,
                'product_id' => 383,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            290 => 
            array (
                'id' => 1791,
                'product_id' => 384,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            291 => 
            array (
                'id' => 1792,
                'product_id' => 384,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            292 => 
            array (
                'id' => 1793,
                'product_id' => 384,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            293 => 
            array (
                'id' => 1794,
                'product_id' => 384,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            294 => 
            array (
                'id' => 1795,
                'product_id' => 384,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            295 => 
            array (
                'id' => 1796,
                'product_id' => 385,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            296 => 
            array (
                'id' => 1797,
                'product_id' => 385,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            297 => 
            array (
                'id' => 1798,
                'product_id' => 385,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            298 => 
            array (
                'id' => 1799,
                'product_id' => 385,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            299 => 
            array (
                'id' => 1800,
                'product_id' => 385,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            300 => 
            array (
                'id' => 1801,
                'product_id' => 386,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            301 => 
            array (
                'id' => 1802,
                'product_id' => 386,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            302 => 
            array (
                'id' => 1803,
                'product_id' => 386,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            303 => 
            array (
                'id' => 1804,
                'product_id' => 386,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            304 => 
            array (
                'id' => 1805,
                'product_id' => 386,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            305 => 
            array (
                'id' => 1806,
                'product_id' => 387,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            306 => 
            array (
                'id' => 1807,
                'product_id' => 387,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            307 => 
            array (
                'id' => 1808,
                'product_id' => 387,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            308 => 
            array (
                'id' => 1809,
                'product_id' => 387,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            309 => 
            array (
                'id' => 1810,
                'product_id' => 387,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            310 => 
            array (
                'id' => 1811,
                'product_id' => 388,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            311 => 
            array (
                'id' => 1812,
                'product_id' => 388,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            312 => 
            array (
                'id' => 1813,
                'product_id' => 388,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            313 => 
            array (
                'id' => 1814,
                'product_id' => 388,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            314 => 
            array (
                'id' => 1815,
                'product_id' => 388,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            315 => 
            array (
                'id' => 1816,
                'product_id' => 389,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            316 => 
            array (
                'id' => 1817,
                'product_id' => 389,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            317 => 
            array (
                'id' => 1818,
                'product_id' => 389,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            318 => 
            array (
                'id' => 1819,
                'product_id' => 389,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            319 => 
            array (
                'id' => 1820,
                'product_id' => 389,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            320 => 
            array (
                'id' => 1821,
                'product_id' => 390,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            321 => 
            array (
                'id' => 1822,
                'product_id' => 390,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            322 => 
            array (
                'id' => 1823,
                'product_id' => 390,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            323 => 
            array (
                'id' => 1824,
                'product_id' => 390,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            324 => 
            array (
                'id' => 1825,
                'product_id' => 390,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            325 => 
            array (
                'id' => 1826,
                'product_id' => 391,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            326 => 
            array (
                'id' => 1827,
                'product_id' => 391,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            327 => 
            array (
                'id' => 1828,
                'product_id' => 391,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            328 => 
            array (
                'id' => 1829,
                'product_id' => 391,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            329 => 
            array (
                'id' => 1830,
                'product_id' => 391,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            330 => 
            array (
                'id' => 1831,
                'product_id' => 392,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            331 => 
            array (
                'id' => 1832,
                'product_id' => 392,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            332 => 
            array (
                'id' => 1833,
                'product_id' => 392,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            333 => 
            array (
                'id' => 1834,
                'product_id' => 392,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            334 => 
            array (
                'id' => 1835,
                'product_id' => 392,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            335 => 
            array (
                'id' => 1836,
                'product_id' => 393,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            336 => 
            array (
                'id' => 1837,
                'product_id' => 393,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            337 => 
            array (
                'id' => 1838,
                'product_id' => 393,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            338 => 
            array (
                'id' => 1839,
                'product_id' => 393,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            339 => 
            array (
                'id' => 1840,
                'product_id' => 393,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            340 => 
            array (
                'id' => 1841,
                'product_id' => 394,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            341 => 
            array (
                'id' => 1842,
                'product_id' => 394,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            342 => 
            array (
                'id' => 1843,
                'product_id' => 394,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            343 => 
            array (
                'id' => 1844,
                'product_id' => 394,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            344 => 
            array (
                'id' => 1845,
                'product_id' => 394,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            345 => 
            array (
                'id' => 1846,
                'product_id' => 395,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            346 => 
            array (
                'id' => 1847,
                'product_id' => 395,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            347 => 
            array (
                'id' => 1848,
                'product_id' => 395,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            348 => 
            array (
                'id' => 1849,
                'product_id' => 395,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            349 => 
            array (
                'id' => 1850,
                'product_id' => 395,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            350 => 
            array (
                'id' => 1851,
                'product_id' => 396,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            351 => 
            array (
                'id' => 1852,
                'product_id' => 396,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            352 => 
            array (
                'id' => 1853,
                'product_id' => 396,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            353 => 
            array (
                'id' => 1854,
                'product_id' => 396,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            354 => 
            array (
                'id' => 1855,
                'product_id' => 396,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            355 => 
            array (
                'id' => 1856,
                'product_id' => 397,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            356 => 
            array (
                'id' => 1857,
                'product_id' => 397,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            357 => 
            array (
                'id' => 1858,
                'product_id' => 397,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            358 => 
            array (
                'id' => 1859,
                'product_id' => 397,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            359 => 
            array (
                'id' => 1860,
                'product_id' => 397,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            360 => 
            array (
                'id' => 1861,
                'product_id' => 398,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            361 => 
            array (
                'id' => 1862,
                'product_id' => 398,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            362 => 
            array (
                'id' => 1863,
                'product_id' => 398,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            363 => 
            array (
                'id' => 1864,
                'product_id' => 398,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            364 => 
            array (
                'id' => 1865,
                'product_id' => 398,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            365 => 
            array (
                'id' => 1866,
                'product_id' => 399,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            366 => 
            array (
                'id' => 1867,
                'product_id' => 399,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            367 => 
            array (
                'id' => 1868,
                'product_id' => 399,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            368 => 
            array (
                'id' => 1869,
                'product_id' => 399,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            369 => 
            array (
                'id' => 1870,
                'product_id' => 399,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            370 => 
            array (
                'id' => 1871,
                'product_id' => 400,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            371 => 
            array (
                'id' => 1872,
                'product_id' => 400,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            372 => 
            array (
                'id' => 1873,
                'product_id' => 400,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            373 => 
            array (
                'id' => 1874,
                'product_id' => 400,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            374 => 
            array (
                'id' => 1875,
                'product_id' => 400,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            375 => 
            array (
                'id' => 1876,
                'product_id' => 401,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            376 => 
            array (
                'id' => 1877,
                'product_id' => 401,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            377 => 
            array (
                'id' => 1878,
                'product_id' => 401,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            378 => 
            array (
                'id' => 1879,
                'product_id' => 401,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            379 => 
            array (
                'id' => 1880,
                'product_id' => 401,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            380 => 
            array (
                'id' => 1881,
                'product_id' => 402,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            381 => 
            array (
                'id' => 1882,
                'product_id' => 402,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            382 => 
            array (
                'id' => 1883,
                'product_id' => 402,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            383 => 
            array (
                'id' => 1884,
                'product_id' => 402,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            384 => 
            array (
                'id' => 1885,
                'product_id' => 402,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            385 => 
            array (
                'id' => 1886,
                'product_id' => 403,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            386 => 
            array (
                'id' => 1887,
                'product_id' => 403,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            387 => 
            array (
                'id' => 1888,
                'product_id' => 403,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            388 => 
            array (
                'id' => 1889,
                'product_id' => 403,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            389 => 
            array (
                'id' => 1890,
                'product_id' => 403,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            390 => 
            array (
                'id' => 1891,
                'product_id' => 404,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            391 => 
            array (
                'id' => 1892,
                'product_id' => 404,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            392 => 
            array (
                'id' => 1893,
                'product_id' => 404,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            393 => 
            array (
                'id' => 1894,
                'product_id' => 404,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            394 => 
            array (
                'id' => 1895,
                'product_id' => 404,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            395 => 
            array (
                'id' => 1896,
                'product_id' => 405,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            396 => 
            array (
                'id' => 1897,
                'product_id' => 405,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            397 => 
            array (
                'id' => 1898,
                'product_id' => 405,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            398 => 
            array (
                'id' => 1899,
                'product_id' => 405,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            399 => 
            array (
                'id' => 1900,
                'product_id' => 405,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            400 => 
            array (
                'id' => 1901,
                'product_id' => 406,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            401 => 
            array (
                'id' => 1902,
                'product_id' => 406,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            402 => 
            array (
                'id' => 1903,
                'product_id' => 406,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            403 => 
            array (
                'id' => 1904,
                'product_id' => 406,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            404 => 
            array (
                'id' => 1905,
                'product_id' => 406,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            405 => 
            array (
                'id' => 1906,
                'product_id' => 407,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            406 => 
            array (
                'id' => 1907,
                'product_id' => 407,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            407 => 
            array (
                'id' => 1908,
                'product_id' => 407,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            408 => 
            array (
                'id' => 1909,
                'product_id' => 407,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            409 => 
            array (
                'id' => 1910,
                'product_id' => 407,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            410 => 
            array (
                'id' => 1911,
                'product_id' => 408,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            411 => 
            array (
                'id' => 1912,
                'product_id' => 408,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            412 => 
            array (
                'id' => 1913,
                'product_id' => 408,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            413 => 
            array (
                'id' => 1914,
                'product_id' => 408,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            414 => 
            array (
                'id' => 1915,
                'product_id' => 408,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            415 => 
            array (
                'id' => 1916,
                'product_id' => 409,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            416 => 
            array (
                'id' => 1917,
                'product_id' => 409,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            417 => 
            array (
                'id' => 1918,
                'product_id' => 409,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            418 => 
            array (
                'id' => 1919,
                'product_id' => 409,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            419 => 
            array (
                'id' => 1920,
                'product_id' => 409,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            420 => 
            array (
                'id' => 1921,
                'product_id' => 410,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            421 => 
            array (
                'id' => 1922,
                'product_id' => 410,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            422 => 
            array (
                'id' => 1923,
                'product_id' => 410,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            423 => 
            array (
                'id' => 1924,
                'product_id' => 410,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            424 => 
            array (
                'id' => 1925,
                'product_id' => 410,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            425 => 
            array (
                'id' => 1926,
                'product_id' => 411,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            426 => 
            array (
                'id' => 1927,
                'product_id' => 411,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            427 => 
            array (
                'id' => 1928,
                'product_id' => 411,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            428 => 
            array (
                'id' => 1929,
                'product_id' => 411,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            429 => 
            array (
                'id' => 1930,
                'product_id' => 411,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            430 => 
            array (
                'id' => 1931,
                'product_id' => 412,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            431 => 
            array (
                'id' => 1932,
                'product_id' => 412,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            432 => 
            array (
                'id' => 1933,
                'product_id' => 412,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            433 => 
            array (
                'id' => 1934,
                'product_id' => 412,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            434 => 
            array (
                'id' => 1935,
                'product_id' => 412,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            435 => 
            array (
                'id' => 1936,
                'product_id' => 413,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            436 => 
            array (
                'id' => 1937,
                'product_id' => 413,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            437 => 
            array (
                'id' => 1938,
                'product_id' => 413,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            438 => 
            array (
                'id' => 1939,
                'product_id' => 413,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            439 => 
            array (
                'id' => 1940,
                'product_id' => 413,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            440 => 
            array (
                'id' => 1941,
                'product_id' => 414,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            441 => 
            array (
                'id' => 1942,
                'product_id' => 414,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            442 => 
            array (
                'id' => 1943,
                'product_id' => 414,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            443 => 
            array (
                'id' => 1944,
                'product_id' => 414,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            444 => 
            array (
                'id' => 1945,
                'product_id' => 414,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            445 => 
            array (
                'id' => 1946,
                'product_id' => 415,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            446 => 
            array (
                'id' => 1947,
                'product_id' => 415,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            447 => 
            array (
                'id' => 1948,
                'product_id' => 415,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            448 => 
            array (
                'id' => 1949,
                'product_id' => 415,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            449 => 
            array (
                'id' => 1950,
                'product_id' => 415,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            450 => 
            array (
                'id' => 1951,
                'product_id' => 416,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            451 => 
            array (
                'id' => 1952,
                'product_id' => 416,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            452 => 
            array (
                'id' => 1953,
                'product_id' => 416,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            453 => 
            array (
                'id' => 1954,
                'product_id' => 416,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            454 => 
            array (
                'id' => 1955,
                'product_id' => 416,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            455 => 
            array (
                'id' => 1956,
                'product_id' => 417,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            456 => 
            array (
                'id' => 1957,
                'product_id' => 417,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            457 => 
            array (
                'id' => 1958,
                'product_id' => 417,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            458 => 
            array (
                'id' => 1959,
                'product_id' => 417,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            459 => 
            array (
                'id' => 1960,
                'product_id' => 417,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            460 => 
            array (
                'id' => 1961,
                'product_id' => 418,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            461 => 
            array (
                'id' => 1962,
                'product_id' => 418,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            462 => 
            array (
                'id' => 1963,
                'product_id' => 418,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            463 => 
            array (
                'id' => 1964,
                'product_id' => 418,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            464 => 
            array (
                'id' => 1965,
                'product_id' => 418,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            465 => 
            array (
                'id' => 1966,
                'product_id' => 419,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            466 => 
            array (
                'id' => 1967,
                'product_id' => 419,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            467 => 
            array (
                'id' => 1968,
                'product_id' => 419,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            468 => 
            array (
                'id' => 1969,
                'product_id' => 419,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            469 => 
            array (
                'id' => 1970,
                'product_id' => 419,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            470 => 
            array (
                'id' => 1971,
                'product_id' => 420,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            471 => 
            array (
                'id' => 1972,
                'product_id' => 420,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            472 => 
            array (
                'id' => 1973,
                'product_id' => 420,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            473 => 
            array (
                'id' => 1974,
                'product_id' => 420,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            474 => 
            array (
                'id' => 1975,
                'product_id' => 420,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            475 => 
            array (
                'id' => 1976,
                'product_id' => 421,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            476 => 
            array (
                'id' => 1977,
                'product_id' => 421,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            477 => 
            array (
                'id' => 1978,
                'product_id' => 421,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            478 => 
            array (
                'id' => 1979,
                'product_id' => 421,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            479 => 
            array (
                'id' => 1980,
                'product_id' => 421,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            480 => 
            array (
                'id' => 1981,
                'product_id' => 422,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            481 => 
            array (
                'id' => 1982,
                'product_id' => 422,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            482 => 
            array (
                'id' => 1983,
                'product_id' => 422,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            483 => 
            array (
                'id' => 1984,
                'product_id' => 422,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            484 => 
            array (
                'id' => 1985,
                'product_id' => 422,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            485 => 
            array (
                'id' => 1986,
                'product_id' => 423,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            486 => 
            array (
                'id' => 1987,
                'product_id' => 423,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            487 => 
            array (
                'id' => 1988,
                'product_id' => 423,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            488 => 
            array (
                'id' => 1989,
                'product_id' => 423,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            489 => 
            array (
                'id' => 1990,
                'product_id' => 423,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            490 => 
            array (
                'id' => 1991,
                'product_id' => 424,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            491 => 
            array (
                'id' => 1992,
                'product_id' => 424,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            492 => 
            array (
                'id' => 1993,
                'product_id' => 424,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            493 => 
            array (
                'id' => 1994,
                'product_id' => 424,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            494 => 
            array (
                'id' => 1995,
                'product_id' => 424,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            495 => 
            array (
                'id' => 1996,
                'product_id' => 425,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            496 => 
            array (
                'id' => 1997,
                'product_id' => 425,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            497 => 
            array (
                'id' => 1998,
                'product_id' => 425,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            498 => 
            array (
                'id' => 1999,
                'product_id' => 425,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            499 => 
            array (
                'id' => 2000,
                'product_id' => 425,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
        ));
        \DB::table('skins')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'product_id' => 426,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            1 => 
            array (
                'id' => 2002,
                'product_id' => 426,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            2 => 
            array (
                'id' => 2003,
                'product_id' => 426,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            3 => 
            array (
                'id' => 2004,
                'product_id' => 426,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            4 => 
            array (
                'id' => 2005,
                'product_id' => 426,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            5 => 
            array (
                'id' => 2006,
                'product_id' => 427,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            6 => 
            array (
                'id' => 2007,
                'product_id' => 427,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            7 => 
            array (
                'id' => 2008,
                'product_id' => 427,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            8 => 
            array (
                'id' => 2009,
                'product_id' => 427,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            9 => 
            array (
                'id' => 2010,
                'product_id' => 427,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            10 => 
            array (
                'id' => 2011,
                'product_id' => 428,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            11 => 
            array (
                'id' => 2012,
                'product_id' => 428,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            12 => 
            array (
                'id' => 2013,
                'product_id' => 428,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            13 => 
            array (
                'id' => 2014,
                'product_id' => 428,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            14 => 
            array (
                'id' => 2015,
                'product_id' => 428,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            15 => 
            array (
                'id' => 2016,
                'product_id' => 429,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            16 => 
            array (
                'id' => 2017,
                'product_id' => 429,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            17 => 
            array (
                'id' => 2018,
                'product_id' => 429,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            18 => 
            array (
                'id' => 2019,
                'product_id' => 429,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            19 => 
            array (
                'id' => 2020,
                'product_id' => 429,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            20 => 
            array (
                'id' => 2021,
                'product_id' => 430,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            21 => 
            array (
                'id' => 2022,
                'product_id' => 430,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            22 => 
            array (
                'id' => 2023,
                'product_id' => 430,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            23 => 
            array (
                'id' => 2024,
                'product_id' => 430,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            24 => 
            array (
                'id' => 2025,
                'product_id' => 430,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            25 => 
            array (
                'id' => 2026,
                'product_id' => 431,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            26 => 
            array (
                'id' => 2027,
                'product_id' => 431,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            27 => 
            array (
                'id' => 2028,
                'product_id' => 431,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            28 => 
            array (
                'id' => 2029,
                'product_id' => 431,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            29 => 
            array (
                'id' => 2030,
                'product_id' => 431,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            30 => 
            array (
                'id' => 2031,
                'product_id' => 432,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            31 => 
            array (
                'id' => 2032,
                'product_id' => 432,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            32 => 
            array (
                'id' => 2033,
                'product_id' => 432,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            33 => 
            array (
                'id' => 2034,
                'product_id' => 432,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            34 => 
            array (
                'id' => 2035,
                'product_id' => 432,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            35 => 
            array (
                'id' => 2036,
                'product_id' => 433,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            36 => 
            array (
                'id' => 2037,
                'product_id' => 433,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            37 => 
            array (
                'id' => 2038,
                'product_id' => 433,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            38 => 
            array (
                'id' => 2039,
                'product_id' => 433,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            39 => 
            array (
                'id' => 2040,
                'product_id' => 433,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            40 => 
            array (
                'id' => 2041,
                'product_id' => 434,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            41 => 
            array (
                'id' => 2042,
                'product_id' => 434,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            42 => 
            array (
                'id' => 2043,
                'product_id' => 434,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            43 => 
            array (
                'id' => 2044,
                'product_id' => 434,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            44 => 
            array (
                'id' => 2045,
                'product_id' => 434,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            45 => 
            array (
                'id' => 2046,
                'product_id' => 435,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            46 => 
            array (
                'id' => 2047,
                'product_id' => 435,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            47 => 
            array (
                'id' => 2048,
                'product_id' => 435,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            48 => 
            array (
                'id' => 2049,
                'product_id' => 435,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            49 => 
            array (
                'id' => 2050,
                'product_id' => 435,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            50 => 
            array (
                'id' => 2051,
                'product_id' => 436,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            51 => 
            array (
                'id' => 2052,
                'product_id' => 436,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            52 => 
            array (
                'id' => 2053,
                'product_id' => 436,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            53 => 
            array (
                'id' => 2054,
                'product_id' => 436,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            54 => 
            array (
                'id' => 2055,
                'product_id' => 436,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            55 => 
            array (
                'id' => 2056,
                'product_id' => 437,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            56 => 
            array (
                'id' => 2057,
                'product_id' => 437,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            57 => 
            array (
                'id' => 2058,
                'product_id' => 437,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            58 => 
            array (
                'id' => 2059,
                'product_id' => 437,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            59 => 
            array (
                'id' => 2060,
                'product_id' => 437,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            60 => 
            array (
                'id' => 2061,
                'product_id' => 438,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            61 => 
            array (
                'id' => 2062,
                'product_id' => 438,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            62 => 
            array (
                'id' => 2063,
                'product_id' => 438,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            63 => 
            array (
                'id' => 2064,
                'product_id' => 438,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            64 => 
            array (
                'id' => 2065,
                'product_id' => 438,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            65 => 
            array (
                'id' => 2066,
                'product_id' => 439,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            66 => 
            array (
                'id' => 2067,
                'product_id' => 439,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            67 => 
            array (
                'id' => 2068,
                'product_id' => 439,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            68 => 
            array (
                'id' => 2069,
                'product_id' => 439,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            69 => 
            array (
                'id' => 2070,
                'product_id' => 439,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            70 => 
            array (
                'id' => 2071,
                'product_id' => 440,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            71 => 
            array (
                'id' => 2072,
                'product_id' => 440,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            72 => 
            array (
                'id' => 2073,
                'product_id' => 440,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            73 => 
            array (
                'id' => 2074,
                'product_id' => 440,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            74 => 
            array (
                'id' => 2075,
                'product_id' => 440,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            75 => 
            array (
                'id' => 2076,
                'product_id' => 441,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            76 => 
            array (
                'id' => 2077,
                'product_id' => 441,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            77 => 
            array (
                'id' => 2078,
                'product_id' => 441,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            78 => 
            array (
                'id' => 2079,
                'product_id' => 441,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            79 => 
            array (
                'id' => 2080,
                'product_id' => 441,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            80 => 
            array (
                'id' => 2081,
                'product_id' => 442,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            81 => 
            array (
                'id' => 2082,
                'product_id' => 442,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            82 => 
            array (
                'id' => 2083,
                'product_id' => 442,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            83 => 
            array (
                'id' => 2084,
                'product_id' => 442,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            84 => 
            array (
                'id' => 2085,
                'product_id' => 442,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            85 => 
            array (
                'id' => 2086,
                'product_id' => 443,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            86 => 
            array (
                'id' => 2087,
                'product_id' => 443,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            87 => 
            array (
                'id' => 2088,
                'product_id' => 443,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            88 => 
            array (
                'id' => 2089,
                'product_id' => 443,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            89 => 
            array (
                'id' => 2090,
                'product_id' => 443,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            90 => 
            array (
                'id' => 2091,
                'product_id' => 444,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            91 => 
            array (
                'id' => 2092,
                'product_id' => 444,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            92 => 
            array (
                'id' => 2093,
                'product_id' => 444,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            93 => 
            array (
                'id' => 2094,
                'product_id' => 444,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            94 => 
            array (
                'id' => 2095,
                'product_id' => 444,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            95 => 
            array (
                'id' => 2096,
                'product_id' => 445,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            96 => 
            array (
                'id' => 2097,
                'product_id' => 445,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            97 => 
            array (
                'id' => 2098,
                'product_id' => 445,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            98 => 
            array (
                'id' => 2099,
                'product_id' => 445,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            99 => 
            array (
                'id' => 2100,
                'product_id' => 445,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            100 => 
            array (
                'id' => 2101,
                'product_id' => 446,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            101 => 
            array (
                'id' => 2102,
                'product_id' => 446,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            102 => 
            array (
                'id' => 2103,
                'product_id' => 446,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            103 => 
            array (
                'id' => 2104,
                'product_id' => 446,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            104 => 
            array (
                'id' => 2105,
                'product_id' => 446,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            105 => 
            array (
                'id' => 2106,
                'product_id' => 447,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            106 => 
            array (
                'id' => 2107,
                'product_id' => 447,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            107 => 
            array (
                'id' => 2108,
                'product_id' => 447,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            108 => 
            array (
                'id' => 2109,
                'product_id' => 447,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            109 => 
            array (
                'id' => 2110,
                'product_id' => 447,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            110 => 
            array (
                'id' => 2111,
                'product_id' => 448,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            111 => 
            array (
                'id' => 2112,
                'product_id' => 448,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            112 => 
            array (
                'id' => 2113,
                'product_id' => 448,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            113 => 
            array (
                'id' => 2114,
                'product_id' => 448,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            114 => 
            array (
                'id' => 2115,
                'product_id' => 448,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            115 => 
            array (
                'id' => 2116,
                'product_id' => 449,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            116 => 
            array (
                'id' => 2117,
                'product_id' => 449,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            117 => 
            array (
                'id' => 2118,
                'product_id' => 449,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            118 => 
            array (
                'id' => 2119,
                'product_id' => 449,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            119 => 
            array (
                'id' => 2120,
                'product_id' => 449,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            120 => 
            array (
                'id' => 2121,
                'product_id' => 450,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            121 => 
            array (
                'id' => 2122,
                'product_id' => 450,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            122 => 
            array (
                'id' => 2123,
                'product_id' => 450,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            123 => 
            array (
                'id' => 2124,
                'product_id' => 450,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            124 => 
            array (
                'id' => 2125,
                'product_id' => 450,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            125 => 
            array (
                'id' => 2126,
                'product_id' => 451,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            126 => 
            array (
                'id' => 2127,
                'product_id' => 451,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            127 => 
            array (
                'id' => 2128,
                'product_id' => 451,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            128 => 
            array (
                'id' => 2129,
                'product_id' => 451,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            129 => 
            array (
                'id' => 2130,
                'product_id' => 451,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            130 => 
            array (
                'id' => 2131,
                'product_id' => 452,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            131 => 
            array (
                'id' => 2132,
                'product_id' => 452,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            132 => 
            array (
                'id' => 2133,
                'product_id' => 452,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            133 => 
            array (
                'id' => 2134,
                'product_id' => 452,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            134 => 
            array (
                'id' => 2135,
                'product_id' => 452,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            135 => 
            array (
                'id' => 2136,
                'product_id' => 453,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            136 => 
            array (
                'id' => 2137,
                'product_id' => 453,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            137 => 
            array (
                'id' => 2138,
                'product_id' => 453,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            138 => 
            array (
                'id' => 2139,
                'product_id' => 453,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            139 => 
            array (
                'id' => 2140,
                'product_id' => 453,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            140 => 
            array (
                'id' => 2141,
                'product_id' => 454,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            141 => 
            array (
                'id' => 2142,
                'product_id' => 454,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            142 => 
            array (
                'id' => 2143,
                'product_id' => 454,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            143 => 
            array (
                'id' => 2144,
                'product_id' => 454,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            144 => 
            array (
                'id' => 2145,
                'product_id' => 454,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            145 => 
            array (
                'id' => 2146,
                'product_id' => 455,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            146 => 
            array (
                'id' => 2147,
                'product_id' => 455,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            147 => 
            array (
                'id' => 2148,
                'product_id' => 455,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            148 => 
            array (
                'id' => 2149,
                'product_id' => 455,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            149 => 
            array (
                'id' => 2150,
                'product_id' => 455,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            150 => 
            array (
                'id' => 2151,
                'product_id' => 456,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            151 => 
            array (
                'id' => 2152,
                'product_id' => 456,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            152 => 
            array (
                'id' => 2153,
                'product_id' => 456,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            153 => 
            array (
                'id' => 2154,
                'product_id' => 456,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            154 => 
            array (
                'id' => 2155,
                'product_id' => 456,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            155 => 
            array (
                'id' => 2156,
                'product_id' => 457,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            156 => 
            array (
                'id' => 2157,
                'product_id' => 457,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            157 => 
            array (
                'id' => 2158,
                'product_id' => 457,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            158 => 
            array (
                'id' => 2159,
                'product_id' => 457,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            159 => 
            array (
                'id' => 2160,
                'product_id' => 457,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            160 => 
            array (
                'id' => 2161,
                'product_id' => 458,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            161 => 
            array (
                'id' => 2162,
                'product_id' => 458,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            162 => 
            array (
                'id' => 2163,
                'product_id' => 458,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            163 => 
            array (
                'id' => 2164,
                'product_id' => 458,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            164 => 
            array (
                'id' => 2165,
                'product_id' => 458,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            165 => 
            array (
                'id' => 2166,
                'product_id' => 459,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            166 => 
            array (
                'id' => 2167,
                'product_id' => 459,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            167 => 
            array (
                'id' => 2168,
                'product_id' => 459,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            168 => 
            array (
                'id' => 2169,
                'product_id' => 459,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            169 => 
            array (
                'id' => 2170,
                'product_id' => 459,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            170 => 
            array (
                'id' => 2171,
                'product_id' => 460,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            171 => 
            array (
                'id' => 2172,
                'product_id' => 460,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            172 => 
            array (
                'id' => 2173,
                'product_id' => 460,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            173 => 
            array (
                'id' => 2174,
                'product_id' => 460,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            174 => 
            array (
                'id' => 2175,
                'product_id' => 460,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            175 => 
            array (
                'id' => 2176,
                'product_id' => 461,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            176 => 
            array (
                'id' => 2177,
                'product_id' => 461,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            177 => 
            array (
                'id' => 2178,
                'product_id' => 461,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            178 => 
            array (
                'id' => 2179,
                'product_id' => 461,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            179 => 
            array (
                'id' => 2180,
                'product_id' => 461,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            180 => 
            array (
                'id' => 2181,
                'product_id' => 462,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            181 => 
            array (
                'id' => 2182,
                'product_id' => 462,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            182 => 
            array (
                'id' => 2183,
                'product_id' => 462,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            183 => 
            array (
                'id' => 2184,
                'product_id' => 462,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            184 => 
            array (
                'id' => 2185,
                'product_id' => 462,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            185 => 
            array (
                'id' => 2186,
                'product_id' => 463,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            186 => 
            array (
                'id' => 2187,
                'product_id' => 463,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            187 => 
            array (
                'id' => 2188,
                'product_id' => 463,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            188 => 
            array (
                'id' => 2189,
                'product_id' => 463,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            189 => 
            array (
                'id' => 2190,
                'product_id' => 463,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            190 => 
            array (
                'id' => 2191,
                'product_id' => 464,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            191 => 
            array (
                'id' => 2192,
                'product_id' => 464,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            192 => 
            array (
                'id' => 2193,
                'product_id' => 464,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            193 => 
            array (
                'id' => 2194,
                'product_id' => 464,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            194 => 
            array (
                'id' => 2195,
                'product_id' => 464,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            195 => 
            array (
                'id' => 2196,
                'product_id' => 465,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            196 => 
            array (
                'id' => 2197,
                'product_id' => 465,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            197 => 
            array (
                'id' => 2198,
                'product_id' => 465,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            198 => 
            array (
                'id' => 2199,
                'product_id' => 465,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            199 => 
            array (
                'id' => 2200,
                'product_id' => 465,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            200 => 
            array (
                'id' => 2201,
                'product_id' => 466,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            201 => 
            array (
                'id' => 2202,
                'product_id' => 466,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            202 => 
            array (
                'id' => 2203,
                'product_id' => 466,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            203 => 
            array (
                'id' => 2204,
                'product_id' => 466,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            204 => 
            array (
                'id' => 2205,
                'product_id' => 466,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            205 => 
            array (
                'id' => 2206,
                'product_id' => 467,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            206 => 
            array (
                'id' => 2207,
                'product_id' => 467,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            207 => 
            array (
                'id' => 2208,
                'product_id' => 467,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            208 => 
            array (
                'id' => 2209,
                'product_id' => 467,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            209 => 
            array (
                'id' => 2210,
                'product_id' => 467,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            210 => 
            array (
                'id' => 2211,
                'product_id' => 468,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            211 => 
            array (
                'id' => 2212,
                'product_id' => 468,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            212 => 
            array (
                'id' => 2213,
                'product_id' => 468,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            213 => 
            array (
                'id' => 2214,
                'product_id' => 468,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            214 => 
            array (
                'id' => 2215,
                'product_id' => 468,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            215 => 
            array (
                'id' => 2216,
                'product_id' => 469,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            216 => 
            array (
                'id' => 2217,
                'product_id' => 469,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            217 => 
            array (
                'id' => 2218,
                'product_id' => 469,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            218 => 
            array (
                'id' => 2219,
                'product_id' => 469,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            219 => 
            array (
                'id' => 2220,
                'product_id' => 469,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            220 => 
            array (
                'id' => 2221,
                'product_id' => 470,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            221 => 
            array (
                'id' => 2222,
                'product_id' => 470,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            222 => 
            array (
                'id' => 2223,
                'product_id' => 470,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            223 => 
            array (
                'id' => 2224,
                'product_id' => 470,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            224 => 
            array (
                'id' => 2225,
                'product_id' => 470,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            225 => 
            array (
                'id' => 2226,
                'product_id' => 471,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            226 => 
            array (
                'id' => 2227,
                'product_id' => 471,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            227 => 
            array (
                'id' => 2228,
                'product_id' => 471,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            228 => 
            array (
                'id' => 2229,
                'product_id' => 471,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            229 => 
            array (
                'id' => 2230,
                'product_id' => 471,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            230 => 
            array (
                'id' => 2231,
                'product_id' => 472,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            231 => 
            array (
                'id' => 2232,
                'product_id' => 472,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            232 => 
            array (
                'id' => 2233,
                'product_id' => 472,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            233 => 
            array (
                'id' => 2234,
                'product_id' => 472,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            234 => 
            array (
                'id' => 2235,
                'product_id' => 472,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            235 => 
            array (
                'id' => 2236,
                'product_id' => 473,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            236 => 
            array (
                'id' => 2237,
                'product_id' => 473,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            237 => 
            array (
                'id' => 2238,
                'product_id' => 473,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            238 => 
            array (
                'id' => 2239,
                'product_id' => 473,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            239 => 
            array (
                'id' => 2240,
                'product_id' => 473,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            240 => 
            array (
                'id' => 2241,
                'product_id' => 474,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            241 => 
            array (
                'id' => 2242,
                'product_id' => 474,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            242 => 
            array (
                'id' => 2243,
                'product_id' => 474,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            243 => 
            array (
                'id' => 2244,
                'product_id' => 474,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            244 => 
            array (
                'id' => 2245,
                'product_id' => 474,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            245 => 
            array (
                'id' => 2246,
                'product_id' => 475,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            246 => 
            array (
                'id' => 2247,
                'product_id' => 475,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            247 => 
            array (
                'id' => 2248,
                'product_id' => 475,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            248 => 
            array (
                'id' => 2249,
                'product_id' => 475,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            249 => 
            array (
                'id' => 2250,
                'product_id' => 475,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            250 => 
            array (
                'id' => 2251,
                'product_id' => 476,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            251 => 
            array (
                'id' => 2252,
                'product_id' => 476,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            252 => 
            array (
                'id' => 2253,
                'product_id' => 476,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            253 => 
            array (
                'id' => 2254,
                'product_id' => 476,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            254 => 
            array (
                'id' => 2255,
                'product_id' => 476,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            255 => 
            array (
                'id' => 2256,
                'product_id' => 477,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            256 => 
            array (
                'id' => 2257,
                'product_id' => 477,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            257 => 
            array (
                'id' => 2258,
                'product_id' => 477,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            258 => 
            array (
                'id' => 2259,
                'product_id' => 477,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            259 => 
            array (
                'id' => 2260,
                'product_id' => 477,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            260 => 
            array (
                'id' => 2261,
                'product_id' => 478,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            261 => 
            array (
                'id' => 2262,
                'product_id' => 478,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            262 => 
            array (
                'id' => 2263,
                'product_id' => 478,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            263 => 
            array (
                'id' => 2264,
                'product_id' => 478,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            264 => 
            array (
                'id' => 2265,
                'product_id' => 478,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            265 => 
            array (
                'id' => 2266,
                'product_id' => 479,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            266 => 
            array (
                'id' => 2267,
                'product_id' => 479,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            267 => 
            array (
                'id' => 2268,
                'product_id' => 479,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            268 => 
            array (
                'id' => 2269,
                'product_id' => 479,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            269 => 
            array (
                'id' => 2270,
                'product_id' => 479,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            270 => 
            array (
                'id' => 2271,
                'product_id' => 480,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            271 => 
            array (
                'id' => 2272,
                'product_id' => 480,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            272 => 
            array (
                'id' => 2273,
                'product_id' => 480,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            273 => 
            array (
                'id' => 2274,
                'product_id' => 480,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            274 => 
            array (
                'id' => 2275,
                'product_id' => 480,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            275 => 
            array (
                'id' => 2276,
                'product_id' => 481,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            276 => 
            array (
                'id' => 2277,
                'product_id' => 481,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            277 => 
            array (
                'id' => 2278,
                'product_id' => 481,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            278 => 
            array (
                'id' => 2279,
                'product_id' => 481,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            279 => 
            array (
                'id' => 2280,
                'product_id' => 481,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            280 => 
            array (
                'id' => 2281,
                'product_id' => 482,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            281 => 
            array (
                'id' => 2282,
                'product_id' => 482,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            282 => 
            array (
                'id' => 2283,
                'product_id' => 482,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            283 => 
            array (
                'id' => 2284,
                'product_id' => 482,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            284 => 
            array (
                'id' => 2285,
                'product_id' => 482,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            285 => 
            array (
                'id' => 2286,
                'product_id' => 483,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            286 => 
            array (
                'id' => 2287,
                'product_id' => 483,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            287 => 
            array (
                'id' => 2288,
                'product_id' => 483,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            288 => 
            array (
                'id' => 2289,
                'product_id' => 483,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            289 => 
            array (
                'id' => 2290,
                'product_id' => 483,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            290 => 
            array (
                'id' => 2291,
                'product_id' => 484,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            291 => 
            array (
                'id' => 2292,
                'product_id' => 484,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            292 => 
            array (
                'id' => 2293,
                'product_id' => 484,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            293 => 
            array (
                'id' => 2294,
                'product_id' => 484,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            294 => 
            array (
                'id' => 2295,
                'product_id' => 484,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            295 => 
            array (
                'id' => 2296,
                'product_id' => 485,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            296 => 
            array (
                'id' => 2297,
                'product_id' => 485,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            297 => 
            array (
                'id' => 2298,
                'product_id' => 485,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            298 => 
            array (
                'id' => 2299,
                'product_id' => 485,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            299 => 
            array (
                'id' => 2300,
                'product_id' => 485,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            300 => 
            array (
                'id' => 2301,
                'product_id' => 486,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            301 => 
            array (
                'id' => 2302,
                'product_id' => 486,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            302 => 
            array (
                'id' => 2303,
                'product_id' => 486,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            303 => 
            array (
                'id' => 2304,
                'product_id' => 486,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            304 => 
            array (
                'id' => 2305,
                'product_id' => 486,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            305 => 
            array (
                'id' => 2306,
                'product_id' => 487,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            306 => 
            array (
                'id' => 2307,
                'product_id' => 487,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            307 => 
            array (
                'id' => 2308,
                'product_id' => 487,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            308 => 
            array (
                'id' => 2309,
                'product_id' => 487,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            309 => 
            array (
                'id' => 2310,
                'product_id' => 487,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            310 => 
            array (
                'id' => 2311,
                'product_id' => 488,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            311 => 
            array (
                'id' => 2312,
                'product_id' => 488,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            312 => 
            array (
                'id' => 2313,
                'product_id' => 488,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            313 => 
            array (
                'id' => 2314,
                'product_id' => 488,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            314 => 
            array (
                'id' => 2315,
                'product_id' => 488,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            315 => 
            array (
                'id' => 2316,
                'product_id' => 489,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            316 => 
            array (
                'id' => 2317,
                'product_id' => 489,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            317 => 
            array (
                'id' => 2318,
                'product_id' => 489,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            318 => 
            array (
                'id' => 2319,
                'product_id' => 489,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            319 => 
            array (
                'id' => 2320,
                'product_id' => 489,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            320 => 
            array (
                'id' => 2321,
                'product_id' => 490,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            321 => 
            array (
                'id' => 2322,
                'product_id' => 490,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            322 => 
            array (
                'id' => 2323,
                'product_id' => 490,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            323 => 
            array (
                'id' => 2324,
                'product_id' => 490,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            324 => 
            array (
                'id' => 2325,
                'product_id' => 490,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            325 => 
            array (
                'id' => 2326,
                'product_id' => 491,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            326 => 
            array (
                'id' => 2327,
                'product_id' => 491,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            327 => 
            array (
                'id' => 2328,
                'product_id' => 491,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            328 => 
            array (
                'id' => 2329,
                'product_id' => 491,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            329 => 
            array (
                'id' => 2330,
                'product_id' => 491,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            330 => 
            array (
                'id' => 2331,
                'product_id' => 492,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            331 => 
            array (
                'id' => 2332,
                'product_id' => 492,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            332 => 
            array (
                'id' => 2333,
                'product_id' => 492,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            333 => 
            array (
                'id' => 2334,
                'product_id' => 492,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            334 => 
            array (
                'id' => 2335,
                'product_id' => 492,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            335 => 
            array (
                'id' => 2336,
                'product_id' => 493,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            336 => 
            array (
                'id' => 2337,
                'product_id' => 493,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            337 => 
            array (
                'id' => 2338,
                'product_id' => 493,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            338 => 
            array (
                'id' => 2339,
                'product_id' => 493,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            339 => 
            array (
                'id' => 2340,
                'product_id' => 493,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            340 => 
            array (
                'id' => 2341,
                'product_id' => 494,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            341 => 
            array (
                'id' => 2342,
                'product_id' => 494,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            342 => 
            array (
                'id' => 2343,
                'product_id' => 494,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            343 => 
            array (
                'id' => 2344,
                'product_id' => 494,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            344 => 
            array (
                'id' => 2345,
                'product_id' => 494,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            345 => 
            array (
                'id' => 2346,
                'product_id' => 495,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            346 => 
            array (
                'id' => 2347,
                'product_id' => 495,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            347 => 
            array (
                'id' => 2348,
                'product_id' => 495,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            348 => 
            array (
                'id' => 2349,
                'product_id' => 495,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            349 => 
            array (
                'id' => 2350,
                'product_id' => 495,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            350 => 
            array (
                'id' => 2351,
                'product_id' => 496,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            351 => 
            array (
                'id' => 2352,
                'product_id' => 496,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            352 => 
            array (
                'id' => 2353,
                'product_id' => 496,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            353 => 
            array (
                'id' => 2354,
                'product_id' => 496,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            354 => 
            array (
                'id' => 2355,
                'product_id' => 496,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            355 => 
            array (
                'id' => 2356,
                'product_id' => 497,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            356 => 
            array (
                'id' => 2357,
                'product_id' => 497,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            357 => 
            array (
                'id' => 2358,
                'product_id' => 497,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            358 => 
            array (
                'id' => 2359,
                'product_id' => 497,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            359 => 
            array (
                'id' => 2360,
                'product_id' => 497,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            360 => 
            array (
                'id' => 2361,
                'product_id' => 498,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            361 => 
            array (
                'id' => 2362,
                'product_id' => 498,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            362 => 
            array (
                'id' => 2363,
                'product_id' => 498,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            363 => 
            array (
                'id' => 2364,
                'product_id' => 498,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            364 => 
            array (
                'id' => 2365,
                'product_id' => 498,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            365 => 
            array (
                'id' => 2366,
                'product_id' => 499,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            366 => 
            array (
                'id' => 2367,
                'product_id' => 499,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            367 => 
            array (
                'id' => 2368,
                'product_id' => 499,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            368 => 
            array (
                'id' => 2369,
                'product_id' => 499,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            369 => 
            array (
                'id' => 2370,
                'product_id' => 499,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            370 => 
            array (
                'id' => 2371,
                'product_id' => 500,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            371 => 
            array (
                'id' => 2372,
                'product_id' => 500,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            372 => 
            array (
                'id' => 2373,
                'product_id' => 500,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            373 => 
            array (
                'id' => 2374,
                'product_id' => 500,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            374 => 
            array (
                'id' => 2375,
                'product_id' => 500,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            375 => 
            array (
                'id' => 2376,
                'product_id' => 501,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            376 => 
            array (
                'id' => 2377,
                'product_id' => 501,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            377 => 
            array (
                'id' => 2378,
                'product_id' => 501,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            378 => 
            array (
                'id' => 2379,
                'product_id' => 501,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            379 => 
            array (
                'id' => 2380,
                'product_id' => 501,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            380 => 
            array (
                'id' => 2381,
                'product_id' => 502,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            381 => 
            array (
                'id' => 2382,
                'product_id' => 502,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            382 => 
            array (
                'id' => 2383,
                'product_id' => 502,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            383 => 
            array (
                'id' => 2384,
                'product_id' => 502,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            384 => 
            array (
                'id' => 2385,
                'product_id' => 502,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            385 => 
            array (
                'id' => 2386,
                'product_id' => 503,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            386 => 
            array (
                'id' => 2387,
                'product_id' => 503,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            387 => 
            array (
                'id' => 2388,
                'product_id' => 503,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            388 => 
            array (
                'id' => 2389,
                'product_id' => 503,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            389 => 
            array (
                'id' => 2390,
                'product_id' => 503,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            390 => 
            array (
                'id' => 2391,
                'product_id' => 504,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            391 => 
            array (
                'id' => 2392,
                'product_id' => 504,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            392 => 
            array (
                'id' => 2393,
                'product_id' => 504,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            393 => 
            array (
                'id' => 2394,
                'product_id' => 504,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            394 => 
            array (
                'id' => 2395,
                'product_id' => 504,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            395 => 
            array (
                'id' => 2396,
                'product_id' => 505,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            396 => 
            array (
                'id' => 2397,
                'product_id' => 505,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            397 => 
            array (
                'id' => 2398,
                'product_id' => 505,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            398 => 
            array (
                'id' => 2399,
                'product_id' => 505,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            399 => 
            array (
                'id' => 2400,
                'product_id' => 505,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            400 => 
            array (
                'id' => 2401,
                'product_id' => 506,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            401 => 
            array (
                'id' => 2402,
                'product_id' => 506,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            402 => 
            array (
                'id' => 2403,
                'product_id' => 506,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            403 => 
            array (
                'id' => 2404,
                'product_id' => 506,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            404 => 
            array (
                'id' => 2405,
                'product_id' => 506,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            405 => 
            array (
                'id' => 2406,
                'product_id' => 507,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            406 => 
            array (
                'id' => 2407,
                'product_id' => 507,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            407 => 
            array (
                'id' => 2408,
                'product_id' => 507,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            408 => 
            array (
                'id' => 2409,
                'product_id' => 507,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            409 => 
            array (
                'id' => 2410,
                'product_id' => 507,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            410 => 
            array (
                'id' => 2411,
                'product_id' => 508,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            411 => 
            array (
                'id' => 2412,
                'product_id' => 508,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            412 => 
            array (
                'id' => 2413,
                'product_id' => 508,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            413 => 
            array (
                'id' => 2414,
                'product_id' => 508,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            414 => 
            array (
                'id' => 2415,
                'product_id' => 508,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            415 => 
            array (
                'id' => 2416,
                'product_id' => 509,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            416 => 
            array (
                'id' => 2417,
                'product_id' => 509,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            417 => 
            array (
                'id' => 2418,
                'product_id' => 509,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            418 => 
            array (
                'id' => 2419,
                'product_id' => 509,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            419 => 
            array (
                'id' => 2420,
                'product_id' => 509,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            420 => 
            array (
                'id' => 2421,
                'product_id' => 510,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            421 => 
            array (
                'id' => 2422,
                'product_id' => 510,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            422 => 
            array (
                'id' => 2423,
                'product_id' => 510,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            423 => 
            array (
                'id' => 2424,
                'product_id' => 510,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            424 => 
            array (
                'id' => 2425,
                'product_id' => 510,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            425 => 
            array (
                'id' => 2426,
                'product_id' => 511,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            426 => 
            array (
                'id' => 2427,
                'product_id' => 511,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            427 => 
            array (
                'id' => 2428,
                'product_id' => 511,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            428 => 
            array (
                'id' => 2429,
                'product_id' => 511,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            429 => 
            array (
                'id' => 2430,
                'product_id' => 511,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            430 => 
            array (
                'id' => 2431,
                'product_id' => 512,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            431 => 
            array (
                'id' => 2432,
                'product_id' => 512,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            432 => 
            array (
                'id' => 2433,
                'product_id' => 512,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            433 => 
            array (
                'id' => 2434,
                'product_id' => 512,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            434 => 
            array (
                'id' => 2435,
                'product_id' => 512,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            435 => 
            array (
                'id' => 2436,
                'product_id' => 513,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            436 => 
            array (
                'id' => 2437,
                'product_id' => 513,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            437 => 
            array (
                'id' => 2438,
                'product_id' => 513,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            438 => 
            array (
                'id' => 2439,
                'product_id' => 513,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            439 => 
            array (
                'id' => 2440,
                'product_id' => 513,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            440 => 
            array (
                'id' => 2441,
                'product_id' => 514,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            441 => 
            array (
                'id' => 2442,
                'product_id' => 514,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            442 => 
            array (
                'id' => 2443,
                'product_id' => 514,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            443 => 
            array (
                'id' => 2444,
                'product_id' => 514,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            444 => 
            array (
                'id' => 2445,
                'product_id' => 514,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            445 => 
            array (
                'id' => 2446,
                'product_id' => 515,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            446 => 
            array (
                'id' => 2447,
                'product_id' => 515,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            447 => 
            array (
                'id' => 2448,
                'product_id' => 515,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            448 => 
            array (
                'id' => 2449,
                'product_id' => 515,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            449 => 
            array (
                'id' => 2450,
                'product_id' => 515,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            450 => 
            array (
                'id' => 2451,
                'product_id' => 516,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            451 => 
            array (
                'id' => 2452,
                'product_id' => 516,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            452 => 
            array (
                'id' => 2453,
                'product_id' => 516,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            453 => 
            array (
                'id' => 2454,
                'product_id' => 516,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            454 => 
            array (
                'id' => 2455,
                'product_id' => 516,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            455 => 
            array (
                'id' => 2456,
                'product_id' => 517,
                'name' => 'Normal',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            456 => 
            array (
                'id' => 2457,
                'product_id' => 517,
                'name' => 'Dry',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            457 => 
            array (
                'id' => 2458,
                'product_id' => 517,
                'name' => 'Oily',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            458 => 
            array (
                'id' => 2459,
                'product_id' => 517,
                'name' => 'Sensitive',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            459 => 
            array (
                'id' => 2460,
                'product_id' => 517,
                'name' => 'Combination',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
        ));
        
        
    }
}