const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
        }
    },
    mounted() {
        axios.get('assets/server/api.php').then(response => {
            this.albums = response.data
            console.log(this.albums);
        });
    },
}).mount('#app')
