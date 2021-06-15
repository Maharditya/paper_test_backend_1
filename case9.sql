WITH tampil_data(
    SELECT id, email, password, profile_id
    FROM user

    UNION

    SELECT id, nama, alamat, tanggal_lahir
    FROM profile

    UNION

    SELECT id, jabatan, kode_jabatan, '' AS kolom kosong
    FROM jabatan
)
SELECT * FROM tampil_data;