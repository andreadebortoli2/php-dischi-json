const { createApp } = Vue

createApp({
    data() {
        return {
            albums: [],
            modalData: {},
        }
    },
    methods: {
        getAlbumData(i) {
            // console.log(i);
            axios.get('assets/server/api.php').then(response => {
                // console.log(response.data[i]);
                this.modalData = response.data[i];
            })
        },
    },
    mounted() {
        axios.get('assets/server/api.php').then(response => {
            this.albums = response.data;
            // console.log(this.albums);
        });
    },
}).mount('#app')
