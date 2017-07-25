<div class="container even_tab">
    <div class="row divider_row">

        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center">1</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4">
            <h4 class="text-center">2</h4>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center">3</h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4">
            <h4 class="text-center">4</h4>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center">5</h4>
        </div>
    </div>

    <?php foreach ($words as $k => $v): ?>
    <div class="row divider_row ">

        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center"><?=$v->id?></h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4">
            <h4 class="text-center"><?=$v->origWord?></h4>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center"><?=$v->origLang?></h4>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-4">
            <h4 class="text-center"><?=$v->transWord?></h4>
        </div>
        <div class="col-md-2 col-sm-4 col-xs-4">
            <h4 class="text-center"><?=$v->transLang?></h4>
        </div>
    </div>
    <?php endforeach; ?>



</div>