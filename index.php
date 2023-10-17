<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday Booking</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <header>
        <nav>
            <div class="logo">Bon-Voyage</div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="destination.php">Destinations</a></li>
                <li><a href="packages.php">Packages</a></li>
                <li><a href="gallery.php">Gallery</a></li>
            </ul>
        </nav>
    </header>

    <div class="hero">
        <div class="hero-content">
            <h1>Plan Your Dream Vacation</h1>
            <p>Discover amazing destinations and book your next holiday today!</p>
            <a href="getstarted.php" class="cta-button">Get Started</a>
        </div>
    </div>

    <!--TOUR SEARCH-->
    <div class="container">
        <h1>Book Your Travel</h1>
        <form>
            <div class="form-group">
                <div class="input-group">
                    <label for="destination">Destination:</label>
                    <input type="text" id="destination" name="destination" required>
                </div>
                <div class="input-group">
                    <label for="passengers">Number of Passengers:</label>
                    <select id="passengers" name="passengers">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

            </div>
            <div class="form-group">
                <div class="input-group">
                    <label for="departureDate">Departure Date:</label>
                    <input type="date" id="departureDate" name="departureDate" required>
                </div>
                <div class="input-group">
                    <label for="returnDate">Return Date:</label>
                    <input type="date" id="returnDate" name="returnDate" required>
                </div>

            </div>
            <div class="book-btn">
                <input type="submit" value="Book Now">
            </div>
        </form>
    </div>

    <!-- POPULAR DESTINATIONS-->

    <section class="featured-destinations">
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
        <a href="destination.php" class="cta-button">More Destination</a>
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
                            Hill stations in India come to your rescue welcoming you with incredible landscapes with a cold climate all the way through.
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
        <a href="packages.php" class="cta-button">More Packages</a>
    </section>
<!--FOOTER-CONTACT-->

    <!-- FOOTER -->

    <footer>
        <p>&copy; 2023 Bon-Voyage</p>
    </footer>
</body>

</html>