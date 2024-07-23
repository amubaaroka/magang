CREATE TABLE JenisBarang (
    jenis_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_jenis VARCHAR(255) NOT NULL,
    deskripsi TEXT
);

CREATE TABLE Barang (
    barang_id INT AUTO_INCREMENT PRIMARY KEY,
    nama_barang VARCHAR(255) NOT NULL,
    jenis_id INT,
    spesifikasi TEXT,
    tanggal_beli DATE,
    status VARCHAR(50),
    stok INT,
    FOREIGN KEY (jenis_id) REFERENCES JenisBarang(jenis_id)
);

CREATE TABLE JadwalMaintenance (
    jadwal_id INT AUTO_INCREMENT PRIMARY KEY,
    barang_id INT,
    tanggal_jadwal DATE NOT NULL,
    keterangan TEXT,
    status VARCHAR(50),
    FOREIGN KEY (barang_id) REFERENCES Barang(barang_id)
);

CREATE TABLE LaporanHarian (
    laporan_harian_id INT AUTO_INCREMENT PRIMARY KEY,
    tanggal DATE NOT NULL,
    jumlah_maintenance INT,
    catatan TEXT
);

CREATE TABLE LaporanBulanan (
    laporan_bulanan_id INT AUTO_INCREMENT PRIMARY KEY,
    bulan VARCHAR(20) NOT NULL,
    jumlah_maintenance INT,
    catatan TEXT
);
