@extends('layouts.my-dashboard-layout')

@section('content')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <div class="row">
        
        <div class="nav-align-top nav-tabs-shadow">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
            <button
                type="button"
                class="nav-link active"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-top-home"
                aria-controls="navs-top-home"
                aria-selected="true">
                Home
            </button>
            </li>
            <li class="nav-item">
            <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-top-profile"
                aria-controls="navs-top-profile"
                aria-selected="false">
                Profile
            </button>
            </li>
            <li class="nav-item">
            <button
                type="button"
                class="nav-link"
                role="tab"
                data-bs-toggle="tab"
                data-bs-target="#navs-top-messages"
                aria-controls="navs-top-messages"
                aria-selected="false">
                Messages
            </button>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
            <p>
                Icing pastry pudding oat cake. Lemon drops cotton candy caramels cake caramels sesame snaps
                powder. Bear claw candy topping.
            </p>
            <p class="mb-0">
                Tootsie roll fruitcake cookie. Dessert topping pie. Jujubes wafer carrot cake jelly. Bonbon
                jelly-o jelly-o ice cream jelly beans candy canes cake bonbon. Cookie jelly beans marshmallow
                jujubes sweet.
            </p>
            </div>
            <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
            <p>
                Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                cheesecake fruitcake.
            </p>
            <p class="mb-0">
                Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                cotton candy liquorice caramels.
            </p>
            </div>
            <div class="tab-pane fade" id="navs-top-messages" role="tabpanel">
            <p>
                Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                cupcake gummi bears cake chocolate.
            </p>
            <p class="mb-0">
                Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                jelly-o tart brownie jelly.
            </p>
            </div>
        </div>
        </div>
                
        <div class="col-12 col-sm-8" style="overflow: auto;">
            <table class="table">
                <thead>
                    <tr class="text-nowrap">
                    <th>#</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>Table heading</th>
                    <th>xD</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    </tr>
                    <tr>
                    <th scope="row">1</th>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12 col-sm-4">
            <h1>Tree</h1>
            <h1>Tree</h1>
            <h1>Tree</h1>
            <h1>Tree</h1>
        </div>
    </div>
@endsection

@livewireStyles

@livewireScripts
