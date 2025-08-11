@extends("layouts.adminapp")
@section('title', 'Pricing')
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
                                    <h2 class="mb-4">Pricing Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Pricing Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[pricing_subheading]"
                                                            value="<?= $data['pricing_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Pricing Heading</label>
                                                        <input type="text" class="form-control" name="data[pricing_heading]"
                                                            value="<?= $data['pricing_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Pricing Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[pricing_description]"><?= $data['pricing_description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Trial Plan Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Trial Plan Heading</label>
                                                <input type="text" class="form-control" name="data[trialPlan_heading]"
                                                    value="<?= $data['trialPlan_heading']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Trial Plan Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[trialPlan_description]"><?= $data['trialPlan_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Trial Plan Price</label>
                                                <input type="text" class="form-control"
                                                    name="data[trialPlan_price]" value="<?= $data['trialPlan_price']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Trial Plan Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[trialPlan_button_text]"
                                                            value="<?= $data['trialPlan_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Trial Plan Button Url</label>
                                                        <input type="text" class="form-control"
                                                            name="data[trialPlan_button_url]"
                                                            value="<?= $data['trialPlan_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Trial Plan Details</label>
                                                <textarea name="data[trialPlan_details]"
                                                    id="editor1"><?= $data['trialPlan_details']; ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Personal Plan Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                            <div class="form-group mb-3">
                                                <label for="">Personal Plan Heading</label>
                                                <input type="text" class="form-control" name="data[personalPlan_heading]"
                                                    value="<?= $data['personalPlan_heading']; ?>">
                                            </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Most Popular</label>
                                                        <input type="text" class="form-control"
                                                            name="data[most_popular]"
                                                            value="<?= $data['most_popular']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Personal Plan Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[personalPlan_description]"><?= $data['personalPlan_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Personal Plan Price</label>
                                                <input type="text" class="form-control"
                                                    name="data[personalPlan_price]" value="<?= $data['personalPlan_price']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Personal Plan Button Text</label>
                                                        <input type="text" class="form-control"
                                                            name="data[personalPlan_button_text]"
                                                            value="<?= $data['personalPlan_button_text']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Personal Plan Button Url</label>
                                                        <input type="text" class="form-control"
                                                            name="data[personalPlan_button_url]"
                                                            value="<?= $data['personalPlan_button_url']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Personal Plan Details</label>
                                                <textarea name="data[personalPlan_details]"
                                                    id="editor2"><?= $data['personalPlan_details']; ?></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Business Plan Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Business Plan Heading</label>
                                                <input type="text" class="form-control" name="data[businessPlan_heading]"
                                                    value="<?= $data['businessPlan_heading']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Business Plan Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[businessPlan_description]"><?= $data['businessPlan_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Business Plan Details</label>
                                                <textarea name="data[businessPlan_details]"
                                                    id="editor3"><?= $data['businessPlan_details']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Custom Plan Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Custom Plan Heading</label>
                                                <input type="text" class="form-control" name="data[customPlan_heading]"
                                                    value="<?= $data['customPlan_heading']; ?>">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Custom Plan Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[customPlan_description]"><?= $data['customPlan_description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Custom Plan Details</label>
                                                <textarea name="data[customPlan_details]"
                                                    id="editor4"><?= $data['customPlan_details']; ?></textarea>
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

         if (document.querySelector('#editor2')) {
            const editor2 = new RichTextEditor("#editor2", editorConfig);
        }

          if (document.querySelector('#editor3')) {
            const editor3 = new RichTextEditor("#editor3", editorConfig);
        }

          if (document.querySelector('#editor4')) {
            const editor4 = new RichTextEditor("#editor4", editorConfig);
        }

    </script>
@endsection