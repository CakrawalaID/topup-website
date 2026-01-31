-- Buat database
CREATE DATABASE topupdb;

-- Gunakan database yang dibuat
USE topupdb;

-- Buat tabel untuk menyimpan topup
CREATE TABLE topup_history (
    id INT AUTO_INCREMENT PRIMARY KEY,
    game_id VARCHAR(50) NOT NULL,
    nominal VARCHAR(20) NOT NULL,
    payment_method VARCHAR(20) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
