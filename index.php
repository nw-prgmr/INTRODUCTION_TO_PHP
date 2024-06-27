<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
</head>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="" />

    <style>
        .header {
            background-color: <?php echo "red" ?> !important;
        }
    </style>

<body>
        
    <?php include('components/header.php'); ?>

    <div class="pt-4 pb-4 mx-5 bg-light">
        <H4>BACKGROUND</H4>
        <ul>
            <li>Bachelor of Science in Computer Science</li>
            <li>Laguna University</li>
        </ul>

        <H4>SKILLS</H4>
        <ul id="skills">
            <li>CSHARP</li>
            <li>JAVA</li>
            <li>PYTHON</li>
        </ul>
        <button class="btn btn-primary" id="add-skill">Add Skill</button>

        <!-- <div class="row mt-5">
            <div class="col-md-3 my-2">
                <label for="year">Enter year</label><br>
                <p id="age"></p>
                <input type="text" class="form-group mb-2" id="year">
                <button class="btn btn-primary" id="compute-age">Compute age</button>
            </div>
        </div> -->
    </div>

    
    
    <?php include('components/footer.php'); ?>

</body>

        <?php $bdate = 2002; ?>
    <script>
        var year = document.getElementById("year");
        var age = document.getElementById("age");
        var compute_btn = document.getElementById("compute-age");
        compute_btn.addEventListener('click', function() {
            if (<?=$bdate?> <= year.value) {
                let my_age = year.value - <?=$bdate?>;
                age.innerHTML = "<?="My age on the year "?>" + year.value + " is " + my_age;
            }
            else {
                alert("Year must not less than birth year")
            }
        })
    </script>

    <script>
        var skills = document.getElementById("skills");
        var btn_add_skill = document.getElementById("add-skill");

        btn_add_skill.addEventListener('click', function() {
            let li = document.createElement("li");
            li.textContent = '<?php echo "REST API" ?>';
            skills.appendChild(li);
        })
    </script>
</html>
