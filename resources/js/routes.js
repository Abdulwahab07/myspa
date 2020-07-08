import vueRouter from "vue-router";
import ExampleComponent from "./components/ExampleComponent";
import Example2 from "./components/Example2";
import Bookables from "./bookable/Bookables";
import Adding from "./adding/RealEstates";

const routes = [
    {
        path : "/" ,
        component : ExampleComponent ,
        name : "home" ,
    },
    {
        path : "/second" ,
        component : Example2 ,
        name : "second" ,
    },
    {
        path : "/bookables" ,
        component : Bookables ,
        name : "bookable" ,
    },
    {
        path : "/realestates" ,
        component : Adding ,
        name : "adding" ,
    }
];

const router = new vueRouter({
    routes ,
    mode : "history" ,
});

export default router ;