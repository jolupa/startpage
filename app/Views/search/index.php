<div class="section">
	<p class="title has-text-centered">Busca qualsevol cosa!</p>
	<form action="search/wheretosearch" method="post" target="_blank">
		<div class="field is-grouped is-grouped-centered">
			<div class="field has-addons">
				<div class="control select">
					<select name="provider">
						<option value="google">Google</option>
						<option value="duck">Duck Duck Go!</option>
						<option value="imdb">IMDb</option>
						<option value="diccionaricat">Diccionari.cat</option>
					</select>
				</div>
				<div class="control">
					<input type="text" class="input" name="keyword">
				</div>
			</div>
			<div class="control"></div>
			<div class="control">
				<button class="button" name="search" value="true">Troba!</button>
			</div>
		</div>
	</form>
</div>