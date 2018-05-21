<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href=https://stackpath.bootstrapcdn.com/bootswatch/4.1.0/cerulean/bootstrap.min.css>
  <title>Frontend</title>
</head>
<body>
<?php if (isset($_SESSION["loggedIn"])): ?>

<div class="jumbotron">
  <h1>Project API</h1>
</div>

<div class="container">
    <br>
    <h2>Sign Up</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
            <input type="submit" name="submit" value="Register" class="btn btn-primary">
    </form>
    <br><br>

    <h2>Login</h2>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input class="form-control" type="text" name="username">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input class="form-control" type="password" name="password">
        </div>
            <input type="submit" name="submit" value="Login" class="btn btn-success">
    </form>
</div>
<?php else : ?>
  <div class="jumbotron">
    <h1>Project API</h1>
  </div>
<div class="formContainer" id="newEntryContainer"></div> 
<div class="formContainer" id="editEntryContainer"></div> 
<div class="formContainer" id="newCommentContainer"></div> 

<div class="container">
  <form action="" method="get">
    <div class="form-group">
      <input type="button"  name="submit" value="Get All Users" class="btn btn-primary btn-sm"
      onclick="getAllUsers();" />
      <input type="button" name="submit" value="New Entry" class="btn btn-primary btn-sm"
      onclick="createNewEntryForm();" />
    </div>
    <div class="form-group">
      Get Entries: <input type="text" class="form-control" name="name" id="entryQuantity" placeholder=" Quantity" />
      <input type="button" name="submit" value="Get Entries" class="btn btn-primary btn-sm"
      onclick="getAllEntries();" />
    </div>
    <div class="form-group">
      Get Comments: <input type="text" class="form-control" name="name" id="commentQuantity" placeholder=" Quantity" />
      <input type="button" name="submit" value="Get Comments" class="btn btn-primary btn-sm"
      onclick="getAllComments();" />
    </div>
    <div class="form-group">
      Single User: <input type="text" class="form-control" name="name" id="searchUserID" placeholder=" ID" />
      <input type="button" name="submit" value="Get User" class="btn btn-primary btn-sm"
      onclick="getOneUser();" />
    </div>
    <div class="form-group">
      Single Entry: <input type="text" class="form-control" name="name" id="searchEntryID" placeholder=" ID" />
      <input type="button" name="submit" value="Get Entry" class="btn btn-primary btn-sm"
      onclick="getOneEntry();" />
    </div>
    <div class="form-group">
      Single Comment: <input type="text" class="form-control" name="name" id="searchCommentID" placeholder=" ID" />
      <input type="button" name="submit" value="Get Comment" class="btn btn-primary btn-sm"
      onclick="getOneComment();" />
    </div>
  </form>
</div>
<div class="wrapper">
    <div id="container1"></div>
    <div id="container2"></div>
    <div id="container3"></div>
    <div id="container4"></div>
    <div id="container5"></div>
    <div id="container6"></div>
    <div id="container7"></div>
    <div id="container8"></div>
  </div>
<?php endif; ?>
  
  <script src="scripts/main.js"></script>
</body>

</html>