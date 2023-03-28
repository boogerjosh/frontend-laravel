<template>
    <div class="container bg-white mx-auto">
        <component-b></component-b>
        <div class="bg-[#FBFBFB] w-full p-2.5 flex justify-end">
            <button-component label="Cancel"></button-component>
            <button-component label="Save as Draft"></button-component>
            <button-component label="Submit"></button-component>
        </div>
    </div>
</template>

<script>
    import ComponentB from './ComponentB.vue'
    import ButtonComponent from './ButtonComponent.vue'
    export default {
        components: {
        'component-b': ComponentB,
        'button-component': ButtonComponent
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>