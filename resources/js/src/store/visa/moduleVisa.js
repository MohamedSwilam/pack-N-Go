
import state from './moduleVisaState'
import mutations from './moduleVisaMutations'
import actions from './moduleVisaActions'
import getters from './moduleVisaGetters'



export default {
    namespaced: true,
    state: state,
    mutations: mutations,
    actions: actions,
    getters: getters,
}

