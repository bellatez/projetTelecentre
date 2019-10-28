<template>
    <body>
        <main role="main">
            <div class="container" style="margin-top:150px">
                <div class="row album py-5 bg-light">
                        <div class="container">
                            <h1 class="col-12">lecture</h1>
                            <div class="">
                                <div>
                                <button id="prev" class="btn btn-secondary">Previous</button>
                                &nbsp; &nbsp;
                                <span>Page: <span id="page_num"></span> / <span id="page_count"></span></span>
                                &nbsp; &nbsp;
                                <button id="next" class="btn btn-secondary">Next</button>

                                </div>
                            </div>
                            <br><hr>
                            <div class="col col-12 stylePdfReadr">
                                <canvas id="the-canvas" style="">

                                </canvas>
                            </div>

                    </div>
                </div>
            </div>
        </main>

    </body>

</template>

</script>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            id:this.$route.params.id,
            epreuve: {
                file_link:'',
            },
            url:'',
        }
    },

    created(){
<<<<<<< HEAD
        axios.get('http://localhost:3000/community/library/epreuves/show/'+ this.id).then((res)=>{
=======
        axios.get('http://192.168.8.101:3000/community/library/epreuves/show/'+ this.id).then((res)=>{
>>>>>>> 137c28274ebe22f08bd7b9c2fa351f56d02a9856
            this.epreuve.file_link = res.data[0].file_link;

            // console.log(this.epreuve.file_link)


           // this.url = this.epreuve.file_link;
            this.url = this.epreuve.file_link;
            // console.log('########################################');
           // console.log(this.url);
            // console.log(this.epreuve.file_link);
            // console.log('########################################');
            var pdfjsLib = window['pdfjs-dist/build/pdf'];


            // The workerSrc property shall be specified.
            pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';

            var pdfDoc = null,
                pageNum = 1,
                pageRendering = false,
                pageNumPending = null,
                scale = 1.5,
                canvas = document.getElementById('the-canvas'),
                ctx = canvas.getContext('2d');

            function renderPage(num) {
                pageRendering = true;
                // Using promise to fetch the page
                pdfDoc.getPage(num).then(function(page) {
                    var viewport = page.getViewport({scale: scale});
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    // Render PDF page into canvas context
                    var renderContext = {
                    canvasContext: ctx,
                    viewport: viewport
                    };
                    var renderTask = page.render(renderContext);

                     // Wait for rendering to finish
                    renderTask.promise.then(function() {
                        pageRendering = true;
                        if (pageNumPending !== null) {
                            // New page rendering is pending
                            renderPage(pageNumPending);
                            pageNumPending = null;
                        }
                    });
                });

                // Update page counters
                document.getElementById('page_num').textContent = num;
            }


            function queueRenderPage(num) {
                if (pageRendering) {
                    pageNumPending = num;
                } else {
                    renderPage(num);
                }
            }

            /**
            * Displays previous page.
            */
            function onPrevPage() {
                if (pageNum <= 1) {
                    return;
                }
                pageNum--;
                 queueRenderPage(pageNum);
            }
             document.getElementById('prev').addEventListener('click', onPrevPage);

            /**
            * Displays next page.
            */
            function onNextPage() {
                if (pageNum >= pdfDoc.numPages) {
                    return;
                }
                pageNum++;
                queueRenderPage(pageNum);
            }
            document.getElementById('next').addEventListener('click', onNextPage);

            /**
            * Asynchronously downloads PDF.
            */
            pdfjsLib.getDocument(this.url).promise.then(function(pdfDoc_) {
                pdfDoc = pdfDoc_;
                document.getElementById('page_count').textContent = pdfDoc.numPages;

                // Initial/first page rendering
                renderPage(pageNum);
            });
        });
    },

}
</script>

<style  scoped>

    body {
        background-color: gainsboro;
        /* background-color: rgb(150, 50, 98); */
        /* margin: 0; */
    }
    .stylePdfReadr{
        padding: 20px auto;
        overflow-y: scroll;
        /* background-color: red; */
    }
</style>
