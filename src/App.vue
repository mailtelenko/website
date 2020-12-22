<template>
  <div id="app">
    <Profile v-on:contact_button="toggle_contact" id="profile_container" :bio="bio" />

    <div :class="{'blur': show_contact}" id="interactive_resume">
      <h2>Get to know my</h2>
      <div id="page_dropdown">
        <span
          v-on:click="show_dropdown = !show_dropdown"
          v-click-outside="hide_dropdown"
          :class="{'empty_fill': resume_section == '', 'dropdown_active': show_dropdown}"
          id="resume_page"
        >
          {{ resume_section }}
          <font-awesome-icon
            id="dropdown_chevron"
            icon="chevron-down"
            :class="{'invert': show_dropdown}"
          />
        </span>

        <ul class="panel dropdown" v-show="show_dropdown">
          <li
            v-for="page in resume_elements"
            :key="page"
            v-show="resume_section != page.name"
            :value="page.name"
            @click="update_page(page.name)"
          >
            <font-awesome-icon class="dropdown_icon" :icon="page.icon" />
            {{page.name}}
          </li>
        </ul>
      </div>

      <div v-show="resume_section == ''" id="starting_page">
        <font-awesome-icon id="point_icon" icon="hand-point-up" />
        <h3>Select an item from the list above to get started</h3>
      </div>

      <ResumeComponent
        v-if="resume_section != ''"
        :resume_elements="resume_elements[resume_section].elements"
        :display_props="resume_elements[resume_section].display_props"
        title="Test"
      />

      <font-awesome-icon
        v-on:click="toggle_dark"
        id="dark_toggle"
        class="panel panel_hover"
        :icon="['fas', 'moon']"
      />
    </div>

    <transition name="slide-up-fade">
      <div v-show="show_contact">
        <div id="mobile_blur"></div>
        <Contact @close_contact="this.force_hide_cont" v-click-outside="hide_contact" />
      </div>
    </transition>
  </div>
</template>

<script>
import Profile from "./components/Profile.vue";
import ResumeComponent from "./components/ResumeComponent.vue";
import Contact from "./components/Contact.vue";

import * as info from './assets/data.js';

export default {
  name: "App",
  components: {
    Profile,
    ResumeComponent,
    Contact
  },

  created() {
    if (
      window.matchMedia &&
      window.matchMedia("(prefers-color-scheme: dark)").matches
    ) {
      this.toggle_dark();
    }
  },

  methods: {
    toggle_dark() {
      if (!this.dark_mode)
        document.documentElement.setAttribute("data-theme", "dark");
      else document.documentElement.setAttribute("data-theme", "light");

      this.dark_mode = !this.dark_mode;
    },

    hide_dropdown() {
      this.show_dropdown = false;
    },

    force_hide_cont() {
      this.show_contact = false;
    },

    hide_contact(e) {
      if (e.explicitOriginalTarget.innerHTML != "Contact Me")
        this.show_contact = false;
    },

    update_page(value) {
      this.resume_section = value;
    },

    toggle_contact() {
      this.show_contact = !this.show_contact;
      if (this.show_contact) {
        this.contact_component = "";
      } else {
        this.contact_component = "Contact";
      }
    }
  },

  data() {
    return info.data;
  }
};
</script>

<!-- Global Styling !-->
<style>
/* Variable declaration */
:root {
  --background-colour: rgb(228, 228, 228);

  --panel_colour: rgb(247, 247, 247);
  --panel_hover: rgb(235, 235, 235);
  --panel_embed: rgb(207, 207, 207);
  --panel_dark_embed: rgb(145, 145, 145);
  --panel_overlay: rgba(238, 238, 238, 0.589);

  --accent_colour: #e94f37;
  --accent_opp: rgb(12, 76, 82);
  --accent_opp_muted: #041b15;
  --accent_opp_highlight: #1e6b7e;

  --box_shadow_colour: rgba(0, 0, 0, 0.15);
  --box_shadow_colour_intense: rgba(0, 0, 0, 0.22);

  --default_text: rgb(0, 0, 0);
}

[data-theme="dark"] {
  --background-colour: rgb(41, 41, 43);

  --panel_colour: rgb(59, 59, 59);
  --panel_hover: rgb(90, 90, 90);
  --panel_embed: rgb(216, 216, 216);
  --panel_overlay: rgba(56, 55, 55, 0.726);

  --box_shadow_colour: rgba(24, 19, 19, 0.4);
  --box_shadow_colour_intense: rgba(0, 0, 0, 0.653);

  --accent_colour: #e94f37;
  --accent_opp: rgb(12, 76, 82);
  --accent_opp_muted: #041b15;
  --accent_opp_highlight: #1d7874;

  --default_text: rgb(245, 241, 241);
}

@font-face {
  font-family: "BebasNeue";
  src: url("./assets/Cabin-Regular-TTF.ttf");
}

@font-face {
  font-family: "CabinBold";
  src: url("./assets/Cabin-Bold-TTF.ttf");
}

