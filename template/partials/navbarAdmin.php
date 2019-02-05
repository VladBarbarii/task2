<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
        <a class="navbar-brand" href="#">Hidden brand</a>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>

        </ul>
        <ul class="navbar-nav mx-3">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Actions
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Add post</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">Edit post</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">Add category</a>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">Add tags</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Admin</a>
            </li>
<!--            <li class="nav-item">-->
<!--                <a class="nav-link" href="{{ url('/register') }}">Register</a>-->
<!--            </li>-->
        </ul>
    </div>
</nav>
