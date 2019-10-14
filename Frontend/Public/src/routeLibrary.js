import index from './components/library/Index.vue'
import epreuves from './components/library/epreuves.vue'
import books from './components/library/books.vue'
import examens from './components/library/examens.vue'



export default [

    {
        path: '/libryIndex',
        component: index
    },
    {
        path: '/books',
        component: books
    },
    {
        path: '/epreuves/:id',
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
    }

]