<template>
  <div>
    <LabelComponent v-if="textLabel" :textLabel="textLabel" />
    <input :id="name" :class="inputClasses" :type="type" :placeholder="placeholder" :value="value" @input="$emit('input', $event.target.value)" />
  </div>
</template>

<script>
import LabelComponent from './LabelComponent.vue';

export default {
  name: 'TextInput',
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
    type: {
      type: String,
      required: false,
      default: 'text',
    },
    placeholder: {
      type: String,
      required: false,
      default: '',
    },
    value: {
      type: [String, Number],
      required: false,
      default: '',
    },
    inputClasses: {
      type: String,
      required: false,
      default: '',
    },
  },
};
</script>

<style scoped>
input:focus {
  outline: none;
  border-color: #06c0c0;
}
</style>
