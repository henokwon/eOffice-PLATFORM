<template>
  <div v-for="item in formHeader" :key="item.id" class="mx-2 my-8">
    <div
      class="p-6 rounded-lg shadow-lg bg-white max-w-md m-auto flex flex-row"
    >
      <div class="text-center py-2 my-2">
        <h1 class="text-3xl">{{ item.title }}</h1>
        <hr />
        <h5 class="">{{ item.description }}</h5>
        <button
          type="submit"
          class="
            w-full
            px-6
            py-2.5
            bg-blue-600
            text-white
            font-medium
            text-xs
            leading-tight
            uppercase
            rounded
            shadow-md
            hover:bg-blue-700 hover:shadow-lg
            focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
            active:bg-blue-800 active:shadow-lg
            transition
            duration-150
            ease-in-out
          "
        >
          Fill Form
        </button>
      </div>
      <!-- toggle the full form form Here  -->
    </div>
  </div>
  <div v-for="item in data" :key="item.id">
    <ul>
      <li>{{ item.title }}</li>
      <li>{{ item.description }}</li>
      <li>{{ item.id }}</li>
      <!-- <li>{{ item.forms().type }}</li> -->
    </ul>
  </div>
</template>

<script >
import BaseInput from "../eService/basicInput/TextField.vue";
import Telephone from "../eService/basicInput/Telephone.vue";
import TextArea from "../eService/basicInput/TextArea.vue";

import axios from "axios";
export default {
  components: { BaseInput, Telephone, TextArea },
  data() {
    return {
      data: [],
      formHeader: [],
    };
  },
  methods: {
    getFormHeader() {
      //get the form title and description
      axios.get("/get/form_title").then((response) => {
        if (response.status == 200) {
          console.log(response.data);
        }
        this.formHeader = response.data;
        console.log(this.formHeader);

      });
    },
  },
  mounted() {
    this.getForm();
    console.log("Mounted");
  },
};
</script>