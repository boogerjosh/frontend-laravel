import Vue from 'vue';
import Vuex from 'vuex';
import axios from 'axios';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
      uomOptions: [],
      currencyOptions: [],
      chargeToOptions: []
    },
    mutations: {
      setUomOptions(state, data) {
        state.uomOptions = data;
      },
      setCurrencyOptions(state, data) {
        state.currencyOptions = data;
      },
      setChargeToOptions(state, data) {
        state.chargeToOptions = data;
      }
    },
    actions: {
      fetchUomOptions({ commit }) {
        axios.get('/api/uom').then(response => {
          commit('setUomOptions', response.data);
        });
      },
      fetchCurrencyOptions({ commit }) {
        axios.get('/api/currency').then(response => {
          commit('setCurrencyOptions', response.data);
        });
      },
      fetchChargeToOptions({ commit }) {
        axios.get('/api/charge-to').then(response => {
          commit('setChargeToOptions', response.data);
        });
      }
    },
    getters: {
      uomOptions(state) {
        return state.uomOptions;
      },
      currencyOptions(state) {
        return state.currencyOptions;
      },
      chargeToOptions(state) {
        return state.chargeToOptions;
      }
    }
});