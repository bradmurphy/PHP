<hr />
<h1>Submit a comment!</h1><br/>
<form action="index.php?page=post_comment" method="POST">
	<textarea name="comment" id="" cols="30" rows="10"></textarea><br/>

	<button>POST ME</button>

	<small>Your post will be logged as: <?php echo $_SESSION['first_name']; ?></small>
</form>