<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Task manager</a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <router-link class="nav-link active" aria-current="page" :to="{name: 'home'}">Главная</router-link>
                        <router-link class="nav-link  active" aria-current="page" :to="{name: 'desks'}">Доски</router-link>
                    </div>
                </div>
            </div>
        </nav>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

