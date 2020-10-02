export const state = () => ({
  data: [],
  loading: false,
  errorGet: false,
})

export const actions = {
  async getBlogs({ commit }) {
    try {
      commit('TOGGLE_LOADING', true)
      commit('ERROR_GET', false)

      const { data } = await this.$axios.get('/blog/index')

      commit('SET_DATA', data)
      commit('TOGGLE_LOADING', false)
    } catch (error) {
      commit('TOGGLE_LOADING', false)
      commit('ERROR_GET', true)
    }
  },
}

export const mutation = {
  SET_DATA(state, data) {
    state.data = data
  },
  ERROR_GET(state, status) {
    state.errorGet = status
  },
  TOGGLE_LOADING(state, status) {
    state.loading = status
  },
}
