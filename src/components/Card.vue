<template>
  <div>
    <div class="card">
      <h4>{{ element_data.title }}</h4>
      <td class="expand_point_content" v-html="element_data.content"></td>
    </div>
  </div>
</template>

<style scoped>
.card {
  background-color: var(--panel_overlay);

  padding: 1px 30px 15px 30px;

  border-radius: 10px;

  width: calc(98% - 68px);
  white-space: normal;

  margin-bottom: 20px;

  margin-left: 4px;


  box-shadow: 0px 8px 8px var(--box_shadow_colour);
}

.card h4 {
  font-size: 1.3rem;
  margin-bottom: 20px;
}
</style>

<script>
export default {
  props: {
    title: String,
    element_data: Object,
    display_props: Object
  },

  data: function() {
    return {
      expand_element: true
    };
  },

  methods: {
    hide() {
      this.expand_element = false;
    },

    toggle_element() {
      if (this.display_props.expand) {
        this.expand_element = !this.expand_element;
      }
    }
  }
};
</script>