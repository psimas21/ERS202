<template>
    <div class="row">
        <div class="jumbotron bg-success">
            <h3>Hi! we're Listening</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Messages</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(notice, i) in noticeMsg" :key="i" v-if="noticeMsg.length">
                        <td scope="col">{{notice.id}}</td>
                        <td scope="col">{{notice.messages}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
        mounted() {
            // Echo.channel('notification')
            // .listen('MessageNotice', (e) => {
            //     alert('wey, this showed up without refresh!')
            // })
            this.listen()
        },
    async created(){
            const res = await this.callApi('get', 'app/get_notice')
            if(res.status == 200){
                // alert('there is new notice')
                this.noticeMsg = res.data
            }
            else{
                alert('Oopps! an error occured')
            }
        },

        methods:{
            listen(){
                Echo.channel('notification')
                .listen('MessageNotice', (notices) => {
                    // alert('wey, this showed up without refresh!')
                    this.noticeMsg.unshift(notices);
                })
            }
        }
}
</script>