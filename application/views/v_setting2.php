<section>
    <center>
        <form action="<?= base_url('web/cetak'); ?>"
                method="post">
                <table>
                    <tr>
                        <th colspan="3">
                            TAMPILAN DATA
                        </th>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <th>NAMA</th>
                        <th>:</th>
                        <td>
                            <?= $nama;?>
                        </td>
                    </tr>
                    <tr>
                        <th>TTL</th>
                        <th>:</th>
                        <td>
                            <?= $ttl;?>
                        </td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <td>:</td>
                        <td>
                            <?= $alamat;?>
                        </td>
                    </tr>
                    <tr>
                        <th>PENDIDIKAN</th>
                        <td>:</td>
                        <td>
                            <?= $pnd;?>
                        </td>
                    </tr>
                </table>
            </form>
    </center>
</section>