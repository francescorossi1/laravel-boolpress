<template>
    <div class="card mb-3">
        <div class="card-body clearfix">
            <img class="float-left mr-2" :src="post.image" :alt="post.title">
            <h4 class="card-title">{{ post.title }}</h4>
            <p class="card-text">{{ post.content }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PostCard',
    props: { post: Object }
}
</script>

<style>

</style>