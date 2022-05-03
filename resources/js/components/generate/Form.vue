<template>
  <form class="py-4 my-4" @submit.prevent="sendData">
    <!-- <div class="grid grid-cols-2 gap-4">
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
    </div> -->

    <div v-if="formInput.length > 0">
      <div
        class="form-group mb-6"
        v-for="(input, index) in formInput"
        :key="index"
      >
        <label for="">{{ input.label }}</label>
        <input
          :type="input.inputType"
          :placeholder="input.type"
          v-model="input.type"
        />
        <div v-if="input.edit">
          <hr />
          <form @submit.prevent="save(index)">
            <label for="">Write label name</label>
            <input type="text" v-model="input.label" /> -->
          <!-- <label for="">type</label>
            <input type="text" v-model="input.inputType" /> -->
         <button>save</button> 
          <!-- </form>  -->
          <!-- Form kit start
          <h5 style="text-align: center">Edit properties</h5>

          <form @submit.prevent="save(index)">
             <FormKit
              type="text"
              name="name"
              label="Label Name"
              placeholder="Write field Name"
              v-model="input.label"
            />

            <FormKit
              type="select"
              name="type"
              label="Select Field Type"
              placeholder="Select Field Type"
              :options="['text', 'checkbox', 'textarea', 'email']"
              v-model="input.inputType"
            /> -->
            <!-- <button>save</button>
          </form> -->
          
          <!-- Form kit end-->
              </form> 

          <hr />
        </div>
        <button @click="create(input, index)">Edit</button>
        <button @click="remove(index)">Remove Field</button>
      </div>
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
  <button @click="add">add Field</button>
</template>
<script>
class Pr {
  type;
  inputType;
  label;

  edit;
  constructor(
    type = "input",
    inputType = "text",
    label = "label Name",
    edit = false
  ) {
    this.type = type;
    this.inputType = inputType;
    this.label = label;
    this.edit = edit;
  }
}

class inputC {
  type;
  inputType;
  label;
  constructor(type = "input", inputType = "text", label = "label Name") {
    this.type = type;
    this.inputType = inputType;
    this.label = label;
  }
}

export default {
  data() {
    return {
      formInput: [],
      inputCustomize: [],
      currentState: [],
      field: {
        name: "label name",
        type: "textarea",
        required: false,
        createForm: false,
        createField: false,
      },
      formComponent: {
        textField: "Text Field",
        textArea: "Text Area",
      },
    };
  },
  methods: {
    add() {
      var ps = new Pr(this.type, this.inputType, this.label, this.edit);
      this.formInput.push(ps);
      this.inputCustomize.push(ps);
    },
    remove(index) {
      this.formInput.splice(index, 1);
      console.log("HI     " + this.formInput);
    },

    create(input, index) {
      console.log(index);
      this.formInput[index].edit = true;
    },
    fill() {},
    save(index) {
      this.formInput[index].edit = false;
    },
  },
};
</script>