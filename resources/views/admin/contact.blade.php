@extends('layouts.adminapp')
@section('title', 'Contact')
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
                                    <h2 class="mb-4">Contact Section</h2>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Contact Subheading</label>
                                                        <input type="text" class="form-control"
                                                            name="data[contact_subheading]"
                                                            value="<?= $data['contact_subheading']; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label for="">Contact Heading</label>
                                                        <input type="text" class="form-control" name="data[contact_heading]"
                                                            value="<?= $data['contact_heading']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label for="">Contact Description</label>
                                                <textarea type="text" class="form-control"
                                                    name="data[contact_description]"><?= $data['contact_description']; ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div id="contactList-items-container" class="col-12">
                                            <h2 class="mb-4">Contact List</h2>
                                            <?php

    foreach ($data['contact_list'] as $key => $value) { 
            ?>
                                            <div class="row contact-item <?= $key > 0 ? 'contact-list-item' : ''; ?>">
                                                <div class="col-12">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="row row-wrapper">
                                                                <div class="col-12 preview-col">
                                                                    <div class="form-group mb-3">
                                                                        <label for="">Contact List Item</label>
                                                                        <input type="text" class="form-control"
                                                                            name="data[contact_list][<?= $key; ?>][contact_list_item]"
                                                                            data-name="data[contact_list][<?= $key; ?>][contact_list_item]"
                                                                            value="<?= $value['contact_list_item']; ?>">
                                                                    </div>
                                                                </div>
                                                                <div class="remove-col">
                                                                    <?php    if ($key > 0) { ?>
                                                                    <div class="text-end">
                                                                        <button type="button" class="btn btn-danger"
                                                                            onclick="removeContactListItem(this)">Remove</button>
                                                                    </div>
                                                                    <?php    } ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group mb-3">
                                                                <label for="data[px_image]">Contact List Item Url</label>
                                                                <input type="text" class="form-control"
                                                                    name="data[contact_list][<?= $key; ?>][contact_list_item_url]"
                                                                    data-name="data[contact_list][<?= $key; ?>][contact_list_item_url]"
                                                                    value="<?= $value['contact_list_item']; ?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <div class="form-group mb-3">
                                                                        <label for="form-solutions-image-upload">Contact
                                                                            Item
                                                                            Image</label><br />
                                                                        <div class="upload-box">
                                                                            <span>Click or drag image to upload</span>
                                                                            <input type="file"
                                                                                id="contact-list-image-upload"
                                                                                name="data[contact_list][<?= $key; ?>][image]"
                                                                                accept="image/*" />

                                                                            <input type="hidden"
                                                                                value="<?= $value['image']; ?>"
                                                                                name="data[contact_list][<?= $key; ?>][oldimage]" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group mb-3">
                                                                        <label>Preview Image</label><br />
                                                                        <img id="preview-contact-list-image"
                                                                            src="{{ asset('/') }}<?= $value['image']; ?>"
                                                                            class="preview-img" name="data[preview]"
                                                                            alt="Image Preview" />
                                                                    </div>
                                                                </div>
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
                                        <button type="button" class="btn btn-primary-outline add-row-btn"
                                            onclick="addContactListItem()">Add New Contact Item</button>
                                    </div>
                                    <div id="contactList-item-template" class="contact-list-item contact-item row"
                                        style="display: none;">
                                        <div class="col-12">
                                            <div class="row row-wrapper">
                                                <div class="col-12 preview-col">
                                                    <div class="form-group mb-3">
                                                        <label for="">Contact List Item</label>
                                                        <input type="text" class="form-control"
                                                            data-name="data[contact_list][0][contact_list_item]" value="">
                                                    </div>
                                                </div>
                                                <div class="remove-col">
                                                    <div class="text-end">
                                                        <button type="button" class="btn btn-danger"
                                                            onclick="removeContactListItem(this)">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="data[px_image]">Contact List Item Url</label>
                                                <input type="text" class="form-control"
                                                    data-name="data[contact_list][0][contact_list_item_url]" value="">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Contact Item
                                                            Image</label><br />
                                                        <div class="upload-box">
                                                            <span>Click or drag image to upload</span>
                                                            <input type="file" name="data[contact_list][0][image]"
                                                                class="feature-image" accept="image/*" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group mb-3">
                                                        <label>Preview Image</label><br />
                                                        <img class="preview-img" name="data[preview]" src=""
                                                            style="max-height: 100px;" alt="Image Preview" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- end --}}
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
    <script>
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

        setupImagePreview('contact-list-image-upload', 'preview-contact-list-image');
        // contact list
        function updateContactListIndexes() {
            document.querySelectorAll('.contact-item').forEach((item, index) => {
                if (window.getComputedStyle(item).display === 'none') return; // Skip hidden items
                index = index; // Start from 1 for better readability
                item.querySelector('[data-name^="data[contact_list]"][data-name$="[contact_list_item]"]').name = `data[contact_list][${index}][contact_list_item]`;
                item.querySelector('[data-name^="data[contact_list]"][data-name$="[contact_list_item_url]"]').name = `data[contact_list][${index}][contact_list_item_url]`;
                item.querySelector('[name^="data[contact_list]"][type="file"]').name = `data[contact_list][${index}][image]`;
                let inputID = 'feature-input-' + index;
                item.querySelector('[name^="data[contact_list]"][type="file"]').id = inputID;
                let previewID = 'feature-preview-' + index;
                item.querySelector('[name^="data[preview]"]').id = previewID;
                setupImagePreview(inputID, previewID);
            });
        }

        function addContactListItem() {
            const template = document.getElementById('contactList-item-template').cloneNode(true);
            template.style.display = '';
            template.classList.remove('d-none');
            template.removeAttribute('id');
            document.getElementById('contactList-items-container').appendChild(template);
            updateContactListIndexes();
        }

        function removeContactListItem(btn) {
            btn.closest('.contact-list-item').remove();
            updateContactListIndexes();
        }
        updateContactListIndexes();
    </script>
@endsection