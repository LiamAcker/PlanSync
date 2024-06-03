<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlanSync</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #sidebarMenu {
            bottom: 0;
            width: 300px;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }
        #topNavbar{
            height: 56px;
            background-color: lightcoral;
        }
        .main{
            height: 100vh;
            width: 100vh;
            background-color: lightblue;
        }
    </style>
</head>
  <body>
    <nav id="topNavbar"class="navbar sticky-top">
        <div class="container-fluid">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
            Toggle
            </button>
            <div id="pageTitle" class="fs-4 fw-bolder">PlanSync</div>
            <button type="button" class="btn btn-light">Add Reminder</button>
        </div>

    </nav>
    <div class="d-flex flex-nowrap">
        <nav id="sidebarMenu" class="collapse collapse-horizontal text-bg-dark">
            <!-- Your sidebar content goes here -->
            <ul class="nav nav-pills flex-column mb-auto" style="height: 100vh">
                <li class="nav-item"><a href="" class="nav-link text-white"> Option 1 </a></li>
                <li class="nav-item"><a href="" class="nav-link text-white"> Option 1 </a></li>
                <li class="nav-item"><a href="" class="nav-link text-white"> Option 1 </a></li>
                <li class="nav-item"><a href="" class="nav-link text-white"> Option 1 </a></li>
            </ul>
        </nav>
        <main role="main" class="container-fluid">
            <!-- Your main content goes here -->
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>