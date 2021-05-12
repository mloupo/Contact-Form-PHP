<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- FONT STYLES -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <!-- STYLES -->
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="Doctor Draxter">
    <title>Contact Form</title>
</head>
<body>
    <form action="send.php">
        <h2>Contact Form</h2>
        <div class="group">
            <input type="text" name="name" autocomplete="off" required><span class="bar"></span>
            <label for="name">Name</label> 
        </div>
        <div class="group">
            <input type="text" name="email" autocomplete="off" required><span class="bar"></span>
            <label for="email">Email</label>
        </div> 
        <div class="group">
            <textarea name="message" required></textarea><span class="bar barTextArea"></span>
            <label for="message">Message</label>
        </div>
        <div class="btn">
            <button type="submit">Send</button>  
        </div>
    </form>
    <a href="https://www.behance.net/doctordraxter" class="water_mark" target="_blank">By Doctor Draxter</a>
    <?php
    include
    <?
</body>
</html>