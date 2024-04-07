-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 09:43 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '@dmin');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `jdl_buku` varchar(50) DEFAULT NULL,
  `idbuku` varchar(22) NOT NULL,
  `penulis` varchar(20) DEFAULT NULL,
  `penerbit` varchar(30) DEFAULT NULL,
  `ISBN` varchar(25) DEFAULT NULL,
  `bahasa` varchar(20) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  `edisi` varchar(5) DEFAULT NULL,
  `tahun` varchar(5) NOT NULL,
  `sampul` varchar(1000) DEFAULT NULL,
  `stock` int(3) DEFAULT NULL,
  `sinopsis` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`jdl_buku`, `idbuku`, `penulis`, `penerbit`, `ISBN`, `bahasa`, `deskripsi`, `edisi`, `tahun`, `sampul`, `stock`, `sinopsis`) VALUES
('Laskar Pelangi', '10001', 'Andrea Hirata', 'Yogyakarta: Bentang Pustaka, 2', '9793062797', 'Indonesia', 'xiv, 529 Halaman', '1', '2005', 'Laskarpelangi.jpg', 9, 'Secara garis besar novel laskar pelangi menceritakan kisah anak-anak di SD Muhammadiyah Belitung di Provinsi Bangka Belitung. Rencana penutupan SD Muhammadiyah di Gantung Belitung timur menjadi awal mula kisah laskar pelangi. Sebagai syarat perizinan kegiatan KBM atau belajar mengajar harus minimal 10 orang siswa angkatan tahun tersebut. Di menit-menit terakhir pendaftaran semua merasa tegang karena pendaftar kurang dari 10. Namun, munculah Harun yang menggenapkan jumlah siswa sehingga SD tersebut tidak jadi di tutup. Banyak sekali rintangan dan hambatan yang mereka hadapi ketika bersekolah. Banyak kisah inspiratif yang di sajikan dalam kisah-kisah setiap tokohnya.'),
('Laskar Pemimpi', '10002', 'Andrea Hirata', 'Yogyakarta: Bentang Pustaka, 2', '9793062924', 'Indonesia', 'x, 292 Halaman', '1', '2011', 'Laskarpemimpi.jpg', 9, 'Novel ini menceritakan kisah masa remaja sang penulis sendiri, yaitu Andrea Hirata. Sang Pemimpi bercerita tentang tiga orang remaja yang tengah duduk di bangku SMA, yaitu Ikal (Andrea Hirata), Arai, dan Jimbron. Ketiga remaja ini bersekolah di SMA pertama di wilayah Manggar, Kabupaten Belitung Timur.  Bersama saudaranya, yakni Arai, serta sahabatnya, yaitu Jimbron, mampukah Ikal menemukan jati dirinya sendiri yang telah dia cari-cari selama ini?'),
('Negeri 5 Menara', '10003', 'Ahmad Fuadi', 'Gramedia, 2009', '9789792248616', 'Indonesia', '416 Halaman', '1', '2009', 'Negeri5menara.jpg', 0, 'Alif adalah seorang remaja yang hidup di daerah Danau Maninjau dan baru lulus dari Madrasah Tsanawiyah bersama teman sekaligus saingannya Randai. Mereka sama-sama ingin bersaing masuk Institut Teknologi Bandung setelah lulus Sekolah Menengah Atas, tetapi orang tua Alif ingin dia meneruskan pendidikan ke sekolah Islam lagi. Alif awalnya tidak mau sampai dia mendapat pesan dari kerabatnya yang lulusan Pondok Madani, sebuah sekolah Islam di Ponorogo yang lulusannya fasih berbahasa asing dan punya karier di luar negeri. Alif pun tertarik dan menjadi santri di sana. Selama empat tahun belajar di Pondok Madani, Alif mulai menekuni jurnalisme sebagai kegiatan ekstrakurikuler. Pada tahun terakhir, Baso pulang ke Gowa karena permasalahan ekonomi keluarga. Di sisi lain, Alif iri pada Randai yang sudah lulus SMA dalam tiga tahun dan mempertimbangkan untuk mengundurkan diri dari pondok agar bisa segera mengikutinya ke ITB. Namun, ayah Alif datang dan mengubah pikirannya. Alif pun mengikuti ujian akhir pondok bersama Raja, Said, Dulmajid, dan Atang. Mereka berlima lulus dan pulang ke kampung halaman masing-masing.'),
('Critical Eleven', '10004', 'Ika Natassa', 'Gramedia, 2015', '9786020318929', 'Indonesia', '339 Halaman', '5', '2015', 'criticaleleven.jpg', 3, 'Kisah berawal ketika Anya sebagai tokoh utama berada di dalam pesawat terbang dan bertemu dengan cowok bernama Ale. Anya yang memang orang terpelajar dari kalangan menengah ke atas selalu menggunakan bahasa Inggris dalam setiap narasi dan dialognya.  Anya dan Ale sepanjang perjalanan selalu membahas kondisi Jakarta yang penuh polusi, rawan kejahatan, dan segala hal tentang fasilitas di Jakarta. Setelah itu, Anya dan Ale saling bertukar nomor telepon.  Sampai Anya yang kebetulan sudah pulang ke Jakarta, memutuskan untuk bertemu dengan Ale yang kebetulan di Jakarta. Mereka menghabiskan akhir pekan dengan jajan di warung pinggir jalan, salah satunya kedai ketoprak. Disini si penjual menggoda Ale kalau Anya sangat cocok menjadi pasangan Ale.  Candaan itu membuat perasaan Anya semakin bertambah kepada Ale. Setelah mereka semakin dekat, baru mengetahui pekerjaan masing-masing. Ale seorang penambang minyak, sedangkan Anya seorang konsultan manajer.  Mereka juga mengungkapkan perasaannya dan memutuskan untuk menikah. Selama pernikahannya baik-baik saja dan bahagia. Tiba-tiba pasangan suami istri tersebut mengalami sebuah musibah, karena kandungan Anya keguguran. Ale yang terpukul dengan keadaan itu, membuatnya frustasi dan bersikap dingin kepada Anya. Anya berusaha tegar dan merenungkan pertemuan singkatnya. Seharusnya Anya tidak gegabah mengambil keputusan untuk menikah dengan Ale.'),
('Belajar Pemrograman Android Untuk Semua Kebutuhan', '10005', 'Ir Yuniar Supardi', 'PT Elex Media Komputindo, 2019', '9786230000546', 'Indonesia', '252 Halaman', '1', '2019', 'BelajarPemrogramanAndroidUntukSemuaKebutuhan.jpg', 3, '-'),
('Ranah 3 Warna', '10006', 'Ahmad Fuadi', 'Gramedia, 2011', '9789792263251', 'Indonesia', '477 Halaman', '1', '2009', 'Ranah3Warna.jpg', 3, 'Sinopsis novel Ranah 3 Warna ini menceritakan sosok Alif Fikri yang baru saja tamat dari pondok pesantren Madani dan bermimpi ingin mempelajari ilmu teknologi di Bandung.  Impiannya ingin seperti Habibie, lalu merantau sampai ke Negeri Paman Sam. Dengan semangat yang menggelegak dia pulang ke Maninjau dan tak sabar ingin Kuliah.  Namun kawan karibnya Randai meragukan karena Alif tak memiliki ijazah SMA agar lulus UMPTN. Dan berkat kerja kerasnya ia berhasil ikut ujian dan dinyatakan lulus. Alif juga berusaha untuk mendaftar pertukaran pelajar ke Amerika. Hanya bermodal niat dan tekad yang kuat, akhirnya Alif pun lolos seleksi dengan berbagai pertimbangan dari panitia penyelenggara.  Kanada, itulah tujuan Alif setelah lolos seleksi pertukaran pelajar. Raisa, anak yang Alif sukai sejak masuk Unpad juga lolos seleksi pertukaran pelajar. Tidak lama kemudian ia pun berangkat ke Kanada.  Di Montreal, Kanada, Alif berasa seperti mimpi. Ia tidak percaya bisa menginjakkan kakinya di sana. seperti mimpinya dulu.'),
('Dilan 1990', '10007', 'Pidi Baiq', 'Pastel Book, 2014', '9786027870413', 'Indonesia', '333 Halaman', '1', '2013', 'dilan1990.jpg', 0, 'Dilan adalah siswa SMA di Bandung, sedangkan Milea merupakan siswa baru, pindahan dari Jakarta. Dilan jatuh cinta dengan Milea pada pandangan pertama. Dilan pun mendekati Milea dengan unik. Cara Dilan PDKT sangat membekas di hati Milea. Namun, Milea tidak bisa membalas perasaan Dilan. Itu karena Milea punya pacar di Jakarta, namanya Beni. Suatu hari Milea menemani temannya yang ikut lomba cerdas cermat ke Jakarta. Milea pun janjian dengan Beni untuk bertemu. Lama menunggu, ternyata Beni tidak kunjung datang. Akhirnya, Milea pun makan dengan Nandan dan Wati. Namun, tiba-tiba Beni datang dan memarahi Milea karena Milea makan dengan laki-laki lain. Milea merasa tidak suka dengan sikap Beni. Dia pun memutuskan mengakhiri hubungannya dengan Beni.'),
('Dilan 1991', '10008', 'Pidi Baiq', 'Pastel Book, 2015', '9876027870994', 'Indonesia', '345 Halaman', '1', '2014', 'DilanDiaAdalahDilankuTahun1991.jpg', 2, 'Novel kedua ini merupakan lanjutan dari novel pertama. Jika pada novel pertama bercerita mengenai masa Milea bertemu Dilan dan proses Milea bisa menyukai dan dekat dengan Dilan. Maka pada novel kedua bercerita mengenai masa mereka berdua ketika sudah jadi pacar yang dinyatakan dengan lisan dan tulisan bermaterai. Milea pun kembali bercerita tentang kisah percintaannya dengan Dilan. Seperti orang yang baru jadian pada umumnya, Milea mengalami masa yang indah di SMA sesudah resmi jadi pacar Dilan. Ketika guyuran hujan menerpa, Dilan menggunakan motor CB dengan Milea di belakangnya. Milea dengan erat memeluk Dilan. Mereka berdua jalan-jalan menyusuri Jl. Buah Batu sembari ketawa riang, itu semua berkat Dilan yang selalu membuat hari-hari Milea bahagia.'),
('Milea Suara Dari Dilan', '10009', 'Pidi Baiq', 'Pastel Book, 2016', '9786020851563', 'Indonesia', '360 Halaman', '1', '2016', 'MileaSuaradariDilan.jpg', 2, 'Novel Milea Suara dari Dilan merupakan novel karya Pidi Baiq yang menceritakan tentang kehidupan cinta segitiga antara Milea, Dilan, dan Anhar. Novel ini menceritakan tentang bagaimana Dilan mencoba untuk mencintai Milea, tetapi Milea tidak berpikir bahwa hubungan mereka akan berakhir dengan bahagia. Novel ini bercerita tentang bagaimana kedua orang tersebut berjuang dalam hubungan mereka dan bagaimana mereka berakhir. Dilan dan Anhar mulai bersaing untuk mendapatkan hati Milea. Ketika Milea bersama Anhar, Dilan menyadari bahwa ia masih mencintai Milea. Dia pun berusaha untuk mendapatkan kembali cintanya. Dia berusaha untuk mengubah dirinya menjadi orang yang lebih baik. Dia berusaha untuk menunjukkan bahwa ia bisa menjadi orang yang lebih baik untuk Milea. Akhirnya, setelah berjuang keras, Dilan berhasil mendapatkan kembali cinta Milea.'),
('Ancika ', '10010', 'Pidi Baiq', 'Pastel Book, 2021', '9786026716903', 'Indonesia', '340 Halaman', '1', '2021', 'Ancika.jpg', 0, 'Ancika 1995 bercerita tentang kisah cinta Dilan setelah putus dari Milea saat berada di bangku SMA. Cerita ini merupakan lanjutan dari trilogi Dilan, yaitu Dilan 1990, Dilan 1991, dan Milea: Suara dari Dilan.  Nantinya film Ancika akan memperlihatkan kisah yang terjadi 24 tahun lalu. Tahun ketika Ancika masih remaja dan baru berusia 17 tahun. Saat itu, dia sudah mulai menjalin hubungan dengan Dilan dan menyandang status sebagai kekasih baru mantan anggota geng motor tersebut. Dilan yang merupakan mahasiswa cerdas dan kreatif mulai sering datang ke rumah Ancika untuk membantunya mengerjakan tugas sekolah di ruang tamu. Bahkan, karena kedekatan Dilan dan keluarga Ancika, dia sudah dianggap sebagai anak oleh orangtua Ancika.'),
('Sebuah Seni Untuk Bersikap Bodo Amat', '10011', 'Manson, Mark', 'Gramedia Widiasarana Indonesia', '9786024526986', 'Indonesia', 'vii, 247 halaman ; 21 cm', '3', '2018', '662373827_sebuahseniuntukbersikapbodoamat.jpg', 6, 'Ale yang terpukul dengan keadaan itu, membuatnya frustasi dan bersikap dingin kepada Anya. Anya berusaha tegar dan merenungkan pertemuan singkatnya. Seharusnya Anya tidak gegabah mengambil keputusan untuk menikah dengan Ale. Ale yang sangat menyesali ucapannya sudah tidak bisa berbuat apa-apa lagi. Suatu malam, seorang sahabat bernama Harris memberikan kejutan di hari ulang tahunnya Ale. Pada pertemuan itu, ada Anya. Mereka saling mengungkapkan isi hati untuk rujuk kembali. Akhirnya Ale berjuang kembali untuk mendapatkan Anya.'),
('Hamka', '10012', 'Haidar Musyafa', 'Tangerang Selatan : Imania, 20', '9786027926288', 'Indonesia', '464 halaman', '2', '2017', '360845444_hamkabiografi.jpg', 10, 'Meski Bung Karno pernah memenjarakannya, Hamka tetap memaafkan. Di saat Pramoedya Ananta Toer menuduhnya sebagai seorang plagiat, Hamka tetap berlapang dada. Menganggap tuduhan Pram hanya kesalahpahaman semata. Hamka tetap mendudukkan Pramoedya sebagai sastrawan tanah air yang memiliki prestasi gemilang. Bahkan, saat Muhammad Yamin mendiamkannya bertahun-tahun lamanya hanya karena berseberangan pemikiran soal dasar negara, Hamka sama sekali tidak menyimpan dendam. Ulama kelahiran Maninjau itu justru menemani Muhammad Yamin sampai ke tempat peristirahatannya yang terakhir.'),
('Layangan Putus', '10013', 'Mommy ASF', 'Jakarta : RDM Publisher, 2021', '9786020729091', 'Indonesia', '244 Halaman', '4', '2020', '875124448_layanganputus.jpg', 1, ' Seorang gadis remaja lugu dan polos yang berasal dari daerah, tumbuh, berkembang, dan menemukan cinta di kota besar yang sangat berbeda dengan iklim daerah asalnya. Gadis remaja ini hanya memiliki mimpi sederhana, yaitu menyambung pendidikan dan menyelesaikannya tepat waktu Namun, semua itu berubah ketika ia bertemu dengan seorang pria tangguh. Lelaki yang mandiri dan berpendirian keras itu mengenalkannya dengan dunia baru yang belum pernah ia temui di daerah asalnya. Laki-laki bernama Aris itu membuat Kinan jatuh cinta karena sosoknya yang menyenangkan, gigih, dan mampu mengubah cara pandangnya kepada dunia. Hingga akhirnya Mereka berdua menyamakan visi dan berjanji dalam ikatan pernikahan. mereka memulai semua kehidupan dari awal, Kinan dengan setia mendampingi Aris membangun mimpi mereka. Perubahan pola pikir Aris kembali mengubah cara pandang Kinan terhadap prioritas kehidupan. Kinan tetap setia di sisi Aris dan melupakan mimpinya menjadi seorang wanita karier serta memilih merawat keluarga di rumah sesuai permintaan Aris, sambil kembali mengenal Tuhan.'),
('Bumi', '10014', 'Tere Liye', 'Gramedia Pustaka ', '9786020301129', 'Indonesia', '440 Halaman', '1', '2014', '381900607_bumi.jpg', 7, 'Novel Bumi mengisahkan seorang remaja perempuan bernama Raib. Dikisahkan bahwa Raib bisa bertemu sosok kurus tinggi bernama Tamus. Makhluk kurus dan tinggi itu muncul di dalam cermin kamar Raib. Berbagai keanehan dialami Raib hingga akhirnya dia menyadari bahwa dirinya memiliki kemampuan istimewa. Kejadian aneh diawali dengan kasus robohnya tower listrik di belakang sekolahnya hingga pertemuan Raib dengan makhluk tak terduga. Pertemuan tersebut membawanya ke klan Bulan. Klan Bulan adalah dunia paralel yang hidup berdampingan dengan klan Bumi. Novel pertama dari serial Bumi ini menceritakan awal pertemuan Raib dengan Seli dan Ali. Pada akhirnya mereka akan berjelajah dan berpetualang bersama di dunia paralel.'),
('Hafalan Shalat Delisa', '10015', 'Tere Liye', 'Jakarta : Republika, 2007', '9793210605', 'Indonesia', '248 Halaman', '1', '2005', '26165488_hafalanshalatdelisa.jpeg', 2, 'Kisah bermula dari sebuah keluarga di Lhoknga, Aceh, yang selalu mengamalkan ajaran Islam dalam kesehariannya. Mereka adalah keluarga Umi Salamah dan Abi Usman, yang memiliki empat anak yakni Alisa Fatimah, si kembar Alisa Zahra & Alisa Aisyah, dan si bungsu Delisa. Namun, keempat anak itu terpaksa hanya tinggal bersama ibunya, karena abinya bekerja sebagai mekanik kapak. Pekerjaan itu membuatnya hanya bisa pulang 3 bulan sekali, bahkan terkadang lebih lama. Suatu hari, Delisa mendapat tugas dari sekolahnya untuk menghafal bacaan salat. Si bungsu berusaha memenuhi tugas itu dengan baik. Apalagi, umi menjanjikannya hadiah berupa kalung emas jika Delisa berhasil menghafal bacaan tersebut. Waktu ujian tiba, tepat pada 26 Desember 2004. Namun, terjadi peristiwa memilukan saat tiba pada giliran Delisa.'),
('Edensor', '10016', 'Andrea Hirata', 'PT Bentang Pustaka, Yogyakarta', '9789791227025', 'Indonesia', 'VIII, 290 Halaman', '1', '2007', '616481134_edensor.jpg', 7, 'Pada bagian awal novel ini menceritakan kondisi Weh yang sangat tragis terkena penyakit yang tidak diketahui. Berbagai macam pengobatan tidak mempan. Akhirnya pemuda yang sudah tua itu memutuskan menjadi nelayan dan tinggal di perahu. Karena rasa ingin tahu yang tinggi, Ikal memutuskan menaiki perahu Weh dan menjelajahi lautan. Selama itu, tokoh utama diajari menangkap ikan dengan cara yang mudah. Di atas perahu, Ikal belajar tentang kedisiplinan dan keberanian dari Weh. Mentalnya benar-benar diuji ketika mengayuh sampan perahu menggunakan tenaga Ikal seorang diri.  Kegagalan itu membuat Ikal diusir oleh Weh. Namun Ikal masih saja mengunjungi lelaki tua yang sering membuat kasihan. Karena gagal menaklukan perahu, Ikal tidak menyerah untuk belajar. Akhirnya Weh menerima Ikal kembali dan melanjutkan pelayaran untuk mencari ikan hiu di sepanjang Laut Jawa dari utara dan Laut Cina Selatan. Di atas perahu, lelaki tua itu mengajarkan Ikal tentang membaca arah kompas menggunakan rasi bintang. Setelah berhasil, Ikal akan bercerita tentang Mak Birah yang mengenalkan pada jati dirinya.  Sahabat sekaligus sepupunya yang bernama Arai juga mengajarkan Ikal tentang arti kehidupan yang sebenarnya. Karena Arai sebatang kara maka anak itu tinggal bersama Ikal dan ayahnya. Arai dan Ikal masih berusaha untuk meraih cita-citanya.  Sampai akhirnya setamat SMA, mereka merantau ke Bogor. Ikal bekerja di kantor pos untuk mengantarkan surat dan barang-barang. Karena pekerjaan yang monoton, akhirnya Ikal keluar dari sana. Sebelumnya Ikal dan Arai mendapatkan beasiswa ketika masih di Belitong.  Berkat usaha dan kerja keras, Ikal dan Arai resmi menjadi penerima beasiswa ke luar negeri.'),
('Bumi Manusia', '10017', 'Pramoedya Ananta Toe', 'Lentera Dipantara', '9799731232', 'Indonesia', '535 Halaman', '1', '1980', '1229241469_bumimanusia.jpg', 10, 'Bumi manusia mengikuti kehidupan Minke siswa sekolah menengah atas dengan pengantar bahasa Belanda. Minke—yang merupakan satu-satunya orang Indonesia di antara siswa Belanda—mendapat kesempatan dari pemerintah kolonial untuk bersekolah di sana karena ia keturunan priayi. Pada konteks masyarakat kala itu, golongan priayi tinggi diberi hak istimewa untuk menduduki karier yang terhormat, selama ia patuh pada tuntutan sistem yang ada. Sistem yang dimaksud adalah berperilaku dengan mengikuti kebudayaan priayi dan tunduk pada kemauan penguasa kolonial, yang memanfaatkan golongan priayi untuk mengukuhkan kekuasaan. Dalam novel ini, Pram mengisahkan pula jalinan cinta Minke dengan Annelies, putri Herman Mellema dengan Nyai Ontosuroh, dan akhirnya menikahinya. Hubungan ini pula yang membawanya pada petualangan yang “menggugah”, dan menjadi bumbu pelengkap dalam kisah Minke. Minke tergambar sebagai “sosok pribumi” penuh privilese, cerdas, dan liyan daripada golongannya. Tulisan-tulisan Minke dalam majalah berbahasa Belanda misalnya, membuat Asisten Residen mengundangnya sebagai tamu kehormatan, bahkan kemudian menjadikannya sahabat keluarga.'),
('Ketika Aku Tak Tahu Apa Yang Aku Inginkan', '10018', 'Jeon Seunghwan', 'Gramedia Pustaka Utama 2022', '9786020656298', 'Indonesia', '280 Halaman', '2', '2022', '1425648529_KetikaAkuTakTahuApaYangAkuInginkan.png', 9, 'Ketika Aku Tak Tahu Apa yang Aku Inginkan merupakan buku pengembangan diri yang ditulis oleh penulis asal Korea Selatan, Jeon Seunghwan. Buku pengembangan diri ini telah diterjemahkan ke dalam Bahasa Indonesia oleh Gramedia Pustaka Utama pada bulan Januari 2022. Buku dengan total 280 halaman ini akan memberikan pengertian, nasihat, dan juga solusi akan berbagai permasalahan umum yang sering ditemukan masyarakat. Buku ini penuh dengan tulisan reflektif tentang kehidupan yang secara garis besar dibagi menjadi 4 bab, yakni mengenal perasaan sendiri, mengenal waktu kita, mengenal hubungan-hubungan diri kita dan mengenal hubungan dengan dunia. Dalam buku ini, Jeon Seunghwan banyak membagikan pengalamannya, pemikirannya, juga kutipan-kutipan favoritnya dari penulis lain, para filsuf, dan penyair. Buku ini adalah kumpulan tulisan reflektif yang dapat memberikan rasa hangat yang seolah memeluk pembaca. Tulisan dalam buku ini seperti memberikan afirmasi atas perasaan kita, memvalidasinya, dan memberi pengertian bahwa kita tidak sendirian.'),
('Daun Yang Jatuh Tak Pernah Membenci Angin', '10019', 'Tere Liye', 'Jakarta : PT Gramedia Pustaka ', '9786020331607', 'Indonesia', '256 Halaman', '3', '2014', '174999222_DaunJatuhTakMembenciAngin.jpg', 12, 'Dia bagai malaikat bagi keluarga kami. Merengkuh aku, adikku, dan Ibu dari kehidupan jalanan yang miskin dan nestapa. Memberikan makan, tempat berteduh, sekolah, dan janji masa depan yang lebih baik. Dia sungguh bagai malaikat bagi keluarga kami. Memberikan kasih sayang, perhatian, dan teladan tanpa mengharap budi sekali pun. Dan lihatlah, aku membalas itu semua dengan membiarkan mekar perasaan ini. Ibu benar, tak layak aku mencintai malaikat keluarga kami. Tak pantas. Maafkan aku, Ibu. Perasaan kagum, terpesona, atau entahlah itu muncul tak tertahankan bahkan sejak rambutku masih dikepang dua. Sekarang, ketika aku tahu dia boleh jadi tidak pernah menganggapku lebih dari seorang adik yang tidak tahu diri, biarlah... Biarlah aku luruh ke bumi seperti sehelai daun... daun yang tidak pernah membenci angin meski harus terenggutkan dari tangkai pohonnya.'),
('Sejarah Nusantara Yang Disembunyikan', '10020', 'Fatimah Purwoko', 'Anak Hebat Indonesia, 2019', '9786234000238', 'Indonesia', '298 Halaman', '1', '2021', '1118149052_SejarahNusantarayangDisembunyikan.jpg', 6, 'Apakah pemberontakan yang dicanangkan Pangeran Diponegoro hingga memicu perang Jawa merupakan dalih untuk memahkotai diri lepas dari takhta Mataram ?. Apakah benar letusan tambora pernah menyapu peradaban bercorak kesultanan Islam hingga tak berbekas ?. Apakah benar akar pemikiran Bung Karno adalah ajaran teosofi Tarekat Mason yang dia peroleh dari ayahnya?. Sejarah Nusantara yang disembunyikan berisi fragmen sejarah yang telah berhasil ditemukan, entah ini karena disembunyikan atau tersembunyi (belum ada penelitian yang mengungkap). isisnya terbagi menjadi empat periode, yaitu amsa Hindu-Budha, masa Islam, masa Kolonial, dan masa Pasca Kemerdekaan.');

