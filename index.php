<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon" />
    <title>Find Exam Center</title>
    <!-- <script defer src=""></script> -->

</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <img src="images/coslogo.png" alt="" width="50" height="40" class="d-inline-block align-text-center">
            College of Science, KNUST
          </a>
        </div>
      </nav>
    <h1 class="text-center">Find Your Exam Venue</h1><br>
    <div class="main">
        <form action="form.php" method="get">
            <div class="mb-3">
                <label class="form-label">Select Programme: </label>
                <select name="course" id="course" class="form-select" required>
                    <option value="" selected>--Select your Programme--</option>
                    <option value="cs">Computer Science</option>
                    <option value="math" disabled>Mathematics</option>
                    <option value="biochem" disabled>Biochemistry</option>
                    <option value="bio" disabled>Biology</option>
                    <option value="stat" disabled>Statistics</option>
                    <option value="act" disabled>Acturial</option>
                    <option value="chem" disabled>Chemistry</option>
                    <option value="envSc" disabled>Environmental Science</option>
                    <option value="fst" disabled>Food science</option>
                    <option value="met" disabled>Meteorology</option>
                    <option value="phy" disabled>Physics</option>
                </select>
                <div class="form-text">Other courses will be active soon.</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Enter Index Number: </label> 
                <input type="text" class="form-control" name="indexNo" id="indexNo" required>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-primary">Submit</button></div>
        </form>
    </div>
    <footer>
        <div class="outer-footer">
            Copyright &copy;2022. All Rights Reserved.
        </div>
    </footer>


</body>
</html>