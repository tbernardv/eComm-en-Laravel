<!-- Header navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Orders</a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 pt-2">
                <form action="/search" method="POST" class="d-flex">
                    @csrf
                    <input class="form-control me-2 search-box" type="search" id="txtsearch" name="txtsearch" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </ul>
            <!-- Para que el nav item se alinee a la derecha div y ul-->
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart(0)</a>
                    </li>    
                    
                </ul>
            </div>
        </div>
    </div>
</nav>