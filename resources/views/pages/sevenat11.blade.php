@extends('layouts.main')
@section('content')
<section class="center"
    style="background: linear-gradient(rgb(34 37 43 / 90%), rgb(11 21 39 / 90%)), url({{asset('images/background/10.jpg')}}) fixed center center;background-size:cover;">
<div class="container-fluid py-5">
    <div class="row">
        <div class="col-md-3 d-none d-lg-block">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 my-2">
                                <img src="{{asset('images/7_11.png')}}" alt="7_11" class="w-100">
                            </div>
                            <div class="col-md-12 my-2">
                                <ul>
                                    <li>Record video clip of your song with full excitement</li>
                                    <li>Submit your video clip as soon as you can.</li>
                                    <li>Early submission of video clips will help you to get more likes.</li>
                                    <li>Share your post as much as you can.</li>
                                    <li>Make your best efforts to get maximum likes on your post.</li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-primary col-12" data-toggle="modal"
                                data-target="#modelId">RULES</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-lg-9">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-md-flex">
                                    <img src="{{asset('images/7_11.png')}}" class="w-50 d-lg-none p-3">
                                    <p class="mb-0 p-3 text-justify">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores consectetur
                                        tempore facere id eveniet dicta, debitis maxime a pariatur quibusdam numquam
                                        deleniti temporibus delectus consequatur harum asperiores quia itaque
                                        praesentium.
                                        <button type="button" class="btn btn-primary col-12 my-md-0 my-3 d-lg-none"
                                            data-toggle="modal" data-target="#modelId">RULES</button>
                                    </p>
                                </div>
                                    <h6 class="text-center">Steps</h6>
                                    <div class="progress">
                                        <div class="progress-bar" role="progressbar" style="width: 33.5%"
                                            aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" id="p1">1</div>
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 33.5%"
                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" id="p2">2</div>
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 33.5%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" id="p3">3</div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <form action="{{route('test')}}" method="post">
                                    @csrf <input type="hidden" name="counter" value="1" id="counter">
                                    <div id="form">
                                        <div class="form-group">
                                            <small><label for="name">Name</label></small>
                                            <input type="text" name="name" id="name" class="form-control"
                                                placeholder="Please enter name">
                                        </div>
                                        <div class="form-group">
                                            <small><label for="email">Email</label></small>
                                            <input type="email" name="email" id="email" class="form-control"
                                                placeholder="Please enter email">
                                        </div>
                                        <div class="form-group">
                                            <small><label for="number">Number</label></small>
                                            <input type="tel" name="number" id="number" class="form-control"
                                                placeholder="Please enter number" min="10" max="10">
                                        </div>
                                    </div>
                                    <div class="text-center d-none" id="follow">
                                        <h1>Follow us on</h1>
                                        <p>Follow our Instagram page 7at eleven to get information regarding your participation.</p>
                                        <h1><a href="#"><i class="fab fa-instagram"></i></a></h1>
                                    </div>
                                    <div class="text-center d-none " id="upload">
                                        <h1>CLick here to send video</h1>
                                        <h1><a href=""><i class="fab fa-whatsapp"></i></a></h1>
                                    </div>
                                    <div class="text-center d-none" id="thankyou">
                                        <h1>Thankyou</h1>
                                        <h1><i class="fas fa-thumbs-up"></i></h1>
                                    </div>
                                    <div class="text-right" id="next">
                                        <button id="insta" class="btn btn-primary">NEXT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="modelId" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog"
        aria-labelledby="modelIdLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modelIdLabel">Seven AT Eleven</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid text-left">
                        <div class="row">
                            <div class="col-md-12 my-2 my-2">
                                <h5 class="font-weight-bold">How to participate</h5>
                                <ol>
                                    <li>Fill the form for participation and give correct details.</li>
                                    <li>Follow our Instagram page 7at eleven to get information regarding your
                                        participation.</li>
                                    <li>Submit the filled form.</li>
                                </ol>
                                <small class="font-weight-light d-block"><span class="font-weight-bold">*</span>Now you
                                    will receive a confirmation message.</small>
                                <small class="font-weight-light d-block"><span class="font-weight-bold">*</span>Now you
                                    can send your video clip on our official mail.</small>
                            </div>
                            <div class="col-md-12 my-2 my-2">
                                <h5 class="font-weight-bold">Process of contest</h5>
                                <ol>
                                    <li>Content received for the contest will be posted on Instagram page 7 at eleven
                                        within
                                        24 hours after submission of entry.</li>
                                    <li>The participant who got maximum likes will be declared winner of the contest and
                                        second and third position will also be finalized on second and third maximum
                                        likes.</li>
                                    <li>If equal likes received by any of the winner and runners result will be
                                        finalized after
                                        counting likes plus comments basis in place of only likes.</li>
                                    <li>All rights reserved with organiser</li>
                                    <li>Top ten after second runners will be awarded with e certificates and discount
                                    </li>
                                    coupons.</li>

                                </ol>
                            </div>
                            <div class="col-md-12 my-2 my-2">
                                <h5 class="font-weight-bold">Tips for winning</h5>
                                <ol>
                                    <li>Record video clip of your song with full excitement</li>
                                    <li>Submit your video clip as soon as you can.</li>
                                    <li>Early submission of video clips will help you to get more likes.</li>
                                    <li>Share your post as much as you can.</li>
                                    <li>Make your best efforts to get maximum likes on your post.</li>
                                </ol>
                            </div>

                            <div class="col-md-12 my-2 my-2">
                                <h5 class="font-weight-bold">Terms and condition</h5>
                                <ol>
                                    <li>The contest will start from....And the last date of entry will be......</li>
                                    <li>Entry received after the last date will not be considered for this contest.</li>
                                    <li>All entries received will be posted on Instagram page 7at eleven after proper
                                        screening of contents.</li>
                                    <li>All participants are advised to submit fair contents only any objectionable
                                        content
                                        submitted by the participant will not be considered for contest and such type of
                                        entry
                                        will be rejected.</li>
                                    <li>Audition clip not more than one minute must be submitted in video format only by
                                        the
                                        participant.</li>
                                    <li>The participant will record the song with mobile and submit the same without any
                                        modification in original voice recorded.</li>
                                    <li>the participant will record the song without a music track but can use an
                                        acoustic
                                        instrument like harmonium guitar piano only.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('style') @endsection
@section('script') <script src="{{asset('js/7at11.js')}}"></script> @endsection