-- --------------------------------------------------------

--
-- Table structure for table `form_pinjam`
--

CREATE TABLE `form_pinjam` (
  `nama` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `id_form` varchar(10) NOT NULL,
  `jd_buku` varchar(25) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form_pinjam`
--

INSERT INTO `form_pinjam` (`nama`, `id`, `telp`, `id_form`, `jd_buku`, `tgl_pinjam`, `tgl_kembali`) VALUES
('Insyirah Hulul Aini', 0, '+62821309880', '649bc1f93f', 'Laskar Pemimpi', '2023-06-29', '2023-06-29'),
('Rosaura Aulia', 0, '+62821309880', '64a4e328e0', 'Laskar Pelangi', '2023-07-05', '2023-07-08'),
('Ajeng', 0, '+62821309880', '64a95d461c', 'Dilan 1991', '2023-07-08', '0000-00-00'),
('Rosaura Aulia', 0, '083123538236', '64af57d0e5', 'ancika', '2023-07-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `nama` varchar(30) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`nama`, `username`, `email`, `password`) VALUES
('Haniyah', 'haniyah', 'haniyah@gmail.com', 'haniyah'),
('Lita Rahmania', 'lita', 'litarahmania@gmail.com', 'lita123'),
('Mutyarsih Aghata', 'mutghata', 'mutyarsih@gmail.com', '12345'),
('Rizki Agustina', 'rizki', 'rizkiagustina@gmail.com', 'rizkiagustina'),
('Rosaura Aulia', 'rosa', 'rosauraaulia44@gmail.com', 'rosaaja'),
('Insyirah Hulul Aini', 'syirala', 'syirala@gmail.com', 'abcd123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`idbuku`);

--
-- Indexes for table `form_pinjam`
--
ALTER TABLE `form_pinjam`
  ADD PRIMARY KEY (`id_form`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
