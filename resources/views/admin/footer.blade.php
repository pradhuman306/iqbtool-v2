@extends("layouts.adminapp")
@section('title', 'Footer')
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
                        <div class="page-content-section mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">CTA box</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">CTA label</label>
                                                        <input type="text" class="form-control" name="data[Get in touch]"
                                                            value="<?= $data['Get in touch']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">CTA heading</label>
                                                        <input type="text" class="form-control" name="data[Let's start something great]"
                                                            value="<?= $data["Let's start something great"]; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">CTA text</label>
                                                <input type="text" class="form-control" name="data[Use over 1000+ customers already with IQB]"
                                                    value="<?= $data['Use over 1000+ customers already with IQB']; ?>">
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">CTA button text</label>
                                                        <input type="text" class="form-control" name="data[Get started]"
                                                            value="<?= $data['Get started']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">CTA button URL</label>
                                                        <input type="url" class="form-control" name="data[CTA_URL]"
                                                            value="<?= $data["CTA_URL"]; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            {{-- footer   --}}
                               <div class="row">
                                <div class="col-12">
                                    <h2 class="mb-4">Footer Area</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">tagline</label>
                                                        <input type="text" class="form-control" name="data[IQB Tool – More with Less | Quick and easy]"
                                                            value="<?= $data['IQB Tool – More with Less | Quick and easy']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Menus text</label>
                                                        <input type="text" class="form-control" name="data[Menus]"
                                                            value="<?= $data["Menus"]; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Links text</label>
                                                        <input type="text" class="form-control" name="data[Links]"
                                                            value="<?= $data['Links']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Let's Connect</label>
                                                        <input type="text" class="form-control" name="data[Let's Connect]"
                                                            value="<?= $data["Let's Connect"]; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    {{-- email  --}}
                                     <div class="row">
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Footer Email</label>
                                                <input type="email" class="form-control" name="data[footer_email]"
                                                    value="<?= $data['footer_email']; ?>">
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
@endsection
