<template>
  <div class="container panel">
    <h2>Let's get in touch</h2>
    <p>Fill in the form below and I'll get back to you as soon as possible</p>

    <div class="form_container">
      <form v-if="!form_submitted" @submit.prevent="send_form" id="contact_form">
        <input class="input" v-model="name" placeholder type="text" name="name" />
        <label>Name:</label>
        <input class="input" v-model="email" ref="email" placeholder type="email" name="email" />
        <label>Email:</label>
        <textarea
          id="message"
          v-model="message"
          class="input"
          placeholder
          type="text"
          name="message"
        ></textarea>
        <label>Message:</label>

        <button v-if="!form_submitted" id="contact-form-button">
          <font-awesome-icon class="button_icon" icon="paper-plane" />Submit
        </button>
      </form>

      <div v-if="form_submitted" id="form_success">
        <font-awesome-icon class="success_icon" icon="thumbs-up" />
        <h3>Thanks!</h3>
        <p>Your message sent successfully, we'll be in touch.</p>
      </div>
    </div>

    <button v-show="form_submitted" @click="$emit('close_contact')" id="close">Close</button>
    <p
      v-show="form_error"
      id="contact-form-status"
    >Oops! Looks like something went wrong. Please send me an email at mailtelenko@gmail.com.</p>
    <p
      v-show="not_filled"
      id="contact-form-status"
    >Oops! Please make sure the entire form is filled out.</p>
  </div>
</template>

<script>
export default {
  name: "contact",

  data() {
    return {
      form_submitted: false,
      form_error: false,
      not_filled: false,

      email: "",
      message: "",
      name: "",

      form_endpoint: "https://formspree.io/xaypeppj"
    };
  },

  methods: {
    error() {
      this.form_error = true;
    },

    success() {
      this.form_submitted = true;
    },

    send_form() {
      let form_data = new FormData();

      let error = this.error;
      let success = this.success;

      this.not_filled = false;

      // Make sure form is filled out
      if (this.email == "" || this.name == "" || this.message == "") {
        return (this.not_filled = true);
      }

      // Append form
      form_data.append("email", this.email);
      form_data.append("name", this.name);
      form_data.append("message", this.message);

      var xhr = new XMLHttpRequest();
      xhr.open("POST", this.form_endpoint);
      xhr.setRequestHeader("Accept", "application/json");
      xhr.onreadystatechange = function() {
        if (xhr.readyState !== XMLHttpRequest.DONE) return;
        if (xhr.status === 200) {
          success();
        } else {
          error();
        }
      };
      xhr.send(form_data);
    }
  },

  props: {}
};
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
  margin-top: 8vh;
}

form {
  position: relative;
  display: block;

  width: 100%;

  margin: auto;
  margin-top: 10px;
}

.input {
  border: none;
  border-bottom: 2px solid var(--panel_hover);

  z-index: 1000 !important;

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

.input:valid:not(:placeholder-shown) {
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
.input:not(:placeholder-shown) + label {
  transform: scale(0.9) translateY(-2rem);
}

#contact-form-button {
  float: right;

  position: absolute;
  bottom: -20vh;
  right: -40px;

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
  margin: auto;

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
  display: none;
}
</style>