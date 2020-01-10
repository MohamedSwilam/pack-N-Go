import axios from "../../axios/index.js"
export default {
    getAll(filters) {
        //filters=?paginate=5&sortAsc=id
        return axios.get(`client${filters}`)
    },

    view(id) {
        return axios.get(`client/${id}`)
    },

    create(data) {
        return axios.post(`client`, data)
    },

    update(id, data) {
        return axios.post(`client/${id}`, data)
    },

    delete(id) {
        return axios.delete(`client/${id}`)
    }
}
