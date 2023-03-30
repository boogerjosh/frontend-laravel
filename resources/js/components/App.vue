<template>
    <div class="container bg-white m-auto">
        <div class="px-5 pt-5">
            <component-a></component-a>
            <component-b></component-b>
        </div>
        <div class="bg-[#FBFBFB] w-full p-5 flex justify-end">
            <button-component label="Cancel"></button-component>
            <button-component label="Save as Draft"></button-component>
            <button-component label="Submit"></button-component>
        </div>
    </div>
</template>

<script>
    import ComponentB from './ComponentB.vue';
    import ComponentA from './ComponentA.vue';
    import ButtonComponent from './ButtonComponent.vue';
    export default {
        components: {
        'component-b': ComponentB,
        'component-a': ComponentA,
        'button-component': ButtonComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>