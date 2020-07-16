<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand ml-3" href="/">Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto ml-5">
        <li class="nav-item active">
            <a class="nav-link" href="index">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dish">Dish</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/customer">Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/orders">Orders</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/contacts">Contacts</a>
        </li>
        <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <form class="form-inline my-2 my-lg-0" action="" method="post">
        <select class="form-control ml-1 mr-sm-2" name="language" id="">
            {{-- @foreach ($language as $lang)
                <option value="">{{$lang->}}</option>
            @endforeach --}}
        </select>
    </form>
    </div>
</nav>
