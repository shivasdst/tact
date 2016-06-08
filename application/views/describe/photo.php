<div class="container">
    <div class="row first-row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <ul class="list-inline sub-nav">
                <li><a href="<?=BASE_URL?>listing/albums">Albums</a></li>
                <li><a>·</a></li>
                <li><a href="<?=BASE_URL?>Publications">Publications</a></li>
                <li><a>·</a></li>
                <li><a>Search</a></li>
                <li id="searchForm">
                    <form class="navbar-form" role="search" action="<?=BASE_URL?>search/field/" method="get">
                        <div class="input-group add-on">
                            <input type="text" class="form-control" placeholder="Keywords" name="description" id="description">
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row gap-above-med">
        <div class="col-md-9">
            <ul class="pager">
                <?php if($data->neighbours['prev']) {?> 
                <li class="previous"><a href="<?=BASE_URL?>describe/photo/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['prev']?>">&lt; Previous</a></li>
                <?php } ?>
                <?php if($data->neighbours['next']) {?> 
                <li class="next"><a href="<?=BASE_URL?>describe/photo/<?=$data->albumID?>/<?=$data->albumID . '__' . $data->neighbours['next']?>">Next &gt;</a></li>
                <?php } ?>
            </ul>
            <?php $actualID = $viewHelper->getActualID($data->id); ?>
            <div class="image-full-size">
                <img class="img-responsive" src="<?=PHOTO_URL . $data->albumID . '/' . $actualID . '.JPG'?>">
            </div>
        </div>            
        <div class="col-md-3">
            <div class="image-desc-full">
                <ul class="list-unstyled">
                    <?=$viewHelper->displayFieldData($data->description)?>
                </ul>
            </div>
        </div>
    </div>
</div>
