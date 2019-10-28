const pages = [

    // Dashboards

    {
        output: './index.html',
        content: {
            title: 'Analytics Dashboard',
            description: 'This is an example dashboard created using build-in elements and components.',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/dashboards/dashboard-example-1.hbs'
    },

    // Information
    {
        output: './announcement.html',
        content: {
            title: 'Announcements',
            description: 'All announcements to the community are created and edited here',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Information/announcement.hbs'
    },

    // Library
    {
        output: './categorie.html',
        content: {
            title: 'Library/categorie',
            description: 'Here, is where teacher can add, edit and delete Categorie concerning Books',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Library/categorie/categorie.hbs'
    },
    {
        output: './author.html',
        content: {
            title: 'Library/author',
            description: 'Here, is where teacher can add, edit and delete Author concerning Books',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Library/author/author.hbs'
    },
    {
        output: './books.html',
        content: {
            title: 'Library/books',
            description: 'Here, is where teacher can add, edit and delete Books',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Library/book/books.hbs'
    },
    {
        output: './examens.html',
        content: {
            title: 'Library/examen',
            description: 'Here, is where teacher can add, edit and delete Books',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Library/examen/examens.hbs'
    },
    {
        output: './epreuves.html',
        content: {
            title: 'Library/epreuve',
            description: 'Here, is where teacher can add, edit and delete Books',
            heading_icon: 'pe-7s-car icon-gradient bg-mean-fruit'
        },
        template: './src/Pages/Library/epreuve/epreuves.hbs'
    },
];
module.exports = pages;