

	</main>

	<!-- footer -->
	<footer id='footer' role="contentinfo">
		<p>
		<?php 
		if($user->isLoggedin()) {
			// if user is logged in, show a logout link
			echo "<a href='{$config->urls->admin}login/logout/'>Logout ($user->name)</a>";
		} else {
			// if user not logged in, show a login link
			// echo "<a href='{$config->urls->admin}'>Admin Login</a>";
		}
		?>
		</p>
	</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
</body>
</html>
