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
<body>
<header style="padding: 20px">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <h2>Product Add</h2>
                <a href="index.php?option=index">Home</a>
            </div>

            <div class="col-sm-4">
                <br>
            </div>
        </div>
    </div>

</header><hr>
<!--<section id="content">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-sm-2"></div>-->
<!--            <div class="col-sm-8 offset-sm-2">-->
<!--                <div class="">-->
<!---->
<!---->
<!--                        <ul class="nav nav-pills">-->
<!--                            <li class="active"><a data-toggle="pill" href="#home">Add DVD-disc</a></li>-->
<!--                            <li><a data-toggle="pill" href="#menu1">Add Book</a></li>-->
<!--                            <li><a data-toggle="pill" href="#menu2">Furniture</a></li>-->
<!--                        </ul>-->
<!---->
<!--                        <div class="tab-content">-->
<!--                            <div id="home" class="tab-pane fade in active">-->
<!--                                <h3 class="text-center">DVD-disc</h3>-->
<!--                                <p class="text-center">Add disc product.</p>-->
<!--                                --><?//
//
//                                $db =new View();
//                                if (isset($_POST['submit1'])){
//
//                                   $res = $db->add_disc($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['size']);
//                                   // header("Location: ".$_SERVER["REQUEST_URI"]);
//                                    echo $res;
//                                }
//                                ?>
<!--                                <form action="--><?// $_SERVER["REQUEST_URI"]; ?><!--" method="post">-->
<!--                                    <div class="form-group">-->
<!--                                        <label>SKU</label>-->
<!--                                        <input type="sku" class="form-control" name="sku" >-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Name</label>-->
<!--                                        <input type="name" class="form-control" name="name">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Price</label>-->
<!--                                        <input type="price" class="form-control" name="price">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Size</label>-->
<!--                                        <input type="size" class="form-control" name="size">-->
<!--                                    </div>-->
<!--                                    <input type="submit" name="submit1" class="btn btn-primary btn-lg center-block" value="Add">-->
<!---->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div id="menu1" class="tab-pane fade">-->
<!--                                <h3>Book</h3>-->
<!--                                <p>Add Book product.</p>-->
<!--                                --><?//
//
//                                if (isset($_POST['submit2'])){
//                                    $res = $db->add_book($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['weight']);
//                                    //header("Location: index.php");
//                                    echo $res;
//                                }
//                                ?>
<!--                                <form action="--><?// $_SERVER["REQUEST_URI"]; ?><!--"  method="post">-->
<!--                                    <div class="form-group">-->
<!--                                        <label>SKU</label>-->
<!--                                        <input type="sku" class="form-control" name="sku" >-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Name</label>-->
<!--                                        <input type="name" class="form-control" name="name">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Price</label>-->
<!--                                        <input type="price" class="form-control" name="price">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Weight</label>-->
<!--                                        <input type="weight" class="form-control" name="weight">-->
<!--                                    </div>-->
<!--                                    <input type="submit" name="submit2" class="btn btn-primary btn-lg center-block" value="Send">-->
<!---->
<!--                                </form>-->
<!--                            </div>-->
<!--                            <div id="menu2" class="tab-pane fade">-->
<!--                                <h3>Furniture</h3>-->
<!--                                <p>Add furniture Product.</p>-->
<!--                                --><?//
//
//                                if (isset($_POST['submit3'])){
//
//                                    $res = $db->add_furniture($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['height'],$_POST['width'],$_POST['length']);
//                                   // header("Location: index.php");
//                                    echo $res;
//                                }
//                                ?>
<!--                                <form action="--><?// $_SERVER["REQUEST_URI"]; ?><!--"  method="post">-->
<!--                                    <div class="form-group">-->
<!--                                        <label>SKU</label>-->
<!--                                        <input type="sku" class="form-control" name="sku" >-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Name</label>-->
<!--                                        <input type="name" class="form-control" name="name">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Price</label>-->
<!--                                        <input type="price" class="form-control" name="price">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Height</label>-->
<!--                                        <input type="height" class="form-control" name="height">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Width</label>-->
<!--                                        <input type="width" class="form-control" name="width">-->
<!--                                    </div>-->
<!--                                    <div class="form-group">-->
<!--                                        <label>Length</label>-->
<!--                                        <input type="length" class="form-control" name="length">-->
<!--                                    </div>-->
<!--                                    <input type="submit" name="submit3" class="btn btn-primary btn-lg center-block" value="Send">-->
<!---->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<div class="container">
    <div class="col-sm-4">
        <div class="form-group">
            <label for="sel1">Select list:</label>
            <select class="form-control" id="sell">
                <option value="0">Disc</option>
                <option value="1">Book</option>
                <option value="2">Furniture</option>
            </select>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-8">
            <div id="content1" class="">
                <h3 class="text-center">DVD-disc</h3>
                <p class="text-center">Add disc product.</p>
                <?
                $db =new View();
                if (isset($_POST['submit1'])){

                    $res = $db->add_disc($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['size']);
                    // header("Location: ".$_SERVER["REQUEST_URI"]);
                    echo $res;
                }elseif (isset($_POST['submit2'])){
                    $res = $db->add_book($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['weight']);
                    //header("Location: index.php");
                    echo $res;
                }elseif (isset($_POST['submit3'])){

                    $res = $db->add_furniture($_POST['sku'],$_POST['name'],$_POST['price'],$_POST['height'],$_POST['width'],$_POST['length']);
                    // header("Location: index.php");
                    echo $res;
                }
                ?>
                <form action="<? $_SERVER["REQUEST_URI"]; ?>" method="post">
                    <div class="form-group">
                        <label>SKU</label>
                        <input type="sku" class="form-control" name="sku" required >
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="name" class="form-control" name="name" required>
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="price" class="form-control" name="price" required>
                    </div>
                    <div class="form-group">
                        <label>Size</label>
                        <input type="size" class="form-control" name="size" required>
                    </div>
                    <input type="submit" name="submit1" class="btn btn-primary btn-lg center-block" value="Add">

                </form>
            </div>


            <div id="content2" class="">
            <h3 class="text-center">Book</h3>
            <p class="text-center">Add Book product.</p>

            <form action="<? $_SERVER["REQUEST_URI"]; ?>"  method="post" >
                <div class="form-group">
                    <label>SKU</label>
                    <input type="sku" class="form-control" name="sku" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="price" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label>Weight</label>
                    <input type="weight" class="form-control" name="weight" required>
                </div>
                <input type="submit" name="submit2" class="btn btn-primary btn-lg center-block" value="Send">

            </form>
            </div>


            <div id="content3" class="">
            <h3 class="text-center">Furniture</h3>
            <p class="text-center">Add furniture Product.</p>

            <form action="<? $_SERVER["REQUEST_URI"]; ?>"  method="post">
                <div class="form-group">
                    <label>SKU</label>
                    <input type="sku" class="form-control" name="sku" required>
                </div>
                <div class="form-group">
                    <label>Name</label>
                    <input type="name" class="form-control" name="name" required>
                </div>
                <div class="form-group">
                    <label>Price</label>
                    <input type="price" class="form-control" name="price" required>
                </div>
                <div class="form-group">
                    <label>Height</label>
                    <input type="height" class="form-control" name="height" required>
                </div>
                <div class="form-group">
                    <label>Width</label>
                    <input type="width" class="form-control" name="width" required>
                </div>
                <div class="form-group">
                    <label>Length</label>
                    <input type="length" class="form-control" name="length" required>
                </div>
                <input type="submit" name="submit3" class="btn btn-primary btn-lg center-block" value="Send">

            </form>

            </div>
        </div>
    </div>
</div>

<footer>
    <div class="conteiner" style="padding-top: 50px; padding-bottom: 0;">
        <div class="row">
            <div class="col-sm-12">
                <div class="jumbotron text-center">
                    <p class="text-muted">By Khamid AL AKKHALI</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script>



    $(document).ready(function(){

        $("#content2").hide();
        $("#content3").hide();
    });

    $("#sell").change(function () {
        if($(this).val() == '0'){
            $("#content1").show();
            $("#content3").hide();
            $("#content2").hide();
        }
        if ($(this).val() == '1'){
            $("#content2").show();
            $("#content3").hide();
            $("#content1").hide();
        }
        if ($(this).val() == '2'){
            $("#content3").show();
            $("#content2").hide();
            $("#content1").hide();
        }
    });


</script>
</body>
</html>