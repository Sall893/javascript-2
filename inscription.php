<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
    <form method="POST" action="traitement.php">
        <h2>Veuillez vous inscrire</h2>
        <div class="input-box">
        <input type="text" id="prenom et nom" name="prenom et nom" placeholder="Entrez votre prenom et nom..."required>
        </div>
        <div class="input-box">
        <input type="text" id="pseudo" name="pseudo" placeholder="Entrez votre pseudo..."required>
        </div>
        <div class="input-box">
        <input type="text" id="email" name="email" placeholder="Entrez votre email..."required>
        </div>
        <div class="input-box">
        <input type="password" id="pass" name="pass" placeholder="Entrez votre mot de pass..."required>
        </div>
        <input type="submit" class="btn"value="M'inscrire" name "ok">
    </form>
    </div>
    <style>
        input{
        margin-bottom:10px;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left:1px;
            margin-top:40px;
            border-radius:10px;
            background:#2c3e50;

        }
        .wrapper{
                width: 420px;
                background: #0082e6;
                color: #fff;
                border-radius: 10px;
                padding: 30px 40px;
       }
        .wrapper .input-box{
                position: relative;
                width: 100%;
                height: 50px;
                margin: 30px 0; 
       }
       .input-box input{
                 width: 100%;
                height: 100%;
                background: transparent;
                border: none;
                outline: none;
                border: 2px solid rgba(255, 255, 255, .2);
              border-radius: 40px;
        }
        .input-box input::placeholder{
                color: #fff;
                padding:15px;
  
  }
        .input-box i{
                position: absolute;
                right: 20px;
                top: 50%;
                transform: translate(-50%);
                font-size: 20px;
  }
  .wrapper .btn{
    width: 100%;
    height: 45px;
    background: #fff;
    border: none;
    outline: none;
    border-radius: 40px;
    box-shadow: 0 0 10px rgba(0, 0, 0, .1);
    cursor: pointer;
    font-size: 16px;
    color: #333;
    font-weight: 600;
  }
    </style>
</body>
</html>