<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Editors")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Editors")) ?>
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
                                             Overview <a class="btn btn-sm btn-outline-success rounded-2 float-end" href="https://quilljs.com/" target="_blank"> Official Website </a>
                                        </h5>
                                        <p class="text-muted mb-3">Quilljs is a lightweight and powerful datetime picker.</p>

                                        <h5 class="mt-2">Usage</h5>
                                        <p class="mb-0">Quilljs's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>
                                   </div><!-- end card-body -->
                              </div><!-- end card -->


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="quill-snow-editor">
                                             Snow Editor<a class="anchor-link" href="#quill-snow-editor">#</a>
                                        </h5>
                                        <p class="text-muted">Use <code>snow-editor</code> id to set snow editor.</p>
                                        <div class="mb-3">
                                             <div id="snow-editor" style="height: 300px;">
                                                  <h3><span class="ql-size-large">Hello World!</span></h3>
                                                  <p><br></p>
                                                  <h3>This is a simple editable area.</h3>
                                                  <p><br></p>
                                                  <ul>
                                                       <li>Select a text to reveal the toolbar.</li>
                                                       <li>Edit rich document on-the-fly, so elastic!</li>
                                                  </ul>
                                                  <p><br></p>
                                                  <p>End of simple area</p>
                                             </div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#snow-editor-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#snow-editor-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="snow-editor-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                           <code>
                                                                                &lt;!-- Quill Editors --&gt;
                                                                                &lt;div id=&quot;snow-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                                                                     &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                                                                     &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                     &lt;h3&gt;This is a simple editable area.&lt;/h3&gt;
                                                                                     &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                     &lt;ul&gt;
                                                                                          &lt;li&gt;Select a text to reveal the toolbar.&lt;/li&gt;
                                                                                          &lt;li&gt;Edit rich document on-the-fly, so elastic!&lt;/li&gt;
                                                                                     &lt;/ul&gt;
                                                                                     &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                     &lt;p&gt;End of simple area&lt;/p&gt;
                                                                                &lt;/div&gt;
                                                                           </code>
                                                                      </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="snow-editor-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                           <code>
                                                                                // Snow theme
                                                                                var quill = new Quill('#snow-editor', {
                                                                                     theme: 'snow',
                                                                                     modules: {
                                                                                          'toolbar': [[{ 'font': [] }, { 'size': [] }], ['bold', 'italic', 'underline', 'strike'], [{ 'color': [] }, { 'background': [] }], [{ 'script': 'super' }, { 'script': 'sub' }], [{ 'header': [false, 1, 2, 3, 4, 5, 6] }, 'blockquote', 'code-block'], [{ 'list': 'ordered' }, { 'list': 'bullet' }, { 'indent': '-1' }, { 'indent': '+1' }], ['direction', { 'align': [] }], ['link', 'image', 'video'], ['clean']]
                                                                                     },
                                                                                });
                                                                           </code>
                                                                      </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="quill-bubble-editor">
                                             Bubble Editor<a class="anchor-link" href="#quill-bubble-editor">#</a>
                                        </h5>
                                        <p class="text-muted">Use <code>bubble-editor</code> id to set bubble editor.</p>
                                        <div class="mb-3">
                                             <!-- Bubble Editors -->
                                             <div id="bubble-editor" style="height: 300px;">
                                                  <h3><span class="ql-size-large">Hello World!</span></h3>
                                                  <p><br></p>
                                                  <h3>This is a simple editable area.</h3>
                                                  <p><br></p>
                                                  <ul>
                                                       <li>Select a text to reveal the toolbar.</li>
                                                       <li>Edit rich document on-the-fly, so elastic!</li>
                                                  </ul>
                                                  <p><br></p>
                                                  <p>End of simple area</p>
                                             </div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#bubble-editor-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#bubble-editor-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="bubble-editor-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                      <code>
                                                                           &lt;!-- Bubble Editors --&gt;
                                                                           &lt;div id=&quot;bubble-editor&quot; style=&quot;height: 300px;&quot;&gt;
                                                                                &lt;h3&gt;&lt;span class=&quot;ql-size-large&quot;&gt;Hello World!&lt;/span&gt;&lt;/h3&gt;
                                                                                &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                &lt;h3&gt;This is a simple editable area.&lt;/h3&gt;
                                                                                &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                &lt;ul&gt;
                                                                                     &lt;li&gt;Select a text to reveal the toolbar.&lt;/li&gt;
                                                                                     &lt;li&gt;Edit rich document on-the-fly, so elastic!&lt;/li&gt;
                                                                                &lt;/ul&gt;
                                                                                &lt;p&gt;&lt;br&gt;&lt;/p&gt;
                                                                                &lt;p&gt;End of simple area&lt;/p&gt;
                                                                           &lt;/div&gt;
                                                                      </code>
                                                                 </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="bubble-editor-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                      <code>
                                                                           // Bubble theme
                                                                           var quill = new Quill('#bubble-editor', {
                                                                           theme: 'bubble'
                                                                           });

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

     <!-- Quill Editor js -->
     <script src="/js/components/form-quilljs.js"></script>

</body>

</html>