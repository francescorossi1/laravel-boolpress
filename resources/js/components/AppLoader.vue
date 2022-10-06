<template>
    <div class="overlay">
        <div class="spinner-border text-light" role="status"></div>
    </div>
</template>

<script>
export default {
    name: 'AppLoader'
}
</script>

<style scoped>
    .overlay{
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
    }
</style>