<template>
    <div class="row">
        <div class="offset-md-3 col-md-6">
            <div class="card card-block form-background">
                <h4 class="card-title">Login</h4>
                <form class="form-horizontal" role="form" method="POST" action="http://localhost:8000/login">
                    <slot>
                    </slot>
                </form>
            </div>
        </div>
    </div>
</template>

<style scoped>
.form-background {
    background-color: #f7f7f7;
}
</style>
