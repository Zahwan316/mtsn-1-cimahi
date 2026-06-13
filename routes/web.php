<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/beranda", function(){
    $visi = [
        "Lulusan dan seluruh civitas memiliki akhlak yang mulia: Setiap siswa dan staf madrasah menunjukkan perilaku yang baik dan sesuai dengan nilai-nilai moral dan agama.",
        "Madrasah yang bersih, indah, dan nyaman: Lingkungan madrasah terjaga kebersihannya, dengan penataan yang estetis dan suasana yang nyaman untuk belajar.",
        "Mengikuti dan menggunakan perkembangan teknologi: Madrasah memanfaatkan teknologi terbaru dalam proses pembelajaran dan manajemen, memastikan siswa siap menghadapi era digital.",
        "Prestasi akademik dan non-akademik yang unggul: Siswa mencapai prestasi tinggi dalam berbagai kompetisi akademik dan kegiatan non-akademik, baik di tingkat lokal, nasional, maupun internasional.",
        "Keunikan yang membedakan dari madrasah lain: Madrasah memiliki program atau karakteristik yang inovatif dan berbeda dari institusi pendidikan lainnya, menjadikannya sebagai pelopor dalam berbagai inisiatif pendidikan."
    ];

    $misi = [
        "Menanamkan Akhlak Mulia: Mengembangkan program pendidikan yang menitikberatkan pada pembentukan karakter dan akhlak mulia bagi seluruh warga madrasah.",
        "Mewujudkan Lingkungan yang Bersih: Mengimplementasikan kebijakan dan program yang memastikan kebersihan fisik dan rohani madrasah, serta menciptakan lingkungan yang nyaman dan sehat bagi seluruh siswa dan guru.",
        "Menghijaukan dan Membudayakan Lingkungan: Menggalakkan program penghijauan dan penanaman bunga, serta mengintegrasikan pendidikan lingkungan dalam kurikulum untuk meningkatkan kesadaran dan kepedulian terhadap lingkungan",
        "Memanfaatkan Teknologi Modern: Mengintegrasikan teknologi informasi terkini dalam proses pembelajaran dan manajemen madrasah untuk meningkatkan efisiensi dan kualitas pendidikan.",
        "Meraih Keunggulan Akademik: Menyediakan program pendampingan dan bimbingan intensif untuk mengoptimalkan potensi siswa dalam berbagai kompetisi akademik, serta memastikan lulusan diterima di sekolah-sekolah unggulan.",
        "Mengembangkan Keterampilan Hidup: Menyediakan berbagai kegiatan ekstrakurikuler dan pelatihan keterampilan hidup yang relevan dengan kebutuhan zaman agar siswa siap menghadapi tantangan di masa depan.",
        "Menciptakan Keunikan Madrasah: Mengembangkan program-program inovatif yang membedakan madrasah dari institusi pendidikan lainnya, serta mengapresiasi dan mendukung kreativitas dan inisiatif siswa dan guru."
    ];

    return view("beranda", ["visi" => $visi, "misi" => $misi]);
});

