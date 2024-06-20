const { createApp } = Vue

createApp ({
    data() {
        return {
            logo: "../src/assets/img/Spotify_logo_without_text.svg.png",
            disks: null,
        }
    },

    methods: {
        showDisk() {
            console.log('click');
        }
    },
    mounted() {
        axios
            .get('../src/server.php')
            .then(response => {
                console.log(response);
                this.disks = response.data
                console.log(response.data);
            })
    },
}).mount("#app")