CREATE TABLE Barang (
    id_barang INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    jenis_barang VARCHAR(100),
    lokasi VARCHAR(255),
    tanggal_pembelian DATE,
    status ENUM('aktif', 'tidak_aktif', 'dalam_pemeliharaan') DEFAULT 'aktif',
    tanggal_pemeliharaan_terakhir DATE
);

CREATE TABLE Jadwal_Maintenance (
    id_jadwal INT AUTO_INCREMENT PRIMARY KEY,
    id_barang INT,
    tanggal_jadwal DATE NOT NULL,
    deskripsi TEXT,
    status ENUM('dijadwalkan', 'selesai', 'dibatalkan') DEFAULT 'dijadwalkan',
    FOREIGN KEY (id_barang) REFERENCES Barang(id_barang)
);

CREATE TABLE Laporan_Harian (
    id_laporan INT AUTO_INCREMENT PRIMARY KEY,
    tanggal_laporan DATE,
    id_barang INT,
    status ENUM('operasional', 'tidak_operasional') DEFAULT 'operasional',
    masalah_dilaporkan TEXT,
    catatan TEXT,
    FOREIGN KEY (id_barang) REFERENCES Barang(id_barang)
);

CREATE TABLE Laporan_Bulanan (
    id_laporan INT AUTO_INCREMENT PRIMARY KEY,
    bulan_laporan DATE,
    id_barang INT,
    total_pemeliharaan INT DEFAULT 0,
    total_masalah INT DEFAULT 0,
    ringkasan TEXT,
    FOREIGN KEY (id_barang) REFERENCES Barang(id_barang)
);
