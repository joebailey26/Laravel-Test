<style scoped>
form {
  display: grid;
  gap: 1rem;
  max-width: 400px;
  margin: auto;
}
input {
  border: 1px solid;
}
</style>

<template>
  <div>
    <form @submit.prevent="uploadFile">
      <label>
        Name:
        <input type="text" v-model="name" /> </label
      ><label>
        Profile Image:
        <input type="file" accept="image/*" @change="fileChanged"
      /></label>
      <button type="submit" :disabled="disabled">Submit</button>
    </form>
  </div>
</template>
<script>
import axios from "axios";

export default {
  data() {
    return {
      disabled: true,
      name: "",
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
      fd.append("name", this.name);
      fd.append("userpic", this.file);
      for (const value of fd.values()) {
        console.log(value);
      }
      axios.post("/api/profile", fd).then((response) => console.log(response));
    },
  },
};
</script>
