<!doctype html>
<html lang="en">

<head>

    <?=view('component/back/head')?>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">

</head>

<body data-sidebar="dark" data-layout-mode="light">

    <!-- Begin page -->
    <div id="layout-wrapper">

        <?=view('component/back/header')?>
        <?=view('component/back/sidebar')?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page breadcrumb -->
                    <?=view('component/back/breadcrumb')?>
                    <!-- end page breadcrumb -->
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-4">Add News</h4>

                                    <form action="" method="post" enctype='multipart/form-data'>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" class="form-control" required id="title" name="title"
                                                        placeholder="Enter News Title">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="news_category_id" class="form-label">News Category</label>
                                                    <select class="form-select" id="news_category_id" name="news_category_id">
                                                        <option value=""> -- Select -- </option>
                                                        <?php foreach($news_cat as $row){ ?>
                                                            <option value="<?=$row->id?>"><?=$row->label?></option>
                                                        <?php } ?>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <label for="featured_image" class="form-label">Featured Image</label>
                                                <input type="file" class="form-control" id="featured_image"
                                                    name="featured_image">
                                            </div>
                                            <div class="col-md-4">
                                                <div class="mb-3">
                                                    <label for="published_status" class="form-label">Published
                                                        Status</label>
                                                    <select class="form-select" id="published_status"
                                                        name="published_status">
                                                        <option value="draft" selected>Draft</option>
                                                        <option value="published">Published</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <textarea name="content" id="content" class="form-control" cols="30"
                                                rows="10" placeholder="Content"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" checked name="is_active" id="is_active">
                                                <label class="form-check-label" for="is_active">
                                                    Active ?
                                                </label>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <input type="submit" class="btn btn-primary w-md" name="submit" value="Save">
                                        </div>
                                    </form>
                                </div>
                                <!-- end card body -->
                            </div>
                            <!-- end card -->
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?=view('component/back/footer')?>


        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>


    <?=view('component/back/script')?>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script>
    $('#content').summernote({
        placeholder: 'Content',
        tabsize: 2,
        height: 200,
        toolbar: [
            ['style', ['style']],
            ['font', ['bold', 'underline', 'clear']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture', 'video']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
    </script>

</body>

</html>