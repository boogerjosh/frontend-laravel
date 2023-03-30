<template>
  <div>
    <LabelComponent 
      v-if="textLabel"
      :textLabel="textLabel"
    />
    <input :id="name" :class="inputClasses" :type="type" :placeholder="placeholder" :value="value" />
  </div>
</template>

<script>
import LabelComponent from './LabelComponent.vue';
export default {
  name: 'TextInput',
  components: {
    'LabelComponent': LabelComponent,
  },
  props: {
    name: String,
    textLabel: String,
    type: String,
    placeholder: String,
    value: [String, Number],
    inputClasses: String,
  },
};
</script>

<style scoped>
  input:focus {
    outline: none;
    border-color: #06c0c0;
  }
</style>