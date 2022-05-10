<template>
<!-- loop here that print all available form to the user -->
  <div v-for="item in data" :key="item.id" class=" mx-2 my-8">
  <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md m-auto">
    <div class="text-center py-2 my-2">
      <h1 class="text-3xl">{{ item.title }} </h1>
       <hr />
      <h5 class="">{{ item.description }} </h5>
    </div>
    <form class="py-4 my-4" @submit.prevent="storeForm">
       <div v-for="field in formHeader" :key="field.id">
         <BaseInput
            v-bind="$attrs"
            :label="field.label"
          
            types="text"
    
          />
          <h1>{{field.label}}</h1>
       
       
       </div>
        <div class="form-group mb-6">
        
      </div>
      <div class="form-group mb-6">
        <!-- <Telephone
          template="(XXX) XXX-XXXX"
          label="Phone Number"
          v-model="information.phone"
          :required="information.required"
        /> -->
      </div>
      <div class="form-group mb-6">
        <!-- <TextArea
          label="DETAILS OF REQUEST"
          :required="information.required"
          v-model="information.detailOfRequest"
        /> -->
      </div>
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
  </div>



  <div v-for="item in data" :key="item.id">
    <ul>
      <li>{{ item.title }}</li>
      <li>{{ item.description }}</li>
       <li>{{ item.id}}</li>
      <!-- <li>{{ item.forms().type }}</li> -->
    </ul>
  </div>
</template>

<script >

import BaseInput from "../eService/basicInput/TextField.vue";
import Telephone from "../eService/basicInput/Telephone.vue";
import TextArea from '../eService/basicInput/TextArea.vue'

import axios from "axios";
export default {
      components: { BaseInput, Telephone,TextArea},
  data() {
    return {
      data: [],
      formHeader:[],
    };
  },
  methods: {
    getForm() {
      axios.get("/get/forms").then((response) => {
        if (response.status == 200) {
          console.log("Ok, Fine");
          console.log(response);
        }
        this.data = response.data;
        // console.log(this.data);
        this.data.forEach(element => {
            console.log(element.id)
            axios.get('/get/input/'+ element.id).then((response)=>{
        console.log("Ok, Fine");
          console.log(response);
            })
            // console.log('element.title')
            let data=response.data;
               console.log(data)
     this.formHeader.push(data)
  
            
        });
      });
    },
    storeForm(){
        console.log(this.formHeader +'   hello')
        this.formHeader.forEach(element => {
           console.log(element.label +'   hello')
            
        });
    }
  },
  mounted() {
    this.getForm();
    console.log("Mounted");
  },
};
</script>