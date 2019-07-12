<?php
include 'header.php';
// voegd de header toe
?>

<!--bootstrap carousel -->
    <div class="container-fluid" id="carousel">
        <div id="carouselExampleControls" class="carousel slide w-75 mx-auto" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="images/img33.jpeg" class="d-block w-100" alt="img1">
            </div>
            <div class="carousel-item">
            <img src="images/img22.jpg" class="d-block w-100" alt="img2">
            </div>
            <div class="carousel-item">
            <img src="images/img11.jpg" class="d-block w-100" alt="img3">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        </div>
    </div>
<!--bootstrap containers -->
<div class="container-fluid text-center" id="text2">
  <h1>Wie zijn wij?</h1>
  <p>Met ongeveer 600 car washes in heel nederland zijn wij de grootste auto was keten in de buurt!</p>
</div>
<br>
    <div class="container text-center" id="text1">
        <h1>Onze geschiedenis.</h1>
        <p> 'Wij ZULLEN alles schoon krijgen' zei onze eigenaar Jan Willem Pieters ooit. tot onze verbazing lukte het hem ook nog.</p>
        <p>Onze carwashes zijn de beste in de buurt en met onze steun kunt u ook uw auto zo schoon als mogelijk krijgen.</p>
        <div class="row">
    </div>
</div>
<br>
<!-- geef id's mee aangezien bootstrap gebruik maakt van classes -->
<br>
<div class="container-fluid text-center"id="text2">
    <h1>Openings tijden:</h1>
</div>

<div class="container text-center" >
<br>
<table class="table table-dark" id="Table">
  <thead>
    <tr>
      <th scope="col">Dag</th>
      <th scope="col">Opent</th>
      <th scope="col">Sluit</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Maandag</td>
      <td>8:00</td>
      <td>20:00</td>
    </tr>
    <tr>
      <td>Dinsdag</td>
      <td>10:00</td>
      <td>20:00</td>
    </tr>
    <tr>
      <td>Woensdag</td>
      <td>8:00</td>
      <td>20:00</td>
    </tr>
    <tr>
      <td>Donderdag</td>
      <td>8:00</td>
      <td>20:00</td>
    </tr>
    <tr>
      <td>Vrijdag</td>
      <td>9:00</td>
      <td>22:00</td>
    </tr>
    <tr>
      <td>Zaterdag</td>
      <td>8:00</td>
      <td>22:00</td>
    </tr>
    <tr>
      <td>Zondag</td>
      <td>8:00</td>
      <td>22:00</td>
    </tr>
  </tbody>
</table>
</div>
<br>

<?php
include 'footer.php';
// voegd de footer toe
?>