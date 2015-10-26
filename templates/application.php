<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <!-- React -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-with-addons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.14.0/react-dom.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.8.23/browser.min.js"></script>

		<title>Slim | React</title>
    </head>
    <body>
        <?php echo $this->render('index.php'); ?>
        <script type="text/babel" src="assets/react/commentbox.js"></script>
        <script type="text/babel" src="assets/react/main.js"></script>
        

    </body>
</html>