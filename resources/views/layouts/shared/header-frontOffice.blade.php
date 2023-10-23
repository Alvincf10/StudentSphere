<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="{{route('frontOffice')}}"> <img src="{{asset('image/logo-front.png')}}" width="200"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto"> <!-- Tengah -->
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('frontOffice')}}">Home</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('eventFront')}}">Event</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('aboutUsFront')}}">About Us</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="{{route('transaction')}}">Check Transaction</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control input search me-2" type="search" placeholder="Search Event" aria-label="Search">
                    <button class="btn btn-outline-primary btn-search" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</header>
