<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Destribution Part</title>
    <script src="https://kit.fontawesome.com/3021f0f660.js" crossorigin="anonymous"></script>

<style>
    *{
    margin:0;
    padding: 0;
}
body{
    background-color: aliceblue;
}
.heading {
    width: 30%;
    color:black;
    background: aliceblue;;
    font-size: 22px;
    text-align: center;
    padding: 20px 0px;
    margin: 25px;
    margin-left: 525px;   
}
.container{
    width:30%;
    display: flex;
    justify-content: center;
    align-items: center;
   /* background: rgb(172, 172, 171);/*#f3e1e1;*/
    min-height: 70vh;
    margin-left: 520px;
    border-radius:15px ;
    margin-top: auto;
  
}
.wrapper{
    width: 350px;
    background: #fff;/*rgb(214, 100, 100);*/
    color: black;
    border-radius: 12px;
    padding: 40px 30px;
    box-shadow: 0px 0 5px 1px #b3aeae;
}
.wrapper h1{
    font-size: 36px;
    text-align: center;
}
.wrapper .input-box{
    position: relative;
    width: 100%;
    height: 50px;
    background:bisque;
    margin: 30px 0;
    box-shadow: 0px 0 5px 1px #b3aeae;
}
.input-box input{
    width:100%;
    height:100%;
    background: transparent;
    border: none;
    outline: none;
    border: 1px solid rgb(110, 110, 192);
    font-size: 16px;
   
}
.input-box input::placeholder{
    color: #0a0a0a;
}
.input-box i{
    position: absolute;
    right:20px;
    top:30%;
    transform: translate(-50%);
    font-size: 20px;
}
.wrapper .remember-forgot{
    display: flex;
    justify-content:space-between;
    font-size: 14.5px;
    margin: -15px 0 15px;
}
.remember-forgot label input{
    accent-color: #000000;
    margin-right: 3px;
}
.remember-forgot a{
    color: black;/* #fff;*/
    text-decoration: none;
} 
.remember-forgot a:hover{
    text-decoration: underline;
}
.wrapper .btn{
    width: 100%;
    height: 45px;
    background: rgb(105, 105, 237);
    border: none;
    outline: none;
    cursor: pointer;
    font-size: 16px;
    color: #fff;
    font-weight: 600;
    box-shadow: 0px 0 5px 1px #b3aeae;
    transition: .4s;
    
}
.wrapper .btn:hover{
    background: #fff;
    color: #000000;
}
.wrapper .register-link{
    font-size:20px ;
    text-align: center;
    margin: 50px 0 50px;
}
.register-link p a{
    color: black;/*#fff;*/
    text-decoration: none;
    font-weight: 600;
}
.register-link p a:hover{
    text-decoration: underline;
}




</style>
</head>
<body>
<div class="heading">
       <h1>Course Distribution</h1>
    </div>

 <div class="container">
    <div class="wrapper">
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember Me</label>
                <a href="#">Forgot password</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have an account?
                    <a href="#">Register</a>
                </p>

            </div>
        </div>
        </form>
   </div>
 </div>
</br>
</br>

</body>
</html>