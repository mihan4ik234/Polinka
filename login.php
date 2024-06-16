<html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Вход в административную панель НГРТ</title>
  </head>
  <style>body {
    font-family: Jost;
    margin: 0;
    padding: 0;
  }
  
  p {
      margin-top: 70px;
    text-align: center;
    color: #0056b3;
    font-size: 25px;
  }
  
  .container {
    width: 300px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  input[type="text"],
  input[type="password"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  button {
    width: 100%;
    padding: 10px;
    background: #0056b3;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  
  button:hover {
    background: #0056b3;
  }
  
  .error {
    color: red;
    text-align: center;
  }

  img{
    width: 200px;
   
  }

  .imds{
    display: flex;
            justify-content: center;
            align-items: center;
            height: 100px; 
            
  }
  </style>
    <body>
        <p>Вход в административную панель НГРТ</p>
        <div class="imds"><img src="images/logo.png"></div>
        <form class="container" action="admin/admin.php" method="POST">
            <div class="formgr">
                <input type="text" placeholder="Введите логин" required>
            </div>
            <div class="formgr">
                <input type="password" placeholder="Введите пароль" required>
            </div>
            <button type="submit" class="btn btn-primary">Войти</button>
        </form>
    </body>
</html>