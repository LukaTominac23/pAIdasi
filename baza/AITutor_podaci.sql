INSERT INTO Korisnici (Ime, Prezime, Email, TipKorisnika) VALUES
('Pero',   'Perić',     'pero@gmail.com',   'Student'),
('Lucija', 'Kovačević', 'lucija@gmail.com', 'Student'),
('Ivan',   'Horvat',    'ivan@gmail.com',   'Student');

INSERT INTO Predmeti (NazivPredmeta, Opis) VALUES
('Matematika I',       'Učenje funkcija, jednadžbi i zadataka'),
('Osnove programiranja', 'Uvod u Python'),
('Uredsko Poslovanje', 'Funkcije u Excel-u'),
('Informatika',        'HTML, CSS, baze podataka i programiranje');

INSERT INTO Obaveze (ID_Korisnika, ID_Predmeta, NazivObaveze, OpisObaveze, DatumRoka, Prioritet, STATUS, PostotakIzv) VALUES
(1, 1, 'Naučiti funkcije', 'Ponoviti linearne i kvadratne funkcije', '2026-06-20', 'Visok',   'U tijeku',      65),
(1, 2, 'Naučiti polja',    'Indeksi, numeracija',                    '2026-06-22', 'Srednji', 'Nije zapoceto',  0),
(2, 3, 'Kreiranje tablica','Pivot table',                            '2026-06-18', 'Visok',   'Zavrseno',      100);	