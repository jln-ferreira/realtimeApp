<template>
    <v-app-bar
      blue-grey lighten-5
    >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
        <v-toolbar-title>Real App</v-toolbar-title>
        <v-spacer></v-spacer>
        <div class="hidden-sm-and-down">
            <router-link to="/forum">
                <v-btn flat>Forum</v-btn>
            </router-link>
            <router-link to="/questions">
                <v-btn flat>Ask Questions</v-btn>
            </router-link>
            <router-link to="/category">
                <v-btn flat>Category</v-btn>
            </router-link>
            <router-link to="/login">
                <v-btn flat>Login</v-btn>
            </router-link>
        </div>
    </v-app-bar>
</template>

<script>
export default {

}
</script>

<style>

</style>