<template>
 <nav>
  <v-app>
    <v-app-bar app color="grey lighten-5" height="110px" dark>
      <div class="d-flex align-center">
       <img src="../../assets/mad_logo.png" width="300"/>
       
      </div>
      <v-spacer></v-spacer>
      <v-btn
      depressed
      color="primary"
    >
      เข้าสู่ระบบ
    </v-btn>
     </v-app-bar>
     
  </v-app>
  </nav>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
