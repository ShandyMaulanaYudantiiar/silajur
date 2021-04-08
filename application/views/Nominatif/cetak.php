<div class="col-12">
    <center>

        <h2>DAFTAR NOMINATIF</h2>
        <h4>BIAYA ENTERTAIMENT DAN SEJENISNYA</h4>

    </center>
    <h5>Tahun Pajak</h5>
    <table class="mb-1" border="1" style="width: 100%" style="text-align:center;">
        <tr>
            <td width="1%" rowspan="2" align="center">No</td>
            <td colspan="5" align="center">Pemberian entertaiment dan sejenisnya</td>
            <td colspan="4" align="center">Relasi usaha yang diberikan entertaiment dan sejenisnya</td>
            <td width="5%" rowspan="2" align="center">Keterangan</td>
        </tr>
        <tr>
            <td width="1%" align="center">Tanggal</td>
            <td align="center">Tempat</td>
            <td align="center">Alamat</td>
            <td align="center">Jenis</td>
            <td align="center">Jumlah(Rp)</td>
            <td align="center">Nama</td>
            <td align="center">Posisi</td>
            <td align="center">Nama Perusahaan</td>
            <td width="5%" align="center">Jenis Usaha</td>
        </tr>
        <tr>
            <td><?= $Nominatif->nomor ?></td>
            <td><?= $Nominatif->tgl ?></td>
            <td><?= $Nominatif->tmpt ?></td>
            <td><?= $Nominatif->almt ?></td>
            <td><?= $Nominatif->jenis ?></td>
            <td><?= $Nominatif->jumlah ?></td>
            <td><?= $Nominatif->nm_usaha ?></td>
            <td><?= $Nominatif->posisi ?></td>
            <td><?= $Nominatif->nm_perusahaan ?></td>
            <td><?= $Nominatif->jn_usaha ?></td>
            <td><?= $Nominatif->ket ?></td>
        </tr>
    </table>
</div>