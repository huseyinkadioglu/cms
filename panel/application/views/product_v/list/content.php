<div class="row">
    <div class="col-md-12">
        <h4 class="m-b-lg">
            Product List
            <a href=" <?php echo base_url("product/new_form"); ?>"
               class="btn btn-outline btn-primary btn-sm pull-right">
                <i class="fa fa-plus"></i> Yeni Ekle </a>

        </h4>
    </div>
    <div class="col-md-12">
        <div class="widget p-lg">
            <?php if (empty($items)) { ?>

                <div class="alert alert-info text-center alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                                aria-hidden="true">&times;</span></button>
                    <p>Burada herhangi bir veri bulunmamaktadır.Eklemek için Add butonuna
                        <a href=" <?php echo base_url("product/new_form"); ?>" tıklayınız </a>

                    </p>
                </div>
            <?php } else { ?>

                <table class="table table-hover table-striped">
                    <thead>
                    <th>#id</th>
                    <th>url</th>
                    <th>Başlık</th>
                    <th>Açıklama</th>
                    <th>Durum</th>
                    <th>İşlem</th>
                    </thead>
                    <tbody>
                    <?php foreach ($items as $item) { ?>

                        <tr>
                            <td> <?php echo $item->id; ?>  </td>
                            <td><?php echo $item->url; ?></td>
                            <td> <?php echo $item->title; ?> </td>
                            <td><?php echo $item->description; ?></td>
                            <td>

                                <input
                                        data-url="<?php echo base_url("product/isActiveSetter/$item->id"); ?>"
                                        data
                                        class="isActive"
                                        type="checkbox"
                                        data-switchery
                                        data-color="#10c469"
                                    <?php echo ($item->isActive) ? "checked" : ""; ?> />


                            </td>
                            <td>
                                <button data-url="<?php echo base_url("product/delete/$item->id"); ?>"
                                 class="btn btn-xs btn-danger btn-outline remove-btn"><i class="fa fa-trash"></i> Sil
                                </button>
                                <button data-url="<?php echo base_url("product/update_form/$item->id"); ?>"
                                     class="btn btn-xs btn-info btn-outline update-btn">
                                    <i class="fa fa-pencil"></i> Düzenle
                                </button>
                                <a href="<?php echo base_url("product/image_form/$item->id"); ?>"
                                   class="btn btn-xs btn-dark btn-outline"><i class="fa fa-image"></i> Resimler
                                </a>
                            </td>
                        </tr>

                    <?php } ?>

                    </tbody>
                </table>
            <?php } ?>
        </div><!-- .widget -->
    </div><!-- END column -->
</div>