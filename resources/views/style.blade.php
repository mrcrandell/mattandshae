@extends('layouts.default')

@section('head')
@stop

@section('content')

    <div class="row">
        <div class="col-sm-6">
            <h1>Color Palette</h1>

            <div class="row">
                <div class="col-md-4">
                    <div class="color-swatch swatch1">
                        Light Orchid<br>
                        #e6b3d1
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch2">
                        Hopbush<br>
                        #c0408b
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch3">
                        Venus<br>
                        #949293
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch4">
                        Silver<br>
                        #bab9b9
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch5">
                        Scorpion<br>
                        #6e6c6d
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="color-swatch swatch6">
                        Lily<br>
                        #bda3b2
                    </div>
                </div>
            </div>
            <hr>
            <h1>Buttons</h1>

            <button class="btn btn-lg btn-hopbush">This is a large button</button>&nbsp;

            <div class="visible-xs-block margin-bottom-10"></div>

            <button class="btn btn-venus">This is another smaller button</button>

            <hr class="visible-xs-block">

        </div>
        <div class="col-sm-6">
            <h1>Typography</h1>

            <h1>Heading 1</h1>
            <p class="details">Font: Great Vibes / Black #333333</p>

            <hr>

            <h2>Heading 2</h2>
            <p class="details">Font: Aileron Semi Bold / Black #333333</p>

            <hr>

            <h3>Heading 3</h3>
            <p class="details">Font: Aileron Regular / Black #333333</p>

            <hr>

            <p>Body Text</p>
            <p>Lorem ipsum dolor sit amet, quis quam, fusce duis. Montes vestibulum esse, tristique dui lorem. Wisi cubilia. Nonummy justo, eros aliquet elit, nulla sollicitudin ut. Iaculis sit lacus, nisi orci nunc, pede convallis vestibulum.</p>
            <p>Sed tellus. Posuere est quis, lacus sit nec. Ultricies vehicula arcu, nunc nonummy id. Vivamus odio neque, faucibus duis. Non diam amet, elit nec semper.</p>

            <p><a href="#">This is a link</a> - <a href="#" class="hover">This is a hover link</a></p>

            <p class="details">Font: Aileron Light / Black #333333</p>
        </div>
    </div>

@stop

@section('scripts')
@stop

