<template>
    <nav class="navbar navbar-light bg-faded nav-margin">
            <a class="navbar-brand" href="#">
                <img src="/images/TaaS.png" width="30" height="30" class="d-inline-block align-top" alt="">
                TaaS
            </a>
            <div class="nav navbar-nav">
                <slot>
                </slot>
            </div>
    </nav>
</template>

<style scoped>
.nav-margin {
    margin-bottom: 10px;
}
</style>
