@php
    $url = request()->url();
    $segmentos = collect(explode('/', $url));
    $ultimoDato = $segmentos->last();
@endphp
@if ($ultimoDato != 'el-resplandor')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>El
                                        Resplandor</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Stephen King</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'el-exorcista')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>El
                                        Exorcista</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>William Peter Blatty
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'coraline')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Coraline</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Neil Gaiman</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'el-hogar-de-miss-peregrine-para-ninos-peculiares')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>El Hogar de
                                        Miss Peregrine para Niños Peculiares</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Ransom Riggs</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
