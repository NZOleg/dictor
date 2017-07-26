<div class="container">
    <form action="App/insertTranslation.php" method="POST">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="origWord">Original Word:</label>
                <input type="text" class="form-control" id="origWord" name="origWord">
            </div>
            <div class="form-group col-md-6">
                <label for="transWord">Translation:</label>
                <input type="text" class="form-control" id="transWord" name="transWord">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-6">
                <label for="origLang">Select list:</label>
                <select class="form-control" id="origLang" name="origLang">
                    <?php
                    foreach ($langList as $code => $lang) {
                        echo '<option value="' . $code . '">' . $lang . '</option>';
                    }
                    ?>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="transLang">Select list:</label>
                <select class="form-control" id="transLang" name="transLang">
                    <?php
                    foreach ($langList as $code => $lang) {
                        echo '<option value="' . $code . '">' . $lang . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="submit">
            <button type="submit" class="btn btn-default col-md-2 col-md-push-5">Submit</button>
        </div>
    </form>
</div>