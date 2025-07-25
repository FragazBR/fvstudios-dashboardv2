<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Form Basic Element")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Form Basic Element")) ?>
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
                                        <h5 class="card-title mb-1 anchor" id="basic">
                                             Basic Example<a class="anchor-link" href="#basic">#</a>
                                        </h5>
                                        <p class="text-muted">Give textual form controls like <code>&lt;input&gt;</code>s and <code>&lt;textarea&gt;</code>s an upgrade with custom styles, sizing, focus states, and more.</p>
                                        <div class="">
                                             <div>
                                                  <div class="mb-3">
                                                       <label for="simpleinput" class="form-label">Text</label>
                                                       <input type="text" id="simpleinput" class="form-control">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="example-email" class="form-label">Email</label>
                                                       <input type="email" id="example-email" name="example-email" class="form-control" placeholder="Email">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="example-password" class="form-label">Password</label>
                                                       <input type="password" id="example-password" class="form-control" value="password">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="example-palaceholder" class="form-label">Placeholder</label>
                                                       <input type="text" id="example-palaceholder" class="form-control" placeholder="placeholder">
                                                  </div>

                                                  <div class="mb-3">
                                                       <label for="example-textarea" class="form-label">Text area</label>
                                                       <textarea class="form-control" id="example-textarea" rows="5"></textarea>
                                                  </div>
                                             </div>

                                             <div class="highlight border rounded">
                                                  <div class="highlight-toolbar border-top-0">
                                                       <small class="text-uppercase">html</small>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="tab-content">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;label for=&quot;simpleinput&quot; class=&quot;form-label&quot;&gt;Text&lt;/label&gt;
                                                                           &lt;input type=&quot;text&quot; id=&quot;simpleinput&quot; class=&quot;form-control&quot;&gt;
                                                                      &lt;/div&gt;

                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;label for=&quot;example-email&quot; class=&quot;form-label&quot;&gt;Email&lt;/label&gt;
                                                                           &lt;input type=&quot;email&quot; id=&quot;example-email&quot; name=&quot;example-email&quot; class=&quot;form-control&quot; placeholder=&quot;Email&quot;&gt;
                                                                      &lt;/div&gt;

                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;label for=&quot;example-password&quot; class=&quot;form-label&quot;&gt;Password&lt;/label&gt;
                                                                           &lt;input type=&quot;password&quot; id=&quot;example-password&quot; class=&quot;form-control&quot; value=&quot;password&quot;&gt;
                                                                      &lt;/div&gt;

                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;label for=&quot;example-palaceholder&quot; class=&quot;form-label&quot;&gt;Placeholder&lt;/label&gt;
                                                                           &lt;input type=&quot;text&quot; id=&quot;example-palaceholder&quot; class=&quot;form-control&quot; placeholder=&quot;placeholder&quot;&gt;
                                                                      &lt;/div&gt;

                                                                      &lt;div class=&quot;mb-3&quot;&gt;
                                                                           &lt;label for=&quot;example-textarea&quot; class=&quot;form-label&quot;&gt;Text area&lt;/label&gt;
                                                                           &lt;textarea class=&quot;form-control&quot; id=&quot;example-textarea&quot; rows=&quot;5&quot;&gt;&lt;/textarea&gt;
                                                                      &lt;/div&gt;
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
                                        <h5 class="card-title mb-1 anchor" id="size">
                                             Input Sizing<a class="anchor-link" href="#size">#</a>
                                        </h5>
                                        <p class="text-muted">Set heights using classes like <code>.form-control-lg</code> and <code>.form-control-sm</code>.</p>
                                        <div>
                                             <div class="d-flex flex-column gap-2 mb-3 w-50">
                                                  <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                                  <input class="form-control" type="text" placeholder="Default input" aria-label="default input example">
                                                  <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                             </div>

                                             <div class="highlight border rounded">
                                                  <div class="highlight-toolbar border-top-0">
                                                       <small class="text-uppercase">html</small>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="tab-content">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;div class=&quot;d-flex flex-column gap-2 mb-3 w-50&quot;&gt;
                                                                           &lt;input class=&quot;form-control form-control-lg&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot; aria-label=&quot;.form-control-lg example&quot;&gt;
                                                                           &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot; aria-label=&quot;default input example&quot;&gt;
                                                                           &lt;input class=&quot;form-control form-control-sm&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot; aria-label=&quot;.form-control-sm example&quot;&gt;
                                                                      &lt;/div&gt;
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
                                        <h5 class="card-title mb-1 anchor" id="disabled">
                                             Disabled Input<a class="anchor-link" href="#disabled">#</a>
                                        </h5>
                                        <p class="text-muted">Add the <code>disabled</code> boolean attribute on an input to give it a grayed out appearance, remove pointer events, and prevent focusing.</p>
                                        <div>
                                             <div class="d-flex flex-column gap-2 mb-3 w-50">
                                                  <input class="form-control" type="text" placeholder="Disabled input" aria-label="Disabled input example" disabled>
                                                  <input class="form-control" type="text" value="Disabled readonly input" aria-label="Disabled input example" disabled readonly>
                                             </div>

                                             <div class="highlight border rounded">
                                                  <div class="highlight-toolbar border-top-0">
                                                       <small class="text-uppercase">html</small>
                                                       </ul>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="tab-content">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Disabled input&quot; aria-label=&quot;Disabled input example&quot; disabled&gt;
                                                                      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; value=&quot;Disabled readonly input&quot; aria-label=&quot;Disabled input example&quot; disabled readonly&gt;
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
                                        <h5 class="card-title mb-1 anchor" id="readonly">
                                             Readonly Input<a class="anchor-link" href="#readonly">#</a>
                                        </h5>
                                        <p class="text-muted">Add the <code>readonly</code> boolean attribute on an input to prevent modification of the input’s value. <code>readonly</code> inputs can still be focused and selected, while <code>disabled</code> inputs cannot.</p>
                                        <p class="text-muted">If you want to have <code>&lt;input readonly&gt;</code> elements in your form styled as plain text, replace <code>.form-control</code> with <code>.form-control-plaintext</code> to remove the default form field styling and preserve the correct <code>margin</code> and <code>padding</code>.</p>
                                        <div>
                                             <div class="d-flex flex-column gap-2 mb-3 w-50">
                                                  <input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly>
                                                  <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                             </div>

                                             <div class="highlight border rounded">
                                                  <div class="highlight-toolbar border-top-0">
                                                       <small class="text-uppercase">html</small>
                                                       </ul>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="tab-content">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;input class=&quot;form-control&quot; type=&quot;text&quot; value=&quot;Readonly input here...&quot; aria-label=&quot;readonly input example&quot; readonly&gt;
                                                                      &lt;input type=&quot;text&quot; readonly class=&quot;form-control-plaintext&quot; id=&quot;staticEmail&quot; value=&quot;email@example.com&quot;&gt;
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
                                        <h5 class="card-title mb-1 anchor" id="datalists">
                                             Datalists input<a class="anchor-link" href="#datalists">#</a>
                                        </h5>
                                        <p class="text-muted">If you want to have <code>&lt;input readonly&gt;</code> elements in your form styled as plain text, replace <code>.form-control</code> with <code>.form-control-plaintext</code> to remove the default form field styling and preserve the correct <code>margin</code> and <code>padding</code>.</p>
                                        <div>
                                             <div class="mb-3 w-50">
                                                  <label for="exampleDataList" class="form-label">Datalist example</label>
                                                  <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                                                  <datalist id="datalistOptions">
                                                       <option value="San Francisco">
                                                       <option value="New York">
                                                       <option value="Seattle">
                                                       <option value="Los Angeles">
                                                       <option value="Chicago">
                                                  </datalist>
                                             </div>

                                             <div class="highlight border rounded">
                                                  <div class="highlight-toolbar border-top-0">
                                                       <small class="text-uppercase">html</small>
                                                       </ul>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="tab-content">
                                                       <div class="code" data-simplebar>
                                                            <pre class="language-html">
                                                                 <code>
                                                                      &lt;label for=&quot;exampleDataList&quot; class=&quot;form-label&quot;&gt;Datalist example&lt;/label&gt;
                                                                      &lt;input class=&quot;form-control&quot; list=&quot;datalistOptions&quot; id=&quot;exampleDataList&quot; placeholder=&quot;Type to search...&quot;&gt;
                                                                      &lt;datalist id=&quot;datalistOptions&quot;&gt;
                                                                           &lt;option value=&quot;San Francisco&quot;&gt;
                                                                           &lt;option value=&quot;New York&quot;&gt;
                                                                           &lt;option value=&quot;Seattle&quot;&gt;
                                                                           &lt;option value=&quot;Los Angeles&quot;&gt;
                                                                           &lt;option value=&quot;Chicago&quot;&gt;
                                                                      &lt;/datalist&gt; 
                                                                 </code>
                                                            </pre>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div> <!-- end card body -->
                              </div> <!-- end card -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="select">
                                             Select<a class="anchor-link" href="#select">#</a>
                                        </h5>
                                        <p class="text-muted">Custom <code>&lt;select&gt;</code> menus need only a custom class, <code>.form-select</code> to trigger the custom styles. Custom styles are limited to the <code>&lt;select&gt;</code>’s initial appearance and cannot modify the <code>&lt;option&gt;</code>s due to browser limitations.</p>
                                        <div class="mb-3 w-50">
                                             <div class="mb-3">
                                                  <label for="example-select" class="form-label">Default Input Select</label>
                                                  <select class="form-select" id="example-select">
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
                                                       <option>4</option>
                                                       <option>5</option>
                                                  </select>
                                             </div>

                                             <p class="text-muted">The <code>multiple</code> attribute is also supported:</p>

                                             <div class="mb-3">
                                                  <label for="example-multiselect" class="form-label">Multiple Select</label>
                                                  <select id="example-multiselect" multiple="" class="form-control">
                                                       <option>1</option>
                                                       <option>2</option>
                                                       <option>3</option>
                                                       <option>4</option>
                                                       <option>5</option>
                                                  </select>
                                             </div>

                                             <p class="text-muted">As is the <code>size</code> attribute:</p>

                                             <label for="example-multiselectsize" class="form-label">Multiple Select Size</label>
                                             <select id="example-multiselectsize" class="form-select" size="3" aria-label="size 3 select example">
                                                  <option selected>Open this select menu</option>
                                                  <option value="1">One</option>
                                                  <option value="2">Two</option>
                                                  <option value="3">Three</option>
                                             </select>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;label for=&quot;example-select&quot; class=&quot;form-label&quot;&gt;Default Input Select&lt;/label&gt;
                                                            &lt;select class=&quot;form-select&quot; id=&quot;example-select&quot;&gt;
                                                                 &lt;option&gt;1&lt;/option&gt;
                                                                 &lt;option&gt;2&lt;/option&gt;
                                                                 &lt;option&gt;3&lt;/option&gt;
                                                                 &lt;option&gt;4&lt;/option&gt;
                                                                 &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                            &lt;label for=&quot;example-multiselect&quot; class=&quot;form-label&quot;&gt;Multiple Select&lt;/label&gt;
                                                            &lt;select id=&quot;example-multiselect&quot; multiple=&quot;&quot; class=&quot;form-control&quot;&gt;
                                                                 &lt;option&gt;1&lt;/option&gt;
                                                                 &lt;option&gt;2&lt;/option&gt;
                                                                 &lt;option&gt;3&lt;/option&gt;
                                                                 &lt;option&gt;4&lt;/option&gt;
                                                                 &lt;option&gt;5&lt;/option&gt;
                                                            &lt;/select&gt;
                                                            &lt;label for=&quot;example-multiselectsize&quot; class=&quot;form-label&quot;&gt;Multiple Select Size&lt;/label&gt;
                                                            &lt;select id=&quot;example-multiselectsize&quot; class=&quot;form-select&quot; size=&quot;3&quot; aria-label=&quot;size 3 select example&quot;&gt;
                                                                 &lt;option selected&gt;Open this select menu&lt;/option&gt;
                                                                 &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
                                                                 &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
                                                                 &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
                                                            &lt;/select&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div> <!-- end col -->

                         <div class="col-xl-3">
                              <div class="card docs-nav">
                                   <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                             <a href="#basic" class="nav-link"> Basic Example</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#size" class="nav-link"> Input Sizing</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#disabled" class="nav-link"> Disabled Input</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#readonly" class="nav-link"> Readonly Input</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#datalists" class="nav-link"> Datalists input</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#select" class="nav-link"> Select input</a>
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

</body>

</html>