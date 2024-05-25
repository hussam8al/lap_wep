<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }szzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
$_SESSION['name'];
$_SESSION['username'];
?>
<!doctype html>
<html lang="en">

<head>
  <title>Welcome Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <style>
    .container {
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 15px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container span {
        background-color: gold;
        color: white;
        padding: 15px;
        margin: 10pxpx;
        border-radius: 8px;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
    }
    .container p {
        margin: 20px;
    }
    .button-group {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px; /* مسافة بين الأزرار */
    }
    .button-group .btn {
        width: 150px;
        background-color: gold;
        
        color: white;
        font-weight: 500;
        letter-spacing: 5px;
        text-transform: uppercase;
        border-radius: 20px;
        transition: all 0.5s ease; /* تحسين تأثير التحويل */
    }
    .button-group .btn:hover {
        width: 200px;
        background-color: darkorange;
        color: black;
    }
    .cntainer {

max-width: 1200px;
margin: 0 auto;
padding: 0 20px; 

}


/* يحدد خلفية الرائس ولون النص والتباعد الدخلي */
header {
background-color: #333;
color: #fff;
padding: 10px 0;
}

header h1 {
font-size: 36px;
margin-bottom: 10px;
}
/* يخفي النقاط التي تظهر بجانب عناصر القائمه */
nav ul {
list-style-type: none;
}
/* يحدد عرض القائمه والتباعد بينها*/

nav ul li {
display: inline;
margin-left: 20px;
}

nav ul li a {
color: #fff;
text-decoration: none;
font-size: 18px;
}

header {
background-color: #333;
color: white;
padding: 1em;
text-align: center;
}
  </style>
</head>

<body>
<header>
        <div class="cntainer">
            <header>
                <h1>متجر الاجهزة الاكترونيه </h1>
                <nav>
                    <ul>
                      
                        <li><a href="r.html">حول المتجر</a></li>
                        <li><a href="m.html">اتصل بنا</a></li>
                                   
                     </ul>
                      
    </div>
                    </ul>
                </nav>
            </header>
        
        </div>
    </header>

  <div class="container">
    <h3>Welcome,  <span><?=$_SESSION['name'];?></span></h3>
    <p>Your Email id is : <h6><?=$_SESSION['username'];?></h6></p>
    <div class="button-group">
      <!-- رابط التصفح الجديد -->
      <a href="hussam.html" class="btn"> تصفح</a>
      <!-- زر LOGOUT -->
      <a href="index.php" class="btn">تسجيل خروج </a>
    </div>
  </div>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>