<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css")}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset("css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/home.css")}}">

    <!-- link Font Awesome -->
    <link rel="stylesheet" href="{{asset("https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css")}}" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Animaton on Scroll -->
    <link rel="stylesheet" href="{{asset("https://unpkg.com/aos@next/dist/aos.css")}}" />
    <title>home</title>
</head>


<nav class="navbar navbar-expand-lg navbar-light mt-3 mb-2" >
    <!-- Container wrapper -->
    <div class="container">
        <!-- Navbar brand -->
        <div class="navbar-brand mt-2 mt-lg-0">
            <!-- <img src="#" alt="Corona Logo"/> -->
            <h1>DYB</h1>
        </div>

        <!-- Toggle button -->
        <button
            class="navbar-toggler ms-auto"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#nav"
            aria-controls="nav"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>


        <div class="collapse navbar-collapse" id="nav">
            <!-- nav item  -->

            <div class="side-nav  ms-auto">


                <ul class="navbar-nav mb-2 mb-lg-0 d-flex">

                    <li class="nav-item">
                        <a href="#"><i class="fa-solid fa-phone" style="color: black; font-size: 24px;  padding-top: 7px; padding-right: 30px;"></i></a>
                    </li>

                    <li class="nav-item" >
                        <a href="#"><i class="fa-solid fa-envelope" style="color: black; font-size: 24px; padding-top: 7px; padding-right: 25px;"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Our work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Request your service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Contact us</a>
                    </li>
                </ul>

            </div>

        </div>
        <div class="navbar-overlay"></div>
    </div>
</nav>
{{--end of nav--}}
<div class="container-fluid bg-overlay">
    <div class="row text-center mt-5">
        <div class="col background-content">

        <h1 class="text-uppercase" style="font-size: 60px">experience<br> the best digital
        <br><span class="text-success">agency</span>
        </h1>
        <span class="text-capitalize">
            we help you to achieve your goals by customizing what is best for you<br> with care and productivity.
        </span><br><br>
        <a class="btn  text-uppercase">discover
            <i class="fa-solid fa-arrow-right-long ms-3"></i>
        </a>
        </div>
    </div>
</div>
    <br>
    <br>
{{--end of the background overlay--}}

{{--services provide section--}}
<div class="container service-section">
    <div class="row">
        <div class="col-12 services">
            <p class="text-success" style="font-size: 20px"> <i class="fa-solid fa-minus" style="width:2%"></i>what we can do for you</p>
        </div>
        <div class="col-12">
            <h1 class="text-uppercase">
                services provide<br>
                for you
            </h1>
        </div>
    </div><br><br><br>
    <div class="row row-cols-1 row-cols-md-3 g-4 sec-cards">
        <div class="col">
            <div class="card h-100">
                <i class="fa-solid fa-building fa-2x ms-4 p-3 mt-2 text-success"></i>
                <div class="card-body">
                    <h5 class="card-title p-2 ms-3 text-uppercase">business <br>strategy</h5>
                    <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <i class="fa-solid fa-laptop fa-2x ms-4 p-3 mt-2 text-success"></i>
                <div class="card-body">
                    <h5 class="card-title p-2 ms-3 text-uppercase">website</br>development</h5>
                    <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <i class="fa-solid fa-lightbulb fa-2x ms-4 p-3 mt-2 text-success"></i>
                <div class="card-body">
                    <h5 class="card-title p-2 ms-3 text-uppercase">marketing & <br>reporting</h5>
                    <p class="card-text p-2 ms-3">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
            </div>
        </div>
    </div>
    </div>
</div><br><br><br>
{{--end of service provide section--}}

{{--start of the images group--}}
<div class="container">
    <div class="row">
       <div class="col-4">
           <img src="{{asset("images/2.jpg")}}" class="img-thumbnail">
       </div>
        <div class="col-4">
            <img src="{{asset("images/2.jpg")}}" class="img-thumbnail">
        </div>
        <div class="col-4">
            <img src="{{asset("images/2.jpg")}}" class="img-thumbnail">
        </div>
    </div>
</div><br><br><br>
{{--end of images group--}}

{{--start of get to know us--}}
<div class="container knowus" style="height: 50vh">
    <div class="row" style="height: 50vh">
        <div class="col-3 top">
            <img src="{{asset("images/2.jpg")}}" height="100">
        </div>
        <div class="col-6 text-center center">
            <p class="text-success" style="font-size: 20px"> <i class="fa-solid fa-minus" style="width:4%"></i>get to know us</p><br>
            <h1 class="text-uppercase">
                leading the best<br>digital <span class="text-success">agency</span> in town
            </h1><br>
            <p class="text-capitalize">
                web design in a powerful way of just not an only<br>
                profession,however, in a passion for our company. we <br>
                have to a tendency to believe the idea that smart looking <br>
                of any website is the first impression
            </p>
        </div>
        <div class="col-3 down">
            <img src="{{asset("images/2.jpg")}}" height="100">
        </div>
    </div>
</div>
{{--end of get to know us--}}







<!-- Animaton on Scroll -->
<script src="{{asset("https://unpkg.com/aos@next/dist/aos.js")}}"></script>
<script>AOS.init();</script>


<!-- Links Bootsrtap -->
<script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js")}}" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{asset("https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js")}}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="{{asset("js/bootstrap.bundle.min.js")}}"></script>

<!-- Link Javascript -->
<script src="{{asset("js/script.js")}}"></script>
<body>

</body>
</html>