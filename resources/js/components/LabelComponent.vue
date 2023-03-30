<template>
    <label class="text-sm">{{textLabel}}</label>
</template>

<script>
export default {
  name: 'LabelComponent',
  props: {
    textLabel: String,
  },
};
</script>