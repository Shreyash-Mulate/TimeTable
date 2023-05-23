<?php
$token=$_GET['token'];
$p=$_GET['p'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reset Password Page</title>
    <link rel="stylesheet" href="CSS/signup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <div class="box">
            <span></span>
            <div class="content">
                <form method="post" action="../Backend/reset_password_code.php?p=<?php echo$p?>&token=<?php echo$token?>" id="form" onsubmit="return validate();">
                    <h2>Reset Password</h2>
                    <!-- <div class="inputBox">
                        <input type="number" placeholder="Enter your uid" name="name" id="username" required />
                    </div>
                    <div class="inputBox">
                        <input type="text" placeholder="Enter profession" id="profession" class="profession" name="profession">
                    </div>
                    <div class="inputBox">
                        <input type="email" placeholder="Enter your email" id="email" name="email" required />
                    </div> -->
                    <div class="inputBox">
                        <input type="password" class="password password1" name="password" id="password" placeholder=" New password"
                            required />
                        <button class="btn" type="button" onclick="showHide(); return false;">
                            <i class="fa-regular fa-eye icon"></i>
                        </button>
                    </div>
                    <div class="inputBox">
                        <input type="password" class="password password2" name="repassword" id="re-password"
                            placeholder="Confirm password" required />
                        <button class="btn btn2" type="button" onclick="showHide2(); return false;">
                            <i class="fa-regular fa-eye icon"></i>
                        </button>
                    </div>
                    <div class="inputBox">
                        <button class="btn submit" type="submit" name="submit">Update Password <i class="fa-solid fa-right-to-bracket icon"></i></button>
                    </div>
                    <!-- <p class="forget">Already have an account? <a style="cursor: pointer;" onclick="previous()">Go Back</a></p> -->

                </form>
            </div>
        </div>
    </div>


</body>
<script>
    function previous() {
        window.history.back()
    }
    function showHide() {
        const password = document.querySelector('.btn');
        const passwordInput1 = document.querySelector('.password');
        if (passwordInput1.type === "password") {
            passwordInput1.type = "text";
            password.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`;
            passwordInput1.style.width = `${270}px`;
            console.log("inside button event show");
        } else {
            passwordInput1.type = "password";
            console.log("inside button event hide");
            password.innerHTML = `<i class="fa-regular fa-eye icon"></i>`;
        }
    }
    function showHide2() {
        const password = document.querySelector('.btn2');
        const passwordInput2 = document.querySelector('.password2');
        if (passwordInput2.type === "password") {
            passwordInput2.type = "text";
            password.innerHTML = `<i class="fa-regular fa-eye-slash"></i>`;
            passwordInput2.style.width = `${270}px`;
            console.log("inside button event show");
        } else {
            passwordInput2.type = "password";
            console.log("inside button event hide");
            password.innerHTML = `<i class="fa-regular fa-eye icon"></i>`;
        }
    }
    function validate(){
        const pass1 = document.querySelector('.password');
        const pass2 = document.querySelector('.password2');
        if(pass1.value == pass2.value){
            return true;
        }else{
            alert("The confirmation password does not match with the given password");
            return false;
        }
    }
</script>

</html>