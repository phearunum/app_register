import { mapGetters } from 'vuex'
export default {
    data() {
        return {
        }
    },
    methods: {
        async callApi(method, url, dataObj) {
            try {
                return await axios({
                    method: method,
                    url: 'http://localhost:8000' + url,
                    data: dataObj
                });
            } catch (e) {
                console.log(e.response)
                return e.response
            }
        },
        async postAPI(url, dataObj) {
            try {
                return await axios
                    .post(url, dataObj)
                    .then((res) => {
                        return res;
                    })
                    .catch((error) => {
                        return error.response
                    })
            } catch (e) {
                return e.response
            }


        },
        toast_err(desc, titel = "Oops") {
            this.$toasted.error(desc, { 
                theme: "toasted-primary", 
                position: "top-center", 
               
           });
        },
        toast_smg(desc, titel = "Oops") {
            this.$toasted.success(desc, { 
                theme: "toasted-primary", 
                position: "top-center", 
               
           });
        },
        checkUserPermission(key) {
            if (!this.userPermission) return true
            let isPermitted = false;
            for (let d of this.userPermission) {
                if (this.$route.name == d.name) {
                    if (d[key]) {
                        isPermitted = true
                        break;
                    } else {
                        break
                    }
                }

            }
            return isPermitted
        }

    },

    computed: {
        ...mapGetters({
            'userPermission': 'getUserPermission'
        }),
        isReadPermitted() {
            return this.checkUserPermission('read')
        },
        isWritePermitted() {
            return this.checkUserPermission('write')
        },
        isUpdatePermitted() {
            return this.checkUserPermission('update')
        },
        isDeletePermitted() {
            return this.checkUserPermission('delete')
        },
    },


}