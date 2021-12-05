<html>
<head>
        <title>Search Page</title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Search</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Hammersmith+One">


</head>
<body>

<div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a href=<?php echo 'https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/feed/'.$username ?> class="nav-item nav-link active">Feed</a>
                    <a href="https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/message" class="nav-item nav-link">Post</a>
                    <a href=<?php echo 'https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/view/'.$username ?> class="nav-item nav-link active">My Messages</a>
                    <a href="https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/search" class="nav-item nav-link">Search</a>
                    <a href="https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/user/logout" class="nav-item nav-link">LogOut</a>
                </div>
            </div>
        </div>
    </nav>
</div>




	<div class='form1'>
	<form action="https://raptor.kent.ac.uk/proj/comp5390/microblog/ossm2/index.php/Search/dosearch/qstring" method="get">
        <label for="search" class='standard'>Search:</label><br>
	<input type="search" id="search" name="search"><br>
	<input type="submit" value="Search" class="fas fa-search">
	</form>
	</div>

</body>

<style>

.form1 {
  border-radius: 25px;
  border: 2px solid #2b7a78;
  background: #2b7a78;
  padding: 10px;
  position: absolute;
  margin-top: 50px;

}

.standard {
	color: white;
}

a {
	color: #17252a;
	font-family: "Hammersmith One", sans-serif;
	font-size: 18x;
	font-weight: bold;
	padding-right: 10px;
    text-decoration: none;
}
body {
	background: #3aafa9;
}
</style>

</html>
