CREATE TABLE jabatan_user
(
    jabatan_user_id bigint,
    profile_id bigint,
    jabatan_id bigint,
    berlaku_jabatan date,
    CONSTRAINT jabatan_user_pkey PRIMARY KEY (jabatan_user_id)
);

SELECT  B.nama, B.alamat, B.tanggal_lahir, C.jabatan, C.kode_jabatan, A.berlaku_jabatan
FROM  jabatan_user A
    INNER JOIN profile B ON A.profile_id = B.profile_id
    INNER JOIN jabatan C ON A.jabatan_id = C.jabatan_id