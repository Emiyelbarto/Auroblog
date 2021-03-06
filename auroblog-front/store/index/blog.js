export const state = () => ({
  data: [],
  dataView: [],
  currentPage: 1,
  totalPages: 1,
  total: 0,
  loading: false,
  errorGet: false,
})

export const actions = {
  async getBlogs({ commit }, queryParams) {
    try {
      commit('TOGGLE_LOADING', true)
      commit('TOGGLE_ERROR_GET', false)

      const { data } = await this.$axios.get(`/blogs${queryParams}`)

      commit('SET_DATA', data.data)
      commit('SET_TOTAL', data.total)
      commit('SET_TOTAL_PAGES', data.last_page)
      commit('SET_CURRENT_PAGE', data.current_page)
      commit('TOGGLE_LOADING', false)
    } catch (error) {
      commit('TOGGLE_LOADING', false)
      commit('TOGGLE_ERROR_GET', true)
    }
  },

  async getBlogFromSlug({ commit }, slug) {
    try {
      commit('TOGGLE_LOADING', true)
      commit('TOGGLE_ERROR_GET', false)

      const { data } = await this.$axios.get(`/blogs/${slug}`)

      commit('SET_DATA_VIEW', data)
      commit('TOGGLE_LOADING', false)
    } catch (error) {
      commit('TOGGLE_LOADING', false)
      commit('TOGGLE_ERROR_GET', true)
    }
  },
}

export const mutations = {
  SET_DATA(state, data) {
    state.data = data
  },

  SET_DATA_VIEW(state, data) {
    state.dataView = data
  },

  SET_TOTAL(state, total) {
    state.total = total
  },

  SET_CURRENT_PAGE(state, currentPage) {
    state.currentPage = currentPage
  },

  SET_TOTAL_PAGES(state, totalPages) {
    state.totalPages = totalPages
  },

  TOGGLE_ERROR_GET(state, status) {
    state.errorGet = status
  },
  TOGGLE_LOADING(state, status) {
    state.loading = status
  },
}
