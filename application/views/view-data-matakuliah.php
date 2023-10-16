<head>
    <title>Form Input Mata Kuliah</title>
</head>

<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>"
        method="post">
        <table>
            <tr>
                <th colspan="3">
                    TAMPILAN DATA MATAKULIAH
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>KODE MTK</th>
                <th>:</th>
                <td>
                    <?= $kode;?>
                </td>
            </tr>
            <tr>
                <th>NAMA MTK</th>
                <td>:</td>
                <td>
                    <?= $nama;?>
                </td>
            </tr>
            <tr>
                <th>SKS</th>
                <td>:</td>
                <td>
                    <?= $sks;?>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <a href="<?= base_url('matakuliah'); ?>">Kembali</a>
                </td>
            </tr>
        </table>
        </form>
    </center>
</body>