<section class="section-search">
	<div class="container">
		<form action="/" method="GET" class="section__form">
			<label for="s">Search for:</label>

			<input required type="text" id="s" name="s", value="<?php the_search_query(); ?>">

			<button type="submit">Search</button>
		</form>
	</div>
</section>
