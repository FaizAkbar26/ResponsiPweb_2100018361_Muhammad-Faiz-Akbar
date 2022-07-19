<!DOCTYPE html>
<html>
<head>
    <title>2100018361-Muhammad Faiz Akbar</title>
    <link rel="stylesheet" type="text/css" href="responsi.css">
    <script type="text/javascript">
        function cek(){
            var jarak = (document.fform.jarak.value);
            var ongkir = jarak*5000;
            alert("Ongkir yang harus dibayar : Rp. "+ongkir);
        }
    </script>
</head>
<body>
    <p align="center">
        <img src="LOGO.png" height="180">
    </p>
    <div class="container">
        <p class="p1" align="center"><b>CEK ONGKIR</b></p>
        <form name="fform" method="POST" action="proses_ongkir.php">
            <div class="field">
                <div class="col1">
                    <label for="fname">Nama</label>
                </div>
                <div class="col2">
                    <input type="text" name="name" id="name" placeholder="Nama" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fasal">Asal</label>
                </div>
                <div class="col2">
                    <input type="text" name="asal" id="asal" placeholder="Asal" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="ftujuan">Tujuan</label>
                </div>
                <div class="col2">
                    <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="ftelp">Telp</label>
                </div>
                <div class="col2">
                    <input type="text" name="telp" id="telp" placeholder="No Telp" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fjarak">Jarak</label>
                </div>
                <div class="col2">
                    <input type="text" name="jarak" id="jarak" placeholder="Masukkan Jarak(Dalam Km)" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fberat">Berat</label>
                </div>
                <div class="col2">
                    <input type="text" name="berat" id="berat" placeholder="Berat Barang(Kg)" >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="femail">Email</label>
                </div>
                <div class="col2">
                    <input type="email" name="email" id="demail"placeholder="Email" >
                </div>
            </div>
            <div class="field">
                <div class="spasi"></div>
                <input type="submit" value="Cek Ongkir" onclick="cek()">
            </div>
        </form>
    </div>
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
        <p class="p2">Menu Pilihan </p>
        <ul>
            <li><a href="responsi.php">Home</a></li>
            <li><a href="login.php">Admin</a></li>
        </ul>
    </div>
</body>
</html>