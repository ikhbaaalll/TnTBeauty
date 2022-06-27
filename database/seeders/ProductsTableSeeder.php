<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 1,
                'brand_id' => 1,
                'name' => 'NACIFIC Pink AHA BHA Serum 50ml - 20ml - Serum Wajah Skin Care',
                'variation' => 'AHABHA Serum 20ml',
                'link' => 'https://shopee.co.id/NACIFIC-Pink-AHA-BHA-Serum-50ml-20ml-Serum-Wajah-Skin-Care-i.744873.20110021521?sp_atk=e5a0fb0a-218c-447c-8102-5323101921e2&xptdk=e5a0fb0a-218c-447c-8102-5323101921e2',
                'description' => 'Daily Pink Serum yang mengandung ingredien AHA dan BAHA alami yang membantu eksfoliasi sel-sel kulit mati untuk menjaga turn-over period keratin kulit dan Pink kalamin yang menenangkan kulit sensitif oleh iritasi eksternal.

Key Points:
Mengandung AHA 900ppm dan BHA 1.000 ppm
Mengandung ekstrak semangka yang membantu melembapkan kulit
Glutathione yang membantu mencerahkan kulit

AHA BHA membantu menghilangkan sel kulit mati
Efek Anti-aging/mencerahkan
Ekstrak Semangka untuk menghidrasi kulit
Tea Tree/Calamine/Allantoin untuk kandungan untuk meminimalkan iritasi kulit
Essential oil dipadukan dengan natural fragrance dengan aroma lembut

Baik disimpan selama 12 bulan setelah produk dibuka. Jika produk belum di buka, baik disimpan selama 24 bulan.

Cara Menggunakan
1. Pakai toner menggunakan kapas atau bisa langsung pada tangan
2. Teteteskan serum pada wajah dan usap dengan lembut
3. Setelah serum meresap pada kulit, aplikasikan cream sebagai langkah terakhir.',
                'price' => 76600,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            1 => 
            array (
                'id' => 2,
                'brand_id' => 2,
                'name' => 'Ariul Hydro Glow Watermelon SERIES',
                'variation' => 'Watermelon GlowSerum',
                'link' => 'https://shopee.co.id/NACIFIC-Pink-AHA-BHA-Serum-50ml-20ml-Serum-Wajah-Skin-Care-i.744873.20110021521?sp_atk=e5a0fb0a-218c-447c-8102-5323101921e2&xptdk=e5a0fb0a-218c-447c-8102-5323101921e2',
                'description' => 'Diformulasikan dengan ekstrak semangka, dua jenis asam hialuronat dan tiga jenis Vitamin B. Formula ringan seperti sutra yang mudah diserap dan membantu melembabkan sekaligus melembutkan tampilan garis halus dan kerutan.',
                'price' => 132500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            2 => 
            array (
                'id' => 3,
                'brand_id' => 3,
                'name' => 'Votre Peau Peptide Serum Concentrate 10ml',
                'variation' => 'Peptide Serum 10ml',
                'link' => 'https://shopee.co.id/BREYLEE-Anti-Acne-Series-Serum-Cream-Acne-Pimple-i.744873.9518195296?sp_atk=97ae3c1d-9ec0-44ee-af8e-d9391c224273&xptdk=97ae3c1d-9ec0-44ee-af8e-d9391c224273',
                'description' => 'Manfaat Serum Peptide Concentrate :
- Menjaga kekenyalan alami kulit
- Membantu menjaga kulit tetap kencang
- Menyamarkan garis halus/ekspresi
- Aman untuk digunakan di area kontur mata untuk meminimalisir tampilan kerutan (crowsfeet)
- Membuat kulit tampak bercahaya

Dapat digunakan pada pagi dan malam hari

*Star-ingredients:*
ARGIRELINE PEPTIDE (Hexa-peptide)
Terbukti secara klinis, membantu menyamarkan tanda penuaan, warna kulit yang tidak merata, serta mengencangkan kulit tanpa injeksi.',
                'price' => 65500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            3 => 
            array (
                'id' => 4,
                'brand_id' => 4,
                'name' => 'GLOWINC POTION GENTLE+ Soothing Serum',
                'variation' => 'GENTLE+ Serum',
                'link' => 'https://shopee.co.id/BREYLEE-Anti-Acne-Series-Serum-Cream-Acne-Pimple-i.744873.9518195296?sp_atk=97ae3c1d-9ec0-44ee-af8e-d9391c224273&xptdk=97ae3c1d-9ec0-44ee-af8e-d9391c224273',
                'description' => 'Serum wajah yang berfungsi untuk menenangkan kulit & membantu memperkuat skin barrier. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Teteskan 3 tetes serum ke telapak tangan.
Usap perlahan & merata ke wajah & leher kemudian lanjutkan ke step #No.4 yaitu pelembap. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Propolis
Triple ceramide
Turmeric
Aloe water',
                'price' => 80100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            4 => 
            array (
                'id' => 5,
                'brand_id' => 3,
                'name' => 'GLOWINC POTION MAINTAIN+ Nutrient Skin Serum',
                'variation' => 'MAINTAIN+ Serum',
                'link' => 'https://shopee.co.id/BREYLEE-Anti-Acne-Series-Serum-Cream-Acne-Pimple-i.744873.9518195296?sp_atk=97ae3c1d-9ec0-44ee-af8e-d9391c224273&xptdk=97ae3c1d-9ec0-44ee-af8e-d9391c224273',
                'description' => 'Serum wajah yang dapat menghidrasi kulit, membantu mencerahkan kulit & membantu mencegah munculnya tanda-tanda penuaan dini. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Teteskan 3 tetes serum ke telapak tangan.
Usap perlahan & merata ke wajah & leher kemudian lanjutkan ke step #No.4 yaitu pelembap. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Triple ceramide
Hyaluronic acid
Glutathione
Acetyl hexapeptide-8',
                'price' => 71100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            5 => 
            array (
                'id' => 6,
                'brand_id' => 40,
                'name' => 'Votre Peau Retinol Serum Concentrate 10ml',
                'variation' => 'Retinol Serum 10ml',
                'link' => 'https://shopee.co.id/BREYLEE-Anti-Acne-Series-Serum-Cream-Acne-Pimple-i.744873.9518195296?sp_atk=97ae3c1d-9ec0-44ee-af8e-d9391c224273&xptdk=97ae3c1d-9ec0-44ee-af8e-d9391c224273',
                'description' => 'Manfaat Serum Retinol Concentrate :
- Merawat keremajaan kulit
- Membantu merawat kulit berjerawat
- Membantu mengurangi komedo
- Mampu memelihara fungsi skin barrier dan lapisan kulit terluar atau epidermis sebagai pelindung tubuh.
- Menjaga agar kulit tetap terhidrasi
- Menstimulasi produksi kolagen untuk kulit lebih sehat

*Star ingredients:*
4% Retinol CC (Cyclosystem Complex)
Teruji klinis efektif dan stabil dalam menyamarkan garis halus, meremajakan kulit, menstimulasi pembentukan kolagen, dan juga membantu mengurangi penumpukan komedo dan sel kulit mati penyebab jerawat.
',
                'price' => 75500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            6 => 
            array (
                'id' => 7,
                'brand_id' => 5,
                'name' => 'Pond\'s Triplegrow Serum Wajah Brightening Serum Bright Beauty Hyaluronic & Niacinamide - Bright Beauty Power Serum 30G - Ponds',
                'variation' => 'Serum 30gr',
                'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Super-Matcha-Pore-Tightening-Serum-50ml-SOME-BY-MI-i.744873.2954903851?sp_atk=f3df09b2-b958-46c9-937c-2d64128cf217&xptdk=f3df09b2-b958-46c9-937c-2d64128cf217',
                'description' => 'TRIPLE GLOW SERUM. Baru PONDS Bright Beauty Triple Glow Serum yang bisa mencerahkan, melembutkan, dan melembapkan wajahmu, untuk hasil yang sulit kamu dapatkan hanya dengan menggunakan krim saja!

6OX LEBIH EFEKTIF DARI VITAMIN C. Serum wajah pencerah yang menggabungkan 3 kekuatan terbaik, mampu bekerja 60X lebih efektif dari Vitamin C*.

Konsentrat serum pencerah yang menggabungkan 3 kekuatan terbaik. Brightening Serum yang mampu bekerja 60X lebih efektif dari Vitamin C*, untuk pancarkan Triple Action Glow mu:
- GLUTA-BOOST-C yang MENCERAHKAN. Glutathione yang kaya akan antioksidan dan dikenal mampu mencerahkan kulit, menyamarkan flek hitam, untuk wajah tampak cerah dan warna kulit merata. 
- NIACINAMIDE yang MELEMBUTKAN. Serum dengan kandungan Vitamin B3 untuk menyamarkan pori sehingga wajah tampak mulus. 
- HYALURONIC ACID yang MELEMBAPKAN. Meruapakan hydrating face serum yang dapat menyerap ke setiap lapisan epidermis kulit untuk wajah tampak lembap berkilau.

*melanin inhibition in the epidermis, based on in-vitro test

Kamu bisa menggunakan serum sejak dini, terlebih jika kamu ingin punya wajah cerah, halus, lembap. Memperkenalkan POND\'S Bright Beauty Triple Glow Serum, formula terbaru dari Pond\'s yang bisa mencerahkan, melembutkan, dan melembapkan wajahmu, untuk hasil yang sulit kamu dapatkan hanya dengan menggunakan krim saja!

Menggunakan serum itu mudah! Ratakan 2-3 tetes POND\'S Bright Beauty Triple Glow Serum di wajahmu setelah menggunakan 3-in-1 Potion Essence. Tepuk perlahan untuk membantu menyerap ke kulit. Lanjutkan dengan pelembap untuk mengunci dapatkan manfaat terbaik dari Serum!',
                'price' => 82000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            7 => 
            array (
                'id' => 8,
                'brand_id' => 6,
                'name' => 'Mineral Botanica Hyaluronic Acid Serum With Kakadu Plum Fruit Extract 20ml',
                'variation' => 'Hyaluronic Serum',
                'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
                'description' => 'Hyaluronic Acid Serum
Netto: 20ml
Formula: deep hydration and improves elastisity
Bentuk: cairan agak kental di dalam kemasan botol pipet
Tekstur: agak kental tapi mudah meresap
Warna: cairan bening

Dengan pemakaian teratur, kulit akan jauh lebih lembap, elastisitas kulit makin terjaga, kulit terasa lebih halus dan noda bekas jerawat pun memudar.
Hyaluronic acid, atau asam hialuronat adalah bahan unggulan yang memiliki fungsi utama melembapkan
kulit . Tingkat kelembapan yang baik akan menjaga kesehatan kulit dari banyak aspek .
Fungsi dan Manfaat hyaluronic acid untuk kulit berjerawat sudah diketahui secara luas sehingga banyak dijadikan sebagai produk serum. Fungsi hyaluronic acid lainnya , yaitu membantu menghidrasi kulit, hingga mendukung proses regenerasi dan peremajaan.

Berikut manfaat hyaluronic acid untuk kulit berminyak maupun berjerawat:
•Mendehidrasi Kulit
•Melindungi Kulit Bagian Luar
•Menjaga Kekencangan Kulit
•Menyamarkan Kerutan
•Menstimulasi Pegantian Sel

Komposisi:
Hyaluronic Acid, Kakadu Plum Fruit Extract, Propanediol, Sodium Hyaluronate, Glycerin, Xylitylglucoside, Anhydroxylitol, Xulitol, Panthenol/Provitamin B5.',
                'price' => 109850,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            8 => 
            array (
                'id' => 9,
                'brand_id' => 7,
                'name' => 'VAVL Blemish Serum by Vivalentine Skincare 15ml - VIGHTNE',
                'variation' => 'Blemish Serum 15ml',
                'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
                'description' => 'Serum yang sejuk dan ringan di kulit yang mengandung Asam Hyaluronate & Saffron Extract yang melembabkan & mengenyalkan kulit.
Kandungan utama Saffron Extract yang kaya manfaat membantu kulit melawan jerawat, bruntus,  dan breakout yang terjadi. Meredakan radang dan mempercepat pemulihan jerawat, mencegah scar dan menghilangkan bekas jerawat.
Tidak hanya untuk kulit bermasalah, Saffron Extract dapat digunakan untuk semua jenis kulit. Saffron mampu melawan polusi, mengurangi pembentukan garis-garis halus pada wajah, mencerahkan dan memberikan efek “glowing” sehat, serta meningkatkan daya tahan kulit secara keseluruhan.

Cara Penggunaan:
• Gunakan pada wajah yang telah dibersihkan.
• Oleskan lebih tebal pada area-area yang bermasalah.
• Gunakan setiap pagi dan malam hari.

Pada kasus jerawat parah, selama pengobatan, jangan menggunakan daycream / foundation di pagi hari, cukup gunakan serum ini saja.',
                'price' => 83500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            9 => 
            array (
                'id' => 10,
                'brand_id' => 4,
                'name' => 'GLOWINC POTION ACNECORE+ Clear AC Serum',
                'variation' => 'ACNECORE+ Serum',
                'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
                'description' => 'Serum wajah untuk kulit berjerawat & pori-pori besar. Membantu melawan bakteri penyebab jerawat, membantu mengecilkan pori-pori & mengontrol produksi sebum di wajah. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Teteskan 3 tetes serum ke telapak tangan.
Usap perlahan & merata ke wajah kemudian lanjutkan ke steo #No.4 yaitu pelembap. Gunakan setiap hari, pagi & malam. 
Kandungan
Diperkaya oleh:
AC Care 1000
Succinic acid
Pore reductyl
Triple Ceramide
Tea tree
Turmeric water',
                'price' => 71100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            10 => 
            array (
                'id' => 11,
                'brand_id' => 8,
                'name' => 'Elsheskin Bakuchiol Revitalizing Serum 30ml - 15ml',
                'variation' => 'Bakuchiol Serum 30ml',
                'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
                'description' => 'Untuk Masalah kulit:
Warna kulit tidak merata
Kulit yang memiliki kerutan dan garis halus
Penghalang kulit rusak
Kulit sensitif

Keuntungan :
5% Kekuatan Revitalisasi Bakuchiol
Alternatif Retinol Terbaik Anda

Bahan-bahan :
Bakuchiol 5%
Ekstrak Kernel Oat
Minyak Biji Plukenetia Volubilis (Minyak Kacang Inca)
Niasinamida
Multi-peptida (Acetyl hexapeptide-8 , Dipeptide Diaminobutyroyl Benzylamide Diacetate)
Ceramide
Asam Etil Askorbat',
                'price' => 180000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            11 => 
            array (
                'id' => 12,
                'brand_id' => 1,
                'name' => 'Nacific Fresh Herb Origin Serum 50ml - 20ml Face Serum - Serum Wajah',
                'variation' => 'Origin Serum 20ml',
                'link' => 'https://shopee.co.id/Pond\'s-Triplegrow-Serum-Wajah-Brightening-Serum-Bright-Beauty-Hyaluronic-Niacinamide-Bright-Beauty-Power-Serum-30G-Ponds-i.744873.18908113490?sp_atk=4b900283-0dac-4b74-8a93-25a9ff3b03e8&xptdk=4b900283-0dac-4b74-8a93-25a9ff3b03e8',
                'description' => 'Key points :
Air daun lidah buaya membantu melembapkan kulit kering
Pore Complex-3 membantu mengencangkan pori
Sepicalm membantu menenangkan kulit dan menyeimbangkan kadar air & minyak di kulit

️ Cara Penggunaan️
1. Kocok terlebih dahulu agar lapisan air dan minyak tercampur dengan baik
2. Ambil serum secukupnya
3. Aplikasikan di wajah secara merata
4. Biarkan menyerap dengan lembut

Best seller serum anti aging di korea dan indonesia no 1. Dengan serum ini kulit dapat menjadi lebih cerah, mengecilkan pori-pori melembabkan kulit kering akibat terkena polusi serta mengangkat sel-sel kulit mati. Serta membuat kulit muka menjadi lebih licin dan membantu daya pertahanan kulit menjadi lebih kencang. Produk ini mengandung serat lemon, kulit jeruk nipis, daun applemint. Produk telah lulus uji Non-komedogenik sehingga dapat digunakan pada kulit yang berjerawat dengan aman tanpa khawatir. Baik disimpan selama 12 bulan setelah produk dibuka. jika segel produk belum di buka, baik disimpan selama 30 bulan.

Cara Penggunaan 
1.Bilas muka terlebih dahulu dengan sabun cuci muka agar kotoran terangkat
2.Kocong botol serum terlebih dahulu agar tercampur dengan rata
3.Ambil kapas basuhi kapan lalu usap ke permukaan wajah anda dengan lembut
4.Berikan tepukan lembut dengan telapak tangan agar serum lebih menyerap ke kulit muka.',
                'price' => 76600,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            12 => 
            array (
                'id' => 13,
                'brand_id' => 41,
                'name' => 'BREYLEE Acne Treatment Serum | BREYLEE Blackhead Mask | BREYLEE Pore Minimizer Serum | STEP 1 | 2',
                'variation' => 'Acne Treatment Serum',
                'link' => 'https://shopee.co.id/L\'Oreal-Paris-Glycolic-Bright-Glowing-SERIES-Day-Night-Cream-Facial-Wash-Serum-Face-Mask-Skincare-Glyco-Loreal-i.744873.16220031287?sp_atk=e76d5a6b-f995-42be-8a0a-45b7494af220&xptdk=e76d5a6b-f995-42be-8a0a-45b7494af220',
                'description' => '[INDIKASI]
Membantu mengatasi permasalahan komedo, pori-pori besar dan jerawat .

[CARA PENGGUNAAN]
1. Setelah membilas wajah, gunakan handuk hangat untuk membuka pori-pori pada wajah.
2. Aplikasikan STEP 1 Blackhead Mask untuk mengangkat komedo pada bagian hidung, dagu, pipi atau pun dahi lalu tempelkan kertas dan tunggu 3-5 menit (Gunakan Maks 2x seminggu)
3. Lalu bilas wajah dan lanjutkan dengan penggunaan STEP 2 Pore Serum.
4. Lanjutkan penggunaan Acne treatment serum 15 - 30 menit setelah penggunaan serum.

CATATAN:
1. Mohon untuk bisa mengirimkan Video Unboxing paket,Foto Resi dan Foto Produk Berkendala/ Rusak. Sehingga jika ada Kerusakan, Kekurangan Produk/Hadiah, atau Ketidaksesuaian Produk yang diterima bisa dilakukan validasi melalui kelengkapan tersebut.
2. Jika tidak memiliki 2 kelengkapan yang disebutkan, maka segala bentuk komplain yang masuk tidak bisa ditindak lanjuti atau dianggap tidak sah. *kecuali: memang ada kesalahan dari sisi Penjual
3. Kerusakan packaging hanya pada bagian luar (bagian dalam utuh, produk tidak ada kerusakan/kekurangan, dll) disebabkan penanganan paket dari Pihak Jasa Ekspedisi yang kurang baik. Diharapkan agar Pembeli bisa melakukan komplain langsung ke Pihak Jasa Ekspedisi.',
                'price' => 89000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            13 => 
            array (
                'id' => 14,
                'brand_id' => 9,
                'name' => 'Benton Snail Bee ',
                'variation' => 'SNAIL BEE Serum 35ml',
                'link' => 'https://shopee.co.id/L\'Oreal-Paris-Glycolic-Bright-Glowing-SERIES-Day-Night-Cream-Facial-Wash-Serum-Face-Mask-Skincare-Glyco-Loreal-i.744873.16220031287?sp_atk=e76d5a6b-f995-42be-8a0a-45b7494af220&xptdk=e76d5a6b-f995-42be-8a0a-45b7494af220',
                'description' => 'Benton Snail Bee Ultimate Serum
Serum multi-perawatan yang diperkaya dengan filtrat fermentasi ragi dan lendir siput yang melimpah, racun lebah, air daun pohon teh, untuk perawatan yang kaya nutrisi, mengencangkan, dan perawatan masalah. Ini mencerahkan kulit, dan memperbaiki kerutan. Bagaimana cara menggunakan: Keluarkan serum dalam jumlah yang sesuai dan oleskan pada wajah Anda.',
                'price' => 156000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            14 => 
            array (
                'id' => 15,
                'brand_id' => 8,
                'name' => 'ElsheSkin Serum Retinol',
                'variation' => 'Retinol Serum 15ml',
                'link' => 'https://shopee.co.id/L\'Oreal-Paris-Glycolic-Bright-Glowing-SERIES-Day-Night-Cream-Facial-Wash-Serum-Face-Mask-Skincare-Glyco-Loreal-i.744873.16220031287?sp_atk=e76d5a6b-f995-42be-8a0a-45b7494af220&xptdk=e76d5a6b-f995-42be-8a0a-45b7494af220',
                'description' => 'Manfaat:
- Mencegah jerawat muncul, dan mengurangi bekas jerawat saat proses penyembuhan
- Termasuk produk yang mempunyai “Minimal Ingredient” berdasarkan website skincarisma (TBD)
- Non-Comedogenic Tested (TBD)
- Free from Alcohol, Sulfate, Fragrance and Essential Oil
- Fungal Acne Safe (Tidak memicu Malassezia folliculitis)',
                'price' => 104250,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            15 => 
            array (
                'id' => 16,
                'brand_id' => 10,
                'name' => 'Pixy White Aqua Concentrated Brightening Serum',
                'variation' => 'Wh.Aqua Bright Serum',
                'link' => 'https://shopee.co.id/Pixy-White-Aqua-Concentrated-Brightening-Serum-i.744873.2660565996?sp_atk=386bf37c-28d8-40a3-897c-972217c999f9&xptdk=386bf37c-28d8-40a3-897c-972217c999f9',
                'description' => 'Skin Bright Activator Vitamin B3 dan Ekstrak Mulberry yang diketahui dapat membantu menghambat proses pembentukan melanin sehingga, membantu kulit tampak lebih cerah dan tetap sehat pada pagi hari.
Intensive Hydra Active Moisturizing Agents yang melembapkan kulit secara intensif
Dilengkapi dengan  Vitamin C dan Vitamin E yang dikenal sebagai antioksidan.',
                'price' => 73900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            16 => 
            array (
                'id' => 17,
                'brand_id' => 11,
                'name' => 'Wardah Hydra Rose Micro Gel Serum 30ml',
                'variation' => 'Micro Gel Serum 30ml',
                'link' => 'https://shopee.co.id/Wardah-Hydra-Rose-Micro-Gel-Serum-30ml-i.744873.3752618450?sp_atk=4a192dc0-8f5d-41c9-bc39-4f1c57b80138&xptdk=4a192dc0-8f5d-41c9-bc39-4f1c57b80138',
                'description' => 'Temukan Wardah Avalanche Rose yang ditanam di kebun mawar di Belanda. Jutaan tetesnya diekstrak dengan teknologi ramah lingkungan untuk mendapatkan essential oil terbaik dari setiap kelopak mawar, didedikasikan untuk kelembaban kulitmu.

Dengan 72 hours hydration active dan Rose Oil menghidrasi serta menjaga kelembapan kulit. Diperkaya butiran HydraMoist Micro Gel, gel lembut yang melebur ke setiap lapisan kulit terdalam memberikan kelembapan ekstra sepanjang hari.',
                'price' => 102500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            17 => 
            array (
                'id' => 18,
                'brand_id' => 2,
                'name' => 'Ariul Watermelon Hydra Glow Serum 55ml',
                'variation' => 'Glow Serum 55ml',
                'link' => 'https://shopee.co.id/Ariul-Watermelon-Hydra-Glow-Serum-55ml-i.744873.9516934719?sp_atk=a16de7f0-47d1-4397-89eb-27374ef942e4&xptdk=a16de7f0-47d1-4397-89eb-27374ef942e4',
                'description' => 'Moisturizing Glow Serum yang mampu untuk menenangkan dan mendinginkan kulit dengan cepat sekaligus menutrisi agar kulit tampak glowing dan cerah.',
                'price' => 132500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            18 => 
            array (
                'id' => 19,
                'brand_id' => 12,
                'name' => 'NPURE Noni Probiotics Calm Me Down Ampoule 30ml - N\'Pure Noni Probiotics - Serum Wajah - Sensitive Skin - Kulit Sensitif',
                'variation' => 'Ampoule 30ml',
                'link' => 'https://shopee.co.id/NPURE-Noni-Probiotics-Calm-Me-Down-Ampoule-30ml-N\'Pure-Noni-Probiotics-Serum-Wajah-Sensitive-Skin-Kulit-Sensitif-i.744873.14439825670?sp_atk=0dc34f9e-b332-405c-864a-cbc48c174194&xptdk=0dc34f9e-b332-405c-864a-cbc48c174194',
                'description' => 'Noni Probiotics “Calm Me Down” Ampoule dengan tekstur yang ringan dan formula super intensif yang diformulasikan khusus untuk kulit sensitif dengan 80% Natural Noni sebagai antioksidan tinggi dan Probiotics 9 Complex yang menjaga keseimbangan microbiome di kulit sehingga membuat kulit menjadi kenyal dan halus. Kandungan Ekstrak Chamomile, Bisabolol, Betaine, Allantoin, dan Ceramide NP dapat menghidrasi kulit, menenangkan, melembabkan, melindungi skin barrier, dan merevitalisasi kulit. SymCalmin® / Avenanthramide merupakan komponen aktif dari oat yang dapat mengurangi peradangan dan kulit kemerahan, serta melindungi kulit dari gangguan eksternal / lingkungan di saat bersamaan. 

CARA PENGGUNAAN
Aplikasikan beberapa tetes ke seluruh wajah dan leher setiap pagi dan malam. Tepuk-tepuk lembut ke kulit untuk penyerapan optimal dan lanjutkan dengan penggunaan pelembab.',
                'price' => 80100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:58',
                'updated_at' => '2022-06-27 15:28:58',
            ),
            19 => 
            array (
                'id' => 20,
                'brand_id' => 42,
                'name' => 'Dear Me Single Serum Activator Face | Dear Me Serum Niacinamide Hyaluronic',
                'variation' => '5% Inoceramide 32ml',
                'link' => 'https://shopee.co.id/Dear-Me-Single-Serum-Activator-Face-Dear-Me-Serum-Niacinamide-Hyaluronic-i.744873.10501026934?sp_atk=4cd1f1a7-c552-44df-b7a0-b07eafee2807&xptdk=4cd1f1a7-c552-44df-b7a0-b07eafee2807',
                'description' => 'Dear Me Beauty berkomitmen menghadirkan produk skincare terbaik yang telah teruji secara dermatologist
dan memberikan hasil nyata yang dikembangkan berdasarkan data penelitian dan tidak menggunakan
hewan sebagai bahan uji coba.

Face Serum 10% Niacinamide + Watermelon Extract 
- MEMBANTU MENGURANGI HIPERPIGMENTASI.
- MENCERAHKAN KULIT.
- MEMBANTU MENGATASI ACNE ATAU JERAWAT.
- MEMBANTU MELINDUNGI DARI PAPARAN BLUE LIGHT (BLUE LIGHT PROTECTION)
- MENGONTROL SEBUM BERLEBIH DAN MEMINIMALISIR TAMPILAN PORI WAJAH.
- MEMBANTU MENJAGA SKIN BARRIER
- MEMBANTU MENGURANGI GARIS HALUS DAN KERUTAN

Face Serum 10% Vitamin C + Orange Extract 
- MENCERAHKAN KULIT KUSAM
- MERATAKAN WARNA KULIT.
- MENGURANGI NODA HITAM DAN HIPERPIGMENTASI.
- MELINDUNGI LAPISAN KULIT DARI EFEK RADIKAL BEBAS AKIBAT PAPARAN
SINAR ULTRAVIOLET DAN POLUSI.
- MENSTIMULASI KOLAGEN DALAM KULIT DALAM JANGKA PANJANG.

Face Serum 2% Salicylic Acid (BHA) + Lemon Extract
SALSPHERE TECHNOLOGY MEMBUAT INOVASI MICROENCAPSULATED 2% SALICYLIC ACID (BHA)
membuatnya lebih mudah menembus ke lapisan kulit lebih dalam karena ukuran partikel yang lebih kecil.

Face Serum 10% Lactobionic Acid (PHA) + Lime Extract 
10% LACTOBIONIC ACID (PHA) bekerja secara GENTLE MENGEKSFOLIASI KULIT karena ukuran
molekul nya yang lebih besar TANPA MENGAKIBATKAN IRITASI, SEKALIGUS MELEMBABKAN KULIT

Face Serum Hyaluronic Acid + Pomegranate Extract
HYALURONIC ACID DIFORMULASIKAN DENGAN MINI OLIGO HA atau jenis hyaluronic dengan
ukuran MOLEKUL KECIL yang dirancang untuk PENETRASI KULIT LEBIH DALAM

Face Serum 5% Inoceramide (Ceramide) + Pomegranate Extract
Serum dengan perpaduan INOCERAMIDE (CERAMIDE) dan ekstrak buah delima yang menjadi
SOLUSI TEPAT BAGI KULIT KERING DAN DEHIDRASI

Face Serum 10% Cica + Watermelon Extract 
Serum yang sangat POWERFUL UNTUK PERAWATAN KULIT SENSITIF (SOOTHING DAN CALMING
KULIT YANG SEDANG IRITASI) dengan menawarkan kandungan bahan alami yang berasal dari
tanaman Centella asiatica (CICA) atau dikenal daun pegagan yang memiliki banyak manfaat bagi kulit.

Face Serum 1% Bakuchiol + Blueberry Extract
- MENGURANGI TANDA PENUAAN SEPERTI GARIS HALUS DAN KERIPUT.
- MEMBANTU MENGATASI JERAWAT.
- MEMBANTU MENCERAHKAN KULIT.
- MEMBANTU MENGHALUSKAN TEKSTUR DI WAJAH.
- MENENANGKAN KULIT YANG SEDANG IRITASI.',
                'price' => 115700,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            20 => 
            array (
                'id' => 21,
                'brand_id' => 13,
                'name' => 'BRASOV Serum Le Docteur Face Serum - Whitening - Anti Acne - Anti Aging - 30ml',
                'variation' => 'SERUMAnti-Aging 30ml',
                'link' => 'https://shopee.co.id/BRASOV-Serum-Le-Docteur-Face-Serum-Whitening-Anti-Acne-Anti-Aging-30ml-i.744873.10049101679?sp_atk=fcdba6c9-28b6-4cfd-86dc-0f3018ffa70d&xptdk=fcdba6c9-28b6-4cfd-86dc-0f3018ffa70d',
                'description' => 'BRASOV Serum Le Docteur Face Serum Whitening
Dilengkapi dengan Vitamin C, praktis dan mudah digunakan, halal, lulus uji POM NA 18201901972
Mengandung Allantoin untuk membantu melindungi dan melembabkan kulit wajah, mengandung Licorice untuk membantu mencerahkan kulit wajah, mengandung vitamin C sebagai antioksidan, membantu mencerahkan kulit wajah

BRASOV Serum Le Docteur Face Serum Anti Acne
Dilengkapi dengan Vitamin C, praktis dan mudah digunakan, halal, lulus uji POM NA 18200108279
Mengandung Niacinamide untuk menjaga kulit yang berjerawat, mengandung Zinc untuk membantu memulihkan bekas luka jerawat, mengandung tea tree oil sebagai anti bakteri dan membantu mencegah jerawat, membuat kulit wajah lebih cerah dan bersinar (glowing)

BRASOV Serum Le Docteur Face Serum Anti Aging
Dilengkapi dengan Vitamin C, praktis dan mudah digunakan, halal, lulus uji POM NA 18202000387
Mengandung Allantoin untuk melindungi dan melembabkan kulit wajah, mengandung collagen untuk membantu menjaga elastisitas kulit, mengandung vitamin C sebagai antioksidan, membantu agar kulit wajah tampak sehat dan segar.

Cara pemakaian : bersihkan wajah terlebih dahulu lalu teteskan 5-6 titik di wajah, oleskan serum ke kulit wajah dengan gerakan memutar menggunakan ujung jari dengan lembut, kemudian tepuk-tepuk agar serum meresap lebih cepat, lalu lanjutkan dengan produk perawatan kulit lainnya',
                'price' => 45500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            21 => 
            array (
                'id' => 22,
                'brand_id' => 14,
                'name' => 'Whitelab Real Barrier Booster Serum - White Lab 20ml',
                'variation' => 'Real Barrier Serum',
                'link' => 'https://shopee.co.id/Whitelab-Real-Barrier-Booster-Serum-White-Lab-20ml-i.744873.15214818226?sp_atk=f7ebe639-2ccb-4622-b84a-5277ce76d456&xptdk=f7ebe639-2ccb-4622-b84a-5277ce76d456',
                'description' => 'Whitelab Real Barrier Booster Serum dengan kandungan Niacinamide 2%, HyaluComplex-10, Ceramide-4, Marine Collagen bekerja sinergis merawat dan meningkatkan fungsi skin barrier wajah, kulit tampak sehat dan tidak kusam.

Powerful Ingredients:
- Niacinamide 2% membantu meningkatkan produksi lipid alami kulit (ceramide), mengontrol produksi sebum dan kondisi optimal kulit wajah, mengurangi kemerahan
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Ceramide-4 yang terdiri dari 4 jenis esensial Ceramide tubuh (Ceramide I, III, VI, Ceramide Prekursor) melengkapi kembali komponen lipid dan meningkatkan fungsi barrier wajah, mencegah Transepidermal Water Loss (TEWL), mengurangi tanda-tanda sensitivitas kulit, meningkatkan kelembaban dan mempertahankan hidrasi kulit wajah.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.
Cocok untuk kulit dengan skin barrier yang rusak (kering, kusam, bersisik, mengelupas), kulit stress yang ditandai dengan pori-pori terbuka dan kemerahan, kulit dehidrasi dan terlihat kendur.

Fungsi:
- Merawat dan meningkatkan fungsi skin barrier wajah
- Mempertahankan level hidrasi kulit wajah
- Merawat kelembaban dan kehalusan kulit wajah
- Menjaga kekenyalan dan kelembutan kulit

Cara pakai : Tuangkan 2-4 tetes Whitelab Real Barrier Booster Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.

Produk ini menggunakan pewarna alami, perubahan warna tidak merubah manfaat dan keamanan dari produk.',
                'price' => 76000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            22 => 
            array (
                'id' => 23,
                'brand_id' => 43,
                'name' => 'TRUEVE Acne Care Treatment Serum 30 ML | Trueve BHA & CICA Acne Serum | TRUEVE Wonder Woman Acne Care Treatment Serum - BHA & CICA Acne Serum',
                'variation' => 'BHA & CICA Acne Serm',
                'link' => 'https://shopee.co.id/TRUEVE-Acne-Care-Treatment-Serum-30-ML-Trueve-BHA-CICA-Acne-Serum-TRUEVE-Wonder-Woman-Acne-Care-Treatment-Serum-BHA-CICA-Acne-Serum-i.744873.8343584528?sp_atk=93f6b2e1-0bff-4dba-a4fd-2d147c759393&xptdk=93f6b2e1-0bff-4dba-a4fd-2d147c759393',
                'description' => 'TRUEVE Acne Care Treatment Serum
Isi 30 mL. BPOM. Dermatologically Tested. 
Trueve Acne Care Treatment Serum diformulasikan dengan SaliCare dan CICA yang bermanfaat untuk merawat kulit berjerawat, menenangkan kulit iritasi atau sensitif,  mengontrol produksi minyak berlebih,  membantu memperkecil pori, mencerahkan, serta melembabkan kulit. 

Komposisi utama dalam serum:
️SaliCare yang digabungkan dengan Niacinamide yang dapat menenangkan kulit yang kemerahan karena bakteri jerawat.
️CICA yang memiliki 4 komponen bioaktif (Asiatic Acids, Madecassic, Asiaticoside, Madecassoside) yang dapat memperkuat skin barrier, kaya akan antioksidan dan dapat meregenerasi sel baru sekaligus wound healing.
️Ceramide-6 kulit kita memiliki 9 jenis Ceramide dan Trueve mampu untuk melindungi 2/3 nya dengan 6 jenis ceramide.
️Hyalu-10 dimana menggunakan 10 Jenis Hyaluronic Acid yang memiliki ukuran lebih kecil lebih mudah menyerap kedalam lapisan yang berbeda secara bersamaan.
️NMF atau kepanjangan dari Natural Moisturizing Factor dari Jerman yang menjaga kulit tetap kenyal dengan melindungi skin barrier untuk menjaga kecukupan kadar air.

Cara pakai:
️Teteskan 2-3 tetes serum ke tangan, kemudian usapkan dan pijat perlahan hingga meresap dan merata pada kulit wajah, kemudian diamkan beberapa saat agar serum meresap ke kulit.
️Gunakan TRUEVE Acne Care Trestment Serum setelah menggunakan toner dan sebelum menggunakan day cream / night cream.
️Gunakan 2x sehari secara rutin untuk mendapatkan hasil yang maksimal,
️Hasil dapat dilihat dalam waktu 3-4 minggu.',
                'price' => 262000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            23 => 
            array (
                'id' => 24,
                'brand_id' => 8,
                'name' => 'Elsheskin Daily Boost Antioxidant Serum 30ml - 15ml',
                'variation' => 'DailyBoostSerum 15ml',
                'link' => 'https://shopee.co.id/Elsheskin-Daily-Boost-Antioxidant-Serum-30ml-15ml-i.744873.17316277832?sp_atk=dba9d3f6-c703-4276-a8b0-f64733090aed&xptdk=dba9d3f6-c703-4276-a8b0-f64733090aed',
                'description' => 'Untuk Masalah kulit:
Selalu terkena polusi
Warna kulit tidak merata
Kerutan dan garis halus
Kulit kering

Keuntungan :
8X Lindungi & Tingkatkan Keremajaan
Lebih Baik Dari Vitamin C*

*Berdasarkan penelitian ilmiah

Bahan-bahan :
1. Ekstrak Teh Hijau
2. Ekstrak Buckthorn Laut
3. Ekstrak Kecambah Bunga Matahari
4. Liposhield HEV Melanin
5.. 15% Asam Etil Askorbat
6. Asam Ferulat
7. Vitamin E
8. Pollushield™
9. Liposhield HEV Melanin™
10. InfraGuard™
11. Asam Poliglutamat',
                'price' => 104250,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            24 => 
            array (
                'id' => 25,
                'brand_id' => 43,
            'name' => 'TRUEVE Ultimate Drops of Brightening Serum 30ml | Trueve Vitamin C & Ceramide Brightening Serum | TRUEVE Wonder Woman Ultimate Drops of Brightening (SPECIAL EDITION) - Serum Wajah',
                'variation' => 'VitaminC & Ceramide',
            'link' => 'https://shopee.co.id/TRUEVE-Ultimate-Drops-of-Brightening-Serum-30ml-Trueve-Vitamin-C-Ceramide-Brightening-Serum-TRUEVE-Wonder-Woman-Ultimate-Drops-of-Brightening-(SPECIAL-EDITION)-Serum-Wajah-i.744873.8343596737?sp_atk=c24c741a-ef76-47b5-bb5d-1a5e64c2ce39&xptdk=c24c741a-ef76-47b5-bb5d-1a5e64c2ce39',
                'description' => 'TRUEVE Ultimate Drops of Brightening Serum.
Isi 30 mL. BPOM. Dermatologically Tested. 
Trueve Ultimate Drops of Brightening Serum yang dapat mencerahkan kulit, membantu meratakan warna kulit, melembabkan kulit, serta merawat pembaharuan sel kulit. Berbeda dengan produk Vitamin C lainnya, Trueve Brightening Serum menggunakan Vitamin C yang dienkapsulasi sehingga akan tepat sasaran dalam meningkatkan penyerapan vitamin C ke dalam kulit yang membutuhkan. 

Komposisi Utama pada produk: 
️VC-IP dari Jepang yang memberikan ekstra perlindungan dari sinar UV dan juga banyak dipakai oleh brand ternama.
️Chromabright dari Spanyol membantu untuk menghambat enzim yang membentuk melanin.
️Ceramide-6 kulit kita memiliki 9 jenis Ceramide dan Trueve mampu untuk melindungi 2/3 nya dengan 6 jenis ceramide.
️Hyalu-10 dimana menggunakan 10 Jenis Hyaluronic Acid yang memiliki ukuran lebih kecil lebih mudah menyerap kedalam lapisan yang berbeda secara bersamaan.
️NMF atau kepanjangan dari Natural Moisturizing Factor dari Jerman yang menjaga kulit tetap kenyal dengan melindungi skin barrier untuk menjaga kecukupan kadar air.

Cara pakai:
️Teteskan 2-3 tetes serum ke tangan, kemudian usapkan dan pijat perlahan hingga meresap dan merata pada kulit wajah, kemudian diamkan beberapa saat agar serum meresap ke kulit.
️Gunakan serum TRUEVE Ultimate Drops of Brightening Serum setelah menggunakan toner dan sebelum menggunakan day cream / night cream
️Gunakan 2x sehari secara rutin untuk mendapatkan hasil yang maksimal,
️Hasil dapat dilihat dalam waktu 3-4 minggu.',
                'price' => 296000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            25 => 
            array (
                'id' => 26,
                'brand_id' => 15,
                'name' => 'SOMEBYMI Yuja Niacin 30 Days Blemish Care Serum 50ml - SOME BY MI',
                'variation' => 'Care Serum 50ml',
                'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Yuja-Niacin-30-Days-Blemish-Care-Serum-50ml-SOME-BY-MI-i.744873.9281995629?sp_atk=b79226fe-8c21-4b91-9667-9afa96d66f53&xptdk=b79226fe-8c21-4b91-9667-9afa96d66f53',
                'description' => 'Untuk kulit bersihmu! 
Perawatan Kulit fokus Mencerahkan SEPANJANG HARI!

SOME BY MI Brightening Recipes
️82% ekstrak Goheung Yuja
→ Mengandung ekstrak Yuja (citron) penuh nutrisi & kelembaban yg menutrisi & melembabkan kulit
️5% Niacinamide
→ Mengandung 5% bahan pencerah yg membantu menghilangkan flek & flek hitam
️Glutathione, Arbutin
→ Membantu kulit menjadi lembut, segar & berembun
️12 jenis Vitamin
→ Menenangkan & merevitalisasi kulit sensitif yg rusak akibat stres eksternal

** Deskripsi di atas menjelaskan manfaat bahan.

Minyak kulit Yuja alam murni & bersih
▶ 600kg Yuja = 1L minyak kulit Yuja ◀
Hanya 1L minyak esensial kulit Yuja (citron) yg dapat diekstraksi dengan mengompresi sekitar 600kg citron segar dari alam, menjadikannya lebih langka & lebih berharga.

Minyak kulit Yuja asli | Bebas pewangi buatan, serum SOME BY MI Yuja mengandung ekstrak minyak kulit Yuja murni, dibuat dengan metode distilasi uap menggunakan kulit Yuja asli.
* Deskripsi di atas didasarkan pada karakteristik bahan.

Tekstur ringan & cepat menyerap
Tekstur yg mudah meresap, ringan seperti udara karena tidak meninggalkan rasa berat & lengket.
* Deskripsi di atas didasarkan pada karakteristik bahan.

️ Serum yg ramah akan kulit sensitif, tepercaya & jujur ️
Yuja Niacin Serum menggunakan bahan-bahan murni & lembut untuk memastikan penggunaan yg aman pada kulit Anda bahkan untuk jenis kulit sensitif.

Rangkaian Yuja Niacin Untuk tampilan kulit yg lebih bersih & glowing
⏰ PERAWATAN SEPANJANG HARI
Yuja Niacin 30 hari Blemish Care Serum → Serum pencerah yg mencerahkan flek hitam

⏰ PERAWATAN MALAM HARI ⏰
Yuja Niacin Sleeping Mask → Saat anda tidur, kulit gelap anda diberikan efek cerah dari sleeping mask. Sleeping mask yg memberikan efek cerah sepanjang malam untuk kulit kusam

CARA PENGGUNAAN 
Setelah penggunaan toner, oleskan secukupnya pada wajah & aplikasikan dengan lembut. Kemudian tepuk-tepuk dengan lembut ke dalam kulit sampai terserap seluruhnya.',
                'price' => 156500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            26 => 
            array (
                'id' => 27,
                'brand_id' => 16,
                'name' => 'Garnier Bright Complete White Speed Serum Day Cream Extra SPF 36/PA+++ - 50ml - Skin Care',
                'variation' => 'Serm Krim SPF36 50ml',
                'link' => 'https://shopee.co.id/Garnier-Bright-Complete-White-Speed-Serum-Day-Cream-Extra-SPF-36-PA-50ml-Skin-Care-i.744873.1292231182?sp_atk=ddb99636-24ef-408f-b816-283c8a9639ae&xptdk=ddb99636-24ef-408f-b816-283c8a9639ae',
                'description' => 'Garnier Bright Complete White Speed Yuzu adalah cream wajah dengan kandungan vitamin C untuk kulit tampak cerah sejak hari ke-3. Wajah tanpa kusam, noda & bekas jerawat tersamarkan.

Manfaat:
Garnier Bright Complete White Speed Yuzu mengandung 3x Serum Vitamin C dari buah Lemon Yuzu segar dari Jepang dan SPF 36/PA+++. Cocok untuk semua jenis kulit.

Cara pemakaian:
Gunakan tiap pagi pada wajah dan leher yang telah dibersihkan, setelah menggunakan essence serum wajah siang.

Formulanya memberi manfaat komplit:
Hingga 3 tingkat lebih cerah, Menyamarkan bintik hitam & bekas jerawat, 12 jam bebas kilap, Meratakan warna kulit, Efek tanpa minyak berlebih dan tahan lama.',
                'price' => 51000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            27 => 
            array (
                'id' => 28,
                'brand_id' => 17,
                'name' => 'Y.O.U Skin Energy Facial Serum 20ml |Firm | YOU Serum Wajah',
                'variation' => 'Firm',
                'link' => 'https://shopee.co.id/Y.O.U-Skin-Energy-Facial-Serum-20ml-Brighten-Hydrate-Balance-Soothe-Firm-YOU-Serum-Wajah-i.744873.12481294369?sp_atk=fae19ed9-e973-40b2-8550-f9a445f3d73e&xptdk=fae19ed9-e973-40b2-8550-f9a445f3d73e',
            'description' => 'Firm (Ectoin + Camellia) Facial Serum
Firming serum dengan tekstur ringan yang diperkaya dengan Ectoin natural dan RedSnow untuk membantu meningkatkan produksi kolagen, menghaluskan tekstur kulit, dan mencegah penuaan dini.
Special Ingredients :
1. Ectoin natural: Membantu melindungi kulit dari efek kerusakan sel kulit akibat UVA.
2. RedSnow: Ekstrak bunga Camellia (antioksidan yang kuat), Membantu meningkatkan produksi kolagen, Membantu melindungi kulit dari penuaan dini yang disebabkan oleh polusi.',
                'price' => 55500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            28 => 
            array (
                'id' => 29,
                'brand_id' => 18,
                'name' => 'MAKE OVER Hydration Serum 33ml | MakeOver Serum - Hydrating Makeup Primer',
                'variation' => 'M.O Hydration Serum',
                'link' => 'https://shopee.co.id/MAKE-OVER-Hydration-Serum-33ml-MakeOver-Serum-Hydrating-Makeup-Primer-i.744873.553915758?sp_atk=86662a02-ef2c-4411-8f65-0f319b77e9d3&xptdk=86662a02-ef2c-4411-8f65-0f319b77e9d3',
                'description' => 'Make Over Hydration Serum merupakan serum yang berfungsi untuk melembapkan sehingga membuat make up tahan lama.
Sebagai andalan rahasia make up artist profesional, serum ajaib ini dirancang untuk mempersiapkan kulit untuk make up dengan memberikan efek mencerahkan dan mengencangkan secara instan. Membantu membuat riasan menempel sempurna, formula berbahan dasar airnya dengan cepat menyerap dan menghidrasi kulit Anda.

Contains: 
- Aloe Vera for soothing agents, moisturizer and anti irritant 
- Pro Vitamin B5 as moisturizer 
- Vitamin E as antioxidant

Benefit :
- Menjaga kulit tetap lembap selama menggunakan make up
- Mempersiapkan kulit sebelum menggunakan makeup
- Mengandung aloe vera dan pro Vit B5 untuk membuat kulit lembut terhidrasi dengan baik dan mengunci kelembapan kulit
- Mengandung vit E sebagai antioksidan

How to Use :
1. Pastikan wajah dalam keadaan bersih
2. Gunakan sebelum pemakaian makeup;
3. Pump 1-2 kali lalu tepuk pada wajah (kulit berminyak atau pijatkan dengan lembut pada wajah (kulit kering)

Tips & Trick :
Hydration Serum dapat digunakan untuk tipe kulit normal, dry maupun oily. Lakukan sedikit massage untuk tipe kulit dry dan tap-tap ringan untuk tipe kulit oily.

Directions: 
Pour one to two drops of hydration serum to palm. Spread evenly to adjust with skin temperature then apply onto face by tapping and slightly pressing. Keep for a while before applying other makeup products.',
                'price' => 95400,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            29 => 
            array (
                'id' => 30,
                'brand_id' => 19,
                'name' => 'Azarine Revitalizing Anti Aging Serum 20ml',
                'variation' => 'Anti Aging Serm 20ml',
                'link' => 'https://shopee.co.id/Azarine-Revitalizing-Anti-Aging-Serum-20ml-i.744873.2969838640?sp_atk=519096a9-4cbe-47e7-b0c0-2a6ce49adf91&xptdk=519096a9-4cbe-47e7-b0c0-2a6ce49adf91',
                'description' => 'Serum anti aging untuk segala jenis kulit, dengan bahan aktif utama ALAMI
bakuchiol dan multipeptide, cocok untuk kulit sensitif dan ibu hamil!

Apa itu bakuchiol?
Bakuchiol adalah Ekstrak dari tumbuhan Korea dengan fungsi dan cara
kerja nya MIRIP RETINOL untuk mencegah keriput, garis halus &
meningkatkan elastisitas kulit tanpa iritasi ( sehingga di sebut di kemasan
alternative retinol, untuk bumil, busui & kulit sensitive)

Peptide merupakan bahan anti aging premium/ mahal yang berfungsi
untuk meregenerasi pertumbuhan kolagen dan mengencangkan kulit yang
kendur serta menghilangkan kerut.',
                'price' => 55900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            30 => 
            array (
                'id' => 31,
                'brand_id' => 16,
                'name' => 'Garnier Sakura Glow Hyaluron 30x Booster Serum Skin Care - 30ml - 15 ml - 7,5ml Sachet [Untuk Kulit Glowing Dalam 7 Hari]',
                'variation' => 'Hyaluron Serum 30ml',
                'link' => 'https://shopee.co.id/Garnier-Sakura-Glow-Hyaluron-30x-Booster-Serum-Skin-Care-30ml-15-ml-7-5ml-Sachet-Untuk-Kulit-Glowing-Dalam-7-Hari--i.744873.10175339742?sp_atk=d0190d2d-3053-4a9f-8521-e021f8baab3f&xptdk=d0190d2d-3053-4a9f-8521-e021f8baab3f',
                'description' => 'Dapatkan newborn glowing skin dalam 7 hari. Serum dengan kandungan formula pelembap tertinggi dari 30X Hyaluron. Diperkaya dengan Ekstrak Sakura Jepang, dipetik dengan tangan dan diproses secara berkelanjutan, dikenal mampu membuat kulit tampak lebih cerah, lembut dan halus. Tidak lengket dan cepat meresap, bekerja ke dalam lapisan kulit. Dari penggunaan pertama, kulit terasa halus, tampak cerah dan bercahaya. Cocok untuk semua jenis kulit, diuji secara dermatologis.

Cara Pemakaian: 
1. Oleskan secara merata pada wajah dan leher yang telah dibersihkan, sebelum menggunakan krim pelembab wajah di pagi & malam hari. 

*Newborn glowing skin ditandai dengan kulit terasa halus, lembut, bercahaya, berdasarkan pemakaian mandiri 52 wanita asia
*hasil bisa berbeda berdasarkan jenis kulit',
                'price' => 94500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            31 => 
            array (
                'id' => 32,
                'brand_id' => 44,
                'name' => 'Viva Queen Whitening Advanced Face Serum 30ml',
                'variation' => 'Face Serum 30 ml',
                'link' => 'https://shopee.co.id/Viva-Queen-Whitening-Advanced-Face-Serum-30ml-i.744873.4638229196?sp_atk=b4035921-c35c-4aca-baad-2f9e4405e9d5&xptdk=b4035921-c35c-4aca-baad-2f9e4405e9d5',
                'description' => 'Viva Queen Whitening Advanced Face Serum

Diformulasi secara khusus untuk kulit di daerah tropis, dengan keunggulan sebagai berikut:

*Weightless* : Dirancang dalam bentuk light cream yang ringan saat digunakan

*Non Greasy* : Tidak meninggalkan rasa lengket

*Good Absorption* : Mudah meresap di kulit

*Smooth Feel* : Terasa halus setelah digunakan

Dapatkan kulit lebih cerah dalam 28 hari* (Clinically Tested), dengan kandungan didalamnya :

*Vitamin C*
*Niacinamide*
*Moisture Complex*

96% ** Kulit lebih halus, lembut dan tampak lebih cerah.

* Berdasarkan hasil uji klinis.
** Self evaluation terhadap 27 wanita Asia, usia 15-55 tahun selama 56 hari pemakaian.

*PERHATIAN :*

Simpan produk pada tempat sejuk dan terlindung dari paparan sinar matahari.',
                'price' => 60550,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            32 => 
            array (
                'id' => 33,
                'brand_id' => 43,
                'name' => 'TRUEVE Luminous Dark Spot Brightening Serum 30 ML | Trueve Niacinamide 10% & Ceramide Brightening Serum | TRUEVE Wonder Woman Luminous Dark Spot Brightening Serum',
                'variation' => 'Niacinamide&Ceramide',
                'link' => 'https://shopee.co.id/TRUEVE-Luminous-Dark-Spot-Brightening-Serum-30-ML-Trueve-Niacinamide-10-Ceramide-Brightening-Serum-TRUEVE-Wonder-Woman-Luminous-Dark-Spot-Brightening-Serum-i.744873.9743573229?sp_atk=c26aed8d-902c-4666-aebd-915f1651b6f1&xptdk=c26aed8d-902c-4666-aebd-915f1651b6f1',
                'description' => 'TRUEVE Luminous Dark Spot Brightening Serum diformulasikan dengan komponen utama Niacinamide dan Ceramide yang dapat mencerahkan kulit, menyamarkan noda hitam, mengontrol produksi minyak berlebih, membantu meratakan warna kulit, serta mempertahankan kelembaban kulit. 

Komposis utama dalam serum:
️Niacinamide 10% kualitas premium dari Swiss dan juga dengan konsentrat tinggi 10% dapat mengatasi banyak permasalahan kulitmu.
️Ceramide-6 kulit kita memiliki 9 jenis Ceramide dan Trueve mampu untuk melindungi 2/3 nya dengan 6 jenis ceramide.
️Hyalu-10 dimana menggunakan 10 Jenis Hyaluronic Acid yang memiliki ukuran lebih kecil lebih mudah menyerap kedalam lapisan yang berbeda secara bersamaan.
️Marine Collagen dapat menjaga struktur kulit dengan lentur, lebih halus, meningkatkan perlindungan kulit dari bahaya lingkungan.
️NMF atau kepanjangan dari Natural Moisturizing Factor dari Jerman yang menjaga kulit tetap kenyal dengan melindungi skin barrier untuk menjaga kecukupan kadar air.

Cara pakai:
️Teteskan 2-3 tetes serum ke tangan, kemudian usapkan dan pijat perlahan hingga meresap dan merata pada kulit wajah, kemudian diamkan beberapa saat agar serum meresap ke kulit.
️Gunakan serum TRUEVE Luminous Dark Spot Brightening Serum setelah menggunakan toner dan sebelum menggunakan day cream / night cream.
️Gunakan 2x sehari secara rutin untuk mendapatkan hasil yang maksimal,
️Hasil dapat dilihat dalam waktu 3-4 minggu.',
                'price' => 246000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            33 => 
            array (
                'id' => 34,
                'brand_id' => 14,
                'name' => 'Whitelab Peeling Serum AHA BHA PHA White Lab',
                'variation' => 'WL Peeling Serum',
                'link' => 'https://shopee.co.id/Whitelab-Peeling-Serum-AHA-BHA-PHA-White-Lab-i.744873.8122852322?sp_atk=18b80869-9e42-4510-a3cc-9487f5fa223d&xptdk=18b80869-9e42-4510-a3cc-9487f5fa223d',
                'description' => 'Dengan kandungan utama AHA 5% + BHA 2% + PHA 2% + Niacinamide 2%
AHA yang digunakan menggunakan AHA PREMIUM GRADE, yaitu MANDELIC ACID, bersifat less iritant / tidak mudah iritasi, sehingga produk ini aman digunakan untuk pemula & kulit sensitif.

Apakah kamu memiliki wajah kusam, kasar dan noda bekas jerawat ?
Jangan khawatir, inilah produk yang tepat untuk membantu memperbaiki masalah kulitmu.

AHA dapat membantu memperbaiki tekstur kulit dan meratakan warna kulit. BHA bermanfaat untuk membersihkan pori dari debu, minyak berlebih, dan kotoran sehingga dapat merawat kulit yang berjerawat serta kulit akan tampak lebih bersih & cerah. PHA dapat membantu mencerahkan kulit yang kusam. Sedangkan Niacinamide dapat membantu mengontrol minyak berlebih sekaligus meningkatkan skin barrier. 

Oleh karena itu, Whitelab Peeling serum sangat cocok digunakan untuk membantu mengurangi masalah kulit kusam, kasar dan berjerawat.

Manfaat :
- Mencerahkan kulit dan meratakan warna kulit
- Membersihkan sel kulit mati, kotoran, dan minyak hingga ke kulit terdalam
- Membantu mengangkat komedo dan meminimalisir penampakan pori-pori.
- Memperkuat skin barrier pada kulit wajah
- Merawat kelembutan dan kehalusan kulit
- Mempercepat regenerasi sel kulit sehingga dapat merawat elastisitas kulit wajah. 

Cara pakai : Teteskan Whitelab Peeling Serum ke wajah yang sudah bersih dan kering. Biarkan produk meresap selama maksimal 10 menit, lalu bilas dengan air. Gunakan pada malam hari, maksimal 2-3 kali seminggu.',
                'price' => 75000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            34 => 
            array (
                'id' => 35,
                'brand_id' => 45,
                'name' => 'PYUNKANG YUL Moisture Serum 9ml - Serum Wajah',
                'variation' => 'Moisture Serum 9ml',
                'link' => 'https://shopee.co.id/PYUNKANG-YUL-Moisture-Serum-9ml-Serum-Wajah-i.744873.12646774159?sp_atk=c67924a0-63f0-4395-bf43-dcc2331e4f83&xptdk=c67924a0-63f0-4395-bf43-dcc2331e4f83',
                'description' => 'Manfaat
- Menjaga keseimbangan antara minyak dan air pada kulit serta mencegah hidrasi dari penguapan untuk efek dewy yang lebih tahan lama.
- Hypo-allergenic.
- Barberry Root Extract bekerja untuk mengurangi suhu kulit untuk menenangkan kulit yang sensitif dan iritasi.
- Minyak zaitun memberikan hidrasi yang intens dan mencegah kulit menjadi kering.

Cara Penggunaan:
- Gunakan spuit untuk mengukur jumlah serum yang tepat.
- Aplikasikan dengan mengikuti garis-garis wajah Anda.

TIPS: aplikasikan serum lebih banyak khususnya ke area yang kering.',
                'price' => 23900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            35 => 
            array (
                'id' => 36,
                'brand_id' => 5,
                'name' => 'Pond\'s White Beauty Serum Burst Cream 20gr | Ponds White Beauty Serum Burst Cream 20gr',
                'variation' => 'Serum Burst 20gr',
                'link' => 'https://shopee.co.id/Pond\'s-White-Beauty-Serum-Burst-Cream-20gr-Ponds-White-Beauty-Serum-Burst-Cream-20gr-i.744873.3462030852?sp_atk=851d3d25-8368-4640-8408-ce7e6f401e94&xptdk=851d3d25-8368-4640-8408-ce7e6f401e94',
                'description' => 'Si cantik nan mungil yang mengandung ribuan butiran serum untuk kulit wajah cerah dan dewy!
Kandungan yang ada di produk ini apa aja sih?
- Gluta Boost Essence, 10x lebih efektif dari Vitamin C
- Vitamin B3+, Melembabkan kulit mu sehingga terasa kencang dan kenyal
- Hyaluronic Acid, yang membantu mengurangi kekusaman dan mengecilkan pori-pori di wajah

Katakan selamat tinggal pada kulit kusam dan bintik hitam dan #doubletheglow kulitmu sekarang!',
                'price' => 33600,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            36 => 
            array (
                'id' => 37,
                'brand_id' => 16,
                'name' => 'Garnier Sakura White Whitening Serum Cream Uva/Uvb Filters 40Ml',
                'variation' => 'Sakura Serum UV 40ml',
                'link' => 'https://shopee.co.id/Garnier-Sakura-White-Whitening-Serum-Cream-Uva-Uvb-Filters-40Ml-i.744873.1292389455?sp_atk=5a1f252f-3877-4956-aa83-011ecd5c7b94&xptdk=5a1f252f-3877-4956-aa83-011ecd5c7b94',
                'description' => 'Diperkaya dengan ekstrak alami 5X Sakura Jepang, Vitamin Pencerah dan UVA/UVB Filters untuk perlindungan dari sinar matahari. Formulanya yang ringan dan cepat menyerap cocok untuk semua jenis kulit.

Hanya dengan 1 sentuhan, kulit terasa lebih lembab, kenyal dan halus.
Hari demi hari, kulit semakin putih cerah merona, cantik bagaikan bunga sakura.
Dalam 4 minggu, kulit menjadi 60% lebih putih cerah merona

Cara pakai :
Oleskan krim secara merata ke wajah dan leher yang bersih.Hindari daerah sekitar mata. Lebih baik digunakan setelah essence

Spesifikasi Utama :
- Anti UVA/UVB
- Extract Bunga Sakura
- Whitening vitamin
- Wajah putih cerah merona',
                'price' => 39900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:28:59',
                'updated_at' => '2022-06-27 15:28:59',
            ),
            37 => 
            array (
                'id' => 38,
                'brand_id' => 5,
                'name' => 'Pond\'s Bright Beauty Power Serum 7.5gr -  Serum Wajah - PONDS',
                'variation' => 'Serum 7,5gr',
                'link' => 'https://shopee.co.id/Pond\'s-Bright-Beauty-Power-Serum-7.5gr-Serum-Wajah-PONDS-i.744873.10965455057?sp_atk=3f82cbd2-4c24-41fb-bdce-0df116faffd9&xptdk=3f82cbd2-4c24-41fb-bdce-0df116faffd9',
                'description' => '• TRIPLE GLOW SERUM. Baru POND’S Bright Beauty Triple Glow Serum yang bisa mencerahkan, melembutkan, dan melembapkan wajahmu, untuk hasil yang sulit kamu dapatkan hanya dengan menggunakan krim saja!
• 6OX LEBIH EFEKTIF DARI VITAMIN C. Serum wajah pencerah yang menggabungkan 3 kekuatan terbaik, mampu bekerja 60X lebih efektif dari Vitamin C^.
• GLUTA-BOOST-C yang MENCERAHKAN. Glutathione yang kaya akan antioksidan dan dikenal mampu mencerahkan kulit, menyamarkan flek hitam, untuk wajah tampak cerah dan warna kulit merata. 
• VITAMIN B3+ yang MELEMBUTKAN. Serum dengan kandungan Vitamin B3 untuk menyamarkan pori sehingga wajah tampak mulus. 
• HYALURONIC ACID yang MELEMBAPKAN. Menyerap ke setiap lapisan epidermis kulit untuk wajah tampak lembap berkilau.

POND’S Bright Beauty Triple Glow Serum  

Kamu bisa menggunakan serum sejak dini, terlebih jika kamu ingin punya wajah cerah, halus, lembap. Memperkenalkan POND\'S Bright Beauty Triple Glow Serum, formula terbaru dari Pond\'s yang bisa mencerahkan, melembutkan, dan melembapkan wajahmu, untuk hasil yang sulit kamu dapatkan hanya dengan menggunakan krim saja!

Konsentrat serum pencerah yang menggabungkan 3 kekuatan terbaik. Mampu bekerja 60X lebih efektif dari Vitamin C^, untuk pancarkan Triple Action Glow mu:

- Mencerahkan dengan Gluta-Boost-C: mengandung glutathione, antioksidan yang dikenal mampu mencerahkan kulit. Formula unik Gluta-Boost-C efektif menyamarkan flek hitam, untuk wajah tampak cerah dan warna kulit merata. 
- Melembutkan dengan Vitamin B3+:  menyamarkan pori untuk wajah tampak mulus
- Melembapkan dengan Hyaluronic Acid: menyerap mendalam ke setiap lapisan epidermis kulit untuk wajah tampak lembap berkilau 

Menggunakan serum itu mudah! Ratakan 2-3 tetes POND\'S Bright Beauty Triple Glow Serum di wajahmu setelah menggunakan 3-in-1 Potion Essence. Tepuk perlahan untuk membantu menyerap ke kulit. Lanjutkan dengan pelembap untuk mengunci dapatkan manfaat terbaik dari Serum!',
                'price' => 15500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            38 => 
            array (
                'id' => 39,
                'brand_id' => 11,
                'name' => 'Wardah Acnederm Acne Care Serum 15ml - Serum Jerawat - Acne Derm',
                'variation' => 'Acne Care Serum 15ml',
                'link' => 'https://shopee.co.id/Wardah-Acnederm-Acne-Care-Serum-15ml-Serum-Jerawat-Acne-Derm-i.744873.14948467312?sp_atk=5c50739a-9948-4e99-8457-fb4e73cb2df8&xptdk=5c50739a-9948-4e99-8457-fb4e73cb2df8',
                'description' => 'Serum bertekstur ringan yang membantu melindungi dan melawan masalah kulit berjerawat, dilengkapi dengan kombinasi bahan aktif untuk membantu merawat kulit yang berjerawat.

Manfaat
-Mengurangi tampilan minyak berlebih
-Menenangkan kemerahan pada wajah
-Melawan bakteri penyebeb jerawat
-Menyamarkan bekas jerawat
-Mencerahkan wajah

Non Comedogenic, Non Acnegenic, Dermatogically Tested',
                'price' => 49900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            39 => 
            array (
                'id' => 40,
                'brand_id' => 20,
                'name' => 'HANASUI SERUM | Rich Nutrition | Propolis | Bright Up',
                'variation' => 'Bright Up Serum',
                'link' => 'https://shopee.co.id/HANASUI-SERUM-Rich-Nutrition-Propolis-Bright-Up-i.744873.5606987532?sp_atk=e811f804-5f56-4060-bbd8-a6d5a7308593&xptdk=e811f804-5f56-4060-bbd8-a6d5a7308593',
                'description' => 'Hanasui Rich Nutrition Serum
* Boost Collagen
* Skin Revitalize
* Increase Skin Elasticity
Serum Antioksidan dengan Panax Ginseng Root Extract yang membantu mengurangi
tanda-tanda penuaan seperti munculnya keriput dan garis halus pada wajah. Dengan
kombinasi sempurna dari Vitamin B6. Vitamin E dan Schizophyllan membantu
merevitalisasi kulit wajah dan membuatnya lebih segar. Mengandung Sodium
Hyaluronate yang melembapkan kulit juga membantu mengencangkan kulit dan
menjaga elastisitasnya, membuatnya tetap sehat dan tampak lebih muda.

Reduce Fine Line Appearance : 5/5
Boosting Collagen : 5/5
Revitalize and Nourishes : 4/5
Firmness and Elasticity : 4/5

- Hanasui Propolis Serum
* Anti Bacteria
* Healing Power
* Skin Regeneration
Dengan Tekstur yang ringan dan cepat menyerap Hanasui Propolis Serum ideal untuk
kulit normal hingga berminyak. Perpaduan sempurna dari Propolis Extract yang
memiliki manfaat anti bakteri dan Sodium Hyaluronate baik untuk kulit yang mudah
berjerawat, mengontrol minyak berlebih, menenangkan, dan tidak menyebabkan iritasi.
Mengandung kombinasi Vitamin B6, Vitamin E, dan Schizophylian sebagai Anti
Inflamasi dan Anti Oksidan membantu menjaga kulit tetap sehat dan terhidrasi dengan baik.

Sebum Control : 5/5
Acne and Oily Skin Care : 5/5
Firmness and Elasticity : 4/5
Intensive Moisturizer : 3/5

- HANASUI BRIGHT UP SERUM
*Active Brightening
*Reduce Dark Spot Appearance
*Lighten Even Skin Tone

Serum kaya manfaat dan mudah menyerap dengan kombinasi sempurna dari Ekstrak Licorice, Tranexamic Acid dan  Niacinamide,sebagai bahan aktif pencerah yang membantu mencerahkan kulit secara merata sekaligus memudarkan bintik bintik hitam yang nampak pada wajah.Mengandung Sodium Hyaluronate,Vitamin E,dan Schyzophyllan,  yang membantu melembutkan, menghaluskan, dan mengencangkan sehingga kulit wajah tetap sehat dan bercahaya.

Brightness skin : 5/5
Reduce Dark Spot : 5/5
Soft and Smooth Skin :4/5
Firmness and Elasticity :3/5

Cara Pakai :
Bersihkan Wajah, teteskan cairan serum ke telapak tangan dan usapkan ke seluruh
permukaan kulit wajah dengan cara ditepuk secara merata. Untuk hasil maksimal
gunakan setiap hari secara teratur pagi dan malam.',
                'price' => 48450,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            40 => 
            array (
                'id' => 41,
                'brand_id' => 14,
                'name' => 'Whitelab C-Dose+ Brightening Serum | White Lab C Dose Serum Vitamin C',
                'variation' => 'WL C-Dose Serum 20ml',
                'link' => 'https://shopee.co.id/Whitelab-C-Dose-Brightening-Serum-White-Lab-C-Dose-Serum-Vitamin-C-i.744873.15604104301?sp_atk=f7ba21e8-74e6-49e2-a6c0-b9084aaa0bc4&xptdk=f7ba21e8-74e6-49e2-a6c0-b9084aaa0bc4',
            'description' => 'Whitelab C-Dose+ Brightening Serum dengan kandungan Ethyl Ascorbic Acid (EAA) 2%, Ferulic Acid,  HyaluComplex-10, dan Marine Collagen membantu mencerahkan dan meratakan warna kulit dan melindungi kulit dari efek buruk radikal bebas. Kombinasi EAA dan Ferulic Acid sinergis membentuk kompleks antioksidan yang baik agar kulit tampak lebih cerah berseri dan mengurangi tanda penuaan dini seperti garis halus dan kerutan.

Powerfull Ingredients:
- EAA 2% merupakan bentuk derivative Vitamin C yang lebih stabil dan tidak mudah terdegradasi serta tidak mengiritasi,. EAA dapat mencerahkan wajah sekaligus menyamarkan noda/ bercak gelap bekas jerawat dan peradangan dan meratakan warna kulit. Bekerja dengan cara menghambat enzim yang berperan dalam proses pembentukan dan akumulasi melanin (pigmen warna kulit)
- Ferulic Acid merupakan senyawa fenolik yang ditemukan secara alami pada kulit gandum, padi, jeruk dan apel. Bersifat sebagai antioksidan alami. Bekerja sinergis dengan  Vitamin C membentuk kompleks antioksidan yang melindungi kulit dari efek buruk radikal bebas sehingga mengurangi garis halus dan kerutan.
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.

Fungsi:
-	Mencerahkan kulit wajah yang gelap dan kusam
-	Membantu menyamarkan noda gelap dan bekas jerawat
-	Membantu meratakan warna kulit
-	Melindungi kulit dari efek buruk radikal bebas
-	Merawat kelembaban dan kehalusan kulit wajah
-	Mengurangi garis halus dan kerutan

Cara pakai : Tuangkan 2-4 tetes WhitelabC-Dose+ Brightening Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.

Perhatian : 
Hindarkan dari sinar matahari langsung. Simpan di tempat yang sejuk dan kering.
Produk ini menggunakan pewarna alami, perubahan warna tidak merubah manfaat dan keamanan dari produk.',
                'price' => 75000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            41 => 
            array (
                'id' => 42,
                'brand_id' => 21,
                'name' => 'AVOSKIN Miraculous Refining Serum | Avo Skin Retinol Serum',
                'variation' => 'Retinol Ampoule',
                'link' => 'https://shopee.co.id/AVOSKIN-Miraculous-Refining-Serum-Avo-Skin-Retinol-Serum-i.744873.1858792075?sp_atk=62eb4730-eb41-4355-aab6-264aff51d250&xptdk=62eb4730-eb41-4355-aab6-264aff51d250',
                'description' => 'Retinol ampoule pertama di Indonesia dengan kandungan Actosome Retinol yang mengandung 0,09% aktif Retinol. Dikombinasikan dengan 0,1% Hexapeptide, Vitamin E, Raspberry Extract, Pomegranate Extract, dan asam ellagic.

Perpaduan tersebut membuat Miraculous Retinol Ampoule berfungsi optimal untuk membantu menunda munculnya tanda penuaan dini pada kulit dengan cara meningkatkan pergantian sel-sel kulit sehingga menjaga elastisitas dan kesehatan kulit.',
                'price' => 207200,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            42 => 
            array (
                'id' => 43,
                'brand_id' => 22,
                'name' => 'SOMETHINC 5% Niacinamide + Moisture Sabi Beet Serum | 10% Niacinamide + Moisture Sabi Brightening',
                'variation' => 'SABI NIACIN 10% 5ml',
                'link' => 'https://shopee.co.id/SOMETHINC-5-Niacinamide-Moisture-Sabi-Beet-Serum-10-Niacinamide-Moisture-Sabi-Brightening-i.744873.6278127747?sp_atk=d02c5fe9-3ae8-4e65-9cca-7a5391916a47&xptdk=d02c5fe9-3ae8-4e65-9cca-7a5391916a47',
            'description' => 'Memperkenalkan kepada Anda anggota baru Niacinamide kami: 5% Niacinamide (Farmaceutical grade) + Sabi Beet Brightening Serum.
Membantu Anda mencapai tingkat maksimal kulit secerah kristal, Memperbaiki tekstur kulit Anda, Memperkuat Penghalang Kulit, Menyamarkan Flek Hitam & Hiperpigmentasi pada kulit, Melembabkan, Mengembalikan kekenyalan, Mengurangi Kemerahan, Melawan Jerawat, & Meminimalkan tampilan kering/rusak kulit. 
Didukung dengan:
• 72,5% Centella Asiatica Water
• SabiWhite (Kelas Farmasi)
• 5% Niacinamide (Kelas Farmasi)
• Ekstrak Alga Terhidrolisis (Dipensiunkan)
• Ekstrak Bunga Anthemis Nobilis
• Ekstrak Akar Beta Vulgaris (Bit)
• Kafein
• Tokoferol (Vit E)',
                'price' => 56800,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            43 => 
            array (
                'id' => 44,
                'brand_id' => 14,
                'name' => 'Whitelab A-Dose+ Glowing Serum - Face Serum',
                'variation' => 'A-Dose+ GlowingSerum',
                'link' => 'https://shopee.co.id/Whitelab-A-Dose-Glowing-Serum-Face-Serum-i.744873.17720520784?sp_atk=a76f01cf-d056-4106-8e75-b09d48ef8db5&xptdk=a76f01cf-d056-4106-8e75-b09d48ef8db5',
                'description' => 'Whitelab A-Dose+ Glowing Serum; Powerful Arbutin Serum terbaru dari Whitelab memiliki kandungan Arbutin 2%, Chromabright ™ Molecule ,  Niacinamide 2%, HyaluComplex-10 dan Marine Collagen membantu mencerahkan kulit wajah yang kusam dan menyamarkan noda/bercak gelap bekas jerawat dan peradangan; sekaligus menjaga kondisi optimal dan kelembapan kulit wajah. Arbutin dikenal luas sebagai bahan pencerah kulit yang efektif dan aman.

Powerful Ingredients:

- Arbutin 2% dengan bentuk dimer Alpha dapat ditemui secara alami pada Bearberry, Mulberry yang dapat mencerahkan wajah yang kusam, menyamarkan noda/ bercak gelap bekas jerawat dan peradangan dengan cara menghambat enzim yang berperan dalam proses pembentukan melanin (pigmen warna kulit)

- Chromabright ™ Molecule merupakan molekul dengan teknologi yang dipatenkan dan terbukti dapat mencerahkan kulit dan menyamarkan noda gelap. Chromabright juga bersifat fotoprotektif, melindungi kulit dari efek buruk radiasi sinar UV.

- Niacinamide 2% membantu mencerahkan wajah, meningkatkan produksi lipid alami kulit (ceramide), menjaga kondisi optimal kulit wajah serta melawan kulit berminyak.

- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.

- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.

Fungsi :
- Mencerahkan kulit wajah yang gelap dan kusam
- Menyamarkan noda hitam dan bekas jerawat di wajah
- Melawan hiperpigmentasi
- Membantu meratakan warna kulit
- Merawat kelembaban dan kehalusan kulit wajah

Cara pakai : Tuangkan 2-4 tetes Whitelab A-Dose+ Glowing Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.

Perhatian : Hindarkan dari sinar matahari langsung. Simpan di tempat yang sejuk dan kering.

Isi : 20 ml
Dermatologically tested
BPOM 
Tidak disarankan untuk digunakan pada Ibu hamil dan menyusui.',
                'price' => 75000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            44 => 
            array (
                'id' => 45,
                'brand_id' => 19,
                'name' => 'Azarine Lightening Serum 20 ml C White | Azarine Serum',
                'variation' => 'C White Serum',
                'link' => 'https://shopee.co.id/Azarine-Lightening-Serum-20-ml-C-White-Azarine-Serum-i.744873.9340681832?sp_atk=c5c99c2d-1fdb-436c-a6ee-8d92e06892ee&xptdk=c5c99c2d-1fdb-436c-a6ee-8d92e06892ee',
                'description' => 'VITAMIN C ENERGY CONCENTRATE

Serum favourite dengan kandungan tinggi bahan aktif alami untuk whitening. Campuran special kakadu dan lainnya  mencerahkan kulit termasuk flek hitam pada kulit. Di formulasikan dengan OXYMOIST ACTIVATING TECHNOLOGY  untuk mengencangkan, mengembalikan dan melembabkan hingga lapisan terdalam kulit. Serum dingin ini juga membantu proses pembentukan kolagen pada kulit dan mengurangi guratan halus kulit/ keriput. Lihat bedanya, kulit akan terasa kenyal, segar dan cerah berseri setelah pemakaian.

Multifungsi Untuk Wajah Mengatasi :
1. DARK SPOT SOLUTION ( FLEK )
2. WHITENING
3. ANTI AGING
4. MOSTURIZER
5. ANTIOKSIDANT
6. REPAIR SKIN BARRIER

Multifungsi Untuk Tubuh di campur Lotion/Body Butter :
1.Fast Whitening All Area ( Lipatan bisa )
2.Anti aging
3.Melembabkan dan merangsang collagen
4.Mengatasi STRETCHMARK
Kandungan Bahan Aktif Alami Yang Tinggi ( Kakadu Plum, Lemon, Bengkuang)
Uji Klinis Mencerahkan Dalam 7 Hari
Uji Klinis Memudarkan Flek Hitam Dalam 10 Hari
Oil Free. Sehingga Bisa Juga Untuk Kulit Berminyak/Berjerawat

How To Use:
Oleskan serum ini pada wajah dan bagian kulit lainnya di malam dan pagi hari. Hasil maksimal jika di kombinasikan dengan cream/ lotion.

Free From:
Hydroquinone, Sulphate, PEG, Parabens, Triclosan, Sulphur, Artificial Dyes and Colorants, MIT, Soap-free, TEA, Propylene Glycol, Alcohol, Urea & Phthalates.',
                'price' => 42500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            45 => 
            array (
                'id' => 46,
                'brand_id' => 14,
                'name' => 'Whitelab Acne Calming Serum 20mL | White Lab Serum Acne | Serum Jerawat',
                'variation' => 'Whitelab Acne Serum',
                'link' => 'https://shopee.co.id/Whitelab-Acne-Calming-Serum-20mL-White-Lab-Serum-Acne-Serum-Jerawat-i.744873.4071178501?sp_atk=d717835c-a2c2-49b1-975b-f40c8f5c7200&xptdk=d717835c-a2c2-49b1-975b-f40c8f5c7200',
                'description' => 'Jerawat adalah permasalahan kulit sebagian besar orang yang hidup di iklim tropis. Jerawat terjadi saat tempat tumbuhnya rambut tersumbat oleh minyak & sel kulit mati yang menyebabkan peradangan dan terkadang berisi nanah. 
Whitelab Acne Calming Serum diperkaya dengan Tea Tree & Centella Asiatica yang bermanfaat untuk menenangkan kulit yang iritasi & meradang akibat jerawat serta membantu mempercepat penyembuhan kulit yang berjerawat. Dilengkapi dengan Hexamidine untuk membantu menghambat pertumbuhan bakteri penyebab jerawat. Sehingga Whitelab Acne Calming Serum sangat tepat untuk kamu yang sedang berjerawat. 

Fungsi:
-	Merawat kulit yang berjerawat
-	Menenangkan kulit yang iritasi/ sensitif/ meradang
-	Anti-peradangan
-	Menghambat pertumbuhan bakteri penyebab jerawat
-	Mencegah timbulnya jerawat
-	Melembabkan
-	Mencerahkan kulit

Bertekstur ringan dan mudah menyerap di kulit
Dapat digunakan untuk semua jenis kulit
Cara pakai: Tuangkan 2-4 tetes Whitelab Acne Calming Serum ke telapak tangan, kemudian oleskan merata pada kulit wajah yang telah dibersihkan. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.',
                'price' => 75000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            46 => 
            array (
                'id' => 47,
                'brand_id' => 14,
                'name' => 'Whitelab Niacinamide 5% - Brightening Booster Serum White Lab',
                'variation' => 'WL Booster Srum 20ml',
                'link' => 'https://shopee.co.id/Whitelab-Niacinamide-5-Brightening-Booster-Serum-White-Lab-i.744873.15504473139?sp_atk=2c27a694-9dea-4eab-a7aa-7ae30dc88419&xptdk=2c27a694-9dea-4eab-a7aa-7ae30dc88419',
                'description' => 'Whitelab Brightening Booster Serum dengan kandungan Niacinamide 5%, HyaluComplex-10, dan Marine Collagen bekerja sinergis mencerahkan dan menutrisi kulit membuat wajah tampak lebih cerah, lembab dan glowing alami.

Powerfull Ingredients:
- Niacinamide 5% dapat mencerahkan kulit, membantu menyamarkan bekas jerawat serta merawat skin barrier wajah.
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.

Brightening Booster Serum ini cocok digunakan pada kulit yang kusam karena over production sebum, kulit stress yang ditandai dengan pori-pori terbuka dan kemerahan, kulit yang dehidrasi dan kering.

Fungsi:
- Membantu mencerahkan kulit
- Mengurangi kemerahan pada kulit
- Merawat kelembaban, kehalusan dan kelembutan kulit
- Membantu menyamarkan noda gelap dan bekas jerawat

Cara pakai : Tuangkan 2-4 tetes Whitelab Brightening Booster Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.',
                'price' => 65000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            47 => 
            array (
                'id' => 48,
                'brand_id' => 20,
                'name' => 'Hanasui Serum Whitening Gold | Serum Wajah',
                'variation' => 'HANA Whitening Gold',
                'link' => 'https://shopee.co.id/Hanasui-Serum-Whitening-Gold-Serum-Wajah-i.744873.2693759038?sp_atk=c7a21de4-eab4-4d38-9c20-7f60ae3783c9&xptdk=c7a21de4-eab4-4d38-9c20-7f60ae3783c9',
                'description' => 'Perawatan kecantikan kulit wajah yang mengandung Vitamin B3, Vitamin C, dan Collagen untuk kulit tetap cerah, lembut, dan kencang.

Kandungan Utama :
1. Vitamin C  (Sodium Ascorbyl Phosphate)
2. Glyserin
3. Niacinamide (Vit B3)

KEUNGGULAN:
1. Membantu mencerahkan warna kulit
2. Menjaga elastisitas kulit
3. Sebagai Anti Oksidan
4. Melembutkan serta mengencangkan kulit wajah.',
                'price' => 17500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            48 => 
            array (
                'id' => 49,
                'brand_id' => 8,
                'name' => 'Elsheskin Radiant Skin Serum | Elshe Skin Radiant Skin Serum | SkinCare Serum Wajah',
                'variation' => 'Radiant Serum 15ml',
                'link' => 'https://shopee.co.id/Elsheskin-Radiant-Skin-Serum-Elshe-Skin-Radiant-Skin-Serum-SkinCare-Serum-Wajah-i.744873.1714847276?sp_atk=7429c2bd-c85c-4de0-93b2-be2cc59258aa&xptdk=7429c2bd-c85c-4de0-93b2-be2cc59258aa',
                'description' => 'ElsheSkin Radiant Skin Serum adalah serum pencerah wajah yang membantu mengurangi noda hitam bekas jerawat, warna kulit tidak merata dan kerutan.

Manfaat Radiant Skin Serum Wajah Glowing 
Manfaat serum pencerah wajah ini yaitu membantu mencerahkan kulit kusam dan bantu memudarkan flek bekas jerawat yang menganggu tampilan kulit wajah.  

Kandungan Radiant Skin Serum Pencerah Wajah
1. Niacinamide
2. Arbutin
3. Glutathinone
4. Vitis Vinifera Seed Extract
5. Tocopheryl Acetate

Cara Pakai / Menggunakan Radiant Skin Serum Wajah Glowing
Teteskan 5-6 tetes elsheksin radiant skin serum ke telapak tangan, usapkan
ke seluruh wajah atau pada noda hitam. Pijat dan tepuk wajah dengan lembut hingga
serum meresap sempurna. Gunakan tiap pagi dan malam untuk hasil maksimal.',
                'price' => 96750,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            49 => 
            array (
                'id' => 50,
                'brand_id' => 23,
                'name' => 'Rojukiss Korean Serum Orange C Bright Pore Care - Jeju Lotus Pinkish Bright - Tea Tree Bija Pro Acne Rojukis',
                'variation' => 'Eggplant Dark Spot',
                'link' => 'https://shopee.co.id/Rojukiss-Korean-Serum-Orange-C-Bright-Pore-Care-Jeju-Lotus-Pinkish-Bright-Tea-Tree-Bija-Pro-Acne-Rojukis-i.744873.8766324847?sp_atk=08563069-126a-4121-8f06-0afe44a17db2&xptdk=08563069-126a-4121-8f06-0afe44a17db2',
                'description' => 'Rojukiss Orange C Bright Pore Care
Serum perawatan wajah untuk kulit kusam dan pori-pori membesar. Diperkaya ekstrak Jeruk, Vitamin C, Vitamin E, dan Witch Hazel yang dikembangkan oleh ahli kulit Korea.
Manfaat:
- Membantu menutrisi dengan efektif
- Mencerahkan kulit
- Mengencangkan pori

Rojukiss Jeju Lotus Pinkish Bright Serum
Serum perawatan wajah untuk kulit kusam dan warna kulit tidak merata. Diperkaya ekstrak Jeju Lotus, Pomegranate, Glutathione, Vitamin B3 (Niacinamide), dan Witch Hazel yang dikembangkan oleh ahli kulit Korea.
Benefit :
- Membantu menutrisi dengan efektif, mencerahkan, meratakan warna kulit,
- Melembutkan dan mengencangkan pori
- Kulit tampak lebih cerah, merona, halus dan mulus.

Rojukiss Tea Tree Bija Pro Acne Serum
Serum perawatan wajah untuk kulit berminyak, cenderung berjerawat dan masalah bekas jerawat. Diperkaya ekstrak Centella, Bija, Tea Tree, Vitamin B3 (Niacinamide), dan Witch Hazel yang dikembangkan oleh ahli kulit Korea. 
Benefit :
- Membantu menutrisi dengan efektif
- Menyeimbangkan minyak berlebih di wajah
- Merawat kulit berjerawat, memudarkan bekas jerawat
- Mengencangkan pori

1. Gunakan setiap pagi dan malam setelah membersihkan wajah
2. Tunggu sampai serum menyerap dan gunakan Rojukiss Serum Mask untuk hasil yang maksimal
3. Lepaskan masker setelah 15 menit.
4. Tepuk lembut wajah untuk membantu penyerapan.',
                'price' => 16400,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:00',
                'updated_at' => '2022-06-27 15:29:00',
            ),
            50 => 
            array (
                'id' => 51,
                'brand_id' => 24,
                'name' => 'SYB Face Serum | Gold',
                'variation' => 'Lightening Gold',
                'link' => 'https://shopee.co.id/SYB-Face-Serum-Red-Jelly-Gold-Aloe-Vera-Acne-Vitamin-C-For-Man-Peeling-Serum-SYB-Serum-i.744873.11421927121?sp_atk=cfe876c1-61bf-44e3-8e49-8d104a2bdc80&xptdk=cfe876c1-61bf-44e3-8e49-8d104a2bdc80',
                'description' => 'LIGHTENING GOLD SERUM yang berfungsi untuk mencerahkan dan membuat wajah glowing sehat alami.

CARA PAKAI
Keluarkan serum pada tangan lalu oleskan secara merata pada kulit wajah.',
                'price' => 12200,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            51 => 
            array (
                'id' => 52,
                'brand_id' => 46,
                'name' => 'Nutrishe Intensive Bright & Glow Serum - 30ml',
                'variation' => 'Nutrishe Serum 30ml',
                'link' => 'https://shopee.co.id/Nutrishe-Intensive-Bright-Glow-Serum-30ml-i.744873.6377154619?sp_atk=1ba9c87b-7d47-4588-a09e-3a3b25b30f21&xptdk=1ba9c87b-7d47-4588-a09e-3a3b25b30f21',
            'description' => 'Nutrishe Intensive Bright & Glow Serum adalah serum ringan yang mengandung Alpha Arbutin yang membantu meminimalkan flek hitam, kulit tidak merata, mengurangi kulit kusam dan mencerahkan kulit. Serum ini juga diresapi dengan ekstrak Brown Seaweed (algae) yang mengandung protein untuk mensuplai sel kulit dengan hidrasi ekstra untuk kulit bercahaya.

Bahan lain dalam serum ini adalah Centella Asiatica yang dikenal sebagai penyembuh. Ini membantu memperkuat penghalang kulit, melawan jerawat, menghidrasi dan menenangkan.',
                'price' => 138000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            52 => 
            array (
                'id' => 53,
                'brand_id' => 11,
                'name' => 'Wardah Crystal Secret Dark Spot & Brightening Serum | White Secret Intense Brightening Essence - 20 ml',
                'variation' => 'Dark Spot Serum 20ml',
                'link' => 'https://shopee.co.id/Wardah-Crystal-Secret-Dark-Spot-Brightening-Serum-White-Secret-Intense-Brightening-Essence-20-ml-i.744873.1549209296?sp_atk=21a47e14-6eab-4f13-8c94-3a5b320a8468&xptdk=21a47e14-6eab-4f13-8c94-3a5b320a8468',
                'description' => 'Serum yang kaya akan bahan aktif pencerah, efektif bekerja pada kulit yang terpigmentasi. Kandungan Silver Vine Extract dalam Advanced-White Specific System berkontribusi terhadap proses transparansi dan pencerahan kulit. Membantu mencerahkan, memperbaiki tekstur kulit, serta mengurangi munculnya noda hitam dan warna kulit yang tidak merata. Kulit menjadi halus, cerah, kenyal, dan lembab. Gunakan sebelum memakai Wardah White Secret Night Cream

Manfaat :
-Membantu mencerahkan kulit wajah
-Menghilangkan flek hitam
-Memberikan kelembapan ekstra pada kulit wajah
-Membuat kulit wajah sebening crystal

Saran Pemakaian : 
-Gunakan malam hari pada wajah dan leher yang sudah dibersihkan.
-Hindari penggunaan pada area sekitar mata dan mukosa.',
                'price' => 63700,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            53 => 
            array (
                'id' => 54,
                'brand_id' => 14,
                'name' => 'Whitelab Intense Brightening Face Serum | White Lab Brightening Face Serum Niacinamide 10%',
                'variation' => 'WL Face Serum',
                'link' => 'https://shopee.co.id/Whitelab-Intense-Brightening-Face-Serum-White-Lab-Brightening-Face-Serum-Niacinamide-10--i.744873.3458441254?sp_atk=61aa2587-659e-4f89-8e06-196fd528c0a3&xptdk=61aa2587-659e-4f89-8e06-196fd528c0a3',
                'description' => 'Dengan kandungan utama NIACINAMIDE 10% + COLLAGEN.
Niacinamide berperan untuk mencerahkan kulit, melembabkan kulit, menyamarkan noda hitam, serta membantu mengatasi jerawat.
Sedangkan, collagen berperan penting untuk meningkatkan elastisitas kulit dan mencegah tanda penuaan kulitmu. 

Fungsi: 
- Membuat kulit Cerah Glowing
- Menyamarkan noda hitam 
- Melembabkan kulit 
- Membantu mengurangi kerutan & garis halus 
- Mencegah penuaan dini 
- Kulit halus, kenyal, dan tidak kusam 
- Mengurangi peradangan & kemerahan pada wajah 
- Tekstur ringan & Mudah meresap ke dalam kulit 
- Dapat digunakan untuk semua jenis kulit 

Cara pakai: Teteskan 2-3 tetes Whitelab Brightening Face Serum, lalu usapkan pada kulit wajah yang telah dibersihkan hingga batas leher. Gunakan face serum setelah menggunakan toner dan sebelum menggunakan day cream / night cream.',
                'price' => 150000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            54 => 
            array (
                'id' => 55,
                'brand_id' => 25,
                'name' => 'Scarlett Whitening Brightly Ever After Serum Cream Day Night | Scarlet Whitening Acne Serum | tntbeauty TnT Beauty Shop',
                'variation' => 'SERUM GLOWTENING',
                'link' => 'https://shopee.co.id/Scarlett-Whitening-Brightly-Ever-After-Serum-Cream-Day-Night-Scarlet-Whitening-Acne-Serum-tntbeauty-TnT-Beauty-Shop-i.744873.5442239234?sp_atk=0258543b-7322-4584-adc4-64bb60a503ad&xptdk=0258543b-7322-4584-adc4-64bb60a503ad',
                'description' => 'Di dalam Brightly Ever After Serum terdapat kandungan Phyto Whitening, Glutathione, Vitamin C, Niacinamide dan Lavender Water yang dimana bermanfaat sebagai :

1. Membantu mencerahkan kulit dan memudarkan noda di wajah seperti hiperpigmentasi, bekas jerawat, flek dan bekas luka.
2. Membantu mengontrol kadar minyak berlebih di kulit, membantu mengeceilkan pori-pori, mengimprovisasi warna kulit, menghaluskan kerutan dan juga garis di kulit.
3. Membantu menutrisi dan melembabkan kulit. 
4. Membantu membuat kulit menjadi lebih relax dan calm.
5. Bekerja sebagai antioxidant dan juga sebagai anti pollution.

- Cara Pakai :
Teteskan 2-3 tetes serum, usap dan pijat secara perlahan sampai merata pada kulit wajah. Diamkan beberapa saat agar serum meresap ke kulit.

Di dalam Acne Serum terdapat kandungan Tea Tree Leaf Water, Salicylic Acid, Jeju Centella Asiatica, Liquorice Extract dan Vitamin C yang dimana bermanfaat sebagai :

1. Membantu menyembuhkan jerawat meradang, jerawat batu, kulit kemerahan dan iritasi. 
2. Membantu meregenerasi dan menjaga kulit yang sensitive tanpa menimbulkan iritasi.
3. Membantu menenangkan kulit, menghaluskan dan juga membantu memudarkan bekas jerawat atau luka.
4. Membantu mencerahkan kulit secara aman karena menggunakan Liquorice Extract dan Vitamin C yang juga berfungsi sebagai anti oxidant + anti pollution. 
5. Membantu mengontrol kadar minyak berlebih di kulit.

- Cara Pakai :
Teteskan 2-3 tetes serum, usap dan pijat secara perlahan sampai merata pada kulit wajah. Diamkan beberapa saat agar serum meresap ke kulit.',
                'price' => 57000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            55 => 
            array (
                'id' => 56,
                'brand_id' => 19,
                'name' => 'Azarine Anti Acne Brightening Serum 20ml | Azarine Serum',
                'variation' => 'Anti Acne Serum',
                'link' => 'https://shopee.co.id/Azarine-Anti-Acne-Brightening-Serum-20ml-Azarine-Serum-i.744873.4985446209?sp_atk=4123d613-4569-4f60-b8e0-f32dd26cbed7&xptdk=4123d613-4569-4f60-b8e0-f32dd26cbed7',
                'description' => 'DUO FAST CLEARING ACTION UNTUK JERAWAT + WHITENING

Serum totol JERAWAT dan juga MENCERAHKAN BEKAS JERAWAT yang di formulasikan khusus dari bahan- bahan alami tumbuhan untuk merawat kulit berjerawat. Serum ini bekerja cepat untuk mengeringkan dan mengempeskan jerawat dalam waktu kurang dari 3 hari. 

Kegunaan serum ini:
1. Mengeringkan dan merawat jerawat/ acne
2. Mencerahkan kulit bekas jerawat
3. Merawat kulit bruntusan
4. Menyamarkan pori- pori besar 
5. Mengontrol minyak/ sebum/ oil

Cara pakai:
Gunakan setiap hari saat malam hari setelah acne facial wash. Oleskan serum pada jerawat, lalu tumpuk dengan acne post gel , aloevera gel dan refreshing essence mist untuk mengontrol minyak.
Gunakan 2x sehari pagi & malam. 

Key ingredients:
1. Cinnamon: mengontrol minyak & memberi efek matte
2. Salicylic acid : membersihkan pori, jerawat & memperbaiki tekstur kulit.
3. Niacinamide: menyamarkan bekas jerawat & menghaluskan kulit
4. Centella Asiatica: Mengontrol minyak & healing agent
5. Papaya: exfoliasi jerawat dan menutrisi kulit',
                'price' => 25500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            56 => 
            array (
                'id' => 57,
                'brand_id' => 47,
                'name' => 'IMPLORA Luminous Brightening Serum',
                'variation' => 'Luminous Brightening',
                'link' => 'https://shopee.co.id/IMPLORA-Luminous-Brightening-Serum-i.744873.13407686205?sp_atk=e2b13941-da77-44d8-b4f9-febeddfed9bc&xptdk=e2b13941-da77-44d8-b4f9-febeddfed9bc',
                'description' => 'Implora Luminous Brightening Serum mengandung Niacinamide 10% dan Kakadu Plum yang kandungan vitamin C nya 70 kali lebih banyak dari buah jeruk, yang dapat membantu mencerahkan, melembabkan, menyamarkan noda hitam serta menutrisi kulit. Dapatkan tampilan kulit yang sehat dan bersinar dengan menggunakan secara rutin.
- Direkomendasikan untuk semua jenis kulit
- Penggunaan pagi dan malam hari
- Mengandung : Niacinamide 10%, Caviar Collagen, Black pearl, Vitamin C',
                'price' => 22800,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            57 => 
            array (
                'id' => 58,
                'brand_id' => 16,
                'name' => 'Garnier Bright Complete Vitamin C 30x Booster Serum Single 15/30/50 ml - Kulit Cerah Light Complete',
                'variation' => 'Booster Serum 30mL',
                'link' => 'https://shopee.co.id/Garnier-Bright-Complete-Vitamin-C-30x-Booster-Serum-Single-15-30-50-ml-Kulit-Cerah-Light-Complete-i.744873.6143549294?sp_atk=5a07f509-ac96-4ac8-b64f-3cf27503b7ed&xptdk=5a07f509-ac96-4ac8-b64f-3cf27503b7ed',
                'description' => 'BARU! Inovasi Booster Serum terbaru untuk aksi cepat cerahkan noda hitam dengan kandungan 30x Vitamin C murni dari Lemon Yuzu Jepang. 

Manfaat: 

Tekstur serum yang ringan dan fresh mudah meresap ke lapisan kulit untuk aksi cepat cerahkan noda hitam dan samarkan bekas jerawat. Dengan pemakain rutin, rasakan kulit tampak lebih cerah bersinar dan noda hitam tersamarkan. 

Cara pemakaian: 

Oleskan secara merata pada wajah dan leher yang telah dibersihkan, sebelum menggunakan krim pelembab wajah di pagi & malam hari.

Cocok digunakan pada jenis kulit normal, atau berminyak.',
                'price' => 88300,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            58 => 
            array (
                'id' => 59,
                'brand_id' => 48,
                'name' => 'XI XIU Face Serum Vitamin C | Anti Acne | Whitening Gold 20 ml Vit C | Brightening Glow Concentrate | Acne Fight -  XiXiu Serum',
                'variation' => 'Brightening Serum',
                'link' => 'https://shopee.co.id/XI-XIU-Face-Serum-Vitamin-C-Anti-Acne-Whitening-Gold-20-ml-Vit-C-Brightening-Glow-Concentrate-Acne-Fight-XiXiu-Serum-i.744873.3786483681?sp_atk=fe1de1b3-96ec-48f3-b878-ed560ab646c3&xptdk=fe1de1b3-96ec-48f3-b878-ed560ab646c3',
                'description' => 'Dengan kandungan  Vitamin C, yang dapat membantu wajah terlihat tampak lebih cerah
• Niacinamide, yang dapat membantu melembabkan, menghaluskan, serta mencerahkan kulit wajah
• Collagen, yang dapat membantu menyamarkan kerutan pada kulit wajah
• Allantoin, yang dapat melindungi kulit wajah dan sebagai anti-irritant.

Xi Xiu Face Serum dengan active ingredient hidrolized & zinc zulfate yang dapat membantu mengurangi produksi sebum berlebih pada wajah dan menghambat pertumbuhan bakteri penyebab jerawat diperkaya alantoin dan niacinamide.

Xi Xiu Face Serum dengan double brightening active ingredients yaitu vitamin C dan niacimade yang dapat membantu wajah terlihat tampak cerah dan kandungan Al antoine sebagai anti iritasi.',
                'price' => 17600,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            59 => 
            array (
                'id' => 60,
                'brand_id' => 43,
                'name' => 'Trueve Acne Brightening Anti Aging Serum Niacinamide Ceramide BHA CICA Galactomyces Peptide Vit C / Advanced Brightening Moisturizing Gel - Barrier Complex Moisturizing Gel',
                'variation' => 'BarrierMoisturzngGel',
                'link' => 'https://shopee.co.id/Trueve-Acne-Brightening-Anti-Aging-Serum-Niacinamide-Ceramide-BHA-CICA-Galactomyces-Peptide-Vit-C-Advanced-Brightening-Moisturizing-Gel-Barrier-Complex-Moisturizing-Gel-i.744873.8309407785?sp_atk=35d845dd-8694-4e93-958c-430161ded342&xptdk=35d845dd-8694-4e93-958c-430161ded342',
                'description' => 'Trueve Ultimate Drops of Brightening Serum yang dapat mencerahkan kulit, membantu meratakan warna kulit, melembabkan kulit, serta merawat pembaharuan sel kulit. Berbeda dengan produk Vitamin C lainnya, Trueve Brightening Serum menggunakan Vitamin C yang dienkapsulasi sehingga akan tepat sasaran dalam meningkatkan penyerapan vitamin C ke dalam kulit yang membutuhkan. 

Cara pakai:
1. Teteskan 2-3 tetes serum ke tangan, kemudian usapkan dan pijat perlahan hingga meresap dan merata pada kulit wajah, kemudian diamkan beberapa saat agar serum meresap ke kulit.
2. Gunakan serum TRUEVE Niacinamide 10% & Ceramide Brightening Serum setelah menggunakan toner dan sebelum menggunakan day cream / night cream
3. Gunakan 2x sehari secara rutin untuk mendapatkan hasil yang maksimal,
4. Hasil dapat dilihat dalam waktu 2 minggu.',
                'price' => 164680,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            60 => 
            array (
                'id' => 61,
                'brand_id' => 19,
                'name' => 'Azarine AHA BHA Miraclear Herbal Peeling Serum 20ml | Azarine Serum',
                'variation' => 'Herbal Peeling Serum',
                'link' => 'https://shopee.co.id/Azarine-AHA-BHA-Miraclear-Herbal-Peeling-Serum-20ml-Azarine-Serum-i.744873.4185442657?sp_atk=2a75b1cd-41c7-4cdb-8f1c-845f1f4da5c4&xptdk=2a75b1cd-41c7-4cdb-8f1c-845f1f4da5c4',
                'description' => 'Serum peeling/ exfoliating wajah tanpa bilas untuk membantu mengatasi BERBAGAI PERMASALAHAN kulit dan meregerenerasi kulit sehari hari. Di formulasikan untuk ACTIVE SKIN CARE BOOSTER untuk mengoptimalkan cara kerja bahan aktif skin care berikutnya, sehingga dapat mempercepat proses yang di inginkan.

Di perkaya HEALING AGENT dari centella asiatica, chamomile dan galactomyces filterate korea untuk mengurangi resiko iritasi, kulit kering dan menghaluskan kulit.

Kegunaan serum ini:
1. Mengangkat sel kulit mati tanpa membuat kulit kering/ iritasi karena terbuat dari bahan- bahan herbal
2. Mencerahkan kulit kusam/ noda / flek pada kulit
3. Menyamarkan / memudarkan bekas jerawat/ luka/ bopeng & bruntusan
4. Menyamarkan pori- pori besar & garis halus pada kulit
5. Meregenerasi sel kulit & memperbaiki tekstur kulit secara harian / daily skin renewal
6. Menutrisi kulit secara keseluruhan
7. Skin priming & Booster

Cara pakai:
Gunakan setiap hari saat malam hari setelah facial wash / toner dan sebelum serum lain untuk kulit normal.
Gunakan 2-3 x seminggu setelah facial wash / toner untuk kulit sensitif.

Key ingredients:
1. AHA COMPLEX ( GLYCOLIC, CITRIC, LACTIC, TOMATO, DESERT LIME) 
2. Salicylic acid : membersihkan pori, jerawat & memperbaiki tekstur kulit.
3. Galactomyces filterate: menyamarkan noda & menghaluskan kulit
4. Centella Asiatica: Mengencangkan kulit, antioksidan & healing agent
5. German Chamomile: Anti iritasi & melembabkan kulit',
                'price' => 21000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            61 => 
            array (
                'id' => 62,
                'brand_id' => 21,
                'name' => 'AVOSKIN Perfect Hydrating Treatment Essence | Hydrating Treatment | Refining Toner Serum Retinol',
                'variation' => 'Alpha Arbutin Serum',
                'link' => 'https://shopee.co.id/AVOSKIN-Perfect-Hydrating-Treatment-Essence-Hydrating-Treatment-Refining-Toner-Serum-Retinol-i.744873.1729079580?sp_atk=7ab49cc8-f2a7-4abe-9981-134346f24d6c&xptdk=7ab49cc8-f2a7-4abe-9981-134346f24d6c',
                'description' => 'Esensi kelembaban yang memberi energi untuk mengisi ulang pancaran kulit.

Manfaat :
- Mencerahkan kulitmu sehingga terlihat bersinar
- Memulihkan dan memelihara elastisitas kulit agar terlindungi dengan  baik. Melembabkan dan menyeimbangkan pH kulitmu
- Memelihara kulit hingga lapisan terdalam, sehingga proses regenerasi kulit dapat berlangsung dengan maksimal
- Mengoptimalkan proses penetrasi di dalam kulit, sehingga saat menggunakan produk pada step selanjutnya akan lebih mudah meresap ke dalam kulit
- Dapat digunakan sebagai primer sebelum memakai makeup agar riasan mampu bertahan lama',
                'price' => 111200,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            62 => 
            array (
                'id' => 63,
                'brand_id' => 16,
                'name' => 'GARNIER Light Complete Whitening Serum Cream | Yoghurt Sleeping Mask Night | Sakura White Whitening Serum Cream - 7ml SACHET',
                'variation' => 'SakuraSerumCream 7ml',
                'link' => 'https://shopee.co.id/GARNIER-Light-Complete-Whitening-Serum-Cream-Yoghurt-Sleeping-Mask-Night-Sakura-White-Whitening-Serum-Cream-7ml-SACHET-i.744873.6365943495?sp_atk=327bae6f-91cc-455b-b71b-12d7c4b3a859&xptdk=327bae6f-91cc-455b-b71b-12d7c4b3a859',
                'description' => 'Inovasi baru dari Garnier Light Complete Multi-Action Whitening Cream. Formula baru dengan tekstur ringannya membantu mengurangi kekusaman wajah dan minyak berlebih.
Selain itu, juga menyamarkan bintik hitam dan noda bekas jerawat agar wajah tampak lebih cerah dan bening.
Diperkaya dengan Whitening Vitamin (B3), Vitamin E 50% lebih banyak, Sari Lemon, dan Salicylic Acid Derivative.
Formula barunya memberikan manfaat yang lebih komplit: Hingga 3 tingkat/tona lebih cerah, menyamarkan bintik hitam dan bekas jerawat, 8 jam bebas kilap, meratakan warna kulit, efek kurangi minyak berlebih yang tahan lama.',
                'price' => 3250,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            63 => 
            array (
                'id' => 64,
                'brand_id' => 16,
                'name' => 'Garnier Light Complete Whitespeed Vitamin C 30X Booster Serum | Sakura White Hyaluron 30X Booster Serum 15ml - 7,5ml SACHET',
                'variation' => 'Sakura Serum 7,5ml',
                'link' => 'https://shopee.co.id/Garnier-Light-Complete-Whitespeed-Vitamin-C-30X-Booster-Serum-Sakura-White-Hyaluron-30X-Booster-Serum-15ml-7-5ml-SACHET-i.744873.4989384149?sp_atk=71734e0d-e570-4729-828d-9eafb69c892e&xptdk=71734e0d-e570-4729-828d-9eafb69c892e',
                'description' => 'Inovasi Booster Serum terbaru untuk aksi cepat cerahkan noda hitam dengan kandungan 30x Vitamin C murni dari Lemon Yuzu Jepang!

Oleskan secara merata pada wajah dan leher yang telah dibersihkan, sebelum menggunakan krim pelembab wajah di pagi & malam hari.

Tekstur serum yang ringan dan fresh mudah meresap ke lapisan kulit untuk aksi cepat cerahkan noda hitam dan samarkan bekas jerawat. Dengan pemakain rutin, rasakan kulit tampak lebih cerah bersinar dan noda hitam tersamarkan."

• Dapatkan newborn glowing skin dalam 7 hari
• Serum dengan kandungan formula pelembap tertinggi dari 30X Hyaluron
• Diperkaya dengan Ekstrak Sakura Jepang, dipetik dengan tangan dan diproses secara berkelanjutan, dikenal mampu membuat kulit tampak lebih cerah, lembut dan halus
• Tidak lengket dan cepat meresap, bekerja ke dalam lapisan kulit
• Dari penggunaan pertama, kulit terasa halus, tampak cerah dan bercahaya
• Cocok untuk semua jenis kulit, diuji secara dermatologis
• Sebaiknya digunakan di pagi dan malam hari sebelum krim pelembap.',
                'price' => 15400,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            64 => 
            array (
                'id' => 65,
                'brand_id' => 11,
                'name' => 'Wardah Lightening Facial Serum 5ml | Lightening Serum Ampoule 8ml - 1pcs satuan | Serum Ampoule 30ml',
                'variation' => 'Lightening Serum 5ml',
                'link' => 'https://shopee.co.id/Wardah-Lightening-Facial-Serum-5ml-Lightening-Serum-Ampoule-8ml-1pcs-satuan-Serum-Ampoule-30ml-i.744873.5520518796?sp_atk=56459f01-8bcc-418d-998d-c9e203d61428&xptdk=56459f01-8bcc-418d-998d-c9e203d61428',
                'description' => 'Serum dengan kandungan Vitamin B3 yang membantu mencerahkan kulit kusam dan membuat kulit tampak lebih putih, bersinar..

Cara pakai:
Oleskan secara lembut pada kulit yang telah dibersihkan, pagi dan malam hari sebelum menggunakan pelembab / cream.',
                'price' => 8500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            65 => 
            array (
                'id' => 66,
                'brand_id' => 21,
                'name' => 'Avoskin Your Skin Bae Serum Toner | YSB',
                'variation' => 'MarineCollagen SERUM',
                'link' => 'https://shopee.co.id/Avoskin-Your-Skin-Bae-Serum-Toner-YSB-i.744873.5771779996?sp_atk=77cc2677-b926-43b1-9311-4e910fc14f4f&xptdk=77cc2677-b926-43b1-9311-4e910fc14f4f',
                'description' => 'Kalau kamu memiliki kulit kering dan bekas jerawat yang membandel berbentuk scar, serum yang satu ini sangat cocok untukmu. Serum khusus dengan kandungan Marine Collagen 10% dan Ginseng Root ini berfungsi optimal untuk membantu memperbaiki tekstur kulit dengan menjaga kelembapan kulit secara optimal. Kandungan ginseng root yang kuat ini akan berfungsi sebagai antioksidan dan mengurangi inflamasi pada kulit.',
                'price' => 111200,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:01',
                'updated_at' => '2022-06-27 15:29:01',
            ),
            66 => 
            array (
                'id' => 67,
                'brand_id' => 12,
                'name' => 'NPURE Primer Serum',
                'variation' => 'Primer Serum 15ml',
                'link' => 'https://shopee.co.id/NPURE-Cica-Face-Wash-Face-Toner-Essence-Primer-Serum-Day-Cream-Night-Cream-Acne-Spot-Sunscreen-Acne-Pad-Mask-N\'Pure-Cica-Series-Anti-Acne-Anti-Jerawat-i.744873.15438843752?sp_atk=9359c203-4646-47db-bf21-fb41a5e3f54d&xptdk=9359c203-4646-47db-bf21-fb41a5e3f54d',
                'description' => 'Serum pertama yang MULTIFUNGSI sebagai primer makeup sekaligus. Jadi tidak hanya menyehatkan wajah tapi juga berfungsi untuk membuat makeup lebih tahan lama dan menyamarkan pori-pori yang besar.
',
                'price' => 108000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            67 => 
            array (
                'id' => 68,
                'brand_id' => 47,
                'name' => 'IMPLORA Face Serum | Serum Wajah Acne',
                'variation' => 'Acne Serum',
                'link' => 'https://shopee.co.id/IMPLORA-Face-Serum-24K-Gold-Serum-Serum-Wajah-Acne-Brightening-Peeling-Midnight-Serum-BPOM-Skin-Care-Skincare-tntbeautyshop-TnT-Beauty-Shop-i.744873.4896366227?sp_atk=7700e4ba-8751-4568-af77-4c19ca452a23&xptdk=7700e4ba-8751-4568-af77-4c19ca452a23',
                'description' => 'Implora Acne Serum membantu untuk meminimalkan munculnya jerawat, menyamarkan pori-pori wajah, mengurangi ruam, serta membantu memperbaiki kulit rusak akibat jerawat dengan penggunaan secara teratur.
- Direkomendasikan untuk kulit berminyak dan berjerawat
- Penggunaan pada pagi dan malam hari
- Mengandung : Salicylic Acid, Agaricon Jeju Centella Asiatica Aloe Vera Extract',
                'price' => 22800,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            68 => 
            array (
                'id' => 69,
                'brand_id' => 26,
                'name' => 'Madame Gie Skin Barrier Serum - Skincare',
                'variation' => 'Serum 20ml',
                'link' => 'https://shopee.co.id/Madame-Gie-Skin-Barrier-Serum-Skincare-i.744873.15719246633?sp_atk=07ec184a-83d9-4ac8-8a5a-c1bec4f08130&xptdk=07ec184a-83d9-4ac8-8a5a-c1bec4f08130',
                'description' => 'Madame Gie Skin Barrier membantu menenangkan dan memperkuat jaringan permukaan kulit. Diformulasikan dengan Ceramide NP, Glycerin, Allantoin, Betaine, dan juga dilengkapi oleh Bakuchi Extract serta Caffeine. Aman dikombinasikan dengan ingredient atau bahan aktif lain.

Manfaat :
Meningkatkan dan mempertahankan hidrasi pada lapisan kulit
Menenangkan kulit dan memiliki efek anti inflamasi
Meningkatkan produksi kolagen, sehingga membuat kulit wajah tetap kencang dan tampak awet muda
Mengangkat sel kulit mati serta kotoran pada wajah sehingga kulit tampak cerah dan halus

*Aman untuk ibu hamil
*Bisa digunakan untuk kulit remaja
*Bisa dipakai semua jenis kulit',
                'price' => 30500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            69 => 
            array (
                'id' => 70,
                'brand_id' => 17,
                'name' => 'Y.O.U Biomecera Advanced Booster Serum - Ceramide Skin Barrier Repair - YOU Serum Wajah',
                'variation' => 'Booster Serum',
                'link' => 'https://shopee.co.id/Y.O.U-Biomecera-Advanced-Booster-Serum-Ceramide-Skin-Barrier-Repair-YOU-Serum-Wajah-i.744873.17521965409?sp_atk=ad6833f9-e675-4340-9dd1-615d975dc5d2&xptdk=ad6833f9-e675-4340-9dd1-615d975dc5d2',
                'description' => 'Booster serum dengan teknologi Biomecera™ terdiri dari Ceramides, Probiotics, dan Tulsi untuk membantu menyeimbangkan mikrobioma, meremajakan kulit, dan memperkuat sistem perlindungan kulit. Kulit menjadi terhidrasi, lembut, dan tampak bercahaya.

SELLING POINT & BENEFIT :
1. Strengthen Skin Barrier : Advanced SK-INFLUX® terdiri dari Ceramides yang membantu mengikat sel-sel kulit untuk menjaga sistem perlindungan kulit agar tetap sehat.
2. Stimulate & Reactivate : Teknologi skin-activating yang didalamnya terdapat Tulsi membantu menetralisasi radikal bebas dan meremajakan kulit untuk kulit muda bercahaya.
3. Balance Microbiome : Repair Complex CLR™PF (Bifida Ferment Lysate) membantu menyediakan lingkungan yang nyaman untuk bakteri baik di permukaan kulit.

SPECIAL INGREDIENTS:
-	Biomecera™: Teknologi skin-activating yang didalamnya terdapat SK-INFLUX®, Repair Complex CLR™PF, dan Tulsi yang membantu menjaga sistem perlindungan kulit, menetralisasi radikal bebas, dan meremajakan kulit.
-	SK-INFLUX®(Ceramide): Konsentrat lipid (identik dengan yang terdapat di kulit) dibuat dengan teknologi canggih oleh Evonik dari Jerman untuk membantu meningkatkan kelembapan dan mengembalikan fungsi perlindungan kulit.
-	Repair Complex CLR™PF (Probiotics; Bifida Ferment Lysate): Bifidobacterium Lysate yang membantu melindungi kulit dari kerusakan akibat sinar UV dan meningkatkan perbaikan sel untuk melawan penuaan kulit dini, yaitu photoaging.
-	Tulsi (Holy Basil; Ocimum Sanctum Leaf Extract): Juga dikenal sebagai Holy Basil, Tulsi merupakan herbal yang memiliki sifat antioksidan dan antiinflamasi.

Cara Pemakaian: Aplikasikan pada wajah dan leher yang telah dibersihkan. Pijat lembut dengan gerakan memutar. Dapat digunakan setiap hari pada pagi dan malam hari.

Full Ingredients :
Water, Methylpropanediol, Bifida Ferment Lysate, Triticum Vulgare (Wheat) Seed Extract, Propolis Extract, Octyldodecanol, Inulin Lauryl Carbamate, Polysorbate 85, Glycerin, Hydroxyethyl Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Butylene Glycol, Dimethicone, Dimethiconol, Tocopheryl Acetate, Sodium Hyaluronate, Ocimum Sanctum Leaf Extract, Glyceryl Caprylate, Sodium Lauroyl Lactylate, 1,2-Hexanediol, Hydroxyacetophenone, Olea Europaea (Olive) Fruit Oil, Ceramide NP, Ceramide AP, Phytosphingosine, Cholesterol, Xanthan Gum, Carbomer, Ceramide EOP.',
                'price' => 118900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            70 => 
            array (
                'id' => 71,
                'brand_id' => 1,
                'name' => 'Nacific Acne Cica Plus Clear Serum Skin Care 50ml - 20ml RENEW - Face Serum - Serum Wajah',
                'variation' => 'PlusClear Serum 20ml',
                'link' => 'https://shopee.co.id/Nacific-Acne-Cica-Plus-Clear-Serum-Skin-Care-50ml-20ml-RENEW-Face-Serum-Serum-Wajah-i.744873.14542520969?sp_atk=a2b2d86e-e6ab-41e4-8363-fdac57a8dc6e&xptdk=a2b2d86e-e6ab-41e4-8363-fdac57a8dc6e',
                'description' => 'Merupakan wajah baru dari Fresh Cica Plus Clear Serum yang diformulasikan khusus untuk kulit Indonesia.

Acne Cica Plus Clear Serum dapat digunakan untuk semua jenis kulit terutama kulit sensitif dan acne prone skin yang berfungsi untuk meredakan kemerahan juga kulit yang teriritasi.

Key Points:
Mengandung 7 macam Cica Complex untuk menenangkan kemerahan dan melembapkan kulit tanpa membuat kulit terasa lengket
Water Holding System mampu mempertahankan kelembapan sampai lapisan kulit terdalam serta membant mengatasi masalah kulit sensitif dan berjerawat
8-FREE (Paraben, Alcohol, Mineral Oil, Fragrance,  SLS, PEG, Silicone, EU Allergen)

Cara Penggunaan️
1. Setelah cuci muka dengan bersih, aplikasikan toner terlebih dahulu
2. Ambil serum dengan pipet, teteskan di kedua pipi dan dahi, lalu usapkan dengan lembut
3. Tepuk-tepuk wajah dengan ringan agar serum menyerap',
                'price' => 141200,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            71 => 
            array (
                'id' => 72,
                'brand_id' => 8,
                'name' => 'Elsheskin Hydracare Calming Serum 30ml - 15ml',
                'variation' => 'Hydracare Serum 15ml',
                'link' => 'https://shopee.co.id/Elsheskin-Hydracare-Calming-Serum-30ml-15ml-i.744873.15359169637?sp_atk=715730cd-6016-4dc3-843a-7326a2690521&xptdk=715730cd-6016-4dc3-843a-7326a2690521',
                'description' => 'Untuk kulit dengan masalah:
- Kerusakan pada skin barrier
- Mengelupas
- Kering
- Iritasi, infeksi, terbakar akibat sinar matahari, dan rosacea 
- Sensitif dan kulit yang bereaksi akibat faktor eksternal

Manfaat:
72 jam memberikan kelembaban maksimal pada kulit, memperkuat dan menyehatkan skin barrier 

Komposisi:
1. Mutiara hitam 18 asam amino - Protein Conchiolin Terhidrolisis
2. Filtrat fermentasi galactomyces
3. Protein royal jelly terhidrolisis
4. 1% N-Ag + 2% Niacinamide (kombinasi unggul)
5. Ceramide
6. Resveratrol
7. Skizophyllan
8. Rice bran oil (minyak dedak padi)',
                'price' => 81750,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            72 => 
            array (
                'id' => 73,
                'brand_id' => 8,
                'name' => 'Elsheskin Radiant Supple Serum 30ml - 15ml',
                'variation' => 'Supple Serum 15ml',
                'link' => 'https://shopee.co.id/Elsheskin-Radiant-Supple-Serum-30ml-15ml-i.744873.16916342936?sp_atk=415ff786-3047-4694-9852-08c18d052aef&xptdk=415ff786-3047-4694-9852-08c18d052aef',
                'description' => 'Untuk Masalah kulit:
Warna Kulit Tidak Merata
Hiperpigmentasi
Kulit Kusam

Keuntungan :
80% Kulit Sensitif Terasa Lebih Cerah*
0% Iritasi*

*Berdasarkan riset panel internal

Bahan-bahan :
Ekstrak Mulberry Putih
Annona Cherimola (Sirsak)
Centella Asiatica
arbutin
Niasinamida
Asam traneksamat
Bisabolol
Ekstrak akar manis
Isomerat Sakarida
Clair Blanche II TM',
                'price' => 96750,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            73 => 
            array (
                'id' => 74,
                'brand_id' => 12,
                'name' => 'Npure Face Serum Marigold 15ml - N\'Pure Marigold - Anti Aging Face Serum - Serum Wajah',
                'variation' => 'Face Serum 15ml',
                'link' => 'https://shopee.co.id/Npure-Face-Serum-Marigold-15ml-N\'Pure-Marigold-Anti-Aging-Face-Serum-Serum-Wajah-i.744873.14239878754?sp_atk=c7c6c71f-a799-42e6-99dd-fab28ca30280&xptdk=c7c6c71f-a799-42e6-99dd-fab28ca30280',
            'description' => 'Bunga Marigold ternyata sangat bagus untuk kebutuhan kulit wajah. Karena itu, Npure terinspirasi untuk membuat serum dengan bahan dasar Bunga Marigold (Calendulanya Indonesia). Serum ini juga mengandung Algae Extract, Gold, Hyaluronic Acid, Collagen dan Niacinamide, yang sangat bagus untuk mencerahkan, menghidrasi kulit, mencegah dan mencegah penuaan dini (awet muda). (BRIGHTEN, MOIST, ANTI AGING)

Manfaat lainnya:
· Membuat warna kulit tampak lebih merata dan tampak cerah
· Membuat tekstur kulit terasa lebih halus & lembut, mengurangi kulit kusam.
· Melembabkan dan menghidrasi kulit.
· Mencegah dan menyamarkan kerutan, garis halus, noda hitam.
· Untuk semua jenis kulit

Kandungan Npure Marigold Anti-Aging Serum :
· Extract Kelopak Bunga Marigold (Calendulanya Indonesia); mengandung Karotenoid. yakni sebuah pikmen organik yang terdapat dalam tumbuhan. Pigmen ini berperan sebagai antioksidan. Tak hanya itu, mengandung Trans-lutein yang memiliki fungsi anti penuaan dini (antiaging) karena terpapar radiasi sinar UVB matahari. Melawan radikal bebas dan juga melembabkan kulit
· Algae Extract (Laminaria Digitata); ganggang cokelat yang dapat membantu memulihkan respirasi sel kulit, meningkatkan konsumsi oksigen, serta mengandung antioksidan yang mengisi sel dengan energi untuk membantu memperlambat munculnya tanda-tanda penuaan
· Gold ; menyamarkan kerutan, garis halus, & noda hitam, menstimulasi pertumbuhan sel kulit, mencegah penuaan dini.
· Collagen ; Seiring dengan bertambahnya usia, produksi kolagen di dalam tubuh juga akan semakin berkurang, padahal kolagen sangat diperlukan untuk tubuh kita. Collagen berfungsi untuk mengencangkan kulit, mencerahkan kulit, mengurangi keriput dan garis halus.
· Vitamin B3 / Niacinamide ; Menghidrasi kulit, memperlambat proses perpindahan melanin pada epidermis akibat sinar UV, sehingga resiko pembentukan hiperpigmentasi pun akan berkurang. Meningkatkan produksikolagen dan elastisitas pada kulit. Permukaan dan tekstur kulit menjadi lebih halus, garis halus dan keriput di kulit wajah pun menjadi tersamarkan.
· Hyaluronic Acid ; Salah satu ingredient terfavorit karena mempunyai banyak manfaat pada kulit, yaitu menghidrasi kulit, mengurangi kerutan wajah, sehingga mempertahakan wajah kita menjadi awet muda.

Petunjuk Penggunaan Npure Marigold Anti-Aging Serum
Bersihkan wajah Anda dengan pembersih dan bilas dengan air bersih.
Gunakan serum ini di beberapa titik kulit wajah yang Anda inginkan atau secara menyeluruh. Lakukan pada pagi dan malam hari sebelum menggunakan moisturizer / pelembab.
Bisa juga digunakan pada bagian tangan, dan leher.

KelebihanNpure Marigold Anti Aging Serum:
- PARABEN FREE, Bebas Paraben sehingga aman untuk ibu hamil dan menyusui
- SLS FREE (Sodium Lauryl Sulfate), Bebas SLS sehingga tidak menimbulkan iritasi atau membuat kulit tambah kering
- MINERAL OIL FREE, Bebas Mineral Oil yaitu bahan berbahaya yg bersifat Karsinogen (pemicu kanker).',
                'price' => 179100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            74 => 
            array (
                'id' => 75,
                'brand_id' => 6,
                'name' => 'Mineral Botanica Ceramide Serum 20ml',
                'variation' => 'Ceramide Serum',
                'link' => 'https://shopee.co.id/Mineral-Botanica-Ceramide-Serum-20ml-i.744873.12842394647?sp_atk=8294a664-0be4-49f5-bcee-529d6e118980&xptdk=8294a664-0be4-49f5-bcee-529d6e118980',
                'description' => 'Dengan pemakaian teratur, Ceramide Serum dapat membantu menstimulasi pertumbuhan sel kulit baru sehingga kulit akan terlihat lebih kencang, lembap, halus, lebih cerah dan garis-garis halus di wajah lebih tersamarkan dari sebelumnya. Teksturnya kental tapi mudah meresap. Tentunya juga dapat menenangkan masalah kulit, mencegah jerawat, dan sangat cocok untuk kulit sensitif.

Komposisi:
Vitamin A, Glycerin, Saccharide Isomerate, Vigna Aconitifolia Seed Extract, Centella Asiatica Leaf Extract, Ceramide NP, Allantoin, Citric Acid.',
                'price' => 109850,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            75 => 
            array (
                'id' => 76,
                'brand_id' => 6,
                'name' => 'Mineral Botanica Advanced Acne Care Perfect Purifying Face Oil 20ml',
                'variation' => 'Adv Acne Serum  20ml',
                'link' => 'https://shopee.co.id/Mineral-Botanica-Advanced-Acne-Care-Perfect-Purifying-Face-Oil-20ml-i.744873.12742446675?sp_atk=fd609d19-0e91-4d5a-bf2b-0fe3f2e362fa&xptdk=fd609d19-0e91-4d5a-bf2b-0fe3f2e362fa',
                'description' => 'Advanced Acne Care Perfect Purifying Face Oil merupakan serum dengan campuran bahan alami yang mampu melembapkan kulit, mengurangi jerawat, menghilangkan noda bekas jerawat, dan mencegah jerawat baru muncul. Bertekstur agak kental yang mudah menyerap dan melindungi kulit wajah secara sempurna.

Selain itu, ada keunggulan lain dari Serum Face Oil:
- Menenangkan kulit kemerahan
- Menghaluskan kulit
- Membantu kulit lebih berkilau
- Memperlambatan timbulnya tanda penuaan dini
- Menjaga kekencangan kulit
- Antioksidan

Cara Penggunaan:
Pakai di pagi hari setelah rangkaian Serum Perfect Purifying dan juga sebagai overnight face oil.

Komposisi:
Macadamia Oil, Tamanu Oil, Almond Oil, Lavender Oil, Tea Tree Oil, Neem Oil, Rosemary Oil, Tocopheryl Acetate, Bisabolol, Squalane.',
                'price' => 101100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            76 => 
            array (
                'id' => 77,
                'brand_id' => 49,
                'name' => 'Precious Skin Alpha Arbutin 3Plus Glow & Shine Collagen Face Serum - 50ml',
                'variation' => '3+ Collagen Serum',
                'link' => 'https://shopee.co.id/Precious-Skin-Alpha-Arbutin-3Plus-Glow-Shine-Collagen-Face-Serum-50ml-i.744873.14232578580?sp_atk=b78fa155-1939-4fb6-9223-a3c396c03319&xptdk=b78fa155-1939-4fb6-9223-a3c396c03319',
                'description' => 'Serum Spesial buat wajah yang super aman dengan pure 3x Alpha arbutin dan Collagen Peptiside
Serum yang memiliki tekstur lembut superrrrbbb aman buat muka.. teksturnya gak bikin keset

Manfaat :
- Mengurangi bintik-bintik gelap, bintik-bintik mendalam diwajah dengan ekstrak Alpha-Arbutin dari alam untuk sepenuhnya melayani kulit. Peremajaan kulit Memutihkan kulit. Peremajaan dan pembaruan kulit. Membuat pelindung kulit. Memberikan kulit bercahaya alami.
-Menghilangkan bintik-bintik keriput dan bintik hitam
-Pemutih kulit baru bening
-Mencerahkan sel-sel kulit
-Membuat kulit putih dan halus
-Peremajaan dan pembaruan kulit

CARA PENGGUNAAN 
Teteskan 1 sampe 3 tetes di bagian muka lalu oles dan ratakan secara keseluruhan hindari bagian mati
dipakai sebelum pemakaian cream muka.. di anjurakan dipake di pagi dan malam',
                'price' => 65000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            77 => 
            array (
                'id' => 78,
                'brand_id' => 6,
                'name' => 'Mineral Botanica First Defense Serum 20ml',
                'variation' => 'Defense Serum 20ml',
                'link' => 'https://shopee.co.id/Mineral-Botanica-First-Defense-Serum-20ml-i.744873.13142421999?sp_atk=dac9de58-6647-4038-a806-8a84148356a4&xptdk=dac9de58-6647-4038-a806-8a84148356a4',
                'description' => 'First Defense Serum mampu membuat kulit terlihat lebih cerah, bercahaya dan berseri. Serum ini diformulasikan dengan ekstrak Adansonia, Vitamin C sebagai antioksidan, dan Collagen. Mempunyai daya serap yang cepat, serta aman untuk digunakan sebagai serum harianmu.

Cara Penggunaan:
- Pastikan wajahmu telah dibersihkan.
- Tuangkan serum ke telapak tangan lalu oleskan secara merata pada wajah.
- Tepuk-tepuk halus agar serum mudah meresap.',
                'price' => 84350,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            78 => 
            array (
                'id' => 79,
                'brand_id' => 24,
                'name' => 'SYB Face Serum Vitamin C 20gr - Face Serum - Serum Wajah',
                'variation' => 'Vitamin C Serum',
                'link' => 'https://shopee.co.id/SYB-Face-Serum-Vitamin-C-20gr-Face-Serum-Serum-Wajah-i.744873.14901341919?sp_atk=ca9648ed-50a4-4619-9bf6-6a24efa2be53&xptdk=ca9648ed-50a4-4619-9bf6-6a24efa2be53',
                'description' => 'SYB FORTE SERUM VITAMIN C dengan kandungan vitamin C sebagai anti oxidant untuk membuat kulit tampak lebih cerah dan menyamarkan noda hitam pada kulit. Mengandung humectant untuk menjaga kelembaban kulit. Hasil akhir adalah kulit tampak lebih bersih, halus, dan terawat
100% Aman untuk kulitmu karena ada BPOM dan sudah CPKB ya!',
                'price' => 9700,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            79 => 
            array (
                'id' => 80,
                'brand_id' => 50,
                'name' => 'BARU! Emina Natura Pal Splash Serum - 40ml',
                'variation' => 'Splash Serum 40ml',
                'link' => 'https://shopee.co.id/BARU!-Emina-Natura-Pal-Splash-Serum-40ml-i.744873.11877822866?sp_atk=3a2ffb6d-5511-4460-95e6-fe08937f7ec6&xptdk=3a2ffb6d-5511-4460-95e6-fe08937f7ec6',
            'description' => 'Jaga elastisitas kulitmu dengan Emina Natura Pal Splash! Serum dengan 100% Natural Pea Extract dan Triple Protection+ bekerja intensif, menutrisi dan melindungi kulit dari efek buruk radikal bebas yang muncul akibat paparan berlebih sinar UV (baik di dalam maupun di luar ruangan) serta polusi debu. Elastisitas kulit terjaga, kulit jadi glowing dan supple!

Menutrisi dan menjaga elastisitas kulit sehingga tampak glowing dan supple
Tekstur ringan seperti air. Tidak lengket dan tidak terasa berminyak. Cepat meresap.

Dont worry to get in troubles!
Cocok digunakan untuk semua jenis kulit.

Hypoallergenic - Dermatologically tested - Non-comedogenic - Non-acnegenic - 0% alcohol - 0% additional color

Serta dikemas dengan packaging yang 10% less plastic* & 100% recyclable**.

Cara Pakai :
Tuang serum secukupnya 
Oleskan dan tepuk lembut pada wajah yang telah dibersihkan.
Dapat digunakan setiap hari pada pagi dan malam.

Penggunaan rangkaian produk Natura Pal Series secara lengkap dan rutin akan memberikan hasil yang lebih optimal.

RANGKAIAN PAGI & MALAM
1. Natura Pal Gel Cleanser
2. Natura Pal Toner Essence
3. Natura Pal Splash Serum
4. Natura Pal Gel Moisturizer',
                'price' => 58500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            80 => 
            array (
                'id' => 81,
                'brand_id' => 4,
                'name' => 'GLOWINC POTION HYDRALIVE+ Moisture Lock Serum',
                'variation' => 'HYDRALIVE+ Serum',
                'link' => 'https://shopee.co.id/GLOWINC-POTION-HYDRALIVE-Moisture-Lock-Serum-i.744873.11846635403?sp_atk=725e453f-4c70-4053-8fa2-f85a91c462ed&xptdk=725e453f-4c70-4053-8fa2-f85a91c462ed',
                'description' => 'Serum wajah untuk kulit kering & dehidrasi. Berfungsi menjaga kelembapan kulit & membantu menjaga skin barrier Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Teteskan 3 tetes serum ke telapak tangan.
Usap perlahan & merata ke wajah kemudian lanjutkan ke step #No.4 yaitu pelembap. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
8 Layer HA
Triple ceramide
Cucumber
Rice water',
                'price' => 71100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            81 => 
            array (
                'id' => 82,
                'brand_id' => 4,
                'name' => 'GLOWINC POTION FOREVER+ Pro Youth Serum',
                'variation' => 'FOREVER+ Serum',
                'link' => 'https://shopee.co.id/GLOWINC-POTION-FOREVER-Pro-Youth-Serum-i.744873.13205949449?sp_atk=4b75be50-2a77-4329-b4c8-2643f9060bc8&xptdk=4b75be50-2a77-4329-b4c8-2643f9060bc8',
                'description' => 'Serum wajah yang bersifat anti-aging, dapat membantu menyamarkan garis kerutan halus & membantu memperkuat skin barrier. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Teteskan 3 tetes serum ke telapak tangan.
Usap perlahan & merata ke wajah kemudian lanjutkan ke step #No.4 yaitu pelembap. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Acetyl hexapeptide-8
Bakuchiol
4 Layer HA
Triple ceramide',
                'price' => 80100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            82 => 
            array (
                'id' => 83,
                'brand_id' => 6,
                'name' => 'Mineral Botanica Perfect Purifying Face Serum 20ml',
                'variation' => 'Acne Serum 20ml',
                'link' => 'https://shopee.co.id/Mineral-Botanica-Perfect-Purifying-Face-Serum-20ml-i.744873.12842441223?sp_atk=d92900d4-c060-4a20-ba80-859cf4a18e54&xptdk=d92900d4-c060-4a20-ba80-859cf4a18e54',
                'description' => 'Perfect Purifying Face Serum memiliki formula yang cepat menyerap ke permukaan kulit. Kandungan acne booster-nya dapat membantu merawat kulit berjerawat, menyamarkan bekas jerawat, membantu mengurangi kemerahan akibat iritasi ringan. Dengan pemakaian teratur, kulit akan terlihat lebih kencang dan cerah berseri.

Mineral Botanica Perfect Purifying Face Serum 20ML
The New Face of Acne Care Face Serum. Mineral Botanica Perfect Purifying Face Serum. Formulanya cepat menyerap ke permukaan kulit. Kandungan acne busternya dapat membantu merawat kulit berjerawat, menyamarkan bekas jerawat, membantu mengurangi kemerahan akibat iritasi ringan.
Netto : 20ml
Formula : cairan kental 
Tekstur : agak kental tapi mudah meresap',
                'price' => 86100,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            83 => 
            array (
                'id' => 84,
                'brand_id' => 14,
            'name' => 'Whitelab Natural Moisturizing Factor (NMF) Serum -  White Lab NMF Serum 20ml',
                'variation' => 'Moisturizing Serum',
            'link' => 'https://shopee.co.id/Whitelab-Natural-Moisturizing-Factor-(NMF)-Serum-White-Lab-NMF-Serum-20ml-i.744873.11276669927?sp_atk=3324e16f-8e32-41a7-b419-8b057a4a01d4&xptdk=3324e16f-8e32-41a7-b419-8b057a4a01d4',
                'description' => 'Whitelab Natural Moisturizing Factor Serum dengan kandungan NMF, Ceramide-4, HyaluComplex-10, dan Marine Collagen meningkatkan level hidrasi dan kelembaban alami kulit wajah sehingga kulit tampak sehat berseri dan terasa kenyal.

Powerful Ingredients:
- NMF yang merupakan kompleks essentials bahan-bahan pelembab alami kulit berfungsi menggantikan dan melengkapi kembali kandungan yang hilang, melembabkan, merawat kekenyalan dan kelembutan kulit wajah.
- Ceramide-4 yang terdiri dari 4 jenis esensial Ceramide tubuh (Ceramide I, III, VI, Ceramide Prekursor) melengkapi kembali komponen lipid dan meningkatkan fungsi barrier wajah, , mencegah Transepidermal Water Loss (TEWL), mengurangi tanda-tanda sensitivitas kulit, meningkatkan kelembaban dan mempertahankan hidrasi kulit wajah.
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.

NMF serum cocok untuk kulit dehidrasi dan terlihat lelah, kulit kering, kasar, kusam, mengelupas dan bersisik, kulit dengan skin barrier yang rusak.

Fungsi:
- Meningkatkan kelembaban alami dan level hidrasi kulit wajah
- Membuat kulit tampak sehat berseri
- Merawat kekenyalan kulit wajah
- Mencegah kekeringan dan iritasi pada kulit wajah
- Merawat kehalusan dan kelembutan kulit wajah
- Merawat dan meningkatkan fungsi skin barrier wajah.

Cara pakai : Tuangkan 2-4 tetes Whitelab Natural Moisturizing Factor Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.

Produk ini menggunakan pewarna alami, perubahan warna tidak merubah manfaat dan keamanan dari produk.',
                'price' => 76000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            84 => 
            array (
                'id' => 85,
                'brand_id' => 51,
                'name' => 'La Roche Posay Hyalu B5 Anti-Aging Serum 3ml- Serum Hyaluronic Acid Kulit Sensitif/ Kering/ Kerutan - LaRoche Posay',
                'variation' => 'Hyalu B5 Serum 3ml',
                'link' => 'https://shopee.co.id/La-Roche-Posay-Hyalu-B5-Anti-Aging-Serum-3ml-Serum-Hyaluronic-Acid-Kulit-Sensitif-Kering-Kerutan-LaRoche-Posay-i.744873.12719677389?sp_atk=a22bd2b3-4b88-421c-8b32-fa05e925ea72&xptdk=a22bd2b3-4b88-421c-8b32-fa05e925ea72',
                'description' => 'Anti-aging Hyaluronic Acid Serum yang merawat kekencangan kulit dan kekenyalan kulit serta membantu menyamarkan tampilan garis halus dan kerutan. Kulit tampak lebih muda, terasa kenyal, dan tetap sehat berseri. Cocok untuk semua jenis kulit.

CARA PAKAI: 
Gunakan pada pagi dan malam hari untuk wajah dan leher.

TEKSTUR SERUM RINGAN:
- Cepat meresap
- Melembapkan
- Menyegarkan

KEY INGREDIENTS:
- Vitamin B5: Membantu regenerasi dan menjaga pertahanan kulit.
- Hyaluronic Acid: Menyamarkan kerutan dan merawat kekencangan kulit.
- Thermal Water: Melindungi dan menenangkan kulit sensitif, mudah iritasi dan kemerahan.

Diuji dibawah pengawasan dermatologist dan ophthalmologist, Non comedogenic, Allergy tested, Cocok untuk mata sensitif.

Made in France',
                'price' => 38000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:02',
                'updated_at' => '2022-06-27 15:29:02',
            ),
            85 => 
            array (
                'id' => 86,
                'brand_id' => 20,
                'name' => 'HANASUI Intense Treatment Serum Rich Nutrition',
                'variation' => 'Rich Nutrition Serum',
                'link' => 'https://shopee.co.id/HANASUI-Intense-Treatment-Serum-Rich-Nutrition-i.744873.10639314396?sp_atk=1a099813-1e86-433d-ae72-493609b1b3e4&xptdk=1a099813-1e86-433d-ae72-493609b1b3e4',
                'description' => 'HANASUI Intense Treatment Serum Rich Nutrition

* Boost Collagen
* Skin Revitalize
* Increase Skin Elasticity

Serum Antioksidan dengan Panax Ginseng Root Extract yang membantu mengurangi tanda-tanda penuaan seperti munculnya keriput dan garis halus pada wajah. Dengan kombinasi sempurna dari Vitamin B6. Vitamin E dan Schizophyllan membantu merevitalisasi kulit wajah dan membuatnya lebih segar. Mengandung Sodium Hyaluronate yang melembapkan kulit juga membantu dan menjaga elastisitasnya, membuatnya tetap sehat dan tampak lebih muda.

Cara Pakai :
Bersihkan Wajah, teteskan cairan serum ke telapak tangan dan usapkan ke seluruh permukaan kulit wajah dengan cara ditepuk secara merata. Untuk hasil maksimal gunakan setiap hari secara teratur pagi dan malam.',
                'price' => 48450,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            86 => 
            array (
                'id' => 87,
                'brand_id' => 11,
                'name' => 'Wardah Crystallure Supreme Revitalizing Rich Cream - Revitalizing Oil Serum - Activating Booster Essence - Advanced Hydra Gel - Advanced Eye Serum',
                'variation' => 'Oil Serum 30ml',
                'link' => 'https://shopee.co.id/Wardah-Crystallure-Supreme-Revitalizing-Rich-Cream-Revitalizing-Oil-Serum-Activating-Booster-Essence-Advanced-Hydra-Gel-Advanced-Eye-Serum-i.744873.10056534379?sp_atk=fe07261e-e27a-40e2-8639-71a74b1d2673&xptdk=fe07261e-e27a-40e2-8639-71a74b1d2673',
            'description' => 'Lebih dari sekedar serum, Crystallure Supreme Revitalizing Oil Serum memberikan nutrisi ekstra peremajaan untuk wajah tampak lebih muda bercahaya di setiap tetes nya. Perpaduan 7 Botanical Oil yang berharga (Seaweed, Macadamia, Calendula, Chamomile, Wheat, Avocado, and Jojoba), dipilih karena kemampuan melembabkan dan kaya akan nutrisi untuk kulit. Serum ini juga mengandung Gold-Peptide Crystals dan YouthGlow Actives yang diketahui dapat menyamarkan kerutan dan menjaga elastisitas kulit.',
                'price' => 185900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            87 => 
            array (
                'id' => 88,
                'brand_id' => 17,
                'name' => 'Y.O.U AcnePlus Complete Solution Serum 20ml - YOU',
                'variation' => 'Solution Serum 20ml',
                'link' => 'https://shopee.co.id/Y.O.U-AcnePlus-Complete-Solution-Serum-20ml-YOU-i.744873.15904647785?sp_atk=ded463d5-5ab6-4e63-b6e9-2c3b907925fc&xptdk=ded463d5-5ab6-4e63-b6e9-2c3b907925fc',
                'description' => 'Serum yang mengandung Centella Asiatica dan Herbal Fusion Actives yang membantu meredakan inflamasi, menyamarkan noda, dan meningkatkan pertahanan kulit untuk mencegah munculnya jerawat baru.

• PH-Balanced Formula
Formula serum dengan pH rendah yang menyesuaikan dengan kondisi alami kulit (pH4-5.5), sehingga menjaga kulit tetap sehat dan terhindar dari bakteri penyebab jerawat.
• Liquid Gel Texture
Formula gel cair yang menenangkan dan mudah menyerap untuk nutrisi yang mendalam.
• Enriched with Vit A, B5, C, E
Diperkaya dengan berbagai vitamin yang menutrisi kulit secara menyeluruh.

Ingredients utama dan manfaat :
- Centella Asiatica Extract: Menenangkan kulit, meredakan peradangan, dan anti-bakteri.
- Aloe Barbadensis Leaf Juice (Aloe vera): Menenangkan kulit, membantu menyamarkan bekas luka, dan sebagai pelembap
- Sodium Hyaluronate: Membantu mengembalikan kelembapan dan melembutkan kulit.
- Retinyl Palmitate (Vitamin A): Membantu regenerasi sel-sel kulit dan meningkatkan produksi kolagen kulit.
- Panthenol, 3-o-Ethyl Ascorbic Acid, Tocopherol: Vitamin B5, Vitamin C, dan Vitamin E yang menutrisi kulit.

Cara Pemakaian: 
Aplikasikan 1-2 tetes pada wajah yang bersih setelah pemakaian toner. Pijat dengan lembut untuk mendorong penyerapan formula. 
Untuk hasil yang optimal, gunakan rangkaian perawatan wajah AcnePlus secara teratur.

Full Ingredients:
Water, Aloe Barbadensis Leaf Juice, Glycerin, Propanediol, Laurocapram, Centella Asiatica Extract, Butylene Glycol, PEG-60 Hydrogenated Castor Oil, Hydroxyacetophenone, Carbomer, Triethanolamine, Niacinamide, o-Cymen-5-Ol, Caprylhydroxamic Acid, Polyacrylamide, C13-14 Isoparaffin, Acrylates/C12-22 Alkyl Methacrylate Copolymer, Disodium EDTA, Mentha Arvensis Leaf Oil, Sodium Hyaluronate, Panthenol, Ethylhexylglycerin, Biosaccharide Gum-1, Laureth-7, 3-o-Ethyl Ascorbic Acid, Lactic Acid, Retinyl Palmitate, Quaternium-73, Tocopherol.',
                'price' => 63900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            88 => 
            array (
                'id' => 89,
                'brand_id' => 15,
                'name' => 'Some By Mi Aha Bha Pha 30 Days Miracle Serum Light',
                'variation' => 'Miracle Serum Light',
                'link' => 'https://shopee.co.id/Some-By-Mi-Aha-Bha-Pha-30-Days-Miracle-Serum-Light-i.744873.8282071806?sp_atk=4770bd12-4230-4029-b717-6f943156bd5e&xptdk=4770bd12-4230-4029-b717-6f943156bd5e',
                'description' => 'Manfaat:
- Menenangkan kulit
- Memperbaiki sebum, sel kulit mati
- Warna kulit merata dan cerah

Recommended
- Untuk kulit bermasalah
- Kulit berminyak
- Saat kulit butuh ketenangan
- Dehidrasi berminyak, kulit berminyak

Teatree, Centella Asiatica, Mugwort, Ekstrak titrasi Centella Asiatica, dan bahkan Houttuynia cordata!
- Menenangkan kulit yang marah
- Melindungi kulit yang teriritasi
- Memperkuat penghalang kulit
- Perawatan stres kulit
*Informasi di atas terbatas pada karakteristik bahan baku

Cara Penggunaan
Setelah menggunakan toner, oleskan jumlah yang sesuai dan oleskan dengan lembut ke seluruh wajah. Tepuk-tepuk ringan sampai meresap.',
                'price' => 142000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            89 => 
            array (
                'id' => 90,
                'brand_id' => 22,
                'name' => 'SOMETHINC Holyshield! Sunscreen Comfort Corrector Serum SPF 50+ PA++++',
                'variation' => 'Holyshield Serum 5ml',
                'link' => 'https://shopee.co.id/SOMETHINC-Holyshield!-Sunscreen-Comfort-Corrector-Serum-SPF-50-PA--i.744873.13151077879?sp_atk=a1014707-1b65-4fe7-bfb9-6bbdcd43cd7c&xptdk=a1014707-1b65-4fe7-bfb9-6bbdcd43cd7c',
                'description' => 'Multitask Sunscreen SPF 50+ PA++++ melindungi kulit dari UVA & UVB, serta berfungsi sebagai color corrector yang menjadikan warna kulit tampak lebih merata & cerah. Bertekstur ringan sehingga cepat menyerap, tidak lengket, & memberikan Satin skin-like finish. Bersifat antioksidan & efektif menyamarkan kemerahan karena dikombinasikan dari bahan alami yang cocok untuk kulit sensitif seperti Natural Alpha-Bisabolol, Multi Vitamin & Horse Chestnut Seed Extracts. 
Jenis kulit: Semua jenis kulit
Kelebihan:
SPF 50+ PA++++ (semakin banyak tanda plus pada PA, semakin tinggi tingkat proteksi kulit dari UVA)
Tidak membuat kulit kusam
Non sticky, non greasy, & non peeling!
Satin skin finish 
Vegan-friendly!
Suitable for teenager (boleh dipakai dari umur 11 tahun keatas)

Hero Ingredients: 
Natural Alpha-Bisabolol: memiliki kemampuan anti iritasi, antioksidan, efek menenangkan & anti-acne karena bersifat antimikroba.
Multivitamins,  kombinasi beberapa vitamin (Vit. A, Vit E, Vit. E5, Vit. F, Vit. B7, dan Myo-Inositol) & Horse Chestnut Extract yang cepat berpenetrasi ke dalam kulit & bersifat antioksidan untuk menangkal radikal bebas pada kulit. Mengandung asam untuk memperkuat skin barrier & memperhalus kulit. Selain itu, mampu mempercepat pembaharuan/renewal sel kulit, menjaga elastisitas kulit, menjaga kelembaban, mengatasi jerawat, mencegah photoaging akibat sinar UVA, & membantu proses detoksifikasi protein yang rusak. 

CARA PEMAKAIAN
Gunakan sebagai tahap terakhir perawatan kulit, kocok sebelum penggunaan.
Keluarkan sunscreen sebanyak 2 ruas jari tangan lalu oleskan keseluruh wajah
Dapat digunakan kembali setiap 2 jam untuk melindungi kulit dari sinar UV secara maksimal',
                'price' => 42900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            90 => 
            array (
                'id' => 91,
                'brand_id' => 14,
                'name' => 'Whitelab Age Correxion Firming Serum - White Lab 20ml',
                'variation' => 'Corex Firming Serum',
                'link' => 'https://shopee.co.id/Whitelab-Age-Correxion-Firming-Serum-White-Lab-20ml-i.744873.14014799907?sp_atk=22065c4f-691e-4474-8528-7925edd306a6&xptdk=22065c4f-691e-4474-8528-7925edd306a6',
                'description' => 'Whitelab Age Correxion Firming Serum menggunakan Peptide-9, Marine Collagen, HyaluComplex-10, Ceramide-4 yang dapat melawan tanda-tanda penuaan dini pada wajah. Wajah tampak awet muda, garis halus dan kerutan berkurang dan tetap terasa kenyal.

Powerful Ingredients:
- Peptide-9 yang terdiri dari 9 jenis senyawa Peptide yang memiliki fungsi penting proses regenerasi kulit dapat membantu mengurangi kerutan dan garis halus terutama pada area crows feet, lamellar dan glabellar, mengurangi kenduran wajah, membantu melawan age spots, serta sebagai collagen booster.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Ceramide-4 yang terdiri dari 4 jenis esensial Ceramide tubuh (Ceramide I, III, VI, Ceramide Prekursor) melengkapi kembali komponen lipid dan meningkatkan fungsi barrier wajah, , mencegah Transepidermal Water Loss (TEWL), mengurangi tanda-tanda sensitivitas kulit, meningkatkan kelembaban dan mempertahankan hidrasi kulit wajah.

Serum ini dapat digunakan untuk wajah dengan tanda-tanda penuaan seperti garis halus, kerutan, kendur serta kulit yang dehidrasi dan stress.

Fungsi:
- Melawan tanda-tanda penuaan pada kulit wajah
- Menyamarkan garis-garis halus pada wajah
- Merawat kekenyalan dan kelembaban kulit wajah
- Membantu merawat dan meningkatkan fungsi skin barrier wajah
- Mempertahankan level hidrasi kulit wajah
- Merawat kelembutan dan kehalusan kulit wajah

Cara pakai : Tuangkan 2-4 tetes Whitelab Age Correxion Firming Serum dan oleskan ke kulit yang telah dibersihkan secara merata. Gunakan pagi dan malam hari sebelum menggunakan krim wajah.

Produk ini menggunakan pewarna alami, perubahan warna tidak merubah manfaat dan keamanan dari produk.',
                'price' => 76000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            91 => 
            array (
                'id' => 92,
                'brand_id' => 7,
                'name' => 'VAVL BEAUTE Pure White Glowing Serum - 15ml - VIGHTNE',
                'variation' => 'Glowing Serum 15ml',
                'link' => 'https://shopee.co.id/VAVL-BEAUTE-Pure-White-Glowing-Serum-15ml-VIGHTNE-i.744873.3091968142?sp_atk=46ea5c6e-2519-49cd-ae7f-b8e16e2e4922&xptdk=46ea5c6e-2519-49cd-ae7f-b8e16e2e4922',
                'description' => 'INGREDIENTS:
- Albatrellus Ovinus Extract
- Niacinamide 5%
- Mulberry Root Extract
- Dual Vitamin C
- Glutathione

MANFAAT:
- Kulit Wajah Tampak Lebih Putih
- Kulit Wajah Lebih Halus
- Kulit Wajah Lebih Kenyal
- Menghilangkan Bekas Jerawat PIH

CARA PENGGUNAAN:
- Setelah wajah bersih gunakan 2-3 tetes pada wajah
- Tepuk ringan bagian wajah sampai serum meresap pada kulit
- Biarkan serum meresap dalam beberapa detik',
                'price' => 84000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            92 => 
            array (
                'id' => 93,
                'brand_id' => 17,
                'name' => 'Y.O.U The Radiance White Nourishing Serum 20 Ml - YOU',
                'variation' => 'NourishingSerum+VITC',
                'link' => 'https://shopee.co.id/Y.O.U-The-Radiance-White-Nourishing-Serum-20-Ml-YOU-i.744873.3665788157?sp_atk=c48b452d-4e4f-43a1-a228-777f185ef1f3&xptdk=c48b452d-4e4f-43a1-a228-777f185ef1f3',
                'description' => '1. 9 Brightening ActivesNEW Arrival u000BMenutrisi kulit dengan 9 Brightening Actives* untuk wajah yang sehat berseri.
2. 28 Days Radiant Skin Complexionu000BKulit tampak lembut dan sehat berseri dalam 28 hari.

Radiance White Nourishing Serum diformulasikan dengan Ekstrak Jamur Salju, Vitamin C, dan Niacinamide untuk meningkatkan warna kulit, mengurangi bintik hitam, dan menghaluskan tekstur kulit untuk kulit yang lembab dan cerah.
The Radiance White Nourishing Serum diformulasikan dengan ekstrak Snow Mushroom, Vitamin C, dan Niacinamide yang mampu mencerahkan, memberikankan noda hitam, dan tekstur kulit agar lebih lembap dan bercahaya.

Cara Penggunaan: Oleskan pada wajah dan leher yang bersih. Pijat lembut dengan gerakan melingkar.
Cara Pemakaian: Aplikasikan pada wajah dan leher yang telah dibersihkan. pijat lembut dengan gerakan memutar.
Untuk hasil yang optimal, gunakan rangkaian perawatan kulit The Radiance White.
Untuk hasil yang optimal, gunakan rangkaian perawatan The Radiance White.',
                'price' => 84900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            93 => 
            array (
                'id' => 94,
                'brand_id' => 41,
                'name' => 'BREYLEE Step 2 Pore Minimizer Serum - Pengecil Pori Wajah 17ml',
                'variation' => 'Minimizr Serum STEP2',
                'link' => 'https://shopee.co.id/BREYLEE-Step-2-Pore-Minimizer-Serum-Pengecil-Pori-Wajah-17ml-i.744873.8034262733?sp_atk=cf5efb71-0945-4800-ba7f-bad14fe61c80&xptdk=cf5efb71-0945-4800-ba7f-bad14fe61c80',
                'description' => '[INDIKASI]
Dapat membantu mengecilkan pori-pori kulit wajah. Membantu merawat kulit berjerawat, menyamarkan noda bekas jerawat, dan membantu memulihkan kondisi kulit wajah.

[CARA PAKAI]
Setelah membilas wajah, gunakan 3-5 tetes pada telapak tangan dan aplikasikan keseluruh kulit wajah. Gosokan dengan gerakan memutar menggunakan ujung jari dengan lembut untuk penyerapan maksimal

[PERINGATAN]
1. Hanya untuk pemakaian luar
2. Untuk kulit sensitif, dianjurkan untuk mencoba produk pada bagian dalam lengan
3. Hentikan pemakaian dan tanyakan ke dokter jika terjadi reaksi alergi.
4. Jika terjadi kontak dengan mata, segera cuci dengan air bersih.

[PENYIMPANAN]
Simpan pada area sejuk dan kering, jauhkan dari sinar matahari langsung. (Jauhkan dari jangkauan anak-anak)',
                'price' => 34900,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            94 => 
            array (
                'id' => 95,
                'brand_id' => 45,
                'name' => '[BPOM] PYUNKANG YUL Moisture Serum 100ml',
                'variation' => 'Moisture Serum 100ml',
                'link' => 'https://shopee.co.id/-BPOM-PYUNKANG-YUL-Moisture-Serum-100ml-i.744873.2280704127?sp_atk=813de67a-36d9-4642-a22c-2f98840826c5&xptdk=813de67a-36d9-4642-a22c-2f98840826c5',
                'description' => 'Keseimbangan sempurna antara minyak dan kelembapan!
- Menjaga keseimbangan minyak-kelembapan kulit dan mencegah penguapan hidrasi untuk efek dewy yang tahan lama
- Hypo-allergenic
- Ekstrak akar Barberry yang bekerja untuk mengurangi suhu kulit untuk relaksasi kulit yang sensitif dan iritasi.
- Minyak zaitun yang berfungsi untuk hidrasi intensif dan mencegah kulit kering

Cara Penggunaan
1. Gunakan pipet untuk mengukur jumlah serum yang tepat
2. Oleskan mengikuti garis-garis kulit
* Saran: Oleskan lebih banyak pada bagian kulit yang kering',
                'price' => 185500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            95 => 
            array (
                'id' => 96,
                'brand_id' => 24,
                'name' => 'SYB Red Jelly Glow Serum | SYB Serum Glowing',
                'variation' => 'RED JELLY SERUM',
                'link' => 'https://shopee.co.id/SYB-Red-Jelly-Glow-Serum-SYB-Serum-Glowing-i.744873.13802155346?sp_atk=1e15f5bc-db63-40a6-ac69-369347c73b54&xptdk=1e15f5bc-db63-40a6-ac69-369347c73b54',
                'description' => 'Pertama dan satu2 nya serum red jelly glow 
Di mana mengandung bahan aktif aloevera dan niacinamic yang berfungsi 
Menjaga kelembaban kulit 
Menjaga kadar air 
Mencegah keriput 
Menbuat kulit nampak glowing 
Mencerahkan 
Meratakan warna kulit',
                'price' => 13600,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            96 => 
            array (
                'id' => 97,
                'brand_id' => 41,
                'name' => 'BREYLEE Vitamin C Serum | Hyaluronic Acid Serum | Rose Hydrating Serum | Soothing Serum | Retinol',
                'variation' => 'Soothing Serum',
                'link' => 'https://shopee.co.id/BREYLEE-Vitamin-C-Serum-Hyaluronic-Acid-Serum-Rose-Hydrating-Serum-Soothing-Serum-Retinol-i.744873.4379767256?sp_atk=65210cb6-4317-4092-aaa0-82eb6db0f052&xptdk=65210cb6-4317-4092-aaa0-82eb6db0f052',
            'description' => 'Mengandung bermacam-macam ektrak tumbuhan dengan kandungan Chamomile yang membantu memperbaiki kulit, serta menenangkan (Termasuk kulit sensitif) dan kulit berjerawat.

[PENYIMPANAN]
Simpan produk di tempat yang sejuk dan kering (Jauhkan dari paparan sinar matahari langsung)',
                'price' => 28000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            97 => 
            array (
                'id' => 98,
                'brand_id' => 14,
                'name' => 'Whitelab Granactive Retinoid Intensive Care Serum White Lab',
                'variation' => 'WL Intensive Serum',
                'link' => 'https://shopee.co.id/Whitelab-Granactive-Retinoid-Intensive-Care-Serum-White-Lab-i.744873.4083124643?sp_atk=4ec98d78-6dd0-4e31-9b41-01dcd3ac7a5e&xptdk=4ec98d78-6dd0-4e31-9b41-01dcd3ac7a5e',
                'description' => 'Dengan kandungan utama Granactive Retinoid 1% + Peptide + Beta Glucan
Whitelab Intensive Care Serum menggunakan Granactive Retinoid 1% yang merupakan Advanced Retinoid generasi terbaru, yang memberikan manfaat serupa dengan Retinol namun minim iritasi dan efektif diaplikasikan setiap hari.

Dengan kandungan Granactive Retinoid 1% dapat membantu menyamarkan tanda tanda penuaan pada kulit, seperti kerutan dan garis halus pada wajah, serta dapat membantu menyamarkan noda bekas jerawat. Peptide bermanfaat untuk membantu meningkatkan elastisitas serta kekencangan pada kulit. Sedangkan Beta Glucan bermanfaat untuk membantu memperkuat fungsi pertahanan kulit, serta merawat kehalusan dan mencerahkan wajah.

Oleh karena itu, Whitelab Intensive Care serum sangat cocok digunakan untuk membantu mengurangi masalah tanda tanda penuaan, noda pada kulit serta problem wajah yang kusam.

Manfaat :
- Menyamarkan garis halus dan kerutan pada wajah 
- Membantu menyamarkan noda bekas jerawat
- Membantu meningkatkan produksi collagen sehingga terlihat lebih lembut dan kenyal
- Memperkuat skin barrier pada kulit wajah
- Mempercepat regenerasi sel kulit dan mencerahkannya
- Merawat kehalusan dan kekencangan pada kulit

Cara pakai : Tuangkan 2-4 tetes Whitelab Intensive Care Serum & oleskan ke kulit wajah yang telah dibersihkan secara merata. Pada awal pemakaian, gunakan 2-3 kali dalam seminggu. Selanjutnya, gunakan setiap hari pada malam hari.',
                'price' => 95000,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            98 => 
            array (
                'id' => 99,
                'brand_id' => 8,
                'name' => 'ElsheSkin Smoothing Serum | Elshe Skin Smoothing Serum for Acne Skin',
                'variation' => 'Smoothing Serum 30ml',
                'link' => 'https://shopee.co.id/ElsheSkin-Smoothing-Serum-Elshe-Skin-Smoothing-Serum-for-Acne-Skin-i.744873.1714861999?sp_atk=565205ed-976a-43fd-beae-b4f7a3eb5979&xptdk=565205ed-976a-43fd-beae-b4f7a3eb5979',
                'description' => 'Berfungsi untuk memperbaiki tekstur dan penampilan kulit yang bermasalah setelah penyembuhan Acne atau bekas jerawat baru. Kulit menjadi tampak lebih halus dan lembut.

How to use :
Oleskan ELSHESKIN Smoothing Serum for Acne Skin pada daerah yang tidak rata dengan kulit sekitar karena bekas jerawat atau bekas luka

Ingredients :
Alcohol, Aqua, Glycerin, Centella Asiatica Leaf Extract, Butylene Glycol, Salicylic Acid, Methylsilanol Mannuronate, Carbomer.

Benefit :
Elsheskin Smoothing Serum for Acne Skin yang berfungsi untuk membantu memperbaiki tekstur dan penampilan kulit yang bermasalah setelah penyembuhan Acne atau luka dan membantu menyamarkan bekas jerawat.',
                'price' => 169150,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            99 => 
            array (
                'id' => 100,
                'brand_id' => 52,
                'name' => 'SAFI Age Defy Concentrated Serum 20 ml',
                'variation' => 'A.D Concentrat Serum',
                'link' => 'https://shopee.co.id/SAFI-Age-Defy-Concentrated-Serum-20-ml-i.744873.1353054683?sp_atk=7af52a0e-2267-4fb9-9700-9de9142ded8c&xptdk=7af52a0e-2267-4fb9-9700-9de9142ded8c',
                'description' => 'Produksi kolagen di lapisan dermis mulai menurun saat usia pertengahan 20-an. Safi Age Defy Concentrated Serum diformulasikan dengan Gold Extract, Silk Protein dan Tri Tone Equalizer yang dapat menyerap ke dalam lapisan kulit untuk membantu : 
- Memelihara kolagen kulit agar tanda-tanda penuaan dini dapat tersamarkan
- Membantu merawat dan menjaga elastisitas kulit wajah
- Kombinasi Tri- Tone Equalizer membantu mengurangi kusam di kulit wajah
- Membantu kulit wajah terlihat cerah dan bersinar

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. Gunakan sebelum memakai krim pelembab Safi Age Defy. 
',
                'price' => 104500,
                'category' => 'Serum',
                'created_at' => '2022-06-27 15:29:03',
                'updated_at' => '2022-06-27 15:29:03',
            ),
            100 => 
            array (
                'id' => 101,
                'brand_id' => 20,
                'name' => 'HANASUI Serum Vitamin C',
                'variation' => 'HANA Vit C Serum',
                'link' => 'https://shopee.co.id/HANASUI-Serum-Vitamin-C-i.744873.11339302076?sp_atk=86cafab6-226e-436a-b25d-85b961a59646&xptdk=86cafab6-226e-436a-b25d-85b961a59646',
                'description' => 'Dengan formulasi yang baru, bahan yang jauh lebih bagus Dan aman, sudah terdaftar BPOM resmi

Befungsi :
- mencerahkan warna kulit
- menjaga elastisitas kulit
- sebagai anti oksidan

Komposisinya :
Water, Gliserin, Proylene Glycol, Collagen, Sodium Phosphate, Hydroxyethylcellucose, DMDM Hydantoin, PEG-40, Hydrogenated Castor Oil, Allantoin, Tetrasodium EDTA, Perfume

Cara Pemakaian :
Oleskan tipis pada kulit wajah yang telah dibersihkan, diamkan hingga meresap. Lanjutkan dengan kirim perawatan anda. Pakai 2x dalam sehari. :)

Hasil TERBAIK pemakaian 2x sehari',
            'price' => 17500,
            'category' => 'Serum',
            'created_at' => '2022-06-27 15:29:03',
            'updated_at' => '2022-06-27 15:29:03',
        ),
        101 => 
        array (
            'id' => 102,
            'brand_id' => 16,
            'name' => 'Garnier Sakura White Hyaluron 30x Booster Serum 30ml | Skin Care',
            'variation' => 'Sakura Serum 30ml',
            'link' => 'https://shopee.co.id/Garnier-Sakura-White-Hyaluron-30x-Booster-Serum-30ml-Skin-Care-i.744873.6255182067?sp_atk=ad6538ad-9ce7-415c-a1d3-249b6eae0d2e&xptdk=ad6538ad-9ce7-415c-a1d3-249b6eae0d2e',
            'description' => 'Garnier Sakura White Hyaluron 30x Booster Serum Skin Care - 30 ml [Untuk Kulit Glowing Dalam 7 Hari]

• Dapatkan newborn glowing skin dalam 7 hari
• Serum dengan kandungan formula pelembap tertinggi dari 30X Hyaluron
• Diperkaya dengan Ekstrak Sakura Jepang, dipetik dengan tangan dan diproses secara berkelanjutan, dikenal mampu membuat kulit tampak lebih cerah, lembut dan halus
• Tidak lengket dan cepat meresap, bekerja ke dalam lapisan kulit
• Dari penggunaan pertama, kulit terasa halus, tampak cerah dan bercahaya
• Cocok untuk semua jenis kulit, diuji secara dermatologis
• Sebaiknya digunakan di pagi dan malam hari sebelum krim pelembap.',
            'price' => 93900,
            'category' => 'Serum',
            'created_at' => '2022-06-27 15:29:03',
            'updated_at' => '2022-06-27 15:29:03',
        ),
        102 => 
        array (
            'id' => 103,
            'brand_id' => 11,
            'name' => 'WARDAH Renew You Anti Aging Intensive Serum 17ml',
            'variation' => 'IntensiveSerum17ml',
            'link' => 'https://shopee.co.id/WARDAH-Renew-You-Anti-Aging-Intensive-Serum-17ml-i.744873.1549379568?sp_atk=b87bb0e1-15d9-4f35-a4b1-3ef2beb3f3f6&xptdk=b87bb0e1-15d9-4f35-a4b1-3ef2beb3f3f6',
            'description' => 'Dari laboratorium penelitian Wardah muncul solusi inovatif untuk mengatasi masalah penuaan kulit.
Advanced RecoverAge System adalah terobosan dalam perawatan kulit yang membantu memperlambat setaip tanda penuaan (keriput, garis-garis halus, kulit kering, bintik hitam, warna kulit tidak meratam hilangnya kekencangan dan elastisitas kulit)
menggunakan bahan aktif revolusioner yang sangat efektif untuk mengungkapkan kulit muda anda

- Membantu memperbaiki tekstur kulit
- Membantu menstimulasi sintesis kolagen
- Membantu proses regenerasi kulit
- Membantu meningkatkan kelembaban kulit
- Membantu meningkatkan elastisitas kulit
- Membantu mempercepat penetrasi bahan aktif ke dalam kulit
- Membantu memudarkan bintik-bintik gelap, garis halus, dan kerutan wajah
- Melindungi kulit dari radikal bebas
- Formula yang ringan dan nyaman

CARA APAKAI:
- gunakan pada malam hari di kulit yang telah dibersihkan hindari daerah mata',
            'price' => 65000,
            'category' => 'Serum',
            'created_at' => '2022-06-27 15:29:03',
            'updated_at' => '2022-06-27 15:29:03',
        ),
        103 => 
        array (
            'id' => 104,
            'brand_id' => 11,
            'name' => 'Wardah C-Defense Serum / DD Serum C Defense 17 ML',
            'variation' => 'Serum',
            'link' => 'https://shopee.co.id/Wardah-C-Defense-Serum-DD-Serum-C-Defense-17-ML-i.744873.522734026?sp_atk=46a1dc54-c141-4b77-9bd4-38830dc59798&xptdk=46a1dc54-c141-4b77-9bd4-38830dc59798',
            'description' => 'Wardah C-Defense Serum adalah serum wajah dengan powerful antioxidant Hi-Grade Vitamin C dengan kemampuan penetrasi yang lebih sempurna ke dalam lapisan kulit, serum ini bekerja melalui 5 Langkah sinergis untuk menjaga agar kulit tampak labih muda, cerah dan tetap sehat:
Mengurangi proses pembentukan melanin pada kulit.
Membantu menangkal radikal bebas.
Sebagai anti inflamasi, inflamasi merupakan salah satu faktor pemicu terjadi pigmentasi pada kulit.
Membantu sintesis kolagen yang berfungsi untuk menjaga elastisitas kulit.
Meresap ke lapisan kulit dengan lebih optimal sehingga aktif bekerja lebih efektif.

Wardah C-Defense Serum Mengandung Prolonged Hydration Biosaccharide yang menjaga kelembapan dan kehalusan kulit. Serum ini lembut sehingga memberikan rasa nyaman di kulit. Hasilnya kulit terasa lebih lembap, halus dan tampak sehat. Merupakan Vitamin C dengan performa tinggi yang mampu meresap lebih sempurna ke dalam lapisan kulit Epodermis) dan lebih stabil terhadap cahaya sehingga terjaga kualitasnya.',
        'price' => 64250,
        'category' => 'Serum',
        'created_at' => '2022-06-27 15:29:04',
        'updated_at' => '2022-06-27 15:29:04',
    ),
    104 => 
    array (
        'id' => 105,
        'brand_id' => 27,
        'name' => 'PYUNKANG YUL Moisture Serum 100ml',
        'variation' => 'Moisture Serum 100ml',
        'link' => 'https://shopee.co.id/-BPOM-PYUNKANG-YUL-Moisture-Serum-100ml-i.744873.2280704127?sp_atk=813de67a-36d9-4642-a22c-2f98840826c5&xptdk=813de67a-36d9-4642-a22c-2f98840826c5',
        'description' => 'Keseimbangan sempurna antara minyak dan kelembapan!
- Menjaga keseimbangan minyak-kelembapan kulit dan mencegah penguapan hidrasi untuk efek dewy yang tahan lama
- Hypo-allergenic
- Ekstrak akar Barberry yang bekerja untuk mengurangi suhu kulit untuk relaksasi kulit yang sensitif dan iritasi.
- Minyak zaitun yang berfungsi untuk hidrasi intensif dan mencegah kulit kering

Cara Penggunaan
1. Gunakan pipet untuk mengukur jumlah serum yang tepat
2. Oleskan mengikuti garis-garis kulit
* Saran: Oleskan lebih banyak pada bagian kulit yang kering',
        'price' => 185500,
        'category' => 'Serum',
        'created_at' => '2022-06-27 15:29:04',
        'updated_at' => '2022-06-27 15:29:04',
    ),
    105 => 
    array (
        'id' => 106,
        'brand_id' => 1,
        'name' => 'Nacific Super Clean Foam Cleanser 50ml - 100ml - Face Cleanser - Pembersih Wajah - Sabun Cuci Muka',
        'variation' => 'Foam Cleanser 50ml',
        'link' => 'https://shopee.co.id/Nacific-Super-Clean-Foam-Cleanser-50ml-100ml-Face-Cleanser-Pembersih-Wajah-Sabun-Cuci-Muka-i.744873.14642547971?sp_atk=7499f84f-fc74-4eae-b73c-667bb17494ac&xptdk=7499f84f-fc74-4eae-b73c-667bb17494ac',
        'description' => 'Key points :
*Kaolin Clay yang berfungsi untuk mengangkat sisa make-up & kotoran secara maksimal serta mengontrol produksi sebum berlebih
*Tea Tree Leaf Oil sebagai Soothing agent yang berfungsi melembapkan dan merawat kulit wajah yang kemerahan, iritasi dan berjerawat
*Peppermint Extract memberi sensasi dingin juga wangi mint yang menyegarkan

-Alcohol Free
-Paraben Free
-Artificial Color Free
-SLS Free
-Phenoxyethanol Free

Cara menggunakan :
1. Basuh wajah terlebih dahulu
2. Keluarkan sedikit Super Clean seukuran biji di telapak tangan
3. Beri sedikit air hingga berbusa melimpah
4. Aplikasikan di seluruh bagian wajah dengan gaya memutar sambil memberikan pijatan lembut pada wajah
5. Bersihkan hingga bersih & busa menghilang
6. Lap wajah perlahan menggunakan handuk hingga kering

NACIFIC Super Clean Foam Cleanser mengandung Kaolin Clay yang bermanfaat untuk mengontrol produksi sebum berlebih pada kulit wajah.

Teksturnya lengket tapi nyaman saat diaplikasikan di wajah dengan busa yang melimpah dan juga membersihkan hingga pori terdalam.

Selain itu, dapat juga melembabkan kulit, merawat kulit yang kemerahan & iritasi serta cocok untuk kulit berjerawat.
Baik disimpan selama 12 bulan setelah produk dibuka. jika segel produk belum di buka, baik disimpan selama 30 bulan',
        'price' => 41500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    106 => 
    array (
        'id' => 107,
        'brand_id' => 53,
    'name' => 'SENKA Perfect Whip Fresh Anti Shine Facial Foam 50g - 100g (Untuk Kulit Berminyak)',
        'variation' => 'Whip Fresh 100 gr',
    'link' => 'https://shopee.co.id/SENKA-Perfect-Whip-Fresh-Anti-Shine-Facial-Foam-50g-100g-(Untuk-Kulit-Berminyak)-i.744873.10771655957?sp_atk=607c1865-1d29-4612-881d-54e223da621a&xptdk=607c1865-1d29-4612-881d-54e223da621a',
        'description' => 'Perfect Whip Fresh adalah produk unggulan sekaligus favorit di negara Jepang dan Korea!

Facial Foam SENKA Perfect Whip - Anti Shine. Untuk jenis kulit kombinasi hingga kulit berminyak. Mampu membersihkan debu serta polusi yang menyumbat pori dan mengontrol kelebihan sebum pada wajah. Mengandung White cocoon essence & double hyaluronic acid. Diperkaya dengan bahan terbaik dari Jepang yaitu Uji green tea yang membersihkan,melembabkan dan membuat tampilan kulit terlihat tidak mengkilap (matte) lebih lama. SENKA Perfect Whip - Anti Shine menghasilkan busa berlimpah dengan bahan aktif Uji Green Tea yang dikenal dengan anti oksidan yang tinggi, menyegarkan, menjaga kulit bebas minyak lebih lama dan kulit cantik alami (Beautiful Bare Skin)

Cara Pemakaian :
Basahi tangan, keluarkan produk secukupnya (lebih kurang 2 cm) pada telapak tangan. Buatlah busa kemudian usap lembut pada wajah anda. Bilas dengan air hingga bersih.',
        'price' => 45300,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    107 => 
    array (
        'id' => 108,
        'brand_id' => 32,
        'name' => 'Mineral Botanica First Defense Facial Foam - MICA',
        'variation' => 'Defense Facial Foam',
        'link' => 'https://shopee.co.id/Mineral-Botanica-First-Defense-Facial-Foam-MICA-i.744873.2977758073?sp_atk=62256671-e021-4744-aa9b-65548606b311&xptdk=62256671-e021-4744-aa9b-65548606b311',
        'description' => 'Memperkenalkan tampilan baru dari Mineral Botanica Brightening Facial Foam: First Defense Facial Foam.
Merupakan Facial Foam dengan PH seimbang yang lembut pada kulit namun mampu mengangkat kotoran dan membuat kulit tampak terasa segar dan bersih.',
        'price' => 24550,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    108 => 
    array (
        'id' => 109,
        'brand_id' => 10,
        'name' => 'PIXY Glowssentials Deep Cleansing Face Wash | Pixy Sabun Cuci Muka',
        'variation' => 'Deep Cleansing',
        'link' => 'https://shopee.co.id/PIXY-Glowssentials-Deep-Cleansing-Face-Wash-Pixy-Sabun-Cuci-Muka-i.744873.8951322577?sp_atk=60445af3-568d-4480-89d3-7d3b00079a90&xptdk=60445af3-568d-4480-89d3-7d3b00079a90',
        'description' => 'Sabun pembersih wajah yang diformulasikan khusus untuk dapat membersihkan partikel-partikel polusi* hingga ke pori-pori wajah untuk kulit terasa halus, cerah, dan glowing. Diperkaya dengan 3 kandungan utama, yaitu: • Natural Vita Complex dari Ekstrak Kiwi, Vitamin E, dan Provitamin B5: Mengandung antioksidan, membantu menutrisi dan menjaga kelembapan kulit agar tetap cerah dan glowing. • Activated Charcoal: Membantu menyerap kotoran hingga ke pori-pori wajah. • Antibacterial Agent: Melawan bakteri dan menjaga kulit tetap bersih.',
        'price' => 16500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    109 => 
    array (
        'id' => 110,
        'brand_id' => 33,
        'name' => 'Himalaya Clear Complexion Whitening Face Wash',
        'variation' => 'Neem Complex 50ml',
        'link' => 'https://shopee.co.id/Himalaya-Clear-Complexion-Whitening-Face-Wash-i.744873.6477193063?sp_atk=1d4a1080-36df-4a6f-9529-abdfed4fff28&xptdk=1d4a1080-36df-4a6f-9529-abdfed4fff28',
        'description' => 'Pembasuh wajah yang dapet digunakan sehari-hari bermanfaat membersihkan kotoran dan membantu mencerahkan kulit anda. Sehingga menghasilkan rona wajah yang lebih cerah dan bercahaya. Saffron terkenal akan khasiat dalam membantu rona wajah lebih segar/bercahaya, sedangkan licorine dan dammar putih membantu mencerahkan warna kulit sehingga mengembalikan rona alami kulit berkhasiat melembutkan kulit anda. Gunakan pada pagi dan malam hari untuk kulit yang lebih bersih.

Cara pemakaian: basahi wajah dan pijat diseluruh permukaan wajah, hindari area sekitar mata. Bilas hingga bersih dan keringkan. Untuk hasil terbaik, lanjutkan dengan Clear Complexion Whitening Day Cream.',
        'price' => 20900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    110 => 
    array (
        'id' => 111,
        'brand_id' => 54,
        'name' => 'Kojie San Skin Lightening Facial Wash with Hydromoist 100gr',
        'variation' => 'Light Facial Wash',
        'link' => 'https://shopee.co.id/Kojie-San-Skin-Lightening-Facial-Wash-with-Hydromoist-100gr-i.744873.5890466954?sp_atk=5c24311a-7edc-4c84-9fc8-ae64ce6e6962&xptdk=5c24311a-7edc-4c84-9fc8-ae64ce6e6962',
        'description' => 'Sabun pencuci muka yang mamp55u membersihkan kulit secara mendalam,  menghilangkan kotoran dan sisa make-up, mengurangi produksi minyak berlebih, membantu mencegah komedo, komedo putih dan jerawat. Selain itu facial wash Kojiesan ini juga membantu menghaluskan, mencerahkan kulit yang tidak rata dan kusam dengan membersihkan sel-sel kulit mati.

Cara Pemakaian: Tuang secukupnya di telapak tangan, pijat lembut ke wajah dan leher yang sudah dibasahi. Bilas dengan air.',
        'price' => 64000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    111 => 
    array (
        'id' => 112,
        'brand_id' => 55,
        'name' => 'HADA LABO Tamagohada Mild Peeling Face Wash 50g | Hadalabo',
        'variation' => 'Mild Peel FW 50 gr',
        'link' => 'https://shopee.co.id/HADA-LABO-Tamagohada-Mild-Peeling-Face-Wash-50g-Hadalabo-i.744873.1533890983?sp_atk=803e06af-e703-4310-8555-47d335df6aca&xptdk=803e06af-e703-4310-8555-47d335df6aca',
        'description' => 'Dengan lembut mengikis permukaan sel kulit mati dan mengangkat kotoran dan minyak yang menyumbat pori-pori.  Memperbaiki kulit kusam dan merawat tekstur kulit sehingga terlihat lebih lembut dan cerah

Cara pemakaian
Tuangkan secukupnya pada telapak tangan. Buihkan dengan air lalu usapkan pada wajah yang telah dibasahi secara perlahan dan merata. Bilas dengan air .',
        'price' => 23500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:49',
        'updated_at' => '2022-06-27 15:30:49',
    ),
    112 => 
    array (
        'id' => 113,
        'brand_id' => 33,
        'name' => 'Himalaya Gentle Exfoliating Daily Face Wash - 50ml - 100ml',
        'variation' => 'Gentle Exfol 50ml',
        'link' => 'https://shopee.co.id/Himalaya-Gentle-Exfoliating-Daily-Face-Wash-50ml-100ml-i.744873.7877192760?sp_atk=6ce3dd59-4a12-4d5e-9239-417e90382fa5&xptdk=6ce3dd59-4a12-4d5e-9239-417e90382fa5',
        'description' => 'Pembasuh wajah yang dapat digunakan sehari-hari untuk membersihkan kulit wajah anda dan mengangkat sel kulit mati secara lembut serta membantu membersihkan kotoran yang menyumbat pori-pori. Granul Apricot secara lembut mengangkat sel kulit mati. Neem dan lemon membersihkan lebih dalam dan mengurangi kelebihan minyak pada kulit wajah.

Cara pemakaian: Basahi wajah dan pijat diselurh permukaan wajah hindari area mata. Bilas hingga bersih dan keringkan',
        'price' => 17500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    113 => 
    array (
        'id' => 114,
        'brand_id' => 56,
        'name' => 'Citra Facial Foam | Citra Sakura Glow | Citra Pearly White  | Citra Green Tea Anti Acne Facial Foam',
        'variation' => 'Pearl Facial Foam',
        'link' => 'https://shopee.co.id/Citra-Facial-Foam-Citra-Sakura-Glow-Citra-Pearly-White-Citra-Green-Tea-Anti-Acne-Facial-Foam-i.744873.2924879495?sp_atk=059f09f3-fcf9-4a45-a183-ac117fe5866f&xptdk=059f09f3-fcf9-4a45-a183-ac117fe5866f',
        'description' => 'Citra Sakura Glow Facial Foam 100 gr
- Diperkaya dengan ekstrak bunga Sakura dan Vitamin B3
- Dapat menghadirkan wajah cerah merona seperti bunga Sakura
- Membersihkan hingga 12 lapis kotoran

CITRA PEARLY WHITE FACIAL FOAM
- Membantu memberikan wajah cerah bercahaya bagai kilau mutiara
- Mengandung banyak vitamin, mineral dan asam amino
- Membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara

Mutiara dikenal sebagai kandungan berharga yang digunakan para bangsawan Asia dari generasi ke generasi untuk membantu memberikan wajah cerah bercahaya bagai kilau mutiara, berkat kandungan kaya vitamin, mineral dan asam amino yang dimilikinya. Kandungan mutiara dalam Citra Pearly White Facial Foam membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara.

Citra Green Tea Anti Acne Facial Foam 100 gr
Citra Green Tea Anti Acne Facial foam membersihkan kulit anda dan melawan jerawat secara efektif. Mengurangi 99.9% bakteri penyebab jerawat untuk kulit wajah yang tampak sehat, cerah, dan mulus.',
        'price' => 28500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    114 => 
    array (
        'id' => 115,
        'brand_id' => 56,
        'name' => 'Citra Facial Foam | Citra Sakura Glow | Citra Pearly White  | Citra Green Tea Anti Acne Facial Foam',
        'variation' => 'GreenTea Facial Foam',
        'link' => 'https://shopee.co.id/Citra-Facial-Foam-Citra-Sakura-Glow-Citra-Pearly-White-Citra-Green-Tea-Anti-Acne-Facial-Foam-i.744873.2924879495?sp_atk=059f09f3-fcf9-4a45-a183-ac117fe5866f&xptdk=059f09f3-fcf9-4a45-a183-ac117fe5866f',
        'description' => 'Citra Sakura Glow Facial Foam 100 gr
- Diperkaya dengan ekstrak bunga Sakura dan Vitamin B3
- Dapat menghadirkan wajah cerah merona seperti bunga Sakura
- Membersihkan hingga 12 lapis kotoran

CITRA PEARLY WHITE FACIAL FOAM
- Membantu memberikan wajah cerah bercahaya bagai kilau mutiara
- Mengandung banyak vitamin, mineral dan asam amino
- Membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara

Mutiara dikenal sebagai kandungan berharga yang digunakan para bangsawan Asia dari generasi ke generasi untuk membantu memberikan wajah cerah bercahaya bagai kilau mutiara, berkat kandungan kaya vitamin, mineral dan asam amino yang dimilikinya. Kandungan mutiara dalam Citra Pearly White Facial Foam membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara.

Citra Green Tea Anti Acne Facial Foam 100 gr
Citra Green Tea Anti Acne Facial foam membersihkan kulit anda dan melawan jerawat secara efektif. Mengurangi 99.9% bakteri penyebab jerawat untuk kulit wajah yang tampak sehat, cerah, dan mulus.',
        'price' => 28500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    115 => 
    array (
        'id' => 116,
        'brand_id' => 56,
        'name' => 'Citra Facial Foam | Citra Sakura Glow | Citra Pearly White  | Citra Green Tea Anti Acne Facial Foam',
        'variation' => 'Sakura Facial Foam',
        'link' => 'https://shopee.co.id/Citra-Facial-Foam-Citra-Sakura-Glow-Citra-Pearly-White-Citra-Green-Tea-Anti-Acne-Facial-Foam-i.744873.2924879495?sp_atk=059f09f3-fcf9-4a45-a183-ac117fe5866f&xptdk=059f09f3-fcf9-4a45-a183-ac117fe5866f',
        'description' => 'Citra Sakura Glow Facial Foam 100 gr
- Diperkaya dengan ekstrak bunga Sakura dan Vitamin B3
- Dapat menghadirkan wajah cerah merona seperti bunga Sakura
- Membersihkan hingga 12 lapis kotoran

CITRA PEARLY WHITE FACIAL FOAM
- Membantu memberikan wajah cerah bercahaya bagai kilau mutiara
- Mengandung banyak vitamin, mineral dan asam amino
- Membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara

Mutiara dikenal sebagai kandungan berharga yang digunakan para bangsawan Asia dari generasi ke generasi untuk membantu memberikan wajah cerah bercahaya bagai kilau mutiara, berkat kandungan kaya vitamin, mineral dan asam amino yang dimilikinya. Kandungan mutiara dalam Citra Pearly White Facial Foam membersihkan wajah sehingga terlihat cerah alami, secantik kilau mutiara.

Citra Green Tea Anti Acne Facial Foam 100 gr
Citra Green Tea Anti Acne Facial foam membersihkan kulit anda dan melawan jerawat secara efektif. Mengurangi 99.9% bakteri penyebab jerawat untuk kulit wajah yang tampak sehat, cerah, dan mulus.',
        'price' => 28500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    116 => 
    array (
        'id' => 117,
        'brand_id' => 53,
    'name' => 'SENKA Perfect White Clay Facial Foam 50g - 120g (Untuk Mengangkat Komedo & Cerah)',
        'variation' => 'White Clay 50gr',
    'link' => 'https://shopee.co.id/SENKA-Perfect-White-Clay-Facial-Foam-50g-120g-(Untuk-Mengangkat-Komedo-Cerah)-i.744873.12049881095?sp_atk=534f4bc5-0ebc-40ad-8da2-ede64debd6f0&xptdk=534f4bc5-0ebc-40ad-8da2-ede64debd6f0',
        'description' => 'Perfect White Clay memberikan tampilan kulit wajah yang lebih cerah dan lembut. Memancarkan pesona Suppin Look atau tampilan kulit yang cantik alami tanpa makeup!

Pembersih wajah ini memiliki kandungan White Cocoon dan Hyaluronic Acid. Partikel mineralnya secara lembut dapat membersihkan wajah lebih dalam hingga ke pori sehingga secara otomatis kulit wajah nampak lebih cerah. 

Memiliki tekstur krim dengan konsistensi yang kental sehingga menghasilkan busa yang padat, lembut dan melimpah serta memiliki aroma bunga-bungaan yang lembut.
- Dengan busa yang lembut sehingga dapat menjaga kelembaban alami kulit wajah
- Membersihkan kotoran dan sel kulit mati hingga ke pori-pori wajah
- Kulit terasa lembab dan halus.
- Dengan aroma bunga yang segar

Cara pemakaian:
Basahi tangan, keluarkan produk secukupnya (lebih kurang 2 cm) pada telapak tangan. Buatlah busa kemudian usap lembut pada wajah anda. Bilas dengan air hingga bersih.',
        'price' => 28300,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    117 => 
    array (
        'id' => 118,
        'brand_id' => 5,
        'name' => 'Pond\'s Bright Beauty Whip Foam - Pond\'s Pure Bright Whip Foam - 100gr - Ponds',
        'variation' => 'Pure Bright 100gr',
        'link' => 'https://shopee.co.id/Pond\'s-Bright-Beauty-Whip-Foam-Pond\'s-Pure-Bright-Whip-Foam-100gr-Ponds-i.744873.8696208030?sp_atk=ffdc7dfd-e89e-4781-810d-ff99ab83dc4a&xptdk=ffdc7dfd-e89e-4781-810d-ff99ab83dc4a',
        'description' => 'Apakah kamu tau, facial foam pada umumnya memiliki busa besar yang tidak bisa membersihkan hingga ke pori? Bersihkan dan cerahkan wajahmu dengan POND\'S Bright Beauty Collagen Whip Foam. Pertama dari Pond\'s, busa whip creamy mengandung 5x Micro Foam+. Busa lebih banyak dan halus lembut seperti awan, mengangkat kotoran serta minyak dan membersihkan pori lebih mendalam*. 

POND’S Bright Beauty Whip Foam juga mengandung 10X collagen+. Banyak ditemukan di skin care premium, collagen serum mampu mengunci kelembapan di kulitmu ketika busa lembut membersihkan pori-pori. Tidak ada lagi wajah kering dan kaku sehabis mencuci muka! 

Facial foam pencerah wajah dengan Fresh Rose extract dan Vitamin B3+ (Niacinamide), mampu mencerahkan hingga 3X lebih baik+ untuk menyamarkan noda hitam dan kemerahan di wajah. Hasilnya, wajah glowing pori tersamarkan. 

Gunakan sedikit saja untuk dapatkan busa melimpah yang halus, creamy dan lembut seperti awan. 
Sebelum menggunakan, basahkan tangan dengan air lalu keluarkan 2 cm produk POND’S Bright Beauty Whip Foam di tanganmu. Buat busa dengan gerakan ujung jari memutar di telapak tangan dan tambahkan air sedikit demi sedikit untuk mendapatkan busa yang tebal dan creamy. Pijat lembut busa di wajah lalu bilas dengan air. 

+dibandingkan dengan Pond\'s Facial Foam lainnya
*epidermis',
        'price' => 27900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    118 => 
    array (
        'id' => 119,
        'brand_id' => 5,
        'name' => 'Pond\'s Bright Beauty Whip Foam - Pond\'s Pure Bright Whip Foam - 100gr - Ponds',
        'variation' => 'Bright Beauty 100gr',
        'link' => 'https://shopee.co.id/Pond\'s-Bright-Beauty-Whip-Foam-Pond\'s-Pure-Bright-Whip-Foam-100gr-Ponds-i.744873.8696208030?sp_atk=ffdc7dfd-e89e-4781-810d-ff99ab83dc4a&xptdk=ffdc7dfd-e89e-4781-810d-ff99ab83dc4a',
        'description' => 'Apakah kamu tau, facial foam pada umumnya memiliki busa besar yang tidak bisa membersihkan hingga ke pori? Bersihkan dan cerahkan wajahmu dengan POND\'S Bright Beauty Collagen Whip Foam. Pertama dari Pond\'s, busa whip creamy mengandung 5x Micro Foam+. Busa lebih banyak dan halus lembut seperti awan, mengangkat kotoran serta minyak dan membersihkan pori lebih mendalam*. 

POND’S Bright Beauty Whip Foam juga mengandung 10X collagen+. Banyak ditemukan di skin care premium, collagen serum mampu mengunci kelembapan di kulitmu ketika busa lembut membersihkan pori-pori. Tidak ada lagi wajah kering dan kaku sehabis mencuci muka! 

Facial foam pencerah wajah dengan Fresh Rose extract dan Vitamin B3+ (Niacinamide), mampu mencerahkan hingga 3X lebih baik+ untuk menyamarkan noda hitam dan kemerahan di wajah. Hasilnya, wajah glowing pori tersamarkan. 

Gunakan sedikit saja untuk dapatkan busa melimpah yang halus, creamy dan lembut seperti awan. 
Sebelum menggunakan, basahkan tangan dengan air lalu keluarkan 2 cm produk POND’S Bright Beauty Whip Foam di tanganmu. Buat busa dengan gerakan ujung jari memutar di telapak tangan dan tambahkan air sedikit demi sedikit untuk mendapatkan busa yang tebal dan creamy. Pijat lembut busa di wajah lalu bilas dengan air. 

+dibandingkan dengan Pond\'s Facial Foam lainnya
*epidermis',
        'price' => 28400,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    119 => 
    array (
        'id' => 120,
        'brand_id' => 57,
        'name' => 'Acnes Foaming Wash 100ml | Sabun Cuci Muka Foaming 100 ml',
        'variation' => 'Foaming Wash 100 ml',
        'link' => 'https://shopee.co.id/Acnes-Foaming-Wash-100ml-Sabun-Cuci-Muka-Foaming-100-ml-i.744873.1705671133?sp_atk=4487a329-10b0-4fad-b3cd-4d412094d670&xptdk=4487a329-10b0-4fad-b3cd-4d412094d670',
        'description' => 'Foam pencuci dan pembersih wajah untuk jenis kulit yang cenderung berjerawat dan sensitif Melawan bakteri penyebab jerawat mengurangi peradangankemerahan pada kulit wajah akibat jerawat Menghilangkan minyak berlebih dan kotoran yang dapat menyumbat poripori Mengandung Vitamin C selain sebagai antioksidan serta melindungi kulit dari kerusakan akibat sinar UV

Cara pemakaian
Tuangkan Acnes Foaming wash secukupnya pada telapak tangan dan usapkan secara merata ke seluruh permukaan wajah Lalu bilas dengan air hingga bersih

Komposisi
Water Cocamidopropyl Betaine Lauric Acid Alcohol Butylene Glycol Potassium Hydroxide Myristic Acid palmitic Acid PEG7 Glyceryl Cocoate Perfume oCymen5ol Phenoxyethanol Methylparaben Propylparaben Dipotassium glycyrrhizate Disodium EDTA Magnesium Ascorbyl Phosphate',
        'price' => 29000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    120 => 
    array (
        'id' => 121,
        'brand_id' => 34,
        'name' => 'Y.O.U Dazzling Glow Up Facial Foam - Toner - Day Cream - Night Cream - Body Cream - Spray - YOU',
        'variation' => 'Facial Foam 100gr',
        'link' => 'https://shopee.co.id/Y.O.U-Dazzling-Glow-Up-Facial-Foam-Toner-Day-Cream-Night-Cream-Body-Cream-Spray-YOU-i.744873.11115605489?sp_atk=b4edaf58-125e-42ab-a49c-70ad7880e500&xptdk=b4edaf58-125e-42ab-a49c-70ad7880e500',
        'description' => 'Sabun wajah dengan busa yang lembut, mengandung Rice Extract, Tranexamic Acid, dan Niacinamide untuk menjaga hidrasi kulit dan tetap bercahaya.
Cara Pemakaian: 
Tuangkan secukupnya pada telapak tangan yang basah dan gosok hingga berbusa. Usapkan pada wajah dengan lembut.  Bilas hingga bersih. 
Untuk hasil yang optimal, gunakan rangkaian perawatan wajah Dazzling secara teratur.',
        'price' => 26500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    121 => 
    array (
        'id' => 122,
        'brand_id' => 11,
        'name' => 'Wardah Acnederm Pure Foaming Cleanser 60ml',
        'variation' => 'AcnedermFoamingClean',
        'link' => 'https://shopee.co.id/Wardah-Acnederm-Pure-Foaming-Cleanser-60ml-i.744873.7620275253?sp_atk=61e4787c-6eb0-4776-bcf9-b7acd390bb95&xptdk=61e4787c-6eb0-4776-bcf9-b7acd390bb95',
        'description' => 'Pembersih wajah dg kombinasi bahan aktif terpilih: Derma Cleanse Actives™ dg Salicylic Acid.
- Bantu bersihkan debu & kotoran di wajah
- Bantu kurangi minyak berlebih
- Bantu angkat sel kulit mati penyebab kulit kusam
- Bantu rawat kulit yg berjerawat
- Bantu menjaga hidrasi kulit
- Kulit terasa halus & lembut
- Bantu kurangi kulit kemerahan akibat iritasi
- Busa lembut dg formula yg nyaman di kulit',
        'price' => 18750,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    122 => 
    array (
        'id' => 123,
        'brand_id' => 5,
        'name' => 'Pond\'s Instabright Krim Wajah Tone Up Cream | Pond\'s Instabright Tone Up Milk Facial Foam PONDS',
        'variation' => 'Tone Up Facial Foam',
        'link' => 'https://shopee.co.id/Pond\'s-Instabright-Krim-Wajah-Tone-Up-Cream-Pond\'s-Instabright-Tone-Up-Milk-Facial-Foam-PONDS-i.744873.6762134491?sp_atk=049e2882-e402-4f78-8423-dd1d545ad1ac&xptdk=049e2882-e402-4f78-8423-dd1d545ad1ac',
        'description' => 'Terinspirasi teknologi dari Korea Dengan milk essence, untuk kulit tampak cerah seketika bahkan tanpa make up Meratakan warna kulit Menghaluskan Tampak bebas kilap Lindungi dari sinar UV Terinspirasi teknologi dari Korea, Tone UP Cream pertama dari Pond\'s dengan milk essence untuk kulit tampak cerah seketika bahkan tanpa make up foundation.
Pond\'s memahami bahwa wanita selalu merasa berkepentingan dengan kulit yang indah. Sebagai perusahaan terkemuka dan terbesar dalam bidang produk perawatan wajah.',
        'price' => 31700,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    123 => 
    array (
        'id' => 124,
        'brand_id' => 58,
        'name' => 'Mineral Botanica Perfect Purifying Toner - Facial Foam - Serum - Day Cream - Night Cream - MICA',
        'variation' => 'Face Wash 100ml',
        'link' => 'https://shopee.co.id/Mineral-Botanica-Perfect-Purifying-Toner-Facial-Foam-Serum-Day-Cream-Night-Cream-MICA-i.744873.10315791489?sp_atk=f7ee6999-5c90-4888-a972-e45ff03fba84&xptdk=f7ee6999-5c90-4888-a972-e45ff03fba84',
        'description' => 'Bersihkan kulit wajah! sehingga terasa lebih segar dan membantu kulit tetap lembab.Perfect Purifying Facial Wash merupakan pembersih wajah Dengan wangi menyegarkan yang bermanfaat membersihkan kulit wajah Anda, sehingga terasa lebih segar dan membantu kulit tetap lembab. Formulanya dikembangkan untuk kulit berminyak dan kulit yang rentan akan jerawat.

Perfect Purifying Facial Foam sebagai pengganti dari Acne Care Facial Foam merupakan pembersih wajah yang Formula ini di kembangkan untuk kulit berminyak dan kulit yang rentan akan jerawat. 
Dengan pH balance yang lembut dikulit, namun mampu mengangkat kotoran. Formula ini mengandung Triclosan sebagai antibakteri dan asam salisilat yang bermanfaat dalam merawat kulit yang berjerawat. Kulit terasa halus dan bersih. Mineral Botanica Acne Care Facial Foam akan membuat kulit terasa lembut pada bagian yang berjerawat. 
berfungsi untuk Menghilangkan kotoran, Mengontrol minyak berlebih di wajah.',
        'price' => 25400,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    124 => 
    array (
        'id' => 125,
        'brand_id' => 11,
        'name' => 'Wardah Nature Daily Mineral Clarifying Facial Foam 60ml - 100ml',
        'variation' => 'FF Clarifying 100ml',
        'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Mineral-Clarifying-Facial-Foam-60ml-100ml-i.744873.6720725135?sp_atk=61e368db-59dd-4842-9e63-4afa4c0e2f1d&xptdk=61e368db-59dd-4842-9e63-4afa4c0e2f1d',
        'description' => 'Kini wajah kusam akibat polusi debu asap dan kotoran serta minyak berlebih tampak bersih berseri dengan facial foam ini, karena: * Clarifying mineral perpaduan beberapa mineral yg berasal dari alam dan dikenal membntu menyerap minyak dan kotoran
* Carbonactive formula dikenal sebagai bahan penyerap polutan

Mengandung: 
Clarifying mineral+ = Perpaduan beberapa mineral yang berasal dari alam dan dikenal membantu menyerap Minyak dan kotoran 
CarbonActiv formula = Karbon aktif yg dikenal sebagai bahan penyerap polutan optimal',
        'price' => 19900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    125 => 
    array (
        'id' => 126,
        'brand_id' => 35,
        'name' => 'SENKA Perfect Whip Fresh Anti Shine Facial Foam From Japan - Untuk Kulit Berminyak |  50g | 100g',
        'variation' => 'Whip Fresh 50gr',
        'link' => 'https://shopee.co.id/SENKA-Perfect-Whip-Fresh-Anti-Shine-Facial-Foam-From-Japan-Untuk-Kulit-Berminyak-50g-100g-i.744873.9426612379?sp_atk=8b456330-925e-4ac7-838f-df1fd2725cd5&xptdk=8b456330-925e-4ac7-838f-df1fd2725cd5',
        'description' => 'Perfect Whip Fresh adalah produk unggulan sekaligus favorit di negara Jepang dan Korea!

Facial Foam SENKA Perfect Whip - Anti Shine. Untuk jenis kulit kombinasi hingga kulit berminyak. Mampu membersihkan debu serta polusi yang menyumbat pori dan mengontrol kelebihan sebum pada wajah. Mengandung White cocoon essence & double hyaluronic acid. Diperkaya dengan bahan terbaik dari Jepang yaitu Uji green tea yang membersihkan,melembabkan dan membuat tampilan kulit terlihat tidak mengkilap (matte) lebih lama. SENKA Perfect Whip - Anti Shine menghasilkan busa berlimpah dengan bahan aktif Uji Green Tea yang dikenal dengan anti oksidan yang tinggi, menyegarkan, menjaga kulit bebas minyak lebih lama dan kulit cantik alami (Beautiful Bare Skin)

Tersedia ukuran 100 gram dan 50 gram 

Cara Pemakaian :
Basahi tangan, keluarkan produk secukupnya (lebih kurang 2 cm) pada telapak tangan. Buatlah busa kemudian usap lembut pada wajah anda. Bilas dengan air hingga bersih.

Komposisi :
Water, Uji Green Tea Essence, White Cocoon Essence, Stearic Acid, Peg-8, Myristic Acid, Potassium Hydroxide, Glycerin, Lauric Acid, Alcohol, Butylene glycol.',
        'price' => 25900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    126 => 
    array (
        'id' => 127,
        'brand_id' => 59,
    'name' => 'PIGEON TEENS Facial Foam Daily Mild Cleansing 40ml - 100ml (For Normal to Dry Skin)',
        'variation' => 'Daily Mild Cleans100',
    'link' => 'https://shopee.co.id/PIGEON-TEENS-Facial-Foam-Daily-Mild-Cleansing-40ml-100ml-(For-Normal-to-Dry-Skin)-i.744873.13144088932?sp_atk=f64e3ab1-d1d4-4a1a-9b93-c42d45b5976a&xptdk=f64e3ab1-d1d4-4a1a-9b93-c42d45b5976a',
        'description' => 'Pigeon Teens Facial Foam Daily Mild Cleansing diformulasikan khusus untuk kulit remaja yang normal ataupun kulit kering. Membersihkan wajah dari debu, kotoran dan sisa make up.

Diperkaya dengan :
• Esktrak Jojoba membantu menjaga kelembapan kulit.
• Esktrak Chamomile membantu melindungi kulit dari iritasi ringan.

Highlight :
• Non-comedogenic & Non-acnegenic
• 0% coloring agent
• pH balance

Cara pakai :
Keluarkan isi secukupnya di telapak tangan, busakan. Usapkan pada wajah dan pijat dengan lembut. Bilas hingga bersih. Untuk hasil terbaik, lanjutkan dengan menggunakan PIGEON Teens Moisturizer untuk kulit sehat, bersih dan lembut. Gunakan setiap pagi dan malam hari.',
        'price' => 18900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:50',
        'updated_at' => '2022-06-27 15:30:50',
    ),
    127 => 
    array (
        'id' => 128,
        'brand_id' => 59,
    'name' => 'PIGEON TEENS Facial Foam Acne Care 100 ml / Sabun Muka / Pembersih Wajah 100ml (For Acne Prone Skin)',
        'variation' => 'FF Acne Care 100ML',
    'link' => 'https://shopee.co.id/PIGEON-TEENS-Facial-Foam-Acne-Care-100-ml-Sabun-Muka-Pembersih-Wajah-100ml-(For-Acne-Prone-Skin)-i.744873.13144521525?sp_atk=bd56d3e5-78bb-4192-86bc-8122219c5eff&xptdk=bd56d3e5-78bb-4192-86bc-8122219c5eff',
        'description' => 'Pigeon Teens Facial Foam Acne Care diformulasikan khusus untuk kulit remaja yang berjerawat. Membersihkan wajah dari debu, kotoran dan sisa make up.

Diperkaya dengan :
• Esktrak Jojoba membantu menjaga kelembapan kulit.
• Esktrak Chamomile membantu melindungi kulit dari iritasi ringan.
• Isopropylmethylphenol membantu melawan bakteri penyebab jerawat.

Highlight :
• Non-comedogenic & Non-acnegenic
• 0% coloring agent
• pH balance

Cara pakai :
Keluarkan isi secukupnya di telapak tangan, busakan. Usapkan pada wajah dan pijat dengan lembut. Bilas hingga bersih. Untuk hasil terbaik, lanjutkan dengan menggunakan PIGEON Teens Moisturizer untuk kulit sehat, bersih dan lembut. Gunakan setiap pagi dan malam hari.',
        'price' => 21800,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    128 => 
    array (
        'id' => 129,
        'brand_id' => 5,
        'name' => 'Pond\'s Juice Collection Glow In A Flash Facial Cleanser | Ponds Sabun Cuci Muka Facial Wash',
        'variation' => 'FW Aloe Vera',
        'link' => 'https://shopee.co.id/Pond\'s-Juice-Collection-Glow-In-A-Flash-Facial-Cleanser-Ponds-Sabun-Cuci-Muka-Facial-Wash-i.744873.4672411990?sp_atk=c2969dad-bcbc-467f-9f7c-601efd77c150&xptdk=c2969dad-bcbc-467f-9f7c-601efd77c150',
        'description' => 'Aloe Vera
Gel Cleanser yang diperkaya dengan Aloe Vera Extract dan Vitamin B3, kulit terasa lembap, sejuk dan segar. Mild foam yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up ringan, untuk kulit fresh glowing.

Orange Nectar
Facial Cleanser yang diperkaya dengan Orange Nectar, mencerahkan wajah dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.

Watermelon
Facial Cleanser yang diperkaya dengan Watermelon Extract, kulit terasa halus dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.',
        'price' => 43700,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    129 => 
    array (
        'id' => 130,
        'brand_id' => 5,
        'name' => 'Pond\'s Juice Collection Glow In A Flash Facial Cleanser | Ponds Sabun Cuci Muka Facial Wash',
        'variation' => 'FW Watermelon',
        'link' => 'https://shopee.co.id/Pond\'s-Juice-Collection-Glow-In-A-Flash-Facial-Cleanser-Ponds-Sabun-Cuci-Muka-Facial-Wash-i.744873.4672411990?sp_atk=c2969dad-bcbc-467f-9f7c-601efd77c150&xptdk=c2969dad-bcbc-467f-9f7c-601efd77c150',
        'description' => 'Aloe Vera
Gel Cleanser yang diperkaya dengan Aloe Vera Extract dan Vitamin B3, kulit terasa lembap, sejuk dan segar. Mild foam yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up ringan, untuk kulit fresh glowing.

Orange Nectar
Facial Cleanser yang diperkaya dengan Orange Nectar, mencerahkan wajah dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.

Watermelon
Facial Cleanser yang diperkaya dengan Watermelon Extract, kulit terasa halus dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.',
        'price' => 25900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    130 => 
    array (
        'id' => 131,
        'brand_id' => 5,
        'name' => 'Pond\'s Juice Collection Glow In A Flash Facial Cleanser | Ponds Sabun Cuci Muka Facial Wash',
        'variation' => 'FW Orange Nectar',
        'link' => 'https://shopee.co.id/Pond\'s-Juice-Collection-Glow-In-A-Flash-Facial-Cleanser-Ponds-Sabun-Cuci-Muka-Facial-Wash-i.744873.4672411990?sp_atk=c2969dad-bcbc-467f-9f7c-601efd77c150&xptdk=c2969dad-bcbc-467f-9f7c-601efd77c150',
        'description' => 'Aloe Vera
Gel Cleanser yang diperkaya dengan Aloe Vera Extract dan Vitamin B3, kulit terasa lembap, sejuk dan segar. Mild foam yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up ringan, untuk kulit fresh glowing.

Orange Nectar
Facial Cleanser yang diperkaya dengan Orange Nectar, mencerahkan wajah dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.

Watermelon
Facial Cleanser yang diperkaya dengan Watermelon Extract, kulit terasa halus dan menyegarkan. Busa creamy yang lembut dapat membersihkan kulit dari polusi debu dan kotoran serta make-up, untuk kulit fresh glowing.',
        'price' => 43700,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    131 => 
    array (
        'id' => 132,
        'brand_id' => 60,
        'name' => 'Fair & Lovely Facial Wash Multivitamin 9gr - Sabun Cuci Muka Wanita - Glow & Lovely - Fair and Lovely - Glow and Lovely',
        'variation' => 'FF Multivitamin 9g',
        'link' => 'https://shopee.co.id/Fair-Lovely-Facial-Wash-Multivitamin-9gr-Sabun-Cuci-Muka-Wanita-Glow-Lovely-Fair-and-Lovely-Glow-and-Lovely-i.744873.14323402659?sp_atk=1b0f7fd6-ef24-4570-a5d8-54065490695d&xptdk=1b0f7fd6-ef24-4570-a5d8-54065490695d',
        'description' => 'Fair and Lovely Facial Foam pencerah wajah busanya kaya dengan kandungan Tri-Fair Vitamin Complex dan anti-oksiden sehingga membantu mengangkat kotoran di wajah secara lembut dan memberikan wajah lebih cerah.
Fair & Lovely (kini Glow & Lovely) merupakan sebuah brand pelopor perawatan kulit wajah wanita di dunia yang telah berhasil menemukan dan mempatenkan kekuatan dari vitamin B3 di tahun 1975. Kandungan Vitamin B3 inilah yang dapat membatasi penyebaran melanin di dalam kulit sehingga mampu menghasilkan kulit yang lebih cerah merata.

•Wajah lebih bersih cerah seketika
•Wajah terasa lebih lembut dan halus
•Mengurangi noda hitam pada wajah
•Menghilangkan noda bekas jerawat
•Mencerahkan wajah kusam',
        'price' => 2700,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    132 => 
    array (
        'id' => 133,
        'brand_id' => 57,
        'name' => 'Acnes Washing Bar 80gr | Sabun Batang | Sabun Jerawat',
        'variation' => 'Acnes Washing Bar',
        'link' => 'https://shopee.co.id/Acnes-Washing-Bar-80gr-Sabun-Batang-Sabun-Jerawat-i.744873.1726308934?sp_atk=674a42d6-448d-4916-a134-7d043ead3a27&xptdk=674a42d6-448d-4916-a134-7d043ead3a27',
        'description' => 'Acnes Washing Bar
Sabun batangan yang lembut untuk mengatasi masalah jerawat di badan (terutama bagian dada & punggung)Melembutkan dan merawat tubuh yang berjerawatMengurangi & mencegah kemerahan pada kulit akibat jerawat

Cara pakai: Busakan sabun secara merata, terutama di bagian tubuh yang berjerawat seperti punggung dan dada. Gunakan setiap hari pada waktu mandi.tubuh yang berjerawat seperti punggung dan dada. Gunakan setiap hari pada waktu mandi.',
        'price' => 7000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    133 => 
    array (
        'id' => 134,
        'brand_id' => 11,
        'name' => 'Wardah Seaweed Balancing Facial Wash 60ml Nature Daily | Pembersih Wajah',
        'variation' => 'Seaweed Facial Wash',
        'link' => 'https://shopee.co.id/Wardah-Seaweed-Balancing-Facial-Wash-60ml-Nature-Daily-Pembersih-Wajah-i.744873.4520723198?sp_atk=e05621a1-7be7-426f-ad92-7aa1f3bb4086&xptdk=e05621a1-7be7-426f-ad92-7aa1f3bb4086',
        'description' => 'Wardah Nature Daily Seaweed Balancing Facial Wash merupakan sabun wajah mengangkat sel kulit mati tanpa menghilangkan kelembaban kulit, sehingga tampak bersih dan terlihat lebih segar. Cocok untuk semua jenis kulit

- Balancing Seaweed Extract
Ekstrak rumput laut pilihan yang dikenal bantu mempertahankan kondisi kulit normal.

- DermaClear+ Formula
Formila pH balance natural dengan busa lembut yang bersihkan kotoran dan minyak  berlebih hingga ke dalam pori-pori.

Cara pakai:
Busakan secukupnya dan aplikasikan pada wajah dan leher. Bilas hingga bersih. Hindari kontak daerah mata.
mbersih wajah dengan bursa wangi yang ringan dan formula pH balance sehingga lembut untuk kulit. kulit wajah bersih, segar dan tetap terasa lembab',
        'price' => 12500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    134 => 
    array (
        'id' => 135,
        'brand_id' => 57,
        'name' => 'Acnes Oil Control Face Wash | Acne Face Wash | Sabun Wajah | Anti Acne | 50gr | 100gr | Pembersih Wajah',
        'variation' => 'Oil Control FW 100gr',
        'link' => 'https://shopee.co.id/Acnes-Oil-Control-Face-Wash-Acne-Face-Wash-Sabun-Wajah-Anti-Acne-50gr-100gr-Pembersih-Wajah-i.744873.1718268530?sp_atk=721776e5-4c5a-44bb-a659-8c72a9ef23ce&xptdk=721776e5-4c5a-44bb-a659-8c72a9ef23ce',
        'description' => 'Acnes Facewash Oil Control merupakan salah satu rangkaian produk perawatan wajah dari Acnes yang bekerja membersihkan wajah dari minyak berlebih Sabun pembersih wajah dari Acnes ini mengandung 8 ektrak tanaman pengurang minyak berlebih dan mencegah timbulnya jerawat Butiran microbeadsnya lembut dan mampu membersihkan sampai ke pori Berguna juga untuk menjaga kelembaban dan kelembutan alami kulit.

Cara pemakaian:
Basahi wajah Anda dan tuangkan Acnes Facewash Oil Control secukupnya Usapkan secara merata Rasakan sensasi wajah yang bersih setiap hari berkat Acnes Facewash Oil Control 100G yang peduli akan kecantikan wajahmu.',
        'price' => 23000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    135 => 
    array (
        'id' => 136,
        'brand_id' => 61,
        'name' => 'Emina Bright Stuff for Acne Prone Skin Moisturizing Cream | Acne Prone Skin Face Wash',
        'variation' => 'Acne Moistur. Cream',
        'link' => 'https://shopee.co.id/Emina-Bright-Stuff-for-Acne-Prone-Skin-Moisturizing-Cream-Acne-Prone-Skin-Face-Wash-i.744873.7033647802?sp_atk=51c956eb-7af9-40e0-a14f-51f1571e22ac&xptdk=51c956eb-7af9-40e0-a14f-51f1571e22ac',
        'description' => 'Siap untuk terlihat lebih cerah?? EMINA Bright Stuff Face Wash For Acne Prone Skin
dengan extract summer plum dan double brightening power di dalamnya akan membantumu!

Dikombinasikan dengan ekstrak cinnamon bark untuk kulit rentan berjerawat, kotoran dan minyak berlebih terangkat tanpa membuatmu kering. Kini kulitmu lebih bersih, cerah dan glowing. Non comedogenic.',
        'price' => 19200,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    136 => 
    array (
        'id' => 137,
        'brand_id' => 61,
        'name' => 'Emina Bright Stuff for Acne Prone Skin Moisturizing Cream | Acne Prone Skin Face Wash',
        'variation' => 'Acne Face Wash 50 ml',
        'link' => 'https://shopee.co.id/Emina-Bright-Stuff-for-Acne-Prone-Skin-Moisturizing-Cream-Acne-Prone-Skin-Face-Wash-i.744873.7033647802?sp_atk=51c956eb-7af9-40e0-a14f-51f1571e22ac&xptdk=51c956eb-7af9-40e0-a14f-51f1571e22ac',
        'description' => 'Siap untuk terlihat lebih cerah?? EMINA Bright Stuff Face Wash For Acne Prone Skin
dengan extract summer plum dan double brightening power di dalamnya akan membantumu!

Dikombinasikan dengan ekstrak cinnamon bark untuk kulit rentan berjerawat, kotoran dan minyak berlebih terangkat tanpa membuatmu kering. Kini kulitmu lebih bersih, cerah dan glowing. Non comedogenic.',
        'price' => 13200,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    137 => 
    array (
        'id' => 138,
        'brand_id' => 55,
        'name' => 'Hada Labo Shirojyun Ultimate Whitening Face Wash Sabun Wajah | Hadalabo',
        'variation' => 'Shirojyun UW FW 50ml',
        'link' => 'https://shopee.co.id/Hada-Labo-Shirojyun-Ultimate-Whitening-Face-Wash-Sabun-Wajah-Hadalabo-i.744873.1530424185?sp_atk=66c04b43-392d-418d-97f6-53fc48bc756f&xptdk=66c04b43-392d-418d-97f6-53fc48bc756f',
        'description' => 'Hada Labo - Shirojyun Ultimate Whitening Face Wash mengangkat kotoran dan minyak dari kulit sekaligus mencerahkan. Diperkaya dengan Arbutin dan whitening Extract untuk efek pencerah ganda. Membantu membuat warna kulit lebih merata sehingga terlihat lebih cerah. Mengandung Hyaluronic Acid untuk meningkatkan kelembaban secara intensif sehingga kulit terasa tetap elastis.

Cara Pakai :
Tuangkan secukupnya pada telapak tangan. Usapkan ke seluruh wajah secara perlahan dan merata.
Bilas hingga bersih dengan air, hindari daerah mata.',
        'price' => 19500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    138 => 
    array (
        'id' => 139,
        'brand_id' => 57,
        'name' => 'Acnes Face Wash Complete White 100 gr | 50 gr Pembersih Wajah | Facial Wash',
        'variation' => 'Complete White 50gr',
        'link' => 'https://shopee.co.id/Acnes-Face-Wash-Complete-White-100-gr-50-gr-Pembersih-Wajah-Facial-Wash-i.744873.1718206863?sp_atk=37d61897-2cfb-4c64-b9f5-ef91a5070369&xptdk=37d61897-2cfb-4c64-b9f5-ef91a5070369',
        'description' => 'Acnes Natural Care Complete White Facewash membersihkan wajah, melawan bakteri penyebab jerawat sehingga membantu mencegah jerawat, sekaligus mencerahkan dan menyamarkan bekas jerawat. Kulit bersih dan terjaga kelembabannya serta tampak lebih cerah

Cara Pakai: 
Basahi wajah, keluarkan secukupnya dan busakan Acnes Natural Care Complete White Facewash. Usapkan ke seluruh wajah dengan lembut lalu bilas. Gunakan 2 - 3 kali sehari untuk membersihkan wajah.',
        'price' => 14000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    139 => 
    array (
        'id' => 140,
        'brand_id' => 16,
        'name' => 'Garnier Bright Complete Face Wash 50ml - Sakura Glow Hyaluron Face Wash 50ml | Scrub',
        'variation' => 'Super Whip Foam 50ml',
        'link' => 'https://shopee.co.id/Garnier-Bright-Complete-Face-Wash-50ml-Sakura-Glow-Hyaluron-Face-Wash-50ml-Scrub-i.744873.9808206633?sp_atk=2ee90917-ee98-4034-8dbb-f9cc93323169&xptdk=2ee90917-ee98-4034-8dbb-f9cc93323169',
        'description' => 'Garnier Bright Complete Vitamin C Face Wash diperkaya dengan kandungan vitamin pencerah C tertinggi dari rangkaian Garnier Bright Complete lainnya, pure lemon essence & ekstrak Moringa untuk membersihkan wajah dengan lembut dan bantu cerahkan kulit wajah.

Manfaat:
Pembersih wajah yang dapat membersihkan wajah secara menyeluruh hingga 10 lapisan make-up dan polusi dalam sekali bilas.
Cara pemakaian:
Sebelumnya basahi wajah dengan air. Kemudian tuangkan Garnier Bright Complete Foam pada telapak tangan, beri sedikit air, dan gosok kedua telapak tangan hingga berbusa. Cuci seluruh wajah dengan telapak tangan dalam gerakan memutar. Hindari bagian mata. Bilas busa untuk membersihkan.
Garnier Sakura White Pinkish Glow Whip Foam 50Ml
Whip foam pertama dari Garnier dengan ekstrak sakura dan hyaluron serum, busa lembut dan padat membersihkan pori-pori secara menyeluruh. Kulit tidak terasa kaku, tampak lebih cerah dan elastis, sehalus kulit bayi sejak hari ke-3.

Foam pembersih wajah yang membersihkan wajah dengan lembut dan membantu mencerahkan kulit wajah. 

Sabun cuci muka dengan bahan alami yang berguna untuk membersihkan wajah dengan lembut dan membantu mencerahkan kulit wajah. Aroma yang terdapat di dalamnya membuat kulit terasa segar setelah menggunakannya.',
        'price' => 16900,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    140 => 
    array (
        'id' => 141,
        'brand_id' => 50,
        'name' => 'Emina Ms Pimple Acne Solution Face Wash',
        'variation' => 'Ms Pimple Face Wash',
        'link' => 'https://shopee.co.id/Emina-Ms-Pimple-Acne-Solution-Face-Wash-i.744873.2058662601?sp_atk=e88d6c7c-93e6-4128-8c3e-92ed1fd42ac3&xptdk=e88d6c7c-93e6-4128-8c3e-92ed1fd42ac3',
        'description' => 'Emina Ms Pimple Acne Solution Series merupakan seri skin care Emina yang diperuntukkan untuk merawat kulit acne prone. Series ini terdiri dari face wash, face toner, moisturizing gel dan spot gel sebagai tahap pembersihan hingga perawatan. Kandungan Salicylic Acid membantu mempercepat regenerasi kulit dan mencegah pertumbuhan bakteri serta Rosebay Willowherb Extract yang efektif mengurangi kemerahan pada kulit. Kandungan Witch Hazel Extract dan Zinc Gluconate nya mampu mengontrol produksi sebum dan mengurangi tampilan kulit berminyak. Emina Ms Pimple Acne Solution Face Wash adalah sabun pembersih wajah ringan yang diformulasikan untuk kulit berjerawat maupun kulit terasa kering. Mengandung Salicylic Acid dan Allantoin yang membantu mempercepat regenerasi kulit dan mencegah pertumbuhan bakteri penyebab jerawat dengan tetap menjaga kelembaban kulit.

Manfaat : -Tekstur gelnya membuat nyaman dan lembut saat digunakan-Kandungan formulanya membantu merawat kulit agar terhindar dari penyebab jerawat-Mampu mengangkat kotoran dan minyak berlebih pada wajah-Membuat kulit merasa bersih dan segar tanpa terasa kering. Cara Penggunaan : Aplikasikan produk pada wajah dengan air, gosok lalu bilas dengan air hingga bersih. ',
        'price' => 14500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    141 => 
    array (
        'id' => 142,
        'brand_id' => 50,
        'name' => 'Emina Skin Buddy SERIES | Face Wash, Scrub 60ml Dot Burst, Double Bubble',
        'variation' => 'Dot Brush Face Wash',
        'link' => 'https://shopee.co.id/Emina-Skin-Buddy-SERIES-Face-Wash-Scrub-60ml-Dot-Burst-Double-Bubble-i.744873.8512686214?sp_atk=e162b66f-80d7-4ee6-9fe7-95448cd2354c&xptdk=e162b66f-80d7-4ee6-9fe7-95448cd2354c',
        'description' => 'Untuk jenis kulit kering dan sensitif

Series emina skin buddy dalam satu album terdiri dari :

Skin Buddy Bubble Up Face Wash
diperuntukan untuk jenis kulit normal cenderung berminyak dan Skin Buddy Dot Burst Face Wash merupakan gel cleanser untuk jenis kulit normal cenderung kering.

Emina Skin Buddy Bubble Up Face Wash
Cocok untuk kulit normal to oily skin Formula lebih mild dan gentle, cocok untuk My First Skincare Product + Dermatologically Tested. Ekstrak Calendula dan Hyaluronic Acid sebagai soothing & moisturizing agent

Emina Skin Buddy Dot Burst Face Wash
Cocok untuk kulit normal to dry skin Formula lebih mild dan gentle, cocok untuk My First Skincare Product + Dermatologically Tested Ekstrak Calendula dan Hyaluronic Acid sebagai soothing & moisturizing agent ',
        'price' => 14000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    142 => 
    array (
        'id' => 143,
        'brand_id' => 11,
        'name' => 'Wardah C-Defense Energizing Creamy Wash | C Defense Energizing Creamy Wash',
        'variation' => 'Creamy Wash 100ml',
        'link' => 'https://shopee.co.id/Wardah-C-Defense-Energizing-Creamy-Wash-C-Defense-Energizing-Creamy-Wash-i.744873.522926375?sp_atk=df125e0c-7a42-4541-b349-97c35765e3cb&xptdk=df125e0c-7a42-4541-b349-97c35765e3cb',
        'description' => '[INDIKASI]
- Produk perawatan wajah terbaru dari Wardah C-Defense series
- Mild dan Fresh dengan 3 aksi jitu
- Mengandung Antioksidan Hi-Grade Vitamin C & Active Moist Complex
- Busa berlimpah membantu mengangkat kotoran, make up, dan minyak berlebih
- Kulit tampak cerah dan terjaga kelembabannya
- Aroma Citrus menyegarkan

Cara Pakai:
- Basahi dengan air, busakan di wajah
- Pijat lembut dan bilas hingga bersih
- Hindari daerah mata',
        'price' => 24000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:51',
        'updated_at' => '2022-06-27 15:30:51',
    ),
    143 => 
    array (
        'id' => 144,
        'brand_id' => 62,
        'name' => 'SCARLET Whitening Facial Wash Scarlett By Felicya Angelista | Scarlett Whitening Acne Facial Wash 100ml | Face Wash | Pembersih Wajah',
        'variation' => 'Acne Facial Wash',
        'link' => 'https://shopee.co.id/SCARLET-Whitening-Facial-Wash-Scarlett-By-Felicya-Angelista-Scarlett-Whitening-Acne-Facial-Wash-100ml-Face-Wash-Pembersih-Wajah-i.744873.2478694991?sp_atk=de95c285-5d0e-4b96-a849-70e2ff934017&xptdk=de95c285-5d0e-4b96-a849-70e2ff934017',
        'description' => 'Facial Wash mengandung Glutathione, Vitamin E, Rose Petals, dan Aloe Vera yang sangat bagus untuk :
1. mencerahkan kulit wajah.
2. menutrisi kulit wajah.
3. mengontrol kadar minyak berlebih diwajah.
4. mengecilkan pori-pori diwajah.
5. sangat bagus untuk meregenerasi kulit wajah agar tampak lebih kencang.
6. membantu menghilangkan beruntus/jerawat.

Kandungan aloevera yang menyejukan juga dapat melembabkan kulit wajah, jadi kulit akan terasa lebih lembut. 

Available Varian :
- For Oily Skin
- For Normal Skin',
        'price' => 57000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    144 => 
    array (
        'id' => 145,
        'brand_id' => 63,
        'name' => 'Nivea Sparkling Bright Whitening Facial Foam 50ml - 100ml',
        'variation' => 'Face Wash 100 ml',
        'link' => 'https://shopee.co.id/Nivea-Sparkling-Bright-Whitening-Facial-Foam-50ml-100ml-i.744873.7317028713?sp_atk=d1f7df6c-d4a6-4bd0-a853-b054493c7ee2&xptdk=d1f7df6c-d4a6-4bd0-a853-b054493c7ee2',
        'description' => 'Mencerahkan, membersihkan dan memancarkan aura cantikmu.
Menyamarkan noda hitam dalam 7 hari.

Kandungan Pearl-Whitening Complex membantu mencerahkan kulit 10x lebih baik dibandingkan Vitamin C. 
Dengan busa lembut mampu membersihkan make-up dan mengangkat kotoran pada wajah sekaligus menjaga kelembaban alami kulit.

NIVEA Visage Sparkling White Facial Foam membersihkan secara menyeluruh dan mencerahkan serta menghaluskan kulit secara efektif. Kombinasi Rucinol, Licorice dan Vitamin C mencegah terbentuknya melanin penyebab kulit kusam dan mengurangi spot hitam sehingga wajah 10X lebih cerah.

Telah diuji secara dermatologi cocok untuk kulit.',
        'price' => 22000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    145 => 
    array (
        'id' => 146,
        'brand_id' => 19,
        'name' => 'Azarine Acne Gentle Cleansing Foam 60ml | Azarine Acne Pembersih Muka',
        'variation' => 'Acne Gentle Foam',
        'link' => 'https://shopee.co.id/Azarine-Acne-Gentle-Cleansing-Foam-60ml-Azarine-Acne-Pembersih-Muka-i.744873.9140814352?sp_atk=42989b96-9fdf-4d0b-b645-253cbf1d5b81&xptdk=42989b96-9fdf-4d0b-b645-253cbf1d5b81',
    'description' => 'Pembersih wajah bebas minyak untuk kulit BERJERAWAT, BERMINYAK & PORI PORI BESAR. Kandungan alami Portulaca ( anti-irritant ), honey dan salicylic acid membantu mencegah pertumbuhan bakteri penyebab jerawat dan mengangkat kelebihan minyak pada wajah. Ekstrak lemon membantu merawat dan mengecilkan pori. Rasakan indahnya kulit sehat bebas jerawat & pori pori lebih kecil.

Dengan mild surfactant, sehingga tidak mengeringkan kulit dan meredam iritasi akibat jerawat. 

KEUNGGULAN:
Gentle & deep cleansing
Sebum Control
Anti bacteria
Oil free
Pore minimizer
Herbal & Natural

Cara Pakai :
Tuangkan secukupnya pada telapak tangan , basahi dengan air , gosok diwajah, lalu bilas . Untuk hasil yang maksimal gunakan rangkain Azarine Acne Series (acne spot gel & acne mark fading lotion).',
        'price' => 25500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    146 => 
    array (
        'id' => 147,
        'brand_id' => 11,
        'name' => 'WARDAH Crystal Secret Foaming Cleanser | White Secret Facial Wash With Natural AHA 100ml',
        'variation' => 'Foaming Clnsr 100ml',
        'link' => 'https://shopee.co.id/WARDAH-Crystal-Secret-Foaming-Cleanser-White-Secret-Facial-Wash-With-Natural-AHA-100ml-i.744873.1549214399?sp_atk=78b48eb8-39a2-493a-ae49-731f479e93ec&xptdk=78b48eb8-39a2-493a-ae49-731f479e93ec',
        'description' => 'Pembersih muka dengan mild surfactant yang membantu membersihkan kotoran, debu, minyak dan sisa make up. Wajah tampak lebih bersih dan cerah dengan kandungan AHA yang membantu mengangkat sel kulit mati tanpa membuat kulit wajah menjadi kering.

Cara Pemakaian :
Gunakan pada pagi dan malam hari. Tuangkan pada telapak tangan, lalu busakan dengan air. Aplikasikan pada wajah dengan pijatan ringan kemudian bilas dengan air hingga bersih.',
        'price' => 24500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    147 => 
    array (
        'id' => 148,
        'brand_id' => 57,
        'name' => 'Acnes Creamy Wash Foaming WashingBar Complete White Oil Control | Sabun Cuci Muka Anti Jerawat Badan',
        'variation' => 'Foaming Wash 100ml',
        'link' => 'https://shopee.co.id/Acnes-Creamy-Wash-Foaming-WashingBar-Complete-White-Oil-Control-Sabun-Cuci-Muka-Anti-Jerawat-Badan-i.744873.7649562353?sp_atk=e7caa489-bb12-46f9-90f3-81ca82997601&xptdk=e7caa489-bb12-46f9-90f3-81ca82997601',
        'description' => 'Foaming WASH
CARA PAKAI
Basahi wajah sista dan keluarkan Face Wash secukupnya pada telapak tangan lalu gosok hingga berbusa
Usapkan secara merata keseluruh permukaan wajah dan bilas dengan air.',
        'price' => 29000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    148 => 
    array (
        'id' => 149,
        'brand_id' => 16,
        'name' => 'GARNIER Light Complete Whitening Serum Cream | Garnier Sakura White Whitening Serum Cream | Garnier Light Complete Brightening Foam | Garnier Sakura White Pinkish Glow Foam 9ml - 7ml SACHET - Krim Siang - Pembersih Wajah',
        'variation' => 'LC FOAM SACHET 9ml',
        'link' => 'https://shopee.co.id/GARNIER-Light-Complete-Whitening-Serum-Cream-Garnier-Sakura-White-Whitening-Serum-Cream-Garnier-Light-Complete-Brightening-Foam-Garnier-Sakura-White-Pinkish-Glow-Foam-9ml-7ml-SACHET-Krim-Siang-Pembersih-Wajah-i.744873.14210633937?sp_atk=782606bb-b349-4c7c-bd94-bc218c5f876d&xptdk=782606bb-b349-4c7c-bd94-bc218c5f876d',
        'description' => '8 Jam Tanpa Kilap
Pelembap wajah yang melembapkan dan wajah lebih putih cerah hingga 3 tingkat dan bebas kilap seharian
Inovasi baru dari Garnier Light Complete Multi-Action Whitening Cream. Formula baru dengan tekstur ringannya membantu mengurangi kekusaman wajah dan minyak berlebih.
Selain itu, juga menyamarkan bintik hitam dan noda bekas jerawat agar wajah tampak lebih cerah dan bening.
Diperkaya dengan Whitening Vitamin (B3), Vitamin E 50% lebih banyak, Sari Lemon, dan Salicylic Acid Derivative.
Formula barunya memberikan manfaat yang lebih komplit: Hingga 3 tingkat/tona lebih cerah, menyamarkan bintik hitam dan bekas jerawat, 8 jam bebas kilap, meratakan warna kulit, efek kurangi minyak berlebih yang tahan lama.

"Sakura White Pinkish Radiance Whitening Cream (Day)

Baru! Krim wajah untuk wajah putih cerah merona, diperkaya dengan Ekstrak Sakura - bunga lembut dari Jepang.
Dengan paduan ekstrak Sakura dan Whitening Vitamin (B3 & CG), krim ini menutrisi kulit wajah, membantu mencerahkan warna kulit, dan menyamarkan noda hitam. Kulit terasa halus dan pori-pori tampak kecil."',
        'price' => 3400,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    149 => 
    array (
        'id' => 150,
        'brand_id' => 11,
        'name' => 'Wardah CRYSTALLURE Moisture Rich Cleansing Foam 100ml - Pembersih wajah anti-aging yang melembabkan',
        'variation' => 'Cleansing Foam 100ml',
        'link' => 'https://shopee.co.id/Wardah-CRYSTALLURE-Moisture-Rich-Cleansing-Foam-100ml-Pembersih-wajah-anti-aging-yang-melembabkan-i.744873.11785885915?sp_atk=3a2b40ef-5acc-46cd-9112-9a2c2596717c&xptdk=3a2b40ef-5acc-46cd-9112-9a2c2596717c',
        'description' => 'Pembersih wajah anti-aging yang melembabkan

Pembersih wajah dengan kandungan anti-aging Gold-Peptide Crystals dan Amino Ectoin yang dapat mengurangi tampilan garis halus sebanyak 21% (hasil uji klinis kepada 18 perempuan dengan rentang umur 27-40 tahun setelah penggunaan selama 14 hari).

Dengan Skin-mimetic Technology yang bisa meniru struktur amino kulit, Natural Moisturizing Factor, dan juga pH kulit sehingga bisa memperkuat skin barrier setelah penggunaan.',
        'price' => 100500,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    150 => 
    array (
        'id' => 151,
        'brand_id' => 62,
        'name' => 'SCARLET Whitening Facial Wash Scarlett By Felicya Angelista | Face Wash | Pembersih Wajah',
        'variation' => 'F. Wash -Normal Skin',
        'link' => 'https://shopee.co.id/SCARLET-Whitening-Facial-Wash-Scarlett-By-Felicya-Angelista-Face-Wash-Pembersih-Wajah-i.744873.18603743191?sp_atk=acf17089-1b82-4d7d-afc4-8c5e27db7905&xptdk=acf17089-1b82-4d7d-afc4-8c5e27db7905',
        'description' => 'Facial Wash mengandung Glutathione, Vitamin E, Rose Petals, dan Aloe Vera yang sangat bagus untuk :
1. mencerahkan kulit wajah.
2. menutrisi kulit wajah.
3. mengontrol kadar minyak berlebih diwajah.
4. mengecilkan pori-pori diwajah.
5. sangat bagus untuk meregenerasi kulit wajah agar tampak lebih kencang.
6. membantu menghilangkan beruntus/jerawat.

Kandungan aloevera yang menyejukan juga dapat melembabkan kulit wajah, jadi kulit akan terasa lebih lembut. 

Available Varian :
- For Oily Skin
- For Normal Skin',
        'price' => 57000,
        'category' => 'Facial Foam',
        'created_at' => '2022-06-27 15:30:52',
        'updated_at' => '2022-06-27 15:30:52',
    ),
    151 => 
    array (
        'id' => 152,
        'brand_id' => 12,
        'name' => 'NPURE Face Foam/Wash Marigold 100ml - N\'Pure Marigold - Anti Aging Facial Wash - Sabun Cuci Muka',
        'variation' => 'Facial Wash 100ml',
        'link' => 'https://shopee.co.id/NPURE-Face-Foam-Wash-Marigold-100ml-N\'Pure-Marigold-Anti-Aging-Facial-Wash-Sabun-Cuci-Muka-i.744873.10883527918?sp_atk=3e2e0c90-0441-4a58-9c1d-650404f18892&xptdk=3e2e0c90-0441-4a58-9c1d-650404f18892',
        'description' => 'Npure Marigold Deep Cleansing Foaming Face Wash merupakan pembersih multifungsional yang memiliki 4 fungsi dalam 1 produk yaitu dapat membersihkan kotoran-kotoran yang menempel di wajah hingga ke pori-pori, mencerahkan, melembutkan menutrisi kulit, dan mencegah penuaan dini.

Foaming face wash dari Npure ini sangat cocok untuk semua jenis kulit dan direkomendasikan *untuk semua jenis kulit, termasuk kulit sensitive.

KandunganNpure Marigold Deep Cleansing Foaming Face Wash:
- Extract Kelopak Bunga Marigold (Calendulanya Indonesia); mengandung Karotenoid. yakni sebuah pikmen organik yang terdapat dalam tumbuhan. Pigmen ini berperan sebagai antioksidan. Tak hanya itu, mengandung Trans-lutein yang memiliki fungsi anti penuaan dini (antiaging) karena terpapar radiasi sinar UVB matahari. Melawan radikal bebas dan juga melembabkan kulit
- Gold ; berfungsi menyamarkan kerutan, garis halus, & noda hitam, menstimulasi pertumbuhan sel kulit, mencegah penuaan dini.
- Collagen ; Seiring dengan bertambahnya usia, produksi kolagen di dalam tubuh juga akan semakin berkurang, padahal kolagen sangat diperlukan untuk tubuh kita. Maka Collagen di sini berfungsi untuk mengencangkan kulit, mencerahkan kulit, mengurangi keriput dan garis halus.
- Vitamin B3 / Niacinamide : Menghidrasi kulit, memperlambat proses perpindahan melanin pada epidermis akibat sinar UV, sehingga resiko pembentukan hiperpigmentasi pun akan berkurang. Meningkatkan produksikolagen dan elastisitas pada kulit. Permukaan dan tekstur kulit menjadi lebih halus, garis halus dan keriput di kulit wajah pun menjadi tersamarkan

KelebihanNpure Marigold Deep Cleansing Foaming Face Wash:
- PARABEN FREE, Bebas Paraben sehingga aman untuk ibu hamil dan menyusui
- SLS FREE (Sodium Lauryl Sulfate), Bebas SLS sehingga tidak menimbulkan iritasi atau membuat kulit tambah kering
- MINERAL OIL FREE, Bebas Mineral Oil yaitu bahan berbahaya yg bersifat Karsinogen (pemicu kanker).
- ALCOHOL FREE, Bebas Alkohol sehingga mencegah iritasi pada kulit sensitif dan Aman untuk semua jenis kulit

Cara Penggunaan :
Tekan Pump hingga keluar busa yang cukup dan pijat lembut ke wajah, bilas bersih dengan air bersih.

Saran Penyimpanan :
- Pastikan kemasan dalam keadaan tertutup setelah pemakaian.
- Jauhkan dari jangkauan anak-anak
- Hindari penyimpanan di temperatur ekstrim (tinggi dan rendah) dan terkena sinar matahari langsung

Peringatan :
- Hentikan pemakaian dan segera hubungi dokter apabila muncul tanda-tanda seperti di bawah ini:
1) Merah, bengkak, gatal, dan tanda alergi lainnya
2) Apabila terjadi tanda-tanda alergi di kulit setelah terkena paparan matahari',
'price' => 116100,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
152 => 
array (
'id' => 153,
'brand_id' => 16,
'name' => 'Garnier Pure Active Anti-Acne & Oil Clearing Foam Cleanser | Garnier Pure Active Acne & Oil Clearing Scrub - 100 ml (Pembersih Wajah)',
'variation' => 'PAAcne&Oil FOAM100ml',
'link' => 'https://shopee.co.id/Garnier-Pure-Active-Anti-Acne-Oil-Clearing-Foam-Cleanser-Garnier-Pure-Active-Acne-Oil-Clearing-Scrub-100-ml-(Pembersih-Wajah)-i.744873.12456745251?sp_atk=35d23a54-e7eb-4186-8fc4-8442fab82941&xptdk=35d23a54-e7eb-4186-8fc4-8442fab82941',
'description' => 'Pembersih wajah untuk kulit bebas dari 12 masalah jerawat dan minyak. Pembersih wajah yang mengandung bahan anti bakteri dan ekstrak blueberry alami yang bantu lawan 12 masalah kulit yang disebabkan oleh jerawat dan minyak; jerawat, bekas jerawat, minyak berlebih, warna kulit tidak rata, kekusaman, kulit agak gelap, efek paparan sinar UV, bintik hitam, kulit tidak halus, pori besar, pori tersumbat, dan komedo.

Produk bisa digunakan untuk pria dan wanita

Cara Penggunaan : 
Berikanlah air secukupnya pada muka Anda, lalu tuangkan Garnier Pure Active Acne & Oil Clearing Foam pada tangan Anda yang sudah dibersihkan. Kemudian basuhkan lah foam tersebut pada wajah Anda dengan menggunakan air. Namun jauhkanlah foam dari kedua mata. Dan basuhlah kembali foam tersebut untuk membersihkannya.

-Pembersih wajah dengan scrub lembut untuk kulit bebas dari 12 masalah jerawat dan minyak.
Pembersih wajah dengan butiran lembut yang mengandung bahan anti bakteri dan ekstrak blueberry alami yang bantu lawan 12 masalah kulit yang disebabkan oleh : 
- Jerawat  - Minyak berlebih  - Bekas jerawat  - Warna kulit tidak rata - Kekusaman  - Kulit agak gelap - Efek paparan sinar UV - Bintik hitam - Kulit tidak halus - Pori besar - Pori tersumbat - Komedo

Cara Penggunaan : 
Berikanlah air secukupnya pada muka Anda, lalu tuangkan Garnier Pure Active Acne & Oil Clearing Scrub pada tangan Anda yang sudah dibersihkan. Kemudian basuhkan lah scrub tersebut pada wajah Anda dengan menggunakan air. Namun jauhkanlah scrub dari kedua mata. Dan basuhlah kembali scrub tersebut untuk membersihkannya.',
'price' => 23900,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
153 => 
array (
'id' => 154,
'brand_id' => 54,
'name' => 'Kojie San Skin Lightening Foam Wash with Hydromoist 150 ml',
'variation' => 'Light Fm Wash 150ml',
'link' => 'https://shopee.co.id/Kojie-San-Skin-Lightening-Foam-Wash-with-Hydromoist-150-ml-i.744873.7290455586?sp_atk=909030be-7656-49dc-ae8d-ceab9e02529a&xptdk=909030be-7656-49dc-ae8d-ceab9e02529a',
'description' => 'Busa ringan yang dengan lembut membersihkan dan menghilangkan kotoran dan minyak berlebih di permukaan kulit wajah. Membantu menenangkan kulit dan membuat kulit menjadi lembut, halus, segar, dan bercahaya..',
'price' => 110500,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
154 => 
array (
'id' => 155,
'brand_id' => 30,
'name' => 'SUKIN Blemish Control Pore Perfecting Toner - Clearing Facial Wash - Spot Banishing Gel',
'variation' => 'Facial Wash 125ml',
'link' => 'https://shopee.co.id/SUKIN-Blemish-Control-Pore-Perfecting-Toner-Clearing-Facial-Wash-Spot-Banishing-Gel-i.744873.9168802919?sp_atk=4a0be643-80ea-4513-a5c1-24e2bf6d046e&xptdk=4a0be643-80ea-4513-a5c1-24e2bf6d046e',
'description' => 'Sukin Blemish Control Clearing Facial Wash 125 ml
•Pembersih wajah
•Untuk kulit acne prone
• Melawan bakteri penyebab jerawat dengan eucalyptus dan tea tree
• Membersihkan kulit secara lembut dan optimal dari debu dan polusiKandungan utama:Eucalyptus, Tea Tree, Pomegranate

Cara penggunaan:
1. Usapkan pada wajah yang basah dan pijat perlahan dengan gerakan memutar, kemudian bilas hingga bersih
2. Lanjutkan dengan scrub atau masker atau toner
3. Gunakan setiap hari, pagi dan malamSukin menghindari penggunaan bahan sintetis yang keras untuk mengeringkan jerawat secara instan. Sukin menggunakan bahan natural yang relatif lebih lembut di kulit untuk melawan penyebab jerawat hingga ke akar, sehingga lebih aman dan efektif menjaga kesehatan kulit mengurangi jerawat dalam jangka panjang.

Kandungan utama:
Willowherb, Salicylic Acid, Quince

Cara penggunaan:
1. Oleskan secukupnya pada area yang bermasalah menggunakan tangan yang bersih atau cotton bud. 
2. Ulangi aplikasi saat diperlukan

Tips: 
Dapat dipakai sebelum maupun sesudah pelembapSukin menghindari penggunaan bahan sintetis yang keras untuk mengeringkan jerawat secara instan. Sukin menggunakan bahan natural yang relatif lebih lembut di kulit untuk melawan penyebab jerawat hingga ke akar, sehingga lebih aman dan efektif menjaga kesehatan kulit mengurangi jerawat dalam jangka panjang.',
'price' => 147700,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
155 => 
array (
'id' => 156,
'brand_id' => 63,
'name' => 'NIVEA Face Hokkaido Rose Whip Facial Foam 100mL',
'variation' => 'Hokkaido Facial Wash',
'link' => 'https://shopee.co.id/NIVEA-Face-Hokkaido-Rose-Whip-Facial-Foam-100mL-i.744873.13843250902?sp_atk=533875f1-48bf-45f1-a538-36aed0258f72&xptdk=533875f1-48bf-45f1-a538-36aed0258f72',
'description' => 'Dengan 36x anti-oksidan dari ekstrak bunga Hokkaido Rose, 0% alkohol, Tekstur lembut dengan wangi bunga Hokkaido Rose yang menenangkan, Membersihkan wajah dari make-up dan kotoran dengan lembut tanpa rasa kering setelah pemakaian, Mencerahkan kulit yang kusam dan lelah.',
'price' => 43000,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
156 => 
array (
'id' => 157,
'brand_id' => 64,
'name' => 'QV Gentle Wash 250gr - 500gr - Skin Cleanser - Pembersih Tubuh',
'variation' => 'Gentle Wash 500gr',
'link' => 'https://shopee.co.id/QV-Gentle-Wash-250gr-500gr-Skin-Cleanser-Pembersih-Tubuh-i.744873.8570092815?sp_atk=a260f5db-4bd5-4bf3-aa0f-bbee7336a7d4&xptdk=a260f5db-4bd5-4bf3-aa0f-bbee7336a7d4',
'description' => 'Manfaat
- Pembersih lembut untuk rambut dan tubuh 
- Tanpa busa berlebih 
- Tanpa tambahan pewangi 
- Cocok untuk digunakan setiap hari , untuk kulit kering atau sensitif',
'price' => 142500,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
157 => 
array (
'id' => 158,
'brand_id' => 32,
'name' => 'Mineral Botanica Perfect Purifying Facial Wash - MICA',
'variation' => 'Purifyng Facial Wash',
'link' => 'https://shopee.co.id/Mineral-Botanica-Perfect-Purifying-Facial-Wash-MICA-i.744873.9777029567?sp_atk=602429e0-fe9c-4ee8-a9bf-b14a4093545a&xptdk=602429e0-fe9c-4ee8-a9bf-b14a4093545a',
'description' => 'Bersihkan kulit wajah! sehingga terasa lebih segar dan membantu kulit tetap lembab. Perfect Purifying Facial Wash merupakan pembersih wajah Dengan wangi menyegarkan yang bermanfaat membersihkan kulit wajah Anda, sehingga terasa lebih segar dan membantu kulit tetap lembab. Formulanya dikembangkan untuk kulit berminyak dan kulit yang rentan akan jerawat.

Cara Penggunaan :
Keluarkan secukupnya pada telapak tangan lalu campurkan dengan sedikit air hingga berbusa. Pijatkan dengan halus ke seluruh permukaan wajah menggunakan gerakan melingkar ke atas. Bilas dengan air hingga bersih. Lanjutkan dengan toner dan serum atau cream perawatan muka Minera Botanica.',
'price' => 25400,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:52',
'updated_at' => '2022-06-27 15:30:52',
),
158 => 
array (
'id' => 159,
'brand_id' => 8,
'name' => 'ElsheSkin Acne Treatment Series (2 Gel) | Elshe Skin Acne Treatment Series (2 Gel)',
'variation' => 'Acne Cleansing Wash',
'link' => 'https://shopee.co.id/ElsheSkin-Acne-Treatment-Series-(2-Gel)-Elshe-Skin-Acne-Treatment-Series-(2-Gel)-i.744873.6246838043?sp_atk=fbdb57d7-6bd5-4305-b8b9-90e023cfb152&xptdk=fbdb57d7-6bd5-4305-b8b9-90e023cfb152',
'description' => 'Elsheskin Acne Treatment Series 2 Gel ini rangkaian produk perawatan untuk kulit berminyak berjerawat yang berfungsi untuk:
- Melembutkan kulit dan menjaga kelembaban kulit.
- Untuk mengeringkan jerawat.
- Mengempeskan jerawat.
- Untuk menghaluskan dan melembutkan.
- Menutrisi kulit berjerawat.
- Mengurangi minyak berlebih.

Cara penggunaan:
Step Pagi:
1. Acne Cleansing Wash.
2. Acne Refresh Toner.
3. Daily Protection Gel Sebelum beraktifitas.

Step Malam:
1. Acne Cleansing Wash.
2. Acne Refresh Toner.
3. Acne Night Treatment Gel Sebelum tidur dioles ke bagian jerawat saja.',
'price' => 54600,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
159 => 
array (
'id' => 160,
'brand_id' => 50,
'name' => 'EMINA Bright Stuff For Acne Prone Skin Face Wash 50ml',
'variation' => 'AcneFace Wash 50 ml',
'link' => 'https://shopee.co.id/EMINA-Bright-Stuff-For-Acne-Prone-Skin-Face-Wash-50ml-i.744873.10041779230?sp_atk=744c8c54-f9e9-41eb-a205-c34652314f78&xptdk=744c8c54-f9e9-41eb-a205-c34652314f78',
'description' => 'Emina Bright Stuff for Acne Prone Skin Face Wash adalah pembersih wajah yang mampu mengangkat kotoran dan minyak di wajah tanpa menimbukan efek kering, sehingga wajah terlihat lebih cerah. Non Comedogenic dan non acnegenic. 


-  Mengandung extract summer plum dan double brightening power
(niacinamide & licorice extract) yang membuat wajah cerah natural dan glowing.
- Extract cinnamon bark yang mampu mengontrol sebum dan menenangkan jerawat.


How to Use :
1. Tuangkan Emina Bright Stuff for Acne Prone Skin Face Wash secukupnya pada telapak tangan.
2. Tambahkan sedikit air.
3. Busakan pada wajah, hindari area mata, lalu bilas hingga bersih. 
4. Gunakan pagi dan malam.

Ingredients :
Aqua, Glycerin, Myristic Acid, Butylene Glycol, Stearic Acid, Potassium Hydroxide, Potassium Cocoyl Glycinate, Lauric Acid, Glyceryl Stearate, Sodium PCA, Olive Oil PEG-7 Esters, Niacinamide, Phenoxyethanol, Fragrance, Polyquaternium-7, Allantoin, Panthenol, Hydroxypropyl Methylcellulose, Ethylhexylglycerin, Disodium EDTA, Capryloyl Glycine, Hexylene Glycol, Propylene Glycol, Sarcosine, Glycyrrhiza Glabra (Licorice) Root Extract, Cinnamomum Zeylanicum Bark Extract, Actinidia Polygama Fruit Extract.',
'price' => 13200,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
160 => 
array (
'id' => 161,
'brand_id' => 8,
'name' => 'ElsheSkin Anti Aging Cleanser Wash | Elshe Skin Anti Aging Cleanser Wash',
'variation' => 'AntiAging Clean.Wash',
'link' => 'https://shopee.co.id/ElsheSkin-Anti-Aging-Cleanser-Wash-Elshe-Skin-Anti-Aging-Cleanser-Wash-i.744873.1980699165?sp_atk=8a0dd6fe-f2f0-4992-946f-9af172d651fb&xptdk=8a0dd6fe-f2f0-4992-946f-9af172d651fb',
'description' => 'Cleanser yang berfungsi melawan tanda-tanda penuaan dan bekerja untuk membantu membersihkan kotoran/debu/makeup yang menempel.

How to use : 
Tuangkan ElshéSkin Cleanser Wash secukupnya pada telapak tangan, lalu usapkan keseluruh kulit wajah dengan gerakan melingkar keluar selama 1-2 menit. Basuh dengan air hingga bersih.

Benefit :
Kulit terasa lebih lembut, bersih, menyegarkan, menghaluskan dan mengencangkan.',
'price' => 50000,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
161 => 
array (
'id' => 162,
'brand_id' => 50,
'name' => 'EMINA Bright Stuff For Acne Prone Skin Face Wash 100ml',
'variation' => 'AcneFace Wash 100 ml',
'link' => 'https://shopee.co.id/EMINA-Bright-Stuff-For-Acne-Prone-Skin-Face-Wash-100ml-i.744873.10341775271?sp_atk=07ff1270-cbda-4a0c-9ab8-2a2ffbb6d5c3&xptdk=07ff1270-cbda-4a0c-9ab8-2a2ffbb6d5c3',
'description' => 'Emina Bright Stuff for Acne Prone Skin Face Wash adalah pembersih wajah yang mampu mengangkat kotoran dan minyak di wajah tanpa menimbukan efek kering, sehingga wajah terlihat lebih cerah. Non Comedogenic dan non acnegenic. 

-  Mengandung extract summer plum dan double brightening power
(niacinamide & licorice extract) yang membuat wajah cerah natural dan glowing.
- Extract cinnamon bark yang mampu mengontrol sebum dan menenangkan jerawat.

How to Use :
1. Tuangkan Emina Bright Stuff for Acne Prone Skin Face Wash secukupnya pada telapak tangan.
2. Tambahkan sedikit air.
3. Busakan pada wajah, hindari area mata, lalu bilas hingga bersih. 
4. Gunakan pagi dan malam.

Ingredients :
Aqua, Glycerin, Myristic Acid, Butylene Glycol, Stearic Acid, Potassium Hydroxide, Potassium Cocoyl Glycinate, Lauric Acid, Glyceryl Stearate, Sodium PCA, Olive Oil PEG-7 Esters, Niacinamide, Phenoxyethanol, Fragrance, Polyquaternium-7, Allantoin, Panthenol, Hydroxypropyl Methylcellulose, Ethylhexylglycerin, Disodium EDTA, Capryloyl Glycine, Hexylene Glycol, Propylene Glycol, Sarcosine, Glycyrrhiza Glabra (Licorice) Root Extract, Cinnamomum Zeylanicum Bark Extract, Actinidia Polygama Fruit Extract.',
'price' => 21900,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
162 => 
array (
'id' => 163,
'brand_id' => 65,
'name' => 'Sebamed Sensitive SERIES | Sebamed Clear Face SERIES',
'variation' => 'Clear Face Foam',
'link' => 'https://shopee.co.id/Sebamed-Sensitive-SERIES-Sebamed-Clear-Face-SERIES-i.744873.7067201347?sp_atk=404a4d34-c7b3-41d8-9bd5-a9f88a521d9c&xptdk=404a4d34-c7b3-41d8-9bd5-a9f88a521d9c',
'description' => 'Sebamed Clear Face Foam untuk yang mengalami kulit berjerawat.
Membersihkan, menghambat pertumbuhan bakteri dan melembabkan kulit
Mengandung montaline C40 sebagai anti bakteri yang dapat membunuh + 10.000 bakteri
Mengandung busa yang lembut, serta dapat membersihkan kotoran sampai ke pori-pori kulit
Mengandung Panthenol untuk menyembuhkan kulit rusak dan regenerasi',
'price' => 153200,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
163 => 
array (
'id' => 164,
'brand_id' => 66,
'name' => 'SAFI Acne Expert RA Whipped Foam Sebum Cleanser 100 gr - Safi Acne Expert Clarifying 2in1 Cleanser 150 gr',
'variation' => 'Whipped Foam 100gr',
'link' => 'https://shopee.co.id/SAFI-Acne-Expert-RA-Whipped-Foam-Sebum-Cleanser-100-gr-Safi-Acne-Expert-Clarifying-2in1-Cleanser-150-gr-i.744873.5189734631?sp_atk=c0a58e2a-d9fa-45d1-a73f-c98e07ee9b9c&xptdk=c0a58e2a-d9fa-45d1-a73f-c98e07ee9b9c',
'description' => 'Pembersih wajah dalam bentuk whipped cream dengan formula anti PM2.5, yang dapat membersihkan secara mendalam. Membantu mengurangi sebum dan minyak berlebih, membuat kulit tetap halus dan sehat. Rapid Action Technology dengan kandungan AHA, BHA, & Neem dapat membantu merawat kulit berjerawat, kulit terasa lebih halus dan noda pada wajah tampak tersamarkan.',
'price' => 32400,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
164 => 
array (
'id' => 165,
'brand_id' => 8,
'name' => 'ElsheSkin Brightening Foaming Cleanser / Elshe Skin Lightening Foaming Cleanser',
'variation' => 'Bright Foaming Cleas',
'link' => 'https://shopee.co.id/ElsheSkin-Brightening-Foaming-Cleanser-Elshe-Skin-Lightening-Foaming-Cleanser-i.744873.1980606735?sp_atk=43d92469-34ea-4e0d-b18f-c66914975aca&xptdk=43d92469-34ea-4e0d-b18f-c66914975aca',
'description' => 'Pembersih wajah dengan kandungannya mampu membersihkan kulit wajah dari kotoran, minyak berlebih, dan make up. Mengandung Whitening Agent yang dapat mencerahkan kulit wajah.

How to use :
Tuangkan ElshéSkin Lightening Foaming Cleanser 2-3 tetes pada telapak tangan, beri sedikit air lalu usap ditangan sampai sedikit berbusa. Selanjutnya, usapkan keseluruh wajah dan basuh dengan air hingga bersih.

Benefit :
Sabun cair dengan kandungan Glutathione, Vitamin C, Grape Seed Extract, dan Arbutin. Bermanfaat untuk membantu membersihkan kulit wajah, sekaligus mencerahkan kulit.',
'price' => 50000,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
165 => 
array (
'id' => 166,
'brand_id' => 16,
'name' => 'Garnier Sakura White Pinkish Glow Foam 9ml - SACHET',
'variation' => 'Sakura Foam 9ml',
'link' => 'https://shopee.co.id/Garnier-Sakura-White-Pinkish-Glow-Foam-9ml-SACHET-i.744873.4572390481?sp_atk=7604f089-091c-4385-8ffc-2138bfc99e98&xptdk=7604f089-091c-4385-8ffc-2138bfc99e98',
'description' => 'Garnier Sakura White Pinkish Radiance Gentle Foam adalah sabun pembersih wajah bertekstur lembut untuk wajah tampak putih cerah merona. Diperkaya dengan Ekstrak Sakura, dapat membersihkan dengan lembut dan menyeluruh, membuat wajah tampak segar dan putih cerah merona dalam 7 hari. Formulanya lembut dan aman digunakan pada kulit sensitif. Telah teruji secara dermatologis.
Untuk : Kulit sensitif

How To Use :
- Basuh wajah dengan air, aplikasikan sabun ke seluruh wajah secara merata, lalu bilas dengan air bersih',
'price' => 2700,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
166 => 
array (
'id' => 167,
'brand_id' => 22,
'name' => 'SOMETHINC Low pH Gentle Jelly Cleanser | Somethinc Jelly Face Wash',
'variation' => 'LowpH Cleanser 15ml',
'link' => 'https://shopee.co.id/SOMETHINC-Low-pH-Gentle-Jelly-Cleanser-Somethinc-Jelly-Face-Wash-i.744873.7785701678?sp_atk=a392fc3a-72e8-4bb6-bcb3-bd2fc44420c8&xptdk=a392fc3a-72e8-4bb6-bcb3-bd2fc44420c8',
'description' => 'Pembersih wajah Vegan berbentuk jelly yang diformulasikan dengan bahan yang sangat gentle, NO SLS & NO PEG. Teruji Klinis dapat menyeimbangkan pH kulit, menenangkan kulit kembali, membersihkan kotoran & sebum yang berlebih, tanpa membuat kulit kering, tertarik, & merusak barrier kulit.

Mengandung Japanese Mugwort, Tea Tree, Centella, & Peppermint.
Dapat digunakan untuk semua jenis kulit, bahkan untuk kulit sensitif, berjerawat sekalipun.

FAKTA:
Vegan/ seluruh ingredientsnya berasal dari tumbuhan
Hipoalergenik
Cocok untuk kulit berjerawat + Kulit sensitif
Teruji secara Dermatologi
Dapat digunakan untuk Remaja mulai dari umur 11 tahun & Ibu Hamil',
'price' => 39000,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
167 => 
array (
'id' => 168,
'brand_id' => 29,
'name' => 'ORI 100% Cetaphil Gentle Skin Cleanser - 125 ml',
'variation' => '125 ml',
'link' => 'https://shopee.co.id/ORI-100-Cetaphil-Gentle-Skin-Cleanser-125-ml-i.744873.2043401653?sp_atk=7db0e183-8f43-4d4a-9e48-91b41914e063&xptdk=7db0e183-8f43-4d4a-9e48-91b41914e063',
'description' => 'Cetaphil Gentle Skin Cleanser diformulasikan sebagai pembersih wajah pengganti sabun untuk kulit kering, normal, kombinasi, dan berjerawat. Cetaphil Gentle Skin Cleanser ditemukan sejak tahun 1947 di Amerika dan hingga saat ini masih menggunakan formula yang sama dengan 70 tahun yang lalu.

Kelebihan produk Cetaphil Gentle Skin Cleanser ini adalah formulanya yang sederhana dan lembut namun efektif membersihkan sekaligus melembapkan kulit, tanpa tambahan pewangi dan tidak mengandung busa berlebihan sehingga lembut di kulit dan tidak merusak kelembapan alami kulit. Dibuat dengan pH seimbang untuk menjaga kadar asam dan basa pada permukaan kulit, juga membantu keseimbangan antara kandungan air dan minyak alami pada kulit. Formulanya hypoallergenic dan telah teruji secara dermatologi sehingga cocok sebagai pembersih untuk kulit sensitif sekalipun.

Selain itu, Cetaphil Gentle Skin Cleanser juga memiliki kandungan propylene glycol yang bertujuan untuk membantu menjaga kelembapan kulitmu. Walaupun lembut, Cetaphil Gentle Skin Cleanser mampu membersihkan kulit dari sel kulit mati yang menumpuk, kotoran dan polusi yang menempel pada kulit.

Cetaphil Gentle Skin Cleanser juga dapat digunakan dengan air dan tanpa air. Sehingga ketika kamu sibuk dan tidak punya banyak waktu, kamu tetap bisa membersihkan kulitmu. Cukup pijatkan ke wajah dengan gerakan memutar lalu usap bersih dengan kapas atau handuk lembap.',
'price' => 79900,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
168 => 
array (
'id' => 169,
'brand_id' => 11,
'name' => 'Wardah Acnederm Pure Foaming Cleanser 60ml',
'variation' => 'AcnedermFoamingClean',
'link' => 'https://shopee.co.id/Wardah-Acnederm-Pure-Foaming-Cleanser-60ml-i.744873.7620275253?sp_atk=61e4787c-6eb0-4776-bcf9-b7acd390bb95&xptdk=61e4787c-6eb0-4776-bcf9-b7acd390bb95',
'description' => 'Pembersih wajah dg kombinasi bahan aktif terpilih: Derma Cleanse Actives™ dg Salicylic Acid.
Bantu bersihkan debu & kotoran di wajah
Bantu kurangi minyak berlebih
Bantu angkat sel kulit mati penyebab kulit kusam
Bantu rawat kulit yg berjerawat
Bantu menjaga hidrasi kulit
Kulit terasa halus & lembut
Bantu kurangi kulit kemerahan akibat iritasi
Busa lembut dg formula yg nyaman di kulit',
'price' => 18750,
'category' => 'Facial Foam',
'created_at' => '2022-06-27 15:30:53',
'updated_at' => '2022-06-27 15:30:53',
),
169 => 
array (
'id' => 170,
'brand_id' => 1,
'name' => 'Nacific Pink AhaBha Cream 50ml - Nacific Cream - Pelembab Wajah',
'variation' => 'Pink AHABHA Cream',
'link' => 'https://shopee.co.id/Nacific-Pink-AhaBha-Cream-50ml-Nacific-Cream-Pelembab-Wajah-i.744873.20010017178?sp_atk=231a0641-e9a2-4fe5-a9d2-04317d7224af&xptdk=231a0641-e9a2-4fe5-a9d2-04317d7224af',
'description' => 'Pink AHABHA Cream:
Ekstrak semangka 75% : kaya vitamin & mineral yang memberikan kelembapan pada kulit 
AHA, BHA (100ppm) : membantu mengeksfoliasi kulit dengan lembut
Asam hialuronat : membantu melembapkan dan mencerahkan kulit',
'price' => 134400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
170 => 
array (
'id' => 171,
'brand_id' => 17,
'name' => 'Y.O.U Radiance Up! Deep Moisturizing Cream - Ceramide + Snow Mushroom Deep Moisturizing Cream | YOU Moisturizing Cream',
'variation' => 'Radiance Up! Cream',
'link' => 'https://shopee.co.id/Y.O.U-Radiance-Up!-Deep-Moisturizing-Cream-Ceramide-Snow-Mushroom-Deep-Moisturizing-Cream-YOU-Moisturizing-Cream-i.744873.21609884296?sp_atk=edb21bbc-2f70-43b7-9ef4-3e650323c62b&xptdk=edb21bbc-2f70-43b7-9ef4-3e650323c62b',
'description' => 'Kalau kandungan di dalam Radiance Up! Deep Moisturizing Cream dilengkapi dengan Ceramide 1-3-6, Powerful Brightening System, dan Snow Mushroom Extract yang membuat kulit menjadi lembab dan sehat plumpy!',
'price' => 105200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
171 => 
array (
'id' => 172,
'brand_id' => 64,
'name' => 'QV Cream Untuk Area Kulit Kering (pH Seimbang) - 100gr - Teruji Dermatologis',
'variation' => 'Cream 100gr',
'link' => 'https://shopee.co.id/QV-Cream-Untuk-Area-Kulit-Kering-(pH-Seimbang)-100gr-Teruji-Dermatologis-i.744873.8970494089?sp_atk=f0eb526b-84c3-4bb1-9bd0-ef0ee5b0b444&xptdk=f0eb526b-84c3-4bb1-9bd0-ef0ee5b0b444',
'description' => 'Benefits :
Direkomendasikan untuk  kulit kering
Membantu menjaga kelembapan alami kulit
pH seimbang, formulasi iritan rendah, bebas dari aroma, warna, lanolin dan propylene glycol
Cocok untuk kulit sensitif
Cocok untuk bayi dan orang tua',
'price' => 250000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
172 => 
array (
'id' => 173,
'brand_id' => 1,
'name' => 'Nacific Acne Cica Plus Clear Cream Skin care 50 ml - Face Cream - Cream Wajah',
'variation' => 'Plus Clear Cream',
'link' => 'https://shopee.co.id/Nacific-Acne-Cica-Plus-Clear-Cream-Skin-care-50-ml-Face-Cream-Cream-Wajah-i.744873.15642534038?sp_atk=66af436a-85f3-40ce-9ba6-b928213345e9&xptdk=66af436a-85f3-40ce-9ba6-b928213345e9',
'description' => 'Kini hadir dalam wajah dan formulasi baru untuk Indonesia!
Acne Cream yang 7 macam bahan cica complex-nya menenangkan masalah kulit kemerahan dan mengandung cypress water dan ceramide untuk membantu melindungi lapisan kulit yang sensitif

Key Points:
Green CICA Complex yang mengandung Tea Tree dan Allantoin yang membantu menghilangkan jerawat
Kandungan Ceremide yang dapat menjaga skin barrier dan melembapkan kulit
Trehalose yang bermanfaat untuk melembapkan dan menjaga oil-moisture balance

Cara Penggunaan :
1. Setelah cuci muka dengan bersih, aplikasikan toner
2. Aplikasikan serum
3. Aplikasikan krim di seluruh wajah atau di bagian yang berjerawat',
'price' => 144500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
173 => 
array (
'id' => 174,
'brand_id' => 28,
'name' => 'COSRX Full Fit Propolis Light Cream',
'variation' => 'Propolis Light Cream',
'link' => 'https://shopee.co.id/COSRX-Full-Fit-Propolis-Light-Cream-i.744873.6894782613?sp_atk=5d34bed6-239c-4f36-bfab-34869247c1d9&xptdk=5d34bed6-239c-4f36-bfab-34869247c1d9',
'description' => 'Kandungan dari produk ini adalah 65,695 ekstrak propolis (black bee) ,honey ekstrak dan royal jelly ekstrak.

Manfaat:
- Tekstur ringan seperti gel yang menyerap dengan sangat cepat.
- meningkatkan kelmebaban pada kulit
- Anti -Imflammatory dan Anti- Microbial agent
- Membuat kulit tampak lebih glowing,lembab & halus
- Menyamarkan noda flek hitam dan noda bekas jerawat,bahkan bopeng .
- Cocok untuk semua jenis kulit',
'price' => 367500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
174 => 
array (
'id' => 175,
'brand_id' => 2,
'name' => 'Ariul Watermelon Hydro Glow Cream 55 ml',
'variation' => 'Glow Cream 55ml',
'link' => 'https://shopee.co.id/Ariul-Watermelon-Hydro-Glow-Cream-55-ml-i.744873.8916936787?sp_atk=129c43f5-cf7d-49e7-a8fe-26ae9d0dcc4f&xptdk=129c43f5-cf7d-49e7-a8fe-26ae9d0dcc4f',
'description' => 'Pelembab wajah dengan butiran-butiran kapsul kecil untuk melembabkan dan mengunci kelembaban kulit wajah kita.  
Ingredients : TRIPLE HYALURONIC ACID, VITAMIN COMPLEX, SODIUM PCA, ERYTHRITOL XYLITOL',
'price' => 123900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
175 => 
array (
'id' => 176,
'brand_id' => 52,
'name' => 'SAFI White Expert Illuminating Day Cream SPF 15 PA ++ 45 gr',
'variation' => 'W.E Day Cream 45gr',
'link' => 'https://shopee.co.id/SAFI-White-Expert-Illuminating-Day-Cream-SPF-15-PA-45-gr-i.744873.1353382110?sp_atk=1094cabe-84ee-483e-918f-eabe01aa814a&xptdk=1094cabe-84ee-483e-918f-eabe01aa814a',
'description' => 'Krim siang yang lembut dan mudah diserap diperkaya dengan Ekstrak Habbatus Sauda, OxyWhite Technology dan Tabir Surya. 
- Membantu melindungi kulit dari paparan sinar UVA dan UVB yang berbahaya bagi kulit
- Membantu melindungi kulit dari penggelapan akibat radiasi
- Membantu membuat kulit tampak cerah
- Menghaluskan kulit
- Membantu menyamaaratakan tampilan warna kulit

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. Gunakan pada pagi hari setelah penggunaan Safi White Expert Ultimate Essence. ',
'price' => 78400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
176 => 
array (
'id' => 177,
'brand_id' => 29,
'name' => 'Cetaphil Bright Healthy Radiance Brightening Night Comfort Cream 50g | Cetaphil Night Cream 50g',
'variation' => 'Radiance Night Cream',
'link' => 'https://shopee.co.id/Cetaphil-Bright-Healthy-Radiance-Brightening-Night-Comfort-Cream-50g-Cetaphil-Night-Cream-50g-i.744873.8702110114?sp_atk=50b4d826-967f-4745-abe2-c54aecb4c5d0&xptdk=50b4d826-967f-4745-abe2-c54aecb4c5d0',
'description' => 'Cetaphil Brightening Night Comfort Cream membantu mencerahkan dan meratakan warna kulit. Krim malam yang berfungsi untuk mengurangi bintik-bintik hitam, menghidupkan kembali kejernihan kulit, dan menjaga kelembapan kulit. 

Kelebihan Produk:
Cetaphil Brightening Night Comfort Cream berfungsi untuk menyamarkan kerutan dan warna bintik hitam serta merawat kekencangan kulit. Hypoallergenic, dengan ekstrak alami White Sea Daffodil dan Niacinamide. 

Kandungan Produk:
Cetaphil Brightening Night Comfort Cream mengandung Glycerin, Niacinamide, dan White Sea Daffodil yang membantu mencerahkan dan meratakan warna kulit serta melindungi kulit paling sensitif dari kekeringan. 

Cara Penggunaan:
Gunakan Cetaphil Brightening Night Comfort Cream pada malam hari pada wajah dan leher yang telah dibersihkan. Penggunaan teratur dalam 4 minggu, mengurangi intensitas bintik hitam dan secara efektif menampilkan warna kulit yang lebih cerah. Untuk hasil yang optimal, disarankan untuk menggunakan Brightness Refresh Toner dan Brightening Day Protection Cream. ',
'price' => 186900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:14',
'updated_at' => '2022-06-27 15:31:14',
),
177 => 
array (
'id' => 178,
'brand_id' => 52,
'name' => 'SAFI Age Defy Renewal Night Cream 25 gr',
'variation' => 'Age Defy Night 25 gr',
'link' => 'https://shopee.co.id/SAFI-Age-Defy-Renewal-Night-Cream-25-gr-i.744873.1353177806?sp_atk=313a79ec-4b89-4828-95c3-31a6edeeaa4a&xptdk=313a79ec-4b89-4828-95c3-31a6edeeaa4a',
'description' => 'Proses perawatan peremajaan kulit terbaik dilakukan pada malam hari. SAFI Age Defy Renewal Night Cream merupakan gel krim yang tidak lengket dengan kandungan Gold Extract, Protein Sutera, dan Phyto-SLC, membantu: 
- Memelihara kelembapan
- Mencerahkan kulit
- Menjaga kulit tetap terasa kenyal
- Membantu memelihara peremajaan kulit pada malam hari
- Kulit lebih terawat dan tampak lebih muda

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan Safi gerakan memutar. Gunakan pada malam hari setelah penggunaan Age Defy Toner dan Safi Age Defy Gold Water.',
'price' => 74200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
178 => 
array (
'id' => 179,
'brand_id' => 17,
'name' => 'Y.O.U Golden Age Revitalizing Night Cream 30gr | Y.O.U Golden Age Illuminating Day Cream 30g  - YOU',
'variation' => 'Day Cream 30gr',
'link' => 'https://shopee.co.id/Y.O.U-Golden-Age-Revitalizing-Night-Cream-30gr-Y.O.U-Golden-Age-Illuminating-Day-Cream-30g-YOU-i.744873.4674216019?sp_atk=0d4963c7-7fc2-4a7c-be02-2515b1548f86&xptdk=0d4963c7-7fc2-4a7c-be02-2515b1548f86',
'description' => 'Golden Age Illuminating Day Cream diformulasikan dengan ekstrak Buah Delima, UV Protector, Hyaluronic Acid, dan Niacinamide yang mampu merawat dan melindungi kulit dari paparan sinar UV untuk tampilan kulit yang lebih cerah, lembut, dan bercahaya.

Selling Point & Benefit:
1. Reduces Blemishes & Aging -> Membantu menyamarkan noda dan tanda-tanda penuaan pada wajah.
2.Brighter Skin -> Kulit terlihat cerah dan bercahaya.
3. SPF 30 PA+++ -> Perlindungan dari sinar UV untuk aktivitas sehari-hari.

Special Ingredients:
-Punica Granatum Extract
Ekstrak buah delima, membantu mencegah tanda-tanda penuaan dan memperbaiki kondisi kulit akibat penuaan.

-Niacinamide
Vit B3, menyamarkan tampilan pori-pori dan garis halus serta meratakan warna kulit.

-Sodium Hyaluronate/Hyaluronic Acid
Membantu memperbaiki tekstur kulit, mengurangi garis halus dan kerutan.

-Calendula Officinalis Flower Extract
Ekstrak bunga Pot Marigold yang membantu memperbaiki kondisi kulit seperti kemerahan pada kulit.

-Gastrodia Elata Root Extract
Ekstrak akar anggrek yang melindungi kulit dari radikal bebas, menjaga kulit agar tetap segar dan sehat.

-Ethylhexyl Methoxycinnamate, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Ethylhexyl Triazone, Titanium Dioxide, Bis-ethylhexyloxyphenol Methoxyphenyl Triazine
Sunscreen.',
'price' => 91100,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
179 => 
array (
'id' => 180,
'brand_id' => 54,
'name' => 'Kojie San Skin Lightening Lightening Face Cream SPF 15 with Hydromoist 22g',
'variation' => 'Light Face Cream 22g',
'link' => 'https://shopee.co.id/Kojie-San-Skin-Lightening-Lightening-Face-Cream-SPF-15-with-Hydromoist-22g-i.744873.5790455975?sp_atk=0d617cc3-f7d0-47e9-8981-ee7a08520acc&xptdk=0d617cc3-f7d0-47e9-8981-ee7a08520acc',
'description' => 'Manfaat:
- Mencerahkan wajah juga mengurangi tampilan spot hitam dan jerawat
- Mengandung UVA/UVB Filters yg melindung kulit dari faktor lingkungan yg dapat merusak kulit
- Melembabkan hingga 24 jam
- Dermatology Tested, Hypoallergenic, Paraben Free, Silicone Free',
'price' => 54500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
180 => 
array (
'id' => 181,
'brand_id' => 16,
'name' => 'Garnier Bright Complete White Speed Serum Day Cream Extra SPF 36/PA+++ - 50ml - Skin Care',
'variation' => 'Serm Krim SPF36 50ml',
'link' => 'https://shopee.co.id/Garnier-Bright-Complete-White-Speed-Serum-Day-Cream-Extra-SPF-36-PA-50ml-Skin-Care-i.744873.1292231182?sp_atk=ddb99636-24ef-408f-b816-283c8a9639ae&xptdk=ddb99636-24ef-408f-b816-283c8a9639ae',
'description' => 'Garnier Bright Complete White Speed Yuzu adalah cream wajah dengan kandungan vitamin C untuk kulit tampak cerah sejak hari ke-3. Wajah tanpa kusam, noda & bekas jerawat tersamarkan.

Manfaat:
Garnier Bright Complete White Speed Yuzu mengandung 3x Serum Vitamin C dari buah Lemon Yuzu segar dari Jepang dan SPF 36/PA+++. Cocok untuk semua jenis kulit.

Cara pemakaian:
Gunakan tiap pagi pada wajah dan leher yang telah dibersihkan, setelah menggunakan essence serum wajah siang.

Formulanya memberi manfaat komplit:
Hingga 3 tingkat lebih cerah
Menyamarkan bintik hitam & bekas jerawat
12 jam bebas kilap
Meratakan warna kulit
Efek tanpa minyak berlebih dan tahan lama”',
'price' => 51000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
181 => 
array (
'id' => 182,
'brand_id' => 52,
'name' => 'Safi White Natural Anti Acne Cream Tea Tree Oil',
'variation' => 'Anti Acne CREAM 20gr',
'link' => 'https://shopee.co.id/Safi-White-Natural-Anti-Acne-Cream-Tea-Tree-Oil-i.744873.2245276169?sp_atk=0845a09e-6fab-4330-bf86-7969ea1c2b55&xptdk=0845a09e-6fab-4330-bf86-7969ea1c2b55',
'description' => 'Tea Tree Oil memiliki banyak manfaat untuk kulit kita, salah satunya Safi menghadirkan Safi White Natural Anti Acne Cream yang dapat membantu untuk merawat kulit berjerawat. 

Safi White Natural Anti Acne Cream mengandung tea tree oil dimana bahan tersebut termasuk acne-fighting agents. Produk ini juga alcohol-free, paraben-free, Sulfate-free, dan EU Alergen-free',
'price' => 32400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
182 => 
array (
'id' => 183,
'brand_id' => 17,
'name' => 'Y.O.U Dazzling Tone Up Face Cream 20g - YOU',
'variation' => 'TONE UP FACE CREAM',
'link' => 'https://shopee.co.id/Y.O.U-Dazzling-Tone-Up-Face-Cream-20g-YOU-i.744873.4971063500?sp_atk=0ebb934a-e0af-4944-b9b3-6ab5a2b997c2&xptdk=0ebb934a-e0af-4944-b9b3-6ab5a2b997c2',
'description' => 'Krim wajah yang memberikan efek mencerahkan secara instan dan meratakan warna kulit untuk kulit yang lembut dan bercahaya.
Diperkaya dengan:
Niacinamide: melembutkan kulit
Asam traneksamat: membantu meratakan warna kulit

*Meratakan warna kulit
*Instan cerah
*Tampilan segar alami',
'price' => 21000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
183 => 
array (
'id' => 184,
'brand_id' => 52,
'name' => 'SAFI White Expert Replenishing Night Cream 25 gr',
'variation' => 'W.E Night Cream 25gr',
'link' => 'https://shopee.co.id/SAFI-White-Expert-Replenishing-Night-Cream-25-gr-i.744873.1353622587?sp_atk=a65d68ab-af2a-4f80-96c2-c636aff22e5a&xptdk=a65d68ab-af2a-4f80-96c2-c636aff22e5a',
'description' => 'Krim malam berbasis air dengan tekstur gel ringan yang mudah meresap, diperkaya Ekstrak Habbatus Sauda, OxyWhite technology dan Bio Hyaluronic. 
- Membantu mencerahkan, menyejukkan, dan menyamankan kulit wajah
- Membantu menyamaratakan warna kulit muka dengan Vitamin B3 selama tidur
- Memberikan kelembapan sepanjang malam dengan Bio Hyaluronic Acid

Cara Pakai : 
Usapkan pada wajah dan leher, pijat dengan lembut. Gunakan pada malam hari sebelum tidur. ',
'price' => 47800,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
184 => 
array (
'id' => 185,
'brand_id' => 54,
'name' => 'KOJIE SAN Dreamwhite Face Cream with SPF30',
'variation' => 'Dreamwhite Face Crem',
'link' => 'https://shopee.co.id/KOJIE-SAN-Dreamwhite-Face-Cream-with-SPF30-i.744873.7081045115?sp_atk=7be756f7-d012-4286-9747-5b2ff5b250d5&xptdk=7be756f7-d012-4286-9747-5b2ff5b250d5',
'description' => 'Kojiesan DreamWhite Anti-Aging Cream w / Sunscreen SPF30, memiliki formula ringan yang mengandung sifat regenerasi muda Milk Peptide Complex (MPC) dan kondisioner kulit memberikan kelembaban dengan penggunaan terus-menerus. Ini membantu mencerahkan kulit dan memberikan perlindungan kulit dari efek berbahaya dari sinar matahari untuk kulit yang lebih muda dan tampak lebih muda

Bagaimana cara menggunakan:
Oleskan Kojiesan DreamWhite Anti-Aging Cream w / Sunscreen SPF30 ke wajah yang baru dicuci setiap pagi sebelum aplikasi makeup.
Bersihkan wajah dan oleskan ke dahi, hidung, sekitar mata dan eajah secukupnya, setiap pagi hari sebelum beraktivitas, dapat digunakan sebagai base makeup. Hindari panas dan sinar matahari langsung. Untuk hasil terbaik digunakan setelah sabun anti penuaan dan Facial Toner.',
'price' => 44000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
185 => 
array (
'id' => 186,
'brand_id' => 11,
'name' => 'Wardah Renew You Anti Aging Day Cream Tube 15ml',
'variation' => 'Anti Aging DAY TUBE',
'link' => 'https://shopee.co.id/Wardah-Renew-You-Anti-Aging-Day-Cream-Tube-15ml-i.744873.1549386255?sp_atk=5de20837-6c43-4718-8f69-701f91fc399c&xptdk=5de20837-6c43-4718-8f69-701f91fc399c',
'description' => 'Krim dengan tekstur yang ringan dan mewah, diformulasikan dengan bahan aktif yang menggabungkan Advance Moisturizing Complex sebagai pelembab yang tahan lama, Vit E sebagai antioksidan dan Resveratrol murni yang membantu melindungi dari kerusakan kulit akibat sinar matahari, mengurangi kerusakan sel dan mengandung Peptide yang dapat membantu menstimulasi pembentukan kolagen yang berperan dalam mengencangkan dan memperbaharui kulit anda.',
'price' => 36750,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
186 => 
array (
'id' => 187,
'brand_id' => 11,
'name' => 'WARDAH Lightening Day Gel | Cream Pagi',
'variation' => 'Day Gel JAR 30gr',
'link' => 'https://shopee.co.id/WARDAH-Lightening-Day-Gel-Cream-Pagi-i.744873.3184016677?sp_atk=c0d37d19-799b-4118-a60b-deb2d4e75d4e&xptdk=c0d37d19-799b-4118-a60b-deb2d4e75d4e',
'description' => 'Wardah Lightening Day Gel, pelembab pagi dengan tekstur gel watery yang ringan dan melembabkan dengan efek segar, dilengkapi dengan Advanced Niacinamide dan UVA/UVB Filter. 
Cocok untuk kulit normal cenderung berminyak.',
'price' => 35000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
187 => 
array (
'id' => 188,
'brand_id' => 5,
'name' => 'Pond\'s Instabright Krim Wajah Tone Up Cream | Pond\'s Instabright Tone Up Milk Facial Foam PONDS',
'variation' => 'InstabrightCream20gr',
'link' => 'https://shopee.co.id/Pond\'s-Instabright-Krim-Wajah-Tone-Up-Cream-Pond\'s-Instabright-Tone-Up-Milk-Facial-Foam-PONDS-i.744873.6762134491?sp_atk=049e2882-e402-4f78-8423-dd1d545ad1ac&xptdk=049e2882-e402-4f78-8423-dd1d545ad1ac',
'description' => 'Terinspirasi teknologi dari Korea Dengan milk essence, untuk kulit tampak cerah seketika bahkan tanpa make up Meratakan warna kulit Menghaluskan Tampak bebas kilap Lindungi dari sinar UV Terinspirasi teknologi dari Korea, Tone UP Cream pertama dari Pond\'s dengan milk essence untuk kulit tampak cerah seketika bahkan tanpa make up foundation.
Pond\'s memahami bahwa wanita selalu merasa berkepentingan dengan kulit yang indah. Sebagai perusahaan terkemuka dan terbesar dalam bidang produk perawatan wajah.',
'price' => 29000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
188 => 
array (
'id' => 189,
'brand_id' => 11,
'name' => 'Wardah Crystal Secret Day Cream SPF 35 PA+++ | White Secret Day Cream SPF 35 PA+++ - 30gr',
'variation' => 'Day Cream JAR 30ml',
'link' => 'https://shopee.co.id/Wardah-Crystal-Secret-Day-Cream-SPF-35-PA-White-Secret-Day-Cream-SPF-35-PA-30gr-i.744873.1549195060?sp_atk=5bfe96da-0dc9-43e0-9405-1637d341d641&xptdk=5bfe96da-0dc9-43e0-9405-1637d341d641',
'description' => 'Krim pelembab sekaligus pelindung wajah dari UV A dan UV B, membantu mempercepat proses pencerahan, memberikan efek wajah cerah seketika, sekaligus mempertahankannya. Melalui Advanced-white Specific System dan dikembangkan dengan Derma-peptide Technology, krem ini mudah meresap ke kulit , bekerja efektif dan spesifik di setiap tahap proses pencerahan kulit untuk kulit halus dan tampak bercahaya.

Manfaat:

- Terdapat Tabir Surya SPF 35 PA+++
- Memberikan Kesegaran dan Kecerahan
- Crystal-White Active menghambat produksi melanin berlebih yang membuat kulit lebih gelap.
- Vitamin B3 menghambat transfer melanin ke lapisan kulit terluar, mengurangi terbentuknya noda hitam di wajah.
- Dual Action-Hydrating Agent berfungsi melembapkan kulit dan menjaga keseimbangan kulit.
- Dilengkapi soothing agent dan anti irritant.
- Menjaga Lapisan Kulit Wajah
- Aman untuk Semua Jenis Kulit

Cara pemakaian:

- Gunakan pada pagi hari.
- Oleskan Wardah White Secret Day Cream tipis merata pada wajah dan leher yang telah dibersihkan.
- Hindari penggunaan pada area sekitar mata.
- Jika terkena area sekitar mata atau membran mukosa, segera bilas dengan air.
- Untuk hasil maksimal, gunakan rangkaian Wardah white secret series yang terdiri dari Pure brightening Cleanser, Facial 
wash with Natural AHA, Day Cream, Exfoliating Lotion, Exfoliating scrub, Intense brightening essence dan Night Cream',
'price' => 77750,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
189 => 
array (
'id' => 190,
'brand_id' => 67,
'name' => 'OMG Oh My Glow Peach Glowing Cream - 7,5 gr -  25 gr',
'variation' => 'Face Cream 7,5gr',
'link' => 'https://shopee.co.id/OMG-Oh-My-Glow-Peach-Glowing-Cream-7-5-gr-25-gr-i.744873.12462322374?sp_atk=fbff5f21-83d8-4f3b-9bda-d182f4b2078f&xptdk=fbff5f21-83d8-4f3b-9bda-d182f4b2078f',
'description' => 'Pelembab Wajah dengan serum vit B3+C+E dan peach extract sehingga memberikan efek wajah yang cerah merona seperti peach, wajah tampak sehat dan lembab, serta dilengkapi pula dengan UVA/UVB filter dan oil control formula. 

Manfaat:
-Peach Extract + Vitamin E sebagai antioksidan agar wajah lembab dan tampak sehat 
-Vitamin B3 dan C untuk mencerahkan dan melembutkan wajah
-Dapat mengontrol minyak berlebih hingga 6 jam
-Dilengkapi double sunscreen filter untuk melindungi wajah dari paparan sinar UVA/UVB. 

How to Use:
1. Gunakan Moisturizing Cream setelah mencuci muka, pijat di bagian wajah dengan lembut, gunakan pada pagi dan malam. Lengkapi dengan rangkaian OMG Oh My Glow Peach Glowing Face Wash dan Peach Glowing Toner',
'price' => 3500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
190 => 
array (
'id' => 191,
'brand_id' => 52,
'name' => 'SAFI White Natural Brightening Cream Grapefruit Extract | Safi White Natural SERIES',
'variation' => 'Mangosteen Cream 45g',
'link' => 'https://shopee.co.id/SAFI-White-Natural-Brightening-Cream-Grapefruit-Extract-Safi-White-Natural-SERIES-i.744873.1353887117?sp_atk=11627c60-2357-499f-b49c-de9025cdedc8&xptdk=11627c60-2357-499f-b49c-de9025cdedc8',
'description' => 'Krim lembut yang mudah menyerap, membuat wajah tampak cerah dan tidak berminyak. Mengandung Vitamin B3 dan Ekstrak Grapefruit yang kaya dengan Vitamin C membantu melindungi kulit dari paparan sinar matahari, membuat kulit terasa halus dan lembut serta membantu menjadikan kulit sehatmu tampak cerah, terasa lembab dan segar. 

Cara Pakai : Usapkan pada wajah dan leher secara merata. Gunakan setelah Safi White Natural Brightening Cleanser Grapefruit Extract untuk hasil optimal. ',
'price' => 45500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
191 => 
array (
'id' => 192,
'brand_id' => 68,
'name' => 'Scarlett Whitening Brightly Ever After Day Cream | Night Cream',
'variation' => 'Brightly Night Cream',
'link' => 'https://shopee.co.id/Scarlett-Whitening-Brightly-Ever-After-Day-Cream-Night-Cream-i.744873.13149666648?sp_atk=d063420c-44de-4458-8997-fe0010d06614&xptdk=d063420c-44de-4458-8997-fe0010d06614',
'description' => 'Didalam Brightly Ever After Day Cream terdapat kandungan Glutathione, Rainbow Algae, Hexapeptide-8, Rosehip Oil, Poreaway, Triceramide dan Aqua Peptide Glow yang dimana bermanfaat sebagai :
1. Membantu meningkatkan kelembapan serta elastisitas kulit wajah.
2. Membantu mencerahkan kulit wajah secara merata.
3. Membantu memudarkan bekas-bekas jerawat pada kulit wajah.
4. Membantu meingkatkan hidrasi kulit, menutrisi kulit juga membuat kulit menjadi lebih glowing.
5. Membantu menghilangkan garis halus juga mengencangkan kulit wajah.
6. Membantu meingkatkan hidrasi kulit, menutrisi kulit juga membuat kulit menjadi lebih glowing.
7. Sebagai antioksidan dan melindungi sel kulit dari kerusakan radikal bebas yang disebabkan oleh paparan sinar UV. 

Didalam Brightly Ever After Night Cream terdapat kandungan Glutathione, Niacinamide, Natural Vit-C, Hexapeptide-8, Poreaway, Green Caviar dan Aqua Peptide Glow yang dimana bermanfaat sebagai :
1. Membantu meningkatkan kelembapan serta elastisitas kulit wajah.
2. Membantu mencerahkan kulit wajah secara merata.
3. Membantu memudarkan bekas-bekas jerawat pada kulit wajah.
4. Membantu mengecilkan pori-pori pada kulit wajah.
5. Membantu menghilangkan garis halus juga mengencangkan kulit wajah.
6. Membantu meingkatkan hidrasi kulit, menutrisi kulit juga membuat kulit menjadi lebih glowing.
7. Sebagai antioksidan dan melindungi sel kulit dari kerusakan radikal bebas yang disebabkan oleh paparan sinar UV.
',
'price' => 57000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
192 => 
array (
'id' => 193,
'brand_id' => 16,
'name' => 'GARNIER Bright Complete Bright Up Tone Up Cream 15ml',
'variation' => 'Tone Up Cream 15ml',
'link' => 'https://shopee.co.id/GARNIER-Bright-Complete-Bright-Up-Tone-Up-Cream-15ml-i.744873.1294845105?sp_atk=fcfc4b23-348e-4420-a417-1103bbb489c7&xptdk=fcfc4b23-348e-4420-a417-1103bbb489c7',
'description' => 'Krim siang dari Garnier yang mencerahkan wajah hingga 2 tingkat seketika dan hari demi hari kulit cerah alami sempurna.
Inovasi terbaru dari Garnier Light Complete terinspirasi dari tren kecantikan korea terkini, Garnier Light Complete Bright Up Tone Up Cream. Diperkaya dengan 10x Vitamin C, Ekstrak Yoghurt & UV Filters.

Saksikan kulit:
Tampak cerah 2 tingkat seketika
Mengurangi kekusaman & warna tidak merata
Menyamarkan noda, bekas jerawat & lingkaran hitam bawah mata
Kulit terasa halus & mulus
Matte & tidak berminyak
Melindungi dari sinar UV
Kulit lebih cerah 2 tingkat seketika, hari demi hari kulit tampak lebih cerah natural & sempurna.

(1) Krim pencerah wajah yang mampu mencerahkan wajah hingga 2 tingkat 
(2) Melindungi kulit dari sinar matahari 
(3) Membantu menyamarkan noda dan bintik hitam 
(4) Dengan formula baru yang memiliki tekstur lebih ringan (5) Mengandung Vitamin C, Ekstrak Yoghurt & UV Filters

Cara Penggunaan : 
Gunakan tiap pagi pada wajah dan leher yang telah dibersihkan',
'price' => 22800,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:15',
'updated_at' => '2022-06-27 15:31:15',
),
193 => 
array (
'id' => 194,
'brand_id' => 5,
'name' => 'Pond\'s Bright Beauty Serum Day Cream 7.5gr | Ponds Bright Beauty Serum Day Cream SACHET 7.5gr',
'variation' => 'Normal Skin 7.5gr',
'link' => 'https://shopee.co.id/Pond\'s-Bright-Beauty-Serum-Day-Cream-7.5gr-Ponds-Bright-Beauty-Serum-Day-Cream-SACHET-7.5gr-i.744873.19606096909?sp_atk=a48f4a79-b8e9-4786-b89e-cf86f41e232b&xptdk=a48f4a79-b8e9-4786-b89e-cf86f41e232b',
'description' => 'Dengan serum Vitamin B3+, samarkan noda hitam dan cerahkan dari pemakaian pertama. Untuk kulit tampak putih merona noda tersamarkan dan tanpa kilap.

Dengan kandungan serum Vitamin B3+ 

Samarkan noda hitam 

Mencerahkan dari pemakaian pertama 

Kulit merona tanpa kilap 

Ingredients:
Water, Stearic Acid, Niacinamide, Glycerin, Cetearyl Ethylhexanoate, Titanium Dioxide, Ethylhexyl Methoxycinnamate, Synthetic Fluorphlogopite, Potassium Hydroxide, Cetyl Alcohol, Dimethicone, Butyl Methoxydibenzoylmethane, Phenoxyethanol, Fragrance, Tocopheryl Acetate, Allantoin, Methylparaben, Glycine, Cystine, Sodium PCA, Propylparaben, Hydroxystearic Acid, Isopropyl Myristate, Disodium EDTA, Aluminum Hydroxide, Acrylates Copolymer, Tin Oxide, Sodium Ascorbyl Phosphate, Palmitic Acid, BHT, Arachidic Acid, Sodium Sulfate, Sodium Chloride, CI 14700',
'price' => 3900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
194 => 
array (
'id' => 195,
'brand_id' => 16,
'name' => 'Garnier Bright Complete White Speed Day Serum Cream Uva/Uvb Skin Care - 20 ml (Light complete)',
'variation' => 'Serm Krim SPF36 20ml',
'link' => 'https://shopee.co.id/Garnier-Bright-Complete-White-Speed-Day-Serum-Cream-Uva-Uvb-Skin-Care-20-ml-(Light-complete)-i.744873.7574488078?sp_atk=f207e60f-afd6-4a2a-95f2-b598a683857a&xptdk=f207e60f-afd6-4a2a-95f2-b598a683857a',
'description' => 'Krim pelembab untuk membantu mencerahkan wajah. Mengandung Pure Lemon Essence sebagai antioksidan alami. Dilengkapi dengan SPF 20/PA+++ untuk melindungi kulit wajah dari efek buruk sinar matahari. 

Manfaat:
- Express White Complex - Kombinasi dari Snowpine C+ dan LHA yang dikenal 10x lebih kuat dari Vitamin C untuk membantu mencerahkan wajah kusam dan manyamarka flek hitam pada wajah. Formulanya akan membantu kulit membuat terasa halus dan pori-pori tampak kecil.
- Pure Lemon Essence - Dikenal sebagai antioksidan alami untuk mendapatkan kulit yang sehat berseri.
- SPF 20/PA+++ - Memberikan perlindungan terhadap sinar UVA/UVB yang dapat menyebabkan warna kulit tidak merata dan flek hitam.

Cara pemakaian:
Gunakan tiap pagi pada wajah dan leher yang telah dibersihkan, sebelum menggunakan cream wajah. ',
'price' => 21200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
195 => 
array (
'id' => 196,
'brand_id' => 5,
'name' => 'Pond\'s Age Miracle Krim Wajah Youthful Glow Day Cream dan Night Cream | Ponds Age Miracle Krim Wajah',
'variation' => 'YouthfullNight Cream',
'link' => 'https://shopee.co.id/Pond\'s-Age-Miracle-Krim-Wajah-Youthful-Glow-Day-Cream-dan-Night-Cream-Ponds-Age-Miracle-Krim-Wajah-i.744873.7762129297?sp_atk=349fbd84-170b-43b4-8a58-8022dacd305b&xptdk=349fbd84-170b-43b4-8a58-8022dacd305b',
'description' => 'Manfaat
- Formula Retinol-C Complex yang bekerja selama 24 jam non-stop
- Formula Retinol-C Complex yang bekerja selama 24 jam non-stop 
- Samarkan kerutan 
- Kulit tampak muda bercahaya 
- Kulit tampak muda bercahaya 
- Teruji secara dermatologis 
- Tanggal yang Tertera di Kemasan adalah Tanggal Produksi, Bukan Tanggal Expired

Tahukah anda? Selama menjalani aktifitas 24 jam non-stop, kulit juga ikut terpapar penyebab penuaan kulit 24 jam non-stop seperti kurangnya waktu tidur, paparan sinar matahari dan polusi, asupan nutrisi yang kurang serta ekspresi yang dibuat oleh wajah.

Pertama dari POND\'S Age Miracle! Anti-aging kini bekerja 24 jam non-stop.

Kandungan Retinol-C Complex menyerap dalam dan terus menerus melepaskan kekuatan bahan aktif Retinol bekerja sepanjang hari selama 24 jam non-stop. Untuk samarkan kerutan dan tampak muda bercahaya!

Kandungan SPFnya dapat bantu melindungi dari sinar UV saat beraktifitas di luar & di dalam ruangan.
Pond\'s memahami bahwa wanita selalu merasa berkepentingan dengan kulit yang indah. Sebagai perusahaan terkemuka dan terbesar dalam bidang produk perawatan wajah.',
'price' => 32600,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
196 => 
array (
'id' => 197,
'brand_id' => 44,
'name' => 'Viva Anti Wrinkle Cream 22gr | Viva Collagen Night Cream 22gr',
'variation' => 'Anti Wrinkle Cream',
'link' => 'https://shopee.co.id/Viva-Anti-Wrinkle-Cream-22gr-Viva-Collagen-Night-Cream-22gr-i.744873.5134482351?sp_atk=7bff6f80-368a-4026-8571-a54699f380d7&xptdk=7bff6f80-368a-4026-8571-a54699f380d7',
'description' => 'Cream yang mengandung Ekstrak Walnut Seed untuk membantu mengurangi timbulnya kerutan, Vitamin E sebagai Antioksidan, serta Jojoba dan Olive Oil untuk menjaga kelembaban kulit.',
'price' => 9800,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
197 => 
array (
'id' => 198,
'brand_id' => 57,
'name' => 'Acnes Spot Care 12gr | Cream Jerawat | Krim',
'variation' => 'Acnes Spot Care 12gr',
'link' => 'https://shopee.co.id/Acnes-Spot-Care-12gr-Cream-Jerawat-Krim-i.744873.1705819031?sp_atk=8e939a1e-fe82-4b8d-b8f8-a1dc3a92d7d7&xptdk=8e939a1e-fe82-4b8d-b8f8-a1dc3a92d7d7',
'description' => 'Gel transparan untuk merawat bagian kulit yang berjerawat dan mengurangi flek hitam dan noda bekas jerawat serta membantu melembutkan kulit yang kasar. Mengandung Allantoin untuk melembutkan bagian kulit yang kasar akibat jerawat. Vitamin C dan Arbutin sebagai double whitening agent untuk menghambat produksi melanin sehingga dapat mengurangi flek hitam dan noda bekas jerawat serta mencerahkan warna kulit. Kulit lebih halus, tetap sehat dan cerah berseri.

Cara Menggunakan
Gunakan pada wajah yang telah dibersihkan. Keluarkan Acnes Spot Care secukupnya pada ujung jari lalu oleskan pada flek hitam / noda bekas jerawat. Dapat digunakan 2-3 kali sehari.

Perhatian
Jika terkena mata segera bilas dengan air. Untuk hasil yang optimal gunakan rangkaian Acnes Treatment Series secara teratur.',
'price' => 28500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
198 => 
array (
'id' => 199,
'brand_id' => 57,
'name' => 'Acnes Whitening & Oil Control Moisturizer Cream  40gr | Pelembap Wajah',
'variation' => 'White & OilControl M',
'link' => 'https://shopee.co.id/Acnes-Whitening-Oil-Control-Moisturizer-Cream-40gr-Pelembap-Wajah-i.744873.1718399046?sp_atk=d4d58aca-a0b0-4588-a5cd-e98965c6b348&xptdk=d4d58aca-a0b0-4588-a5cd-e98965c6b348',
'description' => 'Formula ringan dengan kandungan Natural Active Ingredient memberikan 3 manfaat sekaligus untuk kulit cantikmu. 
1. Kombinasi 8 ekstrak tanaman untuk membantu mengurangi minyak berlebih sehingga kulit tampak bebas minyak
2. Mengandung Arbutin sebagai whitening agent untuk membantu mencerahkan warna kulit, menyamarkan vlek hitam dan noda bekas jerawat
3. Diperkaya dengan AcHA untuk menjaga kelembaban dan tekstur kulit agar senantiasa halus.',
'price' => 28000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
199 => 
array (
'id' => 200,
'brand_id' => 11,
'name' => 'Wardah Lightening Day Cream Jar & Day Cream Tube',
'variation' => 'Day Cream Tube',
'link' => 'https://shopee.co.id/Wardah-Lightening-Day-Cream-Jar-Day-Cream-Tube-i.744873.2098857717?sp_atk=c918be48-ad71-465e-b9f5-1bc6633b310e&xptdk=c918be48-ad71-465e-b9f5-1bc6633b310e',
'description' => 'Krim pelembab untuk tahap pencerahan lebih lanjut menutrisi sekaligus mencerahkan kulit dengan 3 langkah:

Regenerasi sel : Glycolic Acid (AHA), membantu mempercepat pelepasan sel kulit mati.  Mengandung konsentrasi AHA 2 x lipat
Merawat & melembabkan : Kandungan ekstrak rumput laut membantu menyerap kelebihan minyak di kulit, Allantoin yang melembabkan, serta Vitamin E & C sebagai antioksidan
Mencerahkan dari dalam : Ekstrak Licorice, Vitamin B3, serta active white complex yang mengandung 7 bahan aktif, bersinergi membantu proses pencerahan kulit.',
'price' => 23000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
200 => 
array (
'id' => 201,
'brand_id' => 16,
'name' => 'Garnier Sakura White Whitening Serum Cream 7ml - Krim Siang UV Wajah',
'variation' => 'SakuraSerumCream 7ml',
'link' => 'https://shopee.co.id/Garnier-Sakura-White-Whitening-Serum-Cream-7ml-Krim-Siang-UV-Wajah-i.744873.8202453295?sp_atk=daf1bcc1-645a-4876-b7ed-3a3bef12f1a7&xptdk=daf1bcc1-645a-4876-b7ed-3a3bef12f1a7',
'description' => 'Baru! Krim wajah untuk wajah putih cerah merona, diperkaya dengan Ekstrak Sakura - bunga lembut dari Jepang.
Dengan paduan ekstrak Sakura dan Whitening Vitamin (B3 & CG), krim ini menutrisi kulit wajah, membantu mencerahkan warna kulit, dan menyamarkan noda hitam. Kulit terasa halus dan pori-pori tampak kecil."',
'price' => 3250,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
201 => 
array (
'id' => 202,
'brand_id' => 20,
'name' => 'HANASUI Acne Treatment Day Cream - Night Cream - Toner - Cleanser - Spot Gel - Skin Care',
'variation' => 'Night Cream 15gr',
'link' => 'https://shopee.co.id/HANASUI-Acne-Treatment-Day-Cream-Night-Cream-Toner-Cleanser-Spot-Gel-Skin-Care-i.744873.10903191014?sp_atk=b34bf80a-95bd-415c-9524-5d96c1b79bdb&xptdk=b34bf80a-95bd-415c-9524-5d96c1b79bdb',
'description' => 'Hanasui Acne Treatment Hadir untuk menjadi solusi para wanita yang sedang berjuang menuntaskan jerawat diwajah. Diformulasikan khusus untuk kulit wajah berjerawat, Hanasui Acne Treatment memiliki 5 rangkaian lengkap yang terdiri dari Facial Wash, Essence, Day Cream, Night Cream dan Acne Spot Gel. Dengan pemakaian rutin selama 4 minggu, jerawat akan hilang dan wajah wajahpun menjadi bersinar. Selain membantu menghilangkan jerawat Hanasui Acne Treatment juga mencegah jerawat datang kembali. Kandungan bahan alami dan bahan aktif yang terdapat pada Hanasui Acne Treatment antara lain Salicylic Acid, AC.NET yang berfungsi sebagai anti bacteria, Niacinamide, Blue Oleoactif® yang berfungsi sebagai Anti Pollutan dan Anti Blue light serta Vitex Castus Extract yang merupakan anti acne dan anti microba untuk mencegah jerawat dating kembali.',
'price' => 28200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
202 => 
array (
'id' => 203,
'brand_id' => 52,
'name' => 'SAFI Age Defy Gold Water Essence 100 ml / mini size 30 ml / Safi Age Defy Serum / Age Defy SERIES / Skincare Skin care',
'variation' => 'CC Cream SPF 37 PA++',
'link' => 'https://shopee.co.id/SAFI-Age-Defy-Gold-Water-Essence-100-ml-mini-size-30-ml-Safi-Age-Defy-Serum-Age-Defy-SERIES-Skincare-Skin-care-i.744873.1353071060?sp_atk=b539a712-c2fe-4701-abf4-4238a2c3c49a&xptdk=b539a712-c2fe-4701-abf4-4238a2c3c49a',
'description' => 'Dengan double efek, kombinasi Gold Extract dan Silk Protein, membantu : 
- Memelihara struktur kulit, tidak hanya merawat bagian luar tetapi juga bagian dalam kulit, merawat keremajaan kulit dengan optimal
- Diperkaya dengan BIO HYALURONIC yang mempertahankan dan memelihara kelembapan sepanjang hari agar kulit terasa halus dan lembut serta mempersiapkan kulit untuk produk perawatan kulit berikutnya

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. ',
'price' => 128000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
203 => 
array (
'id' => 204,
'brand_id' => 11,
'name' => 'WARDAH Crystal Secret Brightening Day Cream SPF 35 PA +++ | White Secret Day Cream Tube 15ml',
'variation' => 'Day Cream Tube 15ml',
'link' => 'https://shopee.co.id/WARDAH-Crystal-Secret-Brightening-Day-Cream-SPF-35-PA-White-Secret-Day-Cream-Tube-15ml-i.744873.1549217882?sp_atk=0e9ab9fe-4fa0-4589-85dc-055b6135dad6&xptdk=0e9ab9fe-4fa0-4589-85dc-055b6135dad6',
'description' => 'Krim pelembab sekaligus pelindung wajah dari UV A dan UV B, membantu mempercepat proses pencerahan, memberikan efek wajah cerah seketika, sekaligus mempertahankannya. Melalui Advanced-white Specific System dan dikembangkan dengan Derma-peptide Technology, krem ini mudah meresap ke kulit , bekerja efektif dan spesifik di setiap tahap proses pencerahan kulit untuk kulit halus dan tampak bercahaya.

Manfaat:
- Terdapat Tabir Surya SPF 35 PA+++
- Memberikan Kesegaran dan Kecerahan
- Crystal-White Active menghambat produksi melanin berlebih yang membuat kulit lebih gelap.
- Vitamin B3 menghambat transfer melanin ke lapisan kulit terluar, mengurangi terbentuknya noda hitam di wajah.
- Dual Action-Hydrating Agent berfungsi melembapkan kulit dan menjaga keseimbangan kulit.
- Dilengkapi soothing agent dan anti irritant.
- Menjaga Lapisan Kulit Wajah
- Aman untuk Semua Jenis Kulit

Cara pemakaian:
- Gunakan pada pagi hari.
- Oleskan Wardah White Secret Day Cream tipis merata pada wajah dan leher yang telah dibersihkan.
- Hindari penggunaan pada area sekitar mata.
- Jika terkena area sekitar mata atau membran mukosa, segera bilas dengan air.
- Untuk hasil maksimal, gunakan rangkaian Wardah white secret series yang terdiri dari Pure brightening Cleanser, Facial 
wash with Natural AHA, Day Cream, Exfoliating Lotion, Exfoliating scrub, Intense brightening essence dan Night Cream',
'price' => 36750,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
204 => 
array (
'id' => 205,
'brand_id' => 14,
'name' => 'Whitelab Brightening Day Cream | White Lab Night Cream | Krim Siang Malam',
'variation' => 'WL Night Cream 20gr',
'link' => 'https://shopee.co.id/Whitelab-Brightening-Day-Cream-White-Lab-Night-Cream-Krim-Siang-Malam-i.744873.5258344450?sp_atk=52905c70-12fd-4b89-beb7-8f60058effbe&xptdk=52905c70-12fd-4b89-beb7-8f60058effbe',
'description' => 'Day Cream ini menggunakan 2 kandungan utama, yaitu NIACINAMIDE + COLLAGEN.
Niacinamide berperan untuk mencerahkan kulit, melembabkan kulit, menyamarkan noda hitam, serta membantu mengatasi jerawat.
Sedangkan, collagen berperan penting untuk meningkatkan elastisitas kulit dan mencegah tanda penuaan kulitmu. 

Fungsi: 	
- Membantu Mencerahkan wajah
- Mengandung SPF 20 PA++ untuk melindungi dari sinar UV 
- Melembabkan kulit wajah 
- Merawat kekencangan kulit 
- Mencegah tanfa penuaan 

Cara pakai: Cuci muka menggunakan Whitelab Brightening Facial wash, kemudian oleskan Whitelab Brightening Toner. Setelah itu, oleskan Day Cream (pagi) atau Night Cream (malam) pada wajah. 
Dianjurkan menggunakan sepaket (Facial Wash, Toner, Day Cream, Night Cream) agar hasilnya maksimal!

Dengan kandungan utama NIACINAMIDE + COLLAGEN.
Niacinamide berperan untuk mencerahkan kulit, melembabkan kulit, serta menyamarkan noda hitam. 
Sedangkan, collagen berperan penting untuk meningkatkan elastisitas kulit dan mencegah tanda penuaan kulitmu. 

Fungsi: 
- Membantu Mencerahkan wajah
- Membuat wajah glowing 
- Membantu menghilangkan noda diwajah 
- Melembabkan kulit wajah
- Merawat kekencangan kulit 
- Menghaluskan dan menutrisi kulit 
- Mencegah tanda penuaan 

Cara pakai: Cuci muka menggunakan Whitelab Brightening Facial wash, kemudian oleskan Whitelab Brightening Toner. Setelah itu, oleskan Day Cream (pagi) atau Night Cream (malam) pada wajah. 

Dianjurkan menggunakan sepaket (Facial Wash, Toner, Day Cream, Night Cream) agar hasilnya maksimal!',
'price' => 64000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
205 => 
array (
'id' => 206,
'brand_id' => 54,
'name' => 'Kojie San Face Lightening Cream',
'variation' => 'Face LighteningCream',
'link' => 'https://shopee.co.id/Kojie-San-Face-Lightening-Cream-i.744873.4240500995?sp_atk=42952327-fafe-4eae-b0a7-901654cec151&xptdk=42952327-fafe-4eae-b0a7-901654cec151',
'description' => 'Kojiesan Wajah Lightening Cream adalah formula intensif yang bergizi . Cream ini sangat ringan dan tidak berminyak . Ini berisi campuran ekstrak alami dan kelas tinggi semua - alami Asam Kojic yang dikenal untuk efek pemutihan yang luar biasa . Ini membantu mencerahkan kulit dan mengurangi dan mencegah pembentukan bintik-bintik gelap dan mengembalikan kekenyalan kulit . Cream ini juga melembabkan kulit dan membuat kulit kemerahan menjadi sehat .

Cara Penggunaan :
Cuci wajah dengan sabun . aplikasikan Kojiesan Lightening Cream pada wajah menggunakan fingertiips . Pijat wajah dalam gerakan melingkar , mengoleskan krim di dahi , dan kulit di sekitar mata , hidung dan wajah . Gunakan Kojiesan Wajah Lightening Cream di pagi hari dan sebelum tidur secara teratur .',
'price' => 39900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:16',
'updated_at' => '2022-06-27 15:31:16',
),
206 => 
array (
'id' => 207,
'brand_id' => 68,
'name' => 'Scarlett Whitening Brightly Ever After Serum Cream Day Night | Scarlet Whitening Acne Serum | tntbeauty TnT Beauty Shop',
'variation' => 'Acne Night Cream',
'link' => 'https://shopee.co.id/Scarlett-Whitening-Brightly-Ever-After-Serum-Cream-Day-Night-Scarlet-Whitening-Acne-Serum-tntbeauty-TnT-Beauty-Shop-i.744873.5442239234?sp_atk=0258543b-7322-4584-adc4-64bb60a503ad&xptdk=0258543b-7322-4584-adc4-64bb60a503ad',
'description' => 'Di dalam Brightly Ever After Serum terdapat kandungan Phyto Whitening, Glutathione, Vitamin C, Niacinamide dan Lavender Water yang dimana bermanfaat sebagai :
1. Membantu mencerahkan kulit dan memudarkan noda di wajah seperti hiperpigmentasi, bekas jerawat, flek dan bekas luka.
2. Membantu mengontrol kadar minyak berlebih di kulit, membantu mengeceilkan pori-pori, mengimprovisasi warna kulit, menghaluskan kerutan dan juga garis di kulit.
3. Membantu menutrisi dan melembabkan kulit. 
4. Membantu membuat kulit menjadi lebih relax dan calm.
5. Bekerja sebagai antioxidant dan juga sebagai anti pollution.

- Cara Pakai :
Teteskan 2-3 tetes serum, usap dan pijat secara perlahan sampai merata pada kulit wajah. Diamkan beberapa saat agar serum meresap ke kulit.

Di dalam Acne Serum terdapat kandungan Tea Tree Leaf Water, Salicylic Acid, Jeju Centella Asiatica, Liquorice Extract dan Vitamin C yang dimana bermanfaat sebagai :
1. Membantu menyembuhkan jerawat meradang, jerawat batu, kulit kemerahan dan iritasi. 
2. Membantu meregenerasi dan menjaga kulit yang sensitive tanpa menimbulkan iritasi.
3. Membantu menenangkan kulit, menghaluskan dan juga membantu memudarkan bekas jerawat atau luka.
4. Membantu mencerahkan kulit secara aman karena menggunakan Liquorice Extract dan Vitamin C yang juga berfungsi sebagai anti oxidant + anti pollution. 
5. Membantu mengontrol kadar minyak berlebih di kulit.

- Cara Pakai :
Teteskan 2-3 tetes serum, usap dan pijat secara perlahan sampai merata pada kulit wajah. Diamkan beberapa saat agar serum meresap ke kulit.',
'price' => 57000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
207 => 
array (
'id' => 208,
'brand_id' => 9,
'name' => 'Benton Goodbye Redness Centella Spot Cream 15gr',
'variation' => 'Spot Cream 15gr',
'link' => 'https://shopee.co.id/Benton-Goodbye-Redness-Centella-Spot-Cream-15gr-i.744873.11220770724?sp_atk=a8bae652-1d75-482f-b605-c464f141b82d&xptdk=a8bae652-1d75-482f-b605-c464f141b82d',
'description' => 'Benton Goodbye Redness Centella Spot Cream mengandung Ekstrak Centella Asiatica, Pohon Teh dan kulit yang melindungi Calamine. Krim spot ini merawat bintik-bintik yang membuat stres, membuat kulit tetap sehat dan bersih.
Bahan mengatakan kualitas, bukan nama merek atau harga.

Manfaat :
- Krim spot pink mudah diserap. Dapat digunakan untuk seluruh wajah juga.
- Diformulasi dengan 42% ekstrak Centella asiatica, 10% calamine, peppermint dan pohon teh.
- Menenangkan / Perlindungan kulit / Keseimbangan minyak-air
- Resep sehat dengan bahan-bahan alami. Bebas alkohol yang mudah menguap, PEG, silikon dan bahan kontroversial lainnya.
- Diuji secara dermatologis.

Cara Penggunaan :
Gunakan pada langkah terakhir perawatan kulit dengan menerapkan jumlah yang sesuai dan oleskan secara merata sampai terserap.',
'price' => 99000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
208 => 
array (
'id' => 209,
'brand_id' => 50,
'name' => 'Emina Bright Stuff Moisturizing Cream 20ml',
'variation' => 'Bright Stuff M Cream',
'link' => 'https://shopee.co.id/Emina-Bright-Stuff-Moisturizing-Cream-20ml-i.744873.1649122890?sp_atk=42f04816-c37e-4c5b-b29c-76b3761a9c0b&xptdk=42f04816-c37e-4c5b-b29c-76b3761a9c0b',
'description' => 'Pelembab yang cocok untuk sehari-hari. Formulanya mengandung ekstrak summer Plum yang dikenal sebagai anti pollutant, vitamin E, dan moisturizing agent untuk wajah tampak lebih sehat dan cerah merona. Pelembab ini juga mengandung perlindungan UV A & UV B untuk melindungi Kulit mu dari kusam.',
'price' => 18500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
209 => 
array (
'id' => 210,
'brand_id' => 21,
'name' => 'AVOSKIN Perfect Hydrating Treatment Essence | Hydrating Treatment | Refining Toner Serum Retinol',
'variation' => 'Polypeptide Cream',
'link' => 'https://shopee.co.id/AVOSKIN-Perfect-Hydrating-Treatment-Essence-Hydrating-Treatment-Refining-Toner-Serum-Retinol-i.744873.1729079580?sp_atk=7ab49cc8-f2a7-4abe-9981-134346f24d6c&xptdk=7ab49cc8-f2a7-4abe-9981-134346f24d6c',
'description' => 'Benefit :
- Mencerahkan kulitmu sehingga terlihat bersinar
- Memulihkan dan memelihara elastisitas kulit agar terlindungi dengan  baik. Melembabkan dan menyeimbangkan pH kulitmu
- Memelihara kulit hingga lapisan terdalam, sehingga proses regenerasi kulit dapat berlangsung dengan maksimal
- Mengoptimalkan proses penetrasi di dalam kulit, sehingga saat menggunakan produk pada step selanjutnya akan lebih mudah meresap ke dalam kulit
- Dapat digunakan sebagai primer sebelum memakai makeup agar riasan mampu bertahan lama',
'price' => 287200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
210 => 
array (
'id' => 211,
'brand_id' => 20,
'name' => 'HANASUI Flawless Glow 10 Day Cream - Night Cream - Essence Toner - Gentle Cleanser',
'variation' => 'Day Cream 15gr',
'link' => 'https://shopee.co.id/HANASUI-Flawless-Glow-10-Day-Cream-Night-Cream-Essence-Toner-Gentle-Cleanser-i.744873.7888588040?sp_atk=aeb356b3-cb98-43a9-b40d-8e8dc7666128&xptdk=aeb356b3-cb98-43a9-b40d-8e8dc7666128',
'description' => 'Hanasui Flawless Glow 10 Hadir untuk menjadi solusi para wanita yang ingin melakukan perawatan wajah namun dengan biaya yang tidak banyak. Memiliki 4 rangkaian yakni Facial Wash, Essence, Day Cream dan Night Cream. Dengan 1 rangkaian tersebut, konsumen dapat merasakan 10 manfaat sekaligus.Dengan kandungan bahan alami dan bahan aktif antara lain Niacinamide, Blue Oleoactif® yang berfungsi sebagai Anti Pollutan dan Anti Blue light serta Pentavitin yang dapat menghidrasi kulit wajah hingga 72 jam.

1.	Flawless Glow 10 Gentle Cleanser
Kandungan utama :
	Mild Eco Friendly Cleansing Agent : mengangkat kotoran penyumbat pori-pori
	Niacinamide : Mencerahkan & Sebum Reducer
	Glycerine : Menghidrasi & Menjaga Kelembapan
	Licorice : Mencerahkan & Antioksidan
	Betain : Menghaluskan & Melembutkan kulit
	Vit E, Vit B5 : Menutrisi & Melembapkan

2.	Flawless Glow 10 Power Essence Kandungan utama :
	Niacinamide : Mencerahkan & Sebum Reducer
	Sodium Hyaluronate : Anti bacteria, Menghidrasi & Menjaga Kelembapan
	Betain : Menghaluskan & Melembutkan kulit
	Mc Glucan : Anti Iritasi, Boost Collagen

3.	Flawless Glow 10 Day Cream
Kandungan utama :
	Niacinamide 4% : Mencerahkan & meratakan warna kulit
	Blue Oleoactif® : Anti Pollution dan Anti Bluelight
	Olivem 1000 : Boosting serum Efficacy & skin protection
	Vitamin E : Menutrisi & Melembapkan
	Licorice : Mencerahkan & Antioksidan
	Suncat MTA : UVA + UVB Protection

4.	Flawless Glow 10 Night Cream
Kandungan utama :
	Niacinamide 4% : Mencerahkan & mengurangi produksi sebum (Sebum Reducer)
	Pentavitin : Menghidrasi hingga 72 jam, Menghaluskan dan melembapkan kulit
	Licorice : Mencerahkan & Antioksidan
	Vitamin E : Menutrisi dan melembapkan
	Shea Butter : Menghaluskan dan melembapkan kulit

MANFAAT RANGKAIAN :
1.	Mencerahkan
2.	Menghidrasi hingga 72 jam
3.	Mengurangi noda hitam
4.	Mengurangi kemerahan akibat jerawat
5.	Mengontrol minyak berlebih
6.	Perlindungan terhadap lapisan kulit serta sinar UV
7.	Meningkatkan efektivitas kerja serum
8.	Antioksidan
9.	Meningkatkan sintesis kolagen
10.	Melembutkan dan menghaluskan kulit',
'price' => 22050,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
211 => 
array (
'id' => 212,
'brand_id' => 69,
'name' => 'SKIN1004 Madagascar Centella Soothing Cream 75ml - SKIN 1004',
'variation' => 'Soothing Cream 75ml',
'link' => 'https://shopee.co.id/SKIN1004-Madagascar-Centella-Soothing-Cream-75ml-SKIN-1004-i.744873.15742588746?sp_atk=8532589d-85cb-4c00-af33-2b69311fa2e5&xptdk=8532589d-85cb-4c00-af33-2b69311fa2e5',
'description' => 'Cream yang melindungi dan memperkuat skin barrier dengan real barrier cream. Selain ini cream ini mampu memberikan perawatan sesungguhnya dengan Centella Asiatica berkualitas tinggi, merawat kesehatan kulit dengan menyeimbangkan keseimbangan pH,  melindungi kulit dari stimulus eksternal sehingga menjadikan kulit semakin kuat dan kencang. Dengan gel berwarna coklat muda dari khas centella asiatica extract, Centella Soothing Cream memiliki tekstur yang menyegarkan tanpa rasa lengket yang berfungsi merawat skin barrier yang rusak. 

# Point 
- Perawatan Centella Asiatica 
- Real skin barrier ingredients  
- Skin cooling care 
- pH Balancing Skincare  

# Bahan Utama 
- Sodium Hyaluronate, Coptis Chinensis Root Extract, Cacao (Cocoa) Extract : Menghidrasi
- Ceramide Eop, Ceramide NS, Ceramide NP, Ceramide AP : Perawatan skin barrier 
- Phytosingosine : Membentuk Ceramide
- 72% Madagascar Centella Asiatica : Menenangkan, memperkuat skin barrier   

# Cara Penggunaan 
Aplikasikan secukupnya pada wajah dan tepuk-tepuk dengan lembut sampai menyerap. 

# Tips 
Khusus kulit kering, aplikasikan Centella Cream sekali lagi untuk mengunci kelembaban.',
'price' => 185900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
212 => 
array (
'id' => 213,
'brand_id' => 52,
'name' => 'Safi Ultimate Bright Illuminating Day Cream SPF 20 PA++ - Pelembab Wajah',
'variation' => 'Day Cream 18,5gr',
'link' => 'https://shopee.co.id/Safi-Ultimate-Bright-Illuminating-Day-Cream-SPF-20-PA-Pelembab-Wajah-i.744873.15550807143?sp_atk=a505038f-3a5c-4fd3-8b28-9917aec8b76e&xptdk=a505038f-3a5c-4fd3-8b28-9917aec8b76e',
'description' => 'Safi Ultimate Bright Illuminating Day Cream dengan SPF 20 PA++ adalah moisturizer berbahan gel lembut yang ringan dan cepat menyerap. diformulasikan dengan ekstrak tumbuhan alami dan vitamin B3 untuk kulit wajah tampak lebih cerah.Membantu merawat skin barrier dan melindungi kulit wajah dari paparan sinar UVA & UVB. Terbukti secara klinis membantu wajah lebih lembut, tetap sehat dan tampak lebih cerah merata.',
'price' => 32500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
213 => 
array (
'id' => 214,
'brand_id' => 1,
'name' => 'Nacific Fresh Herb Origin Cream 50ml RENEW - Face Cream - Cream Wajah',
'variation' => 'Origin Cream 50ml',
'link' => 'https://shopee.co.id/Nacific-Fresh-Herb-Origin-Cream-50ml-RENEW-Face-Cream-Cream-Wajah-i.744873.15641907301?sp_atk=491a7107-2318-42c4-91ae-36f856e3ae42&xptdk=491a7107-2318-42c4-91ae-36f856e3ae42',
'description' => 'Kini hadir dalam wajah dan formulasi baru untuk Indonesia!

Krim pelembab yang mengandung ekstrak Bunga Calendula yang menenangkan dan melembabkan kulit juga mengandung Niacinamide yang dapat mempertahankan dan menjaga hidrasi.

Key points :
Krim pelembab dengan ekstrak bunga calendula yang menenangkan dan menghidrasi kulit, serta mengandung ceramide yang mampu mempertahankan dan meningkatkan kelembapan kulit.
Mencerahkan dan mengurangi kerutan di kulit
Mengandung Shea Butter yang berfungsi untuk mengembalikan elastisitas kulit

️Cara menggunakan️
1. Ambil krim secukupnya
2. Aplikasikan di wajah secara merata
3. Biarkan menyerap dengan lembut',
'price' => 144500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
214 => 
array (
'id' => 215,
'brand_id' => 70,
'name' => 'Xi Xiu Acne Fight Day Cream xixiu 15gr',
'variation' => 'Acne Day Cream',
'link' => 'https://shopee.co.id/Xi-Xiu-Acne-Fight-Day-Cream-xixiu-15gr-i.744873.16925930544?sp_atk=02dd8dc5-e4bf-41cc-9f0e-d10a6e224429&xptdk=02dd8dc5-e4bf-41cc-9f0e-d10a6e224429',
'description' => 'XI XIU ACNE FIGHT DAY CREAM hadir untuk kamu yang mengalami masalah kulit wajah berjerawat. Acne Fight Day Cream ini juga untuk menemani skincare routinemu agar aktivitas padatmu tidak mempengaruhi wajahmu yang sedang berjerawat. Dengan teksturnya yang halus dan mudah meresap di wajah tidak membuat kulit wajahmu menjadi berminyak yah. Hasilnya ga akan membuatmu takut breakout lagi.

Manfaat:
- Meredakan peradangan pada jerawat serta kemerahan pada wajah
- Meningkatkan kelembapan sehingga kulit tampak lebih sehat dan fresh
- Memperbaiki tekstur pada kulit wajah
- Memberi nutrisi pada wajah

With hero ingredients:
- Niacinamide
- Hydrolyzed Algin & Zinc Sulfate
- Allantoin
- Olive Oil
- Ethylhexyl Methoxycinnamate',
'price' => 20000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
215 => 
array (
'id' => 216,
'brand_id' => 70,
'name' => 'Xi Xiu Acne Fight | Brightening Glow - Day Cream - Night Cream – xixiu 15gr',
'variation' => 'Bright Night Cream',
'link' => 'https://shopee.co.id/Xi-Xiu-Acne-Fight-Brightening-Glow-Day-Cream-Night-Cream-%E2%80%93-xixiu-15gr-i.744873.16025944694?sp_atk=de04bfb4-4409-44c0-af90-bb8c282b00ca&xptdk=de04bfb4-4409-44c0-af90-bb8c282b00ca',
'description' => 'XI XIU ACNE FIGHT DAY CREAM hadir untuk kamu yang mengalami masalah kulit wajah berjerawat. Acne Fight Day Cream ini juga untuk menemani skincare routinemu agar aktivitas padatmu tidak mempengaruhi wajahmu yang sedang berjerawat. Dengan teksturnya yang halus dan mudah meresap di wajah tidak membuat kulit wajahmu menjadi berminyak yah. Hasilnya ga akan membuatmu takut breakout lagi.

Xi XiU ACNE FIGHT NIGHT CREAM ini untuk melengkapi ‘last step’ skin care routine kamu, khusus untuk kamu yang sedang mengatasi kulit berjerawat. 

Xi XiU BRIGHTENING GLOW DAY CREAM hadir untuk kamu yang ingin memiliki kulit wajah yang glowing dan fresh tanpa minyak berlebih.

Xi XiU BRIGHTENING GLOW NIGHT CREAM hadir mencerahkan kulit wajahmu supaya tidak kusam lagi saat bangun di pagi hari dan saat beraktivitas di malam hari.',
'price' => 19300,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
216 => 
array (
'id' => 217,
'brand_id' => 70,
'name' => 'Xi Xiu Brightening Glow Day Cream xixiu 15gr',
'variation' => 'Bright Day Cream',
'link' => 'https://shopee.co.id/Xi-Xiu-Brightening-Glow-Day-Cream-xixiu-15gr-i.744873.15963833257?sp_atk=2be4cdf7-a15f-4714-8172-196d7a08fd67&xptdk=2be4cdf7-a15f-4714-8172-196d7a08fd67',
'description' => 'Xi XiU BRIGHTENING GLOW DAY CREAM hadir untuk kamu yang ingin memiliki kulit wajah yang glowing dan fresh tanpa minyak berlebih.

Manfaat:
- Meningkatkan kelembapan serta elastisitas wajah
- Mencerahkan kulit wajah secara merata
- Meningkatkan hidrasi wajah dan menutrisi wajah menjadi lebih glowing
- Memudarkan bekas-bekas jerawat pada wajah',
'price' => 19300,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
217 => 
array (
'id' => 218,
'brand_id' => 30,
'name' => 'SUKIN Certified Organic Rosehip Oil - Nourishing Cream Cleanser - Hydrating Day Cream - Night Cream',
'variation' => 'Hyd Day Cream 120ml',
'link' => 'https://shopee.co.id/SUKIN-Certified-Organic-Rosehip-Oil-Nourishing-Cream-Cleanser-Hydrating-Day-Cream-Night-Cream-i.744873.11112589750?sp_atk=138ff3dd-18f9-4b67-a085-90c8ea1c5558&xptdk=138ff3dd-18f9-4b67-a085-90c8ea1c5558',
'description' => 'Sukin Certified Organic Rosehip Oil 25ml & 50ml
•Facial oil
•Semua jenis kulit, terutama kulit yang kering, dehidrasi, stress dan ada bekas luka
•Melembapkan, menutrisi, menyamarkan bekas luka   kemerahan, menjaga kesehatan kulit, mencegah kerutan dan garis halus (anti-aging)

Sukin Rosehip Nourishing Cream Cleanser 125 ml 
•Facial cleanser
•Kulit normal – kering
•Membersihkan kulit dari debu dan minyak berlebih secara lembut tanpa membuat kulit kering/ kehilangan minyak alaminya, melembapkan, menutrisi

Sukin Rosehip Hydrating Day Cream 120 ml
•Facial moisturiser
•Kulit normal - kering
•Melembapkan, mencegah penuaan dini, melembutkan, membuat kulit lebih bersinar

Sukin Rosehip Enriching Night Cream 120 ml
•Facial night cream
•Kulit kering, dehidrasi, stress
•Melembapkan, merevitalisasi kulit yang lelah agar lebih cerah berseri di pagi hari',
'price' => 238400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
218 => 
array (
'id' => 219,
'brand_id' => 30,
'name' => 'Sukin Rosehip Enriching Night Cream 120 ml',
'variation' => 'Enc Night Cream 120m',
'link' => 'https://shopee.co.id/Sukin-Rosehip-Enriching-Night-Cream-120-ml-i.744873.11972808986?sp_atk=1a95641a-cec5-47b4-bc21-612e3bd32434&xptdk=1a95641a-cec5-47b4-bc21-612e3bd32434',
'description' => '•Facial night cream•Kulit kering, dehidrasi, stress
•Melembapkan, merevitalisasi kulit yang lelah agar lebih cerah berseri di pagi hari

Kandungan utama:
Rosehip, kakadu plum, vitamin E, borage oil

Cara penggunaan:
1.Setelah toner atau facial oil, aplikasikan pada wajah dan leher sambil ditepuk perlahan untuk membantu mempercepat penyerapan
2.Gunakan setiap malam hari
●
Komposisi
Water (Aqua), Aloe Barbadensis Leaf Juice, Sesamum Indicum (Sesame) Seed Oil, Glycerin, Cetearyl Alcohol, Cetyl Alcohol, Ceteareth-20, Rosa Canina Fruit Oil (Rosehip), Tocopherol (Vitamin E), Terminalia Ferdinandiana Fruit Extract (Kakadu Plum), Pleiogynium Timoriense Fruit Extract (Burdekin Plum), Podocarpus Elatus Fruit Extract (Illawarra Plum), Santalum Acuminatum Fruit Extract (Quandong), Borago Officinalis Seed Oil (Borage), Oenothera Biennis (Evening Primrose) Oil, Camellia Oleifera Seed Oil, Citrus Tangerina (Tangerine) Peel Oil, Citrus Nobilis (Mandarin Orange) Peel Oil, Lavandula Angustifolia (Lavender) Oil, Vanillin, Phenoxyethanol, Benzyl Alcohol, Limonene*, Linalool*
*Natural component of essential oils',
'price' => 276400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
219 => 
array (
'id' => 220,
'brand_id' => 17,
'name' => 'Y.O.U Dazzling Glow up Serum Night Cream 20Gr - 40 Gr [ Menutrisi Kulit sepanjang malam} - YOU',
'variation' => 'Night Cream 20gr',
'link' => 'https://shopee.co.id/Y.O.U-Dazzling-Glow-up-Serum-Night-Cream-20Gr-40-Gr-Menutrisi-Kulit-sepanjang-malam-YOU-i.744873.13353803312?sp_atk=950a4401-bee0-4c22-8122-377020bc63f4&xptdk=950a4401-bee0-4c22-8122-377020bc63f4',
'description' => 'Serum Night Cream yang mengandung Rice Extract, Tranexamic Acid, dan Niacinamide yang menghidrasi kulit agar lebih lembut dan bercahaya keesokan harinya.
Netto: 40 g 

Cara Pemakaian: Aplikasikan secukupnya pada wajah yang telah dibersihkan setiap malam.
Untuk hasil yang optimal gunakan rangkaian perawatan wajah Dazzling secara teratur.

Overnight Skin Hydration -> Menjaga hidrasi kulit sepanjang malam sehingga terasa lebih lembut di pagi hari.
Supple & Glow Treatment -> Menjaga elastisitas kulit dan membuat kulit tampak lebih bercahaya.
Essential Skin Nourishment -> Memiliki kandungan penting yang mampu menutrisi kulit secara mendalam.

Saccharomyces/Rice Ferment Filtrate : Hasil fermentasi beras yang kaya nutrisi untuk membantu melembapkan dan mencerahkan kulit.
Tranexamic acid: Melindungi kulit dari paparan sinar UV dan membantu menghambat pembentukan noda hitam pada kulit.
Niacinamide: Membantu mencerahkan kulit dan meminimalisir tampilan pori-pori.
Olea Europaea (Olive) Fruit Oil : Kaya akan vitamin A, D, E, dan K yang dapat menutrisi kulit secara optimal.
Tocopheryl Acetate (Vitamin E) :Menjaga kelembapan kulit, menangkal radikal bebas dan melindungi kulit dari paparan sinar UV. 
Sodium Hyaluronate (Hyaluronic Acid) :Menghidrasi untuk kulit yang lembut dan kenyal.',
'price' => 24000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
220 => 
array (
'id' => 221,
'brand_id' => 30,
'name' => 'Sukin Sensitive Calming Night Cream - 120 ml - Krim Malam Wajah Sensitif Iritasi - Skincare',
'variation' => 'Night Cream 120ml',
'link' => 'https://shopee.co.id/Sukin-Sensitive-Calming-Night-Cream-120-ml-Krim-Malam-Wajah-Sensitif-Iritasi-Skincare-i.744873.9863707065?sp_atk=d8351398-391d-480e-9390-643250f6b733&xptdk=d8351398-391d-480e-9390-643250f6b733',
'description' => 'Kulit halus? Jangan khawatir! Calming Night Cream yang mewah mengandung minyak yang lebih kaya seperti Rosehip, Borage dan Evening Primrose Oils untuk membantu meningkatkan penampilan dan tekstur kulit saat Anda tidur! Mentimun dan Chamomile berfungsi untuk menenangkan kulit, membantu meringankan kemerahan karena kulit kering, dan meningkatkan kadar air dengan memberikan hidrasi yang intens. Kulit dibiarkan merasa bergizi, tenang dan terhidrasi.

TIP: Jika kulit Anda sangat kering, oleskan beberapa tetes Organic Rosehip Oil kami dan pijat ke kulit sebelum melembabkan.

Cara Penggunaan :
Bersihkan wajah lalu aplikasikan Sensitive Calming Night Cream secara merata di malam hari',
'price' => 238400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:17',
'updated_at' => '2022-06-27 15:31:17',
),
221 => 
array (
'id' => 222,
'brand_id' => 31,
'name' => 'BARU! L\'Oreal Paris Hyaluronic Acid Day Cream - 50ml (Krim Siang) Skin Care - Loreal',
'variation' => 'Day Cream 50ml',
'link' => 'https://shopee.co.id/BARU!-L\'Oreal-Paris-Hyaluronic-Acid-Day-Cream-50ml-(Krim-Siang)-Skin-Care-Loreal-i.744873.9685575988?sp_atk=d8b6151f-d065-45c0-9be2-c86ab281a5d8&xptdk=d8b6151f-d065-45c0-9be2-c86ab281a5d8',
'description' => 'Hyaluronic Acid (HA) adalah komponen penting yang menjaga kelembapan kulit dan kadarnya mulai menurun bahkan setelah umur 20 tahun - garis halus dan tekstur kulit yang kasar mulai tampak. L\'Oreal Paris Hyaluronic Acid Plumping Day Cream adalah pelembap wajah yang melembapkan dan mengenyalkan kulit untuk kulit tampak cerah dan tampak muda. 

Diformulasikan dengan teknologi hyaluronic acid yang dipatenkan oleh L\'Oreal Paris, micro hyaluron dalam L\'Oreal Paris Hyaluronic Acid Plumping Day Cream berukuran 50X* lebih kecil daru hyaluron pada umumnya, menyerap lebih dalam untuk kelembapan yang tahan lama. Setelah 1 kali pemakaian, kulit tampak lebih halus dan lembap; garis halus tersamarkan dan kulit terasa lebih kenyal hari demi hari. 

Dapat digunakan untuk tipe kulit: Normal, Kombinasi, Kering dan Kulit Awal Penuaan L\'Oreal Paris Hyaluronic Acid Plumping Day Cream sudah diuji dan divalidasi oleh ahli kulit. Untuk hasil terbaik, kombinasikan penggunaannya dengan rangkaian L\'Oreal Paris Revitalift 1.5% Hyaluronic Acid Serum.',
'price' => 189900,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
222 => 
array (
'id' => 223,
'brand_id' => 30,
'name' => 'Sukin Rosehip Hydrating Day Cream - 120 ml',
'variation' => 'Day Cream 120ml',
'link' => 'https://shopee.co.id/Sukin-Rosehip-Hydrating-Day-Cream-120-ml-i.744873.10409405460?sp_atk=af35c549-5cd5-444e-b5f8-74cfb6aa056b&xptdk=af35c549-5cd5-444e-b5f8-74cfb6aa056b',
'description' => '•Facial moisturiser
•Kulit normal - kering
•Melembapkan, mencegah penuaan dini, melembutkan, membuat kulit lebih bersinar

Kandungan utama:
Rosehip, kakadu plum, pomegranate, avocado

Cara penggunaan:
1.Setelah toner atau facial oil, aplikasikan pada wajah dan leher sambil ditepuk perlahan untuk membantu mempercepat penyerapan
2.Gunakan setiap pagi hari',
'price' => 238400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
223 => 
array (
'id' => 224,
'brand_id' => 11,
'name' => 'Wardah Crystallure Supreme Revitalizing Rich Cream 50 gr - Pelembab Wajah',
'variation' => 'Rich Cream 50gr',
'link' => 'https://shopee.co.id/Wardah-Crystallure-Supreme-Revitalizing-Rich-Cream-50-gr-Pelembab-Wajah-i.744873.11856532133?sp_atk=ea397b06-7a1f-4d8c-915b-d4861ac3bdc7&xptdk=ea397b06-7a1f-4d8c-915b-d4861ac3bdc7',
'description' => '"Krim wajah dengan tekstur rich namun tidak berminyak, dengan kandungan Gold Peptide Crystals, YouthGlow Active, dan SPF 35 PA +++ mengoptimasi peremajaan kulit untuk wajah lebih muda bercahaya dan melindunginya. Mengandung Natural Instant Brightening secara seketika membuat wajah tampak lebih cerah dan rona wajah merata.

*Gold Peptide Crystals & YouthGlow Actives: Kombinasi bahan aktif yang menjadikan kulit terasa lebih kenyal, kencang, dan terhidrasi
**SPF 35 PA+++ : Melindugi dari sinar matahari yang dapat menyebabkan penuaan, seperti kerutan dan garis halus di kemudian hari.
***Natural Instant Brightening: Secara seketika membuat wajah terlihat lebih cerah natural yang merata dan tampak sehat bercahaya.

- Dermatologycally tested
- Hypoallergenic
- For all skin types
- Non comedogenic
- Non acnegenic

How to Use :
1. Saat akan menggunakan krim, pastikan tangan bersih dan tidak terkontaminasi kotoran
2. Pastikan wajah dalam keadaan bersih
3. Gunakan spatula yang ada pada dus saat akan mengambil krim dari potnya
4. Aplikasikan pada wajah sesuai dengan kebutuhan
5. Pijat dengan lembut dimulai dari bagian dalam wajah menuju luar, ikuti bentuk wakah
6. Kemudian, tepuk dengan lembut untuk memastikan produk telah terserap dengan baik

Penggunaan Rangkaian Produk Wardah Crystallure Series Secara Lengkap dan Rutin akan Memberikan Hasil yang Lebih Optimal. 

DAY ROUTINE :
1. Crystallure Supreme Double Action Micellar Gel
2. Crystallure Supreme Activating Booster Essence
3. Crystallure Supreme Revitalizing Oil Serum
4. Crystallure Supreme Advanced Eye Serum
5. Crystallure Supreme Advanced Hydra Gel/ Crystallure Supreme Revitalizing Rich Cream

NIGHT ROUTINE :
1. Crystallure Supreme Double Action Micellar Gel
2. Crystallure Supreme Activating Booster Essence
3. Crystallure Supreme Revitalizing Oil Serum
4. Crystallure Supreme Advanced Eye Serum
5. Crystallure Supreme Advanced Hydra Gel/ Crystallure Supreme Activating Overnight Cream',
'price' => 163000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
224 => 
array (
'id' => 225,
'brand_id' => 11,
'name' => 'Wardah Crystallure Supreme Revitalizing Rich Cream - Revitalizing Oil Serum - Activating Booster Essence - Advanced Hydra Gel - Advanced Eye Serum',
'variation' => 'Overnight Cream 50gr',
'link' => 'https://shopee.co.id/Wardah-Crystallure-Supreme-Revitalizing-Rich-Cream-Revitalizing-Oil-Serum-Activating-Booster-Essence-Advanced-Hydra-Gel-Advanced-Eye-Serum-i.744873.10056534379?sp_atk=fe07261e-e27a-40e2-8639-71a74b1d2673&xptdk=fe07261e-e27a-40e2-8639-71a74b1d2673',
'description' => 'Crystallure Supreme Revitalizing Rich Cream 50 gr
"Krim wajah dengan tekstur rich namun tidak berminyak, dengan kandungan Gold Peptide Crystals, YouthGlow Active, dan SPF 35 PA +++ mengoptimasi peremajaan kulit untuk wajah lebih muda bercahaya dan melindunginya. Mengandung Natural Instant Brightening secara seketika membuat wajah tampak lebih cerah dan rona wajah merata.

Crystallure Supreme Activating Overnight Cream 50 gr
membantu merawat keremajaan kulit di malam hari untuk kulit yang tampak lebih muda bercahaya di setiap pagi nya. Diperkaya Gold-Peptide Crystals dan YouthGlow Active, krim ini bantu mengembalikan kelembaban esensial kulit, menjadikan nya terasa lebih kenyal, kencang, dan elastis. Kerutan pun tampak tersamarkan. GrandActive Retinoid di dalamnya membantu meningkatkan kehalusan kulit dan menyamarkan noda hitam.

Crystallure Supreme Advenced eye serum 15 ml
Diperkaya Gold-Peptide Crystals dan YouthGlow Actives, eye serum ini menjadikan area mata terasa lebih kencang dan kenyal, serta menghidrasinya. Advanced Micro Peptide di dalamnya terbukti dapat menyamarkan kantung mata, lingkaran hitam, dan kerutan di sekitar mata.

Crystallure Activating Booster Essence 30ml
Serum essence yang kaya akan bahan aktif meresap cepat ke lapisan kulit*. Mengandung 10x Gold-Peptide Crystals lebih banyak**, Crystallure Supreme Activating Booster Essence bantu merawat keremajaan kulit yang lebih intens untuk menyamarkan kerutan dan garis halus. YouthGlow Active dan MatrixKey Molecules di dalamnya menjaga kelembaban, kekencangan, dan kekenyalan kulit. Kini wajah tampak lebih muda bercahaya.

Crystallure Supreme Double Action Micellar Gel 150 ml
Selalu awali langkah perawatan kulit dengan membersihkannya terlebih dahulu. Angkat sisa riasan dan kotoran di wajah menggunakan teknologi micellar yang sekaligus menghidrasi dan memberi kesegaran pada kulit dengan tekstur gel lembut. Ekstrak kamomil, gold peptide crystals dan youthglow active membantu menyamarkan kerutan, garis halus dan membuat kulit menjadi dua kali lebih lembap. Produk ini juga memberikan efek dingin saat diusapkan ke wajah. 

Crystallure Supreme Oil Serum 30 ml
Lebih dari sekedar serum, Crystallure Supreme Revitalizing Oil Serum memberikan nutrisi ekstra peremajaan untuk wajah tampak lebih muda bercahaya di setiap tetes nya. Perpaduan 7 Botanical Oil yang berharga (Seaweed, Macadamia, Calendula, Chamomile, Wheat, Avocado, and Jojoba), dipilih karena kemampuan melembabkan dan kaya akan nutrisi untuk kulit. Serum ini juga mengandung Gold-Peptide Crystals dan YouthGlow Actives yang diketahui dapat menyamarkan kerutan dan menjaga elastisitas kulit.

Crystallure Supreme Advanced Hydra Gel 50 gr
Gel pelembap bertekstur ringan dan watery berikut ini. Kandungan triple hyaluronic acid menghidrasi kulit secara optimal. Produk ini menjadikan kulit kian lembap, kenyal dan senantiasa tampak muda bercahaya.',
'price' => 178500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
225 => 
array (
'id' => 226,
'brand_id' => 2,
'name' => 'Ariul Watermelon Hydro Glow Sleeping Mask Spout | Hydro Glow Cream Spout 25ml',
'variation' => 'Hydroglow Cream',
'link' => 'https://shopee.co.id/Ariul-Watermelon-Hydro-Glow-Sleeping-Mask-Spout-Hydro-Glow-Cream-Spout-25ml-i.744873.11836774436?sp_atk=d7719aa4-b4f2-4a2e-b73b-d3275f1c85e8&xptdk=d7719aa4-b4f2-4a2e-b73b-d3275f1c85e8',
'description' => 'Pelembab wajah dengan kandungan triple hyaluronic acid, ekstrak buah semangka serta butiran - butiran kapsul kecil untuk melembabkan hingga ke dalam permukaan kulit dan mengunci kelembaban sekaligus menstabilkan temperatur kulit wajah.

Cara Pakai
Setelah serum, ambil krim dan ratakan pada seluruh wajah. Tepuk lembut untuk membantu penyerapan.

Ariul Watermelon Hydro Glow Sleeping Mask Spout 
Sleeping Mask yang digunakan pada rangkaian terakhir perawatan wajah di malam hari. Mengandung triple hyaluronic acid, ekstrak buah semangka dan vitamin complex untuk memberikan kelembapan yang tinggi serta menutrisi untuk memperbaiki kompleksi kulit wajah agar tampak glowing dan cerah.',
'price' => 49000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
226 => 
array (
'id' => 227,
'brand_id' => 8,
'name' => 'ElsheSkin Oily Treatment Brightening Series (GEL) | Elshe Skin Oily Treatment',
'variation' => 'Brightening Cream',
'link' => 'https://shopee.co.id/ElsheSkin-Oily-Treatment-Brightening-Series-(GEL)-Elshe-Skin-Oily-Treatment-i.744873.5949570080?sp_atk=30cc14a1-053a-4ba4-9ebb-745f11fa394a&xptdk=30cc14a1-053a-4ba4-9ebb-745f11fa394a',
'description' => 'Elsheskin Oily Treatment Brightening Series (Gel) ini rangkaian produk perawatan untuk kulit berminyak tidak berjerawat, dan kusam yang berfungsi untuk: 
- Melembutkan kulit dan menjaga kelembaban kulit.
- Mencerahkan kulit wajah.
- Menyamarkan bekas Hitam.
- Untuk menghaluskan dan melembutkan.
- Mengurangi minyak berlebih diwajah.
- Membantu merawat kulit wajah berminyak.

Cara penggunaan:
Step Pagi:
1. ElsheSkin Oily Cleanser Wash.
2. ElsheSkin Oily Refresh Toner.
3. ElsheSkin Daily Protection Gel.

Step Malam:
1. ElsheSkin Oily Cleanser Wash.
2. ElsheSkin  Oily Refresh Toner.
3. Brightening Cream Sebelum tidur dioles ke seluruh wajah hindari area sensitif.

Note:
Hindari area sensitif: area mata, cuping hidung, pojok bibir.
Gunakan sesuai aturan cara pakai.',
'price' => 99000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
227 => 
array (
'id' => 228,
'brand_id' => 32,
'name' => 'Mineral Botanica Perfect Purifying Acne Day Cream 25g | Acne Night Cream 25g',
'variation' => 'Acne Day Cream 25gr',
'link' => 'https://shopee.co.id/Mineral-Botanica-Perfect-Purifying-Acne-Day-Cream-25g-Acne-Night-Cream-25g-i.744873.10967707875?sp_atk=1994f54e-f72e-4806-8c59-b5d7293603b8&xptdk=1994f54e-f72e-4806-8c59-b5d7293603b8',
'description' => 'Mineral Botanica Perfect Purifying Acne Day Cream
Memperkenalkan wajah baru dari Acne Care Day Cream: Perfect Purifying Acne Day Cream.
Perubahan packaging dari jar ke tube dengan warna yang lebih menarik. Membuat produk lebih ekonomis dan mudah dibawa kemana saja.
Dengan kandungan Rice Bran Oil yang di formulasikan untuk mengatasi kulit sensitif, berjerawat dan dapat digunakan pada pagi hari.',
'price' => 39600,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
228 => 
array (
'id' => 229,
'brand_id' => 52,
'name' => 'SAFI White Natural Brightening Cream Grapefruit Extract 45 gr',
'variation' => 'Grapefruit Cream 45g',
'link' => 'https://shopee.co.id/SAFI-White-Natural-Brightening-Cream-Grapefruit-Extract-45-gr-i.744873.3452829054?sp_atk=2522e5b3-1a92-4b4c-9bc0-8655ae41d678&xptdk=2522e5b3-1a92-4b4c-9bc0-8655ae41d678',
'description' => 'Krim lembut yang mudah menyerap, membuat wajah tampak cerah dan tidak berminyak. Mengandung Vitamin B3 dan Ekstrak Grapefruit yang kaya dengan Vitamin C membantu melindungi kulit dari paparan sinar matahari, membuat kulit terasa halus dan lembut serta membantu menjadikan kulit sehatmu tampak cerah, terasa lembab dan segar. 

Cara Pakai : Usapkan pada wajah dan leher secara merata. Gunakan setelah Safi White Natural Brightening Cleanser Grapefruit Extract untuk hasil optimal. ',
'price' => 43600,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
229 => 
array (
'id' => 230,
'brand_id' => 45,
'name' => '[BPOM] Pyunkang Yul Nutrition Cream 100ml',
'variation' => 'Nutrition Cream 100m',
'link' => 'https://shopee.co.id/-BPOM-Pyunkang-Yul-Nutrition-Cream-100ml-i.744873.2280798997?sp_atk=fdd7aeb3-d005-4c5c-ae62-a1f54e9e8fd2&xptdk=fdd7aeb3-d005-4c5c-ae62-a1f54e9e8fd2',
'description' => 'Menawarkan banyak nutrients untuk nourish dan melembabkan kulit untuk clear dan radiant complexion!

1. Intense hydration
2. Memberikan kulit glow dan sehat
3. Lembut tetapi cream ini cukup tebal untuk melembabkankulit
4. Free dari artificial fragrances, coloring dan hypo-allergenic

Cara Penggunaan:
1. Ambil an appropriate amount dari creamnya dengan spatula yang bersih
2. Aolikasikan ke kulit muka dan leher

Tip: Mix 2~3 tetes oil untuk kelembapan extra',
'price' => 228700,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
230 => 
array (
'id' => 231,
'brand_id' => 17,
'name' => 'Y.O.U The Radiance White Brightening Day Cream | Radiance White Regenerating Night Cream 30g - YOU',
'variation' => 'Day Cream',
'link' => 'https://shopee.co.id/Y.O.U-The-Radiance-White-Brightening-Day-Cream-Radiance-White-Regenerating-Night-Cream-30g-YOU-i.744873.4965701361?sp_atk=d92b0de1-d6aa-457c-8a1c-0d8fc59a5611&xptdk=d92b0de1-d6aa-457c-8a1c-0d8fc59a5611',
'description' => 'The Radiance White Regenerating Night Cream diformulasi dengan Ekstrak Snow Mushroom, Vitamin C, dan Niacinamide yang melembapkan dan meregenerasi kulit di malam hari untuk tampilan kulit yang cerah dan kenyal di pagi hari.

SELLING POINTS &BENEFITS:
1.Skin Regeneration  
Membantu regenerasi kulit agar terlihat lebih cerah dan segar.
2. Restores Resilience  
Mengembalikan elastisitas kulit, sehingga terasa lebih kencang.

Special Ingredients:
1. Tremella fuciformis polysaccharide
Ekstrak snow mushroom, memiliki kemampuan menyerupai Hyaluronic Acid sebagai pelembap dan berfungsi untuk menghidrasi kulit.
2. Niacinamide
Vit B3, menyamarkan tampilan pori-pori, noda hitam, dan garis halus, serta meratakan warna kulit
3. 3-O-Ethyl ascorbic acid
Vit C, kaya akan antioksidan dan melindungi kulit dari radikal bebas.
4. Tocopheryl acetate
Vit E, menangkal radikal bebas dan melindungi kulit dari sinar UV. 
5. Allantoin
Melembapkan, menenangkan dan membantu proses regenerasi kulit.
6. Alpha-arbutin
Mencerahkan dan meratakan warna kulit.

The Radiance White Brightening Day Cream diformulasikan dengan Ekstrak Snow Mushroom dan UV Protection yang mampu mencerahkan dan melindungi kulit dari paparan sinar UV untuk tampilan yang lebih cerah dan berseri.

SELLING POINTS & BENEFITS:
Reduce Dark Spots u000BMeratakan warna kulit dan menyamarkan noda hitam.
UV Protectionu000BPerlindungan dari sinar UV untuk aktivitas sehari-hari.

Special Ingredients:
1. Tremella fuciformis polysaccharide
Ekstrak snow mushroom, memiliki kemampuan menyerupai Hyaluronic Acid sebagai pelembap dan berfungsi untuk menghidrasi kulit.
2.Niacinamide
Vit B3, menyamarkan tampilan pori-pori, noda hitam, dan garis halus, serta meratakan warna kulit
3.3-O-Ethyl ascorbic acid
Vit C, kaya akan antioksidan dan melindungi kulit dari radikal bebas.
4. Tocopheryl acetate
Vit E, menangkal radikal bebas dan melindungi kulit dari sinar UV.
5.Ethylhexyl salicylate, Octocrylene, Titanium Dioxide.
Sunscreen

Memiliki perlindungan UV  untuk  hasil yang maksimal disarankan menggunakan tambahan sunscreen tambahan.',
'price' => 76800,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
231 => 
array (
'id' => 232,
'brand_id' => 15,
'name' => '[BPOM] SOMEBYMI AHA BHA PHA 30 Days Miracle Cream 60gr - SOME BY MI',
'variation' => 'Miracle Cream 60gr',
'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-AHA-BHA-PHA-30-Days-Miracle-Cream-60gr-SOME-BY-MI-i.744873.7792477795?sp_atk=b375c19e-fa1c-4c2a-bc7e-c585d96893bb&xptdk=b375c19e-fa1c-4c2a-bc7e-c585d96893bb',
'description' => 'Efek Utama
- Mengencangkan Lapisan kulit
- Memperbaiki kondisi kulit
- Menenangkan
- Perawatan bekas luka
- Perawatan pori-pori dan sebum

Kandungan Hight-Asiatic (700,000ppm) dan ekstrak cica 4 jenis yang kaya akan (asam Asiatic, asam Madecassic, Asiaticocaid, Madecassoside) untuk mengatasi permasalahan jerawat dasar juga memperbaiki lapisan kulit yang rusak
Mengandung ekstrak daun teatree 10.000ppm / AHA, BHA, bahan-bahan PHA yg merawat dan menenangkan kulit mati
Kerutan(Adenosine) / Mencerahkan (Niamacinamide)
Tidak ada 20 jenis bahan aditif buatan & Tidak ada komponen pemicu alergi
Bahan paten: Beautiful Herb Story - complex ™

TIPS
200% Melembabkan, Menenangkan, dan Menyegarkan
>> Jika disimpan dalam lemari es, efek melembabkan dan menyegarkan akan lebih maksimal pada kulit yang terasa panas.

CARA PENGGUNAAN️
Oleskan dengan lembut dan terapkan pada kulit Anda menggunakan ujung jari agar terserap dengan baik. 

Cara penggunaan Cream: Cream dapat digunakan setiap hari. Gunakan setelah aktifitas rutin membersihkan wajahmu setiap pagi dan sore lebih baik digunakan setelah serum Some By Mi atau Cream dapat juga di gunakan tersendiri tanpa toner dan serum.',
'price' => 137500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
232 => 
array (
'id' => 233,
'brand_id' => 56,
'name' => 'Citra Sakura Glow UV Powder Cream',
'variation' => 'Powder Cream',
'link' => 'https://shopee.co.id/Citra-Sakura-Glow-UV-Powder-Cream-i.744873.4481081977?sp_atk=d48c25fb-f394-45d1-850a-16385f1ddc0a&xptdk=d48c25fb-f394-45d1-850a-16385f1ddc0a',
'description' => 'Dengan 100% Natural Japanese Sakura Essence & 10x Multivitamin, untuk wajah pori tersamarkan, 14 jam cerah merona dan bebas kilap.
Diperkaya dengan ekstrak bunga Sakura dan Vitamin B3, rangkaian Citra Sakura Facial Foam & Powder Cream dapat menghadirkan wajah cerah merona seperti bunga Sakura

- Wajah Cerah Merona
- Pori Tersamarkan
- Tanpa Kilap seperti memakai bedak
- UV protection melindungi dari sinar matahari.
- Diperkaya dengan ekstrak bunga Sakura dan Vitamin B3
- Citra Sakura Facial Foam & Powder Cream dapat menghadirkan wajah cerah merona seperti bunga Sakura
- Tanggal yang Tertera di Kemasan adalah Tanggal Produksi, Bukan Tanggal Expired',
'price' => 40500,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
233 => 
array (
'id' => 234,
'brand_id' => 21,
'name' => 'AVOSKIN Luminous Emulsion Night Cream 10gr',
'variation' => 'Emulsion Night Cream',
'link' => 'https://shopee.co.id/AVOSKIN-Luminous-Emulsion-Night-Cream-10gr-i.744873.1729280249?sp_atk=d32be7b8-eea5-42c8-be03-77786ec91fd6&xptdk=d32be7b8-eea5-42c8-be03-77786ec91fd6',
'description' => 'Krim malam dengan tekstur yang lembut dan ringan terwujudkan dalam Avoskin Luminous Emulsion Night Cream. Diperkaya dengan
ekstrak alpukat, lemon, dan ekstrak bunga immortal berkualitas terbaik, Avoskin Luminous Emulsion Night Cream akan membantu
mewujudkan kulit wajah yang bersih, kenyal, dan cerah alami.
Kandungan Ethyl Ascorbic Acid ET-VC dan Etylhexyl Olivate dapat memberikan efek cerah dan bercahaya dari waktu ke waktu dengan
proses: merawat sel kulit untuk membantu proses peremajaan kulit, mencerahkan dan meratakan warna kulit, menyamarkan noda,
memberikan nutrisi kulit sehingga kulit terasa lebih lembut, tampak bersih, bercahaya dan berseri-seri. 
Bisa digunakan untuk perempuan atau laki-laki usia 15-60 tahun. Untuk semua jenis kulit. 

CARA PENGGUNAAN :
Oleskan secara merata pada wajah dan leher yang sudah bersih,
setiap malam hari sebelum tidur. Hindari terkena mata.',
'price' => 111200,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
234 => 
array (
'id' => 235,
'brand_id' => 52,
'name' => 'SAFI White Natural Brightening Cream Grapefruit Extract 20 gr',
'variation' => 'Grapefruit Cream 20g',
'link' => 'https://shopee.co.id/SAFI-White-Natural-Brightening-Cream-Grapefruit-Extract-20-gr-i.744873.1353899620?sp_atk=886436e8-24c2-4ca5-8c5e-42912ab28e26&xptdk=886436e8-24c2-4ca5-8c5e-42912ab28e26',
'description' => 'Krim lembut yang mudah menyerap, membuat wajah tampak cerah dan tidak berminyak. Mengandung Vitamin B3 dan Ekstrak Grapefruit yang kaya dengan Vitamin C membantu melindungi kulit dari paparan sinar matahari, membuat kulit terasa halus dan lembut serta membantu menjadikan kulit sehatmu tampak cerah, terasa lembab dan segar. 

Cara Pakai : Usapkan pada wajah dan leher secara merata. Gunakan setelah Safi White Natural Brightening Cleanser Grapefruit Extract untuk hasil optimal.',
'price' => 26400,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
235 => 
array (
'id' => 236,
'brand_id' => 52,
'name' => 'SAFI White Expert Replenishing Night Cream 45 gr',
'variation' => 'Night Cream 45 gr',
'link' => 'https://shopee.co.id/SAFI-White-Expert-Replenishing-Night-Cream-45-gr-i.744873.1353605679?sp_atk=d6d8e9ec-fb46-460c-a4fb-00958c20e349&xptdk=d6d8e9ec-fb46-460c-a4fb-00958c20e349',
'description' => 'Krim malam berbasis air dengan tekstur gel ringan yang mudah meresap, diperkaya Ekstrak Habbatus Sauda, OxyWhite technology dan Bio Hyaluronic. 
- Membantu mencerahkan, menyejukkan, dan menyamankan kulit wajah
- Membantu menyamaratakan warna kulit muka dengan Vitamin B3 selama tidur
- Memberikan kelembapan sepanjang malam dengan Bio Hyaluronic Acid

Cara Pakai : 
Usapkan pada wajah dan leher, pijat dengan lembut. Gunakan pada malam hari sebelum tidur.',
'price' => 88000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
236 => 
array (
'id' => 237,
'brand_id' => 11,
'name' => 'WARDAH Crystal Secret Night Cream | White Secret Night Cream - 30gr',
'variation' => 'Night Cream Jar 30gr',
'link' => 'https://shopee.co.id/WARDAH-Crystal-Secret-Night-Cream-White-Secret-Night-Cream-30gr-i.744873.1549199753?sp_atk=df995385-3ad1-48cb-aca5-31f0c88ae812&xptdk=df995385-3ad1-48cb-aca5-31f0c88ae812',
'description' => 'Krim pencerah wajah dengan Crystal-White Active, Advanced-White Spesific System dan Derma-Peptide Technology. Efektif bekerja pada malam hari untuk menghambat proses pembentukan melanin, melembabkan sekaligus membantu mencerahkan kulit untuk wajah yang tampak sebening kristal.

Dengan kombinasi Alpha Arbutin, Niacinamide, dan Brightening Peptide yang bekerja spesifik untuk menutrisi, mencerahkan, dan meratakan warna kulit untuk kulit tampak lebih cerah sebening kristal.

Cara pakai :
Oleskan tipis merata pada wajah & leher yang telah dibersihkan

Untuk semua jenis kulit ',
'price' => 80000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
237 => 
array (
'id' => 238,
'brand_id' => 11,
'name' => 'WARDAH Renew You Anti Aging Day Cream SPF30 30gr',
'variation' => 'Day Cream 30 grm',
'link' => 'https://shopee.co.id/WARDAH-Renew-You-Anti-Aging-Day-Cream-SPF30-30gr-i.744873.1549353399?sp_atk=89fc4a5d-c767-43d7-84c5-fb218c5e56bf&xptdk=89fc4a5d-c767-43d7-84c5-fb218c5e56bf',
'description' => 'Dari laboratorium penelitian Wardah muncul solusi inovatif untuk mengatasi masalah penuaan kulit.
Advanced RecoverAge System adalah terobosan dalam perawatan kulit yang membantu memperlambat setaip tanda penuaan (keriput, garis-garis halus, kulit kering, bintik hitam, warna kulit tidak meratam hilangnya kekencangan dan elastisitas kulit)
menggunakan bahan aktif revolusioner yang sangat efektif untuk mengungkapkan kulit muda anda

Manfaat :
- Membantu melindungi kulit dari UV A & UV B (SPF 30, PA+++)
- Membantu memberikan kelembaban kulit yang tahan lama 
- Memudarkan bintik-bintik gelap, garis-garis halus, dan kerutan di kulit
- Membantu melindungi kulit dari radikal bebas
- Formula yang ringan dan nyaman

Cara Penggunaan:
- Pijat lembut krim ke kulit yang telah dibersihkan
- Hindari serdah mata',
'price' => 82000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
238 => 
array (
'id' => 239,
'brand_id' => 11,
'name' => 'WARDAH Renew You Anti Aging Night Cream 30gr',
'variation' => 'Anti A. Night Cream',
'link' => 'https://shopee.co.id/WARDAH-Renew-You-Anti-Aging-Night-Cream-30gr-i.744873.1549365737?sp_atk=84a04b61-2f13-461a-820e-6fca7e34fa52&xptdk=84a04b61-2f13-461a-820e-6fca7e34fa52',
'description' => 'Dari laboratorium penelitian Wardah muncul solusi inovatif untuk mengatasi masalah penuaan kulit.
Advanced RecoverAge System adalah terobosan dalam perawatan kulit yang membantu memperlambat setaip tanda penuaan (keriput, garis-garis halus, kulit kering, bintik hitam, warna kulit tidak meratam hilangnya kekencangan dan elastisitas kulit)
menggunakan bahan aktif revolusioner yang sangat efektif untuk mengungkapkan kulit muda anda

- Membantu memperbaiki tekstur kulit
- Membantu proses regenerasi kulit
- Membantu meningkatkan kelembaban kulit
- Membantu meningkatkan elastisitas kulit
- Membantu memudarkan bintik-bintik gelap, garis halus, dan kerutan wajah
- Melindungi kulit dari radikal bebas
- Formula yang ringan dan nyaman

CARA APAKAI:
- Gunakan pada malam hari di kulit yang telah dibersihkan hindari daerah mata',
'price' => 82000,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:18',
'updated_at' => '2022-06-27 15:31:18',
),
239 => 
array (
'id' => 240,
'brand_id' => 52,
'name' => 'SAFI White Expert Illuminating Day Cream SPF 15 PA ++ 25 gr',
'variation' => 'W.E Day Cream 25gr',
'link' => 'https://shopee.co.id/SAFI-White-Expert-Illuminating-Day-Cream-SPF-15-PA-25-gr-i.744873.1353388367?sp_atk=4f7257c2-7086-46df-aabc-b38aecf2bd2f&xptdk=4f7257c2-7086-46df-aabc-b38aecf2bd2f',
'description' => 'Krim siang yang lembut dan mudah diserap diperkaya dengan Ekstrak Habbatus Sauda, OxyWhite Technology dan Tabir Surya. 
- Membantu melindungi kulit dari paparan sinar UVA dan UVB yang berbahaya bagi kulit
- Membantu melindungi kulit dari penggelapan akibat radiasi
- Membantu membuat kulit tampak cerah
- Menghaluskan kulit
- Membantu menyamaaratakan tampilan warna kulit

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. Gunakan pada pagi hari setelah penggunaan Safi White Expert Ultimate Essence. ',
'price' => 47800,
'category' => 'Daily Cream',
'created_at' => '2022-06-27 15:31:19',
'updated_at' => '2022-06-27 15:31:19',
),
240 => 
array (
'id' => 241,
'brand_id' => 17,
'name' => 'Y.O.U AcnePlus Low pH Calming Cleanser 100 gr - YOU Pembersih Wajah',
'variation' => 'Low Ph Cleanser 100g',
'link' => 'https://shopee.co.id/Y.O.U-AcnePlus-Low-pH-Calming-Cleanser-100-gr-YOU-Pembersih-Wajah-i.744873.12793804098?sp_atk=a7bb3438-333a-43fe-b7ca-d09ac94c9e6c&xptdk=a7bb3438-333a-43fe-b7ca-d09ac94c9e6c',
'description' => 'Pembersih wajah yang menenangkan dengan pH rendah mengandung 4D Centella, Herbal Fusion Actives, dan AHA, BHA, & PHA untuk menyeimbangkan kulit, membersihkan kotoran dengan lembut, dan menyegarkan kulit.

Selling Points & Benefit : 
1.	Clean & Fresh Skin: Pembersih wajah dengan pH rendah mengandung Corn Mint Oil untuk membersihkan dan menyegarkan kulit.
2.	Gently Exfoliates Skin: AHA, BHA, dan PHA membantu mengeksfoliasi sel kulit mati dan membersihkan pori-pori.

Special Ingredients :
-	Centella Asiatica Extract : Memiliki aktivitas anti-inflamasi dan antimikroba untuk meningkatkan perbaikan kulit dan mencegah hiperpigmentasi.
-	AHA : Membantu memperbaiki tekstur kulit.
-	BHA : Membantu membersihkan sebum berlebih.
-	PHA : Membantu mengeksfoliasi sel kulit mati dengan lembut.
-	Herbal Fusion Actives : Membantu mengurangi inflamasi dan memberikan aroma yang menyegarkan.

Cara Pemakaian: 
1.	Tuangkan secukupnya pada telapak tangan yang basah dan gosok hingga berbusa. 
2.	Usapkan pada wajah dengan lembut. 
3.	Bilas hingga bersih. 
4.	Untuk hasil yang optimal, gunakan rangkaian perawatan wajah AcnePlus secara teratur.

Full Ingredients :
Water, Sodium Laureth Sulfate, Cocamidopropyl Betaine, Sodium Lauryl Sulfate, Sodium Chloride, Glycol Distearate, Acrylates Copolymer, Butylene Glycol, Phenoxyethanol, Sodium Benzoate, PEG-150 Distearate, Cocamide MEA, PEG-40 Hydrogenated Castor Oil, Glycerin, Centella Asiatica Extract, Salicylic Acid, Mentha Arvensis Leaf Oil, Sodium Hydroxide, Disodium EDTA, Lactobionic Acid, Glycolic Acid, Hamamelis Virginiana Extract, Phellodendron Amurense Bark Extract, Citric Acid, Methylparaben, Propylparaben, Hydroxyacetophenone, 1,2-Hexanediol.',
'price' => 38900,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
241 => 
array (
'id' => 242,
'brand_id' => 55,
'name' => 'Hada Labo Gokujyun Ultimate Moisturizing Cleansing Oil 100ml',
'variation' => 'Cleansing Oil',
'link' => 'https://shopee.co.id/Hada-Labo-Gokujyun-Ultimate-Moisturizing-Cleansing-Oil-100ml-i.744873.2854492104?sp_atk=4797a011-0088-4877-a4c2-2b3ef2030a36&xptdk=4797a011-0088-4877-a4c2-2b3ef2030a36',
'description' => 'Kegunaan:
*Mengandung virgin coconut oil dan improved hyaluronic acid. Tidak mengandung bahan pewarna, pewangi dan mineral oil, sehingga lembut di kulit.
*Untuk membersihkan makeup, termasuk waterproof mascara dan eyeliner.

Cara penggunaan:
*Tuang secukupnya pada telapak tangan. Usapkan secara merata di seluruh wajah sambil dipijat perlahan.
*Bilas dengan air hangat.',
'price' => 51000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
242 => 
array (
'id' => 243,
'brand_id' => 57,
'name' => 'Acnes Oil Control Milk Cleanser 110ml - Pembersih Wajah',
'variation' => 'O.C Milk Cleanser',
'link' => 'https://shopee.co.id/Acnes-Oil-Control-Milk-Cleanser-110ml-Pembersih-Wajah-i.744873.1718169092?sp_atk=bb65de16-af00-4afc-8645-6dbadb7188e6&xptdk=bb65de16-af00-4afc-8645-6dbadb7188e6',
'description' => 'Formula krim lembut dengan kandungan natural active ingredient untuk kulit bersih optimal serta kurangi minyak berlebih.
Kombinasi dan ekstrak tanaman untuk membantu mengurangi minyak berlebih.
Diperkaya dengan olive oil untuk mengangkat kotoran dan sisa make up.
Membersihkan kulit tanpa membuat kulit menjadi kering.

Cara Pakai :
Usapkan ke seluruh wajah lalu bersihkan dengan kapas. Lanjutkan dengan
Acnes Natural Care Oil Control Toner.',
'price' => 27500,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
243 => 
array (
'id' => 244,
'brand_id' => 50,
'name' => 'Emina Creamy Milk Cleanser / Cleansing Lotion EMINA cosmetics',
'variation' => 'Creamy Milk',
'link' => 'https://shopee.co.id/Emina-Creamy-Milk-Cleanser-Cleansing-Lotion-EMINA-cosmetics-i.744873.741156575?sp_atk=7f3b9821-0eb2-47c2-92ca-00090e40ca4d&xptdk=7f3b9821-0eb2-47c2-92ca-00090e40ca4d',
'description' => 'Hilangkan makeup dan kotoran sehingga wajah terasa bersih dan lembut. Creamy milk cleansing lotion dibuat dengan PH balanced dan memiliki kandungan bahan aktif yang mampu membersihkan kotoran. Membuat kulit tetap segar.',
'price' => 18200,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
244 => 
array (
'id' => 245,
'brand_id' => 44,
'name' => 'Viva White Clean Mask  Refreshner Face Cleanser / Masker 50g',
'variation' => 'DRY-FINE WRINKLE',
'link' => 'https://shopee.co.id/Viva-White-Clean-Mask-Refreshner-Face-Cleanser-Masker-50g-i.744873.4045642665?sp_atk=574a133b-c210-421a-9c5e-c781e3ee5e76&xptdk=574a133b-c210-421a-9c5e-c781e3ee5e76',
'description' => 'Tersedia dalam 3 varian:
1. Viva White CLEAN & MASK REFRESHNER FOR ALL SKIN TYPES (Pink)
Cleanser sekaligus masker untuk semua jenis kulit. Mengandung Ekstrak Aloe Vera untuk merawat kelembaban kulit dan Ekstrak Yoghurt untuk menjadikan kulit tampak lebih cerah. Diperkaya dengan Pro Vitamin B5 untuk menjaga kelembaban kulit. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit..

2. Viva White CLEAN & MASK REFRESHNER FOR OILY-ACNE SKIN (Hijau)
Cleanser sekaligus masker untuk kulit berminyak yang rentan terhadap jerawat. Mengandung kombinasi Tea Tree Oil dan Ekstrak Lime untuk melawan kuman penyebab jerawat dan mengangkat kelebihan minyak. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit serta tidak menyebabkan kering.

3. Viva White CLEAN & MASK REFRESHNER FOR DRY-FINE WRINKLE SKIN (Kuning)
Cleanser sekaligus masker untuk kulit kering yang rentan terhadap munculnya garis-garis halus. Mengandung kombinasi Honey dan Ekstrak Chamomile untuk menutrisi dan menyejukan kulit. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit.

CARA PEMAKAIAN
Sebagai Face Cleanser: Keluarkan secukupnya pada telapak tangan. Dengan bantuan sedikit air, ratakan dan usapkan pada wajah sambil dipijat perlahan. Bilas dengan air hingga bersih. Gunakan sehari-hari
Sebagai Masker: Ratakan pada wajah, hindari daerah mata dan bibir. Biarkan selama kurang lebih 3 menit. Bilas dengan air hingga bersih. Gunakan 2 kali dalam seminggu.',
'price' => 12600,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
245 => 
array (
'id' => 246,
'brand_id' => 44,
'name' => 'Viva White Clean Mask  Refreshner Face Cleanser / Masker 50g',
'variation' => 'ALL-SKIN',
'link' => 'https://shopee.co.id/Viva-White-Clean-Mask-Refreshner-Face-Cleanser-Masker-50g-i.744873.4045642665?sp_atk=574a133b-c210-421a-9c5e-c781e3ee5e76&xptdk=574a133b-c210-421a-9c5e-c781e3ee5e76',
'description' => 'Tersedia dalam 3 varian:
1. Viva White CLEAN & MASK REFRESHNER FOR ALL SKIN TYPES (Pink)
Cleanser sekaligus masker untuk semua jenis kulit. Mengandung Ekstrak Aloe Vera untuk merawat kelembaban kulit dan Ekstrak Yoghurt untuk menjadikan kulit tampak lebih cerah. Diperkaya dengan Pro Vitamin B5 untuk menjaga kelembaban kulit. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit..

2. Viva White CLEAN & MASK REFRESHNER FOR OILY-ACNE SKIN (Hijau)
Cleanser sekaligus masker untuk kulit berminyak yang rentan terhadap jerawat. Mengandung kombinasi Tea Tree Oil dan Ekstrak Lime untuk melawan kuman penyebab jerawat dan mengangkat kelebihan minyak. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit serta tidak menyebabkan kering.

3. Viva White CLEAN & MASK REFRESHNER FOR DRY-FINE WRINKLE SKIN (Kuning)
Cleanser sekaligus masker untuk kulit kering yang rentan terhadap munculnya garis-garis halus. Mengandung kombinasi Honey dan Ekstrak Chamomile untuk menutrisi dan menyejukan kulit. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit.

CARA PEMAKAIAN
Sebagai Face Cleanser: Keluarkan secukupnya pada telapak tangan. Dengan bantuan sedikit air, ratakan dan usapkan pada wajah sambil dipijat perlahan. Bilas dengan air hingga bersih. Gunakan sehari-hari
Sebagai Masker: Ratakan pada wajah, hindari daerah mata dan bibir. Biarkan selama kurang lebih 3 menit. Bilas dengan air hingga bersih. Gunakan 2 kali dalam seminggu.',
'price' => 12600,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:33',
'updated_at' => '2022-06-27 15:31:33',
),
246 => 
array (
'id' => 247,
'brand_id' => 44,
'name' => 'Viva White Clean Mask  Refreshner Face Cleanser / Masker 50g',
'variation' => 'OILY-ACNE',
'link' => 'https://shopee.co.id/Viva-White-Clean-Mask-Refreshner-Face-Cleanser-Masker-50g-i.744873.4045642665?sp_atk=574a133b-c210-421a-9c5e-c781e3ee5e76&xptdk=574a133b-c210-421a-9c5e-c781e3ee5e76',
'description' => 'Tersedia dalam 3 varian:
1. Viva White CLEAN & MASK REFRESHNER FOR ALL SKIN TYPES (Pink)
Cleanser sekaligus masker untuk semua jenis kulit. Mengandung Ekstrak Aloe Vera untuk merawat kelembaban kulit dan Ekstrak Yoghurt untuk menjadikan kulit tampak lebih cerah. Diperkaya dengan Pro Vitamin B5 untuk menjaga kelembaban kulit. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit..

2. Viva White CLEAN & MASK REFRESHNER FOR OILY-ACNE SKIN (Hijau)
Cleanser sekaligus masker untuk kulit berminyak yang rentan terhadap jerawat. Mengandung kombinasi Tea Tree Oil dan Ekstrak Lime untuk melawan kuman penyebab jerawat dan mengangkat kelebihan minyak. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit serta tidak menyebabkan kering.

3. Viva White CLEAN & MASK REFRESHNER FOR DRY-FINE WRINKLE SKIN (Kuning)
Cleanser sekaligus masker untuk kulit kering yang rentan terhadap munculnya garis-garis halus. Mengandung kombinasi Honey dan Ekstrak Chamomile untuk menutrisi dan menyejukan kulit. Diperkaya dengan Ekstrak Aloe Vera dan Licorice untuk melembabkan dan menjadikan kulit cerah alami. Dengan formulasi yang aman untuk kulit karena bersifat pH Balanced dan tidak mengandung bahan sabun sehingga meminimalkan resiko iritasi kulit.

CARA PEMAKAIAN
Sebagai Face Cleanser: Keluarkan secukupnya pada telapak tangan. Dengan bantuan sedikit air, ratakan dan usapkan pada wajah sambil dipijat perlahan. Bilas dengan air hingga bersih. Gunakan sehari-hari
Sebagai Masker: Ratakan pada wajah, hindari daerah mata dan bibir. Biarkan selama kurang lebih 3 menit. Bilas dengan air hingga bersih. Gunakan 2 kali dalam seminggu.',
'price' => 12600,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
247 => 
array (
'id' => 248,
'brand_id' => 44,
'name' => 'Viva White All In One Face Cleanser',
'variation' => 'Yogurt',
'link' => 'https://shopee.co.id/Viva-White-All-In-One-Face-Cleanser-i.744873.4145638059?sp_atk=d5a49adf-e68c-495a-bd7c-82e7ae2f1486&xptdk=d5a49adf-e68c-495a-bd7c-82e7ae2f1486',
'description' => 'Pembersih praktis untuk kulit kering yang membersihkan sekaligus menyegarkan kulit wajah. Mengandung Soybean Oil,Ekstrak Mulberry,Yogurt (tergantung varian yang dipilih) yang kaya nutrisi untuk merawat kulit kering dan Moisturizer untuk membantu meningkatkan kelembaban alami kulit wajah. Mudah digunakan dan tidak lengket di kulit. Cocok digunakan pada aktifitas sehari-hari yang membutuhkan waktu singkat.

Soybean untuk kulit KERING
Mulberry untuk NORMAL/KUSANM
Yogurt untuk kulit BERMINYAK

Cara Pemakaian :
Oleskan Viva White All In One Face Cleanser pada wajah dan leher, lakukan massage ringan kemudian angkat dengan kapas/tissue. Lanjutkan dengan Viva White Moisturizer.',
'price' => 6100,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
248 => 
array (
'id' => 249,
'brand_id' => 44,
'name' => 'Viva White All In One Face Cleanser',
'variation' => 'Mulberry',
'link' => 'https://shopee.co.id/Viva-White-All-In-One-Face-Cleanser-i.744873.4145638059?sp_atk=d5a49adf-e68c-495a-bd7c-82e7ae2f1486&xptdk=d5a49adf-e68c-495a-bd7c-82e7ae2f1486',
'description' => 'Pembersih praktis untuk kulit kering yang membersihkan sekaligus menyegarkan kulit wajah. Mengandung Soybean Oil,Ekstrak Mulberry,Yogurt (tergantung varian yang dipilih) yang kaya nutrisi untuk merawat kulit kering dan Moisturizer untuk membantu meningkatkan kelembaban alami kulit wajah. Mudah digunakan dan tidak lengket di kulit. Cocok digunakan pada aktifitas sehari-hari yang membutuhkan waktu singkat.

Soybean untuk kulit KERING
Mulberry untuk NORMAL/KUSANM
Yogurt untuk kulit BERMINYAK

Cara Pemakaian :
Oleskan Viva White All In One Face Cleanser pada wajah dan leher, lakukan massage ringan kemudian angkat dengan kapas/tissue. Lanjutkan dengan Viva White Moisturizer.',
'price' => 6100,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
249 => 
array (
'id' => 250,
'brand_id' => 11,
'name' => 'Wardah Crystal Secret Melting Milk Cleanser | White Secret Pure Brightening Cleanser - 100 ml',
'variation' => 'Milk Cleanser 100ml',
'link' => 'https://shopee.co.id/Wardah-Crystal-Secret-Melting-Milk-Cleanser-White-Secret-Pure-Brightening-Cleanser-100-ml-i.744873.1556651051?sp_atk=7d482111-dd88-4684-9861-1183fce35f8c&xptdk=7d482111-dd88-4684-9861-1183fce35f8c',
'description' => 'Cleanser yang diformulasikan khusus mengandung AHA Natural yang efektif membantu membersihkan make up dan kotoran pada kulit wajah serta mengangkat sel kulit mati. Mengandung Vit B3 dan Licorice Extract yang membantu mencerahkan kulit wajah. Hingga kulit terasa lebih bersih, halus dan tampak cerah.

Cara pemakaian:
- Gunakan secara teratur pada pagi dan malam hari
- Aplikasikan pada wajah dan leher menggunakan kapas
- Bersihkan wajah ke arah atas untuk mengangkat kotoran dan make up secara maksimal
- Ikuti cara penggunaan harian untuk serangkaian produk White Secret',
'price' => 24500,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
250 => 
array (
'id' => 251,
'brand_id' => 19,
'name' => 'Azarine Brightening Facial Cleanser 60ml C White | Azarine Pembersih Muka',
'variation' => 'C White Cleanser',
'link' => 'https://shopee.co.id/Azarine-Brightening-Facial-Cleanser-60ml-C-White-Azarine-Pembersih-Muka-i.744873.8040835804?sp_atk=0b4638e7-01be-4f71-a6f3-4a8c6683abac&xptdk=0b4638e7-01be-4f71-a6f3-4a8c6683abac',
'description' => 'Pembersih wajah yang kaya akan vitamin C  untuk MENCERAHKAN dan MEMBERSIHKAN kulit dari kotoran dan sisa make up. kandungan Natural AHA dan BHA membantu mengangkat kotoran serta melembabkan kulit. kandungan 5 Ekstrak alami dari papaya, lemon, mulberry, yogurt dan bengkoang membantu mencerahkan dan menutrisi kulit wajah tampak lebih cerah, segar dan halus. 

KEUNGGULAN:
-Whitening
- Mild surfactant & deep cleansing
- Non Drying
- Oil Free
- high Vitamin C & Extracts

Cara pakai : Tuangkan secukupnya pada telapak tangan. basahi dengan air lalu gosok pada wajah, lalu bilas. Untuk hasil maksimal gunakan rangkaian C White Series lainnya. ',
'price' => 27900,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
251 => 
array (
'id' => 252,
'brand_id' => 28,
'name' => 'COSRX Low pH Good Morning Gel Cleanser | Pembersih Wajah SkinCare Skin Care',
'variation' => 'Low pH 50ml',
'link' => 'https://shopee.co.id/COSRX-Low-pH-Good-Morning-Gel-Cleanser-Pembersih-Wajah-SkinCare-Skin-Care-i.744873.6272474048?sp_atk=0a24bcd6-f3ae-4048-8af9-5040231d369c&xptdk=0a24bcd6-f3ae-4048-8af9-5040231d369c',
'description' => 'COSRX Low pH Good Morning Cleanser adalah produk asal Korea Selatan yang menggunakan bahan-bahan alami.

Pembersih wajah dengan formula lembut yang bagus digunakan pada pagi hari. Mampu membersihkan kulit sensitif sekalipun dengan lembut berkat kandungannya yang memiliki kadar acid yang mirip dengan kadar pH kulit. Gel cleanser ini mampu menenangkan, mengeksfoliasi, melembapkan sekaligus membersihkan kulit wajah. Pembersih wajah ini juga mampu mengangkat sel-sel kulit mati dan minyak berlebih yang muncul selama tidur sehingga wajah menjadi bersih dan segar.

Petunjuk Pemakaian:
Pijat wajah dengan lembut menggunakan Low pH Good Morning Gel Cleanser secukupnya pada kulit wajah yang telah dibasahi.
Bilas dengan air hangat
Tepuk-tepuk wajah hingga kering, dan lanjutkan ke perawatan wajah selanjutnya.',
'price' => 48700,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
252 => 
array (
'id' => 253,
'brand_id' => 71,
'name' => 'Herborist Rose Water | Herborist Cleansing Milk Rose | Herboris | Pembersih Wajah',
'variation' => 'Rose Cleansing Milk',
'link' => 'https://shopee.co.id/Herborist-Rose-Water-Herborist-Cleansing-Milk-Rose-Herboris-Pembersih-Wajah-i.744873.4076598134?sp_atk=b3fe89a8-d201-4cc8-b000-8031f81fbb7c&xptdk=b3fe89a8-d201-4cc8-b000-8031f81fbb7c',
'description' => 'Herborist Susu Pembersih Mawar untuk membersihkan make up dan sisa kotoran lainnya secara maksimal, dengan esktrak mawar, vitamin e dan whitening yang menjaga elastisitas serta kelembapan pada kulit wajah sehingga wajah tampak lebih bersih, segar dan cerah alami.

Cara Pakai : Oleskan Herborist Susu Pembersih Mawar pada wajah, pijat secara lembut dengan gerakan memutar. Kemudian bersihkan wajah menggunakan kapas hingga semua kotoran terangkat.',
'price' => 8500,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
253 => 
array (
'id' => 254,
'brand_id' => 57,
'name' => 'Acnes Natural Care Acne Treatment Series | Berjerawat',
'variation' => 'O.C Milk Clean 110ml',
'link' => 'https://shopee.co.id/Acnes-Natural-Care-Acne-Treatment-Series-Berjerawat-i.744873.1705796843?sp_atk=055d9f17-a719-41f2-865a-fe5c226859d0&xptdk=055d9f17-a719-41f2-865a-fe5c226859d0',
'description' => 'Skincare yang dikhususkan untuk kulit berjerawat.',
'price' => 27500,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
254 => 
array (
'id' => 255,
'brand_id' => 22,
'name' => 'SOMETHINC ACNEDOT Treatment Low pH Cleanser 100ml - Sabun Cuci Muka Kulit Berjerawat',
'variation' => 'Acne Low pH Cleanser',
'link' => 'https://shopee.co.id/SOMETHINC-ACNEDOT-Treatment-Low-pH-Cleanser-100ml-Sabun-Cuci-Muka-Kulit-Berjerawat-i.744873.16935151537?sp_atk=a232872e-554a-4d39-8380-c73368647563&xptdk=a232872e-554a-4d39-8380-c73368647563',
'description' => 'Get Rid of Acne Poreblem in 28 days!
Sabun pembersih wajah vegan yang memiliki kemampuan 5X Acne Combat Power untuk membantu membersihkan pori-pori sekaligus mengangkat kotoran, sel kulit mati, residu, & minyak berlebih yang dapat menyebabkan timbulnya jerawat. Formula non-stripping & non-drying dengan Tea Tree untuk melawan jerawat & Trehalose agar kulit tetap lembab. Tekstur nyaman menjadikan kulit wajah lebih bersih, halus, & bebas kilap.

Manfaat:
Membantu membersihkan pori-pori sekaligus mengangkat kotoran, kulit mati, residu & minyak berlebih
Membantu melawan jerawat
Membantu menjaga kulit tetap lembab

Star Ingredients: 
Succinic Acid: Mengurangi pori-pori tersumbat &tampilan minyak berlebih
Sea buckthorn: Efektifitas setara 15X lipat Vitamin C sebagai agen pencerah & sumber antioksidan
Folic Acid: Menghambat pertumbuhan jerawat 
Hydrolyzed Algin: Mengontrol produksi minyak berlebih, melawan bakteri penyebab jerawat & bersifat anti bakteri
65% Korean Green Tea Water: Antioksidan yang kuat, menenangkan kemerahan pada jerawat yang meradang & bersifat anti bakteri
Tea Tree Oil: Bersifat antibakteri untuk melawan bakteri penyebab jerawat
Trehalose: Bersifat Humectant untuk menjaga kelembaban kulit setelah pembilasan

Jenis kulit: Kulit acne prone & berminyak

Cara pemakaian: 
Bersihkan wajah dengan Somethinc ACNEDOT Treatment Low pH Cleanser
Gunakan Somethinc ACNEDOT Treatment Toner dengan gerakan menepuk ke seluruh area wajah & leher
Lanjutkan dengan serum Somethinc favoritmu
Pada tahapan terakhir, gunakan moisturizer Somethinc ACNEDOT Treatment Moisturizer Gel ke seluruh wajah & leher. (Gunakan roller pijat dengan gerakan memutar untuk ukuran 50ml, hindari memijat pada area dengan jerawat aktif).
Pada pagi hari, gunakan sunscreen Somethinc Holyshield! Serum Corrector setelah penggunaan moisturizer.

Vegan Friendly 
Fungal Acne Friendly
Non- Irritation Formula
Dermatologically-tested
Hypoallergenic-tested
Suitable for teenager (boleh dipakai dari umur 11 tahun)',
'price' => 99000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
255 => 
array (
'id' => 256,
'brand_id' => 52,
'name' => 'Safi Hydra Glow Hydrating Water SERIES | Moisturizer - Lock Mist - Cleanser - Bank Serum - Toning Essence',
'variation' => 'Water Cleanser 125gr',
'link' => 'https://shopee.co.id/Safi-Hydra-Glow-Hydrating-Water-SERIES-Moisturizer-Lock-Mist-Cleanser-Bank-Serum-Toning-Essence-i.744873.14070376925?sp_atk=4e21007e-bd59-45f4-add3-67c0eb743e8d&xptdk=4e21007e-bd59-45f4-add3-67c0eb743e8d',
'description' => 'Safi Hydra Glow Hydrating Water Cleanser 125gr - Pembersih Wajah
Pembersih wajah yang super lembut dengan formula anti *PM 2.5 yang terbukti secara scientific mampu membersihkan kulit hingga mendalam dan menyeluruh.',
'price' => 33800,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
256 => 
array (
'id' => 257,
'brand_id' => 4,
'name' => 'GLOWINC POTION FOREVER+ Pro Youth Low pH Cleanser',
'variation' => 'FOREVER+ pH Cleanser',
'link' => 'https://shopee.co.id/GLOWINC-POTION-FOREVER-Pro-Youth-Low-pH-Cleanser-i.744873.12606037122?sp_atk=ecffeda1-86e5-48e0-b415-6617be851352&xptdk=ecffeda1-86e5-48e0-b415-6617be851352',
'description' => 'Pembersih wajah yang bersifat anti-aging, dapat membantu menyamarkan garis kerutan halus & membantu memperkuat skin barrier. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Basuh wajah dengan air.
Tuangkan cleanser sebesar kacang almond ke telapak tangan.
Gosok perlahan & balurkan ke seluruh wajah & leher.
Bilas dengan air & lanjutkan ke step #No.2 yaitu toner. Gunakan setiap hari pagi & malam.

Diperkaya oleh:
Acetyl hexapeptide-8
Bakuchiol
4 Layer HA
Triple ceramide',
'price' => 71100,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
257 => 
array (
'id' => 258,
'brand_id' => 4,
'name' => 'GLOWINC POTION MAINTAIN+ Nutrient Skin pH Balancer Cleanser',
'variation' => 'MAINTAIN+ Cleanser',
'link' => 'https://shopee.co.id/GLOWINC-POTION-MAINTAIN-Nutrient-Skin-pH-Balancer-Cleanser-i.744873.11546688743?sp_atk=e526bba1-02f8-403a-89bc-117208a3ae47&xptdk=e526bba1-02f8-403a-89bc-117208a3ae47',
'description' => 'Pembersih wajah untuk kulit normal. Dapat menghidrasi kulit, membantu mencerahkan kulit & membantu mencegah munculnya tanda-tanda penuaan dini. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Basuh wajah dengan air.
Tuangkan cleanser sebesar kacang almond ke telapak tangan.
Gosok perlahan & balurkan ke seluruh wajah & leher.
Bilas dengan air & lanjutkan ke step #No.2 yaitu toner. Gunakan setiap hari pagi & malam.

Diperkaya oleh:
Triple ceramide
Hyaluronic acid
Glutathione
Acetyl hexapeptide-8',
'price' => 62100,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
258 => 
array (
'id' => 259,
'brand_id' => 22,
'name' => 'SOMETHINC Reset Gentle Micellar Cleansing Water 40mL - 160mL',
'variation' => 'Cleansng Water 160ml',
'link' => 'https://shopee.co.id/SOMETHINC-Reset-Gentle-Micellar-Cleansing-Water-40mL-160mL-i.744873.11725115186?sp_atk=4e910257-aa71-42a9-b9a2-e05beeae992e&xptdk=4e910257-aa71-42a9-b9a2-e05beeae992e',
'description' => 'Reset Gentle Micellar Cleansing Water
Micellar Water dengan SURFAKTAN NON-IONIC yang sangat mild & gentle, sehingga dapat digunakan sehari-hari, tanpa membuat kulit menjadi kering & mengikis lapisan barrier kulit. Membersihkan make-up ringan, sunscreen & menyegarkan kulit setelah beraktifitas seharian.

Jenis kulit: Semua jenis kulit
Kelebihan:
Meluruhkan seluruh kotoran, sebum berlebih, waterproof makeup & sunscreen
Menggunakan PEG-6 Caprylic/Capric Glycerides, yaitu surfaktan non-ionic yang tidak akan mengiritasi kulit karena sangat mild & gentle
Bersifat anti-iritasi sehingga dapat membantu menenangkan jerawat karena mengandung Mugwort, Aloe & Calendula
Setelah penggunaan terasa segar, tidak licin & menyegarkan kulit kusam
Magic Water, pembersih yang lembut tetapi mampu mengangkat kotoran dengan sangat baik
Tidak ada efek stripping pada kulit
Mampu menjaga hidrasi kulit & skin barrier

Hero Ingredients: 
PEG-6 Caprylic/Capric Glycerides: Membersihkan kotoran dan minyak berlebih secara lembut tanpa menghilangkan minyak alami pada kulit, sehingga tidak menyebabkan iritasi.
Mugwort: Mengatasi kemerahan & radang, serta memperkuat lapisan pelindung kulit
Aloe Barbadensis Leaf Extract: Kaya akan antioksidan, membantu mengurangi kemerahan & melembabkan kulit.
Panthenol:  Bersifat humectant (menjaga kadar air dalam kulit) sehingga mampu melembabkan, memberikan efek lembut, membantu meredakan iritasi & mencegah inflamasi
Calendula Officinalis Flower Extract: membantu meredakan iritasi ringan yang disebabkan oleh polusi, membantu menenangkan kulit yang rusak akibat paparan sinar UV, melembabkan kulit & membantu mengatasi jerawat

Cara pemakaian:
Tuang RESET Gentle Micellar Cleansing Water ke kapas, usapkan perlahan sampai wajah menjadi bersih, ulangi step pemakaian jika merasa diperlukan
Lanjutkan step selanjutnya dengan sabun cuci muka Low pH Jelly Cleanser

Your skin will love this because it\'s:
Vegan Friendly
Fungal Acne Safe 
Non-ionic Surfactant
Sensitive Skin Friendly
Hypoallergenic Tested
Suitable for daily use
Suitable for Teenager (boleh dipakai dari umur 11 tahun ke atas)

Ingredients: 
Water, PEG-6 Caprylic/Capric Glycerides, Propanediol, Dipropylene Glycol, Glycerin, Pentylene Glycol, Calendula Officinalis Flower Extract, Artemisia Vulgaris Extract, Aloe Barbadensis Leaf Extract, Panthenol, Caprylyl Glycol, Ethylhexylglycerin, Allantoin, Magnesium Aspartate, Zinc Gluconate, Sodium Citrate, Citric Acid, Sodium Phytate, 1,2-Hexanediol, Phenoxyethanol, Copper Gluconate, Butylene Glycol, Octanediol, Tocopherol',
'price' => 79000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
259 => 
array (
'id' => 260,
'brand_id' => 22,
'name' => 'SOMETHINC Reset Gentle Micellar Cleansing Water 40mL - 160mL',
'variation' => 'Cleansng Oil 100ml',
'link' => 'https://shopee.co.id/SOMETHINC-Reset-Gentle-Micellar-Cleansing-Water-40mL-160mL-i.744873.11725115186?sp_atk=4e910257-aa71-42a9-b9a2-e05beeae992e&xptdk=4e910257-aa71-42a9-b9a2-e05beeae992e',
'description' => 'Reset Gentle Micellar Cleansing Water
Micellar Water dengan SURFAKTAN NON-IONIC yang sangat mild & gentle, sehingga dapat digunakan sehari-hari, tanpa membuat kulit menjadi kering & mengikis lapisan barrier kulit. Membersihkan make-up ringan, sunscreen & menyegarkan kulit setelah beraktifitas seharian.

Jenis kulit: Semua jenis kulit

Kelebihan:
Meluruhkan seluruh kotoran, sebum berlebih, waterproof makeup & sunscreen
Menggunakan PEG-6 Caprylic/Capric Glycerides, yaitu surfaktan non-ionic yang tidak akan mengiritasi kulit karena sangat mild & gentle
Bersifat anti-iritasi sehingga dapat membantu menenangkan jerawat karena mengandung Mugwort, Aloe & Calendula
Setelah penggunaan terasa segar, tidak licin & menyegarkan kulit kusam
Magic Water, pembersih yang lembut tetapi mampu mengangkat kotoran dengan sangat baik
Tidak ada efek stripping pada kulit
Mampu menjaga hidrasi kulit & skin barrier

Hero Ingredients: 
PEG-6 Caprylic/Capric Glycerides: Membersihkan kotoran dan minyak berlebih secara lembut tanpa menghilangkan minyak alami pada kulit, sehingga tidak menyebabkan iritasi.
Mugwort: Mengatasi kemerahan & radang, serta memperkuat lapisan pelindung kulit
Aloe Barbadensis Leaf Extract: Kaya akan antioksidan, membantu mengurangi kemerahan & melembabkan kulit.
Panthenol:  Bersifat humectant (menjaga kadar air dalam kulit) sehingga mampu melembabkan, memberikan efek lembut, membantu meredakan iritasi & mencegah inflamasi
Calendula Officinalis Flower Extract: membantu meredakan iritasi ringan yang disebabkan oleh polusi, membantu menenangkan kulit yang rusak akibat paparan sinar UV, melembabkan kulit & membantu mengatasi jerawat

Cara pemakaian:
Tuang RESET Gentle Micellar Cleansing Water ke kapas, usapkan perlahan sampai wajah menjadi bersih, ulangi step pemakaian jika merasa diperlukan
Lanjutkan step selanjutnya dengan sabun cuci muka Low pH Jelly Cleanser

Your skin will love this because it\'s:
Vegan Friendly
Fungal Acne Safe 
Non-ionic Surfactant
Sensitive Skin Friendly
Hypoallergenic Tested
Suitable for daily use
Suitable for Teenager (boleh dipakai dari umur 11 tahun ke atas)

Ingredients: 
Water, PEG-6 Caprylic/Capric Glycerides, Propanediol, Dipropylene Glycol, Glycerin, Pentylene Glycol, Calendula Officinalis Flower Extract, Artemisia Vulgaris Extract, Aloe Barbadensis Leaf Extract, Panthenol, Caprylyl Glycol, Ethylhexylglycerin, Allantoin, Magnesium Aspartate, Zinc Gluconate, Sodium Citrate, Citric Acid, Sodium Phytate, 1,2-Hexanediol, Phenoxyethanol, Copper Gluconate, Butylene Glycol, Octanediol, Tocopherol',
'price' => 169000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
260 => 
array (
'id' => 261,
'brand_id' => 22,
'name' => 'SOMETHINC Reset Gentle Micellar Cleansing Water 40mL - 160mL',
'variation' => 'Omega Cleansing 5gr',
'link' => 'https://shopee.co.id/SOMETHINC-Reset-Gentle-Micellar-Cleansing-Water-40mL-160mL-i.744873.11725115186?sp_atk=4e910257-aa71-42a9-b9a2-e05beeae992e&xptdk=4e910257-aa71-42a9-b9a2-e05beeae992e',
'description' => 'Micellar Water dengan SURFAKTAN NON-IONIC yang sangat mild & gentle, sehingga dapat digunakan sehari-hari, tanpa membuat kulit menjadi kering & mengikis lapisan barrier kulit. Membersihkan make-up ringan, sunscreen & menyegarkan kulit setelah beraktifitas seharian.

Jenis kulit: Semua jenis kulit

Kelebihan:
Meluruhkan seluruh kotoran, sebum berlebih, waterproof makeup & sunscreen
Menggunakan PEG-6 Caprylic/Capric Glycerides, yaitu surfaktan non-ionic yang tidak akan mengiritasi kulit karena sangat mild & gentle
Bersifat anti-iritasi sehingga dapat membantu menenangkan jerawat karena mengandung Mugwort, Aloe & Calendula
Setelah penggunaan terasa segar, tidak licin & menyegarkan kulit kusam
Magic Water, pembersih yang lembut tetapi mampu mengangkat kotoran dengan sangat baik
Tidak ada efek stripping pada kulit
Mampu menjaga hidrasi kulit & skin barrier

Hero Ingredients: 
PEG-6 Caprylic/Capric Glycerides: Membersihkan kotoran dan minyak berlebih secara lembut tanpa menghilangkan minyak alami pada kulit, sehingga tidak menyebabkan iritasi.
Mugwort: Mengatasi kemerahan & radang, serta memperkuat lapisan pelindung kulit
Aloe Barbadensis Leaf Extract: Kaya akan antioksidan, membantu mengurangi kemerahan & melembabkan kulit.
Panthenol:  Bersifat humectant (menjaga kadar air dalam kulit) sehingga mampu melembabkan, memberikan efek lembut, membantu meredakan iritasi & mencegah inflamasi
Calendula Officinalis Flower Extract: membantu meredakan iritasi ringan yang disebabkan oleh polusi, membantu menenangkan kulit yang rusak akibat paparan sinar UV, melembabkan kulit & membantu mengatasi jerawat

Cara pemakaian:
Tuang RESET Gentle Micellar Cleansing Water ke kapas, usapkan perlahan sampai wajah menjadi bersih, ulangi step pemakaian jika merasa diperlukan
Lanjutkan step selanjutnya dengan sabun cuci muka Low pH Jelly Cleanser

Your skin will love this because it\'s:
Vegan Friendly
Fungal Acne Safe 
Non-ionic Surfactant
Sensitive Skin Friendly
Hypoallergenic Tested
Suitable for daily use
Suitable for Teenager (boleh dipakai dari umur 11 tahun ke atas)

Ingredients: 
Water, PEG-6 Caprylic/Capric Glycerides, Propanediol, Dipropylene Glycol, Glycerin, Pentylene Glycol, Calendula Officinalis Flower Extract, Artemisia Vulgaris Extract, Aloe Barbadensis Leaf Extract, Panthenol, Caprylyl Glycol, Ethylhexylglycerin, Allantoin, Magnesium Aspartate, Zinc Gluconate, Sodium Citrate, Citric Acid, Sodium Phytate, 1,2-Hexanediol, Phenoxyethanol, Copper Gluconate, Butylene Glycol, Octanediol, Tocopherol',
'price' => 45000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:34',
'updated_at' => '2022-06-27 15:31:34',
),
261 => 
array (
'id' => 262,
'brand_id' => 22,
'name' => 'SOMETHINC Reset Gentle Micellar Cleansing Water 40mL - 160mL',
'variation' => 'Cleansing Water 40ml',
'link' => 'https://shopee.co.id/SOMETHINC-Reset-Gentle-Micellar-Cleansing-Water-40mL-160mL-i.744873.11725115186?sp_atk=4e910257-aa71-42a9-b9a2-e05beeae992e&xptdk=4e910257-aa71-42a9-b9a2-e05beeae992e',
'description' => 'Micellar Water dengan SURFAKTAN NON-IONIC yang sangat mild & gentle, sehingga dapat digunakan sehari-hari, tanpa membuat kulit menjadi kering & mengikis lapisan barrier kulit. Membersihkan make-up ringan, sunscreen & menyegarkan kulit setelah beraktifitas seharian.

Jenis kulit: Semua jenis kulit

Kelebihan:
Meluruhkan seluruh kotoran, sebum berlebih, waterproof makeup & sunscreen
Menggunakan PEG-6 Caprylic/Capric Glycerides, yaitu surfaktan non-ionic yang tidak akan mengiritasi kulit karena sangat mild & gentle
Bersifat anti-iritasi sehingga dapat membantu menenangkan jerawat karena mengandung Mugwort, Aloe & Calendula
Setelah penggunaan terasa segar, tidak licin & menyegarkan kulit kusam
Magic Water, pembersih yang lembut tetapi mampu mengangkat kotoran dengan sangat baik
Tidak ada efek stripping pada kulit
Mampu menjaga hidrasi kulit & skin barrier

Hero Ingredients: 
PEG-6 Caprylic/Capric Glycerides: Membersihkan kotoran dan minyak berlebih secara lembut tanpa menghilangkan minyak alami pada kulit, sehingga tidak menyebabkan iritasi.
Mugwort: Mengatasi kemerahan & radang, serta memperkuat lapisan pelindung kulit
Aloe Barbadensis Leaf Extract: Kaya akan antioksidan, membantu mengurangi kemerahan & melembabkan kulit.
Panthenol:  Bersifat humectant (menjaga kadar air dalam kulit) sehingga mampu melembabkan, memberikan efek lembut, membantu meredakan iritasi & mencegah inflamasi
Calendula Officinalis Flower Extract: membantu meredakan iritasi ringan yang disebabkan oleh polusi, membantu menenangkan kulit yang rusak akibat paparan sinar UV, melembabkan kulit & membantu mengatasi jerawat

Cara pemakaian:
Tuang RESET Gentle Micellar Cleansing Water ke kapas, usapkan perlahan sampai wajah menjadi bersih, ulangi step pemakaian jika merasa diperlukan
Lanjutkan step selanjutnya dengan sabun cuci muka Low pH Jelly Cleanser

Your skin will love this because it\'s:
Vegan Friendly
Fungal Acne Safe 
Non-ionic Surfactant
Sensitive Skin Friendly
Hypoallergenic Tested
Suitable for daily use
Suitable for Teenager (boleh dipakai dari umur 11 tahun ke atas)

Ingredients: 
Water, PEG-6 Caprylic/Capric Glycerides, Propanediol, Dipropylene Glycol, Glycerin, Pentylene Glycol, Calendula Officinalis Flower Extract, Artemisia Vulgaris Extract, Aloe Barbadensis Leaf Extract, Panthenol, Caprylyl Glycol, Ethylhexylglycerin, Allantoin, Magnesium Aspartate, Zinc Gluconate, Sodium Citrate, Citric Acid, Sodium Phytate, 1,2-Hexanediol, Phenoxyethanol, Copper Gluconate, Butylene Glycol, Octanediol, Tocopherol',
'price' => 45000,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:35',
'updated_at' => '2022-06-27 15:31:35',
),
262 => 
array (
'id' => 263,
'brand_id' => 30,
'name' => 'SUKIN Signature Foaming Facial Cleanser 50 ml - 125ml  - Pembersih Wajah Natural - Skincare',
'variation' => 'Facial Cleansr 125ml',
'link' => 'https://shopee.co.id/SUKIN-Signature-Foaming-Facial-Cleanser-50-ml-125ml-Pembersih-Wajah-Natural-Skincare-i.744873.9151023116?sp_atk=de239f2c-0d1a-4ac4-8362-a168a4a738b4&xptdk=de239f2c-0d1a-4ac4-8362-a168a4a738b4',
'description' => 'Facial cleanser
•Semua jenis kulit, terutama kulit normal - berminyak
•Membersihkan kulit dari debu dan minyak berlebih secara lembut tanpa membuat kulit kering/ kehilangan minyak alaminya, dan juga menenangkan dan mengencangkan kulit

Bahan utama:
Chamomile, witch hazel, green tea, evening primrose oil, rosehip oil, aloe vera

Cara penggunaan:
1.Usapkan pada wajah yang basah dan pijat perlahan dengan gerakan memutar, kemudian bilas hingga bersih
2.Lanjutkan dengan scrub atau masker atau toner
3.Gunakan setiap hari, pagi dan malam

Komposisi:
Water (Aqua), Aloe Barbadensis Leaf Juice, Sesamum Indicum (Sesame) Seed Oil, Cetearyl Alcohol, Glycerin, Cetyl Alcohol, Ceteareth-20, Rosa Canina Fruit Oil (Rose Hip), Theobroma Cacao (Cocoa) Seed Butter, Butyrospermum Parkii (Shea Butter), Simmondsia Chinensis (Jojoba) Seed Oil, Persea Gratissima (Avocado) Oil, Triticum Vulgare (Wheat) Germ Oil, Tocopherol (Vitamin E), Equisetum Arvense Extract (Horsetail), Arctium Lappa Root Extract (Burdock), Urtica Dioica (Nettle) Leaf Extract, Citrus Tangerina (Tangerine) Peel Oil, Citrus Nobilis (Mandarin Orange) Peel Oil, Lavandula Angustifolia (Lavender) Oil, Vanillin, Vanilla Planifolia Fruit Extract, Phenoxyethanol, Benzyl Alcohol, Limonene*, Linalool*
*Natural component of essential oils.',
'price' => 131200,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:35',
'updated_at' => '2022-06-27 15:31:35',
),
263 => 
array (
'id' => 264,
'brand_id' => 15,
'name' => '[BPOM] SOMEBYMI Super Matcha - Galactomyces - Yuja Niacin - AHA BHA PHA - Mask Pack - SOME BY MI',
'variation' => 'SuperMtcha Cleansing',
'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Super-Matcha-Galactomyces-Yuja-Niacin-AHA-BHA-PHA-Mask-Pack-SOME-BY-MI-i.744873.11406740765?sp_atk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526&xptdk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526',
'description' => 'Kelebihan
- Mengandung banyak bahan aktif yang efektif mengontrol sebum dan pori
- Teksturnya ringan dan mudah meresap

Kekurangan
- Mengadung pewangi dan BHA yang mungkin tidak cocok bagi kulit sensitif',
'price' => 104500,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:35',
'updated_at' => '2022-06-27 15:31:35',
),
264 => 
array (
'id' => 265,
'brand_id' => 5,
'name' => 'Pond\'s White Beauty Lightening Toner | Cleansing Milk | Ponds Lightening Toner | Cleansing Milk',
'variation' => 'Cleansing Milk 150ml',
'link' => 'https://shopee.co.id/Pond\'s-White-Beauty-Lightening-Toner-Cleansing-Milk-Ponds-Lightening-Toner-Cleansing-Milk-i.744873.6668234777?sp_atk=a69177db-fb5e-44e5-8224-c497124dd0b2&xptdk=a69177db-fb5e-44e5-8224-c497124dd0b2',
'description' => ' Pond’s White Beauty Lightening Toner merupakan toner berformula menyegarkan, diperkaya dengan Peral Nutrients, AHA, dan Vitamin B3, yang dapat memperkecil pori-pori dan mengangkat minyak berlebih serta mencerahkan noda hitam pada wajah. Kulit tampak putih merona, noda tersamarkan, dan tidak mengkilap. Mengandung Pro-Vitamin B3 yang dapat mencerahkan jutaan sel kulit wajah.

Manfaat Produk :
- Dapat atasi masalah kulit berminyak dan kusam
- Formula menyegarkan serta diperkaya pearl Nutrients, AHA, dan Vitamin B3
- Dapat memperkecil pori dan mengangkat minyak berlebih dari kulit sekaligus mencerahkan flek hitam

Cara Penggunaan :
- Tuangkan sedikit isi pada kapas bersih, lalu oleskan ke seluruh wajah, konsentrasikan pada daerah dahi, hidung, dan hidung bagian pinggir (T-Zone) dan dagu. Dapat digunakan pada pagi dan malam hari.

POND\'S White Beauty Cleansing Milk mengangkat kotoran dan make-up tanpa membuat kulit menjadi kering. Kini diperkaya dengan Pearl Nutrients, Vitamin B3, dan AHA yang membuat wajah Anda tetap lembab, halus, dan putih merona!',
'price' => 27400,
'category' => 'Cleanser',
'created_at' => '2022-06-27 15:31:35',
'updated_at' => '2022-06-27 15:31:35',
),
265 => 
array (
'id' => 266,
'brand_id' => 52,
'name' => 'Safi Hydra Glow Hydrating Water Lock Mist 75ml - Perawatan Wajah',
'variation' => 'Lock Mist 75ml',
'link' => 'https://shopee.co.id/Safi-Hydra-Glow-Hydrating-Water-Lock-Mist-75ml-Perawatan-Wajah-i.744873.13376114773?sp_atk=ee2fdf55-ced0-4cd6-9956-ba1c3d4e118f&xptdk=ee2fdf55-ced0-4cd6-9956-ba1c3d4e118f',
'description' => 'Merupakan Spray pelembab berbahan dasar air yang ringan, mudah meresap dan menyegarkan. Dengan pH seimbang & tidak berminyak sehingga cocok untuk semua kulit. Mengandung Hydra Active 3 Technology yang menggabungkan 3 bahan pelembab yang kuat yaitu: Ekstrak Fermentasi Beras, Vitamin B5, Hyaluronic Acid yang membantu menghidrasi kulit secara optimal, mengunci kelembapan kulit serta menjadikan kulit tampak cerah bercahaya. Diperkaya dengan pelembab alami (Betaine) yang membantu memperkuat skin barrier. Dapat digunakan sebelum dan setelah makeup agar makeup tahan lama.

Cara Pakai:
Kocok sebelum digunakan. Semprotkan pada wajah / area tubuh lainnya yang dirasa kering kapan saja saat dibutuhkan.
Spray On the Go, Hydrate your skin everywhere everytime.',
'price' => 81900,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
266 => 
array (
'id' => 267,
'brand_id' => 24,
'name' => 'SYB Face Mist Toner Aloe Vera Toner',
'variation' => 'Mist Toner Aloe Vera',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Toner-Aloe-Vera-Toner-i.744873.15901396399?sp_atk=b7b7893a-a142-4d2a-8f51-7aa2af17e51f&xptdk=b7b7893a-a142-4d2a-8f51-7aa2af17e51f',
'description' => 'Aloe Vera Toner dengan kandungan ekstrak aloe vera berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah. 

Cara pakai : 
-Sebagai penyegar : semprot secukupnya ke wajah secara berkala sepanjang hari.
-Sebagai pembersih : Semprot pada kapas dan usapkan pada wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
267 => 
array (
'id' => 268,
'brand_id' => 22,
'name' => 'SOMETHINC Holyshield! Sunscreen Shake Mist SPF 50+ PA++++ 50ml | Holyshield! Sunscreen Shake Mist SPF 46',
'variation' => 'Holyshield Mist',
'link' => 'https://shopee.co.id/SOMETHINC-Holyshield!-Sunscreen-Shake-Mist-SPF-50-PA-50ml-Holyshield!-Sunscreen-Shake-Mist-SPF-46-i.744873.12651098074?sp_atk=0448b1f5-a28b-445e-8421-52ed46945b74&xptdk=0448b1f5-a28b-445e-8421-52ed46945b74',
'description' => 'Sunscreen Shake Mist dengan SPF 50+ PA++++ memanfaatkan teknologi FILM FORMER yang membentuk layer lock agar kulit terlindungi secara maksimal dari sinar UVA & UVB serta bersifat multifungsi sebagai makeup setting spray. Mudah diaplikasikan kembali tanpa menggeser makeup, NO WHITECAST, & memberikan tampilan Healthy Glow Finish!

Jenis kulit: Semua jenis kulit
Kelebihan:
SPF 50+ PA++++ (semakin banyak tanda plus pada PA, semakin tinggi tingkat proteksi kulit dari UVA)
FILM FORMER untuk perlindungan ekstra dari bahaya sinar matahari
No whitecast, tidak membuat wajah jadi tampak abu-abu
Non sticky & light texture!
Tidak menggeser makeup & anti-ribet saat diaplikasikan kembali 
Healthy glow finish
Vegan-friendly dan Fungal Acne Safe!
Suitable for teenager (boleh dipakai dari umur 11 tahun keatas)

CARA PEMAKAIAN
Gunakan sebagai tahap terakhir perawatan kulit, kocok sebelum penggunaan.
Hati-hati terkena area mata dan bibir.
Semprotkan sunscreen secara merata pada wajah & leher dari jarak 25-30 cm.
Setelah disemprotkan merata pada wajah, tunggu kering selama 10-15 detik. 
Dapat digunakan kembali setiap 2 jam untuk melindungi kulit dari sinar UV secara maksimal.',
'price' => 109000,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
268 => 
array (
'id' => 269,
'brand_id' => 24,
'name' => 'SYB Face Mist Chamomile Toner 100ml',
'variation' => 'Mist Toner Chamomile',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Chamomile-Toner-100ml-i.744873.14001391863?sp_atk=4ee2a6ce-0460-4410-a6b6-44c0c5a6dc0b&xptdk=4ee2a6ce-0460-4410-a6b6-44c0c5a6dc0b',
'description' => 'Chamomile Toner dengan kandungan ekstrak chamomile berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah. 

Cara pakai : 
-Sebagai penyegar : semprot secukupnya ke wajah secara berkala sepanjang hari.
-Sebagai pembersih : Semprot pada kapas dan usapkan pada wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
269 => 
array (
'id' => 270,
'brand_id' => 24,
'name' => 'SYB Face Mist  Saffron 100ml',
'variation' => 'Face Mist Saffron',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Aloe-Vera-Chamomile-Rose-Centtela-Asiatica-For-Man-Saffron-100ml-i.744873.11021727457?sp_atk=1a8b18b7-983e-474f-860f-9f9ea1c01b82&xptdk=1a8b18b7-983e-474f-860f-9f9ea1c01b82',
'description' => 'Face Mist Saffron dengan kandungan Crocus Sativus (Saffron) Extract sebagai skin conditioning dan penyegar pada kulit wajah. Bahan aktif Niacinamide, Hydroxyethyl urea, dan allantoin menjadikan kulit wajah lebih lembab dan membantu mencerahkan kulit wajah.',
'price' => 19200,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
270 => 
array (
'id' => 271,
'brand_id' => 24,
'name' => 'SYB Face Mist Aloe Vera 100ml',
'variation' => 'Mist Toner Aloe Vera',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Aloe-Vera-Chamomile-Rose-Centtela-Asiatica-For-Man-Saffron-100ml-i.744873.11021727457?sp_atk=1a8b18b7-983e-474f-860f-9f9ea1c01b82&xptdk=1a8b18b7-983e-474f-860f-9f9ea1c01b82',
'description' => 'Face Mist Aloe Vera Toner dengan kandungan ekstrak aloe vera berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
271 => 
array (
'id' => 272,
'brand_id' => 24,
'name' => 'SYB Face Mist Chamomile Saffron 100ml',
'variation' => 'Mist Toner Chamomile',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Aloe-Vera-Chamomile-Rose-Centtela-Asiatica-For-Man-Saffron-100ml-i.744873.11021727457?sp_atk=1a8b18b7-983e-474f-860f-9f9ea1c01b82&xptdk=1a8b18b7-983e-474f-860f-9f9ea1c01b82',
'description' => 'Face Mist Chamomile Toner dengan kandungan ekstrak chamomile berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
272 => 
array (
'id' => 273,
'brand_id' => 24,
'name' => 'SYB Face Mist Rose 100ml',
'variation' => 'Mist Toner Rose',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Aloe-Vera-Chamomile-Rose-Centtela-Asiatica-For-Man-Saffron-100ml-i.744873.11021727457?sp_atk=1a8b18b7-983e-474f-860f-9f9ea1c01b82&xptdk=1a8b18b7-983e-474f-860f-9f9ea1c01b82',
'description' => 'Face Mist Rose toner dengan kandungan ekstrak mawar berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
273 => 
array (
'id' => 274,
'brand_id' => 24,
'name' => 'SYB Face Mist Centtela Asiatica 100ml',
'variation' => 'Face Water Centella',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Aloe-Vera-Chamomile-Rose-Centtela-Asiatica-For-Man-Saffron-100ml-i.744873.11021727457?sp_atk=1a8b18b7-983e-474f-860f-9f9ea1c01b82&xptdk=1a8b18b7-983e-474f-860f-9f9ea1c01b82',
'description' => 'Face water dengan kandungan Centella Asiatica ekstrak,dapat berfungsi sebagai toner untuk menyegarkan kulit wajah, dapat disemprotkan ke wajah setelah menggunakan masker bubuk atau mud mask untuk mengembalikan kelembapan kulit. Selain itu juga dapat digunakan untuk melarutkan masker bubuk.',
'price' => 16200,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
274 => 
array (
'id' => 275,
'brand_id' => 10,
'name' => 'PIXY Glowssentials Brightening Extract Mulberry Face Mist',
'variation' => 'Pixy Brightning Mist',
'link' => 'https://shopee.co.id/PIXY-Glowssentials-Brightening-Extract-Mulberry-Face-Mist-Whip-Foam-Peel-Off-Tone-Up-Cream-i.744873.8152481813?sp_atk=27df73d1-b99b-4408-b11f-6bcd15379f0a&xptdk=27df73d1-b99b-4408-b11f-6bcd15379f0a',
'description' => 'Face Mist untuk melembapkan dan menyegarkan wajah seketika yang sesuai untuk semua jenis kulit. Dengan kandungan utama: • Ekstrak Mulberry, Vitamin B3, dan Provitamin B5: Menjaga kulit tetap cerah dan lembap. • Vitamin C: Membantu mencerahkan kulit.',
'price' => 24900,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
275 => 
array (
'id' => 276,
'brand_id' => 10,
'name' => 'PIXY Glowssentials Kiwi Extracts - Face Mist',
'variation' => 'Pixy Vitamin Mist',
'link' => 'https://shopee.co.id/PIXY-Glowssentials-Kiwi-Extracts-Face-Mist-Clay-Mask-Face-Wash-Gel-Moisturizer-i.744873.9552460668?sp_atk=db70119c-0640-4ae3-8f84-d573ef26b93a&xptdk=db70119c-0640-4ae3-8f84-d573ef26b93a',
'description' => 'Face Mist untuk melindungi wajah dari partikel-partikel polusi, seperti debu, asap, dan kotoran. Formulanya menjaga kelembapan kulit dan menyegarkan wajah seketika. Sesuai untuk semua jenis kulit. Dengan kandungan utama: • Ekstrak Kiwi, Vitamin E, dan Provitamin B5: Mengandung antioksidan, membantu menutrisi dan menjaga kelembapan kulit agar tetap cerah dan glowing. • Pollustop®: Diketahui mampu melindungi kulit dari partikel-partikel polusi* seperti debu, asap, dan kotoran. • Antibacterial Agent: Melawan bakteri dan menjaga kulit tetap bersih.',
'price' => 26950,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
276 => 
array (
'id' => 277,
'brand_id' => 11,
'name' => 'Wardah C-Defense Face Mist 55mL | Face Mist',
'variation' => 'Defense Face Mist',
'link' => 'https://shopee.co.id/Wardah-C-Defense-Face-Mist-55mL-Face-Mist-i.744873.1913057571?sp_atk=ba933a34-89f5-4757-ba47-7441507b309e&xptdk=ba933a34-89f5-4757-ba47-7441507b309e',
'description' => 'Wardah C Defense Face Mist kini hadir dengan kandungan Hi Grade Vit C dan kompleks NMF (Natural Moisturizing Factor) yang membuat kulit wajahmu terasa kenyal, lembap dan segar. Bisa digunakan setelah pengaplikasian makeup.

Cara Pakai :
Semprotkan face mist dengan jarak sekitar 30 cm dari wajah kamudian diamkan sesaat.
Setelah itu tepuk-tepuk wajah agar face mist dapat meresap dengan baik.
Selain lebih fresh, face mist dari Wardah ini juga bisa mengunci makeup agar lebih awet dan menjaga kulit kamu senantiasa lembap serta halus.',
'price' => 29500,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
277 => 
array (
'id' => 278,
'brand_id' => 10,
'name' => 'Pixy Aqua Beauty Protecting Mist 60ML',
'variation' => 'Pixy Aqua Mist',
'link' => 'https://shopee.co.id/Pixy-Aqua-Beauty-Protecting-Mist-60ML-i.744873.13444629137?sp_atk=89587d32-edc6-4afe-bfaa-89d29cd09768&xptdk=89587d32-edc6-4afe-bfaa-89d29cd09768',
'description' => 'Spray wajah yang ringan dan tidak lengket di kulit. Dilengkapi dengan antioksidan, melindungi kulit yang terpapar oleh panas dan sinar matahari. Kandungan Aloe Vera melembabkan dan menyejukkan kulit. Diperkaya dengan Makeup Lock yang menjaga makeup agar tidak luntur hingga 8 jam. 

1. Vitamin E dan Ekstrak green tea dari jepang yg dikenal luas sebagai antioksidan
2. Aloe Vera yg dpt melembapkan dan menyejukkan kulit serta memberikan rasa nyaman di kulit
3. Make up Lock yg menjaga tampilan make up agar tidak luntur hingga 8 jam 
4. Water Based Formula ringan dan tidak lengket di kulit',
'price' => 24900,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:40',
'updated_at' => '2022-06-27 15:41:40',
),
278 => 
array (
'id' => 279,
'brand_id' => 11,
'name' => 'Wardah Lightening Face Mist 60ml',
'variation' => 'Light Face Mist',
'link' => 'https://shopee.co.id/Wardah-Lightening-Face-Mist-60ml-i.744873.9012370495?sp_atk=c587ac11-0c1b-493c-8b32-957da550f21d&xptdk=c587ac11-0c1b-493c-8b32-957da550f21d',
'description' => 'Wardah Lightening Face Mist, 3-in-1 mist untuk primer make up, setting spray, dan refresh kulit dengan Advanced Niacinamide yang mencerahkan & melindungi dari efek negatif blue light.Diformulasikan khusus untuk bantu menjaga tampilan make-up lebih tahan lama. Cocok untuk semua jenis kulit.

Diformulasikan dengan Advanced Niacinamide yang bantumembuat wajahmu tampak cerah bercahaya melalui prosesnatural, sekaligus melindungi dari dampak buruk blue-light.

Face mist dengan 3 fungsi dalam 1 produk. Dapat digunakan sebagai primer sebelum make-up, sebagai setting spray untuk menjaga tampilan make-up lebih tahan lama, dan refreshing mist untuk membuat wajah segar kembali tanpa merusak tampilan make-up.

Memberikan efek refreshing yang menyegarkan setelah pemakaian!

Keunggulan :
•Dermatologically Tested 
•3 in 1 mist (prep, set, and refresh make-up)
•Cocok untuk semua jenis kulit
•Melembapkan dan menyegarkan 
•Tidak lengket dan nyaman digunakan sehari-hari
•0% alcohol
•Mencerahkan kulit setelah pemakaian teratur
•Mengurangi sebum/minyak di kulit wajah

Wardah Lightening Face Mist digunakan dengan cara disemprotkan ke arah wajah dengan mata tertutup.Dapat digunakan sebelum dan sesudah pemakaian make-up',
'price' => 21500,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
279 => 
array (
'id' => 280,
'brand_id' => 19,
'name' => 'AZARINE Hydrasoothe Sunscreen Mist SPF 50 PA++++',
'variation' => 'Hydrasoothe Sun Mist',
'link' => 'https://shopee.co.id/Azarine-Aqua-Essence-Sun-Shield-Serum-SPF-50-PA-100ml-Azarine-Sun-UV-Serum-Sunscreen-GEL-SPF45-AZARINE-Hydramax-C-Suncreen-Serum-SPF-50-AZARINE-Tone-Up-Mineral-Suncreen-Serum-SPF-50-AZARINE-Hydrasoothe-Sunscreen-Mist-SPF-50-PA--i.744873.9140858092?sp_atk=52f2255a-5001-4732-b541-1fbb925304f1&xptdk=52f2255a-5001-4732-b541-1fbb925304f1',
'description' => 'Tabir surya spray cair, praktis untuk melembabkan dan melindungi kulit dari pengaruh buruk sinar matahari. Di formulasikan "water based" dengan gabungan bahan aktif Hyaluronic Acid, Ceramide dan CICA pada kulit serta melembabkan agar kulit kenyal dan halus. Sunscreen mist mudah diserap dan tidak meninggalkan whitecast pada kulit, sehingga bisa untuk sebelum dan sesudah make up touch up
Cara Pakai : 
Kocok dahulu sebelum digunakaan, lalu semprotkan Sunscreen Mist pada wajah dengan mata tertutup. Gunakan pada step terakhir skincare. Dapat di reapply setiap 2 jam sekali',
'price' => 52000,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
280 => 
array (
'id' => 281,
'brand_id' => 52,
'name' => 'Safi Hydra Glow Hydrating Water Lock Mist',
'variation' => 'Lock Mist 75ml',
'link' => 'https://shopee.co.id/Safi-Hydra-Glow-Hydrating-Water-SERIES-Moisturizer-Lock-Mist-Cleanser-Bank-Serum-Toning-Essence-i.744873.14070376925?sp_atk=4e21007e-bd59-45f4-add3-67c0eb743e8d&xptdk=4e21007e-bd59-45f4-add3-67c0eb743e8d',
'description' => 'Safi Hydra Glow Hydrating Water Lock Mist 75ml - Perawatan Wajah
Merupakan Spray pelembab berbahan dasar air yang ringan, mudah meresap dan menyegarkan. Dengan pH seimbang & tidak berminyak sehingga cocok untuk semua kulit. ',
'price' => 81900,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
281 => 
array (
'id' => 282,
'brand_id' => 5,
'name' => 'Pond’s Antibacterial Face Mist Spray 50 ml with Refreshing Organic Rose Extract',
'variation' => 'Face Mist 50ml',
'link' => 'https://shopee.co.id/Pond%E2%80%99s-Antibacterial-Face-Mist-Spray-50-ml-with-Refreshing-Organic-Rose-Extract-i.744873.13091302095?sp_atk=6b702674-675c-478b-9aeb-e2e3d7780a42&xptdk=6b702674-675c-478b-9aeb-e2e3d7780a42',
'description' => 'NEW Pond’s Vitamin Micellar Water is the first Micellar Water supercharged with the power of Vitamins! Removes up to 99%* makeup with 5x Brightening Actions** to remove makeup while boosting your skin’s glow!
A refreshing micellar water, 5 essential vitamins (vitamin A, B3, B5, C, E) &100% Organic Natural French Roses to deep cleanse away makeup, dirt, impurities, sunscreen
Results: Leaves skin instantly clean & radiant for a PINKSIH BRIGHT GLOW!
How to use: Apply onto cotton pad. Gently swipe makeup off. No rinsing required!
Suitable for all skin types. Dermatologist and ophthalmologist tested. 100% alcohol free, Mild & gentle formulation. Non-oily & non-sticky on skin.',
'price' => 24100,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
282 => 
array (
'id' => 283,
'brand_id' => 24,
'name' => 'SYB Face Mist Rose Toner',
'variation' => 'Mist Toner Rose',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Rose-Toner-i.744873.12752271509?sp_atk=96ec475a-8d07-495c-9ed5-b98d2a2692c3&xptdk=96ec475a-8d07-495c-9ed5-b98d2a2692c3',
'description' => 'Rose toner dengan kandungan ekstrak mawar berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah. 

Cara pakai : 
Sebagai penyegar : Semprot secukupnya ke wajah secara berkala sepanjang hari.
Sebagai pembersih : 
Semprot pada kapas dan usapkan pada wajah.',
'price' => 13800,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
283 => 
array (
'id' => 284,
'brand_id' => 24,
'name' => 'SYB Face Mist Saffron 100ml - Face Spray - Penyegar Wajah',
'variation' => 'Face Mist Saffron',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Saffron-100ml-Face-Spray-Penyegar-Wajah-i.744873.13052308846?sp_atk=4da13192-abaf-4853-b62e-f02de4037484&xptdk=4da13192-abaf-4853-b62e-f02de4037484',
'description' => 'SYB Face Mist Saffron dengan kandungan Crocus Sativus (Saffron) Extract sebagai skin conditioning dan penyegar pada kulit wajah. Bahan aktif Niacinamide, Hydroxyethyl urea, dan allantoin menjadikan kulit wajah lebih lembab dan membantu mencerahkan kulit wajah.

Cara Pakai :
Spray pada secara merata dengan gerakan memutar atau membentuk huruf “X” pada area wajah. Gunakan saat diperlukan atau saat kulit terasa kering.
',
'price' => 19200,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
284 => 
array (
'id' => 285,
'brand_id' => 52,
'name' => 'Safi Dermasafe Hydrate & Refresh Booster Mist 70 ml',
'variation' => 'Dermasafe Boost Mist',
'link' => 'https://shopee.co.id/Safi-Dermasafe-Hydrate-Refresh-Booster-Mist-70-ml-i.744873.5316601991?sp_atk=8c2b0e1a-5cc6-4e85-898d-85c962e9af09&xptdk=8c2b0e1a-5cc6-4e85-898d-85c962e9af09',
'description' => 'Dengan bahan alami dari ekstrak Licorice dan Chamomile memberikan manfaat 2-in-1. Membantu melembapkan kulit wajah, menenangkan kulit, melindungi kulit dari sinar matahari dan membuat make up lebih tahan lama. Sekaligus menjaga kulit tetap lembut dan kenyal sepanjang hari.

Manfaat :
Membantu melembapkan kulit wajah.
Memberikan efek yang menenangkan pada kulit.
Melindungi kulit dari sinar matahari.
Membuat make up lebih tahan lama.
Menjaga kulit tetap lembut dan kenyal sepanjang hari.

Pemakaian :
Semprotkan secukupnya pada wajah sebelum beraktifitas dan setelah menggunakan make up.',
'price' => 81500,
'category' => 'Face Mist',
'created_at' => '2022-06-27 15:41:41',
'updated_at' => '2022-06-27 15:41:41',
),
285 => 
array (
'id' => 286,
'brand_id' => 1,
'name' => 'NACIFIC Fresh Herb Origin Eye Cream 30ml | Skin Care Eye Cream',
'variation' => 'Fresh Herb Eye Cream',
'link' => 'https://shopee.co.id/-BPOM-NACIFIC-Fresh-Herb-Origin-Eye-Cream-30ml-Skin-Care-Eye-Cream-i.744873.1600691004?sp_atk=3640c0d8-d1db-4ba4-bc4f-23600f872454&xptdk=3640c0d8-d1db-4ba4-bc4f-23600f872454',
'description' => 'Merupakan produk fungsional ganda yang rileks dan anti keriput yang meninggalkan perasaan emolien yang bagus dan membuat kulit di sekitar mata cerah dan tangguh.
Cream mata ini mencegah terjadinya keriput dan menghitamnya daerah mata.

- Niacinamide : mencerahkan dan memperbaiki warna kulit yang membantu menghilangkan kegelapan di bawah mata, memastikan perlindungan antioksidan yang kuat.
- Asam hialuronat :mencegah kerutan & keriput, menjaga mereka terjadi di masa depan dan mengurangi garis-garis halus yang ada.
- Peptida (palmitoyloligopeptide, palmitoyl tetrapeptide-7) : membantu meringankan dan mencegah kerusakan pada kulit di sekitar mata, dan menjaga kerutan dari penuaan
- Hyaluronic acid: memberikan kelembaban

Bisa digunakan juga di daerah leher, garis disekirar mulut (laugh line), dan daerah lain yang mudah keriput',
'price' => 119000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
286 => 
array (
'id' => 287,
'brand_id' => 40,
'name' => 'Everwhite Eye Cream',
'variation' => 'PEPTIDE EYE CREAM',
'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
'description' => 'Everwhite Peptide Anti-Aging Serum
Kandungan utama: Matrixyl®️3000 Peptide, Hyaluronate, Collagen, Niacinamide
Sangat direkomendasikan untuk kamu yang berusia 20 tahun ke atas!
Usia 20 tahun ke atas sangat rentan akan penuaan dini, seperti kerutan, garis halus, kulit menjadi tidak kenyal, dan kusam. Oleh karena itu, kamu membutuhkan EVERWHITE PEPTIDE ANTI-AGING SERUM, yang diperkaya dengan kandungan Matrixyl®️3000 Peptide yang efektif untuk menyamarkan kerutan & garis halus, meningkatkan kekenyalan kulit, serta membantu menghambat tanda penuaan kulitmu! Tak hanya itu serum ini juga diperkaya dengan hyaluronate sehingga dapat melembabkan kulitmu!
MANFAAT:
- Menyamarkan kerutan dan garis halus
- Mencegah tanda penuaan pada kulit
- Meningkatkan kekenyalan dan kehalusan kulit
- Mencerahkan & melembabkan kulit
- Membantu meningkatkan produksi kolagen
- Meningkatkan pembaharuan sel kulit',
'price' => 97000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
287 => 
array (
'id' => 288,
'brand_id' => 9,
'name' => 'Benton Fermentation Eye Cream 30gr',
'variation' => 'Eye Cream 30gr',
'link' => 'https://shopee.co.id/-BPOM-Benton-Fermentation-Eye-Cream-30gr-i.744873.2337986335?sp_atk=c9f61763-6930-4b33-a365-ae4b82c12e21&xptdk=c9f61763-6930-4b33-a365-ae4b82c12e21',
'description' => 'Premium High Concentration Eye Cream.
High concentration dari fermented ingredients + ceramide + EGF + Hyaluronic acid. Pilihan bagus untuk wrinkle improvement di daerah amta.
Sangat menguntungkan untuk:
1. Kulit sensitive dan kering
2. Kulit dengan oil dan air yang tidak seimbang
3. Wrinkled dan kulit yang dull
4. Untuk tight dan internally kulit kering yang membutuhkan kelembapan

Cara Penggunaan:
Gunakan di daerah bawah mata pada saat melakukan skincare',
'price' => 159000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
288 => 
array (
'id' => 289,
'brand_id' => 43,
'name' => 'TRUEVE Multi Peptide & Glycogen Ultimate Eye gel',
'variation' => 'Trueve Eye Gel',
'link' => 'https://shopee.co.id/TRUEVE-Multi-Peptide-Glycogen-Ultimate-Eye-gel-i.744873.4384193226?sp_atk=665c44c6-2247-4ea5-8143-e5725956c2a1&xptdk=665c44c6-2247-4ea5-8143-e5725956c2a1',
'description' => 'Trueve Multi Peptide & Glycogen Ultimate Eye Gel diformulasikan dengan komponen utama Multi Peptide yang terdiri dari Dipeptide, Acetyl Tetrapeptide dan Copper Tripeptide-1 serta Glycogen yang mampu merawat kekencangan & kehalusan kulit di area sekitar mata, membantu menyamarkan kerutan & garis halus di sekitar mata, menyamarkan kantung mata dan melembabkan kulit di area sekitar mata.

Komposisi produk:
️ Dipeptide-2 & Acetyl Tetrapeptide
Menyamarkan kantung mata
Menyamarkan warna gelap (dark circle) pada mata
Menyamarkan crow’s feet
Menyamarkan kerutan & garis halus di area sekitar mata
Meningkatkan elastisitas & kehalusan kulit
Menyamarkan kerutan & garis halus
Melembabkan kulit di sekitar mata
Hambat proses glycation → anti aging
️ COPPER TRIPEPTIDE
Memiliki peranan penting dalam pembentukan enzim, seperti untuk antioksidan, energi, ikatan kolagen, pembentukan jaringan.
️ Glycogen
Membantu meningkatkan produksi kolagen sehingga kulit lebih elastis, mampu mempertahankan kelembaban serta membantu mencerahkan & meratakan warna kulit.

Cara pakai:
1. Oleskan Trueve Multi Peptide & Glycogen Ultimate Eye Gel pada area sekitar mata dengan aplikator.
2. Gunakan Trueve Multi Peptide & Glycogen Ultimate Eye Gel setelah menggunakan serum dan sebelum menggunakan moisturizer
3. Gunakan setiap hari di pagi & malam hari untuk hasil yang maksimal
4. Hasil dapat dilihat dalam waktu 2 minggu.',
'price' => 162000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
289 => 
array (
'id' => 290,
'brand_id' => 39,
'name' => 'SKINTIFIC 360 Crystal Massager Lifting Eye Cream - 20gr【BPOM】',
'variation' => 'Lifting Eye Cream',
'link' => 'https://shopee.co.id/SKINTIFIC-360-Crystal-Massager-Lifting-Eye-Cream-20gr%E3%80%90BPOM%E3%80%91-i.744873.17417118753?sp_atk=6ee04b90-701b-48b8-afa3-0eef298d55ed&xptdk=6ee04b90-701b-48b8-afa3-0eef298d55ed',
'description' => 'Eye cream supercharged yang mengandung 3D Peptide Complex dan Niacinamide untuk mengurangi garis-garis halus, kerutan, sembab, serta mencerahkan area bawah mata yang gelap. Dilengkapi dengan teknologi 360 ° Crystal Rolling Massager, sebuah teknologi Lift-Tech ™ dari Jerman dengan 184 permukaan kristal dan dapat berputar searah 360°, sehingga membantu daya serap kandungan aktif pada kulit dan mengurangi garis-garis halus yang terlihat & kantung mata di waktu yang bersamaan.

Lift-Tech™ 360 ° Crystal Roll Massager yang terdapat pada eye cream ini membantu mengurangi garis-garis halus dalam 3 menit, mengurangi area bawah mata yang gelap, dan mengurangi tampilan mata sembab.

Manfaat:
- Mengurangi tampilan garis-garis halus pada area mata
- Mengurangi kerutan
- Mengurangi tampilan mata sembab
- Mencerahkan area bawah mata yang gelap

Hero Ingredients:
3D Peptides: Dilengkapi dengan,
Maytixytl™ 3000 Peptide: Mengurangi garis halus, menstimulasi produksi kolagen dan memperbaiki tanda-tanda penuaan
SKN™-AKE Peptide: Mengurangi tampilan mata sembab, mengurangi kontraksi-mikro pada otot kulit sehingga mencegah pembentukan kerutan dan garis-garis ekspresi pada mata.
Acetyl™ Tetrapeptide-5: Mengurangi tampilan bawah mata yang gelap, membantu mengurangi melanin dengan menghambat aktivitas elastase.
Niacinamide: Mencerahkan area mata dan mengurangi tampilan bawah mata yang gelap.
Caffeine: Membantu untuk meningkatkan sirkulasi dan menyempitkan pembuluh darah pada area mata sehingga meminimalisir penampilan area bawah mata yang gelap dan mengurangi tampilan mata sembab.

Cara Penggunaan:
1. Tekan dan oleskan krim mata dalam jumlah yang tepat di sekitar area mata.
2. Sentuh bagian besi pada Activation Metal Area dan tekankan pada kulit untuk menghidupkan vibrasi/getaran dari massager.
3. Pijat area mata sebelum terserap sempurna.
4. Bisa digunakan untuk memijat seluruh wajah.',
'price' => 142000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
290 => 
array (
'id' => 291,
'brand_id' => 11,
'name' => 'Wardah Crystal Secret Eyes Dark Circle Corrector  | White Secret Brightening Eye Cream - 10ml',
'variation' => 'Eyes Dark Circl 10ml',
'link' => 'https://shopee.co.id/Wardah-Crystal-Secret-Eyes-Dark-Circle-Corrector-White-Secret-Brightening-Eye-Cream-10ml-i.744873.1556661026?sp_atk=1745e631-376a-4cdc-b8f0-d24dca150f37&xptdk=1745e631-376a-4cdc-b8f0-d24dca150f37',
'description' => 'Paparan sinar matahari dan layar gadget yang terlalu lama serta pola tidur tidak teratur dapat menyebabkan kulit di sekitar mata terlihat lelah dan gelap. Wardah Crystal Secret Eyes Dark Circle Corrector, krim mata dengan kandungan Alpha Arbutin dan Niacinamide untuk mencerahkan lingkaran hitam dan kantung mata, serta Adenosine yang menghaluskan tekstur kulit.

Diperkaya Edelweiss Extract, formulanya bantu menjaga dan melindungi skin barrier dari faktor penyebab kulit kusam (cuaca, polusi debu dan oxidative stress) untuk kulit cerah sebening kristal.

FOR ALL SKIN TYPES.
DERMATOLOGICALLY TESTED. 

Cara pakai: Oleskan pada kulit sekitar mata dengan lembut menggunakan jari manis. Tepuk perlahan untuk meningkatkan penyerapan produk.',
'price' => 63900,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
291 => 
array (
'id' => 292,
'brand_id' => 33,
'name' => 'HIMALAYA Under Eye Cream 15mL',
'variation' => 'Under Eye Cream',
'link' => 'https://shopee.co.id/HIMALAYA-Lip-Balm-10g-Under-Eye-Cream-15mL-Ultra-Moist-Cocoa-Butter-BPOM-i.744873.7677333717?sp_atk=4cf8b0c8-3a5c-429d-8bc8-f5eec33238a5&xptdk=4cf8b0c8-3a5c-429d-8bc8-f5eec33238a5',
'description' => 'Himalaya Under Eye Cream
Mengandung campuran herbal yang terbukti dan aman yang dibuat khusus untuk merawat area halus di sekitar mata. Terobosan herbal aktif dari Cipadessa Baccifera dan Winter Begonia yang membantu mengurangi penampilan lingkaran hitam, kerutan dan garis-garis halus. Ini cocok untuk semua jenis kulit dan tidak akan menyumbat pori-pori Anda. 

Kandungan:
Cipadessa Baccifera : membantu mengurangi penampilan garis-garis halus dan menerangi lingkaran hitam
Winter Begonia : membantu menjaga kulit di bawah mata tampak sehat
Wheat Germ Oil : sumber Vitamin E alami, yang sifat antioksidannya membantu menyehatkan kulit
Noncomedogenic dan hypoallergenic

',
'price' => 66200,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:52',
'updated_at' => '2022-06-27 15:41:52',
),
292 => 
array (
'id' => 293,
'brand_id' => 22,
'name' => 'SOMETHINC Game Changer Eye Gel',
'variation' => 'Game Changer Eye Gel',
'link' => 'https://shopee.co.id/SOMETHINC-Serum-Niacinamide-Sabi-AHA-BHA-Retinol-Hyaluronic-Bakuciol-DNA-Salmon-Holygr-i.744873.2070675980?sp_atk=511c65a4-a8d5-4615-b59a-6bf41a9ad237&xptdk=511c65a4-a8d5-4615-b59a-6bf41a9ad237',
'description' => 'Mengatasi kelelahan mata seperti Lingkaran Hitam, Kantung Mata, Keriput, & Penuaan pada mata akibat paparan sinar biru setiap hari.
Selain itu juga menghaluskan & memberikan kelembapan pada area kulit mata, sehingga mata terlihat lebih segar. meningkatkan elastisitas kulit, mencerahkan lingkaran hitam (dalam 3-4 minggu), menghidrasi hingga 18 jam, & mencegah kerusakan akibat radikal bebas.',
'price' => 145000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
293 => 
array (
'id' => 294,
'brand_id' => 43,
'name' => 'Trueve Multi Peptide & Glycogen Ultimate Eye Gel',
'variation' => 'Trueve Eye Gel',
'link' => 'https://shopee.co.id/Trueve-Acne-Brightening-Anti-Aging-Serum-Niacinamide-Ceramide-BHA-CICA-Galactomyces-Peptide-Vit-C-Advanced-Brightening-Moisturizing-Gel-Barrier-Complex-Moisturizing-Gel-i.744873.8309407785?sp_atk=35d845dd-8694-4e93-958c-430161ded342&xptdk=35d845dd-8694-4e93-958c-430161ded342',
'description' => 'Trueve Multi Peptide & Glycogen Ultimate Eye Gel diformulasikan dengan komponen utama Multi Peptide yang terdiri dari Dipeptide, Acetyl Tetrapeptide dan Copper Tripeptide-1 serta Glycogen yang mampu merawat kekencangan & kehalusan kulit di area sekitar mata, membantu menyamarkan kerutan & garis halus di sekitar mata, menyamarkan kantung mata dan melembabkan kulit di area sekitar mata.',
'price' => 160000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
294 => 
array (
'id' => 295,
'brand_id' => 45,
'name' => 'Pyunkang Yul Eye Cream',
'variation' => 'Eye Cream 1 Sachet',
'link' => 'https://shopee.co.id/-BPOM-Pyunkang-Yul-Eye-Cream-1-Sachet-i.744873.2147498334?sp_atk=c66f6baf-eeff-4716-856a-35aa6a605e3f&xptdk=c66f6baf-eeff-4716-856a-35aa6a605e3f',
'description' => 'Suggested Use
Apply every evening, gently spread on wrinkles or darkening areas.',
'price' => 3550,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
295 => 
array (
'id' => 296,
'brand_id' => 39,
'name' => 'SKINTIFIC Crystal Massager Lifting Eye Cream',
'variation' => 'Lifting Eye Cream',
'link' => 'https://shopee.co.id/SKINTIFIC-5X-Ceramide-Barrier-Gel-Cream-Ceramide-Low-pH-Cleanser-Salicylic-Acid-Acne-Spot-Treatment-Gel-Crystal-Massager-Lifting-Eye-Cream-i.744873.15659615943?sp_atk=5264f7f8-d0e0-4fb4-875b-2704093756b1&xptdk=5264f7f8-d0e0-4fb4-875b-2704093756b1',
'description' => NULL,
'price' => 142000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
296 => 
array (
'id' => 297,
'brand_id' => 19,
'name' => 'Azarine Eye Serum',
'variation' => 'C White Eye Serum',
'link' => 'https://shopee.co.id/Azarine-C-White-Eyeluminate-Firming-Serum-Azarine-Eye-Serum-Serum-Mata-15ml-i.744873.8840739208?sp_atk=4e914fcd-9cfb-4dbc-ac51-2f60d851c803&xptdk=4e914fcd-9cfb-4dbc-ac51-2f60d851c803',
'description' => 'Serum mata ringan yang berfungsi untuk melembabkan, mengencangkan dan mencerahkan area mata. Diformulasikan dengan bahan aktif alami :
Australian Kakadu Plum & lemon
Super fruit dengan kandungan Vit C tertinggi untuk antioksidan, memperkuat sel perlindungan sel perlindungan kulit & mencerahkan kulit 

Collagen
Menjaga Elastisitas Kulit & Anti Aging

Pomegranate
Antioxidant, moisturizer & memperkuat lapisan kulit. 

Centella Asiatica
Mengencangkan kulit & anti inflamasi. menutrisi lapisan & jaringan kulit. Anti aging

Soybean Oil
Menutrisi dengan kandungan Omega 3, 6, 9 & meningkatkan elastisitas kulit. 

Cara pakai : oleskan eyeluminate firming serum pada kulit sekitar mata sebanyak dua kali sehari. gunakan dalam keadaan wajah bersih, untuk hasil maksimal gunakan rangkaian Azarine C White series lainnya. ',
'price' => 25900,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
297 => 
array (
'id' => 298,
'brand_id' => 12,
'name' => 'NPURE Eye Power Serum Concentrate Marigold 20ml - N\'Pure Mariglod -  Anti Aging Eye Serum - Serum Mata',
'variation' => 'Eye Serum 20ml',
'link' => 'https://shopee.co.id/NPURE-Eye-Power-Serum-Concentrate-Marigold-20ml-N\'Pure-Mariglod-Anti-Aging-Eye-Serum-Serum-Mata-i.744873.13770839013?sp_atk=578e1429-f0ee-4562-b307-7226074f7bda&xptdk=578e1429-f0ee-4562-b307-7226074f7bda',
'description' => 'Hero Ingredients:
Calendula Officinalis (Marigold Flower Extract)
Euglena Gracilis Polisaccharide
Hydrolized Collagen
Multipeptide Non Alcohol (Dipeptide, Acetyl Tetrapeptide, Tranexamoyl Dipeptide)
Poria Cocos Extract
Ceramide
Gold

Untuk: Semua jenis kulit terutama yang kering
Skin Concern: Dry Skin, Dark Circle, Puffy Eyes, Wrinkles, Signs of Aging

How to use: 
Dispense a SMALL amount of eye cream onto stainless applicator tip. Massage into skin around eye area.
Can be store in the refrigerator to get a cooling fresh sensation

Free Paraben, Alcohol, SLS, Mineral Oil, EU Allergen, Fragrance, Sillicone
HALAL',
'price' => 130500,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
298 => 
array (
'id' => 299,
'brand_id' => 11,
'name' => 'Wardah Crystallure Supreme Advanced Eye Serum 15 ml - Krim Mata',
'variation' => 'Eye Serum 15ml',
'link' => 'https://shopee.co.id/Wardah-Crystallure-Supreme-Advanced-Eye-Serum-15-ml-Krim-Mata-i.744873.12023305403?sp_atk=6a17b577-f553-4fed-8cee-91eafe1791b3&xptdk=6a17b577-f553-4fed-8cee-91eafe1791b3',
'description' => 'Sebagai bagian dari perawatan firming-lifting, Crystallure Supreme Advanced Eye Serum diformulasikan khusus untuk kulit area mata yang lembut. Diperkaya Gold-Peptide Crystals dan YouthGlow Actives, eye serum ini menjadikan area mata terasa lebih kencang dan kenyal, serta menghidrasinya. Advanced Micro Peptide di dalamnya terbukti dapat menyamarkan kantung mata, lingkaran hitam, dan kerutan di sekitar mata.

As part of firming and lifting ritual, Crystallure Supreme Advanced Eye Serum is specially formulated for the delicate skin around eyes. Enriched with Gold-Peptide Crystals and YouthGlow Active, it targets eye area, making it firmer, elastic, and also more hydrated. The phenomenal Advanced Micro Peptide is proven to diminish eye bags, dark circles, and wrinkle appearance around eye area.

CARA PAKAI:
Aplikasikan di area sekitar mata. Tekan pelan dan lembut dengan jari manis. Hindari menggosok atau menarik kulit.

DIRECTION: 
Dot around both eye zones. Press or tap lightly and evenly with ring fingers to spread. Do not rub or pull skin.',
'price' => 120900,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
299 => 
array (
'id' => 300,
'brand_id' => 17,
'name' => 'Y.O.U Golden Age Energizing Eye Cream 15g - YOU',
'variation' => 'Golden Eye Cream',
'link' => 'https://shopee.co.id/Y.O.U-Golden-Age-Energizing-Eye-Cream-15g-YOU-i.744873.5574191850?sp_atk=c97e5cc7-f11c-4369-b090-19a0c570628a&xptdk=c97e5cc7-f11c-4369-b090-19a0c570628a',
'description' => 'Golden Age Energizing Eye Cream diformulasikan dengan kandungan ekstrak Buah Delima dan Hyaluronic Acid yang mudah meresap dan bekerja khusus pada area mata untuk melembapkan dan menyamarkan garis halus di sekitar mata.

Selling Point & Benefit:
1. Anti-Agingu000B -> Mencegah dan menyamarkan tanda penuaan di area sekitar mata.
2.Restores Resilienceu000B -> Mengembalikan elastisitas kulit, sehingga terasa lebih kencang.
3.Skin Rejuvenationu000B -> Meningkatkan produktivitas kulit agar terlihat segar dan lebih muda.',
'price' => 91000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
300 => 
array (
'id' => 301,
'brand_id' => 24,
'name' => 'DHC SYB Eye Lash Serum by SYB | DHC SYB Eye Bag Serum By SYB',
'variation' => 'Eyebag Serum',
'link' => 'https://shopee.co.id/DHC-SYB-Eye-Lash-Serum-by-SYB-DHC-SYB-Eye-Bag-Serum-By-SYB-i.744873.4996052279?sp_atk=638af08c-73ee-495e-b055-1439a5d5b12c&xptdk=638af08c-73ee-495e-b055-1439a5d5b12c',
'description' => 'Dream House Cosmetic Eye Bags Serum/ DHC Eye Bags Roll On Cream Kantong Mata
Aman Di Pakai Untuk Area Sensitif
Ini nih produk favorit ,Produk ini nggak cuma bisa dipake sama cewek, tapi dipake sama cowok juga bisa loh! Produk ini secara efektif mengatasi permasalahan disekitar mata kamu seperti mata lelah, kantung mata yang besar dan hitam hingga kerutan disekitar mata!

Cara pakainya tinggal diaplikasikan di sekitar mata ya seperti di kantung mata dan ujung mata. Mata jadi bersinar kembali deh setelah pemakaian!

Cara kerja :
Roll on terbuat dari bahan khusus yang berfungsi dari seperti setrika kantong mata yang mampu memberi efek dingin dan memijat Bagian-bagian kerutan dan mata lelah sehingga serum eye bag mampu meresap secara maksimal.',
'price' => 24800,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
301 => 
array (
'id' => 302,
'brand_id' => 21,
'name' => 'Avoskin Advanced Action Eye Ampoule 12ml',
'variation' => 'Eye Serum Ampoule',
'link' => 'https://shopee.co.id/Avoskin-Advanced-Action-Eye-Ampoule-12ml-i.744873.6156775082?sp_atk=de6ac50d-be07-4853-baba-af0229578e11&xptdk=de6ac50d-be07-4853-baba-af0229578e11',
'description' => 'Perpaduan kandungan peptide, niacinamide, dan ekstrak natural lainnya membuat Avoskin Advance Eye Ampoule bisa menjadi pilihanmu untuk merawat kulit sekitar mata dengan lebih optimal. Produk ini akan menghasilkan efek yang signifikan dengan pemakaian rutin pada pagi dan malam hari. Hasil akan terlihat semakin nyata setelah pemakaian 28 hari.

Cara Penggunaan :
- Teteskan 2 atau 3 drop Avoskin Advance Action Eye Ampoule di jari.
- Aplikasikan pada kulit bawa bawah mata dan kelopak mata dengan pijatan lembut.
- Gunakan Avoskin Advance Action Eye Ampoule sehari dua kali pada pagi dan malam hari dalam kondisi kulit bersih setelah menggunakan rangkaian skincare lainnya.
- Hasil akan terlihat lebih optimal setelah pemakaian rutin selama 28 hari.

Untuk Siapa:
Dapat digunakan untuk usia mulai dari 20 tahun.',
'price' => 175200,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
302 => 
array (
'id' => 303,
'brand_id' => 52,
'name' => 'SAFI Age Defy Eye Contour Treatment 15 gr',
'variation' => 'A.D Eye Contour Trea',
'link' => 'https://shopee.co.id/SAFI-Age-Defy-Eye-Contour-Treatment-15-gr-i.744873.1353110515?sp_atk=96e63593-c934-4e3c-a595-ecb0e2f55762&xptdk=96e63593-c934-4e3c-a595-ecb0e2f55762',
'description' => 'SAFI Age Defy Eye Contour Treatment adalah krim khusus area mata dengan tekstur yang ringan dan mudah menyerap dan berfungsi untuk : 
- Membantu menyamarkan garis halus di sekitar mata
- Membantu menyamarkan lingkar hitam di sekitar mata
- Mencerahkan kulit di sekitar mata
- Menjaga kulit sekitar mata tetap terasa lembab

Cara Pakai : 
Titikkan di sekitar mata, ratakan dengan lembut sampai meresap dengan sepenuhnya. ',
'price' => 91000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
303 => 
array (
'id' => 304,
'brand_id' => 45,
'name' => 'Pyunkang Yul Eye Cream Full Pack',
'variation' => 'Eye Cream Full Pack',
'link' => 'https://shopee.co.id/-BPOM-Pyunkang-Yul-Eye-Cream-Full-Pack-(1ml-x-50ea)-i.744873.2147091536?sp_atk=4f15ecdb-b870-4e23-9c76-3f9ae4ea5384&xptdk=4f15ecdb-b870-4e23-9c76-3f9ae4ea5384',
'description' => 'Apply every evening, gently spread on wrinkles or darkening areas.',
'price' => 198000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
304 => 
array (
'id' => 305,
'brand_id' => 11,
'name' => 'Wardah Renew You Anti Aging Eye Cream 10ml',
'variation' => 'EYE Cream 10ml',
'link' => 'https://shopee.co.id/Wardah-Renew-You-Anti-Aging-Eye-Cream-10ml-i.744873.1556673005?sp_atk=cdb6d619-544b-4556-88fc-be536f1d1907&xptdk=cdb6d619-544b-4556-88fc-be536f1d1907',
'description' => 'Dari Wardah Research Laboratory, Renew You Anti Aging Eye Cream, sebuah terobosan baru dalam Advanced RecoverAge System yang bekerja secara spesifik dan inovatif membantu merawat area mata agar tampak lebih muda dan cerah, dikombinasikan dari bahan aktif terpilih yaitu Apple (malus domestica) Phyto Cell Extract, 3D-Nutriplex Active, Vitamin B3, serta Hyaluronic Acid, bantu menyamarkan tanda-tanda penuaan di daerah mata: kerutan, garis-garis halus, kulit kering, kantung mata, noda hitam, dan warna kulit yang kusam.

Cara Pakai :
Oleskan pada kulit sekitar mata dua kali sehari setelah membersihkan wajah.
',
'price' => 75000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
305 => 
array (
'id' => 306,
'brand_id' => 14,
'name' => 'Whitelab Eye Cream | White lab Eye Cream',
'variation' => 'WL Eye Cream',
'link' => 'https://shopee.co.id/Whitelab-Eye-Cream-White-lab-Eye-Cream-i.744873.4783134439?sp_atk=720fc48a-d7ce-46c1-bcab-0893fb4ba1b2&xptdk=720fc48a-d7ce-46c1-bcab-0893fb4ba1b2',
'description' => 'Dengan kandungan utama Copper Tripeptide + Beta Glucan
Ketika penuaan terjadi, area mata adalah yang pertama menunjukkan perubahannya. Kulit pada area mata yang tipis, akan lebih mudah mengendur dan garis halus serta kerutan akan lebih mudah terlihat.

Whitelab Eye Cream hadir dengan kandungan 3 jenis Peptides serta Beta Glucan pada kandungannya.
Dengan kandungan utama Copper Tripeptide merupakan amino acid complex yang dikenal karena manfaatnya untuk meningkatkan kekencangan kulit, membantu mengurangi garis halus disekitar mata, membantu meningkatkan produksi kolagen, dan mengencangkan kantung mata.

Serta kandungan Beta Glucan yang berfungsi sebagai Humectant untuk mencegah hilangnya kelembaban kulit, membantu meningkatkan hidrasi kulit, meregenerasi sel-sel kulit pada area sekitar mata, serta membantu mencerahkan area gelap seperti mata panda.

Manfaat :
- Meningkatkan kekencangan kulit
- Membantu mengurangi garis halus disekitar mata
- Meningkatkan produksi kolagen
- Meminimalisir dan mengencangkan kantung mata
- Meningkatkan hidrasi dan kelembaban kulit
- Meregenerasi sel-sel kulit pada area sekitar mata
- Membantu mencerahkan area gelap di sekitar mata

Cara pakai : Oleskan Whitelab Eye Cream pada area sekitar mata dengan lembut. Hindari kontak langsung dengan mata. Untuk hasil maksimal, gunakan pagi dan malam hari.

More Information :
This product doesn’t triggering milia in a long term use. Milia are typically associated with type of damage skin, such as blistering, burns, long term use of steroid creams, genetic or auto immune skin condition, and it also can be develops on the new born.

Fungal acne / malasezia safe
Pregnancy and breastfeeding safe',
'price' => 75000,
'category' => 'EyeCream',
'created_at' => '2022-06-27 15:41:53',
'updated_at' => '2022-06-27 15:41:53',
),
306 => 
array (
'id' => 307,
'brand_id' => 72,
'name' => 'BNB barenbliss My UV Armor SPF 50 PA++++ - Face Sunscreen gel Moisturizer',
'variation' => 'My UV Armor SPF50',
'link' => 'https://shopee.co.id/BNB-barenbliss-My-UV-Armor-SPF-50-PA-Face-Sunscreen-gel-Moisturizer-i.744873.19409848760?sp_atk=1c6ace79-102a-4cd4-9144-5ccf18823079&xptdk=1c6ace79-102a-4cd4-9144-5ccf18823079',
'description' => 'SPF 50 PA++++ ultra ringan dengan formula multi-defense dan perlindungan broad spectrum yang melindungi kulit dari sinar matahari.

Benefit:
1. 16X Broad Spectrum Hybrid Protection
2. Zero Burdens, Skin Barrier Friendly
3. Brightening Active Infused

Special Ingredients:
1. 5+2 Hybrid Protection 
Tabir surya yang terdiri dari 5 chemical dan 2 physical untuk perlindungan UV yang efektif. 
2. Niacinamide
Bahan pencerah kulit dengan kemurnian 99.8% yang efektif menjaga kelembapan, memperkuat skin barrier, meningkatkan penampilan dan tekstur kulit.
3. Natural Skin Calming 
CICA yang iekstraksi dengan teknologi micro-jet untuk meredakan kemerahan dan memperkuat skin barrier; Purslane untuk membantu menyejukkan kulit yang iritasi.
4. Argentière Ice Cap Water 
Air murni kaya mineral dari Gletser Alpen yang membantu menutrisi, melembutkan, dan memperkuat skin barrier.
5. Intelligent  Moisturizing Factor Mengandung Allantoin, Betaine, Squalane, Trehalose, Sodium Hyaluronate yang bekerja secara sinergis untuk kulit kenyal dan lembap.

No Harm:
0% Paraben, 0% Alcohol, 0% Mineral Oil, 0% Sulfates, 0% Phthalates, 0% Formaldehyde, 0% Synthetic Fragrance, 0% Gluten, No Animal Testing.

Good To Know: 
- Non-Sticky
- Minimal Whitecast
- Smart Photosensitive Design
- Moisturizing
- Refreshing
- Comfortable
- Soothing
- Broad Spectrum
- Dermatology Tested

How to use:
Oleskan secara merata pada wajah dan leher setiap pagi setelah perawatan kulit atau 15-30 menit sebelum melakukan aktivitas di luar ruangan. Aplikasikan ulang jika diperlukan. Mudah dibersihkan dengan facial wash, tanpa membutuhkan makeup remover.',
'price' => 70400,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
307 => 
array (
'id' => 308,
'brand_id' => 73,
'name' => 'BIORE UV Tone Up UV Milk SPF 50+/PA++++  - Tone Up Clear Skin Make Up Sunscreen SPF 50 PA++++ 30ml',
'variation' => 'UV Tone Up Milk 30ML',
'link' => 'https://shopee.co.id/BIORE-UV-Tone-Up-UV-Milk-SPF-50-PA-Tone-Up-Clear-Skin-Make-Up-Sunscreen-SPF-50-PA-30ml-i.744873.10526468470?sp_atk=456c8075-190e-4b1d-b712-105176ca2790&xptdk=456c8075-190e-4b1d-b712-105176ca2790',
'description' => 'Why It\'s Special
Merupakan salah satu varian Biore UV Series dengan formulasi gabungan warna Pure Lavender dan Prism Powder yang membuat kulit tampak lebih cerah bercahaya seketika. Dapat digunakan sebagai Base Make up dan mudah bercampur dengan foundation. Kandungan Unik : Hyaluronic Acid & BHA

How to use
Oleskan secara merata ke seluruh bagian kulit yang terkena sinar matahari, Gunakan 20 menit sebelum beraktivitas, dan lakukan re-apply setiap 2 jam',
'price' => 99800,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
308 => 
array (
'id' => 309,
'brand_id' => 74,
'name' => 'Vaseline Daily Sun Cream 50ml | Vaseline Tone Up Sun Cream 50 ml | Vaseline UV Protect Sun Stick',
'variation' => 'Sun Cream 50ml',
'link' => 'https://shopee.co.id/Vaseline-Daily-Sun-Cream-50ml-Vaseline-Tone-Up-Sun-Cream-50-ml-Vaseline-UV-Protect-Sun-Stick-i.744873.2932834992?sp_atk=74f04bbf-75cd-4bca-a894-cc77e9f923aa&xptdk=74f04bbf-75cd-4bca-a894-cc77e9f923aa',
'description' => 'Miliki kulit lembap dan terlindung dari sinar UV. Dengan teknologi Water-Holding yang mampu memberikan sensasi segar sekaligus melembapkan kulit. Memiliki tekstur yang ringan, cocok untuk digunakan setiap hari. Formula Vaseline Pet Jelly membentuk lapisan yang melembapkan sekaligus melindungi kulit dari panas sinar UV. Jaga kulitmu tetap sehat dan lembap dengan Vaseline Daily Sun Care Daily Sun Cream.',
'price' => 129000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
309 => 
array (
'id' => 310,
'brand_id' => 74,
'name' => 'Vaseline Daily Sun Cream 50ml | Vaseline Tone Up Sun Cream 50 ml | Vaseline UV Protect Sun Stick',
'variation' => 'Sun Tone Up 50ml',
'link' => 'https://shopee.co.id/Vaseline-Daily-Sun-Cream-50ml-Vaseline-Tone-Up-Sun-Cream-50-ml-Vaseline-UV-Protect-Sun-Stick-i.744873.2932834992?sp_atk=74f04bbf-75cd-4bca-a894-cc77e9f923aa&xptdk=74f04bbf-75cd-4bca-a894-cc77e9f923aa',
'description' => 'Mencerahkan dan melembapkan kulit dengan perlindungan dari sinar UV! Tekstur yang ringan, Vaseline Daily Sun Care Tone Up Cream mampu memberikan sensasi segar sekaligus melembapkan dan membuat kulit cerah secara natural. Hasil matte dan tidak lengket di kulit.',
'price' => 139000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
310 => 
array (
'id' => 311,
'brand_id' => 28,
'name' => 'COSRX Aloe Soothing Sun Cream SPF50 PA+++ 50ml',
'variation' => 'COSRX Aloe Sun Cream',
'link' => 'https://shopee.co.id/COSRX-Aloe-Soothing-Sun-Cream-SPF50-PA-50ml-i.744873.7361044040?sp_atk=d535f97c-747d-472d-90a5-e5291dc20ac9&xptdk=d535f97c-747d-472d-90a5-e5291dc20ac9',
'description' => 'Cosrx Aloe Soothing Sun Cream adalah krim matahari harian yang mengandung 5500pm ekstrak daun lidah buaya dan memblokir sinar ultraviolet, serta pada saat yang sama merawat kulit yang kering.
Aloe Soothing Sun Cream terdiri dari campuran bahan tumbuh-tumbuhan dan bahan penghalang sinar ultraviolet yang terjamin secara ilmiah. Berfungsi melindungi kulit dari sinar ultraviolet dan membentuk pelindung kelembaban, serta memberikan kelembaban ke bagian dalam kulit.

Cara Menggunakan
1. Padukan pada tahap akhir perawatan dasar, tepat sebelum makeup dasar.
2. 30 menit sebelum bepergian keluar atau terkena paparan sinar ultraviolet, ambil jumlah secukupnya dan oleskan ke seluruh wajah.
(Oleskan seperti sedang mengaplikasikan kaca film ke kulit.)
3. Jika Anda menghabiskan waktu lama di luar rumah, oleskan kembali dalam interval 2 jam.',
'price' => 164000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
311 => 
array (
'id' => 312,
'brand_id' => 17,
'name' => 'Y.O.U Triple UV Elixir Sunscreen Gel - YOU Tone Up UV Elixir Hyaluronic Acid - SPF 50+ PA++++ - YOU',
'variation' => 'Tone Up Uv Elixir',
'link' => 'https://shopee.co.id/Y.O.U-Triple-UV-Elixir-Sunscreen-Gel-YOU-Tone-Up-UV-Elixir-Hyaluronic-Acid-SPF-50-PA-YOU-i.744873.17521039321?sp_atk=62600622-c0a8-4ea6-9721-3a23e73a6aad&xptdk=62600622-c0a8-4ea6-9721-3a23e73a6aad',
'description' => 'Sunblock dengan tekstur ringan dan berbahan dasar air yang memberikan perlindungan terhadap UVA, UVB, dan blue light, serta diperkaya dengan Allantoin, Vitamin E, Niacinamide, dan Centella Asiatica untuk menutrisi kulit.

An intensive UV protection formulated with Sunflower Seed Oil and Hyaluronic Acid to brighten, hydrate, and protect the skin from UVA and UVB.
Perlindungan UV intensif yang diformulasikan dengan Sunflower Seed Oil dan Hyaluronic Acid untuk mencerahkan, menghidrasi, serta melindungi kulit dari UVA dan UVB secara maksimal.',
'price' => 59500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
312 => 
array (
'id' => 313,
'brand_id' => 17,
'name' => 'Y.O.U Triple UV Elixir Sunscreen Gel SPF 50+ PA++++  [UBA UVB Blue Light Protection] - YOU',
'variation' => 'Triple Uv Elixir',
'link' => 'https://shopee.co.id/Y.O.U-Triple-UV-Elixir-Sunscreen-Gel-SPF-50-PA-UBA-UVB-Blue-Light-Protection-YOU-i.744873.15961459589?sp_atk=5529ac69-bb00-4c2f-8bf0-edc12dfc943d&xptdk=5529ac69-bb00-4c2f-8bf0-edc12dfc943d',
'description' => 'Sunblock dengan tekstur ringan dan berbahan dasar air yang memberikan perlindungan terhadap UVA, UVB, dan blue light, serta diperkaya dengan Allantoin, Vitamin E, Niacinamide, dan Centella Asiatica untuk menutrisi kulit.

BROAD SPECTRUM PROTECTION
Mengandung chemical sunscreen (Ethylhexyl Methoxycinnamate, Diethylamino Hydroxybenzoyl Hexyl Benzoate, Octocrylene) dan mineral sunscreen (Titanium Dioxide) untuk memberikan perlindungan terhadap UVA & UVB dan membantu mengurangi efek dari blue light.

LIGHT TEXTURE & COOLING EFFECT 
Tekstur ringan, formula berbahan dasar air yang cepat meresap dan nyaman tanpa meninggalkan residu putih pada kulit, serta kandungan Menthol memberikan efek dingin dan menyegarkan.

SKIN NOURISHING FORMULA 
Diperkaya dengan Allantoin, Niacinamide, Vitamin E, dan Centella Asiatica untuk membantu menenangkan dan melembutkan kulit, serta menjaga kelembapan pada kulit.

Highlight Ingredients: 
1. Allantoin
Diekstraksi dari akar tanaman Comfrey, Allantoin berfungsi untuk menenangkan dan melembapkan kuit.
2. Niacinamide
Vitamin B3 yang membantu mengurangi hiperpigmentasi, melembutkan kulit, dan mencerahkan kulit
3. Centella Asiatica 
Membantu menghidrasi, menenangkan kulit yang terganggu, dan memperkuat sistem perlindungan kulit.
4. Vitamin E
Memiliki aktivitas sebagai antioksidan untuk membantu meminimalisir kerusakan akibat radikal bebas dan
melembapkan kulit.',
'price' => 44500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
313 => 
array (
'id' => 314,
'brand_id' => 14,
'name' => 'Whitelab UV Shield Tank Sunscreen Gel SPF 50++ PA++++ | White Lab',
'variation' => 'WL Sunscreen Gel 30g',
'link' => 'https://shopee.co.id/Whitelab-UV-Shield-Tank-Sunscreen-Gel-SPF-50-PA-White-Lab-i.744873.11672997902?sp_atk=dfa3b1b0-9e85-4167-88f0-976266f486dc&xptdk=dfa3b1b0-9e85-4167-88f0-976266f486dc',
'description' => 'Sunscreen pertama di Indonesia yang memberikan perlindungan #broadspectrum dari pengaruh buruk sinar UV A dan UV B, radiasi Blue Light dan radikal bebas.

Powerfull Ingredients:
- Niacinamide 2% merawat skin barrier wajah, mengurangi kemerahan akibat terpapar sinar matahari.
- Raykami ™ yang berasal dari bunga tanaman jepang Artemisia Capillaris sebagai antioksidan alami melindungi kulit dari photoaging yang mengakibatkan kulit kusam, kendur dan kemerahan.
- Hyaluronic Acid “low weight molecule” dapat berpenetrasi hingga lapisan epidermis terdalam dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Mugwort yang kaya dengan antioksidan membantu menenangkan kulit dan memberikan kelembaban.

Diformulasikan dengan tekstur gel yang ringan membuat sunscreen mudah diaplikasikan serta mudah menyerap pada wajah  tanpa meninggalkan noda putih (white cast). Produk UV Shield Tank Sunscreen Gel ini merupakan produk dengan ingredients minimalis yang sudah lolos uji dermatologi, tidak memicu pembentukan komedo, dan fragrance free sehingga dapat digunakan untuk semua jenis kulit.

Fungsi:
- Melindungi kulit dari pengaruh buruk sinar UV A & UV B sekaligus sinar blue light
- Membantu melindungi kulit dari efek buruk radikal bebas
- Merawat skin barrier wajah
- Merawat kelembaban kulit wajah
- Membantu menenangkan kulit kemerahan akibat terpapar sinar matahari.

Cara pakai : Pada tahap akhir perawatan wajah dan sebelum menggunakan make up, oleskan Whitelab UV Shield Tank Sunscreen Gel sebanyak dua ruas jari pada area kulit wajah dan leher. Tunggu selama 10 menit hingga produk meresap secara sempurna sebelum terpapar sinar matahari langsung.

Tidak disarankan untuk ibu hamil dan menyusui.',
'price' => 75000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
314 => 
array (
'id' => 315,
'brand_id' => 63,
'name' => 'NIVEA SUN Triple Protect Hokkaido Rose SPF50+ PA+++ 40ml - NIVEA SUN Face Serum - Sunscreen Sunblock',
'variation' => 'Sun Hokkaido SPF50+',
'link' => 'https://shopee.co.id/NIVEA-SUN-Triple-Protect-Hokkaido-Rose-SPF50-PA-40ml-NIVEA-SUN-Face-Serum-Sunscreen-Sunblock-i.744873.12482246101?sp_atk=ecdd687a-c3a8-45fe-ab81-0a99d53bab07&xptdk=ecdd687a-c3a8-45fe-ab81-0a99d53bab07',
'description' => 'Menjaga kulit wajah untuk tetap sehat tidak sebatas tentang sinar UV, tetapi juga faktor lingkungan lainnya seperti blue light dan polusi. Efek dari sinar UV, blue light, dan polusi adalah 3 faktor yang dapat membawa masalah untuk kulit wajah.

Tahukah kamu? Blue light yang berasal dari matahari menimbulkan risiko yang jauh lebih tinggi dibandingkan blue light dari gadget. Penemuan ini didapat dari tim riset NIVEA global, Dr. Ludger Kolbe, Kepala Ilmuwan Fotobiologi, bahwa efek blue light yang dipancarkan dari perangkat elektronik atau gadget tidak cukup untuk memicu bahaya terhadap kulit sedangkan efek blue light yang datang secara alami dari matahari menembus lebih dalam ke dalam kulit dibandingkan dengan sinar UVA yang hanya 5% dari matahari sehingga sifatnya lebih berbahaya. Dengan temuan ini menunjukkan bahwa kulit membutuhkan proteksi dari efek blue light yang datang dari matahari. 
NIVEA Sunscreen Triple Protect Hokkaido Rose hadir untuk melindungi kulit dari efek blue light, sinar UVA/UVB, dan polusi. Dengan SPF50+ PA+++ yang memberikan proteksi maksimal lengkap dengan formula yang super ringan sehingga cepat meresap ke kulit. Cocok digunakan setiap hari, baik di dalam rumah maupun di luar rumah. Jadikan kulit sehat, cerah alami.

Sunscreen wajah NIVEA ini memiliki tiga kandungan utama: 
-        Glycyrrhiza Inflata, mampu melindungi kulit wajah dari radikal bebas blue light
-        Licochalcone A, berasal dari akar Licorice bekerja sebagai anti-oxidant, mendukung pertahanan kulit dari sinar UV dan radikal bebas polusi 
-        Hokkaido Rose, mengembalikan natural glow kulit sehingga kulit tampak cerah',
'price' => 69500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
315 => 
array (
'id' => 316,
'brand_id' => 22,
'name' => 'SOMETHINC Holyshield Glowing Up Sunscreen Stick SPF 50 PA++++ Glow 15g Sunblock | Shake List | Corrector Serum',
'variation' => 'Sunscreen Stick',
'link' => 'https://shopee.co.id/SOMETHINC-Holyshield-Glowing-Up-Sunscreen-Stick-SPF-50-PA-Glow-15g-Sunblock-Shake-List-Corrector-Serum-i.744873.11148314101?sp_atk=f6c3a739-9d45-4751-bf46-0a2406d6f98c&xptdk=f6c3a739-9d45-4751-bf46-0a2406d6f98c',
'description' => 'Transparent sunscreen stick dengan SPF50+ PA+++ yang mampu menangkal radiasi sinar UVA & UVB. Teksturnya ringan sehingga mudah menyerap, tidak lengket, tidak menyumbat pori-pori, sehingga tidak menggeser makeup.',
'price' => 125000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
316 => 
array (
'id' => 317,
'brand_id' => 75,
'name' => 'SKIN AQUA UV Mild Milk SPF25 40gr | Sunscreen',
'variation' => 'MildMILK SPF25 -40gr',
'link' => 'https://shopee.co.id/SKIN-AQUA-UV-Mild-Milk-SPF25-40gr-Sunscreen-i.744873.1530767177?sp_atk=3578712b-7307-4d99-bc0b-463c32ffa003&xptdk=3578712b-7307-4d99-bc0b-463c32ffa003',
'description' => 'Melembabkan sekaligus memberikan perlindungan ganda terhadap sinar UV-A dan UV-B.

MENGANDUNG BAHAN:
- Improved Hyaluronic Acid (AcHA): kelembaban dan kelembutan extra pada kulit.
- Collagen: menjada elastisitas kulit
- Vitamin B5, E, dan C: menutrisi kulit
- SPF25: perlindugan 25x lebih lama terhadap sinar UV-B (penyebab kulit terbakar)
- PA++ : perlindungan optimal terhadap sinar UV-A (penyebab bintik hitam, kerutan halus)
- Water Based formula: tidak lengket, cepat meresap, terasa ringan di kulit
- Tidak menggunakan pewarna dan parfum
- Dapat digunakan sebagai dasar make up
- Diformulasikan untuk orang Asia

CARA PAKAI:
- Bersihkan Wajah dengan sabun wajah, keringkan. Tuangkan SKin Aqua pada telapak tangan secukupnya dan aplikasikan di wajah secara lembut hingga meresap. Gunakan make up seperti biasa.
- Untuk hasil yang optimal, gunakan setiap hari dan aplikasikan kembali jika kulit terkena keringat, air, atau jika terpapar sinar matahari dalam jangka waktu yang lama. Kocok dahulu sebelum dipakai.',
'price' => 42000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
317 => 
array (
'id' => 318,
'brand_id' => 10,
'name' => 'PIXY Glowssentials Sunshield Daily Moisturizer - Pixy Sunshield - Sunscreen',
'variation' => 'Glow Sunshield 20gr',
'link' => 'https://shopee.co.id/PIXY-Glowssentials-Sunshield-Daily-Moisturizer-Pixy-Sunshield-Sunscreen-i.744873.15218036619?sp_atk=6921a2c6-496d-478d-9258-6657d04d59fd&xptdk=6921a2c6-496d-478d-9258-6657d04d59fd',
'description' => 'Krim pelembap yang mengandung SPF 32 PA+++, dapat menjaga kulit dari paparan sinar matahari dan membuat kulit tetap terasa lembap, dengan kandungan Ekstrak Kiwi dan Vitamin E yang kaya akan antioksidan dapat menutrisi kulit dengan baik.

Diperkaya dengan 3 kandungan utama, yaitu:
• Natural Vita Complex dari Ekstrak Kiwi, Vitamin E, dan Provitamin B5: Mengandung antioksidan, membantu menutrisi dan menjaga kelembapan kulit agar tetap cerah dan glowing. 
• SPF 32 PA+++ yang dapat melindungi kulit secara maksimal dari efek buruk paparan sinar matahari /UVA&UVB
• Pollustop®: Diketahui mampu melindungi kulit dari partikel-partikel polusi seperti debu, asap, dan kotoran.. 

Formulanya ringan, tidak mengandung alkohol, serta sesuai dengan untuk semua warna dan jenis kulit.',
'price' => 26500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
318 => 
array (
'id' => 319,
'brand_id' => 50,
'name' => 'EMINA SUN Battle SPF 45 PA++ 30mL | Emina Sun Screen | SunBlock',
'variation' => 'SunScreen SPF45 PA++',
'link' => 'https://shopee.co.id/EMINA-SUN-Battle-SPF-45-PA-30mL-Emina-Sun-Screen-SunBlock-i.744873.9514832445?sp_atk=7f49b864-3e81-4bcb-9249-e520ab476a8d&xptdk=7f49b864-3e81-4bcb-9249-e520ab476a8d',
'description' => 'Emina Sun Battle SPF 45 PA+++ dengan tekstur ringan yang cepat meresap, siap melindungi kulitmu dari paparan sinar UV. Mengandung Grape Leaf Extract yang dikenal sebagai bahan anti-polusi dengan mekanisme kerja antioksidan, cocok digunakan untuk aktivitas outdoor maupun penggunaan sehari-hari.',
'price' => 38000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
319 => 
array (
'id' => 320,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Anti DullnesSPF50',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 119000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
320 => 
array (
'id' => 321,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Defen Bright 15ml',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 29500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:06',
'updated_at' => '2022-06-27 15:42:06',
),
321 => 
array (
'id' => 322,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Defen Matte 50ml',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 97500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
322 => 
array (
'id' => 323,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Moist Fresh 50ml',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 112500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
323 => 
array (
'id' => 324,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Perfect Matte',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 119000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
324 => 
array (
'id' => 325,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Transparant',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 119000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
325 => 
array (
'id' => 326,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Defen Bright 50ml',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 97500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
326 => 
array (
'id' => 327,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Defen Matte15ml',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 35200,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
327 => 
array (
'id' => 328,
'brand_id' => 31,
'name' => 'L\'oreal UV Perfect Matte & Fresh Long UV SPF 50 Loreal Paris Sun Block | Loreal Defender UV Sun Bloc',
'variation' => 'UV Aqua Essen FULL',
'link' => 'https://shopee.co.id/L\'oreal-UV-Perfect-Matte-Fresh-Long-UV-SPF-50-Loreal-Paris-Sun-Block-Loreal-Defender-UV-Sun-Bloc-i.744873.2008365115?sp_atk=e446f7ab-7269-48b7-95f2-43d2ce850b24&xptdk=e446f7ab-7269-48b7-95f2-43d2ce850b24',
'description' => 'L’Oreal Paris UV Defender – Matte & Fresh UV Serum Protector dilengkapi dengan kandungan airlicium. Mampu membantu menghasilkan kulit tidak tampak berminyak dan menyamarkan pori pori. Matte & Fresh UV Serum Protector cocok untuk kulit berminyak dan mereka yang membutuhkan oil control/sebum control. Meninggalkan hasil matte pada kulit bahkan pada cuaca panas dan lembap. Diuji pada suhu 45C dan kelembapan 80%

* Memiliki formulasi advance UV protector, oil free formula dan anti polusi yang cocok untuk digunakan di wilayah tropis
* Dengan tingkat SPF dan PA tertinggi di kelasnya - melindungi kulit hingga 8 jam dari sinar matahari
* Mengandung Mexoryl yang berfungsi untuk mencegah pigmentasi dan darkspot serta Detoxyl yang berfungsi sebagai anti-polusi bahkan dapat melindungi kulit dari partikel yang lebih kecil dari 2,5 mikron sehingga bisa yang mencegah terjadinya jerawat dan mengecilkan pori

* Teksturnya ringan, tidak lengket dan memiliki finishing matte yang nyaman digunakan sepanjang hari
* Bisa digunakan sebagai primer atau sebelum penggunaan bedak/foundation. Tidak merusak hasil makeup.
Berdasarkan riset terhadap 85 wanita Asia yang memiliki kulit sensitif, lebih dari 75% menyatakan klaim bahwa produk ini:
- Teksturnya fresh dan cepat terserap
- Finishingnya matte dan tidak mengilap
- Dapat membantu membuat makeup tahan lebih lama
- Membantu meratakan dan mencerahkan rona kulit
* Survey dilakukan di Singapore tahun 2013',
'price' => 119000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
328 => 
array (
'id' => 329,
'brand_id' => 50,
'name' => 'Emina Skin Buddy Sun Protection SPF 30 PA+++',
'variation' => 'Skin Buddy SPF 30',
'link' => 'https://shopee.co.id/Emina-Skin-Buddy-Sun-Protection-SPF-30-PA--i.744873.13522815413?sp_atk=e69d7945-7cfe-4fed-ba03-54b5e3896001&xptdk=e69d7945-7cfe-4fed-ba03-54b5e3896001',
'description' => 'Emina Skin Buddy Sun Protection SPF 30 PA+++ merupakan sun screen lokal non-alkohol satu-satunya dengan Hyaluronic Acid serta Calendula extract yang mild di kulit sekaligus menghidrasi, sehingga cocok untuk remaja, tidak lengket, dan tidak menimbulkan iritasi.',
'price' => 27700,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
329 => 
array (
'id' => 330,
'brand_id' => 11,
'name' => 'WARDAH UV Shield Aqua Fresh Essence | Active Protection Serum | SPF 50 PA++++ sunscreen | Light Matte Sun Stick  | tntbeautyshop TnT Beauty Shop',
'variation' => 'Matte SunStick SPF50',
'link' => 'https://shopee.co.id/WARDAH-UV-Shield-Aqua-Fresh-Essence-Active-Protection-Serum-SPF-50-PA-sunscreen-Light-Matte-Sun-Stick-tntbeautyshop-TnT-Beauty-Shop-i.744873.4049388180?sp_atk=3bb1fa82-d7a8-45be-874e-78008369cc6d&xptdk=3bb1fa82-d7a8-45be-874e-78008369cc6d',
'description' => 'Matte SunStick SPF50
Merupakan pelindung matahari bertekstur gel lembut dengan formula baru dan membuat kulit terasa nyaman. Diperkaya dengan SPF 30 untuk perlindungan maksimal pada kulit. Tidak lengket maupun berminyak, non-comedogenic, dan mudah menyerap.

Wardah UV Shield Aqua Fresh Essence SPF50
Dapat melindungi kulit dari paparan sinar UV. PA+++ merupakan kandungan yang dapat menangkal sinar UVA sehingga mampu mencegah timbulnya penuaan dini pada kulit wajah. Sedangkan SPF dapat menangkal paparan sinar UVB sehingga kulit terhidar dari sunburn.

WARDAH, UV Shield Active Protection Serum SPF50 PA++++
Sunscreen yang waterproof tidak mudah luntur meski terkena air dan keringat, cocok digunakan untuk olahraga, berenang, berjemur di pantai, dan aktivitas dinamis lainnya di bawah paparan sinar matahari.',
'price' => 74900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
330 => 
array (
'id' => 331,
'brand_id' => 11,
'name' => 'WARDAH UV Shield Aqua Fresh Essence | Active Protection Serum | SPF 50 PA++++ sunscreen | Light Matte Sun Stick  | tntbeautyshop TnT Beauty Shop',
'variation' => 'Active Pro SPF 50',
'link' => 'https://shopee.co.id/WARDAH-UV-Shield-Aqua-Fresh-Essence-Active-Protection-Serum-SPF-50-PA-sunscreen-Light-Matte-Sun-Stick-tntbeautyshop-TnT-Beauty-Shop-i.744873.4049388180?sp_atk=3bb1fa82-d7a8-45be-874e-78008369cc6d&xptdk=3bb1fa82-d7a8-45be-874e-78008369cc6d',
'description' => 'Matte SunStick SPF50
Merupakan pelindung matahari bertekstur gel lembut dengan formula baru dan membuat kulit terasa nyaman. Diperkaya dengan SPF 30 untuk perlindungan maksimal pada kulit. Tidak lengket maupun berminyak, non-comedogenic, dan mudah menyerap.

Wardah UV Shield Aqua Fresh Essence SPF50
Dapat melindungi kulit dari paparan sinar UV. PA+++ merupakan kandungan yang dapat menangkal sinar UVA sehingga mampu mencegah timbulnya penuaan dini pada kulit wajah. Sedangkan SPF dapat menangkal paparan sinar UVB sehingga kulit terhidar dari sunburn.

WARDAH, UV Shield Active Protection Serum SPF50 PA++++
Sunscreen yang waterproof tidak mudah luntur meski terkena air dan keringat, cocok digunakan untuk olahraga, berenang, berjemur di pantai, dan aktivitas dinamis lainnya di bawah paparan sinar matahari.',
'price' => 57000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
331 => 
array (
'id' => 332,
'brand_id' => 11,
'name' => 'WARDAH UV Shield Aqua Fresh Essence | Active Protection Serum | SPF 50 PA++++ sunscreen | Light Matte Sun Stick  | tntbeautyshop TnT Beauty Shop',
'variation' => 'Aqua Fresh SPF 50',
'link' => 'https://shopee.co.id/WARDAH-UV-Shield-Aqua-Fresh-Essence-Active-Protection-Serum-SPF-50-PA-sunscreen-Light-Matte-Sun-Stick-tntbeautyshop-TnT-Beauty-Shop-i.744873.4049388180?sp_atk=3bb1fa82-d7a8-45be-874e-78008369cc6d&xptdk=3bb1fa82-d7a8-45be-874e-78008369cc6d',
'description' => 'Matte SunStick SPF50
Merupakan pelindung matahari bertekstur gel lembut dengan formula baru dan membuat kulit terasa nyaman. Diperkaya dengan SPF 30 untuk perlindungan maksimal pada kulit. Tidak lengket maupun berminyak, non-comedogenic, dan mudah menyerap.

Wardah UV Shield Aqua Fresh Essence SPF50
Dapat melindungi kulit dari paparan sinar UV. PA+++ merupakan kandungan yang dapat menangkal sinar UVA sehingga mampu mencegah timbulnya penuaan dini pada kulit wajah. Sedangkan SPF dapat menangkal paparan sinar UVB sehingga kulit terhidar dari sunburn.

WARDAH, UV Shield Active Protection Serum SPF50 PA++++
Sunscreen yang waterproof tidak mudah luntur meski terkena air dan keringat, cocok digunakan untuk olahraga, berenang, berjemur di pantai, dan aktivitas dinamis lainnya di bawah paparan sinar matahari.',
'price' => 42500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
332 => 
array (
'id' => 333,
'brand_id' => 73,
'name' => 'Biore UV Aqua Rich Watery Essence SPF50 - Biore Sunscreen',
'variation' => 'BIORE UV 15gr',
'link' => 'https://shopee.co.id/Biore-UV-Aqua-Rich-Watery-Essence-SPF50-Biore-Sunscreen-i.744873.9334334961?sp_atk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc&xptdk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc',
'description' => 'Dapat digunakan untuk wajah, dan dapat digunakan untuk makeup base, membaur dengan baik tanpa meninggalkan whitecast
- Waterproof, No added colorant, Acne Prevention, Allergy tested.
Scent: White Muguet Fragrance

Description:
Biore UV Aqua Rich Watery Essence Sunscreen Skin Care SPF 50 PA++++ merupakan salah satu varian Biore UV Series dengan Formula Micro Defense yang memberikan perlindungan UVA UVB secara maksimal.

- Biore\'s Unique Outer Skin Technology memberikan perlindungan terhadap UV yang terasa nyaman dan ringan seperti air.
- Water capsule-nya dapat melembabkan kulit namun tetap terasa ringan sekaligus melindungi kulitmu setiap hari.

Kandungan Unik : 
Hyaluronic Acid, Royal Jelly Extract & Bahan Pelembap yang memberikan kelembaban kulit

Cara pemakaian : 
1.	Keluarkan Biore UV Aqua Rich Watery Essence secukupnya
2.	Oleskan secara merata ke seluruh bagian kulit yang terkena sinar matahari.
3.	Gunakan 20 menit sebelum beraktivitas, dan lakukan re-apply setiap 2 jam

Caution : 
•	Hindari kontak langsung dengan mata, jika terkena mata segera bilas dengan air
•	Hindari kontak langsung dengan pakaian, tunggu sampai mengering dahulu
•	Hindari penggunaan setelah shaving, kulit sedang terluka, membengkak atau eczema.',
'price' => 35500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
333 => 
array (
'id' => 334,
'brand_id' => 73,
'name' => 'Biore UV Aqua Rich Watery Essence SPF50 - Biore Sunscreen',
'variation' => 'BIORE UV 50gr',
'link' => 'https://shopee.co.id/Biore-UV-Aqua-Rich-Watery-Essence-SPF50-Biore-Sunscreen-i.744873.9334334961?sp_atk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc&xptdk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc',
'description' => 'Dapat digunakan untuk wajah, dan dapat digunakan untuk makeup base, membaur dengan baik tanpa meninggalkan whitecast
- Waterproof, No added colorant, Acne Prevention, Allergy tested.
Scent: White Muguet Fragrance

Description:
Biore UV Aqua Rich Watery Essence Sunscreen Skin Care SPF 50 PA++++ merupakan salah satu varian Biore UV Series dengan Formula Micro Defense yang memberikan perlindungan UVA UVB secara maksimal.

- Biore\'s Unique Outer Skin Technology memberikan perlindungan terhadap UV yang terasa nyaman dan ringan seperti air.
- Water capsule-nya dapat melembabkan kulit namun tetap terasa ringan sekaligus melindungi kulitmu setiap hari.

Kandungan Unik : 
Hyaluronic Acid, Royal Jelly Extract & Bahan Pelembap yang memberikan kelembaban kulit

Cara pemakaian : 
1.	Keluarkan Biore UV Aqua Rich Watery Essence secukupnya
2.	Oleskan secara merata ke seluruh bagian kulit yang terkena sinar matahari.
3.	Gunakan 20 menit sebelum beraktivitas, dan lakukan re-apply setiap 2 jam

Caution : 
•	Hindari kontak langsung dengan mata, jika terkena mata segera bilas dengan air
•	Hindari kontak langsung dengan pakaian, tunggu sampai mengering dahulu
•	Hindari penggunaan setelah shaving, kulit sedang terluka, membengkak atau eczema.',
'price' => 112400,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
334 => 
array (
'id' => 335,
'brand_id' => 73,
'name' => 'Biore UV Aqua Rich Watery Essence SPF50 - Biore Sunscreen',
'variation' => 'BIORE Light Up Essen',
'link' => 'https://shopee.co.id/Biore-UV-Aqua-Rich-Watery-Essence-SPF50-Biore-Sunscreen-i.744873.9334334961?sp_atk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc&xptdk=4b1cf5db-da2e-4b0f-95fd-90d6d39d2fcc',
'description' => 'Dapat digunakan untuk wajah, dan dapat digunakan untuk makeup base, membaur dengan baik tanpa meninggalkan whitecast
- Waterproof, No added colorant, Acne Prevention, Allergy tested.
Scent: White Muguet Fragrance

Description:
Biore UV Aqua Rich Watery Essence Sunscreen Skin Care SPF 50 PA++++ merupakan salah satu varian Biore UV Series dengan Formula Micro Defense yang memberikan perlindungan UVA UVB secara maksimal.

- Biore\'s Unique Outer Skin Technology memberikan perlindungan terhadap UV yang terasa nyaman dan ringan seperti air.
- Water capsule-nya dapat melembabkan kulit namun tetap terasa ringan sekaligus melindungi kulitmu setiap hari.

Kandungan Unik : 
Hyaluronic Acid, Royal Jelly Extract & Bahan Pelembap yang memberikan kelembaban kulit

Cara pemakaian : 
1.	Keluarkan Biore UV Aqua Rich Watery Essence secukupnya
2.	Oleskan secara merata ke seluruh bagian kulit yang terkena sinar matahari.
3.	Gunakan 20 menit sebelum beraktivitas, dan lakukan re-apply setiap 2 jam

Caution : 
•	Hindari kontak langsung dengan mata, jika terkena mata segera bilas dengan air
•	Hindari kontak langsung dengan pakaian, tunggu sampai mengering dahulu
•	Hindari penggunaan setelah shaving, kulit sedang terluka, membengkak atau eczema.',
'price' => 139700,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
335 => 
array (
'id' => 336,
'brand_id' => 26,
'name' => 'Madame Gie Protect Me Let\'s Glow Tinted Sunscreen SPF 50 PA ++++ - 10ml - Sunscreen',
'variation' => '01 Light',
'link' => 'https://shopee.co.id/Madame-Gie-Protect-Me-Let\'s-Glow-Tinted-Sunscreen-SPF-50-PA-10ml-Sunscreen-i.744873.12262909142?sp_atk=b1741e8e-c096-4491-a8a6-b68b3b863a4e&xptdk=b1741e8e-c096-4491-a8a6-b68b3b863a4e',
'description' => 'Madame Protect Me Let’s Glow Tinted Sunscreen adalah tabir surya SPF 50 PA ++++ dengan formula yang ringan untuk memberikan perlindungan lebih tinggi terhadap paparan sinar matahari serta membantu meratakan warna kulit dengan hasil akhir yang natural, tersedia dalam 3 shade yaitu light, medium dan deep sehingga dapat disesuaikan dengan warna kulit.

Keunggulan:
-- Melindungi kulit dari paparan sinar matahari dengan SPF 50 PA ++++
- Sheer to Medium Coverage
- Dewy Finish
- Tersedia 3 shade yang cocok untuk warna kulit terang sampai gelap
- Formula ringan
- Mudah dibaurkan secara merata
- Mengandung Glycerin sebagai humektan alami yang menjaga kulit tetap terhidrasi 
- No Fragrance (Sensitive Skin Friendly)
- Aman untuk ibu hamil',
'price' => 16700,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
336 => 
array (
'id' => 337,
'brand_id' => 26,
'name' => 'Madame Gie Protect Me Let\'s Glow Tinted Sunscreen SPF 50 PA ++++ - 10ml - Sunscreen',
'variation' => '02 Medium',
'link' => 'https://shopee.co.id/Madame-Gie-Protect-Me-Let\'s-Glow-Tinted-Sunscreen-SPF-50-PA-10ml-Sunscreen-i.744873.12262909142?sp_atk=b1741e8e-c096-4491-a8a6-b68b3b863a4e&xptdk=b1741e8e-c096-4491-a8a6-b68b3b863a4e',
'description' => 'Madame Protect Me Let’s Glow Tinted Sunscreen adalah tabir surya SPF 50 PA ++++ dengan formula yang ringan untuk memberikan perlindungan lebih tinggi terhadap paparan sinar matahari serta membantu meratakan warna kulit dengan hasil akhir yang natural, tersedia dalam 3 shade yaitu light, medium dan deep sehingga dapat disesuaikan dengan warna kulit.

Keunggulan:
-- Melindungi kulit dari paparan sinar matahari dengan SPF 50 PA ++++
- Sheer to Medium Coverage
- Dewy Finish
- Tersedia 3 shade yang cocok untuk warna kulit terang sampai gelap
- Formula ringan
- Mudah dibaurkan secara merata
- Mengandung Glycerin sebagai humektan alami yang menjaga kulit tetap terhidrasi 
- No Fragrance (Sensitive Skin Friendly)
- Aman untuk ibu hamil',
'price' => 16700,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
337 => 
array (
'id' => 338,
'brand_id' => 26,
'name' => 'Madame Gie Protect Me Let\'s Glow Tinted Sunscreen SPF 50 PA ++++ - 10ml - Sunscreen',
'variation' => '03 Deep',
'link' => 'https://shopee.co.id/Madame-Gie-Protect-Me-Let\'s-Glow-Tinted-Sunscreen-SPF-50-PA-10ml-Sunscreen-i.744873.12262909142?sp_atk=b1741e8e-c096-4491-a8a6-b68b3b863a4e&xptdk=b1741e8e-c096-4491-a8a6-b68b3b863a4e',
'description' => 'Madame Protect Me Let’s Glow Tinted Sunscreen adalah tabir surya SPF 50 PA ++++ dengan formula yang ringan untuk memberikan perlindungan lebih tinggi terhadap paparan sinar matahari serta membantu meratakan warna kulit dengan hasil akhir yang natural, tersedia dalam 3 shade yaitu light, medium dan deep sehingga dapat disesuaikan dengan warna kulit.

Keunggulan:
-- Melindungi kulit dari paparan sinar matahari dengan SPF 50 PA ++++
- Sheer to Medium Coverage
- Dewy Finish
- Tersedia 3 shade yang cocok untuk warna kulit terang sampai gelap
- Formula ringan
- Mudah dibaurkan secara merata
- Mengandung Glycerin sebagai humektan alami yang menjaga kulit tetap terhidrasi 
- No Fragrance (Sensitive Skin Friendly)
- Aman untuk ibu hamil',
'price' => 16700,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
338 => 
array (
'id' => 339,
'brand_id' => 16,
'name' => 'Garnier Super UV Spot Proof SPF 50+ PA+++ 30ml - Skincare Wajah Sunscreen Sunblock (Light complete)',
'variation' => 'Matte Sunscrn 30ml',
'link' => 'https://shopee.co.id/Garnier-Super-UV-Spot-Proof-SPF-50-PA-30ml-Skincare-Wajah-Sunscreen-Sunblock-(Light-complete)-i.744873.6662642821?sp_atk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3&xptdk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3',
'description' => 'BARU! Garnier Light Complete Super UV Spot*-Proof Sunscreen. Berikan kulitmu PERLINDUNGAN GANDA dari paparan SINAR UV dan munculnya NODA HITAM*. 

Formulanya diperkaya dengan : 
- SPF 50 + : Perlindungan kulit tertinggi dari sinar UVA & UVB untuk lawan penggelapan kulit, timbulnya noda hitam*&kusam
- Vitamin C** : Cerahkan kulit & samarkan noda hitam*
- Vitamin E : Lindungi kulit dari sinar matahari dan debu polusi

Chemical Sunscreen
Natural Finish: Hasil akhir tidak terlalu matte, namun tidak terlalu dewy. Cocok untuk semua jenis kulit.
Matte Finish: Hasil akhir matte, disarankan untuk jenis kulit berminiyak agar wajah bebas kilap

Cara Pakai :
Oleskan secara merata pada wajah & leher yang sudah dibersihkan. Hindari area mata. Gunakan setiap hari untuk perlindungan dari UV dan base make up mu.

Cerah & Terlindungi, Bye bye Belang!',
'price' => 49900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:07',
'updated_at' => '2022-06-27 15:42:07',
),
339 => 
array (
'id' => 340,
'brand_id' => 16,
'name' => 'Garnier Super UV Spot Proof SPF 50+ PA+++ 30ml - Skincare Wajah Sunscreen Sunblock (Light complete)',
'variation' => 'Natural Sanscrn 30ml',
'link' => 'https://shopee.co.id/Garnier-Super-UV-Spot-Proof-SPF-50-PA-30ml-Skincare-Wajah-Sunscreen-Sunblock-(Light-complete)-i.744873.6662642821?sp_atk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3&xptdk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3',
'description' => 'BARU! Garnier Light Complete Super UV Spot*-Proof Sunscreen. Berikan kulitmu PERLINDUNGAN GANDA dari paparan SINAR UV dan munculnya NODA HITAM*. 

Formulanya diperkaya dengan : 
- SPF 50 + : Perlindungan kulit tertinggi dari sinar UVA & UVB untuk lawan penggelapan kulit, timbulnya noda hitam*&kusam
- Vitamin C** : Cerahkan kulit & samarkan noda hitam*
- Vitamin E : Lindungi kulit dari sinar matahari dan debu polusi

Chemical Sunscreen
Natural Finish: Hasil akhir tidak terlalu matte, namun tidak terlalu dewy. Cocok untuk semua jenis kulit.
Matte Finish: Hasil akhir matte, disarankan untuk jenis kulit berminiyak agar wajah bebas kilap

Cara Pakai :
Oleskan secara merata pada wajah & leher yang sudah dibersihkan. Hindari area mata. Gunakan setiap hari untuk perlindungan dari UV dan base make up mu.

Cerah & Terlindungi, Bye bye Belang!',
'price' => 62000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
340 => 
array (
'id' => 341,
'brand_id' => 16,
'name' => 'Garnier Super UV Spot Proof SPF 50+ PA+++ 30ml - Skincare Wajah Sunscreen Sunblock (Light complete)',
'variation' => 'Matte Sunscrn 15ml',
'link' => 'https://shopee.co.id/Garnier-Super-UV-Spot-Proof-SPF-50-PA-30ml-Skincare-Wajah-Sunscreen-Sunblock-(Light-complete)-i.744873.6662642821?sp_atk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3&xptdk=9fa6f5c3-ef44-4200-b7da-8225d93f62b3',
'description' => 'BARU! Garnier Light Complete Super UV Spot*-Proof Sunscreen. Berikan kulitmu PERLINDUNGAN GANDA dari paparan SINAR UV dan munculnya NODA HITAM*. 

Formulanya diperkaya dengan : 
- SPF 50 + : Perlindungan kulit tertinggi dari sinar UVA & UVB untuk lawan penggelapan kulit, timbulnya noda hitam*&kusam
- Vitamin C** : Cerahkan kulit & samarkan noda hitam*
- Vitamin E : Lindungi kulit dari sinar matahari dan debu polusi

Chemical Sunscreen
Natural Finish: Hasil akhir tidak terlalu matte, namun tidak terlalu dewy. Cocok untuk semua jenis kulit.
Matte Finish: Hasil akhir matte, disarankan untuk jenis kulit berminiyak agar wajah bebas kilap

Cara Pakai :
Oleskan secara merata pada wajah & leher yang sudah dibersihkan. Hindari area mata. Gunakan setiap hari untuk perlindungan dari UV dan base make up mu.

Cerah & Terlindungi, Bye bye Belang!',
'price' => 27500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
341 => 
array (
'id' => 342,
'brand_id' => 57,
'name' => 'Acnes UV Tint Spf 35 PA+++ 30gr | SunScreen | Sun Screen',
'variation' => 'UV Tint NaturalBeige',
'link' => 'https://shopee.co.id/Acnes-UV-Tint-Spf-35-PA-30gr-SunScreen-Sun-Screen-i.744873.1705887017?sp_atk=34206477-9085-4e88-8948-fce2cdfe6d54&xptdk=34206477-9085-4e88-8948-fce2cdfe6d54',
'description' => 'Lotion yang melindungi kulit dari sinar UV dengan SPF 30 sehingga dapat digunakan sebelum beraktivitas outdoor.

- Melawan bakteri penyebab jerawat.
- Mengandung Vitamin B6, E dan turunan Vitamin C sebagai nutrisi yang dibutuhkan kulit serta membuat kulit menjadi lembut.
- Dapat digunakan sebagai dasar make up yang dapat meneyrap minyak.
- Menyamarkan noda pada kulit, dapat digunakan sebagai alas bedak.

CARA PAKAI :
- Kocok dahulu, kemudian tuangkan ke telapak tangan dan oleskan ke seluruh wajah dengan lembut dan merata.',
'price' => 39000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
342 => 
array (
'id' => 343,
'brand_id' => 57,
'name' => 'Acnes UV Tint Spf 35 PA+++ 30gr | SunScreen | Sun Screen',
'variation' => 'UV Tint NaturalGreen',
'link' => 'https://shopee.co.id/Acnes-UV-Tint-Spf-35-PA-30gr-SunScreen-Sun-Screen-i.744873.1705887017?sp_atk=34206477-9085-4e88-8948-fce2cdfe6d54&xptdk=34206477-9085-4e88-8948-fce2cdfe6d54',
'description' => 'Lotion yang melindungi kulit dari sinar UV dengan SPF 30 sehingga dapat digunakan sebelum beraktivitas outdoor.

- Melawan bakteri penyebab jerawat.
- Mengandung Vitamin B6, E dan turunan Vitamin C sebagai nutrisi yang dibutuhkan kulit serta membuat kulit menjadi lembut.
- Dapat digunakan sebagai dasar make up yang dapat meneyrap minyak.
- Menyamarkan noda pada kulit, dapat digunakan sebagai alas bedak.

CARA PAKAI :
- Kocok dahulu, kemudian tuangkan ke telapak tangan dan oleskan ke seluruh wajah dengan lembut dan merata.',
'price' => 39000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
343 => 
array (
'id' => 344,
'brand_id' => 20,
'name' => 'Hanasui Collagen Water Sunscreen - 30ml',
'variation' => 'Sunscreen SPF50 30ml',
'link' => 'https://shopee.co.id/Hanasui-Collagen-Water-Sunscreen-30ml-i.744873.15451274615?sp_atk=bdffb207-1f9f-46a3-875c-17114e6b3e7f&xptdk=bdffb207-1f9f-46a3-875c-17114e6b3e7f',
'description' => 'Hanasui Collagen Water Sunscreen memiliki Strong Ingredients yaitu :       
SPF 50 PA ++++ Broad spectrum Protection lebih optimal menjaga kulit dari sinar UV

Keunggulan :
- Broad Spectrum Protection (lebih optimal menjaga kulit dari sinar UV)
- Melindungi kulit sampai 98% dari paparan sinar UVB
- Memberikan perlindungan Optimal terhadap kulit dari paparan sinar UVA yang dapat menyebabkan penuaan dini 
pada  kulit
- Melindungi kulit dari paparan Polusi hingga PM2,5 (polusi dengan ukuran partikel yang sangat halus)
- Mengandung Mugwort extract, Vitamin E dan Sodium Hyaluronate
- Memberikan kelembapan 3x lebih baik dari glycerine (Efek Moisturizing)
- Formula ringan dan cepat meresap 
- Tidak lengket dan tidak menimbulkan whitecast
-  Dermatologically Tested dan Cocok untuk semua jenis kulit

INGREDIENTS :
1.  SPF 50 
- Broad Spectrum Protection (lebih optimal menjaga kulit dari sinar UV)
-  Melindungi kulit sampai 98% dari paparan sinar UVB
- Memberi perlindungan agar kulit tidak terbakar dan kusam akibat paparan sinar UV

2.  PA ++++
- Memberikan perlindungan optimal terhadap kulit dari paparan sinar UVA yang dapat menyebabkan penuaan dini 

3.   PollustopTM 
- Melindungi kulit dari polusi hingga PM2,5 (polusi dengan ukuran partikel yang sangat halus)

4. Fermentation Collagen Water ( Collagen Ferment Filtrate )
-  Fermentasi Collagen Water yang memberikan kelembapan kulit lebih maksimal
- Memberikan kelembapan 3x lebih baik dari glycerine (Efek Moisturizing)

5.  Mugwort (Artemisia) Extract
- Anti Inflamasi dan Anti Oksidan 
- Mencegah kerusakan kulit akibat sinar UV 
- Meredakan kemerahan pada kulit akibat sinar UV
-  Memperkuat skin barrier dan Menghaluskan kulit

6. Vitamin E & Sodium Hyaluronate
- Anti Oksidan, melembapkan, menghidrasi serta menghaluskan kulit
- Mencegah terjadinya kemerahan pada kulit akibat paparan sinar',
'price' => 29900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
344 => 
array (
'id' => 345,
'brand_id' => 11,
'name' => 'Wardah Sun Care Sunscreen Gel SPF 30  40ml | Aqua Fresh Essence | Active Protection Serum UV | Light Matte Sun Stick | tntbeauty TnT Beauty Shop',
'variation' => 'Matte Sun StickSPF50',
'link' => 'https://shopee.co.id/Wardah-Sun-Care-Sunscreen-Gel-SPF-30-40ml-Aqua-Fresh-Essence-Active-Protection-Serum-UV-Light-Matte-Sun-Stick-tntbeauty-TnT-Beauty-Shop-i.744873.1556637413?sp_atk=a62f2ac2-3eaf-46e6-8665-ff8d3aafaef8&xptdk=a62f2ac2-3eaf-46e6-8665-ff8d3aafaef8',
'description' => 'Double action formula untuk melindungi kulit dari paparan sinar matahari, sekaligus melembabkan kulit. Diformulasikan dalam bentuk gel yang ringan dan lembut sehingga nyaman digunakan dan tidak memberikan efek lengket bahkan untuk kulit berminyak. Nyaman digunakan kapan saja dan praktis untuk dibawa kemana saja. Mengandung ekstrak aloe vera yang mengandung 99% air dengan pH 4,5 membantu melindungi kulit dari kekeringan.

Manfaat:
- Formulasi terkini dari tabir surya berbahan dasar gel dengan aplikasi yang ringan dan tidak lengket     serta nyaman di kulit.
- Diperkaya dengan SPF30 untuk perlindungan kulit dari sinar matahari yang lebih maksimal.
- Dilengkapi dengan double protection UVA dan UVB, Aloe vera dan pro vitamin B5 sebagai  moisturizer, dan vitamin E sebagai antioksidan.
- Memberikan sensasi dingin, lembut dan nyaman pada kulit dalam bentuk gel yang ringan dan tidak  lengket, bahkan untuk kulit berminyak.
- Mudah meresap dan non comedogenic.

- Wardah UV Shield Aqua Fresh Essence SPF 50 PA++++ (30mL)
Broad Spectrum Protection
Melindungi dari UVA, UVB, dan blue light
0% Alcohol
Inovasi formulasi 0% alkohol yang tetap ringan dan tidak lengket.
Watery Hydration
Aquafused Technology, kapsulasi kristal air yg bekerja dgn melepaskan kandungan air secara perlahan ke dalam kulit sehingga kulit tetap terhidrasi.
Soothing Sensation
Bahan aktif yang menghalau kemerahan pada wajah akibat paparan sinar matahari.
Pollution Protection
Melindungi kulit dari polusi saat berkegiatan aktif di luar ruangan
Non Comedogenic, All Skin Type

- Wardah UV Shield Active Protection Serum SPF 50 PA++++ (35mL, waterproof)
Broad Spectrum Protection
Melindungi dari UVA, UVB, dan blue light
0% Alcohol
Inovasi formulasi 0% alkohol yang tetap ringan dan tidak lengket.
Waterproof Active
Diformulasikan dengan bahan aktif waterproof yang menjaga agar sunscreen tidak mudah luntur meskipun terkena air 
maupun keringat berlebih.
Soothing Sensation
Bahan aktif yang menghalau kemerahan pada wajah akibat paparan sinar matahari.
Non Comedogenic, All Skin Type',
'price' => 74900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
345 => 
array (
'id' => 346,
'brand_id' => 50,
'name' => 'Emina Sun Protection SPF 30 PA+++ 60mL | Emina Sun Battle SPF 45 PA+++ 30 ml | Sunscreen UV | tntbeautyshop TnT Beauty Shop',
'variation' => 'Sun Battle SPF 30',
'link' => 'https://shopee.co.id/Emina-Sun-Protection-SPF-30-PA-60mL-Emina-Sun-Battle-SPF-45-PA-30-ml-Sunscreen-UV-tntbeautyshop-TnT-Beauty-Shop-i.744873.600387922?sp_atk=35528746-6695-474f-b279-89b46dabb7a0&xptdk=35528746-6695-474f-b279-89b46dabb7a0',
'description' => 'Emina Sun Protection dengan SPF 30 dan PA +++ memiliki tekstur ringan membantu melindungi kulitmu dari sinar UV di hari yang aktif. Diperkaya dengan Aloe Vera extract dan emolient untuk memberikan kelembaban ekstra pada kulit.

Light-feel Sun Protection with SPF 30 and PA+++ to help protect your skin. Enriched with Aloe vera extract and emollient to keep your skin hydrated.
',
'price' => 21990,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
346 => 
array (
'id' => 347,
'brand_id' => 50,
'name' => 'Emina Sun Protection SPF 30 PA+++ 60mL | Emina Sun Battle SPF 45 PA+++ 30 ml | Sunscreen UV | tntbeautyshop TnT Beauty Shop',
'variation' => 'Sun Battle SPF45',
'link' => 'https://shopee.co.id/Emina-Sun-Protection-SPF-30-PA-60mL-Emina-Sun-Battle-SPF-45-PA-30-ml-Sunscreen-UV-tntbeautyshop-TnT-Beauty-Shop-i.744873.600387922?sp_atk=35528746-6695-474f-b279-89b46dabb7a0&xptdk=35528746-6695-474f-b279-89b46dabb7a0',
'description' => 'Emina Sun Battle SPF 45 PA+++ dengan tekstur ringan yang cepat meresap, siap melindungi kulitmu dari paparan sinar UV. Mengandung Grape Leaf Extract yang dikenal sebagai bahan anti-polusi dengan mekanisme kerja antioksidan, cocok digunakan untuk aktivitas outdoor maupun penggunaan sehari-hari.',
'price' => 38000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
347 => 
array (
'id' => 348,
'brand_id' => 19,
'name' => 'Azarine Aqua Essence Sun Shield Serum SPF 50 PA++++ 100ml | Azarine Sun UV Serum Sunscreen GEL SPF45 | AZARINE Hydramax-C Suncreen Serum SPF 50 | AZARINE Tone Up Mineral Suncreen Serum SPF 50 | AZARINE Hydrasoothe Sunscreen Mist SPF 50 PA++++',
'variation' => 'Sun Shield Serum',
'link' => 'https://shopee.co.id/Azarine-Aqua-Essence-Sun-Shield-Serum-SPF-50-PA-100ml-Azarine-Sun-UV-Serum-Sunscreen-GEL-SPF45-AZARINE-Hydramax-C-Suncreen-Serum-SPF-50-AZARINE-Tone-Up-Mineral-Suncreen-Serum-SPF-50-AZARINE-Hydrasoothe-Sunscreen-Mist-SPF-50-PA--i.744873.9140858092?sp_atk=52f2255a-5001-4732-b541-1fbb925304f1&xptdk=52f2255a-5001-4732-b541-1fbb925304f1',
'description' => 'Sunscreen gel spf 45 memang mengalami upgrade formula, stock lama (tulisan organic sunscreen).
Terupgrade menjadi sunscreen yang memiliki manfaat tambahan yaitu blue light protection yaitu melindungi kulit dari sinar radiasi elektronik seperti hp & laptop (tulisan di bagian bawah), tidak menggunakan kemasan box lagi dan ada aluminimum sealnya.

Tabir surya untuk tubuh yang dapat di gunakan setiap hari baik untuk aktivitas Outdoor maupun Indoor. Dengan tekstur SANGAT RINGAN, DINGIN & NO WHITECAST / efek dempul pada kulit. 
di formulasikan dengan kandungan antioksidan tinggi buah semangka, air kelapa hijau dan buah delima untuk MENDINGINKAN, MELINDUNGI dan MENUTRISI kulit dari paparan sinar UV matahari. 

Cara pakai : Oleskan tipis merata pada bagian wajah, leher dan bagian tubuh lainnya yang beresiko terpapar sinar matahari secara langsung. 15 menit sebelum melakukan aktivitas luar ruangan.',
'price' => 63900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
348 => 
array (
'id' => 349,
'brand_id' => 19,
'name' => 'Azarine Aqua Essence Sun Shield Serum SPF 50 PA++++ 100ml | Azarine Sun UV Serum Sunscreen GEL SPF45 | AZARINE Hydramax-C Suncreen Serum SPF 50 | AZARINE Tone Up Mineral Suncreen Serum SPF 50 | AZARINE Hydrasoothe Sunscreen Mist SPF 50 PA++++',
'variation' => 'Azarine Sunscren Gel',
'link' => 'https://shopee.co.id/Azarine-Aqua-Essence-Sun-Shield-Serum-SPF-50-PA-100ml-Azarine-Sun-UV-Serum-Sunscreen-GEL-SPF45-AZARINE-Hydramax-C-Suncreen-Serum-SPF-50-AZARINE-Tone-Up-Mineral-Suncreen-Serum-SPF-50-AZARINE-Hydrasoothe-Sunscreen-Mist-SPF-50-PA--i.744873.9140858092?sp_atk=52f2255a-5001-4732-b541-1fbb925304f1&xptdk=52f2255a-5001-4732-b541-1fbb925304f1',
'description' => 'Terupgrade menjadi sunscreen yang memiliki manfaat tambahan yaitu blue light protection yaitu melindungi kulit dari sinar radiasi elektronik seperti hp & laptop (tulisan di bagian bawah), tidak menggunakan kemasan box lagi dan ada aluminimum sealnya.

Tabir surya untuk tubuh yang dapat di gunakan setiap hari baik untuk aktivitas Outdoor maupun Indoor. Dengan tekstur SANGAT RINGAN, DINGIN & NO WHITECAST / efek dempul pada kulit. 
di formulasikan dengan kandungan antioksidan tinggi buah semangka, air kelapa hijau dan buah delima untuk MENDINGINKAN, MELINDUNGI dan MENUTRISI kulit dari paparan sinar UV matahari. 
Cara pakai : Oleskan tipis merata pada bagian wajah, leher dan bagian tubuh lainnya yang beresiko terpapar sinar matahari secara langsung. 15 menit sebelum melakukan aktivitas luar ruangan.',
'price' => 55000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
349 => 
array (
'id' => 350,
'brand_id' => 19,
'name' => 'Azarine Aqua Essence Sun Shield Serum SPF 50 PA++++ 100ml | Azarine Sun UV Serum Sunscreen GEL SPF45 | AZARINE Hydramax-C Suncreen Serum SPF 50 | AZARINE Tone Up Mineral Suncreen Serum SPF 50 | AZARINE Hydrasoothe Sunscreen Mist SPF 50 PA++++',
'variation' => 'Tone Up Sun Serum',
'link' => 'https://shopee.co.id/Azarine-Aqua-Essence-Sun-Shield-Serum-SPF-50-PA-100ml-Azarine-Sun-UV-Serum-Sunscreen-GEL-SPF45-AZARINE-Hydramax-C-Suncreen-Serum-SPF-50-AZARINE-Tone-Up-Mineral-Suncreen-Serum-SPF-50-AZARINE-Hydrasoothe-Sunscreen-Mist-SPF-50-PA--i.744873.9140858092?sp_atk=52f2255a-5001-4732-b541-1fbb925304f1&xptdk=52f2255a-5001-4732-b541-1fbb925304f1',
'description' => 'Tabir surya untuk menenangkan, memperbaiki dan melindungi kulit dari pengaruh buruk sinar matahari. Diformulasikan dengan gabungan bahan aktif untuk memberi efek tampilan cerah seketika atau tone up pada kulit serta melembabkan agar kulit kenyal.

Cara Pakai : 
Oleskan merata ke bagian wajah, leher dan tangan atau bagian tubuh lainnya yang mungkin terkena sinar matahari, 15 menit sebelum melakukan aktifitas di luar ruangan.',
'price' => 59500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
350 => 
array (
'id' => 351,
'brand_id' => 19,
'name' => 'Azarine Aqua Essence Sun Shield Serum SPF 50 PA++++ 100ml | Azarine Sun UV Serum Sunscreen GEL SPF45 | AZARINE Hydramax-C Suncreen Serum SPF 50 | AZARINE Tone Up Mineral Suncreen Serum SPF 50 | AZARINE Hydrasoothe Sunscreen Mist SPF 50 PA++++',
'variation' => 'Hydramax-C Sun Serum',
'link' => 'https://shopee.co.id/Azarine-Aqua-Essence-Sun-Shield-Serum-SPF-50-PA-100ml-Azarine-Sun-UV-Serum-Sunscreen-GEL-SPF45-AZARINE-Hydramax-C-Suncreen-Serum-SPF-50-AZARINE-Tone-Up-Mineral-Suncreen-Serum-SPF-50-AZARINE-Hydrasoothe-Sunscreen-Mist-SPF-50-PA--i.744873.9140858092?sp_atk=52f2255a-5001-4732-b541-1fbb925304f1&xptdk=52f2255a-5001-4732-b541-1fbb925304f1',
'description' => 'Tabir surya dalam bentuk gel untuk melembabkan dan melindungi kulit dari pengaruh buruk sinar matahari, sinar bluelight dan polusi. Di formulasikan dengan berbagai ukuran Hyaluronic Acid untuk melembabkan agar kulit kenyal. Kandungan vit C & E sebagai antioksidan. Tekstur gel ini dingin dan ringan, sehingga mudah diserap & tidak meninggalkan whitecast pada kulit.

Cara Pakai :
Oleskan pada wajah sebanyak dua jari sebelum menggunakan makeup',
'price' => 53000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
351 => 
array (
'id' => 352,
'brand_id' => 11,
'name' => 'Wardah UV Shield Essential Sunscreen Gel SPF 30 PA+++ 40ml',
'variation' => 'SunScreen Gel SPF 30',
'link' => 'https://shopee.co.id/Wardah-UV-Shield-Essential-Sunscreen-Gel-SPF-30-PA-40ml-i.744873.15804047621?sp_atk=11e4e803-4f90-402d-870f-df81f8566c74&xptdk=11e4e803-4f90-402d-870f-df81f8566c74',
'description' => 'Sunscreen dengan Broad Spectrum Protection, 30x lebih OPTIMAL menjaga kulit dari sinar UV A/UV B serta pancaran blue light berlebih.

- Inovasi formula 0% alkohol
- RIngan tanpa rasa lengket, nyaman digunakan sehari-hari
- Vitamin E dan Pro Vitamin B5 membantu menutrisi kulit dan melindungi dari radikal bebas

Cara Pakai:
Aplikasikan secara merata pada wajah dan leher sebelum beraktivitas. Ulangi pemakaian jika diperlukan. Hindari paparan sinar matahari yang terlalu lama meskin seudah menggunakan tabir surya.',
'price' => 25500,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
352 => 
array (
'id' => 353,
'brand_id' => 18,
'name' => 'MAKE OVER Powerskin Urban Defense Sunscreen 40ml - Sunscreen Wajah',
'variation' => 'Urban Def Sunscreen',
'link' => 'https://shopee.co.id/MAKE-OVER-Powerskin-Urban-Defense-Sunscreen-40ml-Sunscreen-Wajah-i.744873.13484885818?sp_atk=fba641c3-a21f-4253-86e2-0febd8a0364f&xptdk=fba641c3-a21f-4253-86e2-0febd8a0364f',
'description' => 'Make Over Urban Defense Sunscreen adalah chemical sunscreen broad spectrum dengan SPF50/PA++++*. Dilengkapi dengan Color-Blend Technology, sunscreen dapat menyatu dengan warna natural kulit di seluruh skin tone tanpa meninggalkan white-cast. Mampu melindungi wajah dari paparan berlebih radiasi UV-A & UV-B dan dari polusi radikal bebas. Dilengkapi dengan Skin-Shield Technology untuk mengurangi resiko muncul jerawat dan komedo, serta memperkuat skin barrier, bahkan untuk para pengguna masker setiap hari. Dengan formula yang ringan dan mudah dibaurkan, menghasilkan tampilan wajah yang tampak sehat, kulit terasa halus dan nyaman digunakan sepanjang hari. Cocok untuk semua jenis kulit bahkan untuk kulit yang rentan berjerawat dikarenakan memiliki formula non-acnegenic & non-comedogenic.
*Berdasarkan hasil uji in-vitro

- Keunggulan
1. Invisible Zero Whtitecast on All Skin Tone
Memiliki warna translucent beige yang menyatu sempurna, menjadi transparan dan menghasilkan tampilan tanpa whitecast di semua skin tone.
2. Full Protection
Perlindungan optimal dengan proteksi terhadap UV-A & UV-B SPF50/PA++++ yang melindungi wajah dari polusi dan radikal bebas, 3. Anti Blue Light & Anti Pollution.
4. Smooth Healthy-Skin
Formula yang mudah dibaurkan menghasilkan tampilan kulit wajah yang smooth dan sehat dengan semi-matte finish. Tekstur ringan, tidak greasy/lengket dan tidak pilling (ber-residu) sangat cocok untuk digunakan dibawah makeup.
5. Extra Nourishing Ingredients
Mengandung ekstrak chamomile dan mugwort yang dapat menutrisi untuk kulit yang sehat, lembab dan kenyal.
6. Skin Shield Technology
Mampu menjaga dan mencegah kulit dari jerawat dan komedo akibat penyumbatan pori-pori
7. Ultra-Thin Layer
Ringan dan tidak berat di kulit sehingga aman digunakan bagi kulit yang rentan berjerawat
8. Non-Acnegenic & Non-Comedogenic
9. Dermatologically Tested
10. Silicone-Free
Aman digunakan bagi kulit yang rentan berjerawat
11. Ethanol-Free
Aman digunakan bagi kulit yang sensitif',
'price' => 85000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
353 => 
array (
'id' => 354,
'brand_id' => 74,
'name' => 'Vaseline UV Protect Sun Stick 15g',
'variation' => 'Sun Stick 15gr',
'link' => 'https://shopee.co.id/Vaseline-UV-Protect-Sun-Stick-15g-i.744873.15001989296?sp_atk=566a22e8-ce39-47b1-b6f1-d31b5cac4e9b&xptdk=566a22e8-ce39-47b1-b6f1-d31b5cac4e9b',
'description' => 'Tekstur yang lembut tanpa terasa lengket di kulit! Vaseline Daily Sun Care UV protection stick mudah dibawa kemanapun dan dapat digunakan kapanpun. Dengan formula Moisturizing Pet Jelly Vaseline, mampu membentuk lapisan yang melembapkan sekaligus melindungi kulit dari panas sinar UV. Gunakan Vaseline Daily Sun Care UV Protection Sun Stick untuk terus menjaga kulitmu tetap sehat dan lembap.',
'price' => 108000,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
354 => 
array (
'id' => 355,
'brand_id' => 76,
'name' => 'LABORE BiomeProtect Physical Sunscreen 10ml - 30ml - Mineral Sunscreen Kulit Sensitif',
'variation' => 'Sunscreen 10ml',
'link' => 'https://shopee.co.id/LABORE-BiomeProtect-Physical-Sunscreen-10ml-30ml-Mineral-Sunscreen-Kulit-Sensitif-i.744873.13540956099?sp_atk=c2348d87-76cf-4b11-a762-8d1a2aa5e29a&xptdk=c2348d87-76cf-4b11-a762-8d1a2aa5e29a',
'description' => 'Labore Biome Protect TM Physical Sunscreen SPF 45 PA +++ diformulasikan dengan 100% mineral filter (Zinc Oxide dan Titanium Oxide) yang lebih cocok (minim risiko alergi) untuk kulit sensitif tropis dibandingkan chemical sunscreen
(jenis sunscreen pada umumnya). Diperkaya dengan Microbiome Technology TM dan Broad Spectrum Protection yang efektif menangkal sinar UVA UVB, blue light, dan radikal bebas dari polusi hingga 98%.

How to Use : 
1. Gunakan paling sedikit 2 ruas jari untuk kebutuhan sunscreen setiap harinya.
2. Gunakan kembali setelah 3-4 jam, setelah berkeringat, berenang, atau aktivitas luar ruangan lainnya.',
'price' => 49300,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
355 => 
array (
'id' => 356,
'brand_id' => 76,
'name' => 'LABORE BiomeProtect Physical Sunscreen 10ml - 30ml - Mineral Sunscreen Kulit Sensitif',
'variation' => 'Sunscreen 30ml',
'link' => 'https://shopee.co.id/LABORE-BiomeProtect-Physical-Sunscreen-10ml-30ml-Mineral-Sunscreen-Kulit-Sensitif-i.744873.13540956099?sp_atk=c2348d87-76cf-4b11-a762-8d1a2aa5e29a&xptdk=c2348d87-76cf-4b11-a762-8d1a2aa5e29a',
'description' => 'Labore Biome Protect TM Physical Sunscreen SPF 45 PA +++ diformulasikan dengan 100% mineral filter (Zinc Oxide dan Titanium Oxide) yang lebih cocok (minim risiko alergi) untuk kulit sensitif tropis dibandingkan chemical sunscreen
(jenis sunscreen pada umumnya). Diperkaya dengan Microbiome Technology TM dan Broad Spectrum Protection yang efektif menangkal sinar UVA UVB, blue light, dan radikal bebas dari polusi hingga 98%.

How to Use : 
1. Gunakan paling sedikit 2 ruas jari untuk kebutuhan sunscreen setiap harinya.
2. Gunakan kembali setelah 3-4 jam, setelah berkeringat, berenang, atau aktivitas luar ruangan lainnya.',
'price' => 123100,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
356 => 
array (
'id' => 357,
'brand_id' => 11,
'name' => 'Wardah UV Shield Light Matte Sun Stick 22gr - Sun Screen SPF 50 PA++++',
'variation' => 'Matte Sun Stick',
'link' => 'https://shopee.co.id/Wardah-UV-Shield-Light-Matte-Sun-Stick-22gr-Sun-Screen-SPF-50-PA--i.744873.11350107358?sp_atk=d10d806c-ba75-4eb5-8f1a-af14545f22fb&xptdk=d10d806c-ba75-4eb5-8f1a-af14545f22fb',
'description' => 'Wardah UV Shield Light Matte Sun Stick SPF 50 PA ++++ adalah inovasi sunscreen dalam bentuk stick dengan kemasan yang on the go, diformulasikan dengan Broad Spectrum Protection sehingga 50x lebih optimal menjaga kulit dari sinar UV A/ UV B serta pancaran blue light berlebih. Formula terasa ringan dan tidak lengket digunakan, walaupun tidak mengandung alkohol. Diformulasikan dengan oil absorber yang menghasilkan tampilan wajah yang matte dan smooth, sehingga produk dapat digunakan juga sebagai primer sebelum menggunakan make up (membuat make up lebih menyatu dan tahan lama hingga 8 jam).',
'price' => 74900,
'category' => 'Sunscreen',
'created_at' => '2022-06-27 15:42:08',
'updated_at' => '2022-06-27 15:42:08',
),
357 => 
array (
'id' => 358,
'brand_id' => 17,
'name' => 'Y.O.U Radiance Up! Deep Moisturizing Cream - Ceramide + Snow Mushroom Deep Moisturizing Cream | YOU Moisturizing Cream',
'variation' => 'Radiance Up! Cream',
'link' => 'https://shopee.co.id/Y.O.U-Radiance-Up!-Deep-Moisturizing-Cream-Ceramide-Snow-Mushroom-Deep-Moisturizing-Cream-YOU-Moisturizing-Cream-i.744873.21609884296?sp_atk=edb21bbc-2f70-43b7-9ef4-3e650323c62b&xptdk=edb21bbc-2f70-43b7-9ef4-3e650323c62b',
'description' => 'Kalau kandungan di dalam Radiance Up! Deep Moisturizing Cream dilengkapi dengan Ceramide 1-3-6, Powerful Brightening System, dan Snow Mushroom Extract yang membuat kulit menjadi lembab dan sehat plumpy!',
'price' => 105200,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:20',
'updated_at' => '2022-06-27 15:42:20',
),
358 => 
array (
'id' => 359,
'brand_id' => 8,
'name' => 'ElsheSkin Deep Hydration Calming Moisturizer 30ml',
'variation' => 'DeepHydrationCalming',
'link' => 'https://shopee.co.id/ElsheSkin-Deep-Hydration-Calming-Moisturizer-30ml-i.744873.16216187915?sp_atk=00f8167d-151c-48c7-a0ba-ac03d0c077b5&xptdk=00f8167d-151c-48c7-a0ba-ac03d0c077b5',
'description' => 'Deep Hydrating Calming Moisturizer
- Hydrate, Soothing and Moisturize
- Mencegah TEWL ( Transepidermal water loss) hingga 13,5%
- Memberi dan mengunci kelembapan selama 72 jam
- Mengurangi dan merawat kulit sensitif (gatal, kemerahan, mengelupas, iritasi, dll)
- Melindungi, memperbaiki dan memperkuat skin’s barrier
- Membuat kulit sehat, glowing, kenyal dan halus
- Dapat digunakan untuk eczema, dermatitis dan rosacea

Kandungan :
Deep Hydration Calming Moisturizer
- AquaxylTM
- Ceramide
- Calendula Flower
- Royal Jelly
- Triple Cica
- Saccharide Isomerate
- Niacinamide
- Peptide
- Zinc Gluconate
- Korean Herb Purslane',
'price' => 129000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
359 => 
array (
'id' => 360,
'brand_id' => 45,
'name' => 'Pyunkang Yul Moisture Ampoule 100ml',
'variation' => 'MOISTURE AMPOULE',
'link' => 'https://shopee.co.id/-BPOM-Pyunkang-Yul-Moisture-Ampoule-100ml-i.744873.4315408419?sp_atk=b6b5bad5-2240-4fe4-a966-ea5f109609ac&xptdk=b6b5bad5-2240-4fe4-a966-ea5f109609ac',
'description' => 'Ampoule special dgn formula 90% ekstrak Coptis Japonica Root yg terkenal ampuh untuk menghidrasi & menenangkan kulit sehingga menghasilkan kulit yg berseri & glowing. Ada ekstrak Barberry Root yg bekerja menurunkan suhu kulit utk menenangkan kulit sensitive dan iritasi. Kandungan Olive oil memberi efek kelembapan secara intens dan mencegah kulit jadi kering. Tekstur gelnya juga menyerap secara maksimal dan membuat kulit halus. Cocok utk kulit normal, berminyak, kombinasi. Moisture Ampoule ini masuk ke seri Temperature Down Line yg berfungsi utk menurunkan suhu kulit, mencegah kulit kehilangan kelembapan, mendetoksifikasi kulit secara intens dari berbagai racun dan polusi.',
'price' => 179700,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
360 => 
array (
'id' => 361,
'brand_id' => 45,
'name' => 'PYUNKANG YUL Calming Moisture Repair Balm 30ml',
'variation' => 'Calming Repair Balm',
'link' => 'https://shopee.co.id/PYUNKANG-YUL-Calming-Moisture-Repair-Balm-30ml-i.744873.8782061458?sp_atk=ce57642f-f61d-4d45-91e6-73d0b0e88616&xptdk=ce57642f-f61d-4d45-91e6-73d0b0e88616',
'description' => 'A concentrated balm untuk meredakan dan memperbaiki kulit sensitif dan teriritasi, membuat kulit tenang dan terlindungi.
Diresapi dengan ekstrak menenangkan kulit yang berasal dari centella asiatica, pohon teh, dan bunga honeysuckle.
Lebih lanjut diperkaya dengan Acetyl Hexapeptide-8 dan Palmitoyl Tripeptide-5 untuk mengisi kembali kulit yang stres.
Bebas dari 20 macam bahan kimia berbahaya.

[Cara Penggunaan]
Gunakan sebagai langkah terakhir dari rejimen perawatan kulit Anda.
Pijat lembut agar menyerap.',
'price' => 113000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
361 => 
array (
'id' => 362,
'brand_id' => 43,
'name' => 'Trueve Advanced Brightening Moisturizing Gel - Trueve Barrier Complex Moisturizing Gel - 30gr',
'variation' => 'AdvancedBrghtnig Gel',
'link' => 'https://shopee.co.id/Trueve-Advanced-Brightening-Moisturizing-Gel-Trueve-Barrier-Complex-Moisturizing-Gel-30gr-i.744873.17217164946?sp_atk=01d67704-dd71-4aed-be58-e3b87f47c86e&xptdk=01d67704-dd71-4aed-be58-e3b87f47c86e',
'description' => 'Trueve Advanced Brightening Moisturizing Gel diperkaya dengan Vitamin C (VC-IP) yang berfungsi untuk membantu mencerahkan kulit, menyamarkan noda hitam & hiperpigmentasi, serta menangkal radikal bebas. Selain itu, Brightening Gel ini juga mengandung 6 Ceramides, Hyalu-10, serta Marine Collagen yang dapat membantu meningkatkan lapisan pertahanan kulit (skin barrier).

Trueve Barrier Complex Moisturizing Gel diperkaya dengan kandungan Inca Omega Oil, Natural Moisturizing Factor, 6 Ceramides, Hyalu-10 yang dapat membantu memperkuat lapisan Skin Barrier), melembapkan kulit, serta menjaga kelembapan kulit.',
'price' => 199000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
362 => 
array (
'id' => 363,
'brand_id' => 52,
'name' => 'Safi Dermasafe Soothe & Hydrate Day Moisturiser 50 gr',
'variation' => 'Dermasafe Day moist',
'link' => 'https://shopee.co.id/Safi-Dermasafe-Soothe-Hydrate-Day-Moisturiser-50-gr-i.744873.6916604065?sp_atk=e6a613fa-cbd4-4844-b030-94e6ab8ab24b&xptdk=e6a613fa-cbd4-4844-b030-94e6ab8ab24b',
'description' => 'Safi Dermasafe Day Moisturiser adalah SOOTHE & HYDRATE  moisturiser berbentuk gel menyegarkan, dengan tekstur yang ringan, melembabkan dan mudah menyerap, memberikan hidrasi sekaligus menyejukkan kulit wajah.

Produk dengan PH seimbang, telah teruji secara dermatologis serta :
*tanpa tambahan Fragrance
*tanpa tambahan Alkohol
*tanpa tambahan Pewarna
*NO ANIMAL TESTING
*NO SPF

COCOK UNTUK KULIT SENSITIF

Cara Pakai :
Oleskan pada wajah dan leher yang bersih.
Pijat lembut dengan gerakan memutar.Gunakan setelah Safi Dermasafe Gel Cleanser untuk hasil yang optimal',
'price' => 107500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
363 => 
array (
'id' => 364,
'brand_id' => 22,
'name' => 'SOMETHINC Ceramic Skin Saviour Moisturizer Gel',
'variation' => 'Ceramic Skin 50mL',
'link' => 'https://shopee.co.id/SOMETHINC-Ceramic-Skin-Saviour-Moisturizer-Gel-i.744873.6280042292?sp_atk=a6d96067-2004-4291-843a-43fb27fa8afc&xptdk=a6d96067-2004-4291-843a-43fb27fa8afc',
'description' => 'Delivers 18hr Moisture Lock Ceramic Skin, Plumper, & Healthy Skin.

Pelembab Gel-Krim yang Terbukti Secara Klinis dengan 9 Powerful Clean Supercharged ingredients:
Hydrolyzed Marine Collagen
Matrixyl®️ 3000;
Palmitoyl Tripeptide-1
Palmitoyl Tetrapeptide-7
Ceramide NP
miniHA™(Hydrolyzed Sodium Hyaluronate)
Betaine
Hydrolyzed Algae Extract
Niacinamide
Oat
Caffeine

QUICK FACT: 
EWG & Clean Ingredients
Reef Safe Verified
Non Comedogenic Certified
Hypoallergenic Certified
Moisture Lock 18hour Verified
Dermatology Tested
Suitable from 13 y/o & Preggo Friendly

Ingredients :
water, glycerin, dimethicone, Betaine, butylene glycol, Niacinamide, pentylene glycol, miniHA™(Hydrolyzed Sodium Hyaluronate), carbomer, polyacrylamide, Macadamia Integrifolia Seed Oil, C13-14 isoparaffin, caprylyl glycol, aminomethyl propanol, allantoin, ethylhexylglycerin, Ceramide NP, Phytosphingosine, Avena Sativa (Oat) Kernel Extract, laureth-7, Avnthemis Nobilis Flower Extract, 1,2-hexanediol, Hydrolyzed Algae Extract (Reef Safe), disodium edta, polysorbate 20, Hydrolyzed Marine Collagen, Caffeine, magnesium aspartate, Zinc Gluconate, Palmitoyl Tripeptide-1, Palmitoyl Tetrapeptide-7, phenoxyethanol, Copper Gluconate, Tocopherol',
'price' => 350000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
364 => 
array (
'id' => 365,
'brand_id' => 17,
'name' => 'Y.O.U AcnePlus Skin Defense Moisturizer - Spot Care - Skin Toner - Solution Serum - YOU',
'variation' => 'Moisturizer 25gr',
'link' => 'https://shopee.co.id/Y.O.U-AcnePlus-Skin-Defense-Moisturizer-Spot-Care-Skin-Toner-Solution-Serum-YOU-i.744873.8373893674?sp_atk=2af4f39c-460a-4984-851f-7d601e53bf59&xptdk=2af4f39c-460a-4984-851f-7d601e53bf59',
'description' => 'Krim pelembap yang mengandung Centella Asiatica dan Herbal Fusion Actives untuk melembutkan kulit, menyamarkan kemerahan dan noda di wajah untuk tampilan sehat dan cerah.',
'price' => 50000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
365 => 
array (
'id' => 366,
'brand_id' => 24,
'name' => 'SYB Soothing & Moisture Gel | Aloe Vera | Aloe Vera + Snail | Strawberry',
'variation' => 'Aloe Vera + Snail',
'link' => 'https://shopee.co.id/SYB-Soothing-Moisture-Gel-Aloe-Vera-Aloe-Vera-Snail-Strawberry-i.744873.8984389458?sp_atk=067ee9b7-a858-4151-be90-9cada38b43fe&xptdk=067ee9b7-a858-4151-be90-9cada38b43fe',
'description' => 'SYB Soothing & Moisture Gel Aloe Vera ini ada 3 varian ya. Ada original aloevera, strawberry aloevera, dan aloevera plus snail. Fungsi dan kegunaannya banyaakkk bangettt!!!! Untuk melembabkan tubuh dan wajah, untuk sunburn, untuk masker rambut, untuk kompres mata, untuk bugs bite, dan banyak kegunaan lainnya!',
'price' => 19500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
366 => 
array (
'id' => 367,
'brand_id' => 24,
'name' => 'SYB Soothing & Moisture Gel | Aloe Vera | Aloe Vera + Snail | Strawberry',
'variation' => 'Strawberry',
'link' => 'https://shopee.co.id/SYB-Soothing-Moisture-Gel-Aloe-Vera-Aloe-Vera-Snail-Strawberry-i.744873.8984389458?sp_atk=067ee9b7-a858-4151-be90-9cada38b43fe&xptdk=067ee9b7-a858-4151-be90-9cada38b43fe',
'description' => 'SYB Soothing & Moisture Gel Aloe Vera ini ada 3 varian ya. Ada original aloevera, strawberry aloevera, dan aloevera plus snail. Fungsi dan kegunaannya banyaakkk bangettt!!!! Untuk melembabkan tubuh dan wajah, untuk sunburn, untuk masker rambut, untuk kompres mata, untuk bugs bite, dan banyak kegunaan lainnya!',
'price' => 19000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
367 => 
array (
'id' => 368,
'brand_id' => 10,
'name' => 'PIXY White Aqua Brightening Moisturizer 50 gr',
'variation' => 'Pixy WhiteAqua MOIST',
'link' => 'https://shopee.co.id/PIXY-White-Aqua-Brightening-Moisturizer-50-gr-i.744873.2511703407?sp_atk=78e1def0-0c1a-4898-8f2e-b464cd9485b9&xptdk=78e1def0-0c1a-4898-8f2e-b464cd9485b9',
'description' => 'PIXY White Aqua Brighteninng Moisturizer : Pelembab degan Waterbased Formula yang melembabkan dan melindungi kulit saat beraktivitas sepanjang hari, yang mempunyai kandungan utama Hydra Active : menghidrasi , melelmbabkan sekaligus memberikan kesegaranpada Kulit.SPF 32 & PA+++melindungi kulit  dari sinar matahari .',
'price' => 65200,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
368 => 
array (
'id' => 369,
'brand_id' => 45,
'name' => 'PYUNKANG YUL Moisture Serum 9ml - Serum Wajah',
'variation' => 'Moisture Serum 9ml',
'link' => 'https://shopee.co.id/PYUNKANG-YUL-Moisture-Serum-9ml-Serum-Wajah-i.744873.12646774159?sp_atk=c67924a0-63f0-4395-bf43-dcc2331e4f83&xptdk=c67924a0-63f0-4395-bf43-dcc2331e4f83',
'description' => 'Benefit
- Menjaga keseimbangan antara minyak dan air pada kulit serta mencegah hidrasi dari penguapan untuk efek dewy yang lebih tahan lama
- Hypo-allergenic
- Barberry Root Extract bekerja untuk mengurangi suhu kulit untuk menenangkan kulit yang sensitif dan iritasi
- Minyak zaitun memberikan hidrasi yang intens dan mencegah kulit menjadi kering

Cara Penggunaan:
1. Gunakan spuit untuk mengukur jumlah serum yang tepat
2. Aplikasikan dengan mengikuti garis-garis wajah Anda
*TIPS: aplikasikan serum lebih banyak khususnya ke area yang kering',
'price' => 23900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
369 => 
array (
'id' => 370,
'brand_id' => 11,
'name' => 'Wardah Acnederm Day Moisturizer 40ml | Pelembap Wajah',
'variation' => 'Acne Day Moisturizer',
'link' => 'https://shopee.co.id/Wardah-Acnederm-Day-Moisturizer-40ml-Pelembap-Wajah-i.744873.3220399058?sp_atk=eb9d3e74-e669-435b-ad60-f86ae3572a7d&xptdk=eb9d3e74-e669-435b-ad60-f86ae3572a7d',
'description' => 'Derma Treat Actives* With SPF 15
Dengan 7 Extract Tumbuhan Alami 
*Bantu melindungi kulit dari radiasi sinar UV yang membuat kulit terlihat kusam.
*Bantu kurangi kemerahan di kulit akibat iritasi.
*Bantu menjaga hidrasi kulit di siang hari.
*Bantu merawat kulit dari penyebab jerawat.
*Bantu membuat kulit terasa halus dan lembut.',
'price' => 26250,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
370 => 
array (
'id' => 371,
'brand_id' => 10,
'name' => 'PIXY Glowssentials Kiwi Extracts - Face Mist - Clay Mask - Face Wash - Gel Moisturizer',
'variation' => 'Moisturizer Gel',
'link' => 'https://shopee.co.id/PIXY-Glowssentials-Kiwi-Extracts-Face-Mist-Clay-Mask-Face-Wash-Gel-Moisturizer-i.744873.9552460668?sp_atk=db70119c-0640-4ae3-8f84-d573ef26b93a&xptdk=db70119c-0640-4ae3-8f84-d573ef26b93a',
'description' => 'Gel Moisturizer Multifungsi yang mampu melindungi dari partikel-partikel polusi* seperti debu, asap, dan kotoran. Dapat digunakan pada wajah dan seluruh bagian tubuh sebagai pelembap atau dasar base makeup. Mengandung aloe vera yang menyejukkan dan melembapkan kulit. Diperkaya dengan 3 kandungan utama, yaitu: • Natural Vita Complex dari Ekstrak Kiwi, Vitamin E, dan Provitamin B5: Mengandung antioksidan, membantu menutrisi dan menjaga kelembapan kulit agar tetap cerah dan glowing. • Pollustop®: Diketahui dapat melindungi kulit dari partikel-partikel polusi seperti debu, asap, dan kotoran. • Antibacterial Agent: Melawan bakteri dan menjaga kulit tetap bersih.',
'price' => 30200,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
371 => 
array (
'id' => 372,
'brand_id' => 77,
'name' => 'Purbasari Pelembab Daily Double Moisturizer',
'variation' => 'Pelembab Moisturizer',
'link' => 'https://shopee.co.id/Purbasari-Pelembab-Daily-Double-Moisturizer-i.744873.8430991032?sp_atk=66ccf558-7223-4d5a-8b53-f9c5bb414d47&xptdk=66ccf558-7223-4d5a-8b53-f9c5bb414d47',
'description' => 'Pelembab dari purbasari yang dapat digunakan sebelum make up dan cocok untuk semua jenis kulit, dengan bahan aktif :
* Extra Markisa mengontrol kelebihan minyak.
* UV Filter melindungi wajah dari efek buruk sinar Matahari
* Double Moisturizer mengandung Hydroviton dan Squalane untuk melembabkan dan mencegah kekeringan pada kulit wajah.
* Vitamin E sebagai anti oksidan uantuk membantu mencegah penuaan dini.',
'price' => 7700,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
372 => 
array (
'id' => 373,
'brand_id' => 78,
'name' => 'Hada Labo Gokujyun Premium Ultimate Moisturizing Lotion 100 ml | Hadalabo',
'variation' => 'PREMIUM Moist Lotion',
'link' => 'https://shopee.co.id/Hada-Labo-Gokujyun-Premium-Ultimate-Moisturizing-Lotion-100-ml-Hadalabo-i.744873.4958132747?sp_atk=27ee74d3-b49f-4db0-9e6a-d96c3d2a157d&xptdk=27ee74d3-b49f-4db0-9e6a-d96c3d2a157d',
'description' => 'Hada Labo Gokujyun Premium Ultimate Moisturizing Lotion dengan 5 Tipe Hyaluronic Acid (pelembab) :
1. Hyaluronic Acid (HA) : mampu meningkatkan hidrasi kulit, dan menjaga elastisitas kulit. 
2. Improved HA (AcHA) : mampu meningkatkan hidrasi kulit lebih tinggi dibandinh HA biasa. 
3. Nano-sized HA : meresap hingga bagian epidermis terdalam. 
4. Encapsulated HA : Encapsulated Hyaluronic Acid, sehingga mampu bertahan lama. 
5. Adhesive HA : Hyaluronat yang dimodifikasi sehingga lebih melekat pada kulit. 

Klaim Produk :
- Berfungsi sebahai hydrating toner, tinggi kandungan pelembab, memperkaya hidrasi kulit untuk waktu yang panjang. 
- Menjaga tekstur yang ringan di kulit. 
- Sesuai dengan pH kulit, tingkat iritasi rendah. 
- Tidak menggunakan tambahan zat pewangi, pewarna, dan alkohol. 

Cara Pakai : tuangkan pada telapak tangan, usapkan ke seluruh wajah dan tepuk dengan lembut. Gunakan pada wajah yang telah dibersihkan.',
'price' => 67000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
373 => 
array (
'id' => 374,
'brand_id' => 5,
'name' => 'Pond\'s Juice Collection Moisturizer Orange Nectar + Vit C 20 gr',
'variation' => 'Orange Nectar+ VitC',
'link' => 'https://shopee.co.id/Pond\'s-Juice-Collection-Moisturizer-Orange-Nectar-Vit-C-20-gr-i.744873.10368715644?sp_atk=a48c966e-bfb9-4317-bc68-48af391274dd&xptdk=a48c966e-bfb9-4317-bc68-48af391274dd',
'description' => 'Dapatkan kulit glowing natural dengan 100% natural origin extract, 100% natural derived moisturizing agent*, 100% alcohol free, cocok untuk semua jenis kulit!
*glycerin

Oil-free Gel Cream Moisturizer, formula ringan yang diperkaya dengan Orange Nectar + Vitamin C.
Manfaat vitamin C untuk kulit
1. Mencegah kerusakan akibat radikal bebas.
2. Menghasilkan kolagen.
3. Melindungi kulit dari kerusakan akibat paparan sinar matahari (anti UV).
4. Menurunkan risiko kanker kulit.

Ponds Gel Cream Moisturizer Day & Night. Aromanya menyegarkan, cepat meresap ke dalam kulit, dan membuat efek glowing yang segar serta tidak membuat berminyak.

Dapatkan kulit glowing natural dengan 100% natural origin extract, 100% natural derived moisturizing agent*, 100% alcohol free, cocok untuk semua jenis kulit!',
'price' => 20000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
374 => 
array (
'id' => 375,
'brand_id' => 57,
'name' => 'Acnes Whitening & Oil Control Moisturizer Cream  40gr | Pelembap Wajah',
'variation' => 'White & OilControl M',
'link' => 'https://shopee.co.id/Acnes-Whitening-Oil-Control-Moisturizer-Cream-40gr-Pelembap-Wajah-i.744873.1718399046?sp_atk=d4d58aca-a0b0-4588-a5cd-e98965c6b348&xptdk=d4d58aca-a0b0-4588-a5cd-e98965c6b348',
'description' => 'Formula ringan dengan kandungan Natural Active Ingredient memberikan 3 manfaat sekaligus untuk kulit cantikmu. 
1. Kombinasi 8 ekstrak tanaman untuk membantu mengurangi minyak berlebih sehingga kulit tampak bebas minyak
2. Mengandung Arbutin sebagai whitening agent untuk membantu mencerahkan warna kulit, menyamarkan vlek hitam dan noda bekas jerawat
3. Diperkaya dengan AcHA untuk menjaga kelembaban dan tekstur kulit agar senantiasa halus.',
'price' => 28000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
375 => 
array (
'id' => 376,
'brand_id' => 78,
'name' => 'Hada Labo 3D Gel Perfect Moisturizing Whitening Anti Aging | Hadalabo Pelembap Wajah',
'variation' => '3D Gel Perfect Moist',
'link' => 'https://shopee.co.id/Hada-Labo-3D-Gel-Perfect-Moisturizing-Whitening-Anti-Aging-Hadalabo-Pelembap-Wajah-i.744873.1541085558?sp_atk=229c15fa-ff1e-4e04-b3d5-3f404938caf3&xptdk=229c15fa-ff1e-4e04-b3d5-3f404938caf3',
'description' => 'Kandungan dari Hada Labo Perfect 3D Gel, yaitu:
4 tipe Hyaluronic Acid (Hyaluronic Acid
Improve Hyaluronic Acid, Nano Hyaluronic Acid
3D Hyaluronic Acid)
Arbutin
Vitamin B3
Yuzu Extract
Anti Aging Complex

Memberikan kelembaban kulit secara intensif
Memperbaki tekstur kulit lebih halus dan lembut
Mencerahkan kulit, menyamarkan noda hitam, mengurangi kulit kusam
Menyamarkan tanda-tanda penuaan dini
Anti oksidan dan mengangkat efek radikal bebas',
'price' => 89000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
376 => 
array (
'id' => 377,
'brand_id' => 11,
'name' => 'Wardah Nature Daily Aloe Hydramild Moisturizer Cream 40 ml - Pelembab dengan Olive Oil',
'variation' => 'Aloe Moist Crm 40ml',
'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Aloe-Hydramild-Moisturizer-Cream-40-ml-Pelembab-dengan-Olive-Oil-i.744873.13074046924?sp_atk=420d7b3a-0efc-4c73-bf2e-7d957cb71093&xptdk=420d7b3a-0efc-4c73-bf2e-7d957cb71093',
'description' => 'Krim pelembap dengan formula pH balance yang dibutuhkan setiap jenis kulit. Mengandung Olive Oil dan Vitamin E yang menutrisi lapisan terluar kulit.

How to Use :
1. Oleskan krim merata pada wajah dan leher yang telah dibersihkan
2. Untuk hasil yang maksimal, gunakan bersama rangkaian produk Wardah Aloe lainnya.',
'price' => 16500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:21',
'updated_at' => '2022-06-27 15:42:21',
),
377 => 
array (
'id' => 378,
'brand_id' => 52,
'name' => 'SAFI Age Defy Gold Water Essence 100 ml / mini size 30 ml / Safi Age Defy Serum / Age Defy SERIES / Skincare Skin care',
'variation' => 'A.D Deep Moisturizer',
'link' => 'https://shopee.co.id/SAFI-Age-Defy-Gold-Water-Essence-100-ml-mini-size-30-ml-Safi-Age-Defy-Serum-Age-Defy-SERIES-Skincare-Skin-care-i.744873.1353071060?sp_atk=b539a712-c2fe-4701-abf4-4238a2c3c49a&xptdk=b539a712-c2fe-4701-abf4-4238a2c3c49a',
'description' => 'Dengan double efek, kombinasi Gold Extract dan Silk Protein, membantu : 
- Memelihara struktur kulit, tidak hanya merawat bagian luar tetapi juga bagian dalam kulit, merawat keremajaan kulit dengan optimal
- Diperkaya dengan BIO HYALURONIC yang mempertahankan dan memelihara kelembapan sepanjang hari agar kulit terasa halus dan lembut serta mempersiapkan kulit untuk produk perawatan kulit berikutnya

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. ',
'price' => 59700,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
378 => 
array (
'id' => 379,
'brand_id' => 50,
'name' => 'Emina Moist In A Bottle Moisturizer',
'variation' => 'Moist In A Bottle',
'link' => 'https://shopee.co.id/Emina-Moist-In-A-Bottle-Moisturizer-i.744873.1994736538?sp_atk=638d20cc-1adb-418e-ae13-1bce3abf8629&xptdk=638d20cc-1adb-418e-ae13-1bce3abf8629',
'description' => 'Pelembab Emina dengan tekstur ringan dengan minyak Macademia melindungi kulit Anda dari kekeringan. Ini membantu untuk memenuhi kebutuhan hidrasi kulit harian Anda.

Emina, setiap hari adalah kesempatan untuk bermain, mencoba hal baru, berbagi tawa dan kebahagiaan. Emina mengerti bahwa cantik itu sederhana dan menyenangkan. Anda bisa menjadi lebih cantik tidak hanya dalam kebahagiaan Anda tetapi dengan memilih riasan yang tepat untuk kulit Anda.

Emina juga memahami kebutuhan unik kulit Anda. Untuk itulah Emina menghadirkan rangkaian lengkap produk perawatan dan kosmetik yang aman digunakan dan mudah diaplikasikan untuk Anda.',
'price' => 22500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
379 => 
array (
'id' => 380,
'brand_id' => 50,
'name' => 'Emina Ms. Pimple Acne Solution Moisturizing Gel',
'variation' => 'Ms. Pimple Moist.GEL',
'link' => 'https://shopee.co.id/Emina-Ms.-Pimple-Acne-Solution-Moisturizing-Gel-i.744873.2058647459?sp_atk=97e9c6c1-af12-4304-aed4-3e67e87fcb4b&xptdk=97e9c6c1-af12-4304-aed4-3e67e87fcb4b',
'description' => 'Emina Ms. Pimple Acne Solution Moisturizing Gel adalah pelembap wajah yang dapat menjaga kulit berjerawat dan kulit acne prone agar tetap terhidrasi sehingga produksi sebum terkontrol. Dilengkapi dengan SPF 15 untuk melindungi kulit dari sinar UV.',
'price' => 18900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
380 => 
array (
'id' => 381,
'brand_id' => 50,
'name' => 'BARU! Emina Natura Pal - Gel Cleanser - Toner Essence - Spalsh Serum - Gel Moisturizer',
'variation' => 'Gel Moisturizer 20ml',
'link' => 'https://shopee.co.id/BARU!-Emina-Natura-Pal-Gel-Cleanser-Toner-Essence-Spalsh-Serum-Gel-Moisturizer-i.744873.14519032869?sp_atk=4054a8ce-3b65-415c-bca3-359b41b98f31&xptdk=4054a8ce-3b65-415c-bca3-359b41b98f31',
'description' => 'Emina Natura Pal Gel Moisturizer akan membuat kulitmu 2x* lebih terhidrasi! Nyaman digunakan dengan tekstur gel-nya yang ringan dan mampu menghidrasi kulit seketika. Diperkaya dengan 100% Natural Pea Extract & Triple Protection+ untuk bantu lindungi kulit dari efek buruk radikal bebas. Buat kulitmu glowing dan kenyal!

Dont worry to get in troubles!
Cocok digunakan untuk semua jenis kulit.

Hypoallergenic - Dermatologically tested - Non-comedogenic - Non-acnegenic - 0% alcohol - 0% additional color

Cara Pakai :
Oleskan pada wajah & leher yang telah dibersihkan.
Gunakan setiap hari pada pagi & malam hari.',
'price' => 28500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
381 => 
array (
'id' => 382,
'brand_id' => 78,
'name' => 'Hada labo Gokujyun Ultimate Moisturizing Milk 100ml | Hadalabo Garis PINK | Pelembab Wajah',
'variation' => 'Moisturizing Milk',
'link' => 'https://shopee.co.id/Hada-labo-Gokujyun-Ultimate-Moisturizing-Milk-100ml-Hadalabo-Garis-PINK-Pelembab-Wajah-i.744873.1533818926?sp_atk=1bb7c5d2-0143-43ce-8c7d-fbc2a4be2a3e&xptdk=1bb7c5d2-0143-43ce-8c7d-fbc2a4be2a3e',
'description' => 'Hada Labo Gokujyun Milk adalah pelembap dengan kandungan 3 tipe Hyaluronic Acid. Melembapkan dan meningkatkan kadar air pada kulit sehingga kulit terasa lebih halus, lembut, dan elastis.
Hada Labo dengan formula Perfect x Simple, hanya menggunakan bahan berkualitas terbaik dan hanya yang bermanfaat bagi kulit. No added alcohol, no fragrance, and no colorant.

How To Use:
- Gunakan setelah menggunakan Hada Labo Lotion
- Tuangkan secukupnya pada telapak tangan dan usapkan secara merata di seluruh wajah, biarkan meresap.',
'price' => 40000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
382 => 
array (
'id' => 383,
'brand_id' => 19,
'name' => 'Azarine Oil Free Brightening Daily Moisturizer 40ml - Anti Acne',
'variation' => 'Daily Moisturiz 40ml',
'link' => 'https://shopee.co.id/Azarine-Oil-Free-Brightening-Daily-Moisturizer-40ml-Anti-Acne-i.744873.12804644817?sp_atk=e714ae99-e78f-423b-b2df-eae4253f9afa&xptdk=e714ae99-e78f-423b-b2df-eae4253f9afa',
'description' => 'Moisturizer pagi dan malam, praktis , ringan dan cepat meresap di kulit yang di formulasikan untuk kulit berminyak, kombinasi dan berjerawat.  Dengan teknologi oil kontrol yang mampu MENAHAN MINYAK 3-5 jam secara INSTANT & memberi efek MATTE pada kulit. Pemakaian rutin mampu mengontrol kadar minyak/ sebum secara permanen.

Keunggulan:
- Memudarkan / mencerahkan bekas jerawat ( PIE/PIH)
- Mengontrol sebum yang berlebih
- Merapatkan pori- pori 
- Memberi tampilan "matte" pada wajah
- Melembabkan & bantu atasi bruntusan
- Fungal Acne Safe
- NO ALCOHOL, NO FRAGRANCE, NO OIL
- BISA UNTUK BUMIL & BUSUI

Key Ingredients:
CICA: Menenangkan kulit, mengencangkan kulit & anti bakteri
Cinnamon Bark: mengontrol sebum & anti bakteria
Arbutin: mencerahkan kulit & memudarkan bekas jerawat
Royal Jelly: melembabkan, Memperbaiki kulit & anti bakteria

Full Ingredients:
Aqua, Xanthan Gum, Sodium Acrylates Crosspolymer, Sodium Allantoin PCA, Chlorphenesin, Phenoxyethanol, Glycerin, Propanediol, Sodium Hyaluronate, Centella Asiatica Extract, Cinnamon Zeylanicum Bark Extract, Panthenol, Niacinamide, Royal Jelly, Arbutin, Resveratrol, Polyquartenum-7',
'price' => 50500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
383 => 
array (
'id' => 384,
'brand_id' => 11,
'name' => 'Wardah Nature Daily Witch Hazel Purifying Moisturizer Gel',
'variation' => 'Hazel Purifying Mois',
'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Witch-Hazel-Purifying-Moisturizer-Gel-i.744873.4325327075?sp_atk=c8065038-3279-496d-9879-02b4ed346dc0&xptdk=c8065038-3279-496d-9879-02b4ed346dc0',
'description' => 'Wardah purifiying moisturizer gel merupakan pelemabab yang dikombinasikan untuk kulit yang cenderung berminyak. Memiliki kandungan ekstrak Witch Hazel yang membantu melembabakan sekaligus meringkas pori-pori kulit. Kombinasi Provitamin B5 dan humectant-emollient agent membuat proses hidrasi kulit berjalan optimal. Kandungan vitamin E nya membantu melindungi kulit dari radikal bebas. Rasakan sensasi agar segar untuk kulit tampak lebih lembab dan lembut. 
- Gel Pelembab yang nyaman
- Kombinasi bahan aktif natural untuk kulit xcenderung berminyak dalam purifying moisturizer gel
- Mengandung ekstrak Witch Hazel yang membantu melembabkan sekaligus meringkas pori-pori kulit

[Cara pakai]
Oleskan tipis merata pada wajah dan leher yang telah dibersihkan. Untuk hasil maksimal, gunakan setiap hari dengan rangkaian Wardah Purifying lainnya',
'price' => 16250,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
384 => 
array (
'id' => 385,
'brand_id' => 59,
'name' => 'PIGEON Teens Moisturizer For All Skin Types 20ml - 50ml',
'variation' => 'Moisturizer 20ml',
'link' => 'https://shopee.co.id/PIGEON-Teens-Moisturizer-For-All-Skin-Types-20ml-50ml-i.744873.9852815493?sp_atk=ab111f9f-d8fa-4db1-bb91-2c9b48535970&xptdk=ab111f9f-d8fa-4db1-bb91-2c9b48535970',
'description' => 'Pelembab Wajah Remaja Moisturizer Dengan Bahan Alami Untuk Membantu Menjaga Dan Melindungi Kelembaban Alami Kulit Wajah. Mengandung Ekstrak Jojoba dan Chamomile Yang Berfungsi Menyejukkan, Merawat Kelembaban Dan Membantu Melindungi Kulit Dari Iritasi Ringan. Diperkaya Dengan Hydroviton 24 Menjadikan Kulit Tetap Halus, Lembut Dan Tidak Kering. Berbentuk Lotion Dengan Formula Ringan, Mudah Meresap Dan Tidak Berminyak. Gunakan Setiap Pagi Dan Malam Hari. Untuk Segala Jenis Kulit.

Detail :
- Produk 100% Original
- Produk 100% Halal
- Diperkaya Extrak Jojoba dan Chamomile
- Diperkaya dengan Hydroviton 24
- Digunakan Pagi dan Malam hari
- Cocok untuk semua jenis kulit

Manfaat / Kegunaan :
- Menyejukkan, Merawat Kelembapan.
- Membantu Melindungi Kulit dari Iritasi Ringan',
'price' => 14500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
385 => 
array (
'id' => 386,
'brand_id' => 39,
'name' => 'SKINTIFIC 5X Ceramide Barrier Repair Moisture Gel 30G',
'variation' => 'Barrier Moist Gel 6g',
'link' => 'https://shopee.co.id/SKINTIFIC-5X-Ceramide-Barrier-Repair-Moisture-Gel-30G-Barier-Cream-Ceramide-Gel%E3%80%90BPOM%E3%80%91-i.744873.13281021564?sp_atk=efb6644b-9c48-4f4d-a2b0-c371be6e8813&xptdk=efb6644b-9c48-4f4d-a2b0-c371be6e8813',
'description' => 'Moisturizer yang menggabungkan 3 kandungan aktif Ceramide, Hyaluronic Acid, dan Centella Asiatica, untuk mengatasi permasalahan skin barrier yang rusak seperti jerawat, kemerahan, kulit bertekstur, dan juga kulit kering secara cepat namun tetap aman untuk skin barrier. Diperkaya dengan teknolog 5X Ceramide, yang merupakan gabungan 5 jenis Ceramide untuk melembabkan secara mendalam dan memperkuat lapisan kulit. 5X Ceramide ini membantu untuk memperbaiki dan melindungi skin barrier dengan menjaga kelembaban dan melindungi kulit dari faktor eksternal.

Manfaat
● Memperbaiki permasalahan skin barrier seperti jerawat, kemerahan, kulit kering, dan kulit bertekstur
● Melembabkan dan menghidrasi selama 24 jam
● Oil control selama 24 jam
● Melindungi skin barrier
● Memperkuat skin barrier
● Menenangkan dan melembutkan kulit

Hero Ingredients
5X Ceramide: Kombinasi 5 jenis Ceramide untuk mengembalikan dan menciptakan lapisan perlindungan kulit untuk mencegah hilangnya kelembaban
Hyaluronic Acid: Menghidrasi kulit secara instan dan secara intensif memperbaiki sel kulit secara mendalam
Centella Asiatica: Menenangkan dan memperbaiki inflamasi pada kulit
Marine-Collagen: Mempertahankan kelembaban dan kekenyalan kulit

How to use
Oleskan pelembab sebesar anggur pada pipi, jidat, hidung, dan dagu.awat, kemerahan, kulit bertekstur, dan juga kulit kering secara cepat namun tetap aman untuk skin barrier.',
'price' => 41000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
386 => 
array (
'id' => 387,
'brand_id' => 50,
'name' => 'Emina Bright Stuff SERIES | Bright Stuff Acne Series | TnT Beauty Shop',
'variation' => 'Moisturizing Cream',
'link' => 'https://shopee.co.id/Emina-Bright-Stuff-SERIES-Bright-Stuff-Acne-Series-TnT-Beauty-Shop-i.744873.5109932040?sp_atk=73d019f8-b11a-4fe8-b861-22fd15539086&xptdk=73d019f8-b11a-4fe8-b861-22fd15539086',
'description' => 'Manfaat memakai moisturizer secara rutin:
1. Menjaga kelembapan kulit
2. Memberikan nutrisi pada kulit
3. Menjaga kulit berfungsi dengan baik',
'price' => 18500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
387 => 
array (
'id' => 388,
'brand_id' => 43,
'name' => 'Trueve Barrier Complex Moisturizing Gel 30gr',
'variation' => 'BarrierMoisturzngGel',
'link' => 'https://shopee.co.id/Trueve-Barrier-Complex-Moisturizing-Gel-30gr-i.744873.16517157595?sp_atk=393bf4a2-2217-4bc0-8daf-b5a0f32cf2b7&xptdk=393bf4a2-2217-4bc0-8daf-b5a0f32cf2b7',
'description' => 'Trueve Barrier Complex Moisturizing Gel diperkaya dengan kandungan Inca Omega Oil, Natural Moisturizing Factor, 6 Ceramides, Hyalu-10 yang dapat membantu memperkuat lapisan Skin Barrier), melembapkan kulit, serta menjaga kelembapan kulit.

Cocok untuk masalah kulit:
1. Kering dan mengalami tanda penuaan.
2. Kulit dengan skin barrier yang rusak.
3. Acne prone skin.

Komposisi Utama:
1. Ceramide-6 pertama di Indonesia aja dan cocok untuk kulit Asia.
2. Inca Omega Oil Diperoleh dari Spanyol, tanaman Sacha Inchi (superfood yang tumbuh di hutan hujan Amazon) yang mengandung kaya akan PUFA, serta berperan sangat penting untuk skin barrier dan juga menghidrasi kulit
3. NMF atau Natural Moisturizing Factor dari Jerman yang menjaga kulit tetap kenyal dengan melindungi skin barrier untuk menjaga kecukupan kadar air
4. Hyalu-10 di mana menggunakan 10 Jenis Hyaluron yang memiliki ukuran lebih kecil lebih mudah menyerap kedalam lapisan yang berbeda secara bersamaan.

Manfaat:
1. Memperkuat Skin Barrier
2. Memberikan hidrasi pada kulit
3. Menjaga kelembaban kulit
4. Mengurangi TEWL (Trans-Epidermal Water Loss) yaitu mengurangi kadar air dari kulit yang membuat kulit menjadi kering/ dehidrasi

Cara pakai:
1. Bersihkan wajah terlebih dahulu.
2. Gunakan Toner & Serum.
3. Setelah itu, gunakan Trueve Barrier Complex Moisturizing Gel secukupnya di seluruh wajah dua kali dalam sehari, pagi dan malam hari.
4. Pakai secara rutin agar dapat hasil efektif!',
'price' => 179000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
388 => 
array (
'id' => 389,
'brand_id' => 22,
'name' => 'SOMETHINC ACNEDOT Treatment Moisturizer Gel - Krim Pagi dan Malam Kulit Jerawat',
'variation' => 'Acne MoisturGel 25ml',
'link' => 'https://shopee.co.id/SOMETHINC-ACNEDOT-Treatment-Moisturizer-Gel-Krim-Pagi-dan-Malam-Kulit-Jerawat-i.744873.15968336895?sp_atk=b55b5673-5a1f-4aaf-894e-74c3f808b9e2&xptdk=b55b5673-5a1f-4aaf-894e-74c3f808b9e2',
'description' => 'Get Rid of Acne Poreblem in 28 days!
Pelembab wajah vegan dengan 5X Acne Combat Power yang membantu melawan bakteri penyebab jerawat, memperkecil tampilan pori, mengontrol sebum minyak berlebih, & mengurangi bakteri jerawat dalam 28 hari*. Dilengkapi dengan Postbiotic untuk mendukung proses regenerasi kulit & menyeimbangkan mikrobioma di kulit agar tidak sering breakout lagi. Tekstur gel & tidak menjadikan kulit terlihat semakin berminyak.

Manfaat: 
- Melembabkan kulit berjerawat tanpa membuatnya semakin berminyak
- Membantu melawan bakteri penyebab jerawat
- Membantu memperkecil tampilan pori
- Membantu mengontrol bakteri dalam 28 hari
- Mendukung proses regenerasi kulit & menyeimbangkan mikroba di kulit

Star Ingredients: 
Succinic Acid: Mengurangi pori-pori tersumbat & produksi minyak berlebih hingga 41,5%, jerawat hingga 51%, hingga tampilan pori & komedo dalam 28 hari
Sea buckthorn: Efektifitas setara 15X lipat Vitamin C sebagai agen pencerah & sumber antioksidan
Folic Acid: Menghambat pertumbuhan jerawat 
Hydrolyzed Algin: Mengontrol produksi minyak berlebih hingga 57% dalam 28 hari, melawan bakteri penyebab jerawat & bersifat anti bakteri
75% Korean Green Tea Water: Antioksidan yang kuat, menenangkan kemerahan pada jerawat yang meradang & bersifat anti bakteri
Postbiotic (Lactococcus Ferment Lysate): Mempercepat proses renewal/pergantian kulit, menjaga keremajaan kulit, memperkuat skin barrier dengan menjaga keseimbangan skin mikroba & memperkuat sistem pertahanan alami kulit
Trehalose: Menjaga kelembaban kulit

Jenis kulit: Kulit acne prone & kulit berminyak

Cara pemakaian: 
Bersihkan wajah dengan Somethinc ACNEDOT Treatment Low pH Cleanser
Gunakan Somethinc ACNEDOT Treatment Toner dengan gerakan menepuk ke seluruh area wajah & leher
Lanjutkan dengan serum Somethinc favoritmu
Pada tahapan terakhir, gunakan moisturizer Somethinc ACNEDOT Treatment Moisturizer Gel ke seluruh wajah & leher. (Gunakan roller pijat dengan gerakan memutar untuk ukuran 50ml, hindari memijat pada area dengan jerawat aktif).
Pada pagi hari, gunakan sunscreen Somethinc Holyshield! Serum Corrector setelah penggunaan moisturizer.

Vegan Friendly
Non- Irritation Formula
Dermatologically Tested
Hypoallergenic Tested
Fungal Acne Friendly
pH Balance
Suitable for teenager (boleh dipakai dari umur 11 tahun)',
'price' => 89000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
389 => 
array (
'id' => 390,
'brand_id' => 52,
'name' => 'Safi Hydra Glow Hydrating Water Moisturizer',
'variation' => 'Water DropMoist 40gr',
'link' => 'https://shopee.co.id/Safi-Hydra-Glow-Hydrating-Water-SERIES-Moisturizer-Lock-Mist-Cleanser-Bank-Serum-Toning-Essence-i.744873.14070376925?sp_atk=4e21007e-bd59-45f4-add3-67c0eb743e8d&xptdk=4e21007e-bd59-45f4-add3-67c0eb743e8d',
'description' => 'Merupakan pelembab wajah dengan tekstur gel ringan yang berubah menjadi tetesan air ketika di aplikasikan ke kulit. ',
'price' => 92000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
390 => 
array (
'id' => 391,
'brand_id' => 12,
'name' => 'NPURE Noni Probiotics Moisturizer - Kulit Sensitif',
'variation' => 'Moisturizer 30ml',
'link' => 'https://shopee.co.id/NPURE-Noni-Probiotics-Gel-Cleanser-Fine-Toner-Ampoule-Moisturizer-Body-Soft-Lotion-N\'Pure-Noni-Probiotics-Series-Sensitive-Skin-Kulit-Sensitif-i.744873.14138435216?sp_atk=c782ecbf-627d-4d42-91e4-23a69df77ae2&xptdk=c782ecbf-627d-4d42-91e4-23a69df77ae2',
'description' => 'Pelembab tekstur ringan yang cocok untuk dipakai sehari-hari. 

CARA PENGGUNAAN
Aplikasikan pada wajah dan leher setiap pagi & malam hari setelah menggunakan toner & ampoule.',
'price' => 80100,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
391 => 
array (
'id' => 392,
'brand_id' => 14,
'name' => 'Whitelab Natural Moisturizing Factor (NMF)',
'variation' => 'Moisturizing Serum',
'link' => 'https://shopee.co.id/Whitelab-Natural-Moisturizing-Factor-(NMF)-Serum-White-Lab-NMF-Serum-20ml-i.744873.11276669927?sp_atk=3324e16f-8e32-41a7-b419-8b057a4a01d4&xptdk=3324e16f-8e32-41a7-b419-8b057a4a01d4',
'description' => 'Whitelab Natural Moisturizing Factor dengan kandungan NMF, Ceramide-4, HyaluComplex-10, dan Marine Collagen meningkatkan level hidrasi dan kelembaban alami kulit wajah sehingga kulit tampak sehat berseri dan terasa kenyal.

Powerful Ingredients:
- NMF yang merupakan kompleks essentials bahan-bahan pelembab alami kulit berfungsi menggantikan dan melengkapi kembali kandungan yang hilang, melembabkan, merawat kekenyalan dan kelembutan kulit wajah.
- Ceramide-4 yang terdiri dari 4 jenis esensial Ceramide tubuh (Ceramide I, III, VI, Ceramide Prekursor) melengkapi kembali komponen lipid dan meningkatkan fungsi barrier wajah, , mencegah Transepidermal Water Loss (TEWL), mengurangi tanda-tanda sensitivitas kulit, meningkatkan kelembaban dan mempertahankan hidrasi kulit wajah.
- HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan membentuk moisture barrier sehingga menjaga kelembaban wajah sepanjang hari.
- Marine Collagen yang lebih mudah berpenetrasi ke dalam kulit membantu merawat kehalusan dan kelembutan kulit serta membantu merawat kekenyalan kulit.

NMF cocok untuk kulit dehidrasi dan terlihat lelah, kulit kering, kasar, kusam, mengelupas dan bersisik, kulit dengan skin barrier yang rusak.

Fungsi:
- Meningkatkan kelembaban alami dan level hidrasi kulit wajah
- Membuat kulit tampak sehat berseri
- Merawat kekenyalan kulit wajah
- Mencegah kekeringan dan iritasi pada kulit wajah
- Merawat kehalusan dan kelembutan kulit wajah
- Merawat dan meningkatkan fungsi skin barrier wajah.',
'price' => 76000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
392 => 
array (
'id' => 393,
'brand_id' => 79,
'name' => 'MAKE OVER Powerskin Liquid Glow Moisturizer 45 ml - Face Moisturizer',
'variation' => 'Liquid Glow Moist',
'link' => 'https://shopee.co.id/MAKE-OVER-Powerskin-Liquid-Glow-Moisturizer-45-ml-Face-Moisturizer-i.744873.12303345913?sp_atk=f50b7850-3d71-4e0a-a7e9-4b6ecf3a9b9e&xptdk=f50b7850-3d71-4e0a-a7e9-4b6ecf3a9b9e',
'description' => 'Make Over Powerskin Liquid Glow Moisturizer merupakan pelembap dengan SPF 40 yang memberikan hasil glow, direkomendasikan untuk konsumen dengan tipe kulit kering atau yang menginginkan hasil glow.

Benefit :
- Mengandung 5% Niacinamide
- Melembapkan kulit
- Tampilan glow
- SPF 40
- Ringan dipakai
- Mengandung Vit E dan antioksidan

How to Use :
1. Pastikan wajah dalam keadaan bersih
2. Pump 1-2 kali lalu ratakan produk pada wajah

Tips & Trick :
Setelah penggunaan produk, kamu dapat menambahkan pemakaian bedak atau foundation tanpa tambahan produk apapun',
'price' => 103900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
393 => 
array (
'id' => 394,
'brand_id' => 4,
'name' => 'GLOWINC POTION GENTLE+ Soothing Everyday Moisturizer',
'variation' => 'GENTLE+ Moisturizer',
'link' => 'https://shopee.co.id/GLOWINC-POTION-GENTLE-Soothing-Everyday-Moisturizer-i.744873.12906025158?sp_atk=58f3979a-ec14-455d-9d08-8105a8296b63&xptdk=58f3979a-ec14-455d-9d08-8105a8296b63',
'description' => 'Pelembap wajah yang berfungsi untuk menenangkan kulit & membantu memperkuat skin barrier. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Tekan & ambil moisturizer secukupnya.
Balurkan ke wajah secara merata. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Propolis
Triple ceramide
Turmeric
Aloe water',
'price' => 80100,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:22',
'updated_at' => '2022-06-27 15:42:22',
),
394 => 
array (
'id' => 395,
'brand_id' => 52,
'name' => 'SAFI Expert Solutions SERIES | Milk Drop Serum | Intensive Ampoule | Skin Moisturizer',
'variation' => 'Expert Moisturizer',
'link' => 'https://shopee.co.id/SAFI-Expert-Solutions-SERIES-Milk-Drop-Serum-Intensive-Ampoule-Skin-Moisturizer-i.744873.4484309525?sp_atk=aa7f0e71-e2b6-4740-9d52-6c833edbdc5f&xptdk=aa7f0e71-e2b6-4740-9d52-6c833edbdc5f',
'description' => 'Safi Expert Solutions Bio Skin Moisturizer dengan SPF 34 PA++ dirancang untuk melembabkan kulit dan menyamarkan penampakan garis penuaan dini, melindungi dari paparan sinar UV, radikal bebas & polutan lain untuk merawat kulit yang tampak muda, dan cerah bercahaya.

Safi Expert Solutions Bio Skin Moisturizer dengan SPF 34 PA++ merupakan formula yang efektif dan tidak berminyak. Diformulasikan dengan Amino Peptides untuk merawat kekenyalan kulit dan menyamarkan garis halus.

Merawat Keremajaan Kulit:
• Melindungi dari paparan sinar UV & radikal bebas dengan SPF 34 PA ++
• Membantu menyamarkan tampilan garis-garis halus
• Membantu mencerahkan warna kulit',
'price' => 199900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
395 => 
array (
'id' => 396,
'brand_id' => 45,
'name' => 'PYUNKANG YUL Moisture Cream 100ml [BPOM] | Cream Pelembab Wajah',
'variation' => 'Moisture Cream 100ml',
'link' => 'https://shopee.co.id/PYUNKANG-YUL-Moisture-Cream-100ml-BPOM-Cream-Pelembab-Wajah-i.744873.8117259735?sp_atk=e89ee0eb-b900-41b2-b4d3-15b670959f08&xptdk=e89ee0eb-b900-41b2-b4d3-15b670959f08',
'description' => 'Krim yang lembut dan efektif untuk memberikan kelembapan maksimal ke kulit yang sensitif dan dapat digunakan semua umur. Hypoallergenic dan bebas dari pewangi dan pewarna buatan. Krim lembut yang sempurna untuk anak dan kulit sensitif. Sangat cocok untuk kulit berminyak yang kering.

Cara Penggunaan:

1. Gunakan spatula yang bersih untuk mengambil krim dalam jumlah tepat.
2. Sebarkan di kulit dengan lembut hingga menyerap dengan baik.
*Tips: Cocok untuk kulit sensitif dan bisa digunakan anak-anak

Kandungan:
Coptis Japonica Root Extract, Butylene Glycol, Simmondsia Chinensis (Jojoba) Seed Oil, Polyglyceryl-3 Methylglucose Distearate, Cetyl Ethylhexanoate, Butylene Glycol Dicaprylate/Dicaprate, Isohexadecane, 1,2-Hexanediol, Cetearyl Alcohol, Glyceryl Stearate, Butyrospermum Parkii (Shea Butter), Sodium Acrylate/Sodium Acryloyldimethyl Taurate Copolymer, Polysorbate 80, Glyceryl Caprylate',
'price' => 220000,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
396 => 
array (
'id' => 397,
'brand_id' => 15,
'name' => '[BPOM] SOMEBYMI Super Matcha - Galactomyces - Yuja Niacin - AHA BHA PHA - Mask Pack - SOME BY MI',
'variation' => 'Moisture GEL CREAM',
'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Super-Matcha-Galactomyces-Yuja-Niacin-AHA-BHA-PHA-Mask-Pack-SOME-BY-MI-i.744873.11406740765?sp_atk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526&xptdk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526',
'description' => 'Kelebihan
- Menyegarkan kulit
- Meningkatkan elastisitas pori

Kekurangan
- Bisa jadi tidak cocok untuk kulit sensitif

Tekstur gel Moisture menyerap cepat (Kapan saja, dimanapun Anda membutuhkan). Tekstur penyegaran gel diserap ke dalam kulit dengan cepat segera setelah diaplikasikan pada kulit dan fitur jenis tabungnya yang praktis membuatnya nyaman untuk digunakan berkali-kali kapan pun, di mana pun Anda membutuhkan.',
'price' => 118500,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
397 => 
array (
'id' => 398,
'brand_id' => 29,
'name' => 'Cetaphil Daily Facial Moisturizer SPF 15 - 118 ml',
'variation' => 'Daily Facial Moistur',
'link' => 'https://shopee.co.id/Cetaphil-Daily-Facial-Moisturizer-SPF-15-118-ml-i.744873.1372616574?sp_atk=e5a51035-9f63-4f4e-804a-c64356de94b6&xptdk=e5a51035-9f63-4f4e-804a-c64356de94b6',
'description' => 'Cetaphil Daily Facial Moisturizer dengan SPF 15 adalah pelembab lembut yang cocok untuk semua jenis kulit. Penggunaan sehari-hari meningkatkan kemampuan kulit Anda untuk mempertahankan kelembaban vital.

• Pelembab wajah yang ringan dan halus membuat kulit terasa lembut dan terhidrasi
• Melindungi dari sinar UVA dan UVB yang merusak yang dapat menyebabkan garis dan kerutan dini
• Meningkatkan kemampuan kulit untuk mempertahankan kelembapan vital tanpa menyumbat pori-pori
• Tidak menyebabkan iritasi, bebas pewangi
• Ukuran yang tersedia: 4oz',
'price' => 150900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
398 => 
array (
'id' => 399,
'brand_id' => 30,
'name' => 'SUKIN Signature Original Hydrating Mist Toner - Facial Moisturiser - Deodorant - Body Wash',
'variation' => 'MOISTURIZER 50ml',
'link' => 'https://shopee.co.id/SUKIN-Signature-Original-Hydrating-Mist-Toner-Facial-Moisturiser-Deodorant-Body-Wash-i.744873.9268751474?sp_atk=05120c68-ac54-4eb0-8823-e88636fdd4e6&xptdk=05120c68-ac54-4eb0-8823-e88636fdd4e6',
'description' => '• Facial moisturiser
• Semua jenis kulit, terutama kulit normal - kering
• Melembapkan, melembutkan, menutrisi dan menenangkan',
'price' => 61900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
399 => 
array (
'id' => 400,
'brand_id' => 30,
'name' => 'Sukin Signature Facial Moisturiser | Pelembab Wajah Natural',
'variation' => 'Moist 50ml',
'link' => 'https://shopee.co.id/Sukin-Signature-Facial-Moisturiser-Pelembab-Wajah-Natural-i.744873.7487928622?sp_atk=c1f7e9a2-4617-4608-90e0-0ed03d7dbf74&xptdk=c1f7e9a2-4617-4608-90e0-0ed03d7dbf74',
'description' => '•Facial moisturiser
•Semua jenis kulit, terutama kulit normal - kering
•Melembapkan, melembutkan, menutrisi dan menenangkan

Bahan utama:
Rosehip oil, avocado, wheat germ, aloe vera

Cara penggunaan:
1.Setelah toner atau facial oil, aplikasikan pada wajah dan leher sambil ditepuk perlahan untuk membantu mempercepat penyerapan
2.Gunakan setiap hari, pagi dan malam',
'price' => 61900,
'category' => 'Moisturizer',
'created_at' => '2022-06-27 15:42:23',
'updated_at' => '2022-06-27 15:42:23',
),
400 => 
array (
'id' => 401,
'brand_id' => 15,
'name' => 'SOMEBYMI Mask Pack Line 25gr - Sheet Mask - SOME BY MI',
'variation' => 'Diamond Brihtening',
'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Mask-Pack-Line-25gr-Sheet-Mask-SOME-BY-MI-i.744873.16874602714?sp_atk=5b38444d-39fc-46f3-b184-9486da9d788c&xptdk=5b38444d-39fc-46f3-b184-9486da9d788c',
'description' => 'Bahan Utama Masker Tea Tree Calming
️ Ekstrak Daun Tea Tree >> Menenangkan Kulit
️ Ekstrak Centella >> Iritasi Kulit
️ Ekstrak Calendula >> Melembutkan Kulit
️ Ekstrak Mugwort >> Memurnikan Kulit
️ Pelindung Alami >> Desinfeksi, Antibakteri

Bahan Utama Masker Hyaluron Moisturizing 
️ Triple Hyaluronic Acid >> Mengisi Kelembaban
️ Air Oksigen Jeju >> Memurnikan Kulit
️ Ekstrak Kelp >> Anti-Polusi
️ Soothing Cooler >> Bahan yg menyejukkan

Bahan Utama Masker Red Diamond
️ Bubuk Berlian >> Memutihkan, Glowing
️ Ekstrak Mutiara >> Meningkatkan warna kulit
️ Ekstrak Pomegranate >> Revitalisasi
️ Minyak Rose Hip >> Tekstur kulit yg lebih halus
️ Amino Acid Complex >> Anti-Penuaan

Cara Menggunakan Glow Luminous Mask
1. Oleskan Toner untuk mempersiapkan kulit. Keluarkan sheet mask & letakkan di wajah menyesuaikan dengan garis wajah.
2. Setelah 10-20 menit, lepas masker. Tepuk kulit dengan lembut agar sisa essence terserap ke dalam kulit.

Yuja Niacin 30 Days Blemish Care Serum Mask menggunakan Lembar Bersertifikat Vegan.
Upaya untuk Hidup Vegan yg Ramah Lingkungan
→ Kami bertujuan untuk mendukung kehidupan kecantikan yg sehat & jujur, bersama dengan etis konsumerisme yg ramah lingkungan.

Resep wajah lebih cerah dalam 15 menit sehari
️ Ekstrak Goheung Yuja → Memberikan kelembapan, nutrisi
️ Niacinamide → Bahan pemutih
️ Glutathione, Arbutin → Membersihkan kulit
️ 4 jenis Vitamin → Mengisi ulang vitalitas
️ PLATOLWHITE-C (Bahan yg dipatenkan) → Membersihkan kulit
* Deskripsi di atas menjelaskan manfaat bahan.

Cara Menggunakan
1. Setelah membersihkan wajah, oleskan toner di sepanjang tekstur kulit
2. Buka lipatan & letakkan masker dengan rapi di sepanjang kontur wajah
3. Biarkan selama 10-20 menit & buang masker
4. Tepuk dengan lembut sisa essence untuk penyerapan yg lebih baik',
'price' => 18000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:35',
'updated_at' => '2022-06-27 15:42:35',
),
401 => 
array (
'id' => 402,
'brand_id' => 2,
'name' => 'Ariul My Mood Maker Chic - 20ml - Masker Wajah',
'variation' => 'Chic 20ml',
'link' => 'https://shopee.co.id/Ariul-My-Mood-Maker-Chic-20ml-Masker-Wajah-i.744873.17870453495?sp_atk=5b635029-ec3b-43b3-8eeb-2e957ff4c0f8&xptdk=5b635029-ec3b-43b3-8eeb-2e957ff4c0f8',
'description' => 'My Mood Maker Mask adalah masker dengan formulasi essence yang terserap dengan cepat dan terbukti efektif untuk menyegarkan kulit. Gunakan masker ini secara rutin untuk hasil yang maksimal.My Mood Maker Chic mengandung AHA   BHA untuk eksfoliasi ringan dan mengencangkan pori-pori. Dilengkapi juga dengan kandungan Anti-Sebum P yang berasal dari Witch-Hazel extract dan bunga Evening Primrose.Material Sheet Mask nya Lyocell 34 GSM yang terbuat dari 100% natural pulp untuk memberikan self-cooling effect saat digunakan.How to use :1. bersihkan wajah2. tempelkan masker3. tunggu 5-15 menit4. tepuk lembut wajah untuk penyerapan essence maksimal',
'price' => 18500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:35',
'updated_at' => '2022-06-27 15:42:35',
),
402 => 
array (
'id' => 403,
'brand_id' => 1,
'name' => 'Nacific Blackhead All Clear Pack 40ml - Masker Wajah',
'variation' => 'Blackhead Clear Pack',
'link' => 'https://shopee.co.id/Nacific-Blackhead-All-Clear-Pack-40ml-Masker-Wajah-i.744873.18310035306?sp_atk=fdb47041-4130-499e-9d21-e12cc1d439cf&xptdk=fdb47041-4130-499e-9d21-e12cc1d439cf',
'description' => 'BENEFITS:
Mengandung bubuk arang yang baik untuk pemurnian, membantu membersihkan sisa kotoran dan sebum dari dalam pori
Mengandung ekstrak green tea yang membantu menenangkan kulit
Mengandung ekstrak wijen hitam, kedelai hitam, dan ketan hitam yang mengangkat sel kulit mati dengan lembut
Mengandung ekstrak daun Cypress yang membantu mengencangkan pori dan menjadikan kulit halus
All Clear Brush dengan 12 ribu bulu sikat yang sangat halus berikuran 0.007mm

️CARA PENGGUNAAN ️
1. Basahi area yang akan diaplikasikan All Clear Pack
2. Oleskan pack secukupnya pada All Clear Brush
3. Gosokkan brush selama sekitar 1 menit di area yang bermasalah dengan komedo
4. Bilas sampai bersih dengan air hangat setelah selesai',
'price' => 89200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:35',
'updated_at' => '2022-06-27 15:42:35',
),
403 => 
array (
'id' => 404,
'brand_id' => 80,
'name' => '【BPOM】BIOAQUA Clay Mask Amino Acid Red Mud Face Mask - Masker Wajah 8g×10pcs Masker lumpur - BIO AQUA',
'variation' => 'Amino Acid Mask',
'link' => 'https://shopee.co.id/%E3%80%90BPOM%E3%80%91BIOAQUA-Clay-Mask-Amino-Acid-Red-Mud-Face-Mask-Masker-Wajah-8g%C3%9710pcs-Masker-lumpur-BIO-AQUA-i.744873.17659502295?sp_atk=bdeedbf6-e1c2-40a9-83f1-5460a7ecd8ff&xptdk=bdeedbf6-e1c2-40a9-83f1-5460a7ecd8ff',
'description' => 'Features：
Mengandung nicotinamide, jojoba esters, silk amino acids dan bahan lainnya, dengan tekstur yang lembut, halur dan jernih, oleskan dengan lembut untuk dapat segera merasakan kulit yang dibersihkan, melembabkan dan tidak membuat kulit terasa kencang, menyegarkan dan tidak berminyak, mengembalikan kulit yang kering, membuat kulit lembab dan lembut. Menunjukan kulit yang halus, bersih dan cerah.

How to use: 
Setelah mencuci muka, gunakan handuk hangat ke wajah selama 1-3 menit. Aplikasikan masker secukupnya ke kulit wajah (hindari mata dan bibir) secara merata. Bilas dengan air setelah 10-15 menit dan dilanjutkan dengan skin care rutin lainnya.',
'price' => 32400,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
404 => 
array (
'id' => 405,
'brand_id' => 81,
'name' => '[BPOM] Freeman Brightening Green Tea + Orange Blossom Mask',
'variation' => 'Freeman Green Tea',
'link' => 'https://shopee.co.id/-BPOM-Freeman-Brightening-Green-Tea-Orange-Blossom-Mask-i.744873.916761598?sp_atk=b55bebbf-8891-4fe9-83d8-9172a7bc34e8&xptdk=b55bebbf-8891-4fe9-83d8-9172a7bc34e8',
'description' => 'Manjakan diri dengan koktail antioksidan ini untuk kulit bercahaya! Green Tea & Orange Blossom Peel-Off Mask peremajaan Freeman dengan Green Tea, Orang Blossom dan Vitamin C membantu meminimalkan munculnya bintik hitam, mencerahkan warna kulit yang tidak merata. Sempurna untuk kulit normal hingga kombinasi.

CARA PENGGUNAAN
Oleskan lapisan merata ke wajah yang bersih dan kering. Diamkan 10-15 menit atau sampai kering. Lepaskan masker dengan lembut dari tepi luar. Bilas dengan air hangat. Gunakan dua kali seminggu atau sesering yang diperlukan.

BAHAN
Air/Aqua/Eau, Polivinil Alkohol, PEG-8, SD Alkohol 40-B, Propilen Glikol, Gliserin, Panthenol, Allantoin, Jus Daun Aloe Barbadensis, Ekstrak Buah Cucumis Sativus (Mentimun), Sodium PCA, Asam Askorbat, Tokoferil Asetat, Polisorbat 20, Diazolidinyl Urea, Methylparaben, Propylparaben, Fragrance (Parfum), Butylphenyl Methylpropional, Citronellol, Hexyl Cinnamal, Blue 1 (CI 42090).',
'price' => 69000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
405 => 
array (
'id' => 406,
'brand_id' => 41,
'name' => 'BREYLEE Acne Treatment Serum | BREYLEE Blackhead Mask | BREYLEE Pore Minimizer Serum | STEP 1 | 2',
'variation' => 'Blackhead Mask Step1',
'link' => 'https://shopee.co.id/BREYLEE-Acne-Treatment-Serum-BREYLEE-Blackhead-Mask-BREYLEE-Pore-Minimizer-Serum-STEP-1-2-i.744873.3005470138?sp_atk=432b57ab-9742-452c-805e-6086c9a4dd62&xptdk=432b57ab-9742-452c-805e-6086c9a4dd62',
'description' => '[INDIKASI]
Membantu mengatasi permasalahan komedo, pori-pori besar dan jerawat .

[CARA PENGGUNAAN]
1. Setelah membilas wajah, gunakan handuk hangat untuk membuka pori-pori pada wajah.
2. Aplikasikan STEP 1 Blackhead Mask untuk mengangkat komedo pada bagian hidung, dagu, pipi atau pun dahi lalu tempelkan kertas dan tunggu 3-5 menit (Gunakan Maks 2x seminggu)
3. Lalu bilas wajah dan lanjutkan dengan penggunaan STEP 2 Pore Serum.
4. Lanjutkan penggunaan Acne treatment serum 15 - 30 menit setelah penggunaan serum.

CATATAN:
1. Mohon untuk bisa mengirimkan Video Unboxing paket,Foto Resi dan Foto Produk Berkendala/ Rusak. Sehingga jika ada Kerusakan, Kekurangan Produk/Hadiah, atau Ketidaksesuaian Produk yang diterima bisa dilakukan validasi melalui kelengkapan tersebut.
2. Jika tidak memiliki 2 kelengkapan yang disebutkan, maka segala bentuk komplain yang masuk tidak bisa ditindak lanjuti atau dianggap tidak sah. *kecuali: memang ada kesalahan dari sisi Penjual
3. Kerusakan packaging hanya pada bagian luar (bagian dalam utuh, produk tidak ada kerusakan/kekurangan, dll) disebabkan penanganan paket dari Pihak Jasa Ekspedisi yang kurang baik. Diharapkan agar Pembeli bisa melakukan komplain langsung ke Pihak Jasa Ekspedisi.',
'price' => 89000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
406 => 
array (
'id' => 407,
'brand_id' => 81,
'name' => '[BPOM] Freeman Clearing Sweet Tea + Lemon Mask',
'variation' => 'Freeman Sweet Tea',
'link' => 'https://shopee.co.id/-BPOM-Freeman-Clearing-Sweet-Tea-Lemon-Mask-i.744873.916609307?sp_atk=6fca7e8a-b4ae-43cb-aae9-8ff0f79d8540&xptdk=6fca7e8a-b4ae-43cb-aae9-8ff0f79d8540',
'description' => 'Masker easy-to-peel-off clay ini membersihkan, menyerap minyak, dan memberikan pengencangan menyeluruh! Teh yang kaya antioksidan membantu melindungi kulit dari radikal bebas yang merusak dan Lemon membantu meringankan bintik hitam untuk kulit yang bercahaya. Sempurna untuk kulit normal hingga kombinasi.

KEY BENEFITS
Secara instan menghilangkan kotoran + nada untuk kulit bercahaya

Pesona kulit dengan sedikit kenyamanan selatan dalam bentuk Teh Manis yang ditaburi perasan Lemon yang menyegarkan! Masker tanah liat kupas kami memberikan manfaat pembersihan dan penyerap minyak yang Anda harapkan dari tanah liat, ditambah manfaat pengencangan dan pemurnian menyeluruh dari masker yang mudah dikupas! Teh yang kaya antioksidan dan Ekstrak Buah Lemon menenangkan untuk manfaat toning dan menenangkan terbaik.
- Sempurna untuk Kulit Normal ke Kombinasi
- Tidak Diuji pada Hewan, Bebas Paraben
- Ukuran: 175 ml
- Dibuat di USA

Cara Penggunaan
- Oleskan lapisan merata pada wajah yang bersih dan kering, hindari area mata, alis mata, garis rambut, dan bibir.
- Diamkan 5-10 menit atau sampai kering.
- Lepaskan masker dengan lembut dari tepi luar.
- Bilas dengan air hangat.
- Gunakan dua kali seminggu atau sesering yang dibutuhkan.',
'price' => 69000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
407 => 
array (
'id' => 408,
'brand_id' => 24,
'name' => 'SYB Natur90 Egg White | SYB Egg White Peel Of Mask',
'variation' => 'SYB Egg White',
'link' => 'https://shopee.co.id/SYB-Natur90-Egg-White-SYB-Egg-White-Peel-Of-Mask-i.744873.8984372036?sp_atk=d8068d10-de10-42be-9aa5-92654ce48cd6&xptdk=d8068d10-de10-42be-9aa5-92654ce48cd6',
'description' => 'Egg White Peel Off Mask dapat membantu membersihkan pori-pori wajah, dan menyegarkan kulit
wajah. Diformulasikan dengan tambahan bahan aktif Niacinamide, Allantoin, dan Egg Powder
untuk membantu mencerahkan, menutrisi, dan memberikan kelembapan pada kulit. Pemakaian
secara teratur akan menjaga kulit wajah lebih bersih, halus, dan cerah

Cara Pakai :
Bersihkan wajah, oles tipis peel off mask pada wajah dan leher (hindari area sekitar mata). Biarkan
selama 10-20 menit sampai masker mengering. Tarik ujung masker secara perlahan. Bilas wajah
hingga bersih.',
'price' => 11600,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
408 => 
array (
'id' => 409,
'brand_id' => 82,
'name' => 'True to Skin Supple Dream Gel Mask (Mugwort, Green Tea, Lotus Leaf)',
'variation' => 'Gel Mask Mugwort 50g',
'link' => 'https://shopee.co.id/True-to-Skin-Supple-Dream-Gel-Mask-(Mugwort-Green-Tea-Lotus-Leaf)-i.744873.15154641741?sp_atk=c63823b7-e01f-48d7-ab2d-1a4e5b644650&xptdk=c63823b7-e01f-48d7-ab2d-1a4e5b644650',
'description' => 'Supple Dream is a gel mask that contains skin-loving ingredients such as Mugwort, Green Tea, and Lotus Leaf. It instantly hydrates and plumps your skin and also contains ingredient such as Betaine Salicylate, Guava Leafs and Angelica Gigas Extract that helps with clear pore and treat acne gently. Leaving your skin feeling dreamy and supple!

Serta manfaat baik untuk kulit wajah, seperti:
Menenangkan kulit
Menghidrasi kulit
Meredakan jerawat
Antioksidan

Supple Dream Gel Mask dapat digunakan baik pagi ataupun malam hari atau kapanpun setelah membersihkan wajah. 

1. Bersihkan wajah
2. Oleskan Supple Dream Gel Mask pada wajah secara merata. Biarkan wajah menyerap nutrisinya selama 15-20 menit. 
3. Lalu bilas hingga bersih dengan air .',
'price' => 72000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
409 => 
array (
'id' => 410,
'brand_id' => 9,
'name' => 'Benton Goodbye Redness Centella Mask - 1 SACHET',
'variation' => 'Centella Mask 1pcs',
'link' => 'https://shopee.co.id/Benton-Goodbye-Redness-Centella-Mask-1-SACHET-i.744873.10620765490?sp_atk=56bba3d2-f94e-4db0-89b5-5e5d113ff314&xptdk=56bba3d2-f94e-4db0-89b5-5e5d113ff314',
'description' => 'Lembaran masker hypoallergenic dan sedikit asam, menenangkan kulit yang bermasalah sekaligus memberikan hidrasi dan nutrisi. 
Mengandung ekstrak Centella Asiatica, yang memiliki kemampuan untuk menenangkan dan mengurangi kemerahan pada kulit, serta Hyaluronic Acid untuk meningkatkan kelembapan kulit. 
Bebas dari bahan kimia yang keras dan berpotensi untuk menyebabkan iritasi seperti paraben, pewangi buatan, dan alkohol yang mudah menguap; cocok untuk semua jenis kulit, termasuk kulit sensitif sekalipun.',
'price' => 17000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
410 => 
array (
'id' => 411,
'brand_id' => 20,
'name' => 'HANASUI Mineral Mud Mask Korean Herbal | Sachet',
'variation' => 'Pore Minimizing',
'link' => 'https://shopee.co.id/HANASUI-Mineral-Mud-Mask-Korean-Herbal-Sachet-i.744873.10840300339?sp_atk=08e502ed-a409-484d-82c5-e251e204e050&xptdk=08e502ed-a409-484d-82c5-e251e204e050',
'description' => 'Hanasui menghadirkan Mud Mask dengan focus pada setiap  permasalahan kulit wajah yang sering dialami para wanita. Masker lumpur yang berasal dari kandungan alami yang tinggi akan mineral yang dapat membantu mencerahkan dan merawat kulit wajah 

Jerawat, Pori-pori yang besar serta kusam adalah penyebab utama dari berbagai masalah kulit. Kini masalah tersebut dapat diatasi dengan Hanasui Mineral Mud Mask

Korean Herbal memliki 3 bahan aktif untuk membantu mengecilkan pori-pori, Selain itu Hanasui Mud Mask juga Mengandung Shea butter, Niacinamide, Vitamin E dan Sodium Hyaluronate yang dapat membuat kulit wajah menjadi lebih lembap, lembut  dan segar.

Korean Herbal ( Pore Minimizing )

Manfaat :
•	Membantu meringkas pori-pori wajah 
•	Melembapkan kulit wajah 
•	Menjadikan kulit lebih lembut  dan segar.

Mengandung 3 bahan aktif untuk meringkas pori-pori :

Korean Herbal -> membantu mengecilkan pori-pori pada kulit.
1. Panax Ginseng Root Extract : Meningkatkan sintesis collagen dan elastisitas kulit wajah 
2. Niacinamide : Mencerahkan kulit dan mengurangi minyak berlebih
3. Sodium Hyaluronate : Menghidrasi serta mengunci kelembapan kulit wajah ',
'price' => 2200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
411 => 
array (
'id' => 412,
'brand_id' => 9,
'name' => '[BPOM] Benton Snail Bee High Content Mask Pack 20gr - 1 sachet',
'variation' => 'Mask Pack 1pcs',
'link' => 'https://shopee.co.id/-BPOM-Benton-Snail-Bee-High-Content-Mask-Pack-20gr-1-sachet-i.744873.2142964529?sp_atk=e81791cb-2d94-46c1-947f-a3903fd827f7&xptdk=e81791cb-2d94-46c1-947f-a3903fd827f7',
'description' => 'Berfungsi untuk:
-Melembabkan kulit sensitif dan kering
-Mencerahkan warna kulit kusam
-Meratakan warna kulit
-Menyeimbangkan kadar air dan minyak
-Super lightweight

Mengandung :
• Camellia Sinensis Leaf Water
• Snail Secretion Filtrate
• Bee Venom
• Sh-oligopeptide-1
• Berbagai ekstrak botanical',
'price' => 18500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
412 => 
array (
'id' => 413,
'brand_id' => 5,
'name' => 'POND\'S Juice Collection Mask Pack | PONDS Juice Collection Mask Pack | Sheet Mask',
'variation' => 'Aloe Vera Mask',
'link' => 'https://shopee.co.id/POND\'S-Juice-Collection-Mask-Pack-PONDS-Juice-Collection-Mask-Pack-Sheet-Mask-i.744873.5962044897?sp_atk=0a4826ee-640f-4f46-a4dc-c7285506b3f5&xptdk=0a4826ee-640f-4f46-a4dc-c7285506b3f5',
'description' => 'Ponds Juice Collection Sheet Mask Watermelon Extract 20G: Sheet mask yang diperkaya dengan Watermelon Extract, Vitamin E, dan Hyaluronic Acid, kulit terasa halus, menutrisi, dan melembapkan untuk kulit terasa kenyal dan fresh glowing.

Ponds Juice Collection Sheet Mask Aloe Vera Extract 20G: Sheet mask yang diperkaya dengan Aloe Vera Extract, Vitamin B3, dan Hyaluronic Acid, menutrisi, menyejukkan, dan melembapkan untuk kulit terasa kenyal dan fresh glowing.

Ponds Juice Collection Sheet Mask Orange Nectar 20G: Sheet mask yang diperkaya dengan Orange Nectar, Vitamin C, dan Hyaluronic Acid, mencerahkan, menutrisi, dan melembapkan untuk kulit terasa kenyal dan fresh glowing.

Dapatkan kulit glowing natural dengan 100% natural origin extract, 100% natural fiber sheet mask, 100% alcohol free, cocok untuk semua jenis kulit!',
'price' => 24200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
413 => 
array (
'id' => 414,
'brand_id' => 22,
'name' => 'SOMETHINC Mugwortella Charcoal Deep Pore Cleansing 10 Minutes Wash Off Mask | SOMETHINC Skin Goals Brightening Glow 10 Minutes Wash Off Mask',
'variation' => 'Mugwortella Charcoal',
'link' => 'https://shopee.co.id/SOMETHINC-Mugwortella-Charcoal-Deep-Pore-Cleansing-10-Minutes-Wash-Off-Mask-SOMETHINC-Skin-Goals-Brightening-Glow-10-Minutes-Wash-Off-Mask-i.744873.13519102291?sp_atk=4f7ede4d-656c-43e0-9b18-546d54160e09&xptdk=4f7ede4d-656c-43e0-9b18-546d54160e09',
'description' => 'Clay Mask berbahan dasar Bentonite Clay, Kaolin, Bamboo Charcoal bermanfaat untuk membantu membersihkan pori-pori dan menenangkan jerawat. Diinfus dengan Mugwort, Centella Asiatica, Dead Sea Mud, 7 Types of Natural Plants Power & Strawberry Seeds, yang dapat menjadikan masker ini sebagai pertolongan pertama pada kulit. 

Manfaat:
- Membantu membersihkan pori-pori
- Mengontrol produksi minyak berlebih
- Membantu menenangkan jerawat

Cara pemakaian:
- Bersihkan wajah dengan Low pH Gentle Jelly Cleanser.
- Gunakan aplikator silikon untuk mengaplikasikan masker pada wajah & leher (Hindari area mata & mulut/bibir). 
- Gunakan 1-2 kali seminggu.
- Tunggu kira-kira 10 menit sampai masker mengering, lalu bilas dengan air.
- Lanjutkan dengan toner & perawatan kulit berikutnya 

SOMETHINC Skin Goals Brightening Glow 10 Minutes Wash Off Mask
Clay Mask dengan gabungan Quadruple Brightening Complex: SabiWhite®, G2Light, Alpha Arbutin, Glutathione membantu mencerahkan kulit dan mengurangi hiperpigmentasi. Dengan tambahan Marine Collagen, Clay Mask ini juga dapat menjaga kekenyalan kulit sejak pemakaian pertama.

Manfaat: 
- Membantu mencerahkan kulit
- Mengurangi hiperpigmentasi
- Menjaga kekenyalan kulit

Cara pemakaian:
- Bersihkan wajah dengan Low pH Gentle Jelly Cleanser.
- Gunakan aplikator silikon untuk mengaplikasikan masker pada wajah & leher (Hindari area mata & mulut/bibir). 
- Gunakan 1-2 kali seminggu.
- Tunggu kira-kira 10 menit sampai masker mengering, lalu bilas dengan air.
- Lanjutkan dengan toner & perawatan kulit berikutnya',
'price' => 89000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
414 => 
array (
'id' => 415,
'brand_id' => 1,
'name' => 'NACIFIC Mask Pack Niacinamide | Herb Retinol | Cica Tea Tree | Vita Ceramide | AHA BHA - 1 SACHET',
'variation' => 'Niacinamide',
'link' => 'https://shopee.co.id/NACIFIC-Mask-Pack-Niacinamide-Herb-Retinol-Cica-Tea-Tree-Vita-Ceramide-AHA-BHA-1-SACHET-i.744873.9681977220?sp_atk=15f52ad9-03d4-4f19-8326-01da30d104ee&xptdk=15f52ad9-03d4-4f19-8326-01da30d104ee',
'description' => 'Dengan kelebihan lembaran masker berbahan dasar BAMBUMIN :
> Transpari materi yang sangat baik dengan metode khusus
> Bahan dasar selulosa yang didapatkan dari bambu
> Mash sheet hipo-alergenik dengan bahan yang ramah kulit
> Adhesi yang sangat baik untuk menyalurkan essence secara efektif ke kulit
> Retensi kelembaban yang sangat baik dengan lembar struktur lubang mikro

Ada 5 varian :
1. Niacinamide Brightening Mask Pack 
> Cocok untuk kulit kusam dan kasar
> Mengandung air bambu yang mengembalikan hidrasi kulit 
> Mengandung niacinamide yang membantu mencerahkan kulit
> Mengandung asam hialuronat yang memberikan kelembapan pada kulit 

Herb Retinol Relief Mask Pack 
> Cocok untuk kulit yang mulai mengendur
> Mengandung retinol yang memperkuat elastisitas kulit 
> Mengandung ekstrak lidah buaya yang melembapkan
> Mengandung ekstrak rosemary yang melembapkan dan menenangkan kulit 

Cica Tea Tree Relaxing Mask Pack 
> Cocok untuk kulit yang banyak trouble
> Mengandung ekstrak Centella Asiatica yang sangat baik dalam menenangkan kulit 
> Mengandung ekstrak tea tree yang membantu mengontrol sekresi sebum
> Mengandung Greenol, yaitu komponen berpaten yang terbuat dari 6 jenis tanaman herbal yang efektif dalam merilekskan kulit
> Mengandung air daun Cypress yang melembapkan dan mengurangi stress yang dirasakan kulit

Vita Ceramide Moisture Mask Pack 
> Cocok untuk kulit yang kusam dan mulai mengendur
> Mengandung Vitamin C yang merawat dan menjadikan kulit cerah dan bersinar
> Mengandung Ceramide NP yang melembapakan kulit 
> Mengandung ekstrak buah Sea Buckthorn yang menjadikan kulit bersih dan cerah
> Mengandung Plant Stem Cell yang membantu mengencangkan kulit

AHABHA Balancing Mask Pack 
> Cocok untuk kulit yang banyak sebum dan sel kulit mati
> Mengandung AHA, yang membantu dalam sebum care & exfoliating care
> Mengandung BHA, yang membantu dalam mengatasi blackhead
> Mengandung Anti Sebum-P untuk mengontrol sekresi sebum dan menjadikan kulit kesat & halus
> Mengandung Allantoin yang melembapkan dan memperbaiki kulit yang bermasalah',
'price' => 15000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
415 => 
array (
'id' => 416,
'brand_id' => 80,
'name' => 'BIOAQUA Face Mask centella asiatica/Hyaluronic acid/Avocado deep clean mud mask Pudding masker wajah - BIO AQUA',
'variation' => 'Avocado 1box',
'link' => 'https://shopee.co.id/%E3%80%90BPOM%E3%80%91BIOAQUA-Face-Mask-centella-asiatica-Hyaluronic-acid-Avocado-deep-clean-mud-mask-Pudding-masker-wajah-BIO-AQUA-i.744873.17960010974?sp_atk=696a4025-f073-4415-a83d-0625866d6dc2&xptdk=696a4025-f073-4415-a83d-0625866d6dc2',
'description' => 'Ukuran Perjalanan yang dikemas secara individual
Aman dan bebas polusi，Kecil dan portabel，Mudah dibawa

Masker Puding Rumput Laut Asam Hyaluronic
-Hidrasi yang dalam
Jauh ke dasar kulit, hidrasi osmotik
-Perbaiki penghalang yang rusak
Mengandung asam hialuronat yang diimpor dari Inggris untuk membantu memperkuat penghalang kulit
-Lembut dan menenangkan
Cocok untuk banyak jenis kulit

FILM Lumpur Pembersih Dalam Alpukat
-Mencerahkan warna kulit
Meningkatkan kusam dan kekasaran, membuat kulit lebih transparan
-Melembabkan
Ekstrak bahan alpukat, pelembab sambil mengunci kelembapan
-Pembersihan Mendalam
Membersihkan pori-pori dan kotoran

Masker Puding Centella Asiatica
-Bahan baku impor
Mengandung bahan perawatan kulit seperti Centella Asiatica, bahan baku yang diimpor dari Korea
-Perbaikan yang menenangkan
Perkuat bagian bawah otot, perbaiki penghalang kulit
-pelembab
Mengisi kembali kelembapan untuk kulit kering dan kekurangan air

CARA PENGGUNAAN
1. Pembersihan wajah
2. Oleskan masker lumpur secara merata pada wajah
3. Setelah 10-15 menit, usap wajah dengan lembut menggunakan tisu/kapas basah dan bilas dengan air
4. Bersihkan titik-titik mati',
'price' => 32400,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
416 => 
array (
'id' => 417,
'brand_id' => 50,
'name' => 'Emina Green Tea Latte Face Mask 60ml',
'variation' => 'GreenTea Latte Mask',
'link' => 'https://shopee.co.id/Emina-Green-Tea-Latte-Face-Mask-60ml-i.744873.505093444?sp_atk=b880860e-dc4c-46da-b0e1-dc392f5f0d8d&xptdk=b880860e-dc4c-46da-b0e1-dc392f5f0d8d',
'description' => 'Kombinasi ekstrak susu dan teh hijau membantu memberikan after-feel yang halus, kenyal, dan menenangkan.

Emina, setiap hari adalah kesempatan untuk bermain, mencoba hal baru, berbagi tawa dan kebahagiaan. Emina mengerti bahwa cantik itu sederhana dan menyenangkan. Anda bisa menjadi lebih cantik tidak hanya dalam kebahagiaan Anda tetapi dengan memilih riasan yang tepat untuk kulit Anda.

Emina juga memahami kebutuhan unik kulit Anda. Untuk itulah Emina menghadirkan rangkaian lengkap produk perawatan dan kosmetik yang aman digunakan dan mudah diaplikasikan untuk Anda. Karena kamu dilahirkan untuk kekasih',
'price' => 24500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
417 => 
array (
'id' => 418,
'brand_id' => 83,
'name' => 'VIENNA Face Spa Peel Off Mask Purifying Black Mud 15ml Sachet - 1 Sachet',
'variation' => 'Black Mud 15ml',
'link' => 'https://shopee.co.id/VIENNA-Face-Spa-Peel-Off-Mask-Purifying-Black-Mud-15ml-Sachet-1-Sachet-i.744873.11470200483?sp_atk=9168c984-dc52-433e-a149-e31e2fee50a3&xptdk=9168c984-dc52-433e-a149-e31e2fee50a3',
'description' => 'Berikan energi pada kulit dengan lumpur hitam alami yang kaya akan mineral. Perlahan mengangkat kulit mati dan kering agar kulit lebih segar, bersih dan berseri-seri. Diperkaya akan: Witch Hazel untuk membantu menjaga kelembaban kulit. Aloe Vera Mengandung senyawa saponin yang berfungsi sebagai antiseptik yang membantu membunuh bakteri penyebab jerawat. Green Tea untuk menyejukan dan membersihkan pori-pori pada wajah. Herbal whitening complex untuk perawatan kulit tampak putih dan cerah.
Cara pemakaian : bersihkan wajah dengan perlahan pakai sekali atau dua kali dalam seminggu dengan olesan yang tipis pada area wajah hindari dareha mata rileks dan diamkan 15-20 menit hingga kering. Angkat masker dengan menariknya secara perlahan dari ujung. Bilas hingga bersih hindari penggunaan pada kulit sensitif dan bermasalah.',
'price' => 6550,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
418 => 
array (
'id' => 419,
'brand_id' => 20,
'name' => 'HANASUI Mineral Mud Mask Asian Heritage | Sachet',
'variation' => 'Acne Care',
'link' => 'https://shopee.co.id/HANASUI-Mineral-Mud-Mask-Asian-Heritage-Sachet-i.744873.11340235524?sp_atk=dcbb2da2-6217-46f8-b3a5-507cd96ec484&xptdk=dcbb2da2-6217-46f8-b3a5-507cd96ec484',
'description' => 'Hanasui menghadirkan Mud Mask dengan focus pada setiap  permasalahan kulit wajah yang sering dialami para wanita. Masker lumpur yang berasal dari kandungan alami yang tinggi akan mineral yang dapat membantu mencerahkan dan merawat kulit wajah 

Jerawat, Pori-pori yang besar serta kusam adalah penyebab utama dari berbagai masalah kulit. Kini masalah tersebut dapat diatasi dengan Hanasui Mineral Mud Mask

Hanasui Mud Mask Asian Heritage mengandung  Salicylic Acid dan Tree tea oil yang dapat merawat kulit berjerawat. 
Selain itu Hanasui Mud Mask juga Mengandung Shea butter, Niacinamide, Vitamin E dan Sodium Hyaluronate yang dapat membuat kulit wajah menjadi lebih lembap, lembut  dan segar.

Asian Heritage 

Manfaat : 

•	Membantu merawat kulit berjerawat 
•	Melembapkan kulit wajah 
•	Menjadikan kulit lebih lembut  dan segar

Asian Heritage -> merawat kulit berjerawat
1. Salicylic Acid : Meredakan Peradangan dan mengurangi bakteri penyebab jerawat
2. Niacinamide :  Mencerahkan kulit dan mengurangi minyak berlebih
3. Tea Tree Oil : Merawat Kulit Berjerawat',
'price' => 2200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:36',
'updated_at' => '2022-06-27 15:42:36',
),
419 => 
array (
'id' => 420,
'brand_id' => 50,
'name' => 'Emina 2 in 1 Scrub Mask With Walnut Scrub | Masker Wajah 2in1 50 ML',
'variation' => 'Scrub mask Walnut',
'link' => 'https://shopee.co.id/Emina-2-in-1-Scrub-Mask-With-Walnut-Scrub-Masker-Wajah-2in1-50-ML-i.744873.5827669529?sp_atk=d7412a92-f8ea-4a1d-836f-82bef7f3a33a&xptdk=d7412a92-f8ea-4a1d-836f-82bef7f3a33a',
'description' => 'Dengan kandungan walnut scrubnya membantu mengangkat kotoran dan sel kulit mati pada wajah. dilengkapi dengan 5 botanical extract yang membuat kulit terasa lembab, halus, dan kenyal.

Cara Pakai :
- scrub : aplikasikan dan pijat lembut wajah dengan gerakan memutar lalu bilas hingga bersih.
- masker : aplikasikan pada wajah, diamkan selama 10-15 menit, kemudian bilas. gunakan 2-3 kali seminggu.
Note: karena butiran scrubnya cukup besar, maksimal seminggu pakai 2-3x saja ya. Jangan tiap hari supaya tidak iritasi

Kelebihan EMINA Scrub Mask 2 in 1:
Produk terbaru yang multifungsi -> bisa berfungsi sebagai masker dan scrub sekaligus
Cocok untuk kulit yang kasar dan kusam
Mengandung walnut yg sangat bagus untuk merawat kulit,bisa untuk mengangkat kotoran dan sel kulit mati pada wajah (Psttt... Walnut mengandung antioksidan lohh, dan diklaim 15x lebih efektif dari Vitamin E)
Dilengkapi 5 botanical extract yang bisa membuat kulit terasa halus, lembut dan kenyal
Sudah termasuk mini spatula di dalam kemasan',
'price' => 33500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
420 => 
array (
'id' => 421,
'brand_id' => 37,
'name' => 'Saturday Looks Minty Gentle Scrub Face Mask',
'variation' => 'Minty Gentle Scrub',
'link' => 'https://shopee.co.id/Saturday-Looks-Minty-Gentle-Scrub-Face-Mask-i.744873.11271249752?sp_atk=c5e3c843-5291-4804-a74b-0988e3085892&xptdk=c5e3c843-5291-4804-a74b-0988e3085892',
'description' => 'Kegunaan Minty Gentle Scrub Face Mask :
Mempercepat penyembuhan jerawat
Mengurangi rasa sakit pada jerawat meradang
Mengecilkan pori
Membersihkan komedo
Menyerap minyak berlebih pada wajah tanpa membuat kulit wajah menjadi kering
Mengangkat sel kulit mati, sesudahnya kulit menjadi lebih cerah, lembut, dan bersih

Cara pemakaian Minty Gentle Scrub : Bersihkan wajah, oleskan pada wajah, diamkan 15-20menit. Bilas dengan air bersih.

Notes : 
Untuk kulit berminyak boleh pakai hingga masker mengering (kering). 
Untuk kulit kering cukup pakai maksimal 15menit. 
Pemakaian seminggu 2-3x pemakaian.

Best Before / PAO : 6bulan
artinya setelah 6bulan dari saat masker dibuka, efek dari masker sudah tidak semaksimal pertama kali dibuka.',
'price' => 55000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
421 => 
array (
'id' => 422,
'brand_id' => 57,
'name' => 'Acnes Pore Strip 3 Sheets | Masker Komedo',
'variation' => 'Acnes Pore Strip',
'link' => 'https://shopee.co.id/Acnes-Pore-Strip-3-Sheets-Masker-Komedo-i.744873.1705777264?sp_atk=a462390f-5b56-4f6f-a536-c4a387b60bd1&xptdk=a462390f-5b56-4f6f-a536-c4a387b60bd1',
'description' => 'Mengandung Tea Tree Oil untuk membantu menyamarkan noda hitam dan Witch Hazel Extract untuk membantu mengecilkan poripori Membantu membersihkan minyak dan kotoran serta mengangkat komedo sehingga poripori kulit tampak lebih kecil dan lebih bersih

Cara pemakaian
Pemakaian dianjurkan 3 hari sekali Setelah hidung dibasahi dengan air hangat dan poripori terbuka pada saat itulah pakai pore strip ini

Komposisi
PVPPA Copolymer Polyvnyl Alcohol Water Propylene Glycol Glycerin Bentonite Kaolin Hamamelis virgiana witch hazel Extract Alcohol Denat Butylene Glycol Methylparaben Ethylparaben Propylparaben CI 77891 Glyceryl Isostearate Melaleuca altemifolia tea tree Leaf Oil',
'price' => 10700,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
422 => 
array (
'id' => 423,
'brand_id' => 20,
'name' => 'Hanasui Egg White Peel Off Mask - 80gr',
'variation' => 'HANA Egg White Peel',
'link' => 'https://shopee.co.id/Hanasui-Egg-White-Peel-Off-Mask-80gr-i.744873.2693814473?sp_atk=3266c64e-ed29-491d-8bca-113c56f90334&xptdk=3266c64e-ed29-491d-8bca-113c56f90334',
'description' => 'Diperkaya kandungan putih telur untuk mengangkat kotoran dan sel kulit mati, mengecilkan pori-pori, serta menjadikan wajah lebih kencang, bersih, dan bercahaya.Kandungan Utama :AlbuminNiacinamide (Vitamin B3)AllantoinGlyserin BENEFIT:Mencerahkan warna kulitMenghilangkan bintik hitam pada kulit wajahMengangkat komedo dan jerawat, Melembutkan & mengencangkan kulit wajah',
'price' => 12600,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
423 => 
array (
'id' => 424,
'brand_id' => 11,
'name' => 'Wardah Nature Daily Sheet Mask 20ml - 1 sachet',
'variation' => 'Rice',
'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Sheet-Mask-20ml-1-sachet-i.744873.2165956651?sp_atk=8a55a213-d0d7-4b56-9898-bb0178591928&xptdk=8a55a213-d0d7-4b56-9898-bb0178591928',
'description' => 'Wardah Nature Daily Sheet Mask merupakan masker berbentuk lembaran yang mengandung Micro Particle Essence sehingga dapat menghidrasi kulit secara optimal, serta mengandung kandungan natural dalam setiap variannya yang diperuntukkan untuk berbagai kebutuhan kulit.

Wardah Nature Daily Sheet Mask tersedia dalam 4 varian natural:
1. Green Tea (Calming): Diambil dari Green Tea terpilih yang tumbuh di Gunung Alishan, menghasilkan kesegaran yang mampu memberikan sensasi tenang pada kulit. Menyejukkan dan mengurangi kemerahan pada kulit.
2. Rice (Revitalizing): menjaga elastisitas kulit untuk wajah tampak lebih muda.
3. Rose (Smoothing): Diambil dari Rose terpilih yang tumbuh di pantai Korea sehingga menjadikan kulit terasa lebih halus dan tampak flawless.
4. Vitamin C (Brightening): Mencerahkan kulit, wajah tampak lebih glowing.
5. Aloe Vera (Hydrating) :Melembabkan dan memberikan kesegaran ekstra pada kulit.',
'price' => 12750,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
424 => 
array (
'id' => 425,
'brand_id' => 50,
'name' => 'Emina Aqua Infused Sleeping Mask 30g',
'variation' => 'Emina Sleeping Mask',
'link' => 'https://shopee.co.id/Emina-Aqua-Infused-Sleeping-Mask-30g-i.744873.7113203524?sp_atk=ba1db04d-2e81-469c-a575-0092dfae1e4e&xptdk=ba1db04d-2e81-469c-a575-0092dfae1e4e',
'description' => 'Diperkaya dengan Ekstrak canadian willlowherb dan bahan kandungan lainnya yang membantu kulit terlihat glowing dan lembab di pagi hari.',
'price' => 36200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
425 => 
array (
'id' => 426,
'brand_id' => 20,
'name' => 'Hanasui Naturgo Lightening Peel Off Mask (TUBE) - Masker Wajah - Peel Off - 60gr',
'variation' => 'Peel Off Mask Tube',
'link' => 'https://shopee.co.id/Hanasui-Naturgo-Lightening-Peel-Off-Mask-(TUBE)-Masker-Wajah-Peel-Off-60gr-i.744873.4836359629?sp_atk=1168b9a9-de6e-4649-9efb-035283215333&xptdk=1168b9a9-de6e-4649-9efb-035283215333',
'description' => 'Wajah Kusam & Komedo Numpuk ?? Tenang.. Hanasui Naturgo LIGHTENING PEEL OFF MASK juara nya.
Naturgo Lightening peel off mask ini best seller banget lho karna emang ampuh banget angkat sel kulit mati & komedo yg membandel di wajah & kandungan Vitamin B3 yg berfungsi utk mencerahkan kulit sekaligus membuat kulit senantiasa lebih halus, lembut & lembab.
Sekarang ada kemasan baru, yg lebih praktis dlm kemasan Tube, isi lebih banyak & lebih hemat.

MANFAAT :
1. Mencerahkan Kulit
2. Ampuh mengangkat kotoran & komedo di wajah
3. Memudarkan bintik hitam di wajah
4. Mengontrol kadar minyak di wajah
5. Merawat kulit yg berjerawat
6. Menghaluskan, Melembutkan & mengencangkan kulit wajah
7. Membersihkan pori kulit secara menyeluruh

CARA PEMAKAIAN :
- Apply masker pada wajah yang bersih & dlm keadaan kering
- Oleskan masker ke wajah & hindari area rambut, mata & alis
- Tunggu hingga kering sekitar 15-20 menit
- Setelah mengering, kelupaskan masker secara perlahan dari bawah ke atas',
'price' => 21000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
426 => 
array (
'id' => 427,
'brand_id' => 52,
'name' => 'SAFI Age Defy Gold Water Essence 100 ml / mini size 30 ml / Safi Age Defy Serum / Age Defy SERIES / Skincare Skin care',
'variation' => 'SAFI MASKER PUTIH',
'link' => 'https://shopee.co.id/SAFI-Age-Defy-Gold-Water-Essence-100-ml-mini-size-30-ml-Safi-Age-Defy-Serum-Age-Defy-SERIES-Skincare-Skin-care-i.744873.1353071060?sp_atk=b539a712-c2fe-4701-abf4-4238a2c3c49a&xptdk=b539a712-c2fe-4701-abf4-4238a2c3c49a',
'description' => 'Dengan double efek, kombinasi Gold Extract dan Silk Protein, membantu : 
- Memelihara struktur kulit, tidak hanya merawat bagian luar tetapi juga bagian dalam kulit, merawat keremajaan kulit dengan optimal
- Diperkaya dengan BIO HYALURONIC yang mempertahankan dan memelihara kelembapan sepanjang hari agar kulit terasa halus dan lembut serta mempersiapkan kulit untuk produk perawatan kulit berikutnya

Cara Pakai : 
Usapkan pada wajah dan leher. Pijat lembut dengan gerakan memutar. ',
'price' => 39000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
427 => 
array (
'id' => 428,
'brand_id' => 84,
'name' => 'Fair & Lovely Multivitamin Serum Sheet Mask / Masker Wajah 20g',
'variation' => 'Vita Glow Mask 20gr',
'link' => 'https://shopee.co.id/Fair-Lovely-Multivitamin-Serum-Sheet-Mask-Masker-Wajah-20g-i.744873.7161897421?sp_atk=a3efd69d-bfff-489c-86fd-074ab8a21b9a&xptdk=a3efd69d-bfff-489c-86fd-074ab8a21b9a',
'description' => 'Masker Serum Pencerah Diperkaya Dengan Multivitamin & 100X Serum*, Bermanfaat Untuk:
1. Wajah Glowing Seketika Hanya Dalam 15 Menit
2. Menutrisi Kulit Agar Terasa Kenyal, Halus, Dan Lembut
3. Menyamarkan Noda Hitam Dan Bekas Jerawat 
4. Terbuat Dari 100% Serat Alami Yang Cocok Untuk Dipakai Setiap Hari

Cocok Untuk Semua Tipe Kulit
* Dibandingkan Dengan Rata-Rata Kandungan Glycerin Fair & Lovely Multivitamin Moisturizer',
'price' => 8500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
428 => 
array (
'id' => 429,
'brand_id' => 85,
'name' => 'SALSA Sheet Mask - Masker Wajah Daily / Hyaluronic / Vitamin ABC / Snail',
'variation' => 'Hyalu Sheet Mask',
'link' => 'https://shopee.co.id/SALSA-Sheet-Mask-Masker-Wajah-Daily-Hyaluronic-Vitamin-ABC-Snail-i.744873.14232467101?sp_atk=59dbe8ef-3d81-45ed-93ee-e7829ad23add&xptdk=59dbe8ef-3d81-45ed-93ee-e7829ad23add',
'description' => 'SALSA Sheet Mask - Daily Mask untuk setiap kebutuhan kulit wajahmu! Dengan Pearl Layer Technology, menghasilkan essence yang mudah menyerap ke dalam lapisan kulit terdalam dan memudahkan penggunaan dengan Jade Roller. 
Menciptakan kulit lembab dan kenyal hanya dalam 15 menit!

SALSA Sheet Mask hadir dalam 3 varian untuk setiap kebutuhan kulitmu:

- SALSA Vitamin ABC Sheet Mask (Pink) dengan Retinol, Niacinamide, dan Ascorbic Acid 
untuk mencerahkan, menenangkan kulit kemerahan dan mencegah jerawat, serta menguatkan skin barrier

- SALSA Snailed It Sheet Mask (Gold) dengan Golden Cocoon, Royal Jelly, dan Snail Mucin (Secretion Filtrate)
untuk menenangkan, memperbaiki tekstur kulit wajahmu dan membantu memudarkan bekas jerawat sekaligus anti aging

- SALSA Hyalu Sheet Mask (Blue) dengan Hyaluronic Acid dan Collagen
untuk melembabkan dan menghidrasi kulit wajah yang kering dan kusam, serta mengencangkan dan menambah elastisitas kulit wajah

Cara penggunaan:
Dapat digunakan setiap hari. Bersihkan wajah, lalu aplikasikan SALSA Sheet Mask pada wajah sesuai dengan daerah mata dan bibir. Pijat lembut, lalu lepaskan masker setelah 15 menit.',
'price' => 6900,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
429 => 
array (
'id' => 430,
'brand_id' => 19,
'name' => 'Azarine Purifying Deep Cleansing Clay Mask 60gr',
'variation' => 'Clay Mask 60gr',
'link' => 'https://shopee.co.id/Azarine-Purifying-Deep-Cleansing-Clay-Mask-60gr-i.744873.11044866911?sp_atk=606b1259-a0e3-4bbd-9f44-d89af5b761f8&xptdk=606b1259-a0e3-4bbd-9f44-d89af5b761f8',
'description' => 'Clay mask masker sekaligus pembersih wajah untuk mengecilkan & membersihkan pori, merawat kulit berjerawat dan mengontrol minyak berlebih. Dengan Inovasi terbaru 12 Veggie GreenTox yaitu 12 ekstrak tumbuhan hijau untuk merawat kulit agar halus dan bebas jerawat. DI formulasikan juga dengan teknologi encapsulated popping charcoal untuk menyerap minyak dan membersihkan pori hingga dalam untuk mengangkat minyak, sel kulit mati dan kotoran. 
No parfum, No alcohol, No BHA ( bisa untuk bumil dan busui)

Technology: 12 Veggie GreenTox + Colour changing popping charcoal

Manfaat: 
- Membersihkan pori hingga dalam / deep cleansing untuk angkat kotoran, sel kulit mati dan sebum
- Mengecilkan pori & menghaluskan kulit
- Menyerap minyak/ sebum berlebih 
- Merawat kulit yang berjerawat dan menghambat pertumbuhan bakteri penyebab jerawat
- Menenangkan kulit yang iritasi / meradang

Cara Pakai:
Oleskan Purifying Deep Cleansing Clay Mask wajah yang bersih dan kering. Hindari area mata & bibir. Diamkan masker  selama 15-20 menit, lalu bilas dengan air hingga bersih. Untuk hasil maksimal, gunakan 2-3 x dalam seminggu. 

Key ingredients:
1. 12 Veggie GreenTox: Memberishkan pori, menutrisi kulit dan mengontrol sebum
2. Encapsulated charcoal : Menyerap minyak dan membersihkan pori
3. matcha: antioksidan, mengencangkan & menghaluskan kulit
4. Ceramide 3: Memperbaiki tekstur kulit dan garis pertahanan kulit / skin barrier',
'price' => 50500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
430 => 
array (
'id' => 431,
'brand_id' => 44,
'name' => 'Viva Waterdrop Sleeping Mask | Viva White Water Drop Night Mask | tntbeauty TnT Beauty Shop',
'variation' => 'Viva Waterdrop Mask',
'link' => 'https://shopee.co.id/Viva-Waterdrop-Sleeping-Mask-Viva-White-Water-Drop-Night-Mask-tntbeauty-TnT-Beauty-Shop-i.744873.2436449180?sp_atk=cf4a65d5-b612-415c-b7bc-168b4d09da6e&xptdk=cf4a65d5-b612-415c-b7bc-168b4d09da6e',
'description' => 'SLEEPING MASK dengan teknologi Waterdrop & Moisture Lock.

Over Night Treatment Formula for a Lively Skin :
- Sprulina Extract : kaya protein dan mineral
- Collagen : membantu menghindari timbulnya tanda-tanda penuaan diri
- Aloe Vera Gel : melembabkan, menyejukan & memberikan sensasi yang menenangkan
- Licorice Extract : bahan pencerah alami

Rasakan manfaatnya bangun di pagi hari.',
'price' => 21400,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
431 => 
array (
'id' => 432,
'brand_id' => 11,
'name' => 'Wardah Nature Daily Mineral Clarifying Clay Mask 60ml | Masker Wajah',
'variation' => 'Clarifing clay mask',
'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Mineral-Clarifying-Clay-Mask-60ml-Masker-Wajah-i.744873.7420726645?sp_atk=79472cb9-cb7b-4408-96c7-68629f04685a&xptdk=79472cb9-cb7b-4408-96c7-68629f04685a',
'description' => 'Masker yang membantu mengangkat minyak berlebihan , membersihkan dan membuat kulit terasa halus serta membantu menjaga kelembaban kulit.
Mudah banget, yang pasti sebelum pakai masker ini pastikan wajah kamu bersih, cuci muka dulu yang bersih, Lalu oleskan masker secara merata pada wajah. Dan hindari area mata dan bibir
Biarkan masker mengering selama 10 - 15 menit maximal 20 menitt, 
Kemudian bilas deh dengan air bisa air hanget atau biasa. Kalau aku suka bilas pakai air biaasa dan pakai spons biar keangkat maximal clay masknya, setelah bersih aku tutup pori - pori pakai es batu yang di gosok - gosok lembut di bagian wajah t, Tapi untuk kalian yang mau pakainya ga ribet langsung bilas aja jg ga masalah

Dan emang produk mask clay ini bisa di pakai setiap hari kok, jadi ga perlu kawatir. Ngebantu juga untuk mengurangi minyak berlebih pada kulit, menjaga kelembaban kulit. Setelah pemakaian kulit terasa kenyal, kencang, dingin halus dan berasa ringan gitu. Yang paling aku suka tuh testurenya halusss gitu jadi di pake kewajahh jatuhnya enak, meski tanpa aplikator pakai tangan aja udahh rata. Lagian juga semakin halus makin cepet meresap ke kulit juga kannn kaya set mask semakin watery semain cepet meresap kekulitnyaa',
'price' => 15000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
432 => 
array (
'id' => 433,
'brand_id' => 33,
'name' => 'Himalaya Purifying Neem Mask | Masker Wajah | 50mL | 100mL | 150mL',
'variation' => 'Neem Mask 15ml',
'link' => 'https://shopee.co.id/Himalaya-Purifying-Neem-Mask-Masker-Wajah-50mL-100mL-150mL-i.744873.8510917465?sp_atk=441ad0d6-be1d-4ba7-83b4-f7e42b422b1b&xptdk=441ad0d6-be1d-4ba7-83b4-f7e42b422b1b',
'description' => 'Masker wajah membantu mengatur sekresi minyak berlebihan, membersihkan pori-pori yang tersumbat dan merawat kulit berjerawat. Neem terkenal dengan sifat pembersih dan antibekteri dikombinasikan dengan kunyit dan fuller’s earth ( Multani mitti ) menyejukkan kulit, memperbaiki tekstur kulit dan menjadikan kulit anda menjadi segar dan sehat.

Cara Pakai: oleskan secara merata pada wajah dan leher yang telah dibersihkan, hindari area sekitar mata. Biarkan mongering selama 10-15 menit. Bersihkan dengan spons basah dan bilas dengai air dingin. Gunakan sekali atau 2 kali dalam seminggu. Jangan oleskan pada kulit yang luka atau mengalami radang.',
'price' => 25000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
433 => 
array (
'id' => 434,
'brand_id' => 12,
'name' => 'NPURE Cica Face Wash - Face Toner - Essence - Primer Serum - Day Cream - Night Cream - Acne Spot - Sunscreen - Acne Pad - Mask - N\'Pure Cica Series - Anti Acne - Anti Jerawat',
'variation' => 'Clay Mask 50gr',
'link' => 'https://shopee.co.id/NPURE-Cica-Face-Wash-Face-Toner-Essence-Primer-Serum-Day-Cream-Night-Cream-Acne-Spot-Sunscreen-Acne-Pad-Mask-N\'Pure-Cica-Series-Anti-Acne-Anti-Jerawat-i.744873.15438843752?sp_atk=9359c203-4646-47db-bf21-fb41a5e3f54d&xptdk=9359c203-4646-47db-bf21-fb41a5e3f54d',
'description' => 'Clay Mask berbahan dasar bentonit dan kaolin diperkaya dengan centella asiatica dan bubuk kulit kakao. Masker tanah liat ini akan membersihkan kulit Anda hingga ke pori-pori yang dalam.',
'price' => 107100,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
434 => 
array (
'id' => 435,
'brand_id' => 80,
'name' => 'BIOAQUA Yeast Collagen Mask Cream 30g - Masker Face Mask - Masker Peel Off - BIO AQUA',
'variation' => 'Yeast Collagen Mask',
'link' => 'https://shopee.co.id/%E3%80%90BPOM%E3%80%91BIOAQUA-Yeast-Collagen-Mask-Cream-30g-Masker-Face-Mask-Masker-Peel-Off-BIO-AQUA-i.744873.19608060816?sp_atk=0597f123-292b-4faa-940e-9cfb74c20137&xptdk=0597f123-292b-4faa-940e-9cfb74c20137',
'description' => 'Mengandung ekstrak hydrolyzed yeast dan hydrolyzed collagen, tekstur yang halus dan melembabkan kulit yang kering, membuat kulit halus dan lembut, mengisi kulit dengan kelembaban dan dengan halus merawat kulit yang indah.

Aplikasikan krim secara merata pada wajah yang telah bersih, diamkan hingga kering selama 30 menit, tarik masker secara perlahan dari wajah, bilas wajah sampai bersih.',
'price' => 32500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:37',
'updated_at' => '2022-06-27 15:42:37',
),
435 => 
array (
'id' => 436,
'brand_id' => 80,
'name' => 'BIOAQUA 24K Gold Facial Mask | Contain facial wash/sheet mask/essence serum - BIO AQUA',
'variation' => '24K Gold Facial Mask',
'link' => 'https://shopee.co.id/%E3%80%90BPOM%E3%80%91BIOAQUA-24K-Gold-Facial-Mask-Contain-facial-wash-sheet-mask-essence-serum-BIO-AQUA-i.744873.17259435033?sp_atk=18f14a7c-43ba-4fac-a1d4-98f4680fe085&xptdk=18f14a7c-43ba-4fac-a1d4-98f4680fe085',
'description' => 'Perawatan menyeluruh
Portabel, penting untuk perjalanan
Tiga langkah untuk meremajakan kulit
Langkah 1 Pembersihan
Busa yang kaya, pembersihan lembut kotoran dan minyak berlebih pada kulit wajah

Langkah 2：Masker wajah
-Melembabkan secara mendalam, memperbaiki keadaan kulit yang kasar, kering dan dehidrasi
-Kolagen terhidrolisis dapat melembabkan dan memutihkan, meningkatkan elastisitas kulit
-Kain film ringan, pas dengan kulit secara merata dan halus

Langkah 3：Perawatan kulit
-Perawatan kulit dari bawah，Penetrasi dalam，Penghalang Stabilitas
-Berbagai ekstrak tumbuhan, menutrisi kulit secara mendalam, memberikan perawatan kulit yang lebih teliti

Cara Penggunaan
-Pembersihan
Setelah berbusa jumlah pembersihan yang sesuai (①), pijat lembut kulit wajah dengan gerakan melingkar dengan tangan Anda, lalu bilas sampai bersih dengan air hangat

- Masker wajah
Setelah membongkar masker (②), buat masker pas di wajah secara merata, tunggu 15-20 menit untuk melepas masker, dan tepuk-tepuk kelebihan cairan sampai meresap

-Perawatan kulit
Setelah membersihkan dan mengencangkan, ambil produk ini dalam jumlah yang sesuai (③) dan oleskan secara merata pada wajah, pijat dengan lembut di sepanjang tekstur kulit selama 1-3 menit sampai terserap',
'price' => 32400,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
436 => 
array (
'id' => 437,
'brand_id' => 1,
'name' => 'Nacific Phyto Niacin Whitening Sleeping Mask 100ml RENEW - Masker Tidur',
'variation' => 'Sleeping Mask 100ml',
'link' => 'https://shopee.co.id/Nacific-Phyto-Niacin-Whitening-Sleeping-Mask-100ml-RENEW-Masker-Tidur-i.744873.14941712447?sp_atk=f8b1f85b-d9d8-4077-a711-2666067e8bac&xptdk=f8b1f85b-d9d8-4077-a711-2666067e8bac',
'description' => 'Kini hadir khusus untuk Indonesia dalam kemasan tube yang akan menjaga produk tetap higienis dan lebih praktis.

Phyto Niacin Whitening Sleeping Mask mampu membantu mencerahkan sekaligus melembapkan kulit pada malam hari tanpa rasa lengket.

Star Ingredients:
Niacinamide 5% yang berfungsi untuk mencerahkan, melembabkan, dan menenangkan kulit wajah.
Mengandung 6 tipe HA yang berfungsi untuk memberikan kelembapan pada kulit kering dan memulihkan kulit yang lelah selama siang hari
6-FREE (Paraben, Alcohol, Mineral Oil, Fragrance, SLS, PEG)

Cara penggunaan️
1. Cuci wajah dengan bersih, dan aplikasikan toner, serum dan digunakan pada langkah akhir perawatan kulitmu
2. Ambil Phyto Niacin Whitening Sleeping Mask secukupnya dan usapkan di wajah secara lembut mulai dari bagian tengah ke bagian luar wajah
3. Produk tidak perlu dibilas, dan biarkan meresap sambil tidur (cuci muka keesokan paginya)',
'price' => 92900,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
437 => 
array (
'id' => 438,
'brand_id' => 14,
'name' => 'Whitelab Bamboo Charcoal Brightening Gel Mask - Masker Wajah',
'variation' => 'Charcoal Gel Mask',
'link' => 'https://shopee.co.id/Whitelab-Bamboo-Charcoal-Brightening-Gel-Mask-Masker-Wajah-i.744873.17635058325?sp_atk=e9a382fe-a87b-4465-ae71-ce75cbcb442a&xptdk=e9a382fe-a87b-4465-ae71-ce75cbcb442a',
'description' => 'Whitelab Bamboo Charcoal Brightening Mask diformulasikan dengan kombinasi bahan pilihan yang sinergis, dapat merawat dan membuat kulit terlihat lebih sehat, glowing dan cerah.

Powerful Ingredients:
-Niacinamide 3% mencerahkan wajah yang kusam, merawat skin barrier wajah, membantu mengontrol produksi sebum dan mengurangi kemerahan pada wajah.
-BHA (Salicylic Acid) melawan minyak berlebih dan kotoran penyumbat pori, mengurangi komedo sekaligus merawat dan membersihkan pori-pori agar tampak lebih kecil.
-Bamboo “Activated” Charcoal memiliki potensi antioxidant yang sangat kuat dan memiliki kemampuan dalam menyerap kotoran serta melawan radikal bebas penyebab masalah kulit 
-HyaluComplex-10 yang terdiri dari 10 jenis molekul Hyaluron “low to middle weight molecule” dapat berpenetrasi secara bersamaan pada lapisan kulit yang berbeda dan menjaga kelembaban wajah sepanjang hari.
Dengan tekstur gel hitam yang sangat mudah diaplikasikan, memberikan sensasi menyegarkan, instant glow, sekaligus melembabkan kulit wajah. Sangat direkomendasikan untuk kulit yang kusam, lelah, dehidrasi dan stress.

Fungsi :
Mencerahkan kulit wajah yang lelah dan kusam
Membersihkan kotoran penyumbat pori (sebum, kulit mati dan komedo)
Mengembalikan kulit ke kondisi optimal
Melawan radikal bebas penyebab masalah kulit
Menenangkan kulit yang sedang bermasalah
Merawat kelembaban dan kekenyalan kulit wajah

Cara pakai : Oleskan tipis-tipis Whitelab Bamboo Charcoal Brightening Gel Mask ke permukaan wajah yang sudah bersih dan kering. Hindari area mata dan bibir. Biarkan masker bekerja selama 15 menit, lalu bilas dengan air. Gunakan 2-3 kali dalam seminggu.',
'price' => 75000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
438 => 
array (
'id' => 439,
'brand_id' => 16,
'name' => 'Garnier Light Complete Yuzu Peel Off Mask - Pure Active Matcha Clay Mask Deep Clean - 2X6Ml',
'variation' => 'Sakura Clay Mask',
'link' => 'https://shopee.co.id/Garnier-Light-Complete-Yuzu-Peel-Off-Mask-Pure-Active-Matcha-Clay-Mask-Deep-Clean-2X6Ml-i.744873.14618655306?sp_atk=fcf05f80-8b9b-4fff-892e-835ea35e2f9f&xptdk=fcf05f80-8b9b-4fff-892e-835ea35e2f9f',
'description' => 'Masker perawatan khusus dari Garnier yang berfungsi untuk mengangkat sel kulit mati dan mencerahkan kulit. Dengan bentuk peel off dan aroma lemon membuat wajah terasa segar saat menggunakannya. Masker peel off ini merupakan solusi tepat untuk solusi masalah kulit kusam, untuk mengangkat kotoran & sel kulit mati yang membuat wajah terlihat kusam.

Cara Pemakaian:
1. Gunakan pada seluruh wajah dan tunggu hingga kering
2. Tarik masker yang kering pada wajah dan bersihkan dengan air hangat',
'price' => 14000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
439 => 
array (
'id' => 440,
'brand_id' => 21,
'name' => 'Avoskin Your Skin Bae Concentrated Serum Mask -  Sheet Mask - Tisue Masker - Masker Wajah - 1 Sheet',
'variation' => 'MASK Alpha Arbutin',
'link' => 'https://shopee.co.id/Avoskin-Your-Skin-Bae-Concentrated-Serum-Mask-Sheet-Mask-Tisue-Masker-Masker-Wajah-1-Sheet-i.744873.10871684478?sp_atk=433ebfcd-dfe8-418a-b971-b87ebc9979ef&xptdk=433ebfcd-dfe8-418a-b971-b87ebc9979ef',
'description' => 'Manfaat:
● Mencerahkan kulit.
● Mengurangi kemerahan.
● Mengurangi bercak hitam.
● Mengurangi bekas jerawat.
● Mengurangi tampilan pori-pori.
● Menjaga kulit agar tetap kencang dan sehat.
● Melindungi kulit dari dampak buruk sinar matahari.',
'price' => 28000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
440 => 
array (
'id' => 441,
'brand_id' => 2,
'name' => 'Ariul Watermelon Hydro Glow Sleeping Mask 80 ml',
'variation' => 'Sleeping Mask 80gr',
'link' => 'https://shopee.co.id/Ariul-Watermelon-Hydro-Glow-Sleeping-Mask-80-ml-i.744873.9416953045?sp_atk=d6fdc8dd-9b99-48c8-a1f5-137019ef0b63&xptdk=d6fdc8dd-9b99-48c8-a1f5-137019ef0b63',
'description' => 'Kandungan ekstrak buah semangka, vitamin complex dan Hyaluronic Acid pada produk ini, mampu mengembalikan kelembapan sekaligus menjaga kelembapan wajah selama tidur, untuk wajah lembap, glowing, dan lebih cerah keesokan paginya.',
'price' => 140600,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
441 => 
array (
'id' => 442,
'brand_id' => 37,
'name' => 'Saturday Looks Wake Wonderful Sleeping Mask 50gr',
'variation' => 'Sleeping Mask 50gr',
'link' => 'https://shopee.co.id/Saturday-Looks-Wake-Wonderful-Sleeping-Mask-50gr-i.744873.3592621933?sp_atk=40d6343f-c6f1-441d-be1d-539b787d676f&xptdk=40d6343f-c6f1-441d-be1d-539b787d676f',
'description' => 'Sleeping Mask yang diformulasikan untuk mengeksfoliasi kulit mati, mempercepat penyembuhan jerawat, dan melembabkan

Key Ingredients :
5% Lactic Acid
1% Salicylic Acid
2% Lactobionic Acid
Hyaluronic Acid
Aloevera Extract
Rose Extract
Cactus Extract
Mugwort Extract
Clean Saver

Manfaat :
1. Mempercepat penyembuhan jerawat : Salicylic Acid, Aloevera, Rose Extract, Mugwort Extract, Clean Saver
2. Mengecilkan pori : Salicylic Acid, Mugwort Extract
3. Menyamarkan noda & bekas jerawat : Lactic Acid
4. Melembabkan : Hyaluronic Acid, Aloevera Extract, Cactus Extract
5. Melembutkan : Lactobionic Acid, Rose Extract, Hyaluronic Acid

Cara Pakai : Aplikasikan pada wajah sebagai tahap akhir dari skincare. Bisa digunakan setelah pelembab maupun sebagai pengganti pelembab.

Notes :
Untuk ibu hamil dan ibu menyusui silahkan melakukan konsultasi lebih lanjut kepada dokter kandungan
Tidak disarankan memakai bersamaan dengan skincare dengan kandungan vitamin C, retidnol, AHA, BHA, PHA yang tinggi seperti serum.
Tidak disarankan memakai Minty Clay Mask, Minty Gentle Scrub 1hari sebelum dan sesudah memakai Wake Wonderful Sleeping Mask

Ingredients : 
Aqua, Isohexadecane, Lactic Acid, butylene glycol, Tromethamine, Propylene Glycol, rosa canina flower extract, lactobionic acid, Dimethicone, Glycerin, Polysorbate 20, Polyacrylamide, Laureth-7, C13-14 isoparaffin, Salicylic Acid, amylopectin, Dextrin, Xanthan gum, Aloe Barbadensis Leaf Extract,  Artemisia Capillaris Extract, Propanediol, Sophora Flavescens Root Extract, psoralea corylifolia fruit extract, Platycarya Strobilacea Extract, Hyaluronic acid, pentylene glycol, Ethylhexylglycerin, opuntia ficus-indica extract, Phenoxyethanol, Allantoin, Disodium EDTA.',
'price' => 115000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
442 => 
array (
'id' => 443,
'brand_id' => 38,
'name' => 'MABELLO Masker Wajah 100gr - Masker Organik - Bedda Lotong',
'variation' => 'Masker Tea Tree',
'link' => 'https://shopee.co.id/MABELLO-Masker-Wajah-100gr-Masker-Organik-Bedda-Lotong-i.744873.12021737104?sp_atk=41c6b060-69fc-48dc-abb3-29c40f341cdb&xptdk=41c6b060-69fc-48dc-abb3-29c40f341cdb',
'description' => 'Ready:
3 varian masker wajah alami 
ORIGINAL
TEMULAWAK
TEATREE

Manfaat
1. Masker Hitam (mencerahkan &mengatasi komedo)
- Membantu mencerahkan wajah seketika, bisa terlihat perbedaan sebelum dan sesudah
- Sensasi beras yang disangrai membantu melembutkan wajah
- Mengandung rempah2 pilihan seperti temulawak, jeruk dan lainnya yang diformulasikan berfungsi mencerahkan wajah 
- Membantu membersihkan sel kulit mati dan komedo
- Membantu merawat kealamian kulit 
- Cukup oleskan keseluruh wajah /leher dan diamkan selama 5menit kemudian bersihkan /gosok lembut
- Untuk kulit berjerawat tidak perlu digosok. 
- Sebaiknya lanjut menggunakan serum Mabello agar lebih maksimal dan Glowing

2. Masker temulawak (khusus membantu memudarkan bekas jerawat)
- Mengandung ekstrak beras  untuk mencerahkan kulit badan / wajah 
- Mengandung minyak zaitun yang membantu melembabkan kulit
- Mengandung rempah-rempah pilihan yang membantu mencerahkan wajah, meredakan jerawat/alergi dan memudarkan bekas jerawat/gigitan serangga/alergi
- Dapat digunakan sebagai masker wajah & badan
- Cara pakai : tuangkan 1-2 sendok makan lalu campurkan air / air mawar/susu cair lalu oleskan kewajah/badan. setelah kering, cuci menggunakan air sabun
- Sebaiknya gunakan  sabun alami & serum anti acne mabello agar lebih maksimal, kandungan bahan alami

3. Masker tea tree (sensasi dingin khusus mencegah jerawat)
- Membantu mencerahkan wajah seketika, bisa terlihat perbedaan sebelum dan sesudah
- Sensasi beras yang disangrai membantu melembutkan wajah
- Mengandung rempah2 pilihan seperti temulawak, jeruk dan lainnya yang diformulasikan berfungsi mencerahkan wajah 
- Membantu membersihkan sel kulit mati dan komedo
- Membantu merawat kealamian kulit 
- Cukup oleskan keseluruh wajah /leher dan diamkan selama 5menit kemudian bersihkan /gosok lembut
- Untuk kulit berjerawat tidak perlu digosok. 
- Untuk hasil lebih maksimal gunakan sabun alami & serum Mabello agar lebih maksimal dan Glowing',
'price' => 45000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
443 => 
array (
'id' => 444,
'brand_id' => 45,
'name' => 'PYUNKANG YUL Calming Mask Pack - 1 SACHET',
'variation' => 'Calming Mask Pack',
'link' => 'https://shopee.co.id/PYUNKANG-YUL-Calming-Mask-Pack-1-SACHET-i.744873.9581980140?sp_atk=b0fb398b-4428-4acb-b466-abb57906fd1e&xptdk=b0fb398b-4428-4acb-b466-abb57906fd1e',
'description' => 'Diformulasikan khusus untuk kulit sensitif dan teriritasi
Dengan ekstrak menenangkan yang berasal dari pohon teh dan ekstrak centella asiatica
Ceramide untuk memperkuat penghalang kulit
Melembabkan dan menenangkan
Menggunakan lembaran serat bambu',
'price' => 13500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
444 => 
array (
'id' => 445,
'brand_id' => 10,
'name' => 'PIXY Glowssentials Smooth & Bright Peel-Off Mask | Pixy Peel-Of Mask',
'variation' => 'Bright Peel-of Mask',
'link' => 'https://shopee.co.id/PIXY-Glowssentials-Smooth-Bright-Peel-Off-Mask-Pixy-Peel-Of-Mask-i.744873.6388006176?sp_atk=885bd5ec-b0c4-4d88-b99f-1c72dd9cb7d5&xptdk=885bd5ec-b0c4-4d88-b99f-1c72dd9cb7d5',
'description' => 'Peel-Off Mask untuk mengangkat kotoran serta sel-sel kulit mati, sehingga wajah terasa halus, cerah, dan glowing. Diperkaya dengan 2 kandungan utama, yaitu: • Natural Vita Complex dari Ekstrak Mulberry, Vitamin B3, dan Provitamin B5: Mencerahkan dan menjaga kelembapan kulit. • Ekstrak Witch Hazel: Menyegarkan kulit dan membantu membuat pori-pori tampak lebih halus. Lihat perubahan pada kulit wajahmu menjadi lebih cerah dan glowing!',
'price' => 28100,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
445 => 
array (
'id' => 446,
'brand_id' => 16,
'name' => 'Garnier Serum Mask Sakura White Waterglow Skin Care | Masker Sakura Waterglow',
'variation' => 'Mask Sakura Watrglow',
'link' => 'https://shopee.co.id/Garnier-Serum-Mask-Sakura-White-Waterglow-Skin-Care-Masker-Sakura-Waterglow-i.744873.10305218994?sp_atk=3aa18a27-ccba-41ff-9f9f-78de074dae7e&xptdk=3aa18a27-ccba-41ff-9f9f-78de074dae7e',
'description' => 'BARU! Garnier Sakura White Water-glow mask. Masker bening teknologi jepang yang 10x lebih menyerap, mengandung 5X Hyaluron dan ekstrak sakura. 1 masker mengandung 1 botol serum, menutrisi dan menghidrasi intensif kulit untuk hasil kulit terasa halus, lembap dan glowing. Masker menempel sempurna sesuai dengan bentuk wajah wanita Asia. dalam 15 menit, kulit lembap, glowing seketika!',
'price' => 17200,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
446 => 
array (
'id' => 447,
'brand_id' => 50,
'name' => 'Emina Cranberry Juice Face Mask 60gr',
'variation' => 'Cranberry Juice Mask',
'link' => 'https://shopee.co.id/Emina-Cranberry-Juice-Face-Mask-60gr-i.744873.1822412549?sp_atk=82398021-ee25-434c-8eca-1a686a2c4687&xptdk=82398021-ee25-434c-8eca-1a686a2c4687',
'description' => 'Emina Cranberry Juice Face Mask memiliki tekstur yang ringan tetapi dikemas dengan bahan-bahan yang bagus! Membantu menyegarkan dan mencerahkan kulit kusam Anda. Ini juga mengandung antioksidan, vitamin e, dan minyak zaitun sebagai agen pelembab. Gunakan dua kali seminggu dan ucapkan selamat tinggal pada kulit kusam.',
'price' => 30500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
447 => 
array (
'id' => 448,
'brand_id' => 16,
'name' => 'Garnier Hydra Bomb Aloe Vera Jelly Mask 1 SACHET',
'variation' => 'ALOE JELLY MASK',
'link' => 'https://shopee.co.id/Garnier-Hydra-Bomb-Aloe-Vera-Jelly-Mask-1-SACHET-i.744873.4243545055?sp_atk=9eb45aaf-8a43-4413-adb3-a32f18962758&xptdk=9eb45aaf-8a43-4413-adb3-a32f18962758',
'description' => 'Diperkaya dengan ekstrak Aloe Vera yang menyejukkan, masker bertekstur seperti jeli ini menyerap dengan cepat ke lapisan kulit dan melembapkan secara menyeluruh. Kulit terasa lembap setelah penggunaan 3 menit*! *uji konsumen oleh 50 wanita',
'price' => 13400,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
448 => 
array (
'id' => 449,
'brand_id' => 57,
'name' => 'Acnes Oil Control Mask 24mL | Masker Jerawat Dan Kulit Berminyak',
'variation' => 'O.C Sheet Mask 24ml',
'link' => 'https://shopee.co.id/Acnes-Oil-Control-Mask-24mL-Masker-Jerawat-Dan-Kulit-Berminyak-i.744873.1705704364?sp_atk=8cfe8f08-8ce0-4a93-a6c0-970daa326f47&xptdk=8cfe8f08-8ce0-4a93-a6c0-970daa326f47',
'description' => 'Mengenai kulit kita, salah satu bagian yang paling penting adalah wajah. Permasalahan utama wajah seperti timbulnya jerawat, wajah terlihat kusam, wajah terlalu berminyak, atau mungkin terlalu kering sehingga tampak layu dan kasar dapat ditangani dengan menjalankan perawatan yang rutin. Salah satu cara merawat wajah yang mudah untuk anda lakukan di rumah yaitu dengan rajin memakai masker. Mentholatum kini kembali mempersembahkan sebuah masker berkualitas yang aman dan praktis untuk anda gunakan.',
'price' => 14000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
449 => 
array (
'id' => 450,
'brand_id' => 71,
'name' => 'Herborist Facial Mask Zaitun | Herboris Facial Mask Aloe Vera | Herboris',
'variation' => 'SHEET MASK ZAITUN',
'link' => 'https://shopee.co.id/Herborist-Facial-Mask-Zaitun-Herboris-Facial-Mask-Aloe-Vera-Herboris-i.744873.7576591272?sp_atk=f7f0ba5d-206c-42d0-aef6-c3537ec3509e&xptdk=f7f0ba5d-206c-42d0-aef6-c3537ec3509e',
'description' => 'Masker wajah dengan kandungan zaitun yang kaya akan antioksidan. Berfungsi melembabkan, meremajakan, dan memperlambat tanda-tanda penuaan dini pada wajah. Rasakan sensasi yang lebih lembut setelah pemakaian.

Diperuntukkan yang menyukai perawatan wajah dan rutin menggunakan sheet mask dengan kandungan bahan-bahan alami, khususnya Aloe Vera untuk menutrisi kulit wajah sehingga menjadi halus, lembap dan segar.

- Serum Mask (kandungan aloe vera mudah meresap dan menutrisi kulit dengan optimal)
- Kandungan aloe vera yang melembapkan dan menyegarkan kulit
- Memberikan sensasi sejuk dan segar pada kulit ketika digunakan
- Setelah pemakaian kulit terasa halus dan lebih cerah
- Memiliki keharuman aloe vera alami yang menyegarkan
- Dengan vitamin E untuk menghaluskan kulit',
'price' => 10500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:38',
'updated_at' => '2022-06-27 15:42:38',
),
450 => 
array (
'id' => 451,
'brand_id' => 86,
'name' => 'LACOCO Watermelon Glow Mask - Masker Pelembab & Pelindung Wajah',
'variation' => 'WatrmlnMask X Barbie',
'link' => 'https://shopee.co.id/LACOCO-Watermelon-Glow-Mask-Masker-Pelembab-Pelindung-Wajah-i.744873.3217732962?sp_atk=11a4078d-05b6-4fa6-b353-c29787a639ff&xptdk=11a4078d-05b6-4fa6-b353-c29787a639ff',
'description' => 'Lacoco Watermelon Glow Mask merupakan sleeping mask. Sleeping mask yaitu masker yang digunakan semalaman saat tidur yang bermanfaat untuk melembabkan dan melindungi wajah selama tidur dan menjadikan wajah lebih bercahaya dan lebih cerah saat pagi hari. Lacoco Watermelon Glow Mask merupakan perawatan paling tepat untuk mendapat hasil terbaik dalam semalam.

Kandungan Lacoco Watermelon Glow Mask
1-Semangka
Semangka memiliki kadar air yang sangat tinggi dan berfungsi untuk member kelembaban yang maksimal pada wajah. Buah semangka juga kaya akan vitamin yang member manfaat antioksidan untuk melindungi kulit wajah dari efek penuaan seperti garis halus dan keriput.
(Malathi, 2013) Departemen of Dermatology and STD, Jawaharial Institute of Postgraduate Medical Education and Research.

2-Pisang
Pisang mengandung 22% vitamin B-6 dan 17% vitamin C, vitamin A dan E, niasin, riboflavin, seng dan selenium. Semua kandungan tersebut berperan untuk menjaga kesehatan kulit dan anti oksidan.
Linus Pauling Institute, institusi riset yang berlokasi di Universitas Oregon.

3-Evening Primprose
Berfungsi untuk mencegah terjadinya iritasi dan mengurangi kemerahan pada kulit. Membantu meningkatkan elastisitas kulit.

4-Polyglutamic Acid
Bahan aktif yang bermanfaat untuk melembabkan kulit,k membantu mencerahkan serta menjaga keseimbangan tingkat pH kulit. Polyglutamic acid terbukti secara klinis dapat meningkatkan elastisitas dan kesehatan kulit lebih baik dibandingkan kolagen dan hyaluronic acid.

Manfaat Lacoco Watermelon Glow Mask
-Dapat meningkatkan elastisitas kulit
-Mampu mencerahkan kulit secara maksimal 
-Meningkatkan kelembaban kulit 
-Membantu memudarkan bekas jerawat 
-Melawan tanda-tanda penuaan pada wajah

Cara Pakai Watermelon Glow Mask
Gunakan Lacoco Watermelon Glow Mask setelah rangkaian perawatan wajah lainnya, ratakan pada wajah dan leher. Biarkan selama semalam (gunakan untuk tidur) kemudian bilas dengan air bersih pada pagi harinya.

Lacoco Watermelon Glow Mask ok untuk semua jenis kulit.',
'price' => 155300,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:39',
'updated_at' => '2022-06-27 15:42:39',
),
451 => 
array (
'id' => 452,
'brand_id' => 11,
'name' => 'WARDAH Lightening Essence Sheet Mask 20ml',
'variation' => 'Light Sheet Mask',
'link' => 'https://shopee.co.id/WARDAH-Lightening-Essence-Sheet-Mask-20ml-i.744873.8512365308?sp_atk=7d6c5485-8947-491c-af0c-9f0aad9bd240&xptdk=7d6c5485-8947-491c-af0c-9f0aad9bd240',
'description' => 'Sheet mask pertama yang mencegah efek negatif dari paparan blue light!
Konsentrat tinggi Advanced Niacinamide + Licorice Extract bantu mencerahkan kulit,
menyamarkan bekas jerawat, dan meratakan warna kulitmu! Perawatan ekstra untuk kulit cerah dan
lembap dalam 1 kali pakai! Biodegradable sheet mask!',
'price' => 16000,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:39',
'updated_at' => '2022-06-27 15:42:39',
),
452 => 
array (
'id' => 453,
'brand_id' => 11,
'name' => 'Wardah Perfect Bright Peel-Off Mask',
'variation' => 'Peel-Off Mask',
'link' => 'https://shopee.co.id/Wardah-Perfect-Bright-Peel-Off-Mask-i.744873.1746879406?sp_atk=262486ea-3b52-4b9b-bcb9-94067eb55366&xptdk=262486ea-3b52-4b9b-bcb9-94067eb55366',
'description' => 'Masker peel-off yang terbukti mengangkat kotoran dan sel kulit mati serta kembalikan kulit cerah segar merona. Kulit terasa lebih kencang, halus, dan tampak lebih cerah. 
Kombinasi ekstrak licorice dan vit B3 yang dikenal mencerahkan serta menjaga kelembaban kulit wajah. Mengandung vit E, antioksidan yang dikenal melindungi sel kulit epidermis dari radikal bebas, sekaligus melembabkannya.',
'price' => 26500,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:39',
'updated_at' => '2022-06-27 15:42:39',
),
453 => 
array (
'id' => 454,
'brand_id' => 87,
'name' => 'MEDIHEAL Sheet Mask All Series | Mediheal Sheet Mask | Masker Wajah',
'variation' => 'Hydra Soothing Mask',
'link' => 'https://shopee.co.id/MEDIHEAL-Sheet-Mask-All-Series-Mediheal-Sheet-Mask-Masker-Wajah-i.744873.7460972088?sp_atk=07a1550d-47bd-46f4-9482-07420b7ec802&xptdk=07a1550d-47bd-46f4-9482-07420b7ec802',
'description' => 'MEDIHEAL menjadi merek unggul dalam industri kecantikan dan telah menjual lebih dari 100 juta produk masker sejak 2009. Reputasinya baik karena dikembangkan oleh sekelompok ahli kulit dermatologis yang berdedikasi untuk terus berinovasi dalam menemukan masker yang dapat memenuhi semua kebutuhan kulit secara efektifSemua produk telah diuji secara dermatologi hypoallergenicserta aman digunakan.',
'price' => 12750,
'category' => 'Mask',
'created_at' => '2022-06-27 15:42:39',
'updated_at' => '2022-06-27 15:42:39',
),
454 => 
array (
'id' => 455,
'brand_id' => 17,
'name' => 'Y.O.U Radiance Up! Pure CICA Essence - CICA Water + PHA Gently Exfoliate Essence - YOU Essence',
'variation' => 'RadianceUp! Essence',
'link' => 'https://shopee.co.id/Y.O.U-Radiance-Up!-Pure-CICA-Essence-CICA-Water-PHA-Gently-Exfoliate-Essence-YOU-Essence-i.744873.16173723312?sp_atk=407b5b74-7634-4870-9b1b-a52527b6f475&xptdk=407b5b74-7634-4870-9b1b-a52527b6f475',
'description' => 'Kandungan di dalam Radiance Up! Pure Cica Essence ini gak kalah keren dari serum kita. Diperkaya dengan 89% Centella Asiatica Leaf Water, Powerful Brightening System, dan Lactobionic Acid (PHA) yang dapat menenangkan, mencerahkan, dan mengeksfoliasi kulit dengan lembut gak nyebabin iritasi',
'price' => 105200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:56',
'updated_at' => '2022-06-27 15:42:56',
),
455 => 
array (
'id' => 456,
'brand_id' => 40,
'name' => 'Everwhite Serum | Brightening Essence | Anti-Aging Serum | Cica Soothing | Eye Cream | Niacinamide',
'variation' => 'Esence Chroma Bright',
'link' => 'https://shopee.co.id/Everwhite-Serum-Brightening-Essence-Anti-Aging-Serum-Cica-Soothing-Eye-Cream-Niacinamide-i.744873.3984414904?sp_atk=551eb500-a29b-43c4-ace8-3ce787d977ed&xptdk=551eb500-a29b-43c4-ace8-3ce787d977ed',
'description' => 'Everwhite Brightening Essence Serum
Bikin wajah kamu Glowing dan naik 1-2 level lebih putih cerah 
Dengan kandungan CHROMA BRIGHT + NIACINAMIDE + HYALURONATE + VIT C.',
'price' => 187500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:56',
'updated_at' => '2022-06-27 15:42:56',
),
456 => 
array (
'id' => 457,
'brand_id' => 28,
'name' => 'COSRX Hyaluronic Acid Hydra Power Essence 100ml',
'variation' => 'Hydra Power Essence',
'link' => 'https://shopee.co.id/COSRX-Hyaluronic-Acid-Hydra-Power-Essence-100ml-i.744873.3238886282?sp_atk=eecc79e0-8eff-42ef-9250-9b15ea66a927&xptdk=eecc79e0-8eff-42ef-9250-9b15ea66a927',
'description' => 'Essence dengan kandungan sodium hyaluronate yang berfungsi untuk menghidrasi dan melembutkan kulit.

Cara pakai:
1. Gunakan pada pagi dan malam hari setelah pemakaian toner.
2. Aplikasikan ke wajah dengan gerakan menepuk perlahan.
3. Untuk hasil yang lebih maksimal, gunakan bersama dengan Hyaluronic Acid Intensive Cream.

Bahan Utama:
Sodium Hyaluronate 4,000ppm

Bahan lainnya:
Hippophae Rhamnoides Water, Butylene Glycol, Glycerin, 1,2-Hexanediol, Sodium Hyaluronate, Panthenol, Ethyl Hexanediol',
'price' => 213500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:56',
'updated_at' => '2022-06-27 15:42:56',
),
457 => 
array (
'id' => 458,
'brand_id' => 28,
'name' => 'COSRX Galactomyces 95 Tone Balancing Essence 100 ml',
'variation' => 'Galactomyces Essence',
'link' => 'https://shopee.co.id/COSRX-Galactomyces-95-Tone-Balancing-Essence-100-ml-i.744873.5320278997?sp_atk=30836170-a1f3-4162-95fe-d6a5ea188c8f&xptdk=30836170-a1f3-4162-95fe-d6a5ea188c8f',
'description' => 'Merupakan essence yang memiliki kosentrasi tinggi 95% Galactomyces Ferment Filtrate yang berguna untuk menutrisi kulit dan meningkatkan ketahanan kulit dan complex ( vitamin ) di wajah anda. (kandungannya sama seperti Pitera keluaran SKII) yang berfungsi sbb: 
1. Memcerahkan dan mengurangi kulit kusam.
2. Menutrisi kulit dan meningkatkan ketahanan kulit dan complex (vitamin) di wajah.
3. Memperbaiki tekstur kulit dan menyehatkan kulit.
4. Sebagai anti-aging dengan kandungan fermentasinya.

Pemakaian dikocok terlebih dahulu.',
'price' => 221500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:56',
'updated_at' => '2022-06-27 15:42:56',
),
458 => 
array (
'id' => 459,
'brand_id' => 17,
'name' => 'Y.O.U Golden Age 2 in 1 Essence 100ml - YOU',
'variation' => 'Golden 2 in 1 Essenc',
'link' => 'https://shopee.co.id/Y.O.U-Golden-Age-2-in-1-Essence-100ml-YOU-i.744873.7874196665?sp_atk=a8756d6e-4b68-45f8-8012-82da10e9691b&xptdk=a8756d6e-4b68-45f8-8012-82da10e9691b',
'description' => 'Golden Age 2 in 1 Essence diformulasikan dengan ekstrak Buah Delima dan Lactic Acid yang mampu menghidrasi sekaligus mengeksfoliasi kulit sehingga wajah tampak lembut, kenyal, dan bercahaya.

Selling Point & Benefit:
Exfoliates & Hydrates Skinu000BMengandung AHA yang membantu mengangkat sel kulit mati sekaligus menjaga kelembapan kulit. 
Skin Rejuvenationu000BMeningkatkan produktivitas kulit agar terlihat segar dan lebih muda.
Plump & Radiant Skinu000BMenyamarkan garis-garis halus sehingga kulit terasa kenyal dan bercahaya

Special ingredients:
-Punica Granatum Extract
Ekstrak buah delima, membantu mencegah tanda-tanda penuaan dan memperbaiki kondisi kulit akibat penuaan.
-Lactic Acid 
Termasuk AHA yang dapat mengeksfoliasi dan menghidrasi kulit.
-Niacinamide
Vit B3, menyamarkan tampilan pori-pori dan garis halus serta meratakan warna kulit.
-Allantoin
Melembapkan, menenangkan dan membantu proses regenerasi kulit.
-Calendulla Officinalis Flower Extract
Ekstrak bunga Pot Marigold yang membantu memperbaiki kondisi kulit seperti kemerahan pada kulit.
-Tremella Fuciformis Sporocarp Extract
Snow mushroom yang membantu melembapkan kulit dan menyamarkan noda hitam.',
'price' => 119000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:56',
'updated_at' => '2022-06-27 15:42:56',
),
459 => 
array (
'id' => 460,
'brand_id' => 1,
'name' => 'Nacific Pink AHA BHA Toner 150 ml - Toner Wajah',
'variation' => 'AHABHA Toner 150ml',
'link' => 'https://shopee.co.id/Nacific-Pink-AHA-BHA-Toner-150-ml-Toner-Wajah-i.744873.17173820847?sp_atk=35b3b240-284b-4d9f-82da-5d7be24b4fc8&xptdk=35b3b240-284b-4d9f-82da-5d7be24b4fc8',
'description' => 'Daily Pink Toner yang dengan lembut mengangkat sel-sel kulit mati yang menumpuk di kulit tanpa membuat iritasi serta mengembalikan kulit halus dan cerah dengan ingredient AHA dan BHA alami

Key Points:
Kandungan AHA dan BHA yang ringan sehingga dapat digunakan untuk pemula atau sebagai daily eksfoliator
Mengandung ekstrak semangka yang membantu melembapkan kulit
Glutathione yang membantu mencerahkan kulit

Cara Menggunakan
1. Cuci wajah dengan face soap ntuk membersihkan kotoran yang menempel sepanjang hari
2. Teteskan toner pada kapas dan usap lembut pada wajah, langkah ini sekaligus dapat membersihkan residu makeup yang masih menempel
3. Atau dapat digunakan langsung ke tangan dan usapkan pada wajah untuk sensasi yang lebih menyegarkan',
'price' => 115200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
460 => 
array (
'id' => 461,
'brand_id' => 1,
'name' => '[BPOM] Nacific Real Floral Toner Calendula 180ml',
'variation' => 'Calendula Toner',
'link' => 'https://shopee.co.id/-BPOM-Nacific-Real-Floral-Toner-Calendula-180ml-i.744873.1080320685?sp_atk=290aa1c8-2a3a-4419-ade6-168b2b35ac5a&xptdk=290aa1c8-2a3a-4419-ade6-168b2b35ac5a',
'description' => 'Toner ini mangandung air kelopak bunga calendula 91 %.
Fungsinya untuk melembabkan dan menenangkan wajah.
Dapat mengurangi jerawat dan brutus pada wajah. Serta mencerahkan dan membersihkan sampai ke pori pori.
100 % bahan alami dan no alcohol.

Calendula Flower Water 91%
"Floating" Mild Petals
No hazardous ingredients
Minimize skin irritation
Fresh cleansing
Cleanse makeup residue
Cleanse residue in the pores

Suggested Use
1. Cleanse perfectly
2. After cleansing, wipe your face with a cotton pad soaked in toner alone skin texture.
3. After wiping gently, tap your skin with warm palms to be absorbed deep into your skin.',
'price' => 138900,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
461 => 
array (
'id' => 462,
'brand_id' => 3,
'name' => 'Votre Peau Skin Care SERIES | Spray | Cleanser | Toner | Soothing Gel | Brightening Essence | Cream',
'variation' => 'Sake Essence - 30 ml',
'link' => 'https://shopee.co.id/Votre-Peau-Skin-Care-SERIES-Spray-Cleanser-Toner-Soothing-Gel-Brightening-Essence-Cream-i.744873.3979232098?sp_atk=6d386cd4-dcfd-48c2-8ef5-5ca6e07a10ad&xptdk=6d386cd4-dcfd-48c2-8ef5-5ca6e07a10ad',
'description' => 'Votre Peau Brightening Spray Sake Essence adalah facial mist yang secara alami membuat kulit menjadi lebih cerah bercahaya dan berfungsi sebagai antioksidan',
'price' => 265000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
462 => 
array (
'id' => 463,
'brand_id' => 12,
'name' => 'NPURE Face Toner Marigold 120ml - N\'Pure Marigold - Anti Aging Face Toner - Anti Penuaan',
'variation' => 'Face Toner 120ml',
'link' => 'https://shopee.co.id/NPURE-Face-Toner-Marigold-120ml-N\'Pure-Marigold-Anti-Aging-Face-Toner-Anti-Penuaan-i.744873.14739863940?sp_atk=8b459bf4-6773-4268-b878-eea5879ae467&xptdk=8b459bf4-6773-4268-b878-eea5879ae467',
'description' => 'Toner wajah ini diperuntukkan bagi semua jenis kulit termasuk kulit sensitif . Formulasi toner ini berupa kelopak bunga Marigold yang dipetik dan dimasukkan satu persatu dengan tangan para apoteker Npure, dan kandungan-kandungan aktif dan natural lainnya. Marigold Anti Aging Face Toner berfungsi untuk mampu mencerahkan, melembabkan dan anti inflamasi, serta merawat keremajaan kulit dan membersihkan kulit dari sisa-sisa kotoran yang menempel pada wajah, menyegarkan kulit, dan memberikan sensasi kelembutan dan kehalusan kulit. (BRIGHTEN, MOIST, ANTI AGING)

KandunganNpure Marigold Anti Aging Face Toner :
· Extract Kelopak Bunga Marigold (Calendulanya Indonesia); mengandung Karotenoid. yakni sebuah pikmen organik yang terdapat dalam tumbuhan. Pigmen ini berperan sebagai antioksidan. Tak hanya itu, mengandung Trans-lutein yang memiliki fungsi anti penuaan dini (antiaging) karena terpapar radiasi sinar UVB matahari. Melawan radikal bebas dan juga melembabkan kulit
· Algae Extract (Laminaria Digitata); ganggang cokelat yang dapat membantu memulihkan respirasi sel kulit, meningkatkan konsumsi oksigen, serta mengandung antioksidan yang mengisi sel dengan energi untuk membantu memperlambat munculnya tanda-tanda penuaan
· Gold ; berfungsi menyamarkan kerutan, garis halus, & noda hitam, menstimulasi pertumbuhan sel kulit, mencegah penuaan dini.
· Aloe Vera ; berfungsi sebagai menjaga kelembaban kulit, menenangkan kulit.
· Collagen ; Seiring dengan bertambahnya usia, produksi kolagen di dalam tubuh juga akan semakin berkurang, padahal kolagen sangat diperlukan untuk tubuh kita. Maka Collagen di sini berfungsi untuk mengencangkan kulit, mencerahkan kulit, mengurangi keriput dan garis halus.
· Vitamin B3 / Niacinamide ; Menghidrasi kulit, memperlambat proses perpindahan melanin pada epidermis akibat sinar UV, sehingga resiko pembentukan hiperpigmentasi pun akan berkurang. Meningkatkan produksikolagen dan elastisitas pada kulit. Permukaan dan tekstur kulit menjadi lebih halus, garis halus dan keriput di kulit wajah pun menjadi tersamarkan

Petunjuk Penggunaan Npure Marigold Anti Aging Face Toner;
Setelah membersihkan wajah menggunakanNpure Marigold Deep Cleansing Foaming Face Wash, basahi kapas dengan toner ini / bisa dipakai langsung diusap ditepuk tepuk perlahan ke bagian muka, hindari area mata.
Aplikasikan pada pagi dan malam hari.
Setelah mengaplikasikan toner pada wajah, Anda bisa juga menggunakanNpure Marigold Anti Aging Serum untuk hasil 
kulit yang lebih baik dan terhidrasi sempurna.

KelebihanNpure Marigold Anti Aging Face Toner:
- PARABEN FREE, Bebas Paraben sehingga aman untuk ibu hamil dan menyusui
- SLS FREE (Sodium Lauryl Sulfate), Bebas SLS sehingga tidak menimbulkan iritasi atau membuat kulit tambah kering
- MINERAL OIL FREE, Bebas Mineral Oil yaitu bahan berbahaya yg bersifat Karsinogen (pemicu kanker).
- ALCOHOL FREE, Bebas Alkohol sehingga mencegah iritasi pada kulit sensitif',
'price' => 157500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
463 => 
array (
'id' => 464,
'brand_id' => 21,
'name' => 'Avoskin X Paola Serena Miraculous Divine Aura Essence Toner - 100ml',
'variation' => 'Aura Essence Toner',
'link' => 'https://shopee.co.id/Avoskin-X-Paola-Serena-Miraculous-Divine-Aura-Essence-Toner-100ml-i.744873.14562468277?sp_atk=f358cdfb-43a0-4f2f-96eb-bef9fecd33e8&xptdk=f358cdfb-43a0-4f2f-96eb-bef9fecd33e8',
'description' => 'Produk yang melengkapi rangkaian Miraculous Series ini merupakan hasil kolaborasi antara Avoskin X Paola Serena. Produk ini memiliki kandungan utama Niacinamide, 3-O-Ethyl Ascorbic Acid (Vitamin C), Hyaluronic Acid, dan Birch Extract. Perpaduan kandungan ini membuat Miraculous Divine Aura Essence-Toner dapat bekerja secara optimal untuk membantu mencerahkan warna kulit, mengurangi tampilan bintik hitam, merawat kulit berjerawat, menjaga elastisitas kulit, mengurangi tampilan pori-pori dan membantu melembapkan kulit secara optimal.

Produk ini dapat digunakan untuk semua jenis kulit dan aman untuk kulit sensitif.

Cara Penggunaan:
- Tuangkan ke kapas atau telapak tangan dan usap secara perlahan di seluruh area wajah dan leher.
- Gunakan dua kali sehari pagi dan malam hari.
- Tidak perlu dibilas. Ikuti penggunaan Miraculous Divine Aura Ampoule atau serum favorit Anda lainnya.

Peringatan:
Simpan pada suhu yang dingin (sebaiknya disimpan di kulkas) dan jauhkan dari cahaya maupun paparan sinar matahari secara langsung.

Ingredients:
Aqua, Niacinamide, Quartz, Glycerin, 3-O-Ethyl Ascorbic Acid, Propylene Glycol, Phenoxyethanol, Zinc PCA, Rosa Canina Fruit Extract, Sodium PCA, Butylene Glycol, Chlorphenesin, Sodium Bisulfite, Hydrolyzed Hyaluronic Acid, Tetrasodium EDTA, Lactic Acid, Betula Alba Leaf Extract, Sodium Hydroxide, Potassium Sorbate, Sodium Benzoate.',
'price' => 263200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
464 => 
array (
'id' => 465,
'brand_id' => 24,
'name' => 'SYB Face Mist Chamomile Toner 100ml',
'variation' => 'Mist Toner Chamomile',
'link' => 'https://shopee.co.id/SYB-Face-Mist-Chamomile-Toner-100ml-i.744873.14001391863?sp_atk=4ee2a6ce-0460-4410-a6b6-44c0c5a6dc0b&xptdk=4ee2a6ce-0460-4410-a6b6-44c0c5a6dc0b',
'description' => 'Chamomile Toner dengan kandungan ekstrak chamomile berfungsi sebagai penyegar dan pembersih muka serta memberikan sensasi lembut pada kulit wajah. 

Cara pakai : 
-Semprot secukupnya ke wajah secara berkala sepanjang hari.

Ingredients : Aqua, ethyl alcohol, aqua , chamomilla recutita flower extract, phenoxyethanol, methylparaben, ethylparaben, PEG 40 hydrogenated castor oil, phenoxyethanol, propylene glycol, fragrance.',
'price' => 13800,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
465 => 
array (
'id' => 466,
'brand_id' => 21,
'name' => 'AVOSKIN Your Skin Bae Vitamin C Serum 30ml - Toner 100ml',
'variation' => 'Vitamin C TONER',
'link' => 'https://shopee.co.id/AVOSKIN-Your-Skin-Bae-Vitamin-C-Serum-30ml-Toner-100ml-i.744873.3191858470?sp_atk=3bd73b2e-411e-4ef6-947a-90b14adb35cb&xptdk=3bd73b2e-411e-4ef6-947a-90b14adb35cb',
'description' => 'Deskripsi:
Brightening Toner

Diformulasikan secara khusus untuk mencerahkan kulit secara optimal. Mengandung vitamin C yang menghambat produksi melanin dan akumulasi melanin pada kulit. DItambah dengan kandungan Niacinamide, Carrot Extract, dan Raspberry kulitmu akan cerah maksimal dan produksi minyak berlebih akan terkontrol.

Untuk Siapa:
Bisa digunakan mulai dari usia 15 tahun ke atas.
Semua jenis kulit.

Cara Penggunaan:
● Tuangkan ke kapas dan usap secara perlahan di seluruh area wajah dan leher (pagi dan malam).
● Tidak perlu dibilas lalu ikuti penggunaan serum favoritmu dan jangan lupa gunakan Avoskin The Great Shield untuk perlindungan ekstra di pagi hari.

Bahan-Bahan:
Aqua, Glycerin, Propylene glycol, Niacinamide (2%), 3-O-Ethyl Ascorbic Acid (2%), Phenoxyethanol, Hydrolyzed Carrot Extract, Rubus Idaeus (Raspberry) Fruit Extract, Butylene Glycol, Chlorphenesin, Disodium EDTA',
'price' => 127200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
466 => 
array (
'id' => 467,
'brand_id' => 1,
'name' => 'Nacific Phyto Niacin Whitening Toner 150ml RENEW - Face Toner - Toner Wajah',
'variation' => 'Phyto Niacin Toner',
'link' => 'https://shopee.co.id/Nacific-Phyto-Niacin-Whitening-Toner-150ml-RENEW-Face-Toner-Toner-Wajah-i.744873.15841684858?sp_atk=1dff73c7-8244-4db1-9b30-b781289ccd28&xptdk=1dff73c7-8244-4db1-9b30-b781289ccd28',
'description' => 'Kini hadir dalam wajah dan formulasi baru untuk Indonesia!

Brightening Toner yang mengandung Niacinamide 5% untuk mencerahkan kulit wajah yang kusam.

Key points :
Niacinamide 5% : Memiliki efek untuk mencerahkan kulit
Mengandung Made White™ yang telah dipatenkan dan Allantoin
Mengandung Bamboo Extract dan Panthenol

Phyto Niacin Whitening Toner yang mengandung 5% Niacinamide yang bermanfaat untuk meratakan warna kulit wajah dan membantu mencerahkan kulit, menyamarkan bekas jerawat dan black spots di wajah. Dapat digunakan siang atau malam.

Cara menggunakan️
1. Cuci wajah dengan face soap untuk membersihkan kotoran yang menempel sepanjang hari
2. Teteskan toner pada kapas dan usap lembut pada wajah, langkah ini sekaligus dapat membersihkan residu makeup yang masih menempel
3. Atau dapat digunakan langsung ke tangan dan usapkan pada wajah untuk sensasi yang lebih menyegarkan

Urutan pakai: Toner > Essence > Cream

6-FREE (Paraben, Alcohol, Mineral Oil, Fragrance, SLS, PEG)',
'price' => 123000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
467 => 
array (
'id' => 468,
'brand_id' => 8,
'name' => 'Elsheskin Acne Refresh Toner | Elshe Skin Acne Refresh Toner',
'variation' => 'Acne Refresh Toner',
'link' => 'https://shopee.co.id/Elsheskin-Acne-Refresh-Toner-Elshe-Skin-Acne-Refresh-Toner-i.744873.1714923346?sp_atk=6a9f9504-061c-42c6-ac54-8598f65a6da2&xptdk=6a9f9504-061c-42c6-ac54-8598f65a6da2',
'description' => 'Untuk membersihkan kulit wajah yang berjerawat dari kotoran dan sisa makeup. Juga menyegarkan kulit wajah serta membantu kulit wajah yang berjerawat.

How to use :
Tuangkan ElshéSkin Acne Refresh Toner pada kapas dan tepuk perlahan secara merata pada seluruh wajah. Gunakan setelah pemakaian ElshéSkin Acne Cleansing Wash dan tunggu sampai meresap, lanjutkan dengan pemakaian produk perawatan selanjutnya.

Ingredients :
Aqua, Propylene Glycol, Alcohol, Polysorbate 80, Sulfur, Salicylic Acid, Methylparaben, Allantoin.

Benefit :
Penyegar yang mengandung Salicylic Acid bermanfaat untuk mengembalikan pH dan kelembaban alami kulit setelah proses pembersihan, sekaligus mengurangi komedo dan bakteri penyebab jerawat.',
'price' => 79000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
468 => 
array (
'id' => 469,
'brand_id' => 32,
'name' => 'Mineral Botanica First Defense Serum - Facial Foam - Toner - Day Cream - Night Mask  - MICA',
'variation' => 'Defense Toner 90ml',
'link' => 'https://shopee.co.id/Mineral-Botanica-First-Defense-Serum-Facial-Foam-Toner-Day-Cream-Night-Mask-MICA-i.744873.9273995230?sp_atk=fcd22da0-7067-4464-9b77-ac6c27550db6&xptdk=fcd22da0-7067-4464-9b77-ac6c27550db6',
'description' => 'Mineral Botanica First Defense Toner sebagai penyegar yang mencerahkan kulit. Diformulasikan agar dapat mengangakat kotoran dan memberikan kesegaran pada kulit anda.
Spesifikasi
Formula : cairan
Tekstur : encer ',
'price' => 25400,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
469 => 
array (
'id' => 470,
'brand_id' => 28,
'name' => 'COSRX Hydrium Watery Toner | COSRX Propolis Synergy Toner | COSRX  AHA BHA Vitamin C Daily Toner',
'variation' => 'AHA BHA Toner 50ml',
'link' => 'https://shopee.co.id/COSRX-Hydrium-Watery-Toner-COSRX-Propolis-Synergy-Toner-COSRX-AHA-BHA-Vitamin-C-Daily-Toner-i.744873.6361041470?sp_atk=1af03cfa-7b8d-4287-83d7-9dd8734c1d7d&xptdk=1af03cfa-7b8d-4287-83d7-9dd8734c1d7d',
'description' => 'Full Fit Propolis Synergy Toner
- Mengandung manfaat maksimum dari ekstrak propolis tanpa air
- Full Fit Propolis Synergy Toner dapat meningkatkan imunitas kulit dan menjadikan kulit Anda lebih sehat dan berkilau

*Tipe Kulit
- Berminyak
- Kombinasi
- Kering
- Normal
- Sensitif

*Manfaat
- Menenangkan
- Hidrasi
- Melembabkan
- Toner mirip essence yang berfungsi menjadikan kulit terasa ringan dan tidak lengket 

Hydrium Watery Toner
- Perbaiki kesehatan kulit Anda dengan Hydrium Synergy-8 Complex
- Tidak hanya melembabkan juga merupakan fondasi dari perawatan untuk kesehatan kulit Anda
- Dengan Hydrium Synergy-8 Complex yang terdiri dari enam jenis hyaluronic acid, d-panthenol, dan allantoin, toner ini akan mengisi kulit Anda dengan kelembaban dan membantu kulit tetap terhidrasi untruk waktu yang lama.

*Tipe Kulit
- Kering
- Normal
- Sensitif

*Manfaat
- Hidrasi
- Melembabkan
- Menyembuhkan',
'price' => 82500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
470 => 
array (
'id' => 471,
'brand_id' => 9,
'name' => '[BPOM] BENTON Aloe BHA Skin Toner 200ml - 30ml',
'variation' => 'BHA Skin Toner 200ml',
'link' => 'https://shopee.co.id/-BPOM-BENTON-Aloe-BHA-Skin-Toner-200ml-30ml-i.744873.132193619?sp_atk=ac5ad394-d284-45c7-8f57-a79b2219911d&xptdk=ac5ad394-d284-45c7-8f57-a79b2219911d',
'description' => '1. Skin trouble care
2. Dead Skin Cell & Blackhead
3. Pore control
4. Reduches Itchiness
5. Moisturizing
6. Skin texture care
7. Skin repairing

Benton Aloe BHA Toner merupakan penyegar
wajah yang mengandung aloe dan salicylic acid yang mampu menghidrasi kulit dan mempersiapkan wajah untuk menggunakan perawatan kulit wajah selanjutnya. Produk ini mampu melembabkan dan melembutkan wajah, mengangkat semua kotoran hingga ke dalam pori, memperbaiki tekstur kulit yang kasar dan rusak, membuat jerawat menjadi kempes dan dapat digunakan oleh kulit sensitif.

How to Use:
Aplikasikan pada wajah bersamaan dengan menggunakan kapas.

Suitable for:
Semua jenis kulit.

Ingredients:
Aloe Barbadensis Leaf Water (58%), Glycerin, Sodium Hyaluronate, Aloe Barbadensis Leaf Extract, Snail Secretion Filtrate, Salicylic Acid (0.5%), Beta-Glucan, Althaea Rosea Flower Extract, Aloe Barbadensis Leaf Extract, Polyglutamic Acid, Portulaca Oleracea Extract, Psidium Guajava Fruit Extract, Aspalathus Linearis Extract, Zanthoxylum Piperitum Fruit Extract, Pulsatilla Koreana Extract, Usnea Barbata (Lichen) Extract, Acrylates/C10-30 Alkyl Acrylate Cross Polymer.',
'price' => 109000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:57',
'updated_at' => '2022-06-27 15:42:57',
),
471 => 
array (
'id' => 472,
'brand_id' => 88,
'name' => 'NEW! Emina Ms Pimple Acne Solution Exfoliating Toner 100 ml',
'variation' => 'ExfoliatToner 100 ml',
'link' => 'https://shopee.co.id/NEW!-Emina-Ms-Pimple-Acne-Solution-Exfoliating-Toner-100-ml-i.744873.20706604600?sp_atk=4a362e08-04bc-493d-abb2-4a2a2409c472&xptdk=4a362e08-04bc-493d-abb2-4a2a2409c472',
'description' => 'Angkat sel kulit mati dan komedo dengan lembut! Mengandung Rosebay Willowherb extract, Mild BHA, dan Zinc Gluconate yang mampu bekerja intensif melawan penyebab jerawat serta membersihkan pori-pori dari penumpukan sisa kotoran tanpa membuat kulit menjadi kering.',
'price' => 30700,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
472 => 
array (
'id' => 473,
'brand_id' => 17,
'name' => 'Y.O.U The Radiance White Esential & Refreshing Toner 100ml - YOU',
'variation' => 'Essential Toner',
'link' => 'https://shopee.co.id/Y.O.U-The-Radiance-White-Esential-Refreshing-Toner-100ml-YOU-i.744873.7081163168?sp_atk=7bf5c706-bc37-4097-b268-1c7ec1827a1e&xptdk=7bf5c706-bc37-4097-b268-1c7ec1827a1e',
'description' => 'New Formula The Radiance White Essential Toner 
- Toner yang diperkaya dengan Snow Mushroom Extract, Niacinamide, 10X* Vit C, dan Allantoin untuk menenangkan, menghidrasi, dan mempercepat regenerasi kulit untuk kulit segar dan bercahaya.

SELLING POINTS & BENEFITS:
- Power Skin Hydrator :Menghidrasi dan mempersiapkan kulit untuk tahapan skincare berikutnya.
- Bright & Refreshed Skin : Kulit terlihat lebih cerah dan segar.
- Light Balanced Formula : Tekstur ringan yang menjaga keseimbangan pH kulit.

- Cara pemakaian: Setelah mencuci wajah, aplikasikan menggunakan kapas dan usapkan ke seluruh wajah. Aplikasikan produk kembali dan pijat lembut dengan tangan untuk membantu penyerapan formula.
Untuk hasil yang optimal, gunakan rangkaian perawatan The Radiance White.

Special Ingredient :
- Tremella fuciformis polysaccharide,Tremella fuciformis (mushroom) extractu000B(Ekstrak Snow Mushroom) : Memiliki kemampuan menyerupai Hyaluronic Acid sebagai pelembap dan berfungsi untuk menghidrasi secara intensif.
- Niacinamideu000B(Vitamin B3) : Menyamarkan tampilan pori-pori, noda hitam, garis halus, serta meratakan warna kulit
- 3-O-Ethyl ascorbic acidu000B(Vitamin C) : Kaya akan antioksidan dan melindungi kulit dari radikal bebas.
- Allantoin : Membantu melembapkan dan menenangkan kulit, serta mencegah iritasi kulit.
- Sodium hyaluronateu000B(Hyaluronic acid) : Menghidrasi untuk kulit yang lembut dan kenyal.',
'price' => 39600,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
473 => 
array (
'id' => 474,
'brand_id' => 52,
'name' => 'Safi White Expert Oil Control & Anti Acne 2in1 Cleanser & Toner 150ml | White Expert 2 in 1 Toner',
'variation' => 'White E. 2in1 Toner',
'link' => 'https://shopee.co.id/Safi-White-Expert-Oil-Control-Anti-Acne-2in1-Cleanser-Toner-150ml-White-Expert-2-in-1-Toner-i.744873.2137202030?sp_atk=f5e25c85-c25f-478b-87f4-776701b6c021&xptdk=f5e25c85-c25f-478b-87f4-776701b6c021',
'description' => 'Pembersih wajah dual aksi. Gel pembersih wajah yang mudah dibilas ini mengandung Ekstrak Habbatus Sauda dan OxyWhite Technology. 
- Membersihkan debu dan sisa make up secara seksama dengan scrub lembutnya
- Kandungan Habbatus Sauda, minyak bunga matahari, dan Vitamin E sebagai Antioksidan untuk membantu melindungi kulit dari paparan radikal bebas
- Formulasi tanpa tambahan sabun membantu menjaga keseimbangan pH kulit
- kandungan mentol memberikan sensasi menyegarkan pada kulit wajah

Rawat wajah kamu sesuai dengan kebutuhan kulit mu, Safi white expert oil control & anti acne 2in1 cleanser & toner
menjawab kebutuhan kamu untuk kulit 
berjarawat. Kandungan habbatus sauda, Oxywhite technology and mineral zinc yang dapat membunuh bakteri di kuit dalam waktu 60 menit.',
'price' => 43200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
474 => 
array (
'id' => 475,
'brand_id' => 54,
'name' => 'Kojie San Skin Lightening Pore Minimizing Toner with Hydromoist 100ml',
'variation' => 'Light Toner 100ml',
'link' => 'https://shopee.co.id/Kojie-San-Skin-Lightening-Pore-Minimizing-Toner-with-Hydromoist-100ml-i.744873.3490520605?sp_atk=d2e72954-2403-40b9-ba39-923466f9d148&xptdk=d2e72954-2403-40b9-ba39-923466f9d148',
'description' => 'Benefit :
- Mengecilkan tampilan pori2 besar karena minyak berlebih pada kulit
- Membantu mengencangkan pori, melindungi kulit dari kotoran yang dapat menyumbat pori
- Membantu meregenerasi kulit.
- Dermatology Tested, Hypoallergenic, Paraben Free',
'price' => 56000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
475 => 
array (
'id' => 476,
'brand_id' => 32,
'name' => 'Mineral Botanica First Defense Toner 90ml',
'variation' => 'Defense Toner 90ml',
'link' => 'https://shopee.co.id/Mineral-Botanica-First-Defense-Toner-90ml-i.744873.12842417556?sp_atk=9299e4f9-fb7c-44b7-b8be-0a3a1f961930&xptdk=9299e4f9-fb7c-44b7-b8be-0a3a1f961930',
'description' => 'Mineral Botanica First Defense Toner sebagai penyegar yang mencerahkan kulit. Diformulasikan agar dapat mengangakat kotoran dan memberikan kesegaran pada kulit anda.
Spesifikasi
Netto : 90ml
Formula : cairan
Tekstur : encer 

Fungsi Bahan Aktif
Hamamelis Virginiana Leaf Extract : untuk melembapkan
Allantoin : meredakan kulit kemerahan
Glycyrrhiza Glabra (root) Extract : mencerahkan
Grape (Vitis Vinifera) Seed Extract : antioksidan
Glutathione : menyamarkan noda bekas jerawat dan menghambat pertumbuhan melanin di wajah 

	Poin Utama
Memberikan efek menyegarkan dan membantu mengurangi minyak berlebih.

	Manfaat
Penggunaannya dapat membantu kulit terlihat cerah, lembut dan membantu menyamarkan noda bekas jerawat.',
'price' => 25400,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
476 => 
array (
'id' => 477,
'brand_id' => 19,
'name' => 'Azarine Vitamin Lab Bubble On Me Deep Mask Cleanser | Essence Toner | Hydraoxidant Ampoule | Primer',
'variation' => 'Essence Toner 80ml',
'link' => 'https://shopee.co.id/Azarine-Vitamin-Lab-Bubble-On-Me-Deep-Mask-Cleanser-Essence-Toner-Hydraoxidant-Ampoule-Primer-i.744873.9441289036?sp_atk=4e892803-cc8c-48c1-9510-44814b0a4975&xptdk=4e892803-cc8c-48c1-9510-44814b0a4975',
'description' => 'Essence Toner yang berfungsi untuk menutrisi & melembabkan kulit di formulasikan dengan gabungan bahan ekstrak alami tumbuhan dan vitamin untuk merawat 
kehalusan kulit wajah
',
'price' => 29900,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
477 => 
array (
'id' => 478,
'brand_id' => 52,
'name' => 'SAFI White Expert 2 in 1 Cleanser & Toner 150 ml | Mini Size 70 ml',
'variation' => 'MINI Clns&Toner 70ml',
'link' => 'https://shopee.co.id/SAFI-White-Expert-2-in-1-Cleanser-Toner-150-ml-Mini-Size-70-ml-i.744873.1353295897?sp_atk=574f7cf2-6e3a-4441-8260-8630d392a222&xptdk=574f7cf2-6e3a-4441-8260-8630d392a222',
'description' => 'Pembersih wajah dual aksi. Gel pembersih wajah yang mudah dibilas ini mengandung Ekstrak Habbatus Sauda dan OxyWhite Technology. 
- Membersihkan debu dan sisa make up secara seksama dengan scrub lembutnya
- Kandungan Habbatus Sauda, minyak bunga matahari, dan Vitamin E sebagai Antioksidan untuk membantu melindungi kulit dari paparan radikal bebas
- Formulasi tanpa tambahan sabun membantu menjaga keseimbangan pH kulit
- Kandungan mentol memberikan sensasi menyegarkan pada kulit wajah

Cara Pakai : 
Pompa dan keluarkan secukupnya ke telapak tangan dan pijat dengan lembut pada wajah dengan gerakan memutar lalu bilas dengan air. ',
'price' => 23000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
478 => 
array (
'id' => 479,
'brand_id' => 54,
'name' => 'Kojie San Dream White Anti Aging Facial Toner With Collagen',
'variation' => 'Toner 60ml 05/2022',
'link' => 'https://shopee.co.id/Kojie-San-Dream-White-Anti-Aging-Facial-Toner-With-Collagen-i.744873.8122305252?sp_atk=a9c0e12f-f794-44b1-929c-4fdd835881fd&xptdk=a9c0e12f-f794-44b1-929c-4fdd835881fd',
'description' => 'Diformulasikan untuk semua jenis kulit. Ini mengandung Ekstra Marine dan Botani membuat kulit dilembabkan sehingga membantu mempersiapkan kulit untuk produk anti-penuaan lainnya.
Ini membantu merehidrasi, memutihkan, dan menyehatkan kulit.
Ini juga memiliki pengetatan pori yang aktif untuk kulit lebih halus dan lebih kencang.',
'price' => 31500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
479 => 
array (
'id' => 480,
'brand_id' => 50,
'name' => 'Emina Skin Buddy Face Toner 100ml',
'variation' => 'Buddy Face Toner',
'link' => 'https://shopee.co.id/Emina-Skin-Buddy-Face-Toner-100ml-i.744873.8312373149?sp_atk=11dfc30b-312f-44bc-8ee5-5ac3f490caa8&xptdk=11dfc30b-312f-44bc-8ee5-5ac3f490caa8',
'description' => 'Dengan ekstrak Aloe Vera dan Chamomile membantu melembabkan dan menyegarkan semua jenis kulit untuk kulit lembut dan lembab setiap hari. Cara pakai: Tuang secukupnya pada kapas atau tissue, tepuk lembut pada wajah dan leher yang telah dibersihkan. Biarkan mengering selama 1 menit sebelum menggunakan pelembab atau essence.',
'price' => 20750,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
480 => 
array (
'id' => 481,
'brand_id' => 12,
'name' => 'NPURE Cica Clear Pad -  Face Wash - Face Toner - Essence - Primer Serum - Day Cream - Night Cream - Acne Spot - Sunscreen - Mask | N\'Pure Cica Series - Anti Acne/Anti Jerawat',
'variation' => 'Essence Centela 20ml',
'link' => 'https://shopee.co.id/NPURE-Cica-Clear-Pad-Face-Wash-Face-Toner-Essence-Primer-Serum-Day-Cream-Night-Cream-Acne-Spot-Sunscreen-Mask-N\'Pure-Cica-Series-Anti-Acne-Anti-Jerawat-i.744873.11884013244?sp_atk=1b3a2afb-d606-4c10-912f-6d9bd69b980e&xptdk=1b3a2afb-d606-4c10-912f-6d9bd69b980e',
'description' => 'Membantu membersihkan wajah dari sisa kotoran, menyeimbangkan PH wajah, mencerahkan kulit wajah, merawat kulit berjerawat serta membuat kulit terasa segar, lembut dan lembab.

Diperkaya dengan kandungan seperti Centella Extract yang membantu memberikan kelembaban pada kulit, merawat peradangan pada kulit yang disebabkan oleh jerawat dan menghidrasi kulit, Salicylic Acid dan Mixed Fruit yang membantu merawat kulit berjerawat, serta Milk Protein yang membantu memberikan kehalusan dan kelembutan kulit.',
'price' => 121500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:58',
'updated_at' => '2022-06-27 15:42:58',
),
481 => 
array (
'id' => 482,
'brand_id' => 36,
'name' => 'Cleanface Smooth Toner - Toner Wajah - Clean Face - Purbasari',
'variation' => 'Face Toner 50ml',
'link' => 'https://shopee.co.id/Cleanface-Smooth-Toner-Toner-Wajah-Clean-Face-Purbasari-i.744873.15747599657?sp_atk=ef424dea-2af9-4014-b6e7-68bbe686fe1d&xptdk=ef424dea-2af9-4014-b6e7-68bbe686fe1d',
'description' => 'Smooth Toner penyegar wajah dari makeup dan kotoran akibat aktivitas di luar yang disesuaikan untuk semua jenis kulit. 

Kandungan Smooth Toner : 
-   Salicylic Acid yang mengangkat sel kulit mati
-   Vitamin A,C dan E untuk melembabkan, mencerahkan, dan anti oksidan
-   Kandungan Allantoin menjaga kelembaban',
'price' => 6300,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
482 => 
array (
'id' => 483,
'brand_id' => 57,
'name' => 'Acnes Oil Control Toner 110mL | Toner Jerawat',
'variation' => 'Oil Control Toner',
'link' => 'https://shopee.co.id/Acnes-Oil-Control-Toner-110mL-Toner-Jerawat-i.744873.1726360485?sp_atk=6a707327-a778-4af8-9862-3ec78ff52c7b&xptdk=6a707327-a778-4af8-9862-3ec78ff52c7b',
'description' => 'Formula khusus dengan Natural Active Ingredients untuk mengurangi minyak berlebih dan mengecilkan pori.
- Kombinasi dari ekstrak tanaman untuk membantu mengurangi minyak berlebih.
- Menjaga tekstur kulit dan mengecilkan pori.
- Bebas alkohol untuk menjaga kelembaban dan kelembutan kulit.

CARA PAKAI :
Usapkan dengan kapas ke seluruh wajah dan leher. Gunakan setelah menggunakan Acnes Natural Care Oil Control Milk Cleanser.',
'price' => 25000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
483 => 
array (
'id' => 484,
'brand_id' => 11,
'name' => 'Wardah Acnederm Pore Refining Toner 100 ml',
'variation' => 'Acnederm Pore TONER',
'link' => 'https://shopee.co.id/Wardah-Acnederm-Pore-Refining-Toner-100-ml-i.744873.4120249107?sp_atk=ec394286-73b9-4777-972a-b0f21af06327&xptdk=ec394286-73b9-4777-972a-b0f21af06327',
'description' => 'Bantu meringkas pori-pori yang telah dibersihkan dari kotoran dan debu yang menyumbat,
Bantu kontrol minyak berlebih di kulit,
Bantu mengurangi kemerahan pada kulit akibat iritasi,
Bantu menyeimbangkan kelembaban kulit sehingga tidak membuat kulit kering,
Cocok untuk kulit berjerawat sebelum menggunakan krim pelembab.',
'price' => 25000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
484 => 
array (
'id' => 485,
'brand_id' => 89,
'name' => 'Hatomugi Skin Conditioner Toner 500ml',
'variation' => 'Hatomugi Toner500ml',
'link' => 'https://shopee.co.id/Hatomugi-Skin-Conditioner-Toner-500ml-i.744873.13905789240?sp_atk=560f3f12-603a-404c-8815-510a7ad434cf&xptdk=560f3f12-603a-404c-8815-510a7ad434cf',
'description' => 'Hatomugi Skin Conditioner 500ml, toner + essence yang terbuat dari ekstrak jali-jali berfungsi untuk mendinginkan, menyegarkan dan melembabkan kulit. 

Hatomugi Skin Conditioner 500ml me-normalkan siklus pergantian sel kulit, mengatasi radang jerawat dan ruam (break outs). Selain itu juga efektif mengatasi bintik hitam, tekstur kulit tidak rata dan penuaan pada kulit.

Hatomugi Skin Conditioner 500ml dapat digunakan di wajah dan kulit tubuh dan bermanfaat untuk mengecilkan pori-pori, mencegah timbulnya jerawat dan meningkatkan kadar air sehingga kulit menjadi lembab dan segar. Gunakan juga Hatomugi Skin Conditioner 500ml untuk kulit yang terbakar matahari. 

Kandungan Hatomugi Skin Conditioner 500ml membantu memperbaiki sel-sel kulit sehingga dapat cepat pulih. Untuk hasil lebih maksimal dan segar, simpan Hatomugi Skin Conditioner 500ml di kulkas.',
'price' => 85000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
485 => 
array (
'id' => 486,
'brand_id' => 50,
'name' => 'Emina Bright Stuff Face Toner 50ml - 100ml | Bright Stuff Face Toner | Skin Care Skincare',
'variation' => 'BrightFaceToner100ml',
'link' => 'https://shopee.co.id/Emina-Bright-Stuff-Face-Toner-50ml-100ml-Bright-Stuff-Face-Toner-Skin-Care-Skincare-i.744873.2058636645?sp_atk=25a3622b-08f9-4c15-8258-5cae70c3959c&xptdk=25a3622b-08f9-4c15-8258-5cae70c3959c',
'description' => 'Deskripsi:
-Face toner yg cocok untuk kulit wajah kusam.
-Membantu Mencerahkan kulit.
-Dengan Extract Licorice dan Vit B.
-Mengusir kusam pada kulit cantikmu.
-Membantu membersihkan wajah dan menutrisi kulit. sehingga menjadikan wajah segar dan cerah secara alami. 

Cara Pakai : Tuang secukupnya pada kapas atau tissue, tepuk lembut pada wajah dan leher yang telah dibersihkan. Biarkan mengering selama 1 menit sebelum menggunakan pelembab atau essence.',
'price' => 21400,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
486 => 
array (
'id' => 487,
'brand_id' => 14,
'name' => 'Whitelab Brightening Face Toner - Exfoliating Toner - Soothing Toner - Acne Toner | White lab',
'variation' => 'Exfoliat Toner 70ml',
'link' => 'https://shopee.co.id/Whitelab-Brightening-Face-Toner-Exfoliating-Toner-Soothing-Toner-Acne-Toner-White-lab-i.744873.6258336681?sp_atk=ba9be1d0-f817-42fd-b8db-dc095042a2f6&xptdk=ba9be1d0-f817-42fd-b8db-dc095042a2f6',
'description' => 'Fungsi: 
- Membantu mencerahkan kulit 
- Mengangkat sisa kotoran di wajah 
- Mengontrol produksi minyak berlebih pada wajah 
- Menyegarkan wajah menjadi tidak kusam 

Whitelab Exfoliating Toner
Manfaat :
-	Mengangkat sel kulit mati pada permukaan kulit
-	Membantu mencerahkan dan meratakan kulit
-	Mengurangi kemerahan dan iritasi akibat jerawat
-	Membantu membersihkan pori yang tertutup oleh kotoran dan minyak
-	Meningkatkan hidrasi dan melembabkan kulit

Whitelab Soothing Toner
Manfaat :
-	Membantu mengontrol produksi minyak di wajah
-	Membersihkan kulit dari sisa kotoran yang menempel
-	Menyeimbangkan tingkat pH kulit
-	Membantu menengkan kulit sensitive, iritasi ringan dan kemerahan
-	Membantu mempertahankan air
-	Merawat kehalusan dan kelembaban kulit

Cara Pakai: Cuci muka dengan Whitelab Facial Wash. Setelah itu, teteskan Whitelab Toner ke kapas dan oleskan ke wajah',
'price' => 57000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
487 => 
array (
'id' => 488,
'brand_id' => 90,
'name' => 'BARU! Emina Natura Pal - Gel Cleanser - Toner Essence - Spalsh Serum - Gel Moisturizer',
'variation' => 'Toner Essence 100ml',
'link' => 'https://shopee.co.id/BARU!-Emina-Natura-Pal-Gel-Cleanser-Toner-Essence-Spalsh-Serum-Gel-Moisturizer-i.744873.14519032869?sp_atk=4054a8ce-3b65-415c-bca3-359b41b98f31&xptdk=4054a8ce-3b65-415c-bca3-359b41b98f31',
'description' => 'Multi benefit toner essence dengan 100% natural pea extract dan pH-balanced formula ada disini untuk kulitmu. Teksturnya yang ringan seperti air, menyegarkan dan mudah meresap ke kulit sehingga kulitmu terhidrasi seketika! Mengandung triple protection+ yang mampu lawan radikal bebas di sekitarmu. Membuat kulit tampak sehat, glowing, dan kenyal.',
'price' => 34900,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
488 => 
array (
'id' => 489,
'brand_id' => 67,
'name' => 'OMG OH MY GLOW Peach Glowing Toner - 100 ml',
'variation' => 'Face Toner 100ml',
'link' => 'https://shopee.co.id/OMG-OH-MY-GLOW-Peach-Glowing-Toner-100-ml-i.744873.13862299288?sp_atk=e3b09982-b445-488b-abae-5310369ef3db&xptdk=e3b09982-b445-488b-abae-5310369ef3db',
'description' => 'Toner untuk merawat dan menyegarkan kulit wajah. Dilengkapi dengan
Peach Extract dan SerumVit. B3+C+E yang mampu mencerahkan kulit
seketika serta membuat kulit wajah terasa lembab dan sehat.

Keunggulan dari produk ini adalah :
1. Memberikan rasa sejuk dan segar pada wajah
2. Mampu mencerahkan kulit
3. Melembapkan wajah
4. Tidak perih
5. Aroma toner yang menyegarkan
6. Mudah meresap

Cara pakai produk ini adalah :
Tuangkan toner ke kapas secukupnya kemudian usap merata pada wajah.
Toner dapat digunakan untuk mengangkat sisa kotoran setelah
membersihkan muka menggunakan facial wash.

Cara 1 : Menggunakan kapas
Tuangkan toner ke kapas secukupnya kemudian usap merata pada wajah.
Toner dapat digunakan :
a. Sebelum mencuci muka untuk memastikan wajah sudah
bersih, atau
b. Setelah mencuci muka untuk menyegarkan serta
melembabkan wajah dan memastikan wajah sudah bersih

Cara 2 : Langsung dituangkan ke telapak tangan
Tuangkan toner ke telapak tangan secukupnya kemudian di tepuk pelan
pada wajah',
'price' => 6300,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:42:59',
'updated_at' => '2022-06-27 15:42:59',
),
489 => 
array (
'id' => 490,
'brand_id' => 11,
'name' => 'WARDAH Hydra Rose Series | Dewy Aqua Day Gel - Moisture Rich Night Gel - Foam Cleanser - Toner - Infused',
'variation' => 'PETAL INFUSED TONER',
'link' => 'https://shopee.co.id/WARDAH-Hydra-Rose-Series-Dewy-Aqua-Day-Gel-Moisture-Rich-Night-Gel-Foam-Cleanser-Toner-Infused-i.744873.6652665890?sp_atk=c1371d0a-86e9-4d92-89f2-48bc327f5331&xptdk=c1371d0a-86e9-4d92-89f2-48bc327f5331',
'description' => ' Wardah Hydra Rose Petal Infused Toner 100ml
-Melembabkan kulit
-Menjaga kelembaban kulit
-Menjaga skin barrier
-Memberikan kesegaran pada kulit sehingga kulit tampak sehat berseri',
'price' => 99000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
490 => 
array (
'id' => 491,
'brand_id' => 11,
'name' => 'Wardah Nature Daily Aloe Hydramild Essence Toner 100ml - Face Toner - Toner Wajah',
'variation' => 'AloeVera Toner 100ml',
'link' => 'https://shopee.co.id/Wardah-Nature-Daily-Aloe-Hydramild-Essence-Toner-100ml-Face-Toner-Toner-Wajah-i.744873.13771365745?sp_atk=f88ce885-fe54-413d-bd06-a8a2e73a4e51&xptdk=f88ce885-fe54-413d-bd06-a8a2e73a4e51',
'description' => '5 In 1 Natural Essence Toner :
- Toner
- Essence
- Face Mask
- Eye Mask
- Face Mist

Toner affordable tetapi tidak murahan
5 Fungsi dalam satu produk 
Cocok untuk semua jenis kulit
Support digital banyak',
'price' => 13500,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
491 => 
array (
'id' => 492,
'brand_id' => 21,
'name' => 'AVOSKIN Perfect Hydrating Treatment Essence | Hydrating Treatment | Refining Toner Serum Retinol',
'variation' => 'Refining Toner 100ml',
'link' => 'https://shopee.co.id/AVOSKIN-Perfect-Hydrating-Treatment-Essence-Hydrating-Treatment-Refining-Toner-Serum-Retinol-i.744873.1729079580?sp_atk=7ab49cc8-f2a7-4abe-9981-134346f24d6c&xptdk=7ab49cc8-f2a7-4abe-9981-134346f24d6c',
'description' => 'The Superior and Most Wanted Product. During 2017, PHTE has been 5x sold out in less than one day, one month 0 stock, and re-arranged into nano particle with watery texture with objective to increase the absorption of the active ingredients.
In short, it is energizing moisture essence to recharge skin\'s radiance.

Benefit :
- Mencerahkan kulitmu sehingga terlihat bersinar
- Memulihkan dan memelihara elastisitas kulit agar terlindungi dengan  baik. Melembabkan dan menyeimbangkan pH kulitmu
- Memelihara kulit hingga lapisan terdalam, sehingga proses regenerasi kulit dapat berlangsung dengan maksimal
- Mengoptimalkan proses penetrasi di dalam kulit, sehingga saat menggunakan produk pada step selanjutnya akan lebih mudah meresap ke dalam kulit
- Dapat digunakan sebagai primer sebelum memakai makeup agar riasan mampu bertahan lama',
'price' => 156000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
492 => 
array (
'id' => 493,
'brand_id' => 22,
'name' => 'SOMETHINC ACNEDOT Treatment Toner - Toner Kulit Berjerawat',
'variation' => 'Acnedot Toner 100ml',
'link' => 'https://shopee.co.id/SOMETHINC-ACNEDOT-Treatment-Toner-Toner-Kulit-Berjerawat-i.744873.17535162742?sp_atk=a6cac122-9eb9-47f3-81dd-e9fb369a090c&xptdk=a6cac122-9eb9-47f3-81dd-e9fb369a090c',
'description' => 'Get Rid of Acne Poreblem in 28 days!
Toner pH balance vegan untuk kulit berjerawat yang membantu memperkecil tampilan pori & menyeimbangkan minyak berlebih pada wajah. Dengan kandungan 5X Acne Combat Power & 91% Korean Green Tea Water untuk melawan bakteri penyebab jerawat sekaligus menenangkan kemerahan pada kulit berjerawat.

Manfaat: 
️Membantu memperkecil tampilan pori
️Membantu menyeimbangkan minyak berlebih pada wajah
️Membantu melawan bakteri penyebab jerawat sekaligus menenangkan kemerahan pada kulit ️berjerawat

Star Ingredients: 
Succinic Acid: Mengurangi pori-pori tersumbat & tampilan minyak berlebih
Folic Acid: Menghambat pertumbuhan jerawat 
Hydrolyzed Algin: Mengontrol produksi minyak berlebih hingga 57% dalam 28 hari, melawan bakteri penyebab jerawat & bersifat anti bakteri
91% Korean Green Tea Water: Sumber antioksidan yang kuat, menenangkan kemerahan pada jerawat yang meradang & bersifat anti bakteri
Sea buckthorn: Efektifitas setara 15X lipat Vitamin C sebagai agen pencerah & sumber antioksidan

Jenis kulit: kulit berjerawat dan kulit berminyak

Cara pemakaian: 
Bersihkan wajah dengan Somethinc ACNEDOT Treatment Low pH Cleanser
Gunakan Somethinc ACNEDOT Treatment Toner dengan gerakan menepuk ke seluruh area wajah & leher
Lanjutkan dengan serum Somethinc favoritmu
Pada tahapan terakhir, gunakan moisturizer Somethinc ACNEDOT Treatment Moisturizer Gel ke seluruh wajah & leher. (Gunakan roller pijat dengan gerakan memutar untuk ukuran 50ml, hindari memijat pada area dengan jerawat aktif).
Pada pagi hari, gunakan sunscreen Somethinc favoritmu setelah penggunaan moisturizer

Vegan Friendly
Non- Irritation Formula
Dermatologically Tested
Hypoallergenic Tested
Fungal Acne Friendly
pH Balance
Suitable for teenager (boleh dipakai dari umur 11 tahun)',
'price' => 125000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
493 => 
array (
'id' => 494,
'brand_id' => 22,
'name' => 'SOMETHINC Skin Goals Vita Propolis Glow Essence Toner',
'variation' => 'SkinGoals Toner100ml',
'link' => 'https://shopee.co.id/SOMETHINC-Skin-Goals-Vita-Propolis-Glow-Essence-Toner-i.744873.3098756723?sp_atk=16d81120-66dc-4d82-a133-47695d9b625e&xptdk=16d81120-66dc-4d82-a133-47695d9b625e',
'description' => 'YOUR SKIN GOALS IS HERE!  #BrightBeautifully Skin in 28 Days!
Toner pH Balance dengan kandungan Vit C (EAA), Korean Propolis, New Zealand Manuka Honey, untuk menutrisi & mencerahkan kulit wajah dalam 28 hari*. Diperkaya dengan kandungan Pro-Vitamin B5 yang melembabkan & menjadikan kulit wajah tampak lebih sehat & glowing sepanjang hari.
*berdasarkan hasil uji in vivo bahan aktif Ethyl Ascorbic Acid

Manfaat: 
️Mencerahkan kulit wajah dalam 28 hari
️Melembabkan & menutrisi kulit agar lebih glowing
️Memperkuat skin barrier agar tidak mudah breakout
️Mengurangi bruntusan & bakteri penyebab jerawat

Star Ingredients: 
Ethyl Ascorbic Acid (Vitamin C): Turunan Vitamin C yang paling stabil & mencerahkan kulit wajah dalam 28 hari
Korean Propolis: Bersifat antioksidan, membantu memperkuat barrier kulit, menenangkan kulit kemerahan, mengurangi bruntusan, membantu melawan bakteri penyebab jerawat
New Zealand Manuka Honey: bersifat antibakteri, anti-inflamasi & membantu mempercepat pembaharuan sel kulit
Pro Vitamin B5 (Panthenol): Menjaga kelembaban kulit & menenangkan kulit

Jenis kulit: Semua jenis kulit

Cara pemakaian: 
Bersihkan wajah dengan Somethinc Low pH Gentle Jelly Cleanser
Gunakan Somethinc Skin Goals Vita Propolis Glow Essence Toner dengan gerakan menepuk ke seluruh area wajah & leher
Lanjutkan dengan serum Somethinc favoritmu
Pada tahapan terakhir, gunakan moisturizer Skin Goals Moisture Silk Creme ke seluruh wajah & leher. (Gunakan roller pijat dengan gerakan memutar untuk ukuran 50ml).
Pada pagi hari, gunakan sunscreen Somethinc favoritmu setelah penggunaan moisturizer.

Fungal Acne Friendly
Non-Comedogenic Certified
Hypoallergenic Tested
Dermatologically tested
Suitable for sensitive skin
Suitable for acne prone skin
Suitable for teenager (boleh dipakai dari umur 11 tahun)

*based on in vivo experimental results of the active ingredient Ethyl Ascorbic Acid',
'price' => 139000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
494 => 
array (
'id' => 495,
'brand_id' => 52,
'name' => 'Safi Hydra Glow Hydrating Water SERIES | Moisturizer - Lock Mist - Cleanser - Bank Serum - Toning Essence',
'variation' => 'Toner Essence 150ml',
'link' => 'https://shopee.co.id/Safi-Hydra-Glow-Hydrating-Water-SERIES-Moisturizer-Lock-Mist-Cleanser-Bank-Serum-Toning-Essence-i.744873.14070376925?sp_atk=4e21007e-bd59-45f4-add3-67c0eb743e8d&xptdk=4e21007e-bd59-45f4-add3-67c0eb743e8d',
'description' => 'Merupakan Toner diformulasikan dengan 5 Jenis Hyaluronic Acid yang menyerap cepat kedalam lapisan kulit. Menutrisi, menghidrasi serta mengunci kelembapan di dalam kulit. ',
'price' => 154900,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
495 => 
array (
'id' => 496,
'brand_id' => 1,
'name' => 'Nacific Fresh Herb Origin Toner 150ml - Face Toner - Toner Wajah',
'variation' => 'Origin Toner',
'link' => 'https://shopee.co.id/Nacific-Fresh-Herb-Origin-Toner-150ml-Face-Toner-Toner-Wajah-i.744873.15341844991?sp_atk=131c52b7-e1fd-444e-a344-a297169fa07f&xptdk=131c52b7-e1fd-444e-a344-a297169fa07f',
'description' => 'Key points :
Air bunga calendula membantu melembapkan kulit kering 
Sepicalm membantu menenangkan kulit dan menyeimbangkan kadar air & minyak di kulit
Fungsional whitening dan anti-wrinkle dengan niacinamide dan adenosine 

️Cara menggunakan️
1. Setelah cuci muka, tuang toner secukupnya di kapas
2. Usapkan dengan lembut di seluruh wajah
3. Biarkan menyerap dengan lembut

Fresh Herb Origin Toner mengandung ekstrak bunga Calendulla. Yang bermanfaat dalam menyeimbangkan tingkat kelembaban kulit dan menenangkan kondisi kulit yang sensitif.
Cairan bersifat kental dan transparan, produk di segel dengan rapih dan dapat mengatur batas keluarnya cairan toner.
Selain memberikan kelembaban pada kulit muka, membantu membersihkan sisa kotoran di muka dengan bersih. Dengan sepikam memberikan efek anti aging dan anti oksidan, serta memutihkan dan membantu meminimalisir kerut di wajah.
Baik disimpan selama 12 bulan setelah produk dibuka. jika segel produk belum di buka, baik disimpan selama 30 bulan

Cara menggunakan produk
Bilas muka dengan bersih agar kotoran yang menempel bersih dari muka
Basuhi kapas dengan toner secukupnya lalu usapkan ke permukaan muka
Beri tepukan lembut ke muka agar toner lebih menyerap ke kulit

Cara lain agar toner meresap ke kulit muka
Setelah mencuci muka, ambil 500ml air ke dalam wadah lalu teteskan toner menggunakan tutup toner sebanyak 2x
Aduk lalu bilas ke muka berkali kali
Setelah bilas, jangan di lap biarkan sisa air toner menyerap ke kulit muka lalu tepuk muka secara lembut.

Cara menggunakan toner sebagai masker
Basuhi kapas dengan toner secara keseluruhan 
Tempel di bagian muka yang ingin di lembabkan
Tinggalkan sekitar 5-10 menit 
Lalu beri tepukan halus ke muka anda agar toner lebih meresap lakukan proses ini 2x seminggu untuk hasil yang lebih maksimal. ',
'price' => 123000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
496 => 
array (
'id' => 497,
'brand_id' => 4,
'name' => 'GLOWINC POTION GENTLE+ Soothing Essence Toner',
'variation' => 'GENTLE+ Toner',
'link' => 'https://shopee.co.id/GLOWINC-POTION-GENTLE-Soothing-Essence-Toner-i.744873.13105902536?sp_atk=618c48cb-0d10-432d-a22f-dc5d3e946260&xptdk=618c48cb-0d10-432d-a22f-dc5d3e946260',
'description' => 'Toner pelembap wajah yang berfungsi untuk menenangkan kulit & membantu memperkuat skin barrier. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Gunakan toner langsung ke tangan atau kapas.
Oleskan ke seluruh wajah & leher kemudian lanjutkan ke step #No.3 yaitu serum. Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Propolis
Triple ceramide
Turmeric
Aloe water',
'price' => 80100,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
497 => 
array (
'id' => 498,
'brand_id' => 22,
'name' => 'SOMETHINC Calm Down! PHA 3% Everyday Toner 40ml 120ml - Skinpair R-Cover Ampoule 30ml',
'variation' => 'PHA 3% Toner 40ml',
'link' => 'https://shopee.co.id/SOMETHINC-Calm-Down!-PHA-3-Everyday-Toner-40ml-120ml-Skinpair-R-Cover-Ampoule-30ml-i.744873.15013491814?sp_atk=1a375418-2de7-4da0-984b-2b15d1dd621d&xptdk=1a375418-2de7-4da0-984b-2b15d1dd621d',
'description' => 'Why It\'s Special
Dual Calm Action Toner! Non-drying gentle exfoliating toner dengan kandungan 3% PHA yang berfungsi untuk mengangkat kotoran & sel kulit mati penyebab kusam sekaligus menenangkan kulit dengan kandungan 55% Green Plants Skin Purifying & Calming yang terdiri dari:
1. Madecassoside (Centella Asiatica)
2. Pure Mugwort Extract
3. Heartleaf Extract
4. Aloe Vera Extract
Bantu samarkan bekas jerawat PIE, menghaluskan, sekaligus menghidrasi kulit. Cocok untuk kulit kering, sensitif, berjerawat, & cenderung mudah kemerahan.

- Fungal Acne Safe
- Vegan Friendly

HOW TO USE
1. Bersihkan wajah dan keringkan 
2. Tuangkan toner ke kapas, usap secara lembut ke seluruh area wajah & leher 
3. Lanjutkan step penggunaan serum dan akhiri dengan moisturizer 
4. Dapat digunakan setiap hari (siang & malam)',
'price' => 59000,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
498 => 
array (
'id' => 499,
'brand_id' => 4,
'name' => 'GLOWINC POTION ACNECORE+ Clear AC Toner',
'variation' => 'ACNECORE Toner',
'link' => 'https://shopee.co.id/GLOWINC-POTION-ACNECORE-Clear-AC-Toner-i.744873.12405791891?sp_atk=1169d54d-f9a9-4eb9-8444-fa1459cdf863&xptdk=1169d54d-f9a9-4eb9-8444-fa1459cdf863',
'description' => 'Toner penyegar wajah untuk kulit berjerawat & pori-pori besar. Membantu melawan bakteri penyebab jerawat, membantu mengecilkan pori-pori & mengontrol produksi sebum di wajah. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Gunakan toner langsung ke tangan atau kapas. 
Balurkan ke wajah secara merata. Gunakan setiap hari, pagi & malam.

Kandungan
Diperkaya oleh:
AC Care 1000
Succinic acid
Pore reductyl
Triple Ceramide
Tea tree
Turmeric water',
'price' => 71100,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:00',
'updated_at' => '2022-06-27 15:43:00',
),
499 => 
array (
'id' => 500,
'brand_id' => 30,
'name' => 'SUKIN Blemish Control Pore Perfecting Toner - Clearing Facial Wash - Spot Banishing Gel',
'variation' => 'Perfect Toner 125ml',
'link' => 'https://shopee.co.id/SUKIN-Blemish-Control-Pore-Perfecting-Toner-Clearing-Facial-Wash-Spot-Banishing-Gel-i.744873.9168802919?sp_atk=4a0be643-80ea-4513-a5c1-24e2bf6d046e&xptdk=4a0be643-80ea-4513-a5c1-24e2bf6d046e',
'description' => 'Sukin Blemish Control Pore Perfecting Toner 125 ml
• Toner wajah
• Untuk kulit acne prone
• Membersihkan pori-pori dan mengurangi tampak pori-pori
• Mengurangi kilau berlebih di wajah

Kandungan utama: Eucalyptus, Tea Tree, Quince

Cara penggunaan:
1. Tuang pada kapas dan usapkan dengan lembut pada wajah yang telah dibersihkan
2. Lanjutkan dengan pelembap
3. Gunakan setiap hari, pagi dan malamSukin menghindari penggunaan bahan sintetis yang keras untuk mengeringkan jerawat secara instan. Sukin menggunakan bahan natural yang relatif lebih lembut di kulit untuk melawan penyebab jerawat hingga ke akar, sehingga lebih aman dan efektif menjaga kesehatan kulit   mengurangi jerawat dalam jangka panjang.',
'price' => 164200,
'category' => 'Essence Toner',
'created_at' => '2022-06-27 15:43:01',
'updated_at' => '2022-06-27 15:43:01',
),
));
        \DB::table('products')->insert(array (
            0 => 
            array (
                'id' => 501,
                'brand_id' => 14,
                'name' => 'Whitelab Soothing Toner | White Lab Soothing Toner',
                'variation' => 'Soothing Toner 60ml',
                'link' => 'https://shopee.co.id/Whitelab-Soothing-Toner-White-Lab-Soothing-Toner-i.744873.15704092372?sp_atk=a47ad729-1f27-457d-bb16-1931aefe3229&xptdk=a47ad729-1f27-457d-bb16-1931aefe3229',
                'description' => 'Dengan kandungan utama Mugwort + Cica

Whitelab Soothing Toner merupakan Lightweight Toner yang di formulasikan secara unique untuk mendukung perawatan kulit anda. Dengan kandungan natural ingredients dan Alcohol-free, Whitelab Soothing Toner sangat gentle untuk digunakan setiap hari.

Powerful Ingredients:
-Mugwort (Artemisia Capillaris Extract) yang bermanfaat sebagai Anti Oksidan Booster, dapat membantu membersihkan kulit dari sisa kotoran yang menempel, melembabkan, menyeimbangkan tingkat pH kulit, serta membantu mengurangi produksi minyak berlebih.
-Cica (Centella Asiatica Extract) bermanfaat untuk menenangkan kulit dari iritasi ringan dan kemerahan, membantu mempertahankan air dan meningkatkan kelembaban pada kulit

Manfaat :
-	Membantu mengontrol produksi minyak di wajah
-	Membersihkan kulit dari sisa kotoran yang menempel
-	Menyeimbangkan tingkat pH kulit
-	Membantu menengkan kulit sensitive, iritasi ringan dan kemerahan
-	Membantu mempertahankan air
-	Merawat kehalusan dan kelembaban kulit

Cara pakai : Tuangkan Whitelab Soothing Toner secukupnya ke telapak tangan / kapas, usap lembut dengan kapas ke seluruh permukaan wajah dan leher yang telah dibersihkan.

Dermatologist Tested
Sensitive skin friendly
Untuk semua jenis kulit
Suitable for Acne Prone & Sensitive Skin.
Boleh dipakai dari umur 12 tahun keatas.',
                'price' => 57000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            1 => 
            array (
                'id' => 502,
                'brand_id' => 4,
                'name' => 'GLOWINC POTION MAINTAIN+ Nutrient Skin Essence Toner',
                'variation' => 'MAINTAIN+ Toner',
                'link' => 'https://shopee.co.id/GLOWINC-POTION-MAINTAIN-Nutrient-Skin-Essence-Toner-i.744873.10146690581?sp_atk=393ab734-9dab-4685-aa29-403561bef536&xptdk=393ab734-9dab-4685-aa29-403561bef536',
                'description' => 'GLOWINC Potion MAINTAIN+ Nutrient Skin Essence Toner 100 ml
Toner wajah yang dapat menghidrasi kulit, membantu mencerahkan kulit & membantu mencegah munculnya tanda-tanda penuaan dini. Dapat digunakan setiap hari, pagi & malam.

Facts
Ramah untuk fungal acne
Hipoalergenik
Teruji secara dermatologi
Halal
Tersertifikasi oleh BPOM
Ramah untuk remaja
Tidak melalui uji coba pada hewan

Cara Pakai
Gunakan toner langsung ke tangan atau kapas.
Oleskan ke seluruh wajah & leher kemudian lanjutkan ke step #No.3 yaitu serum.   Gunakan setiap hari, pagi & malam.
Kandungan
Diperkaya oleh:
Triple ceramide
Hyaluronic acid
Glutathione
Acetyl hexapeptide-8',
                'price' => 71100,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            2 => 
            array (
                'id' => 503,
                'brand_id' => 40,
                'name' => 'Everwhite Soothing Essence Toner 100ml',
                'variation' => 'Soothing Toner 100ml',
                'link' => 'https://shopee.co.id/Everwhite-Soothing-Essence-Toner-100ml-i.744873.6996048569?sp_atk=7b2e33e0-c11b-41bd-9159-9043a1777155&xptdk=7b2e33e0-c11b-41bd-9159-9043a1777155',
                'description' => 'Soothing Essence Toner merupakan essence toner ringan yang mampu membersihkan dan menyegarkan kulit. Mengandung bahan-bahan yang dikenal luas karna manfaatnya untuk menenangkan kulit.

Hero Ingredients:
-Mugwort yang memiliki sifat anti-inflammatory dan anti-oxidant, sehingga dapat bekerja dengan meredakan peradangan kulit ringan, kulit wajah yang kemerahan akibat iritasi, kulit kering yang disertai dengan rasa gatal.
-Hyaluronate memiliki berat molekul yang lebih rendah dibandingkan Hyaluronic Acid, sehingga mampu menembus lapisan kulit lebih dalam, menghidrasi kulit yang kering, serta mampu mengurangi iritasi kulit ringan.

Manfaat :
-	Mengangkat sisa kotoran dan minyak pada kulit
-	Membantu menengkan kulit yang kemerahan akibat iritasi ringan
-	Merawat kelembaban kulit wajah
-	Menyeimbangkan Ph kulit wajah, sehingga siap menerima tahapan skincare lainnya
-	Merawat kehalusan dan kelmbutan kulit

Cara pakai : Usap lembut dengan kapas atau tangan ke permukaan wajah dan leher yang telah di bersihkan.

Dermatology Tested
Untuk semua jenis kulit
Dapat digunakan untuk ibu hamil dan menyusui',
                'price' => 87400,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            3 => 
            array (
                'id' => 504,
                'brand_id' => 8,
                'name' => 'ElsheSkin Soothing Treatment Brightening Series | Elshe Skin Soothing Treatment Brightening Series',
                'variation' => 'Soothing Skin TONER',
                'link' => 'https://shopee.co.id/ElsheSkin-Soothing-Treatment-Brightening-Series-Elshe-Skin-Soothing-Treatment-Brightening-Series-i.744873.5949567380?sp_atk=f1659f94-acc9-477f-b9ea-ffb2d9398197&xptdk=f1659f94-acc9-477f-b9ea-ffb2d9398197',
                'description' => 'Elsheskin Soothing Treatment Brightening Series ini rangkaian produk perawatan untuk kulit sensitif, kering dan kusam yang berfungsi untuk: 
Melembutkan kulit dan menjaga kelembaban kulit.
- Mencerahkan kulit wajah.
- Menyamarkan bekas hitam.
- Untuk menghaluskan dan melembutkan.
- Melembabkan kulit.

Cara penggunaan:
Step Pagi:
1. ElsheSkin Soothing Cleanser Wash.
2. ElsheSkin Soothing Skin Toner.
3. ElsheSkin Soothing Daily Protection.

Step Malam:
1. ElsheSkin Soothing Cleanser Wash.
2. ElsheSkin Soothing Skin Toner.
3. Brightening Cream Sebelum tidur dioles ke seluruh wajah hindari area sensitif.

Note:
Hindari area sensitif: area mata, cuping hidung, pojok bibir.
Gunakan sesuai aturan cara pakai.',
                'price' => 48750,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            4 => 
            array (
                'id' => 505,
                'brand_id' => 29,
                'name' => 'Cetaphil Bright Healthy Radiance Brightness Refresh Toner 150ml | Cetaphil Brightness Refresh Toner',
                'variation' => 'Refresh Toner 150ml',
                'link' => 'https://shopee.co.id/Cetaphil-Bright-Healthy-Radiance-Brightness-Refresh-Toner-150ml-Cetaphil-Brightness-Refresh-Toner-i.744873.7967488009?sp_atk=0b1ea06c-191c-4e22-8da0-8ef7a0429f3f&xptdk=0b1ea06c-191c-4e22-8da0-8ef7a0429f3f',
                'description' => 'Cetaphil Bright Healthy Radiance Brightness Refresh Toner yang dapat memberi kilau dan hidrasi, sekaligus melembutkan dan menghaluskan kulit. Membantu menjaga keremajaan kulit dengan mengangkat sel kulit mati, kotoran, dan debu.

Kelebihan Produk:
Cetaphil Bright Healthy Radiance Brightness Refresh Toner teruji dalam perpaduan ekstrak alami White Sea Daffodil dan Niacin Amida yang dirancang untuk menampilkan kilau alami dan kulit yang sehat. 

Kandungan Produk:
Cetaphil Bright Healthy Radiance Brightness Refresh Toner mengandung Glycerin, Niacinamide, dan White Sea Daffodil yang membantu mencerahkan dan melembutkan kulit. 

Cara Penggunaan:
Gunakan Cetaphil Bright Healthy Radiance Brightness Refresh Toner dengan menuangkan pada kapas secukupnya, usap dari area tengah wajah ke arah luar dengan gerakan ke atas dan biarkan menyerap. Hindari area mata. Tidak perlu dibilas.',
                'price' => 158000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            5 => 
            array (
                'id' => 506,
                'brand_id' => 33,
                'name' => 'Himalaya Refreshing And Clarifying Toner - 100ml',
                'variation' => 'Clarifying Toner',
                'link' => 'https://shopee.co.id/Himalaya-Refreshing-And-Clarifying-Toner-100ml-i.744873.6077355822?sp_atk=30bb3680-0034-4e2d-8df8-f8b1f51104ee&xptdk=30bb3680-0034-4e2d-8df8-f8b1f51104ee',
                'description' => 'Formula bebas alkohol yang membersihkan pori-pori dan menyegarkan, menjadikan kulit anda bebas dari minyak tanpa mrnjadi kulit anda kering, Mengurangi minyak pada wajah dan menjadikan kulit menjadi bersih dan segar.

Cara Pakai : Tuangkan beberapa tetes pada wajah mengunakan kapas pembersih dan usap merata padan wajah dan leher.',
                'price' => 18800,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            6 => 
            array (
                'id' => 507,
                'brand_id' => 8,
                'name' => 'ElsheSkin Anti Aging Refresh Toner | Elshe Skin Anti Aging Refresh Toner',
                'variation' => 'Aging Refresh Toner',
                'link' => 'https://shopee.co.id/ElsheSkin-Anti-Aging-Refresh-Toner-Elshe-Skin-Anti-Aging-Refresh-Toner-i.744873.1980741321?sp_atk=f0b5ded2-e1ad-44f9-80a4-0e568beb63ef&xptdk=f0b5ded2-e1ad-44f9-80a4-0e568beb63ef',
                'description' => 'Membantu membersihkan jenis kulit wajah yang kering dari kotoran, debu, makeup, dan sisa cleanser yang masih tertinggal setelah proses mencuci wajah. Juga menyegarkan dan mengembalikan pH alami kulit.

How to use ;
Tuangkan ElshéSkin Anti-Aging Refresh Toner pada kapas dan tepuk perlahan secara merata pada seluruh wajah. Gunakan setelah pemakaian ElshéSkin Cleanser Wash dan tunggu sampai meresap, lanjutkan dengan pemakaian produk perawatan selanjutnya.

Benefit :
Penyegar khusus untuk jenis kulit wajah normal to dry yang bermanfaat untuk mengembalikan keseimbangan pH alami kulit setelah proses mencuci wajah, sekaligus mencegah penuaan dini.',
                'price' => 50000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            7 => 
            array (
                'id' => 508,
                'brand_id' => 15,
                'name' => '[BPOM] SOMEBYMI Super Matcha - Galactomyces - Yuja Niacin - AHA BHA PHA - Mask Pack - SOME BY MI',
                'variation' => 'Trucica Toner 135ml',
                'link' => 'https://shopee.co.id/-BPOM-SOMEBYMI-Super-Matcha-Galactomyces-Yuja-Niacin-AHA-BHA-PHA-Mask-Pack-SOME-BY-MI-i.744873.11406740765?sp_atk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526&xptdk=89e67fb6-3ea0-4652-8b99-5f7f94ef1526',
                'description' => 'Kelebihan
- Menyegarkan kulit
- Meningkatkan elastisitas pori
Kekurangan
- Bisa jadi tidak cocok untuk kulit sensitif

SOMEBYMI AHA-BHA-PHA 30Days Miracle Toner 150ml
Manfaat utama:
1. Menghilangkan jerawat
2. Menghaluskan kulit wajah
3. Menjaga kulit tetap lembab
4. Mencerahkan wajah

Galactomyces Pure Vitamin Glow Toner 200ml - SOME BY MI
Manfaat Utama :
- Mencerahkan dan meratakan warna kulit wajah.
- Menghaluskan kulit.
- Melembabkan kulit.
- Mengencangkan kulit.
- Menyamarkan garis halus atau keriput halus di wajah.
- Mencerahkan area bawah mata.
- Menyamarkan bekas jerawat dan juga flek hitam',
                'price' => 128000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            8 => 
            array (
                'id' => 509,
                'brand_id' => 91,
                'name' => 'PYUNKANG YUL Acne Toner 150ml [BPOM] | Face Toner | Toner Wajah',
                'variation' => 'Acne Toner',
                'link' => 'https://shopee.co.id/PYUNKANG-YUL-Acne-Toner-150ml-BPOM-Face-Toner-Toner-Wajah-i.744873.3005903582?sp_atk=6146448f-95b4-4f40-a4ba-ecc471fb58fb&xptdk=6146448f-95b4-4f40-a4ba-ecc471fb58fb',
                'description' => 'Acne Toner adalah toner yang dikhususkan untuk kulit bermasalah. Memiliki tekstur yang ringan sehingga mudah diserap oleh kulit. Toner ini dapat memberikan kesegaran serta mengontrol produksi sebum pada kulit. 

Cara Pemakaian:
Basahi kapas dengan toner dan usapkan secara lembut ke permukaan wajah.

Kandungan :
Water, Butylene Glycol, Dimethyl Sulfone, Pyridoxine HCl, Salix Alba (Willow) Bark Extract, Niacinamide, Forsythia Suspensa Fruit Extract, Centella Asiatica Extract, Polygonum Cuspidatum Root Extract, Scutellaria Baicalensis Root Extract, Camellia Sinensis Leaf Extract, Glycyrrhiza Uralensis (Licorice) Root Extract, Chamomilla Recutita (Matricaria) Flower Extract, Rosmarinus Officinalis (Rosemary) Leaf Extract, Copper Tripeptide-1, Glycerin, Hydroxyacetophenone, Myrtus Communis Extract, Tropaeolum majus Extract, Ethylhexylglycerin, Disodium EDTA',
                'price' => 105500,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            9 => 
            array (
                'id' => 510,
                'brand_id' => 14,
                'name' => 'Whitelab Acne Toner | White Lab Acne Toner',
                'variation' => 'Acne Toner 100ml',
                'link' => 'https://shopee.co.id/Whitelab-Acne-Toner-White-Lab-Acne-Toner-i.744873.12753562559?sp_atk=329fd7fe-c02d-4653-80d5-1a7b37b88b62&xptdk=329fd7fe-c02d-4653-80d5-1a7b37b88b62',
                'description' => 'Whitelab Acne toner merupakan produk yang di formulasikan khusus sebagai pendukung untuk acne treatment anda. 

Powerful Ingredients:
-Tea Tree (Melaleuca Alternifolia): merupakan anti oksidan kuat yang dapat membantu mengontrol produksi minyak berlebih pada wajah, serta merawat kehalusan dan kelembutan kulit. Tea Tree juga memiliki sifat anti-inflamasi yang dapat menenangkan sekaligus memberikan kesegaran pada kulit.
-Hexamidine berfungsi sebagai anti-microbial dengan spektrum luas,  mampu mencegah pertumbuhan bakteri serta mikroba tanpa mengeringkan dan menimbulkan reaksi alergi pada kulit. Selain itu, Hexamidine juga dapat membantu mengurangi kulit kemerahan dan iritasi karena jerawat,

Manfaat :
-	Membantu mengontrol produksi minyak di wajah
-	Membantu mencegah pertumbuhan bakteri dengan spektrum luas
-	Mengurangi kemerahan dan iritasi akibat jerawat
-	Menenangkan sekaligus memberikan kesegaran pada kulit
-	Merawat kehalusan dan kelembutan kulit

Cara pakai : Tuangkan Whitelab Acne Toner secukupnya ke telapak tangan / kapas, usap lembut dengan kapas ke seluruh permukaan wajah dan leher yang telah dibersihkan.

Dermatologically Tested
Untuk jenis kulit: Berjerawat
Suitable for Acne Prone & Sensitive Skin.
Boleh dipakai dari umur 12 tahun keatas.
Dapat digunakan untuk Ibu menyusui. Untuk Ibu hamil harap dikonsultasikan terlebih dahulu.',
                'price' => 57000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:01',
                'updated_at' => '2022-06-27 15:43:01',
            ),
            10 => 
            array (
                'id' => 511,
                'brand_id' => 8,
                'name' => 'ElsheSkin Refresh Toner for Normal Skin | Elshe Skin Refresh Toner for Normal Skin',
                'variation' => 'Toner for NormalSkin',
                'link' => 'https://shopee.co.id/ElsheSkin-Refresh-Toner-for-Normal-Skin-Elshe-Skin-Refresh-Toner-for-Normal-Skin-i.744873.1980759303?sp_atk=21044b6b-ebfe-44de-a9ee-2311ad7d2f80&xptdk=21044b6b-ebfe-44de-a9ee-2311ad7d2f80',
                'description' => 'Membantu mengembalikan pH kelembaban alami kulit, mengangkat kotoran, makeup, dan cleanser yang masih tertinggal.

How to use :
Tuangkan ElshéSkin Refresh Toner for Normal Skin 4-6 tetes pada kapas, lalu tepuk perlahan pada area wajah. Gunakan setelah proses membersihkan wajah.

Benefit :
Kulit wajah menjadi lebih bersih, segar, mengurangi minyak berlebih, membersihkan kotoran dan debu yang menempel, dan merawat jenis wajah normal.',
                'price' => 52500,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            11 => 
            array (
                'id' => 512,
                'brand_id' => 8,
                'name' => 'ElsheSkin Lightening Refresh Toner / Elshe Skin Brightening Refresh Toner',
                'variation' => 'Lightening R. Toner',
                'link' => 'https://shopee.co.id/ElsheSkin-Lightening-Refresh-Toner-Elshe-Skin-Brightening-Refresh-Toner-i.744873.1980587704?sp_atk=05c4d50f-5b26-4079-88b1-2fa38fe41df4&xptdk=05c4d50f-5b26-4079-88b1-2fa38fe41df4',
                'description' => 'Penyegar dengan kandungan Glutathione, Vitamin C, Grapee Seed Extract, dan Arbutin bermaanfaat untuk mengembalikan pH dan kelembaban alami kulit setelah proses pembersihan, sekaligus mencerahkan kulit.

How to use :
Tuangkan 4-6 tetes pada kapas lalu tepuk perlahan secara merata pada seluruh kulit wajah. Gunakan setelah pemakaian ElshéSkin Lightening Foaming Cleanser.

Benefit : 
Penyegar kulit yang dapat menyegarkan dan membersihkan kulit wajah dari kotoran, sisa make up, dan cleanser yang masih tertinggal. Mengandung Whitening Agent yang dapat mencerahkan kulit wajah secara merata.',
                'price' => 79000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            12 => 
            array (
                'id' => 513,
                'brand_id' => 8,
                'name' => 'ElsheSkin Refresh Toner / Normal Skin/ Acne Skin/Oily Skin / Anti Aging /Lightening/Soothing 100ml',
                'variation' => 'Normal Skin Toner',
                'link' => 'https://shopee.co.id/ElsheSkin-Refresh-Toner-Normal-Skin-Acne-Skin-Oily-Skin-Anti-Aging-Lightening-Soothing-100ml-i.744873.2071315059?sp_atk=5eb7b465-30be-4894-9395-e39a794fea9c&xptdk=5eb7b465-30be-4894-9395-e39a794fea9c',
                'description' => 'Penyegar dengan kandungan Glutathione, Vitamin C, Grapee Seed Extract, dan Arbutin bermaanfaat untuk mengembalikan pH dan kelembaban alami kulit setelah proses pembersihan, sekaligus mencerahkan kulit.

How to use :
Tuangkan 4-6 tetes pada kapas lalu tepuk perlahan secara merata pada seluruh kulit wajah. Gunakan setelah pemakaian ElshéSkin Lightening Foaming Cleanser.

Benefit : 
Penyegar kulit yang dapat menyegarkan dan membersihkan kulit wajah dari kotoran, sisa make up, dan cleanser yang masih tertinggal. Mengandung Whitening Agent yang dapat mencerahkan kulit wajah secara merata.',
                'price' => 65000,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            13 => 
            array (
                'id' => 514,
                'brand_id' => 28,
                'name' => 'COSRX Series AHA/BHA C.Toner | Low PH Good Morning Gel Cleanser | Salicylic Acid',
                'variation' => 'Hyadrium Toner 50ml',
                'link' => 'https://shopee.co.id/COSRX-Series-AHA-BHA-C.Toner-Low-PH-Good-Morning-Gel-Cleanser-Salicylic-Acid-i.744873.2938094087?sp_atk=f95244da-1bfe-4d6b-8803-07225174c2fd&xptdk=f95244da-1bfe-4d6b-8803-07225174c2fd',
                'description' => 'Toner dari COSRX ini mengandung AHA/BHA organik yang berfungsi sebagai exfoliating toner serta membantu untuk meredakan jerawat. Selain itu, produk ini juga berfungsi untuk mengatasi masalah komedo, meremajakan kulit, dan menghidrasi kulit wajah sehingga wajah akan terlihat sehat dan flawless.

COSRX Advanced Snail 96 Mucin Power Essence 100ml 
Advanced Snail 96 Mucin Power Essence diformulasikan dengan 96% Snail Secretion Filtrate (Mucin) yang dapat memberi kelembapan ekstra kepada kulit serta memperbaiki tekstur kulit menjadi lebih sehat dan kenyal. Memiliki tekstur yang agak kental tetapi terasa ringan di kulit.',
                'price' => 82500,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            14 => 
            array (
                'id' => 515,
                'brand_id' => 5,
                'name' => 'Pond\'s White Beauty Lightening Toner | Cleansing Milk | Ponds Lightening Toner | Cleansing Milk',
                'variation' => 'LighteningToner150ml',
                'link' => 'https://shopee.co.id/Pond\'s-White-Beauty-Lightening-Toner-Cleansing-Milk-Ponds-Lightening-Toner-Cleansing-Milk-i.744873.6668234777?sp_atk=a69177db-fb5e-44e5-8224-c497124dd0b2&xptdk=a69177db-fb5e-44e5-8224-c497124dd0b2',
                'description' => 'Pond’s White Beauty Lightening Toner merupakan toner berformula menyegarkan, diperkaya dengan Peral Nutrients, AHA, dan Vitamin B3, yang dapat memperkecil pori-pori dan mengangkat minyak berlebih serta mencerahkan noda hitam pada wajah. Kulit tampak putih merona, noda tersamarkan, dan tidak mengkilap. Mengandung Pro-Vitamin B3 yang dapat mencerahkan jutaan sel kulit wajah.

Manfaat Produk :
- Dapat atasi masalah kulit berminyak dan kusam
- Formula menyegarkan serta diperkaya pearl Nutrients, AHA, dan Vitamin B3
- Dapat memperkecil pori dan mengangkat minyak berlebih dari kulit sekaligus mencerahkan flek hitam

Cara Penggunaan :
- Tuangkan sedikit isi pada kapas bersih, lalu oleskan ke seluruh wajah, konsentrasikan pada daerah dahi, hidung, dan hidung bagian pinggir (T-Zone) dan dagu. Dapat digunakan pada pagi dan malam hari.',
                'price' => 25900,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            15 => 
            array (
                'id' => 516,
                'brand_id' => 10,
                'name' => 'Pixy White Aqua Hydra Moist Essence 125ml',
                'variation' => 'White Aqua Essence',
                'link' => 'https://shopee.co.id/Pixy-White-Aqua-Hydra-Moist-Essence-125ml-i.744873.2699437256?sp_atk=70d6c94b-430a-445a-8269-3ed459313bed&xptdk=70d6c94b-430a-445a-8269-3ed459313bed',
                'description' => 'Dengan MOISTURE LOCK AGENT yang berfungsi untuk menjaga kelembapan kulit dan INTENSIVE HYDRA ACTIVE yang menghidrasi dan membantu melembapkan secara intensif. Mengandung VITAMIN C dan Ekstrak MULBERRY yang membantu mencerahkan kulit. Formula berbahan dasar air, sehingga ringan dan mudah diserap kulit.',
                'price' => 69600,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
            16 => 
            array (
                'id' => 517,
                'brand_id' => 20,
                'name' => 'HANASUI Flawless Glow 10 Power Essence 100ml - Toner',
                'variation' => 'Power Essence 100ml',
                'link' => 'https://shopee.co.id/HANASUI-Flawless-Glow-10-Power-Essence-100ml-Toner-i.744873.3191240527?sp_atk=3a9f48be-6968-409d-af23-042796e41df7&xptdk=3a9f48be-6968-409d-af23-042796e41df7',
                'description' => 'Hanasui Flawless Glow 10 Hadir untuk menjadi solusi para wanita yang ingin melakukan perawatan wajah namun dengan biaya yang tidak banyak. Memiliki 4 rangkaian yakni Facial Wash, Essence, Day Cream dan Night Cream. Dengan 1 rangkaian tersebut, konsumen dapat merasakan 10 manfaat sekaligus.

Dengan kandungan bahan alami dan bahan aktif antara lain Niacinamide, Blue Oleoactif® yang berfungsi sebagai Anti Pollutan dan Anti Blue light serta Pentavitin yang dapat menghidrasi kulit wajah hingga 72 jam.

Kandungan utama :
	Niacinamide : Mencerahkan & Sebum Reducer
	Sodium Hyaluronate : Anti bacteria, Menghidrasi & Menjaga Kelembapan
	Betain : Menghaluskan & Melembutkan kulit
	Mc Glucan : Anti Iritasi, Boost Collagen

Benefit :
	Menutrisi dan menghidrasi kulit
	Memaksimalkan produk Skincare yang akan digunakan selajutnya
	Meningkatkan sintesis kolagen dan menjadikan kulit lebih lembut & halus
	Menjaga kelembapan kulit wajah
	Mencerahkan dan melembapkan kulit wajah

Cara Pakai : 
Bersihkan kulit wajah , tuangan essence pada telapak tangan atau kapas. Oleskan ke seluruh wajah dan leher sampai sepenuhnya terserap. Lanjutkan dengan penggunaan Serum dan Cream Hanasui',
                'price' => 19400,
                'category' => 'Essence Toner',
                'created_at' => '2022-06-27 15:43:02',
                'updated_at' => '2022-06-27 15:43:02',
            ),
        ));
        
        
    }
}