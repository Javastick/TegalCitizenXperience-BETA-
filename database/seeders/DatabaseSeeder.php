<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Pemerintah Kota Tegal',
            'email' => 'pemkot@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'agency.jpg',
            'card' => fake()->randomNumber(9, true) . fake()->randomNumber(7, true),
            'role' => 'agency',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Dinas Lingkungan',
            'email' => 'disling@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'dinling.jpg',
            'card' => fake()->randomNumber(9, true) . fake()->randomNumber(7, true),
            'role' => 'agency',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Polantas Kota Tegal',
            'email' => 'polantas@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'polantas.jpg',
            'card' => fake()->randomNumber(9, true) . fake()->randomNumber(7, true),
            'role' => 'agency',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Dishub Kota Tegal',
            'email' => 'dishub@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'dishub.jpg',
            'card' => fake()->randomNumber(9, true) . fake()->randomNumber(7, true),
            'role' => 'agency',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Orang Kota',
            'email' => 'rakyat1@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'kota.jpg',
            'card' => '33760' . fake()->randomNumber(9, true) . fake()->randomDigit(),
            'role' => 'tegal',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Orang Kabupaten',
            'email' => 'rakyat2@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => 'kabupaten.jpg',
            'card' => '33281' . fake()->randomNumber(9, true) . fake()->randomDigit(),
            'role' => 'non-tegal',
            'password' => 'lalala123'
        ]);
        \App\Models\User::create([
            'name' => 'Orang non Tegal',
            'email' => 'rakyat3@example.com',
            'phone' => fake()->randomNumber(9, true) . fake()->randomNumber(4, true),
            'image' => null,
            'card' => fake()->randomNumber(9, true) . fake()->randomNumber(7, true),
            'role' => 'non-tegal',
            'password' => 'lalala123'
        ]);

        \App\Models\Complaint::create([
            'title' => 'Ana wong obong obongan runtah',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nisi vel convallis laoreet. Integer convallis elit sed aliquam convallis. Duis rutrum erat mollis tempor pulvinar. Nunc venenatis, arcu quis vestibulum pulvinar, quam ligula tincidunt odio, non aliquam mi urna feugiat dolor. Maecenas sapien erat, feugiat vel suscipit eu, eleifend et nisl. Duis fringilla ultrices augue. Etiam ornare, diam eu auctor vulputate, urna mauris pretium augue, sed tempor lectus neque in urna. Pellentesque tempus dolor at lacus bibendum consectetur. Sed ligula sem, blandit vel fermentum eget, accumsan in lacus. Donec facilisis sodales ullamcorper. Quisque id libero ligula. Curabitur iaculis, tortor non consectetur fringilla, turpis elit viverra urna, quis condimentum nunc odio non elit. Sed tincidunt massa rhoncus, gravida lectus et, tristique mauris.',
            'location' => 'Kemuning ngarep mesjid',
            'category' => 'lingkungan',
            'image' => 'sampah.jpg',
            'user_id' => 5
        ]);
        \App\Models\Complaint::create([
            'title' => 'Pohon pinggir dalan pantura diakehi',
            'content' => 'Aku gudu wong tegal tapi sering bolak balik pemalang-brebes lewat pantura tegal kota, masyaallah panase bisa por nemen nganti semelet men nng kempol apamaning lampu merahe suwe nemen kae dang tengari, seorane ditanduri wit witan nng pinggir dalane sing akeh eben adem.',
            'location' => 'Pantura Kota Tegal',
            'category' => 'lingkungan',
            'user_id' => 7
        ]);
        \App\Models\Complaint::create([
            'title' => 'Dalan nng prapatan maya kayong ampun nemen',
            'content' => 'Mau awan aku liwat ning prapatan maya ngarange  pan mari pemalang, tapi dalane coal nng tengah prapatane, padahal ngiringane pos polisi is. kue aku ge enggal nggecol gara gara kue',
            'location' => 'Prapatan maya pasifik',
            'category' => 'infrastruktur',
            'image' => 'jalan.jpeg',
            'user_id' => 6
        ]);
        \App\Models\Complaint::create([
            'title' => 'Langite peteng udane saya ora udan udan',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nisi vel convallis laoreet. Integer convallis elit sed aliquam convallis. Duis rutrum erat mollis tempor pulvinar. Nunc venenatis, arcu quis vestibulum pulvinar, quam ligula tincidunt odio, non aliquam mi urna feugiat dolor. Maecenas sapien erat, feugiat vel suscipit eu, eleifend et nisl. Duis fringilla ultrices augue. Etiam ornare, diam eu auctor vulputate, urna mauris pretium augue, sed tempor lectus neque in urna. Pellentesque tempus dolor at lacus bibendum consectetur. Sed ligula sem, blandit vel fermentum eget, accumsan in lacus. Donec facilisis sodales ullamcorper. Quisque id libero ligula. Curabitur iaculis, tortor non consectetur fringilla, turpis elit viverra urna, quis condimentum nunc odio non elit. Sed tincidunt massa rhoncus, gravida lectus et, tristique mauris.',
            'location' => 'Mejasem',
            'category' => 'lingkungan',
            'image' => null,
            'user_id' => 5
        ]);
        \App\Models\Complaint::create([
            'title' => 'Banyak mobil lawan arah',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam interdum nisi vel convallis laoreet. Integer convallis elit sed aliquam convallis. Duis rutrum erat mollis tempor pulvinar. Nunc venenatis, arcu quis vestibulum pulvinar, quam ligula tincidunt odio, non aliquam mi urna feugiat dolor. Maecenas sapien erat, feugiat vel suscipit eu, eleifend et nisl. ',
            'location' => 'Jl.Ahmad Yani Pasar pagi tegal',
            'category' => 'lalu-lintas',
            'image' => 'povcar.jpg',
            'user_id' => 5
        ]);
        \App\Models\Complaint::create([
            'title' => 'Kondisi pemukiman tidak layak samping rel',
            'content' => 'Saya ingin melaporkan kondisi pemukiman di sekitar rel kereta api yang sangat tidak layak. Banyak warga di daerah ini tinggal dalam rumah yang bersebelahan langsung dengan jalur kereta api. Rumah-rumah ini terletak dalam jarak yang sangat dekat dengan rel, menyebabkan risiko keamanan dan kesehatan yang serius.
            Atap-atap rumah seringkali terkena getaran dan debu yang dihasilkan oleh kereta api yang melintas, dan kebisingan yang sangat tinggi juga menjadi masalah. Beberapa rumah bahkan mengalami kerusakan struktural akibat getaran berulang kali dari lalu lintas kereta api.
            Selain itu, tidak ada fasilitas keamanan atau pembatas yang memadai antara pemukiman dan rel kereta api. Hal ini menciptakan potensi bahaya bagi penghuni, terutama anak-anak kecil yang tinggal di daerah tersebut.
            Saya berharap pemerintah setempat dapat segera mengambil tindakan untuk memperbaiki kondisi pemukiman ini, memberikan perlindungan yang memadai, dan meningkatkan kualitas hidup warga yang tinggal di sekitar rel kereta api.',
            'location' => 'Rel kereta Randugunting Tegal selatan',
            'category' => 'sosial',
            'image' => 'slum.jpg',
            'user_id' => 5
        ]);

    }
}
