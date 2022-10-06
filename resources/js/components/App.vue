<template>
    <div>
        <AppHeader :title="title" class="mb-4" />
        <main class="container">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
import AppHeader from './AppHeader.vue'

export default {
  components: { AppHeader },
    name: 'App',
    data(){
        return {
            title: 'Laravel API'
        }
    }
    
}
</script>

<style>

</style>