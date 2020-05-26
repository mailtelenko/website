<template>
  <div class="container">
    <div class="profile">
      <img class="profile_picture" src="@/assets/Liam_Telenko.jpg">
    </div>
    
    <div class="bio">
      <h1 class="title">Liam <br/> Telenko</h1>
    
      <div class="info_container">
        <p>{{ bio }}</p>
      </div>
    </div>

    <div class="call_to_action">
      <button @click="show_contact">Contact Me</button>
    </div>
  </div>  
</template>

<script>
  export default {
    name: 'Profile',

    props: {
      bio: String,
    },

    methods: {
      show_contact() {
        alert("contact info");
      }
    }
  }
</script>

<style scoped>
/*
  Container element
*/
.container {
  width: 100%;
  height: 100vh;
  margin:0px;

  position: relative;

  background-color:white;
}

/*
  Profile photo section
*/
.profile {
  height: 40vh;

  position:relative;
}

.profile_picture {
  width: 15vw;

  position: absolute;
  bottom: 4vh;
  left: calc((25vw - 15vw)/2);

  border-radius: 100%;

  box-shadow:  0px 0px 15px rgba(0,0,0,.15);
}


/*
  Bio section
*/

.bio {
  height: 50vh;
}

.bio div, h1{
  padding: 0px 4vw;
}

.title {
  font-size: 2.5rem;
  line-height: 3rem;

  margin: 2rem 0px 0px 0px;
}

.info_container {

  height: calc(60vh - 8.5rem);

  line-height: calc(60vh - 12.5rem);
}

p { 
  margin:0px;

  display: inline-block;
  vertical-align: middle;
  line-height: normal;
}

button {
  position: absolute;
  
  bottom: 25px;
  left: calc((25vw - 155px)/2);

  width:150px;
}

</style>
