<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/profil", function(){
    return view("page.profilemadrasah");
});

Route::get("/sejarah", function(){
    return view("page.sejarahmadrasah");
});

Route::get("/visimisi", function(){
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
    $tujuan = [
        "Menghasilkan Lulusan Berakhlak Mulia: Menyiapkan generasi muda yang berkarakter kuat dan memiliki akhlak yang mulia, serta mampu menjadi teladan di masyarakat.",
        "Mewujudkan Lingkungan Madrasah yang Bersih dan Sehat: Menjaga kebersihan fisik dan spiritual madrasah sehingga tercipta suasana belajar yang nyaman dan kondusif.",
        "Meningkatkan Kepedulian Lingkungan: Membangun kesadaran siswa dan guru terhadap pentingnya menjaga dan merawat lingkungan melalui program penghijauan dan budaya lingkungan yang berkelanjutan.",
        "Memanfaatkan Teknologi untuk Pembelajaran Berkualitas: Mengintegrasikan teknologi informasi dan komunikasi dalam kegiatan belajar mengajar untuk meningkatkan efektivitas dan efisiensi proses pendidikan.",
        "Meraih Prestasi Akademik dan Non-Akademik: Mengoptimalkan potensi siswa untuk mencapai prestasi tinggi dalam berbagai kompetisi akademik dan non-akademik di tingkat provinsi dan nasional.",
        "Membekali Siswa dengan Keterampilan Hidup: Mengembangkan berbagai program pelatihan dan ekstrakurikuler yang memberikan keterampilan praktis dan relevan, sehingga siswa siap menghadapi tantangan dunia kerja dan kehidupan.",
        "Menciptakan Identitas Madrasah yang Unik dan Inovatif: Mengembangkan program-program khusus yang menonjolkan keunikan madrasah, serta mendukung kreativitas dan inovasi di kalangan siswa dan guru.",
        "Menghasilkan Lulusan yang Siap Melanjutkan Pendidikan di Institusi Terkemuka: Membekali siswa dengan pengetahuan dan keterampilan yang dibutuhkan untuk diterima di sekolah-sekolah unggulan dan perguruan tinggi ternama."
    ];
    return view("page.profilevisidanmisi", ["visi" => $visi, "misi" => $misi, "tujuan" => $tujuan]);
});

Route::get("/sambutan", function(){
    return view("page.sambutankepalasekolah");
});

Route::get("/fasilitas", function(){
    return view("page.fasilitas");
});

Route::get("/prestasi", function(){
    return view("page.prestasi");
});

Route::get("/alumni", function(){
    return view("page.alumni");
});

Route::get("/", function(){
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

