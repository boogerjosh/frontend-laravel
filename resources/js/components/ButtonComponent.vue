<template>
    <button :class="{ 'bg-[#01BFBF] px-14 py-2 text-white text-sm rounded ml-5': label === 'Submit', 'bg-white border border-solid  border-[#B8C0C5] px-8 py-2 text-sm rounded ml-5': label === 'Save as Draft', 'px-8 py-2 text-sm': label === 'Cancel' }">
    {{ label }}
    </button>
</template>

<script>
export default {
    props: ['label'],
    mounted() {
        console.log('Button component mounted.')
    }
}
</script>