<!DOCTYPE html>
<html>

<head>
    <title>Animated Login Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css?cache=<?= time() ?>">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body id="body">


    <script>
        setTimeout(() => {
            box.style = `display:none;`
        }, 3000);
    </script>

    <?php
    session_start();
    include 'ayar.php';
    include 'ukas.php';
    ?>


    <?php
    ukas_giris("ayar.php", "profil.php", "<div class='uyarı glassmorphism' id='box'><p>Lütfen boş bırakmayınız!</p></div>", "<div class='uyarı glassmorphism' id='box'><p>Kullanıcı adı veya şifre hatalı!</p></div>");
    // Ayar dosyası, Giriş yapıldıktan sonra yönlendirilecek yer, Uyarı mesajı, Hata mesajı
    ?>


    <img class="wave" src="https://raw.githubusercontent.com/sefyudem/Responsive-Login-Form/master/img/wave.png">
    <svg class="wave1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#32be8f" fill-opacity="1" d="M0,256L34.3,240C68.6,224,137,192,206,170.7C274.3,149,343,139,411,165.3C480,192,549,256,617,277.3C685.7,299,754,277,823,250.7C891.4,224,960,192,1029,154.7C1097.1,117,1166,75,1234,80C1302.9,85,1371,139,1406,165.3L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path>
    </svg>
    <div class="container">
        <div class="img">
            <img src="/img/a.svg">
        </div>
        <div class="login-content">
            <form action="" method="POST">
                <img id="male" class="male" src="/img/male.png">
                <h2 class="title">Oturum Aç</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Kullanıcı Adı</h5>
                        <input type="text" name="kadi" class="input" minlength="6">
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Şifre</h5>
                        <input type="password" name="sifre" class="input" minlength="8">
                    </div>
                </div>
                <a href="forgot.php">Şifreni Mi Unuttun?</a>
                <input type="submit" class="btn" name="giris" value="Giriş Yap" onclick="active()">
                <p>Hesabın yok mu?<a class="uyeol" href="register.php">Üye Ol</a></p>
            </form>
        </div>
    </div>
    <script>
        const inputs = document.querySelectorAll(".input");


        function addcl() {
            let parent = this.parentNode.parentNode;
            parent.classList.add("focus");
        }

        function remcl() {
            let parent = this.parentNode.parentNode;
            if (this.value == "") {
                parent.classList.remove("focus");
            }
        }


        inputs.forEach(input => {
            input.addEventListener("focus", addcl);
            input.addEventListener("blur", remcl);
        });

        //Source :- https://github.com/sefyudem/Responsive-Login-Form/blob/master/img/avatar.svg
    </script>


</body>

</html>