<?php
include "../View/MainHeader.php"
?>
<div class="col-md-12 col-sm-12 col-12">
    <img src="../assets/img/local.png" alt="" class="img my-3">
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-sm-12 col-12">
            <div class="local">
                <h2 class="local-heading">LONDON</h2>
                <p class="local-address">180-182 Regent Street, London, W1B 5BT</p>
                <p class="local-content">Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                <button type="submit" class="btn-shared btn btn-primary">VIEW DETAILS</button>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-12">
            <div class="local">
                <h2 class="local-heading">NEW YORK</h2>
                <p class="local-address">109 Columbus Circle, New York, NY 10023</p>
                <p class="local-content">Nunc non posuere nisl. Etiam finibus vel dui nec lobortis. Aliquam egestas, sem quis condimentum venenatis, erat leo fermentum dolor, non sollicitudin massa mi eu nibh. Nullam vitae aliquam dui, non sodales nisl.</p>
                <button type="submit" class="btn-shared btn btn-primary">VIEW DETAILS</button>
            </div>
        </div>
        <div class="col-md-4 col-sm-12 col-12">
            <div class="local">
                <h2 class="local-heading">PARIS</h2>
                <p class="local-address">2133 Rue Saint-Honoré, 75001 Paris</p>
                <p class="local-content">Ut interdum fermentum blandit. Donec nec lacus egetit mi rhoncus eleifend. Curabitur laoreet nisl eget rutruml auctor. Vestibulum ante ipsum primis in faucibus orcip luctus et ultrices posuere cubilia curae cras ligula.</p>
                <button type="submit" class="btn-shared btn btn-primary">VIEW DETAILS</button>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid map">
    <div class="row align-items-center">
        <div class="col-md-8">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.040685327988!2d-0.14239142352976009!3d51.51246957181445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d5742d021f%3A0xa612bb1b1adfcb37!2s180-182%20Regent%20St.%2C%20London%20W1B%205TJ%2C%20V%C6%B0%C6%A1ng%20Qu%E1%BB%91c%20Anh!5e0!3m2!1svi!2s!4v1712322026946!5m2!1svi!2s" width="100%" height="580" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-4">
            <div class="map-info mx-4">
                <h2 class="local-heading">LONDON</h2>
                <p class="local-address">180-182 Regent Street, London, W1B 5BT</p>
                <p class="local-content">Lorem ipsum dolor sit amet, consectetur adipiscing esi elit. Vivamus at arcu sem. Vestibulum ornare eleifendit massa, nec tempor odio. Fusce posuere nunc iaculis ligula viverra iaculis. Aliquam erat volutpat.</p>
                <ul class="info">
                    <li class="info-content"><i class="fa-solid fa-location-dot"></i> 180-182 Regent Street, London, W1B 5BT</li>
                    <li class="info-content"><i class="fa-solid fa-phone"></i> 0123-456-789</li>
                    <li class="info-content"><i class="fa-solid fa-link"></i>www.yourwebsite.com</li>
                    <li class="info-content"><i class="fa-regular fa-envelope"></i> support@yourwebsite.com</li>
                    <li class="info-content"><i class="fa-regular fa-clock"></i> Monday-Friday: 9am to 6pm Saturday: 10am to 6pm Sunday: 10am to 2pm</li>
                </ul>
                <ul class="list-inline map-social" style="margin-bottom: 0;">
                    <li class="list-inline-item">
                        <a href="#"><i class="fa-brands fa-facebook-f facebook"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php
include "../View/MainFooter.php"
?>