<style>
    *{
        box-sizing: border-box;
    }

    body{
        background: linear-gradient(270deg, rgba(247,248,243,1) 1%, rgba(0,66,124,1) 100%);
        margin-right: 172px;
        margin-left: 172Px;
    }

    .padmin{
        color: #205375;
        font-family: 'Helvetica','sans-serif';
        font-size: 2rem;
    }

    .p1{
        display: flex;
        align-items: center;
        justify-content: center;
        height: 100%;
        color: #205375;
        font-family: 'Helvetica','sans-serif';
        font-size: 2rem;
    }

    input[type=text]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    input[type=password]{
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    label {
        padding: 12px 12px 12px 0;
        display: inline-block;
    }

    input[type=submit] {
        margin-top: 12px;
        background-color: #205375;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        float: left;
        margin-left: 25%;
    }

    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        margin-left: 70px;
        margin-right: 70px;
        padding: 20px;
    }

    .foot{
        margin-top: -20px;
        color: #000;
    }

    .col1 {
        float: left;
        width: 25%;
        margin-top: 6px;
    }

    .col2 {
        float: left;
        width: 75%;
        margin-top: 6px;
    }

    .field:after {
        content: "";
        display: table;
        clear: both;
    }

    .spasi{
            margin-bottom: 12px;
    }

    .wrapper{
        position: fixed;
        top: 0;
        left: -100%;
        height: 100%;
        width: 100%;
        background: linear-gradient(90deg, rgba(255,255,255,1) 1%, rgba(0,59,111,1) 100%) ;
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
        border-bottom: 2px solid #fff;
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
        height: 1px;
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
<title>2100018361-Muhammad Faiz Akbar</title>
<br><br><br><br><br>
<body>
    <div class="container">
        <p class="padmin" align="center"><b>Login Admin</b></p>
            <form name="fform" method="POST" action="admin.php">
                <div class="field">
                    <div class="col1">
                        <label for="fusername">Username</label>
                    </div>
                    <div class="col2">
                        <input type="text" name="username" id="username" placeholder="Username" >
                    </div>
                </div>
                <div class="field">
                    <div class="col1">
                        <label for="fpassword">Password</label>
                    </div>
                    <div class="col2">
                        <input type="password" name="password" id="password" placeholder="Password" >
                    </div>
                </div>
                <div class="field">
                    <div class="spasi"></div>
                    <input type="submit" value="Login">
                </div>
            </form>
    </div>
    <div class="minus"></div>
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