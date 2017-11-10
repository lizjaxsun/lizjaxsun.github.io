<!DOCTYPE html>


<html lang="en-us">

<head>
    <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head-8.php'; ?>
</head>

<body>

    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/header-8.php'; ?>
    </header>

    <!-- site navigation use placeholder references -->
    <nav>
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/nav-8.php'; ?>
    </nav>

    <main>
        <h2>The City of Franklin</h2> <br> <br> <br>
        <figure>
            <img class="large" src="/cit230/assignments/lesson-6/images/city-large.jpg" alt="At dusk, city lights glimmer upon tall and seamless buildings with a colorful sky">
            <img class="medium" src="/cit230/assignments/lesson-6/images/city-medium.jpg" alt="At dusk, city lights glimmer upon tall and seamless buildings with a colorful sky">
            <img class="small" src="/cit230/assignments/lesson-6/images/city-small.jpg" alt="At dusk, city lights glimmer upon tall and seamless buildings with a colorful sky">
        </figure>
        <section>
            <h3>Weather Summary</h3>
            <div class="highlow">
                <p>High:</p>
                <p>Low:</p>
            </div>
            <div class="current">
                <p>Sunny</p>
                <picture class="contain">
                    <img class="large" src="/cit230/assignments/lesson-6/images/franklin-large.jpg" alt="">
                    <h2 class="large" id="large-txt"> Large </h2>
                    <img class="medium" src="/cit230/assignments/lesson-6/images/franklin-medium.jpg" alt="">
                    <h2 class="medium" id="medium-txt"> Medium </h2>
                    <img class="small" src="/cit230/assignments/lesson-6/images/franklin-small.jpg" alt="">
                    <h2 class="small" id="small-txt"> Small </h2>
                </picture>
            </div>
            <div class="conditions">
                <p>Precipitation:</p>
                <p>Wind Speed:</p>
            </div>
        </section>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <section class="windchill">
            <div class="form">
                Enter a the Windchill rate (with 3-digits) : <br> <input type="text" id="aNum" maxlength="3" size="1">
                <input type="submit" onclick="computeNum()" value="Run Calculation">
                <div id="output">Output Placeholder</div>
            </div>
        </section>

        <section class="forecast">
            <h3>10 Day Forecast</h3>
            <table>

                <thead>
                    <tr>
                        <th>Day 1</th>
                        <th>Day 2</th>
                        <th>Day 3</th>
                        <th>Day 4</th>
                        <th>Day 5</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>89&deg;F</td>
                        <td>87&deg;F</td>
                        <td>78&deg;F</td>
                        <td>75&deg;F</td>
                        <td>72&deg;F</td>
                    </tr>
                    <br>
                </tbody>
                <thead>
                    <tr>
                        <th>Day 6</th>
                        <th>Day 7</th>
                        <th>Day 8</th>
                        <th>Day 9</th>
                        <th>Day 10</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>72&deg;F</td>
                        <td>79&deg;F</td>
                        <td>83&deg;F</td>
                        <td>85&deg;F</td>
                        <td>89&deg;F</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <article id="franklin-article">
            <h3>Franklin Breaks Record</h3>
            <p class="town-article">
                <img src="images/#" alt="" width="" height=""> short article content placeholder
            </p>
        </article>

    </main>

    <footer class="container">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer-8.php'; ?>
    </footer>

    <script src="scripts/hamburger.js"></script>
    <script src="scripts/currentdate.js"></script>

</body>

</html>
