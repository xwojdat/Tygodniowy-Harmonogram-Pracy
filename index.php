<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Baza danych</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <script src='main.js'></script>
</head>
<body>
    <div class="banner">
        <form action='index.php' method='post'>
            Login: <input type="text" name="name">
            Hasło: <input type="password" name="surname">
            <input type="checkbox" name="opis">Wyświetl opisy
            <input type="number" class="colWidth" value="200" onchange="size()">Szerokość kolumn
            <input type="submit" value="Wyślij">
        </form>
    </div>
    <div class="table">
        <table style="border: 1px solid black;">
            <?php
                $con = mysqli_connect("localhost", "root", "", "baza");
                
                if($_POST["name"]=="Admin" && $_POST["surname"]=="haslo" && isset($_POST["opis"])) {
                    $wynik1 = mysqli_query($con, "SELECT * FROM user WHERE id = 1");
                    $wynik11 = mysqli_query($con, "SELECT * FROM cars WHERE user_id = 1");
                    $wynik2 = mysqli_query($con, "SELECT * FROM user WHERE id = 2");
                    $wynik22 = mysqli_query($con, "SELECT * FROM cars WHERE user_id = 2");
                    $wynik3 = mysqli_query($con, "SELECT * FROM user WHERE id = 4");
                    $wynik33 = mysqli_query($con, "SELECT * FROM cars WHERE user_id = 4");
                    $wynik4 = mysqli_query($con, "SELECT * FROM user WHERE id = 5");
                    $wynik44 = mysqli_query($con, "SELECT * FROM cars WHERE user_id = 5");
                    while($row1 = mysqli_fetch_row($wynik1)){
                        while($row3 = mysqli_fetch_row($wynik2)){
                            while($row5 = mysqli_fetch_row($wynik3)){
                                while($row7 = mysqli_fetch_row($wynik4)){
                                    print("<tr>");
                                    print("<th style='border: 1px solid black'>" . $row1[1] ." ". $row1[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row3[1] ." ". $row3[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row5[1] ." ". $row5[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row7[1] ." ". $row7[2] ."</th>");
                                    print("</tr>");
                                    while($row2 = mysqli_fetch_row($wynik11)){
                                        while($row4 = mysqli_fetch_row($wynik22)){
                                            while($row6 = mysqli_fetch_row($wynik33)){
                                                while($row8 = mysqli_fetch_row($wynik44)){
                                                    print("<tr>");
                                                    print("<td style='border: 1px solid black'>".$row2[3]."<br>".$row2[2]."<br>".$row2[0]."<br>".$row2[5]."<br>".$row2[4]."</td>");
                                                    print("<td style='border: 1px solid black'>".$row4[3]."<br>".$row4[2]."<br>".$row4[0]."<br>".$row4[5]."<br>".$row4[4]."</td>");
                                                    print("<td style='border: 1px solid black'>".$row6[3]."<br>".$row6[2]."<br>".$row6[0]."<br>".$row6[5]."<br>".$row6[4]."</td>");
                                                    print("<td style='border: 1px solid black'>".$row8[3]."<br>".$row8[2]."<br>".$row8[0]."<br>".$row8[5]."<br>".$row8[4]."</td>");
                                                    print("</tr>");
                                                }
                                            }
                                        }
                                    }
                                }  
                            }
                        }
                    } 
                   
                        
                }  
                else if($_POST["name"]=="Admin" && $_POST["surname"]=="haslo") {
                    $wynik = mysqli_query($con, "SELECT * FROM user WHERE id = 1");
                    $wynik2 = mysqli_query($con, "SELECT * FROM user WHERE id = 2");
                    $wynik3 = mysqli_query($con, "SELECT * FROM user WHERE id = 3");
                    $wynik4 = mysqli_query($con, "SELECT * FROM user WHERE id = 4");
                    while($row = mysqli_fetch_row($wynik)){
                        while($row2 = mysqli_fetch_row($wynik2)){
                            while($row3 = mysqli_fetch_row($wynik3)){
                                while($row4 = mysqli_fetch_row($wynik4)){
                                    print("<tr>");
                                    print("<th style='border: 1px solid black'>" . $row[1] ." ". $row[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row2[1] ." ". $row2[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row3[1] ." ". $row3[2] ."</th>");
                                    print("<th style='border: 1px solid black'>" . $row4[1] ." ". $row4[2] ."</th>");
                                    print("</tr>");
                                }
                            }
                        } 
                    } 
                }  

                mysqli_close($con)
                ?>
        </table>
    </div>
</body>
</html>