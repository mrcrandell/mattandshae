@extends('layouts.default')

@section('head')
@stop

@section('content')
<h1>Registry</h1>
<p>We are registered at Zola and Bed Bath &amp; Beyond. Click on the links below to see more.</p>

<div class="row">
    <div class="col-sm-6 margin-bottom-15">
        <a class="zola-registry-embed" href="https://www.zola.com/registry/shaeleeandmatt" data-registry-key="shaeleeandmatt">Our Zola Wedding Registry</a><script>!function(e,t,n){var s,a=e.getElementsByTagName(t)[0];e.getElementById(n)||(s=e.createElement(t),s.id=n,s.async=!0,s.src="https://widget.zola.com/js/widget.js",a.parentNode.insertBefore(s,a))}(document,"script","zola-wjs");</script>

    </div>
    <div class="col-sm-6">
        <a href="https://www.bedbathandbeyond.com:443/store/giftregistry/view_registry_guest.jsp?registryId=544921981&eventType=Wedding&pwsurl=" target="_blank" class="bbb-registry">

            <div class="logo">
                <img alt="Bed Bath &amp; Beyond" src="{{url('/img/bed-bath-beyond-logo.png')}}" class="img-responsive">
            </div>

            <div class="text-center"><button class="btn btn-black">See Our Registry</button></div>

        </a>
    </div>
</div>

@stop
