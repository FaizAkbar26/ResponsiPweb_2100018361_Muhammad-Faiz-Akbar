<p align='center'>
    <img src='LOGO.png' height='180'>
</p>
<br><br>
<div class="container">
        <div class="d1">Terima Kasih</div>
        <div class="d1">
            <span class="sp1">Telah Menggunakan Layanan Kami</span>
        </div>
    </div>
<style>
    body{
        background: radial-gradient(circle, rgba(242,242,242,1) 0%, rgba(86,152,190,1) 100%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 50%;
        }
        50% {
            background-position: 100% 50%;
        }
        100% {
            background-position: 0% 50%;
        }
    }

    img{
        border-radius: 5px;
    }

    ul{
        list-style: none;
    }

    a{
        text-decoration: none;
        color: #000;
    }

    @import url("https://fonts.googleapis.com/css?family=Montserrat&display=swap");

    .container{
        text-align:center;
        font-family: "Montserrat Medium";
        color: #000;
        font-weight:500;
        font-size:42px;
        padding-top:20vh;
        height:20vh;
        overflow:hidden;
        backface-visibility: hidden;
        perspective: 1000;
        transform: translate3d(0,0,0);
    }

    .d1{
        display:inline-block;
        overflow:hidden;
        white-space:nowrap;
    }

    .d1:first-of-type{
        animation: showup 9s ease-in-out infinite;
    }

    .d1:last-of-type{
        width:0px;
        animation: reveal 9s ease-in-out infinite;
    }

    .d1:last-of-type .sp1{
        margin-left:-355px;
        animation: slidein 9s ease-in-out infinite;
    }
    
    @keyframes showup {
        0% {opacity:0;}
        20% {opacity:1;}
        80% {opacity:1;}
        100% {opacity:0;}
    }

    @keyframes slidein {
        0% { margin-left:-800px; }
        20% { margin-left:-800px; }
        35% { margin-left:0px; }
        100% { margin-left:0px; }
    }

    @keyframes reveal {
        0% {opacity:0;width:0px;}
        20% {opacity:1;width:0px;}
        30% {width:600px;}
        80% {opacity:1;}
        100% {opacity:0;width:600px;}
    }

    .wrapper{
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 100%;
        background: linear-gradient(90deg, rgba(255,255,255,1) 1%, rgba(101,157,189,1) 100%);
        transition: all 0.6s ease-in-out;
    }

    #active:checked ~ .wrapper{
        left: 0;
    }

    .menu-btn{
        position: absolute;
        z-index: 2;
        right: 20px;
        left: 20px; 
        top: 20px;
        height: 50px;
        width: 50px;
        text-align: center;
        line-height: 50px;
        border-radius: 50%;
        font-size: 20px;
        cursor: pointer;
        color: #fff;
        transition: all 0.3s ease-in-out;
    }

    .menu-btn span, .menu-btn:before, .menu-btn:after{
        content: "";
        position: absolute;
        top: calc(50% - 1px);
        left: 30%;
        width: 40%;
        border-bottom: 2px solid #000;
        transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .menu-btn:before{
        transform: translateY(-8px);
    }
        
    .menu-btn:after{
        transform: translateY(8px);
    }

    .close {
        z-index: 1;
        width: 100%;
        height: 100%;
        pointer-events: none;
        transition: background .6s;
    }

    #active:checked + .menu-btn span {
        transform: scaleX(0);
    }

    #active:checked + .menu-btn:before {
        transform: rotate(45deg);
        border-color: #000;
    }

    #active:checked + .menu-btn:after {
        transform: rotate(-45deg);
        border-color: #000;
    }

    .p2{
        position: absolute;
        font-size: 30px;
        font-weight: 500;
        color: #fff;
        left: 46%;
        top: 30%;
    }

    .wrapper ul{
        position: absolute;
        top: 80%;
        left: 50%;
        height: 90%;
        transform: translate(-50%, -50%);
        list-style: none;
        text-align: center;
    }

    .wrapper ul li{
        height: 10%;
        margin: 15px 0;
    }

    .wrapper ul li a{
        text-decoration: none;
        font-size: 30px;
        font-weight: 500;
        padding: 5px 30px;
        color: #fff;
        border-radius: 50px;
        position: absolute;
        line-height: 50px;
        margin: 5px 30px;
        opacity: 0;
        transition: all 0.3s ease;
        transition: transform .6s cubic-bezier(0.215, 0.61, 0.355, 1);
    }

    .wrapper ul li a:after{
        position: absolute;
        content: "";
        background: #fff;
        width: 100%;
        height: 100%;
        left: 0;
        top: 0;
        border-radius: 50px;
        transform: scaleY(0);
        z-index: -1;
        transition: transform 0.3s ease;
    }

    .wrapper ul li a:hover:after{
        transform: scaleY(1);
    }
        
    .wrapper ul li a:hover{
        color: #000;
    }

    input[type="checkbox"]{
        display: none;
    }
        
    #active:checked ~ .wrapper ul li a{
        opacity: 1;
    }

    .wrapper ul li a{
        transition: opacity 1.2s, transform 1.2s cubic-bezier(0.215, 0.61, 0.355, 1);
        transform: translateX(100px);
    }

    #active:checked ~ .wrapper ul li a{
        transform: none;
        transition-timing-function: ease, cubic-bezier(.1,1.3,.3,1);
        transition-delay: .6s;
        transform: translateX(-100px);
    }
</style>
<?php
    $tgl = date('Y-m-d');
    $nama = $_POST['name'];
    $asal = $_POST['asal'];
    $tujuan = $_POST['tujuan'];
    $telp = $_POST['telp'];
    $jarak = (float)$_POST['jarak'];
    $berat = (float)$_POST['berat']. " Kg";
    $email = $_POST['email'];

    $total = "Rp ". $jarak * 5000;

    $fp  = fopen("dataongkir.txt", "a+");
    fputs($fp,"$tgl|$nama|$asal|$tujuan|$telp|$jarak|$berat|$email|$total\n");    
    fclose($fp);
?>
<body>
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
</body>