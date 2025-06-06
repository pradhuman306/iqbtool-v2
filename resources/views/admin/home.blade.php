@extends('layouts.adminapp')
@section('title', 'Home')
@section('content')

    <div>
                  @include('components.adminsidebar')

        <section class="body-main">
            <div class="body-content">
                @if (session('success'))
                    <div class="custom-toast success" id="toast-success">
                        <span>{{ session('success') }}</span>
                    </div>
                @endif

                @if ($errors->any())
                    <div class="custom-toast error" id="toast-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="page-content-form">
                    <form method="POST" action="{{ route('submit.form') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="page-content-section">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Hero Banner</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Hero Banner Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[hero_banner_subheading]"
                                                            value="<?= $data['hero_banner_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Hero Banner Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[hero_banner_heading]"
                                                            value="<?= $data['hero_banner_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Hero Banner Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[hero_banner_description]"><?= $data['hero_banner_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Hero Banner Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[hero_banner_button_text]"
                                                            value="<?= $data['hero_banner_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Hero Banner Button Url</label>
                                                        <input type="text" class="form-control"
                                                            name="data[hero_banner_button_url]"
                                                            value="<?= $data['hero_banner_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="hero-banner-upload">Hero Banner Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="hero-banner-upload"
                                                                name="data[hero_banner_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-hero"
                                                            src="{{ asset('/') }}<?= $data['hero_banner_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Customizable Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Customizable Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[customizable_subheading]"
                                                            value="<?= $data['customizable_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Customizable Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[customizable_heading]"
                                                            value="<?= $data['customizable_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Customizable Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[customizable_description]"><?= $data['customizable_description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">FML</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">FML Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[fml_description]"><?= $data['fml_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FML Button Text</label>
                                                        <input type="text" class="form-control" name="data[fml_button_text]"
                                                            value="<?= $data['fml_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">FML Button Url</label>
                                                        <input type="text" class="form-control" name="data[fml_button_url]"
                                                            value="<?= $data['fml_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="fml-image-upload">FML Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="fml-image-upload" name="data[fml_image]"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-fml"
                                                            src="{{ asset('/') }}<?= $data['fml_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">KFML</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">KFML Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[kfml_description]"><?= $data['kfml_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">KFML Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[kfml_button_text]"
                                                            value="<?= $data['kfml_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">KFML Button Url</label>
                                                        <input type="text" class="form-control" name="data[kfml_button_url]"
                                                            value="<?= $data['kfml_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="kfml-image-upload">KFML Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="kfml-image-upload"
                                                                name="data[kfml_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-kfml"
                                                            src="{{ asset('/') }}<?= $data['kfml_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Form Solutions Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="form-solutions-image-upload">KFML Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="form-solutions-background-upload"
                                                                name="data[form_solutions_background_image]"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-form-solutions-background"
                                                            src="{{ asset('/') }}<?= $data['form_solutions_background_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Form Solutions Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[form_solution_subheading]"
                                                            value="<?= $data['form_solution_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Form Solutions Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[form_solutions_heading]"
                                                            value="<?= $data['form_solutions_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Form Solutions Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[form_solutions_description]"><?= $data['form_solutions_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Form Solutions Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[form_solutions_button_text]"
                                                            value="<?= $data['form_solutions_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Form Solutions Button Url</label>
                                                        <input type="text" class="form-control"
                                                            name="data[form_solutions_button_url]"
                                                            value="<?= $data['form_solutions_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="form-solutions-image-upload">Form Solutions
                                                            Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="form-solutions-image-upload"
                                                                name="data[form_solutions_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-form-solutions-image"
                                                            src="{{ asset('/') }}<?= $data['form_solutions_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">About IQB Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">About IQB Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[about_iqb_subheading]"
                                                            value="<?= $data['about_iqb_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">About IQB Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[about_iqb_heading]"
                                                            value="<?= $data['about_iqb_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">About IQB Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[about_iqb_description]"><?= $data['about_iqb_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">About IQB Details</label>
                                                <textarea name="data[about_iqb_details]"
                                                    id="editor1"><?= $data['about_iqb_details']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="form-solutions-image-upload">About IQB
                                                            Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="about-iqb-image-upload"
                                                                name="data[about_iqb_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-about-iqb-image"
                                                            src="{{ asset('/') }}<?= $data['about_iqb_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Our Useful Features</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Useful Features Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[useful_features_subheading]"
                                                            value="<?= $data['useful_features_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Useful Features Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[useful_features_heading]"
                                                            value="<?= $data['useful_features_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Useful Features Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[useful_features_description]"
                                                    value=""><?= $data['useful_features_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Features Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[features_button_text]"
                                                            value="<?= $data['features_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Features Button Url</label>
                                                        <input type="text" class="form-control"
                                                            name="data[features_button_url]"
                                                            value="<?= $data['features_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div id="feature-items-container" class="col-12">
                                    <h2 class="mb-4">Features</h2>
                                    <?php
    foreach ($data['features'] as $key => $value) { ?>
                                    <div class="row iqb-feature-item <?= $key > 0 ? 'feature-item' : ''; ?>">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="form-solutions-image-upload">Features Item
                                                            Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="useful-features-image-upload"
                                                                name="data[features][<?= $key; ?>][image]"
                                                                accept="image/*" />

                                                            <input type="hidden" value="<?= $value['image']; ?>" name="data[features][<?= $key; ?>][oldimage]"/>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="row row-wrapper">
                                                        <div class="preview-col">
                                                            <div class="form-group mb-3">
                                                                <label>Preview Image</label><br />
                                                                <img id="preview-useful_features-image"
                                                                    src="{{ asset('/') }}<?= $value['image']; ?>"
                                                                    class="preview-img" name="data[preview]"
                                                                    alt="Image Preview" />
                                                            </div>
                                                        </div>
                                                        <div class="remove-col">
                                                            <?php    if ($key > 0) { ?>
                                                            <div class="text-end">
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="removeFeatureItem(this)">Remove</button>
                                                            </div>
                                                            <?php    } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Features Item Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[features][<?= $key; ?>][description]"
                                                    value=""><?= $value['description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                                {{-- feature item template content --}}
                                <div class="col-12 mt-4">
                                    <button type="button" class="btn btn-primary-outline add-row-btn"
                                        onclick="addFeatureItem()">Add New
                                        Feature</button>
                                </div>
                                <div id="feature-item-template" class="iqb-feature-item feature-item row"
                                    style="display: none;">
                                    <div class="col-6">
                                        <div class="form-group mb-3">
                                            <label>Features Item Image</label><br />
                                            <div class="upload-box">
                                                <span>Click or drag image to upload</span>
                                                <input type="file" name="data[features][0][image]" class="feature-image"
                                                    accept="image/*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="row row-wrapper">
                                            <div class="preview-col">
                                                <div class="form-group mb-3">
                                                    <label>Preview Image</label><br />
                                                    <img class="preview-img" name="data[preview]" src=""
                                                        style="max-height: 100px;" alt="Image Preview" />
                                                </div>
                                            </div>
                                            <div class="remove-col">
                                                <div class="text-end">
                                                    <button type="button" class="btn btn-danger"
                                                        onclick="removeFeatureItem(this)">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group mb-3">
                                            <label>Description</label>
                                            <textarea name="data[features][0][description]"
                                                class="form-control feature-description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- end --}}
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Testimonials Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Testimonials Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[testimonials_subheading]"
                                                            value="<?= $data['testimonials_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Testimonials Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[testimonials_heading]"
                                                            value="<?= $data['testimonials_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Testimonials Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[testimonials_description]"
                                                    value=""><?= $data['testimonials_description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div id="testimonials-items-container" class="col-12">
                                    <h2 class="mb-4">Testimonials List</h2>
                                    <?php
    foreach ($data['testimonials'] as $key => $value) { ?>
                                    <div class="row iqb-testimonials-item <?= $key > 0 ? 'testimonials-item' : ''; ?>">
                                        <div class="col-12">
                                            <div class="row row-wrapper">
                                                <div class="col-12 preview-col">
                                                    <div class="form-group mb-3">
                                                        <label for="">Testimonials Item Description</label>
                                                        <textarea type="text" class="form-control"
                                                            name="data[testimonials][<?= $key; ?>][description]"
                                                            data-name="data[testimonials][<?= $key; ?>][description]"
                                                            value=""><?= $value['description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="remove-col">
                                                    <?php    if ($key > 0) { ?>
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="removeTestimonialItem(this)">Remove</button>
                                                    </div>
                                                    <?php    } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Author Name</label>
                                                        <input type="text" class="form-control"
                                                            name="data[testimonials][<?= $key; ?>][author_name]"
                                                            data-name="data[testimonials][<?= $key; ?>][author_name]"
                                                            value="<?= htmlspecialchars($data['testimonials'][$key]['author_name'] ?? '', ENT_QUOTES); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label>Author Designation</label>
                                                        <input type="text" class="form-control"
                                                            name="data[testimonials][<?= $key; ?>][author_designation]"
                                                            data-name="data[testimonials][<?= $key; ?>][author_designation]"
                                                            value="<?= htmlspecialchars($data['testimonials'][$key]['author_designation'] ?? '', ENT_QUOTES); ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            {{-- testimonials item template content --}}
                            <div class="col-12 mt-4">
                                <button type="button" class="btn btn-primary-outline add-row-btn"
                                    onclick="addTestimonialItem()">Add New
                                    Testimonial</button>
                            </div>
                            <div id="testimonial-item-template" class="iqb-testimonials-item testimonials-item row"
                                style="display: none;">
                                <div class="col-12">
                                    <div class="row row-wrapper">
                                        <div class="col-12 preview-col">
                                            <div class="form-group mb-3">
                                                <label for="">Testimonials Item Description</label>
                                                <textarea type="text" class="form-control"
                                                    data-name="data[testimonials][0][description]" value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="remove-col">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-danger"
                                                    onclick="removeTestimonialItem(this)">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label>Author Name</label>
                                                <input type="text" class="form-control"
                                                    data-name="data[testimonials][0][author_name]" value="">
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label>Author Designation</label>
                                                <input type="text" class="form-control"
                                                    data-name="data[testimonials][0][author_designation]" value="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end --}}
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">FAQs Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FAQs Subheading</label>
                                                        <input type="text" class="form-control" name="data[faq_subheading]"
                                                            value="<?= $data['faq_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FAQs Heading</label>
                                                        <input type="text" class="form-control" name="data[faq_heading]"
                                                            value="<?= $data['faq_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">FAQs Description</label>
                                                <textarea type="text" class="form-control" name="data[faq_description]"
                                                    value=""><?= $data['faq_description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div id="faq-items-container" class="col-12">
                                    <h2 class="mb-4">Faqs List</h2>
                                    <?php
    foreach ($data['faq'] as $key => $value) { ?>
                                    <div class="row iqb-faq-item <?= $key > 0 ? 'faq-item' : ''; ?>">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="row row-wrapper">
                                                        <div class="col-12 preview-col">

                                                            <div class="form-group mb-3">
                                                                <label for="">Faq Question</label>
                                                                <input type="text" class="form-control"
                                                                    name="data[faq][<?= $key; ?>][faq_question]"
                                                                    data-name="data[faq][<?= $key; ?>][faq_question]"
                                                                    value="<?= $value['faq_question']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="remove-col">
                                                            <?php    if ($key > 0) { ?>
                                                            <div class="text-end">
                                                                <button type="button" class="btn btn-danger"
                                                                    onclick="removeFaqItem(this)">Remove</button>
                                                            </div>
                                                            <?php    } ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="data[px_image]">Faq Answer</label>
                                                        <textarea type="text" class="form-control"
                                                            name="data[faq][<?= $key; ?>][faq_answer]"
                                                            data-name="data[faq][<?= $key; ?>][faq_answer]"
                                                            value=""><?= $value['faq_answer']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            {{-- faq item template content --}}
                            <div class="col-12 mt-4">
                                <button type="button" class="btn btn-primary-outline add-row-btn" onclick="addFaqItem()">Add
                                    New FAQ</button>
                            </div>
                            <div id="faq-item-template" class="iqb-faq-item faq-item row" style="display: none;">
                                <div class="col-12">
                                    <div class="row row-wrapper">
                                        <div class="col-12 preview-col">
                                            <div class="form-group mb-3">
                                                <label for="">Faq Question</label>
                                                <textarea type="text" class="form-control"
                                                    data-name="data[faq][0][faq_question]" value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="remove-col">
                                            <div class="text-end">
                                                <button type="button" class="btn btn-danger"
                                                    onclick="removeTestimonialItem(this)">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="data[px_image]">Faq Answer</label>
                                        <textarea type="text" class="form-control" data-name="data[faq][0][faq_answer]"
                                            value=""></textarea>
                                    </div>
                                </div>
                            </div>
                            {{-- end --}}
                        </div>
                        <div class="row mt-4">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.richtext.min.js') }}"></script>
    <script src="{{ asset('assets/js/rte.js') }}"></script>
    <script>
        const editorConfig = {
            toolbar: "mytoolbar",
            toolbar_mytoolbar: "{bold,italic}|{fontsize}|insertlink|insertorderedlist|insertunorderedlist|indent|outdent#{code,undo,redo,fullscreenenter,fullscreenexit}",
            // pasteMode: "PasteText", // Uncomment if needed
        };

        if (document.querySelector('#editor1')) {
            const editor1 = new RichTextEditor("#editor1", editorConfig);
        }

        function setupImagePreview(fileInputId, previewImageId) {
            const input = document.getElementById(fileInputId);
            const preview = document.getElementById(previewImageId);

            input.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (file && file.type.startsWith('image/')) {
                    const reader = new FileReader();
                    reader.onload = function (evt) {
                        preview.src = evt.target.result;
                        preview.style.display = 'block';
                    };
                    reader.readAsDataURL(file);
                }
            });
        }

        // Setup previews for each input
        setupImagePreview('hero-banner-upload', 'preview-hero');
        setupImagePreview('fml-image-upload', 'preview-fml');
        setupImagePreview('kfml-image-upload', 'preview-kfml');
        setupImagePreview('form-solutions-background-upload', 'preview-form-solutions-background');
        setupImagePreview('form-solutions-image-upload', 'preview-form-solutions-image');
        setupImagePreview('about-iqb-image-upload', 'preview-about-iqb-image');
        setupImagePreview('useful-features-image-upload', 'preview-useful-features-image');

        function updateFeatureIndexes() {
            document.querySelectorAll('.feature-item').forEach((item, index) => {
                index = index + 1; // Start from 1 for better readability
                item.querySelector('[name^="data[features]"][name$="[description]"]').name = `data[features][${index}][description]`;
                item.querySelector('[name^="data[features]"][type="file"]').name = `data[features][${index}][image]`;
                let inputID = 'feature-input-' + index;
                item.querySelector('[name^="data[features]"][type="file"]').id = inputID;
                let previewID = 'feature-preview-' + index;
                item.querySelector('[name^="data[preview]"]').id = previewID;
                setupImagePreview(inputID, previewID);
            });
        }

        function addFeatureItem() {
            const template = document.getElementById('feature-item-template').cloneNode(true);
            template.style.display = '';
            template.classList.remove('d-none');
            template.removeAttribute('id');
            document.getElementById('feature-items-container').appendChild(template);
            updateFeatureIndexes();
        }

        function removeFeatureItem(btn) {
            btn.closest('.feature-item').remove();
            updateFeatureIndexes();
        }
        updateFeatureIndexes();


        // testimonials
        function updateTestimonialIndexes() {
            document.querySelectorAll('.testimonials-item').forEach((item, index) => {
                if (window.getComputedStyle(item).display === 'none') return; // Skip hidden items
                index = index + 1; // Start from 1 for better readability
                item.querySelector('[data-name^="data[testimonials]"][data-name$="[description]"]').name = `data[testimonials][${index}][description]`;
                item.querySelector('[data-name^="data[testimonials]"][data-name$="[author_name]"]').name = `data[testimonials][${index}][author_name]`;
                item.querySelector('[data-name^="data[testimonials]"][data-name$="[author_designation]"]').name = `data[testimonials][${index}][author_designation]`;
            });
        }

        function addTestimonialItem() {
            const template = document.getElementById('testimonial-item-template').cloneNode(true);
            template.style.display = '';
            template.classList.remove('d-none');
            template.removeAttribute('id');
            document.getElementById('testimonials-items-container').appendChild(template);
            updateTestimonialIndexes();
        }

        function removeTestimonialItem(btn) {
            btn.closest('.testimonials-item').remove();
            updateTestimonialIndexes();
        }
        updateTestimonialIndexes();

        // faq
        function updateFaqIndexes() {
            document.querySelectorAll('.faq-item').forEach((item, index) => {
                if (window.getComputedStyle(item).display === 'none') return; // Skip hidden items
                index = index + 1; // Start from 1 for better readability
                item.querySelector('[data-name^="data[faq]"][data-name$="[faq_question]"]').name = `data[faq][${index}][faq_question]`;
                item.querySelector('[data-name^="data[faq]"][data-name$="[faq_answer]"]').name = `data[faq][${index}][faq_answer]`;
            });
        }

        function addFaqItem() {
            const template = document.getElementById('faq-item-template').cloneNode(true);
            template.style.display = '';
            template.classList.remove('d-none');
            template.removeAttribute('id');
            document.getElementById('faq-items-container').appendChild(template);
            updateFaqIndexes();
        }

        function removeFaqItem(btn) {
            btn.closest('.faq-item').remove();
            updateFaqIndexes();
        }
        updateFaqIndexes();
    </script>
@endsection