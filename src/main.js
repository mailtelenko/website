import Vue from 'vue'
import App from './App.vue'

import vOusideEvents from 'vue-outside-events'

Vue.config.productionTip = false

Vue.use(vOusideEvents);

new Vue({
  render: h => h(App),
}).$mount('#app')
