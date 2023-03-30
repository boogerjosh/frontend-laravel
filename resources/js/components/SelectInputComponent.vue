<template>
  <div>
    <LabelComponent v-if="textLabel" :textLabel="textLabel" />
    <div class="selectdiv w-full">
      <select :id="name" class="rounded text-sm" :class="inputClasses" :style="{ width }">
        <option v-if="selectedText" disabled selected value="">{{ selectedText }}</option>
        <option v-else-if="options" v-for="option in options" :key="option.id" :value="option.id">{{ option.name }}</option>
        <option v-else>{{ defaultOption }}</option>
      </select>
    </div>
  </div>
</template>

<script>
import LabelComponent from './LabelComponent.vue';

export default {
  name: 'SelectInput',
  components: {
    LabelComponent,
  },
  props: {
    name: {
      type: String,
      required: true,
    },
    textLabel: {
      type: String,
      required: false,
      default: '',
    },
    options: {
      type: Array,
      required: false,
      default: null,
    },
    inputClasses: {
      type: String,
      required: false,
      default: '',
    },
    width: {
      type: String,
      required: false,
      default: '',
    },
    selectedText: {
      type: String,
      required: false,
      default: '',
    },
    defaultOption: {
      type: String,
      required: false,
      default: 'Please select an option',
    },
  },
};
</script>

<style scoped>
.selectdiv {
    position: relative;
    display: flex;
    align-items: center;
    background-color: #F3F4F6;
    border-radius: 0.25rem;
    /*Don't really need this just for demo styling*/
}
  
.selectdiv:after {
    content: '\f078';
    font: normal normal normal 14px/1 FontAwesome;
    color: #B2B9C0;
    right: 12px;
    display: block;
    position: absolute;
    pointer-events: none;
}
  
  /* IE11 hide native button (thanks Matt!) */
  select::-ms-expand {
    display: none;
  }

  .selectdiv select {
    position: relative;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    /* Add some styling */
    padding: 0.75rem;
    display: block;
    width: 100%;
    background-image: none;
    background-color: #F3F4F6;
    -ms-word-break: normal;
    word-break: normal;
  }

  select:focus {
    border: none;
  }

</style>