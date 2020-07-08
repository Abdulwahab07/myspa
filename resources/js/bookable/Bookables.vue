<template>
    <div>
        <div v-if="loading">
            DATA IS LOADING
        </div>
        <div v-else>
            <div class="row" v-for="row in rows" :key="'row' + row">
                <div class="col" v-for="(bookable,column) in bookablesInRow(row)" :key=" 'row'+ row + column">
                    <BookableListItem  :title="bookable.title" :content="bookable.content" :price="1000000"></BookableListItem>
                </div>
                <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholder' + row + p"></div> 
            </div>
        </div>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";
export default {
    components :{
        BookableListItem ,
    },
    data() {
        return {
            bookables: null,
            loading : false,
            column : 3
        };
    },
    computed :{
        rows() {
            return this.bookables == null ? 0 : Math.ceil(this.bookables.length / this.column ) ;
        }
    },
    methods : {
        bookablesInRow(row){
            return this.bookables.slice((row -1) *  this.column , row * this.column );
        },
        placeholdersInRow(row){
            return this.column - this.bookablesInRow(row).length;
        }

         
    },
    created() {
        console.log('Created');
        console.log( this.bookables);
        this.loading = true ;
         setTimeout( () => {
            this.bookables =[
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Semi Expensive Villa" ,
                content : "A Semi Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            {
                title : "Very Expensive Villa",
                content : "A Very Expensive Villa Content"
            },
            ];
            this.loading = false ;
        } , 2500);


    }
};
</script>