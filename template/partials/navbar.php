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
        <form class="navbar-form navbar-right" role="search">
            <div class="form-inline">
                <input type="text" class="form-control mx-3" data-toggle="modal" data-target="modal" name="username" placeholder="Username">
                <input type="text" class="form-control" name="password" placeholder="Password">
                <button type="submit" class="btn btn-default mx-3">Sign In</button>
                <a href="" class="btn btn-default btn-rounded" data-toggle="modal" data-target="#modalRegisterForm">Register</a>
            </div>
        </form>
        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method="POST" action=../../config/database.php>
                        <div class="modal-body mx-3">
                            <div class="md-form mb-5">
                                <i class="fas fa-user prefix grey-text"></i>
                                <input type="text" id="orangeForm-name" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
                            </div>
                            <div class="md-form mb-5">
                                <i class="fas fa-envelope prefix grey-text"></i>
                                <input type="email" id="orangeForm-email" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
                            </div>

                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
                            </div>
                            <div class="md-form mb-4">
                                <i class="fas fa-lock prefix grey-text"></i>
                                <input type="password" id="orangeForm-pass" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-pass">Confirm password</label>
                            </div>

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="submit" name="database" class="btn btn-info">Sign up</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        <div class="text-center">
        </div>
    </div>
</nav>
