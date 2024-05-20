<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Sepatu;
use App\Models\Barangbekas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         //panggil eksekusi category seeders
         $this->call(CategorySeeder::class);
        
        //Data Untuk Sepatu
        Sepatu::create([
            'category_id' => 1,
            'nama' => 'Nike Air Jordan',
            'slug' => 'nike-air-jordan',
            'img' => 'nike-air-jordan.png',
            'excerpt' => 'Nike Air Jordan adalah lini sepatu olahraga yang diciptakan oleh perusahaan olahraga terkemuka, Nike, berkolaborasi dengan legenda basket, Michael Jordan. Peluncuran pertama sepatu ini pada tahun 1984 menandai awal dari salah satu merek sepatu olahraga paling ikonik dalam sejarah.',
            'deskripsi' => 'Nike Air Jordan adalah lini sepatu olahraga yang diciptakan oleh perusahaan olahraga terkemuka, Nike, berkolaborasi dengan legenda basket, Michael Jordan. Peluncuran pertama sepatu ini pada tahun 1984 menandai awal dari salah satu merek sepatu olahraga paling ikonik dalam sejarah.
            Sejak awal, Nike Air Jordan tidak hanya menjadi alat perlengkapan bagi atlet, tetapi juga menjadi bagian penting dari budaya populer. Salah satu inovasi utamanya adalah penggunaan teknologi Air-Sole, yang memberikan perlindungan dan penyerapan benturan superior di bagian tumit sepatu, meningkatkan kenyamanan dan performa pemain basket.
            Desain sepatu Nike Air Jordan, yang dikembangkan oleh desainer terkenal Tinker Hatfield, memadukan keunggulan teknis dengan estetika yang unik dan inovatif. Logo "Jumpman" yang terkenal dan desain-desain berani dengan warna-warna mencolok telah membuat sepatu ini menjadi simbol gaya dan status.
            Selain model-model reguler, Nike Air Jordan juga sering merilis edisi khusus dan kolaborasi dengan seniman, desainer, dan merek lainnya. Edisi khusus ini sering kali menjadi langka dan sangat dicari oleh para penggemar sepatu.
            Pengaruh Nike Air Jordan dalam budaya populer melebihi olahraga basket itu sendiri. Sepatu ini telah menjadi simbol keberhasilan, kekuatan, dan gaya hidup, dipakai oleh atlet, selebriti, dan penggemar mode di seluruh dunia. Perjalanan kesuksesan lini Nike Air Jordan terus berlanjut dengan peluncuran model-model baru yang terus mengikuti perkembangan teknologi dan tren mode terkini.
            Secara keseluruhan, Nike Air Jordan bukan hanya sebuah merek sepatu olahraga; ia adalah sebuah fenomena budaya yang telah merajut jaringan penggemar yang kuat di seluruh dunia, menggabungkan keunggulan teknis dengan gaya yang tak tertandingi.',
            'harga' => 5000000
        ]);
        Sepatu::create([
            'category_id' => 2,
            'nama' => 'Ventela Basic Low Black Natural',
            'slug' => 'ventela-basic-low-black-natural',
            'img' => 'ventela-basic-low-black-natural.png',
            'excerpt' => 'Sepatu Ventela Basic Low Black Natural adalah salah satu model sepatu sneaker yang diproduksi oleh Ventela, sebuah merek sepatu lokal Indonesia. Desainnya didasarkan pada prinsip kesederhanaan yang elegan, dengan warna hitam sebagai warna dominan yang mudah dipadankan dengan berbagai pakaian.',
            'deskripsi' => 'Sepatu Ventela Basic Low Black Natural adalah salah satu model sepatu sneaker yang diproduksi oleh Ventela, sebuah merek sepatu lokal Indonesia. Desainnya didasarkan pada prinsip kesederhanaan yang elegan, dengan warna hitam sebagai warna dominan yang mudah dipadankan dengan berbagai pakaian.
            Dalam hal bahan dan kualitas konstruksi, sepatu ini dibuat dari bahan berkualitas tinggi, seperti kulit sintetis atau kanvas berkualitas tinggi untuk bagian atasnya. Sol sepatu biasanya terbuat dari karet alami atau bahan sintetis yang kokoh namun fleksibel, memberikan kenyamanan dan daya tahan yang baik.
            Meskipun memiliki desain yang sederhana, sepatu Ventela Basic Low Black Natural menawarkan tingkat kenyamanan yang tinggi. Sol yang empuk namun responsif memastikan kaki tetap nyaman sepanjang hari, bahkan saat digunakan untuk aktivitas yang intens.
            Dalam hal perawatan, sepatu ini relatif mudah dirawat. Cukup dengan membersihkannya secara teratur dengan sikat lembut dan air sabun ringan untuk menjaga kebersihan dan penampilannya. Praktik perawatan yang teratur juga dapat membantu memperpanjang umur sepatu.
            Sepatu Ventela Basic Low Black Natural tersedia di toko-toko sepatu lokal di Indonesia serta dapat dibeli secara online melalui situs web resmi Ventela. Harga dapat bervariasi tergantung pada lokasi dan penjualnya, namun secara umum, sepatu Ventela menawarkan nilai yang baik dengan harga yang terjangkau.
            Ventela dikenal sebagai merek sepatu lokal yang menawarkan produk-produk berkualitas tinggi dengan harga yang bersaing. Komitmennya terhadap praktik-produksi yang berkelanjutan dan etis juga membuatnya menjadi pilihan yang baik bagi mereka yang peduli dengan lingkungan dan masyarakat.',
            'harga' => 350000
        ]);
        Sepatu::create([
            'category_id' => 2,
            'nama' => 'Nike Mercurial',
            'slug' => 'nike-mercurial',
            'img' => 'nike-mercurial.png',
            'excerpt' => 'Sepatu Nike Mercurial adalah salah satu serangkaian sepatu sepak bola paling terkenal di dunia yang diproduksi oleh Nike. Didesain dengan tujuan utama untuk meningkatkan kecepatan dan kelincahan pemain, sepatu ini telah menjadi pilihan favorit banyak atlet profesional dan amatir. ',
            'deskripsi' => 'Sepatu Nike Mercurial adalah salah satu serangkaian sepatu sepak bola paling terkenal di dunia yang diproduksi oleh Nike. Didesain dengan tujuan utama untuk meningkatkan kecepatan dan kelincahan pemain, sepatu ini telah menjadi pilihan favorit banyak atlet profesional dan amatir. Berikut adalah penjelasan mendetail tentang sepatu Nike Mercurial:
            Sepatu Mercurial dirancang dengan berat yang ringan untuk memungkinkan pemain merasa lebih cepat dan lincah di lapangan. Desain aerodinamisnya mengurangi hambatan udara saat berlari dengan kecepatan tinggi, membantu pemain mencapai performa maksimal.
            Nike menggunakan berbagai teknologi material terbaru dalam pembuatan sepatu Mercurial. Misalnya, penggunaan bahan sintetis seperti Flyknit memberikan keseimbangan yang optimal antara kekuatan, fleksibilitas, dan kenyamanan. Teknologi ini memastikan bahwa sepatu dapat menahan tekanan dan torsi yang terjadi selama permainan.
            Sol sepatu Mercurial dirancang khusus untuk memberikan cengkeraman yang optimal pada berbagai jenis permukaan lapangan. Ada berbagai varian sol, seperti FG (Firm Ground), AG (Artificial Ground), dan SG (Soft Ground), yang sesuai dengan kondisi lapangan yang berbeda.
            Selain performa, sepatu Mercurial juga dikenal karena desainnya yang mencolok dan inovatif. Nike sering menggunakan warna-warna cerah dan desain futuristik untuk menarik perhatian pemain dan penggemar.
            Nike juga sering melakukan kolaborasi dengan pemain sepak bola terkenal atau merilis edisi khusus Mercurial untuk merayakan momen-momen tertentu, seperti Piala Dunia atau penghargaan individu kepada pemain.
            Perusahaan terus melakukan penelitian dan pengembangan untuk meningkatkan performa sepatu Mercurial. Mereka bekerja sama dengan atlet, teknisi, dan desainer untuk menciptakan sepatu yang terus memenuhi tuntutan permainan yang semakin cepat dan intensif.
            Dengan semua fitur dan inovasi ini, sepatu Nike Mercurial telah menjadi salah satu pilihan utama bagi banyak pemain sepak bola di seluruh dunia yang mencari sepatu yang dapat meningkatkan kecepatan, kelincahan, dan performa mereka di lapangan.',
            'harga' => 4000000
        ]);

        //data untuk barang bekas
        Barangbekas::create([
            'category_id' => 4,
            'nama' => 'Erigo Coach Jacket Relax Your Mind',
            'slug' => 'erigo-relax-your-mind',
            'img' => 'erigocoach.jpeg',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, cum.',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate animi mollitia ipsum perspiciatis non exercitationem quam similique repudiandae? Debitis ratione ipsum corporis omnis fugiat harum ullam perferendis commodi ad ipsa. Culpa dolorem at perferendis possimus nesciunt nisi maiores eaque a quasi sunt, voluptates neque esse provident! Eveniet deserunt debitis deleniti.',
            'harga' => 199000
        ]);
        Barangbekas::create([
            'category_id' => 5,
            'nama' => 'H&M T-Shirt X Ariana Grande',
            'slug' => 'h&m-t-shirt-ariana-grande',
            'img' => 'h&mxariana.jpeg',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, cum.',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate animi mollitia ipsum perspiciatis non exercitationem quam similique repudiandae? Debitis ratione ipsum corporis omnis fugiat harum ullam perferendis commodi ad ipsa. Culpa dolorem at perferendis possimus nesciunt nisi maiores eaque a quasi sunt, voluptates neque esse provident! Eveniet deserunt debitis deleniti.',
            'harga' => 2500000
        ]);
        Barangbekas::create([
            'category_id' => 4,
            'nama' => 'Murayama Sukajan',
            'slug' => 'murayama-sukajan',
            'img' => 'sukajan.jpeg',
            'excerpt' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, cum.',
            'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate animi mollitia ipsum perspiciatis non exercitationem quam similique repudiandae? Debitis ratione ipsum corporis omnis fugiat harum ullam perferendis commodi ad ipsa. Culpa dolorem at perferendis possimus nesciunt nisi maiores eaque a quasi sunt, voluptates neque esse provident! Eveniet deserunt debitis deleniti.',
            'harga' => 3000000
        ]);
    }
}
