<template>
  <section>
    <p>Upload Images Here:</p>
    <form @submit.prevent="uploadFile">
      <input type="file" @change="fileChanged" />
      <button type="submit" :disabled="disabled">Upload!</button>
    </form>
  </section>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      disabled: true,
      file: null,
    };
  },
  methods: {
    fileChanged(event) {
      this.disabled = false;
      this.file = event.target.files[0];
    },
    uploadFile() {
      let fd = new FormData();
      fd.append("userpic", this.file);
      for (const value of fd.values()) {
        console.log(value);
      }
      axios
        .post("/api/uploadimage", fd)
        .then((response) => console.log(response));
    },
  },
};
</script>