<?php 

session_start();
$user = $_SESSION['user'];

if (isset($_POST['logout'])) {
    session_destroy();
    header("location: index.php");
}

?>

<?php 

include_once 'connect3.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/home.css">
    <link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Karla|Nunito" rel="stylesheet">
    <title>Don't Tell</title>
</head>
<?php 
    if (isset($_POST['submit'])) {
        $_SESSION['venue'] = $_POST['venue'];
        $_SESSION['checkindate'] = $_POST['checkindate'];
        $_SESSION['checkoutdate'] = $_POST['checkoutdate'];
        header("Location: confirm.php");
    } 
?>
<body>

    <nav>
        <ul>
            <li><a href="/index.php"><button type="submit">Login</button></a></li>
            <li><a href="/register.php"><button type="submit">Register</button></a></li>
        </ul>
    </nav>

<!-- main container////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<div class="container">

<!-- implimented subcontainer for responsive grid//////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

    <div class="sub-container">
        
    <!-- quadrant 1 containing profile information/////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="grid" id="sq1">

            <form action="home.php" method="post">
                <?php echo "You are signed in as ~ ". $user = $_SESSION['user'];?><br><br>
                <button class="logout" type="submit" method="post" name="logout">Logout</button>
            </form>

        </div>

    <!-- quadrant two containing microgrid selector for the 4 hotels///////////////////////////////////////////////////////////////////////////////////////////////// -->

        <div class="grid" id="sq2">

        <form action="home.php" method="post">

            <input type="radio" name="venue" value="Rose Gold Hotel" id="hotel1" required>
            <label for="hotel1">

                <div class="mini" id="mini1" name="hotel1">

                    <div class="smallgrid">
                        <div id="block1"><img class="img" src="img/hotel1.jpg" alt="hotel1"></div>
                        <div id="text">Bur Dubai rooms have a modern interior<br> decorated in warm colours.<br> Accommodations have air conditioning,<br> and include satellite TV.<br>
                        </div>
                        <div id="block3"><span style="color: rgb(109, 59, 245)">Rose Gold Hotel</span><br><br><br><br><span style="color: rgb(247, 61, 61)">R1250</span> per night</div>
                    </div>

                </div>

            </label>


            <input type="radio" name="venue" value="9th Cloud Hotel" id="hotel2" required>
            <label for="hotel2">

                <div class="mini" id="mini2" name="hotel2">

                    <div class="smallgrid">
                        <div id="block1"><img class="img" src="img/hotel2.jpg" alt="hotel2"></div>
                        <div id="text"> Ultra-modern & Luxury offers. A fitness room,<br> as well as air-conditioned accommodation<br> with free WiFi in Dubai.<br> 2.3 km from City Walk Mall.
                        </div>
                        <div id="block3"><span style="color: rgb(109, 59, 245)">9th Cloud Hotel</span><br><br><br><br><span style="color: rgb(247, 61, 61)">R980</span> per night</div>
                    </div>

                </div>

            </label>

            <input type="radio" name="venue" value="San Colosseo" id="hotel3" required>
            <label for="hotel3">

                <div class="mini" id="mini3" name="hotel3">

                    <div class="smallgrid">
                        <div id="block1"><img class="img" src="img/hotel3.jpg" alt="hotel3"></div>
                            <div id="text">The units come with parquet flooring<br> and features a fully equipped kitchen,<br> a flat-screen TV with cable and all<br> en suite private bathrooms<br> with towels. 
                            </div>
                        <div id="block3"><span style="color: rgb(109, 59, 245)">San Colosseo</span><br><br><br><br><span style="color: rgb(247, 61, 61)">R1300</span> per night</div>
                    </div>

                </div>

            </label>

            <input type="radio" name="venue" value="Aurora at 12" id="hotel4" required> 
            <label for="hotel4">

                <div class="mini" id="mini4" name="hotel4">

                    <div class="smallgrid">
                        <div id="block1"><img class="img" src="img/hotel4.jpg" alt="hotel4"></div>
                        <div id="text">All units come with a living room,<br> a seating area with a sofa, a flat-screen TV,<br> a fully equipped kitchen and a private<br> bathroom.
                        </div>
                        <div id="block3"><span style="color: rgb(109, 59, 245)">Aurora at 12</span><br><br><br><br><span style="color: rgb(247, 61, 61)">R1950</span> per night</div>
                    </div>

                </div>

            </label>

        </div>

        <!-- quadrant 3 containg checkin and check out dates with miscellaneuos feature/s /////////////////////////////////////////////////////////////////////////// -->

        <div class="grid" id="sq3">

                <label for="date">Check-in:</label><br>
                <input type="date" min="2019-03-01" max="2019-03-29" name="checkindate" required><br><br>

                <label for="date">Check-out:</label><br>
                <input type="date" min="2019-03-02" max="2019-03-30" name="checkoutdate" required><br><br>

                <label for="no-of-adults">Number of Adults:</label>
                <select>
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select><br><br>
                    
                <label for="no-of-Kids">Number of Kids:</label>
                <select style="margin-left: 4.8%">
                    <option value="0" selected>0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select><br><br>

                <input type="checkbox" id="box" name="business">
                <label for="box" class="box">Travelling for work?</label>

        </div>

        <!-- quadrant 4 miscellaneuos features/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////  -->

        <div class="grid" id="sq4">

            <input type="checkbox" id="box-2" name="wifi">
            <label for="box-2" class="box">Would you like FREE wifi?</label>

            <input type="checkbox" id="box-3" name="parking">
            <label for="box-3" class="box">Would like to use underground parking?</label>

            <input class="button" type="submit" value="Proceed" name="submit">

        </div>

    </div>
    </form>

    
</div>

    
</body>
</html>