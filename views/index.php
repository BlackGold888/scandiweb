<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<style>
    @import url('https://fonts.googleapis.com/css?family=Ubuntu');
body{
    font-family: 'Ubuntu', sans-serif;
}
    .jumbotron{
        background: linear-gradient(to bottom, #ff9933 0%, #ff99ff 100%);
        padding: 5px !important;

    }
    .jumbotron:hover{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
</style>
<body>
<header style="padding: 20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2 class="checkall">Product List</h2>
                <a href="index.php?option=add">Add product</a>



            </div>

            <div class="col-sm-4">
                <div class="form-inline">
                    <div class="form-group">
                        <label for="sel1">Select list for delete product: </label>
                        <select class="form-control" id="sel1" form="data">
                            <option value="0">Delete selected product</option>
                            <option value="1">Mass Delete Action</option>

                        </select>
                        <button class="btn btn-primary" name="test" form="data">Apply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><hr>
<section id="content">
    <div class="container-fluid">
        <div class="row">
            <form method="post" id="data">
                        <section id="panel">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-3">
<!--                                        <input class="btn btn-primary" type="submit" name="test" value="Delete">-->
                                        <? if (isset($_POST['test'])) {
                                            $delete = new View();
                                            print_r( $delete->delete_select_product($_POST));
                                            header("Location: ".$_SERVER["REQUEST_URI"]);
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </section>

                <?if($text) :?>
            <? foreach($text as $item) :?>

            <div class="col-xs-12 col-sm-4 col-md-3">
                <div class="jumbotron text-center">
                    <input class="checkbox" type="checkbox" name="<?=$item['id']?>" value="<?=$item['id']?>">
                    <h3>
                            <?=$item['sku']?>
                        </h3>
                        <p>
                            <?=$item['name'];?><br>

                        </p>
                    <p>
                        <?=$item['price'].'$';?>
                    </p>
                    <? if ($item['type'] == 1) :?>
                    <p><?='Size '.$item['size'].' MB'?></p>
                    <? endif ?>
                    <? if ($item['type'] == 2) :?>
                        <p><?='Weight '.$item['weight'].' KG'?></p>
                    <? endif ?>
                    <? if ($item['type'] == 3) :?>
                        <p><?='Dimension '.$item['height'].'x'.$item['width'].'x'.$item['length']?></p>
                    <? endif ?>

                </div>
            </div>
            <?endforeach;?>
                <?else:?>
                <h4 class="text-danger text-center">No products.</h4>
                <?endif;?>
        </div>
        </form>

    </div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>


$('#sel1').change(function() {
    if ($(this).val() === '1') {
        $(".checkbox").attr('checked',true);
    }
});
$('#sel1').change(function() {
    if ($(this).val() === '0') {
        $(".checkbox").attr('checked',false);
    }
});

</script>
</body>
</html>