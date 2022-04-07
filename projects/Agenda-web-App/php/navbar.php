<header>
        <a class="logo" href="index.php">
        <img class="logo" src="media/logo4.png" alt="logo">
        </a>
        <div id="container">
        <form action="zoeken.php" method="POST">
            <input id="zoeken"type="text" name="zoeken">
            <select id="zoekenkeuzen" name="zoekenkeuzen">
            <option value="titel">titel</option>
            <option value="afspraak">description</option>
            <option value="locatie">locatie</option>
            <input id=submitzoek type="submit" value="zoeken">
            </select>
        </form>
        </div>

        <img onclick="searchbar()" src="media/zoeken.png" alt="zoeken" id="zoekenopen">


            <br>
        <ul class="nav">
            <li class="navi"><a href="index.php">agenda</a></li>
            <li class="navi"><a href="afspraken.php">Afspraken</a></li>
            <li class="navi"><a href="admin.php">Admin</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Dag/Week/Maand
                    <i class="fa fa-caret-down"><i>
                    </button>
                        <div class="dropdown-content">
                            <a href="day.php">dag</a>
                            <a href="week.php">week</a>
                            <a href="index.php">maand</a>
                        </div>
                </div>
        </ul>
    </header>