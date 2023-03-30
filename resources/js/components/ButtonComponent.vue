<template>
  <button :class="buttonClass">
    <i v-if="isPlus" class="fa-solid fa-plus"></i>
    <i v-else-if="isMinus" class="fa-solid fa-minus"></i>
    {{ labelWithoutPlusAndMinus }}
  </button>
</template>

<script>
export default {
  props: {
    label: {
      type: String,
      required: true,
    },
  },
  computed: {
    isPlus() {
      return this.label === 'plus';
    },
    isMinus() {
      return this.label === 'minus';
    },
    labelWithoutPlusAndMinus() {
      return this.isPlus || this.isMinus ? '' : this.label;
    },
    buttonClass() {
      switch (this.label) {
        case 'Submit':
          return 'bg-[#01BFBF] px-14 py-2 text-white text-sm rounded ml-5';
        case 'Save as Draft':
          return 'bg-white border border-solid border-[#B8C0C5] px-8 py-2 text-sm rounded ml-5';
        case 'Cancel':
          return 'px-8 py-2 text-sm';
        case 'plus':
          return 'h-11 w-11 bg-[#00C0BF] rounded text-white';
        default:
          return 'h-11 w-11 bg-[#E5E5E5] rounded';
      }
    },
  },
};
</script>
