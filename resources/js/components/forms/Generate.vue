<template>
<button type="button"
  class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
  data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button>



<div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
  aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog relative w-auto pointer-events-none">
    <div
      class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">
          Modal title
        </h5>
        <button type="button"
          class="btn-close box-content w-4 h-4 p-1 text-black border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-black hover:opacity-75 hover:no-underline"
          data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body relative p-4">
        ...
      </div>
      <div
        class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
        <button type="button"
          class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out"
          data-bs-dismiss="modal">Close</button>
        <button type="button"
          class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">Understood</button>
      </div>
    </div>
  </div>
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
  data() {
    return {
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
      this.isPreview = this.isPreview;
    },
    postForm() {
      console.log("form content is saved to database");
    },
    removeAll(){
      this.formInput.length=0;
    }
  },
};
</script>