<?php
require_once("config.php");
//get data
$sql = "SELECT * FROM tasks";
$run = mysqli_query($conn, $sql) or die(mysqli_error($link));
if (!$run) {
    echo "Query not executed!";
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
</head>

<body class="container">
    <div class="card m-4 p-4 border-0">
        <div class="row">
            <div class="col-md-10">
                <h1 class="display-5 text-center">Tasks Added</h1>
            </div>
            <div class="col-md-2 text-end">
                <a href="add_products.php" class="btn btn-dark mt-3">+ Add More Tasks</a>
            </div>
        </div>

        <?php if (mysqli_num_rows($run) > 0) : ?>

            <?php while ($row = mysqli_fetch_array($run)) : ?>
                <div class="card mb-4 mt-2">
                    <div class="row mb-4 p-3 fs-5">
                        <div class="col-md-8 ">
                           <ul><li> <?php echo $row['task_title']; ?></li></ul>
                        </div>
                        <div class="col-md-2">
                           <img src="uploads/<?php echo $row['attachment'];?>" alt="" class="img-thumbnail">
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else : ?>
            <div class="card-body text-center mt-5">
                <img src="assets/empty.svg" height="100px">
                <br><br>
                <h3 class="display-6">Oops! Nothing is here.</h3>
                <p class="lead">Currently no products here to display.</p>
                <a href="add_products.php" class="btn btn-info">Add Product</a>
            </div>
        <?php endif; ?>
    </div>
</body>

</html>