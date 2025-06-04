@extends('layouts.adminapp')
@section('title', 'Home')
@section('content')

    <div>
        <aside class="sidebar">
            <div class="sidebar-wrap">
                <div class="sidebar-body">
                    <div class="sidebar-nav-title">Pages</div>
                    <ul>
                        <li class="">
                            <a href="/admin">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.25 8.125H2.5C2.33424 8.125 2.17527 8.19085 2.05806 8.30806C1.94085 8.42527 1.875 8.58424 1.875 8.75V12.5C1.875 12.6658 1.94085 12.8247 2.05806 12.9419C2.17527 13.0592 2.33424 13.125 2.5 13.125H6.25C6.41576 13.125 6.57473 13.0592 6.69194 12.9419C6.80915 12.8247 6.875 12.6658 6.875 12.5V8.75C6.875 8.58424 6.80915 8.42527 6.69194 8.30806C6.57473 8.19085 6.41576 8.125 6.25 8.125ZM5.625 11.875H3.125V9.375H5.625V11.875ZM12.5 1.875H8.75C8.58424 1.875 8.42527 1.94085 8.30806 2.05806C8.19085 2.17527 8.125 2.33424 8.125 2.5V6.25C8.125 6.41576 8.19085 6.57473 8.30806 6.69194C8.42527 6.80915 8.58424 6.875 8.75 6.875H12.5C12.6658 6.875 12.8247 6.80915 12.9419 6.69194C13.0592 6.57473 13.125 6.41576 13.125 6.25V2.5C13.125 2.33424 13.0592 2.17527 12.9419 2.05806C12.8247 1.94085 12.6658 1.875 12.5 1.875ZM11.875 5.625H9.375V3.125H11.875V5.625ZM12.5 10H11.25V8.75C11.25 8.58424 11.1842 8.42527 11.0669 8.30806C10.9497 8.19085 10.7908 8.125 10.625 8.125C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75V10H8.75C8.58424 10 8.42527 10.0658 8.30806 10.1831C8.19085 10.3003 8.125 10.4592 8.125 10.625C8.125 10.7908 8.19085 10.9497 8.30806 11.0669C8.42527 11.1842 8.58424 11.25 8.75 11.25H10V12.5C10 12.6658 10.0658 12.8247 10.1831 12.9419C10.3003 13.0592 10.4592 13.125 10.625 13.125C10.7908 13.125 10.9497 13.0592 11.0669 12.9419C11.1842 12.8247 11.25 12.6658 11.25 12.5V11.25H12.5C12.6658 11.25 12.8247 11.1842 12.9419 11.0669C13.0592 10.9497 13.125 10.7908 13.125 10.625C13.125 10.4592 13.0592 10.3003 12.9419 10.1831C12.8247 10.0658 12.6658 10 12.5 10ZM6.25 1.875H2.5C2.33424 1.875 2.17527 1.94085 2.05806 2.05806C1.94085 2.17527 1.875 2.33424 1.875 2.5V6.25C1.875 6.41576 1.94085 6.57473 2.05806 6.69194C2.17527 6.80915 2.33424 6.875 2.5 6.875H6.25C6.41576 6.875 6.57473 6.80915 6.69194 6.69194C6.80915 6.57473 6.875 6.41576 6.875 6.25V2.5C6.875 2.33424 6.80915 2.17527 6.69194 2.05806C6.57473 1.94085 6.41576 1.875 6.25 1.875ZM5.625 5.625H3.125V3.125H5.625V5.625Z"
                                        fill="#0E0B3D"></path>
                                </svg>
                                <span>Home</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
        <section class="body-main">
            <div class="body-content">
                @if (session('success'))
                    <p style="color: green;">{{ session('success') }}</p>
                @endif
                @if ($errors->any())
                    <div style="color: red; margin-bottom: 15px;">
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
                                                        <label for="data[hero_banner_image]">Hero Banner Image</label><br />
                                                        <input type="file" name="data[hero_banner_image]" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['hero_banner_image']; ?>"
                                                            width="150" height="150" alt="">
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
                                                        <label for="data[fml_image]">FML Image</label><br />
                                                        <input type="file" name="data[fml_image]" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['fml_image']; ?>" width="150"
                                                            height="150" alt="">
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
                                                        <label for="data[kfml_image]">KFML Image</label><br />
                                                        <input type="file" name="data[kfml_image]" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['kfml_image']; ?>" width="150"
                                                            height="150" alt="">
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
                                                        <label for="data[form_solutions_background_image]">Form Solutions
                                                            Background Image</label><br />
                                                        <input type="file" name="data[form_solutions_background_image]"
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['form_solutions_background_image']; ?>"
                                                            width="150" height="150" alt="">
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
                                                        <label for="data[form_solutions_image]">Form Solutions
                                                            Image</label><br />
                                                        <input type="file" name="data[form_solutions_image]"
                                                            accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['form_solutions_image']; ?>"
                                                            width="150" height="150" alt="">
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
                                                        <label for="data[about_iqb_image]">About IQB Image</label><br />
                                                        <input type="file" name="data[about_iqb_image]" accept="image/*">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img src="{{asset('/')}}<?= $data['about_iqb_image']; ?>"
                                                            width="150" height="150" alt="">
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
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <label for="data[useful_features_image]">Features Item
                                                                    Image</label><br />
                                                                <input type="file" name="data[useful_features_image]"
                                                                    accept="image/*">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="data[useful_features_image]">Preview
                                                                    Image</label><br />
                                                                <img src="{{asset('/')}}<?= $data['useful_features_image']; ?>"
                                                                    width="150" height="150" alt="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Features Item Description</label>
                                                        <textarea type="text" class="form-control"
                                                            name="data[features_item_description]"
                                                            value=""><?= $data['features_item_description']; ?></textarea>
                                                    </div>
                                                </div>
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
                                <div class="col-12">
                                    <h2 class="mb-4">Testimonials</h2>
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
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Testimonials Item Description</label>
                                                        <textarea type="text" class="form-control"
                                                            name="data[testimonials_item_description]"
                                                            value=""><?= $data['testimonials_item_description']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="form-group mb-3">
                                                                <label for="data[px_image]">Author Name</label>
                                                                <input type="text" class="form-control"
                                                                    name="data[author_name]"
                                                                    value="<?= $data['author_name']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="form-group">
                                                                <label for="data[px_image]">Author Designation</label>
                                                                <input type="text" class="form-control"
                                                                    name="data[author_designation]"
                                                                    value="<?= $data['author_designation']; ?>">
                                                            </div>
                                                        </div>
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
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group mb-3">
                                                        <label for="">Faq Question</label>
                                                        <input type="text" class="form-control"
                                                            name="data[faq_item_description]"
                                                            value="<?= $data['faq_question']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="data[px_image]">Faq Answer</label>
                                                        <textarea type="text" class="form-control" name="data[faq_answer]"
                                                            value=""><?= $data['faq_answer']; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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

    </script>
@endsection