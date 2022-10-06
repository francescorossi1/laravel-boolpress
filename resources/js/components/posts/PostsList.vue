<template>
    <section>
        <div v-if="isLoading">
            <AppLoader />
        </div>
        <div v-else-if="!isLoading && posts" class="container mt-4">
            <div v-for="post in posts" :key="post.id">
                <PostCard :post="post" />
                <div class="d-flex justify-content-end mb-5">
                    <router-link class="btn btn-info" :to="{ name: 'post-detail', params: { id: post.id } }">Info
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import PostCard from './PostCard'
import AppLoader from '../AppLoader'
export default {
    name: 'PostsList',
    components: { PostCard, AppLoader },
    data() {
        return {
            posts: [],
            isLoading: false
        }
    },
    methods: {
        fetchPosts() {
            this.isLoading = true;
            axios.get('http://localhost:8000/api/posts')
                .then(res => {
                    this.posts = res.data
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
        this.fetchPosts();
    }
}
</script>