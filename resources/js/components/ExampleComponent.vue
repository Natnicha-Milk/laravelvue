<template>
  <nav>
    <v-app>
      <v-app-bar app color="grey lighten-5" height="110px" dark>
        <div class="d-flex align-center">
          <img src="../../assets/mad_logo.png" width="300" />
        </div>
        <v-spacer></v-spacer>

        <v-btn class="ma-2" outlined color="#1483C8">
          <v-icon color="#1483C1">mdi-magnify</v-icon>
          ค้นหา
        </v-btn>
        <v-btn class="ma-2" outlined color="#1483C8">
          <v-icon color="#1483C1">mdi-account</v-icon>
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
