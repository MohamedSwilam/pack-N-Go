import axios from "../../axios/index.js"
export default {
    getAll(filters) {
        //filters=?paginate=5&sortAsc=id
        return axios.get(`visa${filters}`)
    },

    view(id) {
        return axios.get(`visa/${id}`)
    },

    create(data) {
        return axios.post(`visa`, data)
    },

    update(id, data) {
        return axios.post(`visa/${id}`, data)
    },

    delete(id) {
        return axios.delete(`visa/${id}`)
    }
}
