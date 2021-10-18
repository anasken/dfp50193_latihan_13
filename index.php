<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <h1>Borang Permohonan (A)</h1>
    <p?>Validate guna HTML</p>
        <form action="semak.php" method="post" onsubmit="return semak();">
            <table>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" id="nama" required></td>
                </tr>
                <tr>
                    <td>Umur</td>
                    <td><input type="number" name="umur" id="umur" min="18" max="45" required></td>
                </tr>
            </table>
            <button type="submit">Hantar</button>
        </form>
        <p>
            Hanya layak memohon untuk umur 18 hingga 45 tahun sahaja.
        </p>
        <hr>
        <h1>Borang Permohonan (B)</h1>
        <p?>Validate guna HTML</p>
            <form action="semak.php" method="post" onsubmit="return semak();">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" name="nama" id="nama" required></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td><input type="number" name="umur" id="umur" min="18" max="45" required></td>
                    </tr>
                </table>
                <button type="submit">Hantar</button>
            </form>
            <p>
                Hanya layak memohon untuk umur 18 hingga 45 tahun sahaja.
            </p>
            <hr>
            <h1>Borang Permohonan (C)</h1>
            <p?>Validate guna HTML</p>
                <form action="semak.php" method="post" onsubmit="return semak();">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" id="nama" required></td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td><input type="number" name="umur" id="umur" required></td>
                        </tr>
                    </table>
                    <button type="submit">Hantar</button>
                </form>
                <p>
                    Hanya layak memohon untuk umur 18 hingga 45 tahun sahaja.
                </p>
                <hr>
                <script>
                    function semak() {
                        let nama = document.getElementById('nama').value;
                        let umur = document.getElementById('umur').value;

                        if (umur === '') {
                            alert('Sila isi nama anda');
                            return false;
                        } else if (nama.length < 2) {
                            alert('Sila isi nama penuh anda');
                            return false;
                        } else if (umur < 18 || umur > 45) {
                            alert('umur anda tidak layak')
                            return false;
                        }
                    }
                </script>

                <hr>
</body>

</html>