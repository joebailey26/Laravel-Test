<style scoped>
</style>

<template>
  <div>
    <masthead v-if="name" :name="name"></masthead>
    <img v-if="imagepath" :src="`storage/app/userpics/${imagepath}`" />
    <image-uploader></image-uploader>
  </div>
</template>

<script>
import axios from "axios";
import masthead from "./components/masthead.vue";
import imageUploader from "./components/imageUploader.vue";

export default {
  components: {
    masthead,
    imageUploader,
  },
  mounted() {
    this.getBasicInfo();
    this.getImagePath();
  },
  data() {
    return {
      name: "",
      imagepath: "",
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
    getImagePath() {
      axios
        .get("/api/image")
        .then((response) => {
          this.imagepath = response.data.path;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>