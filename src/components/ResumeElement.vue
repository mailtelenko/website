<template>
    <div v-bind:class="{ 'expand' : expand_element }" class="resume_element">
        <span class="timeline_indicator"></span>
        <div v-on:click="toggle_element" v-click-outside="hide" v-bind:style="{ 'background-image': 'linear-gradient(140deg, rgb(255, 255, 255), 78%, ' + element_data.accent + '), url(/images/' + element_data.image + ')'}">
            <div class="above_fold">
                <h3>{{ element_data.name }}</h3>
                <p class="year">{{ element_data.dates }} </p>
                <div class="intro"><p>{{ element_data.description }}</p></div>
            </div>
            
            <div class="below_fold">
            
            </div>
        </div>
    </div>
</template>

<style scoped>
.resume_element{
        width: 100%;
        height: auto;

        color: black;

        position:relative;
    }

    .resume_element::before{
        content: "   ";
        position: absolute;
        
        background-color: var(--accent_opp_highlight);
        
        width: 4px;
        height: calc(100% - 35px);

        top: 35px;
        left: 38px;

        border-radius: 40px;

    }


.timeline_indicator {
        width: 15px;
        height: 15px;

        background-color: var(--accent_colour);
        clip-path: polygon(0% 0%, 75% 0%, 100% 50%, 75% 100%, 0% 100%);
        
        position:absolute;
        
        left: 33px;
        top: 0px;

    }


    .resume_element > div {
        margin: 30px;
        margin-left: 90px;

        padding: 35px 30px;
        height:120px;
        
        background-size:cover;
        background-position: center;

        border-radius: 4px;
        transition-duration: .75s;

        box-shadow: -1px 6px 15px var(--box_shadow_colour);
    }

    .expand > div {
        height: 300px!important;
    }

    .resume_element h3 {
        height: 40px;
        margin:0px;
        
        font-size: 1.5rem;
    }

    .resume_element .year {
        margin: 0px;
        margin-top: 5px;

        height: 1.1rem;
        
        font-size: 1.1rem;
    }

    .resume_element .intro {
        margin:0px;
        height: calc(120px - 1.1rem - 30px);
        line-height: calc(120px - 1.1rem - 30px);
    }

    .resume_element .intro p {
        display: inline-block;
        vertical-align: middle;
        line-height: normal;
    }

    .resume_element .above_fold {
        height: 120px;
        width:50%;

    }

    .resume_element > div:hover{
        height: 130px;

        transition-duration: .4s;
    }

</style>

<script>
export default {
    props: {
        title: String,
        element_data: Object
    },

    data: function() {
        return {
            expand_element: false,
        }
    },

    methods: {
        hide() {
            this.expand_element = false;    
        },

        toggle_element() {
            this.expand_element = !this.expand_element;
        }
    }
}
</script>