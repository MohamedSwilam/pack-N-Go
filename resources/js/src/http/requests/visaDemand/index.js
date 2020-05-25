import axios from "../../axios/index.js"
export default {
    getAll(filters) {
        //filters=?paginate=5&sortAsc=id
        return axios.get(`visa-demand${filters}`)
    },

    view(id) {
        return axios.get(`visa-demand/${id}`)
    },

    delete(id) {
        return axios.delete(`visa-demand/${id}`)
    }
}
