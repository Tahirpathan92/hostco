
<?php include 'header.php'?>

            <!-- header close -->
        <!-- content begin -->
        <div class="no-bottom no-top" id="content">
            <div id="top"></div>
            
            <!-- section begin -->
            <section id="subheader" class="jarallax">
                <img src="images/background/subheader.jpg" class="jarallax-img" alt="">
                    <div class="center-y relative text-center">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 text-center">
									<h1>Modal</h1>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- section close -->
            

            <!-- section begin -->
            <section aria-label="section">
                <div class="container">
                    <div class="row g-custom-x">
                        <div class="col-md-4 mb60">
                            <h4>Modal demo</h4>
							<p>Live demo
								Toggle a working modal demo by clicking the button below. It will slide down and fade in from the top of the page.</p>
							<div class="spacer10"></div>
							
							
							<!-- Button trigger modal -->
							<button type="button" class="btn-main" data-bs-toggle="modal" data-bs-target="#exampleModal">
							  Launch demo modal
							</button>

							<!-- Modal -->
							<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        Woohoo, you're reading this text in a modal!
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn-main" data-bs-dismiss="modal">Close</button>
							        <button type="button" class="btn-main">Save changes</button>
							      </div>
							    </div>
							  </div>
							</div>
							
							
                        </div>
						
						<div class="col-md-4 mb60">
							
							<h4>Static backdrop</h4>
							<p>When backdrop is set to static, the modal will not close when clicking outside it. Click the button below to try it.

							</p>
							<div class="spacer10"></div>
						
							<!-- Button trigger modal -->
							<button type="button" class="btn-main" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
							  Launch demo modal
							</button>

							<!-- Modal -->
							<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        I will not close if you click outside me. Don't even try to press escape key.
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn-main" data-bs-dismiss="modal">Close</button>
							        <button type="button" class="btn-main">Understood</button>
							      </div>
							    </div>
							  </div>
							</div>
						
						</div>
						
						<div class="col-md-4 mb60">
							
							<h4>Scrolling long content</h4>
							<p>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.

							</p>
							<div class="spacer10"></div>

							<!-- Button trigger modal -->
							<button type="button" class="btn-main" data-bs-toggle="modal" data-bs-target="#scrollingLongContent">
							  Launch demo modal
							</button>

							<!-- Modal -->
							<div class="modal fade" id="scrollingLongContent" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollingLongContentLabel" aria-hidden="true">
							  <div class="modal-dialog">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="scrollingLongContentLabel">Modal title</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn-main" data-bs-dismiss="modal">Close</button>
							        <button type="button" class="btn-main">Understood</button>
							      </div>
							    </div>
							  </div>
							</div>							
							
						</div>
						
						<div class="col-md-4 mb60">
							
							<h4>Scrollable modal</h4>
							<p>Vertically centered scrollable modal.</p>
							<div class="spacer10"></div>

							<!-- Button trigger modal -->
							<button type="button" class="btn-main" data-bs-toggle="modal" data-bs-target="#scrollableModal">
							  Launch demo modal
							</button>

							<!-- Modal -->
							<div class="modal fade" id="scrollableModal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="scrollableModalLabel" aria-hidden="true">
							  <div class="modal-dialog modal-dialog-scrollable"">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="scrollableModalLabel">Modal title</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
									
									<p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
									
									<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
									
									<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
							      </div>
							      <div class="modal-footer">
							        <button type="button" class="btn-main" data-bs-dismiss="modal">Close</button>
							        <button type="button" class="btn-main">Understood</button>
							      </div>
							    </div>
							  </div>
							</div>		
							
							
						</div>
						
						<div class="col-md-4 mb60">
							
							<h4>Toggle between modals</h4>
							<p>Toggle between multiple modals with some clever placement of the data-bs-target and data-bs-toggle attributes.</p>
							<div class="spacer10"></div>
							
							<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
							  <div class="modal-dialog modal-dialog-centered">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalToggleLabel">Modal 1</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        Show a second modal and hide this one with the button below.
							      </div>
							      <div class="modal-footer">
							        <button class="btn-main" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
							      </div>
							    </div>
							  </div>
							</div>
							<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
							  <div class="modal-dialog modal-dialog-centered">
							    <div class="modal-content">
							      <div class="modal-header">
							        <h5 class="modal-title" id="exampleModalToggleLabel2">Modal 2</h5>
							        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							      </div>
							      <div class="modal-body">
							        Hide this modal and show the first with the button below.
							      </div>
							      <div class="modal-footer">
							        <button class="btn-main" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
							      </div>
							    </div>
							  </div>
							</div>
							<a class="btn-main" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
						
						</div>

                    </div>
                </div>
            </section>
            <!-- section close -->

        </div>
        <!-- content close -->

        <a href="#" id="back-to-top"></a>
        
        <!-- footer begin -->
<?php include 'footer.php'?>
