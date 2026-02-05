<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Under Maintenance</title>
  <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
  <link rel="icon" href="{{ asset('images/logo/app-logo.png') }}" type="image/png">
  
  <meta name="viewport" content="width=100vw, initial-scale=1.0">
  <!-- Visval font import -->
  <link href="https://fonts.cdnfonts.com/css/visval" rel="stylesheet">
  <!-- Font Awesome CDN for phone icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/home.css') }}">


  <script>
    // CARD HOVER TRACK CURSOR
    window.addEventListener('DOMContentLoaded', function () {
      const card = document.querySelector('.glass');
      let mouseX = 0, mouseY = 0;

      if (card) {
        card.addEventListener('mousemove', function(e) {
          const cardRect = card.getBoundingClientRect();
          // Position relative to center
          mouseX = e.clientX - cardRect.left - cardRect.width/2;
          mouseY = e.clientY - cardRect.top - cardRect.height/2;
          const rotateX = ((+1) * (mouseY / (cardRect.height/2))) * 10; // max 10 deg
          const rotateY = ((-1) * (mouseX / (cardRect.width/2))) * 10; // max 10 deg
          card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
          card.style.boxShadow = `${-rotateY*2}px ${rotateX*2 + 8}px 40px 0 rgba(84,25,110,0.13), 0 2px 18px 0 rgba(0,0,0,0.07)`;
        });
        card.addEventListener('mouseleave', function() {
          card.style.transform = 'rotateX(0deg) rotateY(0deg) scale(1)';
          card.style.boxShadow = '0 4px 32px 0 rgba(0,0,0,0.12)';
        });
      }
    });
  </script>
</head>
<body>
  <div class="glass">
    <!-- Logo center -->
    <div class="logo-maintenance">
        <img
        src="{{ asset('images/logo/app-logo.png') }}"
        alt="Maintenance Logo"
        loading="lazy"
    />

    </div>
    <br>
    <h1>UNDER MAINTENANCE</h1>
    <br>
    <p>Sorry, our website is currently undergoing scheduled maintenance.<br/>We’ll be back soon.</p>
    <a href="https://wa.me/6281234567890" class="btn-contact" target="_blank">
      <i class="fab fa-whatsapp"></i>
      Contact Us
    </a>
  </div>
</body>
</html>
