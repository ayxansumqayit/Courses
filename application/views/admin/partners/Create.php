<?php $this->load->view('admin/includes/HeadScripts'); ?>
<!-- Banner -->


<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <?php $this->load->view('admin/includes/Sidebar'); ?>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center my-4">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight">Partners</h1>
                        </div>
                        <!-- Actions -->

                    </div>
                    <!-- Nav -->

                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->

                <div class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Create</h5>
                    </div>
                    <div class="card-body">
                    <?php if($this->session->flashdata('err')): ?>
                                    <div class="alert alert-danger alert-dismissible mb-5">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <?php echo $this->session->flashdata('err'); ?>
                                    </div>
                                    <?php endif; ?>

                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#home">AZE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#menu1">ENG</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#menu2">RUS</a>
                            </li>
                        </ul>

                        <form action="<?= base_url('admin_partners_create_act'); ?>" method="POST" enctype="multipart/form-data" id="course_form">
                            <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="tab-content">
                                        <div class="tab-pane container active" id="home">
                                            <div class="col-md-12">
                                                <label for="partners_title_az">Partners Title AZE</label>
                                                <input type="text" name="partners_title_az" class="form-control" id="partners_title_az" placeholder="Title name">
                                            </div>
                                        </div>
                                        <div class="tab-pane container fade" id="menu1">
                                            <div class="col-md-12">
                                                <label for="partners_title_en">Partners Title ENG</label>
                                                <input type="text" name="partners_title_en" class="form-control" id="partners_title_en" placeholder="Title name">
                                            </div>
                                        </div>
                                        <div class="tab-pane container fade" id="menu2">
                                            <div class="col-md-12">
                                                <label for="partners_title_ru">Partners Title RUS</label>
                                                <input type="text" name="partners_title_ru" class="form-control" id="partners_title_ru" placeholder="Title name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">


                                    <div class="col-md-12">
                                        <label for="partners_link">Partners Link</label>
                                        <input type="text" name="partners_link" class="form-control" id="partners_link" placeholder="Link">
                                    </div>

                                    <div class="col-md-12">
                                        <div class="d-flex flex-row justify-content-center mt-3">
                                            <div class="form-check form-switch me-n2"><input class="form-check-input" type="checkbox" name="partners_status" id="switch-dark-mode"></div>
                                        </div>
                                    </div>
                                    

                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="rounded border border-2 border-dashed border-primary-hover position-relative mt-3">
                                            <div class="d-flex justify-content-center px-5 py-5">
                                                <label for="file_upload" class="position-absolute w-full h-full top-0 start-0 cursor-pointer">
                                                    <input id="file_upload" name="file_upload" type="file" class="visually-hidden">
                                                </label>
                                                <div class="text-center">
                                                    <div class="text-2xl text-muted"><i class="bi bi-upload"></i></div>
                                                    <div class="d-flex text-sm mt-3">
                                                        <p class="font-semibold">Upload a file or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">PNG, JPG, GIF up to 3MB</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                   
                                </div>
                                
                                


                            </div>
                    <div class="card-footer border-0 py-5">

                        <div class="d-flex flex-row justify-content-end mx-n1">

                            <button type="submit" class="btn d-inline-flex btn-sm btn-primary mx-1" form="course_form">
                                <span>Create</span>
                                <span class=" pe-2 ml-3">
                                    <i class="bi bi-plus"></i>
                                </span>

                            </button>
                        </div>

                    </div>
                    </form>

                </div>


            </div>
    </div>
    </main>
</div>
</div>
<script src="https://clever.webpixels.io/js/main.js"></script>
</body>

</html>