<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Test API</div>

                    <div v-if="loading === false" class="card-body">
                        <p>Response</p>
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">JK</th>
                                    <th scope="col">Dibuat Pada</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="item in data" :key="item.id">
                                    <td>{{ item.nama }}</td>
                                    <td>{{ item.jk }}</td>
                                    <td>{{ item.created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                        {{ error }}
                    </div>
                    <div v-else class="card-body">Loading...</div>
                </div>
            </div>
        </div>

        <vue-progress-bar></vue-progress-bar>                     

    </div>
</template>

<script>
    export default {
        //mounted() = untuk memastikan proses loading di halaman web telah terload secara sempurna
        
        data(){
            return{
                data:[],
                error:null,
                loading: false
            }
        },

        mounted() {
            this.getData()
        },   

        methods: {
            getData(){
                this.loading = true
                this.$Progress.start()
                axios.get('/testapi')

                .then((res) => {
                    this.data = res.data.data
                    this.loading = false
                    this.$Progress.finish();
                })
                .catch((error) => {
                    this.error = error.message
                    this.loading = false
                    this.$Progress.fail()
                })
            }
        }
    }
</script>
