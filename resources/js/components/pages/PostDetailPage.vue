<template>
    <section>
        <div v-if="isLoading">
            <AppLoader />
        </div>
        <div v-else-if="!isLoading && post">
            <PostCard :post="post" />
            <div class="justify-content-end d-flex">
                <router-link class="btn btn-info" :to="{ name: 'home' }">
                    Torna alla Home
                </router-link>
            </div>
        </div>
    </section>
</template>

<script>
import PostCard from '../posts/PostCard'
import AppLoader from '../AppLoader.vue'
export default {
    name: 'PostDetailPage',
    components: { PostCard, AppLoader },
    data() {
        return {
            post: null,
            isLoading: false
        }
    },
    methods: {
        fetchPost() {
            this.isLoading = true;
            axios.get('http://localhost:8000/api/posts/' + this.$route.params.id)
            .then(res => {
                    this.post = res.data
                })
                .catch((err) => {
                    console.log(err);
                })
                .then(() => {
                    this.isLoading = false
                })
    }
},
    mounted() {
        this.fetchPost();
    }
}

</script>

<style>

</style>