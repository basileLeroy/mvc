    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
        <link rel="stylesheet" href="../style/style.css"/>
        <link rel="icon" type="image/png" href="../style/b.png"/>
        <title>Becode2U</title>
    </head>


<body>

<header>
<?php
require 'includes/coach_header.php';
?>
</header>

<?php require 'includes/vertical_nav.php';?>
<div class="container">
                <div class="welcome-msg">
                    <h3>Welcome,<!-- --><?/*= $_GET["user"] */?> </h3>

                    <?php //TODO: to display welcome msg?>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Culpa, dolorem!

                </div>
                <div class="exercise-list">
                    <?php //TODO: for the shortlist of exercises?>
                    <h3>Exercises</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <a href="">More info<i class="fas fa-plus"></i></a>
                    <button type="submit"><a href="create_challenge.php">Create New Challenge</a></button>

                </div>

                <div class="watch">
                    <?php //TODO: replace the dummy text for the calendar?>
                    <h3>Watch Schedule</h3>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quisquam iusto quam sapiente velit quo non pariatur, eligendi assumenda totam itaque.</div>

                <div class="repo">
                <?php //TODO: replace the dummy text for the repository link?>
                    <h3>Repository</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <a href="">More info<i class="fas fa-plus"></i></a>
                                </div>

                <div class="student-list">
                    <?php //TODO: to display the student list of the same class ?>
                    <h3>Students</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam, sint!</p>
                    <a href="">More info<i class="fas fa-plus"></i></a>
                </div>
</div>

<footer>
<?php 
require 'includes/footer.php';
?>
</footer>



</body>
</html>
