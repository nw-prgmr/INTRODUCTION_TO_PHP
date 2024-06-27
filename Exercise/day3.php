
<?php 

    // $year = 2005;
    
    // //$is_leap_year = $year % 4 == 0 && $year % 100 != 0;

    // if ( $year % 4 == 0 && $year % 100 != 0 ) {
    //     echo " is a leap year";
    // }
    // else{
    //     echo " is not a leap year";
    // }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Day 3 Exercises</title>

    <link rel="stylesheet" href="style.css" />

    
</head>

<body>
    
    <div class="container">
            <div >
                <h2>Leap year or not</h2>
                <form action="">
                    <!-- <label for="year">Enter year</label><br><br> -->
                    <input type="text" class="form-group mb-2" id="year" placeholder="Enter year" required>
                    <p class="result" id="leap-year"></p>
                    <button id="check-year">Submit</button>
                </form>
            </div>
        </div>
</body>

    <script>

        var year = document.getElementById("year");
        var leap_year = document.getElementById("leap-year");
        var check_btn = document.getElementById("check-year");

        check_btn.addEventListener('click', function() {
            if ( parseInt(year) % 4 == 0 && parseInt(year) % 100 != 0 ) {

                leap_year.innerHTML = year.value + " is a Leap year";
            }
            else {
                leap_year.innerHTML = year.value + " is not a Leap year";
            }
        })
        
    </script>

</html>