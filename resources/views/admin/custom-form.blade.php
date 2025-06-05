@extends("layouts.adminapp")
@section('title', 'Custom Form')
@section('content')
    <div>
        <aside class="sidebar">
            <div class="sidebar-wrap">
                <div class="sidebar-body">
                    <div class="sidebar-nav-title">Pages</div>
                    @php
                        $currentPage = request()->query('page', 'home');
                    @endphp

                    <ul class="nav-list">
                        <!-- Home -->
                        <li class="{{ $currentPage == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=home">
                                <svg width="15" height="15" viewBox="0 0 15 15" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.25 8.125H2.5C2.33424 8.125 2.17527 8.19085 2.05806 8.30806C1.94085 8.42527 1.875 8.58424 1.875 8.75V12.5C1.875 12.6658 1.94085 12.8247 2.05806 12.9419C2.17527 13.0592 2.33424 13.125 2.5 13.125H6.25C6.41576 13.125 6.57473 13.0592 6.69194 12.9419C6.80915 12.8247 6.875 12.6658 6.875 12.5V8.75C6.875 8.58424 6.80915 8.42527 6.69194 8.30806C6.57473 8.19085 6.41576 8.125 6.25 8.125ZM5.625 11.875H3.125V9.375H5.625V11.875ZM12.5 1.875H8.75C8.58424 1.875 8.42527 1.94085 8.30806 2.05806C8.19085 2.17527 8.125 2.33424 8.125 2.5V6.25C8.125 6.41576 8.19085 6.57473 8.30806 6.69194C8.42527 6.80915 8.58424 6.875 8.75 6.875H12.5C12.6658 6.875 12.8247 6.80915 12.9419 6.69194C13.0592 6.57473 13.125 6.41576 13.125 6.25V2.5C13.125 2.33424 13.0592 2.17527 12.9419 2.05806C12.8247 1.94085 12.6658 1.875 12.5 1.875ZM11.875 5.625H9.375V3.125H11.875V5.625ZM12.5 10H11.25V8.75C11.25 8.58424 11.1842 8.42527 11.0669 8.30806C10.9497 8.19085 10.7908 8.125 10.625 8.125C10.4592 8.125 10.3003 8.19085 10.1831 8.30806C10.0658 8.42527 10 8.58424 10 8.75V10H8.75C8.58424 10 8.42527 10.0658 8.30806 10.1831C8.19085 10.3003 8.125 10.4592 8.125 10.625C8.125 10.7908 8.19085 10.9497 8.30806 11.0669C8.42527 11.1842 8.58424 11.25 8.75 11.25H10V12.5C10 12.6658 10.0658 12.8247 10.1831 12.9419C10.3003 13.0592 10.4592 13.125 10.625 13.125C10.7908 13.125 10.9497 13.0592 11.0669 12.9419C11.1842 12.8247 11.25 12.6658 11.25 12.5V11.25H12.5C12.6658 11.25 12.8247 11.1842 12.9419 11.0669C13.0592 10.9497 13.125 10.7908 13.125 10.625C13.125 10.4592 13.0592 10.3003 12.9419 10.1831C12.8247 10.0658 12.6658 10 12.5 10ZM6.25 1.875H2.5C2.33424 1.875 2.17527 1.94085 2.05806 2.05806C1.94085 2.17527 1.875 2.33424 1.875 2.5V6.25C1.875 6.41576 1.94085 6.57473 2.05806 6.69194C2.17527 6.80915 2.33424 6.875 2.5 6.875H6.25C6.41576 6.875 6.57473 6.80915 6.69194 6.69194C6.80915 6.57473 6.875 6.41576 6.875 6.25V2.5C6.875 2.33424 6.80915 2.17527 6.69194 2.05806C6.57473 1.94085 6.41576 1.875 6.25 1.875ZM5.625 5.625H3.125V3.125H5.625V5.625Z"
                                        fill="#0E0B3D"></path>
                                </svg>
                                <span>{{ __('Home') }}</span>
                            </a>
                        </li>

                        <!-- Forms Group -->
                        <li class="{{ $currentPage == 'fml-kfml' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=fml-kfml">
                                <span>FML/KFML</span>
                            </a>
                        </li>
                        <li class="{{ $currentPage == 'custom-form' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=custom-form">
                                <span>{{ __('Custom Form') }}</span>
                            </a>
                        </li>

                        <!-- Pricing -->
                        <li class="{{ $currentPage == 'pricing' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=pricing">
                                <span>{{ __('Pricing') }}</span>
                            </a>
                        </li>

                        <!-- Contact -->
                        <li class="{{ $currentPage == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=contact">
                                <span>{{ __('Contact') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>
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
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Customizable Form Solutions</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="customizable-form-background-upload">Customizable Form
                                                            Background Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="customizable-form-background-upload"
                                                                name="data[customizable_forms_background_image]"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-customizable-form-background"
                                                            src="{{ asset('/') }}<?= $data['customizable_form_background_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Customizable Form Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[customizable_form_subheading]"
                                                            value="<?= $data['customizable_form_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Customizable Form Heading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[customizable_form_heading]"
                                                            value="<?= $data['customizable_form_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Customizable Form Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[customizable_form_description]"><?= $data['customizable_form_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="customizable-form-image-upload">Customizable Form
                                                            Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" id="customizable-form-image-upload"
                                                                name="data[customizable_form_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-customizable-form-image"
                                                            src="{{ asset('/') }}<?= $data['customizable_form_image']; ?>"
                                                            class="preview-img" alt="Image Preview" />
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
        setupImagePreview('customizable-form-background-upload', 'preview-customizable-form-background');
        setupImagePreview('customizable-form-image-upload', 'preview-customizable-form-image');


    </script>
@endsection