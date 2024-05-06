<?php
session_start(); // Make sure to start the session at the beginning of your PHP file

// Assuming you have stored the user's name in a session variable called 'user_name'
$brukernavn = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="icon" type="image/x-icon" href="images/pcimg.jpg">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kjøp - Data komponenter</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,600;1,600&display=swap"
    rel="stylesheet">
</head>

<body>
  <div class="topnav">
    <a href="Home.php" class="borderstyletag">Home</a>
    <a href="prossesor.php" class="borderstyletag">komponentene</a>
    <a href="skole.php" class="borderstyletag">Skole</a>
    <a href="begreper.php" class="borderstyletag">Begreper</a>
    <a href="FAQ.html" class="borderstyletag">FAQ</a>
    <a href="loginforphp.php" class="borderstyletag">Log inn</a>
    <a href="registration.php" class="borderstyletag">Registrer</a>
    <a href="Items.php" class="borderstyletag">Kjøp!</a>
    <a href="saker.php" class="borderstyletag">Legg Ut Sak</a>
    <?php
    // Check if the user is logged in
    if (isset($_SESSION['username'])) {
      // If logged in, display the logout link
      echo '<a href="logout.php" class="thisisatest">Logout</a>';
    } else {
      // If not logged in, display a message or redirect to the login page
      echo 'You are not logged in.';
    }
    ?>
  </div>
  <div class="WelcomeuserContainer">
  </div>
  </div>
  <div class="logoforwebSide">
    <p class="welcomeUser">Welcome,
      <?php echo $brukernavn ?>
    </p>
    <img src="images/hacker.png" class="logoWeb">
  </div>

  <div class="shoppingcartcentercontainer">
    <div class="shoppingcartcontainer">
      <div class="cartcentertext">
        <img src="images/shopping.png" class="shoppingcartIcon">
        <h2 class="mycarttext" class="mycartcontainer">My cart</h2>
      </div>
      <div id="cartItemsContainer" class="cartItemsContainer">
      </div>
      <div class="checkoutbtn">
        <a href="checkout.php" class="checkoutbtnStyle">Check Out</a>
      </div>
      <div id="totalPriceContainer" class="totalPriceContainer">
        Total: <span id="totalPrice">0KR</span>
      </div>
    </div>
  </div>

  <script>
    // Function to handle the "KJØP" button click
    function addToCart(itemName, itemPrice, imageUrl) {
      // Create a new cart item element
      var cartItem = document.createElement('div');
      cartItem.classList.add('cartItem');

      // Set inner HTML for the cart item
      cartItem.innerHTML = `
      <div class="cartItemDetails">
      <img src="${imageUrl}" class="cartItemImage" style="width: 100px; height: 100px;"> <!-- Add inline CSS styling for image size -->
      <p class="cartItemName">${itemName}</p>
      <p class="cartItemPrice">${itemPrice}KR</p>
    </div>
      `;

      // Append the cart item to the cart container
      document.getElementById('cartItemsContainer').appendChild(cartItem);

      // Update total price
      var totalPriceElement = document.getElementById('totalPrice');
      var totalPrice = parseInt(totalPriceElement.innerText.replace('KR', ''));
      totalPrice += parseInt(itemPrice);
      totalPriceElement.innerText = totalPrice + 'KR';
    }
  </script>

  <!-- HTML content for items -->
  <h2 class="velkommenHeadline">Kjøp komponenter!</h2>
  <div class="centerforitemstest">
    <div class="Containerofcontainers">
      <div class="Containerofitems">
        <div class="quicktest">
          <h2 class="Itemnameshop">intel i9-14900K</h2>
          <div>
            <img src="https://www.komplett.no/img/p/300/1251457.jpg" class="imagesizeofitems">
          </div>
          <div class="Priceofitem">
            <h2 class="pricetagstyle">5000KR</h2>
          </div>
          <button class="purchasebtnshop"
            onclick="addToCart('Intel i9-14900K', '5000', 'https://www.komplett.no/img/p/300/1251457.jpg')">KJØP</button>
        </div>
        <div class="itemnameshopTwo">
          <h2 class="Itemnameshop">NVIDIA GPU</h2>
          <div>
            <img src="https://cdn-yams.tek.no/api/v1/products/images/geforce-rtx-4090?rule=w4000_auto"
              class="imagesizeofitems">
          </div>
          <div class="Priceofitem">
            <h2 class="pricetagstyle">8999KR</h2>
          </div>
          <button class="purchasebtnshop"
            onclick="addToCart('NVIDIA GPU', '8999', 'https://cdn-yams.tek.no/api/v1/products/images/geforce-rtx-4090?rule=w4000_auto')">KJØP</button>
        </div>
        <div class="itemnameshopThree">
          <h2 class="Itemnameshop">CORSAIR RAM - 32GB RAM</h2>
          <div>
            <img src="https://www.komplettbedrift.no/img/p/1200/1246833.jpg" class="imagesizeofitems">
          </div>
          <div class="Priceofitem">
            <h2 class="pricetagstyle">1500KR</h2>
          </div>
          <button class="purchasebtnshop"
            onclick="addToCart('CORSAIR RAM - 32GB RAM', '1500', 'https://www.tradeinn.com/f/13878/138781581/corsair-ram-minne-vengeance-rgb-pro-32gb-2x16gb-ddr4-3200mhz.jpg')">KJØP</button>
        </div>
      </div>
    </div>
  </div>

</body>

</html>