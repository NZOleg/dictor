<div class="container" >
    <div class="col-md-6">
        <h2>Last Records</h2>
        <div class="row divider_row">

            <div class="col-xs-2">
                <h4 class="text-center">1</h4>
            </div>
            <div class="col-xs-3">
                <h4 class="text-center">2</h4>
            </div>
            <div class="col-xs-2">
                <h4 class="text-center">3</h4>
            </div>
            <div class="col-xs-3">
                <h4 class="text-center">4</h4>
            </div>
            <div class="col-xs-2">
                <h4 class="text-center">5</h4>
            </div>
        </div>
        <?php
        $i = 0;
        foreach (array_reverse($words) as $k => $v):
            ?>
            <div class="row divider_row ">

                <div class="col-xs-2">
                    <h4 class="text-center"><?=$v->id?></h4>
                </div>
                <div class="col-xs-3">
                    <h4 class="text-center"><?=$v->origWord?></h4>
                </div>
                <div class="col-xs-2">
                    <h4 class="text-center"><?=$v->origLang?></h4>
                </div>
                <div class="col-xs-3">
                    <h4 class="text-center"><?=$v->transWord?></h4>
                </div>
                <div class="col-xs-2">
                    <h4 class="text-center"><?=$v->transLang?></h4>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-6 text-center list">
        <h2>App's Features</h2>
        <ul>
            <li>Feature 1</li>
            <li>Feature 2</li>
            <li>Feature 3</li>
            <li>Feature 4</li>
            <li>Feature 5</li>
            <li>Feature 6</li>
        </ul>
    </div>
</div>