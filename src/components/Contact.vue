<template>
        <div class="container panel">

            <h2>Let's get in touch</h2>
            <p>Fill in the form below and I'll get back to you as soon as possible</p>


            <div class="form_container">
                <form v-if="!form_submitted" id="contact_form" action="https://formspree.io/xaypeppj" method="POST">
                    <input class="input" placeholder="" type="text" name="name" />
                    <label>Name:</label>
                    <input class="input" placeholder="" type="email" name="email" />
                    <label>Email:</label>
                    <textarea id="message" class="input" placeholder="" type="text" name="message"></textarea>
                    <label>Message:</label>
                </form>

                <div v-if="form_submitted" id="form_success">
                    <font-awesome-icon class="success_icon" icon="thumbs-up" />
                    <h3>Thanks!</h3>
                    <p>Your message sent successfully, we'll be in touch.</p>
                
                    
                </div>
            </div>

            <button v-if="!form_submitted" id="contact-form-button"><font-awesome-icon class="button_icon" icon="paper-plane" />Submit</button>
            <button v-show="form_submitted" @click="$emit('close_contact')" id="close">Close</button>
            <p v-show="!form_submitted" id="contact-form-status"></p>
            <p @click="this.update_form_status" id="contact-form-succ"></p>
        </div>
</template>

<script>
export default {
    name: 'contact',

    data () {
        return {
            form_submitted: false
        }
    },

    methods: {
        update_form_status() {
            this.form_submitted = true;
        }
    },

    props: {
      
    },
}
</script>

<style scoped>
.container {
    height: 86vh;
    max-width: 350px;

    position: absolute;
    right: 0px;

    margin: 3vh 2vw;

    border-radius: 5px;

    padding: 4vh 4vw;

    overflow: auto;

    transition-duration: 0s;
}

h2 {
    font-size: 1.7rem;
}

.form_container {
    width: calc(100% - 80px);

    padding: 40px 40px 15px 40px;

    border: solid var(--panel_hover) 3px;
    border-radius: 4px;

    margin: auto;
    margin-top: 7vh;
}

form {
    position: relative;
    display:block;

    width: 100%;

    margin: auto;
    margin-top: 10px
}

.input {
    border: none;
    border-bottom: 2px solid var(--panel_hover);

    z-index: 1000!important;

    color: var(--default_text);

    position: relative;

    padding: 0px 0px 7px 0px;

    width: 100%;

    margin-bottom: 55px;

    background: transparent;
}

#message {
    margin-bottom: 30px;

    height: 1rem;
}

.input:invalid {
    outline: none;
    box-shadow: none;
    border-color: rgb(214, 43, 1);
}

.input:valid:not(:placeholder-shown){
    border-color: green;
}


label {
    z-index: 1;

    position: absolute; 

    left: 0px;

    transform: translateY(0rem);
    transform-origin: 0%;

    transition: transform 400ms;
}

#contact-form-status {
    color: rgb(214, 43, 1);

    width: calc(100% - 8vw);
    text-align: center;

    margin-top: 12px;

    position: absolute;
    
    display: block;
}

.input:focus-within + label,
.input:not(:placeholder-shown)  + label{
    transform: scale(.9) translateY(-2rem);
}

#contact-form-button {
    float:right;

    position: absolute;
    bottom: 6vh;
    right: 40px;

    margin: 60px 0px 10px 0px;
}


/*
    Form success
*/
#form_success {
    text-align: center;
}

.success_icon {
    width: 30%;
    height: 30%;

    color: var(--panel_embed);

    display: block;
    margin:auto;

    padding: 40px;

    border: solid 6px;
    border-radius: 100%;

    margin-bottom: 40px;
}

#close {
    display: block;
    margin: auto;

    margin-top: 20px;
}

#contact-form-succ {
    display:none;
}

</style>