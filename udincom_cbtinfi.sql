-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 09 Apr 2023 pada 02.56
-- Versi server: 5.7.41-log-cll-lve
-- Versi PHP: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `udincom_cbtinfi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bank_soal`
--

CREATE TABLE `tbl_bank_soal` (
  `id_bank_soal` int(233) NOT NULL,
  `kode_bank_soal` varchar(200) NOT NULL,
  `id_mapel` int(233) NOT NULL,
  `status_bank_soal` int(5) NOT NULL,
  `jml_opsi` int(10) NOT NULL,
  `path_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bank_soal`
--

INSERT INTO `tbl_bank_soal` (`id_bank_soal`, `kode_bank_soal`, `id_mapel`, `status_bank_soal`, `jml_opsi`, `path_image`) VALUES
(242, '1', 60, 2, 4, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_group`
--

CREATE TABLE `tbl_group` (
  `id_group` int(255) NOT NULL,
  `nama_group` varchar(255) NOT NULL,
  `kode_ujian` varchar(255) NOT NULL,
  `grup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_group`
--

INSERT INTO `tbl_group` (`id_group`, `nama_group`, `kode_ujian`, `grup`) VALUES
(16, 'G-1', '1', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jawaban`
--

CREATE TABLE `tbl_jawaban` (
  `id_jawaban` int(255) NOT NULL,
  `id_ujian` int(255) NOT NULL,
  `nopes_siswa` varchar(122) NOT NULL,
  `id_soal` int(255) NOT NULL,
  `nomor_soal` int(10) NOT NULL,
  `pg_jawaban` varchar(100) NOT NULL,
  `essay_jawaban` text NOT NULL,
  `bobot_essay` int(100) NOT NULL,
  `count_audio` int(10) NOT NULL,
  `acak_opsi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jurusan`
--

CREATE TABLE `tbl_jurusan` (
  `id_jurusan` int(255) NOT NULL,
  `nama_jurusan` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jurusan`
--

INSERT INTO `tbl_jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(6, 'AERODROME CONTROL TOWER (ADC)'),
(10, 'APPROACH CONTROL PROCEDUR (APP)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id_kelas` int(233) NOT NULL,
  `nama_kelas` varchar(100) NOT NULL,
  `id_jurusan` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id_kelas`, `nama_kelas`, `id_jurusan`) VALUES
(29, 'XI TPMP A', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id_login` int(255) NOT NULL,
  `nopes_siswa` varchar(255) NOT NULL,
  `waktu_login` varchar(100) NOT NULL,
  `status_login` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_login`
--

INSERT INTO `tbl_login` (`id_login`, `nopes_siswa`, `waktu_login`, `status_login`) VALUES
(1, '1', '12:34:25pm', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(233) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `kkm_mapel` int(10) NOT NULL,
  `jenis_mapel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `kkm_mapel`, `jenis_mapel`) VALUES
(60, 'Sistem Komputer', 75, 'lainnya'),
(61, 'PENINGKATAN KOMPETENSI PERSONIL ATC (By DNP)', 7, 'pilihan A');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `id_notes` int(255) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_notes`
--

INSERT INTO `tbl_notes` (`id_notes`, `notes`) VALUES
(1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sekolah`
--

CREATE TABLE `tbl_sekolah` (
  `id_sekolah` int(233) NOT NULL,
  `kode_sekolah` varchar(10) NOT NULL,
  `nama_sekolah` varchar(120) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `logo_sekolah` varchar(21) NOT NULL,
  `slogan_sekolah` varchar(255) NOT NULL,
  `kepala_sekolah` varchar(122) NOT NULL,
  `nip_kepsek` varchar(122) NOT NULL,
  `jml_ruang` int(10) NOT NULL,
  `jml_hari` int(10) NOT NULL,
  `gambar_login` varchar(122) NOT NULL,
  `gambar_sidebar` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sekolah`
--

INSERT INTO `tbl_sekolah` (`id_sekolah`, `kode_sekolah`, `nama_sekolah`, `alamat_sekolah`, `logo_sekolah`, `slogan_sekolah`, `kepala_sekolah`, `nip_kepsek`, `jml_ruang`, `jml_hari`, `gambar_login`, `gambar_sidebar`) VALUES
(1, 'K02270102', 'SMK NEGERI 1 PADAHERANG', 'Jl. Raya Padaherang Km.1', 'logosekolah.png', 'SEKOLAH UNGGUL DAN BERKARAKTER', 'Drs. Maryuanda', '19630701 198903 1 013', 10, 8, '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id_siswa` int(233) NOT NULL,
  `nopes_siswa` varchar(100) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `id_kelas` int(233) NOT NULL,
  `password_siswa` varchar(255) NOT NULL,
  `kelompok_siswa` int(233) NOT NULL,
  `cek` int(10) NOT NULL,
  `lisensi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id_siswa`, `nopes_siswa`, `nama_siswa`, `id_kelas`, `password_siswa`, `kelompok_siswa`, `cek`, `lisensi`) VALUES
(1, '1', 'MUHAMMAD ANAS', 29, '3554', 1, 0, 0),
(2, 'anascyong80@gmail.com', 'MUHAMMAD ANAS', 29, 'auliasmi898989', 1, 0, 3554),
(3, 'riez.atc@gmail.com', 'Aries Syamsu Nur', 29, 'Nuraida1747', 1, 0, 2944),
(6, '', '', 29, '', 1, 0, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_soal`
--

CREATE TABLE `tbl_soal` (
  `id_soal` int(233) NOT NULL,
  `id_bank_soal` int(233) NOT NULL,
  `des_soal` longtext CHARACTER SET utf8 NOT NULL,
  `jenis_soal` int(10) NOT NULL,
  `audio_soal` varchar(100) NOT NULL,
  `opt1_soal` text CHARACTER SET utf8 NOT NULL,
  `opt2_soal` text CHARACTER SET utf8 NOT NULL,
  `opt3_soal` text CHARACTER SET utf8 NOT NULL,
  `opt4_soal` text CHARACTER SET utf8 NOT NULL,
  `opt5_soal` text CHARACTER SET utf8 NOT NULL,
  `kunciopt_soal` varchar(100) NOT NULL,
  `kunciessay_soal` text NOT NULL,
  `acak_soal` int(2) NOT NULL,
  `acak_opsi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_status_ujian`
--

CREATE TABLE `tbl_status_ujian` (
  `id_status_ujian` int(255) NOT NULL,
  `id_ujian` int(255) NOT NULL,
  `nopes_siswa` varchar(255) NOT NULL,
  `sisa_waktu` int(100) NOT NULL,
  `status` int(2) NOT NULL,
  `nilai_pg` int(100) NOT NULL,
  `nilai_essay` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ujian`
--

CREATE TABLE `tbl_ujian` (
  `id_ujian` int(255) NOT NULL,
  `kode_ujian` varchar(122) NOT NULL,
  `id_bank_soal` int(255) NOT NULL,
  `id_jurusan` int(255) NOT NULL,
  `lama_ujian` int(10) NOT NULL,
  `sesi_ujian` int(5) NOT NULL,
  `token_ujian` varchar(10) NOT NULL,
  `status_ujian` int(10) NOT NULL,
  `lihat_hasil` int(10) DEFAULT NULL,
  `lihat_token` int(10) DEFAULT NULL,
  `time_mode` int(10) NOT NULL,
  `time_set` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ujian`
--

INSERT INTO `tbl_ujian` (`id_ujian`, `kode_ujian`, `id_bank_soal`, `id_jurusan`, `lama_ujian`, `sesi_ujian`, `token_ujian`, `status_ujian`, `lihat_hasil`, `lihat_token`, `time_mode`, `time_set`) VALUES
(16, '1', 242, 10, 120, 5, 'BEGJT', 0, 0, 0, 0, '1680781877');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(233) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `level` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'guru', 'fe6c60ace2428f6aa573c7c1c55e05ad', 2),
(4, 'panitia', '25d55ad283aa400af464c76d713c07ad', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detuser`
--

CREATE TABLE `tb_detuser` (
  `iduser` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tipepemohon` varchar(35) NOT NULL,
  `ttl` varchar(35) NOT NULL,
  `alamatunuitkerja` text NOT NULL,
  `jamtwr` varchar(35) NOT NULL,
  `jamapp` varchar(35) NOT NULL,
  `namaats` varchar(35) NOT NULL,
  `alamatkantor` text NOT NULL,
  `rating` varchar(35) NOT NULL,
  `kebangsaan` varchar(35) NOT NULL,
  `tlp` varchar(35) NOT NULL,
  `jk` varchar(35) NOT NULL,
  `ratings` varchar(35) NOT NULL,
  `alasanr` varchar(50) NOT NULL,
  `jenisrat` varchar(35) NOT NULL,
  `lokasira` varchar(35) NOT NULL,
  `masara` varchar(35) NOT NULL,
  `sertisehat` varchar(35) NOT NULL,
  `tglsert` varchar(35) NOT NULL,
  `dokterserti` varchar(35) NOT NULL,
  `sertiicao` varchar(35) NOT NULL,
  `nrat` varchar(35) NOT NULL,
  `lpel` varchar(35) NOT NULL,
  `tglpel` varchar(50) NOT NULL,
  `lvlpel` varchar(35) NOT NULL,
  `rekomojti` varchar(35) NOT NULL,
  `nreko` varchar(35) NOT NULL,
  `tglreko` varchar(35) NOT NULL,
  `jpandu` varchar(35) NOT NULL,
  `durasipandu` varchar(35) NOT NULL,
  `nmaojti` varchar(35) NOT NULL,
  `lisenojti` varchar(35) NOT NULL,
  `pelanggaran` varchar(35) NOT NULL,
  `tglpela` varchar(35) NOT NULL,
  `latar` varchar(35) NOT NULL,
  `jenissertifi` varchar(35) NOT NULL,
  `pernahgagal` varchar(35) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_detuser`
--

INSERT INTO `tb_detuser` (`iduser`, `alamat`, `tipepemohon`, `ttl`, `alamatunuitkerja`, `jamtwr`, `jamapp`, `namaats`, `alamatkantor`, `rating`, `kebangsaan`, `tlp`, `jk`, `ratings`, `alasanr`, `jenisrat`, `lokasira`, `masara`, `sertisehat`, `tglsert`, `dokterserti`, `sertiicao`, `nrat`, `lpel`, `tglpel`, `lvlpel`, `rekomojti`, `nreko`, `tglreko`, `jpandu`, `durasipandu`, `nmaojti`, `lisenojti`, `pelanggaran`, `tglpela`, `latar`, `jenissertifi`, `pernahgagal`, `id`) VALUES
('admin@gmail.com', 'jl. jalan', 'Penerbitan', 'Tanggal Lahir', 'Alamat Unit Kerja', 'twr', 'app', 'ats', 'Alamat Kantor', 'Aerodrodrome Control Rating (TWR)', 'Kebangsaan ', '08965333', 'Laki-laki', 'Ya', 'Penugasan', 'Jenis Rating', 'Lokasi Rating', 'Masa Berlaku Rating', 'Tidak', 'anggal dikeluarkan ', 'Nama Dokter Penguji', 'Tidak', 'ama Rater', 'Lembaga Pelatihan', 'Tanggal Dikeluarkan vfggg', 'Level ', 'Tidak', 'Nomor Surat', 'Tanggal Surat ', '1', '2', 'Nama OJTI', 'Nomor Lisensi OJTI', 'Ya', 'Jika Ya, Tanggal Pelanggaran', 'S1', 'Approach Control Surveillance Ratin', 'Ya', 1),
('anascyong80@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 2),
('riez.atc@gmail.com', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 3),
('', '', 'Penerbitan', '', '', '', '', '', '', 'Aerodrodrome Control Rating (TWR)', '', '', 'Laki-laki', 'Ya', '', '', '', '', 'Tidak', '', '', 'Tidak', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 4);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bank_soal`
--
ALTER TABLE `tbl_bank_soal`
  ADD PRIMARY KEY (`id_bank_soal`),
  ADD UNIQUE KEY `kode_bank_soal` (`kode_bank_soal`);

--
-- Indeks untuk tabel `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indeks untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  ADD PRIMARY KEY (`id_jawaban`);

--
-- Indeks untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`id_notes`);

--
-- Indeks untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nopes_siswa` (`nopes_siswa`);

--
-- Indeks untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  ADD PRIMARY KEY (`id_soal`),
  ADD UNIQUE KEY `id_soal` (`id_soal`);

--
-- Indeks untuk tabel `tbl_status_ujian`
--
ALTER TABLE `tbl_status_ujian`
  ADD PRIMARY KEY (`id_status_ujian`);

--
-- Indeks untuk tabel `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  ADD PRIMARY KEY (`id_ujian`),
  ADD UNIQUE KEY `kode_ujian` (`kode_ujian`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `tb_detuser`
--
ALTER TABLE `tb_detuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_bank_soal`
--
ALTER TABLE `tbl_bank_soal`
  MODIFY `id_bank_soal` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=246;

--
-- AUTO_INCREMENT untuk tabel `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `id_group` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_jawaban`
--
ALTER TABLE `tbl_jawaban`
  MODIFY `id_jawaban` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_jurusan`
--
ALTER TABLE `tbl_jurusan`
  MODIFY `id_jurusan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id_kelas` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `id_login` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT untuk tabel `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `id_notes` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_sekolah`
--
ALTER TABLE `tbl_sekolah`
  MODIFY `id_sekolah` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id_siswa` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_soal`
--
ALTER TABLE `tbl_soal`
  MODIFY `id_soal` int(233) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_status_ujian`
--
ALTER TABLE `tbl_status_ujian`
  MODIFY `id_status_ujian` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_ujian`
--
ALTER TABLE `tbl_ujian`
  MODIFY `id_ujian` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(233) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_detuser`
--
ALTER TABLE `tb_detuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
