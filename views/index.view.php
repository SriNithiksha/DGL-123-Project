<?php include 'partials/header.php'; ?>

<div class="hero">
    <div class="hero-content">
        <h1>Plan Your Dream Vacation</h1>
        <p>Discover amazing destinations and book your next holiday today!</p>
        <a href="#popular" class="cta-button">Get Started</a>
        <a href="#book" class="cta-button">Book Now</a>
    </div>
</div>

<!--TOUR SEARCH-->
<section id="book" class="container">
    <h1>Book Your Travel</h1>
    <form>
        <div class="form-group">
            <div class="input-group">
                <label for="destination">Destination</label>
                <input type="text" id="destination" name="destination" required>
            </div>

        </div>
        <div class="form-group">
            <div class="input-group">
                <label for="departureDate">Departure Date</label>
                <input type="date" id="departureDate" name="departureDate" required>
            </div>
            <div class="input-group">
                <label for="returnDate">Return Date</label>
                <input type="date" id="returnDate" name="returnDate" required>
            </div>

        </div>
        <div class="book-btn">
            <!--<input type="submit" value="Book Now">-->
            <a href="signin" class="booknow">Book Now</a>
        </div>
    </form>
</section>

<!-- POPULAR DESTINATIONS-->

<section id="popular" class="featured-destinations">
    <h1>POPULAR DESTINATIONS</h1>
    <p>With a world full of fascinating travel destinations, choosing the perfect vacation spot can present a
        challenge.</p>

    <div class="grid">
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination7.jpg" alt="India">
                <div class="card-content">
                    <h1 class="card-header">India</h1>
                    <h2 class="sub-header">Taj Mahal</h2>
                    <p class="card-text">
                        the Taj Mahal has become an enduring symbol of a wealthy empire that has survived through
                        the ages.
                    </p>

                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination6.jpg" alt="singapore">
                <div class="card-content">
                    <h1 class="card-header">Singapore</h1>
                    <h2 class="sub-header">Merlion statue</h2>
                    <p class="card-text">

                        Spouting water from its mouth, the Merlion statue stands at 8.6 metres and weighs 70
                        tonnes.
                    </p>

                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination3.jpg" alt="London">
                <div class="card-content">
                    <h1 class="card-header">London</h1>
                    <h2 class="sub-header">London Bridge</h2>
                    <p class="card-text">
                        London Bridge is the oldest river crossing in London, bringing river and road traffic
                        together.
                    </p>

                </div>
            </div>
        </div>


    </div>
    <a href="destination" class="cta-button">More Destination</a>
</section>

<!-- OUR PACKAGES-->

<section class="packages">
    <h1>OUR PACKAGES</h1>

    <div class="grid">
        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination1.jpg" alt="India">
                <div class="card-content">
                    <h1 class="card-header">India</h1>
                    <p class="card-text">
                        Hill stations in India come to your rescue welcoming you with incredible landscapes with a cold
                        climate all the way through.
                    </p>
                    <div class="price">$700/person<br>5Days&4Nights</div>
                    <div class="book-now"><a href="#" class="cta-button">Book Now</a></div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination3.jpg" alt="Australia">
                <div class="card-content">
                    <h1 class="card-header">Australia</h1>
                    <p class="card-text">

                        From the red sands of Uluru to the clear blue waters of the Great Barrier Reef and the
                        flora- and fauna-rich rainforests.
                    </p>
                    <div class="price">$700/person<br>5Days&4Nights</div>
                    <div class="book-now"><a href="#" class="cta-button">Book Now</a></div>
                </div>
            </div>
        </div>

        <div class="grid-item">
            <div class="card">
                <img class="card-img" src="assets/images/destination2.jpg" alt="China">
                <div class="card-content">
                    <h1 class="card-header">China</h1>
                    <p class="card-text">
                        China is a vast and diverse country with a rich cultural heritage and a wide range of
                        natural and historical attractions.
                    </p>
                    <div class="price">$700/person<br>5Days&4Nights</div>
                    <div class="book-now"><a href="#" class="cta-button">Book Now</a></div>
                </div>
            </div>
        </div>
    </div>
    <a href="packages" class="cta-button">More Packages</a>
</section>
<!--Social Media Integration-->
<div class="wrapper">
    <h2>Stay Connected with us</h2>
    <p>We encourage our users to share their favorite packages and experiences on their social profiles Also get to know
        mre about the deals and promotions.</p>
    <div class="icons">
        <ul>
            <li><a href="https://www.facebook.com/" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a></li>
            <li><a href="https://twitter.com/" target="_blank">
                    <i class="fab fa-twitter"></i>
                </a></li>
            <li><a href="https://www.instagram.com/" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a></li>
            <li><a href="https://www.youtube.com/yourchannel" target="_blank">
                    <i class="fab fa-youtube"></i>
                </a></li>
        </ul>
    </div>


</div>
<?php include 'partials/footer.php'; ?>