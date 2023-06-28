<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Portfolio</title>
    <?php include("includes/style.php"); ?>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <main>
        <section class="portfolio-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h1 class="name"><span>The Escape:</span> Mastermind</h1>
                        <p class="starting-date"><span>Start date:</span> 24. May 2023</p>
                        <p class="ending-date"><span>End date:</span> 3. July 2023</p>
                        <p class="customer"><span>Customer:</span> The Escape, Bahnhofstrasse 33, Zurich</p>

                        <p class="detail-discription">
                            It was a busy Saturday morning when suddenly one of the most
                            important games in the Escape Room failed. Debugging turned out to
                            be difficult to impossible because the electronics we had assembled
                            ourselves were a wild mess. We not only restructured the hardware
                            from scratch, but also rewrote the software for it and optimised it for
                            maintenance. So 800 lines of C code became 300 lines of objectoriented Python code. Since then, hundreds of satisfied customers
                            have already successfully played the mastermind game in The
                            Escape again.
                        </p>
                        <p class="customer-opinion">
                            <span>Customer's opinion:</span> It was finished very quickly and worked great in
                            the end. And at a low price.
                        </p>

                        <p class="tags">
                            <span class="tag">Elektronics</span>
                            <span class="tag">Python</span>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <img src="./assets/images/before.jpg" alt="before">
                        <span class="before">Before*</span>
                        <img src="./assets/images/after.jpg" alt="after">
                        <span class="after">After*</span>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html