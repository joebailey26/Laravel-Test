<style scoped>
</style>

<template>
  <div v-text="name" />
</template>

<script>
import axios from "axios";

export default {
  name: "App",

  mounted() {
    this.getBasicInfo();
  },
  data() {
    return {
      name: "",
    };
  },
  methods: {
    getBasicInfo() {
      axios
        .get("/api/basicinfo")
        .then((response) => {
          console.log(response.data);
          this.name = response.data.name;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>