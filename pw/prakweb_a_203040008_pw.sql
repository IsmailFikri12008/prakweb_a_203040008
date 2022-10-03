-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Okt 2022 pada 08.37
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prakweb_a_203040008_pw`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(15) NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `sinopsis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul_buku`, `pengarang`, `penerbit`, `gambar`, `sinopsis`) VALUES
(1, 'The Chronicle Of A 35-Year-Old Woman', 'Kircirmainan', 'Bhuana Ilmu Populer', 'kincir.jpg', 'Kikan, 35 tahun, seorang wanita karir yang molek dengan karakter work hard, play hard. Kikan masih melajang karena jera dengan hubungan asmaranya yang sudah-sudah, dan Andre '),
(2, 'Memori Janji Es Krim', 'Nimas Aksan', 'Elex Media Komputindo', 'nimas.jpg', '9 kali dipecat dari pekerjaan. 9 kali diputuskan pacar. Mia tidak ingin ada yang kesepuluh. Maka, dia mencari penyebab dari segala hal buruk yang menimpa hidupnya. Sampai kemudian, Dudi, sahabatnya, menyebut kalau sumber dari kesialannya berawal dari sebu'),
(3, 'In A Blue Moon', 'Ilana Tan', 'Gramedia Pustaka Utama', 'ilana.jpg', 'Sophie Wilson gadis cantik pandai membuat kue yang mempunyai masa lalu buruk dengan Lucas Ford. Tapi sialnya, kakek mereka yang kenal dekat bersepakat untuk menjodohkan mereka. Lucas Ford pertama kali bertemu dengan Sophie Wilson di bulan Desember pada ta'),
(4, 'Stay With Me Tonight', 'Sofi Meloni', 'Elex Media Komputindo', 'sofi.jpg', 'Novel ini menceritakan tentang Ayu yang seorang mahasiswi yang tidak segera menyelesaikan kuliah karena kondisi ekonomi keluarganya yang buruk. Pada akhirnya Ayu pun kerja part time. Ayu tinggal bersama ibu angkatnya yang akhir-akhir ini sakit sakitan. Hi'),
(5, 'Ten Years Challenge', 'Mutiarini', 'Gramedia Pustaka Utama', 'mutiarini.jpg', 'Agastya Renandi merasa hidupnya hancur. Pada usia 27 tahun, ia diputuskan sepihak oleh Diga, pacarnya sejak SMA. Otomatis, ia juga kehilangan pekerjaannya di perusahaan milik Diga. Atya merasa sendirian dan nyaris tak punya uang sepeser pun.\r\n\r\nReuni SMA '),
(6, 'Bukan Cinderella', 'Deti Azmi', 'Grasindo', 'dheti.jpg', 'Ini bukan kisah Cinderella yang kehilangan sepatu kaca, ketika sang pangeran menjemput sang putri dan memberikan sebelah sepatu yang tertinggal di pesta dansa. Namun, ini kisah Amora, yang kehilangan sebelah sepatu Converse\r\n\r\nbarunya karena tertukar deng'),
(7, 'Resign!', 'Almira Bastari', 'Gramedia Pustaka Utama', 'almira.jpg', 'Cungpret #1: Alranita\r\n\r\nPegawai termuda yang tertekan akibat perlakuan semena-mena sang bos.\r\n\r\nCungpret #2: Carlo\r\n\r\nPegawai yang baru menikah dan ingin mencari pekerjaan dengan penghasilan lebih tinggi.\r\n\r\nCungpret #3: Karenina\r\n\r\nPegawai senior yang s'),
(8, 'Not A Perfect Wedding', 'Asri Tahir', 'Gramedia Pustaka Utama', 'asri.jpg', 'Kompetisi sengit terjadi di sebuah kantor konsultan di Jakarta. Empat anggota The Cungpret, alias kacung kampret, tak ada yang mengincar penghargaan pegawai terbaik, jabatan tertinggi, atau bonus terbesar. Namun mereka bertaruh dan saling sikut untuk resi'),
(9, 'Daun Yang Jatuh Tak Pernah Membenci Angin', 'Tere Liye', 'Gramedia Pustaka Utama', 'terel.jpg', 'Dia bagai malaikat bagi keluarga kami. Merengkuh aku, adikku, dan Ibu dari kehidupan jalanan yang miskin dan nestapa. Memberikan makan, tempat berteduh, sekolah, dan janji masa depan yang lebih baik.'),
(10, 'After Tunangan', 'Agnes Jessica', 'Gramedia Pustaka Utama', 'agnes.jpg', 'Tere dan Opan mungkin bertunangan, tetapi tidak berarti hubungan mereka mulus-mulus saja. Seiring berjalannya waktu, Tere merasa mereka terlalu bertolak belakang. Semuanya semakin runyam setelah kedatangan Vivi, salah satu sahabat Opan yang ternyata juga ');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
