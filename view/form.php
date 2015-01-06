<?php
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Create Blog post</h1>   <!-- form header -->
<!-- Creating Blog post form -->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">    <!-- specifies form information type and where to send the form information -->
    <div>
        <label for="title">Title: </label>
        <input type="text" name="title"/>   <!-- input type text allows for one line of text -->
    </div>
    
    <div>
        <label for="post">Post: </label>
        <textarea name="post"></textarea>   <!-- textarea allows multiple lines of text -->
    </div>
    
    <div>
        <button type="submit">Submit</button>   <!-- Creates a submit button for the form -->
    </div>
</form>