<!DOCTYPE html>

<html>
	
		<body>
		
		<h2>Alert</h2>
		
			<button onclick="meddelande()">Klicka här din jävel!</button>
			
			
			
			<script>
				function meddelande() {
					alert("jag är bäst");
				}
				
			</script>
		
		</body>

		<body>
		
		<img onmouseover="bigImg(this)" onmouseout="normalImg(this)" border="0" src="kim.jpg" alt="kim" width="32" height="32">
		
		<script>
			function bigImg(x) {
				x.style.height = "64px";
				x.style.width = "64px";
			}

			function normalImg(x) {
				x.style.height = "32px";
				x.style.width = "32px";
			}
		</script>
		
		
		</body>
		
		
		
</html>
