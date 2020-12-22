<template>
  <div class="container">
    <div class="profile">
      <img class="profile_picture" alt="Profile picture" src="@/assets/Liam_Telenko.jpg" />
    </div>

    <div class="bio">
      <h1 class="title">
        Liam
        <br />Telenko
      </h1>

      <div class="info_container">
        <p>{{ bio }}</p>
      </div>
    </div>

    <div class="call_to_action">
      <button v-on:click="$emit('contact_button', 'show_contact')">Contact Me</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Profile",

  data() {
    return {
      show_contact: false
    };
  },

  props: {
    bio: String
  },

  methods: {}
};
</script>

<style scoped>
/*
  Container element
*/
.container {
  width: 100%;
  height: 100vh;
  margin: 0px;

  position: relative;

  color: var(--default_text);

  background-color: var(--panel_colour);
}

/*
  Profile photo section
*/
.profile {
  height: 40vh;

  position: relative;
}

.profile_picture {
  width: 55%;

  position: absolute;
  bottom: 4vh;
  left: calc((100% - 55%) / 2);

  border-radius: 100%;

  box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
}

/*
  Bio section
*/

.bio {
  height: 50vh;
}

.bio div,
h1 {
  padding: 0px 15%;
}

.title {
  font-size: 2.5rem;
  line-height: 3rem;

  margin: 2rem 0px 0px 0px;
}

.info_container {
  height: calc(58vh - 8.5rem);

  line-height: calc(58vh - 12.5rem);
}

p {
  margin: 0px;

  display: inline-block;
  vertical-align: middle;
  line-height: normal;
}

button {
  position: absolute;

  bottom: 25px;
  left: calc((100% - 155px) / 2);

  width: 150px;
}

@media (max-width: 800px) and (min-width: 600px) {
  .profile_picture {
    width: 40%;
    left: calc((100% - 40%) / 2);
  }

  .bio div,
  h1 {
    padding: 0px 25%;
  }

  button {
    bottom: 50px;
  }
}
</style>
