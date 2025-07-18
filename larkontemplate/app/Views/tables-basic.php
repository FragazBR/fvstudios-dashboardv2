<!DOCTYPE html>
<html lang="en">

<head>
     <?php echo view("partials/title-meta", array("title" => "Basic Tables")) ?>

     <?= $this->include("partials/head-css") ?>
</head>

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <?php echo view("partials/topbar", array("title" => "Basic Tables")) ?>
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
                                             Basic Example <a class="anchor-link" href="#basic">#</a>
                                        </h5>
                                        <p class="text-muted font-14"> For basic styling—light padding and only horizontal dividers—add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="inverse">
                                             Variants <a class="anchor-link" href="#inverse">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use contextual classes to color tables, table rows or individual cells.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">Class</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>Default</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>

                                                       <tr class="table-primary">
                                                            <td>Primary</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-secondary">
                                                            <td>Secondary</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-success">
                                                            <td>Success</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-danger">
                                                            <td>Danger</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-warning">
                                                            <td>Warning</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-info">
                                                            <td>Info</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-light">
                                                            <td>Light</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr class="table-dark">
                                                            <td>Dark</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>
                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Class&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;Default&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;

                                                                      &lt;tr class=&quot;table-primary&quot;&gt;
                                                                           &lt;td&gt;Primary&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-secondary&quot;&gt;
                                                                           &lt;td&gt;Secondary&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-success&quot;&gt;
                                                                           &lt;td&gt;Success&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-danger&quot;&gt;
                                                                           &lt;td&gt;Danger&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-warning&quot;&gt;
                                                                           &lt;td&gt;Warning&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-info&quot;&gt;
                                                                           &lt;td&gt;Info&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-light&quot;&gt;
                                                                           &lt;td&gt;Light&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-dark&quot;&gt;
                                                                           &lt;td&gt;Dark&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;td&gt;Cell&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt; 
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">Striped Rows Table <a class="anchor-link" href="#striped">#</a></h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">
                                             Striped Rows Table Dark <a class="anchor-link" href="#striped">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-dark .table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="striped">
                                             Striped Rows Table Success <a class="anchor-link" href="#striped">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-success .table-striped</code> to add zebra-striping to any table row
                                             within the <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-success table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td> Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-success table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt; Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns <a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-dark .table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-dark table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Striped columns Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Use <code>.table-success .table-striped-columns </code>to add zebra-striping to any table column.
                                        </p>
                                        <div class="table-responsive-sm">
                                             <table class="table table-success table-striped-columns table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-success table-striped-columns table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="hoverable-row">
                                             Hoverable rows <a class="anchor-link" href="#hoverable-row">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-hover table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-hover table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Hoverable rows Dark <a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-dark .table-hover</code> to enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-hover table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-hover table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="active">
                                             Active Tables <a class="anchor-link" href="#active">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Highlight a table row or cell by adding a <code>.table-active</code> class.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="table-active">
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td class="table-active">Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td class=&quot;table-active&quot;&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Active Tables Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Highlight a table row or cell by adding a <code>.table-dark .table-active</code> class.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-dark table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr class="table-active">
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td class="table-active">Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td class=&quot;table-active&quot;&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="bordered">
                                             Bordered Table <a class="anchor-link" href="#bordered">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-bordered</code> for borders on all sides of the table and cells.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="border-color">
                                             Bordered color Table <a class="anchor-link" href="#border-color">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-bordered</code> & <code>.border-primary</code> can be added to change colors.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-bordered border-primary table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered border-primary table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="borderless">
                                             Tables without borders <a class="anchor-link" href="#borderless">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-borderless</code> for a table without borders..
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-borderless table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-borderless table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor">
                                             Tables without borders Dark<a class="anchor-link" href="#!">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-borderless</code> <code>.table-dark</code> for a table without borders and dark table.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-borderless table-dark table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-borderless table-dark table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="small">
                                             Small tables <a class="anchor-link" href="#small">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-sm </code>to make any .table more compact by cutting all cell padding in half.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-sm">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-sm&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="small">
                                             Small Tables Dark<a class="anchor-link" href="#small">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Add <code>.table-sm </code> <code>.table-dark </code>to make any .table more compact by cutting all cell padding in half.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-dark table-sm">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-dark table-sm&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="dividers">
                                             Table group dividers <a class="anchor-link" href="#borderless">#</a>
                                        </h5>
                                        <p class="text-muted font-14"> Add a thicker border, darker between table groups—<code>&lt;thead&gt;</code>, <code>&lt;tbody&gt;</code>, and <code>&lt;tfoot&gt;</code>—with <code>.table-group-divider</code>. Customize the color by changing the <code>border-top-color</code> (which we don’t currently provide a utility class for at this time).
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody class="table-group-divider">
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody class=&quot;table-group-divider&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="alignment">
                                             Vertical alignment <a class="anchor-link" href="#alignment">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Table cells of <code>&lt;thead&gt;</code> are always vertical aligned to the bottom. Table cells in <code>&lt;tbody&gt;</code> inherit their alignment from <code>&lt;table&gt;</code> and are aligned to the top by default. Use the <a href="/docs/5.3/utilities/vertical-align/">vertical align</a> classes to re-align where needed.
                                        </p>
                                        <div class="">
                                             <div class="table-responsive">
                                                  <table class="table align-middle table-centered">
                                                       <thead>
                                                            <tr>
                                                                 <th scope="col" class="w-25">Heading 1</th>
                                                                 <th scope="col" class="w-25">Heading 2</th>
                                                                 <th scope="col" class="w-25">Heading 3</th>
                                                                 <th scope="col" class="w-25">Heading 4</th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                            <tr class="align-bottom">
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This cell inherits <code>vertical-align: bottom;</code> from the table row</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                            <tr>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td>This cell inherits <code>vertical-align: middle;</code> from the table</td>
                                                                 <td class="align-top">This cell is aligned to the top.</td>
                                                                 <td>This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.</td>
                                                            </tr>
                                                       </tbody>
                                                  </table>
                                             </div>

                                             <div class="highlight">
                                                  <div class="highlight-toolbar">
                                                       <small class="text-uppercase">html</small>
                                                       <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                                  </div>
                                                  <div class="code" data-simplebar>
                                                       <pre class="language-html">
                                                            <code>
                                                                 &lt;table class=&quot;table align-middle table-centered&quot;&gt;
                                                                      &lt;thead&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 1&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 2&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 3&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot; class=&quot;w-25&quot;&gt;Heading 4&lt;/th&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/thead&gt;
                                                                      &lt;tbody&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr class=&quot;align-bottom&quot;&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from the table row&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from the table&lt;/td&gt;
                                                                                &lt;td class=&quot;align-top&quot;&gt;This cell is aligned to the top.&lt;/td&gt;
                                                                                &lt;td&gt;This here is some placeholder text, intended to take up quite a bit of vertical space, to demonstrate how the vertical alignment works in the preceding cells.&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/tbody&gt;
                                                                 &lt;/table&gt;
                                                            </code>
                                                       </pre>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                              </div>

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="nesting">
                                             Nesting Table <a class="anchor-link" href="#nesting">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Border styles, active styles, and table variants are not inherited by nested tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan="4">
                                                                 <table class="table mb-0">
                                                                      <thead>
                                                                           <tr>
                                                                                <th scope="col">Header</th>
                                                                                <th scope="col">Header</th>
                                                                                <th scope="col">Header</th>
                                                                           </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                           <tr>
                                                                                <td>A</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>B</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>C</td>
                                                                                <td>First</td>
                                                                                <td>Last</td>
                                                                           </tr>
                                                                      </tbody>
                                                                 </table>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td colspan=&quot;4&quot;&gt;
                                                                                &lt;table class=&quot;table mb-0&quot;&gt;
                                                                                     &lt;thead&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Header&lt;/th&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/thead&gt;
                                                                                     &lt;tbody&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;A&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;B&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;C&lt;/td&gt;
                                                                                               &lt;td&gt;First&lt;/td&gt;
                                                                                               &lt;td&gt;Last&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/tbody&gt;
                                                                                &lt;/table&gt;
                                                                           &lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="head-option">
                                             Table head <a class="anchor-link" href="#head-option">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Similar to tables and dark tables, use the modifier classes <code>.table-light</code>to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="tablehead">
                                             Table head Dark<a class="anchor-link" href="#tablehead">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Similar to tables and dark tables, use the modifier classes <code>.table-dark</code> to make <code>&lt;thead&gt;</code>s appear light or dark gray.
                                        </p>

                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <thead class="table-dark">
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-dark&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->


                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="tablefoot">
                                             Table foot<a class="anchor-link" href="#tablefoot">#</a>
                                        </h5>
                                        <div class="mt-2 table-responsive">
                                             <table class="table table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                                  <tfoot>
                                                       <tr>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                            <td>Footer</td>
                                                       </tr>
                                                  </tfoot>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                                 &lt;tfoot&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                           &lt;td&gt;Footer&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tfoot&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="captions">
                                             Captions<a class="anchor-link" href="#captions">#</a>
                                        </h5>
                                        <p class="text-muted font-14">A <code>&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
                                        <div class="table-responsive">
                                             <table class="table table-centered">
                                                  <caption>List of users</caption>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry the Bird</td>
                                                            <td>Simsons</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-centered&quot;&gt;
                                                                 &lt;caption&gt;List of users&lt;/caption&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry the Bird&lt;/td&gt;
                                                                           &lt;td&gt;Simsons&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="captions">
                                             Captions<a class="anchor-link" href="#captions">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             You can also put the <code>&lt;caption&gt;</code> on the top of the table with <code>.caption-top</code>
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table caption-top table-centered">
                                                  <caption>List of users</caption>
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">First</th>
                                                            <th scope="col">Last</th>
                                                            <th scope="col">Handle</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Mark</td>
                                                            <td>Otto</td>
                                                            <td>@mdo</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Jacob</td>
                                                            <td>Thornton</td>
                                                            <td>@fat</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Larry</td>
                                                            <td>the Bird</td>
                                                            <td>@twitter</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table caption-top table-centered&quot;&gt;
                                                                 &lt;caption&gt;List of users&lt;/caption&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;1&lt;/td&gt;
                                                                           &lt;td&gt;Mark&lt;/td&gt;
                                                                           &lt;td&gt;Otto&lt;/td&gt;
                                                                           &lt;td&gt;@mdo&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;2&lt;/td&gt;
                                                                           &lt;td&gt;Jacob&lt;/td&gt;
                                                                           &lt;td&gt;Thornton&lt;/td&gt;
                                                                           &lt;td&gt;@fat&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;3&lt;/td&gt;
                                                                           &lt;td&gt;Larry&lt;/td&gt;
                                                                           &lt;td&gt;the Bird&lt;/td&gt;
                                                                           &lt;td&gt;@twitter&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->

                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             Always responsive <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Across every breakpoint, use <code>.table-responsive</code> for horizontally scrolling tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                            <th scope="col">Heading</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>1</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr>
                                                            <td>2</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                       <tr>
                                                            <td>3</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                            <td>Cell</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;div class=&quot;table-responsive&quot;&gt;
                                                                 &lt;table class=&quot;table&quot;&gt;
                                                                      &lt;thead&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                                &lt;th scope=&quot;col&quot;&gt;Heading&lt;/th&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/thead&gt;
                                                                      &lt;tbody&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;1&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;2&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                           &lt;tr&gt;
                                                                                &lt;td&gt;3&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                                &lt;td&gt;Cell&lt;/td&gt;
                                                                           &lt;/tr&gt;
                                                                      &lt;/tbody&gt;
                                                                 &lt;/table&gt;
                                                            &lt;/div&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             With avatars <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             A list of all the users in your account including their name, title, email and role.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-hover table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="/images/users/avatar-2.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0"> Tony M. Carter</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Designer</td>
                                                            <td>tonymcarter@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="/images/users/avatar-1.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">James E. Chamb</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>UI/UX Designer</td>
                                                            <td>jamesechambliss@teleworm.us</td>
                                                            <td>Admin</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="/images/users/avatar-4.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">Charlotte J. Torres</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Copywriter</td>
                                                            <td>charlotte@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>

                                                       </tr>
                                                       <tr class="table-active">
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0 d-flex align-items-center gap-1">Mary J. Germain<i class='bx bxs-badge-check text-success'></i></iconify-icon></h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Full Stack</td>
                                                            <td>maryjgermain@jourrapide.com</td>
                                                            <td>CEO</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="d-flex align-items-center gap-1">
                                                                      <img src="/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                      <div class="d-block">
                                                                           <h5 class="mb-0">Kevin C. Reyes</h5>
                                                                      </div>
                                                                 </div>
                                                            </td>
                                                            <td>Director of Product</td>
                                                            <td>kevincreyes@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-hover table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Title&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Email&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Action&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/images/users/avatar-2.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt; Tony M. Carter&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Designer&lt;/td&gt;
                                                                           &lt;td&gt;tonymcarter@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/images/users/avatar-1.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;James E. Chamb&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;UI/UX Designer&lt;/td&gt;
                                                                           &lt;td&gt;jamesechambliss@teleworm.us&lt;/td&gt;
                                                                           &lt;td&gt;Admin&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/images/users/avatar-4.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;Charlotte J. Torres&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Copywriter&lt;/td&gt;
                                                                           &lt;td&gt;charlotte@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
               
                                                                      &lt;/tr&gt;
                                                                      &lt;tr class=&quot;table-active&quot;&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0 d-flex align-items-center gap-1&quot;&gt;Mary J. Germain&lt;i class='bx bxs-badge-check text-success'&gt;&lt;/i&gt;&lt;/iconify-icon&gt;&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Full Stack&lt;/td&gt;
                                                                           &lt;td&gt;maryjgermain@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;CEO&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                     &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                     &lt;div class=&quot;d-block&quot;&gt;
                                                                                          &lt;h5 class=&quot;mb-0&quot;&gt;Kevin C. Reyes&lt;/h5&gt;
                                                                                     &lt;/div&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Director of Product&lt;/td&gt;
                                                                           &lt;td&gt;kevincreyes@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="responsive">
                                             With checkboxes <a class="anchor-link" href="#responsive">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             A list of all the users in your account including their name, title, email and role.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-striped table-borderless table-centered">
                                                  <thead class="table-light">
                                                       <tr>
                                                            <th scope="col">
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                                 </div>
                                                            </th>
                                                            <th scope="col">Name</th>
                                                            <th scope="col">Title</th>
                                                            <th scope="col">Email</th>
                                                            <th scope="col">Role</th>
                                                            <th scope="col">Action</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                                 </div>
                                                            </td>
                                                            <td> Tony M. Carter </td>
                                                            <td>Designer</td>
                                                            <td>tonymcarter@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                                 </div>
                                                            </td>
                                                            <td>James E. Chamb</td>
                                                            <td>UI/UX Designer</td>
                                                            <td>jamesechambliss@teleworm.us</td>
                                                            <td>Admin</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                                 </div>
                                                            </td>
                                                            <td> Charlotte J. Torres </td>
                                                            <td>Copywriter</td>
                                                            <td>charlotte@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>

                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                                 </div>
                                                            </td>
                                                            <td>
                                                                 Mary J. Germain <i class='bx bxs-badge-check text-success'></i></iconify-icon>
                                                            </td>
                                                            <td>Full Stack</td>
                                                            <td>maryjgermain@jourrapide.com</td>
                                                            <td>CEO</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                       <tr>
                                                            <td>
                                                                 <div class="form-check">
                                                                      <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                                 </div>
                                                            </td>
                                                            <td>Kevin C. Reyes</td>
                                                            <td>Director of Product</td>
                                                            <td>kevincreyes@jourrapide.com</td>
                                                            <td>Member</td>
                                                            <td><a href="#!" class="btn btn-primary btn-sm w-100">Edit</a></td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-striped table-borderless table-centered&quot;&gt;
                                                                 &lt;thead class=&quot;table-light&quot;&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault5&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Name&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Title&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Email&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Role&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Action&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt; Tony M. Carter &lt;/td&gt;
                                                                           &lt;td&gt;Designer&lt;/td&gt;
                                                                           &lt;td&gt;tonymcarter@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault2&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;James E. Chamb&lt;/td&gt;
                                                                           &lt;td&gt;UI/UX Designer&lt;/td&gt;
                                                                           &lt;td&gt;jamesechambliss@teleworm.us&lt;/td&gt;
                                                                           &lt;td&gt;Admin&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault3&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt; Charlotte J. Torres &lt;/td&gt;
                                                                           &lt;td&gt;Copywriter&lt;/td&gt;
                                                                           &lt;td&gt;charlotte@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;

                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault4&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;
                                                                                Mary J. Germain &lt;i class='bx bxs-badge-check text-success'&gt;&lt;/i&gt;&lt;/iconify-icon&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Full Stack&lt;/td&gt;
                                                                           &lt;td&gt;maryjgermain@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;CEO&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;
                                                                                &lt;div class=&quot;form-check&quot;&gt;
                                                                                     &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;flexCheckDefault5&quot;&gt;
                                                                                &lt;/div&gt;
                                                                           &lt;/td&gt;
                                                                           &lt;td&gt;Kevin C. Reyes&lt;/td&gt;
                                                                           &lt;td&gt;Director of Product&lt;/td&gt;
                                                                           &lt;td&gt;kevincreyes@jourrapide.com&lt;/td&gt;
                                                                           &lt;td&gt;Member&lt;/td&gt;
                                                                           &lt;td&gt;&lt;a href=&quot;#!&quot; class=&quot;btn btn-primary btn-sm w-100&quot;&gt;Edit&lt;/a&gt;&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                              <div class="card">
                                   <div class="card-body">
                                        <h5 class="card-title mb-1 anchor" id="nesting1">
                                             Nesting Table <a class="anchor-link" href="#nesting1">#</a>
                                        </h5>
                                        <p class="text-muted font-14">
                                             Border styles, active styles, and table variants are not inherited by nested tables.
                                        </p>
                                        <div class="table-responsive">
                                             <table class="table table-bordered table-striped table-centered">
                                                  <thead>
                                                       <tr>
                                                            <th scope="col">Invoice Number</th>
                                                            <th scope="col">Invoice Amount</th>
                                                            <th scope="col">Confirmation by the client</th>
                                                            <th scope="col">Planned payment date</th>
                                                       </tr>
                                                  </thead>
                                                  <tbody>
                                                       <tr>
                                                            <td>F-011221/21</td>
                                                            <td>$ 879.500</td>
                                                            <td>11/05/2023</td>
                                                            <td>12/05/2023</td>
                                                       </tr>
                                                       <tr>
                                                            <td colspan="4">
                                                                 <table class="table mb-0">
                                                                      <thead>
                                                                           <tr>
                                                                                <th scope="col">ERP number</th>
                                                                                <th scope="col">Carrier legal entity</th>
                                                                                <th scope="col">Responsible logistician</th>
                                                                                <th scope="col">Status</th>
                                                                           </tr>
                                                                      </thead>
                                                                      <tbody>
                                                                           <tr>
                                                                                <td>3-128-3</td>
                                                                                <td>ToBrookfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="/images/users/avatar-7.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Kevin C. Reyes</h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-success-subtle text-success py-1 px-2">Verified</span></td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>3-128-2</td>
                                                                                <td>Brookfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="/images/users/avatar-6.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Mary J. Germain</h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-warning-subtle text-warning py-1 px-2">Pending</span></td>
                                                                           </tr>
                                                                           <tr>
                                                                                <td>3-128-1</td>
                                                                                <td>Westfield Asset Management</td>
                                                                                <td>
                                                                                     <div class="d-flex align-items-center gap-1">
                                                                                          <img src="/images/users/avatar-8.jpg" alt="" class="avatar-sm rounded-circle">
                                                                                          <div class="d-block">
                                                                                               <h5 class="mb-0">Charlotte J. Torres
                                                                                               </h5>
                                                                                          </div>
                                                                                     </div>
                                                                                </td>
                                                                                <td><span class="badge bg-danger-subtle text-danger py-1 px-2">Rejected</span></td>
                                                                           </tr>
                                                                      </tbody>
                                                                 </table>
                                                            </td>
                                                       </tr>
                                                       <tr>
                                                            <td>F-011221/19</td>
                                                            <td>$ 93.250</td>
                                                            <td>9/05/2023</td>
                                                            <td>10/05/2023</td>
                                                       </tr>
                                                  </tbody>
                                             </table>
                                        </div>

                                        <div class="highlight">
                                             <div class="highlight-toolbar">
                                                  <small class="text-uppercase">html</small>
                                                  <button class="btn btn-sm btn-outline-success btn-copy-clipboard" data-clipboard-action="copy">Copy</button>
                                             </div>
                                             <div class="code" data-simplebar>
                                                  <pre class="language-html">
                                                       <code>
                                                            &lt;table class=&quot;table table-bordered table-striped table-centered&quot;&gt;
                                                                 &lt;thead&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Invoice Number&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Invoice Amount&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Confirmation by the client&lt;/th&gt;
                                                                           &lt;th scope=&quot;col&quot;&gt;Planned payment date&lt;/th&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/thead&gt;
                                                                 &lt;tbody&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;F-011221/21&lt;/td&gt;
                                                                           &lt;td&gt;$ 879.500&lt;/td&gt;
                                                                           &lt;td&gt;11/05/2023&lt;/td&gt;
                                                                           &lt;td&gt;12/05/2023&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td colspan=&quot;4&quot;&gt;
                                                                                &lt;table class=&quot;table mb-0&quot;&gt;
                                                                                     &lt;thead&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;ERP number&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Carrier legal entity&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Responsible logistician&lt;/th&gt;
                                                                                               &lt;th scope=&quot;col&quot;&gt;Status&lt;/th&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/thead&gt;
                                                                                     &lt;tbody&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-3&lt;/td&gt;
                                                                                               &lt;td&gt;ToBrookfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/images/users/avatar-7.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Kevin C. Reyes&lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-success-subtle text-success py-1 px-2&quot;&gt;Verified&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-2&lt;/td&gt;
                                                                                               &lt;td&gt;Brookfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/images/users/avatar-6.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Mary J. Germain&lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-warning-subtle text-warning py-1 px-2&quot;&gt;Pending&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                          &lt;tr&gt;
                                                                                               &lt;td&gt;3-128-1&lt;/td&gt;
                                                                                               &lt;td&gt;Westfield Asset Management&lt;/td&gt;
                                                                                               &lt;td&gt;
                                                                                                    &lt;div class=&quot;d-flex align-items-center gap-1&quot;&gt;
                                                                                                         &lt;img src=&quot;assets/images/users/avatar-8.jpg&quot; alt=&quot;&quot; class=&quot;avatar-sm rounded-circle&quot;&gt;
                                                                                                         &lt;div class=&quot;d-block&quot;&gt;
                                                                                                              &lt;h5 class=&quot;mb-0&quot;&gt;Charlotte J. Torres
                                                                                                              &lt;/h5&gt;
                                                                                                         &lt;/div&gt;
                                                                                                    &lt;/div&gt;
                                                                                               &lt;/td&gt;
                                                                                               &lt;td&gt;&lt;span class=&quot;badge bg-danger-subtle text-danger py-1 px-2&quot;&gt;Rejected&lt;/span&gt;&lt;/td&gt;
                                                                                          &lt;/tr&gt;
                                                                                     &lt;/tbody&gt;
                                                                                &lt;/table&gt;
                                                                           &lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                      &lt;tr&gt;
                                                                           &lt;td&gt;F-011221/19&lt;/td&gt;
                                                                           &lt;td&gt;$ 93.250&lt;/td&gt;
                                                                           &lt;td&gt;9/05/2023&lt;/td&gt;
                                                                           &lt;td&gt;10/05/2023&lt;/td&gt;
                                                                      &lt;/tr&gt;
                                                                 &lt;/tbody&gt;
                                                            &lt;/table&gt;
                                                       </code>
                                                  </pre>
                                             </div>
                                        </div>
                                   </div>
                              </div> <!-- end card body -->
                         </div> <!-- end col -->

                         <div class="col-xl-3">
                              <div class="card docs-nav">
                                   <ul class="nav bg-transparent flex-column">
                                        <li class="nav-item">
                                             <a href="#basic" class="nav-link">Basic Example </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#inverse" class="nav-link">Inverse Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#striped" class="nav-link">Striped Rows Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#hoverable-row" class="nav-link">Hoverable rows </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#active" class="nav-link">Active Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#bordered" class="nav-link">Bordered Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#border-color" class="nav-link">Bordered color Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#borderless" class="nav-link">Basic Borderless Example </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#small" class="nav-link">Small Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#alignment " class="nav-link">Alignment Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#nesting" class="nav-link">Nesting Table </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#head-option" class="nav-link">Table head options </a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#tablefoot" class="nav-link">Tablefoot</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#captions" class="nav-link">Captions</a>
                                        </li>
                                        <li class="nav-item">
                                             <a href="#responsive" class="nav-link">Always Responsive Table </a>
                                        </li>

                                   </ul>
                              </div>
                         </div>
                    </div> <!-- end row -->
               </div>
               <!-- End Container Fluid -->

               <!-- ==================================================== -->
               <!-- End Page Content -->
               <!-- ==================================================== -->

               <?= $this->include("partials/footer") ?>
          </div>

     </div>
     <!-- END Wrapper -->

     <?= $this->include("partials/vendor-scripts") ?>

</body>

</html>