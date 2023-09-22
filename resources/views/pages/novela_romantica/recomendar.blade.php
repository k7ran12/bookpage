@php
    $url = request()->url();
    $segmentos = collect(explode('/', $url));
    $ultimoDato = $segmentos->last();
@endphp
@if ($ultimoDato != 'orgullo-y-prejuicio')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Orgullo y
                                        prejuicio</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Jane Austen</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'cincuenta-sombras-de-grey')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Cincuenta sombras de Grey</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>E.L. James</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'bajo-el-sol-de-medianoche')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Bajo
                                        el
                                        sol de medianoche</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Stephenie Meyer</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'eleanor_y_park')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Eleanor y
                                        Park</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Rainbow Rowell</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
