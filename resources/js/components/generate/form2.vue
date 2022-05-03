

<template>
  <div style="text-align: center">
    <h1 style="text-align: center">This is form generator</h1>
    <button @click="create">Text Field</button>
    <div>
      <div v-if="field.createField">
        <label for="">{{ field.name }}</label>
        <input :type="field.type" :required="field.required" />
      </div>
    </div>
    <div v-if="field.createForm">
      <form @submit.prevent="save">
        <label for="">Write label name</label>
        <input type="text" v-model="field.name" />
        <label for="">type</label>
        <input type="text" v-model="field.type" />
        <button>save</button>
      </form>
    </div>
  </div>
</template>
<script>
export default {
  data() {
    return {
      field: {
        name: "label name",
        type: "textarea",
        required: false,
        createForm: false,
        createField: false,
      },
      formComponent:{
         textField:'Text Field',
         textArea:"Text Area",
          
      }
    };
  },
  methods: {
    create() {
      this.field.createField = true;
     this.field.createForm= true;
    },
    fill() {
      
    },
    save() {
      this.field.createForm = false;
    },
  },
};
</script>
