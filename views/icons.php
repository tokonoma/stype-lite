<div class="container mt-4">
    <h5>24PX SERIES</h5>
    <div class="row">

        <?php foreach($icons24 as $icon24): ?>
        <!--PHP FOR LOOP-->

        <?php
            $iconname = pathinfo(basename($icon24), PATHINFO_FILENAME);
            foreach ($iconsiterator as $key => $val) {
                if(is_array($val)) {
                    //echo "Just a Key - $key"."</br>";
                    
                } else {
                    //echo "This is a key val pair - $key => $val"."</br>";
                }
            }  
        ?>

        <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-3">
            <div id ="<?php echo $iconname; ?>" class="card">
                <div class="card-body text-center">
                    <img src="<?php echo $icon24; ?>" height="24px" width="24px">
                    <p class="iconname">
                        <?php echo $iconname; ?>
                    </p>
                </div>
                <div class="card-footer stype">
                    <div class="footergroup">
                        <form id="new-budget-form" method="POST" action="<?php echo $baseurl; ?>">
                            <div class="footerheader d-block">
                                <span>Category</span>
                                <button type="button" class="btn btn-link pull-right category-edit">
                                    Edit&nbsp;&nbsp;<i class="fa fa-edit" aria-hidden="true"></i>
                                </button>
                                <button type="button" class="btn btn-link text-secondary pull-right ml-2 d-none category-cancel">
                                    Cancel
                                </button>
                                <button type="submit" class="btn btn-link pull-right d-none category-submit">
                                    Save
                                </button>
                            </div>

                            <div class="categorylabelgroup">
                                <?php if(empty($iconcat)): ?>
                                <!--PHP IF-->

                                <div class="empty-state">
                                    no category specified
                                </div>

                                <?php else: ?>

                                <div class="badge badge-pill badge-info">
                                    <?php echo $iconcat; ?>
                                </div>

                                <!--PHP END IF-->
                                <?php endif ?>
                            </div>

                            <div class="form-group d-none categoryinputgroup">
                                <input type="hidden" name="iconname" value="<?php echo $iconname; ?>">
                                <input type="hidden" name="iconpath" value="<?php echo $icon24; ?>">
                                <input type="text" class="form-control" id="categoryinput-<?php echo $iconname; ?>" name="categoryinput" placeholder="Category Label" value="<?php echo $iconcat; ?>">
                            </div>
                        </form>
                    </div>
                    <div class="footergroup">
                        <div class="footerheader d-block">
                            <span>Size</span>
                            <a href="#tagmodal" class="pull-right">
                                Edit&nbsp;&nbsp;<i class="fa fa-edit" aria-hidden="true"></i>
                            </a>
                        </div>

                        <?php if(empty($iconsize)): ?>
                        <!--PHP IF-->

                        <div class="empty-state">
                            no size specified
                        </div>

                        <?php else: ?>

                        <div class="badge badge-pill badge-info">
                            <?php echo $iconsize; ?>
                        </div>

                        <!--PHP END IF-->
                        <?php endif ?>

                    </div>
                    <div class="footergroup">
                        <div class="footerheader d-block">
                            <span>Tags</span>
                            <a href="#tagmodal" class="pull-right">
                                Add&nbsp;&nbsp;<i class="fa fa-plus" aria-hidden="true"></i>
                            </a>
                        </div>

                        <?php if(empty($icontags)): ?>
                        <!--PHP IF-->

                        <div class="empty-state">
                            no tags added
                        </div>

                        <?php else: ?>

                            <?php foreach($icontags->children() as $icontag): ?>
                            <!--PHP FOR LOOP-->

                            <div class="badge badge-pill badge-secondary">
                                <?php echo $icontag; ?>
                                <i class="fa fa-times" aria-hidden="true"></i>
                            </div>

                            <!--PHP END FOR LOOP-->
                            <?php endforeach ?>

                        <!--PHP END IF-->
                        <?php endif ?>

                    </div>
                </div>
            </div>
        </div> <!-- /col -->

        <!--PHP END FOR LOOP-->
        <?php endforeach ?>

    </div> <!-- /row -->
</div> <!-- /container -->