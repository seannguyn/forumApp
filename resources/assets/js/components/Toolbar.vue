<template>
  <v-toolbar>
    <!-- <v-toolbar-side-icon></v-toolbar-side-icon> -->
    <v-toolbar-title>forumApp</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">

      <router-link to="/login">
        <v-btn flat>Login</v-btn>
      </router-link>

      <router-link to="/forum">
        <v-btn flat>Forum</v-btn>
      </router-link>
      <v-btn flat>Ask</v-btn>
      <v-btn flat>Category</v-btn>

    </div>
  </v-toolbar>
</template>

<script>
export default {
}
</script>

<style lang="css">
</style>
