<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class IngredientsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('ingredients')->delete();
        
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1,
                'product_id' => 1,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            1 => 
            array (
                'id' => 2,
                'product_id' => 1,
                'name' => 'Menghilangkan sel kulit mati',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            2 => 
            array (
                'id' => 3,
                'product_id' => 1,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            3 => 
            array (
                'id' => 4,
                'product_id' => 2,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            4 => 
            array (
                'id' => 5,
                'product_id' => 2,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            5 => 
            array (
                'id' => 6,
                'product_id' => 3,
                'name' => 'Menjaga kekenyalan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            6 => 
            array (
                'id' => 7,
                'product_id' => 3,
                'name' => 'Menjaga kekencangan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            7 => 
            array (
                'id' => 8,
                'product_id' => 3,
                'name' => 'Kulit bercahaya',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            8 => 
            array (
                'id' => 9,
                'product_id' => 3,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            9 => 
            array (
                'id' => 10,
                'product_id' => 4,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            10 => 
            array (
                'id' => 11,
                'product_id' => 5,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            11 => 
            array (
                'id' => 12,
                'product_id' => 5,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            12 => 
            array (
                'id' => 13,
                'product_id' => 6,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            13 => 
            array (
                'id' => 14,
                'product_id' => 6,
                'name' => 'Mengurangi komedo',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            14 => 
            array (
                'id' => 15,
                'product_id' => 6,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            15 => 
            array (
                'id' => 16,
                'product_id' => 7,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            16 => 
            array (
                'id' => 17,
                'product_id' => 7,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            17 => 
            array (
                'id' => 18,
                'product_id' => 7,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            18 => 
            array (
                'id' => 19,
                'product_id' => 8,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            19 => 
            array (
                'id' => 20,
                'product_id' => 8,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            20 => 
            array (
                'id' => 21,
                'product_id' => 9,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            21 => 
            array (
                'id' => 22,
                'product_id' => 9,
                'name' => 'Menjaga kekenyalan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            22 => 
            array (
                'id' => 23,
                'product_id' => 10,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            23 => 
            array (
                'id' => 24,
                'product_id' => 10,
                'name' => 'Mengontrol sebum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            24 => 
            array (
                'id' => 25,
                'product_id' => 11,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            25 => 
            array (
                'id' => 26,
                'product_id' => 12,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            26 => 
            array (
                'id' => 27,
                'product_id' => 13,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            27 => 
            array (
                'id' => 28,
                'product_id' => 13,
                'name' => 'Mengurangi komedo',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            28 => 
            array (
                'id' => 29,
                'product_id' => 14,
                'name' => 'Mengencangkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            29 => 
            array (
                'id' => 30,
                'product_id' => 14,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            30 => 
            array (
                'id' => 31,
                'product_id' => 14,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            31 => 
            array (
                'id' => 32,
                'product_id' => 15,
                'name' => 'Mencegah jerawat',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            32 => 
            array (
                'id' => 33,
                'product_id' => 16,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            33 => 
            array (
                'id' => 34,
                'product_id' => 16,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            34 => 
            array (
                'id' => 35,
                'product_id' => 17,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            35 => 
            array (
                'id' => 36,
                'product_id' => 18,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            36 => 
            array (
                'id' => 37,
                'product_id' => 18,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            37 => 
            array (
                'id' => 38,
                'product_id' => 18,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            38 => 
            array (
                'id' => 39,
                'product_id' => 19,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            39 => 
            array (
                'id' => 40,
                'product_id' => 19,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            40 => 
            array (
                'id' => 41,
                'product_id' => 19,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            41 => 
            array (
                'id' => 42,
                'product_id' => 19,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            42 => 
            array (
                'id' => 43,
                'product_id' => 20,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            43 => 
            array (
                'id' => 44,
                'product_id' => 20,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            44 => 
            array (
                'id' => 45,
                'product_id' => 20,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            45 => 
            array (
                'id' => 46,
                'product_id' => 21,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            46 => 
            array (
                'id' => 47,
                'product_id' => 21,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            47 => 
            array (
                'id' => 48,
                'product_id' => 22,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            48 => 
            array (
                'id' => 49,
                'product_id' => 23,
                'name' => 'Mengotrol minyak',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            49 => 
            array (
                'id' => 50,
                'product_id' => 23,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            50 => 
            array (
                'id' => 51,
                'product_id' => 23,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            51 => 
            array (
                'id' => 52,
                'product_id' => 23,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            52 => 
            array (
                'id' => 53,
                'product_id' => 24,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            53 => 
            array (
                'id' => 54,
                'product_id' => 24,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            54 => 
            array (
                'id' => 55,
                'product_id' => 25,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            55 => 
            array (
                'id' => 56,
                'product_id' => 25,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            56 => 
            array (
                'id' => 57,
                'product_id' => 25,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            57 => 
            array (
                'id' => 58,
                'product_id' => 26,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            58 => 
            array (
                'id' => 59,
                'product_id' => 26,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            59 => 
            array (
                'id' => 60,
                'product_id' => 27,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            60 => 
            array (
                'id' => 61,
                'product_id' => 27,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            61 => 
            array (
                'id' => 62,
                'product_id' => 27,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            62 => 
            array (
                'id' => 63,
                'product_id' => 28,
                'name' => 'Meningkatkan produksi kolagen',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            63 => 
            array (
                'id' => 64,
                'product_id' => 28,
                'name' => 'Melindungi kulit dari polusi',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            64 => 
            array (
                'id' => 65,
                'product_id' => 28,
                'name' => 'Menghaluskan tekstur kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            65 => 
            array (
                'id' => 66,
                'product_id' => 28,
                'name' => 'Mencegah penuaan dini',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            66 => 
            array (
                'id' => 67,
                'product_id' => 29,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            67 => 
            array (
                'id' => 68,
                'product_id' => 30,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            68 => 
            array (
                'id' => 69,
                'product_id' => 30,
                'name' => 'Menghilangkan sel kulit mati',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            69 => 
            array (
                'id' => 70,
                'product_id' => 30,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            70 => 
            array (
                'id' => 71,
                'product_id' => 31,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            71 => 
            array (
                'id' => 72,
                'product_id' => 31,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            72 => 
            array (
                'id' => 73,
                'product_id' => 32,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            73 => 
            array (
                'id' => 74,
                'product_id' => 32,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            74 => 
            array (
                'id' => 75,
                'product_id' => 33,
                'name' => 'Mengotrol minyak',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            75 => 
            array (
                'id' => 76,
                'product_id' => 33,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            76 => 
            array (
                'id' => 77,
                'product_id' => 33,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            77 => 
            array (
                'id' => 78,
                'product_id' => 33,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            78 => 
            array (
                'id' => 79,
                'product_id' => 34,
                'name' => 'Mengotrol minyak',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            79 => 
            array (
                'id' => 80,
                'product_id' => 34,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            80 => 
            array (
                'id' => 81,
                'product_id' => 34,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            81 => 
            array (
                'id' => 82,
                'product_id' => 34,
                'name' => 'Meningkatkan skin barrier',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            82 => 
            array (
                'id' => 83,
                'product_id' => 35,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            83 => 
            array (
                'id' => 84,
                'product_id' => 36,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            84 => 
            array (
                'id' => 85,
                'product_id' => 36,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            85 => 
            array (
                'id' => 86,
                'product_id' => 36,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            86 => 
            array (
                'id' => 87,
                'product_id' => 36,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            87 => 
            array (
                'id' => 88,
                'product_id' => 37,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            88 => 
            array (
                'id' => 89,
                'product_id' => 37,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            89 => 
            array (
                'id' => 90,
                'product_id' => 38,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            90 => 
            array (
                'id' => 91,
                'product_id' => 38,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            91 => 
            array (
                'id' => 92,
                'product_id' => 38,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            92 => 
            array (
                'id' => 93,
                'product_id' => 39,
                'name' => 'Mengotrol minyak',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            93 => 
            array (
                'id' => 94,
                'product_id' => 39,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            94 => 
            array (
                'id' => 95,
                'product_id' => 39,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            95 => 
            array (
                'id' => 96,
                'product_id' => 40,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            96 => 
            array (
                'id' => 97,
                'product_id' => 40,
                'name' => 'Menghilangkan sel kulit mati',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            97 => 
            array (
                'id' => 98,
                'product_id' => 40,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            98 => 
            array (
                'id' => 99,
                'product_id' => 41,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            99 => 
            array (
                'id' => 100,
                'product_id' => 41,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            100 => 
            array (
                'id' => 101,
                'product_id' => 41,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            101 => 
            array (
                'id' => 102,
                'product_id' => 41,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            102 => 
            array (
                'id' => 103,
                'product_id' => 42,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            103 => 
            array (
                'id' => 104,
                'product_id' => 42,
                'name' => 'Menjaga elastisitas kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            104 => 
            array (
                'id' => 105,
                'product_id' => 43,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            105 => 
            array (
                'id' => 106,
                'product_id' => 43,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            106 => 
            array (
                'id' => 107,
                'product_id' => 43,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            107 => 
            array (
                'id' => 108,
                'product_id' => 44,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            108 => 
            array (
                'id' => 109,
                'product_id' => 44,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            109 => 
            array (
                'id' => 110,
                'product_id' => 44,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            110 => 
            array (
                'id' => 111,
                'product_id' => 45,
                'name' => 'Anti-aging',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            111 => 
            array (
                'id' => 112,
                'product_id' => 45,
                'name' => 'Menghilangkan sel kulit mati',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            112 => 
            array (
                'id' => 113,
                'product_id' => 45,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            113 => 
            array (
                'id' => 114,
                'product_id' => 45,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            114 => 
            array (
                'id' => 115,
                'product_id' => 45,
                'name' => 'Meningkatkan Skin Barrier',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            115 => 
            array (
                'id' => 116,
                'product_id' => 46,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            116 => 
            array (
                'id' => 117,
                'product_id' => 46,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            117 => 
            array (
                'id' => 118,
                'product_id' => 46,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            118 => 
            array (
                'id' => 119,
                'product_id' => 47,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            119 => 
            array (
                'id' => 120,
                'product_id' => 47,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            120 => 
            array (
                'id' => 121,
                'product_id' => 47,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            121 => 
            array (
                'id' => 122,
                'product_id' => 48,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            122 => 
            array (
                'id' => 123,
                'product_id' => 48,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            123 => 
            array (
                'id' => 124,
                'product_id' => 48,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            124 => 
            array (
                'id' => 125,
                'product_id' => 49,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            125 => 
            array (
                'id' => 126,
                'product_id' => 49,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            126 => 
            array (
                'id' => 127,
                'product_id' => 49,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            127 => 
            array (
                'id' => 128,
                'product_id' => 50,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            128 => 
            array (
                'id' => 129,
                'product_id' => 50,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            129 => 
            array (
                'id' => 130,
                'product_id' => 50,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            130 => 
            array (
                'id' => 131,
                'product_id' => 51,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            131 => 
            array (
                'id' => 132,
                'product_id' => 52,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            132 => 
            array (
                'id' => 133,
                'product_id' => 52,
                'name' => 'menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            133 => 
            array (
                'id' => 134,
                'product_id' => 52,
                'name' => 'mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            134 => 
            array (
                'id' => 135,
                'product_id' => 53,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            135 => 
            array (
                'id' => 136,
                'product_id' => 53,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            136 => 
            array (
                'id' => 137,
                'product_id' => 53,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            137 => 
            array (
                'id' => 138,
                'product_id' => 53,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            138 => 
            array (
                'id' => 139,
                'product_id' => 54,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            139 => 
            array (
                'id' => 140,
                'product_id' => 54,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            140 => 
            array (
                'id' => 141,
                'product_id' => 54,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            141 => 
            array (
                'id' => 142,
                'product_id' => 54,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            142 => 
            array (
                'id' => 143,
                'product_id' => 55,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            143 => 
            array (
                'id' => 144,
                'product_id' => 55,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            144 => 
            array (
                'id' => 145,
                'product_id' => 55,
                'name' => 'Anti Oksidan',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            145 => 
            array (
                'id' => 146,
                'product_id' => 55,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            146 => 
            array (
                'id' => 147,
                'product_id' => 56,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            147 => 
            array (
                'id' => 148,
                'product_id' => 56,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            148 => 
            array (
                'id' => 149,
                'product_id' => 56,
                'name' => 'Mengontrol minyak',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            149 => 
            array (
                'id' => 150,
                'product_id' => 56,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            150 => 
            array (
                'id' => 151,
                'product_id' => 57,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            151 => 
            array (
                'id' => 152,
                'product_id' => 57,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            152 => 
            array (
                'id' => 153,
                'product_id' => 57,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            153 => 
            array (
                'id' => 154,
                'product_id' => 57,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            154 => 
            array (
                'id' => 155,
                'product_id' => 58,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            155 => 
            array (
                'id' => 156,
                'product_id' => 58,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            156 => 
            array (
                'id' => 157,
                'product_id' => 58,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            157 => 
            array (
                'id' => 158,
                'product_id' => 59,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            158 => 
            array (
                'id' => 159,
                'product_id' => 59,
                'name' => 'Mencerahkan wajah',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            159 => 
            array (
                'id' => 160,
                'product_id' => 59,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            160 => 
            array (
                'id' => 161,
                'product_id' => 60,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            161 => 
            array (
                'id' => 162,
                'product_id' => 60,
                'name' => 'Meratakan warna kulitm Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            162 => 
            array (
                'id' => 163,
                'product_id' => 61,
                'name' => 'Mengangkat sel kulit mati',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            163 => 
            array (
                'id' => 164,
                'product_id' => 61,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            164 => 
            array (
                'id' => 165,
                'product_id' => 61,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            165 => 
            array (
                'id' => 166,
                'product_id' => 62,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            166 => 
            array (
                'id' => 167,
                'product_id' => 62,
                'name' => 'Memelihara elastisitas kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            167 => 
            array (
                'id' => 168,
                'product_id' => 63,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            168 => 
            array (
                'id' => 169,
                'product_id' => 63,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            169 => 
            array (
                'id' => 170,
                'product_id' => 63,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            170 => 
            array (
                'id' => 171,
                'product_id' => 64,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            171 => 
            array (
                'id' => 172,
                'product_id' => 64,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            172 => 
            array (
                'id' => 173,
                'product_id' => 64,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            173 => 
            array (
                'id' => 174,
                'product_id' => 65,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            174 => 
            array (
                'id' => 175,
                'product_id' => 65,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            175 => 
            array (
                'id' => 176,
                'product_id' => 66,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            176 => 
            array (
                'id' => 177,
                'product_id' => 66,
                'name' => 'Antioksidan',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            177 => 
            array (
                'id' => 178,
                'product_id' => 67,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            178 => 
            array (
                'id' => 179,
                'product_id' => 68,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            179 => 
            array (
                'id' => 180,
                'product_id' => 69,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            180 => 
            array (
                'id' => 181,
                'product_id' => 70,
                'name' => 'Meremajakan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            181 => 
            array (
                'id' => 182,
                'product_id' => 70,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            182 => 
            array (
                'id' => 183,
                'product_id' => 71,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            183 => 
            array (
                'id' => 184,
                'product_id' => 72,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            184 => 
            array (
                'id' => 185,
                'product_id' => 72,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            185 => 
            array (
                'id' => 186,
                'product_id' => 73,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            186 => 
            array (
                'id' => 187,
                'product_id' => 74,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            187 => 
            array (
                'id' => 188,
                'product_id' => 74,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            188 => 
            array (
                'id' => 189,
                'product_id' => 75,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            189 => 
            array (
                'id' => 190,
                'product_id' => 75,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            190 => 
            array (
                'id' => 191,
                'product_id' => 75,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            191 => 
            array (
                'id' => 192,
                'product_id' => 76,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            192 => 
            array (
                'id' => 193,
                'product_id' => 76,
                'name' => 'Menyamarkan bekas jerawat',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            193 => 
            array (
                'id' => 194,
                'product_id' => 76,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            194 => 
            array (
                'id' => 195,
                'product_id' => 76,
                'name' => 'Antioksidan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            195 => 
            array (
                'id' => 196,
                'product_id' => 76,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            196 => 
            array (
                'id' => 197,
                'product_id' => 77,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            197 => 
            array (
                'id' => 198,
                'product_id' => 77,
                'name' => 'Mencerahkan kullit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            198 => 
            array (
                'id' => 199,
                'product_id' => 77,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            199 => 
            array (
                'id' => 200,
                'product_id' => 78,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            200 => 
            array (
                'id' => 201,
                'product_id' => 78,
                'name' => 'Antioksidan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            201 => 
            array (
                'id' => 202,
                'product_id' => 79,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            202 => 
            array (
                'id' => 203,
                'product_id' => 79,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            203 => 
            array (
                'id' => 204,
                'product_id' => 80,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            204 => 
            array (
                'id' => 205,
                'product_id' => 80,
                'name' => 'Menjaga elastisitas kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            205 => 
            array (
                'id' => 206,
                'product_id' => 81,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            206 => 
            array (
                'id' => 207,
                'product_id' => 81,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            207 => 
            array (
                'id' => 208,
                'product_id' => 82,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            208 => 
            array (
                'id' => 209,
                'product_id' => 82,
                'name' => 'Menyamarakan kerutan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            209 => 
            array (
                'id' => 210,
                'product_id' => 82,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            210 => 
            array (
                'id' => 211,
                'product_id' => 83,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            211 => 
            array (
                'id' => 212,
                'product_id' => 83,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            212 => 
            array (
                'id' => 213,
                'product_id' => 83,
                'name' => 'Mengurangi Kemerahan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            213 => 
            array (
                'id' => 214,
                'product_id' => 84,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            214 => 
            array (
                'id' => 215,
                'product_id' => 84,
                'name' => 'Menjaga kekenyalan',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            215 => 
            array (
                'id' => 216,
                'product_id' => 85,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            216 => 
            array (
                'id' => 217,
                'product_id' => 85,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            217 => 
            array (
                'id' => 218,
                'product_id' => 85,
                'name' => 'Menjaga kekenyalan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            218 => 
            array (
                'id' => 219,
                'product_id' => 86,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            219 => 
            array (
                'id' => 220,
                'product_id' => 86,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            220 => 
            array (
                'id' => 221,
                'product_id' => 87,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            221 => 
            array (
                'id' => 222,
                'product_id' => 87,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            222 => 
            array (
                'id' => 223,
                'product_id' => 88,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            223 => 
            array (
                'id' => 224,
                'product_id' => 88,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            224 => 
            array (
                'id' => 225,
                'product_id' => 88,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            225 => 
            array (
                'id' => 226,
                'product_id' => 89,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            226 => 
            array (
                'id' => 227,
                'product_id' => 89,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            227 => 
            array (
                'id' => 228,
                'product_id' => 90,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            228 => 
            array (
                'id' => 229,
                'product_id' => 90,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            229 => 
            array (
                'id' => 230,
                'product_id' => 91,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            230 => 
            array (
                'id' => 231,
                'product_id' => 91,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            231 => 
            array (
                'id' => 232,
                'product_id' => 92,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            232 => 
            array (
                'id' => 233,
                'product_id' => 92,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            233 => 
            array (
                'id' => 234,
                'product_id' => 93,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            234 => 
            array (
                'id' => 235,
                'product_id' => 93,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            235 => 
            array (
                'id' => 236,
                'product_id' => 94,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            236 => 
            array (
                'id' => 237,
                'product_id' => 94,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            237 => 
            array (
                'id' => 238,
                'product_id' => 95,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            238 => 
            array (
                'id' => 239,
                'product_id' => 95,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            239 => 
            array (
                'id' => 240,
                'product_id' => 96,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            240 => 
            array (
                'id' => 241,
                'product_id' => 96,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            241 => 
            array (
                'id' => 242,
                'product_id' => 96,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            242 => 
            array (
                'id' => 243,
                'product_id' => 97,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            243 => 
            array (
                'id' => 244,
                'product_id' => 98,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            244 => 
            array (
                'id' => 245,
                'product_id' => 98,
                'name' => 'Menyamarkan kerutan,Menjaga elastisitas',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            245 => 
            array (
                'id' => 246,
                'product_id' => 98,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            246 => 
            array (
                'id' => 247,
                'product_id' => 99,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            247 => 
            array (
                'id' => 248,
                'product_id' => 99,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            248 => 
            array (
                'id' => 249,
                'product_id' => 100,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            249 => 
            array (
                'id' => 250,
                'product_id' => 100,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            250 => 
            array (
                'id' => 251,
                'product_id' => 101,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            251 => 
            array (
                'id' => 252,
                'product_id' => 101,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            252 => 
            array (
                'id' => 253,
                'product_id' => 101,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            253 => 
            array (
                'id' => 254,
                'product_id' => 102,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            254 => 
            array (
                'id' => 255,
                'product_id' => 102,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            255 => 
            array (
                'id' => 256,
                'product_id' => 103,
                'name' => 'Menjaga kekenyalan',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            256 => 
            array (
                'id' => 257,
                'product_id' => 103,
                'name' => 'Menjaga kekencangan',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            257 => 
            array (
                'id' => 258,
                'product_id' => 103,
                'name' => 'Kulit bercahaya',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            258 => 
            array (
                'id' => 259,
                'product_id' => 103,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            259 => 
            array (
                'id' => 260,
                'product_id' => 104,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            260 => 
            array (
                'id' => 261,
                'product_id' => 105,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            261 => 
            array (
                'id' => 262,
                'product_id' => 105,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:29:04',
                'updated_at' => '2022-06-27 15:29:04',
            ),
            262 => 
            array (
                'id' => 263,
                'product_id' => 106,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            263 => 
            array (
                'id' => 264,
                'product_id' => 106,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            264 => 
            array (
                'id' => 265,
                'product_id' => 106,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            265 => 
            array (
                'id' => 266,
                'product_id' => 107,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            266 => 
            array (
                'id' => 267,
                'product_id' => 107,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            267 => 
            array (
                'id' => 268,
                'product_id' => 107,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            268 => 
            array (
                'id' => 269,
                'product_id' => 108,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            269 => 
            array (
                'id' => 270,
                'product_id' => 108,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            270 => 
            array (
                'id' => 271,
                'product_id' => 108,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            271 => 
            array (
                'id' => 272,
                'product_id' => 109,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            272 => 
            array (
                'id' => 273,
                'product_id' => 109,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            273 => 
            array (
                'id' => 274,
                'product_id' => 109,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            274 => 
            array (
                'id' => 275,
                'product_id' => 110,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            275 => 
            array (
                'id' => 276,
                'product_id' => 110,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            276 => 
            array (
                'id' => 277,
                'product_id' => 110,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            277 => 
            array (
                'id' => 278,
                'product_id' => 111,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            278 => 
            array (
                'id' => 279,
                'product_id' => 111,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            279 => 
            array (
                'id' => 280,
                'product_id' => 111,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:49',
                'updated_at' => '2022-06-27 15:30:49',
            ),
            280 => 
            array (
                'id' => 281,
                'product_id' => 112,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            281 => 
            array (
                'id' => 282,
                'product_id' => 112,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            282 => 
            array (
                'id' => 283,
                'product_id' => 112,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            283 => 
            array (
                'id' => 284,
                'product_id' => 113,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            284 => 
            array (
                'id' => 285,
                'product_id' => 113,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            285 => 
            array (
                'id' => 286,
                'product_id' => 113,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            286 => 
            array (
                'id' => 287,
                'product_id' => 114,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            287 => 
            array (
                'id' => 288,
                'product_id' => 114,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            288 => 
            array (
                'id' => 289,
                'product_id' => 114,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            289 => 
            array (
                'id' => 290,
                'product_id' => 115,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            290 => 
            array (
                'id' => 291,
                'product_id' => 115,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            291 => 
            array (
                'id' => 292,
                'product_id' => 115,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            292 => 
            array (
                'id' => 293,
                'product_id' => 116,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            293 => 
            array (
                'id' => 294,
                'product_id' => 116,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            294 => 
            array (
                'id' => 295,
                'product_id' => 116,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            295 => 
            array (
                'id' => 296,
                'product_id' => 117,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            296 => 
            array (
                'id' => 297,
                'product_id' => 117,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            297 => 
            array (
                'id' => 298,
                'product_id' => 117,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            298 => 
            array (
                'id' => 299,
                'product_id' => 118,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            299 => 
            array (
                'id' => 300,
                'product_id' => 118,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            300 => 
            array (
                'id' => 301,
                'product_id' => 118,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            301 => 
            array (
                'id' => 302,
                'product_id' => 119,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            302 => 
            array (
                'id' => 303,
                'product_id' => 119,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            303 => 
            array (
                'id' => 304,
                'product_id' => 119,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            304 => 
            array (
                'id' => 305,
                'product_id' => 120,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            305 => 
            array (
                'id' => 306,
                'product_id' => 120,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            306 => 
            array (
                'id' => 307,
                'product_id' => 120,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            307 => 
            array (
                'id' => 308,
                'product_id' => 121,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            308 => 
            array (
                'id' => 309,
                'product_id' => 121,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            309 => 
            array (
                'id' => 310,
                'product_id' => 121,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            310 => 
            array (
                'id' => 311,
                'product_id' => 122,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            311 => 
            array (
                'id' => 312,
                'product_id' => 122,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            312 => 
            array (
                'id' => 313,
                'product_id' => 122,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            313 => 
            array (
                'id' => 314,
                'product_id' => 123,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            314 => 
            array (
                'id' => 315,
                'product_id' => 123,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            315 => 
            array (
                'id' => 316,
                'product_id' => 123,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            316 => 
            array (
                'id' => 317,
                'product_id' => 124,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            317 => 
            array (
                'id' => 318,
                'product_id' => 124,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            318 => 
            array (
                'id' => 319,
                'product_id' => 124,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            319 => 
            array (
                'id' => 320,
                'product_id' => 125,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            320 => 
            array (
                'id' => 321,
                'product_id' => 125,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            321 => 
            array (
                'id' => 322,
                'product_id' => 125,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            322 => 
            array (
                'id' => 323,
                'product_id' => 126,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            323 => 
            array (
                'id' => 324,
                'product_id' => 126,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            324 => 
            array (
                'id' => 325,
                'product_id' => 126,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            325 => 
            array (
                'id' => 326,
                'product_id' => 127,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:50',
                'updated_at' => '2022-06-27 15:30:50',
            ),
            326 => 
            array (
                'id' => 327,
                'product_id' => 127,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            327 => 
            array (
                'id' => 328,
                'product_id' => 127,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            328 => 
            array (
                'id' => 329,
                'product_id' => 128,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            329 => 
            array (
                'id' => 330,
                'product_id' => 128,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            330 => 
            array (
                'id' => 331,
                'product_id' => 128,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            331 => 
            array (
                'id' => 332,
                'product_id' => 129,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            332 => 
            array (
                'id' => 333,
                'product_id' => 129,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            333 => 
            array (
                'id' => 334,
                'product_id' => 129,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            334 => 
            array (
                'id' => 335,
                'product_id' => 130,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            335 => 
            array (
                'id' => 336,
                'product_id' => 130,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            336 => 
            array (
                'id' => 337,
                'product_id' => 130,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            337 => 
            array (
                'id' => 338,
                'product_id' => 131,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            338 => 
            array (
                'id' => 339,
                'product_id' => 131,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            339 => 
            array (
                'id' => 340,
                'product_id' => 131,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            340 => 
            array (
                'id' => 341,
                'product_id' => 132,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            341 => 
            array (
                'id' => 342,
                'product_id' => 132,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            342 => 
            array (
                'id' => 343,
                'product_id' => 132,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            343 => 
            array (
                'id' => 344,
                'product_id' => 133,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            344 => 
            array (
                'id' => 345,
                'product_id' => 133,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            345 => 
            array (
                'id' => 346,
                'product_id' => 133,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            346 => 
            array (
                'id' => 347,
                'product_id' => 134,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            347 => 
            array (
                'id' => 348,
                'product_id' => 134,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            348 => 
            array (
                'id' => 349,
                'product_id' => 134,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            349 => 
            array (
                'id' => 350,
                'product_id' => 135,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            350 => 
            array (
                'id' => 351,
                'product_id' => 135,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            351 => 
            array (
                'id' => 352,
                'product_id' => 135,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            352 => 
            array (
                'id' => 353,
                'product_id' => 136,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            353 => 
            array (
                'id' => 354,
                'product_id' => 136,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            354 => 
            array (
                'id' => 355,
                'product_id' => 136,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            355 => 
            array (
                'id' => 356,
                'product_id' => 137,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            356 => 
            array (
                'id' => 357,
                'product_id' => 137,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            357 => 
            array (
                'id' => 358,
                'product_id' => 137,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            358 => 
            array (
                'id' => 359,
                'product_id' => 138,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            359 => 
            array (
                'id' => 360,
                'product_id' => 138,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            360 => 
            array (
                'id' => 361,
                'product_id' => 138,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            361 => 
            array (
                'id' => 362,
                'product_id' => 139,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            362 => 
            array (
                'id' => 363,
                'product_id' => 139,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            363 => 
            array (
                'id' => 364,
                'product_id' => 139,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            364 => 
            array (
                'id' => 365,
                'product_id' => 140,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            365 => 
            array (
                'id' => 366,
                'product_id' => 140,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            366 => 
            array (
                'id' => 367,
                'product_id' => 140,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            367 => 
            array (
                'id' => 368,
                'product_id' => 141,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            368 => 
            array (
                'id' => 369,
                'product_id' => 141,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            369 => 
            array (
                'id' => 370,
                'product_id' => 141,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            370 => 
            array (
                'id' => 371,
                'product_id' => 142,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            371 => 
            array (
                'id' => 372,
                'product_id' => 142,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            372 => 
            array (
                'id' => 373,
                'product_id' => 142,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:51',
                'updated_at' => '2022-06-27 15:30:51',
            ),
            373 => 
            array (
                'id' => 374,
                'product_id' => 143,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            374 => 
            array (
                'id' => 375,
                'product_id' => 143,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            375 => 
            array (
                'id' => 376,
                'product_id' => 143,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            376 => 
            array (
                'id' => 377,
                'product_id' => 144,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            377 => 
            array (
                'id' => 378,
                'product_id' => 144,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            378 => 
            array (
                'id' => 379,
                'product_id' => 144,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            379 => 
            array (
                'id' => 380,
                'product_id' => 145,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            380 => 
            array (
                'id' => 381,
                'product_id' => 145,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            381 => 
            array (
                'id' => 382,
                'product_id' => 145,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            382 => 
            array (
                'id' => 383,
                'product_id' => 146,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            383 => 
            array (
                'id' => 384,
                'product_id' => 146,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            384 => 
            array (
                'id' => 385,
                'product_id' => 146,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            385 => 
            array (
                'id' => 386,
                'product_id' => 147,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            386 => 
            array (
                'id' => 387,
                'product_id' => 147,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            387 => 
            array (
                'id' => 388,
                'product_id' => 147,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            388 => 
            array (
                'id' => 389,
                'product_id' => 148,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            389 => 
            array (
                'id' => 390,
                'product_id' => 148,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            390 => 
            array (
                'id' => 391,
                'product_id' => 148,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            391 => 
            array (
                'id' => 392,
                'product_id' => 149,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            392 => 
            array (
                'id' => 393,
                'product_id' => 149,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            393 => 
            array (
                'id' => 394,
                'product_id' => 149,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            394 => 
            array (
                'id' => 395,
                'product_id' => 150,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            395 => 
            array (
                'id' => 396,
                'product_id' => 150,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            396 => 
            array (
                'id' => 397,
                'product_id' => 150,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            397 => 
            array (
                'id' => 398,
                'product_id' => 151,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            398 => 
            array (
                'id' => 399,
                'product_id' => 151,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            399 => 
            array (
                'id' => 400,
                'product_id' => 151,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            400 => 
            array (
                'id' => 401,
                'product_id' => 152,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            401 => 
            array (
                'id' => 402,
                'product_id' => 152,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            402 => 
            array (
                'id' => 403,
                'product_id' => 152,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            403 => 
            array (
                'id' => 404,
                'product_id' => 153,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            404 => 
            array (
                'id' => 405,
                'product_id' => 153,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            405 => 
            array (
                'id' => 406,
                'product_id' => 153,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            406 => 
            array (
                'id' => 407,
                'product_id' => 154,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            407 => 
            array (
                'id' => 408,
                'product_id' => 154,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            408 => 
            array (
                'id' => 409,
                'product_id' => 154,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            409 => 
            array (
                'id' => 410,
                'product_id' => 155,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            410 => 
            array (
                'id' => 411,
                'product_id' => 155,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            411 => 
            array (
                'id' => 412,
                'product_id' => 155,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            412 => 
            array (
                'id' => 413,
                'product_id' => 156,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            413 => 
            array (
                'id' => 414,
                'product_id' => 156,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            414 => 
            array (
                'id' => 415,
                'product_id' => 156,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            415 => 
            array (
                'id' => 416,
                'product_id' => 157,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            416 => 
            array (
                'id' => 417,
                'product_id' => 157,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            417 => 
            array (
                'id' => 418,
                'product_id' => 157,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            418 => 
            array (
                'id' => 419,
                'product_id' => 158,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            419 => 
            array (
                'id' => 420,
                'product_id' => 158,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:52',
                'updated_at' => '2022-06-27 15:30:52',
            ),
            420 => 
            array (
                'id' => 421,
                'product_id' => 158,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            421 => 
            array (
                'id' => 422,
                'product_id' => 159,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            422 => 
            array (
                'id' => 423,
                'product_id' => 159,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            423 => 
            array (
                'id' => 424,
                'product_id' => 159,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            424 => 
            array (
                'id' => 425,
                'product_id' => 160,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            425 => 
            array (
                'id' => 426,
                'product_id' => 160,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            426 => 
            array (
                'id' => 427,
                'product_id' => 160,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            427 => 
            array (
                'id' => 428,
                'product_id' => 161,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            428 => 
            array (
                'id' => 429,
                'product_id' => 161,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            429 => 
            array (
                'id' => 430,
                'product_id' => 161,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            430 => 
            array (
                'id' => 431,
                'product_id' => 162,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            431 => 
            array (
                'id' => 432,
                'product_id' => 162,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            432 => 
            array (
                'id' => 433,
                'product_id' => 162,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            433 => 
            array (
                'id' => 434,
                'product_id' => 163,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            434 => 
            array (
                'id' => 435,
                'product_id' => 163,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            435 => 
            array (
                'id' => 436,
                'product_id' => 163,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            436 => 
            array (
                'id' => 437,
                'product_id' => 164,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            437 => 
            array (
                'id' => 438,
                'product_id' => 164,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            438 => 
            array (
                'id' => 439,
                'product_id' => 164,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            439 => 
            array (
                'id' => 440,
                'product_id' => 165,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            440 => 
            array (
                'id' => 441,
                'product_id' => 165,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            441 => 
            array (
                'id' => 442,
                'product_id' => 165,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            442 => 
            array (
                'id' => 443,
                'product_id' => 166,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            443 => 
            array (
                'id' => 444,
                'product_id' => 166,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            444 => 
            array (
                'id' => 445,
                'product_id' => 166,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            445 => 
            array (
                'id' => 446,
                'product_id' => 167,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            446 => 
            array (
                'id' => 447,
                'product_id' => 167,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            447 => 
            array (
                'id' => 448,
                'product_id' => 167,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            448 => 
            array (
                'id' => 449,
                'product_id' => 168,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            449 => 
            array (
                'id' => 450,
                'product_id' => 168,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            450 => 
            array (
                'id' => 451,
                'product_id' => 168,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            451 => 
            array (
                'id' => 452,
                'product_id' => 169,
                'name' => 'Membersihkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            452 => 
            array (
                'id' => 453,
                'product_id' => 169,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            453 => 
            array (
                'id' => 454,
                'product_id' => 169,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:30:53',
                'updated_at' => '2022-06-27 15:30:53',
            ),
            454 => 
            array (
                'id' => 455,
                'product_id' => 170,
                'name' => 'Mengeksfoliasi kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            455 => 
            array (
                'id' => 456,
                'product_id' => 170,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            456 => 
            array (
                'id' => 457,
                'product_id' => 170,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            457 => 
            array (
                'id' => 458,
                'product_id' => 171,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            458 => 
            array (
                'id' => 459,
                'product_id' => 172,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            459 => 
            array (
                'id' => 460,
                'product_id' => 173,
                'name' => 'Menjaga skin barrier',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            460 => 
            array (
                'id' => 461,
                'product_id' => 173,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            461 => 
            array (
                'id' => 462,
                'product_id' => 173,
                'name' => 'Menghilangkan jerawat',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            462 => 
            array (
                'id' => 463,
                'product_id' => 174,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            463 => 
            array (
                'id' => 464,
                'product_id' => 174,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            464 => 
            array (
                'id' => 465,
                'product_id' => 175,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            465 => 
            array (
                'id' => 466,
                'product_id' => 176,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            466 => 
            array (
                'id' => 467,
                'product_id' => 176,
                'name' => 'Melindungi dari sinar UV',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            467 => 
            array (
                'id' => 468,
                'product_id' => 176,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:14',
                'updated_at' => '2022-06-27 15:31:14',
            ),
            468 => 
            array (
                'id' => 469,
                'product_id' => 177,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            469 => 
            array (
                'id' => 470,
                'product_id' => 177,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            470 => 
            array (
                'id' => 471,
                'product_id' => 177,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            471 => 
            array (
                'id' => 472,
                'product_id' => 178,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            472 => 
            array (
                'id' => 473,
                'product_id' => 178,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            473 => 
            array (
                'id' => 474,
                'product_id' => 179,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            474 => 
            array (
                'id' => 475,
                'product_id' => 179,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            475 => 
            array (
                'id' => 476,
                'product_id' => 179,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            476 => 
            array (
                'id' => 477,
                'product_id' => 179,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            477 => 
            array (
                'id' => 478,
                'product_id' => 180,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            478 => 
            array (
                'id' => 479,
                'product_id' => 180,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            479 => 
            array (
                'id' => 480,
                'product_id' => 181,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            480 => 
            array (
                'id' => 481,
                'product_id' => 181,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            481 => 
            array (
                'id' => 482,
                'product_id' => 182,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            482 => 
            array (
                'id' => 483,
                'product_id' => 183,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            483 => 
            array (
                'id' => 484,
                'product_id' => 183,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            484 => 
            array (
                'id' => 485,
                'product_id' => 184,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            485 => 
            array (
                'id' => 486,
                'product_id' => 184,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            486 => 
            array (
                'id' => 487,
                'product_id' => 184,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            487 => 
            array (
                'id' => 488,
                'product_id' => 185,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            488 => 
            array (
                'id' => 489,
                'product_id' => 185,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            489 => 
            array (
                'id' => 490,
                'product_id' => 185,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            490 => 
            array (
                'id' => 491,
                'product_id' => 186,
                'name' => 'Mengencangkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            491 => 
            array (
                'id' => 492,
                'product_id' => 186,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            492 => 
            array (
                'id' => 493,
                'product_id' => 186,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            493 => 
            array (
                'id' => 494,
                'product_id' => 187,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            494 => 
            array (
                'id' => 495,
                'product_id' => 188,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            495 => 
            array (
                'id' => 496,
                'product_id' => 188,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            496 => 
            array (
                'id' => 497,
                'product_id' => 189,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            497 => 
            array (
                'id' => 498,
                'product_id' => 190,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            498 => 
            array (
                'id' => 499,
                'product_id' => 190,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            499 => 
            array (
                'id' => 500,
                'product_id' => 190,
                'name' => 'Mengontrol minyak',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
        ));
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 501,
                'product_id' => 191,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            1 => 
            array (
                'id' => 502,
                'product_id' => 191,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            2 => 
            array (
                'id' => 503,
                'product_id' => 191,
                'name' => 'Menghaluskan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            3 => 
            array (
                'id' => 504,
                'product_id' => 191,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            4 => 
            array (
                'id' => 505,
                'product_id' => 192,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            5 => 
            array (
                'id' => 506,
                'product_id' => 192,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            6 => 
            array (
                'id' => 507,
                'product_id' => 192,
                'name' => 'Meyamarkan noda',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            7 => 
            array (
                'id' => 508,
                'product_id' => 192,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            8 => 
            array (
                'id' => 509,
                'product_id' => 192,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            9 => 
            array (
                'id' => 510,
                'product_id' => 192,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:31:15',
                'updated_at' => '2022-06-27 15:31:15',
            ),
            10 => 
            array (
                'id' => 511,
                'product_id' => 193,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            11 => 
            array (
                'id' => 512,
                'product_id' => 193,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            12 => 
            array (
                'id' => 513,
                'product_id' => 194,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            13 => 
            array (
                'id' => 514,
                'product_id' => 194,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            14 => 
            array (
                'id' => 515,
                'product_id' => 195,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            15 => 
            array (
                'id' => 516,
                'product_id' => 195,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            16 => 
            array (
                'id' => 517,
                'product_id' => 196,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            17 => 
            array (
                'id' => 518,
                'product_id' => 196,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            18 => 
            array (
                'id' => 519,
                'product_id' => 196,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            19 => 
            array (
                'id' => 520,
                'product_id' => 197,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            20 => 
            array (
                'id' => 521,
                'product_id' => 197,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            21 => 
            array (
                'id' => 522,
                'product_id' => 197,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            22 => 
            array (
                'id' => 523,
                'product_id' => 198,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            23 => 
            array (
                'id' => 524,
                'product_id' => 198,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            24 => 
            array (
                'id' => 525,
                'product_id' => 199,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            25 => 
            array (
                'id' => 526,
                'product_id' => 199,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            26 => 
            array (
                'id' => 527,
                'product_id' => 199,
                'name' => 'Mengontrol minyak',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            27 => 
            array (
                'id' => 528,
                'product_id' => 200,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            28 => 
            array (
                'id' => 529,
                'product_id' => 200,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            29 => 
            array (
                'id' => 530,
                'product_id' => 201,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            30 => 
            array (
                'id' => 531,
                'product_id' => 201,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            31 => 
            array (
                'id' => 532,
                'product_id' => 201,
                'name' => 'Menyamarkan pori',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            32 => 
            array (
                'id' => 533,
                'product_id' => 202,
                'name' => 'Menghilangkan jerawat',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            33 => 
            array (
                'id' => 534,
                'product_id' => 203,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            34 => 
            array (
                'id' => 535,
                'product_id' => 204,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            35 => 
            array (
                'id' => 536,
                'product_id' => 204,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            36 => 
            array (
                'id' => 537,
                'product_id' => 205,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            37 => 
            array (
                'id' => 538,
                'product_id' => 205,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            38 => 
            array (
                'id' => 539,
                'product_id' => 205,
                'name' => 'Menyamarkan noda hitam',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            39 => 
            array (
                'id' => 540,
                'product_id' => 205,
                'name' => 'Mengatasi jerawat',
                'created_at' => '2022-06-27 15:31:16',
                'updated_at' => '2022-06-27 15:31:16',
            ),
            40 => 
            array (
                'id' => 541,
                'product_id' => 206,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            41 => 
            array (
                'id' => 542,
                'product_id' => 206,
                'name' => 'Menjaga kekenyalan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            42 => 
            array (
                'id' => 543,
                'product_id' => 207,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            43 => 
            array (
                'id' => 544,
                'product_id' => 207,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            44 => 
            array (
                'id' => 545,
                'product_id' => 207,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            45 => 
            array (
                'id' => 546,
                'product_id' => 208,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            46 => 
            array (
                'id' => 547,
                'product_id' => 209,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            47 => 
            array (
                'id' => 548,
                'product_id' => 209,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            48 => 
            array (
                'id' => 549,
                'product_id' => 210,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            49 => 
            array (
                'id' => 550,
                'product_id' => 210,
                'name' => 'Memelihara elastisitas',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            50 => 
            array (
                'id' => 551,
                'product_id' => 210,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            51 => 
            array (
                'id' => 552,
                'product_id' => 211,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            52 => 
            array (
                'id' => 553,
                'product_id' => 211,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            53 => 
            array (
                'id' => 554,
                'product_id' => 211,
                'name' => 'Anti oksidan',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            54 => 
            array (
                'id' => 555,
                'product_id' => 211,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            55 => 
            array (
                'id' => 556,
                'product_id' => 212,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            56 => 
            array (
                'id' => 557,
                'product_id' => 212,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            57 => 
            array (
                'id' => 558,
                'product_id' => 213,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            58 => 
            array (
                'id' => 559,
                'product_id' => 213,
                'name' => 'Merawat skin barrier',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            59 => 
            array (
                'id' => 560,
                'product_id' => 214,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            60 => 
            array (
                'id' => 561,
                'product_id' => 214,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            61 => 
            array (
                'id' => 562,
                'product_id' => 215,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            62 => 
            array (
                'id' => 563,
                'product_id' => 215,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            63 => 
            array (
                'id' => 564,
                'product_id' => 216,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            64 => 
            array (
                'id' => 565,
                'product_id' => 216,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            65 => 
            array (
                'id' => 566,
                'product_id' => 216,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            66 => 
            array (
                'id' => 567,
                'product_id' => 216,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            67 => 
            array (
                'id' => 568,
                'product_id' => 217,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            68 => 
            array (
                'id' => 569,
                'product_id' => 217,
                'name' => 'Menjaga elastisitas',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            69 => 
            array (
                'id' => 570,
                'product_id' => 217,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            70 => 
            array (
                'id' => 571,
                'product_id' => 217,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            71 => 
            array (
                'id' => 572,
                'product_id' => 218,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            72 => 
            array (
                'id' => 573,
                'product_id' => 218,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            73 => 
            array (
                'id' => 574,
                'product_id' => 218,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            74 => 
            array (
                'id' => 575,
                'product_id' => 219,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            75 => 
            array (
                'id' => 576,
                'product_id' => 220,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            76 => 
            array (
                'id' => 577,
                'product_id' => 220,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            77 => 
            array (
                'id' => 578,
                'product_id' => 221,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            78 => 
            array (
                'id' => 579,
                'product_id' => 221,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:17',
                'updated_at' => '2022-06-27 15:31:17',
            ),
            79 => 
            array (
                'id' => 580,
                'product_id' => 222,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            80 => 
            array (
                'id' => 581,
                'product_id' => 223,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            81 => 
            array (
                'id' => 582,
                'product_id' => 223,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            82 => 
            array (
                'id' => 583,
                'product_id' => 223,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            83 => 
            array (
                'id' => 584,
                'product_id' => 224,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            84 => 
            array (
                'id' => 585,
                'product_id' => 224,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            85 => 
            array (
                'id' => 586,
                'product_id' => 225,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            86 => 
            array (
                'id' => 587,
                'product_id' => 225,
                'name' => ' Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            87 => 
            array (
                'id' => 588,
                'product_id' => 226,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            88 => 
            array (
                'id' => 589,
                'product_id' => 227,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            89 => 
            array (
                'id' => 590,
                'product_id' => 227,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            90 => 
            array (
                'id' => 591,
                'product_id' => 227,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            91 => 
            array (
                'id' => 592,
                'product_id' => 228,
                'name' => 'Mengontrol minyak',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            92 => 
            array (
                'id' => 593,
                'product_id' => 229,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            93 => 
            array (
                'id' => 594,
                'product_id' => 229,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            94 => 
            array (
                'id' => 595,
                'product_id' => 230,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            95 => 
            array (
                'id' => 596,
                'product_id' => 230,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            96 => 
            array (
                'id' => 597,
                'product_id' => 231,
                'name' => 'Meregenerasi kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            97 => 
            array (
                'id' => 598,
                'product_id' => 231,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            98 => 
            array (
                'id' => 599,
                'product_id' => 232,
                'name' => 'Mengencangkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            99 => 
            array (
                'id' => 600,
                'product_id' => 232,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            100 => 
            array (
                'id' => 601,
                'product_id' => 232,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            101 => 
            array (
                'id' => 602,
                'product_id' => 233,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            102 => 
            array (
                'id' => 603,
                'product_id' => 233,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            103 => 
            array (
                'id' => 604,
                'product_id' => 234,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            104 => 
            array (
                'id' => 605,
                'product_id' => 234,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            105 => 
            array (
                'id' => 606,
                'product_id' => 234,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            106 => 
            array (
                'id' => 607,
                'product_id' => 235,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            107 => 
            array (
                'id' => 608,
                'product_id' => 235,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            108 => 
            array (
                'id' => 609,
                'product_id' => 236,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            109 => 
            array (
                'id' => 610,
                'product_id' => 236,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            110 => 
            array (
                'id' => 611,
                'product_id' => 236,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            111 => 
            array (
                'id' => 612,
                'product_id' => 237,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            112 => 
            array (
                'id' => 613,
                'product_id' => 237,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            113 => 
            array (
                'id' => 614,
                'product_id' => 237,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            114 => 
            array (
                'id' => 615,
                'product_id' => 237,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            115 => 
            array (
                'id' => 616,
                'product_id' => 238,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            116 => 
            array (
                'id' => 617,
                'product_id' => 238,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            117 => 
            array (
                'id' => 618,
                'product_id' => 238,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            118 => 
            array (
                'id' => 619,
                'product_id' => 238,
                'name' => 'Anti aging',
                'created_at' => '2022-06-27 15:31:18',
                'updated_at' => '2022-06-27 15:31:18',
            ),
            119 => 
            array (
                'id' => 620,
                'product_id' => 239,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            120 => 
            array (
                'id' => 621,
                'product_id' => 239,
                'name' => 'Meningkatkan elastisitas kulit',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            121 => 
            array (
                'id' => 622,
                'product_id' => 239,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            122 => 
            array (
                'id' => 623,
                'product_id' => 240,
                'name' => 'Meratakan warna kulit',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            123 => 
            array (
                'id' => 624,
                'product_id' => 240,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:31:19',
                'updated_at' => '2022-06-27 15:31:19',
            ),
            124 => 
            array (
                'id' => 625,
                'product_id' => 241,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            125 => 
            array (
                'id' => 626,
                'product_id' => 241,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            126 => 
            array (
                'id' => 627,
                'product_id' => 241,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            127 => 
            array (
                'id' => 628,
                'product_id' => 242,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            128 => 
            array (
                'id' => 629,
                'product_id' => 242,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            129 => 
            array (
                'id' => 630,
                'product_id' => 242,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            130 => 
            array (
                'id' => 631,
                'product_id' => 243,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            131 => 
            array (
                'id' => 632,
                'product_id' => 243,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            132 => 
            array (
                'id' => 633,
                'product_id' => 243,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            133 => 
            array (
                'id' => 634,
                'product_id' => 244,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            134 => 
            array (
                'id' => 635,
                'product_id' => 244,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            135 => 
            array (
                'id' => 636,
                'product_id' => 244,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            136 => 
            array (
                'id' => 637,
                'product_id' => 245,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            137 => 
            array (
                'id' => 638,
                'product_id' => 245,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            138 => 
            array (
                'id' => 639,
                'product_id' => 245,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:33',
                'updated_at' => '2022-06-27 15:31:33',
            ),
            139 => 
            array (
                'id' => 640,
                'product_id' => 246,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            140 => 
            array (
                'id' => 641,
                'product_id' => 246,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            141 => 
            array (
                'id' => 642,
                'product_id' => 246,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            142 => 
            array (
                'id' => 643,
                'product_id' => 247,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            143 => 
            array (
                'id' => 644,
                'product_id' => 247,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            144 => 
            array (
                'id' => 645,
                'product_id' => 247,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            145 => 
            array (
                'id' => 646,
                'product_id' => 248,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            146 => 
            array (
                'id' => 647,
                'product_id' => 248,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            147 => 
            array (
                'id' => 648,
                'product_id' => 248,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            148 => 
            array (
                'id' => 649,
                'product_id' => 249,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            149 => 
            array (
                'id' => 650,
                'product_id' => 249,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            150 => 
            array (
                'id' => 651,
                'product_id' => 249,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            151 => 
            array (
                'id' => 652,
                'product_id' => 250,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            152 => 
            array (
                'id' => 653,
                'product_id' => 250,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            153 => 
            array (
                'id' => 654,
                'product_id' => 250,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            154 => 
            array (
                'id' => 655,
                'product_id' => 251,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            155 => 
            array (
                'id' => 656,
                'product_id' => 251,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            156 => 
            array (
                'id' => 657,
                'product_id' => 251,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            157 => 
            array (
                'id' => 658,
                'product_id' => 252,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            158 => 
            array (
                'id' => 659,
                'product_id' => 252,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            159 => 
            array (
                'id' => 660,
                'product_id' => 252,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            160 => 
            array (
                'id' => 661,
                'product_id' => 253,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            161 => 
            array (
                'id' => 662,
                'product_id' => 253,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            162 => 
            array (
                'id' => 663,
                'product_id' => 253,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            163 => 
            array (
                'id' => 664,
                'product_id' => 254,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            164 => 
            array (
                'id' => 665,
                'product_id' => 254,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            165 => 
            array (
                'id' => 666,
                'product_id' => 254,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            166 => 
            array (
                'id' => 667,
                'product_id' => 255,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            167 => 
            array (
                'id' => 668,
                'product_id' => 255,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            168 => 
            array (
                'id' => 669,
                'product_id' => 255,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            169 => 
            array (
                'id' => 670,
                'product_id' => 256,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            170 => 
            array (
                'id' => 671,
                'product_id' => 256,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            171 => 
            array (
                'id' => 672,
                'product_id' => 256,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            172 => 
            array (
                'id' => 673,
                'product_id' => 257,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            173 => 
            array (
                'id' => 674,
                'product_id' => 257,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            174 => 
            array (
                'id' => 675,
                'product_id' => 257,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            175 => 
            array (
                'id' => 676,
                'product_id' => 258,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            176 => 
            array (
                'id' => 677,
                'product_id' => 258,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            177 => 
            array (
                'id' => 678,
                'product_id' => 258,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            178 => 
            array (
                'id' => 679,
                'product_id' => 259,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            179 => 
            array (
                'id' => 680,
                'product_id' => 259,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            180 => 
            array (
                'id' => 681,
                'product_id' => 259,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            181 => 
            array (
                'id' => 682,
                'product_id' => 260,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            182 => 
            array (
                'id' => 683,
                'product_id' => 260,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            183 => 
            array (
                'id' => 684,
                'product_id' => 260,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:34',
                'updated_at' => '2022-06-27 15:31:34',
            ),
            184 => 
            array (
                'id' => 685,
                'product_id' => 261,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            185 => 
            array (
                'id' => 686,
                'product_id' => 261,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            186 => 
            array (
                'id' => 687,
                'product_id' => 261,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            187 => 
            array (
                'id' => 688,
                'product_id' => 262,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            188 => 
            array (
                'id' => 689,
                'product_id' => 262,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            189 => 
            array (
                'id' => 690,
                'product_id' => 262,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            190 => 
            array (
                'id' => 691,
                'product_id' => 263,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            191 => 
            array (
                'id' => 692,
                'product_id' => 263,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            192 => 
            array (
                'id' => 693,
                'product_id' => 263,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            193 => 
            array (
                'id' => 694,
                'product_id' => 264,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            194 => 
            array (
                'id' => 695,
                'product_id' => 264,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            195 => 
            array (
                'id' => 696,
                'product_id' => 264,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            196 => 
            array (
                'id' => 697,
                'product_id' => 265,
                'name' => 'Mengangkat kotoran',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            197 => 
            array (
                'id' => 698,
                'product_id' => 265,
                'name' => 'Membersihkan pori',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            198 => 
            array (
                'id' => 699,
                'product_id' => 265,
                'name' => 'Memperbaiki tekstur kulit',
                'created_at' => '2022-06-27 15:31:35',
                'updated_at' => '2022-06-27 15:31:35',
            ),
            199 => 
            array (
                'id' => 700,
                'product_id' => 266,
                'name' => 'Melembabkan wajah',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            200 => 
            array (
                'id' => 701,
                'product_id' => 266,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            201 => 
            array (
                'id' => 702,
                'product_id' => 266,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            202 => 
            array (
                'id' => 703,
                'product_id' => 267,
                'name' => 'Melembabkan wajah',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            203 => 
            array (
                'id' => 704,
                'product_id' => 267,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            204 => 
            array (
                'id' => 705,
                'product_id' => 267,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            205 => 
            array (
                'id' => 706,
                'product_id' => 268,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            206 => 
            array (
                'id' => 707,
                'product_id' => 269,
                'name' => 'Melembakan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            207 => 
            array (
                'id' => 708,
                'product_id' => 269,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            208 => 
            array (
                'id' => 709,
                'product_id' => 270,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            209 => 
            array (
                'id' => 710,
                'product_id' => 270,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            210 => 
            array (
                'id' => 711,
                'product_id' => 271,
                'name' => 'Melembabkan wajah',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            211 => 
            array (
                'id' => 712,
                'product_id' => 271,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            212 => 
            array (
                'id' => 713,
                'product_id' => 271,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            213 => 
            array (
                'id' => 714,
                'product_id' => 272,
                'name' => 'Melembabkan wajah',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            214 => 
            array (
                'id' => 715,
                'product_id' => 272,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            215 => 
            array (
                'id' => 716,
                'product_id' => 272,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            216 => 
            array (
                'id' => 717,
                'product_id' => 273,
                'name' => 'Melembabkan wajah',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            217 => 
            array (
                'id' => 718,
                'product_id' => 273,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            218 => 
            array (
                'id' => 719,
                'product_id' => 273,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            219 => 
            array (
                'id' => 720,
                'product_id' => 274,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            220 => 
            array (
                'id' => 721,
                'product_id' => 274,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            221 => 
            array (
                'id' => 722,
                'product_id' => 275,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            222 => 
            array (
                'id' => 723,
                'product_id' => 275,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            223 => 
            array (
                'id' => 724,
                'product_id' => 275,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            224 => 
            array (
                'id' => 725,
                'product_id' => 276,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            225 => 
            array (
                'id' => 726,
                'product_id' => 276,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            226 => 
            array (
                'id' => 727,
                'product_id' => 276,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            227 => 
            array (
                'id' => 728,
                'product_id' => 277,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            228 => 
            array (
                'id' => 729,
                'product_id' => 277,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:40',
                'updated_at' => '2022-06-27 15:41:40',
            ),
            229 => 
            array (
                'id' => 730,
                'product_id' => 278,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            230 => 
            array (
                'id' => 731,
                'product_id' => 278,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            231 => 
            array (
                'id' => 732,
                'product_id' => 279,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            232 => 
            array (
                'id' => 733,
                'product_id' => 279,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            233 => 
            array (
                'id' => 734,
                'product_id' => 280,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            234 => 
            array (
                'id' => 735,
                'product_id' => 280,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            235 => 
            array (
                'id' => 736,
                'product_id' => 281,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            236 => 
            array (
                'id' => 737,
                'product_id' => 282,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            237 => 
            array (
                'id' => 738,
                'product_id' => 282,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            238 => 
            array (
                'id' => 739,
                'product_id' => 283,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            239 => 
            array (
                'id' => 740,
                'product_id' => 283,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            240 => 
            array (
                'id' => 741,
                'product_id' => 284,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            241 => 
            array (
                'id' => 742,
                'product_id' => 284,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            242 => 
            array (
                'id' => 743,
                'product_id' => 285,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            243 => 
            array (
                'id' => 744,
                'product_id' => 285,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:41:41',
                'updated_at' => '2022-06-27 15:41:41',
            ),
            244 => 
            array (
                'id' => 745,
                'product_id' => 286,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            245 => 
            array (
                'id' => 746,
                'product_id' => 286,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            246 => 
            array (
                'id' => 747,
                'product_id' => 286,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            247 => 
            array (
                'id' => 748,
                'product_id' => 287,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            248 => 
            array (
                'id' => 749,
                'product_id' => 287,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            249 => 
            array (
                'id' => 750,
                'product_id' => 287,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            250 => 
            array (
                'id' => 751,
                'product_id' => 288,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            251 => 
            array (
                'id' => 752,
                'product_id' => 288,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            252 => 
            array (
                'id' => 753,
                'product_id' => 288,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            253 => 
            array (
                'id' => 754,
                'product_id' => 289,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            254 => 
            array (
                'id' => 755,
                'product_id' => 289,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            255 => 
            array (
                'id' => 756,
                'product_id' => 289,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            256 => 
            array (
                'id' => 757,
                'product_id' => 290,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            257 => 
            array (
                'id' => 758,
                'product_id' => 290,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            258 => 
            array (
                'id' => 759,
                'product_id' => 290,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            259 => 
            array (
                'id' => 760,
                'product_id' => 291,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            260 => 
            array (
                'id' => 761,
                'product_id' => 291,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            261 => 
            array (
                'id' => 762,
                'product_id' => 291,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:52',
                'updated_at' => '2022-06-27 15:41:52',
            ),
            262 => 
            array (
                'id' => 763,
                'product_id' => 292,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            263 => 
            array (
                'id' => 764,
                'product_id' => 292,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            264 => 
            array (
                'id' => 765,
                'product_id' => 292,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            265 => 
            array (
                'id' => 766,
                'product_id' => 293,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            266 => 
            array (
                'id' => 767,
                'product_id' => 293,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            267 => 
            array (
                'id' => 768,
                'product_id' => 293,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            268 => 
            array (
                'id' => 769,
                'product_id' => 294,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            269 => 
            array (
                'id' => 770,
                'product_id' => 294,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            270 => 
            array (
                'id' => 771,
                'product_id' => 294,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            271 => 
            array (
                'id' => 772,
                'product_id' => 295,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            272 => 
            array (
                'id' => 773,
                'product_id' => 295,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            273 => 
            array (
                'id' => 774,
                'product_id' => 295,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            274 => 
            array (
                'id' => 775,
                'product_id' => 296,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            275 => 
            array (
                'id' => 776,
                'product_id' => 296,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            276 => 
            array (
                'id' => 777,
                'product_id' => 296,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            277 => 
            array (
                'id' => 778,
                'product_id' => 297,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            278 => 
            array (
                'id' => 779,
                'product_id' => 297,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            279 => 
            array (
                'id' => 780,
                'product_id' => 297,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            280 => 
            array (
                'id' => 781,
                'product_id' => 298,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            281 => 
            array (
                'id' => 782,
                'product_id' => 298,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            282 => 
            array (
                'id' => 783,
                'product_id' => 298,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            283 => 
            array (
                'id' => 784,
                'product_id' => 299,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            284 => 
            array (
                'id' => 785,
                'product_id' => 299,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            285 => 
            array (
                'id' => 786,
                'product_id' => 299,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            286 => 
            array (
                'id' => 787,
                'product_id' => 300,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            287 => 
            array (
                'id' => 788,
                'product_id' => 300,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            288 => 
            array (
                'id' => 789,
                'product_id' => 300,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            289 => 
            array (
                'id' => 790,
                'product_id' => 301,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            290 => 
            array (
                'id' => 791,
                'product_id' => 301,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            291 => 
            array (
                'id' => 792,
                'product_id' => 301,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            292 => 
            array (
                'id' => 793,
                'product_id' => 302,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            293 => 
            array (
                'id' => 794,
                'product_id' => 302,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            294 => 
            array (
                'id' => 795,
                'product_id' => 302,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            295 => 
            array (
                'id' => 796,
                'product_id' => 303,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            296 => 
            array (
                'id' => 797,
                'product_id' => 303,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            297 => 
            array (
                'id' => 798,
                'product_id' => 303,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            298 => 
            array (
                'id' => 799,
                'product_id' => 304,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            299 => 
            array (
                'id' => 800,
                'product_id' => 304,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            300 => 
            array (
                'id' => 801,
                'product_id' => 304,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            301 => 
            array (
                'id' => 802,
                'product_id' => 305,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            302 => 
            array (
                'id' => 803,
                'product_id' => 305,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            303 => 
            array (
                'id' => 804,
                'product_id' => 305,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            304 => 
            array (
                'id' => 805,
                'product_id' => 306,
                'name' => 'Menyamarkan kerutan',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            305 => 
            array (
                'id' => 806,
                'product_id' => 306,
                'name' => 'Mencerahkan warna kulit',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            306 => 
            array (
                'id' => 807,
                'product_id' => 306,
                'name' => 'Melembabkan kulit mata',
                'created_at' => '2022-06-27 15:41:53',
                'updated_at' => '2022-06-27 15:41:53',
            ),
            307 => 
            array (
                'id' => 808,
                'product_id' => 307,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            308 => 
            array (
                'id' => 809,
                'product_id' => 307,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            309 => 
            array (
                'id' => 810,
                'product_id' => 308,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            310 => 
            array (
                'id' => 811,
                'product_id' => 308,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            311 => 
            array (
                'id' => 812,
                'product_id' => 309,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            312 => 
            array (
                'id' => 813,
                'product_id' => 309,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            313 => 
            array (
                'id' => 814,
                'product_id' => 310,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            314 => 
            array (
                'id' => 815,
                'product_id' => 310,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            315 => 
            array (
                'id' => 816,
                'product_id' => 311,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            316 => 
            array (
                'id' => 817,
                'product_id' => 311,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            317 => 
            array (
                'id' => 818,
                'product_id' => 312,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            318 => 
            array (
                'id' => 819,
                'product_id' => 312,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            319 => 
            array (
                'id' => 820,
                'product_id' => 313,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            320 => 
            array (
                'id' => 821,
                'product_id' => 313,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            321 => 
            array (
                'id' => 822,
                'product_id' => 314,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            322 => 
            array (
                'id' => 823,
                'product_id' => 314,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            323 => 
            array (
                'id' => 824,
                'product_id' => 315,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            324 => 
            array (
                'id' => 825,
                'product_id' => 315,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            325 => 
            array (
                'id' => 826,
                'product_id' => 316,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            326 => 
            array (
                'id' => 827,
                'product_id' => 316,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            327 => 
            array (
                'id' => 828,
                'product_id' => 317,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            328 => 
            array (
                'id' => 829,
                'product_id' => 317,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            329 => 
            array (
                'id' => 830,
                'product_id' => 318,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            330 => 
            array (
                'id' => 831,
                'product_id' => 318,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            331 => 
            array (
                'id' => 832,
                'product_id' => 319,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            332 => 
            array (
                'id' => 833,
                'product_id' => 319,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            333 => 
            array (
                'id' => 834,
                'product_id' => 320,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            334 => 
            array (
                'id' => 835,
                'product_id' => 320,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:06',
                'updated_at' => '2022-06-27 15:42:06',
            ),
            335 => 
            array (
                'id' => 836,
                'product_id' => 321,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            336 => 
            array (
                'id' => 837,
                'product_id' => 321,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            337 => 
            array (
                'id' => 838,
                'product_id' => 322,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            338 => 
            array (
                'id' => 839,
                'product_id' => 322,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            339 => 
            array (
                'id' => 840,
                'product_id' => 323,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            340 => 
            array (
                'id' => 841,
                'product_id' => 323,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            341 => 
            array (
                'id' => 842,
                'product_id' => 324,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            342 => 
            array (
                'id' => 843,
                'product_id' => 324,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            343 => 
            array (
                'id' => 844,
                'product_id' => 325,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            344 => 
            array (
                'id' => 845,
                'product_id' => 325,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            345 => 
            array (
                'id' => 846,
                'product_id' => 326,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            346 => 
            array (
                'id' => 847,
                'product_id' => 326,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            347 => 
            array (
                'id' => 848,
                'product_id' => 327,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            348 => 
            array (
                'id' => 849,
                'product_id' => 327,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            349 => 
            array (
                'id' => 850,
                'product_id' => 328,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            350 => 
            array (
                'id' => 851,
                'product_id' => 328,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            351 => 
            array (
                'id' => 852,
                'product_id' => 329,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            352 => 
            array (
                'id' => 853,
                'product_id' => 329,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            353 => 
            array (
                'id' => 854,
                'product_id' => 330,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            354 => 
            array (
                'id' => 855,
                'product_id' => 330,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            355 => 
            array (
                'id' => 856,
                'product_id' => 331,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            356 => 
            array (
                'id' => 857,
                'product_id' => 331,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            357 => 
            array (
                'id' => 858,
                'product_id' => 332,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            358 => 
            array (
                'id' => 859,
                'product_id' => 332,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            359 => 
            array (
                'id' => 860,
                'product_id' => 333,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            360 => 
            array (
                'id' => 861,
                'product_id' => 333,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            361 => 
            array (
                'id' => 862,
                'product_id' => 334,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            362 => 
            array (
                'id' => 863,
                'product_id' => 334,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            363 => 
            array (
                'id' => 864,
                'product_id' => 335,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            364 => 
            array (
                'id' => 865,
                'product_id' => 335,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            365 => 
            array (
                'id' => 866,
                'product_id' => 336,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            366 => 
            array (
                'id' => 867,
                'product_id' => 336,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            367 => 
            array (
                'id' => 868,
                'product_id' => 337,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            368 => 
            array (
                'id' => 869,
                'product_id' => 337,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            369 => 
            array (
                'id' => 870,
                'product_id' => 338,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            370 => 
            array (
                'id' => 871,
                'product_id' => 338,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            371 => 
            array (
                'id' => 872,
                'product_id' => 339,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            372 => 
            array (
                'id' => 873,
                'product_id' => 339,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:07',
                'updated_at' => '2022-06-27 15:42:07',
            ),
            373 => 
            array (
                'id' => 874,
                'product_id' => 340,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            374 => 
            array (
                'id' => 875,
                'product_id' => 340,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            375 => 
            array (
                'id' => 876,
                'product_id' => 341,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            376 => 
            array (
                'id' => 877,
                'product_id' => 341,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            377 => 
            array (
                'id' => 878,
                'product_id' => 342,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            378 => 
            array (
                'id' => 879,
                'product_id' => 342,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            379 => 
            array (
                'id' => 880,
                'product_id' => 343,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            380 => 
            array (
                'id' => 881,
                'product_id' => 343,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            381 => 
            array (
                'id' => 882,
                'product_id' => 344,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            382 => 
            array (
                'id' => 883,
                'product_id' => 344,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            383 => 
            array (
                'id' => 884,
                'product_id' => 345,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            384 => 
            array (
                'id' => 885,
                'product_id' => 345,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            385 => 
            array (
                'id' => 886,
                'product_id' => 346,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            386 => 
            array (
                'id' => 887,
                'product_id' => 346,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            387 => 
            array (
                'id' => 888,
                'product_id' => 347,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            388 => 
            array (
                'id' => 889,
                'product_id' => 347,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            389 => 
            array (
                'id' => 890,
                'product_id' => 348,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            390 => 
            array (
                'id' => 891,
                'product_id' => 348,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            391 => 
            array (
                'id' => 892,
                'product_id' => 349,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            392 => 
            array (
                'id' => 893,
                'product_id' => 349,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            393 => 
            array (
                'id' => 894,
                'product_id' => 350,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            394 => 
            array (
                'id' => 895,
                'product_id' => 350,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            395 => 
            array (
                'id' => 896,
                'product_id' => 351,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            396 => 
            array (
                'id' => 897,
                'product_id' => 351,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            397 => 
            array (
                'id' => 898,
                'product_id' => 352,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            398 => 
            array (
                'id' => 899,
                'product_id' => 352,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            399 => 
            array (
                'id' => 900,
                'product_id' => 353,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            400 => 
            array (
                'id' => 901,
                'product_id' => 353,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            401 => 
            array (
                'id' => 902,
                'product_id' => 354,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            402 => 
            array (
                'id' => 903,
                'product_id' => 354,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            403 => 
            array (
                'id' => 904,
                'product_id' => 355,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            404 => 
            array (
                'id' => 905,
                'product_id' => 355,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            405 => 
            array (
                'id' => 906,
                'product_id' => 356,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            406 => 
            array (
                'id' => 907,
                'product_id' => 356,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            407 => 
            array (
                'id' => 908,
                'product_id' => 357,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            408 => 
            array (
                'id' => 909,
                'product_id' => 357,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:08',
                'updated_at' => '2022-06-27 15:42:08',
            ),
            409 => 
            array (
                'id' => 910,
                'product_id' => 358,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:20',
                'updated_at' => '2022-06-27 15:42:20',
            ),
            410 => 
            array (
                'id' => 911,
                'product_id' => 359,
                'name' => 'Memperbaiki skin barrier',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            411 => 
            array (
                'id' => 912,
                'product_id' => 359,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            412 => 
            array (
                'id' => 913,
                'product_id' => 360,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            413 => 
            array (
                'id' => 914,
                'product_id' => 361,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            414 => 
            array (
                'id' => 915,
                'product_id' => 362,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            415 => 
            array (
                'id' => 916,
                'product_id' => 363,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            416 => 
            array (
                'id' => 917,
                'product_id' => 364,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            417 => 
            array (
                'id' => 918,
                'product_id' => 365,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            418 => 
            array (
                'id' => 919,
                'product_id' => 365,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            419 => 
            array (
                'id' => 920,
                'product_id' => 366,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            420 => 
            array (
                'id' => 921,
                'product_id' => 367,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            421 => 
            array (
                'id' => 922,
                'product_id' => 368,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            422 => 
            array (
                'id' => 923,
                'product_id' => 369,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            423 => 
            array (
                'id' => 924,
                'product_id' => 370,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            424 => 
            array (
                'id' => 925,
                'product_id' => 370,
                'name' => 'menghidrasi kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            425 => 
            array (
                'id' => 926,
                'product_id' => 371,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            426 => 
            array (
                'id' => 927,
                'product_id' => 372,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            427 => 
            array (
                'id' => 928,
                'product_id' => 373,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            428 => 
            array (
                'id' => 929,
                'product_id' => 374,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            429 => 
            array (
                'id' => 930,
                'product_id' => 375,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            430 => 
            array (
                'id' => 931,
                'product_id' => 376,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            431 => 
            array (
                'id' => 932,
                'product_id' => 376,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            432 => 
            array (
                'id' => 933,
                'product_id' => 376,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            433 => 
            array (
                'id' => 934,
                'product_id' => 377,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:21',
                'updated_at' => '2022-06-27 15:42:21',
            ),
            434 => 
            array (
                'id' => 935,
                'product_id' => 378,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            435 => 
            array (
                'id' => 936,
                'product_id' => 379,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            436 => 
            array (
                'id' => 937,
                'product_id' => 380,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            437 => 
            array (
                'id' => 938,
                'product_id' => 380,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            438 => 
            array (
                'id' => 939,
                'product_id' => 381,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            439 => 
            array (
                'id' => 940,
                'product_id' => 382,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            440 => 
            array (
                'id' => 941,
                'product_id' => 383,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            441 => 
            array (
                'id' => 942,
                'product_id' => 384,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            442 => 
            array (
                'id' => 943,
                'product_id' => 385,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            443 => 
            array (
                'id' => 944,
                'product_id' => 386,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            444 => 
            array (
                'id' => 945,
                'product_id' => 386,
                'name' => 'Memperkuat skin barrier',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            445 => 
            array (
                'id' => 946,
                'product_id' => 386,
                'name' => 'Menghidrasi kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            446 => 
            array (
                'id' => 947,
                'product_id' => 387,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            447 => 
            array (
                'id' => 948,
                'product_id' => 387,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            448 => 
            array (
                'id' => 949,
                'product_id' => 388,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            449 => 
            array (
                'id' => 950,
                'product_id' => 389,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            450 => 
            array (
                'id' => 951,
                'product_id' => 389,
                'name' => 'Mengontrol minyak',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            451 => 
            array (
                'id' => 952,
                'product_id' => 389,
                'name' => 'Mengecilkan pori',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            452 => 
            array (
                'id' => 953,
                'product_id' => 390,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            453 => 
            array (
                'id' => 954,
                'product_id' => 391,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            454 => 
            array (
                'id' => 955,
                'product_id' => 392,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            455 => 
            array (
                'id' => 956,
                'product_id' => 393,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            456 => 
            array (
                'id' => 957,
                'product_id' => 394,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:22',
                'updated_at' => '2022-06-27 15:42:22',
            ),
            457 => 
            array (
                'id' => 958,
                'product_id' => 395,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            458 => 
            array (
                'id' => 959,
                'product_id' => 395,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            459 => 
            array (
                'id' => 960,
                'product_id' => 395,
                'name' => 'Menyamarkan noda',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            460 => 
            array (
                'id' => 961,
                'product_id' => 396,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            461 => 
            array (
                'id' => 962,
                'product_id' => 396,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            462 => 
            array (
                'id' => 963,
                'product_id' => 397,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            463 => 
            array (
                'id' => 964,
                'product_id' => 397,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            464 => 
            array (
                'id' => 965,
                'product_id' => 398,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            465 => 
            array (
                'id' => 966,
                'product_id' => 398,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            466 => 
            array (
                'id' => 967,
                'product_id' => 399,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            467 => 
            array (
                'id' => 968,
                'product_id' => 399,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            468 => 
            array (
                'id' => 969,
                'product_id' => 400,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            469 => 
            array (
                'id' => 970,
                'product_id' => 400,
                'name' => 'Menutrisi kulit',
                'created_at' => '2022-06-27 15:42:23',
                'updated_at' => '2022-06-27 15:42:23',
            ),
            470 => 
            array (
                'id' => 971,
                'product_id' => 401,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            471 => 
            array (
                'id' => 972,
                'product_id' => 401,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            472 => 
            array (
                'id' => 973,
                'product_id' => 401,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            473 => 
            array (
                'id' => 974,
                'product_id' => 402,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            474 => 
            array (
                'id' => 975,
                'product_id' => 402,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            475 => 
            array (
                'id' => 976,
                'product_id' => 402,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            476 => 
            array (
                'id' => 977,
                'product_id' => 403,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            477 => 
            array (
                'id' => 978,
                'product_id' => 403,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            478 => 
            array (
                'id' => 979,
                'product_id' => 403,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:35',
                'updated_at' => '2022-06-27 15:42:35',
            ),
            479 => 
            array (
                'id' => 980,
                'product_id' => 404,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            480 => 
            array (
                'id' => 981,
                'product_id' => 404,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            481 => 
            array (
                'id' => 982,
                'product_id' => 404,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            482 => 
            array (
                'id' => 983,
                'product_id' => 405,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            483 => 
            array (
                'id' => 984,
                'product_id' => 405,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            484 => 
            array (
                'id' => 985,
                'product_id' => 405,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            485 => 
            array (
                'id' => 986,
                'product_id' => 406,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            486 => 
            array (
                'id' => 987,
                'product_id' => 406,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            487 => 
            array (
                'id' => 988,
                'product_id' => 406,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            488 => 
            array (
                'id' => 989,
                'product_id' => 407,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            489 => 
            array (
                'id' => 990,
                'product_id' => 407,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            490 => 
            array (
                'id' => 991,
                'product_id' => 407,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            491 => 
            array (
                'id' => 992,
                'product_id' => 408,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            492 => 
            array (
                'id' => 993,
                'product_id' => 408,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            493 => 
            array (
                'id' => 994,
                'product_id' => 408,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            494 => 
            array (
                'id' => 995,
                'product_id' => 409,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            495 => 
            array (
                'id' => 996,
                'product_id' => 409,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            496 => 
            array (
                'id' => 997,
                'product_id' => 409,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            497 => 
            array (
                'id' => 998,
                'product_id' => 410,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            498 => 
            array (
                'id' => 999,
                'product_id' => 410,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            499 => 
            array (
                'id' => 1000,
                'product_id' => 410,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
        ));
        \DB::table('ingredients')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'product_id' => 411,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            1 => 
            array (
                'id' => 1002,
                'product_id' => 411,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            2 => 
            array (
                'id' => 1003,
                'product_id' => 411,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            3 => 
            array (
                'id' => 1004,
                'product_id' => 412,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            4 => 
            array (
                'id' => 1005,
                'product_id' => 412,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            5 => 
            array (
                'id' => 1006,
                'product_id' => 412,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            6 => 
            array (
                'id' => 1007,
                'product_id' => 413,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            7 => 
            array (
                'id' => 1008,
                'product_id' => 413,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            8 => 
            array (
                'id' => 1009,
                'product_id' => 413,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            9 => 
            array (
                'id' => 1010,
                'product_id' => 414,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            10 => 
            array (
                'id' => 1011,
                'product_id' => 414,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            11 => 
            array (
                'id' => 1012,
                'product_id' => 414,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            12 => 
            array (
                'id' => 1013,
                'product_id' => 415,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            13 => 
            array (
                'id' => 1014,
                'product_id' => 415,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            14 => 
            array (
                'id' => 1015,
                'product_id' => 415,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            15 => 
            array (
                'id' => 1016,
                'product_id' => 416,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            16 => 
            array (
                'id' => 1017,
                'product_id' => 416,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            17 => 
            array (
                'id' => 1018,
                'product_id' => 416,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            18 => 
            array (
                'id' => 1019,
                'product_id' => 417,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            19 => 
            array (
                'id' => 1020,
                'product_id' => 417,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            20 => 
            array (
                'id' => 1021,
                'product_id' => 417,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            21 => 
            array (
                'id' => 1022,
                'product_id' => 418,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            22 => 
            array (
                'id' => 1023,
                'product_id' => 418,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            23 => 
            array (
                'id' => 1024,
                'product_id' => 418,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:36',
                'updated_at' => '2022-06-27 15:42:36',
            ),
            24 => 
            array (
                'id' => 1025,
                'product_id' => 419,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            25 => 
            array (
                'id' => 1026,
                'product_id' => 419,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            26 => 
            array (
                'id' => 1027,
                'product_id' => 419,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            27 => 
            array (
                'id' => 1028,
                'product_id' => 420,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            28 => 
            array (
                'id' => 1029,
                'product_id' => 420,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            29 => 
            array (
                'id' => 1030,
                'product_id' => 420,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            30 => 
            array (
                'id' => 1031,
                'product_id' => 421,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            31 => 
            array (
                'id' => 1032,
                'product_id' => 421,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            32 => 
            array (
                'id' => 1033,
                'product_id' => 421,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            33 => 
            array (
                'id' => 1034,
                'product_id' => 422,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            34 => 
            array (
                'id' => 1035,
                'product_id' => 422,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            35 => 
            array (
                'id' => 1036,
                'product_id' => 422,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            36 => 
            array (
                'id' => 1037,
                'product_id' => 423,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            37 => 
            array (
                'id' => 1038,
                'product_id' => 423,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            38 => 
            array (
                'id' => 1039,
                'product_id' => 423,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            39 => 
            array (
                'id' => 1040,
                'product_id' => 424,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            40 => 
            array (
                'id' => 1041,
                'product_id' => 424,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            41 => 
            array (
                'id' => 1042,
                'product_id' => 424,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            42 => 
            array (
                'id' => 1043,
                'product_id' => 425,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            43 => 
            array (
                'id' => 1044,
                'product_id' => 425,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            44 => 
            array (
                'id' => 1045,
                'product_id' => 425,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            45 => 
            array (
                'id' => 1046,
                'product_id' => 426,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            46 => 
            array (
                'id' => 1047,
                'product_id' => 426,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            47 => 
            array (
                'id' => 1048,
                'product_id' => 426,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            48 => 
            array (
                'id' => 1049,
                'product_id' => 427,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            49 => 
            array (
                'id' => 1050,
                'product_id' => 427,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            50 => 
            array (
                'id' => 1051,
                'product_id' => 427,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            51 => 
            array (
                'id' => 1052,
                'product_id' => 428,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            52 => 
            array (
                'id' => 1053,
                'product_id' => 428,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            53 => 
            array (
                'id' => 1054,
                'product_id' => 428,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            54 => 
            array (
                'id' => 1055,
                'product_id' => 429,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            55 => 
            array (
                'id' => 1056,
                'product_id' => 429,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            56 => 
            array (
                'id' => 1057,
                'product_id' => 429,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            57 => 
            array (
                'id' => 1058,
                'product_id' => 430,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            58 => 
            array (
                'id' => 1059,
                'product_id' => 430,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            59 => 
            array (
                'id' => 1060,
                'product_id' => 430,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            60 => 
            array (
                'id' => 1061,
                'product_id' => 431,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            61 => 
            array (
                'id' => 1062,
                'product_id' => 431,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            62 => 
            array (
                'id' => 1063,
                'product_id' => 431,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            63 => 
            array (
                'id' => 1064,
                'product_id' => 432,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            64 => 
            array (
                'id' => 1065,
                'product_id' => 432,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            65 => 
            array (
                'id' => 1066,
                'product_id' => 432,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            66 => 
            array (
                'id' => 1067,
                'product_id' => 433,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            67 => 
            array (
                'id' => 1068,
                'product_id' => 433,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            68 => 
            array (
                'id' => 1069,
                'product_id' => 433,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            69 => 
            array (
                'id' => 1070,
                'product_id' => 434,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            70 => 
            array (
                'id' => 1071,
                'product_id' => 434,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            71 => 
            array (
                'id' => 1072,
                'product_id' => 434,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:37',
                'updated_at' => '2022-06-27 15:42:37',
            ),
            72 => 
            array (
                'id' => 1073,
                'product_id' => 435,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            73 => 
            array (
                'id' => 1074,
                'product_id' => 435,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            74 => 
            array (
                'id' => 1075,
                'product_id' => 435,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            75 => 
            array (
                'id' => 1076,
                'product_id' => 436,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            76 => 
            array (
                'id' => 1077,
                'product_id' => 436,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            77 => 
            array (
                'id' => 1078,
                'product_id' => 436,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            78 => 
            array (
                'id' => 1079,
                'product_id' => 437,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            79 => 
            array (
                'id' => 1080,
                'product_id' => 437,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            80 => 
            array (
                'id' => 1081,
                'product_id' => 437,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            81 => 
            array (
                'id' => 1082,
                'product_id' => 438,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            82 => 
            array (
                'id' => 1083,
                'product_id' => 438,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            83 => 
            array (
                'id' => 1084,
                'product_id' => 438,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            84 => 
            array (
                'id' => 1085,
                'product_id' => 439,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            85 => 
            array (
                'id' => 1086,
                'product_id' => 439,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            86 => 
            array (
                'id' => 1087,
                'product_id' => 439,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            87 => 
            array (
                'id' => 1088,
                'product_id' => 440,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            88 => 
            array (
                'id' => 1089,
                'product_id' => 440,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            89 => 
            array (
                'id' => 1090,
                'product_id' => 440,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            90 => 
            array (
                'id' => 1091,
                'product_id' => 441,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            91 => 
            array (
                'id' => 1092,
                'product_id' => 441,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            92 => 
            array (
                'id' => 1093,
                'product_id' => 441,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            93 => 
            array (
                'id' => 1094,
                'product_id' => 442,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            94 => 
            array (
                'id' => 1095,
                'product_id' => 442,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            95 => 
            array (
                'id' => 1096,
                'product_id' => 442,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            96 => 
            array (
                'id' => 1097,
                'product_id' => 443,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            97 => 
            array (
                'id' => 1098,
                'product_id' => 443,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            98 => 
            array (
                'id' => 1099,
                'product_id' => 443,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            99 => 
            array (
                'id' => 1100,
                'product_id' => 444,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            100 => 
            array (
                'id' => 1101,
                'product_id' => 444,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            101 => 
            array (
                'id' => 1102,
                'product_id' => 444,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            102 => 
            array (
                'id' => 1103,
                'product_id' => 445,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            103 => 
            array (
                'id' => 1104,
                'product_id' => 445,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            104 => 
            array (
                'id' => 1105,
                'product_id' => 445,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            105 => 
            array (
                'id' => 1106,
                'product_id' => 446,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            106 => 
            array (
                'id' => 1107,
                'product_id' => 446,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            107 => 
            array (
                'id' => 1108,
                'product_id' => 446,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            108 => 
            array (
                'id' => 1109,
                'product_id' => 447,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            109 => 
            array (
                'id' => 1110,
                'product_id' => 447,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            110 => 
            array (
                'id' => 1111,
                'product_id' => 447,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            111 => 
            array (
                'id' => 1112,
                'product_id' => 448,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            112 => 
            array (
                'id' => 1113,
                'product_id' => 448,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            113 => 
            array (
                'id' => 1114,
                'product_id' => 448,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            114 => 
            array (
                'id' => 1115,
                'product_id' => 449,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            115 => 
            array (
                'id' => 1116,
                'product_id' => 449,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            116 => 
            array (
                'id' => 1117,
                'product_id' => 449,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:38',
                'updated_at' => '2022-06-27 15:42:38',
            ),
            117 => 
            array (
                'id' => 1118,
                'product_id' => 450,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            118 => 
            array (
                'id' => 1119,
                'product_id' => 450,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            119 => 
            array (
                'id' => 1120,
                'product_id' => 450,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            120 => 
            array (
                'id' => 1121,
                'product_id' => 451,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            121 => 
            array (
                'id' => 1122,
                'product_id' => 451,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            122 => 
            array (
                'id' => 1123,
                'product_id' => 451,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            123 => 
            array (
                'id' => 1124,
                'product_id' => 452,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            124 => 
            array (
                'id' => 1125,
                'product_id' => 452,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            125 => 
            array (
                'id' => 1126,
                'product_id' => 452,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            126 => 
            array (
                'id' => 1127,
                'product_id' => 453,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            127 => 
            array (
                'id' => 1128,
                'product_id' => 453,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            128 => 
            array (
                'id' => 1129,
                'product_id' => 453,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            129 => 
            array (
                'id' => 1130,
                'product_id' => 454,
                'name' => 'Mencerahkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            130 => 
            array (
                'id' => 1131,
                'product_id' => 454,
                'name' => 'Melembutkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            131 => 
            array (
                'id' => 1132,
                'product_id' => 454,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:39',
                'updated_at' => '2022-06-27 15:42:39',
            ),
            132 => 
            array (
                'id' => 1133,
                'product_id' => 455,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            133 => 
            array (
                'id' => 1134,
                'product_id' => 455,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            134 => 
            array (
                'id' => 1135,
                'product_id' => 456,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            135 => 
            array (
                'id' => 1136,
                'product_id' => 456,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            136 => 
            array (
                'id' => 1137,
                'product_id' => 457,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            137 => 
            array (
                'id' => 1138,
                'product_id' => 457,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            138 => 
            array (
                'id' => 1139,
                'product_id' => 458,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            139 => 
            array (
                'id' => 1140,
                'product_id' => 458,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            140 => 
            array (
                'id' => 1141,
                'product_id' => 459,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:56',
                'updated_at' => '2022-06-27 15:42:56',
            ),
            141 => 
            array (
                'id' => 1142,
                'product_id' => 459,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            142 => 
            array (
                'id' => 1143,
                'product_id' => 460,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            143 => 
            array (
                'id' => 1144,
                'product_id' => 460,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            144 => 
            array (
                'id' => 1145,
                'product_id' => 461,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            145 => 
            array (
                'id' => 1146,
                'product_id' => 461,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            146 => 
            array (
                'id' => 1147,
                'product_id' => 462,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            147 => 
            array (
                'id' => 1148,
                'product_id' => 462,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            148 => 
            array (
                'id' => 1149,
                'product_id' => 463,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            149 => 
            array (
                'id' => 1150,
                'product_id' => 463,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            150 => 
            array (
                'id' => 1151,
                'product_id' => 464,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            151 => 
            array (
                'id' => 1152,
                'product_id' => 464,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            152 => 
            array (
                'id' => 1153,
                'product_id' => 465,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            153 => 
            array (
                'id' => 1154,
                'product_id' => 465,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            154 => 
            array (
                'id' => 1155,
                'product_id' => 466,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            155 => 
            array (
                'id' => 1156,
                'product_id' => 466,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            156 => 
            array (
                'id' => 1157,
                'product_id' => 467,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            157 => 
            array (
                'id' => 1158,
                'product_id' => 467,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            158 => 
            array (
                'id' => 1159,
                'product_id' => 468,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            159 => 
            array (
                'id' => 1160,
                'product_id' => 468,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            160 => 
            array (
                'id' => 1161,
                'product_id' => 469,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            161 => 
            array (
                'id' => 1162,
                'product_id' => 469,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            162 => 
            array (
                'id' => 1163,
                'product_id' => 470,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            163 => 
            array (
                'id' => 1164,
                'product_id' => 470,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:57',
                'updated_at' => '2022-06-27 15:42:57',
            ),
            164 => 
            array (
                'id' => 1165,
                'product_id' => 471,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            165 => 
            array (
                'id' => 1166,
                'product_id' => 471,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            166 => 
            array (
                'id' => 1167,
                'product_id' => 472,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            167 => 
            array (
                'id' => 1168,
                'product_id' => 472,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            168 => 
            array (
                'id' => 1169,
                'product_id' => 473,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            169 => 
            array (
                'id' => 1170,
                'product_id' => 473,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            170 => 
            array (
                'id' => 1171,
                'product_id' => 474,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            171 => 
            array (
                'id' => 1172,
                'product_id' => 474,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            172 => 
            array (
                'id' => 1173,
                'product_id' => 475,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            173 => 
            array (
                'id' => 1174,
                'product_id' => 475,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            174 => 
            array (
                'id' => 1175,
                'product_id' => 476,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            175 => 
            array (
                'id' => 1176,
                'product_id' => 476,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            176 => 
            array (
                'id' => 1177,
                'product_id' => 477,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            177 => 
            array (
                'id' => 1178,
                'product_id' => 477,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            178 => 
            array (
                'id' => 1179,
                'product_id' => 478,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            179 => 
            array (
                'id' => 1180,
                'product_id' => 478,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            180 => 
            array (
                'id' => 1181,
                'product_id' => 479,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            181 => 
            array (
                'id' => 1182,
                'product_id' => 479,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            182 => 
            array (
                'id' => 1183,
                'product_id' => 480,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            183 => 
            array (
                'id' => 1184,
                'product_id' => 480,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:58',
                'updated_at' => '2022-06-27 15:42:58',
            ),
            184 => 
            array (
                'id' => 1185,
                'product_id' => 481,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            185 => 
            array (
                'id' => 1186,
                'product_id' => 481,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            186 => 
            array (
                'id' => 1187,
                'product_id' => 482,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            187 => 
            array (
                'id' => 1188,
                'product_id' => 482,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            188 => 
            array (
                'id' => 1189,
                'product_id' => 483,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            189 => 
            array (
                'id' => 1190,
                'product_id' => 483,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            190 => 
            array (
                'id' => 1191,
                'product_id' => 484,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            191 => 
            array (
                'id' => 1192,
                'product_id' => 484,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            192 => 
            array (
                'id' => 1193,
                'product_id' => 485,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            193 => 
            array (
                'id' => 1194,
                'product_id' => 485,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            194 => 
            array (
                'id' => 1195,
                'product_id' => 486,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            195 => 
            array (
                'id' => 1196,
                'product_id' => 486,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            196 => 
            array (
                'id' => 1197,
                'product_id' => 487,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            197 => 
            array (
                'id' => 1198,
                'product_id' => 487,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            198 => 
            array (
                'id' => 1199,
                'product_id' => 488,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            199 => 
            array (
                'id' => 1200,
                'product_id' => 488,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:42:59',
                'updated_at' => '2022-06-27 15:42:59',
            ),
            200 => 
            array (
                'id' => 1201,
                'product_id' => 489,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            201 => 
            array (
                'id' => 1202,
                'product_id' => 489,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            202 => 
            array (
                'id' => 1203,
                'product_id' => 490,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            203 => 
            array (
                'id' => 1204,
                'product_id' => 490,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            204 => 
            array (
                'id' => 1205,
                'product_id' => 491,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            205 => 
            array (
                'id' => 1206,
                'product_id' => 491,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            206 => 
            array (
                'id' => 1207,
                'product_id' => 492,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            207 => 
            array (
                'id' => 1208,
                'product_id' => 492,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            208 => 
            array (
                'id' => 1209,
                'product_id' => 493,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            209 => 
            array (
                'id' => 1210,
                'product_id' => 493,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            210 => 
            array (
                'id' => 1211,
                'product_id' => 494,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            211 => 
            array (
                'id' => 1212,
                'product_id' => 494,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            212 => 
            array (
                'id' => 1213,
                'product_id' => 495,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            213 => 
            array (
                'id' => 1214,
                'product_id' => 495,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            214 => 
            array (
                'id' => 1215,
                'product_id' => 496,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            215 => 
            array (
                'id' => 1216,
                'product_id' => 496,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            216 => 
            array (
                'id' => 1217,
                'product_id' => 497,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            217 => 
            array (
                'id' => 1218,
                'product_id' => 497,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            218 => 
            array (
                'id' => 1219,
                'product_id' => 498,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            219 => 
            array (
                'id' => 1220,
                'product_id' => 498,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:00',
                'updated_at' => '2022-06-27 15:43:00',
            ),
            220 => 
            array (
                'id' => 1221,
                'product_id' => 499,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            221 => 
            array (
                'id' => 1222,
                'product_id' => 499,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            222 => 
            array (
                'id' => 1223,
                'product_id' => 500,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            223 => 
            array (
                'id' => 1224,
                'product_id' => 500,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            224 => 
            array (
                'id' => 1225,
                'product_id' => 501,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            225 => 
            array (
                'id' => 1226,
                'product_id' => 501,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            226 => 
            array (
                'id' => 1227,
                'product_id' => 502,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            227 => 
            array (
                'id' => 1228,
                'product_id' => 502,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            228 => 
            array (
                'id' => 1229,
                'product_id' => 503,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            229 => 
            array (
                'id' => 1230,
                'product_id' => 503,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            230 => 
            array (
                'id' => 1231,
                'product_id' => 504,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            231 => 
            array (
                'id' => 1232,
                'product_id' => 504,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            232 => 
            array (
                'id' => 1233,
                'product_id' => 505,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            233 => 
            array (
                'id' => 1234,
                'product_id' => 505,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            234 => 
            array (
                'id' => 1235,
                'product_id' => 506,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            235 => 
            array (
                'id' => 1236,
                'product_id' => 506,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            236 => 
            array (
                'id' => 1237,
                'product_id' => 507,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            237 => 
            array (
                'id' => 1238,
                'product_id' => 507,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            238 => 
            array (
                'id' => 1239,
                'product_id' => 508,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            239 => 
            array (
                'id' => 1240,
                'product_id' => 508,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            240 => 
            array (
                'id' => 1241,
                'product_id' => 509,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            241 => 
            array (
                'id' => 1242,
                'product_id' => 509,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            242 => 
            array (
                'id' => 1243,
                'product_id' => 510,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            243 => 
            array (
                'id' => 1244,
                'product_id' => 510,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            244 => 
            array (
                'id' => 1245,
                'product_id' => 511,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            245 => 
            array (
                'id' => 1246,
                'product_id' => 511,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            246 => 
            array (
                'id' => 1247,
                'product_id' => 512,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            247 => 
            array (
                'id' => 1248,
                'product_id' => 512,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            248 => 
            array (
                'id' => 1249,
                'product_id' => 513,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            249 => 
            array (
                'id' => 1250,
                'product_id' => 513,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            250 => 
            array (
                'id' => 1251,
                'product_id' => 514,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            251 => 
            array (
                'id' => 1252,
                'product_id' => 514,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            252 => 
            array (
                'id' => 1253,
                'product_id' => 515,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            253 => 
            array (
                'id' => 1254,
                'product_id' => 515,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            254 => 
            array (
                'id' => 1255,
                'product_id' => 516,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            255 => 
            array (
                'id' => 1256,
                'product_id' => 516,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            256 => 
            array (
                'id' => 1257,
                'product_id' => 517,
                'name' => 'Menyegarkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            257 => 
            array (
                'id' => 1258,
                'product_id' => 517,
                'name' => 'Melembabkan kulit',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
        ));
        
        
    }
}