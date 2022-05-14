<template>
<!-- If your content or parts of form is  -->
<!-- for pushing your form down style="padding-top: 65px" add this -->
  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md m-auto" style="padding-top: 65px" >
    <div class="text-center py-2 my-2">
      <h1 class="text-3xl ">Service Request Form</h1>
    </div>
    <hr />
    <form class="py-4 my-4" @submit.prevent="storeForm">
      <div class="grid grid-cols-2 gap-4">
        <div class="form-group mb-6">
          <BaseInput
            v-bind="$attrs"
            label="First Name"
            v-model="information.firstName"
            types="text"
            :required="information.required"
          />
        </div>
        <div class="form-group mb-6">
          <BaseInput
            v-bind="$attrs"
            label="Last Name"
            v-model="information.lastName"
            types="text"
            :required="information.required"
          />
        </div>
      </div>
      <div class="form-group mb-6">
        <Telephone
          template="(XXX) XXX-XXXX"
          label="Phone Number"
          v-model="information.phone"
          :required="information.required"
        />
      </div>
      <!-- <div class="form-group mb-6">
        <BaseInput
          v-bind="$attrs"
          label="E-mail"
          v-model="information.email"
          types="email"
          :required="information.required"
        />
      </div> -->
      <div class="form-group mb-6">
        <TextArea
          label="DETAILS OF REQUEST"
          :required="information.required"
          v-model="information.detailOfRequest"
        />
      </div>
      <!-- <div class="form-group form-check text-center mb-6">
        <input
          v-model="checked"
          type="checkbox"
          class="
            form-check-input
            appearance-none
            h-4
            w-4
            border border-gray-300
            rounded-sm
            bg-white
            checked:bg-blue-600 checked:border-blue-600
            focus:outline-none
            transition
            duration-200
            mt-1
            align-top
            bg-no-repeat bg-center bg-contain
            mr-2
            cursor-pointer
          "
          id="exampleCheck25"
          checked
        />
        <label
          class="form-check-label inline-block text-gray-800"
          for="exampleCheck25"
          >Subscribe to our newsletter</label
        >
      </div> -->
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
        Submit
      </button>
    </form>
  </div>
</template>

<script >
import axios from "axios";
import BaseInput from "./basicInput/TextField.vue";
import Telephone from "./basicInput/Telephone.vue";
import TextArea from "./basicInput/TextArea.vue";
import { useRouter } from "vue-router";

export default {
  components: { BaseInput, Telephone, TextArea },
  data() {
    return {
      success: false,
      error: false,
      router : useRouter(),
      information: {
        firstName: "",
        lastName: "",
        phone: "",
        email: "",
        detailOfRequest: "",
        required: true,
        checked: "",
      },
    };
  },
  methods: {
    displaySweet() {
      toast.fire({
        icon: "success",
        title: "nothing",
      });
    },
    storeForm() {
      axios
        .post("/customer", this.information)
        .then((response) => {
          console.log(response);
      // this.router.push("/dashboard");
      
      toast.fire({
      icon: "success",
      title: "Request sent success fully!!!",
      });
        })
        .catch((error) => {
          console.log(" Something wrong hapen when you sent data to email        "+error);
        });
    },

    onSuccess(message) {
      this.success = true;
      console.log(message);
    },
    onFailure(message) {
      this.error = true;
    },
  },
};
</script>
<style>
</style>
