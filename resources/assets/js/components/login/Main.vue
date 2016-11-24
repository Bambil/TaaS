<template>
    <div id="app">
        <nav class="navbar navbar-light bg-faded">
            <a class="navbar-brand" href="#">
                <img src="/images/TaaS.png" width="30" height="30" class="d-inline-block align-top" alt="">
                TaaS
            </a>
            <div class="nav navbar-nav">
                <nav-item>Salam</nav-item>
                <nav-item>Khobi Salam</nav-item>
            </div>
        </nav>

        <div class="container container-default-padding">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <div class="card card-block form-background">
                        <h4 class="card-title">Login</h4>
                        <form class=" form-horizontal" role="form" method="POST" action="http://localhost:8000/login">
                            <input type="hidden" name="_token" value="foYZBoOYhXLwuZDqA87gVl421BzySoAkEtLfqDuO">

                            <email></email>
                            <password></password>
                            <checkbox></checkbox>

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

