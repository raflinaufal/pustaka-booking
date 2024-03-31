<html>
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <center>
        <form action="<?= base_url('matakuliah/cetak'); ?>" method="post">
            <table>
                <tr>
                    <th colspan="3">Form Input Data Mata Kuliah</th>
                </tr>
                <tr>
                    <td colspan="3"><hr></td>
                </tr>
                <tr>
                    <th><label for="kode">Kode MTK</label></th>
                    <th>:</th>
                    <td><input type="text" name="kode" id="kode"></td>
                </tr>
                <tr>
                    <th><label for="nama">Nama MTK</label></th>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>
                </tr>
                <tr>
                    <th><label for="sks">SKS</label></th>
                    <td>:</td>
                    <td>
                        <select name="sks" id="sks">
                            <option value="" selected>Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>
