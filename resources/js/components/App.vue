<template>
    <!-- <div class="nav">
        <router-link :to="{ name: 'listen' }">Listen</router-link>
        <router-link :to="{ name: 'events' }">Event</router-link>
    </div> -->
    <nav class="navbar navbar-expand-sm bg-light">
    <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
            <router-link :to="{ name: 'events' }" class="nav-link">Event</router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{ name: 'listen' }" class="nav-link">Listen</router-link>
            </li>
            <li class="nav-item">
                <router-link :to="{ name: 'other' }" class="nav-link">Other</router-link>
            </li>
        </ul>
    </nav>
    <div class="container">
        <router-view></router-view>
    </div>
</template>
<script>
  export default {
  }
</script>
