<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Menu list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
</head>
<body>

<!----------------------------------------- NAVBAR --------------------------------------------->

<nav class="navbar navbar-light bg-dark text-center">
  <a class="navbar-brand d-block mx-auto" href="#">
    <img src="brand.jpg" width="150" height="90" class="d-inline-block align-top " alt="" loading="lazy">
    
  </a>
</nav>
<div class="container-fluid body_section ">
  <div class="container pt-4">
    <div class="row " >
      <div class="col-6" style="border:3px solid orangered;">
      <form>
        <div class="form-group">
        <label for="menuItems">Example select</label>
        <select class="form-control bg-dark text-white" name="selectionMenu" id="menuItems">
        <option value="">Select Your Favourites</option>
        </select>
        </div>
      </form>

      </div>
      <div class="col-6"  style="border:3px solid orangered;">
      <form>
          <div class="form-group">
            <label for="shortname" style="color:orangered;font-weight:bolder;">Short Name</label>
            <input type="text" name="shortname" class="form-control bg-dark text-white" id="shortname" aria-describedby="emailHelp">
            
          </div>

          <div class="form-group">
            <label for="fullname" style="color:orangered;font-weight:bolder;">Full Name</label>
            <input type="text" name="fullname" class="form-control bg-dark text-white" id="fullname" aria-describedby="emailHelp">
            
          </div>

          <div class="form-group">
            <label for="description" style="color:orangered;font-weight:bolder;">Description</label>
            <textarea class="form-control bg-dark text-white" name="description" id="description" rows="3"></textarea>
           </div>

          <div class="form-group">
            <label for="priceSmall" style="color:orangered;font-weight:bolder;">Price Small</label>
            <input type="text" class="form-control bg-dark text-white" id="priceSmall" aria-describedby="emailHelp">
            
          </div>

          <div class="form-group">
            <label for="priceLarge" style="color:orangered;font-weight:bolder;">Price Large</label>
            <input type="text" class="form-control bg-dark text-white" name="priceLarge" id="priceLarge" aria-describedby="emailHelp">
            
          </div>
      </form>
      </div>
    </div>
  </div>

</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> 
<script src="script.js" defer></script>
</body>
</html>