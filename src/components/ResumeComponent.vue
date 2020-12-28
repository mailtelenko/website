<template>
  <div
    class="resume_page"
    :class="{'half': display_props.size == 'half', 'slim': display_props.size == 'slim', 'no_timeline' : !display_props.timeline}"
  >
    <ResumeElement
      class="resume_element"
      :class="{'half': display_props.size == 'half', 'slim': display_props.size == 'slim', 'no_timeline' : !display_props.timeline }"
      v-for="element in resume_elements"
      v-bind:key="element.name"
      :display_props="display_props"
      :element_data="element"
    ></ResumeElement>
  </div>
</template>

<style>
.resume_page::before {
  content: "   ";
  position: absolute;

  /*background-color: var(--accent_opp_highlight);
*/
  background-color: var(--box_shadow_colour);
  width: 4px;
  height: calc(100% - 140px);

  overflow: visible;

  top: 80px;
  left: 40px;

  border-radius: 40px;
}

.no_timeline::before,
.no_timeline::after {
  display: none;
}

/*
    Half size
*/

.resume_page {
  padding-bottom: 20px;

  position: relative;

  height: auto;
}

.resume_element {
  width: 100%;

  position: relative;
}

.resume_page.half,
.resume_page.slim {
  display: inline-grid;

  grid-template-columns: 50% 50%;
  grid-template-rows: auto;
  row-gap: 30px;

  padding-left: 90px;
  padding-right: 10px;

  width: calc(100% - 100px);
}

.resume_page.slim {
  row-gap: 30px;
  grid-template-columns: 45% 45%;

  width: 100%;

  padding-left: 90px;
    width: calc(100% - 50px);
}

.resume_element.half > div,
.resume_element.slim > div {
  width: calc(100% - 100px);

  display: inline-block;
  position: relative;

  margin: 0px;

  max-height: 110px;
  height: 110px;

  transition-duration: 0.2s;
}

.resume_element.slim > div {
  max-height: 60px;
  min-height: 60px;

  grid-template-columns: 100% 0%;

  width: calc(100% - 100px);
}

.resume_element.half > div:hover {
  max-height: 110px;
  height: 110px;

  box-shadow: -1px 6px 15px var(--box_shadow_colour);

  transition-duration: 0.2s;
}

.resume_element.half .above_fold,
.resume_element.slim .above_fold {
  width: 100%;
}

.resume_element.slim > div:hover {
  max-height: 60px !important;
  min-height: 60px !important;
  box-shadow: -1px 6px 15px var(--box_shadow_colour);
}
</style>

<script>
import ResumeElement from "./ResumeElement.vue";

export default {
  name: "ResumeComponent",

  props: {
    title: String,
    resume_elements: Array,
    display_props: Object
  },

  components: {
    ResumeElement: ResumeElement
  },

  data() {
    return {};
  }
};
</script>