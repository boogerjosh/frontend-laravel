<template>
  <div>
    <LabelComponent 
      v-if="textLabel"
      :textLabel="textLabel"
    />
    <div class="selectdiv w-full">
      <select :id="name" class="rounded text-sm">
        <option v-if="selectedText" disabled selected value="">{{selectedText}}</option>
        <option v-else-if="options" v-for="option in options" :key="option.id" :value="option.id">{{ option.name }}</option>
        <option v-else>{{defaultOption}}</option>
      </select>
    </div>
  </div>
</template>

<script>
  import LabelComponent from './LabelComponent.vue';
  export default {
    name: 'SelectInput',
    components: {
      'LabelComponent': LabelComponent,
    },
    props: {
      name: String,
      textLabel: String,
      options: Array,
      inputClasses: String,
      width: String,
      selectedText: String,
      defaultOption: String
    },
  };
</script>
