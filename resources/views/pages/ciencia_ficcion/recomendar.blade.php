@php
    $url = request()->url();
    $segmentos = collect(explode('/', $url));
    $ultimoDato = $segmentos->last();
@endphp
@if($ultimoDato != 'dune')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Dune</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Frank Herbert</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != '1984')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>1984</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>George Orwell</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != 'neuromante')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Neuromante</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>William Gibson</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif
@if($ultimoDato != 'fundacion')
<div class="job-box bookmark-post card mt-4">
    <div class="p-4">
        <div class="row">
            <div class="col-lg-10">
                <div class="mt-3 mt-lg-0">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><strong>Fundación</strong> por
                            </p>
                        </li>
                        <li class="list-inline-item">
                            <p class="text-muted fs-14 mb-0"><i class="mdi mdi-map-marker"></i>Isaac Asimov</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!--end row-->
    </div>
</div>
@endif