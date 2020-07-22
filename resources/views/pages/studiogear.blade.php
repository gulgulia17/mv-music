@extends('layouts.main')
@section('image','7')
@section('contentdark')
<section id="studiogear" class="section dark">
    <div class="container-fluid center">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="title">
                    <h1>Studio Gear</h1>
                </div>
                <div class="title-divider mx-md-0 mx-auto m-0 mb-4">
                </div>
                <p class="subtitle">M V Musical Studio provide a premium-class recording facility and a creative
                    environment without compromise. We are well equipped with superb quality sound card designed by UAD
                    apollo x6, Our recording room offers a fantastic ambience and includes a selection of the quality
                    microphones available offering the ultimate crystal clear recording experience.</p>
                <p>We are equipped with premium class combination of hardwares and softwares.</p>
                <ol class="m-0 p-0">
                    <table class="table">
                        <tr>
                            <td>
                                <li class="py-2 text-white">Cras justo odio</li>
                            </td>
                            <td>
                                <li class="py-2 text-white">Dapibus ac facilisis in</li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li class="py-2 text-white">Morbi leo risus</li>
                            </td>
                            <td>
                                <li class="py-2 text-white">Porta ac consectetur ac</li>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <li class="py-2 text-white">Vestibolum at eros</li>
                            </td>
                            <td>

                            </td>
                        </tr>
                    </table>
                </ol>
            </div>
            <div class="col-md-5 mr-auto">
                <img src="{{asset('images/gear.jpg')}}" alt="" class="w-100">
            </div>
        </div>
    </div>
</section>

@endsection
@section('style') @endsection
@section('script') @endsection

