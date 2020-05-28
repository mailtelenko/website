<template>
    <div class="resume_page">
        <div v-for="element in resume_elements" v-bind:key="element.name">
            <ResumeElement :element_data="element"></ResumeElement>
        </div>
    </div>
</template>

<style scoped>

    
</style>

<script>
    import ResumeElement from "./ResumeElement.vue";


    export default {
        name: "ResumeComponent", 

        props: {
            title: String, 
            resume_elements: Array
        },

        components: {
            ResumeElement: ResumeElement
        },
    
        data () {
            return {
                
            }
        }
    }
</script>