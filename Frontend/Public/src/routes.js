//announcement
import announcement from "./components/information/index";
import calendar from "./components/information/calendar";

//library
import index from './components/library/Index.vue'
import epreuves from './components/library/epreuves.vue'
import books from './components/library/books.vue'
import examens from './components/library/examens.vue'

//commerce
import products from "./components/commerce/index";

//main page
import main from "./components/home";


export default [

    //announcement
    {
        path: '/announcement',
        component: announcement
    },
    {
        path: '/calendar',
        component: calendar
    },

    //library
    {
        path: '/library-index',
        component: index
    },
    {
        path: '/books',
        component: books
    },
    {
        path: '/epreuves',
        name: 'epreuves',
        component: epreuves,
    },
    {
        path: '/examens',
        component: examens
    },
    {
        path: '/books',
        component: books
    },

    //main menu
    {
        path: '/',
        component: main
    },

    //commerce
    {
        path: '/commerce',
        component: products
    },
]