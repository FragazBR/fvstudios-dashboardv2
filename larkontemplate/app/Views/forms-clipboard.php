<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Clipboard")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Clipboard")) ?>
          <?= $this->include('partials/main-nav') ?>

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          <div class="page-content">

               <!-- Start Container Fluid -->
               <div class="container">

                    <div class="row">
                         <div class="col-xl-9">
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="overview">
                                             Overview <a class="btn btn-sm btn-outline-success rounded-2 float-end" href="https://github.com/Choices-js/Choices" target="_blank"> Official Website </a>
                                        </h5>
                                        <p class="text-muted mb-3">Choices.js is a lightweight and powerful datetime picker.</p>

                                        <h5 class="mt-2">Usage</h5>
                                        <p>Choices.js's CSS and Javascript files are bundled in the <code>vender.min.css</code> and <code>vendor.js</code> and globally included in all pages.</p>
                                        <p class="mb-0"><span class="fw-medium">Find the JS file for the following chart at:</span> <code> /js/components/form-clipboard.js</code></p>
                                   </div><!-- end card-body -->
                              </div><!-- end card -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="copy-from-element">
                                             Copy text from another element <a class="anchor-link" href="#copy-from-element">#</a>
                                        </h5>
                                        <p class="text-muted">The value you include on this attribute needs to match another's element selector.</p>
                                        <div class="w-50 mb-3">
                                             <div class="input-group">
                                                  <input id="clipboard_example" type="text" class="form-control" placeholder="name@example.com" value="name@example.com" />
                                                  <button class="btn btn-primary btn-copy-clipboard" data-clipboard-target="#clipboard_example"> Copy </button>
                                             </div>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#copy-element-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#copy-element-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="copy-element-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;input-group&quot;&gt;
                                                                           &lt;input id=&quot;clipboard_example&quot; type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;name@example.com&quot; value=&quot;name@example.com&quot; /&gt;
                                                                           &lt;button class=&quot;btn btn-primary btn-copy-clipboard&quot; data-clipboard-target=&quot;#clipboard_example&quot;&gt; Copy &lt;/button&gt;
                                                                      &lt;/div&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="copy-element-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      // Select elements
                                                                      const target = document.getElementById('clipboard_example');
                                                                      const button = target.nextElementSibling;
                                                                 
                                                                      // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
                                                                      var clipboard = new ClipboardJS(button, {
                                                                           target: target,
                                                                           text: function () {
                                                                                return target.value;
                                                                           }
                                                                      });
                                                                 
                                                                      // Success action handler
                                                                      clipboard.on('success', function (e) {
                                                                           const currentLabel = button.innerHTML;
                                                                 
                                                                           // Exit label update when already in progress
                                                                           if (button.innerHTML === 'Copied!') {
                                                                                return;
                                                                           }
                                                                 
                                                                           // Update button label
                                                                           button.innerHTML = 'Copied!';
                                                                 
                                                                           // Revert button label after 3 seconds
                                                                           setTimeout(function () {
                                                                                button.innerHTML = currentLabel;
                                                                           }, 3000)
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
                                        <h5 class="card-title mb-1 anchor" id="cut-from-element">
                                             Cut text from another element <a class="anchor-link" href="#cut-from-element">#</a>
                                        </h5>
                                        <p class="text-muted">Additionally, you can define a <code>data-clipboard-action</code> attribute to specify if you want to either <code>copy</code> or <code>cut</code> content.</p>

                                        <div class="d-flex gap-2 align-items-start mb-3">
                                             <textarea id="clipboard_cut" class="form-control w-50" cols="62" rows="6">Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga.</textarea>
                                             <button class="btn btn-primary" data-clipboard-action="cut" data-clipboard-target="#clipboard_cut"> Copy </button>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#cut-element-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#cut-element-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="cut-element-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;textarea id=&quot;clipboard_cut&quot; class=&quot;form-control mb-3&quot; cols=&quot;62&quot; rows=&quot;6&quot;&gt;Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra l&aacute; , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. M&eacute; faiz elementum girarzis, nisi eros vermeio, in elementis m&eacute; pra quem &eacute; amistosis quis leo. Manduma pindureta quium dia nois paga.&lt;/textarea&gt;
                                                                      &lt;button class=&quot;btn btn-primary&quot; data-clipboard-action=&quot;cut&quot; data-clipboard-target=&quot;#clipboard_cut&quot;&gt; Copy &lt;/button&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="cut-element-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      // Select elements
                                                                      const target = document.getElementById('clipboard_cut');
                                                                      const button = target.nextElementSibling;

                                                                      // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
                                                                      var clipboard = new ClipboardJS(button, {
                                                                           target: target,
                                                                           text: function () {
                                                                                return target.innerText;
                                                                           }
                                                                      });

                                                                      // Success action handler
                                                                      clipboard.on('success', function (e) {
                                                                           const currentLabel = button.innerHTML;

                                                                           // Exit label update when already in progress
                                                                           if (button.innerHTML === 'Copied!') {
                                                                                return;
                                                                           }

                                                                           // Update button label
                                                                           button.innerHTML = 'Copied!';

                                                                           // Revert button label after 3 seconds
                                                                           setTimeout(function () {
                                                                                button.innerHTML = currentLabel;
                                                                           }, 3000)
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
                                        <h5 class="card-title mb-1 anchor" id="copy-from-attribute">
                                             Copy text from attribute <a class="anchor-link" href="#copy-from-attribute">#</a>
                                        </h5>

                                        <p class="text-muted">Truth is, you don't even need another element to copy its content from. You can just include a <code>data-clipboard-text</code> attribute in your trigger element.</p>
                                        <div class="w-50 mb-3">
                                             <!-- Trigger -->
                                             <button id="clipboard_text" class="btn btn-primary" data-clipboard-text="Just because you can doesn't mean dfdyou should — clipboard.js">
                                                  Copy to clipboard
                                             </button>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <ul class="nav nav-pills">
                                                       <li class="nav-item">
                                                            <a href="#copy-attribute-html" data-bs-toggle="tab" aria-expanded="false" class="nav-link active">
                                                                 <span class="fs-12 text-uppercase">html</span>
                                                            </a>
                                                       </li>
                                                       <li class="nav-item">
                                                            <a href="#copy-attribute-javascript" data-bs-toggle="tab" aria-expanded="true" class="nav-link">
                                                                 <span class="fs-12 text-uppercase">javascript</span>
                                                            </a>
                                                       </li>
                                                  </ul>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="tab-content">
                                                  <div class="tab-pane show active" id="copy-attribute-html">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;button id=&quot;clipboard_text&quot; class=&quot;btn btn-primary&quot; data-clipboard-text=&quot;Just because you can doesn't mean dfdyou should &mdash; clipboard.js&quot;&gt;
                                                                           Copy to clipboard
                                                                      &lt;/button&gt;
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                                  <div class="tab-pane" id="copy-attribute-javascript">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-javascript">
                                                                 <code>
                                                                      // Select element
                                                                      const target = document.getElementById('clipboard_text');

                                                                      // Init clipboard -- for more info, please read the offical documentation: https://clipboardjs.com/
                                                                      var clipboard = new ClipboardJS(target);

                                                                      // Success action handler
                                                                      clipboard.on('success', function (e) {
                                                                           const currentLabel = target.innerHTML;

                                                                           // Exit label update when already in progress
                                                                           if (target.innerHTML === 'Copied!') {
                                                                                return;
                                                                           }

                                                                           // Update button label
                                                                           target.innerHTML = 'Copied!';

                                                                           // Revert button label after 3 seconds
                                                                           setTimeout(function () {
                                                                                target.innerHTML = currentLabel;
                                                                           }, 3000)
                                                                      });
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                         </div> <!-- end col -->

                         <div class="col-xl-3">
                              <div class="card docs-nav">
                                   <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                             <a href="#copy-from-element" class="nav-link">Copy text from another element</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#cut-from-element" class="nav-link">Cut text from another element</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#copy-from-attribute" class="nav-link">Copy text from attribute</a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
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
     <script src="/js/components/form-clipboard.js"></script>

</body>

</html>