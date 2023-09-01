select tb_mahasiswa.mhs_nama, max(tb_mahasiswa_nilai.nilai) from tb_mahasiswa
inner join tb_mahasiswa_nilai on tb_mahasiswa.mhs_id = tb_mahasiswa_nilai.mhs_id
inner join tb_matakuliah on tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
where tb_matakuliah.mk_kode = 'MK303' and tb_mahasiswa_nilai.nilai
group by tb_mahasiswa.mhs_nama;