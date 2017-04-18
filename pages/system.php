<div class="container" style="padding-top: 2em">
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' )
        {
            $_SESSION['definition']['emailInput'] = ($_POST['emailInput']) ? $_POST['emailInput'] : null;
            $_SESSION['definition']['zipInput'] = ($_POST['zipInput']) ? $_POST['zipInput'] : null;
            $_SESSION['definition']['orderInput'] = ($_POST['orderInput']) ? $_POST['orderInput'] : null;
            $_SESSION['definition']['domain'] = ($_POST['domain']) ? $_POST['domain'] : null;
            $_SESSION['definition']['zip'] = ($_POST['zip']) ? $_POST['zip'] : null;
            $_SESSION['definition']['order'] = ($_POST['order']) ? $_POST['order'] : null;
         }
     ?>

    <h2>Configure Form Asset</h2>
    <hr>
    <strong>Form sample preview</strong>
    <form action="<?php echo $PHP_SELF;?>" method="post">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" name="emailInput" value="dr.jim.alhadi@uf.org" class="form-control" id="inputEmail3" placeholder="Email" maxlength="50">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputZip" class="col-sm-2 col-form-label">Zip Code</label>
            <div class="col-sm-10">
                <input type="number" name="zipInput"  value="33130" class="form-control" id="inputZip" placeholder="Zip code" max="99999">
            </div>
        </div>
        <div class="form-group row">
            <label for="inputOrder" class="col-sm-2 col-form-label">Order</label>
            <div class="col-sm-10">
                <input type="number" name="orderInput"  value="5" class="form-control" id="inputOrder" placeholder="Order" maxlength="2">
            </div>
        </div>

        <hr>
        <div class="form-group row">
            <label class="col-sm-2">Domains (+1)</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="domain" class="form-check-input" type="checkbox"> Raise flag when domain does not
                        match
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Zip codes (+1)</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="zip" form-check-input" type="checkbox"> Raise flag on suspicious zipcodes
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2">Orders (+2)</label>
            <div class="col-sm-10">
                <div class="form-check">
                    <label class="form-check-label">
                        <input name="order" class="form-check-input" type="checkbox"> Raise flag when ordering more than
                        (100)
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <div class="offset-sm-2 col-sm-10">
                <button type="submit" value="system" class="btn btn-primary">Save preferences</button>
            <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' ) : ?>
                &nbsp;&rarr;<a href="?page=manager" class="btn btn-secondary" role="button" aria-pressed="true">Go to Manager section to load your orders</a>
            <?php endif; ?>
            </div>
        </div>
    </form>
</div>