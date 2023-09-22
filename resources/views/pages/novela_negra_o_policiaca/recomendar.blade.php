@php
    $url = request()->url();
    $segmentos = collect(explode('/', $url));
    $ultimoDato = $segmentos->last();
@endphp
@if ($ultimoDato != 'el-silencio-de-los-corderos')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>El
                                        Silencio de
                                        los Corderos</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Thomas Harris</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'hombres-que-no-amaban-a-las-mujeres')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>Los
                                        Hombres Que No Amaban a las Mujeres</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Stieg Larsson</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'el-cuervo')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>El Cuervo</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Jo Nesbø</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
@if ($ultimoDato != 'la-chica-del-tren')
    <div class="job-box bookmark-post card mt-4">
        <div class="p-4">
            <div class="row">
                <div class="col-lg-10">
                    <div class="mt-3 mt-lg-0">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><strong>La Chica del
                                        Tren</strong> por
                                </p>
                            </li>
                            <li class="list-inline-item">
                                <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Paula Hawkins</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--end row-->
        </div>
    </div>
@endif
