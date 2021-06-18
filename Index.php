<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equi="X-UA-Compatible" contents="ie=edge">
    <!------Bootstrap CSS------>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Marvel Comics API Search</title>
    <link rel="stylesheet" href="style.css">
</head>
<body onload="character()">
    <div class="jumbotron">
        <div class="container">
            <h1 claass="header-main-title"> Marvel Comics Character Search</h1>
            <form id="connectionform">

            <div class="form-group">
                <input required type="text" name="name" id="name" class="form-control character-search-box" placeholder="{Ex,MMulk,Iron Man,SpiderMan,etc...}">
            </div>
            <input type="submit" value="search" class="btn btn-danger nb-2 float-right search-character-button "> 
            </form>
        </div>
    </div>
    <div class="container" id="contentcontainer">
        <div class="d-flex align-items-center" id="characterspinnersection"></div>
        <div class="d-flex align-items-center" id="ComicsSpinnerSection"></div>

        <section id="charactersection"></section>
        <section id="comicsection"></section>
    </div>

    <script src="main.js"></script>
    <!------Optional Javascript----->
    <!-------Jquery first, then Pepper.js, then Bootstrap JS----->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 
</body>
</html>