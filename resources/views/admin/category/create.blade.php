<x-panel-layout>
<section class="content">
        <div class="container-fluid">
            <div class="block-header">
            <h1  style="color:red;opacity: 80%;">
                               CATEGORY
                            </h1>
            </div>
            <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header" style="background:red; color:white;opacity: 80%;" >
                            <h2 style="color:white">
                               Add Cartgory
                            </h2>
                        </div>
                        <div class="body">
                            <form id="form_validation" method="post" action={{route('admin.category.store')}}>
                               @csrf
   @include('admin.category._form',[
    
    'submit_button'=>'Add'])
</x-panel-layout>