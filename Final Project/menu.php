<!DOCTYPE html>
<html>
<head>
	<title>BnK Menu</title>

	<link rel="stylesheet" href="menu.css" type="text/css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
	<div class="main">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@300&family=Luxurious+Roman&display=swap" rel="stylesheet">
		<div class="navbar">
			<img src="images/logo.png" class="logo">
			<ul>
				<li> <a href="Boba ni Kyron.html">Home</a></li>
				
				<li> <a href="about.html">About</a></li>
				<li> <a href="contact.html">Contact</a></li>
			</ul>
		</div>


<div class="content" id="menuSection"> 
    <h1>- Menu -</h1>

		<section class="category">

			<div class="list-items">
				<h3>Popular Dishes</h3>
				<div class="card-list">
					



					<div class="card">
						<img src="images/Strawberry_Oreo-removebg-preview.png" alt="" >
						<div class="food-title">
							<h1>Strawberry Oreo</h1>
						</div>
						<div class="desc-food">
							<p>sadasdasdasdasdasdasds</p>
						</div>
						<div class="price">
							<span>10pesos</span><span><i class='bx bxs-plus-circle plus-icon' onclick="toggle({
            imageSrc: 'images/Winter Melon.png',
            title: '<br><br><br>Winter Melon',
            
        })"></i></span>
						</div>
					</div>









				</div>
					
			</div>

			<div class="single-menu" id="popup">

          <img id="popupImage" alt="">

          <div class="menu-content" id="popupContent">
			
		</section>




	</div>
	
<script>
	
	function toggle(imageDetails) {
    var popup = document.getElementById('popup');
    var popupImage = document.getElementById('popupImage');
    var popupContent = document.getElementById('popupContent');

    // Set the image and details in the popup
    popupImage.src = imageDetails.imageSrc;
    popupContent.innerHTML = `
        <h4>${imageDetails.title}</h4>
        
     
    `;

    popup.classList.toggle('active');
}




</script>
</body>
</html>