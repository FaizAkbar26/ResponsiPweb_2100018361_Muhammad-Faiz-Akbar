<!DOCTYPE html>
<html>
<head>
    <title>2100018361-Muhammad Faiz Akbar</title>
    <link rel="stylesheet" type="text/css" href="responsi.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript">
        function cek(jarak){
            var jarak = (document.fform.jarak.value);
            if(!isNaN(jarak)){
                var ongkir = jarak*5000;
                alert("Ongkir yang harus dibayar : Rp. "+ongkir);
                return true;
            }
            else{   
                alert("Jarak harus berupa angka");
                document.fform.jarak.focus();
                return false;
            }
            
        }
    </script>
</head>
<body>
    <p align="center">
        <img src="LOGO.png" style="max-width:100%;height:auto">
    </p>
    <div class="container">
        <p class="p1" align="center"><b>CEK ONGKIR</b></p>
        <form name="fform" method="POST" action="proses_ongkir.php" onsubmit="return cek()">
            <div class="field">
                <div class="col1">
                    <label for="fname">Nama</label>
                </div>
                <div class="col2">
                    <input type="text" name="name" id="name" placeholder="Nama" required >
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fasal">Asal</label>
                </div>
                <div class="col2">
                    <input type="text" name="asal" id="asal" placeholder="Asal" required>
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="ftujuan">Tujuan</label>
                </div>
                <div class="col2">
                    <input type="text" name="tujuan" id="tujuan" placeholder="Tujuan" required>
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="ftelp">Telp</label>
                </div>
                <div class="col2">
                    <input type="text" name="telp" id="telp" placeholder="No Telp" required>
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fjarak">Jarak</label>
                </div>
                <div class="col2">
                    <input type="text" name="jarak" id="jarak" placeholder="Masukkan Jarak(Dalam Km)" required>
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="fberat">Berat</label>
                </div>
                <div class="col2">
                    <input type="text" name="berat" id="berat" placeholder="Berat Barang(Kg)" required>
                </div>
            </div>
            <div class="field">
                <div class="col1">
                    <label for="femail">Email</label>
                </div>
                <div class="col2">
                    <input type="email" name="email" id="demail"placeholder="Email" required>
                </div>
            </div>
            <div class="field">
                <div class="spasi"></div>
                <input type="submit" value="Cek Ongkir">
            </div>
        </form>
    </div>
    <input type="checkbox" id="active">
    <label for="active" class="menu-btn"><span></span></label>
    <label for="active" class="close"></label>
    <div class="wrapper">
        <p class="p2">Menu Pilihan </p>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Admin</a></li>
        </ul>
    </div>
    <footer>
        <p class="foot"><center>Copyright &copy; 2022 Muhammad Faiz Akbar</center></p>
    </footer>
</body>
</html>