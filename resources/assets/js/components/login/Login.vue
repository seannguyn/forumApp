<template>
  <v-form @submit.prevent="login">
    <v-container>
      <v-text-field
        label="E-mail"
        v-model="form.email"
        type="email"
        required
      ></v-text-field>

      <v-text-field
        label="Password"
        v-model="form.password"
        type="password"
        required
      ></v-text-field>

      <v-btn
        color="green"
        type="submit"
      >Login</v-btn>
    </v-container>
  </v-form>
</template>

<script>
export default {
  data() {
    return {
      // for form.email and form.password
      form :{
        email:null,
        password:null
      }
    }
  },
  methods: {
    login() {
      axios.post('api/auth/login',this.form)
      .then(res => console.log(res.data))
      .catch(error =>console.log(error.response.data))
    }
  }
}
</script>

<style lang="css">
</style>
