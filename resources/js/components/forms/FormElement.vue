<template>
     <form class="py-4 my-4" @submit.prevent="storeForm">
        <div v-for="field in formHeader" :key="field.id">
          <BaseInput v-bind="$attrs" :label="field.label" types="text" />
          <h1>{{ field.label }}</h1>
        </div>
        <div class="form-group mb-6"></div>
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
</template>