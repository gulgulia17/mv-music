<section class="section section-bg py-5 cta">
    <div class="container aos-init aos-animate" data-aos="zoom-in">
        <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
                <h3>Call To Action</h3>
                <p>Come join us and expose your talent.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center mt-3">
                <a class="btn custom-button mt-0 circle transparent" role="button" href="#" data-toggle="modal"
                    data-target="#ctamodal">Contact</a>
            </div>
        </div>
    </div>
</section>

<div class="modal fade cta" id="ctamodal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="cta-modal-close">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="modal-dialog" role="document">
        <div class="col-md-12 text-center">
            <div class="title mx-auto">
                <h1 class="text-white">Contact</h1>
                <div class="title-divider"></div>
            </div>
        </div>
        <div class="modal-content">
            <div class="modal-body">
                <form action="{{route('inquiry')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name" class="subtitle label ml-2">Name</label>
                        <input value="" type="text" name="name" id="name" class="form-control rounded-0"
                            placeholder="Please enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="subtitle label ml-2">Email</label>
                        <input value="" type="text" name="email" id="email" class="form-control rounded-0"
                            placeholder="Please enter your email">
                    </div>
                    <div class="form-group">
                        <label for="number" class="subtitle label ml-2">Number</label>
                        <input value="" type="tel" pattern="[0-9]*" name="number" id="number"
                            class="form-control rounded-0" placeholder="Please enter your number">
                    </div>
                    <div class="form-group text-right">
                        <button class="btn custom-button">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>