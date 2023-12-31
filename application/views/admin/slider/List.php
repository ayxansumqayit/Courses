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
                            <h1 class="h2 mb-0 ls-tight">Slider List</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end">
                            <div class="mx-n1">
                                
                                <a href="<?= base_url('admin_slider_create'); ?>" class="btn d-inline-flex btn-sm btn-primary mx-1">
                                <span>Create</span>
                                <span class="pe-2 mr-3">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                   
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">
                <!-- Card stats -->
              
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="sliderDataTable" width="100%" cellspacing="0">
                        <thead>
                    <tr>
                        <th>№</th>
                        <th>Title</th>
                        <th>Link</th>
                        <th>Status</th>
                        <th>Img</th>
                        <th>Control</th>
                    </tr>
                </thead>
                <tbody>
                
                    <?php
                    $id_slider =1;
                    foreach($slider_data as $slider_item ): ?>
                    <tr>
                        <td><?= $id_slider++; ?></td>
                        <td><?= $slider_item["sl_title_en"]; ?></td>
                        <td><p><?= substr($slider_item["sl_link"], 0, 20 ) ; ?>...</p></td>
                        <td><?= $slider_item["sl_status"]?"Active":"Deactive"; ?></td>
                        <td><a target="_blank" href="<?php echo base_url('uploads/slider/'.$slider_item['sl_img']); ?>"><img src="<?php echo base_url('uploads/slider/'.$slider_item['sl_img']); ?>" alt="" style="object-fit: cover; object-position:top; width:150px; height:150px; aspect-ratio:initial;"></a></td>
                        <td>
                            <a  href="<?php echo base_url('admin_slider_edit/').$slider_item['sl_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <button type="submit" class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </button>
                                    
                            </a>
                            <a  href="<?php echo base_url('admin_slider_details/').$slider_item['sl_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <button type="submit" class=" pe-2">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    
                            </a>
                            <a onclick="return confirm('Are you sure want to delete this item?')" href="<?php echo base_url('admin_slider_delete/').$slider_item['sl_id']; ?>" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <button type="submit" class=" pe-2">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
                        </table>
                        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
                        <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
                        <script>
                            $(document).ready(function() {
                                $('#sliderDataTable').DataTable();
                            });
                        </script>
                    </div>
                </div>
                
            </div>
        </main>
    </div>
</div>
<script src="https://clever.webpixels.io/js/main.js"></script>
</body>
</html>