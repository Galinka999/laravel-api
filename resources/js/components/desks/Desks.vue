<template>
    <div class="container">
        <h1>Доски</h1>
            <div class="row">
                <div class="col-lg-4 " v-for="desk in desks">
                    <div class="card mt-3">
                        <router-link class="card-body" aria-current="page" :to="{name: 'showDesks', params: {deskId: desk.id}}">
                            <h4 class="card-title">{{ desk.name }}</h4>
                        </router-link>
                    </div>
                </div>
            </div>
        <div class="alert alert-danger" role="alert" v-if="errored">
            Ошибка загрузки данных!
        </div>
        <br><br>
        <div class="d-flex justify-content-center" v-if="loading">
            <div class="spinner-border text-info" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {
            desks: [],
            errored: false,
            loading: true
        }
    },
    mounted(){
        axios.get('/api/v1/desks')
        .then(response => {
            this.desks = response.data.data
        })
        .catch(error => {
            console.log(error)
            this.errored = true
        })
        .finally(() => {
            this.loading = false
        })
    }
}
</script>

