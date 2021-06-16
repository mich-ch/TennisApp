<?php session_start(); ?>
<?php

// Username is root
$user = "root";
$password = "";

// Database name 
$database = "testing";

// Server is localhost 
$servername = "localhost";
$mysqli = new mysqli(
    $servername,
    $user,
    $password,
    $database
);

// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
        $mysqli->connect_errno . ') ' .
        $mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM registration";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <link rel="script" href="js/script.js" />
    <script src="js/script.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="manifest" href="/manifest.json">
    <!-- ios support -->
  <link rel="apple-touch-icon" href="/img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
</head>

<body>

    <!-- Home menu -->
    <div class="navbar">
        <a href="#tableGr"><i class="fa fa-fw fa-trophy"></i>Trophies</a>
        <a href="#tittleGr"><i class="fa fa-fw fa-table"></i>Personal Details</a>
        <a href="#skillsGr"><i class="fa fa-fw fa-user"></i>Skills</a>
        <a class="active" href="#"><i class="fa fa-fw fa-home"></i>Home</a>
    </div>

    <div class="hero-image">
        <div class="hero-text">
            <h1 style="font-size:50px">I am
                <?php echo $_GET['firstname']; ?>
            </h1>
        </div>
    </div>

    <!-- Personal Details -->
    <div class="titlegr" id="tittleGr">
        <h1>Personal Details</h1>

        <div class="grid-container">

            <div class="grid-item">
                <div class="card">
                    <img src="./images/profile2.jpeg" alt="John" style="width:70%">
                    <h1><?php echo $_GET['firstname']; ?></h1>
                    <p class="title">Tennis player</p>
                    <p><?php echo $_GET['country']; ?></p>
                    <p><?php echo $_GET['ranking']; ?></p>
                </div>
            </div>

            <div class="grid-item">

                <div id="checkbox_div">
                    <li><input type="checkbox" value="hide" id="firstname_col" onchange="hide_show_table(this.id);">Firstname</li>
                    <li><input type="checkbox" value="hide" id="lastname_col" onchange="hide_show_table(this.id);">Lastname</li>
                </div>

                <div id="wrapper">
                    <table id="t01">
                        <tr>
                            <th id="firstname_col_head" onclick="sortTable(0,'t01')">Firstname</th>
                            <th id="lastname_col_head" onclick="sortTable(1,'t01')">Lastname</th>
                        </tr>
                        <tr>
                            <td class="firstname_col">Name</td>
                            <td class="lastname_col"><?php echo $_GET['firstname']; ?></td>
                        </tr>
                        <tr>
                            <td class="firstname_col">Last name</td>
                            <td class="lastname_col"><?php echo $_GET['lastname']; ?></td>
                        </tr>
                        <tr>
                            <td class="firstname_col">Age</td>
                            <td class="lastname_col"><?php echo $_GET['age']; ?></td>
                        </tr>
                        <tr>
                            <td class="firstname_col">Nation</td>
                            <td class="lastname_col"><?php echo $_GET['country']; ?></td>
                        </tr>
                        <tr>
                            <td class="firstname_col">Ranking</td>
                            <td class="lastname_col"><?php echo $_GET['ranking']; ?></td>
                        </tr>
                    </table>

                    <script>
                        var array = [
                                ["Firstname", "Lastname"],
                                ["Name", "<?php echo $_GET['firstname']; ?>"],
                                ["Last name", "<?php echo $_GET['lastname']; ?>"],
                                ["Age", "<?php echo $_GET['age']; ?>"],
                                ["Nation", "<?php echo $_GET['country']; ?>"],
                                ["Ranking", "<?php echo $_GET['ranking']; ?>"]
                            ],
                            table = document.getElementById("t01");
                        for (var i = 0; i < table.rows.length; i++) {
                            for (var j = 0; j < table.rows[i].cells.length; j++) {
                                table.rows[i].cells[j].innerHTML = array[i][j]
                            }
                        }
                    </script>
                </div>

            </div>
        </div>
    </div>

    <!-- Skills -->
    <div class="skillsgr" id="skillsGr">
        <h1>Skills</h1>

        <div class="grid-container">
            <div class="grid-item">
                <div class="imgskill">
                    <img src="./images/skills.jpeg">
                </div>
            </div>

            <div class="grid-item">
                <h3>Backhand</h3>
                <div class="containerSkill">
                    <div class="backhand"><?php echo $_GET['backhand']; ?>%</div>
                </div>
                <h3>Forehand</h3>
                <div class="containerSkill">
                    <div class="forehand"><?php echo $_GET['forehand']; ?>%</div>
                </div>
                <h3>Service</h3>
                <div class="containerSkill">
                    <div class="service"><?php echo $_GET['service']; ?>%</div>
                </div>
                <h3>Volley</h3>
                <div class="containerSkill">
                    <div class="volley"><?php echo $_GET['volley']; ?>%</div>
                </div>
            </div>
        </div>

    </div>

    <!--Trophies -->
    <div class="tablegr" id="tableGr">
        <h1>Trophies</h1>

        <div class="grid-container">
            <div class="grid-item">
                <table id="t02">
                    <tr>
                        <th style="width:50%" onclick="sortTable(0,'t02')">Year</th>
                        <th>Australian Open</th>
                        <th>Wimblenton</th>
                        <th>Roland Garros</th>
                        <th>US Open</th>
                        <th>Winners</th>
                    </tr>
                    <tr>
                        <td>2017</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-remove"></i></td>
                        <td>Djokovic</td>
                    </tr>
                    <tr>
                        <td>2018</td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td>Nadal</td>
                    </tr>
                    <tr>
                        <td>2019</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td>Tsitsipas</td>
                    </tr>
                    <tr>
                        <td>2020</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td>Medvedev</td>
                    </tr>
                    <tr>
                        <td>2021</td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td><i class="fa fa-remove"></i></td>
                        <td><i class="fa fa-check"></i></td>
                        <td>Federer</td>
                    </tr>
                </table>
            </div>
        </div>

    </div>

    <!--Players -->
    <div class="tablegr" id="tableGr">
        <h1>Players</h1>

        <div class="grid-container">
            <div class="grid-item">
                <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">
                <table id="myTable">
                    <tr>

                        <th>firstname</th>
                        <th>lastname</th>
                        <th>gender</th>
                        <th>country</th>
                        <th>age</th>
                        <th>ranking</th>
                    </tr>

                    <?php   // LOOP TILL END OF DATA 
                    while ($rows = $result->fetch_assoc()) {
                    ?>
                        <tr>

                            <td><?php echo $rows['firstname']; ?></td>
                            <td><?php echo $rows['lastname']; ?></td>
                            <td><?php echo $rows['gender']; ?></td>
                            <td><?php echo $rows['country']; ?></td>
                            <td><?php echo $rows['age']; ?></td>
                            <td><?php echo $rows['ranking']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </table>
            </div>
        </div>

    </div>

    <div class="container">
        <br />
        <br />
        <h2 align="center">Add or Remove input fields</h2>
        <div class="form-group">
            <form name="add_name" id="add_name">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dynamic_field">
                        <tr>
                            <td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td>
                            <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                        </tr>
                    </table>
                    <input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Webdesign: michalis<br>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
    </footer>
    <script src="js/app.js"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        var i = 1;
        $('#add').click(function() {
            i++;
            $('#dynamic_field').append('<tr id="row' + i + '"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control name_list" /></td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">X</button></td></tr>');
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
        });
        $('#submit').click(function() {
            $.ajax({
                url: "name.php",
                method: "POST",
                data: $('#add_name').serialize(),
                success: function(data) {
                    alert(data);
                    $('#add_name')[0].reset();
                }
            });
        });
    });
</script>