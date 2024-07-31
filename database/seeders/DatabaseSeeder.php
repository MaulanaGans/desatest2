<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Pengaduan;
use App\Models\PengaduanComment;
use App\Models\Site;
use App\Models\Team;
use App\Models\Service;
use App\Models\News;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Site::create([
            'name' => 'Desa Majalengka',
            'short_description' => 'Desa Majalengka',
            'description' => 'Desa Majalengka',
            'address' => 'Jl. Majalengka No. 1',
            'latitude' => '-6.9079',
            'longitude' => '107.611',
            'phone' => '0812-3456-7890',
            'email' => 'admin@majalengka.com',
            'facebook' => 'https://www.facebook.com/majalengka',
            'instagram' => 'https://www.instagram.com/majalengka',
            'video' => 'https://www.youtube.com/watch?v=qLDP7JEyz2Y',
            'image' => '/assets/img/desagambar.png',
            'logo' => '/assets/img/hurufDcon.jpg',
            'visi' => 'Visi',
            'misi' => 'Misi',
            'struktur' => '/assets/img/desagambar.png',
        ]);
        User::create([
            'name' => 'Admin Yami',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'phone' => "08123456789",
            'address' => "Jl. Kebon Kacang",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'admin',
            'remember_token' => Str::random(10),
            'picture' => '/uploads/profile/1650250363gMsZC.jpg',
        ]);
        User::create([
            'name' => 'Eunha',
            'username' => 'masyarakat',
            'email' => 'masyarakat@gmail.com',
            'email_verified_at' => now(),
            'phone' => "08123456789",
            'address' => "Jl. Kebon Kacang",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'role' => 'user',
            'remember_token' => Str::random(10),
            'picture' => '/uploads/profile/1650248042G1sJ3.jpg',
        ]);
        User::factory(10)->create();
        Pengaduan::create([
            'subject' => 'Pengaduan 1',
            'description' => 'Deskripsinya Pengaduan 1',
            'status' => 'proses',
            'user_id' => 2,
        ]);
        Pengaduan::create([
            'subject' => 'Pengaduan 2',
            'description' => 'Deskripsinya Pengaduan 2',
            'status' => 'menunggu',
            'user_id' => 2,
        ]);
        Pengaduan::create([
            'subject' => 'Pengaduan 3',
            'description' => 'Deskripsinya Pengaduan 3',
            'status' => 'selesai',
            'user_id' => 2,
        ]);
        Pengaduan::factory(50)->create();
        PengaduanComment::factory(150)->create();
        Team::create([
            'name' => 'Maman Suherman',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'image' => '/dashboard_assets/assets/images/users/2.jpg',
            'position' => 'Kepala Desa',
            'facebook' => 'https://www.facebook.com/majalengka',
            'instagram' => 'https://www.instagram.com/majalengka',
            'twitter' => 'https://www.twitter.com/majalengka',
            'whatsapp' => 'https://wa.me/628123456789',
        ]);
        Team::create([
            'name' => 'Jajang Kujang',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'image' => '/dashboard_assets/assets/images/users/3.jpg',
            'position' => 'Wakil Kepala Desa',
            'facebook' => 'https://www.facebook.com/majalengka',
            'instagram' => 'https://www.instagram.com/majalengka',
            'twitter' => 'https://www.twitter.com/majalengka',
            'whatsapp' => 'https://wa.me/628123456789',
        ]);
        Team::create([
            'name' => 'Lisa Blackpink',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'image' => '/dashboard_assets/assets/images/users/4.jpg',
            'position' => 'Sekreatris',
            'facebook' => 'https://www.facebook.com/majalengka',
            'instagram' => 'https://www.instagram.com/majalengka',
            'twitter' => 'https://www.twitter.com/majalengka',
            'whatsapp' => 'https://wa.me/628123456789',
        ]);
        Team::create([
            'name' => 'Setya Novianti',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'image' => '/dashboard_assets/assets/images/users/5.jpg',
            'position' => 'Bendahara',
            'facebook' => 'https://www.facebook.com/majalengka',
            'instagram' => 'https://www.instagram.com/majalengka',
            'twitter' => 'https://www.twitter.com/majalengka',
            'whatsapp' => 'https://wa.me/628123456789',
        ]);
        Service::create([
            'name' => 'Kesehatan',
            'icon' => "bx bx-plus-medical",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Service::create([
            'name' => 'Wisata',
            'icon' => "bx bxs-camera",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Service::create([
            'name' => 'Transportasi',
            'icon' => "bx bx-car",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Service::create([
            'name' => 'Sekolah',
            'icon' => "bx bxs-school",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Service::create([
            'name' => 'BPJS',
            'icon' => "bx bx-plus-medical",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Service::create([
            'name' => 'Surat Menyurat',
            'icon' => "bx bx-envelope",
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'url' => 'https://google.com/',
        ]);
        Category::create([
            'name' => 'Politik',
            'slug' => 'politik',
            'image' => '/assets/img/portfolio/presidenrusia.jpeg',
            'description' => 'lorem ipsum dolor sit amet constretur param',
        ]);
        Category::create([
            'name' => 'Kesehatan',
            'slug' => 'kesehatan',
            'image' => '/assets/img/portfolio/presidenrusia.jpeg',
            'description' => 'lorem ipsum dolor sit amet constretur param',
        ]);
        Category::create([
            'name' => 'Wisata',
            'slug' => 'wisata',
            'image' => '/assets/img/portfolio/presidenrusia.jpeg',
            'description' => 'lorem ipsum dolor sit amet constretur param',
        ]);
        News::create([
            'slug' => 'news-1',
            'title' => 'News 1',
            'thumbnail' => '/assets/img/portfolio/presidenrusia.jpeg',
            'content' => 'lorem ipsum dolor sit amet constretur param',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'user_id' => 1,
            'category_id' => 1,
            'status' => 'published',
        ]);
        News::create([
            'slug' => 'news-2',
            'title' => 'News 2',
            'thumbnail' => '/assets/img/portfolio/presidenrusia.jpeg',
            'content' => 'lorem ipsum dolor sit amet constretur param',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'user_id' => 1,
            'category_id' => 1,
            'status' => 'published',
        ]);
        News::create([
            'slug' => 'news-3',
            'title' => 'News 3',
            'thumbnail' => '/assets/img/portfolio/presidenrusia.jpeg',
            'content' => 'lorem ipsum dolor sit amet constretur param',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'user_id' => 1,
            'category_id' => 1,
            'status' => 'published',
        ]);
        News::create([
            'slug' => 'news-4',
            'title' => 'News 4',
            'thumbnail' => '/assets/img/portfolio/presidenrusia.jpeg',
            'content' => 'lorem ipsum dolor sit amet constretur param',
            'description' => 'lorem ipsum dolor sit amet constretur param',
            'user_id' => 1,
            'category_id' => 1,
            'status' => 'published',
        ]);
    }
}
