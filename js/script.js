const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: '../server.php',
            songsArray: [],
        }
    },

    methods: {
        getSongsArray(){
            axios.get(this.apiUrl).then((response) =>{
                songsArray = response.data;

                console.log(response.data);
            });
        }
    },

    created(){
        songsArray();
    }

}).mount('#app')