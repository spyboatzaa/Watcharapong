<!DOCTYPE html>
<html>
<head>
    <title>Boostrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <!-- Boostrap5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 

    <!-- Boostrap5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <style>
        body {
            background-color: blueviolet;

        }
        .container {
            background-color: white;
        }
        .top-left {
        position: absolute;
        top: 8px;
        left: 8px;
        color: white;
        background-color: #3B3B3B;
        border-radius: 5px 5px 5px 5px;
        padding-left: 5px;
        padding-right: 5px;
        }
        .card-body{
            height: 250px;
        }
       
    </style>
</head>
<body>
    <div class="container">
        <h1>Bootstrap 5 </h1> 
        <h2 class="text-secondary"> Workshop : Game Blog</h2>
       
        <hr>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">New</a></li>
                <li class="breadcrumb-item active" aria-current="page">Games</li>
            </ol>
        </nav>

        <h4> Games </h4>

        <div class="row">
        <div class="col-12 col-sm-12 col-md-12 col-lg-6">
            <div class="card mb-3" style="max-width: 700px; max-height: 800px">
            <img src="https://s.isanook.com/ga/0/rp/r/w728/ya0xa0m1w0/aHR0cHM6Ly9zLmlzYW5vb2suY29tL2dhLzAvdWQvMjIzLzExMTc3NjkvZmFyY3J5NigxKS5qcGc=.jpg" class="card-img-top" alt="Card image" width=300" height="500">
            <div class="top-left">7 Mins ago</div>
            <div class="card-body">
                    <h5 class="card-title">Far Cry 6</h5>
                    <p class="text-secondary">15 Jan 2022 </p>
                    <p class="card-text">In Far Cry 6, players control Dani Rojas, a guerilla fighter pulled into the war after the death of two of her close companions. After joining Libertad in the fight against Anton Castillo, Dani travels across Yara's island chains to recruit Far Cry 6's other guerilla factions and lead a charge on the capital. </p> 
                    <a href="#" class="btn btn-primary " >Read</a>
                    &nbsp;&nbsp;<i class="bi bi-heart " style="font-size: 20px"></i>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-12 col-md-12 col-lg-6" >
            <div class="card mb-3" style="max-width: 700px; max-height: 800px">
            <img src="https://cdn1.epicgames.com/400347196e674de89c23cc2a7f2121db/offer/AC%20KINGDOM%20PREORDER_STANDARD%20EDITION_EPIC_Key_Art_Wide_3840x2160-3840x2160-485fe17203671386c71bde8110886c7d.jpg" class="card-img-top" alt="Card image" width=300" height="500">
            <div class="top-left">1 Day ago</div>
            <div class="card-body">
                <h5 class="card-title">Assassin's creed valhalla</h5>
                <p class="text-secondary">14 April 2022 </p>
                <p class="card-text">Unlike some of the previous Assassin's Creed titles, Valhalla has a much more centralized story following Evior's journey from Norway to England, and seeking to build out a new home for their viking clan by forming alliances to take over the four kingdoms around you.</p>
                <a href="#" class="btn btn-primary ">Read</a>
                &nbsp;&nbsp;<i class="bi bi-heart " style="font-size: 20px"></i>
                </div>
            </div>
        </div>
        </div>
        <br>     
    </div>



</body>
</html>