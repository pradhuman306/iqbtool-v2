@extends("layouts.adminapp")
@section('title', 'Custom Form')
@section('content')
    <div>
                @include('components.adminsidebar')

        <section class="body-main">
            <div class="body-content">
                <h2 class="page-title">{{ $page }}</h2>
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
                                                            src="{{ asset('/') }}<?= $data['customizable_forms_background_image']; ?>"
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