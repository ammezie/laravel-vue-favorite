<template>
    <span>
        <a href="#" v-if="!isFavorited" @click.prevent="favorite(post)">
            <i  v-bind:class="[ isFavorited ? 'fa fa-heart' : 'fa fa-heart-o' ]"></i>
        </a>
        <a href="#" v-if="isFavorited" @click.prevent="unFavorite(post)">
            <i  v-bind:class="[ isFavorited ? 'fa fa-heart' : 'fa fa-heart-o' ]"></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['post', 'favorited'],

        data: function() {
            return {
                isFavorited: '',
            }
        },

        mounted() {
            if (this.isFavorite) {
                this.isFavorited = true;
            } else {
                this.isFavorited = false;
            }
        },

        computed: {
            isFavorite() {
                return this.favorited;
            },
        },

        methods: {
            favorite(post) {
                axios.post('/favorite/'+post)
                    .then(response => this.isFavorited = true)
                    .catch(response => console.log(response.data));
            },

            unFavorite(post) {
                axios.post('/unfavorite/'+post)
                    .then(response => this.isFavorited = false)
                    .catch(response => console.log(response.data));
            },
        }
    }
</script>