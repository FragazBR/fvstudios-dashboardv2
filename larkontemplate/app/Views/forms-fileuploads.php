<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "File Uploads")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "File Uploads")) ?>
          <?= $this->include('partials/main-nav') ?>

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container">

                    <div class="row">
                         <div class="col-xl-12">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="overview">
                                             Overview <a class="btn btn-sm btn-outline-success rounded-2 float-end" href="https://www.dropzone.dev/js" target="_blank"> Official Website </a>
                                        </h5>
                                        <p class="text-muted mb-3">Dropzone is a lightweight and powerful datetime picker.</p>

                                        <h5 class="mt-2">Usage</h5>
                                        <p class="mb-0">Dropzone's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>
                                   </div><!-- end card-body -->
                              </div><!-- end card -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="default">
                                             Dropzone File Upload<a class="anchor-link" href="#default">#</a>
                                        </h5>
                                        <p class="text-muted">
                                             DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews.
                                        </p>
                                        <div class="mb-3">

                                             <div class="dropzone">
                                                  <div class="fallback">
                                                       <input name="file" type="file" multiple="multiple">
                                                  </div>
                                                  <div class="dz-message needsclick">
                                                       <i class="h1 bx bx-cloud-upload"></i>
                                                       <h3>Drop files here or click to upload.</h3>
                                                       <span class="text-muted fs-13">
                                                            (This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)
                                                       </span>
                                                  </div>
                                             </div>

                                             <ul class="list-unstyled mb-0" id="dropzone-preview">
                                                  <li class="mt-2" id="dropzone-preview-list">
                                                       <!-- This is used as the file preview template -->
                                                       <div class="border rounded">
                                                            <div class="d-flex align-items-center p-2">
                                                                 <div class="flex-shrink-0 me-3">
                                                                      <div class="avatar-sm bg-light rounded">
                                                                           <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                                                                      </div>
                                                                 </div>
                                                                 <div class="flex-grow-1">
                                                                      <div class="pt-1">
                                                                           <h5 class="fs-14 mb-1" data-dz-name>&nbsp;</h5>
                                                                           <p class="fs-13 text-muted mb-0" data-dz-size></p>
                                                                           <strong class="error text-danger" data-dz-errormessage></strong>
                                                                      </div>
                                                                 </div>
                                                                 <div class="flex-shrink-0 ms-3">
                                                                      <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </li>
                                             </ul>
                                             <!-- end dropzon-preview -->
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#homePill" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#profilePill" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="homePill">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                      <code>
                                                                           &lt;div class=&quot;dropzone&quot;&gt;
                                                                                &lt;div class=&quot;fallback&quot;&gt;
                                                                                     &lt;input name=&quot;file&quot; type=&quot;file&quot; multiple=&quot;multiple&quot;&gt;
                                                                                &lt;/div&gt;
                                                                                &lt;div class=&quot;dz-message needsclick&quot;&gt;
                                                                                     &lt;i class=&quot;h1 bx bx-cloud-upload&quot;&gt;&lt;/i&gt;
                                                                                     &lt;h3&gt;Drop files here or click to upload.&lt;/h3&gt;
                                                                                     &lt;span class=&quot;text-muted fs-13&quot;&gt;
                                                                                          (This is just a demo dropzone. Selected files are &lt;strong&gt;not&lt;/strong&gt; actually uploaded.)
                                                                                     &lt;/span&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/div&gt;
                    
                                                                           &lt;ul class=&quot;list-unstyled mb-0&quot; id=&quot;dropzone-preview&quot;&gt;
                                                                                &lt;li class=&quot;mt-2&quot; id=&quot;dropzone-preview-list&quot;&gt;
                                                                                     &lt;!-- This is used as the file preview template --&gt;
                                                                                     &lt;div class=&quot;border rounded&quot;&gt;
                                                                                          &lt;div class=&quot;d-flex p-2&quot;&gt;
                                                                                               &lt;div class=&quot;flex-shrink-0 me-3&quot;&gt;
                                                                                                    &lt;div class=&quot;avatar-sm bg-light rounded&quot;&gt;
                                                                                                    &lt;img data-dz-thumbnail class=&quot;img-fluid rounded d-block&quot; src=&quot;#&quot; alt=&quot;Dropzone-Image&quot; /&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/div&gt;
                                                                                               &lt;div class=&quot;flex-grow-1&quot;&gt;
                                                                                                    &lt;div class=&quot;pt-1&quot;&gt;
                                                                                                    &lt;h5 class=&quot;fs-14 mb-1&quot; data-dz-name&gt;&amp;nbsp;&lt;/h5&gt;
                                                                                                    &lt;p class=&quot;fs-13 text-muted mb-0&quot; data-dz-size&gt;&lt;/p&gt;
                                                                                                    &lt;strong class=&quot;error text-danger&quot; data-dz-errormessage&gt;&lt;/strong&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/div&gt;
                                                                                               &lt;div class=&quot;flex-shrink-0 ms-3&quot;&gt;
                                                                                                    &lt;button data-dz-remove class=&quot;btn btn-sm btn-danger&quot;&gt;Delete&lt;/button&gt;
                                                                                               &lt;/div&gt;
                                                                                          &lt;/div&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/li&gt;
                                                                           &lt;/ul&gt;
                                                                           &lt;!-- end dropzon-preview --&gt;
                                                                      </code>
                                                                 </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="profilePill">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                      <code>
                                                                           // Dropzone
                                                                           var dropzonePreviewNode = document.querySelector("#dropzone-preview-list");
                                                                           dropzonePreviewNode.id = "";
                                                                           if (dropzonePreviewNode) {
                                                                                var previewTemplate = dropzonePreviewNode.parentNode.innerHTML;
                                                                                dropzonePreviewNode.parentNode.removeChild(dropzonePreviewNode);
                                                                                var dropzone = new Dropzone(".dropzone", {
                                                                                     url: 'https://httpbin.org/post',
                                                                                     method: "post",
                                                                                     previewTemplate: previewTemplate,
                                                                                     previewsContainer: "#dropzone-preview",
                                                                                });
                                                                           }    
                                                                      </code>
                                                                 </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->
                         </div> <!-- end col -->
                    </div> <!-- end row -->
               </div>
               <!-- End Container Fluid -->

               <?= $this->include("partials/footer") ?>

          </div>
          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

     <?= $this->include("partials/vendor-scripts") ?>

     <!-- File Upload Dropzone Demo Js -->
     <script src="/js/components/form-fileupload.js"></script>

</body>

</html>