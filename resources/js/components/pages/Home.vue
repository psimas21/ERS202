<template>
    <div>
        <h3 v-if="dec">Home pages</h3>
        <h5 ref="myref">Hook tutorial</h5>
        <p>The counter Num is <b>{{counter}}</b></p>
        <button @click="updateCounter(1)">Increase</button>
        <button @click="updateCounter(-1)">Decrease</button>
        <br><br>
        <!-- <div v-for="(blog, i) in blogs" :key="i" v-if="blogs.length">
            <h5>{{blog.title}}</h5>
            <p>{{blog.post}}</p>
        </div> -->
        <div v-if="itemTrue">Show this if True</div>
        <div v-else>Else Show this if False</div>
        <button @click="this.itemTrue = !this.itemTrue">ChangeView</button>
    </div>
</template>
<script>
export default {
    data(){
        return {
            name: 'Sulaiman',
            dec: true,
            counter: 0,
            itemTrue: false,
            blogs: []
        }
    },
    methods: {
        updateCounter(num){
            this.counter += num
        },
        // changeView(){
        //      this.itemTrue = !this.itemTrue
        // }
    },
    beforeCreate(){
        // console.log(this.name)
    },
    created(){
        // console.log(this.$refs.myref)
        // console.log('Hi, ', this.name)
        this.counter =  50
        let posts = [
                {title: 'This is Blog number 1', 'post' : 'This is post 1', id: 1},
                {title: 'This is Blog number 2', 'post' : 'This is post 2', id: 2},
                {title: 'This is Blog number 3', 'post' : 'This is post 3', id: 3},
                {title: 'This is Blog number 4', 'post' : 'This is post 4', id: 4},
                {title: 'This is Blog number 5', 'post' : 'This is post 5', id: 5},
            ]
        this.blogs = posts
    },
    mounted(){
        console.log(this.$refs.myref)
    }
}
</script>