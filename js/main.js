const { createApp } = Vue;


createApp({
    data() {
        return {
            apiUrl: 'server.php',
            albums: [],
        }
    },
    methods: {
        getAlbums() {
            axios.get(this.apiUrl)
                .then(res => {
                    //console.log(res.data);
                    this.albums = res.data;
                    console.log(albums);
                })
        }
    },
    mounted() {
        this.getAlbums();
    }
}).mount('#app')