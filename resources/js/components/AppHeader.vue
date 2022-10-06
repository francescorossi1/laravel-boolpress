<template>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">{{ title }}</a>
        <button type="button" data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbarNav" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
                </li>
                <li class="nav-item active">
                    <router-link :to="{ name: 'about' }" class="nav-link">About</router-link>
                </li>
                <li class="nav-item active">
                    <router-link :to="{ name: 'contacts' }" class="nav-link">Contacts</router-link>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'AppHeader',
    props: { title: String, }
}
</script>
