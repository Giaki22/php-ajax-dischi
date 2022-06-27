var app = new Vue({
    el: '#app',
    data: {
        albums: []
    },
    mounted() {
        axios.get("http://localhost/24-06-2022/php-ajax-dischi/server/api.php")
        .then((reply) => {
            this.albums = reply.data;
        })
        .catch((error) => {
            console.log(error);
        })
        console.log(albums);
    }
})