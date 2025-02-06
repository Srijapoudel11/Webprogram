<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $title;?>
    </title>
    <style>

header {
    background-color: aqua;
    color: blue;
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1400px;
    padding: 20px;
}

header .logo h1 {
    font-size: 2.5rem;
    margin-left: 20px;
}

header .navigation ul {
    list-style: none;
    display: flex;
    margin-right: 20px;
}

header .navigation ul li {
    margin-left: 15px;
}

header .navigation ul li a {
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    background-color: #0056e0;
    border-radius: 4px;
    transition: background-color 0.3s;
}

header .navigation ul li a:hover {
    background-color: #003bb3;
}
footer {
    background-color:black;
    color: white;
    display: flex;
    justify-content: space-around;
    padding: 20px;
    width: 100%;
    max-width: 1400px;
}

.footer-area {
    font-size: 1rem;
}

.footer-area:hover {
    color: #ccc;
}
footer a{
    color: white;
}
footer a:hover{
    color: blue;
}
    </style>
</head>
<>
    <header>
    <nav class="navigation">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>