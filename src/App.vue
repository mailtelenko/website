<template>
  <div id="app">
    <Profile id="profile_container" :bio="bio"/>

    <div id="interactive_resume">
      <h2>Get to know my </h2><span id="resume_page">{{ resume_section }}</span>
      
      <h3 v-show="resume_section == ''">Select an item from the dropdown list above to get started</h3>

      <ResumeComponent v-show="resume_section != ''" :resume_elements="resume_elements[resume_section]" title="Test" />
    </div>

    <span v-on:click="toggle_dark"  id="dark_toggle">O</span>
  </div>
</template>

<script>
import Profile from './components/Profile.vue'
import ResumeComponent from './components/ResumeComponent.vue'

export default {
  name: 'App',
  components: {
    Profile,
    ResumeComponent
  },

  methods: {
    toggle_dark() {
      if (!this.dark_mode) 
        document.documentElement.setAttribute('data-theme', 'dark');
      else
        document.documentElement.setAttribute('data-theme', 'light');
    
      this.dark_mode = !this.dark_mode;
    },
  },


  data () {
    return {
      resume_section: "education",
      bio: "I am a first year engineering student studying at McMaster University in Hamilton, Ontario. I am an avid developer who creates fluid layouts and efficient code.",
      dark_mode : false,


      resume_elements: {
        education: [
                      {
                          name: "McMaster University", 
                          dates: "2019 - Present",
                          description: "Text that lwjefio oijwef owie wefo ef we elf wekjfwoiejf we ew wef wef we fflkwejfowiefje.",
                          image: "mcmaster.jpg",
                          accent: "rgba(202 , 111, 0, .2)"
                      },
                      {

                          name: "William Lyon Mackenzie CI", 
                          dates: "2019 - Present",
                          description: "school.",
                          image: "wlmac.jpg",
                          accent: "rgba(0,0,0,0)"
                      }
                ],

        "work experience": [
                      {
                          name: "McMaster University", 
                          dates: "2019 - 2020",
                          description: "Text that lwjefio oijwef owie wefo ef we elf wekjfwoiejf we ew wef wef we fflkwejfowiefje.",
                          image: "mcmaster.jpg",
                          accent: "rgba(202 , 111, 0, .2)"
                      },
                      {

                          name: "William Lyon Mackenzie CI", 
                          dates: "2019 - Present",
                          description: "school.",
                          image: "wlmac.jpg",
                          accent: "rgba(0,0,0,0)"
                      }
                ]
      }
    
    }
  }


}
</script>

<!-- Global Styling !-->
<style>
/* Variable declaration */
:root {
  --background-colour: rgb(228, 228, 228);
  
  --panel_colour: rgb(209, 209, 209);

  --accent_colour: #E94F37;
  --accent_opp: #093A3E;
  --accent_opp_muted: #041B15;
  --accent_opp_highlight: #1D7874;

  --box_shadow_colour: rgba(0,0,0,.15);
  --box_shadow_colour_intense: rgba(0,0,0,.22);

  --default_text: rgb(0,0,0);

}

[data-theme = "dark"] {
  --background-colour: rgb(71, 71, 71);
  
  --panel_colour: rgb(209, 209, 209);

  --box_shadow_colour: rgba(0,0,0,.15);
  --box_shadow_colour_intense: rgba(0,0,0,.22);

  --default_text: rgb(255, 255, 255);
}

@font-face {
  font-family: "BebasNeue";
  src: url("./assets/Cabin-Regular-TTF.ttf");
}

body {
  height: 100vh;
  overflow: hidden;

  background-color: var(--background-colour);

  margin: 0px;
  padding:0px;
}


*{
  font-family: "BebasNeue"!important;
}


#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  height: 100vh;
  width: 100vw;
}

/*
  Components
*/

button {
  border:none;
  border-radius: 1000px;

  padding: 15px 30px;

  color: white;

  background-color: var(--accent_opp_highlight);

  box-shadow: 0px 0px 10px var(--box_shadow_colour);

  transition-duration: .2s;
}

button:hover {
  transform: translateY(-2px) scale(1.01, 1.01);

  box-shadow: 0px 4px 10px var(--box_shadow_colour_intense);

  transition-duration: .2s;
}



#profile_container {
  width: 25vw;

  position: absolute;
  left:0px;
  top:0px;
}


#interactive_resume {
  margin:0px;
  
  width: 75vw;
  height: 100vh;

  color: var(--default_text);

  overflow: auto;

  position: absolute;
  top: 0px;
  right: 0px;
}

#interactive_resume h2 {
  padding: 30px 1rem 10px 90px;

  position:relative;
  display: inline-block;

  font-size: 1.9rem;
}

#resume_page {
  border-bottom: 2px solid var(--default_text);
  
  padding: 2px;

  font-size: 1.9rem;

  display: inline-block;
  width: 200px!important;
}


#dark_toggle {
  position: absolute;
  top: 10px;
  right: 10px;
}

</style>
