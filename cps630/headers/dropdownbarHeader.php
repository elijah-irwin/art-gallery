<div class="underbar">
	<div class="container">

		<!-- dropdown bar forms for artwork, artists, and museums -->
		<form action="displayArtwork.php" method="post" style="display:inline!important;">
			<select name="ArtworkId" onchange="this.form.submit()">
				<option value="" disabled selected>Art Works</option>
				<option value="0">The Starry Night</option>
				<option value="1">The Creation of Adam</option>
				<option value="2">The Kiss</option>
				<option value="3">Mona Lisa</option>
				<option value="4">The Scream</option>
				<option value="5">Girl with the Pearl Earring</option>
			</select>
		</form>

		<form action="displayArtist.php" method="post" style="display:inline!important;">
			<select name="ArtistId" onchange="this.form.submit()">
				<option value="" disabled selected>Artists</option>
				<option value="0">Vincent Van Gogh</option>
				<option value="1">Michelangelo</option>
				<option value="2">Gustav Klimt</option>
				<option value="3">Leonardo da Vinci</option>
				<option value="4">Edvard Munch</option>
				<option value="5">Johannes Vermeer</option>
			</select>
		</form>

		<form action="displayMuseum.php" method="post" style="display:inline!important;">
			<select name="MuseumId" onchange="this.form.submit()">
				<option value="" disabled selected>Museum</option>
				<option value="0">Musee du Louvre</option>
				<option value="1">Museum of Modern Art</option>
				<option value="2">Osterreichische Galerie Belvedere</option>
				<option value="3">Sistine Chapel</option>
				<option value="4">National Gallery</option>
				<option value="5">Mauritshuis</option>
			</select>
		</form>

		<form action="searchDataBase.php" method="post" class="searchBar">
			<input type="text" name="item" placeholder="Search...">
			<button type="submit">Search</button>
		</form>

	</div>
</div>