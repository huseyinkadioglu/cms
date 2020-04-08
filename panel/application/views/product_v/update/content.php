<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Ürün Düzenleme
        </h4>
    </div>
    <div class="col-md-12">

        <div class="widget">
            <header class="widget-header">
                <h4 class="widget-title">Ürün Düzenle</h4>
            </header><!-- .widget-header -->
            <hr class="widget-separator">
            <div class="widget-body">
                <form action="<?php echo base_url("product/save"); ?>" method="post">
                    <div class="form-group">
                        <label> Product Title </label>
                        <input name="title" class="form-control" placeholder="url" value="<?php echo $item->title; ?>">

                        <?php if(isset($form_error)) { ?>
                            <small class="input-form-error"> <?php echo form_error("title"); ?></small>
                        <?php } ?>

                    </div>
                    <div class="form-group">
                        <label>Product Description</label>

                        <textarea name="description" class="m-0" data-plugin="summernote"
                                  data-options="{height: 250}">

                            <?php echo $item->description; ?>
                        </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-md btn-outline">Save</button>
                    <a href="<?php echo base_url("product"); ?>" class="btn btn-md btn-danger btn-outline"> Cancel </a>
                </form>
            </div><!-- .widget-body -->
        </div><!-- .widget -->
    </div><!-- END column -->
</div>