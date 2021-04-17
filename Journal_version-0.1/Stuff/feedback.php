 <?php include('feedbackserver.php') ?>
<html>

<div class="HEAD">

    <head>
        <meta charset="utf-8" />
        <title>FEEDBACK PAGE</title>
        <link rel="stylesheet" href="feedback.css">
        <script src="https://kit.fontawesome.com/7aea763505.js" crossorigin="anonymous"></script>
    </head>

</div>

<div class="HEADER">
   
    <h1>UFAZ FEEDBACK PAGE</h1>    

</div>

<div class="middle">

    <div class="subject">
    <label for="Subject">Subject:</label>
    <input type="text" id="subject" name="subject" placeholder="Subject">
    </div>
   
    <div class="date">
    <label for="Date">Date:</label>
    <input type="date" id="date" name="date" placeholder="Date">
    </div>

    <div class="problem">
    <label for="Problem">Problem:</label> <br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
    </div>

    <input type="submit" value="Submit">

</div>

</html>