<?php

namespace Database\Seeders;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'item_name' => 'Kol',
            'item_desc' => 'Terdiri dari beberapa kultivar Brassica oleracea, adalah tanaman dua tahunan berdaun hijau, merah, atau putih yang ditanam sebagai tanaman sayuran tahunan untuk kepalanya yang berdaun lebat.',
            'price' => 8000,
            'item_pict' => 'kol.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Sawi',
            'item_desc' => 'Sawi adalah sekelompok tumbuhan dari genus Brassica yang dimanfaatkan daun atau bunganya sebagai bahan pangan (sayuran), baik segar maupun diolah. Sawi mencakup beberapa spesies Brassica yang kadang-kadang mirip satu sama lain.',
            'price' => 6000,
            'item_pict' => 'sawi.jpeg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Wortel',
            'item_desc' => 'Wortel adalah tumbuhan biennial yang menyimpan karbohidrat dalam jumlah besar untuk tumbuhan tersebut berbunga pada tahun kedua. Batang bunga tumbuh setinggi sekitar 1 m, dengan bunga berwarna putih, dan rasa yang manis langu.',
            'price' => 7000,
            'item_pict' => 'wortel.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Brokoli',
            'item_desc' => 'Brokoli adalah tanaman yang sering dibudidayakan sebagai sayur. Brokoli adalah kultivar dari spesies yang sama dengan kubis dan kembang kol, yaitu Brassica oleracea.',
            'price' => 5500,
            'item_pict' => 'brokoli.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Terong',
            'item_desc' => 'Terung adalah tumbuhan penghasil buah yang dijadikan sayur-sayuran. Asalnya adalah India dan Sri Lanka. Terung berkerabat dekat dengan kentang dan leunca, dan agak jauh dari tomat.',
            'price' => 6500,
            'item_pict' => 'terong.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Kentang',
            'item_desc' => 'Kentang, ubi kentang, ubi belanda, atau ubi benggala adalah tanaman dari suku Solanaceae yang memiliki umbi batang yang dapat dimakan dan disebut "kentang".',
            'price' => 4500,
            'item_pict' => 'kentang.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Tomat',
            'item_desc' => 'Tumbuhan ini memiliki buah berwarna hijau, kuning, dan merah yang biasa dipakai sebagai sayur dalam masakan atau dimakan secara langsung tanpa diproses. Tomat memiliki batang dan daun yang tidak dapat dikonsumsi',
            'price' => 11000,
            'item_pict' => 'tomat.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Timun',
            'item_desc' => 'Mentimun, timun, atau ketimun merupakan tumbuhan yang menghasilkan buah yang dapat dimakan. Buahnya biasanya dipanen ketika belum masak benar untuk dijadikan sayuran atau penyegar',
            'price' => 8500,
            'item_pict' => 'timun.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Bawang Putih',
            'item_desc' => 'Bawang putih adalah nama tanaman dari genus Allium sekaligus nama dari umbi yang dihasilkan. Mempunyai sejarah penggunaan oleh manusia selama lebih dari 7.000 tahun',
            'price' => 2500,
            'item_pict' => 'bawang putih.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Bawang Merah',
            'item_desc' => 'Bawang merah adalah salah satu bumbu masak utama dunia yang berasal dari Iran, Pakistan, dan pegunungan-pegunungan di sebelah utaranya, tetapi kemudian menyebar ke berbagai penjuru dunia',
            'price' => 2300,
            'item_pict' => 'bawang merah.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Bawang Bombai',
            'item_desc' => 'Bawang bombai adalah jenis bawang yang paling banyak dan luas dibudidayakan, dipakai sebagai bumbu maupun bahan masakan, berbentuk bulat besar dan berdaging tebal',
            'price' => 3400,
            'item_pict' => 'bawang bombai.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Daun Bawang',
            'item_desc' => 'Daun bawang merupakan jenis sayuran dari kelompok bawang yang banyak digunakan dalam masakan. Dalam masakan Indonesia, daun bawang bisa ditemukan misalnya dalam martabak telur dan lainnya',
            'price' => 4600,
            'item_pict' => 'daun bawang.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Tauge',
            'item_desc' => 'Tauge kacang hijau adalah sayuran kuliner yang ditanam dengan cara menumbuhkan kacang hijau.',
            'price' => 1500,
            'item_pict' => 'Taoge.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Kangkung',
            'item_desc' => 'Kangkung adalah tumbuhan yang termasuk jenis sayur-sayuran dan ditanam sebagai makanan. Kangkung banyak dijual di pasar-pasar.',
            'price' => 5700,
            'item_pict' => 'kangkung.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Buncis',
            'item_desc' => 'Buncis, adalah sejenis polong-polongan yang dapat dimakan dari berbagai kultivar Phaseolus vulgaris. Buah, biji, dan daunnya dimanfaatkan orang sebagai sayuran.',
            'price' => 6600,
            'item_pict' => 'Buncis.jpg'
        ]);

        DB::table('items')->insert([
            'item_name' => 'Pakcoy',
            'item_desc' => 'Sayur pakcoi paling sering dijumpai di sajian chinese food. Pakcoi bisa ditumis bersama bawang putih untuk jadi santapan sehat setiap hari.',
            'price' => 5700,
            'item_pict' => 'Pakcoy.jpg'
        ]);

    }
}
