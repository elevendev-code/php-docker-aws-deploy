CREATE TABLE IF NOT EXISTS mahasiswa (
    id SERIAL PRIMARY KEY,
    nama VARCHAR(100) NOT NULL,
    nim VARCHAR(20) NOT NULL
);

INSERT INTO mahasiswa (nama, nim) VALUES ('Obby Nur Rosyid', '23083000187');
