@extends("layouts.adminapp")
@section('title', 'FML/KFML')
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
                        <div class="page-content-section">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">FML/KFML Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FML/KFML Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[fmlkfml_subheading]"
                                                            value="<?= $data['fmlkfml_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FML/KFML Heading</label>
                                                        <input type="text" class="form-control" name="data[fmlkfml_heading]"
                                                            value="<?= $data['fmlkfml_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">FML/KFML Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[fmlkfml_description]"><?= $data['fmlkfml_description']; ?></textarea>
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
                                                    name="data[fmlpage_description]"><?= $data['fmlpage_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">FML Button Text</label>
                                                        <input type="text" class="form-control" name="data[fmlpage_button_text]"
                                                            value="<?= $data['fmlpage_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">FML Button Url</label>
                                                        <input type="text" class="form-control" name="data[fmlpage_button_url]"
                                                            value="<?= $data['fmlpage_button_url']; ?>">
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
                                                            <input type="file" id="fml-image-upload" name="data[fmlpage_image]"
                                                                accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-fml"
                                                            src="{{ asset('/') }}<?= $data['fmlpage_image']; ?>"
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
                                                    name="data[kfmlpage_description]"><?= $data['kfmlpage_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">KFML Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[kfmlpage_button_text]"
                                                            value="<?= $data['kfmlpage_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">KFML Button Url</label>
                                                        <input type="text" class="form-control" name="data[kfmlpage_button_url]"
                                                            value="<?= $data['kfmlpage_button_url']; ?>">
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
                                                                name="data[kfmlpage_image]" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img id="preview-kfml"
                                                            src="{{ asset('/') }}<?= $data['kfmlpage_image']; ?>"
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
        setupImagePreview('fml-image-upload', 'preview-fml');
        setupImagePreview('kfml-image-upload', 'preview-kfml');

    </script>
@endsection