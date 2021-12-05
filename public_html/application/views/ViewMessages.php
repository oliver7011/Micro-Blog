

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1"
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
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




<p><?php echo $output;?></p>

</body>



<style>

a:link {
  text-decoration: none;
}

a {
	color: #17252a;
	font-family: "Hammersmith One", sans-serif;
	font-size: 18x;
	font-weight: bold;
	padding-right: 10px;
}
.message {
	padding-top: 20px;
}

.line {
  border-radius: 25px;
  border: 2px solid #2b7a78;
  color: #feffff;
  padding: 10px;
  margin-top: 20px;
  background: #2b7a78;

}

body {
	background: #3aafa9;


}


.name {
	font-family: "Hammersmith One", sans-serif;
	color: red;
	font-size: 18px;
	size
}
</style>

<script>
const colours = ['#af563a','#713aaf','#af903a','#af563a'];

function getColor(){
  	return colours.pop();
}



function colors() {

const names = [];

var elements = document.getElementsByClassName('name');
for(var i=0;i<elements.length;i++) {
	var name = elements[i].textContent;
	console.log(name);
	for (var j=0;j<names.length;j++) {
		if (names[j][0] == name) {
			elements[i].style.color = names[j][1];
			break;
		}
	}
	console.log(elements[i].style.color == 'red');
	if (elements[i].style.color == 'red' || elements[i].style.color == '') {
		var randomColor = getColor();
		elements[i].style.color = randomColor;
		names.push([name,randomColor]);
	}

}
}

window.onload = colors();
</script>


</html>
