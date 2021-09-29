@extends('admin.layout')

@section('title', 'ALA | ADD MEMBERS')

@section('custom-css')
    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="{{ asset('assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
        rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css') }}" rel="stylesheet" />

    <!-- Wait Me Css -->
    <link href="{{ asset('assets/plugins/waitme/waitMe.css') }}" rel="stylesheet" />

    <!-- Bootstrap Select Css -->
    <link href="{{ asset('plugins/bootstrap-select/css/bootstrap-select.css') }}" rel="stylesheet" />
@endsection

@section('body')
    <div class="container">
        <div class="card" style="padding:2%;">
            <div class="card-header">
                <h4 class="text-primary">Members / Add Members</h4>
            </div>
            <div class="card-body">
                <div class="body">
                    <h2 class="card-inside-title">Enter Information</h2>
                    <div class="row clearfix">
                        <div class="col-md-4 col-lg-12">
                            <h2>Profile Pic Upload & Image Preview</h2>

                            <!-- Upload  -->
                            <form id="file-upload-form" class="uploader">
                                <input id="file-upload" type="file" name="fileUpload" accept="image/*" />

                                <label for="file-upload" id="file-drag">
                                    <img id="file-image" src="#" alt="Preview" class="hidden">
                                    <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div>Select a file or drag here</div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                    </div>
                                    <div id="response" class="hidden">
                                        <div id="messages"></div>
                                        <progress class="progress" id="file-progress" value="0">
                                            <span>0</span>%
                                        </progress>
                                    </div>
                                </label>
                            </form>
                        </div><br>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Name" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Father's Name" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Mother's Name" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Spouse" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="E-mail" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Phone Number" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="No Of Children" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Son" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">

                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Daugter" />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Present Address" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Permanent Adress" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="datepicker form-control"
                                        placeholder="Please choose a date...">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <select class="form-control show-tick">
                                <option value="">-- Please select Gender --</option>
                                <option value="m">Male</option>
                                <option value="f">Female</option>
                                <option value="o">Others</option>
                            </select>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <select class="form-control show-tick">
                                <option value="">-- Marital Status --</option>
                                <option value="married">Married</option>
                                <option value="unmarried">Unmarried</option>
                                <option value="widowed">Widowed</option>
                                <option value="seperated">Seperated</option>
                                <option value="divorced">Divorced</option>
                            </select>
                        </div>
                        <div class="row col-lg-12">
                            <div class="col-md-6 col-lg-3">
                                <select class="form-control show-tick">
                                    <option value="">-- Assembly --</option>
                                    <option value="10"></option>

                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <select class="form-control show-tick">
                                    <option value="">-- Session --</option>

                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <select class="form-control show-tick">
                                    <option value="">-- Political Party --</option>

                                </select>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <select class="form-control show-tick">
                                    <option value="">-- Constituency --</option>

                                </select>
                            </div>
                        </div>

                        <button class="btn btn-danger form-control btn-block" type="submit" form="form1"
                            value="Submit">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    @endsection

    @section('custom-js')
        <!-- Bootstrap Material Datetime Picker Plugin Js -->
        <script src="{{ asset('assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}"></script>

        <!-- Bootstrap Datepicker Plugin Js -->
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>

        <!-- Custom Js -->
        <script src="{{ asset('assets/js/admin.js') }}"></script>
        <script src="{{ asset('assets/js/pages/forms/basic-form-elements.js') }}"></script>
        <script>
            function ekUpload() {
                function Init() {

                    //console.log("Upload Initialised");

                    var fileSelect = document.getElementById('file-upload'),
                        fileDrag = document.getElementById('file-drag'),
                        submitButton = document.getElementById('submit-button');

                    fileSelect.addEventListener('change', fileSelectHandler, false);

                    // Is XHR2 available?
                    var xhr = new XMLHttpRequest();
                    if (xhr.upload) {
                        // File Drop
                        fileDrag.addEventListener('dragover', fileDragHover, false);
                        fileDrag.addEventListener('dragleave', fileDragHover, false);
                        fileDrag.addEventListener('drop', fileSelectHandler, false);
                    }
                }

                function fileDragHover(e) {
                    var fileDrag = document.getElementById('file-drag');

                    e.stopPropagation();
                    e.preventDefault();

                    fileDrag.className = (e.type === 'dragover' ? 'hover' : 'modal-body file-upload');
                }

                function fileSelectHandler(e) {
                    // Fetch FileList object
                    var files = e.target.files || e.dataTransfer.files;

                    // Cancel event and hover styling
                    fileDragHover(e);

                    // Process all File objects
                    for (var i = 0, f; f = files[i]; i++) {
                        parseFile(f);
                        uploadFile(f);
                    }
                }

                // Output
                function output(msg) {
                    // Response
                    var m = document.getElementById('messages');
                    m.innerHTML = msg;
                }

                function parseFile(file) {

                    console.log(file.name);
                    output(
                        '<strong>' + encodeURI(file.name) + '</strong>'
                    );

                    // var fileType = file.type;
                    // console.log(fileType);
                    var imageName = file.name;

                    var isGood = (/\.(?=gif|jpg|png|jpeg)/gi).test(imageName);
                    if (isGood) {
                        document.getElementById('start').classList.add("hidden");
                        document.getElementById('response').classList.remove("hidden");
                        document.getElementById('notimage').classList.add("hidden");
                        // Thumbnail Preview
                        document.getElementById('file-image').classList.remove("hidden");
                        document.getElementById('file-image').src = URL.createObjectURL(file);
                    } else {
                        document.getElementById('file-image').classList.add("hidden");
                        document.getElementById('notimage').classList.remove("hidden");
                        document.getElementById('start').classList.remove("hidden");
                        document.getElementById('response').classList.add("hidden");
                        document.getElementById("file-upload-form").reset();
                    }
                }

                function setProgressMaxValue(e) {
                    var pBar = document.getElementById('file-progress');

                    if (e.lengthComputable) {
                        pBar.max = e.total;
                    }
                }

                function updateFileProgress(e) {
                    var pBar = document.getElementById('file-progress');

                    if (e.lengthComputable) {
                        pBar.value = e.loaded;
                    }
                }

                function uploadFile(file) {

                    var xhr = new XMLHttpRequest(),
                        fileInput = document.getElementById('class-roster-file'),
                        pBar = document.getElementById('file-progress'),
                        fileSizeLimit = 1024; // In MB
                    if (xhr.upload) {
                        // Check if file is less than x MB
                        if (file.size <= fileSizeLimit * 1024 * 1024) {
                            // Progress bar
                            pBar.style.display = 'inline';
                            xhr.upload.addEventListener('loadstart', setProgressMaxValue, false);
                            xhr.upload.addEventListener('progress', updateFileProgress, false);

                            // File received / failed
                            xhr.onreadystatechange = function(e) {
                                if (xhr.readyState == 4) {
                                    // Everything is good!

                                    // progress.className = (xhr.status == 200 ? "success" : "failure");
                                    // document.location.reload(true);
                                }
                            };

                            // Start upload
                            xhr.open('POST', document.getElementById('file-upload-form').action, true);
                            xhr.setRequestHeader('X-File-Name', file.name);
                            xhr.setRequestHeader('X-File-Size', file.size);
                            xhr.setRequestHeader('Content-Type', 'multipart/form-data');
                            xhr.send(file);
                        } else {
                            output('Please upload a smaller file (< ' + fileSizeLimit + ' MB).');
                        }
                    }
                }

                // Check for the various File API support.
                if (window.File && window.FileList && window.FileReader) {
                    Init();
                } else {
                    document.getElementById('file-drag').style.display = 'none';
                }
            }
            ekUpload();
        </script>
    @endsection
