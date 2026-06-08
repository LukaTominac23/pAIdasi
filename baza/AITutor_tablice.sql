CREATE TABLE Korisnici (
    ID_Korisnika INT          PRIMARY KEY AUTO_INCREMENT,
    Ime          VARCHAR(50)  NOT NULL,
    Prezime      VARCHAR(50)  NOT NULL,
    Email        VARCHAR(100) NOT NULL UNIQUE,
    TipKorisnika VARCHAR(20)  NOT NULL
);

CREATE TABLE Predmeti (
    ID_Predmet    INT          PRIMARY KEY AUTO_INCREMENT,
    NazivPredmeta VARCHAR(100) NOT NULL,
    Opis          VARCHAR(255)
);

CREATE TABLE Obaveze (
    ID_Obaveze   INT          PRIMARY KEY AUTO_INCREMENT,
    ID_Korisnika INT          NOT NULL,
    ID_Predmeta  INT          NOT NULL,
    NazivObaveze VARCHAR(100) NOT NULL,
    OpisObaveze  VARCHAR(255),
    DatumRoka    DATE,
    Prioritet    ENUM('Visok', 'Srednji', 'Nizak'),
    STATUS       ENUM('U tijeku', 'Nije zapoceto', 'Zavrseno'),
    PostotakIzv  INT          DEFAULT 0 CHECK (PostotakIzv BETWEEN 0 AND 100),

    FOREIGN KEY (ID_Korisnika) REFERENCES Korisnici(ID_Korisnika),
    FOREIGN KEY (ID_Predmeta)  REFERENCES Predmeti(ID_Predmet)
);