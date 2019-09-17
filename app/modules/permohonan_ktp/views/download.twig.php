<style>
td{
	font-size:11.8px;
	font-family: Tahoma,Calibri, Verdana, Geneva, sans-serif
}
</style>

<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%" align="center" style="padding-left: 20px"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PEMERINTAH {{ detail.nama_kab }}</strong></td>
    </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="20%">&nbsp;</td>
        <td width="20%" rowspan="4" valign="top"><img src="{{ logo }}"  height="{{newheight}}" width="{{ newwidth }}" /></td>
        <td width="25%">&nbsp;</td>
        <td width="5%">&nbsp;</td>
        <td width="30%">&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kecamatan</td>
        <td>:</td>
        <td>{{ detail.nama_kec }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kelurahan</td>
        <td>:</td>
        <td>{{ detail.nama_kel }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>Kode Kelurahan</td>
        <td>:</td>
        <td>{{ detail.no_kel }}</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="100%" align="center"><strong>FORMULIR PERMOHONAN KARTU TANDA PENDUDUK (KTP)</strong></td>
    </tr>
</table>
<table width="100%" border="0" style="border:1px solid #000" cellpadding="0" cellspacing="0">
    <tr>
        <td width="100%"><strong>Perhatian</strong></td>
    </tr>
    <tr>
        <td>1. Harap diisi dengan huruf cetak dan menggunakan tinta hitam</td>
    </tr>
    <tr>
        <td>2. Untuk kolom pilihan, harap memberi tanda silang (X) pada kotak pilihan</td>
    </tr>
    <tr>
        <td>3. Setelah formulir ini diisi dan ditandatangani, harap diserahkan kembali ke kantor Desa/Kelurahan</td>
    </tr>
</table>
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td><strong><u><i>PERMOHONAN KTP</i></u></strong></td>
        <td>:</td>
        <td colspan="4">{{ detail.jenis }}</td>
    </tr>
    <tr>
        <td colspan="6">&nbsp;</td>
    </tr>
    <tr>
        <td colspan="6"><strong>DATA KTP</strong></td>
    </tr>
    <tr>
        <td>1. Nomor urut FMP</td>
        <td>:</td>
        <td colspan="4">{{ detail.no_fmp }}</td>
    </tr>
    <tr>
        <td>2. No. Kartu Keluarga</td>
        <td>:</td>
        <td colspan="4">{{ detail.no_kk }}</td>
    </tr>
    <tr>
        <td>3. Nama Lengkap</td>
        <td>:</td>
        <td colspan="4">{{ detail.nama }}</td>
    </tr>
    <tr>
        <td>4. Jenis Kelamin</td>
        <td>:</td>
        <td colspan="4">{{ gender[detail.jk] }}</td>
    </tr>
    <tr>
        <td>5. Golongan Darah</td>
        <td>:</td>
        <td colspan="4">{{ detail.gol_darah }}</td>
    </tr>
    <tr>
        <td>6. Tanggal Lahir</td>
        <td>:</td>
        <td colspan="4">{{ format_tanggal_khusus_indo(detail.tanggal_lahir) }}</td>
    </tr>
    <tr>
        <td>7. Agama</td>
        <td>:</td>
        <td colspan="4">{{ detail.agama }}</td>
    </tr>
    <tr>
        <td>8. Status Perkawinan</td>
        <td>:</td>
        <td colspan="4">{{ detail.status_perkawinan }}</td>
    </tr>
    <tr>
        <td>9. Status Keluarga</td>
        <td>:</td>
        <td colspan="4">{{ detail.status_keluarga }}</td>
    </tr>
    <tr>
        <td>10. Tempat Lahir</td>
        <td>:</td>
        <td colspan="4">{{ detail.tempat_lahir }}</td>
    </tr>
    <tr>
        <td>11. Alamat Rumah</td>
        <td>:</td>
        <td colspan="4">{{ detail.alamat }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="4">
            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="5%">RT</td>
                    <td width="10%">{{ detail.rt }}</td>
                    <td width="5%">RW</td>
                    <td width="80%">{{ detail.rw }}</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>12. Kewarganegaraan	</td>
        <td>:</td>
        <td colspan="4">{{ detail.kewarganegaraan }}</td>
    </tr>
    <tr>
        <td width="25%">13. Kebangsaan/Keturunan</td>
        <td width="3%">:</td>
        <td width="32%">{{ detail.keturunan }}</td>
        <td width="10%">Kode</td>
        <td width="3%">:</td>
        <td width="27%">{{ detail.kode }}</td>
    </tr>
    <tr>
        <td colspan="6">14. No. Surat Bukti Kewarganegaraan RI/SKBRI</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td>{{ detail.no_bukti_kewarganegaraan_ri }}</td>
        <td>TGL</td>
        <td>:</td>
        <td>{{ format_tanggal_khusus_indo(detail.tgl_bukti_kewarganegaraan_ri) }}</td>
    </tr>
    <tr>
        <td colspan="6">15. No. Dokumen Imigrasi/STMD</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>:</td>
        <td>{{ detail.no_doc_imigrasi }}</td>
        <td>TGL</td>
        <td>:</td>
        <td>{{ format_tanggal_khusus_indo(detail.tgl_doc_imigrasi) }}</td>
    </tr>
    <tr>
        <td>16. Pendidikan</td>
        <td>:</td>
        <td colspan="4">{{ detail.pendidikan }}</td>
    </tr>
    <tr>
        <td>17. Pekerjaan</td>
        <td>:</td>
        <td colspan="4">{{ detail.pekerjaan }}</td>
    </tr>
    <tr>
        <td>18. Akseptor KB dengan cara</td>
        <td>:</td>
        <td colspan="4">{{ detail.alat_kb }}</td>
    </tr>
    <tr>
        <td>19. Dapat Membaca</td>
        <td>:</td>
        <td colspan="4">{{ detail.dapat_membaca }}</td>
    </tr>
    <tr>
        <td>20. ET</td>
        <td>:</td>
        <td colspan="4">{{ detail.et }}</td>
    </tr>
    <tr>
        <td>21. Nama Bapak/Ibu</td>
        <td>:</td>
        <td colspan="4">{{ detail.nama_ortu }}</td>
    </tr>
    <tr>
        <td>22. Keterangan Cacat</td>
        <td>:</td>
        <td colspan="4">{{ detail.ket_cacat }}</td>
    </tr>
    <tr>
        <td>23. Kode Mutasi</td>
        <td>:</td>
        <td>{{ detail.kode_mutasi }}</td>
        <td>TGL</td>
        <td>:</td>
        <td>{{ format_tanggal_khusus_indo(detail.tgl_mutasi) }}</td>
    </tr>
    <tr>
        <td>24. Pindahan Dari/ke</td>
        <td>:</td>
        <td colspan="4">{{ detail.pindah_dari_ke }}</td>
    </tr>
    <tr>
        <td colspan="6">DATA KELUARGA (hanya diisi oleh Kepala Keluarga</td>
    </tr>
    <tr>
        <td colspan="6">Anggota Keluarga yang belum berhak memperoleh KTP</td>
    </tr>
</table>

  <br>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr>
        <td width="30%">&nbsp;</td>
        <td width="40%" align="center">MENGETAHUI</td>
        <td width="30%" align="center">{{ detail.nama_kel }}, {{ format_tanggal_khusus_indo(detail.date) }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center">{{ text_1 }}</td>
        <td align="center">Pemohon</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center">{{ text_2 }}</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center"><strong><u>{{ detail.ttd_nama }}</u></strong></td>
        <td align="center">{{ detail.nama }}</td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td align="center">NIP. {{ detail.ttd_nip }}</td>
        <td>&nbsp;</td>
    </tr>
</table>


