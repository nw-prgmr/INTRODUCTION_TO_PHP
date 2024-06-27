<?php

    $is_null = "";
    $num1 = 50;
    $num2 = 55;
    
    $birth_year = 2002;
    $year = 2016;

?>

<!-- IF STATEMENT -->
<?php  if( isset($is_null) ) {?>
    <h3>The provided value is not empty</h3>
<?php }?>

<!-- IF ELSE STATEMENT -->
<?php  if(  $num1 > $num2 ) { ?>

    <h3> <?=$num1?> is greater than <?=$num2?> </h3>

<?php } else { ?>

    <h3> <?=$num1?> is not greater than <?=$num2?> </h3>

<?php } ?>

<!-- IF...ELSE...ELSE STATEMENT -->
<?php  if (  $birth_year >= 2005 && $birth_year <= 2007 ) { ?>

    <h3> You are now in Kinder </h3>

<?php } elseif ( $birth_year >= 2007 && $birth_year <= 2013 ) { ?>

    <h3> You are now in Elememtary </h3>

<?php } elseif ( $birth_year >= 2013 && $birth_year <= 2018 ) { ?>

    <h3> You are now in Highschool </h3>

<?php } else { ?>
    
    <h3> You are now in College </h3>

<?php } ?>

<!-- SWITCH STATEMENT -->
<?php 
    $choices = ["apple", "banana", "mango"];

    switch ( $choices[1] ) {

        case "apple": 
            echo "You choose apple";
            break;
        
        case "banana": 
            echo "You choose banana";
            break;

        default:
            echo "Your selected fruit is not in trhe choises ";
            break;
    }
?>

<!-- IF...ELSE...ELSE and SWITCH STATEMENT -->

    <?php  if (  $year >= 2003 && $year <= 2005 ) { ?>

        <h3> You are now in Kinder </h3>

        <?php switch ( $year ) {
            case 2003:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2004:
                $age = $year - $birth_year;
                echo "your age is ".$age;
            case 2005:
                $age = $year - $birth_year;
                echo "your age is ".$age;
            default:
                echo "There is something wrong";
                break;
            }?>

    <?php } elseif ( $year >= 2005 && $year <= 2011 ) { ?>

        <h3> You are now in Elememtary </h3>

        <?php switch ( $year ) {
            case 2005:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2006:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2007:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2008:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2009:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2010:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2011:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            default:
                echo "There is something wrong";
                break;
            }?>
        

    <?php } elseif ( $year >= 2011 && $year <= 2016 ) { ?>

        <h3> You are now in Highschool </h3>

        <?php switch ( $year ) {
            case 2011:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2012:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2013:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2014:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2015:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2016:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            default:
                echo "There is something wrong";
                break;
            }?>

    <?php } elseif ( $year >= 2016 && $year <= 2030 ) { ?>

        <h3> You are now in College </h3>

        <?php switch ( $year ) {
            case 2016:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2017:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2018:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2019:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2020:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2021:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2022:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2023:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2024:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            case 2025:
                $age = $year - $birth_year;
                echo "your age is ".$age;
                break;
            default:
                echo "There is something wrong";
                break;
            }?>

    <?php } else { ?>

        <h3> Your age is not in a range </h3>

    <?php } ?>