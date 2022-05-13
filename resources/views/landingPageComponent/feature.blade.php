<div class=" m-7 p-6">
   
</div>
<div class="feature-area-l-17 position-relative">
    <div class="container">
        <div class="row feature-area-l-17-items justify-content-center text-center">
            @for ($count = 0; $count < 5; $count++)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="single-features single-border position-relative">
                        <div class="circle-dot-1">
                            <img src="images/eoffice.png" width="100" height="100" alt="Post or service image from database">
                        </div>
                        <h4>Title of service</h4>
                        <p>Service Description ..... Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Architecto libero cumque asperiores
                            dolore officia nobis veniam nam quas modi eaque eum, non voluptates laborum similique
                            doloribus
                            assumenda, excepturi ipsam veritatis.</p>
                        <button class="btn btn-primary register_button" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop">Apply now</button>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>
