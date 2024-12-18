-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 18 Des 2024 pada 02.13
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `craousel`
--

CREATE TABLE `craousel` (
  `id_craousel` int NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `craousel`
--

INSERT INTO `craousel` (`id_craousel`, `judul`, `foto`) VALUES
(22, 'satu', '20241218011704.jpg'),
(24, 'dua', '20241218011807.jpg'),
(25, 'tiga', '20241218011816.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(11, 'Kontemporer'),
(12, 'Prosa '),
(13, 'Eksperimen'),
(14, 'Naratif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` datetime DEFAULT CURRENT_TIMESTAMP,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text COLLATE utf8mb4_general_ci NOT NULL,
  `instagram` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `no_wa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `twitter`, `email`, `alamat`, `no_wa`) VALUES
(1, 'Pesona Nusantara', 'Ini adalah website tempat berbagi ide, kreativitas, dan informasi terkini. Kami hadir untuk                         menghubungkan dan menginspirasi komunitas.', 'https://www.instagram.com/dearlyhi_/', 'https://www.facebook.com/karaomah.ismeathun', 'th.bumandhala@gmail.com', 'karanganyar', 'https://wa.me/+6285934556210');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `foto` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `id_kategori` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `views` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`, `views`) VALUES
(20, 'Cermin Pecah', 'Aku berdiri di depan cermin,\r\nMenatap wajah yang tak utuh.\r\nRetakannya seperti peta,\r\nMembawa ingatan ke sudut-sudut\r\nyang tak ingin kuingat lagi.\r\n\r\nAda aku yang tersenyum di kiri,\r\nAda aku yang menangis di kanan.\r\nDi tengah, hanya lubang kosong.\r\nBayangan itu berbicara tanpa suara,\r\n\"Apakah ini benar dirimu?\"\r\n\r\nAku ingin menyentuhnya,\r\nTapi serpihannya melukai jemariku.\r\nDarah mengalir, seperti tinta\r\nYang menulis cerita lama di kulitku.\r\nDan aku pun pergi,\r\nMeninggalkan cermin dan diriku sendiri.', '20241218013040.jpg', 'Cermin-Pecah', '11', '2024-12-18', 'mimo', 0),
(21, 'Kota yang Lelah', 'Lampu merah berganti hijau,\r\nTapi langkah tetap terhenti.\r\nOrang-orang bergerak seperti roda,\r\nMencari sesuatu yang tak pernah mereka temukan.\r\n\r\nGedung-gedung menjulang,\r\nTapi atapnya tak menyentuh langit.\r\nAngin di kota ini berat,\r\nMembawa debu mimpi yang terlupakan.\r\n\r\nKota ini berbicara dalam sunyi:\r\n\"Lihat aku, hancur oleh waktu,\r\nTapi tak pernah diberi istirahat.\"\r\nNamun malam datang\r\nDan neon-neon tetap menyala,\r\nSeperti mimpi buruk yang tak kunjung selesai.\r\n\r\n', '20241218013225.jpg', 'Kota-yang-Lelah', '11', '2024-12-18', 'mimo', 0),
(22, 'Mesin Waktu', 'Waktu adalah ilusi,\r\nTapi kenangan adalah kuncinya.\r\nAku dan kamu menyimpan potongan-potongan masa lalu,\r\nDalam saku kecil yang mulai berlubang.\r\n\r\nIngatkah kau pada sore itu?\r\nSaat hujan menari di atas genting,\r\nDan kita tertawa meski basah.\r\nHujan itu kini jadi cerita,\r\nTapi tawanya sudah hilang.\r\n\r\nAku ingin kembali ke sana,\r\nTapi mesin waktu hanya ada di mimpi.\r\nKini aku berjalan maju,\r\nMembawa masa lalu di bahuku,\r\nDan harapan di ujung jariku.', '20241218013327.jpg', 'Mesin-Waktu', '11', '2024-12-18', 'mimo', 0),
(23, 'Hujan ', 'Hujan jatuh,\r\nTapi tak basah.\r\n\r\n. . . \r\nHujan kata-kata\r\nMengalir di parit pikiran,\r\nMembanjiri jalan setapak hati,\r\nTetesnya seperti bisikan rahasia,\r\nYang hanya aku yang mendengar.\r\n\r\nIa berbicara dalam bahasa yang tak kumengerti,\r\nNamun maknanya terasa di ujung jemari,\r\nMenyentuh tanpa menyakiti,\r\nMenggigilkan tanpa membekukan.\r\n\r\nDan tanah kenangan perlahan menyerapnya,\r\nMembiarkannya menjadi akar.\r\nAku bertanya pada diriku sendiri,\r\nApakah hujan ini akan menumbuhkan pohon cerita,\r\nAtau hanya ilalang sepi?\r\n\r\nAku berjalan di bawahnya,\r\nMencoba membaca tiap tetes yang jatuh.\r\nPuisi yang tak pernah selesai,\r\nAdalah kisah yang terus bergerak,\r\nSeperti sungai tanpa muara.\r\n\r\nHujan terus turun,\r\nTapi aku tahu,\r\nBasahnya bukan untuk kulitku,\r\nMelainkan untuk hatiku.\r\n', '20241218014009.jpg', 'Hujan-', '11', '2024-12-18', 'mimo', 0),
(24, ' Matahari Palsu', 'Langit-langit kamar adalah langitku,\r\nDan lampu neon adalah matahariku.\r\nIa tak pernah redup,\r\nTapi juga tak pernah hangat.\r\n\r\nAku lupa bagaimana rasanya gelap.\r\nMalamku bukan malam,\r\nTapi tiruan yang pucat.\r\n\r\nApakah aku hidup di bawah matahari,\r\nAtau hanya bayangannya?\r\nLampu neon menyala lagi,\r\nDan aku terus berjalan,\r\nMengejar terang yang palsu.\r\n\r\n', '20241218014132.jpg', '-Matahari-Palsu', '11', '2024-12-18', 'mimo', 0),
(25, 'Surat yang Tak Pernah Sampai', 'Kukirimkan surat dengan tinta hujan,\r\nPada kertas yang terbuat dari kabut.\r\nAngin membawanya pergi,\r\nTapi ia hanya berputar-putar\r\nSeperti tak tahu arah.\r\n\r\nAku menunggu balasan yang tak pernah tiba,\r\nMalam demi malam,\r\nAku menulis lagi,\r\nDengan kata-kata yang semakin pudar.\r\n\r\nKini surat-surat itu ada di hatiku,\r\nMenumpuk seperti batu.\r\nApakah kau pernah membaca,\r\nAtau angin sudah menghapus semuanya?', '20241218014255.jpg', 'Surat-yang-Tak-Pernah-Sampai', '11', '2024-12-18', 'mimo', 0),
(26, 'Di Balik Pintu Hujan', 'Langit mendung memanggilku keluar, memaksaku mengingat sesuatu yang seharusnya kulupakan. Hujan mulai jatuh, tetesnya seperti detak waktu yang terhapus di udara. Aku berdiri di balik pintu, memandang ke luar. Dinginnya udara malam merambat melalui celah pintu kayu yang mulai rapuh, seperti tubuhku yang mulai menyerah pada ingatan.\r\n\r\n“Hujan,” bisikku, “mengapa selalu kau bawa sesuatu yang berat bersamamu?”\r\n\r\nIa tak menjawab, hanya terus mengetuk-ngetuk atap rumah dengan lembut, seperti ingin masuk tanpa memaksa. Aku ingin melangkah ke dalam pelukannya, membiarkan tubuhku basah oleh rasa yang tertahan, membiarkan suara hujan menggantikan semua suara yang hilang dari hatiku.\r\n\r\nTapi kakiku enggan bergerak. Bukan karena takut pada dinginnya, tapi karena tahu, hujan membawa kenangan. Ia adalah pesan yang tak pernah selesai, surat yang dikirim dari masa lalu. Di balik pintu ini, aku tahu, aku aman. Tapi aku juga tahu, di balik pintu ini, aku terpenjara.\r\n\r\n', '20241218014610.jpg', 'Di-Balik-Pintu-Hujan', '12', '2024-12-18', 'mimo', 0),
(27, 'Surat di Bawah Pohon', 'Pohon tua itu berdiri di tengah ladang, kulitnya retak, daunnya jarang. Tapi ia kokoh, seperti menyimpan sesuatu yang tak ingin dilepaskan. Aku menemukannya di sana—selembar surat, tergeletak di akar pohon yang mencengkeram tanah dengan erat.\r\n\r\nSurat itu lusuh, tintanya hampir pudar, tapi masih bisa kubaca. “Untuk yang pernah menunggu,” tertulis di bagian atas. Isinya sederhana, namun menusuk.\r\n\r\n“Aku menunggumu di sini, tapi aku tak tahu kapan kau akan datang. Angin membawa suaramu ke tempatku, tapi tak pernah membawaku kepadamu. Jika kau membaca ini, berarti aku sudah pergi, atau mungkin aku tak pernah tiba.”\r\n\r\nAku terdiam, surat itu terasa berbicara langsung padaku. Tapi pohon tua itu hanya berdiri, diam seperti saksi bisu yang menyimpan terlalu banyak rahasia. Angin berhembus, membawa daun kering menjauh, seperti membawa jawaban yang tak pernah ingin kutahu.', '20241218014858.jpg', 'Surat-di-Bawah-Pohon', '12', '2024-12-18', 'mimo', 0),
(28, ' Ombak dan Pasir', 'Aku duduk di tepi pantai, memandangi ombak yang terus datang, berulang, tak pernah lelah. Pasir di bawah kakiku basah, tapi ia tetap diam, menerima apapun yang diberikan.\r\n\r\n“Ombak,” panggilku, “kenapa kau terus datang, meski pasir selalu menghilang saat kau kembali?”\r\n\r\nOmbak mendekat, menyentuh kakiku yang sudah lelah berdiri. “Aku tak pernah datang untuk memiliki,” jawabnya, “hanya untuk mengingatkan bahwa semua yang kaucari adalah sementara.”\r\n\r\nAku terdiam. Kata-kata ombak itu begitu dalam, seperti membawa sebuah kebenaran yang selama ini kuabaikan. Pasir tetap diam, seperti mengerti nasibnya.\r\n\r\nOmbak mundur perlahan, tapi aku tahu ia akan kembali. Begitu pula aku, yang akan terus menunggu, meski tahu semuanya akan berlalu.', '20241218015617.jpg', '-Ombak-dan-Pasir', '12', '2024-12-18', 'mimo', 0),
(29, 'Bayang di Jendela', 'Malam ini gelap, langit tanpa bintang. Aku duduk di kamar, menatap jendela. Tapi bukan dunia luar yang kulihat—melainkan bayanganku sendiri.\r\n\r\nWajah itu, yang seharusnya milikku, terlihat asing. Matanya menatapku dengan dingin, seperti ingin mengatakan sesuatu yang tak ingin kudengar.\r\n\r\n“Siapa kau?” tanyaku, tapi ia tak menjawab.\r\n\r\nBayangan itu hanya mengikutiku, bergerak bersama gerakanku. Tapi aku tahu, ia lebih dari sekadar pantulan. Ia adalah bagian dari diriku yang kusembunyikan, yang kutolak untuk kuakui.\r\n\r\nMalam semakin pekat, dan bayangan itu tetap menatapku. Aku akhirnya paham. Aku bukan sedang melihat ke luar, aku sedang melihat ke dalam, ke sudut hatiku yang selama ini gelap.', '20241218015726.jpg', 'Bayang-di-Jendela', '12', '2024-12-18', 'mimo', 0),
(30, ' Kisah di Bawah Pohon Tua', 'Di sebuah desa yang terlupakan,\r\nberdiri pohon tua dengan cabang yang retak,\r\nmenjulang seperti tangan yang memohon,\r\nmencengkeram langit yang kelabu.\r\n\r\nDahulu, ada seorang anak kecil,\r\nyang sering duduk di akarnya,\r\nmembisikkan rahasia kecilnya kepada daun,\r\ndan mendengar angin menjawab dengan lembut.\r\n\r\nWaktu berlalu, anak itu tumbuh besar,\r\ndan pergi meninggalkan pohon tua itu.\r\nNamun, setiap kali angin bertiup,\r\ndaun-daun selalu menyebut namanya,\r\nmenunggu ia kembali.\r\n\r\nHari ini, pohon itu berdiri sendiri,\r\ndi tengah ladang yang kosong.\r\nAkar-akarnya masih kuat,\r\ntapi tak ada lagi bisikan untuk didengar,\r\nhanya sepi yang mengisi sela rantingnya.', '20241218020041.jpg', '-Kisah-di-Bawah-Pohon-Tua', '14', '2024-12-18', 'mimo', 0),
(31, 'Ombak yang Setia', 'Di pantai yang sepi,\r\nada ombak yang tak pernah berhenti,\r\ndatang, pergi, kembali lagi,\r\nmenyapu pasir yang selalu hilang.\r\n\r\n“Kenapa kau terus datang?” tanya pasir,\r\nsuatu malam ketika bulan sedang penuh.\r\n“Aku datang karena ini tugasku,”\r\njawab ombak dengan suara lembut.\r\n\r\nPasir tertawa kecil,\r\n“Lalu bagaimana dengan aku?\r\nApakah aku juga punya tugas?”\r\n\r\nOmbak berhenti sejenak,\r\nlalu berkata,\r\n“Tugasmu adalah menerima.\r\nMeski aku pergi,\r\ndan meski kau berubah,\r\nkau tetap ada di sini,\r\nmenyambutku saat aku kembali.”\r\n\r\nDan sejak malam itu,\r\npasir tak lagi merasa sendiri,\r\nkarena ia tahu,\r\nmeski ombak tak bisa tinggal,\r\nia tak pernah benar-benar pergi.\r\n\r\n', '20241218020357.jpg', 'Ombak-yang-Setia', '14', '2024-12-18', 'mimo', 0),
(32, 'Gadis di Peron Stasiun', 'Di sebuah stasiun kecil,\r\ngadis itu berdiri dengan koper di tangannya.\r\nKereta datang, kereta pergi,\r\ntapi ia tetap berdiri.\r\n\r\nSetiap kali seseorang bertanya,\r\n“Kenapa kau tak naik kereta?”\r\nIa hanya tersenyum,\r\nseolah pertanyaan itu tak perlu jawaban.\r\n\r\nHari berganti minggu,\r\nminggu menjadi bulan.\r\nStasiun mulai sepi,\r\nkereta semakin jarang datang.\r\n\r\nTapi gadis itu tetap berdiri,\r\nmenunggu sesuatu yang tak pernah tiba.\r\nDan ketika akhirnya ia pergi,\r\ntak ada yang tahu namanya,\r\nhanya cerita tentang gadis di peron,\r\nyang menunggu tanpa alasan.', '20241218020608.jpg', 'Gadis-di-Peron-Stasiun', '14', '2024-12-18', 'mimo', 0),
(33, ' Fragmen Pikiran', '(Tanpa urutan, tanpa logika, hanya serpihan)\r\n\r\nKalimat yang hilang\r\nadalah senjata,\r\nyang tak pernah ditembakkan.\r\n\r\nMengapa malam begitu panjang,\r\nketika aku lupa menutup mataku?\r\n\r\nJangan bergerak!\r\nkau akan menghancurkan dunia kecilku.\r\n\r\nPikiran ini adalah teka-teki,\r\nyang hanya bisa diselesaikan\r\noleh keheningan.\r\n\r\n', '20241218020749.jpg', '-Fragmen-Pikiran', '13', '2024-12-18', 'mimo', 0),
(34, 'Percakapan Tanpa Nama', '(Sebentuk dialog yang terpecah, tanpa narator)\r\n\r\n\"Aku mencari jawaban.\"\r\n\"Jawaban untuk apa?\"\r\n\"Untuk pertanyaan yang belum kutemukan.\"\r\n\"Lalu kenapa kau mencarinya?\"\r\n\"Karena diam adalah penjara.\"\r\n\"Tapi kata-kata juga sering menusuk.\"\r\n\"Itulah sebabnya aku berbicara, meski terluka.\"\r\n\r\n(Di kejauhan, bayangan tertawa.)\r\n“Siapa itu?”\r\n“Hanya dirimu yang lain.”', '20241218020842.jpg', 'Percakapan-Tanpa-Nama', '13', '2024-12-18', 'mimo', 0),
(35, 'Monolog Cermin', '(Bayangan berbicara melalui pantulan)\r\n\r\nAku berdiri di depan cermin.\r\nTapi pantulan itu tak berdiri.\r\nIa duduk, memandangku, tersenyum kecil.\r\n\r\n“Kau tahu?” katanya,\r\n“kau hanya bayangan, bukan aku.”\r\n\r\nAku tertawa.\r\n“Bagaimana kau bisa yakin?\r\nAku yang bergerak, bukan kau.”\r\n\r\nPantulan itu diam.\r\nLalu ia berkata,\r\n“Cermin adalah saksi,\r\nbukan pemilik kebenaran.”\r\n\r\nAku ingin memecahkan cermin itu,\r\ntapi akhirnya aku hanya memecahkan diriku sendiri.', '20241218020947.jpg', 'Monolog-Cermin', '13', '2024-12-18', 'mimo', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `nama` varchar(40) COLLATE utf8mb4_general_ci NOT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`) VALUES
(7, 'thohi', '29db6c6f6a640753b7fb3f40681ab37d', 'popo', 'kontributor'),
(8, 'gom', 'a1cc8d8f4f1cf0ff9bb6753a030fb1b7', 'threo', 'kontributor'),
(9, 'mimo', 'f14cb5cf13c016653d8b6ab54def62bb', 'mimo', 'Admin'),
(10, 'zain', '3ed9b95e4b6f2c345836def81e570ef1', 'zain', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `craousel`
--
ALTER TABLE `craousel`
  ADD PRIMARY KEY (`id_craousel`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indeks untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indeks untuk tabel `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `craousel`
--
ALTER TABLE `craousel`
  MODIFY `id_craousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
