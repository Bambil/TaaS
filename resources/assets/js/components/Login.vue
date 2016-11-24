<template>
    <div id="app">
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="/images/TaaS.png" width="30" height="30" class="d-inline-block align-top" alt="">
                TaaS
            </a>
            <div class="nav navbar-nav">
                <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="#">Features</a>
                <a class="nav-item nav-link" href="#">Pricing</a>
                <a class="nav-item nav-link" href="#">About</a>
            </div>
        </nav>

        <div class="container container-default-padding">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="card card-block form-background">
                        <h4 class="card-title">Login</h4>
                        <form class=" form-horizontal" role="form" method="POST" action="http://localhost:8000/login">
                            <input type="hidden" name="_token" value="foYZBoOYhXLwuZDqA87gVl421BzySoAkEtLfqDuO">

                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="" required autofocus>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember"> Remember Me
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Login
                                    </button>

                                    <a class="btn btn-link" href="http://localhost:8000/password/reset">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

</script>

<style>

</style>

