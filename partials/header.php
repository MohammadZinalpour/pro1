<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>قالب Tempo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/stle.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            direction: rtl;
            text-align: right;
        }

        header {
            background: #333;
            color: #fff;
            padding: 10px 0;
        }

        header .logo {
            font-size: 30px;
            margin-right: 10px;
        }

        header .nav-menu {
            margin-left: auto;
        }

        header .nav-menu ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        header .nav-menu ul li {
            margin-left: 20px;
        }

        header .nav-menu ul li a {
            color: #fff;
            text-decoration: none;
            padding: 5px 10px;
            transition: background 0.3s;
        }

        header .nav-menu ul li a:hover,
        header .nav-menu ul li.active a {
            background: #555;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">
            <h1 class="logo mr-auto"><a href="index.php">Tempo</a></h1>
            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">خانه</a></li>
                    <li><a href="#about">درباره</a></li>
                    <li><a href="#services">خدمات</a></li>
                    <li><a href="#portfolio">پورتفولیو</a></li>
                    <li><a href="#team">تیم</a></li>
                    <li><a href="#contact">تماس با ما</a></li>
                    <li><a href="#survey">نظرسنجی</a></li>
                </ul>
            </nav>
        </div>
    </header>