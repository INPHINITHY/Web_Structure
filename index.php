<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('includes/links.php');?>
</head>
<body class="choose from the body.css">
  <header>
    <?php include('includes/nav.php');?>
  </header>
<main>
page deatils go here
<div class="slideshow-container">
  <!-- Full-width slides -->
  <div class="slides fade active">
    <img src="https://via.placeholder.com/800x450/ff7f7f/333333?text=Slide+1" alt="Slide 1" class="slide-image">
  </div>

  <div class="slides fade">
    <img src="https://via.placeholder.com/800x450/7fff7f/333333?text=Slide+2" alt="Slide 2" class="slide-image">
  </div>

  <div class="slides fade">
    <img src="https://via.placeholder.com/800x450/7f7fff/333333?text=Slide+3" alt="Slide 3" class="slide-image">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Dots for each slide -->
  <div class="dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
  </div>
</div>

</main>
<footer class="footer">
    <?php include('includes/footer.php'); ?>
</footer>
</body>
</html>