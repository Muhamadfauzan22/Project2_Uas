<?php

namespace Database\Seeders;

use App\Models\Movies;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movies::create([
            'title' => 'Itaewon Class',
            'poster' => 'https://koreanindo.net/wp-content/uploads/2020/01/itaewon-class.jpg',
            'genres_id' => 1,
            'synopsis' => 'Sempat dipermalukan oleh CEO Jang Dae Hee, Park Sae Ro Yi memutuskan untuk membuka restoran di Itaewon dan membalas dendam pada Jang Dae Hee dan anaknya.',
            'release_date' => '2020-03-20',
            'countries_id' => 1,
            'rating' => 4.5
        ]);

        Movies::create([
            'title' => 'Crash Landing on You',
            'poster' => 'https://upload.wikimedia.org/wikipedia/id/6/64/Crash_Landing_on_You_main_poster.jpg',
            'genres_id' => 1,
            'synopsis' => 'Seorang wanita kaya dari Korea Selatan secara tidak sengaja mendarat di Korea Utara saat terjun payung dalam suatu insiden kecelakaan paralayang. Di sana, dia bertemu dengan seorang perwira militer yang akan membantu menyembunyikannya dan bertahan hidup.',
            'release_date' => '2019-12-14',
            'countries_id' => 1,
            'rating' => 4.8
        ]);

        Movies::create([
            'title' => 'The Heirs',
            'poster' => 'https://s2.bukalapak.com/img/2406643312/large/51IRZ64tvtL_SY445_.jpg',
            'genres_id' => 1,
            'synopsis' => 'Ketika seorang gadis miskin masuk ke dalam sekolah paling bergengsi di negara itu, dia menarik perhatian pemimpin kelompok populer di sekolah tersebut. Dengan situasi yang rumit dan kisah cinta yang rumit, mereka harus mengatasi banyak rintangan untuk bersama.',
            'release_date' => '2013-10-09',
            'countries_id' => 1,
            'rating' => 4.6
        ]);

        Movies::create([
            'title' => 'Descendants of the Sun',
            'poster' => 'https://upload.wikimedia.org/wikipedia/id/6/6e/DescendantsoftheSun.jpg',
            'genres_id' => 1,
            'synopsis' => 'Ketika dua orang dengan pekerjaan yang berbahaya jatuh cinta, mereka harus mempertimbangkan risiko yang ada antara tugas mereka dan perasaan yang mendalam satu sama lain.',
            'release_date' => '2016-02-24',
            'countries_id' => 1,
            'rating' => 4.7
        ]);

        Movies::create([
            'title' => 'Goblin',
            'poster' => 'https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1532630369i/40954245.jpg',
            'genres_id' => 1,
            'synopsis' => 'Seorang goblin yang hidup selama ratusan tahun mencari seorang pengantin manusia untuk meredakan kutukan abadinya, tetapi segalanya berubah ketika dia jatuh cinta pada seorang pengantin manusia yang bertanggung jawab atas takdirnya.',
            'release_date' => '2016-12-02',
            'countries_id' => 1,
            'rating' => 4.9
        ]);
    }
}
