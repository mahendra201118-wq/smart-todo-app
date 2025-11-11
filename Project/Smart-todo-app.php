<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Open project</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            text-align: center;
            padding-top: 100px;
        }
        a {
            display: inline-block;
            background-color: #0078D7;
            color: white;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 8px;
            font-size: 18px;
        }
        a:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
    <h2>Welcome To The Project Todo App</h2>
    <p>Click below Link to open Project:</p>

    <?php
        // Node.js project URL
        $nodeUrl = "http://localhost:3000";
        echo "<a href='$nodeUrl' target='_blank'>Open Project</a>";
    ?>
</body>
</html>
