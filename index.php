<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Project</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Contact Us</h1>
    <form method="post" action="process.php">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        <label for="message">Message:</label>
        <textarea name="message" rows="4" required></textarea><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>