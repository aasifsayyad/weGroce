<?php  $vendors=$this->db->get('tbl_vendor')->result(); ?>
<!-- Styles -->
 <section id="main-content">
        
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card alert">
                                <div class="card-body">
                                    <div class="card-header m-b-20">
                                        <h4>Add Site</h4>                                        
                                    </div>
                                </div>
                                <form action="<?php echo base_url();?>Adminity/sites/addSite" method="post">   
                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Site Name <span class="required">*</span></label>                                                    
                                            </div>
                                        </div>
                                    </div>  
                                    
                                     <div class="col-md-9">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <input type="text"  name="site_name" required="" class="form-control border-none input-flat  bg-ash" placeholder="Site Name">
                                            </div>
                                        </div>
                                    </div>  
                                    
                                    <div class="col-md-3">
                                        <div class="basic-form">
                                            <div class="form-group">
                                                    <label>Vendors <span class="required">*</span></label>                                                    
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-md-9"> 
                                                        <?php                       
                                                        foreach($vendors as $each)
                                                        { 
                                                         ?>                                         
                                                        <div class="col-md-6">                                                            
                                                        <div class="basic-form">
                                                           <div class="form-group">
                                                             <input type="checkbox" style="height: 17px;width: 17px;" name="vendor_id[]" value="<?php echo $each->vendor_id;?>"> <?php echo $each->vendor_name;?>
                                                           </div>
                                                        </div>
                                                        </div>                                                        
                                                        <?php }
                                                        ?> 
                                         </div>
                                      </div>
                                  
                                    
                                    
                                    <div class="col-md-12">
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-info btn-lg  border-none sbmt-btn"><i class="ti-save"></i> Add Site</button>
                                            <button type="button" class="btn btn-primary btn-lg border-none sbmt-btn" data-dismiss="modal"><i class="ti-close"></i> Close</button>
                                        </div>  
                                   </div>
                                </form>
                               </div>                                
                                
                            </div>
                        </div>
               
                  
                    
         
                    
   </section>

    <!-- scripit init-->
