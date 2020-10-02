import Vue from 'vue'
import Paginate from 'vuejs-paginate'
Vue.component('paginate', Paginate)
if (process.client) {
  require('vuejs-paginate')
}
