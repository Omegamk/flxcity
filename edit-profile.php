<?php include('include/header2.php'); ?>
<section id="freelancer-portfolio-edit">
        <div class="container">
            <div class="freelancer-portfolio p-0">
               <div class="row">
                  	<div class="col-sm-12">
	                    <div class="freelancer-profile-sidebar">
                            <div class="card mb-0"> <div class="card-header">
                                 <h3 class="card-title">Edit Profile</h3>
                            </div>
                         <div class="card-body">
                             <div class="row">
                                  <div class="col-sm-6 col-md-6">
                                       <div class="form-group">
                                           <label class="form-label">First Name</label>
                                           <input type="text" class="form-control" placeholder="First Name">
                                         </div>
                                     </div>
                             <div class="col-sm-6 col-md-6">
                                 <div class="form-group"> 
                                     <label class="form-label">Last Name</label>
                                     <input type="text" class="form-control" placeholder="Last Name"> 
                                </div>
                             </div> 
                        <div class="col-sm-6 col-md-6">
                             <div class="form-group">
                                  <label class="form-label">Email address</label>
                                  <input type="email" class="form-control" placeholder="Email">
                             </div>
                         </div>
                         <div class="col-sm-6 col-md-6">
                              <div class="form-group">
                                   <label class="form-label">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Number"> 
                              </div>
                         </div> 
                         <div class="col-md-6 col-sm-6">
                              <div class="form-group">
                                   <label class="form-label">Address</label>
                                   <input type="text" class="form-control" placeholder="Home Address">
                             </div>
                         </div> 
                         <div class="col-md-3 col-sm-3">
                              <div class="form-group">
                                   <label class="form-label">Gender</label>
                                   <input type="text" class="form-control w-75" placeholder="Male / Female">
                             </div>
                         </div> 
                         
                         <div class="col-md-3 col-sm-3">
                              <div class="form-group">
                                   <label class="form-label">Date of birth</label>
                                   <input type="date" class="form-control w-75" placeholder="DOB">
                             </div>
                         </div> 
                         <div class="col-sm-6 col-md-4">
                              <div class="form-group"> 
                                <label class="form-label">City</label>
                                 <input type="text" class="form-control" placeholder="City">
                             </div> 
                        </div> 
                        <div class="col-sm-6 col-md-3">
                             <div class="form-group">
                                  <label class="form-label">Postal Code</label>
                                  <input type="number" class="form-control" placeholder="ZIP Code"> 
                            </div>
                         </div> 
                         <div class="col-md-5">
                              <div class="form-group">
                                   <p><label class="form-label">Country</label> </p>
                                   <select class="btn btn-white p-1 w-50" data-placeholder="Select" data-select2-id="3" tabindex="-1" aria-hidden="true">
                                        <optgroup label="Categories" data-select2-id="16"> 
                                        <option data-select2-id="5">--Select--</option>
                                        <option value="14" data-select2-id="30">India</option>
                                        </optgroup> 
                                  </select>
                            <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="31" style="width: 100%;">
                            <span class="selection">
                            <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-wax8-container">
                                <span class="select2-selection__arrow" role="presentation">
                                    <b role="presentation"></b>
                                </span>
                            </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true"></span>
                    </span> 
                </div>
             </div>
                        
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Facebook</label>
                                <input type="text" class="form-control" placeholder="https://www.facebook.com/">
                            </div> 
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <div class="form-group">
                                <label class="form-label">Google</label>
                                <input type="text" class="form-control" placeholder="https://www.google.com/"> 
                            </div>
                        </div>
                            <div class="col-sm-6 col-md-6 w-sm-75 w-lg-25">
                                <div class="form-group"> 
                                    <label class="form-label">Total Work Experience</label>
                                    <input type="number" class="form-control" > 
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6">
                                <label for="Category">Category</label>
                                <div class=" row justify-content-start align-items-center mt-1 ml-2">
                                <div class="form-group "> 
                                    <select id="form-category" size="1" class="btn btn-white p-1">
                                            <option value=""  selected>Choose Category</option>
                                            <option>Web developer</option>
                                            <option>Grephics Designer</option>
                                    </select>
                                     <select id="categorySelect" size="1" class="btn btn-white p-1">
                                        <option value="" >Choose Subcategory</option>
                                        <option>Front End developer</option>
                                     </select>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label class="form-label">About Me</label> 
                                    <textarea rows="5" class="form-control" placeholder="Enter About your description"></textarea> 
                                </div> 
                            </div>
                            <div class="col-md-6 col-sm-6"> 
                                <div class="form-group mb-0"> 
                                    <label class="form-label">Upload Profile Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="example-file-input-custom">
                                        <label class="custom-file-label">Choose file</label>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6"> 
                                <div class="form-group mb-0"> 
                                    <label class="form-label">Upload Cover Image</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="example-file-input-custom">
                                        <label class="custom-file-label">Choose file</label>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                            <div class="card-footer"> 
                                <button type="submit" class="btn ripple  btn-secondary">Updated Profile</button>
                                </div>
                            </div>
                     	</div>
                  	</div>
               	</div>
            </div>
        </div>
    </section>
<?php include('include/footer.php'); ?>

