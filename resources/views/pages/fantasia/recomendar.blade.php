@php
    $url = request()->url();
    $segmentos = collect(explode('/', $url));
    $ultimoDato = $segmentos->last();
@endphp
@if($ultimoDato != 'harry-potter')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Harry Potter (Serie)</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>J.K. Rowling</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != 'las-cronicas-de-narnia')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Las Crónicas de Narnia</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>C.S. Lewis</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != 'el-nombre-del-viento')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>El nombre del viento</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Patrick Rothfuss</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != 'elantris')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Elantris</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Brandon Sanderson</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif