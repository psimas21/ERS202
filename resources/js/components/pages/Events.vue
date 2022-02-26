<template>
    <div class="row">
        <div class="jumbotron bg-info">
            <h3>This is where the broadcasting is coming</h3>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Write Message to Broadcast" v-model="data.msg">
                <button class="btn btn-outline-light" type="button" id="button-addon2" @click="addNotice">Send</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return {

        }
    },
    methods: {
        async addNotice(){
            if (this.data.msg.trim() == '') return alert('fill the required fields');
            const res = await this.callApi('post', 'app/test_notice', this.data)
            if(res.status == 201){
                this.noticeMsg.unshift()
                alert('notice send successfully')
                this.data.msg = ''
            }
            else{
                alert('Oopps! an error occured')
            }
        },
        // async created(){
        //     const res = await this.callApi('get', 'app/get_notice')
        //     if(res.status == 200){
        //         alert('there is new notice')
        //     }
        //     else{
        //         alert('Oopps! an error occured')
        //     }
        // }
    },
    // async created(){
    //     const res = await this.callApi('post', 'app/test_notice', {messages: 'testing data'});
    //     console.log(res);
    //     if(res.status==200){
    //         // console.log(res);
    //     }
    //     else{
    //         console.log('running')
    //     }
    // }
}
</script>