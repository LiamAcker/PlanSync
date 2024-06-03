<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlanSync</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        #sidebarMenu {
            width: 15vw;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
        }
        #topNavbar{
            height: 7vh;
            background-color: lightcoral;
        }
    </style>
</head>
  <body>
    <nav id="topNavbar"class="navbar">
        <div class="container-fluid">
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-expanded="false" aria-controls="sidebarMenu">
            Sidebar
            </button>
            <div id="pageTitle" class="fs-4 fw-bolder">PlanSync</div>
            <a href="{{route('add-reminder')}}" class="btn btn-light">Add Reminder</a>
    </div>
    </nav>
    <div class="d-flex flex-nowrap">
        <nav id="sidebarMenu" class="collapse collapse-horizontal text-bg-dark overflow-auto vh-107">
            <!-- Your sidebar content goes here -->
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item"><a href="" class="nav-link text-white">Calendar</a></li>
                <li class="nav-item"><a href="" class="nav-link text-white">List</a></li>
            </ul>
            <hr>
            <div class="dropdown m-1">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="true">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <!-- nama user -->
                    <strong>Username</strong> 
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1" data-popper-placement="top-start" style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(0px, -34.6667px);">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li>
                        <form action="POST" action="{{route('sign-out')}}">
                            @csrf
                            <button type="submit", class="dropdown-item">
                            Sign out
                            </button>
                        </form>
                    </li>
                 </ul>
            </div>
        </nav>
        <main role="main" class="m-3 d-flex flex-nowrap flex-grow-1">
            <!-- Your main content goes here -->
            @yield('content')
        </main>
    </div>
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    @stack('scripts')  
</body>
</html>