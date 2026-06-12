CREATE DATABASE ai_tutor;

USE ai_tutor;

CREATE TABLE obaveze (
    id INT AUTO_INCREMENT PRIMARY KEY,
    predmet VARCHAR(100) NOT NULL,
    datum_ispita DATE NOT NULL,
    tezina INT NOT NULL,
    zeljena_ocjena INT NOT NULL,
    status_obaveze VARCHAR(20) DEFAULT 'Nije odradjeno'
);
