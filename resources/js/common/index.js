export default{
    data(){
        return{
            data: {
                msg: ''
            },
            noticeMsg: []
        }
    },
    methods: {
        async callApi(method, url, dataObj){
            try{
                // Send a POST request
                return await axios({
                    method: method,
                    url: url,
                    data: dataObj
                });
            }
            catch(e){
                console.log(e)
                return e.response
            }
        }
    },
}