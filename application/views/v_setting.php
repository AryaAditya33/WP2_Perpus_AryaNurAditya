<section>
    <center>
        <form action="<?= base_url('web/cetak'); ?>"
                method="post">
                <table>
                    <tr>
                        <th colspan="3">
                            FORM INPUT
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
                            <input type="text" name="nama" id="nama">
                        </td>
                    </tr>
                    <tr>
                        <th>TEMPAT & TANGGAL LAHIR</th>
                        <th>:</th>
                        <td>
                            <input type="text" name="ttl" id="ttl">
                        </td>
                    </tr>
                    <tr>
                        <th>ALAMAT</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" id="alamat">
                        </td>
                    </tr>
                    <tr>
                        <th>PENDIDIKAN</th>
                        <td>:</td>
                        <td>
                            <select name="pnd" id="pnd">
                                <option value="">PILIH PENDIDIKAN</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="SMU">SMU</option>
                                <option value="Kuliah">Kuliah</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">&nbsp;<input type="reset" value="Hapus">
                        </td>
                    </tr>
            </table>
        </form>
    </center>
</section>