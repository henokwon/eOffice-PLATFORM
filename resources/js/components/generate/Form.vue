<template>
  <div>
    <button
      class="
        inline-block
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
      type="button"
      v-on:click="toggleModal()"
    >
      Add title and description
    </button>
    <div
      v-if="showModal"
      class="
        overflow-x-hidden overflow-y-auto
        fixed
        inset-0
        z-50
        outline-none
        focus:outline-none
        justify-center
        items-center
        flex
      "
    >
      <div class="relative w-auto my-6 mx-auto max-w-3xl">
        <!--content-->
        <div
          class="
            border-0
            rounded-lg
            shadow-lg
            relative
            flex flex-col
            w-full
            bg-white
            outline-none
            focus:outline-none
          "
        >
          <!--header-->
          <div
            class="
              flex
              items-start
              justify-between
              p-3
              border-b border-solid border-slate-200
              rounded-t
            "
          >
            <h5 class="text-1xl font-semibold text-center">
            Form title and description 
            </h5>
            <button v-on:click="toggleModal()">
              <span
                class="
                  text-red-500
                  bg-transparent
                  hover:bg-red-500 hover:text-white
                  active:bg-red-600
                  font-bold
                  uppercase
                  text-lg
                  rounded
                  outline-none
                  focus:outline-none
                  mr-1
                  mb-1
                  ease-linear
                  transition-all
                  duration-150
                "
              >
                X
              </span>
            </button>
          </div>
          <!--body-->
          <div class="relative p-4 flex-auto">
            <form class="w-full max-w-sm">
              <div class="bg-white px-1 pt-1 pb-2 mb-2">
                <div >
                  <input
                    class="
                      appearance-none
                      bg-transparent
                      w-full py-2 px-3 text-gray-700 leading-tight
        
                      border-none
                      border-b-2 border-gray-400
                   
                      focus:border-none
                    "
                    type="text"
                    placeholder="Form title"
                    aria-label="Form title"
                  />
                </div>
                <div class="mb-4">
                  <textarea name="" id="" placeholder="Form description" class=" bg-transparent
                      w-full py-2 px-3 text-gray-700 leading-tight
                      underline
                      focus:outline-none"></textarea>
                </div>
              </div>
            </form>
          </div>
          <!--footer-->
          <div
            class="
              flex
              items-center
              justify-end
              p-2
              border-t border-solid border-slate-200
              rounded-b
            "
          >
            <button
              class="
                text-red-500
                bg-transparent
                border border-solid border-red-500
                hover:bg-red-500 hover:text-white
                active:bg-red-600
                font-bold
                uppercase
                text-sm
                px-4
                py-1
                rounded
                outline-none
                focus:outline-none
                mr-1
                mb-1
                ease-linear
                transition-all
                duration-150
              "
              type="button"
              v-on:click="toggleModal()"
            >
              Close
            </button>
            <button
              class="
                text-red-500
                background-transparent
                font-bold
                uppercase
                px-4
                py-1
                text-sm
                outline-none
                focus:outline-none
                mr-1
                mb-1
                ease-linear
                transition-all
                duration-150
              "
              type="button"
              v-on:click="toggleModal()"
            >
              Save Changes
            </button>
          </div>
        </div>
      </div>
    </div>
    <div v-if="showModal" class="opacity-25 fixed inset-0 z-40 bg-black"></div>
  </div>

  <form
    class="
      py-4
      my-4
      flex flex-col
      justify-center
      items-center
      bg-white
      shadow-md
      rounded
    "
    @submit.prevent="sendData"
  >
    <!-- <input type="radio" v-model="pick" :value="first" />
    <input type="radio" v-model="pick" :value="second" /> -->
    <div class="flex justify-end">
      <button>Add Question</button>
    </div>

    <div v-if="formInput.length > 0">
      <div class="form-group" v-for="(input, index) in formInput" :key="index">
        <label for="">{{ input.label }}</label>
        <div
          class="grid gap-2 grid-cols-2 grid-rows-1 py-2 px-6 mx-8 space-x-10"
        >
          <div v-if="input.inputType == 'textarea'">
            <textarea :placeholder="input.type" :type="input.inputType" />
          </div>
          <div v-else-if="input.inputType == 'select'">
            <select>
              <option disabled value="">Select value</option>
              <option
                v-for="option in options"
                :value="option.value"
                :key="option"
              >
                {{ option.text }}
              </option>
            </select>
          </div>
          <div v-else>
            <input :placeholder="input.type" :type="input.inputType" />
          </div>
          <div class="flex space-x-10" v-if="!isPreview">
            <button @click="create(input, index)">
              <fa
                class="flex-shrink-0 h-6 w-6 text-indigo-600 bg-rose-400"
                icon="pencil"
              />
            </button>
            <button @click="remove(index)">
              <fa
                class="flex-shrink-0 h-6 w-6 text-red-600 bg-dark-eval-2"
                icon="close"
              />
            </button>
          </div>
        </div>

        <div v-if="input.edit">
          <hr />
          <div
            class="
              bg-yellow-300
              text-center
              max-w-sm
              rounded
              overflow-hidden
              shadow-lg
              py-5
            "
          >
            <form
              @submit.prevent="save(index)"
              class="flex flex-col justify-center items-center"
            >
              <div>
                <label for="">Write label name</label>
                <br />
                <input type="text" v-model="input.label" />
              </div>
              <div>
                <div class="form-group mb-6">
                  <div>Select Question type:</div>

                  <select
                    v-model="input.inputType"
                    class="
                      my-3
                      focus:ring-2 focus:ring-blue-500 focus:outline-none
                      appearance-none
                      text-sm
                      leading-6
                      text-slate-900
                      placeholder-slate-400
                      rounded-md
                      py-2
                      pl-10
                      ring-1 ring-slate-200
                      shadow-sm
                      w-full
                    "
                  >
                    <option disabled value="">Select Type</option>
                    <option>checkbox</option>
                    <option>text</option>
                    <option>textarea</option>
                    <option>email</option>
                    <option>radio</option>
                    <option>select</option>
                    <option>number</option>
                    <option>date</option>
                  </select>
                </div>
              </div>
              <div v-if="input.inputType == 'select'" class="my-3 w-full">
                <div
                  class="
                    grid
                    gap-2
                    grid-cols-2 grid-rows-1
                    space-x-8
                    place-items-center
                    px-20
                  "
                >
                  <input
                    type="text"
                    v-model="value"
                    placeholder=" set Select options"
                    class="w-35"
                  />
                  <button
                    @click="SelectValue(index)"
                    class="
                      px-1
                      py-1
                      text-xs
                      font-medium
                      text-center text-white
                      bg-blue-700
                      rounded-lg
                      hover:bg-blue-800
                      focus:ring-4 focus:outline-none focus:ring-blue-300
                      dark:bg-blue-600
                      dark:hover:bg-blue-700
                      dark:focus:ring-blue-800
                      w-15
                    "
                  >
                    Add Option
                  </button>
                </div>
              </div>

              <button
                class="
                  bg-blue-500
                  hover:bg-blue-700
                  text-white
                  font-bold
                  py-2
                  px-4
                  rounded-full
                "
              >
                save
              </button>
            </form>
          </div>

          <hr />
        </div>
      </div>
    </div>
    <button
      type="submit"
      class="
        w-full
        px-6
        py-2.5
        my-8
        mx-6
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
  <div class="flex justify-between">
    <button
      @click="add"
      class="
        inline-block
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
      Add Question
    </button>
    <button
      @click="removeAll"
      class="
        inline-block
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
      Remove All Question
    </button>
    <button
      @click="previewForm"
      class="
        inline-block
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
      Preview form
    </button>
    <button
      @click="postForm"
      class="
        inline-block
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
      Post forms
    </button>
  </div>
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

class Select {
  text;
  constructor(text) {
    this.text = text;
  }
}

export default {
  name: "large-modal",
  data() {
    return {
      showModal: false,
      showModal2: false,
      value: "",
      formInput: [],
      options: [],
      type: "",
      inputType: "text",
      label: "No name",
      edit: false,
      isPreview: false,
    };
  },
  methods: {
    toggleModal: function () {
      this.showModal = !this.showModal;
    },
    toggleModal2: function () {
      this.showModal2 = !this.showModal2;
    },
    add() {
      var ps = new Pr(this.type, this.inputType, this.label, this.edit);
      this.formInput.push(ps);
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
    SelectValue(index) {
      var option = new Select(this.value);
      this.options.push(option);
      this.value = "";
      this.formInput[index].edit = true;
    },
    previewForm() {
      this.isPreview = !this.isPreview;
    },
    postForm() {
      console.log("form content is saved to database");
    },
    removeAll() {
      this.formInput.length = 0;
    },
  },
};
</script>