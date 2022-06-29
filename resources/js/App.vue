<style scoped>
</style>

<template>
  <div>
    <p v-text="profile.name" />
    <img
      v-if="profile.img_path"
      :src="'/storage/userpics/' + profile.img_path"
    />
    <profile-editor></profile-editor>
  </div>
</template>

<script>
import axios from "axios";
import profileEditor from "./components/profileEditor.vue";

export default {
  components: {
    profileEditor,
  },
  mounted() {
    this.getProfile();
  },
  data() {
    return {
      profile: {},
    };
  },
  methods: {
    getProfile() {
      axios
        .get("/api/profile")
        .then((response) => {
          console.log(response.data);
          this.profile = response.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>