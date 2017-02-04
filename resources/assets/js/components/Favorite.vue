<template>
    <span>
        <a href="#" v-if="!favorited" @click.prevent="favoriteAd(ad)">
            <i v-bind:class="[ favorited ? 'fa fa-heart' : 'fa fa-heart-o' ]"></i>
        </a>
        <a href="#" v-if="favorited" @click.prevent="unFavoriteAd(ad)">
            <i v-bind:class="[ favorited ? 'fa fa-heart' : 'fa fa-heart-o' ]"></i>
        </a>
    </span>
</template>

<script>
    export default {
        props: ['ad', 'user', 'favorite'],

        data: function() {
            return {
                favorited: '',
            }
        },

        mounted() {
            if (this.isFavorite) {
                this.favorited = true;
            } else {
                this.favorited = false;
            }
        },

        computed: {
            isFavorite() {
                return this.favorite;
            },

            route() {
                if (this.favorited) {
                    return this.url+'/unfavorite/'+this.ad;
                } else {
                    return this.url+'/favorite/'+this.ad;
                }
            },
        },

        methods: {
            favoriteAd(ad) {
                this.$http.post(this.route, ad).then(function(response) {
                    this.favorited = true;
                }, function (response) {
                    console.log(response.data);
                });
            },

            unFavoriteAd(ad) {
                this.$http.post(this.route, ad).then(function(response) {
                    this.favorited = false;
                }, function (response) {
                    console.log(response.data);
                });
            },
        }
    }
</script>