body {
  height: 100vh;
  overflow: hidden;

  background-color: var(--background-colour);

  margin: 0px;
  padding: 0px;
}

* {
  font-family: "BebasNeue" !important;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;

  height: 100vh;
  width: 100vw;
}

.bold_text {
  font-family: "CabinBold" !important;
}

/*
  Components
*/

button {
  border: none;
  border-radius: 1000px;

  padding: 15px 30px;

  color: white;

  background-color: var(--accent_opp);

  box-shadow: 0px 2px 15px var(--box_shadow_colour);

  transition-duration: 0.2s;
}

button:hover {
  transform: translateY(-2px) scale(1.01, 1.01);

  box-shadow: 0px 4px 15px var(--box_shadow_colour_intense);

  background-color: var(--accent_opp_highlight);

  cursor: pointer;

  transition-duration: 0.2s;
}

button::-moz-focus-inner {
  border: 0;
}

button:active {
  transform: scale(0.98);
}

.button_icon {
  padding-right: 20px;
}

.panel {
  background-color: var(--panel_colour);
  color: var(--default_text);

  box-shadow: 0px 0px 10px var(--box_shadow_colour);

  transition-duration: 0.2s;
}

.panel_hover:hover {
  box-shadow: 0px 3px 10px var(--box_shadow_colour_intense);

  cursor: pointer;

  transition-duration: 0.2s;
}

.blur {
  filter: blur(5px);

  transition-duration: 0.3s;
}

#profile_container {
  width: 25vw;

  position: absolute;
  left: 0px;
  top: 0px;
}

#interactive_resume {
  margin: 0px;

  width: 75vw;
  height: 100vh;

  color: var(--default_text);

  overflow: auto;
  overflow-x: hidden;

  position: absolute;
  top: 0px;
  right: 0px;

  transition-duration: 0.2s;
}

#interactive_resume h2 {
  padding: 30px 0.8rem 8px 90px;

  position: relative;
  display: inline-block;

  font-size: 2rem;
}

#page_dropdown {
  display: inline-block;

  position: relative;
}

#resume_page {
  border: none;
  border-bottom: 2px solid var(--default_text);

  background-color: transparent;

  padding: 2px;

  font-size: 1.9rem;

  height: 2.2rem;

  display: inline-block;

  cursor: pointer;
}

#resume_page:hover > #dropdown_chevron {
  transform: scale(1.1) translateY(-2px);

  transition-duration: 0.2s;
}

#resume_page:hover,
.dropdown_active {
  border-width: 3px !important;

  border-color: var(--accent_opp) !important;

  transition-duration: 0.1s !important;
}

.invert {
  transform: rotate(180deg) scale(1.1) !important;

  transition-duration: 0.2s;
}

#dropdown_chevron {
  height: 20px;
  margin: 0px 5px 3px 15px;

  transition-duration: 0.2s;
}

.empty_fill {
  padding: 0px 5px 2px 160px !important;
}

.dropdown {
  width: 220px;
  height: auto;

  padding: 0px;

  position: absolute;
  top: 40px;
  z-index: 100;

  border-radius: 5px;
}

.dropdown li {
  padding: 12px 15px;
  margin: 5px 0px;

  list-style-type: none;

  text-transform: capitalize;
}

.dropdown_icon {
  margin-left: 5px;
  margin-right: 10px;

  display: inline-block;
  position: relative;

  width: 30px !important;

  text-align: center;
}

.dropdown li:hover {
  background-color: var(--panel_hover);

  cursor: pointer;
}

#dark_toggle {
  position: absolute;

  width: 20px;
  height: 20px;

  padding: 10px;

  border-radius: 100px;

  top: 20px;
  right: 30px;
}

#dark_toggle:hover {
  transform: rotate(-18deg);
}

#dark_toggle:active {
  transform: scale(0.9) rotate(-30deg);
}

/*
  Starting page
*/
#starting_page {
  text-align: center;

  line-height: 70vh;
}

#point_icon {
  color: var(--panel_dark_embed);

  width: 90px;
  height: 90px;

  position: absolute;

  left: calc(30px + (14 * 1rem) + 120px);
}

/*
  Expanded list elements
*/
.expand_list li {
  margin-top: 15px;
}

hr {
  margin: 25px 15px 25px 10px;

  color: var(--panel_embed);
}

/* 
  Animations
*/

.slide-up-fade-enter-active,
.slide-up-fade-leave-active {
  transition: all 0.3s ease;
}

.slide-up-fade-enter,
.slide-up-fade-leave-to {
  transform: translateX(60px);
  opacity: 0;
}

.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}

/*
  Mobile
*/
@media only screen and (max-width: 1100px) {
  #profile_container {
    width: 30vw;
  }

  #interactive_resume {
    width: 70vw;
  }
}

@media only screen and (max-width: 800px) {
  #profile_container {
    width: 100vw;
  }

  #interactive_resume {
    display: none;
  }

  #mobile_blur {
    position: absolute;

    left: 0px;
    top: 0px;

    width: 100vw;
    height: 100vh;

    background-color: var(--box_shadow_colour);
  }
}
</style>
