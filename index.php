<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

    <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/fonts/boxicons.css">
    <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/css/theme-default.css" class="template-customizer-theme-css">
    <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/css/core.css" class="template-customizer-core-css">
    <link rel="stylesheet" href="sneat-1.0.0/assets/css/demo.css">
    <link rel="stylesheet" href="sneat-1.0.0/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css">
    <script src="sneat-1.0.0/assets/vendor/js/helpers.js"></script>
    <script src="sneat-1.0.0/assets/js/config.js"></script>

    <style>
        .header {
            background-color: <?php echo "red" ?> !important;
        }
    </style>

<body>
        
    <?php include('components/header.php'); ?>

    <div class="pt-4 pb-2 mx-5 bg-normal">
        <H4>BACKGROUND</H4>
        <ul>
            <li>Bachelor of Science in Computer Science</li>
            <li>Laguna University</li>
        </ul><br><br>

        <H4>SKILLS</H4>
        <ul id="skills">
            <li>CSHARP</li>
            <li>JAVA</li>
            <li>PYTHON</li>
        </ul>
        <button class="btn btn-secondary" id="add-skill">Add Skill</button>

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
