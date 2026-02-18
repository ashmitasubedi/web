

CREATE DATABASE IF NOT EXISTS cms CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE cms;

CREATE TABLE IF NOT EXISTS contacts (
    id         INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name       VARCHAR(120)  NOT NULL,
    email      VARCHAR(255)  NOT NULL,
    subject    VARCHAR(255)  DEFAULT 'General Inquiry',
    message    TEXT          NOT NULL,
    created_at DATETIME      DEFAULT CURRENT_TIMESTAMP,
    is_read    TINYINT(1)    DEFAULT 0,
    INDEX idx_email (email),
    INDEX idx_created (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
